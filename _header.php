<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<!DOCTYPE html>
<?php /* echo $this->doctypeDeclaration(); */ // TODOX solve it so it would have 'html' doctype ?>

<?php $htmlAttributes = $this->htmlAttributes(); ?>
<!--[if lt IE 7]>      <html <?php echo $htmlAttributes; ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php echo $htmlAttributes; ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php echo $htmlAttributes; ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php echo $htmlAttributes; ?> class="no-js"> <!--<![endif]-->
<head>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <?php
    $site->addCss(BASE_URL.THEME_DIR.THEME.'/css/normalize.css');   // HTML5 Boilerplate CSS - you can remove this
    $site->addCss(BASE_URL.THEME_DIR.THEME.'/css/main.css');        // HTML5 Boilerplate CSS - you can remove this
    $site->addCss(BASE_URL.THEME_DIR.THEME.'/ip_content.css');      // ImpressPages widget content css
    $site->addCss(BASE_URL.THEME_DIR.THEME.'/theme.css');
    echo $site->generateHead();
    ?>

    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <script src="<?php echo BASE_URL . THEME_DIR . THEME ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body <?php if ($site->managementState()) { echo ' class="manage"'; } ?> >
    <div class="container">
        <header>
            <h1><?php echo $this->esc($site->getTitle()) ?></h1>
            <h2>Menu</h2>
            <nav role="navigation">
                <div class="topMenu">
                    <?php
                        //first argument is unique name of this menu within your theme. Choose anything you like. Next argument is zone name. They don't have to be equal.
                        echo $this->generateMenu('top', 'menu1');
                    ?>
                </div>
            </nav>

            <?php if (0) { ?>
                <div class="languages">
                    <?php echo $this->generateBlock('ipLanguages'); ?>
                </div>
            <?php } // if (0) ?>

            <?php if (0) { ?>
                <div role="banner">
                    <?php echo $this->generateManagedImage('banner', THEME_DIR.THEME.'/img/example/header.jpg', array('width' => '940'), 'banner'); ?>
                </div>
            <?php } ?>
        </header>