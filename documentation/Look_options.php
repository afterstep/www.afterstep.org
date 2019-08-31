&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Look</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep look</FONT></td></tr></table><br><hr>
&nbsp;<? local_doc_url("visualdoc.php","Overview","Look",$srcunset,$subunset) ?>
 &nbsp;<b>Configuration</b>
<hr>
<UL>

<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.ButtonAlign">
	</A><DT class="dense"><B>ButtonAlign</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Look Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.ButtonBevel">
	</A><DT class="dense"><B>ButtonBevel</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around iconified windows.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Look Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>



<A NAME="options.ButtonIconSpacing">
	</A><DT class="dense"><B>ButtonIconSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>




<A NAME="options.ButtonSize">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ButtonSize","Look_options#options.ButtonSize",$srcunset,$subunset) ?>
  <I>width</I> <I>height</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the size of iconified windows.  Every iconified &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
		button will be exactly width pixels wide and height pixels high.
		This includes titles drawn at the  top,  but  not  the  separate
		title &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  created by &nbsp;<? local_doc_url("visualdoc.php","SeparateButtonTitle","Look_options#options.SeparateButtonTitle",$srcunset,$subunset) ?>
 .  If either width or
		height is less than one, that dimension will not be fixed.   The
		default is &nbsp;<? local_doc_url("visualdoc.php","ButtonSize","Look_options#options.ButtonSize",$srcunset,$subunset) ?>
  0 0</P>
	</DD>




<A NAME="options.CursorBack">
	</A><DT class="dense"><B>CursorBack</B></DT>
	<DD class="dense">
		<P class="dense">use with &nbsp;<? local_doc_url("visualdoc.php","CursorFore","Look_options#options.CursorFore",$srcunset,$subunset) ?>
  setting to adjust &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the mouse
		cursor.</P>
	</DD>


<A NAME="options.CursorFore">
	</A><DT class="dense"><B>CursorFore</B></DT>
	<DD class="dense">
		<P class="dense">use with &nbsp;<? local_doc_url("visualdoc.php","CursorBack","Look_options#options.CursorBack",$srcunset,$subunset) ?>
  setting to adjust &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the mouse
		cursor.</P>
	</DD>


<A NAME="options.DefaultFrame">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DefaultFrame","Look_options#options.DefaultFrame",$srcunset,$subunset) ?>
  <I>&quot;name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  to use as default for all windows.
		Note: &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you want a different framing for any &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 ,
		you need to specify it in the  database  file using the &nbsp;<? local_doc_url("visualdoc.php","Frame","ASDatabaseEntry#options.Frame",$srcunset,$subunset) ?>
 
		keyword.</P>
	</DD>


<A NAME="options.DefaultStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DefaultStyle","Look_options#options.DefaultStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to use when no style has been specifically
		defined for a given  situation. Note that &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  a style named
		&quot;default&quot; has been defined and &nbsp;<? local_doc_url("visualdoc.php","DefaultStyle","Look_options#options.DefaultStyle",$srcunset,$subunset) ?>
  has not, the
		&quot;default&quot; style will be used as the default.</P>
	</DD>


<A NAME="options.DeskBack">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DeskBack","Look_options#options.DeskBack",$srcunset,$subunset) ?>
  <I>desk# &quot;name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies  what &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to use for desk#. &quot;name&quot;
		can be either  image  filename  in  double-quotes,  or  the name
		of &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  definition (see &nbsp;<? local_doc_url("visualdoc.php","MyBackground","MyBackground#options.MyBackground",$srcunset,$subunset) ?>
  definition for details).</P>
	</DD>


<A NAME="options.DontAnimateBackground">
	</A><DT class="dense"><B>DontAnimateBackground</B></DT>
	<DD class="dense">
		<P class="dense">disables non-blocking root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  changing of
		full-screen backgrounds, that looks like slow animation. This is recommended
		for fast machines.</P>
	</DD>


<A NAME="options.DontDrawBackground">
	</A><DT class="dense"><B>DontDrawBackground</B></DT>
	<DD class="dense">
	    <P class="dense">If specified, will not display &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image, use this with xearth or xfishtank.</P> 
	</DD>


<A NAME="options.DrawMenuBorders">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DrawMenuBorders","Look_options#options.DrawMenuBorders",$srcunset,$subunset) ?>
  <I>0|1|2</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies  the  look  of the (start)menu.  Using 0 will draw the
		menu with no border on either the menu label or menu  item  por-
		tions.   Using  1  will draw a border around each menu label and
		around the menu item.  Using 2 will drawn a  border  around  the
		menu label and the entire menu item list.  The border colors are
		calculated from the &nbsp;<? local_doc_url("visualdoc.php","BackColor","MyStyle_options#options.BackColor",$srcunset,$subunset) ?>
  under  &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
   menu_item  of  the
		look.name.  The &quot;hilight&quot; (top &amp; left) &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is one half lighter
		than the &nbsp;<? local_doc_url("visualdoc.php","BackColor","MyStyle_options#options.BackColor",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  and the &quot;shadow&quot; (bottom  &amp;  right)  is
		one  half  darker  than  the  &nbsp;<? local_doc_url("visualdoc.php","BackColor","MyStyle_options#options.BackColor",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .  If the &nbsp;<? local_doc_url("visualdoc.php","BackColor","MyStyle_options#options.BackColor",$srcunset,$subunset) ?>
 
		&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is black, the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  grey is used.</P>
	</DD>


<A NAME="options.FWindowStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FWindowStyle","Look_options#options.FWindowStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to use for the focused &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  decorations.</P>
	</DD>





<A NAME="options.IconBox">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","IconBox","Look_options#options.IconBox",$srcunset,$subunset) ?>
  <I>left top right bottom</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a region of the screen in  which  to  place  iconified
		windows.  Up to four icon boxes can be defined. If an &nbsp;<? local_doc_url("visualdoc.php","IconBox","Look_options#options.IconBox",$srcunset,$subunset) ?>
  is
		provided, icons will automatically be placed in them, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
   possible.
		Otherwise, they will be placed in the upper left corner of
		the screen. Each time a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is  iconified,  a  &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
   place  is
		found for it, unless the icon has been moved manually. An available
		space is searched for from left to right, then top to  bottom.
		Icons  will  not  be  automatically placed on top of other
		icons, but they may be placed underneath application windows  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
		&nbsp;<? local_doc_url("visualdoc.php","StubbornIconPlacement","Feel#options.StubbornIconPlacement",$srcunset,$subunset) ?>
   has  not been specified. If left or right
		is negative, then AfterStep will &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  the screen width to it.  If
		top  or  bottom  is negative, then AfterStep will &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  the screen
		height to it. Note that -0 is not parsed as the right or  bottom
		pixel  on  the screen. &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  -1 instead. The &nbsp;<? local_doc_url("visualdoc.php","IconBox","Look_options#options.IconBox",$srcunset,$subunset) ?>
  will normally
		be filled from left to right, then top to bottom.   However,  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
		the right edge of the &nbsp;<? local_doc_url("visualdoc.php","IconBox","Look_options#options.IconBox",$srcunset,$subunset) ?>
  is closer to the right edge of the
		screen than the left edge of the &nbsp;<? local_doc_url("visualdoc.php","IconBox","Look_options#options.IconBox",$srcunset,$subunset) ?>
  is to the left edge  of
		the  screen,  then  it will be filled from right to left.  Similarly
		for top to bottom.  For example, &quot;2 2 -1 -1&quot;  will  result
		in  an  &nbsp;<? local_doc_url("visualdoc.php","IconBox","Look_options#options.IconBox",$srcunset,$subunset) ?>
   which  fills from right to left, then bottom to
		top.</P>
	</DD>



<A NAME="options.IconsGrowVertically">
	</A><DT class="dense"><B>IconsGrowVertically</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that the Iconbox(es) should be filled vertically first.</P>
	</DD>


<A NAME="options.KillBackgroundThreshold">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","KillBackgroundThreshold","Look_options#options.KillBackgroundThreshold",$srcunset,$subunset) ?>
  <I>size</I></B></DT>
	<DD class="dense">
		<P class="dense">Here size is the maximum number of pixels in root
		&nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image. If image is bigger that this - it will be
		unloaded from memory when desktop is switched and image is no
		longer in use. &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it on systems with low memory.</P>
	</DD>


<A NAME="options.MArrowPixmap">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MArrowPixmap","Look_options#options.MArrowPixmap",$srcunset,$subunset) ?>
  <I>pixmap_name</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a pixmap to use as  the  submenu  indicator  in  popup
		menus.</P>
	</DD>







<A NAME="options.MenuBalloonBorderHilite">
	</A><DT class="dense"><B>MenuBalloonBorderHilite</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Look Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.MenuBalloonCloseDelay">
	</A><DT class="dense"><B>MenuBalloonCloseDelay</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuBalloonDelay">
	</A><DT class="dense"><B>MenuBalloonDelay</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuBalloonStyle">
	</A><DT class="dense"><B>MenuBalloonStyle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuBalloonTextPaddingX">
	</A><DT class="dense"><B>MenuBalloonTextPaddingX</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuBalloonTextPaddingY">
	</A><DT class="dense"><B>MenuBalloonTextPaddingY</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuBalloonXOffset">
	</A><DT class="dense"><B>MenuBalloonXOffset</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuBalloonYOffset">
	</A><DT class="dense"><B>MenuBalloonYOffset</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuBalloons">
	</A><DT class="dense"><B>MenuBalloons</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>







<A NAME="options.MenuHiTitleStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuHiTitleStyle","Look_options#options.MenuHiTitleStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">AfterStep now allows you to specify a &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used
		for the titlebar of the currently hilighted menu. AS soon as the menu goes out
		of &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  its titlebar will be rendered using &nbsp;<? local_doc_url("visualdoc.php","MenuTitleStyle","Look_options#options.MenuTitleStyle",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.MenuHiliteCompositionMethod">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuHiliteCompositionMethod","Look_options#options.MenuHiliteCompositionMethod",$srcunset,$subunset) ?>
  <I>130-145</I></B></DT>
	<DD class="dense">
		<P class="dense">This is a funny feature - try it and see how you like different
                values :) If you use shades of grey for your item &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  - you
                may not see any difference for some of this values.</P>
	</DD>


<A NAME="options.MenuHiliteStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuHiliteStyle","Look_options#options.MenuHiliteStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to use for hilighted menu items.</P>
	</DD>


<A NAME="options.MenuItemCompositionMethod">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuItemCompositionMethod","Look_options#options.MenuItemCompositionMethod",$srcunset,$subunset) ?>
  <I>130-145</I></B></DT>
	<DD class="dense">
		<P class="dense">This is a funny feature - try it and see how you like different
                values :) If you use shades of grey for your item &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  - you
                may not see any difference for some of this values.</P>
	</DD>


<A NAME="options.MenuItemStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuItemStyle","Look_options#options.MenuItemStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to use for menu items.</P>
	</DD>


<A NAME="options.MenuMiniPixmaps">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuMiniPixmaps","Look_options#options.MenuMiniPixmaps",$srcunset,$subunset) ?>
  <I>minis</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies  whether  mini pixmaps should be included in menus. If
		minis is 0, mini pixmaps are not included. If minis is  1,  mini
		pixmaps  are  included. Note that mini pixmaps will not be added
		to menus until the next time menus are updated. Mini pixmaps can
		cause AS to take much longer to load over a network.</P>
	</DD>


<A NAME="options.MenuNoBalloons">
	</A><DT class="dense"><B>MenuNoBalloons</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MenuPinOn">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuPinOn","Look_options#options.MenuPinOn",$srcunset,$subunset) ?>
  <I>pixmap_name</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MenuPinOn","Look_options#options.MenuPinOn",$srcunset,$subunset) ?>
  is deprecated and AfterStep will reinterpret
                it, and it will create &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  using last unused
                &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  context. It will then assign &nbsp;<? local_doc_url("visualdoc.php","PinMenu","Functions#options.PinMenu",$srcunset,$subunset) ?>
  function to
                this button. This button will only be shown on titlebars
                belonging to menu windows. This button behaves just like any
                other &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  - for example you can use &nbsp;<? local_doc_url("visualdoc.php","TitleButtonOrder","Look_options#options.TitleButtonOrder",$srcunset,$subunset) ?>
  to
                specify where it should go. Problem is you may not know what
                context AfterStep had choosen for it. The better way would be
                to explicitely define &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
 , and assign &nbsp;<? local_doc_url("visualdoc.php","PinMenu","Functions#options.PinMenu",$srcunset,$subunset) ?>
  to it in
                your feel.</P>
	</DD>




<A NAME="options.MenuStippleCompositionMethod">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuStippleCompositionMethod","Look_options#options.MenuStippleCompositionMethod",$srcunset,$subunset) ?>
  <I>130-145</I></B></DT>
	<DD class="dense">
		<P class="dense">This is a funny feature - try it and see how you like different
                values :) If you use shades of grey for your item &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  - you
                may not see any difference for some of this values.</P>
	</DD>


<A NAME="options.MenuStippleStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuStippleStyle","Look_options#options.MenuStippleStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to use for stippled menu items.</P>
	</DD>


<A NAME="options.MenuSubItemStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuSubItemStyle","Look_options#options.MenuSubItemStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">AfterStep now includes this &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  feature: when you select
		an item from the menu - this item will be marked as recently used,
		and next time the menu is opened it will show all the recently used
		items from its SUBMENU. For exmaple you do :
</P><P class="dense">
		Menu-&gt;Applications-&gt;rxvt
</P><P class="dense">
		Next time you &nbsp;<? local_doc_url("visualdoc.php","open","WharfSounds#options.open_folder",$srcunset,$subunset) ?>
  the Main menu, it will display rxvt just under
		the &quot;Applications&quot; item with some offset.
</P><P class="dense">
		It looks much better when this subitems are shown with
		different (smaller ) font. To achive that - specify a &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
 
		with asmaller font using the &nbsp;<? local_doc_url("visualdoc.php","MenuSubItemStyle","Look_options#options.MenuSubItemStyle",$srcunset,$subunset) ?>
  option in your look
		file.
</P><P class="dense">
		This feature could be turned off or altered by using the
		&nbsp;<? local_doc_url("visualdoc.php","RecentSubmenuItems","Feel#options.RecentSubmenuItems",$srcunset,$subunset) ?>
  option in your feel file: &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  it to 0 to
		disable this feature.</P>
	</DD>



<A NAME="options.MenuTitleStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MenuTitleStyle","Look_options#options.MenuTitleStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to use for menu titles.</P>
	</DD>


<A NAME="options.MinipixmapSize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MinipixmapSize","Look_options#options.MinipixmapSize",$srcunset,$subunset) ?>
  <I>x y</I></B></DT>
	<DD class="dense">
		<P class="dense">Changes the default maximum &nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
  size (24x24) to a user-specified value.</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","MenuMiniPixmaps","Look_options#options.MenuMiniPixmaps",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.MyBackground">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MyBackground","MyBackground#options.MyBackground",$srcunset,$subunset) ?>
  <I>&quot;background_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  definition. Please note that only desktops can have different backgrounds
		- the viewports inside of a desktop are limited to the same &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","MyBackground definition","MyBackground",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.MyFrame">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  <I>&quot;frame_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a frame definition (window decor in general)  and is covered in the &nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  section of the documentation.
		Please also note that &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  decor can be defined on a per &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  basis &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  needed in the database.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","MyFrame definition","MyFrame",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.MyStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  definition (which covers &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  and/or gradients and/or &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  pixmaps),
		which can later be reused and is covered in the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  section of the documentation.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","MyStyle definition","MyStyle",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.ResizeMoveGeometry">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ResizeMoveGeometry","Look_options#options.ResizeMoveGeometry",$srcunset,$subunset) ?>
  <I>geom</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the location of the resize/move &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . If this option
		is not specified, the move/resize &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be centered on the
		screen.  geom may be any one of the following:</P>
		<PRE>
		++: upper-left corner
		-+: upper-right corner
		+-: lower-left corner
		--: lower-right corner
		</PRE>
	</DD>


<A NAME="options.RubberBand">
	</A><DT class="dense"><B>RubberBand</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","RubberBand","Look_options#options.RubberBand",$srcunset,$subunset) ?>
  type to use  when  moving  or  resizing
		non-opaque windows.  There are 3 styles:

		0: the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is represented as a number of rectangles
		1: one rectangle the size of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
		2: one crossed-out rectangle the size of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
	</DD>




<A NAME="options.SWindowStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SWindowStyle","Look_options#options.SWindowStyle",$srcunset,$subunset) ?>
  <I>&quot;style_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to use for the sticky &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
   decorations.</P>
	</DD>


<A NAME="options.SeparateButtonTitle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SeparateButtonTitle","Look_options#options.SeparateButtonTitle",$srcunset,$subunset) ?>
  <I>0|1</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies  where  iconified  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
   titles should be drawn.  If
              it is 0, the title will be drawn at the top of the icon.   If
              it  is 1, the title will be drawn in a separate &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  at the
              below the icon.  The default value  is 1.</P>
	</DD>


<A NAME="options.StartMenuSortMode">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","StartMenuSortMode","Look_options#options.StartMenuSortMode",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Sort start menu entries by...
		1=alphabetical order, 0=date</P>
	</DD>






<A NAME="options.SupportedHints">
	</A><DT class="dense"><B>SupportedHints</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Supported hints list","SupportedHints",$srcunset,$subunset) ?> for further details.</P>
	</DD>




<A NAME="options.TitleButton">
  </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  <I>button unclicked_image clicked_image</I></B></DT>
  <DD class="dense">
<P class="dense"><I>button</I> defines the button location number from 1 to 10 in the following
layout: [1] [3] [5] [7] [9] (title) [10] [8] [6] [4] [2].</P>

<P class="dense"><I>unclicked_image</I> is the bitmap or pixmap to be used during the static
state of the associated buton location.</P>

<P class="dense"><I>clicked_image</I> is the bitmap or pixmap to be used during a clicked
state of the associated button location.</P>
	</DD>


<A NAME="options.TitleButtonBalloonBorderHilite">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonBalloonBorderHilite","Look_options#options.TitleButtonBalloonBorderHilite",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","None","Align#options.None",$srcunset,$subunset) ?>
 |[&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Extra","Bevel#options.Extra",$srcunset,$subunset) ?>
 ,NoOutline</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around balloons - replaces &nbsp;<? local_doc_url("visualdoc.php","BorderWidth","ASDatabaseEntry#options.BorderWidth",$srcunset,$subunset) ?>
  setting.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleButtonBalloonCloseDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonBalloonCloseDelay","Look_options#options.TitleButtonBalloonCloseDelay",$srcunset,$subunset) ?>
  <I>milliseconds</I></B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleButtonBalloonDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonBalloonDelay","Look_options#options.TitleButtonBalloonDelay",$srcunset,$subunset) ?>
  <I>milliseconds</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines delay between when balloon is shown and before it disapears.</P>
	</DD>


<A NAME="options.TitleButtonBalloonStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonBalloonStyle","Look_options#options.TitleButtonBalloonStyle",$srcunset,$subunset) ?>
  <I>&quot;mystyle_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used to draw balloon. Note that balloons could be
             shaped (BackPixmap 125 and 126 ).</P>
	</DD>


<A NAME="options.TitleButtonBalloonTextPaddingX">
	</A><DT class="dense"><B>TitleButtonBalloonTextPaddingX</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleButtonBalloonTextPaddingY">
	</A><DT class="dense"><B>TitleButtonBalloonTextPaddingY</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleButtonBalloonXOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonBalloonXOffset","Look_options#options.TitleButtonBalloonXOffset",$srcunset,$subunset) ?>
  <I>offset</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the horizontal offset (in pixels) to use when displaying balloons.</P>
	</DD>


<A NAME="options.TitleButtonBalloonYOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonBalloonYOffset","Look_options#options.TitleButtonBalloonYOffset",$srcunset,$subunset) ?>
  <I>offset</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the horizontal offset (in pixels) to use when displaying balloons.</P>
	</DD>


<A NAME="options.TitleButtonBalloons">
	</A><DT class="dense"><B>TitleButtonBalloons</B></DT>
	<DD class="dense">
		<P class="dense">Turns on displaying of balloons for buttons in the titlebar.</P>
	</DD>


<A NAME="options.TitleButtonNoBalloons">
	</A><DT class="dense"><B>TitleButtonNoBalloons</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleButtonOrder">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonOrder","Look_options#options.TitleButtonOrder",$srcunset,$subunset) ?>
  <I>context_sequence</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines layout of the titlebar. Default is 13579t08642.</P>
	</DD>


<A NAME="options.TitleButtonSpacing">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonSpacing","Look_options#options.TitleButtonSpacing",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies  how  much  space  (in pixels) to put between each button of the titlebar.</P>
	</DD>


<A NAME="options.TitleButtonSpacingLeft">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonSpacingLeft","Look_options#options.TitleButtonSpacingLeft",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense"> Specifies  how  much  space  (in pixels) to put between left buttons and titlebar.</P>
	</DD>


<A NAME="options.TitleButtonSpacingRight">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonSpacingRight","Look_options#options.TitleButtonSpacingRight",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense"> Specifies  how  much  space  (in pixels) to put between titlebar and right buttons.</P>
	</DD>


<A NAME="options.TitleButtonStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonStyle","Look_options#options.TitleButtonStyle",$srcunset,$subunset) ?>
  <I>num</I></B></DT>
	<DD class="dense">
		<P class="dense"> Specifies how much space is put between leftmost  and  rightmost
              titlebar  buttons,  and  the edges of the titlebar. If num is 0,
              there is a two pixel buffer the buttons and the edge. If num  is
              1, there is no space between the buttons and the edge. If num is 2 , then
                distance between titlebar edge and titlebuttons is determined
                by &nbsp;<? local_doc_url("visualdoc.php","TitleButtonXOffset","Look_options#options.TitleButtonXOffset",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","TitleButtonYOffset","Look_options#options.TitleButtonYOffset",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleButtonXOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonXOffset","Look_options#options.TitleButtonXOffset",$srcunset,$subunset) ?>
  <I>x_offset_val</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines the distance of the titlebar buttons from the edge of the titlebar.</P>
	</DD>


<A NAME="options.TitleButtonXOffsetLeft">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonXOffsetLeft","Look_options#options.TitleButtonXOffsetLeft",$srcunset,$subunset) ?>
  <I>x_offset_val</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines the distance of the left block of titlebar buttons from the side of the titlebar.</P>
	</DD>


<A NAME="options.TitleButtonXOffsetRight">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonXOffsetRight","Look_options#options.TitleButtonXOffsetRight",$srcunset,$subunset) ?>
  <I>x_offset_val</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines the distance of the right block of titlebar buttons from the side of the titlebar.</P>
	</DD>


<A NAME="options.TitleButtonYOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonYOffset","Look_options#options.TitleButtonYOffset",$srcunset,$subunset) ?>
  <I>y_offset_val</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines the distance of the titlebar buttons from the top/bottom of the titlebar</P>
	</DD>


<A NAME="options.TitleButtonYOffsetLeft">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonYOffsetLeft","Look_options#options.TitleButtonYOffsetLeft",$srcunset,$subunset) ?>
  <I>y_offset_val</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines the distance of the left block of titlebar buttons from the top/bottom of the titlebar</P>
	</DD>


<A NAME="options.TitleButtonYOffsetRight">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleButtonYOffsetRight","Look_options#options.TitleButtonYOffsetRight",$srcunset,$subunset) ?>
  <I>y_offset_val</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines the distance of the right block of titlebar buttons from the top/bottom of the titlebar</P>
	</DD>



<A NAME="options.TitleTextAlign">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleTextAlign","Look_options#options.TitleTextAlign",$srcunset,$subunset) ?>
  <I>align</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines how titlebar &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  should be aligned - &nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
  or &nbsp;<? local_doc_url("visualdoc.php","Center","Align#options.Center",$srcunset,$subunset) ?>
 .</P>
	</DD>




<A NAME="options.TitlebarNoPush">
	</A><DT class="dense"><B>TitlebarNoPush</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  that  the titlebar should not to appear to be &quot;pushed
		in&quot; when clicked with a mouse button. This is useful  to  reduce
		video  strain  or  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
   textured  pixmaps  that  do not look good
		&quot;pushed in&quot; are used.</P>
	</DD>




<A NAME="options.UWindowStyle">
	</A><DT class="dense"><B>UWindowStyle</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  the  &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
   to use for the unfocused &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  decorations.</P>
	</DD>



</DL></P></LI>
</UL>
