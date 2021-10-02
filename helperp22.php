<!DOCTYPE html>
<html>
<head>
	<title>Stadium details:</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- <link href="cricket/style.css" rel="stylesheet" type="text/css"> -->
<style >
	#title5{
  text-decoration: none;
}

#tablecss22{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
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
	left:4*/
}
</style>

</head>

<body>

	<center><br><br>
	<div class="container">

<h1 class=" text-center shadow-sm p-3 mb-5 bg-white rounded"><a href='cricket/cric.php' id='title5'>TEST CRICKET
<img src="cricket/Cricket_World.png"  width="60px" height="60px"></a></h1></div></center>


<div id="profile22"><h1>
<center><b class="welcome"> Matches at:  <i><?php echo $_POST['cars']; ?></i></b></center></h1><br></div>

<table border="2" id='tablecss22'>

	<tr>
		<th>Match No</th>
		<th>Winner</th>
		<th>Loser</th>
		<th>Man of the match</th>
		<th>best bowler</th>
		<th>best fielder</th>
		<th>stadium number</th>
		<th>stadium</th>
	</tr>



<?php

include("cricket/connection.php");
error_reporting(0);




// print_r($_POST);


// echo $_POST['cars'];

$stadium = $_POST['cars'];


$query = "select * from matches where sname='$stadium'";
$data = mysqli_query($conn,$query);

// $row=mysqli_fetch_array($data);
// echo $row;

$total = mysqli_num_rows($data);
//echo $total;


//echo $result['lt']." ".$result['mom'];

// 

// $redirect = $array[$_POST['value']] + ".html";
// echo $redirect;
// header("Location: /$redirect");
//exit();


if($total !=0)
{
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>";
		echo "<td>".$result['matchno']."</td><td>".$result['wt']."</td><td>".$result['lt']."</td>
		<td>".$result['mom']."</td><td>".$result['bb']."</td><td>".$result['bf']."</td>
		<td>".$result['sno']."</td><td>".$result['sname']."</td>";
		echo "</tr>";
		
	}
 // echo "records present";
}
else
{
  echo "records not present";
}

?>

</table>


<br><br><!-- <center>
<div class="container"><br>

<h1 class=" text-center shadow-sm p-3 mb-5 bg-white rounded"><a href='cricket/cric.php' id='title5'>TEST CRICKET
<img src="cricket/Cricket_World.png"  width="60px" height="60px"></a></h1></div></center> -->
</body>
</html>








