<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <!-- <a class="breadcrumb-item" href="#">Sub</a> -->
      <span class="breadcrumb-item active" aria-current="page"> tmp</span>
    </nav>
    <div class="row ps-3">
      
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

});
</script>
<?php include_once 'body_last.php';  ?>


