<?php
function draw_menu_items($base) {
	$page_name = basename($base);
	if( strncmp($page_name,"index", 10) == 0 || strncmp($page_name,"index", 5) == 0 )
    print "<IMG src=\"images/menu_item_intro_hi\" border=0 ALT=\"Introduction.\" usemap=\"#mi_intro_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_intro\" border=0 ALT=\"Introduction.\" usemap=\"#mi_intro_map\"><br>\n";

	if( strncmp($page_name,"features", 8) == 0 )
		print "<IMG src=\"images/menu_item_features_hi\" border=0 ALT=\"Features.\" 					usemap=\"#mi_features_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_features\" border=0 ALT=\"Features.\" 					usemap=\"#mi_features_map\"><br>\n";

	if( strncmp($page_name,"screenshots", 11) == 0 )
	  print "<IMG src=\"images/menu_item_ss_hi\"       border=0 ALT=\"Screenshots.\" 				usemap=\"#mi_ss_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
	  print "<IMG src=\"images/menu_item_ss\"       border=0 ALT=\"Screenshots.\" 				usemap=\"#mi_ss_map\"><br>\n";

	if( strncmp($page_name,"ss_sub1", 7) == 0 )
	  print "<IMG src=\"images/menu_item_ss_sub1_hi\"  border=0 ALT=\"Blending.\" 					usemap=\"#mi_ss_sub1_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
	  print "<IMG src=\"images/menu_item_ss_sub1\"  border=0 ALT=\"Blending.\" 					usemap=\"#mi_ss_sub1_map\"><br>\n";

	if( strncmp($page_name,"ss_sub2", 7) == 0 )
	  print "<IMG src=\"images/menu_item_ss_sub2_hi\"  border=0 ALT=\"Text and gradients.\" usemap=\"#mi_ss_sub2_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
	  print "<IMG src=\"images/menu_item_ss_sub2\"  border=0 ALT=\"Text and gradients.\" usemap=\"#mi_ss_sub2_map\"><br>\n";

	if( strncmp($page_name,"ss_sub3", 7) == 0 )
	  print "<IMG src=\"images/menu_item_ss_sub3_hi\"  border=0 ALT=\"Image Quality.\" 			usemap=\"#mi_ss_sub3_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
	  print "<IMG src=\"images/menu_item_ss_sub3\"  border=0 ALT=\"Image Quality.\" 			usemap=\"#mi_ss_sub3_map\"><br>\n";

	if( strncmp($page_name,"ss_sub4", 7) == 0 )
	  print "<IMG src=\"images/menu_item_ss_sub4_hi\"  border=0 ALT=\"Quantization.\" 			usemap=\"#mi_ss_sub4_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
	  print "<IMG src=\"images/menu_item_ss_sub4\"  border=0 ALT=\"Quantization.\" 			usemap=\"#mi_ss_sub4_map\"><br>\n";

	if( strncmp($page_name,"getcode", 7) == 0 )
		print "<IMG src=\"images/menu_item_getcode_hi\"  border=0 ALT=\"Get Code.\" 					usemap=\"#mi_getcode_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_getcode\"  border=0 ALT=\"Get Code.\" 					usemap=\"#mi_getcode_map\"><br>\n";

	if( strncmp($page_name,"documentation", 13) == 0 )
		print "<IMG src=\"images/menu_item_doc_hi\"      border=0 ALT=\"Documentation.\" 			usemap=\"#mi_doc_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_doc\"      border=0 ALT=\"Documentation.\" 			usemap=\"#mi_doc_map\"><br>\n";

	if( strncmp($page_name,"apiref", 6) == 0 )
		print "<IMG src=\"images/menu_item_apiref_hi\"   border=0 ALT=\"  API Reference.\" 		usemap=\"#mi_apiref_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_apiref\"   border=0 ALT=\"  API Reference.\" 		usemap=\"#mi_apiref_map\"><br>\n";

	if( strncmp($page_name,"examples", 8) == 0 )
		print "<IMG src=\"images/menu_item_examples_hi\" border=0 ALT=\"  Examples.\" 				usemap=\"#mi_examples_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_examples\" border=0 ALT=\"  Examples.\" 				usemap=\"#mi_examples_map\"><br>\n";

	if( strncmp($page_name,"ascompose", 9) == 0 )
		print "<IMG src=\"images/menu_item_ascompose_hi\" border=0 ALT=\"  ASCompose.\" 			usemap=\"#mi_ascompose_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_ascompose\" border=0 ALT=\"  ASCompose.\" 			usemap=\"#mi_ascompose_map\"><br>\n";

	if( strncmp($page_name,"support", 7) == 0 )
		print "<IMG src=\"images/menu_item_support_hi\"  border=0 ALT=\"Support.\" 						usemap=\"#mi_support_map\"><IMG SRC=\"images/menu_selection\"><br>\n";
	else
		print "<IMG src=\"images/menu_item_support\"  border=0 ALT=\"Support.\" 						usemap=\"#mi_support_map\"><br>\n";

}
?>


<HTML>
<HEAD>
<TITLE>libAfterImage Imaging Library.</TITLE>
</HEAD>
<BODY BACKGROUND="images/background" TEXT=#000000 VLINK=#CCEEDD ALINK=#CCDDDD LINK=#FFFFEE topmargin="0" bottommargin="5" leftmargin="0" rightmargin="5" marginheight="0" marginwidth="0">
<TABLE border=0 cellspacing=0 cellpadding=0>
	  <TD colspan=2><IMG src="images/title" border=0 ALT="libAfterImage (current version is 1.07, released on 06/08/2005)" usemap="#title_map" width=590></TD>
</TR>
<TR><TD valign="top" rowspan=3>
	  <IMG src="images/menu_title" border=0 ALT="AfterStep Window Manager URL" usemap="#menu_title_map"><br>
				<?php draw_menu_items($_SERVER['PHP_SELF']); ?>
		<IMG src="images/menu_bottom"        border=0 ALT="menu end."><br>
	 </TD><TD colspan=2 valign="top">
			<TABLE width=586 cellpadding=15 border=1 frame="vsides" bordercolor="#003300" background="images/text_back">

