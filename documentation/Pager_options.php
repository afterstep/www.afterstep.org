&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Pager</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for virtual desktop navigation</FONT></td></tr></table><br><hr>
&nbsp;<? local_doc_url("visualdoc.php","Overview","Pager",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Base options","Pager_base_config",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","MyStyles","Pager_mystyles",$srcunset,$subunset) ?>
 &nbsp;<b>Configuration</b>
<hr>
<UL>

<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.ActiveDeskBevel">
	</A><DT class="dense"><B>ActiveDeskBevel</B></DT>
	<DD class="dense">
		<P class="dense">Defines how border around Pager desk representation of the current desk should be drawn.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
		<P class="dense"> <B>Example : </B> <div class="container">
		<PRE>
*PagerActiveDeskBevel &nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
    # draws thick bevelled lines at the top 
                                 # and left of the desk</PRE>		       
		</div><br></p>
	</DD>


<A NAME="options.Align">
	</A><DT class="dense"><B>Align</B></DT>
	<DD class="dense">
		<P class="dense">Defines how Pager's desk title should be aligned on desk titlebar.
		See <? local_doc_url("visualdoc.php","Align options","Align",$srcunset,$subunset) ?> for further details.</P>
		<P class="dense"> <B>Example : </B> <div class="container">
		<PRE>
*PagerAlign  &nbsp;<? local_doc_url("visualdoc.php","Center","Align#options.Center",$srcunset,$subunset) ?>
     # places title in the center both
                       # vertically and horizontally </PRE>
		</div><br></p>
	</DD>


<A NAME="options.BalloonBorderHilite">
	</A><DT class="dense"><B>BalloonBorderHilite</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around balloons - replaces the
		&nbsp;<? local_doc_url("visualdoc.php","BorderWidth","ASDatabaseEntry#options.BorderWidth",$srcunset,$subunset) ?>
  setting.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.BalloonCloseDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonCloseDelay","Pager_options#options.BalloonCloseDelay",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the period in milliseconds to delay the disappearance of the balloon when leaving  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  with the mouse.</P>
	</DD>


<A NAME="options.BalloonDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonDelay","Pager_options#options.BalloonDelay",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the period in milliseconds to delay the appearance of theballoon.</P>
	</DD>


<A NAME="options.BalloonStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonStyle","Pager_options#options.BalloonStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used to draw balloon. Note that balloons could be
		shaped (BackPixmap 125 and 126).</P>
	</DD>


<A NAME="options.BalloonTextPaddingX">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonTextPaddingX","Pager_options#options.BalloonTextPaddingX",$srcunset,$subunset) ?>
  size</B></DT>
	<DD class="dense">
		<P class="dense">width of the border around the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  in balloons.</P>
	</DD>


<A NAME="options.BalloonTextPaddingY">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonTextPaddingY","Pager_options#options.BalloonTextPaddingY",$srcunset,$subunset) ?>
  size</B></DT>
	<DD class="dense">
		<P class="dense">height of the border around the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  in balloons.</P>
	</DD>


<A NAME="options.BalloonXOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonXOffset","Pager_options#options.BalloonXOffset",$srcunset,$subunset) ?>
  <I>offset</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the horizontal offset (in pixels) to use when displaying balloons.
</P>
	</DD>


<A NAME="options.BalloonYOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonYOffset","Pager_options#options.BalloonYOffset",$srcunset,$subunset) ?>
  <I>offset</I></B></DT>
	<DD class="dense">
		<P class="dense">The balloon &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is positioned  to  be  horizontally  centered
		against  the  application  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  it is describing. The vertical
		position may be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  as an offset. Negative  offsets  of  -N  are
		placed  N  pixels above the pager &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , positive offsets of +N
		are placed N pixels below. &nbsp;<? local_doc_url("visualdoc.php","Defaults","WinList#options.Defaults",$srcunset,$subunset) ?>
  to +2.</P>
	</DD>


<A NAME="options.Balloons">
	</A><DT class="dense"><B>Balloons</B></DT>
	<DD class="dense">
		<P class="dense">Turns on the balloon feature. A &quot;balloon&quot; is displayed showing
		the name of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  the pointer is resting on in the <B>Pager</B>.
		Currently only the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's icon name is shown. Note that balloons are
		not shown for the iconified pager. The balloon &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  are
		configured with the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  &quot;*PagerBalloon&quot;.</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  definition for details.</P>
	</DD>


<A NAME="options.Columns">
	</A><DT class="dense"><B>Columns</B></DT>
	<DD class="dense">
		<P class="dense">Tells afterstep how many columns of desks to use when
		laying out the pager &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to 1 for vertical Pager and
		define  PagerRows.</P>
	</DD>


<A NAME="options.Decoration">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Decoration","Pager_options#options.Decoration",$srcunset,$subunset) ?>
  <I>param1[,param2[,...]]</I></B></DT>
	<DD class="dense">
		<P class="dense">Allows you to decorate your pager to your liking.
		The following parameters can be specified : &nbsp;<? local_doc_url("visualdoc.php","NoDeskLabel","PagerDecorations#options.NoDeskLabel",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","NoPageSeparator","PagerDecorations#options.NoPageSeparator",$srcunset,$subunset) ?>
 ,
		&nbsp;<? local_doc_url("visualdoc.php","NoSelection","PagerDecorations#options.NoSelection",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","SelectionColor","PagerDecorations#options.SelectionColor",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","GridColor","PagerDecorations#options.GridColor",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","DeskBorderWidth","PagerDecorations#options.DeskBorderWidth",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","DeskBorderColor","PagerDecorations#options.DeskBorderColor",$srcunset,$subunset) ?>
 ,
		&nbsp;<? local_doc_url("visualdoc.php","LabelBelowDesk","PagerDecorations#options.LabelBelowDesk",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","HideInactiveLabels","PagerDecorations#options.HideInactiveLabels",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","VerticalLabel","PagerDecorations#options.VerticalLabel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Pager Decoration options","PagerDecorations",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.DontDrawBg">
	</A><DT class="dense"><B>DontDrawBg</B></DT>
	<DD class="dense">
		<P class="dense">If specified, will not display &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image, use  this  with
		xearth or xfishtank.</P>
		<P class="dense">Please note that this is deprecated, use &nbsp;<? local_doc_url("visualdoc.php","DontDrawBackground","Look_options#options.DontDrawBackground",$srcunset,$subunset) ?>
  (Look option) instead.</P>
	</DD>


<A NAME="options.Geometry">
	</A><DT class="dense"><B>Geometry</B></DT>
	<DD class="dense">
		<P class="dense">Completely or partially specifies the pager &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  location and
		geometry,  in  standard  X11  notation.  In order to maintain an
		undistorted aspect ratio, you might want to leave out either the
		width or height dimension of the geometry specification.</P>
	</DD>


<A NAME="options.IconGeometry">
	</A><DT class="dense"><B>IconGeometry</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  a  size  (optional)  and  location (optional) for the
		pager's icon &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . Since there is no easy  way  for  Pager  to
		determine  the height of the icon's label, you will have to make
		an allowance for the icon  label height when using  negative
		y-coordinates  in the icon location specification (used to specify
		a location relative to the bottom instead  of  the  top  of  the
		screen).</P>
	</DD>


<A NAME="options.InActiveDeskBevel">
	</A><DT class="dense"><B>InActiveDeskBevel</B></DT>
	<DD class="dense">
		<P class="dense">Defines how border around Pager desk representation of the inactive desk(s) should be drawn.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.Label">
	</A><DT class="dense"><B>Label</B></DT>
	<DD class="dense">
		<P class="dense">Assigns the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label to desk desk in the pager &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .  Useful
		for assigning symbolic names to desktops</P>
	</DD>


<A NAME="options.MyStyle">
	</A><DT class="dense"><B>MyStyle</B></DT>
	<DD class="dense">
		<P class="dense">Styles for different Pager properties are called from the file &quot;pager&quot;, and the associated &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  definitions are located in a selected Look file. Fonts, foreground and &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  colors, gradients, pixmaps, and transparencies can be specified for Pager's components.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","MyStyle definition","MyStyle",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.NoBalloons">
	</A><DT class="dense"><B>NoBalloons</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Rows">
	</A><DT class="dense"><B>Rows</B></DT>
	<DD class="dense">
		<P class="dense">Tells  afterstep  how  many rows of desks to use when laying out
		the pager &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to  1  for  horizontal  Pager  and  define
		PagerColumns.</P>
	</DD>


<A NAME="options.ShadeButton">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ShadeButton","Pager_options#options.ShadeButton",$srcunset,$subunset) ?>
 
	<I> &quot;unpressed_image&quot;</I>
	<I>[&quot;pressed_image&quot;]</I>
	</B></DT>
	<DD class="dense">
		<P class="dense">You should be able to &quot;&nbsp;<? local_doc_url("visualdoc.php","shade","AudioEvents#options.shade",$srcunset,$subunset) ?>
 &quot; row or column of desks by pressing
		special &nbsp;<? local_doc_url("visualdoc.php","Shade","Functions#options.Shade",$srcunset,$subunset) ?>
  button on desk's title. Define images to be used for it
		with this option. If no images are defined - then there will be no
		button and feature will be disabled.</P>
	</DD>


<A NAME="options.SmallFont">
	</A><DT class="dense"><B>SmallFont</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  a font to use to label the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  names in the pager.
		It overrides font specified in  Focused/Unfocused/Sticky  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
		style  in look file. It also displays &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  -
		which can be usefull &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  is specified in &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  style.
		&nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  labels seem to be fairly useless for desktop scales of 32
		or greater.</P>
	</DD>


<A NAME="options.StartIconic">
	</A><DT class="dense"><B>StartIconic</B></DT>
	<DD class="dense">
		<P class="dense">Causes the pager to start iconified.</P>
	</DD>


<A NAME="options.StickyIcons">
	</A><DT class="dense"><B>StickyIcons</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that icons should &nbsp;<? local_doc_url("visualdoc.php","stick","AudioEvents#options.stick",$srcunset,$subunset) ?>
  to the screen's glass
		and follow it from desk/view to desk/view.</P>
	</DD>


<A NAME="options.Style">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
  <I>desk style</I></B></DT>
	<DD class="dense">
		<P class="dense">Sets  the  style  to be used for the desk desk representation in
		the Pager. Where style can be the name of any  style  definition
		in  the  look  file,  and  desk is a number coresponding  to the
		desktop number: 0,1,2,3,N.... &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you want  to  specify  a
		different  style  for  Pager  &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  other than the default;
		which is the scaled down *PagerDesktopImage.</P>
	</DD>


</DL></P></LI>
</UL>
