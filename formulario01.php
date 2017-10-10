<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
		
        <title>MRB_Foxconn_Login</title>
		<style>
		
		</style>
    </head>
    <body>
	<div class="Ingresar">
		<div class="clasee1">
		<h2 style="color: blue; text-align: center;">Ticket</h2> 
			</div>
		</div>
	<div class="Formulario_Ticket"><center>
		 <form action="formulario.php" method="POST">
		<h4 style="color: black; text-align: center;">ID</h4> 
        <input type="text" size="40" maxlength="255" id="$txtid" name="id" value="" /><br/>
		<h4 style="color: black; text-align: center;">Part Number</h4> 
        <input type="text" size="40" maxlength="255" id="$txtpn" name="pn" value="" /><br/>
		<h4 style="color: black; text-align: center;">Serial Number</h4> 
        <input type="text" size="40" maxlength="255" id="$txtsn" name="sn" value="" /><br/>
		<h4 style="color: black; text-align: center;">Cantidad</h4> 
        <input type="text" size="40" maxlength="255" id="$txtqty" name="qty" value="" /><br/>
		<h4 style="color: black; text-align: center;">Origen</h4> 
        <input type="text" size="40" maxlength="255" id="$txtorigin" name="origin" value="" /><br/>
		<h4 style="color: black; text-align: center;">Vendor</h4> 
        <input type="text" size="40" maxlength="255" id="$txtvendor" name="vendor" value="" /><br/>
		<h4 style="color: black; text-align: center;">Prioridad</h4>
		<select id="Prioridad" name="Prioridad">
        <option value="-1" selected="selected"> selecciona una opcion</option>
		<option value="-2" selected="selected">bajo</option>
		<option value="-3" selected="selected">medio</option>
		<option value="-4" selected="selected">alto</option>
		<option value="-4" selected="selected">paro de linea</option></br>
		<br/>
		<h4 style="color: black; text-align: center;">Descripcion de Material</h4>
		<select id="Descripcion_Material" name="Descripcion_Material">
        <option value="-1" selected="selected"> selecciona una opcion</option>
		<option value="-2" selected="selected"></option>
		<option value="-3" selected="selected"></option>
		<option value="-4" selected="selected"></option>
		<option value="-5" selected="selected"></option>
		<option value="-6" selected="selected"></option>
		<option value="-7" selected="selected"></option>
		<option value="-8" selected="selected"></option>
		<option value="-9" selected="selected"></option>
		<option value="-10" selected="selected"></option>
		<option value="-11" selected="selected"></option>
		<option value="-12" selected="selected"></option>
		<option value="-13" selected="selected"></option>
		<option value="-14" selected="selected"></option>
		<option value="-15" selected="selected"></option>
		<option value="-16" selected="selected"></option>
		<option value="-17" selected="selected"></option>
		<option value="-18" selected="selected"></option>
		<option value="-19" selected="selected"></option>
		<option value="-20" selected="selected"></option>
        </select><br/>
		<h4 style="color: black; text-align: center;">MBD</h4> 
        <input type="text" size="40" maxlength="255" id="$txtmbd" name="mbd" value="" /><br/>
		<h4 style="color: black; text-align: center;">Disposittion</h4> 
        <select id="Linea" name="Disposittion">
        <option value="-1" selected="selected"> selecciona una opcion</option>
		<option value="-2" selected="selected">FA2</option>
		<option value="-3" selected="selected">MRB</option>
		<option value="-4" selected="selected">Scrap</option></br>
		</br>
		<h4 style="color: black; text-align: center;">Codigo de Falla</h4> 
        <input type="text" size="40" maxlength="255" id="$txtCode_Fail" name="Code_Fail" value="" /><br/>
		<h4 style="color: black; text-align: center;">Descripcion de Falla</h4> 
        <textarea rows="4" cols="50"name="desc_fail"></textarea>
		<h4 style="color: black; text-align: center;">Linea</h4>
		<select id="Linea" name="Linea">
        <option value="-1" selected="selected"> selecciona una opcion</option>
		<option value="-2" selected="selected">Butser</option>
		<option value="-3" selected="selected">Camaro</option>
		<option value="-4" selected="selected">Cobra</option>
		<option value="-5" selected="selected">Cluster Store</option>
		<option value="-6" selected="selected">FA1</option>
		<option value="-7" selected="selected">FA2</option>
		<option value="-8" selected="selected">FA3</option>
		<option value="-9" selected="selected">Garantias</option>
		<option value="-10" selected="selected">Onestore</option>
		<option value="-11" selected="selected">Taladega</option>
		<option value="-12" selected="selected">Titan</option>
        </select><br/>
		<br/>
		 <input type="submit" name="Guardar" value="Guardar" />
	</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	<div class="derechos">
		<h5 style="color: black; text-align: center;">© 2017, mrb.foxconn.com, Ing.Alejandro Alaniz J Todos los derechos reservados.</h5>
	</div>
    </body>
</html>