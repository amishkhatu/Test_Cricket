

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






<style>
#my_country {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: white;
  margin-top: 20px;

}

#sec{
    background-color: white;
    height: 10px;
}



#sec2{
    background-color: #DCDCDC;
    height: 5px;
}

#formss{
    border: medium;
    border-color: black;
}

#shadoww{
    text-shadow: black;
}

#title5{
  text-decoration: none;
}
</style>

</head>

<body>

<div class="container"><br>
<h1 class=" text-center shadow-sm p-3 mb-5 bg-white rounded"><a href='cric.php' id='title5'>TEST CRICKET
<img src="Cricket_World.png"  width="60px" height="60px"></a></h1>



                <div class ="col-lg-8 m-auto d-block" >
<form
 action ="#" onsubmit="return validation()" class="bg-light ">


<div class = "form-group">
    <br><br>
<center><h2>Team INDIA &nbsp; <img src="India.png"  width="60px" height="30px"></h2></center><br><br>

<!-- --------111111--------------------------Countries----------------------------------------------------- -->




<!-- <button onclick="myFunction()">Click to know</button> -->

<!-- <div id="my_country">
<center>
<h3> India </h3>
<br>
<h3> Sri Lanka </h3>
</center>
</div>
 -->


<!-- ------------------------------------------Teams--------------------------------------------- -->
<div  id="sec">
    <br>
</div>



<center><h4>Tornament name :  Test Cricket 2021  </h4></center>


<!-- ------------------------------------------ -->
<div  id="sec">
    <br>
</div> 
<!-- ------------------------------------------ -->


<!-- ----------------------------------Players----------------------------------------------------- -->

<div class="players">

<div class = "form-group">
    <center>
        <h2>Players</h2>
    <b><p>Indian team Coach : Vikram Rathour</p></b>
    <form action="/action_page.php" >

        <div class="list-group">
  <a href="/oneplayer.php?name=Virat" class="list-group-item list-group-item-action">Virat Kohli (C) </a>

  
  <a href="/oneplayer.php?name=Rohit" class="list-group-item list-group-item-action list-group-item-primary">Rohit Sharma (VC)</a>
  <a href="/oneplayer.php?name=hardik" class="list-group-item list-group-item-action list-group-item-secondary">Hardik Pandya </a>
  <a href="/oneplayer.php?name=Surya" class="list-group-item list-group-item-action list-group-item-success">Suryakumar Yadav </a>
  <a href="/oneplayer.php?name=Rishab" class="list-group-item list-group-item-action list-group-item-danger">Rishabh Pant (wk)</a>
  <a href="/oneplayer.php?name=Ishan_Kishan" class="list-group-item list-group-item-action list-group-item-warning">Ishan Kishan (wk)</a>
  <a href="/oneplayer.php?name=rahul" class="list-group-item list-group-item-action list-group-item-secondary">KL Rahul </a>
  <a href="/oneplayer.php?name=Ravindra" class="list-group-item list-group-item-action list-group-item-light">Ravindra Jadeja</a>
  <a href="/oneplayer.php?name=R_Chahar" class="list-group-item list-group-item-action list-group-item-dark">Rahul Chahar</a>
  <a href="/oneplayer.php?name=Ashwin" class="list-group-item list-group-item-action list-group-item-success">Ravichandran Ashwin</a>
  <a href="/oneplayer.php?name=Axar" class="list-group-item list-group-item-action list-group-item-warning">Axar Patel  </a>
</div>

</form></center></div></div>


<!-- ----------------------------------Venue----------------------------------------------------- -->

<!-- ------------------------------------------ -->
<div  id="sec">
    <br>
</div> 
<!-- ------------------------------------------ -->

<center><h4>Total matches Played : 3</h4></center>


<!-- ----------------------------------------------- -->

<div  id="sec2">
    <br>
</div>



<div>




</form>
<br><br>




</center>
    </div>


</div>


</form>
</center>
</div>








</div>




</form>


<!-- <script type="text/javascript">
    function myFunction() {
  var x = document.getElementById("my_country");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script> -->

<script>


    
function validation()
{

                                var user1 = document.getElementById("Username").value;
   var user2= document.getElementById("password").value;
   var user3= document.getElementById("mobile").value;
   var user4= document.getElementById("conpassword").value;
   
   
   
                                if(user1 == ""){
                                document.getElementById("user").innerHTML="please fill the username";
                                        return false;
                                        }
     
     if(user1=="")
     {
     document.getElementById("pass").innerHTML="pls fill more";
     return false;
     }
     
     if(!isNaN(user1="")
     {
     document.getElementById("user").innerHTML="pls fill more";
     return false;
     }
     
     if((user2.length <=6)||(user1.length >20)){
                                document.getElementById("pass").innerHTML="please fill correct range ";
                                        return false;
                                        }
                                        
                                        if(user2 != user4){
                                document.getElementById("pass").innerHTML="password not match";
                                        return false;
                                        }           
                                    
                                                                                if(user3.length != 10){
                                document.getElementById("mob").innerHTML="user must enter 10 digits";
                                        return false;
                                        }
                                        
                                    }
                    </script></div></div>
                    </body>
                    </html>
     

