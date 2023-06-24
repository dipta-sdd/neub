<?php include_once 'navbar.php';  ?>
<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2 shadow-lg">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Main</a>
      <a class="breadcrumb-item" href="#">Sub</a>
      <span class="breadcrumb-item active" aria-current="page">Active</span>
    </nav>
    
    <div class="row row-cols-1 row-cols-lg-3 g-4">
      <div class="col">
        <div class="card">
          <img src="../img/card_vc.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Message from Vice Chancellor </h6>
            <p class="card-text">It gives me immense pleasure to offer a message of goodwill, prosperity and welcome to all those... </p>
            <button type="button" class="btn btn-outline-info">Read More</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../img/card_ch.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Message from Chairman</h6>
            <p class="card-text">We, the people of Sylhet hailing from different ages, profession and political beliefs and united under the aegis</p>
            <button type="button" class="btn btn-outline-info">Read More</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../img/card_v.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">About NEUB</h6>
            <p class="card-text"><b> Introduction: </b>the present world has been passing through inevitable but irreversible process of globalization.  </p>
            <button type="button" class="btn btn-outline-info">Read More</button>
          </div>
        </div>
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

});
</script>

<?php include_once 'body_last.php';  ?>

