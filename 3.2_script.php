<?php
    require 'connection.php';    
    $Additional_link=$_POST['link'];
    $Additional_link=mysqli_real_escape_string($conn,$Additional_link);
    $No_of_workshops_2019=$_POST['num_1'];
    $No_of_workshops_2019=mysqli_real_escape_string($conn,$No_of_workshops_2019);
    $No_of_workshops_2018=$_POST['num_2'];
    $No_of_workshops_2018=mysqli_real_escape_string($conn,$No_of_workshops_2018);
    $No_of_workshops_2017=$_POST['num_3'];
    $No_of_workshops_2017=mysqli_real_escape_string($conn,$No_of_workshops_2017);
    $No_of_workshops_2016=$_POST['num_4'];
    $No_of_workshops_2016=mysqli_real_escape_string($conn,$No_of_workshops_2016);
    $No_of_workshops_2015=$_POST['num_5'];
    $No_of_workshops_2015=mysqli_real_escape_string($conn,$No_of_workshops_2015);
    $inovations=$_POST ['inovations'];
    $inovations= mysqli_real_escape_string($conn,$inovations);
    $noofworkshops=$_POST['noofworkshops'];
    $noofworkshops= mysqli_real_escape_string($conn,$noofworkshops);    
    $query="INSERT INTO two(inovations,noofworkshops,No_of_workshops_2019,No_of_workshops_2018,No_of_workshops_2017,No_of_workshops_2016,No_of_workshops_2015,Additional_link)VALUES('$inovations','$noofworkshops','$No_of_workshops_2019','$No_of_workshops_2018','$No_of_workshops_2017','$No_of_workshops_2016','$No_of_workshops_2015','$Additional_link')";
    $result=mysqli_query($conn, $query) or die (mysqli_error($conn));
    header("location: 3.3.php");
?>
