<!DOCTYPE html>
<html>
<head>
	<title>Stadium details:</title>

	<link href="style.css" rel="stylesheet" type="text/css">

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
    width: 30%;
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
</style>

</head>

<body>
	<center><br><br>
	<div class="container">

<h1 class=" text-center shadow-sm p-3 mb-5 bg-white rounded"><a href='cricket/cric.php' id='title5'>TEST CRICKET
<img src="cricket/Cricket_World.png"  width="60px" height="60px"></a></h1></div></center>

<div id="profile22"><h1>
<center><b class="welcome"> Match :  <i><?php echo $_POST['con1']." vs ".$_POST['con2']; ?></i></b></center></h1><br></div>

<!-- <table border="2" id='tablecss22'>

	<tr>
		<th>Match No</th>
		<th>Winner</th>
		<th>Loser</th>
		
	</tr> -->

<div class ="col-lg-8 m-auto d-block" >
<form
 action ="#" onsubmit="return validation()" class="bg-light ">

<?php

include("cricket/connection.php");
error_reporting(0);




// print_r($_POST);


// echo $_POST['con1'];
// echo $_POST['con2'];


$count1 = $_POST['con1'];
$count2 = $_POST['con2'];

if ($count1 == $count2)
{
	
	echo "<br>";
	echo "<center>";
	echo "<img src='cricket/wrong2.png' width='200px' height='200px'";
	echo "<br>";
	echo "<h1>Invalid input</h1>";echo "</center>";
	// echo " Invalid input";
}

else
{
	$query = "select wt,matchno,lt from matches ";
	$data = mysqli_query($conn,$query);

	$total = mysqli_num_rows($data);
	// echo $total;
	$result=mysqli_fetch_assoc($data);
	// echo $result;

	// echo $result['wt'];



	echo "<center>";
	echo "<table border=1 id='tablecss22' >";
	echo "<tr>";
	echo "<th>  Match No  </th>";
	echo "<th>  Winner  </th>";
	echo "<th>  Loser  </th>";
	echo "</tr>";



	$counter=0;
	$counter2=0;
	if($total !=0)
{
	
	while($result=mysqli_fetch_assoc($data))
	{
		// echo $result['wt']."$$$$$$$$$";
		if($result['wt']=='india')
		{
			$counter = $counter +1;
			echo "<center>";
			echo "<tr>";
		echo "<td>".$result['matchno']."</td><td>".$result['wt']."</td><td>".$result['lt']."</td>";
		echo "</tr>";echo "</center>";
		}
		else
		{
			$counter2 = $counter2 +1;
			echo "<center>";
			echo "<tr>";
		echo "<td>".$result['matchno']."</td><td>".$result['wt']."</td><td>".$result['lt']."</td>";
		echo "</tr>";echo "</center>";
		}
		
	
	}
	// echo " **********************";
	// echo $counter;
	// echo $counter2;
	echo "</table>";
	echo "</center>";

	echo "<br>";echo "<br>";echo "<br>";
	echo "<center>";
	echo "<h2> Total Matches won By India: ".$counter."</h2>";
	echo "<h2> Total Matches won By Sri Linka: ".$counter2."</h2>";

	if($counter>$counter2)
	{
		echo "<h2> Match Winner is INDIA <img src='cricket/India.png' width='60px' height='30px'></h2>";
	}
	else
		{
		echo "<h2> Match Winner is SRI LANKA <img src='cricket/Sri_Lanka.png' width='60px' height='30px'></h2>";
	}

	echo "</center>";


}
}
// $stadium = $_POST['cars'];


// $query = "select * from matches where sname='$stadium'";
// $data = mysqli_query($conn,$query);

// // $row=mysqli_fetch_array($data);
// // echo $row;

// $total = mysqli_num_rows($data);
// //echo $total;


// //echo $result['lt']." ".$result['mom'];

// // 

// // $redirect = $array[$_POST['value']] + ".html";
// // echo $redirect;
// // header("Location: /$redirect");
// //exit();


// if($total !=0)
// {
	
// 	while($result=mysqli_fetch_assoc($data))
// 	{
// 		echo "<tr>";
// 		echo "<td>".$result['matchno']."</td><td>".$result['wt']."</td><td>".$result['lt']."</td>
// 		<td>".$result['mom']."</td><td>".$result['bb']."</td><td>".$result['bf']."</td>
// 		<td>".$result['sno']."</td><td>".$result['sname']."</td>";
// 		echo "</tr>";
		
// 	}
//  // echo "records present";
// }
// else
// {
//   echo "records not present";
// }

?>

</form></div>


</body>
</html>