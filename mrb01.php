<?php
	include 'con_bd.php';#requiere la base de datos para hacer la conexion a la misma
	$link = connection();# objeto de conexion a la base de datos
	$id_ticket = $_POST['id_Ticket'];
	$sql = mysqli_query(SELECT * FROM ticket where id_ticket= '" . $ticket . "'",$link);
	$rp = mysqli_query ( $sql, $link);
	if (!$rp){
		die ('No se pudo hacer la consulta '. mysqli_error());
	}
	mysqli_close($link);

	echo"<table border="2px">";
	
	echo"<tr>";
             echo"<th>id</th>";
             echo"<th>pn</th>";
             echo"<th>sn</th>";
             echo"<th>cantidad</th>";
             echo"<th>descripcion</th>";
         echo"</tr>";

	while ($fil = mysql_fetch_row($sql)){   
    	echo "<tr>";  
    	echo "<td>".$fil[1]."</td>";  
    	echo "<td>".$fil[2]."</td>";  
    	echo "<td>".$fil[3]."</td>";  
	echo "<td>".$fil[4]."</td>";
	echo "<td>".$fil[5]."</td>";
	echo "</tr>";  
	}  echo"</table>";
?>