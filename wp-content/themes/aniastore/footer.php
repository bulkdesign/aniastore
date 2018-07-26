<footer class="page-footer">
    <div class="container">
        <div class="row">
          <div class="col l12 m12 s12 center">
            <div class="col l3 s12">
              <p class="grey-text text-lighten-4">
                <strong>E-mail</strong><br>
                <a href="Contato">aniastore@aniastore.com.br</a>
              </p>
            </div>
            <div class="col l3 s12">
              <p class="grey-text text-lighten-4">
              <strong>Telefone</strong><br>
              <a href="Contato">(41) 98714-4714</a>
              </p>
            </div>
            <div class="col l3 s12">
              <p class="grey-text text-lighten-4">
              <strong>Facebook</strong><br>
              <a href="http://facebook.com/storeania" target="_blank">facebook.com/storeania</a>
              </p>
            </div>
            <div class="col l3 s12">
              <p class="grey-text text-lighten-4">
              <strong>Instagram</strong><br>
              <a href="https://www.instagram.com/store_ania/" target="_blank">www.instagram.com/store_ania/</a>
              </p>
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
<script src="<?php bloginfo('template_url'); ?>/materialize/js/materialize.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.zoom.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#ex1').zoom();
    $('.toggle-overlay').click(function() {
      $('aside').toggleClass('open');
    });
  });
</script>
<?php wp_footer(); ?>
</html>