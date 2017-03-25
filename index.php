<?php require_once 'init.php'; ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?=ROOT_PUB . 'style' . DS . 'style.css'?>">
	<title>Framework Baú</title>
</head>
<body>

    <?php
	use app\Application;
	$Application = new Application;
	$Application->dispatcher();
    ?>

</body>
</html>