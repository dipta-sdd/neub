<?php 
  $data="";

if(!isset($_COOKIE["user"])) {
  $data='<li class="nav-item dropdown ddmp"><a class="nav-link rounded-2 myfs" aria-current="page" href="./login.html" onclick="dropMBL('."'#ddm1'".')">Login</a><ul class=" ddmu" id="ddms"><li class="ddml"><a href="./signup.php" class="ddma">Sign Up</a></li></ul></li>';
} else {
  // echo $_COOKIE["user"];
  $data='<li class="nav-item "><a class="nav-link rounded-2 myfs" aria-current="page" href="./logout.php">Logout</a></li>';
}
echo $data;
 return true;
?>