<?php
include('login.php');
if(isset($_SESSION['match_namess'])){
header("location: profile.php");
}
?>  

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

<meta name="viewport" content="width=device-width, initial-scale=1">



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

#anc{
  text-decoration: none;
}
</style>




</head>


<script >
  

function my_fun(str)
{
  if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
  }
  else{
    xmlhttp=  new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange= function(){
    if (this.readyState==4 && this.status==200) {
    document.getElementById("poll").innerHTML = this.responseText;
  }
}
  xmlhttp.open("GET","helperp.php?value="+str, true);
  xmlhttp.send();

}


</script>

<body>

<div class="container"><br>

<h1 class=" text-center shadow-sm p-3 mb-5 bg-white rounded">TEST CRICKET
<img src="Cricket_World.png"  width="60px" height="60px"></h1>





        <div class ="col-lg-8 m-auto d-block" >
<form
 action ="#" onsubmit="return validation()" class="bg-light ">


<div class = "form-group">
<center><h2>Countries</h2></center>

<!-- --------111111--------------------------Countries----------------------------------------------------- -->

<p>
  <a class="btn btn-success" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
    Click to know
  </a>
  </p>
  <div class="collapse" id="collapseExample1">
  <div class="card card-body" id="my_country">
  
    <center>
<h3> 
  <a href="teamIndia.php" id="anc"><img src="India.png"  width="60px" height="30px">
  India </a>

</h3>
<br>
<h3> 
<a href="teamSri.php" id="anc"><img src="Sri_Lanka.png"  width="60px" height="30px">
Sri Lanka </h3></a>
</center>
  </div>
</div>



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

<div class="teams">

<div>
  <center>
    <h2>Teams</h2>
  <!-- <b><p>Select team to view Profile</p></b> -->
  <form action="/action_page.php" >
  
  <!-- <select name="cars" id="cars">
    <option value="volvo">-</option>
    <option value="volvo">India</option>
    <option value="saab">Sri Lanka</option>
    
  </select>
  <br><br>
  <input type="submit" value="Submit"  class="btn btn-success">
  <br><br>


  <div  id="sec2">
  <br>
</div> -->


</form>
</center>
</div>


<div><center>
  <b><p>Select team to get details of Score Table</p></b>

  <form action="/teams22.php" method='post'>
  
  <select name="con1" id="cars">
    <option value="volvo">-</option>
    <option value="india">India</option>
    <option value="srilanka">Sri Lanka</option>
    
  </select>

&nbsp; &nbsp;

  <select name="con2" id="cars">
    <option value="volvo">-</option>
    <option value="india">India</option>
    <option value="srilanka">Sri Lanka</option>
    
  </select>


  <br><br>
  <input type="submit" value="Submit"  class="btn btn-success">
  <br><br>




</form>
<br><br>




</center>
  </div>
  

</div>



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
  <b><p>Have a look at Playing 11</p></b>
  <form action="/play22.php" method='post'>

    <select name="play" id="playerss" onchange="my_fun(this.value);">
    <option >Select Team</option>
    <option value="india">India</option>
    <option value="srilanka">Sri Lanka</option>
    
  </select>
  <br><br>

  <!-- <input type="submit" value="Submit"  class="btn btn-success"> -->
  <div id="poll">
  <select name="cars" >
    <option value="volvo">Select Player</option>
    <!-- <option value="volvo">Rohit</option>
    <option value="saab">Quinton</option>
    <option value="saab">Kishan</option>
    <option value="saab">Hardik</option>
    <option value="saab">Surya</option>
    <option value="saab">Polard</option> -->
    
  </select></div>
 <br>
  

</form></center></div></div>


<!-- ----------------------------------Venue----------------------------------------------------- -->

<!-- ------------------------------------------ -->
<div  id="sec">
  <br>
</div> 
<!-- ------------------------------------------ -->

<center><h2>Venue</h2></center>


<p>
  <a class="btn btn-success" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Click to know Venues
  </a>
  </p>
  <div class="collapse" id="collapseExample">
  <div class="card card-body" id="my_country2">
  
    <center>
<h3> 
  <img src="dy.png"  width="60px" height="30px">
  Dy patil stadium 

</h3>
<br>
<h3> 
<img src="wan.jpg"  width="60px" height="30px">
Wankhade stadium </h3>
</center>
  </div>
</div>

<!-- ----------------------------------------------- -->

<div  id="sec2">
  <br>
</div>



<div><center>
  <b><p>Select Venue to get details of Match Results</p></b>

  <form action="/helperp22.php" method="post">
  
  <select name="cars" id="cars" >
    <option >-</option>
    <option value="dypatil" name="dy">Dy patil stadium </option>
    <option value="wankhade">Wankhade stadium </option>
    
  </select>



  <br><br>
  <input type="submit" value="Submit"  class="btn btn-success" id="but">
  <br><br>




</form>
<br><br>




</center>
  </div>


<!-- ----------------------------------Matches Details----------------------------------------------------- -->

<!-- ------------------------------------------ -->
<div  id="sec">
  <br>
</div> 
<!-- ------------------------------------------ -->


<!-- <div>
  <center>
    <h2>Matches List</h2>
  <b><p>Select match to know details & Match Results</p></b>
  <form action="helperp22.php"  method="post">
  <div id="mat">
  <select name="matches" id="mm"  >
    <option >Select Match</option>
    <option value="match1">Match 1</option>
    <option value="match2">Match 2</option>
    <option value="match3">Match 3</option>
    
  </select>
</div>
  <br><br>
  <input type="submit" value="Submit"  class="btn btn-success">
  <br><br>

</form></center></div>
  <div  id="sec2">
  <br>
</div> -->

<center>
<div>
  <h2>Matches List</h2>
  <b><p>Enter [match1/match2/match3] to know details & Match Results</p></b>
  <form action="" method="post">

<input id="username" name="username" placeholder="select match" type="text"><br><br>
<input name="submit" type="submit" value=" LOGIN " class="btn btn-success"> 
<span><?php echo "<br>"."<br>"."<br>"."<br>".$error; ?></span>
</form>

</div>


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

</div></div>
          </body>


          </html>
   






