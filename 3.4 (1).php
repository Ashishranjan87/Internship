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
                <form action="3.4_script.php" method="post">
                    <div class="c">
                        <h2>3.4: Extension Activities</h2>
                    <div class="container">
                        <div style="float: left; width: 45%">Extension activities are carried out in the neighborhood community, sensitizing students to social issues, for their holistic development, and impact there of during the last five years</div>
                        <div style="float: right; width: 50%"> <textarea name="extension" rows="5" cols="50"></textarea></div>
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
                                    <td><input type="file" name="Additional"></td>
                                </tr>
                                <tr>
                                    <td>Paste link for additional information</td>
                                    <td></td>
                                    <td><input type="text" name="link"></td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of awards and recognitions received for extension activities from government/non government recognised bodies during the last five years</div>
                        <div style="float: right; width: 50%"> <input type="number" name="numberofawards"></div>
                    </div>    
                        <div class="container">
                        <div style="float: left; width: 45%">Total number of awards and recognition received for extension activities from government/ non government recognized bodies year-wise during the last five years.</div>
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
                                    <td>Number of awards for extension activities in last five years</td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="extensionactivities"></td>
                                </tr>
                                <tr>
                                    <td>e-copy of the awards letters</td>
                                    <td></td>
                                    <td><input type="file" name="e-copy"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional2"></td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Number of extension and outreached Programmes conducted by the institution through NSS/ NCC/ Red Cross/ YRC etc.. (Including the programmes such as swach bharat, AIDS awareness, Gender issues etc.) and/ or those organised in collaboration with industry, community and NGOs during the last five years</div>
                        <div style="float: right; width: 45%"><input type="number" name="numberofextension"></div>
                    </div>
                     <div class="container">
                        <div style="float: left; width: 45%">Number of extension and outreached Programmes conducted in collaboration with industry, community and non-government organizations through NSS/ NCC/ Red Cross/ YRC etc.. year-wise during the last five years</div>
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
                                    <td>Reports of the event organized</td>
                                    <td></td>
                                    <td><input type="file" name="reportsofevents"></td>
                                </tr>
                                <tr>
                                    <td>Number of extension and outreach programmes conducted with industry, community etc for the last five years </td>
                                    <td><a href="#">Data Template</a></td>
                                    <td><input type="file" name="numberofindustry"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional3"></td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="container">
                        <div style="float: left; width: 45%">Average percentage of students participating in extension activities at 3.4.3. above during last five years</div>
                        <div style="float: right; width: 45%"><input type="number" name="studentsparticicpating"></div>
                    </div>
                    <div class="container">
                        <div style="float: left; width: 45%">Total number of students participating in extension activities conducted in collaboration with industry, community and non-government organizations such as Swachh Bharat, AIDs awareness, Gender issues etc. year-wise during last five years</div>
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
                                <td><input type="number" id="num_11" name="num_11"></td>
                                <td><input type="number" id="num_12" name="num_12"></td>
                                <td><input type="number" id="num_13" name="num_13"></td>
                                <td><input type="number" id="num_14" name="num_14"></td>
                                <td><input type="number" id="num_15" name="num_15"></td>
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
                                    <td>Reports of the event</td>
                                    <td></td>
                                    <td><input type="file" name="eventoranized"></td>
                                </tr>
                                <tr>
                                    <td>Average percentage of students participating in extension activities with Govt. or NGO etc.</td>
                                    <td></td>
                                    <td><input type="file" name="students"></td>
                                </tr>
                                <tr>
                                    <td>Any Additional information</td>
                                    <td></td>
                                    <td><input type="file" name="additional4"></td>
                                </tr>
                            </tbody>
                    </table>    
                <button type="submit" class="btn btn-success btn-block"><a href="3.5.php">Save & Next</a></button>
                    </div>
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
    
