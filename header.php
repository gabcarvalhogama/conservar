<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php
				$site_description = get_bloginfo( 'description', 'display' );
				$site_name = get_bloginfo( 'name' );
			    //for home page
				if ( $site_description && ( is_home() || is_front_page() ) )
					echo $site_name.' - '.$site_description; 
				else if (!is_home() && ! is_404() )
					echo $site_name . ' - '.get_the_title();
			?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="theme-color" content="#bf8339">
	
		
		<!-- <?php get_opengraph(); ?> -->
	   	
	   	<!-- Link Tag -->
	   	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="icon" type="image/jpg" href="<?=get_site_icon_url(512)?>" />
		<link rel="stylesheet" href="<?=bloginfo("template_url")?>/css/styles.css" type="text/css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142163455-8"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-142163455-8');
		</script>


		<?php wp_head(); ?>
    </head>
    <body>
		<header class="header">
			<div class="header--top">
				<div class="row container">
					<div class="col-md-6 header--top-column">
						<a href="mailto:contato@conservar.casa">contato@conservar.casa</a>
					</div>
					<div class="col-md-6 header--top-column text-right">
						<a href="tel:+5528999751803">(28) 9 9975-1803</a>
					</div>
				</div>
			</div>
			
			<div class="header--wrapper">
				<div class="container row">
					<div class="col-xl-2 text-xl-left col-md-12">
						<a href="<?=get_site_url()?>" title="Clique para voltar ao início.">
							<img src="<?=get_custom_logo_url();?>" alt="<?=bloginfo('name')?>" class="header--logo" />
						</a>
					</div>
					<div class="col-xl-10 col-md-12">
						<input id="menu-hamburguer" type="checkbox">
					    <label for="menu-hamburguer">
					        <div class="menu">
					            <span class="hamburguer"></span>
					        </div>
					    </label>
						<nav class="header--dmenu">
							<ul class="ul-inline">
								<li><a class="anchor" href="#">Início</a></li>
								<li><a class="anchor" href="#nossos-servicos">Nossos serviços</a></li>
								<li><a class="anchor" href="#portfolio">Portfolio</a></li>
								<li><a class="anchor" href="#sobre">Sobre</a></li>
								<li><a class="anchor" href="#contato">Contato</a></li>
								<li><a href="#contato" class="header--dmenu-cta btn--cta anchor">Faça orçamento</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<div class="highlight animated fadeIn" style="background-image: url('<?=header_image();?>')"></div>