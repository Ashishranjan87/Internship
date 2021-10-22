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
                <form action="3.5_script.php" method="POST">
                    <div class="c">
                        <h2>3.5: Collaboration</h2>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of Collaborative activities for research, Faculty exchange, Student exchange/Internship per year</div>
                        <div style="float: right; width: 50%"><input type="number" name="collaborative"></div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of collaborative activities for research, Faculty exchange, Student exchange/ internship year-wise during the last five years</div>
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
                                <td><input type="number" id="num_1" name="num_1"></td>
                                <td><input type="number" id="num_2" name="num_2"></td>
                                <td><input type="number" id="num_3" name="num_3"></td>
                                <td><input type="number" id="num_4" name="num_4"></td>
                                <td><input type="number" id="num_5" name="num_5"></td>
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
                                    <td>e-copies of related Document</td>
                                    <td></td>
                                    <td><input type="file" name="e-copies"></td>
                                </tr>
                                <tr>
                                    <td>Details of collaborative activities with institution/ industries for research, Faculty exchange, Student exchange/ internship</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="detailsofcollaborative"></td>
                                </tr>
                                <tr>
                                    <td>Any additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional"></td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of functional MoUs with institutions, other universities, industries corporate houses etc during the last five years</div>
                        <div style="float: right; width: 50%"><input type="number" name="collaborative1"></div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of functional MoUs with institutions, other universities, industries corporate houses etc. year-wise during the last five years</div>
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
                                <td><input type="number" id="num_6" name="num_6"></td>
                                <td><input type="number" id="num_7" name="num_7"></td>
                                <td><input type="number" id="num_8" name="num_8"></td>
                                <td><input type="number" id="num_9" name="num_9"></td>
                                <td><input type="number" id="num_10" name="num_10"></td>
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
                                    <td>e-copies of the MoUs with institution/ industry/ corporate houses</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="e-copiesofMoUs"></td>
                                </tr>
                                <tr>
                                    <td>Details of functional MoUs with institutions of national, international importance, other universities etc during the last five years</td>
                                    <td></td>
                                    <td><input type="file" name="detailsofMoUs"></td>
                                </tr>
                                <tr>
                                    <td>Any additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional1"></td>
                                </tr>
                            </tbody>
                    </table>   
                </div>
                <button type="submit" class="btn btn-success btn-block"><a href="4.1.php">Save & Next</a></button>    
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
    
