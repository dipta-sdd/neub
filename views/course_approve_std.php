<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <!-- <a class="breadcrumb-item" href="#">Sub</a> -->
      <span class="breadcrumb-item active" aria-current="page"> tmp</span>
    </nav>
    <div class="row ps-3">
      <!-- <div class="col-1"><b>Name :</b></div>
      <div class="col-11"></div>
      <div class="col-1"><b>ID :</b></div>
      <div class="col-11">210203020007</div> -->

      <div class="table-responsive">
        <table class="table w-auto">
          <tbody>
            <tr>
              <td scope="row"><b>Name</b></td><td><b>:</b></td>
              <td id="stdName"></td>
            </tr>
            <tr>
              <td scope="row"><b>ID</b></td><td><b>:</b></td>
              <td id="stdId"></td>
            </tr>
            <tr>
              <td scope="row"><b>
                Semester
              </b></td><td><b>:</b></td>
              <td id="stdSemester">

              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="table-responsive-md">
        <h5 class="text-center">Course Taken
        </h5>
        <table class="table
        table-hover	
        table-bordered
        align-middle">
          <thead class="">
            <caption>Offered Taken</caption>
            <tr>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit</th>
              <th scope="col">Course Teacher</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody class="table-group-divider" id="tbody_course_taken">
            
          </tbody>
          <tfoot>
            
          </tfoot>
        </table>
        <!-- <button class="btn btn-dark float-left" id="button_register">
        <i class="fa-light fa-print"></i>
        </button> -->
      </div>
      

    </div>
  </div>
</div>
 <?php include_once 'body_mid.php';  ?>
 <script>
$(document).ready(function(){

  loadNav();
 // page personal script
 // Sample URL
  const url = window.location.href;
  // Extract the value after the hyphen
  const value = url.split('-')[1];
  // Log the extracted value
  console.log(value);
  // load std details
  $.ajax({
    type: "POST",
    url: "../database/course_taken_std.php",
    data:{
      std_id : value
    },
    success: function (response) {
      var datas = JSON.parse(response);
      var row= datas[1];
      // console.log(row);
      $(stdName).text(row.std_name);
      $(stdId).text(row.std_id);
      $(stdSemester).text(row.semester);
      console.log(datas);
      datas.forEach(data => {
        row = createRow2(
            data.course_offer_id,
            data.course_id,
            data.course_tittle,
            data.course_credit,
            data.tch_name,
            data.reg_status,
            data.std_id
          );
        $(tbody_course_taken).append(row);
      });
    }
  });
  // load prev and next id
  $.ajax({
    type: "POST",
    url: "../database/course_taken_all_pending_next_prev.php",
    data: {
      'std_id' :value
    },
    success: function (response) {
      
    }
  });
  
  //  hover on button
  $(document).on('mouseenter', '.button', function(event){
    $(this).addClass('fa-beat');
  });
  $(document).on('mouseleave', '.button', function(event){
    $(this).removeClass('fa-beat');
  });
  // click on button approve
  $(document).on('click', '.button', function(event){
    var td = $(this).parent();
    var tr = td.parent();
    let course_offer_id = tr.attr('id');
    let std_id = tr.attr("std_id");
    let status = $(this).attr('status');
    // console.log(status);
    $.ajax({
      type: "POST",
      url: "../database/course_reg_status_update.php",
      async : true,
      data: {
        'course_offer_id' : course_offer_id,
        'std_id' : std_id,
        'status' : status
      },
      success: function (response) {
        let datas= JSON.parse(response);
        let data = datas[0];
        let labelID = '#'+data.course_offer_id +'b';
        console.log(labelID);
        $(labelID).text(data.reg_status);
        console.log(data);
      }
    });
  });
  // button
  var btn ={
    Approved : 'text-success',
    Pending : '<button type="button" class="btn btn-primary btn-sm"> Pending </button>',
  };
  // create row for taken course 
  function createRow2(id, code, title, credit, teacher, status, std_id){
    // console.log(color[status]);
    var row=`
    <tr class="row_course_taken " role="button" id="${id}" std_id="${std_id}">
      <td class="code" scope="row">${code}</td>
      <td>${title}</td>
      <td>${credit}</td>
      <td>${teacher}</td>
      <td >
        <i class="fa-solid fa-check fa-xl button" style="color: #005af5;" rule="button" status="Approved" > <label> Approve </label> </i>
        <label id="${id}b">${status}</label>
        <i class="fa-solid fa-xmark fa-xl button" style="color: #ff0000;" rule="button" status="Rejected" > <label> Cancel </label> </i>
      </td>
    </tr>
    `;
    console.log(row);
    return row;
  }

});
</script>
<?php include_once 'body_last.php';  ?>


