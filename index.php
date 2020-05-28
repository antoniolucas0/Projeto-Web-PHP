<?php include "conecta.inc.php"; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WEB MOTOS</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>
	<?php
	include_once('topo.php');
	?>
	
	<div class='container'>
	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "menu.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
	<?php
		include_once('rodape.php');
	?>
</body>
</html>