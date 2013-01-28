<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$appDescription = __d('app_dev', 'ELEFE - Artículos para Ferreterías');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
<html>
	<head>
		<?php echo $this -> Html -> charset(); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title> <?php echo $appDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<meta name="description" content="La empresa ELEFE es una Distribuidora Mayorista de Artículos para Ferreterías.">
		<meta name="viewport" content="width=device-width">
		<style>
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>
		<?php
		echo $this -> Html -> meta('icon');
		echo $this -> fetch('meta');
		# Estilos
		echo $this -> Html -> css(array(
			'bootstrap.min',
			'bootstrap-responsive.min',
			'default'
		));
		echo $this -> fetch('css');
		# Modernizr
		echo $this -> Html -> script('vendor/modernizr-2.6.1-respond-1.1.0.min');
		?>
	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="chromeframe">Ud. posee un navegador desactualizado. <a href="http://browsehappy.com/">Actualice su navegador</a>.</p>
		<![endif]-->

		<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<!-- <a class="brand" href="#">Trama Tierra</a> -->
					<?=$this -> Html -> image('logo.svg', array('class' => 'brand')); ?>
					<?=$this -> Html -> link('ELEFE', '/', array('class' => 'brand')) ?>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li <?=($this -> request -> controller == 'pages' && $this -> request -> action == 'display' && $this -> request -> pass[0] == 'inicio') ? 'class="active"' : 'class=""' ?>>
								<?=$this -> Html -> link('Inicio', '/') ?>
							</li>
							<li <?=($this -> request -> controller == 'pages' && $this -> request -> action == 'display' && $this -> request -> pass[0] == 'empresa') ? 'class="active"' : 'class=""' ?>>
								<?=$this -> Html -> link('Empresa', '/empresa') ?>
							</li>
							<li>
								<?=$this -> Html -> link('Catálogo', 'https://www.dropbox.com/s/l44cifwg3nl2iyl/ELEFE%20-%20Cat%C3%A1logo%20de%20Productos.pdf?dl=1') ?>
							</li>
							<li <?=($this -> request -> controller == 'pages' && $this -> request -> action == 'display' && $this -> request -> pass[0] == 'contacto') ? 'class="active"' : 'class=""' ?>>
								<?=$this -> Html -> link('Contacto', '/contacto') ?>
							</li>
							<!-- 			Menú Más				 -->
							<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Más <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<li>
							<?=$this -> Html -> link('Crear Usuario', '#') ?>
							</li>
							<li>
							<?=$this -> Html -> link('Solicitar Contraseña', '#') ?>
							</li>
							<li>
							<?=$this -> Html -> link('Noticias', '#') ?>
							</li>
							<li>
							<?=$this -> Html -> link('Eventos', '#') ?>
							</li>
							<!--
							<li class="dropdown-submenu">
							<?=$this -> Html -> link('Energia', array('controller' => 'secciones', 'action' => 'view', 3)) ?>
							<ul class="dropdown-menu">
							<li>
							<?=$this -> Html -> link('Renovables', array('controller' => 'areas', 'action' => 'view', 1)) ?>
							</li>
							<li>
							<?=$this -> Html -> link('Modelo energético', array('controller' => 'areas', 'action' => 'view', 2)) ?>
							</li>
							</ul>
							</li>
							<li class="divider"></li>
							<li class="nav-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
							-->
							<!-- 	</ul>
							</li><!-- 			Fin Menú Más				 -->
							<!-- 			Menú Admin				 -->
							<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
							<ul class="dropdown-menu">
							<li>
							<?=$this -> Html -> link('Gestión de Usuarios', '#') ?>
							</li>
							<li>
							<?=$this -> Html -> link('Gestión de Cursos', '#') ?>
							</li>
							<li>
							<?=$this -> Html -> link('Gestión de Docentes', '#') ?>
							</li>
							<!--
							<li class="divider"></li>
							<li class="nav-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
							-->
							<!-- 	</ul>
							</li><!-- 			Fin Menú Admin				 -->
						</ul>
						<!--
						<form class="navbar-form pull-right">
						<input class="span2" type="text" placeholder="Usuario">
						<input class="span2" type="password" placeholder="Contraseña">
						<button type="submit" class="btn">
						Ingresar
						</button>
						</form> -->

					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<!-- <div id="header">
			<h1><?php echo $this -> Html -> link($appDescription, 'http://elefe.com.ar'); ?></h1>
			</div> -->
			<!-- 			<div id="content"> -->

			<?php echo $this -> Session -> flash(); ?>

			<div class="row">
				<div class="span8">
					<?php echo $this -> fetch('content'); ?>
				</div>
				<aside class="span4">
					<!-- Contacto	 -->
					<ul class="thumbnails">
						<li class="span4">
							<div class="thumbnail lateral">
								<h3>Contáctenos</h3>
								<dl>
									<dd title="Teléfono">
										<i class="icon-headphones"></i> (+54) (0342) 452-4057
									</dd>
									<dd title="Fax">
										<i class="icon-print"></i> (+54) (0342) 453-3994
									</dd>
									<br />
									<dd>
										<a href="mailto:contacto@elefe.com.ar?subject=Contacto desde el Sitio"><i class="icon-envelope"></i> contacto@elefe.com.ar</a>
									</dd>
									<br />
									<dd>
										<i class="icon-map-marker"></i> San Lorenzo 2357
									</dd>
									<dd>
										<i class="icon-map-marker"></i> Santa Fe (S-3000-EUC)
									</dd>
									<dd>
										<i class="icon-map-marker"></i> Argentina
									</dd>
								</dl>
							</div>
						</li>
					</ul>
					<!-- Catálogo	 -->
					<ul class="thumbnails">
						<li class="span4">
							<div class="thumbnail lateral">
								<p id="catalogo-link"><?=$this -> Html -> link('<i class="icon-download-alt icon-white"></i> Descargar Catálogo', 'https://www.dropbox.com/s/l44cifwg3nl2iyl/ELEFE%20-%20Cat%C3%A1logo%20de%20Productos.pdf?dl=1', array(
									'escape' => false,
									'class' => 'btn btn-warning btn-large',
									'id' => 'catalogo-boton'
								));
 ?></p>
							</div>
						</li>
					</ul>
					<!-- Noticias	 -->
					<?php echo $this -> element('noticias', array("cantidad" => 5)); ?>
				</aside>
			</div>
			<!-- 			</div> -->
			<hr />
			<footer>
				<div class="row">
					<div id="licencia" class="span12">
						<p>
							<?php echo $this -> Html -> link($this -> Html -> image('copyleft_30.png', array(
								'alt' => $appDescription,
								'border' => '0',
								'id' => 'copyleft'
							)), 'http://www.elefe.com.ar/', array(
								'target' => '_blank',
								'escape' => false
							));
 ?>
							Copyleft 2012. Sistema desarrollado completamente con Software Libre y respetando los estándares internacionales.
						</p>
						<p>
							<a href="http://creativecommons.org/licenses/by/3.0/" rel="license"><img alt="Licencia Creative Commons" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a>
							El contenido de esta web est&aacute; sujeto a una licencia de Creative Commons si no se indica lo contrario.
							<a href="http://elefe.com.ar" rel="source">ELEFE.com.ar</a> es realizado por <a cc="http://creativecommons.org/ns#" href="http://colectivolibre.com.ar" property="attributionName" rel="attributionURL">Colectivo Libre</a> y se encuentra bajo una Licencia <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">Creative Commons Atribuci&oacute;n 3.0 Unported</a>.
							Basada en la obra <a dct="http://purl.org/dc/terms/" href="http://elefe.com.ar" rel="source">ELEFE.com.ar</a>.
							Permisos que vayan m&aacute;s all&aacute; de lo cubierto por esta licencia pueden encontrarse en <a cc="http://creativecommons.org/ns#" href="http://elefe.com.ar" rel="morePermissions">http://elefe.com.ar/licencia</a>. Las fotos y los precios de las ofertas, son ilustrativos y orientativos. No se aceptarán devoluciones por la mercadería en oferta. La finalización de las ofertas está sujeta sólo a la decisión de la empresa, por más que la publicación no se haya retirado de este sitio.
						</p>
					</div>
				</div>
			</footer>
		</div><!-- /container -->
		<!-- <div class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="navbar-inner">
		<div class="container">
		<?php echo $this -> Html -> link($this -> Html -> image('copyleft_30.png', array('alt' => $appDescription, 'border' => '0', 'id' => 'layout_nube')), 'http://www.elefe.com.ar/', array('target' => '_blank', 'escape' => false)); ?>
		<span>Proyecto Final de Carrera :: María Celeste Weidmann y Alejandro Esteban Prieto.</span>
		</div>
		</div>
		</div> -->

		<?php echo $this -> element('sql_dump'); ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')
		</script>
		<?php echo $this -> Html -> script(array(
				'vendor/bootstrap.min',
				'plugins',
			));
 ?>
		<?php echo $this -> fetch('script'); ?>
		<script>
			var _gaq = [['_setAccount', 'UA-21028233-6'], ['_trackPageview']]; ( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>
		<?php //echo $this -> Js -> writeBuffer(); ?>
	</body>
</html>
