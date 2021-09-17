<?php
	namespace chillerlan\QRCodeExamples;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Imagem Foto</title>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="shortcut icon" href="../../image/favicon.ico" />
	<script src="https://kit.fontawesome.com/cd1b9a04c6.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
var options = {
whatsapp: "+55(74)991381274", // WhatsApp number
call_to_action: "Fale conosco", // Call to action
position: "right", // Position may be 'right' or 'left'
message:"Olá Mundo",
logo:"image/logo.png",};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget --> 


</head>
<body class="fluid-container">

	<header class="col-12 cabecalho">
		<div class="col-3 logo"><a href="index.php"><img src="../../image/logo.png"></a></div>	
		
		<input type="checkbox" id="check">
		<label for="check" class="menuresp"><span class="fas fa-bars barras"></span></label>
		<ul class="nav">
			<li class="nav-item"><a class="nav-link" href='login.php'>Envio de Arquivos</a></li>
			<li class="nav-item"><a class="nav-link" href="opcoes.php">Encadernadora</a></li>
			<li class="nav-item"><a  class="nav-link" href="https://www.fotoimagem.com.br" target="_blank">Site Foto Imagem </a></li>
			<li class="nav-item"><a  class="nav-link" href="assistencia">Assistências Ótica</a></li>
			<li class="nav-item"><a  class="nav-link" href="trabalhe_conosco/login.php">Base de Currículos</a></li>
			<li class="nav-item"><a  class="nav-link" href="qrcode/">Gerador de QrCode</a></li>
			
		</ul>
	<a href="../index.php" class="text-right">Voltar</a>

	</header>
    <div class="interfaceqr">
		<?php


use chillerlan\QRCode\{QRCode, QROptions};

include ('autoload.php');

$url =$_POST['url'];

/*$options = new QROptions([
	'version'    => 5,
	'outputType' => QRCode::OUTPUT_MARKUP_SVG,
	'eccLevel'   => QRCode::ECC_L,
]);

$qrcode = new QRCode($options);
$qrcode->render($url);
$qrcode->render($url, '../imgqrcode/foto.svg');


*/
echo "<div class='qr'>";
#echo "<img src='../imgqrcode/file.svg'>";
echo '<img src="'.(new QRCode)->render($url).'" alt="QR Code" width=300px height=300px />';



echo "<a href='".(new QRCode)->render($url)."' download class='btn btn-primary'><h4>Download</h4></a>";
echo "</div>";
?>

</div>
</body>
</html>