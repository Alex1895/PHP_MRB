<?php

	include 'con_bd.php';

	$username=$_POST['user'];
	$pass=$_POST['password'];
	#$regis=$_POST['Registro'];
	
	print $username;
	echo "$username,$pass";
	
	/*$sql=mysqli_query("SELECT * FROM usuarios WHERE nombre='$username'" );
	if($f=mysqli_fetch_array($sql)){
		if($pass==$f['contra']){ 
			header("Location: formulario01.php");

		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='secion.html'</script>";
		}
	}
	else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR CONTACTE CON EL ADMINISTRADOR DEL SITIO PARA ASIGNARLE UN USUARIO")</script> ';
		
		#echo "<script>location.href='registro.html'</script>";	
		

	}
	#if ($regis) { 
	#	header('Location: registro.html');
		
	#	}*/
?>