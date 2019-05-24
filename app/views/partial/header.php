<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php if(isset($title)) { echo $title." - "; } ?> simponi.</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/custom.css') ?>">
	
	<script src="<?php echo base_url('js/jquery-2.0.0.min.js') ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('js/bootstrap.bundle.min.js') ?>" type="text/javascript"></script>
	<link href="<?php echo base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url('js/bootstrap.bundle.min.js') ?>" type="text/javascript"></script>
	<link href="<?php echo base_url('fonts/fontawesome/css/fontawesome-all.min.css') ?>" type="text/css" rel="stylesheet">
	<script src="<?php echo base_url('plugins/fancybox/fancybox.min.js') ?>" type="text/javascript"></script>
	<link href="<?php echo base_url('plugins/fancybox/fancybox.min.css') ?>" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url('plugins/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('plugins/owlcarousel/assets/owl.theme.default.css') ?>" rel="stylesheet">
	<script src="<?php echo base_url('plugins/owlcarousel/owl.carousel.min.js') ?>"></script>
	<link href="<?php echo base_url('css/ui.css') ?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url('css/responsive.css') ?>" rel="stylesheet" media="only screen and (max-width: 1200px)" />
	<script src="<?php echo base_url('js/script.js') ?>" type="text/javascript"></script>

</head>
<body>

<?php view('partial/navbar') ?>