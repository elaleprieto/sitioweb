<?php
echo $this -> Html -> css('inicio', NULL, array('inline' => FALSE));
?>
<div class="row">
	<div class="span8">
		<div class="row">
			<div class="span8">
        		<?php echo $this -> element('ofertas_carrusel', array("cantidad" => 5)); ?>
			</div>
		</div>
		<div class="row">
			<!-- Titulares	 -->
			<div class="span8">
				<div class="hero-unit">
					<h1><?=$this -> Html -> image('logo.svg', array('class' => 'brand')); ?>
					ELEFE <small>Artículos para Ferreterías</small></h1>
					<p>
						ELEFE nace de la mano de un compromiso: Proveer a sus Clientes Productos de Calidad al mejor Precio, sentando las bases de la empresa actual y liderando el sector Ferretería y Herrajes en la región Litoral.
					</p>
					<p>
						<a href="empresa" class="btn btn-primary"> Seguir leyendo <i class="icon-chevron-right icon-white"></i></a>
					</p>
				</div>
			</div>
		</div>
		<!-- Ofertas	 -->
		 <?php echo $this -> element('ofertas', array("cantidad" => 5)); ?>
	</div>
</div>
