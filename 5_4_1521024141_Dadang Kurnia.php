<!DOCTYPE html>
<html>
<head>
  <title>Tugas 5.4 Dadang Kurnia Sandi</title>
</head>
<body>
<?php
	$bil = array
		(
			array(5,10,15,20),
			array(6,11,16,21),
			array(7,12,17,22),
			array(8,13,18,23),
			array(9,14,19,24),
			array(10,15,20,25)
			);
	echo "<table border=1>";
	 for($i=5; $i <=100; $i++){
	      echo "<tr>";
	      for($j=$i; $j<= $i + 4995; $j = $j + 5){
	            echo "<td>";
	            echo $j;
	            echo "</td>";
	      }
	      echo "</tr>";
	}
	echo "</table>"; 
	echo "<table border=1>";
	 for($i=5; $i <=100; $i++){
	      echo "<tr>";
	      for($j=$i; $j<= $i + 4995; $j = $j + 5){
	            echo "<td>";
	            echo $j;
	            echo "</td>";
	      }
	      echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>