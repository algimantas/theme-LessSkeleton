Less Skeleton theme
===================

[ImpressPages](http://www.impresspages.org) theme based on [HTML5 Boilerplate][] and meant to be used for creating your own themes.

What will you get
---------------------
- `setup/theme.json` will show how to create theme options (color, select, checkbox)
- `setup/options.js` will show how to update css without the need to save it
- `theme.less` will show you how to create one css file from many less files
- `less/site.less` will show how to use color user sets in theme options
- `_header.php` will show how to create html headers
- `_footer.php` will show how to include js files and display/show content according to theme options
- `home.php` will show how to use static blocks and example content
- set `exampleHtml.php` as page layout to see how your styles will look with standard html elements
- set `exampleIpContent.php` as page layout to see how different widgets will look (do not forget to test with the real stuff)

Getting Started
---------------
1. Rename `LessSkeleton` directory to your theme name
2. Modify `setup/theme.json`
3. Create homepage layout at `home.php`
4. Create main layout at `main.php`
5. Remove stuff you don't need from `theme.less` and add new less files you need

Finishing touches
-----------------
1. Look at `less/ipContent/config.less`, copy the variables you want to change to `less/config.less` and change them here
2. Add theme thumbnail `setup/thumbnail.png` and uncomment it in `setup/theme.json`


Additional documentation
------------------------

- [Setup folder](http://www.impresspages.org/docs2/theme-setup-folder/)
- [Configuration options](http://www.impresspages.org/docs2/theme-configuration-options/)
- [LESS](http://www.impresspages.org/docs2/less-css/)

# Links
[HTML5 Boilerplate]: http://html5boilerplate.com/