<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="REFRESH" content="10"><title>dolarreal.php</title></head>
<body style="color: rgb(0, 0, 0); background-color: yellow;" alink="#000099" link="#000099" vlink="#990099">

<table align="center" style="text-align: left; width: 976px; height: 176px;" border="0" cellpadding="4" cellspacing="4">
<tbody>
<tr align="center"><td valign="undefined"><big><big style="color: red;"><big style="font-family: Arial Black;font-size: 150px;"><B>DOLAR X REAL </B></td></tr>
<tr>
<td style="text-align: center;" valign="undefined">
<?php function redondeado ($numero, $decimales)
{ $factor = pow(10, $decimales); return (round($numero*$factor)/$factor);
} 
ibase_connect("10.168.193.130:aliadocambios", "sysdba", "dorotea");
// select para buscar real
$buscareales = ibase_query("SELECT * FROM PARIDAD where ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
$R = ibase_fetch_object($buscareales);
$real = $R->PARIDAD_V;
$realc = $R->PARIDAD_C;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<div style="text-align: center; font-size: 120px;"><B><font bgcolor="white" font="" color="red" face="Arial Black">2COMPRA&nbsp;&nbsp;&nbsp;&nbsp;VENTA</u></font>
</div>
<br>
<div style="text-align: center; font-size: 170px;"><B><font bgcolor="white" font="" color="red" face="Arial Black"><?php echo '  '."&nbsp;".number_format($realc,3,',','.')."&nbsp;&nbsp;".'-'."&nbsp;&nbsp;".number_format($real,3,',','.'); ?></font>
</div>
</td>
</tr>
<br>
<br>
</tbody>
</table>
 <br>
<div style="text-align: center; font-size: 120px;"><B><font bgcolor="white" font="" <big style="color: rgb(0, 153, 0); font-size: 70px" face="Arial Black">Cambios Alberdi S.A.</u></font>
</div>
</body></html>