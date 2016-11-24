<!DOCTYPE html>
<html>
<head>
	<title>Riszky Ardianzah</title>
</head>
<body>
	<h2>UPGRADE NILAI UTS</h2>
	<table border='1'>
		<tr>
		<th rowspan="2">INPUT</th>
		<th colspan="5">OUTPUT</th>
		</tr>
		</tr>
			<th>A</th>
			<th>E</th>
			<th>I</th>
			<th>U</th>
			<th>O</th>
		</tr>
		<tr>
		  <td>
			<?php
			$n1="RISZKY ARDIANZAH" ;
			echo $n1;
			?>
			</td>
			<td>
			<?php
			$vocalA = substr_count($n1,"A") ;
			echo $vocalA;
			?>
			</td>
			  <td>
			<?php
			$vocalE = substr_count($n1,"E") ;
			echo $vocalE
			?>
			</td>
			  <td>
			<?php
			 $vocalI = substr_count($n1,"I") ;
			 echo $vocalI
			?>
			</td>
			  <td>
			<?php
			 $vocalU = substr_count($n1,"U") ;
			 echo $vocalU
			?>
			</td>
			  <td>
			<?php
			 $vocalO = substr_count($n1,"O") ;
			 echo $vocalO
			?>
			</td>
		  </tr>
	  </table>

</body>
</html>