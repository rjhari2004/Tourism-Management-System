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
			display: inline-block;
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
		</ul>
    </nav>
	</header>
        <body bgcolor="#ADD8E6">
            <h1 align="center">Room Booking</h1>
            <form action="bookroom.php" method="POST">
            <label>Name of hotel:</label><input type="text" name="hn"><br><br><img border="10" height="40%" width="40%" src="https://tse1.mm.bing.net/th?id=OIP.ABqXFuAsE0hP1jEjf1dGBAHaFj&pid=ImgDet&w=3328&h=2496&rs=1">
            <label>Type of room (single bed ,double bed):</label><input type="text" name="rt"><br><br>
            <label>Check in date :</label><input type="text" name="da"><br><br>
            <label>Number of days :</label><input type="text" name="nd"><br><br>
            <label>Number of rooms :</label><input type="text" name="nr"><br><br>
            <input type="submit" value="Book Room" name="br"><br><br>
            <input type="submit" value="Book new room" name="bnr"><br><br>
            </form>
            <?php
            if(isset($_POST['br'])){
                if($_POST['rt']=="single bed")
                {
                    $c=1000;
                }
                else
                $c=2000;
                $nod=(int)$_POST['nd'];
                $nor=(int)$_POST['nr'];
                echo "Cost :".$nod*$nor*$c;
                $f=fopen("BookRoom.txt","a+");
                fwrite($f,"Hotel Room Booking\n");
                fwrite($f,"Hotel name :".$_POST['hn']);
                fwrite($f,"\nRoom type :".$_POST['rt']);
                fwrite($f,"\nCheck in date :".$_POST['da']);
                fwrite($f,"\nNumber of Days :".$nod);
                fwrite($f,"\nNumber of rooms :".$nor);
                fwrite($f,"\nCost :".$nod*$nor*$c."\n");
                fclose($f);
            }
            if(isset($_POST['bnr']))
            {
                $f=fopen("BookRoom.txt","w+");
                fwrite($f," ");
                fclose($f);
            }
                ?>
        </body>
