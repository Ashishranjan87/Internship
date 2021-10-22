<?php
    require 'connection.php';
    function  averag($num_1,$num_2,$num_3,$num_4,$num_5){
        $avg=array($num_1,$num_2,$num_3,$num_4,$num_5);
        $count=count($avg,COUNT_NORMAL);
        $average= array_sum($avg)/$count;
    }
    $Grant_Received_2019=$_POST['num_1'];
    $Grant_Received_2019=mysqli_real_escape_string($conn,$Grant_Received_2019);
    $Grant_Received_2018=$_POST['num_2'];
    $Grant_Received_2018=mysqli_real_escape_string($conn,$Grant_Received_2018);
    $Grant_Received_2017=$_POST['num_3'];
    $Grant_Received_2017=mysqli_real_escape_string($conn,$Grant_Received_2017);
    $Grant_Received_2016=$_POST['num_4'];
    $Grant_Received_2016=mysqli_real_escape_string($conn,$Grant_Received_2016);
    $Grant_Received_2015=$_POST['num_5'];
    $Grant_Received_2015=mysqli_real_escape_string($conn,$Grant_Received_2015);
    $Research_Funded_2019=$_POST['num_6'];
    $Research_Funded_2019= mysqli_real_escape_string($conn,$Research_Funded_2019);
    $Research_Funded_2018=$_POST['num_7'];
    $Research_Funded_2018= mysqli_real_escape_string($conn,$Research_Funded_2018);
    $Research_Funded_2017=$_POST['num_8'];
    $Research_Funded_2017= mysqli_real_escape_string($conn,$Research_Funded_2017);
    $Research_Funded_2016=$_POST['num_9'];
    $Research_Funded_2016= mysqli_real_escape_string($conn,$Research_Funded_2016);
    $Research_Funded_2015=$_POST['num_10'];
    $Research_Funded_2015= mysqli_real_escape_string($conn,$Research_Funded_2015);
    $Academic_Programes_2019=$_POST['num_11'];
    $Academic_Programes_2019= mysqli_real_escape_string($conn,$Academic_Programes_2019);
    $Academic_Programes_2018=$_POST['num_12'];
    $Academic_Programes_2018= mysqli_real_escape_string($conn,$Academic_Programes_2018);
    $Academic_Programes_2017=$_POST['num_13'];
    $Academic_Programes_2017= mysqli_real_escape_string($conn,$Academic_Programes_2017);
    $Academic_Programes_2016=$_POST['num_14'];
    $Academic_Programes_2016= mysqli_real_escape_string($conn,$Academic_Programes_2016);
    $Academic_Programes_2015=$_POST['num_15'];
    $Academic_Programes_2015= mysqli_real_escape_string($conn,$Academic_Programes_2015);
    $avrage_grant=$_POST ['average'];
    $percentage=$_POST['percentage'];
    $percentage= mysqli_real_escape_string($conn,$percentage);
    $noofteachers=$_POST['noofteachers'];
    $noofteachers= mysqli_real_escape_string($conn,$noofteachers);
    $percentageofdepartments=$_POST['percentageofdepartments'];
    $percetageofdepartments= mysqli_real_escape_string($conn,$percentageofdepartments);
    $query="INSERT INTO one(avrage_grant,percentage,noofteachers,percentageofdepartments,Grant_Received_2019,Grant_Received_2018,Grant_Received_2017,Grant_Received_2016,Grant_Received_2015,Research_Funded_2019,Research_Funded_2018,Research_Funded_2017,Research_Funded_2016,Research_Funded_2015,Academic_Programes_2019,Academic_Programes_2018,Academic_Programes_2017,Academic_Programes_2016,Academic_Programes_2015)VALUES('$avrage_grant','$percentage','$noofteachers','$percetageofdepartments','$Grant_Received_2019','$Grant_Received_2018','$Grant_Received_2017','$Grant_Received_2016','$Grant_Received_2015','$Research_Funded_2019','$Research_Funded_2018','$Research_Funded_2017','$Research_Funded_2016','$Research_Funded_2015','$Academic_Programes_2019','$Academic_Programes_2018','$Academic_Programes_2017','$Academic_Programes_2016','$Academic_Programes_2015')";
    $result=mysqli_query($conn, $query) or die (mysqli_error($conn));
    header("location: 3.2.php");
?>
