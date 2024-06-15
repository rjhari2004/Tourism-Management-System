<html>
<style>
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
    <h1 align="center">Explore Hotels and Rooms<h1>
<form method="POST">
            <input type="text" name="address" placeholder="Type hotels near a place">
            <input type="submit" name="submitadd" value="Go there">
            <input type="submit" name="knowmore" value="Know more about the hotels">
</form>
<?php
if(isset($_POST["submitadd"]))
{
    $add=$_POST["address"];?>
    <center><iframe width="50%" height="500" src="https://maps.google.com/maps?q=<?php echo $add; ?>&output=embed"></iframe></center>
        <?php
}
if(isset($_POST["knowmore"]))
{
   
    $add=$_POST["address"];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.google.com/search?q=$add");
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
}
?>
</body>
</html>
