<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>
		ProjectName: Sistema Web de Apoyo a las Comunicaciones para Promover la Ejecución de Proyectos de Servicio Comunitario en las Universidades.:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//Bootstrap core CSS
		echo $this->Html->css('bootstrap/bootstrap.min.css');

		//Custom styles for this template
		echo $this->Html->css('main.css');
		echo $this->Html->css('navbar.css');

		//HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries
    	echo '<!--[if lt IE 9]>';
    	echo $this->Html->script('libs/html5shiv/html5shiv.js');
    	echo $this->Html->script('libs/respond.min.js');
    	echo '<![endif]-->';

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class="container">

		<!-- Site header -->
		<div id="header">
			<?php echo $this->element('header'); ?>
		</div>      

		  <!-- Static navbar -->
		<div id="navbar" class="navbar navbar-default" role="navigation">
			<?php echo $this->element('navbar'); ?>
		</div>

		<div id="flash">
			<?php echo $this->Session->flash(); ?>
		</div>      

		<!-- Site content -->
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>

		<!-- Site footer -->
		<div id="footer">
			<?php echo $this->element('footer'); ?>	
		</div>
	
	</div> <!-- /container -->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php 
		echo $this->Html->script('jquery/jquery.min.js');
		echo $this->Html->script('bootstrap.min.js');
		//echo $this->element('sql_dump');
	?>
</body>
</html>