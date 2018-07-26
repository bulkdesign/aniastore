<?php

get_header('blog'); ?>

	<div class="container">
		<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

			<style type="text/css">
				
			img {
				max-width: 100%;
				height: auto;
			}

			h3 {
				margin-top: 25px;
			}

			.imagem-redonda {
			    width: 500px;
			    height: 500px;
			    border-radius: 100%;
			    background: #eee no-repeat center;
			    background-size: cover;
			    margin: 0px auto;
			}

			.imagem-quadrada {
				width: 100%;
				height: 500px;
			    background: #eee no-repeat center;
			    background-size: cover;
			    margin: 0px auto;
			}

			</style>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row">
					<div class="col l2">&nbsp;</div>
					<div class="col l8 s12">
						<header class="entry-header">
							<div class="container">
								<?php
									if ( is_single() ) :
										the_title( '<h3 class="entry-title">', '</h3>' );
									else :
										the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
									endif;
								?>
								<blockquote style="border-left: none;"><p>Escrito por <?php the_author(); ?> em <?php the_date(); ?></p></blockquote>
							</div>
						</header><!-- .entry-header -->
						<?php if (get_field('imagem_redonda')): ?>
							<div class="imagem-redonda" style="background-image: url(<?php the_field('imagem_redonda'); ?>);"></div>
						<?php endif; ?>
						<?php if (get_field('imagem_quadrada')): ?>
							<div class="imagem-quadrada" style="background-image: url(<?php the_field('imagem_quadrada'); ?>);"></div>
						<?php endif; ?>
						<div class="entry-content margin50">
							<div class="container">
								<?php
									/* translators: %s: Name of current post */
									echo the_field('campo_de_texto');
								?>
							</div>
						</div><!-- .entry-content -->
					</div>
					<div class="col l2">&nbsp;</div>
					<div class="col s12">
						<p>---</p>
						<p><a href="https://www.aniastore.com.br/blog">Voltar para o Início do Blog</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.aniastore.com.br">Ir para a Loja da Ania Store</a></p>
					</div>
				</div>
				<div style="width:108px;display:block;margin:0px auto;">
					<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_whatsapp"></a>
						<a class="a2a_button_twitter"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
				</div>
				<div class="row" style="margin-top: 50px;">
					<div class="col s12">
						<?php echo do_shortcode('[wpdevart_facebook_comment curent_url="https://www.aniastore.com.br/blog" order_type="social" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="3" ]'); ?>
					</div>
				</div>
			</article>

		<?php endwhile; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer('blog'); ?>