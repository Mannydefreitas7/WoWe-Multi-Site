<head>
<link rel="SHORTCUT ICON" href="<?php echo $baseurl ?>images/favicon.ico"/>
	<?php include('include/googleanalytics.php');?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head() ?>
    	<!-- Stylesheets ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?php echo $baseurl ?>css/font-icons.css" type="text/css"/>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  </head>