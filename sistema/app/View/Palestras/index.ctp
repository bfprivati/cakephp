<div class="palestras index">
	<h2><?php echo __('Palestras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('hora_fim'); ?></th>
			<th><?php echo $this->Paginator->sort('palestrante'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($palestras as $palestra): ?>
	<tr>
		<td><?php echo h($palestra['Palestra']['id']); ?>&nbsp;</td>
		<td><?php echo h($palestra['Palestra']['nome']); ?>&nbsp;</td>
		<td><?php echo h($palestra['Palestra']['hora_inicio']); ?>&nbsp;</td>
        <td><?php echo h($palestra['Palestra']['hora_fim']); ?>&nbsp;</td>
		<td><?php echo h($palestra['Palestrante']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'visualizar', $palestra['Palestra']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $palestra['Palestra']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'deletar', $palestra['Palestra']['id']), null, __('Are you sure you want to delete # %s?', $palestra['Palestra']['id'])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
	</table>

	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count}, comecando do registro {:start}, terminando em {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>

	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nova Palestra'), array('action' => 'criar')); ?></li>
	</ul>
</div>
