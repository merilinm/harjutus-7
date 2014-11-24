<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>harjutus-7 - Loops</title>
</head>
<body>
	<h2>While loop</h2>
	<?php $count = 10;
	while ($count <= 100) {
		echo $count . ", ";
		$count += 1;
	}
	echo "<br>";
	$count = 100;
	while ($count <= 1000) {
		echo $count . ", ";
		$count += 100;
	}
	?>

	<h3>Infinite while loop</h3>
	<?php
	//Infinte loop $count = 1; while ($count <= 10) {echo $count; } //
   	?>

	<h3>Conditional statements in while loop</h3>
	<?php $count = 1;
	while ($count <= 10) {
	if ($count == 3){
		echo "kolm" . ", ";
	}
	elseif($count == 7){
		echo "seitse" . ", ";
	}
	else {
		echo $count . ", ";
	}	
	$count += 1;
	}
	?>

	<h2>For loop</h2>
	<?php for ($count=1; $count <=20 ; $count+=1) { 
		if ($count %2){
			echo "Number {$count} on paaritu arv. ";
		}
		elseif ($count){
			echo "Number {$count} on paarisarv. ";
		}
	}
	?>

	<h2>Foreach loop</h2>
	<?php $firms = array("nortal", "fraktal", "vatson", "koor", "ddb");
		echo "<ul>";
	foreach ($firms as $firm) {
		echo "<li>" .$firm. "</li>";
	}
		echo "</ul>";
	$subjects = array("Veebikujundus", "Serveripoolsete veebirakenduste programmeerimine", "Helindamine", "Kliendipoolsete veebirakenduste programmeerimine", "Veebiarendus");
	echo "<ol>";
	foreach ($subjects as $subject) {
		echo "<li>" .$subject. "</li>";
	}
	echo "</ol>";
		?>

		<style>
			table {
				border-radius: 1px;
				border-color: #f00;
				border-style: solid;

			}
			.contact{
				color: #000;

			}	
			.frst-column{
				background-color: #ccc;
			}
		</style>
		<table class="contact">
			<tbody>
				<?php $contact = array(
      			  "first_name" => "Merilin",
      			  "last_name" => "Metsamaa",
      			  "e-mail" => "merilin.metsamaa@khk.ee",
      			  "age" => "21",
    );  	
		foreach ($contact as $attribute => $value ) {
    	$attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
    	echo "
    	<tr>
    	<td class='frst-column'>{$attribute_formatted}</td>
    	<td>{$value}</td>
    	</tr>";
    	 };
    	 ?>
		</tbody>
	</table>
</body>
</html>