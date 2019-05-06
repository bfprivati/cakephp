
<div class="palestrantes view">
<h2><?php  echo __('Palestrante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($palestrantes['Palestrante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($palestrantes['Palestrante']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($palestrantes['Palestrante']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco Site'); ?></dt>
		<dd>
			<?php echo h($palestrantes['Palestrante']['endereco_site']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Palestrante'), array('action' => 'editar', $palestrantes['Palestrante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Palestrante'), array('action' => 'deletar', $palestrantes['Palestrante']['id']), null, __('Are you sure you want to delete # %s?', $palestrantes['Palestrante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Palestrantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Palestrante'), array('action' => 'criar')); ?> </li>
	</ul>
</div>
