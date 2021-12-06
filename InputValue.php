<!DOCTYPE HTML>  
<html>
<head>
<style>
.button {
  background-color: #0A5AAC;
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
$avgPatientErr = "";
$avgPatient = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["avgPatient"])) {
    $avgPatientErr = "Average amount of patients is required";
  } 
  else if($_POST["avgPatient"] <= 0){
	$avgPatientErr = "Please input at least 1 patient to proceed";
  }
  else {
    $avgPatient = test_input($_POST["avgPatient"]);
	if (!is_numeric($avgPatient)){
		$avgPatientErr = "Only number is allowed";
	}
  }
}

function test_input($data){
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1 style="font-family:Arial; font-size: 22px">MY Covid 19 Forecast Calculator</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <br><br>
  <p class="p1">Average amount of patients:  <input type="text" name="avgPatient" value="<?php echo $avgPatient;?>"></p>
  <br><br><br>
  <input type="submit" name="submit" value="Submit" class="button">  
</form>

<!--redirect to another page-->
<?php
session_start();

if(isset($_POST['submit'])){   
	if(is_numeric($avgPatient) and $_POST["avgPatient"] >= 1){
		$_SESSION['avgPatient'] = $avgPatient;
		header("Location: Result.php");
	}
	else{
		echo "<br>";
		echo '<script type="text/javascript">alert("'.$avgPatientErr.'");</script>';
	}
}

?>

</body>
</html>