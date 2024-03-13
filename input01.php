<?php 
include('config.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>My First Database</title>
 	<link rel="stylesheet" type="text/css" href="css/style2.css">
 </head>
 <body>
    <form  class="myform" action="input01.php" method="POST">
    	Photography Club Member<br>
    	<label><br>Name:</br></label>
    	<input type="text" name="name" class="inputvalues" placeholder="Enter Member's Name"required/><br>

      <label><br>Tingkatan:<br></label>
      <input type="text" name="tingkatan" class="inputvalues" placeholder="Enter tingkatan"required/><br>

    	<label><br>jantina:<br></label>
    	<select type="text" name="jantina" class="inputvalues" placeholder="Enter jantina"required/><br>
      <option value="Lelaki">Lelaki</option>
      <option value="Perempuan">Perempuan</option>
      </select><br>

      <label><br>Markah:<br></label>
      <input type="text" name="photo_marks" class="inputvalues" placeholder="Enter photo_marks"required/><br><br>

    	<input type="Submit" name="submit_btn" id="signup_btn" value="Enter">
    </form>

  <?php
    if(isset($_POST['submit_btn']))
    {
    	$name=$_POST['name'];
      $tingkatan=$_POST['tingkatan'];
      $jantina=$_POST['jantina'];
    	$photo_marks=$_POST['photo_marks'];

    	$querry="insert into club_member values ('','$name','$tingkatan','$jantina','$photo_marks')";
    	$querry_run=mysqli_query($con, $querry);

    	  if ($querry_run) {
    	  	echo '<script type="text/javascript">alert("Mark registered. Enter next number")</script>';
    	  }
    	  else{
    	  	echo '<script type="text/javascript">alert("Error!")</script>';
    	  }
    }
  ?>
 </body>
 </html>