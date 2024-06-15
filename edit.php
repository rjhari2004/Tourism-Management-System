<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Train Ticket</title>
</head>
<body bgcolor="#ADD8E6">
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname"><br><br>
		<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname"><br><br>
        <label>Age:</label><input type="text" value="<?php echo $row['age']; ?>" name="age"><br><br>
        <label>Gender:</label><input type="text" value="<?php echo $row['gender']; ?>" name="gender"><br><br>
        <label>Coach:</label><input type="text" value="<?php echo $row['coach']; ?>" name="coach"><br><br>
        <label>Seat:</label><input type="text" value="<?php echo $row['seat']; ?>" name="seat"><br><br>
		<input type="submit" name="submit"><br><br>
		<a href="ticket.php">Back</a><br><br>
	</form>
</body>
</html>
