<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<footer class="page-footer">
    <div class="container">
        <div class="row">
          <div class="col l12 m12 s12 center">
            <!-- INSTITUCIONAL -->
            <div class="col l4 s12">
                <p class="grey-text text-lighten-4 left-align">INSTITUCIONAL</p>
                <ul>
                  <li class="left-align"><a href="<?php echo site_url(); ?>/prazos-e-entrega">Prazos e Entrega</a></li>
                  <li class="left-align"><a href="<?php echo site_url(); ?>/formas-de-pagamento">Formas de Pagamento</a></li>
                  <li class="left-align"><a href="<?php echo site_url(); ?>/politica-de-privacidade">Política de Privacidade</a></li>
                  <li class="left-align"><a href="<?php echo site_url(); ?>/politica-de-trocas-e-devolucoes">Política de Trocas e Devoluções</a></li>
              </ul>
            </div>
            <!-- LINKS -->
            <div class="col l4 s12">
              <p class="grey-text text-lighten-4 center-align">REDES SOCIAIS</p>
              <ul>
                <div class="col s12 push-s3">
                  <li class="col s2"><a href="http://facebook.com/storeania" target="_blank"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png" width="40"></a></li>
                  <li class="col s2"><a href="https://www.instagram.com/store_ania/" target="_blank"><img src="https://instagram-brand.com/wp-content/uploads/2016/11/app-icon2.png" width="40"></a></li>
                  <li class="col s2"><a href="https://api.whatsapp.com/send?phone=5541987144714"><img src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/whatsapp-256.png" width="40" /></a></li>
                </div>
              </ul>
            </div>
            <!-- REDES SOCIAIS-->
            <div class="col l4 s12">
                <p class="grey-text text-lighten-4 right-align">LINKS RÁPIDOS</p>
                <ul>
                  <li class="right-align"><a href="<?php echo site_url(); ?>/feito-a-mao">Feito à mão</a></li>
                  <li class="right-align"><a href="<?php echo site_url(); ?>/nos-♥-natureza">Nós ♥ Natureza</a></li>
                  <li class="right-align"><a href="<?php echo site_url(); ?>/personalizados">Do Seu Jeito</a></li>
                  <li class="right-align"><a href="<?php echo site_url(); ?>/sobre-a-ania">Sobre a Ania</a></li>
                  <li class="right-align"><a href="<?php echo site_url(); ?>/contato">Central de Atendimento</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container center">
          Ania Store © <?php echo date('Y'); ?> - Todos os direitos reservados | Made by <a class="purple-text text-lighten-3" href="http://www.bulkdesign.com.br" target="blank">Bulk Design</a>
        </div>
      </div>
  </footer>

</div><!-- #page -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/funcoes.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/jquery.sticky.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/materialize.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110389287-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110389287-1');
</script>

</body>
</html>
