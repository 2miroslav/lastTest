<?php
require_once 'vendor/autoload.php';
$pages= new \Controlers\Core\Web\Pages();
?>
<DOCTIPE html>
	<head>
		<title>The Guru master PHPUnit</title>
	</head>
	<body>
	<h1><?php
		//jednoriadkovy komentar
		echo $pages->render();?></h1>
	</body>