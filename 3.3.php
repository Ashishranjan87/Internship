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
                <form action="3.3_script.php" method="post">
                    <div class="c">
                        <h2>3.3: Research Publications and Awards</h2>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of Ph.Ds registered per eligible teacher during the last five years</div>
                        <div style="float: right; width: 50%"> <input type="number" id ="eligible" name="eligible"></div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">How many Ph.Ds registered per eligible teacher within last five years</div>
                        <div style="float: right; width: 50%"> <input type="number" id="eligible1" name="eligible1"></div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of teachers recognized as guides during the last five years</div>
                        <div style="float: right; width: 50%"> <input type="number" id="guides" name="guides"></div>
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
                                    <td>URL to the research page on HEI website</td>
                                    <td></td>
                                    <td><input type="text" id="url" name="url"></td>
                                </tr>
                                <tr>
                                    <td>List of PhD scholar and their details like name of the guide title of thesis, year of award etc.</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="listofphd"></td>
                                </tr>
                                <tr>
                                    <td>Any additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional"></td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of research papers per teachers in the Journals notified on UGC website during the last five years</div>
                        <div style="float: right; width: 45%"><input type="number" id="researchpaper" name="researchpaper"> </div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of research papers in the Journals notified on ugc website during the last five years.</div>
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
                                    <td>List of research papers by title, author, department, name and year of publication</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" id="listofresearch" name="listofresearch"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional2"></td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of books and chapters in edited volumes/books published and papers published in national/international conference proceedings per teacher during last five years</div>
                        <div style="float: right; width: 50%"> <input type="number" id="numberofbooks" name="numberofbooks"></div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Total number of books and chapters in edited volumes/books published and papers in national/international conference proceedings year-wise during last five years</div>
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
                                    <td>List of books and chapters edited volumes/books published</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" id="listofbooks" name="listofbooks"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" id="additional3" name="additional3"></td>
                                </tr>
                            </tbody>
                    </table>    
                </div>
                    <button type="submit" class="btn btn-success btn-block"><a href="3.4.php">Save & Next</a></button>    
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