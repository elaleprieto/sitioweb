<?php
echo $this -> Html -> css('inicio', NULL, array('inline' => FALSE));
?>
<div class="row">
	<div class="span8">
		<div class="row">
			<!-- Titulares	 -->
			<div class="span8">
				<div class="hero-unit">
					<h1><?=$this -> Html -> image('logo.svg', array('class' => 'brand')); ?>
					ELEFE 	<small>Artículos para Ferreterías</small></h1>
					<p>
						ELEFE nace en 1983 de la mano de un compromiso: Proveer Productos de Calidad a sus Clientes, sentando las bases de la empresa actual y liderando el sector Ferretería y Herrajes en la región Litoral.
					</p>
					<p>
						<a href="historia" class="btn btn-primary"> Seguir leyendo <i class="icon-chevron-right icon-white"></i></a>
					</p>
				</div>
			</div>
		</div>
		<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">
					<img src="http://lorempixel.com/360/200/abstract" alt="">
					<h3>¡Oferta!</h3>
					<p>
						Thumbnail caption...
					</p>
				</div>
			</li>
			<li class="span4">
				<div class="thumbnail">
					<img src="http://lorempixel.com/360/200/city" alt="">
					<h3>¡Oferta!</h3>
					<p>
						Thumbnail caption...
					</p>
				</div>
			</li>
		</ul>
	</div>
	<aside class="span4">
		<ul class="thumbnails">
			<li class="span4">
				<div class="thumbnail">
					<dl>
						<dt>
							<h3 class="muted">Contáctenos</h3>
						</dt>
						<dd title="Teléfono">
							<i class="icon-headphones"></i> (+54) (0342) 452-4057
						</dd>
						<dd title="Fax">
							<i class="icon-print"></i> (+54) (0342) 453-3994
						</dd>
						<br />
						<dd>
							<a href="mailto:contacto@elefe.com.ar?subject=Asunto"><i class="icon-envelope"></i> contacto@elefe.com.ar</a>
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
		<?php echo $this -> element('noticias', array("cantidad" => 5)); ?>
	</aside>
</div>
