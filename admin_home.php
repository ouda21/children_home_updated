<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("location:admin_login.php");
    }
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <meta name="author" content="Ouda Wycliffe">
            <meta charset="UTF-8">
            <title>Dashboard</title>

            <link rel="stylesheet" href="css/index.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/admin.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script src="js/admin.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        </head>
        <body>
        <header class="switcher-bar clearfix header text-center">
                <nav class="navbar navbar-nav navbar-expand-lg navbar-dark bg-dark navigation">
                    <div class="logo textual pull-left navbar-brand">Helping</div>
                    <ul class="navbar-nav nav-list">
                    <ul class="navbar-nav nav-list">
                        <li class="nav-item text-right"><a class="nav-link" href="admin_home.php">Home</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="manage_users.php">Manage Users</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="manage_children.php">Manage Children</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="manage_workers.php">Manage Workers</a></li>
                        <li class="nav-item text-right"><a class="nav-link" href="donations.php">Donations</a></li>
						<li class="nav-item text-right"><a class="nav-link" href="admin_profile.php"><?php echo $_SESSION["username"]?></a></li>
						<li class="nav-item text-right"><a class="nav-link" href="php/logout.php">Log Out</a></li>
                    </ul>
                    </ul>
                     <a  class="btn btn-bg btn-danger get-started" href="admin_register_child.php">Register Street Child</a>
                </nav>
            </header>
        <main class="content">
            <div class="container calender">
                <div class="row">
                    <div class="col-sm">
                        <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23AD1457&amp;ctz=Africa%2FNairobi&amp;src=ZW4ua2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%231F753C&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;showCalendars=0&amp;showDate=1" style="border-width:0" width="400" height="400" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
            <section>
            <span class="border maintainance">
                <h3 class="text-left">Maintainace</h3>
                <span class="right-header1"><h5>Word</h5></span>
                <span class="right-header"><h5>Occupation</h5></span>
                <span class="plus text-right"><h5>&#10133</h5></span>
                <div class="circle">
                    <div class="text-center word"><h3>150</h3></div>
                    <div class="text-center word"><h5>Total</h5></div>
                </div>
                <div class="small-circle">
                </div>
                <h6 class="word-small">Word 1</h6>
                <div class="small-circle2">
                </div>
                <h6 class="word-small2">Word 1</h6>
            </span>
            </section>
            <section>
                <span class="border notification">
                <h3 class="text-center">Notification</h3>
                
                <span class="plus text-right" style="margin-top:-20px;"><h5>&#10133</h5></span>
                <div class="border border-danger clock">
                    <div class="icon"><i style="font-size:180px;" class="fa fa-tint"></i><p style="margin-top:10px;">Manage Users<br></p></div>
                    <hr>

                </div>
                <div class="border border-danger clock2">
                    <div class="icon"><i style="font-size:130px;" class="fa fa-tv"></i><p style="margin-top:50px;">Add Users<br></p></div>
                    <hr>

                </div>
                <div class="border border-danger clock3">
                    <div class="icon"><i style="font-size:130px;" class="fa fa-compass"></i><p style="margin-top:50px;">Navigate<br></p></div>
                    <hr>

                </div>
            </span>
            </section>
            <section>
                <div class="border graph">
                    <div id="curve_chart" style="width: 1000px; height: 300px"></div>
                </div>
            </section>
            <section>
                <div class="border last">
                    <div class="icon"><i style="font-size:130px;" class="fa fa-hotel"></i><p>Help<span style="color:red">Children</span></p></div>
                </div>
            </section>
        </main>
        </body>
    </html>