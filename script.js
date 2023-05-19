
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

  function current_user(user){
    console.log('called current user');
    $.ajax({
      url: "./database/get_user.php",
      async: false,
      success: function (response) {
        user= JSON.parse(response);
      }
    });
    return user;
    console.log(user);
  }
  //nav bar setup
  function loadNav(){
    var myUser;
    console.log('nav');
    $.ajax({
      url: "./database/get_user.php",
      async: false,
      success: function (response) {
        myUser=JSON.parse(response);
        if(myUser.status){
          $('#nav_li_logout').removeClass('d-none');
          if(myUser.type == 'teacher'){
            $('#nav_li_tp').removeClass('d-none');
          }
         } 
         else {
          $('#nav_li_login').removeClass('d-none');
        }
      }
    });
    console.log(myUser.type);
  }
  function reqTeacher(){
    var myUser;
    console.log('nav');
    $.ajax({
      url: "./database/get_user.php",
      async: false,
      success: function (response) {
        myUser=JSON.parse(response);
        if(myUser.status){
          if(myUser.type != 'teacher'){
            location.replace("./index.html");
          }
         } else{
          location.replace("./index.html");
         }
      }
    });
    console.log(myUser.type);
  }
  function reqLogin(){
    var myUser;
    console.log('nav');
    $.ajax({
      url: "./database/get_user.php",
      async: false,
      success: function (response) {
        myUser=JSON.parse(response);
        if(!myUser.status){
          location.replace("./index.html");
         } 
      }
    });
    console.log(myUser.type);
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



