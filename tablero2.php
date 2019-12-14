<?php
	$min = date('i');

	ibase_connect("10.168.192.138:aliadocambios", "sysdba", "dorotea");
	
	$qryUSD_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 3");
	$rowUSD_PYG = ibase_fetch_object($qryUSD_PYG);
	$id			= 'moneda01';
	$cheque		= 'NO';
	$moneda		= 'Dolar';
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
	$moneda		= 'Dolar Cheque';
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
	$moneda		= 'Real';
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
	$moneda		= 'Peso';
	$imagen		= 'peso_argentino.png';
	$compra		= $rowARS_PYG->TCCOMPRABB;
	$venta		= $rowARS_PYG->TCVENTABB;
	$dBBARS_PYG = array(
		'codigo'	=> $id,
		'cheque'	=> $cheque,
		'moneda'	=> $moneda,
		'imagen'    => $imagen,
		'compra'	=> number_format($compra, 0, ',', '.'),
		'venta'		=> number_format($venta, 0, ',', '.')
	);

	$qryEUR_PYG	= ibase_query("SELECT * FROM COTIZACIONESMONEDAS WHERE ID_TIPOCOTIZACION = 1 AND ID_MONEDA = 6");
	$rowEUR_PYG	= ibase_fetch_object($qryEUR_PYG);
	$id			= 'moneda04';
	$cheque		= 'NO';
	$moneda		= 'Euro';
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
	$moneda		= 'Dolar x Real';
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
	$moneda		= 'Dolar Cheque x Real';
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
	$moneda		= 'Dolar x Peso';
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
	$moneda		= 'Dolar x Euro';
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
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="refresh" content="6">
        
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quantico&display=swap">
        <link rel="stylesheet" href="assests/css/style.css">

        <link rel="icon" href="img/favicon.ico">

        <title>TABLERO COTIZACIÓN</title>
    </head>
    <body class="fondo">
        <div style="padding: 50px;">
            <br /> <br />

            <div class="row" style="margin:0px;">
				<div class="card-deck" style="width:100%; margin:0px;">
<?php
	foreach ($JSONTablero01 as $JSONKey => $JSONValue) {
?>
                    <div class="card mb-3" style="max-width:650px;">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img id="<?php echo $JSONValue['codigo']; ?>" src="img/<?php echo $JSONValue['imagen']; ?>" class="card-img" alt="<?php echo $JSONValue['moneda']; ?>">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="card-text text-right"><?php echo $JSONValue['compra']; ?></p>
                                    <p class="card-text text-right"><?php echo $JSONValue['venta']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $JSONValue['moneda']; ?></small>
                        </div>
                    </div>
<?php
	}
?>
                </div>
            </div>
            
            <br /> <br />

			<div class="row" style="margin:0px;">
				<div class="card-deck" style="width:100%; margin:0px;">
<?php
	foreach ($JSONTablero02 as $JSONKey => $JSONValue) {
?>
                    <div class="card mb-3" style="max-width:650px;">
                        <div class="row no-gutters">
                            <div class="col-md-5">
                                <img id="<?php echo $JSONValue['codigo']; ?>" src="img/<?php echo $JSONValue['imagen']; ?>" class="card-img" alt="<?php echo $JSONValue['moneda']; ?>">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="card-text text-right"><?php echo $JSONValue['compra']; ?></p>
                                    <p class="card-text text-right"><?php echo $JSONValue['venta']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><?php echo $JSONValue['moneda']; ?></small>
                        </div>
                    </div>
<?php
	}
?>
                </div>
            </div>
        </div>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script>

			function aniBandera(){
				var imaDolar= 'img/dolar.png';
				var imaReal = 'img/real.png';
				var imaPeso = 'img/peso_argentino.png';
				var imaEuro	= 'img/euro.png';
				var imaCheq	= 'img/cheque.png';

				var imaDolarReal = document.getElementById('moneda05');
				var imaDolarPeso = document.getElementById('moneda06');
				var imaDolarEuro = document.getElementById('moneda07');
				var imaDolarCheq = document.getElementById('moneda08');
				
				if (imaDolarReal.src == 'http://10.168.196.152/tablero/img/dolar.png') {
					imaDolarReal.src = imaReal;
				} else {
					imaDolarReal.src = imaDolar;
				}

				if (imaDolarPeso.src == 'http://10.168.196.152/tablero/img/dolar.png') {
					imaDolarPeso.src = imaPeso;
				} else {
					imaDolarPeso.src = imaDolar;
				}

				if (imaDolarEuro.src == 'http://10.168.196.152/tablero/img/dolar.png') {
					imaDolarEuro.src = imaEuro;
				} else {
					imaDolarEuro.src = imaDolar;
				}

				if (imaDolarCheq.src == 'http://10.168.196.152/tablero/img/dolar.png') {
					imaDolarCheq.src = imaCheq;
				} else {
					imaDolarCheq.src = imaDolar;
				}
			}

			setInterval(aniBandera, 2000);
		</script>
    </body>
</html>