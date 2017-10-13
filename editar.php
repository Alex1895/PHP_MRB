<?php
	include 'con_bd.php';#requiere la base de datos para hacer la conexion a la misma
	$link = connection();# objeto de conexion a la base de datos
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
	$sql = mysqli_query("UPDATE ticket SET pn_mat= '$PN',sn_mat='$SN',qty='$QTY',origen='$Origen',vendor='$Vendor',priority='$Prioridad',desc_mat='$DM',
	mbd='MBD',dispos='$Dispos',code_fail='$CF',desc_fail='$DF',line='$Line'");
	$rp = mysqli_query( $sql, $link);
	if(! $rp){
		die ('No se pudo actualizar los registros'. mysqli_error());
	}echo '<script language="JavaScript">alert("Se Actualizaron correctamente los datos");</script>';
	mysqli_close($link);
?>