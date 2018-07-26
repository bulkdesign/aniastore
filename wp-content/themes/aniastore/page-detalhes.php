<?php /* Template Name: Detalhes */ ?>

<?php get_header();?>


<!--SESSAO DETALHES DO PRODUTO-->
<section id="Detalhes">
	<div class="container">
		<div class="row">
			<div class="col s12 l7 m7" style="text-align: center;">
				<span class='zoom' id='ex1' style="position: relative; overflow: hidden;">
					<img src='<?php bloginfo('template_url');?>/images/Produto1.png' style="width: 450px;" class="responsive-img" id="Principal" />
				</span>

				<!--MINIATURA-->
				<div class="col l8 push-l2 m12 Miniatutas" style="text-align: center;">
					<div class="col l4 m4">
						<img src="<?php bloginfo('template_url');?>/images/Produto1.png">
					</div>
					<div class="col l4 m4">
						<img src="<?php bloginfo('template_url');?>/images/Produto1.png">
					</div>
					<div class="col l4 m3">
						<img src="<?php bloginfo('template_url');?>/images/Produto1.png">
					</div>
				</div>

			</div>


			<!--PAIEL A DIREITA - DETALHES DO PRODUTO-->
			<div class="col s12 l5 m5">
				<div class="DetalheProduto">
					<div>
						<h1>Anel Folheado a Ouro</h1>
						<div>
							Quantidade <select name="ProdutoQuantidade" style="display: inline; width: 50px; text-align: center;">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>


					<h3>R$27,60</h3>
					<button class="btn">Comprar</button>
				</div>

				<div>
					<h3>Descrição</h3>
					<p>Anel redondo para dedos da mão, produzido e folhado a ouro amarelo. 2X sem Juros ou em 5X com Juros</p>
				</div>

				<div>
					<h3>Especificação</h3>
					<p>**Aro 19</p>
				</div>

			</div>
		</div>

		<!--SUGESTÕES DE PRODUTOS-->
		<div class="col m12" style="margin-bottom: 50px;">
			<h3 style="text-align: center; margin-top: 100px; font-weight: 100;">Sugestões</h3>

			<div class="col l4 m4 s12 CartaoSugestao">
				<a href="detalhes.html">
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

			<div class="col l4 m4 s12 CartaoSugestao">
				<a href="detalhes.html">
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

			<div class="col l4 m4 s12 CartaoSugestao">
				<a href="detalhes.html">
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
		</div>


		<!--REDES SOCIAIS-->
		<div class="Social row" id="RedesSociais">
			<div class="col s12" style="text-align: center;">
				<a href="https://www.facebook.com/storeania" target="_blank" id="Facebook">
					<img src="<?php bloginfo('template_url');?>/images/Facebook.png">
				</a>
				<a href="contato.html" target="_blank" id="WhatsApp">
					<img src="<?php bloginfo('template_url');?>/images/WhatsApp.png">
				</a>
			</div>
		</div>


	</div>
</div>
</section>


<?php get_footer(); ?>