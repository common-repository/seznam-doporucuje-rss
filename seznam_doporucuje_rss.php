<?php
   /*
   Plugin Name: Seznam Doporučuje RSS
   Plugin URI: https://cs.wordpress.org/plugins/seznam-doporucuje-rss
   description: Plugin přidává do RSS feedu obrázek velikosti medium pod tagem "enclosure url". Přesnou velikost medium lze nastavit v sekci Settings > Media, doporučujeme velikost minimálně 320x250 a maximálně 450x400 pixelů. Též doporučujeme po instalaci a aktivaci našeho pluginu nainstalovat plugin Regenerate Thumbnails (Alex Mills) a použít jej v sekci Tools.
   Version: 1.2
   Author: Alan Štolc
   Author URI: https://partner.sklik.cz
   License: GPL2
   */

function sdop_add_thumbnail_to_rss() {
global $post;
if(has_post_thumbnail($post->ID)):
$content = get_the_post_thumbnail_url($post->ID, 'medium');
$bytes = filesize(get_attached_file(get_post_thumbnail_id()));
echo '<enclosure url="' . $content . '" length="' . $bytes . '" type="image/jpg"/>';
endif;
}

add_action('rss2_item', 'sdop_add_thumbnail_to_rss');
