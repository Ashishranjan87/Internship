<?php
	require 'header.php';
        require 'connection.php';
	if(!isset($_SESSION["email_id"])){
		header("location: Index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<div class="container">
    <div class="alert alert-success">
        <p>You have successfully logged out.</p>
    </div>
</div>
