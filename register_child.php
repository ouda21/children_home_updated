<?php include "php/functions.php"?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Register Child</title>
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

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

            <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Comfortaa|PT+Sans+Caption&display=swap" rel="stylesheet">
            <style>
                .food-form{
                    width:70%;
                    left:1;
                    right:1;
                    border:1px silver;
                }
                .food-form form{
                    width:70%;
                    border:1px silver;
                }
                .food-form form input{
                    width:90%;
                    height:60px;
                    margin-bottom:20px;
                    background-color:#f9f9ff;
                    color: $dip;
                    font-size: 18px;
                    font-weight: 500;
                    border: 1px solid $gray;
                }
            </style>
        </head>
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
					<h2>Register Child</h2>
					
				</div>
			</div>
		</div>
	</section>
    
    
    <section class="make_donation section_gap">
		<div class="container">
			<div class="row justify-content-start section-title-wrap">
				<div class="col-lg-12">
					<h1>Recommend a Street Child</h1>
					
				</div>
			</div>

			<div class="donate_now_wrapper">
                <div class="food-form">
                    <form method="POST" action="php/functions.php" enctype="multipart/form-data">
                        <input type="file" name="pic" value="" placeholder="Name..." required>
                        <input type="text" name="name" value="" placeholder="Name..." required>
                        <input type="text" name="gender" value="" placeholder="eg.Male or Female" required>
                        <input type="number" name="age" value="" placeholder="Age" required>
                        <input type="text" name="country" value="" placeholder="eg.Kenya" required>
                        <input type="text" name="county" value="" placeholder="eg.Nairobi,Kisumu,Mombasa" required>
                        <input type="text" name="father" value="" placeholder="Name of Father" required>
                        <input type="text" name="mother" value="" placeholder="Name of Mother" required>
                        
                        <div class="col-lg-4">
							<div class="donate_box">
								<button type="submit" name="register_kid" class="btn btn-danger w-100">Submit</button>
							</div>
						</div>
                    </form>
                </div>
			</div>
		</div>
	</section>


	
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