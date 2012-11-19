<?php
/*
Plugin Name: Shadowburst Google Play
Description: Displays Google Play badges for Android apps.
Version: 1.0
Author: Shadowburst
Author URI: http://shadowburst.com/
License: GPL2

Copyright 2012 Shadowburst <dh@shadowburst.com>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function sb_play_badge($attrs, $content) {
    return '<a href="http://play.google.com/store/apps/details?id="'
        . $content
        . '"><img alt="Get it on app on Google Play" src="http://developer.android.com/images/brand/en_generic_rgb_wo_60.png" /></a>';
}

function sb_qr_code($attrs, $content) {
    extract(shortcode_atts(array(
        'size' => 300,
    ), $attrs));
    return "<a href=\"$content\"><img src=\"https://chart.googleapis.com/chart?cht=qr&amp;chs=${size}x$size&amp;chl=\"$content\" width=\"$size\" height=\"$size\" /></a>";
}
add_shortcode('app', 'sb_play_badge');
add_shortcode('qr', 'sb_qr_code');
?>
