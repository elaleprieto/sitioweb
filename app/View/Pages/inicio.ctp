<section id="ofertas">
	<div class="col-lg-12">
		<!--
		<div class="row">
		<div class="col-lg-8">
		<div class="row">
		<div class="col-lg-8">
		<?php echo $this -> Html -> image('banner.png'); ?>
		</div>
		</div>
		</div>
		</div>
		<br />
		-->
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12">
						<?php echo $this->element('ofertas_carrusel', array("cantidad" => 5)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<?php //echo $this->Session->flash(); ?>

	<section id="catalogo">
		<div class="jumbotron">
			<em class="text-center text-italic text-muted"><small>Te presentamos nuestro...</small></em>
			<h1 class="text-center"><strong>¡Catálogo de Productos!</strong></h1>
			<p class="text-center text-muted">
				Ahora podés descargar nuestro catálogo de productos con fotografías en la mejor calidad.
			</p>
			<p class="text-center text-muted lead">
				Hemos subido a la nube nuestro catálogo con más de 2000 productos para que lo tengas disponible siempre, en cualquier lugar y en cualquier dispositivo.
			</p>
			<p class="text-center">
				<a class="btn btn-warning btn-lg"
				href="https://www.dropbox.com/s/l44cifwg3nl2iyl/ELEFE%20-%20Cat%C3%A1logo%20de%20Productos.pdf?dl=1"> <i class="icon-cloud-download"></i> Descargar Catálogo </a>
			</p>
		</div>
	</section>

	<section id="info" class="row">
		<!-- Noticias	 -->
		<article class="col-lg-5 col-lg-offset-1">
			<?php echo $this->element('noticias', array("cantidad" => 5)); ?>
		</article>

		<!-- Contacto	 -->
		<article class="col-lg-4 col-lg-offset-1 thumbnail lateral">
			<h3><i class="icon-info-sign"></i> Contáctenos</h3>
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
		</article>
	</section>

	<section id="empresa">
		<div class="row">
			<div class="col-lg-12">
				<h2><i class="icon-group"></i> Nuestra Empresa...</h2>
			</div>
		</div>
		<div class="row">
			<article class="col-lg-6">
				<div id='historia' class="thumbnail">
					<h3>Historia</h3>
					<p>
						ELEFE nace de la mano de un compromiso: Proveer a sus Clientes Productos de Calidad al mejor Precio, sentando las bases de la empresa actual y liderando el sector Ferretería y Herrajes en la región Litoral.
					</p>
				</div>
			</article>
			<article class="col-lg-6">
				<div id='mision' class="thumbnail">
					<h3>Nuestra Misión</h3>
					<p>
						Nuestra misión es entregar productos de calidad a nuestros clientes, ofreciendo el mejor precio del mercado.
					</p>
				</div>
			</article>
		</div>
		<div class="row">
			<article class="col-lg-6">
				<div id='vision' class="thumbnail">
					<h3>Nuestra Visión</h3>
					<p>
						Ser la empresa líder en distribución de artículos para ferretería en Argentina, brindando la mejor relación calidad/precio a nuestros clientes y ayudándoles a mejorar la rentabilidad de sus negocios.
					</p>
				</div>
			</article>
			<article class="col-lg-6">
				<div id='valores' class="thumbnail">
					<h3>Nuestros Valores</h3>
					<ul id="valores-lista" class="unstyled">
						<li>
							<i class="icon-check"></i> Trabajo en equipo.
						</li>
						<li>
							<i class="icon-check"></i> Proactividad.
						</li>
						<li>
							<i class="icon-check"></i> Honestidad.
						</li>
						<li>
							<i class="icon-check"></i> Confianza.
						</li>
						<li>
							<i class="icon-check"></i> Calidad.
						</li>
						<li>
							<i class="icon-check"></i> Compromiso.
						</li>
						<li>
							<i class="icon-check"></i> Responsabilidad.
						</li>
					</ul>
				</div>
			</article>
		</div>
	</section>
</div><!-- /container -->
