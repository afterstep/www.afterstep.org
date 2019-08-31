<?

function win_list_item($url,$title,$name) {
	if( isset($_GET['cs']) )
		$image_path='images/' . $_GET['cs'];
	else
		$image_path='images/Stormy_Skies';
	$a_image_fname=$name . '_btn_a.jpg' ;
	$i_image_fname=$name . '_btn_i.jpg' ;

	echo "<A href=\"$url\" title=\"$title\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('$name','','$image_path/$a_image_fname',1)\">" ;
	echo "<IMG name=\"$name\" border=\"0\" src=\"$image_path/$i_image_fname\" alt=\"Home\"></A>" ;
}

function wharf_button($url,$title,$name) {
	if( isset($_GET['cs']) )
	{
		$url=$url . '?cs=' . $_GET['cs'] ;
		$image_path='images/' . $_GET['cs'];
	}else
		$image_path='images/Stormy_Skies';

	$image_fname=$name . '.png' ;
        echo "<A href=\"$url\" title=\"$title\"><IMG border=\"0\" src=\"$image_path/$image_fname\" width=\"64\" height=\"64\" alt=\"$title\"></A>";
}

function filename() {
    $host = $_SERVER['PHP_SELF'];
    $i = strlen ($host);
    while (($stop!=1) and ($i>=0)) {
        if ($host[$i] != "/") {
            $new = $host[$i] . $new;
            $i--;
        } else $stop=1;
    }
    $new = explode ('.', $new);
    return $new[0];
}


function local_url($url,$text) {
	if( isset($_GET['cs']) )
	{
		if ( strstr($url, "?") ) {
		    $url=$url . '&cs=' . $_GET['cs'] ;
		}else
		    $url=$url . '?cs=' . $_GET['cs'] ;
	}
	echo "<A href=\"$url\">$text</A>";
}

function build_local_doc_url($url,$show,$src,$sub) {
	if ( strstr($url, "?") ) 
	    $separator='&';
	else
	    $separator='?';
	if( isset($show) )
	{
	    $url=$url . $separator . 'show=' . $show ;
	    $separator='&';
	}
	if( isset($src) )
	{
	    $url=$url . $separator . 'src=' . $src ;
	    $separator='&';
	}
	if( isset($sub) )
	{
	    $url=$url . $separator . 'sub=' . $sub ;
	    $separator='&';
	}
	if( isset($_GET['cs']) )
	{
	    $url=$url . $separator . 'cs=' . $_GET['cs'] ;
	    $separator='&';
	}
	return $url ;
}

function local_doc_url($url,$text,$show,$src,$sub) {
	$url = build_local_doc_url($url,$show,$src,$sub);
	echo "<A href=\"$url\">$text</A>";
}

function local_doc_immap_url($coords,$url,$show,$src,$sub) {
	$url = build_local_doc_url($url,$show,$src,$sub);
	echo "<area shape=\"rect\" coords=\"$coords\" href=\"$url\" alt=\"$show\">";
}

function theme_descriptor($themename,$themeauthor,$themeimage)
{
 #echo "<td>\n";
 echo '<div class="screenshot">';
 $tmpurl="screenshots/".$themeimage;
 //$tmpurl="screenshots/na_thumb.jpg";
 echo "<a href=\"$tmpurl\">\n";
 $tmpurl="screenshots/".$themeimage.".small.jpg";
 echo "<img src=\"$tmpurl\" height=150 alt=\"screenshot of the theme ".$themename."\">\n
 </a><br>
 <b>$themename</b><br>\n
 By: \n";
 if ($themeauthor<>"") echo "$themeauthor<br>";
 else echo "unknown";

 # CSS > HTML4
 #echo '</div></td>';
 echo '</div>';
}


function local_doc_main_menu($fuxus) {
if ($fuxus<>"-1") local_url("documentation.php","Preface");
    else echo "<b>Preface</b> ";
if ($fuxus=="1") { echo "<b>&nbsp; Introduction</b> ";}
    else if ($fuxus=="11") { echo " &nbsp; <b>(</b>"; local_url("visualdoc.php?show=visualselect","Introduction"); echo "<b>)</b>";}
    	else { echo " &nbsp; "; local_url("visualdoc.php?show=visualselect","Introduction");}
if ($fuxus<>"2") { echo " &nbsp; "; local_url("visualdoc.php?show=index","Topic Index");}
    else echo "<b>&nbsp; Topic Index</b> ";
if ($fuxus<>"3") { echo " &nbsp; "; local_url("visualdoc.php?show=Glossary","Glossary");}
    else echo "<b>&nbsp; Glossary</b> ";
if ($fuxus<>"4") { echo " &nbsp; "; local_url("visualdoc.php?show=faq","F.A.Q.");}
    else echo "<b>&nbsp; F.A.Q.</b> ";
if ($fuxus<>"5") { echo " &nbsp; "; local_url("visualdoc.php?show=copyright","Copyright");}
    else echo "<b>&nbsp; Copyright</b> ";
echo "<hr>\n";
}

function pagestart($title) {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
   <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
   <title>AfterStep - <? echo $title;?></title>
   
   <? include "java_scripts.php"; ?>
   <? include "styles.php"; ?>

</head>

<?
echo "<BODY bgcolor=\"#333333\" BACKGROUND=\"$image_path/background.jpg\" text=\"#FFFFFE\" leftmargin=\"5\" topmargin=\"0\" marginwidth=\"5\" marginheight=\"0\"" ;
echo       "onLoad=\"MM_preloadImages('$image_path/cvs_site_btn_a.jpg','$image_path/apps_site_btn_a.jpg','$image_path/themes_site_btn_a.jpg','$image_path/devel_site_btn_a.jpg','$image_path/wao_site_btn_a.jpg')\">" ;
?>
     <?	win_list_item("http://www.afterstep.org","Home","wao_site");
     ?><? win_list_item("http://wiki.afterstep.org","AfterStep Wiki","wiki_site");
     ?><? win_list_item("http://windowmaker.org/dockapps","Dockapps.org","dockapps_site");
     ?><? win_list_item("http://tigr.net/afterstep/","Apps","apps_site");
     ?><? win_list_item("https://github.com/afterstep/afterstep/","AfterStep git","git_site"); ?>
  <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
  <TR>
    <TD align="left" valign=top>
      <font size=1>&nbsp;<br></font>
      <TABLE border="0" cellspacing="0" cellpadding="0">
        <TR><TD><?	wharf_button("index.php","Home","home" ) ?>					</TD></TR>
        <TR><TD><?	wharf_button("news.php","News","news" ) ?>					</TD></TR>
        <TR><TD><?	wharf_button("download.php","Downloads","download" ) ?>						</TD></TR>
        <TR><TD><?	wharf_button("documentation.php","Documentation","documentation" ) ?>					</TD></TR>
        <TR><TD><?	wharf_button("look.php","Looks and Themes","look" ) ?>				</TD></TR>
	<TR><TD><?      wharf_button("graphics.php?show=index&src=/desktop","Icons, Clipart, etc.","data" ) ?> </TD></TR>
        <TR><TD><?	wharf_button("mail.php","Mailing List and Contacts","mail" ) ?>			</TD></TR>
      </TABLE>
    </TD>
    <TD align=center valign=top>
      <TABLE border=0 cellspacing=5 cellpadding=5>
<? }

function active_section_start($title_image) {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
	<TR><TD COLSPAN=2 align=left>
      		<? echo "<table align=left width=732 background=\"$image_path/shaded_back_wide.png\" border=0 frame=\"vsides\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"0\">"; ?>
		<tr><td align=center>
			<? echo "<table background=\"$image_path/titlebar_a_wide.jpg\" width=100% height=28 border=0 cellspacing=\"0\" cellpadding=\"0\">"; ?>
 			<tr><td align=center>
				<? if( $title_image != "nil" ) echo "<IMG id=titlebar_image src=\"$image_path/$title_image\" alt=\"title_image\">"; ?>
        		</td></tr>
			</table>
		</td></tr>
		<tr><td>
	      		<div class="copy">
			<FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<? }

function active_section_end() {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
 	      		<br>
	      		</font>
	      		</div>
		</td></tr>
		<tr><td align=center><? echo "<IMG id=lowbar_a_wide_image src=\"$image_path/lowbar_a_wide.jpg\" alt=\"lowbarimage\">"; ?>
		</table>
  	</TD>
  	</TR>
<? }

function inactive2_section_start($title_image) {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
	<TR>
	<TD>&nbsp;</TD>
	<TD COLSPAN=2 align=right>
      		<? echo "<table align=left width=732 background=\"$image_path/shaded_back.png\" border=0 frame=\"vsides\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"0\">"; ?>
		<tr><td align=center>
		<? echo "<table background=\"$image_path/titlebar_i2.jpg\" width=732 height=28 border=0 cellspacing=\"0\" cellpadding=\"0\">"; ?>
 			<tr><td align=center>
				<? if( $title_image != "nil" )  echo "<IMG id=titlebar_image src=\"$image_path/$title_image\">"; ?>
        		</td></tr>
			</table>
		</td></tr>
		<tr><td>
	      		<div class="copy">
			<FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<? }

function inactive2_section_end() {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
 	      		<P>&nbsp;</P>
	      		</font>
	      		</div>
		</td></tr>
		<tr><td align=center><? echo "<IMG id=lowbar_i2_image src=\"$image_path/lowbar_i2.jpg\">"; ?>
		</table>
  	</TD>
  	</TR>
<? }


function pageend() {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
  echo '<div class="copy">&nbsp;</div>'."\n</body>\n</html>\n";
} 

?>
