<?php if (!defined('CMS')) exit; ?>
<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<?php echo $this->subview('_header.php'); ?>

<?php echo $this->generateBlock('main'); ?>

<?php echo $this->subview('_footer.php'); ?>