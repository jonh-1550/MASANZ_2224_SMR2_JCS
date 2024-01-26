<!doctype HTML>
<html>
	<head>
		<title>Jonathan Costa</title>
	
		<style>
		
		table {
			font-family: Times new roman;
			border:1px solid #000000;
			width: 60%;
		}

		td, th {
			border: 1px solid #000000;
			text-align: left;
			padding: 0px;
		}
		
		</style>
		
	</head>
	
	<body>
		<table>
		
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Fecha de nacimiento</th>
				<th>Estado civil</th>
				<th>Hijos</th>
			</tr>
  
			<tr>
				<td><?php echo $_POST["fname"]?></td>
				
				<td><?php echo $_POST["lname"]?></td>
				
				<td><?php echo $_POST["birthdate"]?></td>
				
				<td><?php echo $_POST["civil-state"]?></td>
				
				<td>
					<?php 
						if(isset($_POST["child"])){
							if(count($_POST["child"])>0){
								foreach($_POST["child"]as $value){
									echo $value;
								}
							}
						} else {
							echo "NOTENE";
						}	
					?>
				</td>
			</tr>
		</table>
	</body>
</html>
