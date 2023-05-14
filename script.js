// dropdowm jqd
$(document).ready(function () {
  // function dropMBL(id){
  //   if(document.querySelector(id).classList.contains('ddm_show')){
  //     document.querySelector(id).classList.remove('ddm_show');
  //   }else{
  //     document.querySelector(id).classList.add('ddm_show');
  //   }
  // }

  // slider
  const myCarouselElement = document.querySelector('#carouselExample')
  const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 2000,
    touch: false
  })

  // login 
  function logout() {
    location.replace("http://127.0.0.1/neub/index.html");
  }

  // check login status and set login or logout at menu
  $.ajax({
    url: "menu_log.php",
    success: function (response) {
      $('#nav_menu').append(response);
    }
  });


  // login or logout check menu load 
  function logStatus(id){
    $.ajax({
      url: "./database/menu_log.php",
      success: function (response) {
        $(id).append(response);
      }
    });
  }

});


