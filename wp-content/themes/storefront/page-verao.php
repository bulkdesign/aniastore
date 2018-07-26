<?php /* Template Name: Verao */ ?>

<?php get_header();?>

<style type="text/css">
  
  .margin20 {
    margin-top: 20px;
  }

  .storefront-sorting {
    display: block !important;
    margin-top: 50px;
    margin-bottom: 20px;
  }

  @media(min-width:768px) {
    .columns-3 ul.products li {
        width: 32.5% !important;
    }
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
        <div class="row">
          <div class="col s12">
            <img class="responsive-img" src="http://www.aniastore.com.br/wp-content/uploads/2017/10/Site-Ania_Banner-Página-Interna_Verão.png" alt="" width="1800" height="567" />
          </div>
          <div class="col s12">
            <div id="secondary" class="widget-area" role="complementary">
              <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
            <div class="col l8 s12 right">
              <?php echo do_shortcode('[woof_products per_page=9 columns=3 taxonomies=product_cat:29]'); ?>
            </div>
          </div>
        </div>
        

      </div>
    
<?php get_footer('home'); ?>