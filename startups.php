<?php
    $page = $_GET['page'];
    require __DIR__ .'/user.php';
    $startups = getStartupsData(); 
    
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/index.css">
      <link rel="stylesheet" href="assets/css/startups.css">
      
    <title></title>
  </head>
  <body class="startups">
      <div class="div1">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="./index.php">Home</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#div5">Contact <span class="sr-only">(current)</span></a>
                </li>
                <!--
                <li class="nav-item">
                  <a class="nav-link contact" href="#div5">Contact</a>
                </li>
                -->
              </ul>
              <form class="form-inline my-2 my-lg-0">
                
              </form>
            </div>
        </nav>
      </div>

    <div class="div2">
      <div class="page-box search-bar">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <ul>
              <li>
                <div class="container">
                  <form method="post" action="">
                      <div class="input-group mb-3">
                        
                          <input type="text" class="form-control" name="startup_name" placeholder="Enter Startup name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary search-btn" type="submit" id="button-addon2">Search</button>
                          </div>
                  
                      </div>
                      </form>
                </div>
              </li>
             
            </ul>
          </div>
      </div>
    </div>

      <div class="page-box output under full-height">
        <div class="container">
        </div>
      </div>
      <div class="page-box output">
        <div class="container">

          <div class="row row-cols-1 row-cols-md-3">


          <?php

              if(isset($_POST['startup_name'])){
                  $id = searchstartup($_POST['startup_name']);
                  if($id>(-1)){
                    echo '<div class="col mb-4">
                          <div class="card" style="background-image: url('.$startups[$id]->imgid.');">
                            
                            <div class="card-body card-overlay">
                              <h5 class="card-title">'.$startups[$id]->name.'</h5>
                              <button class="new-btn" type="button">
                                <a href="./startup_page_clone.php?id='.$startups[$id]->id.'" style="text-decoration: none; color:inherit;">
                                  Find more >
                                </a>
                              </button>
                            </div>
                          </div>
                        </div>';
                  }
                  else{
                    echo '
                    <div class="col mb-4" style="padding-top:50px;">
                        <h3>Startup not found</h3>
                        <button class="new-btn"><a href="./startups.php?page=1" style="text-decoration: none; color:inherit;"><- Back</a></button>
                    </div>
                    ';
                  }
                }
                else{
                  $num_of_startups=6;
                  $num_start = ($page-1) * $num_of_startups;
                  $num_end = ($page)*$num_of_startups;
                  $num = 0;
                    foreach($startups as $startup){
                      if($num>=$num_start && $num<$num_end){
                      echo '<div class="col mb-4">
                              <div class="card">
                                
                                <div class="card-body" style="background-image: url('.$startup->imgid.');">
                                  
                                </div>
                                <div class="card-body card-overlay">
                                  <h5 class="card-title">'.$startup->name.'</h5>
                                  <button class="new-btn" type="button">
                                    <a href="./startup_page_clone.php?id='.$startup->id.'" style="text-decoration: none; color:inherit;">
                                      Find more >
                                    </a>
                                  </button>
                                </div>
                              </div>
                            </div>';
                    }
                    $num = $num +1;
                  }
                }
              ?>
             
             <!--
              <div class="col mb-4">
                <div class="card">
  
                  <div class="card-body" style="background-image: url('./assets/images/img.jpg');">
               
                  </div>
                  <div class="card-body card-overlay">
                    <h5 class="card-title">Card title</h5>
                    <button class="new-btn" type="button">Find more -></button>
                  </div>
                </div>
              </div>
            -->    
             
            </div>
            <br>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                <?php 
                  if(count($startups)%$num_of_startups === 0){
                    $num_of_pages = count($startups)/$num_of_startups; 
                  }
                  else{
                    $num_of_pages = count($startups)/$num_of_startups+1; 
                  }
                  $prev = $page-1;
                  $next = $page+1;
                  if($prev>=1){
                    echo '<li class="page-item">
                            <a class="page-link" href="startups.php?page='.$prev.'" tabindex="-1">Previous</a>
                          </li>';                   
                  }
                    for($i = 1; $i<=$num_of_pages; $i++){
                      if($i == $page){
                        echo '<li class="page-item active"><a class="page-link" href="startups.php?page='.$i.'">'.$i.'</a></li>';
                      }
                      else{
                        echo '<li class="page-item"><a class="page-link" href="startups.php?page='.$i.'">'.$i.'</a></li>';
                      }
                    }
                  if($next<=$num_of_pages){
                    echo '<li class="page-item">
                            <a class="page-link" href="startups.php?page='.$next.'">Next</a>
                          </li>';
                  }
                  ?>
                  </ul>
                </nav>
              <br>
          </div>
        </div>
      </div>
    
    
          <!--footer-->
          <div class="div5 parallex" id="div5">
            <footer class="new-footer page-footer">
              <div class="container">
                <div class="btn-area">
                  <a><button class="p-2 px-3 mr-4 d-none d-md-inline-block new-btn">Join our newsletter</button></a>
                  <a><button class="p-2 px-3 mr-4 d-none d-md-inline-block new-btn">Join our newsletter</button></a>
                  <a><button class="p-2 px-3 mr-4 d-none d-md-inline-block new-btn">Join our newsletter</button></a>
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
                        <div class="col-md-4 col-lg-3 col-xl-3">
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
                        
                    <!--/.Third column-->
                    <!--Fourth column-->
                    <!--
                        <div class="col-md-4 col-lg-3 col-xl-3">
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
        </div>
        <!--footer-->

        <div class="login-bg">
          <div class="inner-login-box">
            <form class="" action="./login-signup.php" method="post">
              <h1>Login</h1>
              <input class="username" type="text" placeholder="Username" name="username">
              <input class="email" type="text" placeholder="email" name="email">
              <input class="password"" type="password" placeholder="Password" name="password">
              <input class="submit-btn" type="submit" value="Login">
              <span class="modal-close login-close" style="padding-right:10px;">X</span>
            </form>
          </div>
        </div>
        


  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript" src="./assets/js/startups.js"></script>
</html>
