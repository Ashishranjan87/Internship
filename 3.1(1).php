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
                <form action="3.1_script.php" method="post">
                    <div class="c">
                        <h2>3.1: Resource Mobilization for Research</h2>
                    <div class="container">
                        <div style="float: left; width: 45%">Grants received from Government and non-government agencies for research projects,endowments, chairs in the institution during the last five years</div>
                        <div style="float: right; width: 45%"><input type="number" id="average" name="average" readonly=""adonli> </div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Total Grants from Government and non-government agencies for research projects, endowments, chairs in the institution during last five years (INR in Lakhs)</div>
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
                                    <td>List of endowments/ projects with details of grants</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="grants"></td>
                                </tr>
                                <tr>
                                    <td>e-copies of the grant award letter for sponsored research projects/endowments</td>
                                    <td></td>
                                    <td><input type="file" name="grant-award"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" nmae="additional"></td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Percentage of teachers recognized as research guide (latest completed academic year)</div>
                        <div style="float: right; width: 45%"><input type="number" id="percentage" name="percentage"> </div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of teachers recognized as research guides</div>
                        <div style="float: right; width: 45%"><input type="number" id="noofteachers" name="noofteachers"></div>    
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
                                    <td>Institutional data in prescribed format</td>
                                    <td></td>
                                    <td><input type="file" name="institutional"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional1"></td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Percentage of departments having research projects funded by govenment and non government agencies during last five years</div>
                        <div style="float: right; width: 45%"><input type="number" id="percentageofdepartments" name="percentageofdepartments" readonly=""></div>    
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of departments having research projects funded by government and non government agencies during last five years</div>
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
                    <div class="container">
                        <div style="float: left; width: 45%">Number of departments offering academic programes</div>
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
                                <td><input type="number" id="num_11"></td>
                                <td><input type="number" id="num_12"></td>
                                <td><input type="number" id="num_13"></td>
                                <td><input type="number" id="num_14"></td>
                                <td><input type="number" id="num_15"></td>
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
                                    <td>Supporting document from funding agency</td>
                                    <td></td>
                                    <td><input type="file" name="fundingagency"></td>
                                </tr>
                                <tr>
                                    <td>Paste link to funding agency website</td>
                                    <td></td>
                                    <td><input type="text" name="fundingagencylink"></td>
                                </tr>
                                <tr>
                                    <td>list of research projects and funding details</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="fundingdetails"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional1"></td>
                                </tr>
                            </tbody>
                    </table>    
                </div>
                    <button type="submit" class="btn btn-success btn-block">Save & Next</button>    
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
    </body>
</html>
