<!DOCTYPE html>
<html>
<head lang="ja">
<meta charset="UTF-8">
<title>足し算</title>
</head>
<body>
	<?php
		$a = $_POST["txtA"];
		$b = $_POST["txtB"];
		$c = $a + $b;
		print($a." + ".$b." = ".$c."\n");
	?>
</body>
</html>