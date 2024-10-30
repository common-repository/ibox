=== iBox ===
Contributors: zeeg, ahmedfarooq
Homepage: http://labs.ibegin.com/ibox/
Tags: lightbox, images
Requires at least: 1.5
Tested up to: 2.3.3
Stable tag: 1.02

iBox is a lightweight script that lets you overlay images and documents in a small dialog without a page reload.

== Description ==

iBox is a lightweight script that lets you overlay images and documents in a small dialog without a page reload. It's built to be easy to install and use.

== Installation ==

1. Upload the ibox folder into your blog's wp-content/plugins directory (so it should become wp-content/plugins/ibox/)
2. Log into WP admin
3. Head on over to Plugins. It should say iBox - click on Activate (it may take a few minutes to finish)

Now that you have the files needed, you simply can tag `rel="ibox"` on to an `a` tag that you want iBox to take over. See below for several examples.

==Frequently Asked Questions==

There are several arguments available on your iBox controls. These are specified in the `rel="ibox"` line.

* `width`
  `rel="ibox&amp;width=350"`
  Sets the width of the popup.
* `height`
  `rel="ibox&amp;height=350"`
  Sets the height of the popup.

iBox also supports some arguments via standard anchor attributes.

* `title`
  `title="Popup Title"`
  The title to show in the popup window.
* `target`
  `target="my-js-document.html"`
  The target document to load (if different than the document in the href attribute).
  
If you want more information, please visit the homepage: http://labs.ibegin.com/ibox/