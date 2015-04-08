<?php
/*------------------------------------------------------------------------
# author Alejandro Pascoli
# copyright Copyright © 2015 zonasitio.com All rights reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website http://www.zonasitio.com
-------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die;
// columns
if ($this->countModules('sidebar') != 0) {
    $col1 = "9";
    $col2 = "3";
}
if ($this->countModules('sidebar') == 0) {
    $col1 = "12";
}
// variables
$app            = JFactory::getApplication();
$doc            = JFactory::getDocument();
$menu           = $app->getMenu();
$active         = $app->getMenu()->getActive();
$params         = $app->getParams();
$pageclass      = $params->get('pageclass_sfx');
$tpath          = $this->baseurl . '/templates/' . $this->template;
$templateparams = $app->getTemplate(true)->params;

// generator tag (para que no aparezca en el código fuente que nuestro sitio está hecho en Joomla)
$this->setGenerator(null);

// force latest IE & chrome frame 
$doc->setMetadata('x-ua-compatible', 'IE=edge,chrome=1');

// js (no vamos a cargar el jquery que viene con la plantilla, sino el jquery que viene con Joomla)
JHtml::_('jquery.framework');
$doc->addScript($tpath . '/js/bootstrap.min.js');
//$doc->addScript($tpath.'/js/jquery.js');

// css (aquí cargamos nuestras hojas de estilo)
$doc->addStyleSheet($tpath . '/css/bootstrap.min.css');
$doc->addStyleSheet($tpath . '/css/freelancer.css');

?>
<!doctype html>
<html lang="<?php
echo $this->language;
?>">
<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon-precomposed" href="<?php
echo $tpath;
?>/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php
echo $tpath;
?>/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php
echo $tpath;
?>/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php
echo $tpath;
?>/images/apple-touch-icon-144x144-precomposed.png">
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

<body class="<?php
echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('page')) . ' ' . $active->alias . ' ' . $pageclass;
?>">
    
    <?php
if ($this->countModules('top')):
?>
     <div class="address-bar"><jdoc:include type="modules" name="top" style="xhtml" /></div>
    <?php
endif;
?>
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
                <a class="navbar-brand" href="<?php
echo $this->baseurl;
?>/" title="<?php
echo $app->getCfg('sitename');
?>"><?php
echo $app->getCfg('sitename');
?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <jdoc:include type="modules" name="navbar" />
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
                    <?php
if ($this->countModules('breadcrumbs')):
?>
                    <div id="breadcrumbs">        
                    <div class="row">
                    <jdoc:include type="modules" name="breadcrumbs" style="block" />
                </div>
            </div>
        <?php
endif;
?>
        <?php
if ($this->countModules('slide') || $this->countModules('slogan')):
?>
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <?php
    if ($this->countModules('slide')):
?>
                    <!-- SLIDESHOW -->
                    <div id="carousel-example-generic" class="carousel slide">
                        <jdoc:include type="modules" name="slide" style="xhtml" />
                    </div>
                    <?php
    endif;
?>

        <?php
    if ($this->countModules('user')):
?>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- USER1 -->
                    <jdoc:include type="modules" name="user1" style="xhtml" />
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- USER2 -->
                    <jdoc:include type="modules" name="user2" style="xhtml" />
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- USER3 -->
                    <jdoc:include type="modules" name="bottom3" style="xhtml" />
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- USER4 -->
                    <jdoc:include type="modules" name="user4" style="xhtml" />
                </div>
            </div>
        </div>
        <?php
    endif;
?>
                    <?php
    if ($this->countModules('slogan')):
?>
                    <!-- SLOGAN -->
                    <jdoc:include type="modules" name="slogan" style="xhtml" />
                    <?php
    endif;
?>
                </div>
            </div>
        </div>
        <?php
endif;
?>

        <div class="row">
            <div class="box">
                <!-- content -->
                <div class="col-xs-12 col-sm-<?php
echo ($col1);
?> col-md-<?php
echo ($col1);
?> col-lg-<?php
echo ($col1);
?>">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                </div> 
                <?php
if ($this->countModules('sidebar')):
?>
               <!-- sidebar -->
                <div class="col-xs-12 col-sm-<?php
    echo ($col2);
?> col-md-<?php
    echo ($col2);
?> col-lg-<?php
    echo ($col2);
?>" id="sidebar">
                    <div id="insidebar">
                      <jdoc:include type="modules" name="sidebar" style="xhtml" />
                    </div>
                </div>
                <?php
endif;
?>
           </div>
        </div>
        <?php
if ($this->countModules('bottom')):
?>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- BOTTOM1 -->
                    <jdoc:include type="modules" name="bottom1" style="xhtml" />
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- BOTTOM2 -->
                    <jdoc:include type="modules" name="bottom2" style="xhtml" />
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- BOTTOM3 -->
                    <jdoc:include type="modules" name="bottom3" style="xhtml" />
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="box">
                    <!-- BOTTOM4 -->
                    <jdoc:include type="modules" name="bottom4" style="xhtml" />
                </div>
            </div>
        </div>
        <?php
endif;
?>
    </div>

    <!-- /.container -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy;
                    <?php
echo date('Y');
?> -
                    <?php
echo $app->getCfg('sitename');
?>
                </p>
                <p>
                    Created by for Joomla!
                </p>
                <h6>
                    <a href="http://www.zonasitio.com" target="_blank">Alejandro Pascoli || ZonaSitio</a>
                 </h6>
            </div>
        </div>
    </div>
</footer>
    
    <jdoc:include type="modules" name="debug" />
        
    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>