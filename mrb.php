<?php
	include 'con_bd.php';#requiere la base de datos para hacer la conexion a la misma
	$link = connection();# objeto de conexion a la base de datos
	$id_ticket = $_POST['id_Ticket'];
	$sql = mysqli_query(SELECT * FROM ticket where id_ticket= '" . $ticket . "'",$link);
	$rp = mysqli_query ( $sql, $link);
	if (!$rp){
		die ('No se pudo hacer la consulta '. mysqli_error());
	}echo'<script language="JavaScript">alert("Se Actualizaron correctamente los datos");</script>';
	mysqli_close($link);
?>