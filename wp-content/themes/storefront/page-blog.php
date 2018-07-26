<?php /* Template Name: Blog */ ?>
<?php get_header('blog');?>

<style type="text/css">

.marginb40 {
  margin-bottom: 40px;
}

.marginb80 {
  margin-bottom: 80px;
}

.margin80 {
  margin-top: 80px;
}

.parallax-container .parallax {
  z-index: 45;
}

.title-above {
  position: absolute;
  z-index: 1;
  top: 40%;
  left: 25%;
  background: rgba(0, 0, 0, 0.35);
  padding: 5px;
  font-size: 45px;
  right: 50%;
  width: 50%;
}

.above {
  position: absolute;
  z-index: 2;
  bottom: 35%;
  width: 15%;
  left: 43%;
  right: 0;
}

</style>
    <!--SESSÃO PRODUTOS-->
    <section id="Produtos" class="marginb40 scrollspy">
      <div class="container">
        <h1>Vitrine:</h1>
        <div class="row">
          <div class="col s12">
            <!-- INÍCIO DO WHILE -->
            <?php while ( have_posts() ) : the_post(); ?>
              <!-- INÍCIO DO LOOP -->
              <?php $blog = new WP_Query( array( 'post_type' => array('aniablog'), 'posts_per_page' => 3 )); ?>
              <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
              <?php $post_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>

                <!-- AQUI DENTRO VEM O CONTEÚDO PRINCIPAL -->
                <div class="col s12 m12 l4">
                  <a href="<?php the_permalink();?>">
                    <div class="vitrine">
                      <img src="<?php echo $post_thumbnail; ?>" />
                      <h3 style="margin-top: 10px;"><?php the_title();?></h3>
                    </div>
                  </a>
                </div>

              <?php endwhile; wp_reset_query(); ?>
              <!-- FIM DO LOOP -->
            <?php endwhile; ?>
            <!-- FIM DO WHILE -->
          </div>
        </div>
      </div>
    </section>

    <!-- PARALLAX -->
    <!-- <?php // while ( have_posts() ) : the_post(); ?>
      <?php // $blog = new WP_Query( array( 'post_type' => array('aniablog'), 'cat' => 286, 'posts_per_page' => 1 )); ?>
      <?php // while ( $blog->have_posts() ) : $blog->the_post(); ?>
      <?php // $post_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
        <div class="parallax-container hide-on-med-and-down">
          <div class="parallax">
            <img src="<?php // echo $post_thumbnail; ?>">
            <h3 class="title-above white-text"><?php // the_title();?></h3>
            <a class="btn black white-text above" href="<?php // the_permalink(); ?>">Ver artigo</a>
          </div>
        </div>
      <?php // endwhile; wp_reset_query(); ?>
    <?php // endwhile; ?> -->
    <!-- FIM DO PARALLAX -->

    <div class="container">
      <div class="row">
        <div class="col s12 l12">
          <div class="col s12 l8">
            <h1 style="padding:80px 0 20px">Últimos Posts:</h1>
              <!-- INÍCIO DO WHILE -->
              <?php while ( have_posts() ) : the_post(); ?>
                <!-- INÍCIO DO LOOP -->
                <?php $blog = new WP_Query( array( 'post_type' => array('aniablog'), 'posts_per_page' => 6 )); ?>
                <?php while ( $blog->have_posts() ) : $blog->the_post(); ?>
                <?php $post_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>

                  <!-- AQUI DENTRO VEM O CONTEÚDO PRINCIPAL -->
                  <div class="col s12 m12 l4">
                    <a href="<?php the_permalink();?>">
                      <div class="vitrine">
                        <img src="<?php echo $post_thumbnail; ?>" />
                        <h3><?php the_title();?></h3>
                      </div>
                    </a>
                  </div>

                <?php endwhile; wp_reset_query(); ?>
                <!-- FIM DO LOOP -->
              <?php endwhile; ?>
              <!-- FIM DO WHILE -->
          </div>
          <div class="hide-on-small-only l4 right margin80">
            <div class="fb-page" data-href="https://www.facebook.com/storeania" data-tabs="timeline" data-width="350" data-height="715" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/storeania" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/storeania">Ania Store</a></blockquote></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container marginb80">
      <h1>Siga a Ania no Instagram (<a href="https://instagram.com/store_ania" target="blank">@store_ania</a>):</h1>
      <?php echo do_shortcode('[instagram-feed]'); ?>
    </div>

<?php get_footer('blog'); ?>