<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Birthday</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="date.css">
</head>
<body>
<div class="birth">
	<h1>Find Your Birthday Day </h1>
	<form action="" method="post" class="birthday">
	
			<div class="row">
			<div><label for="xy">Day  </label><div>
			<div> <input type="number" name="day" class="input"></div>
		
		
		
		<div class="row">
			<div><label for="xy">Month</label></div>
			<div><input type="number" name="month" class="input"></div>
		</div>
	    
		<div class="row">
			<div><label for="xy">Year </label></div>
			<div><input type="number" name="year" class="input"></div>
		</div>
		
		<div><button name="submit">Submit</button><button name="reset">Reset</button></div>
	</form>
	</div>
	
	</table>




</body>

</html>

<?php
  if(isset($_POST['submit'])){
	  
	  $day=$_POST['day'];
	  $month=$_POST['month'];
	  $year=$_POST['year'];
	  
	  echo "Your Birthday day is:". date("l",mktime('0','0','0',$month,$day,$year));
     if(isset($_POST['reset'])){
		 
		header('location:date.php'); 		 
	 }
  }
 
?>