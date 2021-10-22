<?php
    require 'connection.php';
    function average($num_1,$num_2,$num_3,$num_4,$num_5){
       $avg=array($num_1,$num_2,$num_3,$num_4,$num_5);
       $count= count($avg,COUNT_NORMAL);
       $average= array_sum($avg)/$count;
    }
    $avrage_grant= mysqli_real_escape_string($conn,$_POST["average"]);
    $percentage=mysqli_real_escape_string($conn,$_POST["percentage"]);
    $noofteachers=mysqli_real_escape_string($conn,$_POST["noofteachers"]);
    $query="INSERT INTO 'one' (avrage, percentage, noofteachers) VALUES('$avrage_grant', '$percentage', '$noofteachers')";
?>