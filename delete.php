<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `user` where userid='$id'");
	$f=fopen("Ticket.txt","a+");
	fwrite($f,"The above person's ticket is deleted with user id ".$id."\n");
	fclose($f);
	header('location:ticket.php');
?>
