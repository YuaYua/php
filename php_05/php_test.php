<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
			<?php
				$db=mysql_connect("localhost","root","");
				if($db){
					mysql_select_db("php");
					$query="select * from user";
					$result=mysql_query($query);
			?>
			<table border="" cellspacing="" cellpadding="">
				<?php
					while($row=mysql_fetch_assoc($result)){
				?>
				<tr>
					
					<td><?php echo $row["name"];?></td>
					<td><?php echo $row["password"];?></td>
					<!--//方法二-->
					<!--<?php
						foreach ($row as $key => $value) {
					?>	
						<td>
							<?php
								echo $value;
							?>
						</td>	
						<?php
						}
						?>-->
					<?php
					}
					?>
				</tr>
			</table>
			<?php
				}
			?>
				
	</body>
</html>

