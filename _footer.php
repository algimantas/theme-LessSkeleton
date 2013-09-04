<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>

<footer role="contentinfo">
    <div role="search">
        <h2>Search form</h2>
        <?php echo $this->generateBlock('ipSearch'); ?>
    </div>

    <?php echo $this->generateManagedString('themeName', 'p', 'Theme "LESS Skeleton"'); ?>
    <?php echo $this->generateManagedText('slogan', 'div', 'Drag &amp; drop with <a href="http://www.impresspages.org">ImpressPages CMS</a>', 'pull-right'); ?>
</footer>
</div><!-- /.container -->
<?php

$site->addJavascript(BASE_URL.LIBRARY_DIR.'js/jquery/jquery.js');
$site->addJavascript(BASE_URL.THEME_DIR.THEME.'/js/main.js');
echo $site->generateJavascript();

?>

</body>
</html>