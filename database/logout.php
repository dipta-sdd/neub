<?php 
  $redirect = '<script>  location.replace("../index.html") </script> ';
  $login="";
  setcookie("user","",time()-(86400*300));
  echo $redirect;
    // if(!isset($_COOKIE["user"])) {
    //     echo $redirect ;
    // } else {
    //     echo $_COOKIE["user"];
    //     echo "cannot delete";
    // }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>