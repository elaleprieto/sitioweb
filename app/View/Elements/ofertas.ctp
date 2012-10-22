<?php $cantidad = isset($cantidad) ? $cantidad : 5; ?>
<?php $ofertas = $this -> requestAction('ofertas/mostrar/' . $cantidad); ?>
<ul class="thumbnails">
	<?php foreach ($ofertas as $oferta): ?>
	<li class="span4">
		<div class="thumbnail">
			<?php echo $this -> Html -> image("ofertas/" . $oferta['Oferta']['foto']); ?>
			<h3><small>¡Oferta!</small> <?php echo $oferta['Oferta']['title']; ?></h3>
			<p>
				<?php echo $oferta['Oferta']['descripcion']; ?>
			</p>
			<h4>Precio: <small><?php echo $this -> Number -> currency($oferta['Oferta']['precio'], 'USD', array(
					'before' => '$ ',
					'thousands' => '.',
					'decimals' => ',',
					'zero' => 'Consultar'
				));
 				?></small></h4>
		</div>
	</li>
	<?php endforeach; ?>
</ul>