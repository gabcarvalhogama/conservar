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
		
		<?php get_opengraph(); ?>
	   	
	   	<!-- Link Tag -->
	   	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="icon" type="image/png" href="<?=get_site_icon_url(512, bloginfo("template_url").'/images/favicon.png')?>" />
		<link rel="stylesheet" href="<?=bloginfo("template_url")?>/css/styles.css" type="text/css" />
    </head>
    <body>
		<header class="header">
			<div class="header--top">
				<div class="row container">
					<div class="col-md-6 header--top-column">
						<a href="mailto:contato@conservar.com.br">contato@conservar.com.br</a>
					</div>
					<div class="col-md-6 header--top-column text-right">
						<a href="tel:+5500000000000">(00) 0 0000-0000</a>
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
					<div class="col-xl-7 col-md-12">
						<input id="menu-hamburguer" type="checkbox">
					    <label for="menu-hamburguer">
					        <div class="menu">
					            <span class="hamburguer"></span>
					        </div>
					    </label>
						<nav class="header--dmenu">
							<?php
			                    wp_nav_menu([
			                    	"container"=>"ul",
			                    	"menu_class"=>"ul-inline"
			                    ]);
			                ?>
						</nav>
					</div>
					<div class="col-xl-3 col-md-12 text-right pdy-1 header--cta">
						<a href="#contato" class="btn--cta">Faça um orçamento</a>
					</div>
				</div>
			</div>
		</header>

		<div class="highlight" style="background-image: url('<?=header_image();?>')"></div>