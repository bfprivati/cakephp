<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$site_principal = __d('cake_dev', 'Sistema');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $site_principal ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
	<div id="container">

		<div id="header">
			<ul>
				<li><h1><?php echo $this->Html->link($site_principal, 'http://cakephp.org' );?></h1></li>
				<li><h1><?php echo __d('cake_dev', ' PRINCIPAL '); ?></h1></li>
				<li><h1><?php echo __d('cake_dev', ' SOBRE '); ?></h1></li>
				<li><h1><?php echo __d('cake_dev', ' COMO CHEGAR '); ?></h1></li>
			</ul>
		</div>

		<?php echo $this->element('menu', array(
			'pagina_atual' => 'MENU',
		)) ?>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		<div id="footer">
			<?php echo __d('cake_dev', 'FOOTER'); ?>
		</div>

	</div>
	<!-- <?php echo $this->element('sql_dump'); ?> -->
</body>

</html>
