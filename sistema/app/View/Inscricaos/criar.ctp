<div class="inscricaos form">
<?php echo $this->Form->create('Inscricao'); ?>
	<fieldset>
		<legend><?php echo __('Inscricaos'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('email', array('type'=>'email'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Inscricaos'), array('action' => 'index')); ?></li>
	</ul>
</div>
