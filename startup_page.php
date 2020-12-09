<?php
    $id = $_GET['id'];
    require __DIR__ .'/user.php';
    $startup = getStartup($id); 
    //$startups=json_decode(file_get_contents('./assets/data/startups_data.json'));
?>

<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Place Your Startup</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/index.css" />
        <link rel="stylesheet" href="assets/css/startup_page.css" />
        <link rel="stylesheet" href="assets/css/register_startup.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	</head>
	<body class="homepage startup_page">
    <div class="div1">
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

                  <li class="nav-item active">
                    <a class="nav-link contact" href="#div5">Contact</a>
                  </li>
                  
                </ul>
                <form class="form-inline my-2 my-lg-0">
          
                  <!--<button class="btn btn-light">Register</button>-->
                </form>
              </div>
          </nav>
        </div>
        <!--startup details-->
        <div class="div2">
            <div class="details">
                <div class="jumbo">
                    <h1 class="text-light s_name"><?php echo $startup->name ?></h1>
                    <div class="btn-group mt-2 mb-4" role="group" aria-label="actionButtons">
                        <a href="<?php echo $startup->website ?>" target="_blank" class="d-block btn btn-outline-light">Visit my Website<i class="fas fa-external-link-square-alt ml-2"></i></a>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
                    
                </div>
                <div class="row buttons">
                    <!--
                    <button type="button" class="btn btn-light btn-lg">Profile</button>
                    <button type="button" class="btn btn-light btn-lg">Documents</button>
                    -->
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item profile-tab-li">
                            <button class="nav-link active profile-tab" href="#">Profile</button>
                          </li>
                          <li class="nav-item document-tab-li">
                            <button class="nav-link disabled document-tab" href="#">Members</button>
                          </li>
                          <li class="nav-item gallery-tab-li">
                            <button class="nav-link disabled gallery-tab" href="#" tabindex="-1" aria-disabled="true">Gallery</button>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="content row">
                    <div class="card-deck">
                        <div class="card main-card profile">
                            <div class="card-body">
                                <h5 class="card-title">Startup Details</h5>
                                <p class="my-3 p-3 bg-white rounded shadow-sm profile-info"><?php echo $startup->details ?></p>

                                <div class="tools card-deck">
                                    <div class="alert alert-primary col-sm-6" role="alert">
                                        <p style="font-weight: bold;">STAGE</p>
                                        <p class="stage"><?php echo $startup->stage ?></p>
                                      </div>
                                      <div class="alert alert-secondary col-sm-6" role="alert">
                                        <p style="font-weight: bold;">FOCUS INDUSTRY</p>
                                        <p class="focus-industry"><?php echo $startup->focusIndustry ?></p>
                                      </div>
                                      <div class="alert alert-success col-sm-6" role="alert">
                                        <p style="font-weight: bold;">FOCUS SECTOR</p>
                                        <p class="focus-sector"><?php echo $startup->focusSector ?></p>
                                      </div>
                                      <div class="alert alert-danger col-sm-6" role="alert">
                                        <p style="font-weight: bold;">SERVICE AREA</p>
                                        <p class="service-area"><?php echo $startup->serviceArea ?></p>
                                      </div>
                                      <div class="alert alert-warning col-sm-6" role="alert">
                                        <p style="font-weight: bold;">No. OF ACTIVE YEARS</p>
                                        <p class="years"><?php echo $startup->noActiveYears ?></p>
                                      </div>
                                      <div class="alert alert-info col-sm-6" role="alert">
                                        <p style="font-weight: bold;">LOCATION</p>
                                        <p class="location"><?php echo $startup->location ?></p>
                                      </div>
                                </div>    
                            </div>
                        </div>                   
                        
                        <div class="card main-card document" style="display: none;">
                            <div class="card-body">
                                <h5 class="card-title">Members</h5>    
                                    <div class="my-3 p-3 bg-white rounded shadow">
                                      
                                    <?php
                                        foreach($startup->members as $member){
                                          echo '<div class="media text-muted pt-3">
                                                  <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                                                  <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                  <strong class="d-block text-gray-dark">'.$member->name.'</strong>
                                                  '.$member->text.'
                                                  </p>
                                                </div>';
                                        }
                                    ?>

                                      <!--
                                      <div class="media text-muted pt-3">
                                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                          <strong class="d-block text-gray-dark">@username</strong>
                                          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                      </div>
                                      <div class="media text-muted pt-3">
                                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                          <strong class="d-block text-gray-dark">@username</strong>
                                          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                      </div>
                                      <div class="media text-muted pt-3">
                                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
                                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                          <strong class="d-block text-gray-dark">@username</strong>
                                          Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                        </p>
                                      </div>
                                      -->
                                    </div>
                            
                          

                                <div class="tools card-deck">
                                  <div class="alert alert-primary col-sm-6" role="alert">
                                      <p style="font-weight: bold;">STAGE</p>
                                      <p class="stage"><?php echo $startup->stage ?></p>
                                    </div>
                                    <div class="alert alert-secondary col-sm-6" role="alert">
                                      <p style="font-weight: bold;">FOCUS INDUSTRY</p>
                                      <p class="focus-industry"><?php echo $startup->focusIndustry ?></p>
                                    </div>
                                    <div class="alert alert-success col-sm-6" role="alert">
                                      <p style="font-weight: bold;">FOCUS SECTOR</p>
                                      <p class="focus-sector"><?php echo $startup->focusSector ?></p>
                                    </div>
                                    <div class="alert alert-danger col-sm-6" role="alert">
                                      <p style="font-weight: bold;">SERVICE AREA</p>
                                      <p class="service-area"><?php echo $startup->serviceArea ?></p>
                                    </div>
                                    <div class="alert alert-warning col-sm-6" role="alert">
                                      <p style="font-weight: bold;">No. OF ACTIVE YEARS</p>
                                      <p class="years"><?php echo $startup->noActiveYears ?></p>
                                    </div>
                                    <div class="alert alert-info col-sm-6" role="alert">
                                      <p style="font-weight: bold;">LOCATION</p>
                                      <p class="location"><?php echo $startup->location ?></p>
                                    </div>
                              </div>    
                            </div>
                        </div>                    

                        <div class="card main-card gallery" style="display: none;">
                            <div class="card-body">
                                <h5 class="card-title">gallery Details</h5>
                                <p class="gallery-info">{%GALLERY%}</p>

                                <div class="tools card-deck">
                                  <div class="alert alert-primary col-sm-6" role="alert">
                                      <p style="font-weight: bold;">STAGE</p>
                                      <p class="stage"><?php echo $startup->stage ?></p>
                                    </div>
                                    <div class="alert alert-secondary col-sm-6" role="alert">
                                      <p style="font-weight: bold;">FOCUS INDUSTRY</p>
                                      <p class="focus-industry"><?php echo $startup->focusIndustry ?></p>
                                    </div>
                                    <div class="alert alert-success col-sm-6" role="alert">
                                      <p style="font-weight: bold;">FOCUS SECTOR</p>
                                      <p class="focus-sector"><?php echo $startup->focusSector ?></p>
                                    </div>
                                    <div class="alert alert-danger col-sm-6" role="alert">
                                      <p style="font-weight: bold;">SERVICE AREA</p>
                                      <p class="service-area"><?php echo $startup->serviceArea ?></p>
                                    </div>
                                    <div class="alert alert-warning col-sm-6" role="alert">
                                      <p style="font-weight: bold;">No. OF ACTIVE YEARS</p>
                                      <p class="years"><?php echo $startup->noActiveYears ?></p>
                                    </div>
                                    <div class="alert alert-info col-sm-6" role="alert">
                                      <p style="font-weight: bold;">LOCATION</p>
                                      <p class="location"><?php echo $startup->location ?></p>
                                    </div>
                              </div>    
                            </div>
                        </div>                    

                    
                        <div>
                            <div class="card sub-card card-columns">
                                <div class="shadow card-body ratings">
                                    <h2>Star Rating</h2>
                                    <?php
                                      $rating = number_format($startup->ratings);
                                      for($r=0 ; $r < 5 ; $r++){
                                        if($r<$rating){
                                          echo '<span class="fa fa-star checked"></span>';
                                        }
                                        else{
                                          echo '<span class="fa fa-star unchecked"></span>';
                                        }
                                      };
                                    ?>
                                    <!--
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    -->
                                </div>
                            </div>
                            <div class="card sub-card card-columns">
                                <div class="card-body reviews">
                                    <h2>Reviews:</h2>
                                    <ul class="list-group list-group-flush">
                                      <?php
                                        foreach($startup->reviews as $review){
                                          echo '<li class="list-group-item">'.$review->text.'</li>';
                                        }
                                      ?>
                                    <!--
                                      <li class="list-group-item">very nice very nice very nice very nice </li>
                                      <li class="list-group-item">very good</li>
                                    -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card sub-card card-columns">
                                <div class="card-body team">
                                  <h2>Contact:</h2>
                                    <ul class="list-group list-group-flush">
                                      <li class="list-group-item">
                                        <ul class="phone">
                                          <h4>Contact number:</h4>
                                          <?php
                                            foreach ($startup->contact->phone as $phone){
                                              echo '<li>'.$phone->text.'</li>';
                                            }
                                          ?>
                                          <!--
                                          <li>very nice very nice </li>
                                          <li>very good</li>
                                          -->
                                        </ul>
                                      </li>
                                      <li class="list-group-item">
                                        <ul class="email">
                                          <h4>Email ID:</h4>
                                          <?php
                                            foreach ($startup->contact->email as $email){
                                              echo '<li>'.$email->text.'</li>';
                                            }
                                          ?>
                                          <!--
                                          <li>very nice very nice </li>
                                          <li>very good</li>
                                          -->
                                        </ul>
                                      </li>
                                      <li class="list-group-item">
                                        <ul class="LinkedIn">
                                          <h4>LinkedIn:</h4>
                                          <?php
                                            foreach ($startup->contact->LinkedIn as $LinkedIn){
                                              echo '<li>'.$LinkedIn->text.'</li>';
                                            }
                                          ?>
                                          <!--
                                          <li>very nice very nice </li>
                                          <li>very good</li>
                                          -->
                                        </ul>
                                      </li>
                                    </ul>
                                      <!--
                                        <li class="list-group-item">very nice very nice very nice very nice </li>
                                        <li class="list-group-item">very good</li>
                                        -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="documents">

                </div>
            </div>
        </div>
        
        <!--startup details-->
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
        <!--footer-->

    </body>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/js/startup_page.js"></script>




</html>
