<?php
/**
 * Theme Customizer Options
 *
 * @since 1.0.1
 */

require_once 'customizer_constants.php';
require_once 'customizer_extended.php';

/**
 * Contains options array for theme customizer
 * 
 * @param string $type
 * @return array
 */
function cognize_customizer_options($type){
    
    $options = array();
    $sections = array();
    $panels = array();
    $icons = array( 'glass' => 'glass', 'music' => 'music', 'search' => 'search', 'envelope-o' => 'envelope-o', 'heart' => 'heart', 'star' => 'star', 'star-o' => 'star-o', 'user' => 'user', 'film' => 'film', 'th-large' => 'th-large', 'th' => 'th', 'th-list' => 'th-list', 'check' => 'check', 'remove' => 'remove', 'close' => 'close', 'times' => 'times', 'search-plus' => 'search-plus', 'search-minus' => 'search-minus', 'power-off' => 'power-off', 'signal' => 'signal', 'gear' => 'gear', 'cog' => 'cog', 'trash-o' => 'trash-o', 'home' => 'home', 'file-o' => 'file-o', 'clock-o' => 'clock-o', 'road' => 'road', 'download' => 'download', 'arrow-circle-o-down' => 'arrow-circle-o-down', 'arrow-circle-o-up' => 'arrow-circle-o-up', 'inbox' => 'inbox', 'play-circle-o' => 'play-circle-o', 'rotate-right' => 'rotate-right', 'repeat' => 'repeat', 'refresh' => 'refresh', 'list-alt' => 'list-alt', 'lock' => 'lock', 'flag' => 'flag', 'headphones' => 'headphones', 'volume-off' => 'volume-off', 'volume-down' => 'volume-down', 'volume-up' => 'volume-up', 'qrcode' => 'qrcode', 'barcode' => 'barcode', 'tag' => 'tag', 'tags' => 'tags', 'book' => 'book', 'bookmark' => 'bookmark', 'print' => 'print', 'camera' => 'camera', 'font' => 'font', 'bold' => 'bold', 'italic' => 'italic', 'text-height' => 'text-height', 'text-width' => 'text-width', 'align-left' => 'align-left', 'align-center' => 'align-center', 'align-right' => 'align-right', 'align-justify' => 'align-justify', 'list' => 'list', 'dedent' => 'dedent', 'outdent' => 'outdent', 'indent' => 'indent', 'video-camera' => 'video-camera', 'photo' => 'photo', 'image' => 'image', 'picture-o' => 'picture-o', 'pencil' => 'pencil', 'map-marker' => 'map-marker', 'adjust' => 'adjust', 'tint' => 'tint', 'edit' => 'edit', 'pencil-square-o' => 'pencil-square-o', 'share-square-o' => 'share-square-o', 'check-square-o' => 'check-square-o', 'arrows' => 'arrows', 'step-backward' => 'step-backward', 'fast-backward' => 'fast-backward', 'backward' => 'backward', 'play' => 'play', 'pause' => 'pause', 'stop' => 'stop', 'forward' => 'forward', 'fast-forward' => 'fast-forward', 'step-forward' => 'step-forward', 'eject' => 'eject', 'chevron-left' => 'chevron-left', 'chevron-right' => 'chevron-right', 'plus-circle' => 'plus-circle', 'minus-circle' => 'minus-circle', 'times-circle' => 'times-circle', 'check-circle' => 'check-circle', 'question-circle' => 'question-circle', 'info-circle' => 'info-circle', 'crosshairs' => 'crosshairs', 'times-circle-o' => 'times-circle-o', 'check-circle-o' => 'check-circle-o', 'ban' => 'ban', 'arrow-left' => 'arrow-left', 'arrow-right' => 'arrow-right', 'arrow-up' => 'arrow-up', 'arrow-down' => 'arrow-down', 'mail-forward' => 'mail-forward', 'share' => 'share', 'expand' => 'expand', 'compress' => 'compress', 'plus' => 'plus', 'minus' => 'minus', 'asterisk' => 'asterisk', 'exclamation-circle' => 'exclamation-circle', 'gift' => 'gift', 'leaf' => 'leaf', 'fire' => 'fire', 'eye' => 'eye', 'eye-slash' => 'eye-slash', 'warning' => 'warning', 'exclamation-triangle' => 'exclamation-triangle', 'plane' => 'plane', 'calendar' => 'calendar', 'random' => 'random', 'comment' => 'comment', 'magnet' => 'magnet', 'chevron-up' => 'chevron-up', 'chevron-down' => 'chevron-down', 'retweet' => 'retweet', 'shopping-cart' => 'shopping-cart', 'folder' => 'folder', 'folder-open' => 'folder-open', 'arrows-v' => 'arrows-v', 'arrows-h' => 'arrows-h', 'bar-chart-o' => 'bar-chart-o', 'bar-chart' => 'bar-chart', 'twitter-square' => 'twitter-square', 'facebook-square' => 'facebook-square', 'camera-retro' => 'camera-retro', 'key' => 'key', 'gears' => 'gears', 'cogs' => 'cogs', 'comments' => 'comments', 'thumbs-o-up' => 'thumbs-o-up', 'thumbs-o-down' => 'thumbs-o-down', 'star-half' => 'star-half', 'heart-o' => 'heart-o', 'sign-out' => 'sign-out', 'linkedin-square' => 'linkedin-square', 'thumb-tack' => 'thumb-tack', 'external-link' => 'external-link', 'sign-in' => 'sign-in', 'trophy' => 'trophy', 'github-square' => 'github-square', 'upload' => 'upload', 'lemon-o' => 'lemon-o', 'phone' => 'phone', 'square-o' => 'square-o', 'bookmark-o' => 'bookmark-o', 'phone-square' => 'phone-square', 'twitter' => 'twitter', 'facebook-f' => 'facebook-f', 'facebook' => 'facebook', 'github' => 'github', 'unlock' => 'unlock', 'credit-card' => 'credit-card', 'feed' => 'feed', 'rss' => 'rss', 'hdd-o' => 'hdd-o', 'bullhorn' => 'bullhorn', 'bell' => 'bell', 'certificate' => 'certificate', 'hand-o-right' => 'hand-o-right', 'hand-o-left' => 'hand-o-left', 'hand-o-up' => 'hand-o-up', 'hand-o-down' => 'hand-o-down', 'arrow-circle-left' => 'arrow-circle-left', 'arrow-circle-right' => 'arrow-circle-right', 'arrow-circle-up' => 'arrow-circle-up', 'arrow-circle-down' => 'arrow-circle-down', 'globe' => 'globe', 'wrench' => 'wrench', 'tasks' => 'tasks', 'filter' => 'filter', 'briefcase' => 'briefcase', 'arrows-alt' => 'arrows-alt', 'group' => 'group', 'users' => 'users', 'chain' => 'chain', 'link' => 'link', 'cloud' => 'cloud', 'flask' => 'flask', 'cut' => 'cut', 'scissors' => 'scissors', 'copy' => 'copy', 'files-o' => 'files-o', 'paperclip' => 'paperclip', 'save' => 'save', 'floppy-o' => 'floppy-o', 'square' => 'square', 'navicon' => 'navicon', 'reorder' => 'reorder', 'bars' => 'bars', 'list-ul' => 'list-ul', 'list-ol' => 'list-ol', 'strikethrough' => 'strikethrough', 'underline' => 'underline', 'table' => 'table', 'magic' => 'magic', 'truck' => 'truck', 'pinterest' => 'pinterest', 'pinterest-square' => 'pinterest-square', 'google-plus-square' => 'google-plus-square', 'google-plus' => 'google-plus', 'money' => 'money', 'caret-down' => 'caret-down', 'caret-up' => 'caret-up', 'caret-left' => 'caret-left', 'caret-right' => 'caret-right', 'columns' => 'columns', 'unsorted' => 'unsorted', 'sort' => 'sort', 'sort-down' => 'sort-down', 'sort-desc' => 'sort-desc', 'sort-up' => 'sort-up', 'sort-asc' => 'sort-asc', 'envelope' => 'envelope', 'linkedin' => 'linkedin', 'rotate-left' => 'rotate-left', 'undo' => 'undo', 'legal' => 'legal', 'gavel' => 'gavel', 'dashboard' => 'dashboard', 'tachometer' => 'tachometer', 'comment-o' => 'comment-o', 'comments-o' => 'comments-o', 'flash' => 'flash', 'bolt' => 'bolt', 'sitemap' => 'sitemap', 'umbrella' => 'umbrella', 'paste' => 'paste', 'clipboard' => 'clipboard', 'lightbulb-o' => 'lightbulb-o', 'exchange' => 'exchange', 'cloud-download' => 'cloud-download', 'cloud-upload' => 'cloud-upload', 'user-md' => 'user-md', 'stethoscope' => 'stethoscope', 'suitcase' => 'suitcase', 'bell-o' => 'bell-o', 'coffee' => 'coffee', 'cutlery' => 'cutlery', 'file-text-o' => 'file-text-o', 'building-o' => 'building-o', 'hospital-o' => 'hospital-o', 'ambulance' => 'ambulance', 'medkit' => 'medkit', 'fighter-jet' => 'fighter-jet', 'beer' => 'beer', 'h-square' => 'h-square', 'plus-square' => 'plus-square', 'angle-double-left' => 'angle-double-left', 'angle-double-right' => 'angle-double-right', 'angle-double-up' => 'angle-double-up', 'angle-double-down' => 'angle-double-down', 'angle-left' => 'angle-left', 'angle-right' => 'angle-right', 'angle-up' => 'angle-up', 'angle-down' => 'angle-down', 'desktop' => 'desktop', 'laptop' => 'laptop', 'tablet' => 'tablet', 'mobile-phone' => 'mobile-phone', 'mobile' => 'mobile', 'circle-o' => 'circle-o', 'quote-left' => 'quote-left', 'quote-right' => 'quote-right', 'spinner' => 'spinner', 'circle' => 'circle', 'mail-reply' => 'mail-reply', 'reply' => 'reply', 'github-alt' => 'github-alt', 'folder-o' => 'folder-o', 'folder-open-o' => 'folder-open-o', 'smile-o' => 'smile-o', 'frown-o' => 'frown-o', 'meh-o' => 'meh-o', 'gamepad' => 'gamepad', 'keyboard-o' => 'keyboard-o', 'flag-o' => 'flag-o', 'flag-checkered' => 'flag-checkered', 'terminal' => 'terminal', 'code' => 'code', 'mail-reply-all' => 'mail-reply-all', 'reply-all' => 'reply-all', 'star-half-empty' => 'star-half-empty', 'star-half-full' => 'star-half-full', 'star-half-o' => 'star-half-o', 'location-arrow' => 'location-arrow', 'crop' => 'crop', 'code-fork' => 'code-fork', 'unlink' => 'unlink', 'chain-broken' => 'chain-broken', 'question' => 'question', 'info' => 'info', 'exclamation' => 'exclamation', 'superscript' => 'superscript', 'subscript' => 'subscript', 'eraser' => 'eraser', 'puzzle-piece' => 'puzzle-piece', 'microphone' => 'microphone', 'microphone-slash' => 'microphone-slash', 'shield' => 'shield', 'calendar-o' => 'calendar-o', 'fire-extinguisher' => 'fire-extinguisher', 'rocket' => 'rocket', 'maxcdn' => 'maxcdn', 'chevron-circle-left' => 'chevron-circle-left', 'chevron-circle-right' => 'chevron-circle-right', 'chevron-circle-up' => 'chevron-circle-up', 'chevron-circle-down' => 'chevron-circle-down', 'html5 { content: @fa-var-html5; }' => 'html5 { content: @fa-var-html5; }', 'css3 { content: @fa-var-css3; }' => 'css3 { content: @fa-var-css3; }', 'anchor' => 'anchor', 'unlock-alt' => 'unlock-alt', 'bullseye' => 'bullseye', 'ellipsis-h' => 'ellipsis-h', 'ellipsis-v' => 'ellipsis-v', 'rss-square' => 'rss-square', 'play-circle' => 'play-circle', 'ticket' => 'ticket', 'minus-square' => 'minus-square', 'minus-square-o' => 'minus-square-o', 'level-up' => 'level-up', 'level-down' => 'level-down', 'check-square' => 'check-square', 'pencil-square' => 'pencil-square', 'external-link-square' => 'external-link-square', 'share-square' => 'share-square', 'compass' => 'compass', 'toggle-down' => 'toggle-down', 'caret-square-o-down' => 'caret-square-o-down', 'toggle-up' => 'toggle-up', 'caret-square-o-up' => 'caret-square-o-up', 'toggle-right' => 'toggle-right', 'caret-square-o-right' => 'caret-square-o-right', 'euro' => 'euro', 'eur' => 'eur', 'gbp' => 'gbp', 'dollar' => 'dollar', 'usd' => 'usd', 'rupee' => 'rupee', 'inr' => 'inr', 'cny' => 'cny', 'rmb' => 'rmb', 'yen' => 'yen', 'jpy' => 'jpy', 'ruble' => 'ruble', 'rouble' => 'rouble', 'rub' => 'rub', 'won' => 'won', 'krw' => 'krw', 'bitcoin' => 'bitcoin', 'btc' => 'btc', 'file' => 'file', 'file-text' => 'file-text', 'sort-alpha-asc' => 'sort-alpha-asc', 'sort-alpha-desc' => 'sort-alpha-desc', 'sort-amount-asc' => 'sort-amount-asc', 'sort-amount-desc' => 'sort-amount-desc', 'sort-numeric-asc' => 'sort-numeric-asc', 'sort-numeric-desc' => 'sort-numeric-desc', 'thumbs-up' => 'thumbs-up', 'thumbs-down' => 'thumbs-down', 'youtube-square' => 'youtube-square', 'youtube' => 'youtube', 'xing' => 'xing', 'xing-square' => 'xing-square', 'youtube-play' => 'youtube-play', 'dropbox' => 'dropbox', 'stack-overflow' => 'stack-overflow', 'instagram' => 'instagram', 'flickr' => 'flickr', 'adn' => 'adn', 'bitbucket' => 'bitbucket', 'bitbucket-square' => 'bitbucket-square', 'tumblr' => 'tumblr', 'tumblr-square' => 'tumblr-square', 'long-arrow-down' => 'long-arrow-down', 'long-arrow-up' => 'long-arrow-up', 'long-arrow-left' => 'long-arrow-left', 'long-arrow-right' => 'long-arrow-right', 'apple' => 'apple', 'windows' => 'windows', 'android' => 'android', 'linux' => 'linux', 'dribbble' => 'dribbble', 'skype' => 'skype', 'foursquare' => 'foursquare', 'trello' => 'trello', 'female' => 'female', 'male' => 'male', 'gittip' => 'gittip', 'gratipay' => 'gratipay', 'sun-o' => 'sun-o', 'moon-o' => 'moon-o', 'archive' => 'archive', 'bug' => 'bug', 'vk' => 'vk', 'weibo' => 'weibo', 'renren' => 'renren', 'pagelines' => 'pagelines', 'stack-exchange' => 'stack-exchange', 'arrow-circle-o-right' => 'arrow-circle-o-right', 'arrow-circle-o-left' => 'arrow-circle-o-left', 'toggle-left' => 'toggle-left', 'caret-square-o-left' => 'caret-square-o-left', 'dot-circle-o' => 'dot-circle-o', 'wheelchair' => 'wheelchair', 'vimeo-square' => 'vimeo-square', 'turkish-lira' => 'turkish-lira', 'try' => 'try', 'plus-square-o' => 'plus-square-o', 'space-shuttle' => 'space-shuttle', 'slack' => 'slack', 'envelope-square' => 'envelope-square', 'wordpress' => 'wordpress', 'openid' => 'openid', 'institution' => 'institution', 'bank' => 'bank', 'university' => 'university', 'mortar-board' => 'mortar-board', 'graduation-cap' => 'graduation-cap', 'yahoo' => 'yahoo', 'google' => 'google', 'reddit' => 'reddit', 'reddit-square' => 'reddit-square', 'stumbleupon-circle' => 'stumbleupon-circle', 'stumbleupon' => 'stumbleupon', 'delicious' => 'delicious', 'digg' => 'digg', 'pied-piper' => 'pied-piper', 'pied-piper-alt' => 'pied-piper-alt', 'drupal' => 'drupal', 'joomla' => 'joomla', 'language' => 'language', 'fax' => 'fax', 'building' => 'building', 'child' => 'child', 'paw' => 'paw', 'spoon' => 'spoon', 'cube' => 'cube', 'cubes' => 'cubes', 'behance' => 'behance', 'behance-square' => 'behance-square', 'steam' => 'steam', 'steam-square' => 'steam-square', 'recycle' => 'recycle', 'automobile' => 'automobile', 'car' => 'car', 'cab' => 'cab', 'taxi' => 'taxi', 'tree' => 'tree', 'spotify' => 'spotify', 'deviantart' => 'deviantart', 'soundcloud' => 'soundcloud', 'database' => 'database', 'file-pdf-o' => 'file-pdf-o', 'file-word-o' => 'file-word-o', 'file-excel-o' => 'file-excel-o', 'file-powerpoint-o' => 'file-powerpoint-o', 'file-photo-o' => 'file-photo-o', 'file-picture-o' => 'file-picture-o', 'file-image-o' => 'file-image-o', 'file-zip-o' => 'file-zip-o', 'file-archive-o' => 'file-archive-o', 'file-sound-o' => 'file-sound-o', 'file-audio-o' => 'file-audio-o', 'file-movie-o' => 'file-movie-o', 'file-video-o' => 'file-video-o', 'file-code-o' => 'file-code-o', 'vine' => 'vine', 'codepen' => 'codepen', 'jsfiddle' => 'jsfiddle', 'life-bouy' => 'life-bouy', 'life-buoy' => 'life-buoy', 'life-saver' => 'life-saver', 'support' => 'support', 'life-ring' => 'life-ring', 'circle-o-notch' => 'circle-o-notch', 'ra' => 'ra', 'rebel' => 'rebel', 'ge' => 'ge', 'empire' => 'empire', 'git-square' => 'git-square', 'git' => 'git', 'y-combinator-square' => 'y-combinator-square', 'yc-square' => 'yc-square', 'hacker-news' => 'hacker-news', 'tencent-weibo' => 'tencent-weibo', 'qq' => 'qq', 'wechat' => 'wechat', 'weixin' => 'weixin', 'send' => 'send', 'paper-plane' => 'paper-plane', 'send-o' => 'send-o', 'paper-plane-o' => 'paper-plane-o', 'history' => 'history', 'circle-thin' => 'circle-thin', 'header' => 'header', 'paragraph' => 'paragraph', 'sliders' => 'sliders', 'share-alt' => 'share-alt', 'share-alt-square' => 'share-alt-square', 'bomb' => 'bomb', 'soccer-ball-o' => 'soccer-ball-o', 'futbol-o' => 'futbol-o', 'tty' => 'tty', 'binoculars' => 'binoculars', 'plug' => 'plug', 'slideshare' => 'slideshare', 'twitch' => 'twitch', 'yelp' => 'yelp', 'newspaper-o' => 'newspaper-o', 'wifi' => 'wifi', 'calculator' => 'calculator', 'paypal' => 'paypal', 'google-wallet' => 'google-wallet', 'cc-visa' => 'cc-visa', 'cc-mastercard' => 'cc-mastercard', 'cc-discover' => 'cc-discover', 'cc-amex' => 'cc-amex', 'cc-paypal' => 'cc-paypal', 'cc-stripe' => 'cc-stripe', 'bell-slash' => 'bell-slash', 'bell-slash-o' => 'bell-slash-o', 'trash' => 'trash', 'copyright' => 'copyright', 'at' => 'at', 'eyedropper' => 'eyedropper', 'paint-brush' => 'paint-brush', 'birthday-cake' => 'birthday-cake', 'area-chart' => 'area-chart', 'pie-chart' => 'pie-chart', 'line-chart' => 'line-chart', 'lastfm' => 'lastfm', 'lastfm-square' => 'lastfm-square', 'toggle-off' => 'toggle-off', 'toggle-on' => 'toggle-on', 'bicycle' => 'bicycle', 'bus' => 'bus', 'ioxhost' => 'ioxhost', 'angellist' => 'angellist', 'cc' => 'cc', 'shekel' => 'shekel', 'sheqel' => 'sheqel', 'ils' => 'ils', 'meanpath' => 'meanpath', 'buysellads' => 'buysellads', 'connectdevelop' => 'connectdevelop', 'dashcube' => 'dashcube', 'forumbee' => 'forumbee', 'leanpub' => 'leanpub', 'sellsy' => 'sellsy', 'shirtsinbulk' => 'shirtsinbulk', 'simplybuilt' => 'simplybuilt', 'skyatlas' => 'skyatlas', 'cart-plus' => 'cart-plus', 'cart-arrow-down' => 'cart-arrow-down', 'diamond' => 'diamond', 'ship' => 'ship', 'user-secret' => 'user-secret', 'motorcycle' => 'motorcycle', 'street-view' => 'street-view', 'heartbeat' => 'heartbeat', 'venus' => 'venus', 'mars' => 'mars', 'mercury' => 'mercury', 'intersex' => 'intersex', 'transgender' => 'transgender', 'transgender-alt' => 'transgender-alt', 'venus-double' => 'venus-double', 'mars-double' => 'mars-double', 'venus-mars' => 'venus-mars', 'mars-stroke' => 'mars-stroke', 'mars-stroke-v' => 'mars-stroke-v', 'mars-stroke-h' => 'mars-stroke-h', 'neuter' => 'neuter', 'genderless' => 'genderless', 'facebook-official' => 'facebook-official', 'pinterest-p' => 'pinterest-p', 'whatsapp' => 'whatsapp', 'server' => 'server', 'user-plus' => 'user-plus', 'user-times' => 'user-times', 'hotel' => 'hotel', 'bed' => 'bed', 'viacoin' => 'viacoin', 'train' => 'train', 'subway' => 'subway', 'medium' => 'medium', 'yc' => 'yc', 'y-combinator' => 'y-combinator', 'optin-monster' => 'optin-monster', 'opencart' => 'opencart', 'expeditedssl' => 'expeditedssl', 'battery-4' => 'battery-4', 'battery-full' => 'battery-full', 'battery-3' => 'battery-3', 'battery-three-quarters' => 'battery-three-quarters', 'battery-2' => 'battery-2', 'battery-half' => 'battery-half', 'battery-1' => 'battery-1', 'battery-quarter' => 'battery-quarter', 'battery-0' => 'battery-0', 'battery-empty' => 'battery-empty', 'mouse-pointer' => 'mouse-pointer', 'i-cursor' => 'i-cursor', 'object-group' => 'object-group', 'object-ungroup' => 'object-ungroup', 'sticky-note' => 'sticky-note', 'sticky-note-o' => 'sticky-note-o', 'cc-jcb' => 'cc-jcb', 'cc-diners-club' => 'cc-diners-club', 'clone' => 'clone', 'balance-scale' => 'balance-scale', 'hourglass-o' => 'hourglass-o', 'hourglass-1' => 'hourglass-1', 'hourglass-start' => 'hourglass-start', 'hourglass-2' => 'hourglass-2', 'hourglass-half' => 'hourglass-half', 'hourglass-3' => 'hourglass-3', 'hourglass-end' => 'hourglass-end', 'hourglass' => 'hourglass', 'hand-grab-o' => 'hand-grab-o', 'hand-rock-o' => 'hand-rock-o', 'hand-stop-o' => 'hand-stop-o', 'hand-paper-o' => 'hand-paper-o', 'hand-scissors-o' => 'hand-scissors-o', 'hand-lizard-o' => 'hand-lizard-o', 'hand-spock-o' => 'hand-spock-o', 'hand-pointer-o' => 'hand-pointer-o', 'hand-peace-o' => 'hand-peace-o', 'trademark' => 'trademark', 'registered' => 'registered', 'creative-commons' => 'creative-commons', 'gg' => 'gg', 'gg-circle' => 'gg-circle', 'tripadvisor' => 'tripadvisor', 'odnoklassniki' => 'odnoklassniki', 'odnoklassniki-square' => 'odnoklassniki-square', 'get-pocket' => 'get-pocket', 'wikipedia-w' => 'wikipedia-w', 'safari' => 'safari', 'chrome' => 'chrome', 'firefox' => 'firefox', 'opera' => 'opera', 'internet-explorer' => 'internet-explorer', 'tv' => 'tv', 'television' => 'television', 'contao' => 'contao', '500px { content: @fa-var-500px; }' => '500px { content: @fa-var-500px; }', 'amazon' => 'amazon', 'calendar-plus-o' => 'calendar-plus-o', 'calendar-minus-o' => 'calendar-minus-o', 'calendar-times-o' => 'calendar-times-o', 'calendar-check-o' => 'calendar-check-o', 'industry' => 'industry', 'map-pin' => 'map-pin', 'map-signs' => 'map-signs', 'map-o' => 'map-o', 'map' => 'map', 'commenting' => 'commenting', 'commenting-o' => 'commenting-o', 'houzz' => 'houzz', 'vimeo' => 'vimeo', 'black-tie' => 'black-tie', 'fonticons' => 'fonticons', 'reddit-alien' => 'reddit-alien', 'edge' => 'edge', 'credit-card-alt' => 'credit-card-alt', 'codiepie' => 'codiepie', 'modx' => 'modx', 'fort-awesome' => 'fort-awesome', 'usb' => 'usb', 'product-hunt' => 'product-hunt', 'mixcloud' => 'mixcloud', 'scribd' => 'scribd', 'pause-circle' => 'pause-circle', 'pause-circle-o' => 'pause-circle-o', 'stop-circle' => 'stop-circle', 'stop-circle-o' => 'stop-circle-o', 'shopping-bag' => 'shopping-bag', 'shopping-basket' => 'shopping-basket', 'hashtag' => 'hashtag', 'bluetooth' => 'bluetooth', 'bluetooth-b' => 'bluetooth-b', 'percent' => 'percent', );
    
    $panels[] = array(
        'id' => 'cognize_panel_general',
        'title' => __('General','cognize'),
        'description' => '',
        'priority' => 20,
    );

    $sections[] = array(
        'id' => 'cognize_section_basic_settings',
        'title' => __('Basic Settings','cognize'),
        'description' => '',
        'panel' => '',
        'priority' => 21,
        'shortname' => 'section_basic_settings',
    );

    $options[] = array(
        'id' => 'logo_img',
        'default' => '',
        'label' => __('Site Logo','cognize'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_basic_settings',
        'extended_class' => 'WP_Customize_Image_Control',
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'footer_name',
        'default' => '',
        'label' => __('Company Name', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_basic_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'disable_site_desc',
        'default' => true,
        'label' => __('Hide Site Description','cognize'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_basic_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'disable_menu',
        'default' => false,
        'label' => __('Hide Menu','cognize'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_basic_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'show_copyright',
        'default' => true,
        'label' => __('Show Copyright','cognize'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_basic_settings',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $sections[] = array(
        'id' => 'cognize_section_featured_section',
        'title' => __('Featured Section','cognize'),
        'description' => '',
        'panel' => '',
        'priority' => 22,
        'shortname' => 'section_featured_section',
    );

    $options[] = array(
        'id' => 'disable_cta_section',
        'default' => false,
        'label' => __('Hide Featured Section','cognize'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'disable_cta_icons',
        'default' => false,
        'label' => __('Hide Icons','cognize'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'featured_image',
        'default' => COGNIZE_GLOBAL_IMAGES_URL . 'horse.jpg',
        'label' => __('Featured Image','cognize'),
        'description' => '',
        'type' => 'media_upload',
        'sanitize_type' => 'media_upload',
        'section' => 'section_featured_section',
        'extended_class' => 'WP_Customize_Image_Control',
        'choices' => false,
        'transport' => 'refresh'
    );
    
    $options[] = array(
        'id' => 'featured_heading',
        'default' => __('Headlines Text !','cognize'),
        'label' => __('Featured Heading', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_content',
        'default' => __('This is the featured section of Cognize Theme. In order to change this text. Go to Theme Options (Featured Section). If you are unable to do so then please see the theme documentation or contact support.','cognize'),
        'label' => __('Featured Content', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'cta_button_1',
        'default' => __('Button #1','cognize'),
        'label' => __('CTA Button #1', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'cta_button_url_1',
        'default' => 'http://www.mudthemes.com',
        'label' => __('CTA Button #1 (URL)', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'cta_button_icon_1',
        'default' => 'check',
        'label' => __('CTA Button #1 Icon', 'corpus'),
        'description' => '',
        'type' => 'select',
        'sanitize_type' => 'select',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'choices' => $icons,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'cta_button_2',
        'default' => __('Button #2','cognize'),
        'label' => __('CTA Button #2', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'cta_button_url_2',
        'default' => 'http://www.mudthemes.com',
        'label' => __('CTA Button #2 (URL)', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'cta_button_icon_2',
        'default' => 'download',
        'label' => __('CTA Button #2 Icon', 'corpus'),
        'description' => '',
        'type' => 'select',
        'sanitize_type' => 'select',
        'section' => 'section_featured_section',
        'extended_class' => false,
        'choices' => $icons,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'cognize_section_content_boxes',
        'title' => __('3 Content Boxes','cognize'),
        'description' => '',
        'panel' => '',
        'priority' => 23,
        'shortname' => 'section_content_boxes',
    );

    $options[] = array(
        'id' => 'disable_featured_boxes',
        'default' => true,
        'label' => __('Hide Content Boxes','cognize'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_content_boxes',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_box_1_title',
        'default' => __('Responsive Design','cognize'),
        'label' => __('Content Box #1 (Title):', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_content_boxes',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'featured_box_1_content',
        'default' => __('Lorem ipsum dolor sit amet, ea graece laoreet deseruisse cum, sea id erat dicant adolescens nullam.','cognize'),
        'label' => __('Content Box #1 (Content):', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_content_boxes',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    $options[] = array(
        'id' => 'featured_box_1_icon',
        'default' => __('desktop','cognize'),
        'label' => __('Content Box #1 (Icon):', 'cognize'),
        'description' => '',
        'type' => 'select',
        'sanitize_type' => 'select',
        'section' => 'section_content_boxes',
        'choices' => $icons,
        'extended_class' => false,
        'transport' => 'refresh'
    );
    $options[] = array(
        'id' => 'featured_box_2_title',
        'default' => __('Full width Layout','cognize'),
        'label' => __('Content Box #2 (Title):', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_content_boxes',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    $options[] = array(
        'id' => 'featured_box_2_content',
        'default' => __('Has errem viris et, ne mel agam eros labore. In ius errem nullam, per et soluta mollis purto wisi nobis.','cognize'),
        'label' => __('Content Box #2 (Content):', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_content_boxes',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    $options[] = array(
        'id' => 'featured_box_2_icon',
        'default' => __('arrows-h','cognize'),
        'label' => __('Content Box #2 (Icon):', 'cognize'),
        'description' => '',
        'type' => 'select',
        'sanitize_type' => 'select',
        'section' => 'section_content_boxes',
        'choices' => $icons,
        'extended_class' => false,
        'transport' => 'refresh'
    );
    $options[] = array(
        'id' => 'featured_box_3_title',
        'default' => __('500+ Google Fonts','cognize'),
        'label' => __('Content Box #3 (Title):', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_content_boxes',
        'extended_class' => false,
        'transport' => 'refresh'
    );
    $options[] = array(
        'id' => 'featured_box_3_content',
        'default' => __('Periculis referrentur pro in. Facete doctus postulant ei mei, nec idque graeco ad eam eu utinam.','cognize'),
        'label' => __('Content Box #3 (Content):', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'nohtml',
        'section' => 'section_content_boxes',
        'extended_class' => false,
        'transport' => 'refresh'
    );
        $options[] = array(
        'id' => 'featured_box_3_icon',
        'default' => __('font','cognize'),
        'label' => __('Content Box #3 (Icon):', 'cognize'),
        'description' => '',
        'type' => 'select',
        'sanitize_type' => 'select',
        'section' => 'section_content_boxes',
        'choices' => $icons,
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'cognize_section_social_profiles',
        'title' => __('Social Profiles','cognize'),
        'description' => '',
        'panel' => '',
        'priority' => 24,
        'shortname' => 'section_social_profiles',
    );

    $options[] = array(
        'id' => 'disable_social_section',
        'default' => false,
        'label' => __('Hide Social Section','cognize'),
        'description' => '',
        'type' => 'checkbox',
        'sanitize_type' => 'checkbox',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'facebook',
        'default' => '',
        'label' => __('Facebook', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'twitter',
        'default' => '',
        'label' => __('Twitter', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $options[] = array(
        'id' => 'rss',
        'default' => '',
        'label' => __('RSS', 'cognize'),
        'description' => '',
        'type' => 'text',
        'sanitize_type' => 'url',
        'section' => 'section_social_profiles',
        'extended_class' => false,
        'transport' => 'refresh'
    );

    $sections[] = array(
        'id' => 'cognize_section_about',
        'title' => __('About Cognize Theme','cognize'),
        'description' => '',
        'panel' => '',
        'priority' => 120,
        'shortname' => 'section_about',
    );

    $options[] = array(
        'id' => 'important_links',
        'default' => '',
        'label' => __('','cognize'),
        'description' => '',
        'type' => 'important_links',
        'sanitize_type' => 'none',
        'section' => 'section_about',
		'extended_class' => 'Cognize_Customize_Important_Links_Control',
		'transport' => 'refresh'
    );


    switch($type):
        case 'panels':
            return $panels;
        case 'sections':
            return $sections;
        case 'options':
            return $options;
        default:
            return;
    endswitch;
}

/**
 * Build Theme Customizer Options
 * 
 * @param type $wp_customize
 */
function cognize_customizer_setup($wp_customize) {
    
    /**
     * Exit if $wp_customize does not exist.
     */
    if( !isset($wp_customize)) {
        return;
    }
    
    $panels = cognize_customizer_options('panels');
    $sections = cognize_customizer_options('sections');
    $options = cognize_customizer_options('options');
    
    foreach($panels as $panel) {
        $wp_customize->add_panel($panel['id'], array(
            'title' => $panel['title'],
            'description' => $panel['description'],
            'theme_supports' => '',
            'capability' => 'edit_theme_options',
            'priority' => $panel['priority'],
        ));
    }
    
    foreach($sections as $section) {
        $wp_customize->add_section($section['id'], array(
            'title' => $section['title'],
            'description' => $section['description'],
            'panel' => $section['panel'],
            'priority' => $section['priority'],
        ));
    }
    
    foreach($options as $option) {
        $wp_customize->add_setting('cognize['.$option['id'].']', array(
            'type' => 'option',
            'default' => $option['default'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => cognize_get_sanitize_filter($option['sanitize_type']),
            'transport' => $option['transport'],
        ));
        
        if (!$option['extended_class']) {
            $wp_customize->add_control('cognize[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'type' => $option['type'],
                'section' => cognize_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => array_key_exists('choices', $option) ? $option['choices'] : false,
            ));
        } else {
            $wp_customize->add_control(new $option['extended_class'](
                $wp_customize, 'cognize[' . $option['id'] . ']', array(
                'label' => $option['label'],
                'description' => $option['description'],
                'section' => cognize_get_sections($option['section']),
                'setting' => $option['id'],
                'choices' => array_key_exists('choices', $option) ? $option['choices'] : false,
                )
            ));
        }
}
	
	// WP Defaults
	$wp_customize->get_section('title_tagline')->panel = 'cognize_panel_general';
	$wp_customize->get_section('static_front_page')->panel = 'cognize_panel_general';
	$wp_customize->get_control('background_color')->section = 'cognize_section_colors_global';
	$wp_customize->get_control('background_image')->section = 'cognize_section_colors_global';
	$wp_customize->remove_section('background_image');
	
}
add_action( 'customize_register', 'cognize_customizer_setup' );



/**
 * Enqueue Customizer Live Preview Scripts
 * 
 * @todo complete this
 */
function cognize_live_preview_scripts(){
    wp_enqueue_script('cognize-themecustomizer-live-preview', COGNIZE_ADMIN_JS_URL . 'customizer.js', array('jquery', 'customize-preview'),'', true);
}
add_action('customize_preview_init','cognize_live_preview_scripts');



/**
 * Enqueue admin panel CSS - (Primarily for customizer)
 *
 * @since 1.0
 */
function cognize_admin_panel_style($hook) {
    
    if($hook == 'widgets.php'){
	wp_enqueue_style( 'cognize-admin-panel-css', COGNIZE_ADMIN_CSS_URL . 'admin.css' );
	wp_enqueue_script( 'cognize-admin-panel-js', COGNIZE_ADMIN_JS_URL . 'admin.js', array('jquery'), '1.0.0', TRUE );
        wp_localize_script('cognize-admin-panel-js', 'cognizeCustomizerUpgradeVars', array('upgrade_text' => __('Upgrade to Premium', 'cognize')));
    }
}
add_action( 'admin_enqueue_scripts', 'cognize_admin_panel_style' );



/**
 * Gets the value of an option.
 * Also sets caching for default options.
 * 
 * @global array $cognize_options Options cache.
 * @param string $id Option ID
 * @return string Option Value
 */

function cognize_get_option($id = NULL) {
    global $cognize_options;
    
    // Global array exists. Get value from memory
    if($cognize_options && array_key_exists($id, $cognize_options)) {
        return $cognize_options[$id];
    } else {
        
        // No value in Memory. Try fetching from DB
        $saved_options = get_option('cognize');
        
        if($saved_options && array_key_exists($id, $saved_options)){
            
            $cognize_options = $saved_options;
            return $cognize_options[$id];
            
        } else {
            
            // No value in Memory or DB. Get it from default options.
            $sane_options = cognize_customizer_options('options');
            $cognize_options = array();
            
            foreach($sane_options as $options) {
                if($id == $options['id'] ){
                    $cognize_options[$options['id']] = $options['default'];
                    break;
                }                
            }

            return $cognize_options[$id];

        }
    }
}


/**
 * Returns sanitization filter functions
 * 
 * @param string $type The type of input to be sanitized
 * @return string Sanitization function name
 */
function cognize_get_sanitize_filter($type){
    $filters = array(
        'html' => 'cognize_sanitize_html',
        'nohtml' => 'cognize_sanitize_nohtml', // Only Text
        'url' => 'cognize_sanitize_url',
        'checkbox' => 'cognize_sanitize_checkbox',
        'select' => 'cognize_sanitize_select',
        'color' => 'cognize_sanitize_hex_color',
        'media_upload' => 'cognize_sanitize_media_upload',
        'none' => 'cognize_sanitize_none'
    );
    
    return $filters[$type];
}


/**
 * Returns the section based on shortname
 * 
 * @param string $shortname
 * @return string
 */
function cognize_get_sections($shortname) {
    $sections = cognize_customizer_options('sections');
    foreach ($sections as $section) {
        if($section['shortname'] == $shortname){
            return $section['id'];
        }
    }
}


/**
 * Sanitization Function for No HTML content (only text)
 *
 * @param string $nohtml
 * @return string
 */
function cognize_sanitize_nohtml($nohtml) {
	return wp_filter_nohtml_kses( $nohtml );
}


/**
 * Sanitization Function for only HTML content
 *
 * @param string $html
 * @return string
 */
function cognize_sanitize_html($html) {
	return wp_filter_post_kses( $html );
}


/**
 * Sanitization Function for URL
 * 
 * @param string $url
 * @return string
 */
function cognize_sanitize_url($url){
    return esc_url_raw($url);
}


/**
 * Sanitization Function for Checkbox
 * 
 * @param boolean $checked
 * @return boolean
 */
function cognize_sanitize_checkbox($checked){
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}


/**
 * Sanitization Function for Select/Radio
 * 
 * @param String $input Slug to sanitize
 * @param WP_Customize_Setting $setting Setting instance
 * @return String Sanitized slug if it is a valid choice; otherwise, the setting default
 */
function cognize_sanitize_select($input, $setting) {
    // Ensure input is a slug.
    $input = sanitize_key($input);

    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control($setting->id)->choices;

    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists($input, $choices) ? $input : $setting->default );
}


/**
 * Sanitization Function for Hex Colors
 * 
 * @param string HEX color to sanitize
 * @param WP_Customize_Setting Setting instance
 */
function cognize_sanitize_hex_color($hex_color, $setting){
	// Sanitize $input as a hex value without the hash prefix.
	$hex_color = sanitize_hex_color( $hex_color );
	
	// If $input is a valid hex value, return it; otherwise, return the default.
	return ( ( $hex_color ) ? $hex_color : $setting->default );
}


/**
 * Sanitization Function for Image Upload via Media Manager
 * 
 * @param string Image filename
 * @param WP_Customize_Setting Setting instance
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function cognize_sanitize_media_upload( $image, $setting ) {

	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );

	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}


/**
 * Sanitizes nothing (Used for Theme Upgrade Text)
 */
function cognize_sanitize_none(){
	return;
}