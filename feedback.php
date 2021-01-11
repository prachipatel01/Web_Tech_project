<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/css/index.css">
      <link rel="stylesheet" href="assets/css/feedback.css">
    <title>Feedback</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="./index.php">Home</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            
          </li>

          <li class="nav-item contact-btn">
            
          </li>
          <li class="nav-item">
            <!--<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
         
  
          <!--<button class="btn btn-light">Register</button>-->
        </form>
      </div>
  </nav>


    <div class="jumbotron jumbotron-fluid">
      <div class="container">
          <h1 class="display-4">Feedbacks..</h1>
          <p class="lead">The feedback of the users of the website are very important to us, we keep in their opinion in mind and keep improving </p>
          <hr>
      </div>
    </div>

    <div class="container">


    <?php
      require __DIR__ .'/user.php';
      $feedbacks = getfeedback();
      foreach($feedbacks as $feedback){
        echo '<div class="decoration">
                <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.854 1.146a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L4 2.707V12.5A2.5 2.5 0 0 0 6.5 15h8a.5.5 0 0 0 0-1h-8A1.5 1.5 0 0 1 5 12.5V2.707l3.146 3.147a.5.5 0 1 0 .708-.708l-4-4z"/>
                </svg>
                <div class="feedback-card">
          
                  <div class="feedback-img">
                    <img src="assets\images\feedbackUsers\\'.$feedback->image.'" alt="">
                  </div>
                  <div class="feedback-content">
                    <p>'.$feedback->feedback.'
                      <br></p>
                    <div class="feedback-footer">
                        <p>-By '.$feedback->name.' </p>
                    </div>
                  </div>
                </div>
                </div>';

      }
    ?>


      <!-- <div class="decoration">
      <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.854 1.146a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L4 2.707V12.5A2.5 2.5 0 0 0 6.5 15h8a.5.5 0 0 0 0-1h-8A1.5 1.5 0 0 1 5 12.5V2.707l3.146 3.147a.5.5 0 1 0 .708-.708l-4-4z"/>
      </svg>
      <div class="feedback-card">

        <div class="feedback-img">
          <img src="assets\images\person1.jpg" alt="">
        </div>
        <div class="feedback-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <br></p>
          <a class="read-more-1" >Read more</a>
          <p class="content-hidden-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="read-less-1">Read less</a>
          <div class="feedback-footer">
              <p>-By Lorem ipsum <br>Founder of Lorem ipsum</p>
          </div>
        </div>
      </div>
      </div>


      <div class="decoration">
      <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.854 1.146a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L4 2.707V12.5A2.5 2.5 0 0 0 6.5 15h8a.5.5 0 0 0 0-1h-8A1.5 1.5 0 0 1 5 12.5V2.707l3.146 3.147a.5.5 0 1 0 .708-.708l-4-4z"/>
      </svg>
      <div class="feedback-card">

        <div class="feedback-img">
          <img src="assets\images\person2.jpg" alt="">
        </div>
        <div class="feedback-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <br></p>
          <a class="read-more-2" >Read more</a>
          <p class="content-hidden-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="read-less-2" >Read less</a>
          <div class="feedback-footer">
              <p>-By Lorem ipsum <br>Founder of Lorem ipsum</p>
          </div>
        </div>
      </div>
      </div> -->


    </div>

  
    <div class="container">
      <div class="feedback-box">
      <form method="post" action="" enctype="multipart/form-data">
        <h2><strong><label>Give Your Feedback:</label></strong></h2>
          <?php 

          if(isset($_POST['submit'])){
            if($_POST['name']!="" && $_POST['email']!="" && $_POST['feedback']!="" && isset($_FILES['file'])){
              //if(isset($_FILES['file'])){
                addfeedback($_POST,1,$_FILES);
                //$file = $_FILES['file'];
                echo '<div class="form-group">
                  <label style="color: red;">Feedback added!</label>
                </div>';
              // }else{
              //   $FILES=array();
              //   addfeedback($_POST,0,$FILES);
              //   echo '<div class="form-group">
              //     <label style="color: red;">Feedback added!</label>
              //   </div>';
              // }
            }
            else{
              echo '<div class="form-group">
                      <label style="color: red;">*all inputs are required</label>
                    </div>';
            }
          }
          ?>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="name" name="name">
          </div>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="name@example.com" name="email">
          </div>
          <div class="form-group">
            <label>Feedback</label>
            <textarea class="form-control" rows="3" name="feedback"></textarea>
          </div>
          <div class="form-group">
            <label>Upload image</label>
            <input type="file" name="file">
          </div>
          <button type="submit" class="btn btn-primary mb-2" name="submit">Enter</button>
        </form>
      </div>
    </div>


  </body>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets\js\feedback.js"></script>
</html>
