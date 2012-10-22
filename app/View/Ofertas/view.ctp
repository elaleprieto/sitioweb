<div class="ofertas view">
<h2><?php  echo __('Oferta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vigente'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['vigente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Oferta'), array('action' => 'edit', $oferta['Oferta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Oferta'), array('action' => 'delete', $oferta['Oferta']['id']), null, __('Are you sure you want to delete # %s?', $oferta['Oferta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('action' => 'add')); ?> </li>
	</ul>
</div>
