<?php
    include "php/worker_functions.php";

?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<title>Family</title>
            <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/index.css">
            <link rel="stylesheet" href="css/style.css">

            <link rel="stylesheet" href="css_2/bootstrap.css">
            <link rel="stylesheet" href="vendors/linericon/style.css">
            <link rel="stylesheet" href="css_2/font-awesome.min.css">
            <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
            <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
            <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
            <link rel="stylesheet" href="vendors/animate-css/animate.css">
            <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
            
            <link rel="stylesheet" href="css_2/style.css">
            <link rel="stylesheet" href="css_2/responsive.css">
            <link rel="stylesheet" href="css/admin.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

            <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Comfortaa|PT+Sans+Caption&display=swap" rel="stylesheet">
</head>

<body>

	
<header class="switcher-bar clearfix header">
                <nav class="navbar navbar-nav navbar-expand-lg navbar-dark bg-dark navigation">
                    <div class="logo textual pull-left navbar-brand">Helping</div>
                    <ul class="navbar-nav nav-list">
                        <li class="nav-item text-right"><a class="nav-link" href="user_landing.php">Home</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="register_child.php">Register Street Child</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="donate.php">Donate</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="user_history.php">History</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="user_family.php">Family</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="donate.php"><?php echo $_SESSION["username"]?></a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="php/logout.php">Log Out</a></li>
                    </ul>
                     <a  class="btn btn-bg btn-danger get-started" href="register_child.php">Register Street Child</a>
                </nav>
            </header>
	
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Children Registered by You, </h2>
					
				</div>
			</div>
		</div>
	</section>
	

	<section class="about_us section_gap">
        <h2 style="text-align:center;">Children</h2>
		<div class="container">
			<?php showApprovedChildren1() ?>
		</div>
	</section>
    
    
	

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<hr>
			</div>
		</div>
	</div>

	
	

	<footer class="page-footer font-small cyan darken-3 footer">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 py-5">
                        <div class="mb-5 flex-center">
                        <a class="fb-ic ic">
                            <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="tw-ic ic">
                            <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="gplus-ic ">
                            <i class="fa fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="li-ic">
                            <i class="fa fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="ins-ic">
                            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <a class="pin-ic">
                            <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                    <a href="#"> Ouda</a>
                </div>
            </footer>

	
</body>

</html>