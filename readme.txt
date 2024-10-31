=== Seznam Doporučuje RSS ===
Contributors: alanseznam
Donate link: https://www.seznam.cz
Tags: seznam, doporucuje, rss, image
Requires at least: 4.6
Tested up to: 5.8
Stable tag: 4.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Plugin přidává do RSS feedu obrázek velikosti medium pod tagem "enclosure url".

== Description ==

Plugin přidává do RSS feedu obrázek velikosti medium pod tagem "enclosure url". Přesnou velikost medium lze nastavit v sekci Settings > Media, doporučujeme velikost minimálně 320x250 a maximálně 450x400 pixelů. Též doporučujeme po instalaci a aktivaci našeho pluginu nainstalovat plugin Regenerate Thumbnails (Alex Mills) a použít jej v sekci Tools.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Uploadněte plugin do adresáře `/wp-content/plugins/plugin-name`, nebo jej nainstalujte skrz WordPress rozhraní v sekci 'Plugins'.
2. Aktivujte plugin skrz sekci 'Plugins'.
3. Doporučujeme po instalaci a aktivaci našeho pluginu nainstalovat plugin Regenerate Thumbnails (Alex Mills) a použít jej v sekci Tools.

== Changelog ==

= 1.0 =
* První verze pluginu Seznam Doporučuje RSS

= 1.1 =
* Přidán atribut "source" do elementu <enclosure>, upraven popisek s rozměry obrázku

= 1.2 =
* Odebrán atribut "source" z elementu <enclosure>