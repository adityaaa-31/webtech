<?php
	$fp = fopen('contact.dat',r);

	echo "<table border = 1>";

	echo "<tr><th>Sr No </th> <th>Name</th> <th>Number</th> </tr>";


	while($row = fscanf($fp,"%s %s %s")){

		echo "<tr>";

		foreach($row as $r){
			echo "<td>$r</td>";		
		}

		echo "</tr>";
	}
		echo "</table>";

	fclose($fp);

?>
