<?php
	$min = date('i');

	ibase_connect("10.168.190.130:aliadocambios", "sysdba", "dorotea");
	
	$qryUSD_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 3");
	$rowUSD_PYG = ibase_fetch_object($qryUSD_PYG);
	$id			= 'moneda01';
	$cheque		= 'NO';
	$moneda		= 'USD x PYG';
	$imagen 	= 'dolar.png';
	$compra 	= $rowUSD_PYG->TCCOMPRABB;
	$venta		= $rowUSD_PYG->TCVENTABB;
	$dBBUSD_PYG = array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$id			= 'moneda08';
	$cheque		= 'SI';
	$moneda		= 'USD x CHE';
	$imagen 	= 'cheque.png';
	$compra 	= $rowUSD_PYG->TCCOMPRACH;
	$venta		= $rowUSD_PYG->TCVENTACH;
	$dCHUSD_PYG	= array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryBRL_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 4");
	$rowBRL_PYG = ibase_fetch_object($qryBRL_PYG);
	$id			= 'moneda02';
	$cheque		= 'NO';
	$moneda		= 'BRL x PYG';
	$imagen		= 'real.png';
	$compra		= $rowBRL_PYG->TCCOMPRABB;
	$venta		= $rowBRL_PYG->TCVENTABB;
	$dBBBRL_PYG = array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryARS_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 5");
	$rowARS_PYG = ibase_fetch_object($qryARS_PYG);
	$id			= 'moneda03';
	$cheque		= 'NO';
	$moneda		= 'ARS x PYG';
	$imagen		= 'peso_argentino.png';
	$compra		= $rowARS_PYG->TCCOMPRABB;
	$venta		= $rowARS_PYG->TCVENTABB;
	$dBBARS_PYG = array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 2, ',', '.'),
		'venta'		=> number_format($venta, 2, ',', '.')
	);

	$qryEUR_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 6");
	$rowEUR_PYG	= ibase_fetch_object($qryEUR_PYG);
	$id			= 'moneda04';
	$cheque		= 'NO';
	$moneda		= 'EUR x PYG';
	$imagen		= 'euro.png';
	$compra		= $rowEUR_PYG->TCCOMPRABB;
	$venta		= $rowEUR_PYG->TCVENTABB;
	$dBBEUR_PYG	= array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryUSD_BRL	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
	$rowUSD_BRL	= ibase_fetch_object($qryUSD_BRL);
	$id			= 'moneda05';
	$cheque		= 'NO';
	$moneda		= 'USD x BRL';
	$imagen		= 'real.png';
	$compra		= $rowUSD_BRL->PARIDAD_C;
	$venta		= $rowUSD_BRL->PARIDAD_V;
	$dBBUSD_BRL	= array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 3, ',', '.'),
		'venta'		=> number_format($venta, 3, ',', '.')
	);

	$id			= 'moneda09';
	$cheque		= 'SI';
	$moneda		= 'D$ CHE x R$';
	$imagen		= 'real.png';
	$compra		= $rowUSD_BRL->PARIDAD_C_CH;
	$venta		= $rowUSD_BRL->PARIDAD_V_CH;
	$dCHUSD_BRL	= array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 3, ',', '.'),
		'venta'		=> number_format($venta, 3, ',', '.')
	);

	$qryUSD_ARS	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 5");
	$rowUSD_ARS	= ibase_fetch_object($qryUSD_ARS);
	$id			= 'moneda06';
	$cheque		= 'NO';
	$moneda		= 'USD x ARS';
	$imagen		= 'peso_argentino.png';
	$compra		= $rowUSD_ARS->PARIDAD_C;
	$venta		= $rowUSD_ARS->PARIDAD_V;
	$dBBUSD_ARS	= array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 2, ',', '.'),
		'venta'		=> number_format($venta, 2, ',', '.')
	);

	$qryUSD_EUR	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 3 AND ID_MONEDA = 3");
	$rowUSD_EUR	= ibase_fetch_object($qryUSD_EUR);
	$id			= 'moneda07';
	$cheque		= 'NO';
	$moneda		= 'USD x EUR';
	$imagen		= 'euro.png';
	$compra		= $rowUSD_EUR->PARIDAD_C;
	$venta		= $rowUSD_EUR->PARIDAD_V;
	$dBBUSD_EUR	= array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 3, ',', '.'),
		'venta'		=> number_format($venta, 3, ',', '.')
	);

	$JSONTablero01[] = $dBBUSD_PYG;
	$JSONTablero01[] = $dBBBRL_PYG;
	$JSONTablero01[] = $dBBARS_PYG;
	$JSONTablero01[] = $dBBEUR_PYG;
	$JSONTablero02[] = $dBBUSD_BRL;
	$JSONTablero02[] = $dBBUSD_ARS;
	$JSONTablero02[] = $dBBUSD_EUR;
	$JSONTablero02[] = $dCHUSD_PYG;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="5">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quantico&display=swap">

		<link rel="icon" href="img/favicon.ico">

		<title>TABLERO COTIZACIÓN</title>
		<style>
			html{
				width: 240px;
				height: 160px;
			}

			body{
				width: 100%;
				height: 100%;
				background-color: rgba(255, 255, 204, 0.50);
				color: #000000;
				background-color: #333333;
				margin: 0px;
			}

			.tituloCotizacion{
				text-align: center;
				font-family: 'Quantico', sans-serif;
				color: #cbff00;
				border: 1px solid #333333;
				font-size: 16px;
				letter-spacing: 0rem;
			}

			.tituloMoneda{
				text-align: left;
				font-family: 'Quantico', sans-serif;
				color: #cbff00;
				border: 1px solid #333333;
				font-size: 16px;
				letter-spacing: 0rem;
			}

			.tituloImporte{
				text-align: center;
				font-family: 'Quantico', sans-serif;
				font-weight: bold;
				color: #cccccc;
				border: 1px solid #333333;
				font-size: 20px;
				letter-spacing: 0.15rem;
			}
		</style>
	</head>
	<body>
		<table style="width:100%; height:100%; text-align:center; border:1px solid #333333;" border="1" cellpadding="0" cellspacing="0">
			<tr style="border:1px solid #333333;">
				<td class="tituloCotizacion"></td>
				<td class="tituloCotizacion">COMPRA</td>
				<td class="tituloCotizacion">VENTA</td>
			</tr>
<?php
	$nroRow = 0;
	
	foreach ($JSONTablero01 as $tableroKEY => $tableroVALUE) {
?>
			<tr style="border:1px solid #333333;">
				<td class="tituloMoneda"><?php echo $tableroVALUE['moneda']; ?></td>
				<td class="tituloImporte"><?php echo $tableroVALUE['compra']; ?></td>
				<td class="tituloImporte"><?php echo $tableroVALUE['venta']; ?></td>
			</tr>
<?php
		$nroRow = $nroRow + 1;
	}
?>
		</table>
	</body>
</html>