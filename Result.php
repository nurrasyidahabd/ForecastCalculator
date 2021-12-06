<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>

<body bgcolor="#D3E5D4">  


<?php
session_start();
$getAvgPatient = $_SESSION['avgPatient'];

$category1 = round($getAvgPatient * 0.459);
$category2 = round($getAvgPatient * 0.519);
$category3 = round($getAvgPatient * 0.011);
$category4 = round($getAvgPatient * 0.004);
$category5 = round($getAvgPatient * 0.007);

$adult_20years = round(($category2 + $category3) * 0.683);
$elderly_60years = round(($category2 + $category3) * 0.109);
$adult_diabetes = round($adult_20years * 0.183);
$adult_hypertension = round($adult_20years * 0.3);
$adult_obesity = round($adult_20years * 0.197);

?>


<h3 style="font-family:Arial; font-size: 16px">i) Estimated patients from each category:</h3>
<table width="40%" cellpadding="2" cellspacing="0">
	<tr>
		<th style="border-left-style:solid; border-left-width:1px; border-right-width:1px; border-top-style:solid; 
		border-top-width:1px; border-bottom-style:solid; border-bottom-width:1px; background-color:#679FEC; font-family:Arial; font-size: 15px">Category</th>
		<th style="border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:solid; 
		border-top-width:1px; border-bottom-style:solid; border-bottom-width:1px; background-color:#679FEC; font-family:Arial; font-size: 15px">Estimated Patients</th>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 1</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $category1;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 2</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $category2;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 3</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $category3;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 4</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $category4;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 5</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $category5;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 2 & 3 Adult (>20 years old)</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $adult_20years;?></td>
	</tr>
</table>

<br><br><br>

<h3 style="font-family:Arial; font-size: 16px">ii) Vulnerable patients need protection from innovative treatment option:</h3>
<table width="40%" cellpadding="2" cellspacing="0">
	<tr>
		<th style="border-left-style:solid; border-left-width:1px; border-right-width:1px; border-top-style:solid; 
		border-top-width:1px; border-bottom-style:solid; border-bottom-width:1px; background-color:#EBBCF8; font-family:Arial; font-size: 15px">Category</th>
		<th style="border-left-style:solid; border-left-width:1px; border-right-style:solid; border-right-width:1px; border-top-style:solid; 
		border-top-width:1px; border-bottom-style:solid; border-bottom-width:1px; background-color:#EBBCF8; font-family:Arial; font-size: 15px">Estimated Patients</th>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 2 & 3 High Risk (Elderly, >60 years old)</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $elderly_60years;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 2 & 3 High Risk (Diabetes, Adult)</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $adult_diabetes;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 2 & 3 High Risk (Hypertension, Adult)</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $adult_hypertension;?></td>
	</tr>
	<tr>
		<td style="border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px">Category 2 & 3 High Risk (Obesity, Adult)</td>
		<td style="border-right-style:solid; border-right-width:1px; border-left-style:solid; border-left-width:1px; border-bottom-style:solid; 
		border-bottom-width:1px; font-family:Arial; font-size: 14px"><?php echo $adult_obesity;?></td>
	</tr>
</table>

<br><br><br>
<p style="font-size: 15px"><a href="InputValue.php">Back</a>

</body>
</html>