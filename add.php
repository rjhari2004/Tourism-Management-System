<?php
	include('conn.php');
	$ss=$_POST['sstation'];
	$es=$_POST['estation'];
	$tn=$_POST['tn'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $coach=$_POST['coach'];
    $seat=$_POST['seat'];
	$jd=$_POST['jd'];
	if(isset($_POST['newt']))
	{
		mysqli_query($conn,"delete from `user`");
		$f=fopen("Ticket.txt","w+");
		fwrite($f," ");
		fclose($f);
	}
	if(isset($_POST['add'])){
	mysqli_query($conn,"insert into `user` (firstname,lastname,age,gender,coach,seat) values ('$firstname','$lastname','$age','$gender','$coach','$seat')");
	$f=fopen("Ticket.txt","a+");
			fwrite($f,"Train Ticket\n");
			fwrite($f,"Starting Station :".$ss."\n");
			fwrite($f,"End Station :".$es."\n");
			fwrite($f,"Train name :".$tn."\n");
			fwrite($f,"Journey date :".$jd."\n");
		fwrite($f,"First Name :".$firstname."\n");
		fwrite($f,"Last Name :".$lastname."\n");
		fwrite($f,"Age:".$age."\n");
		fwrite($f,"Gender:".$gender."\n");
		fwrite($f,"Coach:".$coach."\n");
		fwrite($f,"Seat :".$seat."\n");
		fclose($f);
}
	header('location:ticket.php');
 
?>
