<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<?php echo $this->subview('_header.php'); ?>

<?php

if ('search' == $site->getCurrentZoneName()) {
    $layout = 'singleColumn';
} else {
    $layout = $this->getThemeOption('layout', 'doubleColumn');
}

?>

<div role="main" class="<?php echo $layout ?>">

    <div class="main">
        <?php echo $this->generateBlock('main')->exampleContent('MAIN'); ?>
    </div>

    <?php if ($layout == 'doubleColumn') { ?>
        <aside>
            <?php echo $this->generateBlock('main2')->exampleContent('main2'); ?>
        </aside>
    <?php } ?>
</div>

<?php echo $this->subview('_footer.php'); ?>