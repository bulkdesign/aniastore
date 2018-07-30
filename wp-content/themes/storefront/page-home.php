<?php /* Template Name: Home */ ?>
<?php get_header();?>
<!--SESSÃO PRODUTOS-->
<section id="Produtos" class="session scrollspy">
  <?php do_action('slideshow_deploy', '3992'); ?>
  <div class="container">
    <div class="row">
      <!--TITULO-->
      <div class="produtosrecentes">
        <div class="col m12 hide-on-small-only">
          <h1 class="paddingtop50">New In</h1>
        </div> 
        <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 12, 'orderby' =>'date', 'order' => 'DESC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="col s6 m6 l3 hoverable margin-top" style="height: 500px;">   
            <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.wc_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
              <h3 class="woocommerce-loop-product__title"><?php the_title(); ?></h3>
              <hr>
              <!-- Hashtags -->
              <span style="text-decoration: line-through;">de R$
                <?php
                $preco = $product->price;
                $preco_desconto = $preco * 0.15;
                $preco_final = $preco + $preco_desconto;
                echo number_format($preco_final, 2, ',', '.');
                ?>

              </span>
              <span class="price">por <?php echo $product->get_price_html(); ?></span><br>
              <span>Em até 3x s/juros</span>
            </a>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
      <!--BOTAO "LISTA COMPLETA"-->
      <div class="col s12 center">
        <a href="produtos" class="btn">Lista Completa</a>
      </div>
      <!-- VERAO -->
      <div class="col s12 center">
        <?php
        $banner = array( 'post_type' => 'banner', 'posts_per_page' => 1 );
        $bannerdestaque = new WP_Query( $banner );
        while ( $bannerdestaque->have_posts() ) : $bannerdestaque->the_post(); ?>
          <h1 class="banner"><?php the_field('titulo'); ?> <i class="em em-heart"></i></h1>
          <a href="<?php echo get_field('link_do_banner'); ?>">
            <img src="<?php echo get_field('imagem'); ?>" class="responsive-img" style="margin: 0px auto;" />
          </a>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
    <!-- INSTAGRAM -->
    <h1 class="paddingtop50">Instagram</h1>
    <?php echo do_shortcode('[instagram-feed]'); ?>
    <!-- COMENTARIOS DE CLIENTES -->
    <div class="row" style="margin-bottom:0;">
      <div class="col s12 center paddingtop30 paddingbottom30">
        <h3>Quem comprou e voltou pra dizer <i class="em em-heart"></i><i class="em em-smile"></i></h3>
        <?php
        $comentarios = array( 'post_type' => 'comentarios_clientes', 'posts_per_page' => 3 );
        $comentarios_clientes = new WP_Query( $comentarios );
        while ( $comentarios_clientes->have_posts() ) : $comentarios_clientes->the_post(); ?>
          <div class="col l4 m4 s12">
            <i class="em <?php echo the_field('emoji'); ?>"></i><br><br>
            <h1 class="vantagens"><?php echo the_field('comentario'); ?></h1>
            <p><?php echo the_field('nome_da_cliente'); ?></p>
          </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer('home'); ?>