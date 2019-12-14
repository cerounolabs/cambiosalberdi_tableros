<?php
	$min = date('i');

	ibase_connect("10.168.192.138:aliadocambios", "sysdba", "dorotea");
	
	$qryUSD_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 3");
	$rowUSD_PYG = ibase_fetch_object($qryUSD_PYG);
	$cheque		= 'NO';
	$moneda		= 'USD';
	$imagen 	= 'dolar.png';
	$compra 	= $rowUSD_PYG->TCCOMPRABB;
	$venta		= $rowUSD_PYG->TCVENTABB;
	$dBBUSD_PYG = array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$cheque		= 'SI';
	$moneda		= 'USD Ch.';
	$imagen 	= 'dolar.png';
	$compra 	= $rowUSD_PYG->TCCOMPRACH;
	$venta		= $rowUSD_PYG->TCVENTACH;
	$dCHUSD_PYG	= array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryBRL_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 4");
	$rowBRL_PYG = ibase_fetch_object($qryBRL_PYG);
	$cheque		= 'NO';
	$moneda		= 'BRL';
	$imagen		= 'real.png';
	$compra		= $rowBRL_PYG->TCCOMPRABB;
	$venta		= $rowBRL_PYG->TCVENTABB;
	$dBBBRL_PYG = array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryARS_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 5");
	$rowARS_PYG = ibase_fetch_object($qryARS_PYG);
	$cheque		= 'NO';
	$moneda		= 'ARS';
	$imagen		= 'peso_argentino.png';
	$compra		= $rowARS_PYG->TCCOMPRABB;
	$venta		= $rowARS_PYG->TCVENTABB;
	$dBBARS_PYG = array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryEUR_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 6");
	$rowEUR_PYG	= ibase_fetch_object($qryEUR_PYG);
	$cheque		= 'NO';
	$moneda		= 'EUR';
	$imagen		= 'euro.png';
	$compra		= $rowEUR_PYG->TCCOMPRABB;
	$venta		= $rowEUR_PYG->TCVENTABB;
	$dBBEUR_PYG	= array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryUSD_BRL	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
	$rowUSD_BRL	= ibase_fetch_object($qryUSD_BRL);
	$cheque		= 'NO';
	$moneda		= 'USD x BRL';
	$imagen		= 'dolar_real.png';
	$compra		= $rowUSD_BRL->PARIDAD_C;
	$venta		= $rowUSD_BRL->PARIDAD_V;
	$dBBUSD_BRL	= array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 3, ',', '.'),
		'venta'		=> number_format($venta, 3, ',', '.')
	);

	$cheque		= 'SI';
	$moneda		= 'USD Ch x BRL';
	$imagen		= 'dolar_real.png';
	$compra		= $rowUSD_BRL->PARIDAD_C_CH;
	$venta		= $rowUSD_BRL->PARIDAD_V_CH;
	$dCHUSD_BRL	= array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 3, ',', '.'),
		'venta'		=> number_format($venta, 3, ',', '.')
	);

	$qryUSD_ARS	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 5");
	$rowUSD_ARS	= ibase_fetch_object($qryUSD_ARS);
	$cheque		= 'NO';
	$moneda		= 'USD x ARS';
	$imagen		= 'dolar_peso_argentino.png';
	$compra		= $rowUSD_ARS->PARIDAD_C;
	$venta		= $rowUSD_ARS->PARIDAD_V;
	$dBBUSD_ARS	= array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 3, ',', '.'),
		'venta'		=> number_format($venta, 3, ',', '.')
	);

	$qryUSD_EUR	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 3 AND ID_MONEDA = 3");
	$rowUSD_EUR	= ibase_fetch_object($qryUSD_EUR);
	$cheque		= 'NO';
	$moneda		= 'USD x EUR';
	$imagen		= 'dolar_euro.png';
	$compra		= $rowUSD_EUR->PARIDAD_C;
	$venta		= $rowUSD_EUR->PARIDAD_V;
	$dBBUSD_EUR	= array(
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 3, ',', '.'),
		'venta'		=> number_format($venta, 3, ',', '.')
	);

	if ($min == '01' || $min == '11' || $min == '21' || $min == '31' || $min == '41' || $min == '51'){
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		
	} elseif ($min == '02' || $min == '12' || $min == '22' || $min == '32' || $min == '42' || $min == '52'){
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;

	} elseif ($min == '03' || $min == '13' || $min == '23' || $min == '33' || $min == '43' || $min == '53'){
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;

	} elseif ($min == '04' || $min == '14' || $min == '24' || $min == '34' || $min == '44' || $min == '54'){
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;

	} elseif ($min == '05' || $min == '15' || $min == '25' || $min == '35' || $min == '45' || $min == '55'){
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;

	} elseif ($min == '06' || $min == '16' || $min == '26' || $min == '36' || $min == '46' || $min == '56'){
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;

	} elseif ($min == '07' || $min == '17' || $min == '27' || $min == '37' || $min == '47' || $min == '57'){
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;

	} elseif ($min == '08' || $min == '18' || $min == '28' || $min == '38' || $min == '48' || $min == '58'){
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;

	} elseif ($min == '09' || $min == '19' || $min == '29' || $min == '39' || $min == '49' || $min == '59'){
		$JSONData[] = $dCHUSD_BRL;
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
	} elseif ($min == '00' || $min == '10' || $min == '20' || $min == '30' || $min == '40' || $min == '50'){
		$JSONData[] = $dBBUSD_PYG;
		$JSONData[] = $dBBBRL_PYG;
		$JSONData[] = $dBBARS_PYG;
		$JSONData[] = $dBBEUR_PYG;
		$JSONData[] = $dBBUSD_BRL;
		$JSONData[] = $dBBUSD_ARS;
		$JSONData[] = $dBBUSD_EUR;
		$JSONData[] = $dCHUSD_PYG;
		$JSONData[] = $dCHUSD_BRL;	
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="refresh" content="10">
		<link rel="stylesheet" href="assests/css/style.css">
		<title>Tablero - Sucursal Ciudad del Este</title>
	</head>
	
	<body>
		<div class="div-container" style="background-color: rgba(21, 163, 70, 1.0);">
			<table class="table-container">
<?php
	$row_index = 0;

	foreach ($JSONData as $row_key => $row_data) {
		if ($row_index == 0) {
?>
				<tr class="tr-row-00">
					<td style="text-align:center; margin: auto;"> <img class="img-00" src="img/<?php echo $row_data['imagen']; ?>" /></td>
					<td style="text-align:center;"> <?php echo $row_data['compra']; ?> </td>
					<td style="text-align:center;"> <?php echo $row_data['venta']; ?> </td>
				</tr>
<?php
		} else {
?>
				<tr class="tr-row-01">
					<td style="text-align:left; padding: 0px 10px;"> <?php echo $row_data['moneda']; ?> </td>
					<td style="text-align:center;"> <?php echo $row_data['compra']; ?> </td>
					<td style="text-align:center;"> <?php echo $row_data['venta']; ?> </td>
				</tr>
<?php
		}
		$row_index = $row_index + 1;
	}
?>	
			</table>
			<div class="logo-contanier">
				<img class="img-logo" src="img/logo.png"/>
			</div>
			<div class="div-container fondo">
			</div>
		</div>
		<script src="assests/js/script.js"></script>
	</body>
</html>
