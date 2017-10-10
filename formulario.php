<?php
	require ("con_bd.php");#requiere la base de datos para hacer la conexion a la misma
	#declaracion de variables
	#$ID=$_POST['id'];
	$PN=$_POST['pn'];
	$SN=$_POST['sn'];
	$QTY=$_POST['qty'];
	$Origen=$_POST['origin'];
	$Vendor=$_POST['vendor'];
	$Prioridad=$_POST['prioridad'];
	$DM=$_POST['Descripcion_Material'];
	$MBD=$_POST['mbd'];
	$Dispos=$_POST['disposittion'];
	$CF=$_POST['Code_Fail'];
	$DF=$_POST['desc_fail'];
	$Line=$_POST['linea'];
	mysql_query("INSERT INTO ticket VALUES('','$PN','$SN','$QTY','$Origen','$Vendor','$Prioridad','$DM','MBD','$Dispos','$CF','$DF','$Line')");
	echo '<script language="JavaScript">alert("Se Registro con exito");</script>';
	mysql_close($link);
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
		<title>MRB_Foxconn_Formulario</title>
		<style>
		
		</style>
</head>
<body>

</body>
</html>