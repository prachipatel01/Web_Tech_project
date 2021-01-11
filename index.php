
<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Place Your Startup</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		    <link rel="stylesheet" href="assets/css/index.css" />
		    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	</head>
	<body class="homepage">
    <div class="parent">
      <div class="div1">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="./WT/aboutUs.html">About Us</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="startups.php?page=1">Search <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item contact-btn">
                    <a class="nav-link" href="#div5">Contact</a>
                  </li>
                  <li class="nav-item">
                    <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  
                  <button id="myBtn2" class="btn btn-light login-btn new-btn" style="margin:5px;" type="button">Connect with us</button>
                  <button id="myBtn3" class="btn btn-light register-btn new-btn" style="margin:5px;" type="button"><a href="./register.php" style="text-decoration: none; color:inherit;">Register</a></button>
          
                  <!--<button class="btn btn-light">Register</button>-->
                </form>
              </div>
          </nav>
        </div>


          <!--Slider-->
          <!-- The carousel -->
        <div class="div2 parallex">
          <div id="myCarousel" class="carousel slide mt-4" data-interval="500" style="margin-top:0px !important;">
            <!-- Indicators -->
            <!--
            <ul class="carousel-indicators">
              <li class="item1 active"></li>
              <li class="item2"></li>
              <li class="item3"></li>
            </ul>
            -->
            <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="slide-content">
                <div class="s-c">
                  <h2 class="display-4">Place Your Startup!</h2>
                </div>
                <img src="./assets/images/background.jpg" class="d-block w-100 slide-img" alt="...">
              </div>
            </div>
            <div class="carousel-item">
              <div class="slide-content">
                <div class="s-c">
                  <h2 class="display-4">Colobrate with Us!</h2>
                </div>
                <img src="./assets/images/background2.jpg" class="d-block w-100 slide-img" alt="...">
              </div>

            </div>
            <div class="carousel-item">
              <div class="slide-content">
                <div class="s-c">
                  <h2 class="display-4">Connect with us and<br> Grow Your Startup!</h2>
                </div>
                <img src="./assets/images/img2.webp" class="d-block w-100 slide-img" alt="...">
              </div>
            </div>
        </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
          <!--Slider-->

          <!--Jumbotron-->
          <div class="div3 parallex">
          <div class="j1">
            <div class="jumbotron jumbotron-fluid d-flex align-items-center">
              <div class="container">
                <h1 class="display-4">Place Your Start-up, Right here</h1>
                <p class="lead">We showcase small-medium scale start-ups on your website, promote them and put them on the market</p>
                <hr>

                <form action="./assets/php/login-signup.php" method="post">
                <a href="./startups.php"><button style="float:left;"type="button" class="btn btn-dark new-btn jmb-btn">Get more Info
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg>
                </button></a>
                </form>
                
              </div>
            </div>
          </div>
        </div>
          <!--Jumbotron-->


          <!--Text Slider -->
          <?php
            require __DIR__ .'/user.php';
            $feedbacks = getfeedback();
            

          ?>
        <div class="div4 parallex">
          <a href="./feedback.php" style="text-decoration: none; color:inherit;">
          <div class="">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">

                <?php
                  $count=0;
                  foreach($feedbacks as $feedback){
                    if($count===0){
                      echo'<div class="carousel-item active slide2-item align-items-center">
                              <div class="s-c">
                                <h2 class="display-4">Feedbacks of the Users</h2>
                                <p class="slide2-content">'.$feedback->feedback.'</p>
                              </div>
                              <!--<img src="..." class="d-block w-100" alt="...">-->
                            </div>';
                            $count=1;
                    }
                    else{
                    echo'<div class="carousel-item slide2-item align-items-center">
                          <div class="s-c">
                            <h2 class="display-4">Feedbacks of the Users</h2>
                            <p class="slide2-content">'.$feedback->feedback.'</p>
                          </div>
                          <!--<img src="..." class="d-block w-100" alt="...">-->
                        </div>';
                  }
                }
                ?>
                <!--
                <div class="carousel-item active slide2-item align-items-center">
                  <div class="s-c">
                    <h2 class="display-4">Feedbacks of the Users</h2>
                    <p class="slide2-content">lorem ipsum</p>
                  </div>
                  <!--<img src="..." class="d-block w-100" alt="...">
                </div>
                -->
                <!--
                <div class="carousel-item slide2-item align-items-center">
                  <div class="s-c">
                    <h2 class="display-4">Feedbacks of the Users</h2>
                    <p class="slide2-content">loreum</p>
                  </div>
                  <!--<img src="..." class="d-block w-100" alt="...">-->
                  
                  <!--
                </div>
                <div class="carousel-item slide2-item align-items-center">
                  <div class="s-c">
                    <h2 class="display-4">Feedbacks of the Users</h2>
                    <p class="slide2-content">loreum</p>
                  </div>
                  <!--<img src="..." class="d-block w-100" alt="...">
                </div>
                -->
              </div>
              
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              
            </div>
          </div>    
          </a>
        </div>

          
          <!--footer-->
          <div class="div5 parallex" id="div5">
              <footer class="new-footer page-footer">
                <div class="container">
                  <div class="btn-area">
                    <a><button class="p-2 px-3 mr-4 d-none d-md-inline-block new-btn">Join our newsletter</button></a>
                    <a><button class="p-2 px-3 mr-4 d-none d-md-inline-block new-btn">Join us on LinkedIn</button></a>
                    <a><button class="p-2 px-3 mr-4 d-none d-md-inline-block new-btn">Join us on Instagram</button></a>
                  </div>
                </div>
                  <div class="container">
                    <div class="container text-center text-md-left mt-5">
                      <div class="row mt-3">
                          <!--First column-->
                          <div class="col-md-2 col-lg-2 col-xl-3 mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Members</strong>
                            </h6>
                            <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <p>Prachi Patel</p>
                            </p>
                            <p>
                                <p>Prithviraj Kanaujia</p>
                            </p>
                            <p>
                                <p>Pankti Shah</p>
                            </p>
                          </div>
                          <!--/.First column-->
                          <!--Second column-->
                          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Contactno.</strong>
                            </h6>
                            <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <p>+91 9558040400</p>
                            </p>
                            <p>
                                <p>+91 8511668289</p>
                            </p>
                            <p>
                                <p>+91 9106812406</p>
                            </p>

                          </div>
                          <!--/.Second column-->
                          <!--Third column-->
                          <div class="col-md-4 col-lg-3 col-xl-3 mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Email Id</strong>
                            </h6>
                            <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <p>prachi.pce18@sot.pdpu.ac.in</p>
                            </p>
                            <p>
                                <p>prithviraj.kce18@sot.pdpu.ac.in</p>
                            </p>
                            <p>
                                <p>pankti.sce18@sot.pdpu.ac.in</p>
                            </p>
                          </div>
                          <!--
                          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <h6 class="text-uppercase font-weight-bold">
                                <strong>Free tutorials</strong>
                            </h6>
                            <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <p>Basics (HTML/CSS/JS)</p>
                            </p>
                            <p>
                                <p>Bootstrap &amp; web design</p>
                            </p>
                            <p>
                                <p>Angular</p>
                            </p>

                          </div>
                        -->
                      <!--/.Third column-->
                      <!--Fourth column-->
                      <!--
                          <div class="col-md-4 col-lg-3 col-xl-3 mb-4">
                              <h6 class="text-uppercase font-weight-bold">
                                  <strong>Company</strong>
                              </h6>
                              <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                              <p>
                                  <p>Our team</p>
                              </p>
                              <p>
                                  <p>Company data</p>
                              </p>
                              <p>
                                  <p>For media</p>
                              </p>
                            </div>
                      <!--/.Fourth column-->
                          </div>
                        </div>
                  </div>
                  <div class="container">
                    <!-- Copyright-->
                    <div class="footer-copyright py-3 text-center social-media">
                      <a href="#" class="fa fa-twitter" style="text-decoration: none; color:inherit;"></a>
                      <a href="#" class="fa fa-instagram" style="text-decoration: none; color:inherit;"></a>
                      <a href="#" class="fa fa-github" style="text-decoration: none; color:inherit;"></a>
                    </div>
                  <!--/.Copyright -->
                  </div>
              </footer>
              <!--
              <div class="jumbotron jumbotron-fluid d-flex align-items-center">
                <div class="container">
                  <h1 class="display-4">Place Your Start-up, Right here</h1>
                  <p class="lead">We showcase small-medium scale start-ups on your website, promote them and put them on the market</p>
                  <hr>
                </div>
              </div>
              -->

            </footer>
          </div>
          <!--footer-->
      
          <?php
            if($_SERVER['REQUEST_METHOD']==='POST'){
              if($_POST['username']!="" && $_POST['password']!="" && $_POST['email']!="")
              {
              if(!ifUserExistEmail($_POST['email'])){

                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                  echo '<div class="login-bg bg-active">
                          <div class="inner-login-box">
                            <form class="" action="" method="post">
                              <h1>Connect with us</h1>
                              <p class="highlight">*Enter valid email</p>
                              <input class="username" type="text" placeholder="Username" name="username">
                              <input class="email" type="text" placeholder="email" name="email">
                              <input class="password"" type="password" placeholder="Password" name="password">
                              <input class="submit-btn" type="submit" value="Connect" name="submit">
                              <span class="modal-close login-close" style="padding-right:10px;">X</span>
                            </form>
                          </div>
                        </div>';
                  }
                  else{
                    addUser($_POST['username'], $_POST['email'], $_POST['password']);
                    echo '<div class="login-bg bg-active">
                            <div class="inner-login-box">
                              <form class="" action="" method="post">
                                <h1>Thank You For Connecting '.$_POST['username'].'!!</h1>
                                <span class="modal-close login-close" style="padding-right:10px;">X</span>
                              </form>
                            </div>
                          </div> ';
                  }
              }
              else{

                echo '<div class="login-bg bg-active">
                        <div class="inner-login-box">
                          <form class="" action="" method="post">
                            <h1>This Email<br>'.$_POST['email'].'<br>is already registered!</h1>
                            <span class="modal-close login-close" style="padding-right:10px;">X</span>
                          </form>
                        </div>
                      </div> ';
             }
             
            }
            else{
              echo '<div class="login-bg bg-active">
                      <div class="inner-login-box">
                        <form class="" action="" method="post">
                          <h1>Connect with us</h1>
                          <p class="highlight">*All fields are mandatory</p>
                          <input class="username" type="text" placeholder="Username" name="username">
                          <input class="email" type="text" placeholder="email" name="email">
                          <input class="password"" type="password" placeholder="Password" name="password">
                          <input class="submit-btn" type="submit" value="Connect" name="submit">
                          <span class="modal-close login-close" style="padding-right:10px;">X</span>
                        </form>
                      </div>
                    </div>';
            }
          }
          
          ?>


        </div>
        <div class="login-bg">
          <div class="inner-login-box">
            <form class="" action="" method="post">
              <h1>Connect with us</h1>
              <input class="username" type="text" placeholder="Username" name="username">
              <input class="email" type="text" placeholder="email" name="email">
              <input class="password"" type="password" placeholder="Password" name="password">
              <input class="submit-btn" type="submit" value="Connect" name="submit">
              <span class="modal-close login-close" style="padding-right:10px;">X</span>
            </form>
          </div>
        </div>
        
      


    </body>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="./assets/js/index.js"></script>


</html>
