<!DOCTYPE html>
<html <?php language_attributes ($doctype:string)?>>
<head>
	<meta charset="<?php bloginfo ("charset")?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<h1><?php bloginfo("name")?></h1>
	</header>
	<main>