<?php
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $title = $des = $id ='';
  $title = $_POST['title'];
  $des= $_POST['des'];
  $sql="INSERT INTO `notice`(`notice_tittle`, `notice_des`) VALUES ('".$title."','".$des."')";
  $conn->query($sql);
  $id= $conn->insert_id;
  // Check if a file was uploaded
  if (isset($_FILES["fileInput"]) && $_FILES["fileInput"]["error"] === UPLOAD_ERR_OK) {
    // Specify the directory where you want to save the uploaded files
    $uploadDir = "../img/uploads/notice/";

    // Generate a unique filename to avoid overwriting existing files
    $fileName = $id . '.jpg';

    // Construct the full path to the destination file
    $destination = $uploadDir . $fileName;

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $destination)) {
      // File upload successful
      echo "true";
    } else {
      // File upload failed
      echo "False";
    }
  } else {
    // No file was uploaded or an error occurred during upload
    echo "false";
  }
}
?>
