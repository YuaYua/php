<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<table border="" cellspacing="5" cellpadding="5">
			<caption>九九乘法表</caption>
			<?php 
			    for ($i=1; $i < 10; $i++) { 
			?>
				<tr>
					<?php 
						for ($j=1; $j <10 ; $j++) {
					?>
					<td>	
						<?php 
							if($j<=$i){
								$sum=$i*$j;
								echo "$j*$i=$sum";
							}
						?>
					</td>
					<?php 
						} 
					?>
				</tr>	
			<?php 
			    } 
			?>
		</table>
	</body>
</html>