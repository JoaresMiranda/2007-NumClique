<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="content-language" content="pt-br" />

	<meta name="robots" content="index,follow" />
	<meta name="author" content="Equipe NumClique.net" />
	<meta name="verify-v1" content="eP+vA6K9ihp+EdJYKdkB9TDF2xZTgdWj9b8uJG6ga7w=" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/ico" href="http://www.numclique.net/favicon.ico" />

	<link rel="alternate" type="application/rss+xml" title="Numclique.net - Informar &eacute; simples" href="<?php bloginfo('url'); ?>/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Coment&aacute;rios de Numclique.net - Informar &eacute; simples" href="<?php bloginfo('url'); ?>/comments/feed/" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<title>
		<?php if(is_single()): ?>
		<?php the_title('', ' &raquo; '); ?>
		<?php endif; ?>
		<?php bloginfo('name'); ?>
	</title>

	<?php wp_head(); ?>

	<!--[if IE]>
	<style type="text/css">
	input#searchsubmit {
		width:80px !important;
		height:30px !important;
		position:relative;
		top:7px;
		}
	</style>
	<![endif]-->

	<script src="http://imasters.uol.com.br/crossbrowser/fonte.js" type="text/javascript"></script>
</head>
<body>
<div id="wrap">
<div id="top">
	<div id="header">
		<h1 class="blogtitle"><a href="<?php echo get_option('home'); ?>/">
			<?php bloginfo('name'); ?>
			</a></h1>
		<p class="desc">
			<?php bloginfo('description'); ?>
		</p>
	</div>
</div>
<div id="main">
