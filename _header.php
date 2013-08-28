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
    <?php echo $site->generateHead(); ?>

    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?php echo BASE_URL . THEME_DIR . THEME ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo BASE_URL . THEME_DIR . THEME ?>/css/main.css">
    <script src="<?php echo BASE_URL . THEME_DIR . THEME ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body <?php if ($site->managementState()) { echo ' class="manage"'; } ?> >

    <header>
        <?php
            //first argument is unique name of this menu within your theme. Choose anything you like. Next argument is zone name. They don't have to be equal.
            echo $this->generateMenu('top', 'menu1');
        ?>
    </header>

    <?php echo $this->generateBlock('ipSearch'); ?>

    <?php if (0) { ?>
        <div class="languages">
            <?php echo $this->generateBlock('ipLanguages'); ?>
        </div>
    <?php } // if (0) ?>

    <?php if (0) { ?>
        <?php echo $this->generateManagedImage('banner', THEME_DIR.THEME.'/img/example/header.jpg', array('width' => '940'), 'banner'); ?>
    <?php } ?>