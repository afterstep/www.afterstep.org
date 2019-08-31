&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Custom Color Scheme</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines color values for standard set of internal color names, to be used in other configuration files</FONT></td></tr></table><br><hr>
&nbsp;<? local_doc_url("visualdoc.php","Overview","ColorScheme",$srcunset,$subunset) ?>
 &nbsp;<b>Configuration</b>
<hr>
<UL>

<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Active">
	</A><DT class="dense"><B>Active</B></DT>
	<DD class="dense">
		<P class="dense">Color that will be used for &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of different focused elemets, 
such as focused &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's titlebar, selected menu item, etc. This &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  should be contrasting with &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","Inactive2","ColorScheme_options#options.Inactive2",$srcunset,$subunset) ?>
  in &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 , but similar in saturation.</P>
	</DD>


<A NAME="options.ActiveDark">
	</A><DT class="dense"><B>ActiveDark</B></DT>
	<DD class="dense">
		<P class="dense">This &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  should have slightly lesser value then &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  (be 5-10% darker).
This is usefull when &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of focused titlebar is a &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.ActiveLight">
	</A><DT class="dense"><B>ActiveLight</B></DT>
	<DD class="dense">
		<P class="dense">This &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  should have slightly higher value then &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  (be 5-10% lighter).
This is usefull when &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of focused titlebar is a &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.ActiveText">
	</A><DT class="dense"><B>ActiveText</B></DT>
	<DD class="dense">
		<P class="dense">Color of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on focused titlebars. It should be in high value contrast with &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Angle">
	</A><DT class="dense"><B>Angle</B></DT>
	<DD class="dense">
		<P class="dense">Defines angle on the &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  circle between &nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","Inactive2","ColorScheme_options#options.Inactive2",$srcunset,$subunset) ?>
  colors in &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  schemes, that are automagically calculated by AfterStep.
Default angle is 30 degrees. &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  smaller angle to make Inactive and &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  colors more similar.</P>
	</DD>


<A NAME="options.Base">
	</A><DT class="dense"><B>Base</B></DT>
	<DD class="dense">
		<P class="dense">This &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is defining &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  scheme. It will be used for desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .
When AfterStep is allowed to calculate &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  scheme automagically - it will use this &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  in conjunction with the &nbsp;<? local_doc_url("visualdoc.php","Angle","ColorScheme_options#options.Angle",$srcunset,$subunset) ?>
  value as base of calculations.</P>
	</DD>


<A NAME="options.BaseDark">
	</A><DT class="dense"><B>BaseDark</B></DT>
	<DD class="dense">
		<P class="dense">Color that should be about 10% darker then the &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , but have similar &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  and saturation.
Usefull for drawing gradiented desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.BaseLight">
	</A><DT class="dense"><B>BaseLight</B></DT>
	<DD class="dense">
		<P class="dense">Color that should be about 10% lighter then the &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , but have similar &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  and saturation.
Usefull for drawing gradiented desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Cursor">
	</A><DT class="dense"><B>Cursor</B></DT>
	<DD class="dense">
		<P class="dense">This &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  will be used for pmouse pointer, and it should be in high contrast with all the other colors.</P>
	</DD>


<A NAME="options.DisabledText">
	</A><DT class="dense"><B>DisabledText</B></DT>
	<DD class="dense">
		<P class="dense">Color of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  of disabled menu items. Should be very similar to menu item's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HighActive">
	</A><DT class="dense"><B>HighActive</B></DT>
	<DD class="dense">
		<P class="dense">Used for focused menus. Should be similar to &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , but somewhat lighter.</P>
	</DD>


<A NAME="options.HighActiveBack">
	</A><DT class="dense"><B>HighActiveBack</B></DT>
	<DD class="dense">
		<P class="dense">Used for current menu item's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 . Should be similar, but somewhat brighter them &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HighActiveBackDark">
	</A><DT class="dense"><B>HighActiveBackDark</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% darker then &nbsp;<? local_doc_url("visualdoc.php","HighActiveBack","ColorScheme_options#options.HighActiveBack",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of selected menu item.</P>
	</DD>


<A NAME="options.HighActiveBackLight">
	</A><DT class="dense"><B>HighActiveBackLight</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% lighter then &nbsp;<? local_doc_url("visualdoc.php","HighActiveBack","ColorScheme_options#options.HighActiveBack",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of selected menu item.</P>
	</DD>


<A NAME="options.HighActiveDark">
	</A><DT class="dense"><B>HighActiveDark</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% darker then &nbsp;<? local_doc_url("visualdoc.php","HighActive","ColorScheme_options#options.HighActive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of focused menu titlebar.</P>
	</DD>


<A NAME="options.HighActiveLight">
	</A><DT class="dense"><B>HighActiveLight</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% lighter then &nbsp;<? local_doc_url("visualdoc.php","HighActive","ColorScheme_options#options.HighActive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of focused menu titlebar.</P>
	</DD>


<A NAME="options.HighActiveText">
	</A><DT class="dense"><B>HighActiveText</B></DT>
	<DD class="dense">
		<P class="dense">Color to be used for drawing &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on focused menu titlebar. Should be in high contrast with &nbsp;<? local_doc_url("visualdoc.php","HighActive","ColorScheme_options#options.HighActive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HighInactive">
	</A><DT class="dense"><B>HighInactive</B></DT>
	<DD class="dense">
		<P class="dense">Used for unfocused menus. Should be similar to &nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , but somewhat lighter.</P>
	</DD>


<A NAME="options.HighInactiveBack">
	</A><DT class="dense"><B>HighInactiveBack</B></DT>
	<DD class="dense">
		<P class="dense">Used for inactive menu item's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 . Should be similar, but somewhat brighter them &nbsp;<? local_doc_url("visualdoc.php","HighInactive","ColorScheme_options#options.HighInactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HighInactiveBackDark">
	</A><DT class="dense"><B>HighInactiveBackDark</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% darker then &nbsp;<? local_doc_url("visualdoc.php","HighInactiveBack","ColorScheme_options#options.HighInactiveBack",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of inactive menu item.</P>
	</DD>


<A NAME="options.HighInactiveBackLight">
	</A><DT class="dense"><B>HighInactiveBackLight</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% lighter then &nbsp;<? local_doc_url("visualdoc.php","HighInactiveBack","ColorScheme_options#options.HighInactiveBack",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of inactive menu item.</P>
	</DD>


<A NAME="options.HighInactiveDark">
	</A><DT class="dense"><B>HighInactiveDark</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% darker then &nbsp;<? local_doc_url("visualdoc.php","HighInactive","ColorScheme_options#options.HighInactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of inactive menu titlebars.</P>
	</DD>


<A NAME="options.HighInactiveLight">
	</A><DT class="dense"><B>HighInactiveLight</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% lighter then &nbsp;<? local_doc_url("visualdoc.php","HighInactive","ColorScheme_options#options.HighInactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of inactive menu titlebars.</P>
	</DD>


<A NAME="options.HighInactiveText">
	</A><DT class="dense"><B>HighInactiveText</B></DT>
	<DD class="dense">
		<P class="dense">Color of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on unfocused menu titlebar. Should be highly contrasting with &nbsp;<? local_doc_url("visualdoc.php","HighInactive","ColorScheme_options#options.HighInactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Inactive1">
	</A><DT class="dense"><B>Inactive1</B></DT>
	<DD class="dense">
		<P class="dense">Primary &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  used for unfocused &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  titlebar's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Inactive1Dark">
	</A><DT class="dense"><B>Inactive1Dark</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% darker then &nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of unfocused windows.</P>
	</DD>


<A NAME="options.Inactive1Light">
	</A><DT class="dense"><B>Inactive1Light</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% lighter then &nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of unfocused windows.</P>
	</DD>


<A NAME="options.Inactive2">
	</A><DT class="dense"><B>Inactive2</B></DT>
	<DD class="dense">
		<P class="dense">Secondary &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  used for unfocused &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  titlebar's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 . Should be used for unfocused sticky windows.</P>
	</DD>


<A NAME="options.Inactive2Dark">
	</A><DT class="dense"><B>Inactive2Dark</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% darker then &nbsp;<? local_doc_url("visualdoc.php","Inactive2","ColorScheme_options#options.Inactive2",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of sticky windows.</P>
	</DD>


<A NAME="options.Inactive2Light">
	</A><DT class="dense"><B>Inactive2Light</B></DT>
	<DD class="dense">
		<P class="dense">Should be 10% lighter then &nbsp;<? local_doc_url("visualdoc.php","Inactive2","ColorScheme_options#options.Inactive2",$srcunset,$subunset) ?>
 . Usefull for gradiented &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of sticky windows.</P>
	</DD>


<A NAME="options.InactiveText1">
	</A><DT class="dense"><B>InactiveText1</B></DT>
	<DD class="dense">
		<P class="dense">Color of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on unfocused titlebars. Should be highly contrasting with &nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.InactiveText2">
	</A><DT class="dense"><B>InactiveText2</B></DT>
	<DD class="dense">
		<P class="dense">Color of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on sticky titlebars. Should be highly contrasting with &nbsp;<? local_doc_url("visualdoc.php","Inactive2","ColorScheme_options#options.Inactive2",$srcunset,$subunset) ?>
 .</P>
	</DD>


</DL></P></LI>
</UL>
