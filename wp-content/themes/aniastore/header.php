  <!DOCTYPE html>
  <html>
  <head>
  	<!--Import Google Icon Font-->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<!--Import materialize.css-->
  	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/materialize/css/materialize.min.css"  media="screen,projection"/>
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
  	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  	<!--Let browser know website is optimized for mobile-->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<meta charset="utf-8">
  	<title>
      <?php if ( is_category() ) {
        echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_tag() ) {
        echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_archive() ) {
        wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
      } elseif ( is_search() ) {
        echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
      } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
      }  elseif ( is_404() ) {
        echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
      } elseif ( is_single() ) {
        wp_title('');
      } else {
        echo wp_title( ' | ', false, right ); bloginfo( 'name' );
      } ?>
    </title>    
    <?php wp_head(); ?>
  </head>

  <body>
  	<!--BARRA DE NAVEGAÇÃO-->
    <div class="navbar-fixed">
      <nav class="white z-depth-0 Navegacao">
        <div class="container">
          <div class="nav-wrapper">
            <a href="http://bulkdesign.com.br/aniastore/" class="brand-logo black-text"><img src="<?php bloginfo('template_url');?>/images/Logo_Ania.png"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="http://bulkdesign.com.br/aniastore/" class="black-text">Home</a></li>
                <li><a href="Produtos" class="black-text">Produtos</a></li>
                <li><a href="Infantil" class="black-text">Infantil</a></li>
                <li><a href="Outlet" class="black-text">Outlet</a></li>
                <li><a href="Contato" class="black-text">Contato</a></li>
                <li><a href="#"><i class="material-icons" style="color: black;">search</i></a></li>
                <li>
                  <div><a href="#"><i class="material-icons" style="color: black;">shopping_cart</i></a></div>
                </li>
                <li><a href="http://facebook.com/storeania" class="black-text" target="_blank"><img src="<?php bloginfo('template_url');?>/images/Facebook.png"></a></li>
                <li><a href="http://www.imgins.org/store_ania" class="black-text" target="_blank"><img src="<?php bloginfo('template_url');?>/images/Instagram.png"></a></li>
                <li><a href="Contato" class="black-text" target="_blank"><img src="<?php bloginfo('template_url');?>/images/Whatsapp.png"> <p class="FoneWhatsapp">(41) 98714-4714</p></a></li>
            </ul>
            <main class="hide-on-large-only">
              <a class="black-text toggle-overlay"><i class="small material-icons">menu</i></a>
            </main>
          </div>
        </div>
      </nav>
    </div>

    <!-- Mobile Menu -->
    <aside>
      <div class="outer-close toggle-overlay">
        <a class="black-text right close"><i class="margin-clear small material-icons">clear</i></a>
      </div>
      <nav class="mobile-menu">
        <ul>
          <li><a href="http://bulkdesign.com.br/aniastore/" class="black-text">Home</a></li>
            <li><a href="produtos.html" class="black-text">Produtos</a></li>
            <li><a href="infantil.html" class="black-text">Infantil</a></li>
            <li><a href="outlet.html" class="black-text">Outlet</a></li>
            <li><a href="contato.html" class="black-text">Contato</a></li>
            <li><a href="#" class="black-text">Carrinho de Compras - <span>0</span></a></li>
        </ul>
      </nav>
    </aside>