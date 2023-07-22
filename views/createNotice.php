<?php include_once 'navbar.php';  ?>

<div class=" col-lg-9 col-md-7 left p-0 pe-2">
  <div class="body p-2">
    <nav class="breadcrumb p-2 rounded-2">
      <a class="breadcrumb-item" href="#">Home</a>
      <!-- <a class="breadcrumb-item" href="#">Sub</a> -->
      <span class="breadcrumb-item active" aria-current="page"> New Notice</span>
    </nav>
    <div class="row ps-3">
      <!-- <form id="fileUploadForm">
        <input type="file" name="fileInput" id="fileInput">
        <button type="button" id="uploadButton">Upload</button>
      </form> -->


      <form id="fileUploadForm" class="pb-2">
        <div class="mb-3">
          <label for="noticeTitle" class="form-label">Email address</label>
          <input type="text" name="title" class="form-control" id="noticeTitle" placeholder="Notice Title">
        </div>
        <div class="mb-3">
          <label for="noticeDes" class="form-label">Example textarea</label>
          <textarea class="form-control" name="des" id="noticeDes" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="fileInput" class="form-label">Small file input example</label>
          <input class="form-control form-control-sm" id="fileInput" type="file">
        </div>
        <button type="submit" class="btn btn-primary" id="uploadButton">Submit</button>
      </form>
      <div class="alert alert-primary d-none" role="alert" id="notice_blue" >
         Notice upload <strong>successful</strong>.
      </div>
      <div class="alert alert-danger d-none" role="alert" id="notice_red" >
         Notice upload <strong>inturuped</strong>.
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
  $('#uploadButton').click(function(e) {
    e.preventDefault();
    var fileInput = $('#fileInput')[0].files[0];

    if (fileInput) {
      var fileName = fileInput.name;
      var fileExtension = fileName.split('.').pop().toLowerCase();

      if (fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png') {
        var formData = new FormData();
        formData.append('title', $(noticeTitle).val() );
        formData.append('des', $(noticeDes).val() );
        formData.append('fileInput', fileInput);

        $.ajax({
          url: '../database/new_notice.php',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(data) {
            $('#notice_blue').remove('d-none');
          },
          error: function(xhr, status, error) {
            $('#notice_red').remove('d-none');
          }
        });
      } else {
        console.error('Please select a JPG or PNG file to upload.');
      }
    } else {
      console.error('Please select a file to upload.');
    }
  });



});
</script>
<?php include_once 'body_last.php';  ?>


