<?php

    require __DIR__ .'/user.php';
    
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!--<link rel="stylesheet" href="assets/css/index.css">-->
      <link rel="stylesheet" href="assets/css/register_startups.css">
    <title></title>
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
                  <a class="nav-link" href="./startups.php">Search <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link contact" href="#div5">Contact</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
              </form>
            </div>
        </nav>
    


    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <ul>              
            <li>
              <h1 class="display-4">Register your startup</h1>
            </li>
            <li class="connect-btn">
              <p class="lead">To Register your startup,please connect with us!</p>
                <button style=""type="button" class="btn btn-dark new-btn login-btn jmb-btn">Connect ->
                  
                </button>
              
            </li>
            <li>
              <p class="lead">If you are already a member, enter the details of your startup in the form given below and register yourself as a part of "Place your startup". </p>
            </li>
            <hr>       
        </ul>
      </div>
    </div>

    
  <div class="register-details">
    <div class="container">
      <ul>
        <li>
          <h2>Enter the details</h2>
          <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-journal" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
          </svg>
        </li>
        <li>
          <h6> Enter your details below correctly so that we can feature you as who you are..</h6>
        </li>
        <li>
          <p class="highlight">*All the fields are mandatory.<p>
          
        </li>
      </ul>

      <br>




    <form id="info" method="post" action="">

    <?php
              $alldone=1;
              $username=$startup_name=$founder1=$founder2=$focusIndustry="";
              $focusSector=$serviceArea=$noActiveYears=$location=$website="";
              $phone=$email=$LinkedIn=$stage=$ratings="";
              $details=$description=$logo=$password="";         
    ?>

      <ul>


        <li>
          <ul class="inner-ul">
            
            <li>
              <h5>
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg>
                Username
              </h5>
            </li>
            <li>
                <input class="text form-control"type="text" name="username" value="<?php echo $username;?>" placeholder="Name of your startup">
            </li>
          
          </ul>
          
          <ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
            <li>
              <p class="highlight">*Enter the username you have used for connecting.<p>
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['username']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Enter the username.<p>
                        </li>
                      </ul>';
                      $username = $_POST['username'];
                      $alldone=0;
              }
              else if(isset($_POST['submit_1']) && !ifUserExist($_POST['username'])){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Username invalid.<br>Please connect with us if you are not a user<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
            <br>
            <br>
            <br>
            
        </li>


        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                </svg>
                User Email:
              </h5>
              
            </li>
            
            <li>
              <input class="text form-control"type="text" name="useremail" value="" placeholder="Name of your startup">
            </li>
            
          </ul>
         
          <ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
            <li>
              <p class="highlight">*Enter the email you have used for connecting.<p>
            </li>
          </ul>
         <br><br>
          <?php
            if(isset($_POST['submit_1']) && $_POST['useremail']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
              else if(isset($_POST['submit_1']) && filter_var($_POST['useremail'], FILTER_VALIDATE_EMAIL) && !checkemail($_POST['useremail'], $_POST['username'])){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Please enter valid email.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
              else if(isset($_POST['submit_1']) && ifUserRegistered($_POST['useremail'])){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*email already registered.<p>
                        </li>
                      </ul>';
                      $alldone=0; 
              }
            
          ?>
          <br>
          <br>
          <br>
        </li>




        <li>
          <ul class="inner-ul">
            
            <li>
              <h5>
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-building" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg>
                Name
              </h5>
             
            </li>
            <li>
                <input class="text form-control"type="text" name="startup_name" value="" placeholder="Name of your startup">
            </li>
            
          
            
          </ul>
          
          <?php
            if(isset($_POST['submit_1']) && $_POST['startup_name']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Enter the name of your startup.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
            <br>
            <br>
            <br>
        </li>
          

        

        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                Name of the Founder:
              </h5>
            </li>
            <li class="founder-list">
              <input class="text form-control" type="text" name="founder1" value="" placeholder="enter name of founder">
            </li>
    
          </ul>
          
          <?php
            if(isset($_POST['submit_1']) && $_POST['founder1']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Enter name of founder1.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                Name of the Co-Founder:
              </h5>
              
            </li>
            <li>
              <input class="text form-control"type="text" name="founder2" value="" placeholder="">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['founder2']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Enter name of Co-founder.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
          
        </li>


        <li>
          <ul class="inner-ul">
            <li>
              <h5>FocusIndustry</h5>
            </li>
            <li>
              <input class="text form-control"type="text" name="focusIndustry" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['focusIndustry']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
        </li>


        <li>
          <ul class="inner-ul">
            <li>
              <h5>FocusSector</h5>
            </li>
            <li>
              <input class="text form-control"type="text" name="focusSector" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['focusSector']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>

          <br>
          <br>
          <br>
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>Service Area:</h5>
            </li>
            <li>
              <input class="text form-control"type="text" name="serviceArea" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['serviceArea']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
        </li>


        <li>
          <ul class="inner-ul">
            <li>
              <h5>No. of years</h5>
            </li>
            <li>
              <input class="text form-control"type="text" name="noActiveYears" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['noActiveYears']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>

          <br>
          <br>
          <br>
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                </svg>
                Location
              </h5>
              
            </li>
            <li>
              <input class="text form-control"type="text" name="location" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['location']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          
          <br>
          <br>
          <br>
        </li>


        <li>
          <ul class="inner-ul">
            <li>
              <h5>Website:</h5>
            </li>
            <li>
              <input class="text form-control"type="text" name="website" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['website']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-phone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                Phone
              </h5>
              
            </li>
            <li>
              <input class="text form-control"type="text" name="phone" value="" placeholder="Name of your startup">
            </li>
            
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['phone']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
         
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                </svg>
                Startup Email:
              </h5>
              
            </li>
            
            <li>
              <input class="text form-control"type="text" name="email" value="" placeholder="Name of your startup">
            </li>
            
          </ul>
         
          <?php
            if(isset($_POST['submit_1']) && $_POST['email']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
              
            
          ?>
          <br>
          <br>
          <br>
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                LinkedIn
              </h5>
              
            </li>
            <li>
              <input class="text form-control"type="text" name="LinkedIn" value="" placeholder="Name of your startup">
            </li>
            
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['LinkedIn']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
          <br>
        </li>


        <li>
          <ul class="inner-ul">
            <li>
              <h5>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                Stage
              </h5>
              
            </li>
            <li>
              <input class="text form-control"type="text" name="stage" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['stage']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
        </li>


        <li>
          <ul class="inner-ul">
            <li>
              <h5>Ratings:</h5>
            </li>
            <li>
              <input class="text form-control"type="text" name="ratings" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['ratings']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>
          <br>
          <br>
        </li>
        <br>
            
        <li>
          <ul class="inner-ul">
              <h5>Details:</h5>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details"></textarea>
              </div>
            
            
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['details']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>
          <br>

        </li>

        <br>
        <li>
          <ul class="inner-ul">
              <h5>Description:</h5>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
              </div>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['description']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>

          <br>
          
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>Logo Upload:</h5><br>
            </li>
            <li>
            <input class="text form-control"type="text" name="logo" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['logo']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*All fields are required.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
            
          ?>

          <br>
          <br>
          <br>
        </li>

        <li>
          <ul class="inner-ul">
            <li>
              <h5>password:</h5><br>
            </li>
            <li>
            <input class="text form-control"type="text" name="password" value="" placeholder="Name of your startup">
            </li>
          </ul>
          <?php
            if(isset($_POST['submit_1']) && $_POST['password']===""){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Please enter your password.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }
              else if(isset($_POST['submit_1']) && !checkpassword($_POST['password'], $_POST['username'])){
                echo '<ul class="inner-ul" style="margin-bottom: 30px; margin-left: 300px;">
                        <li>
                          <p class="highlight">*Please enter correct password.<p>
                        </li>
                      </ul>';
                      $alldone=0;
              }

              if(isset($_POST['submit_1']) && $alldone===1){
                registerUser($_POST);
              
                echo '<div class="login-bg bg-active">
                        <div class="inner-login-box">
                          <form class="" action="" method="post">
                            <h1>Thank You For Registering '.$_POST['username'].'!!</h1>
                            <span class="modal-close login-close" style="padding-right:10px;">X</span>
                          </form>
                        </div>
                      </div> ';
              }
              
            
          ?>

          <br>
          <br>
          <br>
        </li>
              <br>

        <li>
          <div class="submit-btn">
            <ul class="inner-ul">
              <button class="new-btn"  type="submit" name="submit_1" value="">submit</button>
            </ul>
          </div>
        </li>
        

              
        <br>
        <br>
        <br>

        </ul>
      </form>
      
      </div>
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



            <?php
            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit2'])){
              if($_POST['username-connect']!="" && $_POST['email-connect']!="" && $_POST['password-connect']!=""){
                  if(!ifUserExistEmail($_POST['email-connect'])){
                    if (!filter_var($_POST['email-connect'], FILTER_VALIDATE_EMAIL)) {
                    
                    echo '<div class="login-bg bg-active">
                            <div class="inner-login-box">
                              <form class="" action="" method="post">
                                <h1>Connect with us</h1>
                                <p class="highlight">*Enter valid email</p>
                                <input class="username" type="text" placeholder="Username" name="username-connect">
                                <input class="email" type="text" placeholder="email" name="email-connect">
                                <input class="password"" type="password" placeholder="Password" name="password-connect">
                                <input class="submit-btn" type="submit" value="Connect" name="submit2">
                                <span class="modal-close login-close" style="padding-right:10px;">X</span>
                              </form>
                            </div>
                          </div>';
                  }
                  else{
                    addUser($_POST['username-connect'], $_POST['email-connect'], $_POST['password-connect']);
                    echo '<div class="login-bg bg-active">
                            <div class="inner-login-box">
                              <form class="" action="" method="post">
                                <h1>Thank You For Connecting '.$_POST['username-connect'].'!!</h1>
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
                                <h1>This Email<br>'.$_POST['email-connect'].'<br>is already registered!</h1>
                                <span class="modal-close login-close" style="padding-right:10px;">X</span>
                              </form>
                            </div>
                          </div> ';
                  }
                }
              else{
                echo '<div class="login-bg bg-active">
                        <div class="inner-login-box">
                          <form class="" action="" method="POST" id="form2">
                            <h1>Connect with us</h1>
                            <p class="highlight">*All fields are mandatory</p>
                            <input class="username-connect" type="text" placeholder="Username" name="username-connect">
                            <input class="email-connect" type="text" placeholder="email" name="email-connect">
                            <input class="password-connect" type="password" placeholder="Password" name="password-connect">
                            <input class="submit-btn" type="submit" name="submit2" value="Connect">
                            <span class="modal-close login-close" style="padding-right:10px;">X</span>
                          </form>
                        </div>
                      </div>';
                    
              }
            }
            
      
          ?>

              </div>
        <!--footer-->

        


            

        <div class="login-bg">
          <div class="inner-login-box">
            <form class="" action="" method="POST" id="form2">
              <h1>Connect with us</h1>
              <input class="username" type="text" placeholder="Username" name="username-connect">
              <input class="email" type="text" placeholder="email" name="email-connect">
              <input class="password" type="password" placeholder="Password" name="password-connect">
              <input class="submit-btn" type="submit" name="submit2" value="Connect">
              <span class="modal-close login-close" style="padding-right:10px;">X</span>
            </form>
          </div>
        </div>


        

  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/register.js"></script>
</html>
