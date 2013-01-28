<?php
echo $this -> Html -> css('empresa', NULL, array('inline' => FALSE));
?>
<div class="row">
	<div class="span8">
		<h1><?=$this -> Html -> image('logo.svg', array('class' => 'brand')); ?> ELEFE <small>Artículos para Ferreterías</small></h1>
	</div>
</div>
<hr id="divisora" />
<ul class="thumbnails">
	<li class="span4">
		<div id='historia' class="thumbnail">
			<h3>Historia</h3>
			<p>
				ELEFE nace de la mano de un compromiso: Proveer a sus Clientes Productos de Calidad al mejor Precio, sentando las bases de la empresa actual y liderando el sector Ferretería y Herrajes en la región Litoral.
			</p>
		</div>
	</li>
	<li class="span4">
		<div id='mision' class="thumbnail">
			<h3>Nuestra Misión</h3>
			<p>
				Nuestra misión es entregar productos de calidad a nuestros clientes, ofreciendo el mejor precio del mercado.
			</p>
		</div>
	</li>
</ul>
<ul class="thumbnails">
	<li class="span4">
		<div id='vision' class="thumbnail">
			<h3>Nuestra Visión</h3>
			<p>
				Ser la empresa líder en distribución de artículos para ferretería en Argentina, brindando la mejor relación calidad/precio a nuestros clientes y ayudándoles a mejorar la rentabilidad de sus negocios.
			</p>
		</div>
	</li>
	<li class="span4">
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
	</li>
</ul>