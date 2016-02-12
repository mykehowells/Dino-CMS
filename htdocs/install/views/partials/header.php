<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Installing Dino CMS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/uniform/css/uniform.default.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo asset('anchor/views/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css'); ?>" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/fullcalendar/fullcalendar.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/jqvmap/jqvmap/jqvmap.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo asset('anchor/views/assets/global/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/plugins/select2/css/select2-bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo asset('anchor/views/assets/global/css/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo asset('anchor/views/assets/pages/css/login-4.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo asset('anchor/views/assets/layouts/layout3/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo asset('anchor/views/assets/layouts/layout3/css/themes/default.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo asset('anchor/views/assets/layouts/layout3/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

  	</head>

	<body class="login">

<!--
		<nav>
			<img src="<?php echo asset('views/assets/img/logo.png'); ?>">

			<ul>
				<li class="start database metadata account complete">Language and timezone</li>
				<li class="database metadata account complete">Database setup</li>
				<li class="metadata account complete">Site metadata</li>
				<li class="account complete">Your account</li>
				<li class="complete">All done!</li>
			</ul>
		</nav>
-->

		<script>
			(function(w, d, u) {
				var parts = "<?php echo Uri::current(); ?>".split('/'), url = parts.pop(), li = d.getElementsByClassName(url);
				if(url == 'complete') d.body.parentNode.className += 'small';
				for(var i = 0; i < li.length; i++) li[i].className += ' elapsed';
			}(window, document));
		</script>