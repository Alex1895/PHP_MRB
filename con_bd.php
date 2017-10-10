<?php
	function connection{
	$link =mysqli_connect("localhost","root","") or die ('Error al Conectar con la base de datos');
	if($link){
		mysqli_select_db("mrb",$link);
	}
	}
?>