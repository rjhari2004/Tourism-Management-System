<!DOCTYPE html>
<html>
<style>
        p{
			border-style:solid;
			border-width:thick;
			border-color:blue;
			color:white;
			font-size:20px;
			background-color:#00B2C2;
		}
        header{
			background-color:blue;
			color:white;
		}
		ul{
			list-style-type:none;
			margin:0;
			padding:0;
			overflow:hidden;
		}
		
		nav ul li{
			dispaly: inline-block;
			line-height: 80px;
			margin: 0 5px;
		}
		li{
			float:left;}
		a#k:link, a#k:visited{
			display:block;
			font-weight:bold;
			color:white;
			background-color:blue;
			width:150px;text-align:center;padding:4px;text-transform:uppercase;text-decoration:none;}
		a#k:hover,a#k:active{
			background-color:#7a991a;}
			img{
				float:right;
			}
        </style>
        <header>
	<nav>
	<ul>
		<li><a style="width:100px;"class="font-effect-shadow" id="k" href="home.php">HOME</a></li>
		<li><a class="font-effect-shadow" style="width:100px;" id="k" href="maps.php">EXPLORE</a></li>
		<li><a class="font-effect-shadow" style="width:180px;" id="k" href="ticket.php">TRAIN BOOKING</a></li>
		<li><a class="font-effect-shadow" style="width:180px;" id="k" href="roomexp.php">EXPLORE ROOMS</a></li>
		<li><a class="font-effect-shadow" style="width:180px;" id="k" href="bookroom.php">BOOK ROOMS</a></li>
		</ul></nav>
	</header>
<body bgcolor="#ADD8E6">
    <h1 align="center">Train Ticket Booking</h1>
	<div>
		<form method="POST" action="add.php">
			<label>Starting Station:</label><input type="text" name="sstation"><img border="20" width="50%" height="50%" src="https://th.bing.com/th/id/R.092119bb3a781f917f7df4f37b8c616e?rik=Ia6YGlZxKOnsWQ&riu=http%3a%2f%2fmedia.cleveland.com%2fmetro%2fphoto%2fsteam-engine-3jpg-ac558701a63b0b8f.jpg&ehk=CENFrq%2bS3HnZN5zqGEsQpyBKyBn4qYDghlwvgmxN3hY%3d&risl=&pid=ImgRaw&r=0"><br><br>
			<label>Ending Station:</label><input type="text" name="estation"><br><br>
			<label>Train name:</label><input type="text" name="tn"><br><br>
			<label>Journey date:</label><input type="text" name=jd"><br><br>
			<label>Firstname:</label><input type="text" name="firstname"><br><br>
			<label>Lastname:</label><input type="text" name="lastname"><br><br>
            <label>Age:</label><input type="text" name="age"><br><br>
            <label>Gender:</label><input type="text" name="gender"><br><br>
            <label>Coach:</label><input type="text" name="coach"><br><br>
            <label>Seat:</label><input type="text" name="seat"><br><br>
			<input type="submit" name="add"><br><br>
             <a href="gonew.php" ><input type="button" name="print" value="Done"></a><br><br>
			 <input type="submit" name="newt" value="New Ticket"><br><br>
			 <b>Note:If you have clicked individual delete or edit then you have to change Ticket.txt manually</b>
		</form>
	</div>
	<br>
	<div>
		<table border="1" align="center">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Coach</th>
                <th>Seat</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname'];?></td>
							<td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['coach']; ?></td>
                            <td><?php echo $row['seat']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
