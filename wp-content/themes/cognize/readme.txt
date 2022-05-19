=== Cognize ===

Contributors: mudThemes
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Installation ==

1. To Install Cognize Theme, Put the "cognize" directory in your wp-content/themes directory.
2. Activate the Theme from WordPress Admin Panel.
3. The Theme installs with the basic layout in place although you can configure theme using customizer.

== Frequently Asked Questions ==

= Where can I find theme support? =

Go to https://wordpress.org/support/theme/cognize

== Changelog ==

= 1.0.7.3 - 03/28/2016 =
* (includes/init.php) Removed file
* (font awesome) Updated and enqueued font awesome 4.5.0
* (customizer.php) Modified to support font awesome 4.5.0
* (readme.txt) Modified markup

= 1.0.7.2 - 01/29/2016 =
* (core) Now using cognize_get_option instead of $cognize_options
* (includes/customizer.php) Modified option default 
* (readme.txt) Modified changelog format

= 1.0.7.1 - 01/09/2016 =
* (JS) Added HTML5 Shiv
* (readme.txt) Added resource for HTML5 Shiv

= 1.0.7 - 12/23/2015 =
* (customizer) Added customizer options
* (theme-support) Added theme support for title-tag

= 1.0.6 - 04/09/2015 =
* (options) Fixed bugs
* (functions.php) Fixed bug in cognize_is_home()
* (options.php) Modified defaults
* (fonts) Added internal fonts
* (screenshot.png) Modified screenshot
* (cognize.pot) Regenerated translation file

= 1.0.5 - 12/16/2014 =
* Removed function cognize_pre_load()
* Removed style.css from header.php | Style.css is now enqueued 
* Modified function cognize_logo() (esc_url() for image URL)
* Added translation strings
* Removed function cognize_custom_css() | Custom CSS now uses wp_add_inline_css()
* Removed default.po/mo file | Generated cognize.pot

= 1.0.4 - 10/30/2014 =
* Removed COGNIZE_CHECK_VERSION_URL constant | Modified related code.
* Removed readme.md
* Removed loop-home.php
* Modified translation in searchform.php
* Removed unbundled font licenses
* Removed featured image seal.jpg | Added horse.jpg
* Added horse.jpg in options
* Modified license for featured image (horse.jpg) in readme.txt
* Modified new screenshot

= 1.0.3 - 10/06/2014 =
* Modified CSS bug | Responsive Widgets
* Modified PHP bug | Strict Standards error in comments (only in PHP 5.4+)
* Modified Translation bug in searchform.php

= 1.0.2 - 10/02/2014 =
* Deleted sidebar-footer.php
* Added sidebar calling code to sidebar.php
* Modified footer.php to call sidebar.php instead of sidebar-footer.php

= 1.0.1 - 09/29/2014 =
* Fixed bug - Replaced function cognize_archive_empty() with cognize_404_show()
* Fixed bug - Modified font enqueue URL to //fonts.googleapis.com
* Removed versions.txt
* Removed editor-style.css
* Modified Translation Text - cognize_sidebars()
* Modified Translation Text - cognize_date_text()
* Modified Translation Text - searchform.php
* Modified Translation Text - options.php
* Modified Translation Text - author.php
* Modified PHPDoc in sidebar.php
* Recreated Translation Files (default.po/mo)

= 1.0.0 - 08/6/2014 =
* Cognize Theme initial release

== Resources ==
* Featured Section Image (http://pixabay.com/en/horse-herd-fog-nature-wild-equine-430441/): by http://pixabay.com/en/users/387310/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Screenshot Image #1 (http://pixabay.com/en/landscape-lake-nature-tree-trees-123830/): by http://pixabay.com/en/users/Connygatz-38245/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Screenshot Image #2 (http://pixabay.com/en/tree-sunset-landscape-nature-213980/): by http://pixabay.com/en/users/karla31-72895/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Screenshot Image #3 (http://pixabay.com/en/sun-sunset-sea-water-corfu-greece-115448/): by http://pixabay.com/en/users/BenL-34622/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Screenshot Image #4 (http://pixabay.com/en/tree-hill-vines-landscape-mood-207584/): by http://pixabay.com/en/users/lizzyliz-46925/, licensed under [CC0](http://creativecommons.org/publicdomain/zero/1.0/deed.en)
* Superfish jQuery menu: by Joel Birch (https://github.com/joeldbirch), dual licensed under [GPLv2](http://www.gnu.org/licenses/gpl.html) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* Respond.js: by Scott Jehl (https://github.com/scottjehl), licensed under [MIT](http://www.opensource.org/licenses/mit-license.php)
* Font Awesome: by Dave gandy (http://fontawesome.io), dual licensed under [SIL OFL 1.1](http://scripts.sil.org/OFL) and [MIT](http://www.opensource.org/licenses/mit-license.php)
* HTML5 Shiv: by Alexander Farkas (https://github.com/aFarkas), Dual licensed under the [GPLv2](http://www.gnu.org/licenses/gpl.html) and [MIT](http://www.opensource.org/licenses/mit-license.php)