<div class="inscricaos index">
	<h2><?php echo __('Inscricaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($inscricaos as $inscricao): ?>
	<tr>
		<td><?php echo h($inscricao['Inscricao']['id']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Inscricao']['nome']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Inscricao']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'visualizar', $inscricao['Inscricao']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $inscricao['Inscricao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'deletar', $inscricao['Inscricao']['id']), null, __('Are you sure you want to delete # %s?', $inscricao['Inscricao']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nova Inscricao'), array('action' => 'criar')); ?></li>
	</ul>
</div>
