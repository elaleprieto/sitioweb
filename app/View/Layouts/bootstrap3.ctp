<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title> 
			ELEFE :: Artículos para Ferreterías :: <?php echo $title_for_layout; ?>
		</title>
		<meta name="description" content="La empresa ELEFE es una Distribuidora Mayorista de Artículos para Ferreterías.">
		<meta name="viewport" content="width=device-width">
		
		<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

		<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		
		# Estilos
		// echo $this->Html->css(array('bootstrap3.0rc1.min', 'default'));
		echo $this->Html->css(array('bootstrap3.0.0.min', 'default'));
		echo $this->fetch('css');
		
		# Modernizr
		echo $this->Html->script('vendor/modernizr-2.6.1-respond-1.1.0.min');
		?>
	</head>
	<body  data-spy="scroll" data-target="#navbar-principal">
		<!--[if lt IE 7]>
			<p class="chromeframe">
				Ud. posee un navegador desactualizado. <a href="http://browsehappy.com/">Actualice su navegador</a>.
			</p>
		<![endif]-->

		<!-- <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar-principal"> -->
		<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar-principal" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php 
				echo $this->Html->link($this->Html->image('logo.svg', array('class' => 'brand navbar-brand'))
					, Router::url('/')
					, array('escape' => false)
				)
				?>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<?php if($page == 'inicio'): ?>
						<li class="active">
							<a href="#ofertas"><i class="icon-home"></i> Inicio</a>
					<?php else: ?>
						<li>
							<?php 
							echo $this->Html->link('<i class="icon-home"></i> Inicio'
								, Router::url('/').'#ofertas'
								, array('escape' => false)
							);
							?>
					<?php endif	?>
					</li>
					<li>
						<?php
						if($page == 'inicio'):
							echo '<a href="#catalogo"><i class="icon-cloud-download"></i> Catálogo</a>';
						else:
							echo $this->Html->link('<i class="icon-cloud-download"></i> Catálogo'
								, Router::url('/').'#catalogo'
								, array('escape' => false)
							);
						endif;
						?>
					</li>
					<li>
						<?php
						if($page == 'inicio'):
							echo '<a href="#info"><i class="icon-calendar"></i> Novedades</a>';
						else:
							echo $this->Html->link('<i class="icon-calendar"></i> Novedades'
								, Router::url('/').'#info'
								, array('escape' => false)
							);
						endif;
						?>
					</li>
					<li>
						<?php
						if($page == 'inicio'):
							echo '<a href="#empresa"><i class="icon-group"></i> Empresa</a>';
						else:
							echo $this->Html->link('<i class="icon-group"></i> Empresa'
								, Router::url('/').'#empresa'
								, array('escape' => false)
							);
						endif;
						?>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<?php
						if($page == 'inicio'):
							echo '<a href="#info"><i class="icon-info-sign"></i></a>';
						else:
							echo $this->Html->link('<i class="icon-info-sign"></i>'
								, Router::url('/').'#info'
								, array('escape' => false, 'title' => 'Información de contacto')
							);
						endif;
						?>
					</li>
					<?php if($page == 'contacto'): ?>
						<li class="active">
					<?php else: ?>
						<li>
					<?php endif; ?>
						<?php
						echo $this->Html->link('<i class="icon-envelope-alt"></i>'
							, Router::url('/contacto')
							, array('escape' => false, 'title' => 'Formulario de contacto')
						)
						?>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

		<?php echo $this->fetch('content'); ?>
		
		<footer>
			<div id="licencia" class="col-lg-12">
				<p>
					<?php 
					echo $this->Html->image('copyleft_30.png', array('alt' => 'ELEFE'
						, 'border' => '0'
						, 'id' => 'copyleft'
						)
					);
					?>
					Copyleft 2012. Sistema desarrollado completamente con Software Libre y respetando los estándares internacionales.
				</p>
				<p>
					<a href="http://creativecommons.org/licenses/by/3.0/" rel="license">
						<img alt="Licencia Creative Commons" src="http://i.creativecommons.org/l/by/3.0/88x31.png" />
					</a>
					El contenido de esta web est&aacute; sujeto a una licencia de Creative Commons si no se indica lo contrario.
					<a href="http://elefe.com.ar" rel="source">ELEFE.com.ar</a> es realizado por <a cc="http://creativecommons.org/ns#" href="http://colectivolibre.com.ar" property="attributionName" rel="attributionURL">Colectivo Libre</a> y se encuentra bajo una Licencia <a href="http://creativecommons.org/licenses/by/3.0/" rel="license">Creative Commons Atribuci&oacute;n 3.0 Unported</a>.
					Basada en la obra <a dct="http://purl.org/dc/terms/" href="http://elefe.com.ar" rel="source">ELEFE.com.ar</a>.
					Permisos que vayan m&aacute;s all&aacute; de lo cubierto por esta licencia pueden encontrarse en <a cc="http://creativecommons.org/ns#" href="http://elefe.com.ar" rel="morePermissions">http://elefe.com.ar/licencia</a>. Las fotos y los precios de las ofertas, son ilustrativos y orientativos. No se aceptarán devoluciones por la mercadería en oferta. La finalización de las ofertas está sujeta sólo a la decisión de la empresa, por más que la publicación no se haya retirado de este sitio.
				</p>
			</div>
		</footer>

		<?php echo $this->element('sql_dump'); ?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')
		</script>
		<?php echo $this->Html->script(array('vendor/bootstrap3.0.0.min'));
 ?>
		<?php echo $this->fetch('script'); ?>
		<script>
			var _gaq = [['_setAccount', 'UA-21028233-6'], ['_trackPageview']]; ( function(d, t) {
					var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
					g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
					s.parentNode.insertBefore(g, s)
				}(document, 'script'));
		</script>
		<?php //echo $this->Js->writeBuffer(); ?>
	</body>
</html>
