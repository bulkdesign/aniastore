<?php /* Template Name: Presentes */ ?>

<?php get_header('personalizados');?>

<style type="text/css">
  
  .margin20 {
    margin-top: 20px;
  }

</style>

    <header class="page-header">
      <h1 class="page-title"><?php the_title(); ?></h1>
    </header><!-- .page-header -->
    <!-- GRADE -->
    <?php
      /**
       * Functions hooked in to storefront_before_content
       *
       * @hooked storefront_header_widget_region - 10
       */
      do_action( 'storefront_before_content' ); ?>

      <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
          <div class="row">
            <div class="col l12 s12">
              <p>Aqui na Ania Store seu presente vale por três! Funciona assim, você escolhe a faixa de preço e independente do valor que escolher, leva sempre três produtos e paga um único valor. Compartilhe sua amizade, seus sentimentos e presenteie a você mesmo, um  amigo e a quem você ama! Escolha com carinho e não se preocupe com a embalagem, nós embrulhamos pra você!</p>
              <div class="grade-personalizados">
                <div class="col m12 s12">
                  <a href="/produto/kit-3990/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/banner_presentes_1.png">
                  </a>
                </div>
                <div class="col m12 s12 margin20">
                  <a href="/produto/kit-5990/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/banner_presentes_2.png">
                  </a>
                </div>
                <div class="col m12 s12 margin20">
                  <a href="/produto/kit-9990/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/banner_presentes_3.png">
                  </a>
                </div>
                <div class="col m12 s12 margin20">
                  <a href="/produto/kit-14990/">
                    <img class="hoverable" src="<?php bloginfo('template_url'); ?>/images/banner_presentes_4.png">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
<?php get_footer('home'); ?>