<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Self Study Report Generator</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            require 'header.php';
        ?>    
            <!-- Page Content Holder -->
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

                <p>Download Forum</p>
                <div class="container">
                    <div style="float: left; width: 45%">Download Criteria 3.1</div>
                    <div style="float: right; width: 45%"><button class="btn"><i class="fa fa-download"></i><a href="3.1_pdf.php">Download</a></button></div>
                </div>
                <div class="container">
                    <div style="float: left; width: 45%">Download Criteria 3.2</div>
                    <div style="float: right; width: 45%"><button class="btn"><i class="fa fa-download"></i><a href="3.2_pdf.php">Download</a></button></div>
                </div>
                <div class="container">
                    <div style="float: left; width: 45%">Download Criteria 3.3</div>
                    <div style="float: right; width: 45%"><button class="btn"><i class="fa fa-download"></i><a href="3.3_pdf.php">Download</a></button></div>
                </div>
                <div class="container">
                    <div style="float: left; width: 45%">Download Criteria 3.4</div>
                    <div style="float: right; width: 45%"><button class="btn"><i class="fa fa-download"></i><a href="3.4_pdf.php">Download</a></button></div>
                </div>
                <div class="container">
                    <div style="float: left; width: 45%">Download Criteria 3.5</div>
                    <div style="float: right; width: 45%"><button class="btn"><i class="fa fa-download"></i><a href="3.5_pdf.php">Download</a></button></div>
                </div><div class="container">
                    <div style="float: left; width: 45%">Download Criteria 3</div>
                    <div style="float: right; width: 45%"><button class="btn"><i class="fa fa-download"></i><a href="3_pdf.php">Download</a></button></div>
                </div>
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