<?php 
  $data="";

if(!isset($_COOKIE["user"])) {
  $data='<div class="container">
  <div class="row">
      <nav class="navbar navbar-expand-md mybg p-0" id="nav">
        <div class="container-fluid">
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 mybg" id="nav_menu">
              <li class="nav-item "><a class="nav-link rounded-2 myfs" aria-current="page" href="./index.html">HOME</a></li>
                            
              <li class="nav-item dropdown ddmp">
                <a class="nav-link dropdown-toggle myfs " href="#" role="button" onclick="dropMBL("#ddm0")">AUTHORITY</a>
                <ul class=" ddmu" id="ddm0">
                  <li class="ddml"><a href="" class="ddma"> Board of Trustees  </a></li>
                  <li class="ddml"><a href="" class="ddma"> Board of Advisors  </a></li>
                  <li class="ddml"><a href="" class="ddma"> Syndicate  </a></li>
                  <li class="ddml"><a href="" class="ddma">  Academic Council </a></li>
                  <li class="ddml"><a href="" class="ddma"> Proctorial body  </a></li>
                  <li class="ddml"><a href="" class="ddma">  Complaint Committee </a></li>
                </ul>
              </li>
                 <!-- ____________________________________________________________________________________________________________________________________________________________________________________________________________ -->
              <li class="nav-item dropdown ddmp">
                <a class="nav-link dropdown-toggle rounded-2 myfs " id="ddb1" href="#" role="button" onclick="dropMBL("#ddm1")">ACADEMIC</a>
    
                <ul class=" ddmu" id="ddm1">
                  <li class="ddml"><a href="" class="ddma"> School of Business</a></li>
                  <li class="ddml"><a href="" class="ddma"> School of Social Science</a></li>
                  <li class="ddml"><a href="" class="ddma"> School of Law and Justice</a></li>
                  <li class="ddml"><a href="" class="ddma"> School of Natural Science and Engineering</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown ddmp">
                <a class="nav-link rounded-2 myfs" aria-current="page" href="./login.html" onclick="dropMBL('."'#ddm1'".')">Login</a>
                <ul class=" ddmu" id="ddms">
                  <li class="ddml"><a href="./signup.html" class="ddma">Sign Up</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>
</div>';



  // $data='<li class="nav-item dropdown ddmp"><a class="nav-link rounded-2 myfs" aria-current="page" href="./login.html" onclick="dropMBL('."'#ddm1'".')">Login</a><ul class=" ddmu" id="ddms"><li class="ddml"><a href="./signup.html" class="ddma">Sign Up</a></li></ul></li>';
} else {
  // echo $_COOKIE["user"];
  
  $data='<div class="container">
  <div class="row">
      <nav class="navbar navbar-expand-md mybg p-0" id="nav">
        <div class="container-fluid">
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 mybg" id="nav_menu">
              <li class="nav-item "><a class="nav-link rounded-2 myfs" aria-current="page" href="./index.html">HOME</a></li>
                            
              <li class="nav-item dropdown ddmp">
                <a class="nav-link dropdown-toggle myfs " href="#" role="button" onclick="dropMBL("#ddm0")">AUTHORITY</a>
                <ul class=" ddmu" id="ddm0">
                  <li class="ddml"><a href="" class="ddma"> Board of Trustees  </a></li>
                  <li class="ddml"><a href="" class="ddma"> Board of Advisors  </a></li>
                  <li class="ddml"><a href="" class="ddma"> Syndicate  </a></li>
                  <li class="ddml"><a href="" class="ddma">  Academic Council </a></li>
                  <li class="ddml"><a href="" class="ddma"> Proctorial body  </a></li>
                  <li class="ddml"><a href="" class="ddma">  Complaint Committee </a></li>
                </ul>
              </li>
                 <!-- ____________________________________________________________________________________________________________________________________________________________________________________________________________ -->
              <li class="nav-item dropdown ddmp">
                <a class="nav-link dropdown-toggle rounded-2 myfs " id="ddb1" href="#" role="button" onclick="dropMBL("#ddm1")">ACADEMIC</a>
                <!-- for pc -->
                <ul class=" ddmu" id="ddm1">
                  <li class="ddml"><a href="" class="ddma"> School of Business</a></li>
                  <li class="ddml"><a href="" class="ddma"> School of Social Science</a></li>
                  <li class="ddml"><a href="" class="ddma"> School of Law and Justice</a></li>
                  <li class="ddml"><a href="" class="ddma"> School of Natural Science and Engineering</a></li>
                </ul>
              </li>
                <li class="nav-item ">
                  <a class="nav-link rounded-2 myfs" aria-current="page" href="./logout.php">Logout</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
  </div>
</div>';

  // $data='<li class="nav-item "><a class="nav-link rounded-2 myfs" aria-current="page" href="./logout.php">Logout</a></li>';
}
echo $data;
 return true;
?>