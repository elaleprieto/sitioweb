<?php
echo $this->Html->css('ofertas_carrusel', NULL, array('inline' => FALSE));
echo $this->Html->script('ofertas', array('inline' => FALSE));

$cantidad = isset($cantidad) ? $cantidad : 5;
$ofertas = $this -> requestAction('ofertas/mostrar/' . $cantidad);
$i = 0;
?>

<div id="carousel" class="carousel slide text-center" data-interval="3000">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php foreach ($ofertas as $oferta): ?>
			<li data-target="#myCarousel" data-slide-to="<?= $i ?>" <?php if($i==0) echo 'class="active"' ?>></li>
			<?php $i++ ?>
		<?php endforeach; ?>
	</ol>

	<!-- Carousel items -->
	<div class="carousel-inner">
		<?php $i = 0 ?>
		<?php foreach ($ofertas as $oferta): ?>
			<div class="<?= $i==0 ? 'item active' : 'item' ?>">
				<?= $this -> Html -> image("ofertas/" . $oferta['Oferta']['foto'], array('class' => 'ofertaItem')); ?>
			</div>
		<?php $i++ ?>
		<?php endforeach; ?>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#carousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</div>