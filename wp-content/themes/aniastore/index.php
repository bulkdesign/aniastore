<?php get_header();?>

    <!--SESSÃO PRODUTOS-->
    <section id="Produtos" class="session scrollspy">
      <div class="container">
        <div class="row">

          <div class="col s12 m12 l4">
              <a href="">
                <div class="Destaque Destaque1">
                  <h3>Promo</h3>
                </div>
              </a>
          </div>

          <div class="col s12 m12 l4">
              <a href="">
                <div class="Destaque Destaque2">
                  <h3>Sugestão da Semana</h3>
                </div>
              </a>
          </div>

          <div class="col s12 m12 l4">
              <a href="Infantil">
                <div class="Destaque Destaque3">
                  <h3>Infantil</h3>
                </div>
              </a>
          </div>


          <!--TITULO-->
          <div class="col s12">
            <h1>Produtos recentes</h1>
          </div>


          <div class="GridProdutos col s12">

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

            <!--PRODUTO 2-->
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

            <!--PRODUTO 3-->
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

            <!--PRODUTO 4-->
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

            <!--PRODUTO 5-->
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

            <!--PRODUTO 6-->
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
            
            <!--PRODUTO 7-->
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

            <!--PRODUTO 8-->
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

          </div>
        </div>

        <!--BOTAO "LISTA COMPLETA"-->
        <div class="col s12 center">
          <a href="Produtos" class="btn">Lista Completa</a>
        </div>
      </div>
    </section>



<?php get_footer(); ?>