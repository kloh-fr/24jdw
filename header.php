<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php jdw_title(); ?></title>
	<link rel="alternate" type="application/rss+xml" title="Le flux RSS de <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=2023">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=2023">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=2023">
	<link rel="manifest" href="/site.webmanifest?v=2023">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=2023" color="#004063">
	<link rel="shortcut icon" href="/favicon.ico?v=2023">
	<meta name="msapplication-TileColor" content="#004063">
	<meta name="theme-color" content="#004063">
	<meta name="apple-mobile-web-app-title" content="24j de web" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@24joursdeweb" />
	<?php if(is_single() || is_page()) : ?>
	<meta property="og:title" content="<?php the_title_attribute(); ?>" />
	<meta name="twitter:title" content="<?php the_title_attribute(); ?>" />
	<meta property="og:description" content="<?php bloginfo('name'); ?> : <?php bloginfo('description'); ?>" />
	<meta name="twitter:description" content="<?php bloginfo('name'); ?> : <?php bloginfo('description'); ?>" />
	<?php endif; ?>
	<?php if((is_home() && !is_paged()) || (is_year() && get_the_time('Y') != 2016)) : ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<?php endif; ?>
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/og-banner.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/images/og-banner.jpg" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="site">
		<?php if((is_home() && !is_paged()) || (is_year() && get_the_time('Y') != 2016)) : ?>
		<header class="hero">
			<div class="hero-content">
				<h1 class="hero-h1"><a href="<?php bloginfo('home'); ?>" class="hero-logo"><?php jdw_the_logo(); ?></a></h1>
				<?php if(get_the_time('Y') <= 2017) : ?>
				<p class="hero-baseline"><?php bloginfo('description'); ?></p>
				<?php endif; ?>
			</div>
		</header>
		<?php else: ?>
		<header class="header">
			<div class="header-content">
				<a href="<?php bloginfo('home'); ?>" class="header-logo"><?php jdw_the_logo(); ?></a>
				<a href="<?php bloginfo('url'); ?>/<?php jdw_the_year(); ?>/" class="header-archive" aria-label="Retour &agrave; l'&eacute;dition <?php jdw_the_year(); ?>"><span class="header-archive-year"><?php jdw_the_year(); ?></span></a>
			</div>
		</header>
		<?php endif; ?>
		<main role="main" class="main">
