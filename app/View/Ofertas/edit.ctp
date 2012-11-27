<?php echo $this -> Form -> create('Oferta'); ?>
<fieldset>
	<legend>
		<?php echo __('Edit Oferta'); ?>
	</legend>
	<div class="row">
		<div class="span6">
			<?php
            echo $this -> Form -> input('id');
            echo $this -> Form -> input('title');
            echo $this -> Form -> input('resumen');
            echo $this -> Form -> input('descripcion');
            echo $this -> Form -> input('precio');
            echo $this -> Form -> input('foto');
            echo $this -> Form -> input('vigente');
			?>
		</div>
		<div class="span6">
			<?php
            echo $this -> Form -> input('unidad');
            echo $this -> Form -> input('pack');
            echo $this -> Form -> input('colores');
            echo $this -> Form -> input('medidas');
            echo $this -> Form -> input('materiales');
            echo $this -> Form -> input('otros');
			?>
		</div>
	</div>
</fieldset>
<?php echo $this -> Form -> end(__('Submit')); ?>
<div class="actions">
	<h3> <?php echo __('Actions'); ?> </h3>
	<ul>
		<li>
			<?php echo $this -> Form -> postLink(__('Delete'), array(
                'action' => 'delete',
                $this -> Form -> value('Oferta.id')
            ), null, __('Are you sure you want to delete # %s?', $this -> Form -> value('Oferta.id')));
			?>
		</li>
		<li>
			<?php echo $this -> Html -> link(__('List Ofertas'), array('action' => 'index')); ?>
		</li>
	</ul>
</div>
