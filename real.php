<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="REFRESH" content="10"><title>unmoneda.php</title></head>
<body style="color: rgb(0, 0, 0); background-color: yellow;" alink="#000099" link="#000099" vlink="#990099">
<big>
</big><big>
</big><table align="center" style="text-align: left; width: 976px; height: 176px;" border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr align="center"><td valign="undefined"><big><big style="color: red;"><big style="font-family: Arial Black;"><B><big><big><big><br><br>REAL
X DOLAR</big></big></big></big></big></big></B></td></tr>
<tr>
<td style="text-align: center;" valign="undefined">
<?php function redondeado ($numero, $decimales)
{ $factor = pow(10, $decimales); return (round($numero*$factor)/$factor);
} 
ibase_connect("10.168.194.130:ALIADOCAMBIOS", "SYSDBA", "dorotea");
// select para buscar real
$buscareales = ibase_query("SELECT * FROM PARIDAD where ID_COTIZACIONMONEDA = 1 AND ID_MONEDA = 4");
$R = ibase_fetch_object($buscareales);
$real = $R->PARIDAD_V;
echo "<br>";
?>
<div style="text-align: center; font-size: 320px;"><B><font bgcolor="white" font="" color="red" face="Arial Black"><?php echo number_format($real,3,',','.'); ?></font>
</div>
</td>
</tr>
<tr style="font-family: Arial Black;" align="center">
<td valign="undefined"><big style="color: rgb(0, 153, 0);"><B><big><big><big><big>Cambios
Alberdi S.A.</big> </big></big></big></big></B></td>
</tr>
</tbody>
</table>
<br>
</body></html>