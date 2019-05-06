<div class="palestras form">
<?php echo $this->Form->create('Palestra'); ?>
	<fieldset>
		<legend><?php echo __('Editar Palestras'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('hora_inicio');
		echo $this->Form->input('hora_fim');
		echo $this->Form->input('palestrante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'deletar', $this->Form->value('Palestra.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Palestra.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Palestras'), array('action' => 'index')); ?></li>
	</ul>
</div>