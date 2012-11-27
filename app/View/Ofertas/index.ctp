<div class="ofertas index">
	<h2><?php echo __('Ofertas'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('resumen'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('unidad'); ?></th>
			<th><?php echo $this->Paginator->sort('pack'); ?></th>
			<th><?php echo $this->Paginator->sort('colores'); ?></th>
			<th><?php echo $this->Paginator->sort('medidas'); ?></th>
			<th><?php echo $this->Paginator->sort('materiales'); ?></th>
			<th><?php echo $this->Paginator->sort('otros'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('vigente'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($ofertas as $oferta): ?>
	<tr>
		<td><?php echo h($oferta['Oferta']['id']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['title']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['resumen']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['unidad']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['pack']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['colores']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['medidas']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['materiales']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['otros']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['precio']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['foto']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['vigente']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['created']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $oferta['Oferta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $oferta['Oferta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $oferta['Oferta']['id']), null, __('Are you sure you want to delete # %s?', $oferta['Oferta']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Oferta'), array('action' => 'add')); ?></li>
	</ul>
</div>
