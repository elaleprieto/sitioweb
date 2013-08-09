<?php
echo $this -> Html -> css('inicio', NULL, array('inline' => FALSE));
?>
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
	<!-- <div class="span8"> -->
	<div class="col-lg-12">
		<div class="row">
			<!-- <div class="span8"> -->
			<div class="col-lg-12">
        		<?php echo $this->element('ofertas_carrusel', array("cantidad" => 5)); ?>
			</div>
		</div>
	</div>
</div>
