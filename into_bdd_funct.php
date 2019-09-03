<!DOCTYPE html>
<html>
	<head>
      <meta name="description" content="Menu">
      <meta charset="utf-8"/>
      <title>Formulario PHP: ficheros</title>
      <link rel="stylesheet" type="text/css" media="screen" href="estilos.css">	
   
		

	   
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

	
	<body>
	
		
	<div id="contenedor">
		
		<h2 class="encabezado">Registro de usuarios en BDD</h2>
		
		
		<div class="contenedor">
		
		<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off" class="formulario"> 
			
			
			<div class="campos">
		
				<label for="user">Usuario</label>
				
				<input class="nombre"type="text" name="user" autofocus autocomplete placeholder="user">
				
			
				
				<label for="user">Email</label>
				
				<input class="nombre" type="email" name="mail" autocomplete autofocus>
				
					<label for="user">Password</label>
				
				<input class="nombre"type="password" name="pwd" autofocus placeholder="Pwd">
			
				
				

				
	
			</div>
            	
			
            <input class="btn" type="submit" value="Enviar" name="Enviar">
			
		
			
			</form>
			</div>
		</div>
		</body>



			
		
			
</html>	

<?php

$servidor='localhost';
$user='root';
$pwd='';
$bdd='usuarios';










if(!empty($_POST['user']) && (!empty($_POST['mail'])) && (!empty($_POST['pwd']))&&(isset($_POST['Enviar']))){
	
	
	
	$email = $_POST["mail"];
	$usuario = $_POST["user"];
	$pass =$_POST["pwd"];
	$conn = new mysqli($servidor, $user, $pwd, $bdd);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
	
$stmt = $conn->prepare("INSERT INTO users (user, pwd, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $usuario, $pass, $email);
$stmt->execute();

	
	
	
	
	
	
}
	
	?>




