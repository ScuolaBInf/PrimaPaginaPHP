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
				<th> 
                </th>
				<th colspan="11">Righe</th>
			</tr>
			<tr>
				<th rowspan="12">C<br>o<br>l<br>o<br>n<br>n<br>e</th>
			</tr>
				<th>
					<?php
            			for($i = 1; $i < 11; $i++)
                    		echo "<th bgcolor=\"\#00FF00\"\>$i</th>";
            		?>    
            	</th>            	
                <?php
					for($i = 1; $i < 11; $i++)
            			{
							echo "<tr>";
                        		echo "<th bgcolor=\"\#00FF00\"\>$i</th>";
                    			for ($j = 0; $j < 10; $j++)
                        	    	echo "<th>".($j + 1) * ($i)."</th>";
                			echo "</tr>";
             		   	}
				?>        
		</table>
	</body>
</html> 