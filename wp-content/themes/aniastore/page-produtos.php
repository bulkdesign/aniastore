<?php /* Template Name: Produtos */ ?>

<?php get_header();?>


<!--SESSÃO PRODUTOS-->
<section id="Produtos" class="session scrollspy">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h1>Produtos</h1>
			</div>

			<!--CATEGORIAS-->
			<div class="Categorias col s12 m3 l2">

				<ul class="collapsible z-depth-0" data-collapsible="accordion">
					<li>
						<div class="collapsible-header active"><i class="material-icons">keyboard_arrow_right</i><h5 style="margin: 0px; padding: 0px; font-size: 15px; margin-top: 5px; margin-left: -15px;">Categorias</h5></div>

						<div class="collapsible-body" style="margin-top: 20px;">
							<ul class="collapsible z-depth-0" data-collapsible="accordion">
								<li>
									<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i><h6>Anéis</h6></div>
									<div class="collapsible-body">
										<ul>
											<a href="#"><li>Material</li></a>
											<a href="#"><li>Cores</li></a>
											<a href="#"><li>Tamanho</li></a>
										</ul>
									</div>
								</li>
							</ul>

							<ul class="collapsible z-depth-0" data-collapsible="accordion">
								<li>
									<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i><h6>Brincos</h6></div>
									<div class="collapsible-body">
										<ul>
											<a href="#"><li>Material</li></a>
											<a href="#"><li>Cores</li></a>
											<a href="#"><li>Tamanho</li></a>
										</ul>
									</div>
								</li>
							</ul>

							<ul class="collapsible z-depth-0" data-collapsible="accordion">
								<li>
									<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i><h6>Colares</h6></div>
									<div class="collapsible-body">
										<ul>
											<a href="#"><li>Material</li></a>
											<a href="#"><li>Cores</li></a>
											<a href="#"><li>Tamanho</li></a>
										</ul>
									</div>
								</li>
							</ul>

							<ul class="collapsible z-depth-0" data-collapsible="accordion">
								<li>
									<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i><h6>Conjuntos</h6></div>
									<div class="collapsible-body">
										<ul>
											<a href="#"><li>Material</li></a>
											<a href="#"><li>Cores</li></a>
											<a href="#"><li>Tamanho</li></a>
										</ul>
									</div>
								</li>
							</ul>

							<ul class="collapsible z-depth-0" data-collapsible="accordion">
								<li>
									<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i><h6>Pulseiras</h6></div>
									<div class="collapsible-body">
										<ul>
											<a href="#"><li>Material</li></a>
											<a href="#"><li>Cores</li></a>
											<a href="#"><li>Tamanho</li></a>
										</ul>
									</div>
								</li>
							</ul>

							<ul class="collapsible z-depth-0" data-collapsible="accordion">
								<li>
									<div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i><h6>Moda Praia</h6></div>
									<div class="collapsible-body">
										<ul>
											<a href="#"><li>Material</li></a>
											<a href="#"><li>Cores</li></a>
											<a href="#"><li>Tamanho</li></a>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</li>
				</ul>

				<br>
				
			</div>


			<div class="GridProdutos col s12 m9 l10">

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto1.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel Folheado a Ouro</p>
								<p class="Valor">R$27,60</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto2.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ouro, cravejado com zircônias na cor cristal</p>
								<p class="Valor">R$40,50</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto3.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ouro, cravejado com micro zircônias na cor cristal</p>
								<p class="Valor">R$53,40</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto4.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ródio, com cristal central cor água marinha e mini zircônias na cor cristal.</p>
								<p class="Valor">R$93,13</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto5.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ródio, com cristal central na cor esmeralda e zircônias na cor cristal</p>
								<p class="Valor">R$79,20</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto6.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ródio, com cristal central cor esmeralda e micro zircônias na cor cristal</p>
								<p class="Valor">R$158,65</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto7.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ródio, cravejado com zircônias em forma de coração na cor rosa</p>
								<p class="Valor">R$66,30</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto8.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ródio, com cristal central cor rosa e zircônias laterais na cor cristal</p>
								<p class="Valor">R$79,20</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto9.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ródio, com cristal central gota cor rosa e zircônias na cor cristal</p>
								<p class="Valor">R$106,03</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto10.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Anel folheado a ródio, cravejado com cinco zircônias quadradas na cor diamante amarelo</p>
								<p class="Valor">R$66,30</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto11.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Brinco de pérolas</p>
								<p class="Valor">R$79,60</p>
							</div>
						</div>
					</a>
				</div>

				<!--PRODUTO 1-->
				<div class="col l3 m6 s12 cartao">
					<a href="Detalhes">
						<div class="Produto">
							<div class="ProdutoImagem">
								<img src="<?php bloginfo('template_url');?>/images/Produto12.png">
							</div>
							<div class="ProdutoInfos">
								<p class="Nome">Arco de prata.</p>
								<p class="Valor">R$33,70</p>
							</div>
						</div>
					</a>
				</div>

			</div>
		</div>

	</div>
</section>
<br><br>



<?php get_footer(); ?>