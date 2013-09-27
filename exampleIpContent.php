<?php
/**
 * This layout is just to test how theme renders different content.
 * REMOVE this layout after you finish your theme.
 *
 * @var $this \Ip\View
 */
?>

<?php echo $this->subview('_header.php')->render(); ?>

<div class="singleColumn">
    <div role="main" class="main">
        <?php echo $this->subview('exampleContent/exampleIpContent.php')->render(); ?>
    </div>
</div>

<?php echo $this->subview('_footer.php')->render(); ?>