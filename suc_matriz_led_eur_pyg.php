<?php
	$min = date('i');

	ibase_connect("192.168.0.200:aliadocambios", "sysdba", "dorotea");
	
	$qryEUR_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 6");
	$rowEUR_PYG	= ibase_fetch_object($qryEUR_PYG);
	$id			= 'moneda04';
	$cheque		= 'NO';
	$moneda		= 'EURO x GUARANIES';
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

	$JSONTablero01[] = $dBBEUR_PYG;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="5">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quantico&display=swap">

		<link rel="icon" href="img/favicon.ico">

		<title>TABLERO COTIZACIÓN</title>
		<style>
			html{
				width: 192px;
				height: 120px;
			}

			body{
				width: 100%;
				height: 100%;
				color: #000000;
				background-color: #006633;
				margin: 0px;
			}

			.tituloMoneda{
				text-align: center;
				Font-family: Arial Black;
				color: #ffffff;
				font-size: 16px;
			}

			.tituloCotizacion{
				text-align: center;
				Font-family: Arial Black;
				color: #01ffcd;
				color: #ffffff;
				font-size: 15px;
				letter-spacing: 0.20rem;
			}

			.tituloImporte{
				text-align: center;
				font-family: 'Quantico', sans-serif;
				font-weight: bold;
				color: #ffff00;
				font-size: 20px;
				letter-spacing: 0.20rem;
				transform: scaleY(2);
			}
		</style>
	</head>
	<body>
		<table style="width:100%; height:100%; text-align:center; border:1px solid #006633;" border="1" cellpadding="0" cellspacing="0">
<?php
	$nroRow = 0;
	
	foreach ($JSONTablero01 as $tableroKEY => $tableroVALUE) {
?>
			<tr style="border:1px solid #006633; height:30px;">
				<td class="tituloMoneda" style="border:1px solid #006633;" colspan="2"><?php echo $tableroVALUE['moneda']; ?></td>
			</tr>

			<tr style="border:1px solid #006633; height:30px;">
				<td class="tituloCotizacion" style="border:1px solid #006633;">COMPRA</td>
				<td class="tituloCotizacion" style="border:1px solid #006633;">VENTA</td>
			</tr>

			<tr style="border:1px solid #006633;">
				<td class="tituloImporte" style="border:1px solid #006633;"><?php echo $tableroVALUE['compra']; ?> x </td>
				<td class="tituloImporte" style="border:1px solid #006633;"><?php echo $tableroVALUE['venta']; ?></td>
			</tr>
<?php
		$nroRow = $nroRow + 1;
	}
?>
		</table>
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>