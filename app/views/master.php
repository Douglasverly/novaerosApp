<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href='/assets/styles/style.css'>
	<script src="https://kit.fontawesome.com/f8e1d54e4a.js" crossorigin="anonymous"></script>
	<title><?php echo $title;?></title>
</head>
<body>

	<div id="header">
		<?php require VIEWS.'partials/header.php'; ?>
	</div>

	<div class="container">
		<?php require VIEWS.$view;  ?>
	</div>

	<div id="footer">
		<?php require VIEWS.'partials/footer.php'; ?>
	</div>
</body>
</html>