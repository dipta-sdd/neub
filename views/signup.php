<?php include_once 'navbar.php';  ?>

        <div class=" col-lg-9 col-md-7 left p-0 pe-2">



          <div class="body p-2  shadow-lg">
            <nav class="breadcrumb p-2 rounded-2">
              <a class="breadcrumb-item" href="#">Home</a>
              <a class="breadcrumb-item" href="#">Sign Up</a>
              <span class="breadcrumb-item active" aria-current="page" id="cur_page">Student</span>
            </nav>
            <div class="sign_up_std m-4">
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="" id="cb_std" value="student">
              <label class="form-check-label" for="">Student</label>
              </div>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="" id="cb_tch" value="teacher">
              <label class="form-check-label" for="">Teacher</label>
              </div>





              <form class="row g-3" id="form_signup_std">
                <div class="col-md-6">
                  <label class="form-label">Name </label>
                  <label class="form-label msg" id="signup_err_std_name"> *</label>
                  <input type="text" class="form-control" name="name" id="signup_name">
                </div>

                <div class="col-md-6">
                  <label class="form-label">ID </label>
                  <label class="form-label msg" id="signup_err_std_id"> *</label>
                  <input type="text" class="form-control" name="id" id="signup_id">
                </div>


                <div class="col-md-6">
                  <label class="form-label">Password </label>
                  <label class="form-label msg" id="signup_err_std_pass"> *</label>
                  <input type="password" class="form-control" name="pass" id="signup_pass">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Retype Password </label>
                  <label class="form-label msg" id="signup_err_std_pass2"> *</label>
                  <input type="password" class="form-control" name="pass2" id="signup_pass2">
                </div>


                <div class="col-md-8">
                  <label class="form-label">Department </label>
                  <label class="form-label msg" id="signup_err_std_dept"> *</label>
                  <select class="form-select" name="dept" id="signup_dept">
                    <option selected value="0">Choose...</option>

                  </select>
                </div> <div class="col-md-4 m-0"></div>

                <div class="col-md-4 ">
                  <label class="form-label">Session </label>
                  <label class="form-label msg" id="signup_err_std_session"> *</label>
                  <select class="form-select" name="session" id="signup_session">
                    <option selected value="0">Choose</option>
                  </select>
                </div><div class="col-md-8"></div>

                <div class="col-md-4">
                  <label class="form-label">Mobile</label>
                  <label class="form-label msg" id="signup_err_std_mobile"></label>
                  <input type="text" class="form-control" name="mobile" id="signup_mobile">
                </div><div class="col-md-2"></div>

                <div class="col-md-5">
                  <label class="form-label">Email</label>
                  <label class="form-label msg" id="signup_err_std_email"></label>
                  <input type="email" class="form-control" name="email" id="signup_email">
                </div><div class="col-md-6 m-0"></div>

                <div class="col-md-10">
                  <label class="form-label"> Address</label>
                  <label class="form-label msg" id="signup_err_std_address"></label>
                  <input type="text" class="form-control" name="address" id="signup_address">
                </div><div class="col-md-2 m-0"></div>

                
                
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" id="button_signup">Sign up</button>
                  <label class="form-label ms-2">Already have an account?  <a class="text-decoration-none" href="../login.html">Log in</a> Now</label>
                </div>
              </form>



              <form class="row g-3" id="form_signup_tch">
                <div class="col-md-6">
                  <label class="form-label">Name </label>
                  <label class="form-label msg" id="signup_err_tch_name"> *</label>
                  <input type="text" class="form-control" name="name" id="signup_tch_name">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Username </label>
                  <label class="form-label msg" id="signup_err_tch_username"> *</label>
                  <input type="text" class="form-control" name="username" id="signup_tch_username">
                </div>


                <div class="col-md-6">
                  <label class="form-label">Password </label>
                  <label class="form-label msg" id="signup_err_tch_pass"> *</label>
                  <input type="password" class="form-control" name="pass" id="signup_tch_pass">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Retype Password </label>
                  <label class="form-label msg" id="signup_err_tch_pass2"> *</label>
                  <input type="password" class="form-control" name="pass2" id="signup_tch_pass2">
                </div>


                <div class="col-md-8">
                  <label class="form-label">Department </label>
                  <label class="form-label msg" id="signup_err_tch_dept"> *</label>
                  <select class="form-select" name="dept" id="signup_tch_dept">
                    <option selected value="0">Choose</option>

                  </select>
                </div> <div class="col-md-4 m-0"></div>

                

                <div class="col-md-4">
                  <label class="form-label">Mobile</label>
                  <label class="form-label msg" id="signup_err_tch_mobile"></label>
                  <input type="text" class="form-control" name="mobile" id="signup_tch_mobile">
                </div><div class="col-md-2"></div>

                <div class="col-md-5">
                  <label class="form-label">Email</label>
                  <label class="form-label msg" id="signup_err_tch_email"></label>
                  <input type="email" class="form-control" name="email" id="signup_tch_email">
                </div><div class="col-md-6 m-0"></div>

                <div class="col-md-10">
                  <label class="form-label"> Address</label>
                  <label class="form-label msg" id="signup_err_tch_address"></label>
                  <input type="text" class="form-control" name="address" id="signup_tch_address">
                </div><div class="col-md-2 m-0"></div>

                
                
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" id="button_tch_signup">Sign up</button>
                  <label class="form-label ms-2">Already have an account?  <a class="text-decoration-none" href="../login.html">Log in</a> Now</label>
                </div>
              </form>
              

            </div>

          </div>
        </div>

        <?php include_once 'body_mid.php';  ?>


        <script>
    $(document).ready(function(){
      // check login status
      $.ajax({
        type: "POST",
        url: "../get_user.php",
        success: function (response) {
          var data= JSON.parse(response);
          if(data.status){
            location.replace("../index.html");
          }
        }
      });
      loadNav();
      //drop down menu on mbl device
      function dropMBL(id){
        alert('hi');
        $(id).toggleClass("ddm_show");
      }
      
    
      // loading dept list
      $.ajax({
        url: "../database/dept_list.php",
        success: function (response) {
          var data= JSON.parse(response);
          // console.log(data);
          data.forEach(dept => {
            $("#signup_dept").append(`
              <option value="${dept.dept_id}">${dept.dept_name}</option>
            `);
            $("#signup_tch_dept").append(`
              <option value="${dept.dept_id}">${dept.dept_name}</option>
            `);
          });
        }
      });
      //loading session list
      $.ajax({
        url: "../database/session.php",
        success: function (response) {
          var data= JSON.parse(response);
          // console.log(data);
          data.forEach(session => {
            $("#signup_session").append(`
              <option value="${session.session_id}">${session.session_n}</option>
            `);
          });
        }
      });
      
      //on click signup
      $('#button_signup').click(function (e) { 
        e.preventDefault();
        var err=false;
        if(!$("#signup_name").val() || $("#signup_name").val()==" "){
          $("#signup_err_std_name").text("* Name cannot be empty");
          err=true;
        } else{
          $("#signup_err_std_name").text("*");
        }
    
        if(!$("#signup_id").val() || $("#signup_id").val()==" "){
          $("#signup_err_std_id").text("* ID cannot be empty");
          err=true;
        } else{
          $("#signup_err_std_id").text("*");
        }
    
        if(!$("#signup_pass").val() || $("#signup_pass").val()==" "){
          $("#signup_err_std_pass").text("* Password cannot be empty");
          err=true;
        } else{
          $("#signup_err_std_pass").text("*");
        }
    
        if( !$("#signup_pass2").val()  ||$( "#signup_pass2").val() != $("#signup_pass").val() ){
          $("#signup_err_std_pass2").text("* Password must be same");
          err=true;
        } else{
          $("#signup_err_std_pass2").text("*");
        }
    
        if( $("#signup_dept").val()=="0"){
          $("#signup_err_std_dept").text("* Select department");
          err=true;
        } else{
          $("#signup_err_std_dept").text("*");
        }
    
        if($("#signup_session").val()=="0"){
          $("#signup_err_std_session").text("* Select session");
          err=true;
        } else{
          $("#signup_err_std_session").text("*");
        }
        if(err== false){
          $.ajax({
            type: "POST",
            url: "../database/signup.php",
            data: $('#form_signup_std').serialize(),
            success: function (response) {
              var data=JSON.parse(response);
            if(data.status){
              alert('done');
            }
            },
            error: function(response){
              alert('wrong');
            }
          });
        }
    
    
        
      });
    //onclick sifn up teacher
      $("#button_tch_signup").click(function (e) { 
        e.preventDefault();
        var err=false;
        if(!$("#signup_tch_name").val() || $("#signup_tch_name").val()==" "){
          $("#signup_err_tch_name").text("* Name cannot be empty");
          err=true;
          } else{
          $("#signup_err_tch_name").text("*");
        }
        if(!$("#signup_tch_username").val() || $("#signup_tch_username").val()==" "){
          $("#signup_err_tch_username").text("* ID cannot be empty");
          err=true;
        } else{
          $("#signup_err_tch_username").text("*");
        }
        if(!$("#signup_tch_pass").val() || $("#signup_tch_pass").val()==" "){
          $("#signup_err_tch_pass").text("* Password cannot be empty");
          err=true;
          } else{
          $("#signup_err_tch_pass").text("*");
        }
        if( !$("#signup_tch_pass2").val()  ||$( "#signup_tch_pass2").val() != $("#signup_tch_pass").val() ){
          $("#signup_err_tch_pass2").text("* Password must be same");
          err=true;
          } else{
          $("#signup_err_tch_pass2").text("*");
        }
        if( $("#signup_tch_dept").val()=="0"){
          $("#signup_err_tch_dept").text("* Select department");
          err=true;
        } else{
          $("#signup_err_tch_dept").text("*");
        }
        if(err==false){
          $.ajax({
            type: "POST",
            url: "../database/signup_tch.php",
            data: $('#form_signup_tch').serialize(),
            success: function (response) {
              var data=JSON.parse(response);
            if(data.status){
              alert('done');
            }
            },
            error: function(response){
              alert('wrong');
            }
          });
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        
      });
      
      $("#form_signup_std").hide();
      $("#form_signup_tch").hide();
      //type change std tchr
      var speed =500;
      $('#cb_std').click(function (e) { 
        if($(this).is(':checked')){
          $("#cur_page").text('Student');
          $("#form_signup_tch").fadeOut(speed);
          $("#form_signup_std").fadeIn(speed);
          $('#cb_tch').prop('checked',false);
        }
      });
      $('#cb_tch').click(function (e) { 
        if($(this).is(':checked')){
          $("#cur_page").text('Teacher');
          $("#form_signup_std").fadeOut(speed);
          $("#form_signup_tch").fadeIn(speed);
          $('#cb_std').prop('checked',false);
        }
      });
    
    
    
    });
    
    
      </script>
      
    


      <?php include_once 'body_last.php';  ?>
