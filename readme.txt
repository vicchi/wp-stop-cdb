=== WP Stop UK Communications Data Bill Ribbon ===
Contributors: vicchi
Donate link: http://www.vicchi.org/codeage/donate/
Tags: protest, ribbon, uk, unitedkingdom, privacy, censorship, monitoring, cdb, communications, data, legislation, internet, mobile
Requires at least: 3.4
Tested up to: 3.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add a ribbon to the top right corner of your WordPress site to protest against the UK's Draft Communications Data bill.

== Description ==

This plugin adds a ribbon graphic to the top right hand corner of your WordPress site to draw attention to and to protest against the draft UK Communications Data Bill which was unveiled in June 2012 by Theresa May, the UK Secretary Of State. The ribbon graphic links to an [online petition](https://secure.38degrees.org.uk/page/s/stop-government-snooping) hosted by [38 Degrees](http://www.38degrees.org.uk).

== Installation ==

1. You can install WP Stop UK Communications Data Bill Ribbon automatically from the WordPress admin panel. From the Dashboard, navigate to the *Plugins / Add New* page and search for *"WP Stop UK Communications Data Bill Ribbon"* and click on the *"Install Now"* link.
1. Or you can install WP Stop UK Communications Data Bill Ribbon manually. Download the plugin Zip archive and uncompress it. Copy or upload the `wp-stop-cdb` folder to the `wp-content/plugins` folder on your web server.
1. Activate the plugin. From the Dashboard, navigate to Plugins and click on the *"Activate"* link under the entry for WP Stop UK Communications Data Bill Ribbon.
1. That's it. The current version of the plugin has no configuration settings or options.

== Frequently Asked Questions ==

= How do I get help or support for this plugin? =

In short, very easily. But before you read any further, take a look at [Asking For WordPress Plugin Help And Support Without Tears](http://www.vicchi.org/2012/03/31/asking-for-wordpress-plugin-help-and-support-without-tears/) before firing off a question. In order of preference, you can ask a question on the [WordPress support forum](http://wordpress.org/tags/wp-stop-cdb?forum_id=10); this is by far the best way so that other users can follow the conversation. You can ask me a question on Twitter; I'm [@vicchi](http://twitter.com/vicchi). Or you can drop me an email instead. I can't promise to answer your question but I do promise to answer and do my best to help.

= Is there a web site for this plugin? =

Absolutely. Go to the [WP Stop UK Communications Data Bill Ribbon home page](http://www.vicchi.org/codeage/wp-stop-cdb/) for the latest information. There's also the official [WordPress plugin repository page](http://wordpress.org/extend/plugins/wp-stop-cdb/) and the [source for the plugin is on GitHub](http://vicchi.github.com/wp-stop-cdb/) as well.

= Can I change the wording on the ribbon graphic? =

Not at the moment, no. If you want to create your own ribbon graphic, there's a blank template image, located in `images/template-ribbon.png` that you can use as a starting point. The best way of implementing this would have been for me to build the ribbon graphic purely in CSS, which is possible using the latest CSS browser extensions, but this doesn't work consistently across all browsers nor is it supported across the widest possible range of browsers.

= Can I change the URL that the ribbon graphic links to? =

Not at the moment, no. At least not without changing the source code of the plugin; look for the definition of the `WPSTOPCDB_LINK_URL` constant in `wp-stop-cdb.php` at around line 31. This may be a configurable option in a future release of the plugin.

= I want to amend/hack/augment this plugin; can I do the same? =

Totally; this plugin is licensed under the GNU General Public License v2 (GPLV2). See http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt for the full license terms.

== Screenshots ==

1. Sample Screen Shot

== Changelog ==

The current version is 1.0.0 (2012.06.19)

= 1.0 =
* Released 2012.06.19
* First version of WP Stop UK Communications Data Bill Ribbon released.

== Upgrade Notice ==

= 1.0 =
* This is the first version of WP Stop UK Communications Data Bill Ribbon.