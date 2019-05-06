<?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false); ?>

<?php echo $this->element('menu', array(
    'pagina_atual' => 'COMO CHEGAR',
)) ?>

<p>

<?php
echo __d('cake_dev', 'Evidentemente, a estrutura atual da organização faz parte de um processo de gerenciamento do remanejamento dos quadros funcionais. As experiências acumuladas demonstram que a contínua expansão de nossa atividade promove a alavancagem da gestão inovadora da qual fazemos parte. Todavia, a competitividade nas transações comerciais obstaculiza a apreciação da importância do sistema de participação geral. É claro que a adoção de políticas descentralizadoras exige a precisão e a definição das regras de conduta normativas.<br /><br />

Neste sentido, o acompanhamento das preferências de consumo facilita a criação das formas de ação.<br /><br />

O que temos que ter sempre em mente é que o desenvolvimento contínuo de distintas formas de atuação agrega valor ao estabelecimento das novas proposições. No entanto, não podemos esquecer que a adoção de políticas descentralizadoras acarreta um processo de reformulação e modernização do sistema de formação de quadros que corresponde às necessidades.<br /><br />
<br /><br />
<br /><br />');
?>
</p>


<h2><?php echo __d('cake_dev', 'Mapa do Local'); ?></h2>


<?= $this->GoogleMap->map(); ?>

