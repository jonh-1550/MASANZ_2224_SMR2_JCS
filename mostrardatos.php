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
	
	
	<!--
	<php //doesn't work
	
	$civesErr = $child1Err = $child2Err = "";
	$cives = $child1 = $child2 ="";
	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["civil-state"])) {
				$civesErr = "";
			} else {
				$name = test_input($_POST["civil-state"]);
			}
  

			if (empty($_POST["child1"])) {
				$passwErr = "";
			} else {
				$passw = test_input($_POST["child1"]);
			}
			
			if (empty($_POST["child2"])) {
				$passwErr = "";
			} else {
				$passw = test_input($_POST["child2"]);
			}
		}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	?>
	-->
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
