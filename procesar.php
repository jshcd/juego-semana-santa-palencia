<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Juego de Semana Santa de Palencia</title>
		<meta name="keywords" content="semana,santa,palencia,juego,trivial,fotos" />
		<meta name="description" content="Juego de Semana Santa de Palencia. Pon a prueba tus conocimientos sobre la Semana Santa palentina en este interesante juego. By Jovencrucero y NM." />
		<link href="default.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="juego">
			<h1>JUEGO DE LA SEMANA SANTA DE PALENCIA</h1>
<?php

$NUM = 22;

$uno = htmlspecialchars($_POST['1']);
$dos = htmlspecialchars($_POST['2']);
$tres = htmlspecialchars($_POST['3']);
$cuatro = htmlspecialchars($_POST['4']);
$cinco = htmlspecialchars($_POST['5']);
$seis = htmlspecialchars($_POST['6']);
$siete = htmlspecialchars($_POST['7']);
$ocho = htmlspecialchars($_POST['8']);
$nueve = htmlspecialchars($_POST['9']);
$diez = htmlspecialchars($_POST['10']);
$once = htmlspecialchars($_POST['11']);
$doce = htmlspecialchars($_POST['12']);
$trece = htmlspecialchars($_POST['13']);
$catorce = htmlspecialchars($_POST['14']);
$quince = htmlspecialchars($_POST['15']);
$dieciseis = htmlspecialchars($_POST['16']);
$diecisiete = htmlspecialchars($_POST['17']);
$dieciocho = htmlspecialchars($_POST['18']);
$diecinueve = htmlspecialchars($_POST['19']);
$veinte = htmlspecialchars($_POST['20']);
$veintiuno = htmlspecialchars($_POST['21']);
$veintidos = htmlspecialchars($_POST['22']);

$contador = 0;

if($uno == "JESÚS NAZARENO") $contador++;
if($dos == "CORONACIÓN DE ESPINAS") $contador++;
if($tres == "SANTÍSIMO CRISTO DEL PERDÓN") $contador++;
if($cuatro == "NTRO. PADRE JESÚS CRUCIFICADO Y NTRA. MADRE DOLOROSA") $contador++;
if($cinco == "VIRGEN DEL ROMPIMIENTO") $contador++;
if($seis == "JESÚS ATADO A LA COLUMNA") $contador++;
if($siete == "LA ENTRADA DE JESÚS EN JERUSALÉN") $contador++;
if($ocho == "LONGINOS") $contador++;
if($nueve == "LA TRAICIÓN DE JUDAS") $contador++;
if($diez == "NUESTRA SEÑORA DE LA VERA CRUZ") $contador++;
if($once == "DESCENDIMIENTO DE JESÚS") $contador++;
if($doce == "NUESTRA MADRE LA VIRGEN DE LA AMARGURA") $contador++;
if($trece == "NUESTRA SEÑORA DEL DOLOR") $contador++;
if($catorce == "SANTÍSIMO CRISTO DE LA MISERICORDIA") $contador++;
if($quince == "NAZARENO CON EL CIRINEO") $contador++;
if($dieciseis == "VIRGEN DE LA PIEDAD") $contador++;
if($diecisiete == "LA SAGRADA CENA DEL SEÑOR") $contador++;
if($dieciocho == "LA VERÓNICA") $contador++;
if($diecinueve == "SANTÍSIMO CRISTO DEL OTERO DE SAN PABLO") $contador++;
if($veinte == "ERECCIÓN DE LA CRUZ") $contador++;
if($veintiuno == "CRISTO DEL DESENCLAVO") $contador++;
if($veintidos == "LAVATORIO") $contador++;
$porcentaje = $contador * 100 / $NUM;
echo "			<h2>$contador / $NUM</h2><br/>
			<p>Has acertado el $porcentaje % de las im&aacute;genes.</p>";
if($porcentaje > 80) echo "<p>ERES UN EXPERTO</p>";
else if($porcentaje > 60) echo "<p>ERES UN ENTENDIDO</p>";
else if($porcentaje > 40) echo "<p>SABEMOS QUE HAS ESTADO EN PALENCIA ALGUNA VEZ</p>";
else if($porcentaje > 20) echo "<p>SABES ALGO</p>";
else echo "<p>NO TIENES NI IDEA</p>";
?>

		</div>
		<!-- end #juego -->
		<div id="footer">
			<div class="w3cbutton3">
				<a href="http://validator.w3.org/check?uri=referer">
					<span class="w3c">W3C</span>
					<span class="spec">HTML 4.1</span>
				</a>
			</div>
			<br/>
			<div class="w3cbutton3">
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<span class="w3c">W3C</span>
					<span class="spec">CSS 2.1</span>
				</a>
			</div>
		</div>
		<!-- end #footer -->
	</body>
</html>
