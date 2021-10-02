<?php

include ("connection.php");
error_reporting(0);

if (!conn)
{
    exit("sorry, cant connect...");
}


$val = $_GET["value"];



$valM = mysqli_real_escape_string($conn, $val);


$sql ="SELECT country , p_name from player where country='$valM'";


$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "<select>";

    while ($rows = mysqli_fetch_assoc($result))
    {
        echo"<option>".$rows['p_name']."</option>";
    }

    echo "</select>";

}

else {
    echo "<select>
            <option>Select player</option>
            </select>
    ";
    # code...
}


?>