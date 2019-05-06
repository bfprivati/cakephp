<div class="painel index">

	<h2><?php echo __('Painel'); ?></h2>
	<table cellpadding="0" cellspacing="0">

	<tr>
		<td>Palestras</td>
		<td class="actions">
            <?php echo $this->Html->link('Cadastrar', '/palestras/criar', ['class' => 'button']);?>
            <?php echo $this->Html->link('Visualizar', '/palestras', ['class' => 'button']);?>
        </td>
	</tr>

    <tr>
        <td>Palestrantes</td>
        <td class="actions">
            <?php echo $this->Html->link('Cadastrar', '/palestrantes/criar', ['class' => 'button']);?>
            <?php echo $this->Html->link('Visualizar', '/palestrantes', ['class' => 'button']);?>
        </td>
    </tr>

    <tr>
        <td>Inscriçao</td>
        <td class="actions">
            <?php echo $this->Html->link('Cadastrar', '/inscricaos/criar', ['class' => 'button']);?>
            <?php echo $this->Html->link('Visualizar', '/inscricaos', ['class' => 'button']);?>
        </td>
    </tr>

	</table>

</div>
