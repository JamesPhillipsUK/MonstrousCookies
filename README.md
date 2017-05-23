# MonstrousCookies
A simple, customizable PHP plugin to allow websites to comply with the EU 'Cookie Law'.

## About
MonstrousCookies is, as it says above, a plugin to help websites comply with the EU 'Cookie Law'.  Information about this change in law, and how to comply with it can be found from the Information Commissioner's Office [here](https://ico.org.uk/for-organisations/guide-to-pecr/cookies-and-similar-technologies/ "ICO Guidance on cookies").

## How To Use
I'm a fan of simple instructions, so here's how to install the MonstrousCookies Plugin on your website:

1. Download all of the files from this repository into your web root folder.
2. Open CookieNotice.php in a text editor, do a Find and replace for `http://ThisSiteName/cookies/` with the URL of your Cookie Policy, replace `mailto:webmaster@ThisSiteName` with `mailto:`followed by your email address, and replace `ThisSiteNameCookies` with the name you want to give the cookie that monitors allowing cookies on the site.
3. Replace any instances of the phrase `<body>` with an instance of `<?php include('./Header.php'); ?>`.
 * Note: any pages saved as a `.htm` or `.html` to which you have done the above will beed to be renamed as a `.php`

##  The Cookie Stuff
This plugin uses implied consent, as explained by the [ICO](https://ico.org.uk/for-organisations/guide-to-pecr/cookies-and-similar-technologies/ "ICO Guidance on cookies") to allow users to accept cookies on your site.  For this to work, your website's cookie policy must state that you use your own "First-Party" cookies.  This is because the plugin itself is powered by a cookie...  And it's delicious.
