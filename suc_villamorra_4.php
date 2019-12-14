<html>
<head>
<title>SUCURSAL VILLA MORRA</title>
<meta http-equiv="REFRESH" content="5">

</head>
<body>
<style type="text/css">

.rotate {
  margin:10;
  padding:25;
  font-size: 1rem;
  display: table;
  width:20%;
  height:55%;
  font-family: verdana, sans-serif;
  color: #000000;
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
  position: relativo;
}

.rotate p 
{
	display: table-cell;
	margin: 0;
	padding: 2;
	position: absolute;
	left: -88%;
	right: 0%;
	top: -10%;
}
</style>


<div class="rotate"><p> 

<?php
		
			echo '<TABLE WIDTH="100%" BORDER="0" cellpadding="0" cellspacing="5">';
			//echo '<tr><td align="center" whidth="10%">. </td>';
			//echo '<td align="center" style="center-align: top; font-family: Arial Black; font-weight: bold; color: yellow; background-color: #0B6138";><div style="text-align: center; font-size:40px">www.cambiosalberdi.com</font></td>';	
		?>
		
		<?php
			
			
			ibase_connect("10.168.196.130:aliadocambios", "sysdba", "dorotea");
			
			echo '<TABLE WIDTH="100%" BORDER="1" cellpadding="5" cellspacing="5">';
			//echo '<tr><td align="center" whidth="8%">. </td>';
			echo '<td align="center" whidth="50%"><font face="Arial Black" size="6" bgcolor="white" font color="black">Moneda</font></td>';
			echo '<td align="center" whidth="20%"><font face="Arial Black" size="6" bgcolor="white" font color="black">Compra</font></td>';
			echo '<td align="center" whidth="20%"><font face="Arial Black" size="6" bgcolor="white" font color="black">Venta</font></td>';
			echo '</tr>';

			
			$Q = ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 order by ID_MONEDA");

			while ($R = ibase_fetch_object($Q))
			{
				switch ($R->ID_MONEDA)
				{
					case 3:
						$DS_MONEDA="Dolar";
						$VL_MONEDAC=$R->TCCOMPRABB;
						$VL_MONEDAV=$R->TCVENTABB;
						$VL_DOLARC=$R->TCCOMPRABB;
						$VL_DOLARV=$R->TCVENTABB;
					//	$BANDERA='<img src="../imagenes/usa.gif" width="80" height="80">';
						break;
					case 4:
						$DS_MONEDA="Real";
						$VL_MONEDAC=$R->TCCOMPRABB;
						$VL_MONEDAV=$R->TCVENTABB;
						$VL_REALC=$R->TCCOMPRABB;
						$VL_REALV=$R->TCVENTABB;
					//	$BANDERA='<img src="../imagenes/brasil.gif" width="80" height="80">';
						break;
					case 5:
						$DS_MONEDA="Peso";
						$VL_MONEDAC=$R->TCCOMPRABB;
						$VL_MONEDAV=$R->TCVENTABB;
						$VL_PESOC=$R->TCCOMPRABB;
						$VL_PESOV=$R->TCVENTABB;
					//	$BANDERA='<img src="../imagenes/argentina.gif" width="80" height="80">';
						break;
					case 6:
						$DS_MONEDA="Euro";
						$VL_MONEDAC=$R->TCCOMPRABB;
						$VL_MONEDAV=$R->TCVENTABB;
						$VL_EUROC=$R->TCCOMPRABB;
						$VL_EUROV=$R->TCVENTABB;
				//		$BANDERA='<img src="../imagenes/ue.gif" width="80" height="80">';
						break;

					case 8:
						$DS_MONEDA	= "Yen";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;

					case 9:
						$DS_MONEDA	= "$ Chile";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;

					case 10:
						$DS_MONEDA	= "Libra";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;

					case 12:
						$DS_MONEDA	= "Franco";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;

					case 13:
						$DS_MONEDA	= "$ Can";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;

					case 14:
						$DS_MONEDA	= "$ Uru";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;
					
					case 16:
						$DS_MONEDA	= "Dólar Australiano";
						$VL_MONEDAC	= $R->TCCOMPRABB;
						$VL_MONEDAV	= $R->TCVENTABB;
						$VL_PESOC	= $R->TCCOMPRABB;
						$VL_PESOV	= $R->TCVENTABB;
						break;
				}
				$color='green';
			
				$ini_moneda='<td style="center-align: top; font-family: Arial Black; font-weight: bold; color: white; background-color: #0B6138";><div style="text-align: left; font-size:30px">';
				$ini_compra='<td style="center-align: top; font-family: Arial Black; font-weight: bold; color: white; background-color: #0B6138";><div style="text-align: center; font-size:45px">';
				$ini_venta='<td style="center-align: top; font-family: Arial Black; font-weight: bold; color: white; background-color: #0B6138";><div style="text-align: center; font-size:45px">';
				$fin_moneda="</text></td>";
				$fin_cambio="</font></div></td>";
				
				if (($R->ID_MONEDA) == 3 OR ($R->ID_MONEDA) == 4 OR ($R->ID_MONEDA) == 5 OR ($R->ID_MONEDA) == 6 OR ($R->ID_MONEDA) == 10 OR ($R->ID_MONEDA) == 12 OR ($R->ID_MONEDA) == 13 OR ($R->ID_MONEDA) == 14 OR ($R->ID_MONEDA) == 16) {
					if (($R->TCCCOMPRABB != 0) OR ($R->TCVENTABB != 0)) {
						echo "<tr>";
						echo "$ini_moneda $DS_MONEDA $fin_moneda";
						echo "$ini_compra".number_format($VL_MONEDAC, 0, ',', '.')."$fin_moneda";
						echo "$ini_venta".number_format($VL_MONEDAV, 0, ',', '.')."$fin_moneda";
						echo "</tr>";
					}
				}

				if (($R->ID_MONEDA) == 8 OR ($R->ID_MONEDA) == 9) {
					if (($R->TCCCOMPRABB != 0) OR ($R->TCVENTABB != 0)) {
						echo "<tr>";
						echo "$ini_moneda $DS_MONEDA $fin_moneda";
						echo "$ini_compra".number_format($VL_MONEDAC, 2, ',', '.')."$fin_moneda";
						echo "$ini_venta".number_format($VL_MONEDAV, 2, ',', '.')."$fin_moneda";
						echo "</tr>";
					}
				}
			}

			//---> Dolar x Real
			 $buscareal = ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
			 $R = ibase_fetch_object($buscareal);
			 $realc = $R->PARIDAD_C;
			 $realv = $R->PARIDAD_V;

				 echo "<TR>";
				 echo "$ini_moneda $ x Real $fin_moneda";
				 echo "$ini_compra".number_format($realc,3,',','.')."$fin_cambio";
				 echo "$ini_compra".number_format($realv,3,',','.')."$fin_cambio";
				 echo "</TR>";
			
			//__> Dolar x Peso
			$buscarpeso = ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 5");
			 $P = ibase_fetch_object($buscarpeso);
			 $pesoc = $P->PARIDAD_C;
			 $pesov = $P->PARIDAD_V;

				 echo "<TR>";
				 echo "$ini_moneda $ x Peso $fin_moneda";
				 echo "$ini_compra".number_format($pesoc,3,',','.')."$fin_cambio";
				 echo "$ini_compra".number_format($pesov,3,',','.')."$fin_cambio";
				 echo "</TR>";
			//---> Dolar x Euro
			$buscaeuro = ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 3 AND ID_MONEDA = 3");
			$R = ibase_fetch_object($buscaeuro);
			$euroc = $R->PARIDAD_C;
			$eurov = $R->PARIDAD_V;

				echo "<TR>";
				echo "$ini_moneda $ x Euro $fin_moneda";
				echo "$ini_compra".number_format($euroc,3,',','.')."$fin_cambio";
				echo "$ini_compra".number_format($eurov,3,',','.')."$fin_cambio";
				echo "</TR>";			
			//---> Dolar cheque
			$buscadolarch = ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 and id_cotizacionmoneda=1 order by ID_MONEDA");
			$R = ibase_fetch_object($buscadolarch);
			$dolarchc = $R->TCCOMPRACH;
			$dolarchv = $R->TCVENTACH;

				echo "<TR>";
				echo "$ini_moneda $ Ch P/L $fin_moneda";
				echo "$ini_compra".number_format($dolarchc,0,',','.')."$fin_cambio";
				echo "$ini_compra".number_format($dolarchv,0,',','.')."$fin_cambio";
				echo "</TR>";					
			echo "</TABLE>";
		?>








</p></div>


</body>
</html>