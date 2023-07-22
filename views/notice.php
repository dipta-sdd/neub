<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <!-- <a class="breadcrumb-item" href="#">Sub</a> -->
      <span class="breadcrumb-item active" aria-current="page"> Notice</span>
    </nav>
    <div class="row ps-3">
      <h3 class="text-dark" id="notice_title"></h3>
      <p class="fw-light" id="notice_date" ></p>
      <hr/>
      <img id="notice_img" style="width: 100%;" src="" alt="">
      <br>
      <br>
      <p id="notice_des"></p>

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
  const url = window.location.href;
  // Extract the value after the hyphen
  const value = url.split('-')[1];
  // Log the extracted value
  console.log(value);
  // load std details
  $.ajax({
    type: "POST",
    url: "../database/get_notice.php",
    data: {
      "id" : value
    },
    success: function (response) {
      var notice =JSON.parse(response);
      $('#notice_title').text(notice.notice_tittle);
      $('#notice_date').html('<i>'+notice.date+'</i>');
      $('#notice_img').attr('src', '../img/uploads/notice/'+notice.notice_id+'.jpg');
      $('#notice_des').text(notice.notice_des);
    }
  });

});
</script>
<?php include_once 'body_last.php';  ?>


