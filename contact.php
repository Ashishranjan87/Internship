<?php
    require 'header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Contact</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    </head>
    <body>
        <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Sign up</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>MIT Academy Of Engineering,<br>Alandi,Pune,<br>Maharastra,412105</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>7633063440</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>ashishranjan@mitaoe.ac.in</p>
                        </div>
                    </div>
                </div> 
                
        </section>
        </div>
         <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</head>
</html>