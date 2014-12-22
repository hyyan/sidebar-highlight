=== Sidebar Highlight ===
Contributors: hyyan 
Tags: sidebar,sidebar highlight,customize , customizer,widget,widget highlight,theme customizer,theme customize
Requires at least: 3.0.1
Tested up to: 4.1.0
Stable tag: 0.3
License: MIT

Small Plugin to hightlight all sidebars when wordpress customize mode is enabled

== Description ==

**How to use**

Just go to customize page and the plugin will be active by default , you can
also disable it from customize page to go back to real preview.
 
[youtube https://www.youtube.com/watch?v=bx7YvvKONLk]

= Contributing =

Everyone is welcome to help contribute and improve this plugin. There are several 
ways you can contribute:

* Reporting issues (please read [issue guidelines](https://github.com/necolas/issue-guidelines))
* Suggesting new features
* Writing or refactoring code
* Fixing [issues](https://github.com/hyyan/sidebar-highlight/issues)



== Installation ==

**Classical Way**

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.

**Composer Way**

`composer require hyyan/sidebar-highlight:version`

== Frequently Asked Questions ==

= Will this plugin break my theme layout ? =

No it will not , the plugin use wordpress hooks and light css 

= Can I change the sidebar highlight style to match my theme ? =

of course you can do that , the plugin make use of two css classes only 
`hyyan-sidebar-highlight` for the sidebar wrapper and `hyyan-sidebar-highlight-name` for
sidebar name.

You can also add you own classes using the `Hyyan\Sidebar_Highlight.Wrapper_Classes`
filter which accept an array of classes to be added to the sidebar wrapper

= Can I switch back to real preview without sidebar highlighting ? =

Yes you can by using the `Sidbars Highlight` section in the customize panel

== Screenshots ==

1. Sidebars are highlighted after using the plugin
2. Empty Sidebars without using the plugin

== Changelog ==

= 0.3 =
* Tested on wordpress 4.1.0

= 0.1 =
* Initial commit