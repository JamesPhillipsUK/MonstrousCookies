# MonstrousCookies
A simple, customizable PHP plugin to allow websites to comply with the EU 'Cookie Law'.

## About
MonstrousCookies is, as it says above, a plugin to help websites comply with the EU 'Cookie Law'.  Information about this change in law, and how to comply with it can be found from the Information Commissioner's Office [here](https://ico.org.uk/for-organisations/guide-to-pecr/cookies-and-similar-technologies/ "ICO Guidance on cookies").

## How To Use
I'm a fan of simple instructions, so here's how to install the MonstrousCookies Plugin on your website:

1. Download all of the files from this repository into your web root folder.
2. Open CookieNotice.php in a text editor, do a Find and replace for `http://ThisSiteName/cookies/` with the URL of your Cookie Policy, replace `mailto:webmaster@ThisSiteName` with `mailto:`followed by your email address, and replace `ThisSiteNameCookies` with the name you want to give the cookie that monitors allowing cookies on the site.
3. Replace any instances of the phrase: `</head>` ... `<body>` on your website with an instance of:
```PHP
<?php include('./Header.php'); ?>
```
 * Note: any pages saved as a `.htm` or `.html` to which you have done the above will beed to be renamed as a `.php`.
 
 ## Requirements
 We only have a couple of requirements for running this plugin, and they're pretty standard.
  - A web server running PHP 5 or higher (PHP 7.x suggested)
  - jQuery 2.2.4 or higher (jQuery 3.3.x suggested)

##  The Cookie Stuff
This plugin uses implied consent, as explained by the [ICO](https://ico.org.uk/for-organisations/guide-to-pecr/cookies-and-similar-technologies/ "ICO Guidance on cookies") to allow users to accept cookies on your site.  For this to work, your website's cookie policy must state that you use your own "First-Party" cookies.  This is because the plugin itself is powered by a cookie...  And it's delicious.
### GDPR
I've been asked, so I'll clarify.  The plugin, when used "vanilla" (I.E.: when it's installed as per these instructions, without further modifications) doesn't collect any personal data, so doesn't fall under GDPR.  Because of this, you don't *need* to mention it in your privacy policy, but you should still mention it in your cookie policy.  You may still want to mention it, and if you do, please feel free to direct people to [this GitHub repo](https://github.com/JamesPhillipsUK/MonstrousCookies), and share the love that is MonstrousCookies.

## Contact me
Should you wish to contact me with any queries about MonstrousCookies, there is [a contact form on my website](https://jamesphillipsuk.com/contact), and you can also email me using the email address located at the start of most of the code files.

## Disclaimer
I'm not a legal expert by any stretch of the imagination, nor do I claim to be.  Nothing in this repository is to be taken as legal advice (If you want that, I'd suggest hiring a professional).  MonstrousCookies is just a tool I thought people might find useful.
