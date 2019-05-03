<h3>INSCRICAO</h3>

<?php echo $this->Form->create('Inscricao', array('action'=>'criar')) ?>
<?php echo $this->Form->input('nome') ?>
<?php echo $this->Form->input('email', array('type'=>'email')) ?>
<?php echo $this->Form->submit('Entrar') ?>
<?php echo $this->Form->end() ?>
