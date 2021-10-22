<?php
require 'connection.php';    
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
                <br>
                <form>
                    <div class="c">
                        <h2>3.2: Innovation Ecosystem</h2>
                    <div class="container">
                        <div style="float: left; width: 45%">Institution has creayed an ecosystem for innovations and has initiatives for creation and transfer of knowledge</div>
                        <div style="float: right; width: 50%"> <textarea name="inoovations" rows="5" cols="50"></textarea></div>
                    </div>
                        <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <th>File Description</th>
                                    <th>Template</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Upload any additional information</td>
                                    <td></td>
                                    <td><input type="file" name="adiitional"></td>
                                </tr>
                                <tr>
                                    <td>Paste link for additional information</td>
                                    <td></td>
                                    <td><input type="text" name="link"></td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of workshops/seminar conducted on Research Methodology, Intellectual Property Rights(IPR) and enterpreneurship during last five years</div>
                        <div style="float: right; width: 45%"><input type="number" name="Percentage" readonly=""> </div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Total number ofworkshops/seminars conducted on Research Methodology, Intellectual Property Rights(IPR) and enterpreneurship year-wise during last five yeasr</div>
                        <div style="float: right; width: 45%">
                            <table>
                            <tr>
                                <td>2018-2019</td>
                                <td>2017-2018</td>
                                <td>2016-2017</td>
                                <td>2015-2016</td>
                                <td>2014-2015</td>
                            </tr>
                            <tr>
                                <td><input type="number" id="num_6"></td>
                                <td><input type="number" id="num_7"></td>
                                <td><input type="number" id="num_8"></td>
                                <td><input type="number" id="num_9"></td>
                                <td><input type="number" id="num_10"></td>
                            </tr>
                            </table>
                        </div>
                    </div>
                     <table border="1" width="100%">
                            <thead>
                                <tr>
                                    <th>File Description</th>
                                    <th>Template</th>
                                    <th>Documents</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Report of the event</td>
                                    <td></td>
                                    <td><input type="file" name="eventreport"></td>
                                </tr>
                                <tr>
                                    <td>List of workshops/seminars during last five years</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="eventreport"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional2"></td>
                                </tr>
                            </tbody>
                    </table>
                      
                </div>
                    <button type="submit" class="btn btn-success btn-block"><a href="3.3.php">Save & Next</a></button>    
                </form>
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