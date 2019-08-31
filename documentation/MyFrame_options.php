&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Look MyFrame</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines how AfterStep should construct window's frame</FONT></td></tr></table><br><hr>
&nbsp;<? local_doc_url("visualdoc.php","Overview","MyFrame",$srcunset,$subunset) ?>
 &nbsp;<b>Configuration</b>
<hr>
<UL>

<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.AllowBorder">
	</A><DT class="dense"><B>AllowBorder</B></DT>
	<DD class="dense">
		<P class="dense">Denotes that beveled borders should be drawn around
		the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame and titlebar. This is on by default, so this
		option is only usefull in combination with inheriting previously defined
		&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frames.
		</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","Inherit","MyFrame_options#options.Inherit",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  for details.</P>
	</DD>


<A NAME="options.CondenseTitlebar">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CondenseTitlebar","MyFrame_options#options.CondenseTitlebar",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 |Center</I></B></DT>
	<DD class="dense">
		<P class="dense">Allows titlebars to be smaller then the size of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .
		The paramater defines the Alignment of the whole titlebar.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.Corner">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Corner","MyFrame_options#options.Corner",$srcunset,$subunset) ?>
 
	<I>[ &nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
  ]</I>
	<I>&quot;pixmap_name&quot;</I>
	</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the corner of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame to be decorated
		and the pixmap to be used.</P>
	</DD>


<A NAME="options.CornerAlign">
	</A><DT class="dense"><B>CornerAlign</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CornerBevel">
	</A><DT class="dense"><B>CornerBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CornerFBevel">
	</A><DT class="dense"><B>CornerFBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","CornerFocusedBevel","MyFrame_options#options.CornerFocusedBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CornerFocusedBevel">
	</A><DT class="dense"><B>CornerFocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CornerSBevel">
	</A><DT class="dense"><B>CornerSBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","CornerStickyBevel","MyFrame_options#options.CornerStickyBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CornerSize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CornerSize","MyFrame_options#options.CornerSize",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
 |Any WIDTHxHEIGHT</I></B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.CornerStickyBevel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CornerStickyBevel","MyFrame_options#options.CornerStickyBevel",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
 |Any &nbsp;<? local_doc_url("visualdoc.php","None","Align#options.None",$srcunset,$subunset) ?>
 |[&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Extra","Bevel#options.Extra",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","NoOutline","Bevel#options.NoOutline",$srcunset,$subunset) ?>
 ]</I></B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CornerUBevel">
	</A><DT class="dense"><B>CornerUBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","CornerUnfocusedBevel","MyFrame_options#options.CornerUnfocusedBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CornerUnfocusedBevel">
	</A><DT class="dense"><B>CornerUnfocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.East">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","East","MyFrame_options#options.East",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the right border
		of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.FrameFStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FrameFStyle","MyFrame_options#options.FrameFStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","FrameFocusedStyle","MyFrame_options#options.FrameFocusedStyle",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.FrameFocusedStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FrameFocusedStyle","MyFrame_options#options.FrameFocusedStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to apply to the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in focused state.</P>
	</DD>


<A NAME="options.FrameSStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FrameSStyle","MyFrame_options#options.FrameSStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","FrameStickyStyle","MyFrame_options#options.FrameStickyStyle",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.FrameStickyStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FrameStickyStyle","MyFrame_options#options.FrameStickyStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to apply to the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in sticky state.</P>
	</DD>


<A NAME="options.FrameUStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FrameUStyle","MyFrame_options#options.FrameUStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","FrameUnfocusedStyle","MyFrame_options#options.FrameUnfocusedStyle",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.FrameUnfocusedStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FrameUnfocusedStyle","MyFrame_options#options.FrameUnfocusedStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to apply to the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in unfocused state.</P>
	</DD>


<A NAME="options.Inherit">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Inherit","MyFrame_options#options.Inherit",$srcunset,$subunset) ?>
  <I>frame_name</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a &nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  to inherit options from. Options from
		frame_name will override previously specified options for
		this frame. &nbsp;<? local_doc_url("visualdoc.php","Inherit","MyFrame_options#options.Inherit",$srcunset,$subunset) ?>
  is a good way to &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  memory and network
		bandwidth &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the same &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  is used for several frames,
		as the pixmap will only be loaded for the inherited frame.</P>
	</DD>


<A NAME="options.InheritDefaults">
	</A><DT class="dense"><B>InheritDefaults</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.LeftBtnAlign">
	</A><DT class="dense"><B>LeftBtnAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the left buttons in the titlebar.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Look Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.LeftBtnBackAlign">
	</A><DT class="dense"><B>LeftBtnBackAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the left buttons.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.LeftBtnBackground">
	</A><DT class="dense"><B>LeftBtnBackground</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to be used for the left buttons.</P>
	</DD>


<A NAME="options.LeftSpacerBackAlign">
	</A><DT class="dense"><B>LeftSpacerBackAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the (by default) leftmost spacer of the titlebar.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.LeftSpacerBackground">
	</A><DT class="dense"><B>LeftSpacerBackground</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to be used for the (by default) leftmost spacer of the titlebar.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Titlebar Layout","TbarLayout",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.LeftTitleSpacerBackAlign">
	</A><DT class="dense"><B>LeftTitleSpacerBackAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the (by default) inner spacer, left of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.LeftTitleSpacerBackground">
	</A><DT class="dense"><B>LeftTitleSpacerBackground</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the (by default) inner spacer, left of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title.</P>
	</DD>


<A NAME="options.LeftTitlebarLayout">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","LeftTitlebarLayout","MyFrame_options#options.LeftTitlebarLayout",$srcunset,$subunset) ?>
  <I>[&nbsp;<? local_doc_url("visualdoc.php","Buttons","TbarLayout#options.Buttons",$srcunset,$subunset) ?>
 ] | [&nbsp;<? local_doc_url("visualdoc.php","Spacer","TbarLayout#options.Spacer",$srcunset,$subunset) ?>
 ] | [&nbsp;<? local_doc_url("visualdoc.php","TitleSpacer","TbarLayout#options.TitleSpacer",$srcunset,$subunset) ?>
 ]</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines the order of the elements in the titlebar left of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title, where default is &nbsp;<? local_doc_url("visualdoc.php","Spacer","TbarLayout#options.Spacer",$srcunset,$subunset) ?>
  - &nbsp;<? local_doc_url("visualdoc.php","Buttons","TbarLayout#options.Buttons",$srcunset,$subunset) ?>
  - &nbsp;<? local_doc_url("visualdoc.php","TitleSpacer","TbarLayout#options.TitleSpacer",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Titlebar Layout Flags","TbarLayout",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.MyFrame">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  &quot;<I>frame_name</I>&quot;</B></DT>
  <DT class="dense"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<I>frame_option</I></B></DT>
  <DT class="dense"><B>~MyFrame</B></DT>
  <DD class="dense">
<P class="dense">Specifies the beginning of a frame definition. The frame can be
referred to later by <I>frame_name</I>.
 <I>~MyFrame</I> ends a frame definition.</P>
	</DD>


<A NAME="options.NoBorder">
	</A><DT class="dense"><B>NoBorder</B></DT>
	<DD class="dense">
		<P class="dense">Denotes that beveled borders should not be drawn around
		the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame and titlebar.
		</P>
	</DD>


<A NAME="options.NoCorner">
	</A><DT class="dense"><B>NoCorner</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.NoSide">
	</A><DT class="dense"><B>NoSide</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.North">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","North","MyFrame_options#options.North",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the top border
		of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NorthEast">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the top right
		corner of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NorthWest">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the top left
		corner of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.RightBtnAlign">
	</A><DT class="dense"><B>RightBtnAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the right buttons in the titlebar.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Look Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.RightBtnBackAlign">
	</A><DT class="dense"><B>RightBtnBackAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the right buttons.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.RightBtnBackground">
	</A><DT class="dense"><B>RightBtnBackground</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to be used for the right buttons.</P>
	</DD>


<A NAME="options.RightSpacerBackAlign">
	</A><DT class="dense"><B>RightSpacerBackAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the (by default) rightmost spacer of the titlebar.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.RightSpacerBackground">
	</A><DT class="dense"><B>RightSpacerBackground</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to be used for the (by default) rightmost spacer of the titlebar.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Titlebar Layout","TbarLayout",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.RightTitleSpacerBackAlign">
	</A><DT class="dense"><B>RightTitleSpacerBackAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the (by default) inner spacer, right of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.RightTitleSpacerBackground">
	</A><DT class="dense"><B>RightTitleSpacerBackground</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the (by default) inner spacer, right of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title.</P>
	</DD>


<A NAME="options.RightTitlebarLayout">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","RightTitlebarLayout","MyFrame_options#options.RightTitlebarLayout",$srcunset,$subunset) ?>
  <I>[&nbsp;<? local_doc_url("visualdoc.php","Buttons","TbarLayout#options.Buttons",$srcunset,$subunset) ?>
 ] | [&nbsp;<? local_doc_url("visualdoc.php","Spacer","TbarLayout#options.Spacer",$srcunset,$subunset) ?>
 ] | [&nbsp;<? local_doc_url("visualdoc.php","TitleSpacer","TbarLayout#options.TitleSpacer",$srcunset,$subunset) ?>
 ]</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines the order of the elements in the titlebar left of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title, where default is &nbsp;<? local_doc_url("visualdoc.php","TitleSpacer","TbarLayout#options.TitleSpacer",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Buttons","TbarLayout#options.Buttons",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Spacer","TbarLayout#options.Spacer",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Titlebar Layout Flags","TbarLayout",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.Side">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Side","MyFrame_options#options.Side",$srcunset,$subunset) ?>
 
	<I>[ &nbsp;<? local_doc_url("visualdoc.php","South","MyFrame_options#options.South",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","North","MyFrame_options#options.North",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","East","MyFrame_options#options.East",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","West","MyFrame_options#options.West",$srcunset,$subunset) ?>
  ]</I>
	<I>&quot;pixmap_name&quot;</I>
	</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the side of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame to be decorated
		and the pixmap to be used.</P>
	</DD>


<A NAME="options.SideAlign">
	</A><DT class="dense"><B>SideAlign</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SideBevel">
	</A><DT class="dense"><B>SideBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SideFBevel">
	</A><DT class="dense"><B>SideFBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","SideFBevel","MyFrame_options#options.SideFBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SideFocusedBevel">
	</A><DT class="dense"><B>SideFocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SideSBevel">
	</A><DT class="dense"><B>SideSBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","SideStickyBevel","MyFrame_options#options.SideStickyBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SideSize">
	</A><DT class="dense"><B>SideSize</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.SideStickyBevel">
	</A><DT class="dense"><B>SideStickyBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SideUBevel">
	</A><DT class="dense"><B>SideUBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for SideUnfocsedBevel.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SideUnfocusedBevel">
	</A><DT class="dense"><B>SideUnfocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.South">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","South","MyFrame_options#options.South",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the bottom border
		of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.SouthEast">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the bottom right
		corner of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.SouthWest">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the bottom left
		corner of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleAlign">
	</A><DT class="dense"><B>TitleAlign</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleBackground">
	</A><DT class="dense"><B>TitleBackground</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to be used for the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title.</P>
	</DD>


<A NAME="options.TitleBackgroundAlign">
	</A><DT class="dense"><B>TitleBackgroundAlign</B></DT>
	<DD class="dense">
		<P class="dense">Defines the alignment of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleBevel">
	</A><DT class="dense"><B>TitleBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleCompositionMethod">
	</A><DT class="dense"><B>TitleCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleFBevel">
	</A><DT class="dense"><B>TitleFBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleFocusedBevel","MyFrame_options#options.TitleFocusedBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleFCompositionMethod">
	</A><DT class="dense"><B>TitleFCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleFocusedCompositionMethod","MyFrame_options#options.TitleFocusedCompositionMethod",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleFHue">
	</A><DT class="dense"><B>TitleFHue</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleFocusedHue","MyFrame_options#options.TitleFocusedHue",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleFSaturation">
	</A><DT class="dense"><B>TitleFSaturation</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleFocusedSaturation","MyFrame_options#options.TitleFocusedSaturation",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleFStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleFStyle","MyFrame_options#options.TitleFStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleFocusedStyle","MyFrame_options#options.TitleFocusedStyle",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleFocusedBevel">
	</A><DT class="dense"><B>TitleFocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">Determines the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around the title bar &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
		&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in focused state.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleFocusedCompositionMethod">
	</A><DT class="dense"><B>TitleFocusedCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleFocusedHue">
	</A><DT class="dense"><B>TitleFocusedHue</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleFocusedSaturation">
	</A><DT class="dense"><B>TitleFocusedSaturation</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleFocusedStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleFocusedStyle","MyFrame_options#options.TitleFocusedStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to apply to titlebar &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in focused state.</P>
	</DD>


<A NAME="options.TitleHSpacing">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleHSpacing","MyFrame_options#options.TitleHSpacing",$srcunset,$subunset) ?>
  <I>value</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines the space in pixel to insert between &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  title and the buttons/spacers.
		Please note that &nbsp;<? local_doc_url("visualdoc.php","CondenseTitlebar","MyFrame_options#options.CondenseTitlebar",$srcunset,$subunset) ?>
  is influencing the behaviour of this option.</P>
	</DD>


<A NAME="options.TitleSBevel">
	</A><DT class="dense"><B>TitleSBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleStickyBevel","MyFrame_options#options.TitleStickyBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleSCompositionMethod">
	</A><DT class="dense"><B>TitleSCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleStickyCompositionMethod","MyFrame_options#options.TitleStickyCompositionMethod",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleSHue">
	</A><DT class="dense"><B>TitleSHue</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleStickyHue","MyFrame_options#options.TitleStickyHue",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleSSaturation">
	</A><DT class="dense"><B>TitleSSaturation</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleStickySaturation","MyFrame_options#options.TitleStickySaturation",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleSStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleSStyle","MyFrame_options#options.TitleSStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleStickyStyle","MyFrame_options#options.TitleStickyStyle",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleStickyBevel">
	</A><DT class="dense"><B>TitleStickyBevel</B></DT>
	<DD class="dense">
		<P class="dense">Determines the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around the title bar &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
		&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in unfocused state.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleStickyCompositionMethod">
	</A><DT class="dense"><B>TitleStickyCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleStickyHue">
	</A><DT class="dense"><B>TitleStickyHue</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleStickySaturation">
	</A><DT class="dense"><B>TitleStickySaturation</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleStickyStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleStickyStyle","MyFrame_options#options.TitleStickyStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to apply to titlebar &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in sticky state.</P>
	</DD>


<A NAME="options.TitleUBevel">
	</A><DT class="dense"><B>TitleUBevel</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleUnfocusedBevel","MyFrame_options#options.TitleUnfocusedBevel",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleUCompositionMethod">
	</A><DT class="dense"><B>TitleUCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleUnfocusedCompositionMethod","MyFrame_options#options.TitleUnfocusedCompositionMethod",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleUHue">
	</A><DT class="dense"><B>TitleUHue</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleUnfocusedHue","MyFrame_options#options.TitleUnfocusedHue",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleUSaturation">
	</A><DT class="dense"><B>TitleUSaturation</B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleUnfocusedSaturation","MyFrame_options#options.TitleUnfocusedSaturation",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleUStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleUStyle","MyFrame_options#options.TitleUStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">Alias for &nbsp;<? local_doc_url("visualdoc.php","TitleUnfocusedStyle","MyFrame_options#options.TitleUnfocusedStyle",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.TitleUnfocusedBevel">
	</A><DT class="dense"><B>TitleUnfocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">Determines the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around the title bar &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
		&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in unfocused state.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.TitleUnfocusedCompositionMethod">
	</A><DT class="dense"><B>TitleUnfocusedCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleUnfocusedHue">
	</A><DT class="dense"><B>TitleUnfocusedHue</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleUnfocusedSaturation">
	</A><DT class="dense"><B>TitleUnfocusedSaturation</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.TitleUnfocusedStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleUnfocusedStyle","MyFrame_options#options.TitleUnfocusedStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to apply to titlebar &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in unfocused state.</P>
	</DD>


<A NAME="options.TitleVSpacing">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TitleVSpacing","MyFrame_options#options.TitleVSpacing",$srcunset,$subunset) ?>
  <I>value</I></B></DT>
	<DD class="dense">
		<P class="dense"></P></DD>

<A NAME="options.West">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","West","MyFrame_options#options.West",$srcunset,$subunset) ?>
  <I>&quot;pixmap_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the pixmap to be displayed in the left border
		of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  frame, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  DecorateFrames is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


</DL></P></LI>
</UL>
