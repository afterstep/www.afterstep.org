&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Wharf</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for launching or docking applications aka button bar</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","MyStyles","Wharf_mystyles","Wharf",$subunset) ?>
 <hr>

<A NAME="related"><UL>
 Module:Wharf
 </A><? local_doc_url("visualdoc.php","sound definition","WharfSounds",$srcunset,$subunset) ?>
</UL>
<hr>

<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>Wharf</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
</LI>
</UL>




<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.AlignContents">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AlignContents","Wharf#options.AlignContents",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","HTiled","Align#options.HTiled",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","VTiled","Align#options.VTiled",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","HScaled","Align#options.HScaled",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","VScaled","Align#options.VScaled",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","HCenter","Align#options.HCenter",$srcunset,$subunset) ?>
 ,VCenter</I></B></DT>
	<DD class="dense">
		<P class="dense">That will force contents of each Wharf's button to be aligned to either
        side of the button, when &nbsp;<? local_doc_url("visualdoc.php","FitContents","Wharf#options.FitContents",$srcunset,$subunset) ?>
  is not used.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.Animate">
	</A><DT class="dense"><B>Animate</B></DT>
	<DD class="dense">
		<P class="dense">If specified, the opening and closing of Folders  will  be  animated,
		rather than simply drawn in one frame.
		</P>
	</DD>


<A NAME="options.AnimateDelay">
	</A><DT class="dense"><B>AnimateDelay</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the <I>delay</I> in milliseconds that the animation will pause
		between each move when opening or closing a folder.</P>
	</DD>


<A NAME="options.AnimateMain">
	</A><DT class="dense"><B>AnimateMain</B></DT>
	<DD class="dense">
		<P class="dense">Designates that full-length <B>Wharf</B> withdraws will be animated.</P>
	</DD>


<A NAME="options.AnimateSteps">
	</A><DT class="dense"><B>AnimateSteps</B></DT>
	<DD class="dense">
	    <P class="dense">Specifies the <I>steps</I> a &nbsp;<? local_doc_url("visualdoc.php","Folder","Functions#options.Folder",$srcunset,$subunset) ?>
  takes in animating while opening or
	    closing.  This translates into the &nbsp;<? local_doc_url("visualdoc.php","Folder","Functions#options.Folder",$srcunset,$subunset) ?>
  button moving
	    button-size/<I>steps</I> pixels each step.</P>
	</DD>


<A NAME="options.AnimateStepsMain">
	</A><DT class="dense"><B>AnimateStepsMain</B></DT>
	<DD class="dense">
<P class="dense">Specifies the <I>steps</I> the main Wharf takes in iconification or
de-iconification upon mouse button 3 being pressed. This translates into
the main Wharf moving &lt;button-size&gt;/<I>steps</I> pixels each step.
		</P>
	</DD>


<A NAME="options.BalloonBorderHilite">
	</A><DT class="dense"><B>BalloonBorderHilite</B></DT>
	<DD class="dense">
		<P class="dense">Defines &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around balloons - replaces the
		&nbsp;<? local_doc_url("visualdoc.php","BorderWidth","ASDatabaseEntry#options.BorderWidth",$srcunset,$subunset) ?>
  setting.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.BalloonCloseDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonCloseDelay","Pager_options#options.BalloonCloseDelay",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the period in milliseconds to delay the disappearance  of
		the balloon when leaving &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  with the mouse.</P>
	</DD>


<A NAME="options.BalloonDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonDelay","Pager_options#options.BalloonDelay",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the period in milliseconds to delay the appearance  of
		the balloon.</P>
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
	</A><DT class="dense"><B>BalloonXOffset</B></DT>
	<DD class="dense">
<P class="dense">The balloon &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is positioned to be horizontally centered against
the <B>Wharf</B> &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  it is describing. The horizontal position may be
&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  as an offset. Negative offsets of -N are placed <I>N</I>
pixels left of the <B>Wharf</B> &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , positive offsets of <I>+N</I> are 
placed <I>N</I> pixels right of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . &nbsp;<? local_doc_url("visualdoc.php","Defaults","WinList#options.Defaults",$srcunset,$subunset) ?>
  to +2.</P>
	</DD>


<A NAME="options.BalloonYOffset">
	</A><DT class="dense"><B>BalloonYOffset</B></DT>
	<DD class="dense">
		<P class="dense">The balloon &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is positioned to be horizontally centered against
		the <B>Wharf</B> &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  it is describing. The vertical position may be
		&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  as an offset. Negative offsets of -N are placed <I>N</I>
		pixels above the <B>Wharf</B> &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , positive offsets of <I>+N</I> are 
		placed <I>N</I> pixels below. &nbsp;<? local_doc_url("visualdoc.php","Defaults","WinList#options.Defaults",$srcunset,$subunset) ?>
  to +2.</P>
	</DD>


<A NAME="options.Balloons">
	</A><DT class="dense"><B>Balloons</B></DT>
	<DD class="dense">
		<P class="dense">Turns on the balloon feature. A &quot;balloon&quot; is displayed showing the name 
		of the button the pointer is resting on in the <B>Wharf</B>. The balloon 
		&nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  are configured with the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  &quot;*WharfBalloon&quot;.
		See <I>afterstep(1x)</I> for more information on MyStyles.</P>
	</DD>


<A NAME="options.Bevel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","None","Align#options.None",$srcunset,$subunset) ?>
 |[&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Extra","Bevel#options.Extra",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","NoOutline","Bevel#options.NoOutline",$srcunset,$subunset) ?>
 ]</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines exact size and shape of the 3D &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  drawn around each
        button. This option is somewhat synonymous to &nbsp;<? local_doc_url("visualdoc.php","NoBorder","MyFrame_options#options.NoBorder",$srcunset,$subunset) ?>
 . If &nbsp;<? local_doc_url("visualdoc.php","NoBorder","MyFrame_options#options.NoBorder",$srcunset,$subunset) ?>
  is
        encountered after &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  - then it will override &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
 , otherwise &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
 
        will override &nbsp;<? local_doc_url("visualdoc.php","NoBorder","MyFrame_options#options.NoBorder",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>



<A NAME="options.Columns">
	</A><DT class="dense"><B>Columns</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the number of <I>columns</I> of buttons to be created. This will 
		give your <B>Wharf</B> a vertical layout, with the number of columns equal 
		to the number specificed in <I>columns</I>. If unspecified, the number of 
		columns will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 1.  If the <I>columns</I> are &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to a number 
		greater than 1, then there will be that number of columns with enough 
		rows to satisfy the requested number of buttons.  Only one of 
		<I>*WharfRows</I> or <I>*WharfColumns</I> should be specified.</P>
	</DD>


<A NAME="options.CompositionMethod">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CompositionMethod","Wharf#options.CompositionMethod",$srcunset,$subunset) ?>
  <I>testure_type</I></B></DT>
	<DD class="dense">
		<P class="dense">Determines algorithm used to blend all the icons and
		Wharf &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to form the button's image. Valid es are
		130-145 ( see MyStyles section ). The default value is 131
		( &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 -blending )</P>
	</DD>


<A NAME="options.FitContents">
	</A><DT class="dense"><B>FitContents</B></DT>
	<DD class="dense">
		<P class="dense">Wharf will draw each button so that it fits its contents perfectly
		(icon or swallowed app ). That will cause some of the Wharf's buttons to
		differ in size from others. &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  in conjunction with &nbsp;<? local_doc_url("visualdoc.php","ShapeToContents","Wharf#options.ShapeToContents",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.FlipLabel">
	</A><DT class="dense"><B>FlipLabel</B></DT>
	<DD class="dense">
		<P class="dense">Will cause Wharf to draw vertical label &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.FolderOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FolderOffset","Wharf#options.FolderOffset",$srcunset,$subunset) ?>
  size</B></DT>
	<DD class="dense">
		<P class="dense">sets the distance between opened folder and its parent.</P>
	</DD>


<A NAME="options.ForceSize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ForceSize","Wharf#options.ForceSize",$srcunset,$subunset) ?>
  <I>Size</I></B></DT>
	<DD class="dense">
		<P class="dense">If specified, will force pixmaps to &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  instead of the default
		of 64x64. This has no effect on the &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  of the displayed icons (they will be croped &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  larger).</P>
	</DD>



<A NAME="options.Geometry">
	</A><DT class="dense"><B>Geometry</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the <B>Wharf</B> &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  location and/or size.  If the size is 
		not specified, Wharf will auto-size itself in a reasonable manner. The 
		<I>geometry</I> is a standard X11 &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  geometry specification; see 
		<I>XParseGeometry(3x)</I>, and <I>EXAMPLES</I> (below) for further details.</P>
	</DD>


<A NAME="options.LabelLocation">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","LabelLocation","Wharf#options.LabelLocation",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the location of the label. Correct values are
		integers from 0-32. label could be drawn on each side of
		the button and just on top of icon. It could also be aligned to
		different sides.</P>
	</DD>


<A NAME="options.MyStyle">
	</A><DT class="dense"><B>MyStyle</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the style of the wharf button tiles, including &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , 
		&nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  pixmap (which may be transparent), and &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 . 
		This method of specifying the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is preferred over the BgColor, 
		MaxColors, Pixmap, TextureColor, and TextureType options, although those 
		(older) options do still work.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","MyStyle definition","MyStyle",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.NoBalloons">
	</A><DT class="dense"><B>NoBalloons</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>





<A NAME="options.OrthogonalFolderOffset">
	</A><DT class="dense"><B>OrthogonalFolderOffset</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>



<A NAME="options.Rows">
	</A><DT class="dense"><B>Rows</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the number of <I>rows</I> of buttons to be created. This will 
		give your <B>Wharf</B> a horizontal layout, with the number of rows equal 
		to the number specified in <I>rows</I>. If unspecified, the number of rows 
		will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 1.  If the <I>rows</I> are &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to a number greater than 1, 
		then there will be that number of rows with enough columns to satisfy the 
		requested number of buttons.  Only one of <I>*WharfRows</I> or 
		<I>*WharfColumns</I> should be specified.</P>
	</DD>


<A NAME="options.ShapeToContents">
	</A><DT class="dense"><B>ShapeToContents</B></DT>
	<DD class="dense">
		<P class="dense">Will cause Wharf to use X Shaped extentions and have a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  of
		non-rectangular shape. Shape is composed from the overall geometry of
		buttons ( see &nbsp;<? local_doc_url("visualdoc.php","FitContents","Wharf#options.FitContents",$srcunset,$subunset) ?>
  ), shape of the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  used to draw Wharf
		&nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  ( &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  126 or 125 is used ), contents of each
		button - such as swallowed app's shape, label and icons.</P>
	</DD>


<A NAME="options.ShowHints">
	</A><DT class="dense"><B>ShowHints</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Balloon Contents flags","Balloon Contents",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.ShowLabel">
	</A><DT class="dense"><B>ShowLabel</B></DT>
	<DD class="dense">
		<P class="dense">Tells Wharf to render a label on each
		of its buttons, effectively immitating the behaviour of
		the discontinued Zharf &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Sound">
	</A><DT class="dense"><B>Sound</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Wharf sound definition","WharfSounds",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.StretchBackground">
	</A><DT class="dense"><B>StretchBackground</B></DT>
	<DD class="dense">
		<P class="dense">This should allow for all kinds of skins where each button
		      is just a part of large shaped figure.</P>
	</DD>




<A NAME="options.WithdrawStyle">
	</A><DT class="dense"><B>WithdrawStyle</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the circumstances under which button  3  should  cause
		the  Wharf to withdraw to a corner. If style is 0, button 3 will
		do nothing. If style is 1 (the default), a click on  any  button
		in  the toplevel bar will cause Wharf to withdraw to the nearest
		corner. If style is 2, a click on either the first or  the  last
		button in the toplevel bar will cause the withdrawal.</P>
	</DD>


</DL></P></LI>
