<div class="palestrantes form">

<?php echo $this->Form->create('Palestrante'); ?>
	<fieldset>
		<legend><?php echo __('Palestrantes'); ?></legend>
	<?php
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
		<li><?php echo $this->Html->link(__('Listar Palestrantes'), array('action' => 'index')); ?></li>
	</ul>
</div>
