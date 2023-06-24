<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Student</a>
      <span class="breadcrumb-item active" aria-current="page"> Course Registration</span>
    </nav>
    <div class="row ps-3">
      <div class="col-md-2 pb-2">
        <label for="semester_f" class="form-label  fw-bold">Semester</label>
        <select id="semester_f" class="form-select shadow-sm" >
          <option selected>Choose..</option>
          <option value="1">1 st</option>
          <option value="2">2 nd</option>
          <option value="3">3 rd</option>
          <option value="4">4 th</option>
          <option value="5">5 th</option>
          <option value="6">6 th</option>
          <option value="7">7 th</option>
          <option value="8">8 th</option>
          <option value="9">9 th</option>
          <option value="10">10 th</option>
          <option value="11">11 th</option>
          <option value="12">12 th</option>
        </select> 
      </div>
      <div class="table-responsive-md" id="div_course_offered">
        <h5 class="text-center">Course Offered 
          <div class="spinner-border spinner-border-sm text-primary m3" role="status" id="loading_course_offered">
            <span class="visually-hidden">Loading...</span>
          </div>
        </h5>
        <table class="table
        table-hover	
        table-bordered
        align-middle">
          <thead class="">
            <caption>Offered Course</caption>
            <tr>
              <th scope="col">Course Code</th>
              <th scope="col">Course Title</th>
              <th scope="col">Credit</th>
              <th scope="col">Course Teacher</th>
            </tr>
          </thead>
          <tbody class="table-group-divider" id="tbody_course_offered">
            
          </tbody>
          <tfoot>
            
          </tfoot>
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
        <button class="btn btn-primary float-left" id="button_register">
                Register
        </button>
      </div>


    </div>
  </div>
</div>
 <?php include_once 'body_mid.php';  ?>
 <script>
$(document).ready(function(){

  loadNav();
  //drop down menu on mbl device
 
  function dropMBL(id){
    alert('hi');
    $(id).toggleClass("ddm_show");
  }

  // page personal script
  // load taken course of the student
  $.ajax({
    type: "GET",
    url: "../database/course_taken_std.php",
    success: function (response) {
      var course= JSON.parse(response);
      async : false ,
      course.forEach(data => {
        $(div_course_offered).empty();
        $(div_course_offered).html('');
        course_taken_online_updated_flag= true;
        $(semester_f).prop('disabled','disabled');
        row = createRow2(
          data.course_offer_id,
          data.course_id,
          data.course_tittle,
          data.course_credit,
          data.tch_name,
          data.reg_status
        );
      $(tbody_course_taken).append(row);
      });
    }
  });
  // semester valuee change
  $(semester_f).on('change', function () {
    $(tbody_course_offered).html('');
    $.ajax({
      type: "POST",
      url: "../database/course_offered_sem.php",
      data: {
        semester : $(semester_f).val()
      },
      success: function (response) {
        $(loading_course_offered).addClass('d-none');
        var course_list = JSON.parse(response);
        console.log(course_list)
        course_list.forEach(course => {
          row = createRow(
            course.course_offer_id,
            course.course_id,
            course.course_tittle,
            course.course_credit,
            course.tch_name
          );
          $(tbody_course_offered).append(row);
        });
      }
    });
  });
  var course_taken_online_updated_flag = false;
  // clicked on an offerd course
  $(document).on('click', '.row_course_offered', function(event) {
    var row= $(this);
    row.removeClass('row_course_offerd');
    row.addClass('row_course_taken');
    $(tbody_course_taken).append(row);
  });

  // clicked on an taken course
  $(document).on('click', '.row_course_taken', function(event) {
    if(!course_taken_online_updated_flag){
      var row= $(this);
      row.removeClass('row_course_taken');
      row.addClass('row_course_offered');
      $(tbody_course_offered).append(row);
    }
  });

  function createRow(id, code, title, credit, teacher){
    var row=`
    <tr class="row_course_offered" role="button" id="${id}">
      <td class="code" scope="row">${code}</td>
      <td>${title}</td>
      <td>${credit}</td>
      <td>${teacher}</td>
    </tr>
    `;
    return row;
  }
  // color array for taken course
  var color ={
    Approved : 'text-success',
    Pending : 'text-primary',
  };
  // console.log(color.Approved);
  // create row for taken course 
  function createRow2(id, code, title, credit, teacher, status){
    // console.log(color[status]);
    var row=`
    <tr class="row_course_taken ${color[status]}" role="button" id="${id}">
      <td class="code" scope="row">${code}</td>
      <td>${title}</td>
      <td>${credit}</td>
      <td>${teacher}</td>
      <td>${status}</td>
    </tr>
    `;
    console.log(row);
    return row;
  }

  // click on reg button
  $(document).on('click', '#button_register', function(event){
    event.preventDefault();
    var course = [];
    $('#tbody_course_taken tr').each(function() {
      var course_offer_id = $(this).attr('id');
      course.push(course_offer_id);
    });
    // console.log(course);
    $.ajax({
      type: "POST",
      url: "../database/course_registration.php",
      data: {
        course_offer_id : course
      },
      success: function (response) {
        console.log(response)
        var status= JSON.parse(response);
        status.forEach(course => {
          if(course.status == 'Pending'){
            $(`#${course.id}`).append(`
            <td>${course.status}</td>
          `);
          }
        });
      }
    });
  });
  // get all id of the 
  // $('#tbody_course_offered tr').each(function() {
        //   var rowId = $(this).attr('id');
        //   console.log(rowId);
        // });
});
</script>
<?php include_once 'body_last.php';  ?>


