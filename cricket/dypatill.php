<?php
include("connection.php");
error_reporting(0);

$query = "select * from matches where sname='dypatil'";
$data = mysqli_query($conn,$query);


// $query1 = "select * from matches";
// $data1 = mysqli_query($conn,$query1);
// $total1 = mysqli_num_rows($data1);
// echo $total1;

$total = mysqli_num_rows($data);
echo $total;
$result = mysqli_fetch_assoc($data);

echo $result['lt']." ".$result['mom'];




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<center>";
echo "<table border=1 id='tablecss' >";
echo "<tr>";
echo "<th>  Match No  </th>";
echo "<th>  Winner  </th>";
echo "<th>  Loser  </th>";
echo "<th>  Man of the match  </th>";
echo "<th>  Best Bowler  </th>";
echo "<th>  Best Fielder  </th>";
echo "<th>  Stadium number  </th>";
echo "<th>  Stadium  </th>";



while($row=mysqli_fetch_array($data))
{
echo "<tr>";
echo "<td>".$row{'matchno'}."</td><td>".$row{'wt'}."</td><td>".$row{'lt'}."</td>
<td>".$row{'mom'}."</td><td>".$row{'bb'}."</td><td>".$row{'bf'}."</td>
<td>".$row{'sno'}."</td><td>".$row{'sname'}."</td>";
echo "</tr>";
}
echo "</table>";
echo "</center>";


//echo $total;

if($total !=0)
{
 // echo "records present";
}
else
{
  echo "records not present";
}

?>