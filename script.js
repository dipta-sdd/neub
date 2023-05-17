
  // function dropMBL(id){
  //   if(document.querySelector(id).classList.contains('ddm_show')){
  //     document.querySelector(id).classList.remove('ddm_show');
  //   }else{
  //     document.querySelector(id).classList.add('ddm_show');
  //   }
  // }

 function hhh(){
  console.log('external js loaded');
 }

  // slider
  const myCarouselElement = document.querySelector('#carouselExample')
  const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 2000,
    touch: false
  })

  //nav bar setup
  function loadNav(){
    $('#nav_li_tp').hide(); 
    console.log('nav');
    $.ajax({
      url: "./database/get_user.php",
      success: function (response) {
        var user=JSON.parse(response);
        if(user.status){
          $("#nav_login").text("Logout");
          $("#nav_login").attr('href', './database/logout.php');
          if(user.type == 'teacher'){
            // alert('hi');
            $('#nav_li_tp').show();
          }
         } 
         else {
          $("#nav_login").append(`
            <ul class=" ddmu" id="ddms">
              <li class="ddml"><a href="./signup.html" class="ddma">Sign Up</a></li>
            </ul>
          `);
        }
      }
    });
  
  }
 
  // // login 
  // function logout() {
  //   location.replace("http://127.0.0.1/neub/index.html");
  // }

  // // check login status and set login or logout at menu
  // $.ajax({
  //   url: "menu_log.php",
  //   success: function (response) {
  //     $('#nav_menu').append(response);
  //   }
  // });


  // // login or logout check menu load 
  // function logStatus(id){
  //   $.ajax({
  //     url: "./database/menu_log.php",
  //     success: function (response) {
  //       $(id).append(response);
  //     }
  //   });
  // }



