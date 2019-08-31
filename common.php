<?

function win_list_item($url,$title,$name) {
	if( isset($_GET['cs']) )
		$image_path='images/' . $_GET['cs'];
	else
		$image_path='images/Stormy_Skies';
	$a_image_fname=$name . '_btn_a.jpg' ;
	$i_image_fname=$name . '_btn_i.jpg' ;

	echo "<a href=\"$url\" title=\"$title\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('$name','','$image_path/$a_image_fname',1)\">";
	echo "<img name=\"$name\" border=\"0\" src=\"$image_path/$i_image_fname\" alt=\"".$title."\" /></a>" ;
}

function wharf_button($url,$title,$name) {
	if( isset($_GET['cs']) )
	{
		$url=$url . '?cs=' . $_GET['cs'] ;
		$image_path='images/' . $_GET['cs'];
	}else
		$image_path='images/Stormy_Skies';

	$image_fname=$name . '.png' ;
        echo "<a href=\"$url\" title=\"$title\"><img border=\"0\" src=\"$image_path/$image_fname\" width=\"64\" height=\"64\" alt=\"$title\" /></a>\n";
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

function cs_menu_item($title,$name) {
	$url=filename() . '.php';
	$item_back="cs_menu_item.jpg" ;
	$icon_image_fname=$name . '/cs_mini.jpg' ;
	$text_image_fname=$name . '.png' ;
	if( isset($_GET['cs']) )
	{
		if( $name == $_GET['cs'] )
		{
			$item_back="cs_menu_item_s.jpg" ;
			$text_image_fname=$name . '_s.png' ;
		}
		$image_path='images/' . $_GET['cs'];
	}else
		$image_path='images/Stormy_Skies';

	$url=$url . '?cs=' . $name ;

	echo '<table background="'.$image_path.'/'.$item_back.'" cellspacing="0" cellpadding="2" width="220" height="26" align="left"><tr>';
	echo '<td align="left" valign="middle"><a href="'.$url.'" title="$title"><img border="0" src="images/'.$icon_image_fname.'" width="24" height="24" alt="'.$title.'" /></a></td>';
	echo '<td valign="middle"><a href="'.$url.'" title="'.$title.'"><img align="left" border="0" src="'.$image_path.'/'.$text_image_fname.'" alt="'.$title.'" /></a></td>';
	echo "</tr></table>";
}

function local_url($url,$text) {
	if( isset($_GET['cs']) )
	{
		if ( strstr($url, "?") ) {
		    $url=$url . '&cs=' . $_GET['cs'] ;
		}else
		    $url=$url . '?cs=' . $_GET['cs'] ;
	}
	echo "<a href=\"$url\">$text</a>";
}

function pagestart($title) {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
   <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
   <title>AfterStep - <? echo $title;?></title>
   
   <? include "java_scripts.php"; ?>
   <? include "styles.php"; ?>

</head>

<?

echo '<body bgcolor="#333333" background="'.$image_path.'/background.jpg" text="#FFFFFE" leftmargin="5" topmargin="0" marginwidth="5" marginheight="0"';
echo       "onLoad=\"MM_preloadImages('$image_path/cvs_site_btn_a.jpg','$image_path/aterm_site_btn_a.jpg','$image_path/apps_site_btn_a.jpg',
                                      '$image_path/dockapps_site_btn_a.jpg','$image_path/devel_site_btn_a.jpg','$image_path/wao_site_btn_a.jpg','$image_path/wiki_site_btn_a.jpg','$image_path/bugtrack_site_btn_a.jpg')\">\n" ;
?>
     <?	
        win_list_item("http://www.afterstep.org","Home","wao_site");
        win_list_item("http://wiki.afterstep.org","AfterStep Wiki","wiki_site");
        win_list_item("http://windowmaker.org/dockapps","Dockapps.org","dockapps_site");
        win_list_item("http://tigr.net/afterstep","Apps","apps_site");
        win_list_item("https://github.com/sashavasko/afterstep-devel","AfterStep at GitHub","cvs_site");
        win_list_item("https://sourceforge.net/tracker/?group_id=30","Bug Tracker","bugtrack_site"); 
      ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top">
      <font size="1">&nbsp;<br /></font>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr><td><?	wharf_button("index.php","Home","home" ) ?>					</td></tr>
        <tr><td><?	wharf_button("news.php","News","news" ) ?>					</td></tr>
        <tr><td><?	wharf_button("download.php","Downloads","download" ) ?>						</td></tr>
        <tr><td><?	wharf_button("documentation.php","Documentation","documentation" ) ?>					</td></tr>
        <tr><td><?	wharf_button("look.php","Looks and Themes","look" ) ?>				</td></tr>
	<tr><td><?      wharf_button("graphics.php?show=index&amp;src=/desktop","Icons, Clipart, etc.","data" ) ?> </td></tr>
        <tr><td><?	wharf_button("mail.php","Mailing List and Contacts","mail" ) ?>			</td></tr>
        <tr><td><?	wharf_button("aterm.php","aterm terminal emulator","aterm" ) ?>			</td></tr>
      </table>
    </td>
    <td align="center" valign="top" >
      <table border="0" cellspacing="5" cellpadding="5">
<? }

function active_section_start($title_image) {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
	<tr><td colspan="2" align="left">
      		<? echo '<table align="left" width="642" background="'.$image_path.'/shaded_back.png" border="0" frame="vsides" bordercolor="black" cellspacing="0" cellpadding="0">'; ?>
		<tr><td align="center">
			<? echo '<table background="'.$image_path.'/titlebar_a.jpg" width="642" height="28" border="0" cellspacing="0" cellpadding="0">'; ?>
 			<tr><td align="center">
				<? if( $title_image != "nil" ) echo "<img id=\"titlebar_image\" src=\"$image_path/$title_image\" alt=\"Welcome to the Official AfterStep website\" />"; ?>
        		</td></tr>
			</table>
		</td></tr>
		<tr><td>
	      		<div class="copy">
<? }

function active_section_end() {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
 	      		<p>&nbsp;</p>
	      		</div>
		</td></tr>
		<tr><td align="center"><? echo "<img class=\"lowbar_a_image\" src=\"$image_path/lowbar_a.jpg\" alt=\"decor\" />"; ?></td></tr>
		</table>
  	</td>
  	<td align="right" valign="top">
	      <table border="0" cellspacing="0" cellpadding="0">
		<tr><td><? echo "<img src=\"$image_path/cs_menu_titlebar_a.jpg\" alt=\"titlebar decor\" />"; ?></td></tr>
        	<tr><td><?	cs_menu_item("Crimson",  	"Crimson"     ) ?></td></tr>
        	<tr><td><?	cs_menu_item("Deep Red",	"Deep_Red"    )	?></td></tr>
        	<tr><td><?	cs_menu_item("Gold On Blue",	"Gold_On_Blue") ?></td></tr>
        	<tr><td><?	cs_menu_item("Green Sea",	"Green_Sea"   )	?></td></tr>
        	<tr><td><?	cs_menu_item("Lime",		"Lime" 	      ) ?></td></tr>
        	<tr><td><?	cs_menu_item("NeXT-ish",	"NeXTish"     )	?></td></tr>
        	<tr><td><?	cs_menu_item("Peru",		"Peru"        )	?></td></tr>
        	<tr><td><?	cs_menu_item("Purple",		"Purple"      )	?></td></tr>
        	<tr><td><?	cs_menu_item("Sea Water",	"Sea_Water"   )	?></td></tr>
        	<tr><td><?	cs_menu_item("Silver",		"Silver"      )	?></td></tr>
        	<tr><td><?	cs_menu_item("Stormy Skies",	"Stormy_Skies") ?></td></tr>
        	<tr><td><?	cs_menu_item("Turquoise",	"Turquoise"   )	?></td></tr>
        	<tr><td><?	cs_menu_item("Washed Blue",	"Washed_Blue" ) ?></td></tr>
		<tr><td><? echo "<img class=\"lowbar_a_image\" src=\"$image_path/cs_menu_lowbar_a.jpg\" alt=\"decor\" />"; ?></td></tr>
	      </table>
	</td>
  	</tr>
<? }

function inactive2_section_start($title_image) {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
	<tr>
	<td>&nbsp;</td>
	<td colspan="2" align="right">
      		<? echo "<table align=left width=642 background=\"$image_path/shaded_back.png\" border=0 frame=\"vsides\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"0\">"; ?>
		<tr><td align=center>
		<? echo "<table background=\"$image_path/titlebar_i2.jpg\" width=642 height=28 border=0 cellspacing=\"0\" cellpadding=\"0\">"; ?>
 			<tr><td align=center>
				<? if( $title_image != "nil" )  echo "<img id=titlebar_image src=\"$image_path/$title_image\" />"; ?>
        		</td></tr>
			</table>
		</td></tr>
		<tr><td>
	      		<div class="copy">
			<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<? }

function inactive2_section_end() {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];
?>
 	      		<P>&nbsp;</P>
	      		</font>
	      		</div>
		</td></tr>
		<tr><td align=center><? echo "<img id=lowbar_i2_image src=\"$image_path/lowbar_i2.jpg\" />"; ?>
		</table>
  	</td>
  	</tr>
<? }

include "counter.php";

function pageend() {
	static $image_path='images/Stormy_Skies';
	if( isset($_GET['cs']) )	$image_path='images/' . $_GET['cs'];

  echo '<div class="copy">&nbsp;</div>'."\n</body>\n</html>\n";
}
?>
