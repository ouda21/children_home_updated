<?php include "php/functions.php"?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Contact</title>
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
                            <h2>Contact Us</h2>
                            
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="contact_area p_120">
                <div class="container">
                    <div id="mapBox" class="mapBox">
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="contact_info">
                                <div class="info_item">
                                    <i class="lnr lnr-home"></i>
                                    <h6>Strathmore University</h6>
                                    <p>Off Ole-sangale link road</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <h6>
                                        <a href="#">+2547030302101</a>
                                    </h6>
                                    <p>Mon to Fri 9am to 6 pm</p>
                                </div>
                                <div class="info_item">
                                    <i class="lnr lnr-envelope"></i>
                                    <h6>
                                        <a href="#">support@strathmore.edu</a>
                                    </h6>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
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