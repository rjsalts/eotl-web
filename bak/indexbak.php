<?php
// echo "This will work: {$a[3][bar]}";  (putting inside a string)
// echo $banner[ "eotl" ][ "file" ];    will output "eotl_banner4.gif"
$banner = array(
  1 => array(
    "alt"  => "Eight Ball Bar and Grill",
    "file" => "8ball.gif",
    "url"  => "",
    "text" => "Voted \"Best Cajun Food in Eternal City!\""
  ),
  2 => array(
    "alt"  => "Paranoid Clothing and Apparel",
    "file" => "paranoid.gif",
    "url"  => "",
    "text" => "Definitely the place to shop, because everyone is out to get you."
  ),
  3 => array(
    "alt"  => "(It's Purple!)",
    "file" => "clr.gif",
    "url"  => "http://www.wenet.net/~purple/purple.html",
    "text" => "(This space intentionally left Purple)."
  ),
  4 => array(
    "alt"  => "Dear Reverend - Advice from the mallet",
    "file" => "dearreverend.gif",
    "url"  => "http://www.eotl.org/dearreverend/",
    "text" => "You know you're burning to ask."
  ),
  5 => array(
    "alt"  => "Berzerkers Guild",
    "file" => "zerkers.jpg",
    "url"  => "",
    "text" => ""
  ),
  6 => array(
    "alt"  => "Crimson City Wedding Chapel",
    "file" => "wedbanner3.jpg",
    "url"  => "",
    "text" => "For when you feel either lonely or hungry."
  )
);

echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title>End of the Line LP Mud</title>
  <meta name="keywords" content="End of the Line EotL LPmud LP Mud adventure game" />
  <meta name="description" content="End of the Line, more commonly known as EotL, is a text-based roleplaying game in which you adventure in a myriad of landscapes and realms.  It is an LP-style of MUD that was first opened to the public in 1989." />
  <link rel="STYLESHEET" type="text/css" href="/css/eotl_0.css" />
</head>

<body bgcolor="#000000" text="#000000" link="#996699" vlink="#9966CC">

<table border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td rowspan="20"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="5" /></td>
    <td bgcolor="#000000" width="582" nowrap="nowrap" align="center"><span style="color: #FFFFFF;"
    ><img src="/img/title.gif"
    alt="End of the Line LP Mud - 171.64.14.16 2010" width="582" height="90" /></span><br />
    <img src="/img/clr.gif" width="1" height="1" vspace="3" alt="" /></td>
  </tr>

  <tr>
    <td bgcolor="#660066" height="1"><img src="/img/clr.gif" alt="" width="1" height="1" /></td>
  </tr>

  <tr>
    <td bgcolor="#000000" height="10" align="center">

<a class="menu" href="/gameinfo.html" target="_top"
   onMouseOver="window.status='EotL Game Information';return true"
   onMouseOut="window.status='';return true"
><img src="/img/point.gif" alt="--> " width="12" height="8" border="0"
/><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1"
>Game&#160;Info</font></a>

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="20"
/><a class="menu" href="/players.html" target="_top"
   onMouseOver="window.status='EotL Players';return true"
   onMouseOut="window.status='';return true"
><img src="/img/point.gif" alt="--> " width="12" height="8" border="0"
/><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1"
>Players</font></a>

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="20"
/><a class="menu" href="/fun.html" target="_top"
   onMouseOver="window.status='EotL Fun';return true"
   onMouseOut="window.status='';return true"
><img src="/img/point.gif" alt="--> " width="12" height="8" border="0"
/><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1"
>Fun</font></a>

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="20"
/><a class="menu" href="/mud_info.html" target="_top"
   onMouseOver="window.status='MUD Info';return true"
   onMouseOut="window.status='';return true"
><img src="/img/point.gif" alt="--> " width="12" height="8" border="0"
/><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1"
>MUD&#160;Info</font></a>

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="20"
/><a class="menu" href="/guestbook/" target="_top"
   onMouseOver="window.status='EotL Guestbook';return true"
   onMouseOut="window.status='';return true"
><img src="/img/point.gif" alt="--> " width="12" height="8" border="0"
/><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1"
>Guestbook</font></a><br />

    </td>
  </tr>

  <tr>
    <td bgcolor="#660066" height="1"><img src="/img/clr.gif" alt="" width="1" height="1" /></td>
  </tr>

  <tr>
    <td bgcolor="#000000" width="582" height="10" align="center">

<img src="/img/clr.gif" alt="" width="1" height="1" vspace="7" /><br />

<?php
# randomize these banners!!!
$foo = sizeof( $banner );
// seed with microseconds since last "whole" second
mt_srand( ( double ) microtime() * 1000000 );
$bnr = mt_rand( 1, $foo );
$alt = $banner[ $bnr ][ "alt" ];
if( $alt != 'FLASH' ) {
  $url = $banner[ $bnr ][ "url" ];
  if( $url != "" ) {
    printf( "<a href=\"%s\">", $url );
  }
  printf( "<img src=\"/img/banners/%s\" alt=\"%s\" width=\"468\" height=\"60\" />",
    $banner[ $bnr ][ "file" ], $alt );
  if( $url != "" ) {
    echo "</a>";
  }
} else { // Flash movie
  echo $banner[ $bnr ][ "code" ];
}
echo "<br />\n";
$text = $banner[ $bnr ][ "text" ];
if( $text != "" ) {
?>
  <span style="color: #FFFFFF; font-family: verdana, arial, helvetica, geneva, sans-serif; font-size: 8pt;"
<?php
  printf( "  ><font color=\"#FFFFFF\" face=\"verdana,arial,helvetica\">%s</font></span>\n", $text );
}
?>

<br />
    </td>
  </tr>

  <tr>
    <td bgcolor="#000000" colspan="4" height="9"><img src="/img/clr.gif" alt="" width="1" height="1" vspace="4" /></td>
  </tr>
</table>

<table border="0" cellpadding="1" cellspacing="0">
<tr>
  <td rowspan="20"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="3" /></td>
  <td bgcolor="#660066">

  <table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF" width="15" height="15" valign="top"><img src="/img/clr.gif" alt="" width="1" height="1"
      hspace="7" vspace="7" /></td>
    <td bgcolor="#FFFFFF" width="410" height="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="204" /></td>
    <td bgcolor="#FFFFFF" width="15" height="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="7" /></td>
    <td bgcolor="#000000" width="140" height="15"><img src="/img/clr.gif" alt="" width="1" height="1" /></td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF" width="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="7" /></td>

<!--  BEGIN MAIN SECTION  -->
    <td bgcolor="#FFFFFF" width="410" valign="top">

<p align="center" class="bignpurple"><strong>
One of the oldest LP Muds in existence &#151; since 1989!</strong></p>

<p>
<img src="/img/clr.gif" alt="" width="1" height="1" hspace="10" />
<strong><font size="+3"><span class="bignpurple">E</span></font>nd of the Line</strong>, more
commonly known as <strong>EotL</strong>, is a text-based
roleplaying game in which you adventure in a myriad of
landscapes and realms.
You can interact with many other players, many of whom connect
from locations such as Hong Kong, Chile, Australia, Canada,
Russia, England, and the United States (the San Francisco
Bay area in particular).

<br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="10" />
<font size="+3"><span class="bignpurple">E</span></font>otL is part of the LP-family of MUDs,
which involves roleplaying and adventuring,
and which is primarily combat-oriented
(although there are many social players as well).

<br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="10" />
<font size="+3"><span class="bignpurple">E</span></font>otL runs
on a dedicated Ultrasparc 140 with 128 MB RAM, 2 gigabytes of
local space,
and using a heavily modified Amylaar driver.
The language used in the coding of the mud, <strong>LPC</strong>,
is based on <strong>C</strong>
and was developed by Lars Pensj&ouml;.
</p>

<table border="0" cellpadding="0" cellspacing="0">
<tr>
  <td colspan="3" class="ss10">
<strong>Game Specs:</strong><br />
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> Many races available, from elves to androids to squids<br />
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> Many guilds, each with their own set of skills to train in<br />
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> No need for character pre-approval<br />
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> Internal Mail and News system<br />
  </td>
</tr>

<tr>
  <td valign="top" width="180" class="ss10">
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> Ansi color option<br />
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> Equipment storage<br />
  </td>
  <td>&#160;&#160;&#160;&#160;&#160;</td>
  <td valign="top" width="210" class="ss10">
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> Unrestricted player-killing<br />
<img src="/img/sword_tiny.gif" alt="*" width="21" height="20" /> Many chat channels<br />
  </td>
</tr>
</table>


<br />
<p>
Last updated: October 25, 2000<br />
Please send your comments and questions to:
<a href="mailto:webmaster@eotl.org">webmaster@eotl.org</a><br />
<font size="-2"><span class="ss8">Anonymous email without a valid return address
will go directly to /dev/null.</span></font></p>

<p><a href="http://www.topmudsites.com/cgi-bin/topmuds/rankem.cgi?id=eotl"><img src="http://www.topmudsites.com/images/vote_mud.gif" border="0" width="88" height="31" alt="Vote Here" /></a></p>

    </td>
<!--  END MAIN SECTION  -->

    <td bgcolor="#FFFFFF" width="14"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="6" /></td>

    <td align="left" bgcolor="#000000" valign="top" width="140">

<h4 align="center" class="bignwhite"><font color="#FFFFFF">Quick News</font></h4>

<table border="0" cellpadding="5" cellspacing="0"><tr><td bgcolor="#000000">

<p class="ss8w"><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1">
10/21/00: We have a new <a href="/guestbook/">guestbook</a>.
Sign it, or else.</font></p>

<p class="ss8w"><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1">
10/00: Undeniable proof that Hannibal is
<a href="http://www.eotl.org/photos/immortals/hannibal/1337.jpg">1337</a>.</font></p>

<p class="ss8w"><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1">
8/31/00: EotL driver update: LDMud 3.2.9.</font></p>

<p class="ss8w"><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1">
10/30/99: Dear Reverend is back!
Submit your personal question on our
<a href="/dearreverend/">online form</a>!</font></p>

<p class="ss8w"><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1">
EotL's IP address changed back in 1998.
Stanford no longer has the 36.x.x.x IP address range.  FYI</font></p>

<p class="ss8w"><font color="#FFFFFF" face="verdana,arial,helvetica,geneva" size="1">
EotL was <a href="/misc/mudconnect.html"><font color="#AD73A8">The Mud
Connector</font></a>'s March&#160;1998 Mud of the Month!</font></p>

</td></tr></table>

<img src="/img/clr.gif" alt="" width="1" height="1" vspace="14" /><br />

<div align="center">
<table border="0" cellpadding="10" cellspacing="0"><tr>
  <td align="center" bgcolor="#000000">

  <table border="1" cellpadding="10" cellspacing="0"><tr>
    <td align="center" bgcolor="#AD73A8">
<p><img src="/cgi-bin/counter/counter.pl" alt="" width="65" height="20" /><br />
Muddicts<br />
and<br />
counting</p>

    </td>
  </tr></table>
<p><a href="http://validator.w3.org/check/referer"><img
  src="/img/vxhtml10.gif"
  alt="Valid XHTML 1.0!" height="31" width="88" border="0" /></a></p>
  </td>
</tr></table>
</div>

    </td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF" width="15" valign="bottom"><img src="/img/clr.gif" alt="" width="1" height="1"
      hspace="7" vspace="7" /></td>
    <td bgcolor="#FFFFFF" width="410"><img src="/img/clr.gif" alt="" width="1" height="1" /></td>
    <td bgcolor="#FFFFFF" width="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="7" /></td>
    <td bgcolor="#000000" width="140"><img src="/img/clr.gif" alt="" width="1" height="1" /></td>
  </tr>

  </table>

  </td>
  </tr>
</table>


</body>
</html>
