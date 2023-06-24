<?php include_once 'navbar.php';  ?>
<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2  shadow-lg">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Teacher</a>
      <span class="breadcrumb-item active" aria-current="page" id="cur_page">Course Registration</span>
    </nav>
    <div class="sign_up_std m-3">
      <div class="row">
        <!-- your body  -->
        <div class="col-md-2">
          <label for="session" class="form-label">Session</label>
          <select id="session" class="form-select">
          </select>
        </div>
        <div class="col-md-2">
          <label for="semester_f" class="form-label">Semester</label>
          <select id="semester_f" class="form-select">
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
        <div class="input-group mb-3 mt-3">
          <input type="text" id="course_code_search" class="form-control" placeholder="Course Code" aria-label="Course Code" aria-describedby="btn_add">
          <input type="text" id="course_teacher_search" class="form-control" placeholder="Course Teacher" aria-label="Course Teacher" aria-describedby="btn_add">
          <button class="btn btn-outline-secondary" type="button" id="btn_add">Add</button>
        </div>
        <div class="alert shadow mb-2 d-none" id="div1">
          <div class="text-success"> <b> Semester : 1st</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody1">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div2">
          <div class="text-success"> <b> Semester : 2nd</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody2">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div3">
          <div class="text-success"> <b> Semester : 3st</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody3">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div4">
          <div class="text-success"> <b> Semester : 4th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody4">
            </tbody>
          </table>
        </div> 
        <div class="alert shadow mb-2 d-none" id="div5">
          <div class="text-success"> <b> Semester : 5th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody5">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div6">
          <div class="text-success"> <b> Semester : 6th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody6">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div7">
          <div class="text-success"> <b> Semester : 7th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody7">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div8">
          <div class="text-success"> <b> Semester : 8th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody8">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div9">
          <div class="text-success"> <b> Semester : 9th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody9">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div10">
          <div class="text-success"> <b> Semester : 10th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody10">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div11">
          <div class="text-success"> <b> Semester : 11th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody11">
            </tbody>
          </table>
        </div>
        <div class="alert shadow mb-2 d-none" id="div12">
          <div class="text-success"> <b> Semester : 12th</b><b class="ms-5">Session :</b> <b class="current_session_from_server"></b> </div>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Title</th>
                <th scope="col">Credit</th>
                <th scope="col">Course Teacher</th>
              </tr>
            </thead>
            <tbody id="tbody12">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'body_mid.php';  ?>

  <script>
$(document).ready(function(){
  reqTeacher();
  loadNav();
  var user ;
  user =current_user(user);
  console.log(user);
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
 
  // loading offered course
  $.ajax({
      type: "GET",
      url: "../database/course_offered_dept.php",
      success: function (response) {
        var course_offer = JSON.parse(response);
        // console.log(course_offer);
        course_offer.forEach(course => {
          create_row(
            course.course_offer_id,
            course.course_id,
            course.course_tittle,
            course.course_credit,
            course.tch_name,
            course.semester,
          );
          
        });
      }
    });

//suggesstion-box
  $(course_code_search).keyup(function (e) { 
    $.ajax({
      type: "POST",
      url: "../database/course_code_auto.php",
      data: {
        id:$('#course_code_search').val()
      },
      success: function (response) {
        data= JSON.parse(response);
        // console.log(data);
        $( "#course_code_search" ).autocomplete({
          source: data
        });
      }
    });
  });
  $(course_teacher_search).keyup(function (e) { 
    console.log('called');
    $.ajax({
      type: "POST",
      url: "../database/auto_com_teacher.php",
      data: {
        id:$('#course_teacher_search').val()
      },
      success: function (response) {
        data= JSON.parse(response);
        // console.log(data);
        $( "#course_teacher_search" ).autocomplete({
          source: data
        });
      }
    });
  });
  // adding course on button click
  $(btn_add).click(function (e) { 
    e.preventDefault();
    console.log('btn add clicked');
    var course_code= $(course_code_search).val();
    course_code = course_code.slice(0,7);
    console.log('code = '+course_code);

    var course_teacher= $(course_teacher_search).val();
    console.log(course_teacher);
    let course_teacher_length = course_teacher.length;
    let index_of_desh= course_teacher.indexOf('-');
    course_teacher_id = course_teacher.slice(index_of_desh+1,course_teacher_length);
    console.log('teacher id = '+course_teacher_id);
    let semester= $(semester_f).val();
    console.log('semester = '+ semester);
    $.ajax({
      type: "POST",
      url: "../database/course_offer_add.php",
      data: {
        'semester' : semester,
        'course_id' : course_code,
        'teacher_id' : course_teacher_id
      },
      success: function (response) {
        var course_offer = JSON.parse(response);
        console.log(course_offer);
        create_row(
          course_offer.course_offer_id,
          course_offer.course_id,
          course_offer.course_tittle,
          course_offer.course_credit,
          course_offer.tch_name,
          semester
          );
      }
    });
  });
  var visibility = [
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0,
    0
  ];
  function create_row(course_offer_id,course_code,course_title,course_credit,course_teacher,semester){
    console.log('create row');
    console.log(semester);
    var table=[
      '#tbody',
      '#tbody1',
      '#tbody2',
      '#tbody3',
      '#tbody4',
      '#tbody5',
      '#tbody6',
      '#tbody7',
      '#tbody8',
      '#tbody9',
      '#tbody10',
      '#tbody11',
      '#tbody12',
    ];
    var div=[
      '#div',
      '#div1',
      '#div2',
      '#div3',
      '#div4',
      '#div5',
      '#div6',
      '#div7',
      '#div8',
      '#div9',
      '#div10',
      '#div11',
      '#div12',
    ];
    var row= `
    <tr>
      <td scope="row">${course_code}</td>
      <td>${course_title}</td>
      <td>${course_credit}</td>
      <td>${course_teacher}</td>
    </tr>
    `;
    $(table[semester]).append(row);
    if(visibility[semester] == 0){
      visibility[semester]++;
      $(div[semester]).removeClass('d-none');
      console.log(visibility[semester]);
    } else {
      visibility[semester]++;
      console.log(visibility[semester]);
    }
    
  }


});
    </script>
    
<?php include_once 'body_last.php';  ?>
