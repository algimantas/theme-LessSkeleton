<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>

<?php echo $this->subview('_header.php'); ?>

<h2>Home content block 1</h2>
<?php echo $site->generateBlock('home1', true); ?>

<h2>Home content block 2</h2>
<?php echo $site->generateBlock('home2', true); ?>

<h2>Home content block 3</h2>
<?php echo $site->generateBlock('home3', true); ?>

<h2>Home content block 4</h2>
<?php echo $site->generateBlock('home4', true); ?>

<h2>Home content block 5</h2>
<?php echo $site->generateBlock('home5', true); ?>

<?php echo $this->generateBlock('main'); ?>

<?php echo $this->subview('_footer.php'); ?>
