<?php get_header(); ?>
<section class="services section-padding-default">
	<div class="container">
		<h2 class="h2-default">Serviços de Manutenção residencial</h2>
		<p class="text-center p-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tortor justo, ultricies ac lacus in, finibus pellentesque est. Cras aliquet mauris eu metus hendrerit blandit. Cras quam enim, iaculis vitae orci sit amet, imperdiet tristique elit. </p>

		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">
				<a href="#limpeza-residencial">
					<img src="<?=bloginfo("template_url")?>/images/brum-icon.svg" alt="Limpeza Residencial" title="Limpeza Residencial" />
					<span>Limpeza Residencial</span>
				</a>
			</li>
			<li class="tab-link" data-tab="tab-2">
				<a href="#instalacao-eletrica">
					<img src="<?=bloginfo("template_url")?>/images/energy-switch.svg" alt="Instalação Elétrica" title="Instalação Elétrica" />
					<span>Instalação Elétrica</span>
				</a>
			</li>
			<li class="tab-link" data-tab="tab-3">
				<a href="#instalacao-hidrossanitaria">
					<img src="<?=bloginfo("template_url")?>/images/hidro-icon.svg" alt="Instalação Hidrossanitária" title="Instalação Hidrossanitária" />
					<span>Instalação Hidrossanitária</span>
				</a>
			</li>
			<li class="tab-link" data-tab="tab-4">
				<a href="#reformas-e-construcoes">
					<img src="<?=bloginfo("template_url")?>/images/build-icon.svg" alt="Reformas e pequenas construções" title="Reformas e pequenas construções" />
					<span>Reformas e pequenas construções</span>
				</a>
			</li>
		</ul>

		<div id="tab-1" class="tab-content current">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
		<div id="tab-2" class="tab-content">
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<div id="tab-3" class="tab-content">
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		</div>
		<div id="tab-4" class="tab-content">
			Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
	</div>
</section>
<section class="section-padding-default">
	<div class="container">
		<h2 class="h2-default">Portfolio</h2>
	</div>
	<div class="portfolio">
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-1.png" alt="" />
		</div>
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-2.png" alt="" />
		</div>
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-1.png" alt="" />
		</div>
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-2.png" alt="" />
		</div>
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-1.png" alt="" />
		</div>
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-2.png" alt="" />
		</div>
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-1.png" alt="" />
		</div>
		<div class="portfolio--item">
			<img src="<?=bloginfo("template_url")?>/images/placeholder-portfolio-2.png" alt="" />
		</div>
	</div>
</section>
<section class="section-padding-default">
	<div class="container">
		<h2 class="h2-default">O que nossos clientes dizem</h2>
		<p class="text-center p-default">Confira depoimentos reais sobre os nossos serviços!</p>
	</div>
	<div class="reviews">
		<?php
			$reviews = get_reviews();
			if(isset($reviews->result) AND count($reviews->result->reviews) > 0):
				for($r = 0; $r < 3; $r++):
		?>
		<div class="reviews--review">
			<div class="reviews--review-photo"><img src="<?=$reviews->result->reviews[$r]->profile_photo_url?>" alt="<?=$reviews->result->reviews[$r]->author_name?>"></div>
			<div class="reviews--review-content">
				<h3 class="reviews--review-name"><?=$reviews->result->reviews[$r]->author_name?></h3>
				<div class="reviews--review-stars">
					<?php
						for($i = 0; $i < $reviews->result->reviews[$r]->rating; $i++):
					?>
					<img src="<?=bloginfo("template_url")?>/images/star-icon.svg" alt="" />
					<?php endfor; ?>
				</div>
				<p class="reviews--review-text"><?=$reviews->result->reviews[$r]->text?></p>
			</div>
		</div>
		<?php endfor; endif; ?>
	</div>
	<div class="text-center">
		<a href="" class="btn--seemore">Veja mais depoimentos!</a>
	</div>
</section>
<section class="section-padding-default section-dark">
	<div class="container about">
		<h2 class="h2-default">Sobre a Conservar</h2>

		<div class="row content">
			<div class="col-md-6 text-justify">
				<p class="p-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tortor justo, ultricies ac lacus in, finibus pellentesque est. Cras aliquet mauris eu metus hendrerit blandit. Cras quam enim, iaculis vitae orci sit amet, imperdiet tristique elit. Donec tincidunt elementum aliquet. Donec condimentum sed sem et finibus. Quisque egestas, tortor egestas facilisis rutrum, nunc diam venenatis tortor, id tristique dolor massa sit amet elit. Etiam aliquet quam quis erat pretium, sit amet placerat ligula gravida. Aenean diam tellus, dignissim non vehicula eget, ultricies nec nibh.</p>
			</div>
			<div class="col-md-6">
				<img src="http://greatvalleyconsultants.com//wp-content/uploads/2017/04/Our-Team-1.jpg" alt="">
			</div>
		</div>


		<div class="row faq">
			<div class="col-md-6">
				<h3>Dúvidas Frequentes</h3>
				<p>Separamos algumas das dúvidas frequentes para você!</p>
			</div>
			<div class="col-md-6">
				<div id="accordion">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Collapsible Group Item #1
				        </button>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Collapsible Group Item #2
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Collapsible Group Item #3
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				      </div>
				    </div>
				  </div>
				</div>

			</div>
		</div>

	</div>
</section>
<section class="section-padding-default" id="contato">
	<div class="container">
		<h2 class="h2-default">Entre em contato</h2>

		<div class="row contact">
			<div class="col-md-6">
				<ul>
					<li><a href=""><i class="fas fa-phone"></i> (27) 0 0000-0000</a></li>
					<li><a href=""><i class="fab fa-whatsapp"></i> (27) 0 0000-0000</a></a></li>
					<li><a href=""><i class="far fa-map"></i> Av. Nome aleatorio, Centro, Linhares - ES</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<?=$response?>
				<form action="<?php 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>#contato" method="post">
					<div class="form-group">
						<label for="name">Qual é o seu nome? *</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Olá, qual o seu nome?" required />
					</div>
					<div class="form-row">
						<div class="col-md-6">
							<label for="email">Qual o seu e-mail? *</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Digita seu e-mail aqui!" required />
						</div>
						<div class="col-md-6">
							<label for="cellphone">Qual o seu celular? *</label>
							<input type="tel" class="form-control" id="cellphone" name="cellphone" placeholder="(__) _ ____-____" required />
						</div>
					</div>
					<div class="form-group">
						<label for="subject">Sobre o que você quer falar? *</label>
						<select name="subject" class="form-control" id="subject">
							<option value="">Selecione uma opção!</option>
							<option value="Limpeza Residencial">Limpeza Residencial</option>
							<option value="Instalação elétrica">Instalação elétrica</option>
							<option value="Instalações Hidrossanitárias">Instalações Hidrossanitárias</option>
							<option value="Reformas e pequenas construções">Reformas e pequenas construções</option>
							<option value="Outra coisa...">Outra coisa...</option>
						</select>
					</div>
					<div class="form-group text-center">
						<button class="btn--cta">Entrar em contato</button>
					</div>
					<input type="hidden" name="submitted" value="1">
				</form>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>