<?php
	$min = date('i');

	ibase_connect("10.168.190.130:aliadocambios", "sysdba", "dorotea");
	
	$qryUSD_EUR	= ibase_query("SELECT * FROM PARIDAD WHERE ID_COTIZACIONMONEDA = 3 AND ID_MONEDA = 3");
	$rowUSD_EUR	= ibase_fetch_object($qryUSD_EUR);
	$id			= 'moneda07';
	$cheque		= 'NO';
	$moneda		= 'DOLAR x EURO';
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

	$JSONTablero01[] = $dBBUSD_EUR;
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
				width: 240px;
				height: 160px;
			}

			body{
				width: 100%;
				height: 100%;
				color: #000000;
				background-color: #15A346;
				margin: 0px;
			}

			.tituloMoneda{
				text-align: center;
				Font-family: Arial Black;
				color: #ffffff;
				font-size: 18px;
			}

			.tituloCotizacion{
				text-align: center;
				Font-family: Arial Black;
				color: #01ffcd;
				color: #ffffff;
				font-size: 16px;
				letter-spacing: 0.30rem;
			}

			.tituloImporte{
				text-align: center;
				font-family: 'Quantico', sans-serif;
				font-weight: bold;
				color: #ffff00;
				font-size: 26px;
				letter-spacing: 0.30rem;
				transform: scaleY(3);
			}
		</style>
	</head>
	<body>
		<table style="width:100%; height:100%; text-align:center; border:1px solid #15A346;" border="1" cellpadding="0" cellspacing="0">
<?php
	$nroRow = 0;
	
	foreach ($JSONTablero01 as $tableroKEY => $tableroVALUE) {
?>
			<tr style="border:1px solid #15A346; height:30px;">
				<td class="tituloMoneda" style="border:1px solid #15A346;" colspan="2"><?php echo $tableroVALUE['moneda']; ?></td>
			</tr>

			<tr style="border:1px solid #15A346; height:30px;">
				<td class="tituloCotizacion" style="border:1px solid #15A346;">COMPRA</td>
				<td class="tituloCotizacion" style="border:1px solid #15A346;">VENTA</td>
			</tr>

			<tr style="border:1px solid #15A346;">
				<td class="tituloImporte" style="border:1px solid #15A346;"><?php echo $tableroVALUE['compra']; ?> x </td>
				<td class="tituloImporte" style="border:1px solid #15A346;"><?php echo $tableroVALUE['venta']; ?></td>
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