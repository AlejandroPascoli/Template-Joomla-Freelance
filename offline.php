<?php defined( '_JEXEC' ) or die;

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/offline.css?v=1'); 
$doc->addStyleSheet($tpath.'/css/bootstrap.min.css');
$doc->addStyleSheet($tpath.'/css/business-casual.css');

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<jdoc:include type="head" />
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
</head>

<body>
  <jdoc:include type="message" />
  <div id="frame" class="outline text-center">
    <?php if ($app->getCfg('offline_image')) : ?>
      <img src="<?php echo $app->getCfg('offline_image'); ?>" alt="<?php echo $app->getCfg('sitename'); ?>" />
    <?php endif; ?>
    <h1>
      <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
    </h1>
    <?php if ($app->getCfg('display_offline_message', 1) == 1 && str_replace(' ', '', $app->getCfg('offline_message')) != ''): ?>
		<p><?php echo $app->getCfg('offline_message'); ?></p>
    <?php elseif ($app->getCfg('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != ''): ?>
		<p><?php echo JText::_('JOFFLINE_MESSAGE'); ?></p>
	<?php endif; ?>
    <form action="<?php echo JRoute::_('index.php', true); ?>" method="post" name="login" id="form-login" class="form-horizontal">
	  <div class="form-group">
		<label for="username" class="col-sm-3 control-label"><?php echo JText::_('JGLOBAL_USERNAME'); ?></label>
		<div class="col-sm-9">
		  <input type="text" name="username" id="username" class="inputbox form-control" alt="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" />
		</div>
	  </div>
	  <div class="form-group">
		<label for="passwd" class="col-sm-3 control-label"><?php echo JText::_('JGLOBAL_PASSWORD'); ?></label>
		<div class="col-sm-9">
         <input type="password" name="password" id="password" class="inputbox form-control" alt="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" />
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
		  <div class="checkbox">
			<input type="checkbox" name="remember" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME'); ?>" id="remember" />
			<label for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME'); ?></label>
		  </div>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<input type="submit" name="Submit" class="button btn btn-default" value="<?php echo JText::_('JLOGIN'); ?>" />
		  </div>
	  </div>
      <input type="hidden" name="option" value="com_users" />
      <input type="hidden" name="task" value="user.login" />
      <input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()); ?>" />
      <?php echo JHTML::_( 'form.token' ); ?>
	</form>
  </div>
</body>

</html>