<?php

$file = "info/$recipe";

// use this to keep track of which tag the parser is currently processing
$currentTag = "";

function startElement( $parser, $name, $attrs ) {
  global $currentTag;
  $currentTag = $name;

  // output opening HTML tags
  switch ($name) {
    case "name":
      echo "<h3>";
    break;

    case "contributor":
      echo "<p><strong>contributed by ";
      break;

    case "pre_desc":
      echo "<td>";
      break;

    case "the_recipe":
      echo "<h4 class=\"hsep\">The Recipe</h4>";
      break;

    case "ing":
      echo "<li>";
      break;

    case "ing_opt":
      echo "<li>";
      break;

    case "directions":
      echo "<p>";
      break;

    case "reviews":
      echo "<h4 class=\"hsep\">The Reviews</h4>";
      break;

    case "reviewer":
      echo "<strong>";
      break;

    case "review":
      break;

    case "rating":
      break;

    case "r_image":
      echo "<p>";
      break;

    default:
      break;
  }
}

function endElement( $parser, $name ) {
  global $currentTag;

  // output closing HTML tags
  switch ($name) {
    case "name":
      echo "</h3>";
    break;

    case "contributor":
      echo "</strong></p>";
      break;

    case "pre_desc":
      echo "</p>";
      break;

    case "the_recipe":
      break;

    case "ing":
      echo "</li>";
      break;

    case "ing_opt":
      echo "</li>";
      break;

    case "directions":
      echo "</p>";
      break;

    case "reviews":
      break;

    case "reviewer":
      echo "</strong>: ";
      break;

    case "review":
      echo "<br />";
      break;

    case "rating":
      echo "</p>";
      break;

    case "r_image":
      echo "<br />";
      break;

    default:
      break;
  }
}



// initialize parser
$xml_parser = xml_parser_create();

// set callback functions
xml_set_element_handler( $xml_parser, "startElement", "endElement" );
xml_set_character_data_handler( $xml_parser, "characterData" );

// open XML file
if( !( $fp = fopen( $file, "r" )))
{
  die( "Cannot locate XML data file: $file" );
}

// read and parse data
while( $data = fread( $fp, 4096 ))
{
  // error handler
  if( !xml_parse( $xml_parser, $data, feof( $fp )))
  {
    die( sprintf( "XML error: %s at line %d",
      xml_error_string( xml_get_error_code( $xml_parser )),
      xml_get_current_line_number( $xml_parser )));
  }
}

// clean up
xml_parser_free( $xml_parser );


// if( file_exists( $file ) ) {
// 
// # Open database for reading (INFO_FILE).
//   $rfile = fopen( $file, "r" );
//   $at_etc = 0;
// 
// }


  echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<!DOCTYPE html 
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Recipes - End of the Line</title>
<meta http-equiv="Content-type" content='text/html; charset="UTF-8"' />
<link rel="STYLESHEET" type="text/css" href="/css/eotl_0.css" />
</head>

<body bgcolor="#000000" link="#663366" vlink="#996699">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
  <td rowspan="20"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="5" /></td>
  <td bgcolor="#000000" width="110" class="ttop"
    ><img src="/img/t_eotl.gif" alt="EotL" width="110" height="40" align="top" /></td>
  <td bgcolor="#000000" width="470" class="ttop"><em>Recipes</em><br /></td>
</tr>

<tr>
  <td bgcolor="#660066" colspan="2"><table border="0" cellpadding="0" cellspacing="0"><tr><td height="1"></td></tr></table></td>
</tr>

<tr>
  <td bgcolor="#000000" colspan="2"><table border="0" cellpadding="0" cellspacing="0"><tr><td height="10"></td></tr></table></td>
</tr>
</table>

 
<table border="0" cellpadding="1" cellspacing="0">
<tr>
  <td rowspan="20"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="3" /></td>
  <td bgcolor="#660066">

<table border="0" cellpadding="0" cellspacing="0">
<tr>
  <td bgcolor="#FFFFFF" width="15" valign="bottom"><img src="/img/clr.gif" alt="" width="1" height="1"
      hspace="7" vspace="7" /></td>
  <td bgcolor="#FFFFFF" width="410" height="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="204" /></td>
  <td bgcolor="#FFFFFF" width="15" height="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="7" /></td>
  <td bgcolor="#000000" width="140" height="15"><img src="/img/clr.gif" alt="" width="1" height="1" /></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF" width="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="7" /></td>

<!--  BEGIN MAIN SECTION  -->
  <td bgcolor="#FFFFFF" width="410" valign="top">





<hr noshade="noshade" />

<p>Email your review of this recipe to:
<a href="mailto:webmaster@eotl.org">webmaster@eotl.org</a>!<br />
<a href="/recipes/">Return to EotL Recipes</a></p>

  </td>
<!--  END MAIN SECTION  -->

  <td bgcolor="#FFFFFF" width="15"><img src="/img/clr.gif" alt="" width="1" height="1" hspace="7" /></td>

  <td align="left" bgcolor="#000000" valign="top" width="140">

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><a class="menu" href="/gameinfo.html" target="_top">Game&#160;Info</a><br />

  <img src="/img/clr.gif" alt="" width="1" height="1" vspace="5" /><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><a class="menu" href="/players.html" target="_top">Players</a><br />

  <img src="/img/clr.gif" alt="" width="1" height="1" vspace="7" /><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><a class="menu" href="/fun.html" target="_top"><strong>Fun</strong></a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/art/" target="_top">Art</a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/awards/" target="_top">Awards</a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/bogleg/" target="_top">Boglegs</a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/dearreverend/" target="_top">Dear&#160;Reverend</a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/games/" target="_top">Games</a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/recipes/" target="_top"><strong>Recipes</strong></a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/tests/" target="_top">Tests</a><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><img src="/img/point.gif" alt="--> " width="12" height="8"
/><a class="menu" href="/vote/" target="_top">Voting Booth</a><br />

  <img src="/img/clr.gif" alt="" width="1" height="1" vspace="7" /><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><a class="menu" href="/mud_info.html" target="_top">MUD Links</a><br />

  <img src="/img/clr.gif" alt="" width="1" height="1" vspace="5" /><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><a class="menu" href="/guestbook/" target="_top">Guestbook</a><br />

  <img src="/img/clr.gif" alt="" width="1" height="1" vspace="5" /><br />

<img src="/img/clr.gif" alt="" width="1" height="1" hspace="4"
/><a class="menu" href="/" target="_top">EotL&#160;Home</a><br />

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
