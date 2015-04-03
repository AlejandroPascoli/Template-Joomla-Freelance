<?php defined( '_JEXEC' ) or die; 

// variables
$doc = JFactory::getDocument(); 
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// load sheets and scripts
$doc->addStyleSheet($tpath.'/css/print.css?v=1'); 

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<jdoc:include type="head" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="print">
	<div id="overall">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
</body>

</html>
