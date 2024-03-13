<?php
if (isset($_POST['content'])) {
	include 'qrcode.php';
	$text = $_POST['content'];
	$nameofFile =md5(time()).".png";
	$file = "qrs/{$nameofFile}";
	$options = array(
		'w'=> 900,
		'h'=>900,
		//'bc'=> '#000000',
		//'fc'=> '#f5f0f0'
		'bc'=> '#f5f0f0',
		'fc'=> '#000000'
	);
	$generator = new QRCode($text, $options);
	$image = $generator->render_image();
	imagepng($image,$file);
	if(isset($_COOKIE['testeCookie'])){
	var_dump(explode(",",$_COOKIE['testeCookie']));
	}else{
	setcookie(
	    "testeCookie",
	    "{$file}",
	    time()+(1000 * 365 * 24 * 60 * 60),
	    "*",
	    "rm-aesthetics.store",
	    false,
	    false);
    }
	echo "<a name='qrs' href='{$file}' style='display:none'></a>"; 
	//$generator->output_image();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<style>
	body{
		background-color: #293dc2 !important;
		color: white !important;
	}
	form{
		width: 80vw;
		margin-left: auto;
		margin-right: auto;
		top:50%;
		z-index: -1;
		margin-top: 30vh;
	}
	input{
		margin-bottom: 10px!important;
	}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Este site é feito para gerar um Qr Code de graça sem tempo de expiração basta apenas escrever o conteudo enviar que já ira baixar a imagem estamos desenvolvendo mais ferramentas todas para lhe ajudar com possiveis tarefas do dia a dia no trabalho">
	<title>QrCode Generator</title>
	</head>
<body>
	<?php
	include('../modals/header.php')
	?>
	<form action="" class="mb-3" method="post">
		<label for="content" class="form-label">Insira o texto que você quer</label>
		<input type="text" class="form-control" name="content">
		<button class="form-control" type="submit">Gerar QRCODE</button>
	</form>
	<script async="async" data-cfasync="false" src="//pl22211904.toprevenuegate.com/e1e025c43b00ac87f44b8cc2698099df/invoke.js"></script>
<div id="container-e1e025c43b00ac87f44b8cc2698099df"style="width:30vw;margin-right:auto;margin-left:auto;"></div>
<script type='text/javascript' src='//pl22211295.toprevenuegate.com/35/af/6e/35af6e8c0d62588cf1ab1e0275f4a636.js'></script>
	<script>function download(uri, nome) {
	 	var link = document.createElement("a");
	 	link.download = nome;
	 	link.href = uri;
	 	link.click();
	   }
	var teste = document.getElementsByName("qrs")
	console.log(teste)
	control = 0
	while(control < teste.length){
	download(teste[control].href,teste[control].href.split("qrs/")[1])
	control++
	}
	   </script>
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-							T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	  </body>
</html>