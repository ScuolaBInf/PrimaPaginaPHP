<!DOCTYPE html>
<html>        
	<head>
       	<style>
			table, th, td 
				{
					border: 1px solid black;
					border-collapse: collapse;
				}
		</style>        
	</head>

	<body>        
		
		<table width='50%' height='50%' border='0' align="center"cellpadding='0'>	
			<tr>
				<?php
					$vett = array();
					$grandezza = 10;
                    
					$sommaElementi = 0;
					$mediaElementi = 0;
					$maggioriDiZero = 0;
					$minoriDiZero = 0;
				
					for ($i = 0; $i < $grandezza; $i++)
						{
							$vett[$i] = rand(1, 99);
							echo "<th>".$vett[$i]."</th>";
							$sommaElementi+=$vett[$i];
							if ($vett > 0)
								$maggioriDiZero++;
							else if ($vett < 0)
								$minoriDiZero++;
						}
					$mediaElementi = $sommaElementi/$grandezza;
				?>
			</tr>
		</table>

		<table width='50%' height='50%' border='0' align="center"cellpadding='0'>
			<tr>
				<?php
					for ($i = 0; $i < $grandezza - 1; $i++)
						for ($j = 0; $j < $grandezza - 1 - $i; $j++)
							if ($vett[$j] > $vett[$j+1])
								{
									$save = $vett[$j];
									$vett[$j] = $vett[$j+1];
									$vett[$j+1] = $save;
								}
					for ($i = 0; $i < $grandezza; $i++)
						echo "<th>".$vett[$i]."</th>";
				?>
			</tr>
		</table>
			
		<?php
			echo "<BR>La somma tra tutti gli elementi: ".$sommaElementi;
			echo "<BR>La media tra tutti gli elementi: ".$mediaElementi;
			echo "<BR>Gli elementi positivi: ".$maggioriDiZero;
			echo "<BR>Gli elementi negativi: ".$minoriDiZero;
		?>
			
	</body>
</html> 