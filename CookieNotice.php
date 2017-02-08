<?php
/**
 * MonstrousCookies, created by James Phillips <james@jamesphillipsuk.com> September 2016.  
 * MonstrousCookies is a PHP plugin to allow sites to comply with the EU Cookie Law by informing users of a site's cookie policy.
 * CookieNotice.php is a part of MonstrousCookies.
 * 
 * Copyright (C) 2016 James Phillips, Released under the GNU GPL v3.0 or later.
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the 
 * GNU General Public License as published by the Free Software Foundation, either version 3 of the License, 
 * or (at your option) any later version.  This program is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.   
 * You should have received a copy of the GNU General Public License along with this program.
 * If not, see <http://www.gnu.org/licenses/>.
 * 
**/
	//Quick flyout notice for cookies.

	$value="On";
	//setcookie( "ThisSiteNameCookies", '' , 0, '/' );

	if ( !isset ($_COOKIE['ThisSiteNameCookies']) || $_COOKIE['ThisSiteNameCookies'] != $value )
	{
?>
		<div id="CookieMonster">
			<p id="Cookies">By using this site, you agree to <a href="http://ThisSiteName/cookies/">our cookie policy</a></p>  
			<button id="Exit">X</button>
		</div>
		<script>
			var button = document.getElementById('Exit');
	
			button.onclick = function() 
			{
				var div = document.getElementById('CookieMonster');

				if (div.style.display !== 'none') 
				{
					jQuery('#Cookies').text( 'Thanks!');
					jQuery('#CookieMonster').slideUp();
				}
				else 
				{
					div.style.display = 'block';
				}
			};
		</script>
<?php
		setcookie("ThisSiteNameCookies", $value,  time() + (86400 * 10));
	}
	elseif ( $_COOKIE['ThisSiteNameCookies'] == $value )
	{
		//there is a ThisSiteNameCookies session.  Someone has seen the notice.  Do nothing.
	}
	else
	{
		echo '<div id="CookieMonster"><p id="Cookies">Something&#39;s gone wrong!  Please <a href="mailto:webmaster@ThisSiteName">inform the site!</a></p></div>';
	}
?>
