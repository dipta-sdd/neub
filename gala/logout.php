<?php 
  $redirect = '<script>  location.replace("./index.html") </script> ';
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