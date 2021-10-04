<?php

include("connection.php");
error_reporting(1);

$query = "select * from player";
$data = mysqli_query($conn,$query);


$query1 = "select * from matches";
$data1 = mysqli_query($conn,$query1);
$total1 = mysqli_num_rows($data1);
// echo $total1;

$total = mysqli_num_rows($data);
// echo "************".$total;
$result = mysqli_fetch_assoc($data);

// if (!conn)
// {
//     echo " not connected";
//     exit("sorry, cant connect...");
// }
// else
// {
//     echo " not connected";
// }


$val = $_GET["value"];
 // echo " val  ".$val;


$valM = mysqli_real_escape_string($conn, $val);


$sql ="SELECT country , p_name from player where country='$valM'";


$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    // echo "1111111111111111";
    echo "<select name='pnam'>";

    while ($rows = mysqli_fetch_assoc($result))
    {
        echo"<option value=".$rows['p_name'].">".$rows['p_name']."</option>";
    }

    echo "</select>";

}

else {
     // echo "222222222222222";
    echo "<select>
            <option>Select player</option>
            </select>
    ";
    # code...
}


?>