<!DOCTYPE HTML>  
<html>
<head>
<style>
.button {
  background-color: #D31655;
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  border-radius: 8px;
}

.p1 {
  font-family: "Arial", sans-serif;
}
</style>
</head>
<body bgcolor="#D3E5D4">  

<?php
// define variables and set to empty values
$avgPatient = "";
?>

<h1 style="font-family:Arial; font-size: 24px">About MY Covid 19 Forecast Calculator</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <br>
  <p class = "p1">This tool is primarily designed to calculate the estimated numbers of infection of COVID-19. <br>
  It is based on several parameters, which may result in overestimates or underestimate of the numbers of infection.</p>
  <br><br><br>
  <input type="submit" name="submit" value="OK, I understand" class="button">  
</form>

<!--redirect to another page-->
<?php
session_start();

if(isset($_POST['submit'])){   
		header("Location: InputValue.php");
}
	
?>

</body>
</html>