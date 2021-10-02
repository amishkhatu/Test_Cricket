<?php
include("connection.php");
error_reporting(0);

$query = "select * from player";
$data = mysqli_query($conn,$query);


$query1 = "select * from matches";
$data1 = mysqli_query($conn,$query1);
$total1 = mysqli_num_rows($data1);
echo $total1;

$total = mysqli_num_rows($data);
echo $total;
$result = mysqli_fetch_assoc($data);

echo $result['p_id']." ".$result['p_name'];

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