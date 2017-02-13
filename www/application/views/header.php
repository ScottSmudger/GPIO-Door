<!DOCTYPE html>
<html lang="en">
<head>
	<title>Group 11 Alpha</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url("assets")?>/style.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="apple-touch-icon" type="image/png" sizes="57x57" href="<?=base_url("assets")?>/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" type="image/png" sizes="60x60" href="<?=base_url("assets")?>/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" type="image/png" sizes="72x72" href="<?=base_url("assets")?>/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" type="image/png" sizes="76x76" href="<?=base_url("assets")?>/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" type="image/png" sizes="114x114" href="<?=base_url("assets")?>/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" type="image/png" sizes="120x120" href="<?=base_url("assets")?>/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" type="image/png" sizes="144x144" href="<?=base_url("assets")?>/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" type="image/png" sizes="152x152" href="<?=base_url("assets")?>/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="<?=base_url("assets")?>/images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url("assets")?>/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url("assets")?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url("assets")?>/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url("assets")?>/images/favicon-16x16.png">
	<link rel="manifest" href="<?=base_url("assets")?>/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=base_url("assets")?>/images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//code.highcharts.com/highcharts.js"></script>
	<script src="//code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
<header>
	<div class="logowrap">
		<a href="/"><img id="logo" src="<?=base_url("assets")?>/images/logo.png"></a>
	</div>	
	<ul>
		<li><a href="/support" target="_href">Support</a></li>
		<li><a href="http://github.com/ScottSmudger/Smart-Appliances" target="_href">Github</a></li>
		<?php
		if($this->session->logged_in)
		{ ?>
			<li class="navright"><a href="/logout">Log Out</a></li><?php
		} ?>
	</ul>
</header>
<main>
