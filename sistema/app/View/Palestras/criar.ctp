<div class="palestras form">
<?php echo $this->Form->create('Palestra'); ?>
	<fieldset>
		<legend><?php echo __('Palestras'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('hora_inicio', ['type' => 'text', 'class' => 'date_time']);
		echo $this->Form->input('hora_fim', ['type' => 'text', 'class' => 'date_time']);
		echo $this->Form->input('palestrante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Palestras'), array('action' => 'index')); ?></li>
	</ul>
</div>
