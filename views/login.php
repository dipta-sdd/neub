<?php include_once 'navbar.php';  ?>

        <div class=" col-lg-9 col-md-7 left p-0 pe-2">
          <div class="body p-2">
            <nav class="breadcrumb p-2 rounded-2">
              <a class="breadcrumb-item" href="#">Home</a>
              <!-- <a class="breadcrumb-item" href="#">Sub</a> -->
              <span class="breadcrumb-item active" aria-current="page">Log In</span>
            </nav>
            
            <div class="row ps-3">
              <div class="col-md-6">
                <form id="form_login" >
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID or Username</label>
                    <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" >
                  </div>
                  <div class="mb-3">
                    <p class=" text-danger" id="error_login"></p>
                  </div>
                  <button type="submit" class="btn btn-primary" id="button_login">Submit</button> 
                  <label class="form-label ms-2">Don't have an account?  <a class="text-decoration-none" href="../signup.html">Sign up</a> Now</label>
                </form>
              </div>
            </div>
            

          </div>
        </div>
 <?php include_once 'body_mid.php';  ?>

  <script>

    $(document).ready(function(){
      $.ajax({
        type: "POST",
        url: "../database/get_user.php",
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
      
    
    
    
    //login button
      $('#error_login').hide();
      $('#button_login').click(function( e){
        e.preventDefault();
        $.ajax({
          type: "POST",
          url: "../database/login.php",
          data: $('#form_login').serialize(),
          success: function (response) {
            var data=JSON.parse(response);
            if(data.status){
              location.replace("/");
            } else{
              $('#error_login').text("* "+ data.error);
              $('#error_login').slideDown();
            }
          }
        });
      });
    
    
    
    });
      </script>   
<?php include_once 'body_last.php';  ?>


