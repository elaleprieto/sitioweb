<div class="ofertas form">
<?php echo $this->Form->create('Oferta'); ?>
	<fieldset>
		<legend><?php echo __('Add Oferta'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('resumen');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('unidad');
		echo $this->Form->input('pack');
		echo $this->Form->input('colores');
		echo $this->Form->input('medidas');
		echo $this->Form->input('materiales');
		echo $this->Form->input('otros');
		echo $this->Form->input('precio');
		echo $this->Form->input('foto');
		echo $this->Form->input('vigente');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ofertas'), array('action' => 'index')); ?></li>
	</ul>
</div>
