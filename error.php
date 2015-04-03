<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$this->language  = $doc->language;
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag (para que no aparezca en el código fuente que nuestro sitio está hecho en Joomla)
$this->setGenerator(null);

?>
<!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/business-casual.css" type="text/css" />
	<script src="<?php echo $this->baseurl; ?>/media/jui/js/jquery.min.js"></script>
	<script src="<?php echo $this->baseurl; ?>/media/jui/js/jquery-noconflict.js"></script>
	<script src="<?php echo $this->baseurl; ?>/media/jui/js/jquery-migrate.min.js"></script>
	<script src="<?php echo $tpath; ?>/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="brand"><?php echo $app->getCfg('sitename'); ?></div>
    <div class="address-bar">
		<?php echo $doc->getBuffer('modules', 'top', array('style' => 'none')); ?>
	</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
				<a class="navbar-brand" href="<?php echo $this->baseurl; ?>/" title="<?php echo $app->getCfg('sitename'); ?>"><?php echo $app->getCfg('sitename'); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php echo $doc->getBuffer('modules', 'navbar', array('style' => 'none')); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
					<!-- Begin Content -->
					<hr>
					<h1 class="text-center"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
					<hr>
					<div class="col-lg-6 col-xs-12">
						<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
						<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
						<ul>
							<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
							<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
							<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
							<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
						</ul>
					</div>
					<div class="col-lg-6 col-xs-12">
						<?php if (JModuleHelper::getModule('search')) : ?>
							<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
							<p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
							<?php echo $doc->getBuffer('module', 'search'); ?>
						<?php endif; ?>
						<p></p>
						<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
						<p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><i class="glyphicon glyphicon-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
					</div>
					<hr />
					<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
					<blockquote>
						<span class="label label-default"><?php echo $this->error->getCode(); ?></span> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?>
					</blockquote>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; <?php echo date('Y'); ?> - <?php echo $app->getCfg('sitename'); ?></p>
                </div>
            </div>
        </div>
    </footer>
	<?php echo $doc->getBuffer('modules', 'debug', array('style' => 'none')); ?>
</body>

</html>
