
<div class="inscricaos view">
<h2><?php  echo __('Inscricaos'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inscricaos['Inscricao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($inscricaos['Inscricao']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($inscricaos['Inscricao']['email']); ?>
			&nbsp;
		</dd>

	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Inscricaos'), array('action' => 'editar', $inscricaos['Inscricao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Inscricaos'), array('action' => 'delete', $inscricaos['Inscricao']['id']), null, __('Are you sure you want to delete # %s?', $inscricaos['Inscricao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Inscricaoss'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Inscricaos'), array('action' => 'add')); ?> </li>
	</ul>
</div>
