<?php get_header(); ?>
<section class="services section-padding-default" data-aos="fade-up" id="nossos-servicos">
	<div class="container">
		<h2 class="h2-default">Serviços de Manutenção residencial</h2>
		<p class="text-center p-default">Os técnicos em manutenção e reparos residenciais da Conservar são profissionais multifuncionais, ou seja, podem atuar com qualquer reparo e manutenção predial, que compreende desde pequenas problemas hidráulicos, como troca de torneiras, registros, sifões, vazamentos, passando por elétrica, como manutenções e reparos em disjuntor, tomadas, lâmpadas, reatores e até em manutenção e reparos em alvenaria, como troca de peça de porcelanato, cerâmica, reparo em pintura, telhado e entre diversos outros.
		Nossos serviços contam ainda com um Supervisor Técnico que acompanha o andamento do serviço para avaliar a qualidade e a satisfação do serviço solicitado. Orientando os profissionais quanto aos projetos e prazos.</p>

		<ul class="tabs" data-aos="fade-up">
			<li class="tab-link current" data-tab="tab-1">
				<a href="#limpeza-com-alta-pressao">
					<img src="<?=bloginfo("template_url")?>/images/brum-icon.svg" alt="Limpeza Residencial" title="Limpeza com Alta Pressão" />
					<span>Limpeza com alta pressão</span>
				</a>
			</li>
			<li class="tab-link" data-tab="tab-3">
				<a href="#instalacao-hidrossanitaria">
					<img src="<?=bloginfo("template_url")?>/images/hidro-icon.svg" alt="Instalação Hidrossanitária" title="Instalação Hidrossanitária" />
					<span>Instalação Hidrossanitária</span>
				</a>
			</li>
			<li class="tab-link" data-tab="tab-2">
				<a href="#instalacao-eletrica">
					<img src="<?=bloginfo("template_url")?>/images/energy-switch.svg" alt="Instalação Elétrica" title="Instalação Elétrica" />
					<span>Instalação Elétrica</span>
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
			Uma de nossas especialidades é a limpeza profunda de superfícies com alta pressão, limpando pisos externos, rústicos e porosos, tais como os pisos de pedras portuguesas, granito não polido, fulget, cimentícios agregados, cimento bruto ou os blocos intertravados de concreto.
		</div>
		<div id="tab-2" class="tab-content">
			<p>Quem nunca passou por um problema de furar um cano acidentalmente e não saber o que fazer? Agora temos a solução, nossos encanadores são profissionais treinados para atuar com diversos problemas hidráulicos em sua residencial ou empresa.</p>
			<p>Quando pensamos em problemas hidráulicos, normalmente lembramos de canos furados, porém reformas e instalações hidráulicos precisam ser meticulosamente realizados pois são de difícil manutenção após sua conclusão. Por isso, nossos encanadores têm anos de experiência e diversas obras entregues.</p>
		</div>
		<div id="tab-3" class="tab-content">
			<p>Todos sabem o quanto é perigoso a contratação de profissionais desqualificados para fazer reformas e manutenções elétricas. Nós da Conservar disponibilizamos eletricistas qualificados e treinados para efetuar um serviço de qualidade e principalmente com garantia.</p>
			<p>Nossos eletricistas, irão parametrizar a rede elétrica da sua empresa ou residência da forma mais precisa possível, não havendo problemas de superdimensionamento e nem subdimensionamento. Estes dois problemas numa manutenção elétrica são geralmente os motivos de acidentes de grande proporção em obras, como incêndio. Portando sempre Equipamentos de Proteção Individual, nossos eletricistas não só estão aptos a atuar com manutenção elétrica residencial, como também manutenção e reforma elétrica para empresas e industrias.</p>
		</div>
		<div id="tab-4" class="tab-content">
			<p>As reformas residenciais sempre foram motivo de dor de cabeça para os clientes, pois precisam se preocupar, além da qualidade e confiabilidade na reforma, na segurança de deixar suas residências com pessoas sem identificação.</p>
 
			<p>Acabou este problema, pois a Conservar faz sua reforma e manutenção respeitando princípios básicos para nós, como ética, organização, qualidade e agilidade. Os nossos clientes não precisam se preocupar com a segurança de suas casas, pois nossos profissionais passam por criteriosa avalição antes de serem contratados e atrelados à isto oferecemos a nossos clientes o melhor seguro de reformas e manutenção do mercado, com uma cobertura para danos materiais causados por algum incidente.</p>
		</div>
	</div>
</section>
<section class="section-padding-default" data-aos="fade-up" id="portfolio">
	<div class="container">
		<h2 class="h2-default">Portfolio</h2>
	</div>
	<div class="portfolio">
		<?php echo do_shortcode('[instagram-feed num=8 cols=4 showfollow=false]'); ?>
	</div>
</section>
<section class="section-padding-default" data-aos="fade-up" id="depoimentos">
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
<section class="section-padding-default section-dark" data-aos="fade-up" id="sobre">
	<div class="container about">
		<h2 class="h2-default">Sobre a Conservar</h2>

		<div class="row content">
			<div class="col-md-6 text-justify">
				<p class="p-default">A Conservar vem se estabelecendo estado do Espírito Santo como uma das melhores empresas de reformas, construções e manutenções, residenciais dos Capixabas atendendo de norte a sul do estado.
				Temos o compromisso de entregar um serviço de qualidade que supere as expectativas do cliente. Para isso, contamos com um corpo técnico qualificado, atendimento personalizado e parceria com uma das maiores seguradoras do país.</p>
			</div>
			<div class="col-md-6">
				<img src="http://greatvalleyconsultants.com//wp-content/uploads/2017/04/Our-Team-1.jpg" alt="">
			</div>
		</div>


		<!-- <div class="row faq" data-aos="fade-left">
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
		</div> -->

	</div>
</section>
<section class="section-padding-default" data-aos="fade-up" id="contato">
	<div class="container">
		<h2 class="h2-default">Entre em contato</h2>

		<div class="row contact">
			<div class="col-md-6">
				<ul>
					<!-- <li><a href="tel:+5528999195491"><i class="fas fa-phone"></i> (28) 9 9991-5491</a></li> -->
					<li><a href="https://api.whatsapp.com/send?phone=+5528999751803&text=Ol%C3%A1%2C%20Conservar." target="_blank" rel="nofollow"><i class="fab fa-whatsapp"></i> (28) 9 9975-1803</a></a></li>

					<li><a href="https://api.whatsapp.com/send?phone=+5527996043306&text=Ol%C3%A1%2C%20Conservar." target="_blank" rel="nofollow"><i class="fab fa-whatsapp"></i> (27) 9 9604-3306</a></a></li>

					<li><a href="https://www.google.com/maps/place/Linhares+-+ES,+29906-120,17z/data=!3m1!4b1!4m5!3m4!1s0xb62683349a6751:0x277639c43b55aa0f!8m2!3d-19.3570343!4d-40.0598408?hl=pt-BR" target="_blank" rel="nofollow"><i class="far fa-map"></i>Linhares - ES</a></li>
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
							<option value="Limpeza com alta pressão">Limpeza com alta pressão</option>
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