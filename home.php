<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>

<?php echo $this->subview('_header.php'); ?>

<div class="singleColumn">
<div role="main" class="main">
    <h2>Home page content</h2>

    <?php $homeBlockCount = $this->getThemeOption('homeBlockCount', 2); ?>

    <h3>Home content block 1</h3>

    <?php echo $site->generateBlock('home1', true)->exampleContent($this->subview('sampleContent/home1.php')); ?>

    <h3>Home content block 2</h3>
    <?php echo $site->generateBlock('home2', true)->exampleContent('<pre>Hello</pre>'); ?>

    <h3>Main content</h3>
    <?php echo $this->generateBlock('main')->exampleContent('Here goes main content'); ?>

    <?php if ($homeBlockCount >= 3) { ?>
        <h3>Home content block 3</h3>
        <?php echo $site->generateBlock('home3', true)->exampleContentFrom('sampleContent/home3.php'); ?>
    <?php } ?>

    <?php if ($homeBlockCount >= 4) { ?>
        <h3>Home content block 4</h3>
        <?php echo $site->generateBlock('home4', true); ?>
    <?php } ?>

</div>
</div>


<?php echo $this->subview('_footer.php'); ?>