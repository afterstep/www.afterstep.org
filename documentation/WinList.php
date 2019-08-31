&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:WinList</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module displaying list of opened windows</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>


<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>WinList</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
</LI>
</UL>

<A NAME="overview"><UL>
</A><P class="dense">The <B>WinList</B> &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  provides a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  list made up of buttons, each
corresponding to a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  that AfterStep is managing.  Clicking on the
buttons with any of the three mouse buttons will either do a default
action or can be user configured by editing the <I>winlist</I> file.</P>
</UL>



<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Action">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Action","WinList#options.Action",$srcunset,$subunset) ?>
  <I>1|2|3|4|5  action</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines what function should be executed on the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
		when specific mouse button is clicked over &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's button.
		</P>
	</DD>


<A NAME="options.Align">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 ,Bottom</I></B></DT>
	<DD class="dense">
		<P class="dense">Sets align of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label in WinList buttons.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.AllowCollides">
	</A><DT class="dense"><B>AllowCollides</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
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
		<P class="dense">Determines the delay in ms between when balloon is shown and
		before it disapears.</P>
	</DD>


<A NAME="options.BalloonDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonDelay","Pager_options#options.BalloonDelay",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the period in milliseconds to delay the appearance of the balloon.</P>
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
		<P class="dense">Specifies the horizontal offset (in pixels) to use when displaying balloons.</P>
	</DD>


<A NAME="options.BalloonYOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonYOffset","Pager_options#options.BalloonYOffset",$srcunset,$subunset) ?>
  <I>offset</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the vertical offset (in pixels) to use when displaying balloons.</P>
	</DD>


<A NAME="options.Balloons">
	</A><DT class="dense"><B>Balloons</B></DT>
	<DD class="dense">
		<P class="dense">Turns  on  the balloon feature. A &quot;balloon&quot; is displayed showing
		the name of the button the pointer is resting on in the WinList.
		The  balloon &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  are configured with the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
 
		&quot;*WinListBalloon&quot;</P>
	</DD>


<A NAME="options.Bevel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","None","Align#options.None",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 , NoOutline</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines 3D &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  of WinList buttons.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CompositionMethod">
	</A><DT class="dense"><B>CompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">Sets composition method to be used to draw WinList buttons. Default is
		&nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 -blending. Valid values are in range 130-145.</P>
	</DD>


<A NAME="options.Defaults">
	</A><DT class="dense"><B>Defaults</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Module:WinList_defaults","WinList",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.FBevel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FBevel","WinList#options.FBevel",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","None","Align#options.None",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 , NoOutline</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines 3D &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  of WinList buttons for windows that are in
        	focused state.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.FCompositionMethod">
	</A><DT class="dense"><B>FCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","CompositionMethod","Wharf#options.CompositionMethod",$srcunset,$subunset) ?>
  for WinList buttons representing
		focused windows.</P>
	</DD>


<A NAME="options.FillRowsFirst">
	</A><DT class="dense"><B>FillRowsFirst</B></DT>
	<DD class="dense">
		<P class="dense">Flag, indicating that WinList should should &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  row
		when &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  button	is added, and only &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","MaxRows","WinList#options.MaxRows",$srcunset,$subunset) ?>
  or max height
		is reached - &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  column. By Default WinLIst adds columns
		first.</P>
	</DD>


<A NAME="options.FocusedBevel">
	</A><DT class="dense"><B>FocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
  used when defining the &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  appearance for the active &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.FocusedStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FocusedStyle","WinList#options.FocusedStyle",$srcunset,$subunset) ?>
  <I>&quot;style&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used for rendering of &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  buttons for windows thar are
        in focused state.</P>
	</DD>


<A NAME="options.Geometry">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Geometry","Pager_options#options.Geometry",$srcunset,$subunset) ?>
  <I>+x+y</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the location of the  WinList  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .
		Note that only position can be specified - size is defined by
		other parameters and number of buttons.</P>
	</DD>


<A NAME="options.HSpacing">
	</A><DT class="dense"><B>HSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.IconAlign">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","IconAlign","WinList#options.IconAlign",$srcunset,$subunset) ?>
  align[,align[,...]]</B></DT>
	<DD class="dense">
		<P class="dense">Alignment of the icon</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Look Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.IconLocation">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","IconLocation","WinList#options.IconLocation",$srcunset,$subunset) ?>
  location</B></DT>
	<DD class="dense">
		<P class="dense">Determines where icon is placed in relation to &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label. Numbers from 1 to 9. 
		On keypad 5 represent the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label, so other numbers represent location of the icon 
		to be the same as location of the key in relation to 5. Say location 6 is to the right of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label.</P>
	</DD>


<A NAME="options.IconSize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","IconSize","WinList#options.IconSize",$srcunset,$subunset) ?>
  WxH</B></DT>
	<DD class="dense">
		<P class="dense">Setxs the size icon should be scaled to.</P>
	</DD>


<A NAME="options.MaxColWidth">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxColWidth","WinList#options.MaxColWidth",$srcunset,$subunset) ?>
  <I>width</I></B></DT>
	<DD class="dense">
		<P class="dense">Maximum width of the column.
		Older *WinListMaxWidth is still supported for compatibility, but
		depreciated.</P>
	</DD>


<A NAME="options.MaxColumns">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxColumns","WinList#options.MaxColumns",$srcunset,$subunset) ?>
  <I>count</I></B></DT>
	<DD class="dense">
		<P class="dense">Maximum number of columns in WinList.</P>
	</DD>


<A NAME="options.MaxRows">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxRows","WinList#options.MaxRows",$srcunset,$subunset) ?>
  <I>count</I></B></DT>
	<DD class="dense">
		<P class="dense">Maximum number of rows in WinList.</P>
	</DD>


<A NAME="options.MaxSize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxSize","WinList#options.MaxSize",$srcunset,$subunset) ?>
  <I>WxH</I></B></DT>
	<DD class="dense">
		<P class="dense">Maximum size of the WinList. WinList will not grow larger then
		this size, when number of buttons increase, but instead it will shrink
		buttons to fit in allowed space. You can &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  only Width, only
		Height or both. extra rows/columns could be added when max size is
		reached in one direction.</P>
	</DD>



<A NAME="options.MinColWidth">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MinColWidth","WinList#options.MinColWidth",$srcunset,$subunset) ?>
  <I>width</I></B></DT>
	<DD class="dense">
		<P class="dense">Minimum width of the column</P>
	</DD>


<A NAME="options.MinColWidth">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MinColWidth","WinList#options.MinColWidth",$srcunset,$subunset) ?>
  <I>width</I></B></DT>
	<DD class="dense">
		<P class="dense">Minimum width of the column</P>
	</DD>


<A NAME="options.MinSize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MinSize","WinList#options.MinSize",$srcunset,$subunset) ?>
  <I>WxH</I></B></DT>
	<DD class="dense">
		<P class="dense">Minimum size of the WinList. WinList will not shrink smaller then this
		size, when number of buttons is small, but instead it will enlarge
		buttons to fill extra space. You can &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  only Width, only Height or
		both.</P>
	</DD>


<A NAME="options.MyStyle">
	</A><DT class="dense"><B>MyStyle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Look MyStyle definition","MyStyle",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.NoBalloons">
	</A><DT class="dense"><B>NoBalloons</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.NoCollides">
	</A><DT class="dense"><B>NoCollides</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.NoCollidesSpacing">
	</A><DT class="dense"><B>NoCollidesSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>



<A NAME="options.SBevel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SBevel","WinList#options.SBevel",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","None","Align#options.None",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 , NoOutline</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines 3D &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  of WinList buttons for windows that are in
        	sticky state.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SCompositionMethod">
	</A><DT class="dense"><B>SCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","CompositionMethod","Wharf#options.CompositionMethod",$srcunset,$subunset) ?>
  for WinList buttons representing sticky
		windows.</P>
	</DD>


<A NAME="options.ScaleIconToTextHeight">
	</A><DT class="dense"><B>ScaleIconToTextHeight</B></DT>
	<DD class="dense">
		<P class="dense">If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  will cause icon to be scaled to the height of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  label.</P>
	</DD>


<A NAME="options.ShapeToContents">
	</A><DT class="dense"><B>ShapeToContents</B></DT>
	<DD class="dense">
		<P class="dense">When Shaped extensions are available - it will cause
		WinList to have non-rectangular shape to wrap around
		columns/rows of buttons.</P>
	</DD>


<A NAME="options.ShowHints">
	</A><DT class="dense"><B>ShowHints</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Balloon Contents flags","Balloon Contents",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.ShowIcon">
	</A><DT class="dense"><B>ShowIcon</B></DT>
	<DD class="dense">
		<P class="dense">Will make WinList show an icon next to the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  name.</P>
	</DD>


<A NAME="options.Spacing">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Spacing","WinList#options.Spacing",$srcunset,$subunset) ?>
  <I>pixels</I></B></DT>
	<DD class="dense">
		<P class="dense">Based-on the WinList font height, this function adds the specified number of pixels above and below the displayed &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . Note that this function will also increase the size of the icon images in WinList.</P>
	</DD>


<A NAME="options.StickyBevel">
	</A><DT class="dense"><B>StickyBevel</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
  used when defining the &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  appearance for Sticky windows (those windows tagged as Sticky that appear on all views and desktops).</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.StickyStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","StickyStyle","ASDatabaseEntry#options.StickyStyle",$srcunset,$subunset) ?>
  <I></I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used for rendering of &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  buttons for windows thar are
        in sticky state.</P>
	</DD>


<A NAME="options.UBevel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","UBevel","WinList#options.UBevel",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","None","Align#options.None",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 , NoOutline</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines 3D &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  of WinList buttons for windows that are in
        	unfocused state.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.UCompositionMethod">
	</A><DT class="dense"><B>UCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","CompositionMethod","Wharf#options.CompositionMethod",$srcunset,$subunset) ?>
  for WinList buttons representing
		unfocused windows.</P>
	</DD>


<A NAME="options.UnfocusedBevel">
	</A><DT class="dense"><B>UnfocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
  used when defining the &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  appearance inactive active windows.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.UnfocusedStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","UnfocusedStyle","WinList#options.UnfocusedStyle",$srcunset,$subunset) ?>
  <I>&quot;style&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used for rendering of &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  buttons for windows thar are
        in focused state.</P>
	</DD>


<A NAME="options.UrgentStyle">
	</A><DT class="dense"><B>UrgentStyle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.UseName">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","UseName","WinList#options.UseName",$srcunset,$subunset) ?>
  <I>0|1|2|3|5</I></B></DT>
	<DD class="dense">
		<P class="dense">Tells WinList what type of name to use for displaying in
		WinList label.</P>
		<P class="dense"># 0 - &nbsp;<? local_doc_url("visualdoc.php","Name","Balloon Contents#options.Name",$srcunset,$subunset) ?>
 , 1 - icon, 2 - res_name, 3 - res_class, 5 - display only icon but no &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  in winlist
		</P>
	</DD>


<A NAME="options.UseSkipList">
	</A><DT class="dense"><B>UseSkipList</B></DT>
	<DD class="dense">
		<P class="dense">Obey SkipWinList flags &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  by applications or database &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.VSpacing">
	</A><DT class="dense"><B>VSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


</DL></P></LI>
