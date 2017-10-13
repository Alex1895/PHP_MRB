<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/grayscale.css">
	<link rel="stylesheet" href="css/grayscale.min.css">
        <title>MRB_Foxconn_Notificacion</title>
		<style>
		
		</style>
    </head>
    <body>
	<div class="Ingresar">
		<div class="clasee1">
		<IMG SRC="imagenes/foxconn.png">
		<h2 style="color: white; text-align:left;">Notificacion</h2> 
			</div>
		</div>
	<div class="Notificacion">
		 <form action="formulario.php" method="POST">
		<h4 style="color: white; text-align: left;">Part Number</h4> 
        <input aling="left" type="text" size="40" maxlength="255" id="$txtpn" name="pn" value="" /><br/>
		<h4 style="color: white; text-align: left;">Serial Number</h4> 
        <input type="text" size="40" maxlength="255" id="$txtsn" name="sn" value="" /><br/>
		<h4 style="color: white; text-align: left;">Cantidad</h4> 
        <input type="text" size="40" maxlength="255" id="$txtqty" name="qty" value="" /><br/>
		<h4 style="color: white; text-align: left;">Origen</h4> 
        <input type="text" size="40" maxlength="255" id="$txtorigin" name="origin" value="" /><br/>
		<h4 style="color: white; text-align: left;">Vendor</h4> 
        <input type="text" size="40" maxlength="255" id="$txtvendor" name="vendor" value="" /><br/>
		<h4 style="color: white; text-align: left;">Prioridad</h4>
		<select id="Prioridad" name="Prioridad">
        <option value="-1" selected="selected"> selecciona una opcion</option>
		<option value="-1" selected="selected">medio</option>
		</select><br>
	<h4 style="color: white; text-align: left;">MBD</h4> 
        <input type="text" size="40" maxlength="255" id="$txtmbd" name="mbd" value="" /><br/>	
		<h4 style="color: white; text-align: left;">Descripcion de Material</h4>
		<select id="Descripcion_Material" name="Descripcion_Material">
        	<option value="-1" selected="selected">selecciona una opcion</option>
		<option value="-2" selected="selected">bag</option>
		<option value="-3" selected="selected">baseplane asm</option>
		<option value="-4" selected="selected">baseplate</option>
		<option value="-5" selected="selected">battery</option>
		<option value="-6" selected="selected">bezel</option>
		<option value="-7" selected="selected">blaking plate</option>
		<option value="-8" selected="selected">braket</option>
		<option value="-9" selected="selected">cable</option>
		<option value="-10" selected="selected">capacitor</option>
		<option value="-11" selected="selected">carrier</option>
		<option value="-12" selected="selected">cd</option>
		<option value="-13" selected="selected">chassis</option>
		<option value="-14" selected="selected">controller</option>
		<option value="-15" selected="selected">cover</option>
		<option value="-16" selected="selected">CPU</option>
		<option value="-17" selected="selected">disk drive</option>
		<option value="-18" selected="selected">document</option>
		<option value="-19" selected="selected">dongle</option>
		<option value="-20" selected="selected">fan</option>
		<option value="-21" selected="selected">fantray</option>
		<option value="-22" selected="selected">fascia</option>
		<option value="-23" selected="selected">foam</option>
		<option value="-24" selected="selected">heatsink</option>
		<option value="-25" selected="selected">label</option>
		<option value="-26" selected="selected">latch</option>
		<option value="-27" selected="selected">memory dimm</option>
		<option value="-28" selected="selected">midplane</option>
		<option value="-29" selected="selected">module</option>
		<option value="-30" selected="selected">motherboard</option>
		<option value="-31" selected="selected">ops panel</option>
		<option value="-32" selected="selected">packaging</option>
		<option value="-33" selected="selected">pallet</option>
		<option value="-34" selected="selected">panel rack</option>
		<option value="-34" selected="selected">pcba</option>
		<option value="-35" selected="selected">power dist unit raritan</option>
		<option value="-36" selected="selected">power supply</option>
		<option value="-37" selected="selected">psu</option>
		<option value="-38" selected="selected">rack</option>
		<option value="-39" selected="selected">rail kit</option>
		<option value="-40" selected="selected">screw</option>
		<option value="-41" selected="selected">server</option>
		<option value="-42" selected="selected">sideplane</option>
		<option value="-43" selected="selected">switch</option>
		<option value="-44" selected="selected">tool screw</option>
        </select><br/>
		<h4 style="color: white; text-align: left;">Disposittion</h4> 
        <select id="Linea" name="Disposittion">
        <option value="-1" selected="selected"> selecciona una opcion</option>
		<option value="-2" selected="selected">FA2</option>
		<option value="-3" selected="selected">MRB</option>
		<option value="-4" selected="selected">Scrap</option></br>
		</select>
		</br>
		<h4 style="color: white; text-align: left;">Codigo de Falla</h4> 
        <input type="text" size="40" maxlength="255" id="$txtCode_Fail" name="Code_Fail" value="" /><br/>
		<h4 style="color: white; text-align: left;">Descripcion de Falla</h4> 
        <textarea rows="4" cols="50"name="desc_fail"></textarea>
		<h4 style="color: white; text-align: left;">Linea</h4>
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
		<input type="button" value="Imprimir" onclick="javascript:imprSelec('Notificacion');function imprSelec(Notificacion)
{var ficha=document.getElementById(Notificacion);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();};" />
	</div>
		<br/>
	<div class="derechos">
		<h5 style="color: white; text-align: left;">© 2017, mrb.foxconn.com, Ing.Alejandro Alaniz J Todos los derechos reservados.</h5>
	</div>
    </body>
</html>