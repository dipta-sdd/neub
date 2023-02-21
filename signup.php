<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-3 col-md-4"> -->
          <a class="p-2" href="#"><img class="p-2" src="./img/logo.png" alt="varsity logo" id="logo"></a>
        <!-- </div> -->
      </div>

    </div>
  </header>


  <div class="menu">
    <div class="container">
      <div class="row">
          <nav class="navbar navbar-expand-md mybg p-0" id="nav">
            <div class="container-fluid">
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 mybg">
                  <li class="nav-item "><a class="nav-link rounded-2 myfs" aria-current="page" href="">HOME</a></li>

                  <li class="nav-item dropdown ddmp">
                    <a class="nav-link dropdown-toggle myfs " href="#" role="button" onclick="dropMBL('#ddm0')">AUTHORITY</a>
                    <ul class=" ddmu" id="ddm0">
                      <li class="ddml"><a href="" class="ddma"> Board of Trustees  </a></li>
                      <li class="ddml"><a href="" class="ddma"> Board of Advisors  </a></li>
                      <li class="ddml"><a href="" class="ddma"> Syndicate  </a></li>
                      <li class="ddml"><a href="" class="ddma">  Academic Council </a></li>
                      <li class="ddml"><a href="" class="ddma"> Proctorial body  </a></li>
                      <li class="ddml"><a href="" class="ddma">  Complaint Committee </a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown ddmp">
                    <a class="nav-link dropdown-toggle rounded-2 myfs " id="ddb1" href="#" role="button" onclick="dropMBL('#ddm1')">ACADEMIC</a>
                    <ul class=" ddmu" id="ddm1">
                      <li class="ddml"><a href="" class="ddma"> School of Business</a></li>
                      <li class="ddml"><a href="" class="ddma"> School of Social Science</a></li>
                      <li class="ddml"><a href="" class="ddma"> School of Law and Justice</a></li>
                      <li class="ddml"><a href="" class="ddma"> School of Natural Science and Engineering</a></li>
                    </ul>
                  </li>
                  <li class="nav-item "><a class="nav-link rounded-2 myfs" aria-current="page" href="./login.php">Login</a></li>
                </ul>
              </div>
            </div>
          </nav>
      </div>
    </div>
  </div>

<!-- 
  <div class="slider" id="slider">
    <div class="container">
      <div id="carouselExample" class="carousel slide p-2"  data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <a href="#"> <h4> First slide label </h4> </a>
              <p class="lead">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <a href="#"> <h4> Second slide label </h4> </a>
              <p class="lead">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./img/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <a href="#"> <h4> Thired slide label </h4> </a>
              <p class="lead">Some representative placeholder content for the first slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



    </div>
  </div> -->


  <div id="main">
    <div class="container">
      <div class="row">
        <div class=" col-lg-9 col-md-7 left p-0 pe-1">
          <div class="body p-2">
            <nav class="breadcrumb p-2 rounded-2">
              <a class="breadcrumb-item" href="#">Home</a>
              <a class="breadcrumb-item" href="#">Sign Up</a>
              <span class="breadcrumb-item active" aria-current="page">Student</span>
            </nav>
            <div class="sign_up_std m-4">
              <form class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Name </label>
                  <label class="form-label msg"> *</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="col-md-6">
                  <label class="form-label">ID </label>
                  <label class="form-label msg"> *</label>
                  <input type="text" class="form-control" name="id">
                </div>

                <div class="col-md-8">
                  <label class="form-label">Department </label>
                  <label class="form-label msg" > *</label>
                  <select class="form-select" name="dept">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div> <div class="col-md-4 m-0"></div>

                <div class="col-md-4">
                  <label class="form-label">Username </label>
                  <label class="form-label msg"> *</label>
                  <input type="text" class="form-control" name="user">
                </div><div class="col-md-2"></div>

                <div class="col-md-4 ">
                  <label class="form-label">Session </label>
                  <label class="form-label msg" > *</label>
                  <select class="form-select" name="session">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Mobile</label>
                  <label class="form-label msg"></label>
                  <input type="text" class="form-control" name="mobile">
                </div><div class="col-md-2"></div>

                <div class="col-md-5">
                  <label class="form-label">Email</label>
                  <label class="form-label msg"></label>
                  <input type="email" class="form-control" name="email">
                </div><div class="col-md-6 m-0"></div>

                <div class="col-md-10">
                  <label class="form-label"> Address</label>
                  <label class="form-label msg"></label>
                  <input type="text" class="form-control" name="user">
                </div><div class="col-md-2 m-0"></div>

                
                
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign up</button>
                  <label class="form-label ms-2">Already have an account?  <a class="text-decoration-none" href="./login.php">Log in</a> Now</label>
                </div>
              </form>
            </div>

          </div>
        </div>
        <div class="col-lg-3 col-md-5 right p-0">
          <div class="notice p-2">
            <nav class="breadcrumb p-2 rounded-2">
              <span class="breadcrumb-item active" aria-current="page">Notice</span>
            </nav>
            <ul class="nu">
              <li class="nl"><a class="na" href="">Lorem ipsum dolor sit amet, consectetur </a>
              <p class="nd">10/02/2023</p></li>
              <li class="nl"><a class="na" href="">Lorem ipsum dolor sit amet, consectidsj</a>
              <p class="nd">09/02/2023</p></li>
            </ul>
            

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="footer ">
    <div class="container">
      <div class="row  p-2 ">
        <div class="col-lg-4 left">
          <h5>Contact Us</h5>
            <p> <b>Address :</b> Telihaor, Sheikhghat, Sylhet-3100 <br>
              <b> Tel :  </b> +880 02996631220 <br>
              <b>Enail :</b> info@neub.edu.bd <br>
              <b>Mobile :</b> 01755566994 <br>
              <b>Web :</b> www.neub.edu.bd <br>
            </p>
        </div>
        <div class="col-lg-3 right">
          <h5>Useful Links</h5>
          <ul>
            <li><a href="">University Grants Commission</a></li>
            <li><a href="">Ministry of Education</a></li>
            <li><a href="">Sylhet City Corporation </a></li>
            <li><a href="">HEQEP </a></li>
            <li><a href="">Disclaimer </a></li>
            <li><a href="">Sitemap </a></li>
          </ul>
        </div>
        <div class="col-lg-5 m-auto rounded-2 map">
          <h5>Find Us on Map</h5>
          <iframe class="rounded-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.2311622569273!2d91.85876681548714!3d24.89009548403999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aacd70cd7665%3A0xc8ae330ad72490dd!2sNorth%20East%20University%20Bangladesh!5e0!3m2!1sen!2sbd!4v1676895247502!5m2!1sen!2sbd" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="copy">
    <div class="container">
      <h6 class="text-light text-center pt-1">Copyright © 2023 North East University Bangladesh.</h6>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./script.js"></script>
  


</body>
<!-- git add --all && git commit -m "b1" && git push -->

</html>