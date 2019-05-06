<div class="palestrantes form">
<?php echo $this->Form->create('Palestrante'); ?>
	<fieldset>
		<legend><?php echo __('Editar Palestrante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('endereco_site');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Palestrante.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Palestrante.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Palestrantes'), array('action' => 'index')); ?></li>
	</ul>
</div>
