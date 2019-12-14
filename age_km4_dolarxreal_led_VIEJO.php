<?php
    function redondeado ($numero, $decimales){
        $factor = pow(10, $decimales);
        return (round($numero*$factor)/$factor);
    }

    ibase_connect("10.168.199.131:aliadocambios", "sysdba", "dorotea");
    // select para buscar real
    $buscareales    = ibase_query("SELECT * FROM PARIDAD where ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
    $R              = ibase_fetch_object($buscareales);
    $real           = $R->PARIDAD_V;
    $realc          = $R->PARIDAD_C;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="REFRESH" content="10">
        <title>Dolar x Real LED</title>
    </head>
    
    <body style="color: rgb(0, 0, 0); background-color: #090909; width:96px; height: auto; margin:0px; padding:0px;">
<!--
        <div style="text-align:center; font-size: 12px;">
            <p style="color:rgb(0, 153, 0); font-size:10px; font-family:Arial Black; margin:0px; padding:5px;">CAMBIOS ALBERDI S.A.</u></p>
        </div>
-->
        <div style="text-align:center; font-size: 10px;">
            <p style="color:rgb(255, 0, 0); font-size:10px; font-family:Arial Black; margin:0px; padding:0px;">DOLAR X REAL</u></p>
        </div>

        <div style="text-align:center; font-size: 10px;">
            <p style="color:rgb(255, 255, 255); font-size:10px; font-family:Arial Black; margin:0px; padding:0px;">COMPRA&nbsp;&nbsp;VENTA</u></p>
        </div>

        <div style="text-align:center; font-size: 12px;">
            <p style="color:rgb(255, 255, 255); font-size:12px; font-family:Arial Black; margin:0px; padding:0px;"><?php echo '  '."&nbsp;".number_format($realc,3,',','.')."&nbsp;".'-'."&nbsp;".number_format($real,3,',','.'); ?></u></p>
        </div>
    </body>
</html>