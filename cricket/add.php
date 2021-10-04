

<!Doctype html>
<html>
<head>
<title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container"><br>
<h1 class="text-success text-center">Enter Player Details</h1><br>

<center><p>Please fill the following details</p></center>
                <div class ="col-lg-8 m-auto d-block">
<form action ="#"  class="bg-light">

<div class = "form-group">
<label>Played Id</label>
<input type="number" name="pid" class="form-control" id="Username" placeholder ="">
<spam id="user" class="text-danger font-weight-bold"></spam>
</div>

<div class = "form-group">
<label>Played Name</label>
<input type="text" name="pname" class="form-control" id="Username" placeholder ="name">
<spam id="user" class="text-danger font-weight-bold"></spam>
</div>

<div class = "form-group">
<label>No of time getting Man of the Match</label>
<input type="number" name="mom" class="form-control" id="Username" placeholder ="">
<spam id="user" class="text-danger font-weight-bold"></spam>
</div>

<div class = "form-group">
<label>No of matches played</label>
<input type="number" name="mplayed" class="form-control" id="Username" placeholder ="">
<spam id="user" class="text-danger font-weight-bold"></spam>
</div>

<div class = "form-group">
<label>Status</label>
<input type="text" name="status" class="form-control" id="Username" placeholder ="">
<spam id="user" class="text-danger font-weight-bold"></spam>
</div>

<div class = "form-group">
<label>Total run scored in tournament</label>
<input type="number" name="runss" class="form-control" id="Username" placeholder ="">
<spam id="user" class="text-danger font-weight-bold"></spam>
</div>


<div class = "form-group">
<label>Country</label>
<input type="text" name="country" class="form-control" id="Username" placeholder ="">
<spam id="user" class="text-danger font-weight-bold"></spam>
</div>



<input type="submit" name="submit" value="submit" class="btn btn-success">
</form>

<!-- 
<script>
function validation()
{

                                var user1 = document.getElementById("Username").value;
   var user2= document.getElementById("password").value;
   var user3= document.getElementById("mobile").value;
   var user4= document.getElementById("conpassword").value;
   
   
   
                                if(user1 == ""){
                                document.getElementById("user").innerHTML="please fill the field";
                                        return false;
                                        }
     
    
                                    }
                    </script> -->
                    </body>
                    </html>


        <?php

        error_reporting(10);

            // $plid = $_GET['pid'];
            //  $plname = $_GET['pname'];
            //   $plmom = $_GET['mom'];
            //    $plnom = $_GET['mplayed'];
            //     $plstat = $_GET['status'];
            //      $plrunss = $_GET['runss'];
            //      $plcont = $_GET['country'];


                 echo "$plid";
                 echo "$plname";
                 echo "$plmom";
                 echo "$plnom";
                 echo "$plstat";
                 echo "$plrunss";

                 $servername = "localhost";
				$username = "root";
				$password = "";
				$dbname="cric";

				$conn = mysqli_connect($servername,$username,$password,$dbname);

            $query ="insert into player values('$plid','$plname','$plmom','$plnom','$plstat','$plrunss','$plcont');";
            $data = mysqli_query($conn,$query);


            if($data)
            {
                echo "data inserted into db";
            }
            else
            {
                echo "not inserted (failed)";
            }
        ?>
     






