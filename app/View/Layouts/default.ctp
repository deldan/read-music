<?= $this->Html->docType('html5') ?>
<html>
	<head>
	  <?= $this->Html->charset() ?>
		<title>ReadAndMusic - <?= $title_for_layout ?></title>
		<?= $this->fetch('metaTags') ?>
		<?= $this->Html->css(array(
				'jquery.vegas',
				'style',
				), null, array('media'=>'screen, projection')) ?>
		<!--[if lte IE 8]>
		<?= $this->Html->css('ie',null,array('media'=>'screen, projection')); ?>
		<![endif]-->
		<!--[if IE]>
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?= $this->fetch('css') ?>
		<?= $this->Html->script(array(
				'vendors/jquery-1.7.1.min',
				'vendors/modernizr-2.5.3.min',
				'vendors/jquery.vegas',
				'plugins',
				'script'
		)) ?>
		<?= $this->fetch('script') ?>
	</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
  <div role="main">
  	<?= $this->fetch('content') ?>
  </div>
  <footer>
  </footer>
</body>
</html>