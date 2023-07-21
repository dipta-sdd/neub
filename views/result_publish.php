<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <!-- <a class="breadcrumb-item" href="#">Sub</a> -->
      <span class="breadcrumb-item active" aria-current="page"> Reslut Publish</span>
    </nav>
    <div class="row ps-3">
      <div class="col-md-2">
        <label for="session" class="form-label">Session</label>
        <select id="session" class="form-select">
        </select>
      </div>
      <div class="col-md-4">
        <label for="course" class="form-label">Select Course</label>
        <select id="course" class="form-select">
          <option selected="" value="0">Choose a Course</option>
        </select>
      </div>
      <div class="table-responsive-md" id="">
        <h5 class="text-center">Student List
        </h5>
        <table class="table
          table-hover	
          table-bordered
          align-middle">
          <thead class="">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">GPA</th>
            </tr>
          </thead>
          <tbody class="table-group-divider" id="tbody_std_list">
          </tbody>
          <tfoot>
          </tfoot>
        </table>
        <button type="button" name="" id="button_submit" class="me-3 btn btn-primary">Submit</button>
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
 $.ajax({  url: "../database/current_session.php",success: function (response) {
      var session= JSON.parse(response)
      $('#session').html('<option selected>'+session.session_n+'</option>');
      $(".current_session_from_server").text(session.session_n);
    }
  });

  // load couse list
  $.ajax({
    type: "POST",
    url: "../database/result_upload_course_list.php",
    success: function (response) {
      datas = JSON.parse(response);
      datas.forEach(data => {
        create_option(
          data.course_offer_id,
          data.course_id,
          data.course_tittle
        );
      });
    }
  });

  // create option for course select
  function create_option(course_offer_id, course_id, course_tittle){
    let row = `
    <option value="${course_offer_id}" >${course_tittle} ( ${course_id} )</option>
    `;
    $(course).append(row);
  }
  // om course change
  $(document).on('change','#course',function(){
    let course_offer_id = $(course).val();
    $(tbody_std_list).empty();
    if(course_offer_id != 0){
      $.ajax({
        type: "POST",
        url: "../database/result_upload_student_list.php",
        data: {
          course_offer_id : course_offer_id 
        },
        success: function (response) {
          let studets = JSON.parse(response);
          // console.log(studets);
          studets.forEach(student => {
            $(tbody_std_list).append(
              create_row(student)
            );
          });
        }
      });
    }

  });

  // create row
  function create_row(student){
    if(student.gpa == null){
      return `
        <tr id="${student.std_id}">
          <td>${student.std_id}</td>
          <td>${student.std_name}</td>
          <td class="w-25"><input type="number" class="form-control" placeholder="GPA" id="gpa_${student.std_id}"></td>
        </tr>
      `;
    } else {
      return `
        <tr id="${student.std_id}">
          <td>${student.std_id}</td>
          <td>${student.std_name}</td>
          <td class="w-25"><input type="number" class="form-control" placeholder="GPA" id="gpa_${student.std_id}" value="${student.gpa}" disabled></td>
        </tr>
      `;
    }
  }

  // submit button click
  $(button_submit).click(function (e) { 
    e.preventDefault();
    let course_offer_id = $(course).val();
    let error = 0;
    var results = [];
    $('#tbody_std_list tr').each(function() {
      var std_id = $(this).attr('id');
      var gpa = $('#gpa_'+std_id).val();
      if (gpa == '' || gpa >4.00) {
        error++;
        $('#gpa_'+std_id).addClass('is-invalid');
      } else{
        $('#gpa_'+std_id).removeClass('is-invalid');
      }
      results.push( {
        'std_id' : std_id,
        'gpa' : gpa
      } );
    });
    console.log(results);
    $.ajax({
      type: "POST",
      url: "../database/result_upload.php",
      async : false,
      data: {
        'course_offer_id' : course_offer_id,
        'results' : results
      },
      success: function (response) {
        $.ajax({
          type: "POST",
          url: "../database/result_upload_student_list.php",
          data: {
            course_offer_id : course_offer_id 
          },
          success: function (response) {
            $(tbody_std_list).empty();
            let studets = JSON.parse(response);
            // console.log(studets);
            studets.forEach(student => {
              $(tbody_std_list).append(
                create_row(student)
              );
            });
          }
        });
      }
    });
  });




});
</script>
<?php include_once 'body_last.php';  ?>


