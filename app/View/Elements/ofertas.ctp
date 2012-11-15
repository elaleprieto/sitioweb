<?php 
echo $this -> Html -> css('ofertas', NULL, array('inline' => FALSE));
$cantidad = isset($cantidad) ? $cantidad : 5;
$ofertas = $this -> requestAction('ofertas/mostrar/' . $cantidad);
?>
<ul class="thumbnails">
	<?php foreach ($ofertas as $oferta): ?>
	<li class="span4">
		<div class="thumbnail">
			<?php echo $this -> Html -> image("ofertas/" . $oferta['Oferta']['foto'], array('class' => 'oferta')); ?>
			<h3><small>¡Oferta!</small> <?php echo $oferta['Oferta']['title']; ?></h3>
			<p>
				<?php echo $oferta['Oferta']['descripcion']; ?>
			</p>
			<?php $condiciones = array(
					'before' => '$ ',
					'thousands' => '.',
					'decimals' => ',',
					'zero' => 'Consultar'
				);
			?>
			<h4 class="precio">Precio: <small><?php echo $this -> Number -> currency($oferta['Oferta']['precio'], 'USD', $condiciones); ?></small></h4>
		</div>
	</li>
	<?php endforeach; ?>
</ul>