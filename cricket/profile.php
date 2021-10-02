<?php
include('session.php');
?>
<html>
<head>
<title>Your Home Page</title>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
<link href="style.css" rel="stylesheet" type="text/css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style >

#tablecss22{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    /*width: 60%;*/
	/*position:absolute;
	left:265px;
	top:190px;*/
}	

#tablecss22 tr {background-color: #ddd}

#tablecss22 tr:hover {background-color: ;}

#tablecss22 th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: white;
}

#profile22{
	color: 	#4CAF50;
	text-shadow: 0px 1px 0px #999, 0px 2px 0px #888, 0px 3px 0px #777, 0px 4px 0px #666, 0px 5px 0px #555, 0px 6px 0px #444, 0px 7px 0px #333, 0px 8px 7px #001135;
	font: 30px 'ChunkFiveRegular';

	/*position:absolute;
	top:40px;
	left:4*/40px;
}

.logout22 input[type="submit"]{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 22px;
    padding: 8px 18px;
    text-decoration: none;
    text-transform: uppercase;
	/*position:absolute;
	top:320px;
	left:580px;*/
	/*width:150px;
	height:50px;*/
}


.logout22 input[type="submit"]:hover {
    background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
    background-color:#34CACA;
}



</style>


 

</head>
<body background="work.jpg">



	
<br>

<div class="container"><br>

<h1 class=" text-center shadow-sm p-3 mb-5 bg-white rounded">TEST CRICKET
<img src="Cricket_World.png"  width="60px" height="60px"></h1></div>


<div id="profile22" class="h11"><h1 class="display-3">
<center><b class="welcome">Details of :  <i><?php echo $login_session; ?></i></b></center></h1><br>
</div>



<div class ="col-lg-8 m-auto d-block" >
<form
 action ="#" onsubmit="return validation()" class="bg-light ">
<?php
$connection = mysqli_connect("localhost", "root", "", "cricket");
$sql = "select * from matches where match_name='$user_check';";

$query = mysqli_query($connection,$sql);

echo "<br>";
echo "<center>";
echo "<table border=1 id='tablecss22' >";
echo "<tr>";
echo "<th>  Match No  </th>";
echo "<th>  Winner  </th>";
echo "<th>  Loser  </th>";
echo "<th>  Man of the match  </th>";
echo "<th>  Best Bowler  </th>";
echo "<th>  Best Fielder  </th>";
echo "<th>  Stadium number  </th>";
echo "<th>  Stadium  </th>";



while($row=mysqli_fetch_array($query))
{
echo "<tr>";
echo "<td>".$row{'matchno'}."</td><td>".$row{'wt'}."</td><td>".$row{'lt'}."</td>
<td>".$row{'mom'}."</td><td>".$row{'bb'}."</td><td>".$row{'bf'}."</td>
<td>".$row{'sno'}."</td><td>".$row{'sname'}."</td>";
echo "</tr>";
}
echo "</table>";
echo "</center>";
?>
<br><br>
</form></div>
<center>



<div class="logout22">
<form action="logout.php">
<input name="submit" type="submit" value=" HOME ">
</form></div>
</center>



</body>
</html>
