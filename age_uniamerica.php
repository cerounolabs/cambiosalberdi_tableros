<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="refresh" content="5">
		<title>Tablero - Agencia Uniamerica</title>
		<style>
			html{
				width: 100%;
				height: 100%;
			}

			body{
				width: 100%;
				height: 100%;
				background-color: rgba(255, 255, 255, 0.50);
				color: #000000;
				margin: 0px;
			}
		</style>
		<script>
			//function muestraReloj() {
				// Compruebo si se puede ejecutar el script en el navegador del usuario
				if (!document.layers && !document.all && !document.getElementById) return;

				// Obtengo la hora actual y la divido en sus partes
				var fechacompleta	= new Date();
				var horas			= fechacompleta.getHours();
				var minutos 		= fechacompleta.getMinutes();
				var segundos 		= fechacompleta.getSeconds();
				var mt 				= "AM";

				// Pongo el formato 12 horas
				if (horas > 12) {
					mt		= "PM";
					horas 	= horas - 12;
				}

				if (horas == 0) horas = 12;

				// Pongo minutos y segundos con dos dígitos
				if (minutos <= 9) minutos = "0" + minutos;
				if (segundos <= 9) segundos = "0" + segundos;
				
				// En la variable 'cadenareloj' puedes cambiar los colores y el tipo de fuente
				cadenareloj = horas + ":" + minutos + ":" + segundos + " " + mt;
				
				// Escribo el reloj de una manera u otra, seg�n el navegador del usuario
				if (document.layers) {
					document.layers.spanreloj.document.write(cadenareloj);
					document.layers.spanreloj.document.close();
				} 
				else if (document.all) spanreloj.innerHTML = cadenareloj;
				else if (document.getElementById) document.getElementById("spanreloj").innerHTML = cadenareloj;

				// Ejecuto la funci�n con un intervalo de un segundo
				setTimeout("muestraReloj()", 1000);
			}
		</script>
	</head>
	
	<body onLoad="muestraReloj()">
		<table style="width:100%; height:100%;" border="1" cellpadding="0" cellspacing="2">
			<tr style="width:100%; text-align:center; font-family:Arial Black; font-size:50px; font-weight:bold; background-color:#0B6138; color:yellow;">
				<td style="width:100%;" colspan="3">www.cambiosalberdi.com</td>
			</tr>
			<tr style="width:100%; text-align:center; font-family:Arial Black; font-size:80px; font-weight:bold; background-color:#ffffff; color:black;" border="1" cellpadding="1" cellspacing="2">
				<td style="width:50%;">Moneda</td>
				<td style="width:20%;">Compra</td>
				<td style="width:20%;">Venta</td>
			</tr>
		<?php
			$dia	= date("l");
			$dia2	= date("d");
			$mes	= date("F");
			$ano	= date("Y");

			if ($dia=="Monday")    $dia="Lunes";
			if ($dia=="Tuesday")   $dia="Martes";
			if ($dia=="Wednesday") $dia="Miercoles";
			if ($dia=="Thursday")  $dia="Jueves";
			if ($dia=="Friday")    $dia="Viernes";
			if ($dia=="Saturday")  $dia="Sabado";
			if ($dia=="Sunday")    $dia="Domingo";
			
			if ($mes=="January")   $mes="Enero";
			if ($mes=="February")  $mes="Febrero";
			if ($mes=="March")     $mes="Marzo";
			if ($mes=="April")     $mes="Abril";
			if ($mes=="May")       $mes="Mayo";
			if ($mes=="June")      $mes="Junio";
			if ($mes=="July")      $mes="Julio";
			if ($mes=="August")    $mes="Agosto";
			if ($mes=="September") $mes="Setiembre";
			if ($mes=="October")   $mes="Octubre";
			if ($mes=="November")  $mes="Noviembre";
			if ($mes=="December")  $mes="Diciembre";

			ibase_connect("10.168.199.131:aliadocambios", "sysdba", "dorotea");
			
			$Q = ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 order by ID_MONEDA");

			while ($R = ibase_fetch_object($Q)) {
				switch ($R->ID_MONEDA) {
					case 3:
						$DS_MONEDA	= "Dolar";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_DOLARC	= $R->TCCOMPRABB;
						$VL_DOLARV	= $R->TCVENTABB;
						break;

					case 4:
						$DS_MONEDA	= "Real";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_REALC	= $R->TCCOMPRABB;
						$VL_REALV	= $R->TCVENTABB;
						break;

					case 5:
						$DS_MONEDA	= "Peso Argentino";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;

					case 6:
						$DS_MONEDA	= "Euro";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_EUROC	= $R->TCCOMPRABB;
						$VL_EUROV	= $R->TCVENTABB;
						break;
				}

				$color		= 'green';
			
				$ini_moneda	= '<td style="text-align:left;">';
				$ini_compra	= '<td style="text-align:center;">';
				$ini_venta	= '<td style="text-align:center;">';
				$fin_moneda	= '</td>';
				
				if (($R->ID_MONEDA) == 3 OR ($R->ID_MONEDA) == 4 OR ($R->ID_MONEDA) == 5 OR ($R->ID_MONEDA) == 6) {
					if (($R->TCCCOMPRABB != 0) OR ($R->TCVENTABB != 0)) {
						echo '<tr style="font-family:Arial Black; font-weight:bold; color:white; background-color:#0B6138; font-size:80px;">';
						echo "$ini_moneda $DS_MONEDA $fin_moneda";
						echo "$ini_compra".number_format($VL_MONEDAC, 0, ',', '.')."$fin_moneda";
						echo "$ini_venta".number_format($VL_MONEDAV, 0, ',', '.')."$fin_moneda";
						echo "</tr>";
					}
				}
			}

			//---> Dolar x Real
			$buscareal 		= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
			$R 				= ibase_fetch_object($buscareal);
			$realc 			= $R->PARIDAD_C;
			$realv 			= $R->PARIDAD_V;
			echo '<tr style="font-family:Arial Black; font-weight:bold; color:white; background-color:#0B6138; color:rgba(250, 187, 19, 1); font-size:80px;">';
			echo "$ini_moneda Dolar x Real $fin_moneda";
			echo "$ini_compra".number_format($realc,3, ',', '.')."$fin_moneda";
			echo "$ini_compra".number_format($realv,3, ',', '.')."$fin_moneda";
			echo "</tr>";
			
			//__> Dolar x Peso
			$buscarpeso		= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 5");
			$P 				= ibase_fetch_object($buscarpeso);
			$pesoc 			= $P->PARIDAD_C;
			$pesov 			= $P->PARIDAD_V;
			echo '<tr style="font-family:Arial Black; font-weight:bold; color:white; background-color:#0B6138; font-size:80px;">';
			echo "$ini_moneda Dolar x Peso $fin_moneda";
			echo "$ini_compra".number_format($pesoc,3, ',', '.')."$fin_moneda";
			echo "$ini_compra".number_format($pesov,3, ',', '.')."$fin_moneda";
			echo "</tr>";
			
			//---> Dolar x Euro
			$buscaeuro		= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 3 AND ID_MONEDA = 3");
			$R 				= ibase_fetch_object($buscaeuro);
			$euroc 			= $R->PARIDAD_C;
			$eurov 			= $R->PARIDAD_V;
			echo '<tr style="font-family:Arial Black; font-weight:bold; color:white; background-color:#0B6138; font-size:80px;">';
			echo "$ini_moneda Dolar x Euro $fin_moneda";
			echo "$ini_compra".number_format($euroc,3, ',', '.')."$fin_moneda";
			echo "$ini_compra".number_format($eurov,3, ',', '.')."$fin_moneda";
			echo "</tr>";	
	 
			//---> Dolar cheque
			$buscadolarch	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 and id_cotizacionmoneda=1 order by ID_MONEDA");
			$R 				= ibase_fetch_object($buscadolarch);
			$dolarchc 		= $R->TCCOMPRACH;
			$dolarchv 		= $R->TCVENTACH;
			echo '<tr style="font-family:Arial Black; font-weight:bold; color:white; background-color:#0B6138; font-size:80px;">';
			echo "$ini_moneda D$ Ch. P/L $fin_moneda";
			echo "$ini_compra".number_format($dolarchc,0,',','.')."$fin_moneda";
			echo "$ini_compra".number_format($dolarchv,0,',','.')."$fin_moneda";
			echo "</tr>";	
							
			//---> Cheque Dolar x Real
			$buscachreal	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
			$R 				= ibase_fetch_object($buscachreal);
			$realcc			= $R->PARIDAD_C_CH;
			$realvc			= $R->PARIDAD_V_CH;
			echo '<tr style="font-family:Arial Black; font-weight:bold; color:white; background-color:#0B6138; font-size:80px;">';
			echo "$ini_moneda D$ Ch x R$ $fin_moneda";
			echo "$ini_compra".number_format($realcc,3, ',', '.')."$fin_moneda";
			echo "$ini_compra".number_format($realvc,3, ',', '.')."$fin_moneda";
			echo "</tr>";
		?>
			<tr style="font-weight:bold; font-size:60px !important; color:black; background-color:#ffffff;">
				<td style="text-align:left; font-family:Verdana;">
						<? echo "$dia ";?>
						<!-- <? echo "<br>";?> -->
						<? echo "$dia2 de $mes de $ano"; ?>
				</td>
				<td style="text-align:right; font-family:Arial Black;" colspan="2">
						<span id="spanreloj"></span>
				</td>
			</tr>
		</table>
	</body>
</html>
