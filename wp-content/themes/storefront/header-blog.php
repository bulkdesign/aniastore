<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/materialize.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/stylechild.css">
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="container">
			<div class="site-branding">
				<?php storefront_site_title_or_logo(); ?>
			</div>
			<?php storefront_secondary_navigation(); ?>
			<div class="site-search">
				<div class="wpdreams_asp_sc wpdreams_asp_sc-1 ajaxsearchpro asp_main_container  asp_compact hasASP" data-id="1" data-instance="1" id="ajaxsearchpro1_1" style="margin-top: 15px;"">
<div class="probox">
    
    <div class="promagnifier">
        	    <div class="asp_text_button hiddend">
		    Buscar	    </div>
        <div class="innericon">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path d="M460.475 408.443L351.4 299.37c15.95-25.137 25.2-54.923 25.2-86.833C376.6 122.914 303.687 50 214.062 50 124.44 50 51.525 122.914 51.525 212.537s72.914 162.537 162.537 162.537c30.326 0 58.733-8.356 83.055-22.876L406.917 462l53.558-53.557zM112.117 212.537c0-56.213 45.732-101.946 101.945-101.946 56.213 0 101.947 45.734 101.947 101.947S270.275 314.482 214.06 314.482c-56.213 0-101.945-45.732-101.945-101.945z"></path></svg>        </div>
	    <div class="asp_clear"></div>
    </div>

    
    
    <div class="prosettings hiddend" style="display:none;" data-opened="0">
                <div class="innericon">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path id="control-panel-4-icon" d="M170 294c0 33.138-26.862 60-60 60-33.137 0-60-26.862-60-60 0-33.137 26.863-60 60-60 33.138 0 60 26.863 60 60zm-60 90c-6.872 0-13.565-.777-20-2.243V422c0 11.046 8.954 20 20 20s20-8.954 20-20v-40.243c-6.435 1.466-13.128 2.243-20 2.243zm0-180c6.872 0 13.565.777 20 2.243V90c0-11.046-8.954-20-20-20s-20 8.954-20 20v116.243c6.435-1.466 13.128-2.243 20-2.243zm146-7c12.13 0 22 9.87 22 22s-9.87 22-22 22-22-9.87-22-22 9.87-22 22-22zm0-38c-33.137 0-60 26.863-60 60 0 33.138 26.863 60 60 60 33.138 0 60-26.862 60-60 0-33.137-26.862-60-60-60zm0-30c6.872 0 13.565.777 20 2.243V90c0-11.046-8.954-20-20-20s-20 8.954-20 20v41.243c6.435-1.466 13.128-2.243 20-2.243zm0 180c-6.872 0-13.565-.777-20-2.243V422c0 11.046 8.954 20 20 20s20-8.954 20-20V306.757c-6.435 1.466-13.128 2.243-20 2.243zm146-75c-33.137 0-60 26.863-60 60 0 33.138 26.863 60 60 60 33.138 0 60-26.862 60-60 0-33.137-26.862-60-60-60zm0-30c6.872 0 13.565.777 20 2.243V90c0-11.046-8.954-20-20-20s-20 8.954-20 20v116.243c6.435-1.466 13.128-2.243 20-2.243zm0 180c-6.872 0-13.565-.777-20-2.243V422c0 11.046 8.954 20 20 20s20-8.954 20-20v-40.243c-6.435 1.466-13.128 2.243-20 2.243z"></path></svg>        </div>
    </div>

    
    
    <div class="proinput hiddend">
        <form action="#" autocomplete="off">
            <input type="search" class="orig" placeholder="Digite aqui o que você procura..." name="phrase" value="" autocomplete="off">
            <input type="text" class="autocomplete" name="phrase" value="" autocomplete="off" disabled="">
            <input type="submit" style="width:0; height: 0; visibility: hidden;">
        </form>
    </div>

    
    
    <div class="proloading hiddend">
                <div class="asp_loader">
            <div class="asp_loader-inner asp_ball-beat">
            
                <div></div>
                
                <div></div>
                
                <div></div>
                            </div>
        </div>
            </div>

            <div class="proclose hiddend">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <polygon id="x-mark-icon" points="438.393,374.595 319.757,255.977 438.378,137.348 374.595,73.607 255.995,192.225 137.375,73.622 73.607,137.352 192.246,255.983 73.622,374.625 137.352,438.393 256.002,319.734 374.652,438.378 "></polygon>
            </svg>
        </div>
    
    
</div>    

</div><p id="asp-try-1_1" class="asp-try asp-try-1" style="display: none; left: 1120px;">Você pode buscar por palavras-chave: <a href="#">brinco</a><a href="#">chinelo</a><a href="#">bolsa</a><a href="#">anéis</a></p>
<div class="wpdreams_clear"></div>    <div class="asp_hidden_data" id="asp_hidden_data_1_1" style="display:none;">

    <div class="asp_item_overlay">
        <div class="asp_item_inner">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path d="M460.475 408.443L351.4 299.37c15.95-25.137 25.2-54.923 25.2-86.833C376.6 122.914 303.687 50 214.062 50 124.44 50 51.525 122.914 51.525 212.537s72.914 162.537 162.537 162.537c30.326 0 58.733-8.356 83.055-22.876L406.917 462l53.558-53.557zM112.117 212.537c0-56.213 45.732-101.946 101.945-101.946 56.213 0 101.947 45.734 101.947 101.947S270.275 314.482 214.06 314.482c-56.213 0-101.945-45.732-101.945-101.945z"></path></svg>                    </div>
    </div>

</div><div class="asp_init_data" style="display:none !important;" id="asp_init_id_1_1" data-aspdata="ew0KICAgICJob21ldXJsIjogImh0dHBzOi8vd3d3LmFuaWFzdG9yZS5jb20uYnIvIiwNCiAgICAicmVzdWx0c3R5cGUiOiAidmVydGljYWwiLA0KICAgICJyZXN1bHRzcG9zaXRpb24iOiAiaG92ZXIiLA0KICAgICJpdGVtc2NvdW50IjogNCwNCiAgICAiaW1hZ2V3aWR0aCI6IDcwLA0KICAgICJpbWFnZWhlaWdodCI6IDcwLA0KICAgICJyZXN1bHRpdGVtaGVpZ2h0IjogImF1dG8iLA0KICAgICJzaG93YXV0aG9yIjogMCwNCiAgICAic2hvd2RhdGUiOiAwLA0KICAgICJzaG93ZGVzY3JpcHRpb24iOiAxLA0KICAgICJjaGFyY291bnQiOiAgMCwNCiAgICAibm9yZXN1bHRzdGV4dCI6ICJTZW0gcmVzdWx0YWRvcyIsDQogICAgImRpZHlvdW1lYW50ZXh0IjogIlZvY8OqIHF1aXMgZGl6ZXI6IiwNCiAgICAiZGVmYXVsdEltYWdlIjogImh0dHBzOi8vd3d3LmFuaWFzdG9yZS5jb20uYnIvd3AtY29udGVudC9wbHVnaW5zL2FqYXgtc2VhcmNoLXByby9pbWcvZGVmYXVsdC5qcGciLA0KICAgICJoaWdobGlnaHQiOiAxLA0KICAgICJoaWdobGlnaHR3aG9sZXdvcmRzIjogMSwNCiAgICAib3BlblRvQmxhbmsiOiAwLA0KICAgICJzY3JvbGxUb1Jlc3VsdHMiOiAwLA0KICAgICJyZXN1bHRhcmVhY2xpY2thYmxlIjogMSwNCiAgICAiYXV0b2NvbXBsZXRlIjogew0KICAgICAgICAiZW5hYmxlZCI6IDEsDQogICAgICAgICJnb29nbGVPbmx5IjogMCwNCiAgICAgICAgImxhbmciOiAicHQiLA0KICAgICAgICAibW9iaWxlIjogMSAgICB9LA0KICAgICJ0cmlnZ2Vyb250eXBlIjogMSwNCiAgICAidHJpZ2dlcm9ucmV0dXJuIjogMCwNCiAgICAidHJpZ2dlcl9vbl9jbGljayI6IDEsDQogICAgInRyaWdnZXJPbkZhY2V0Q2hhbmdlIjogMSwNCiAgICAidHJpZ2dlciI6IHsNCiAgICAgICAgImRlbGF5IjogMzAwLA0KICAgICAgICAiYXV0b2NvbXBsZXRlX2RlbGF5IjogMzEwICAgIH0sDQogICAgIm92ZXJyaWRld3BkZWZhdWx0IjogMCwNCiAgICAib3ZlcnJpZGVfbWV0aG9kIjogInBvc3QiLA0KICAgICJyZWRpcmVjdG9uY2xpY2siOiAwLA0KICAgICJyZWRpcmVjdENsaWNrVG8iOiAiYWpheF9zZWFyY2giLA0KICAgICJyZWRpcmVjdF9vbl9lbnRlciI6IDEsDQogICAgInJlZGlyZWN0RW50ZXJUbyI6ICJ3b29fcmVzdWx0c19wYWdlIiwNCiAgICAicmVkaXJlY3RfdXJsIjogIj9zPXtwaHJhc2V9IiwNCiAgICAic2V0dGluZ3NpbWFnZXBvcyI6ICJyaWdodCIsDQogICAgInNldHRpbmdzVmlzaWJsZSI6IDAsDQogICAgImhyZXN1bHRoaWRlZGVzYyI6ICIwIiwNCiAgICAicHJlc2NvbnRhaW5lcmhlaWdodCI6ICI0MDBweCIsDQogICAgInBzaG93c3VidGl0bGUiOiAiMCIsDQogICAgInBzaG93ZGVzYyI6ICIxIiwNCiAgICAiY2xvc2VPbkRvY0NsaWNrIjogMSwNCiAgICAiaWlmTm9JbWFnZSI6ICJkZWZhdWx0aW1hZ2UiLA0KICAgICJpaVJvd3MiOiAyLA0KICAgICJpaUd1dHRlciI6IDUsDQogICAgImlpdGVtc1dpZHRoIjogMjAwLA0KICAgICJpaXRlbXNIZWlnaHQiOiA0MDAsDQogICAgImlpc2hvd092ZXJsYXkiOiAxLA0KICAgICJpaWJsdXJPdmVybGF5IjogMSwNCiAgICAiaWloaWRlQ29udGVudCI6IDEsDQogICAgImxvYWRlckxvY2F0aW9uIjogImF1dG8iLA0KICAgICJhbmFseXRpY3MiOiAwLA0KICAgICJhbmFseXRpY3NTdHJpbmciOiAiP2FqYXhfc2VhcmNoPXthc3BfdGVybX0iLA0KICAgICJzaG93X21vcmUiOiB7DQogICAgICAgICJ1cmwiOiAiP3M9e3BocmFzZX0iLA0KICAgICAgICAiYWN0aW9uIjogInJlZGlyZWN0Ig0KICAgIH0sDQogICAgIm1vYmlsZSI6IHsNCiAgICAgICAgInRyaWdnZXJfb25fdHlwZSI6IDEsDQogICAgICAgICJjbGlja19hY3Rpb24iOiAiYWpheF9zZWFyY2giLA0KICAgICAgICAicmV0dXJuX2FjdGlvbiI6ICJ3b29fcmVzdWx0c19wYWdlIiwNCiAgICAgICAgInJlZGlyZWN0X3VybCI6ICI/cz17cGhyYXNlfSIsDQogICAgICAgICJoaWRlX2tleWJvYXJkIjogMCwNCiAgICAgICAgImZvcmNlX3Jlc19ob3ZlciI6IDAsDQogICAgICAgICJmb3JjZV9zZXR0X2hvdmVyIjogMCwNCiAgICAgICAgImZvcmNlX3NldHRfc3RhdGUiOiAiY2xvc2VkIg0KICAgIH0sDQogICAgImNvbXBhY3QiOiB7DQogICAgICAgICJlbmFibGVkIjogMSwNCiAgICAgICAgIndpZHRoIjogIjgwJSIsDQogICAgICAgICJjbG9zZU9uTWFnbmlmaWVyIjogMSwNCiAgICAgICAgImNsb3NlT25Eb2N1bWVudCI6IDEsDQogICAgICAgICJwb3NpdGlvbiI6ICJhYnNvbHV0ZSIsDQogICAgICAgICJvdmVybGF5IjogMSAgICB9LA0KICAgICJhbmltYXRpb25zIjogew0KICAgICAgICAicGMiOiB7DQogICAgICAgICAgICAic2V0dGluZ3MiOiB7DQogICAgICAgICAgICAgICAgImFuaW0iIDogImZhZGVkcm9wIiwNCiAgICAgICAgICAgICAgICAiZHVyIiAgOiAzMDAgICAgICAgICAgICB9LA0KICAgICAgICAgICAgInJlc3VsdHMiIDogew0KICAgICAgICAgICAgICAgICJhbmltIiA6ICJmYWRlZHJvcCIsDQogICAgICAgICAgICAgICAgImR1ciIgIDogMzAwICAgICAgICAgICAgfSwNCiAgICAgICAgICAgICJpdGVtcyIgOiAiZmFkZUluRG93biINCiAgICAgICAgfSwNCiAgICAgICAgIm1vYiI6IHsNCiAgICAgICAgICAgICJzZXR0aW5ncyI6IHsNCiAgICAgICAgICAgICAgICAiYW5pbSIgOiAiZmFkZWRyb3AiLA0KICAgICAgICAgICAgICAgICJkdXIiICA6IDMwMCAgICAgICAgICAgIH0sDQogICAgICAgICAgICAicmVzdWx0cyIgOiB7DQogICAgICAgICAgICAgICAgImFuaW0iIDogImZhZGVkcm9wIiwNCiAgICAgICAgICAgICAgICAiZHVyIiAgOiAzMDAgICAgICAgICAgICB9LA0KICAgICAgICAgICAgIml0ZW1zIiA6ICJ2b2lkYW5pbSINCiAgICAgICAgfQ0KICAgIH0sDQogICAgImRldGVjdFZpc2liaWxpdHkiIDogMCwNCiAgICAiYXV0b3AiOiB7DQogICAgICAgICJzdGF0ZSI6ICJkaXNhYmxlZCIsDQogICAgICAgICJwaHJhc2UiOiAiIiwNCiAgICAgICAgImNvdW50IjogMTAgICAgfSwNCiAgICAiZnNzX2xheW91dCI6ICJtYXNvbnJ5IiwNCiAgICAic3RhdGlzdGljcyI6IDB9DQo="></div>
			</div>
		</div>
	</header><!-- #masthead -->