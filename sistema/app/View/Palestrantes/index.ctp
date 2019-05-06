<div class="palestrantes index">
	<h2><?php echo __('Palestrantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">

	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco_site'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>

	<?php
	foreach ($palestrantes as $palestrante): ?>
	<tr>
		<td><?php echo h($palestrante['Palestrante']['id']); ?>&nbsp;</td>
		<td><?php echo h($palestrante['Palestrante']['nome']); ?>&nbsp;</td>
		<td><?php echo h($palestrante['Palestrante']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($palestrante['Palestrante']['endereco_site']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'visualizar', $palestrante['Palestrante']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'editar', $palestrante['Palestrante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'deletar', $palestrante['Palestrante']['id']), null, __('Are you sure you want to delete # %s?', $palestrante['Palestrante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Novo Palestrante'), array('action' => 'criar')); ?></li>
	</ul>
</div>
