<html>
	<head>
	<?php
		echo 
		"<style>
			table,td {
				border:1px solid gray; 
				border-collapse:collapse;
				text-align:center
			}
			td {
				width: 50;
				height: 50;
			}
			tr:nth-child(odd) {
				background-color: #ececec;
			}
			#middle {
				background-color: red;
			}
		</style>";
	?>	
	</head>
	<body>

	<?php
		class Matrix
		{
			function createMatrix(){
				// $d Dimension
		  	// $matriz Matrix with X and - values
		  	$d = $_GET['d'];
				$matrix = array(array());

				echo "<table>";
				for($i = 0; $i < $d; $i++) 
				{
					echo "<tr>";
					for($j = 0; $j < $d; $j++) 
					{
						// Diagonal
						if ($j == $i )
						{
							// If Dimention is Odd an is the center of matrix
							if ( (floor($d/2) == $j) && ($d % 2 == 1) ) 
							{
								$matrix[$i][$j] = 'karen';
							} 
							// If Dimention is even, it won't print =]
							else {
								$matrix[$i][$j] = '#';
							}		
						}
						// Inverse Diagonal
						else if ( $j == $d-1-$i ) 
						{
							$matrix[$i][$j] = '#';
						}
						else
						{
							$matrix[$i][$j] = '-';
						}
						if ( $matrix[$i][$j] == 'karen') {
							echo "<td id='middle'>";
						}
						else{
							echo "<td>";	
						}
						echo $matrix[$i][$j];
					  echo "</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
		  }

		}

		$m = new Matrix;
		$m->createMatrix();
	?> 
	</body>