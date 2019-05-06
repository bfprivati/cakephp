
<div class="palestras view">
<h2><?php  echo __('Palestras'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($palestras['Palestra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($palestras['Palestra']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($palestras['Palestra']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Inicio'); ?></dt>
		<dd>
			<?php echo h($palestras['Palestra']['hora_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora Fim'); ?></dt>
		<dd>
			<?php echo h($palestras['Palestra']['hora_fim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Palestrante'); ?></dt>
		<dd>
			<?php echo h($palestras['Palestrante']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Palestras'), array('action' => 'editar', $palestras['Palestra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Palestras'), array('action' => 'deletar', $palestras['Palestra']['id']), null, __('Are you sure you want to delete # %s?', $palestras['Palestra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Palestras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Palestras'), array('action' => 'criar')); ?> </li>
	</ul>
</div>
