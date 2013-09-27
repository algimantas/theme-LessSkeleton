<!-- <div class="container> -->
<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>

    <?php if ($this->getThemeOption('showSearch')) { ?>
        <div role="search">
            <h2>Search form</h2>
            <?php echo $this->generateSlot('ipSearch'); ?>
        </div>
    <?php } ?>

    <?php if ($this->getThemeOption('showFooter')) { ?>
        <footer role="contentinfo">

            <?php echo $this->generateManagedString('themeName', 'p', 'Theme "LESS Skeleton"'); ?>
            <?php echo $this->generateManagedText('slogan', 'div', 'Drag &amp; drop with <a href="http://www.impresspages.org">ImpressPages CMS</a>', ''); ?>
        </footer>
    <?php } ?>

</div><!-- /.container -->
<?php

$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/jquery/jquery.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/plugins.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/main.js');
echo $site->generateJavascript();

?>

</body>
</html>