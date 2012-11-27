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
		<!-- Ofertas	 -->
		 <?php //echo $this -> element('ofertas', array("cantidad" => 5)); ?>
	</div>
</div>
