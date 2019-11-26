<?php
	include "php/worker_functions.php";
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Donate</title>
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
                    <ul class="navbar-nav nav-list">
                    <li class="nav-item text-right"><a class="nav-link" href="worker_landin.php">Home</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="company_data.php">Company Data</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="worker_donate.php">Donate</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="worker_family.php">Family</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="worker_donation_history.php">History</a></li>
						<li class="nav-item text-right"><a class="nav-link" href="worker_profile.php"><?php echo $_SESSION["username"]?></a></li>
						<li class="nav-item text-right"><a class="nav-link" href="php/logout.php">Log Out</a></li>
                    </ul>
                    </ul>
                    </ul>
                     <a  class="btn btn-bg btn-danger get-started" href="worker_register_child.php">Register Street Child</a>
                </nav>
            </header>
            <section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Make Donation</h2>
					
				</div>
			</div>
		</div>
	</section>
    
    
    <section class="make_donation section_gap">
		<div class="container">
			<div class="row justify-content-start section-title-wrap">
				<div class="col-lg-12">
					<h1>Donate Food</h1>
					<p>
                        The food that rots in our store or we throw into bins and dumpsites every day can help another who is going hungry at a place you don't know.
                        Donate that food so that we can deliver it to those who need it
					</p>
				</div>
			</div>

			<div class="donate_now_wrapper">
                <div class="food-form">
                    <form method="POST" action="php/functions.php">
                        <input type="text" name="name" value="<?php echo UserDetails("first_name")?>" placeholder="Name..." readonly>
                        <input type="email" name="email" value="<?php echo UserDetails("email")?>" placeholder="Email... e.g ouda@" readonly>
                        <input type="text" name="food" placeholder="Food donated, e.g Tomatoes..." Required>
                        <input type="text" name="quantity" placeholder="Quantity...e.g 1 crate...(optional)">
                        <div class="col-lg-4">
							<div class="donate_box">
								<button type="submit" name="donate_food" class="btn btn-danger w-100">donate now</button>
							</div>
						</div>
                    </form>
                </div>
			</div>
		</div>
	</section>


	<section class="make_donation section_gap">
		<div class="container">
			<div class="row justify-content-start section-title-wrap">
				<div class="col-lg-12">
					<h1>Donate Money</h1>
					<p>
						Food from waste collection might not satisfy thousands and tens of thousands going hungry every day and night.
						Money donated from a caring heart, will give shelter and clothing too.
					</p>
                </div>
			</div>

			<div class="donate_now_wrapper">
				<form action="php/functions.php" method="POST">
					<div class="row">
						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" value="10" id="ten_doller">
									<label class="form-check-label d-flex justify-content-between" for="ten_doller">
										<div class="label_text">
											ksh.10.00
										</div>
										<div class="label_text">
											ksh
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" value="20" id="fifty_doller">
									<label class="form-check-label d-flex justify-content-between" for="fifty_doller">
										<div class="label_text">
											ksh.20.00
										</div>
										<div class="label_text">
											ksh
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" value="50" id="hundred_doller">
									<label class="form-check-label d-flex justify-content-between" for="hundred_doller">
										<div class="label_text">
											ksh.50.00
										</div>
										<div class="label_text">
											ksh
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" value="100" id="two_fifty__doller">
									<label class="form-check-label d-flex justify-content-between" for="two_fifty__doller">
										<div class="label_text">
											ksh.100.00
										</div>
										<div class="label_text">
											ksh
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<div class="form-group">
									<input type="text" placeholder="Others" name="other" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Others'" class="form-control">
									<span class="fs-14">ksh</span>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<button type="submit" name="donate_money" class="main_btn w-100">donate now</button>
							</div>
						</div>
					</div>
				</form>
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