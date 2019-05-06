<div class="login form">

<?php echo $this->Form->create('Login'); ?>
	<fieldset>
		<legend><?php echo __('Login'); ?></legend>
		<?php
		echo $this->Session->flash();
		echo $this->Session->flash('auth');
		echo $this->Form->create('Usuario');
		echo $this->Form->input('login');
		echo $this->Form->input('senha');
		?>
	</fieldset>
<?php echo $this->Form->end(__('Entrar')); ?>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>
