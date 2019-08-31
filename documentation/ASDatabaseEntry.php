&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Database Style definition</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">to be used in entry of AfterStep database</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","Database","ASDatabase",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Gravity","Gravity",$srcunset,$subunset) ?>
 style definition
</UL>
<hr>





<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.AllowCover">
      </A><DT class="dense"><B><I>AllowCover</I></B></DT>
      <DD class="dense">
	<P class="dense">Specifies that other windows should be allowed to cover the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .
	Turns off <I>AvoidCover</I>. This is the default setting.
	</P>
      </DD>


<A NAME="options.AvoidCover">
      </A><DT class="dense"><B><I>AvoidCover</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that other windows should not be allowed to cover the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .
Prevents other windows from moving in front of (or behind) the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .
If <I>SmartPlacement</I> is specified in the <I>feel</I> file, windows will
not be allowed to automatically place themselves over the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
possible. <I>AllowCover</I> turns off <I>AvoidCover</I>. The default is
<I>AllowCover</I>.</P>
      </DD>


<A NAME="options.BorderWidth">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BorderWidth","ASDatabaseEntry#options.BorderWidth",$srcunset,$subunset) ?>
  <I>width</I></B></DT>
      <DD class="dense">
<P class="dense">Specifying this in conjunction with <I>NoHandles</I>, sets the border width
of a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to be <I>width</I>. A <I>width</I> of 0 causes no border.
 This option has no affect &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  not used with <I>NoHandles</I>.  The default
is 1 implicitly for all windows.</P>
	</DD>


<A NAME="options.Button">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Button","ASDatabaseEntry#options.Button",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
      <DD class="dense">
<P class="dense">Specifing a <I>number</I> to each use of <I>Button</I> will cause that
buttons number to be displayed in the title bar. Number should be the same as used in <I>TitleButtons</I>
setting.  The default is to display all buttons defined in the <I>look.name</I> file &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the
following conditions are met: there is a valid bitmap or pixmap specified for the button in the <I>look.name</I> file;
 nd the button has not been forced not to display by the use of &nbsp;<? local_doc_url("visualdoc.php","Motif","SupportedHints#options.Motif",$srcunset,$subunset) ?>
  WM hints specified by application.
</P>
      </DD>


<A NAME="options.CirculateHit">
      </A><DT class="dense"><B><I>CirculateHit</I></B></DT>
      <DD class="dense">
<P class="dense">Enables &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to be switched to using &nbsp;<? local_doc_url("visualdoc.php","ChangeWindowUp","Functions#options.ChangeWindowUp",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ChangeWindowDown","Functions#options.ChangeWindowDown",$srcunset,$subunset) ?>
  or
Warp (also called alt-tabbing) functions.  This is the default implicitly for all windows.</P>
      </DD>


<A NAME="options.CirculateSkip">
      </A><DT class="dense"><B><I>CirculateSkip</I></B></DT>
      <DD class="dense">
<P class="dense">Causes windows to be skipped over when the &nbsp;<? local_doc_url("visualdoc.php","ChangeWindowUp","Functions#options.ChangeWindowUp",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ChangeWindowDown","Functions#options.ChangeWindowDown",$srcunset,$subunset) ?>
  or
Warp (also called alt-tabbing) functions are invoked.  This is disabled by default 
implicitly for all windows.</P>
      </DD>


<A NAME="options.DefaultGeometry">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DefaultGeometry","ASDatabaseEntry#options.DefaultGeometry",$srcunset,$subunset) ?>
  <I>WIDTHxHEIGHT+X+Y</I></B></DT>
      <DD class="dense">
<P class="dense">This will force AfterStep to replace parts of &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  initial placement with
        predefined values. For example :</P>

<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
  &quot;*mozilla*&quot;  &nbsp;<? local_doc_url("visualdoc.php","DefaultGeometry","ASDatabaseEntry#options.DefaultGeometry",$srcunset,$subunset) ?>
  1024x500</P>

<P class="dense">will force mozilla windows (or any windows that have &quot;mozilla&quot; in its
        name ) to have initial size 1024x500.</P>
<P class="dense">Note that in case of mozilla its usefull to define several Styles so
        that you will get different geometries for different dialog boxes, such
        as search/download/ etc</P>
      </DD>


<A NAME="options.Focus">
      </A><DT class="dense"><B><I>Focus</I></B></DT>
      <DD class="dense">
	<P class="dense">This will &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to accept input &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 .  The is the default for all windows.</P>
      </DD>


<A NAME="options.FocusOnMap">
	</A><DT class="dense"><B>FocusOnMap</B></DT>
	<DD class="dense">
		<P class="dense">Client &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be focused when it is mapped even &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is not directly under mouse pointer.</P>
	</DD>


<A NAME="options.FocusStyle">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FocusStyle","ASDatabaseEntry#options.FocusStyle",$srcunset,$subunset) ?>
  [<I>style</I>]</B></DT>
      <DD class="dense">
	<P class="dense">Specifies a &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used for this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  when it has the keyboard
	&nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 .  If <I>style</I> is unspecified, the default &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  style will be
	used instead (see <I>FWindowStyle</I>, below).</P>
      </DD>


<A NAME="options.Frame">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Frame","ASDatabaseEntry#options.Frame",$srcunset,$subunset) ?>
  <I>&quot;frame_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Enables &quot;frame_name&quot; to be used for decoration of this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Fullscreen">
	</A><DT class="dense"><B>Fullscreen</B></DT>
	<DD class="dense">
		<P class="dense">Makes &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Fullscreen","Functions#options.Fullscreen",$srcunset,$subunset) ?>
  on &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HandleWidth">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","HandleWidth","ASDatabaseEntry#options.HandleWidth",$srcunset,$subunset) ?>
  <I>width</I></B></DT>
	<DD class="dense">
<P class="dense">Specifies the <I>width</I> of the resize handles on the
The default <I>width</I> is 8 pixels.
</P>
	</DD>


<A NAME="options.Handles">
      </A><DT class="dense"><B><I>Handles</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will display the &quot;low bar&quot; decoration.
 This is the default for all windows.</P>
      </DD>


<A NAME="options.HonorConfig">
	</A><DT class="dense"><B>HonorConfig</B></DT>
	<DD class="dense">
		<P class="dense">Forces AfterStep to honor a client's request to reposition itself after its &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  has been mapped. This is a dangerous behavior as clients do not have a reliable way of determining the best position for themselves. &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  positioning should be left to AfterStep as it knows better. Opposite of &nbsp;<? local_doc_url("visualdoc.php","IgnoreConfig","ASDatabaseEntry#options.IgnoreConfig",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","IgnoreConfig","ASDatabaseEntry#options.IgnoreConfig",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HonorExtWMHints">
	</A><DT class="dense"><B>HonorExtWMHints</B></DT>
	<DD class="dense">
		<P class="dense">Forces AfterStep to use extended &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  management hints that the client sets on its windows. These generally include &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  type (dialog, desktop, menu, etc), &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  state (minimized, maximized, shaded, etc.), desktop, icon and additional data. Note that these &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 -type hints cause AfterStep to apply one of its policies, which may result in missing decorations, a non-default layer, and other potential irregularities. The opposite is &nbsp;<? local_doc_url("visualdoc.php","NoExtWMHints","ASDatabaseEntry#options.NoExtWMHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","NoExtWMHints","ASDatabaseEntry#options.NoExtWMHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HonorGnomeHints">
	</A><DT class="dense"><B>HonorGnomeHints</B></DT>
	<DD class="dense">
		<P class="dense">Forces AfterStep to use the desktop, layer, and other hints data that a client sets on its &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  using the old, outdated GNOME &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  management hints. The opposite is &nbsp;<? local_doc_url("visualdoc.php","NoGnomeHints","ASDatabaseEntry#options.NoGnomeHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","NoGnomeHints","ASDatabaseEntry#options.NoGnomeHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HonorGroupHints">
	</A><DT class="dense"><B>HonorGroupHints</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will utilize a group hint &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  on the client's &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . This will make AfterStep apply group management policies to all windows of the client. For example: when one &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in the group is moved to a different desktop, all other windows will follow. Group members will usually be stacked together and utilize the layer of the member with the highest layer within the given group. &nbsp;<? local_doc_url("visualdoc.php","Transient","SupportedHints#options.Transient",$srcunset,$subunset) ?>
  windows belonging to one of the members will overlay all of the members. The opposite is &nbsp;<? local_doc_url("visualdoc.php","NoGroupHints","ASDatabaseEntry#options.NoGroupHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","NoGroupHints","ASDatabaseEntry#options.NoGroupHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HonorKDEHints">
	</A><DT class="dense"><B>HonorKDEHints</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will honor &nbsp;<? local_doc_url("visualdoc.php","KDE","SupportedHints#options.KDE",$srcunset,$subunset) ?>
  specific hints &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  on the client's &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . This is mainly used for status bar-type applications. The opposite is &nbsp;<? local_doc_url("visualdoc.php","NoKDEHints","ASDatabaseEntry#options.NoKDEHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","NoKDEHints","ASDatabaseEntry#options.NoKDEHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HonorMotifHints">
	</A><DT class="dense"><B>HonorMotifHints</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will honor &nbsp;<? local_doc_url("visualdoc.php","Motif","SupportedHints#options.Motif",$srcunset,$subunset) ?>
  specific hints &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  on the client's &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . This includes any decorations that need to be drawn around it and any functions (minimize/&nbsp;<? local_doc_url("visualdoc.php","maximize","AudioEvents#options.maximize",$srcunset,$subunset) ?>
 /re-size/move) that it supports. The opposite is &nbsp;<? local_doc_url("visualdoc.php","NoMotifHints","ASDatabaseEntry#options.NoMotifHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","NoMotifHints","ASDatabaseEntry#options.NoMotifHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HonorPPosition">
	</A><DT class="dense"><B>HonorPPosition</B></DT>
	<DD class="dense">
	<P class="dense">Forces AfterStep to use PPosition hint for this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . PPosition hint
        normally means that application has determined its position due to some
        of its own configuration settings, and position has not been
        explicitely requested on the command line. This setting overrides
        &nbsp;<? local_doc_url("visualdoc.php","NoPPosition","Feel#options.NoPPosition",$srcunset,$subunset) ?>
  setting in feel file.</P>
	</DD>


<A NAME="options.HonorRestack">
	</A><DT class="dense"><B>HonorRestack</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.HonorTransientHints">
	</A><DT class="dense"><B>HonorTransientHints</B></DT>
	<DD class="dense">
		<P class="dense">Will force AfterStep to use transient hint, effectively attaching
        &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to its parent( placing it on the same layer , etc. )</P>
	</DD>


<A NAME="options.HonorXResources">
	</A><DT class="dense"><B>HonorXResources</B></DT>
	<DD class="dense">
		<P class="dense">Forces AfterStep to respect XResources database when it comes to
        &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  placement.</P>
	</DD>


<A NAME="options.HorizontalTitle">
      </A><DT class="dense"><B><I>HorizontalTitle</I></B></DT>
      <DD class="dense">
<P class="dense">Causes the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  titlebar to be placed horizontally on top of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . This is the implicit default for all windows.</P>
      </DD>


<A NAME="options.Icon">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Icon","ASDatabaseEntry#options.Icon",$srcunset,$subunset) ?>
  <I>filename</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies the [filename] to use when iconified, overriding
any icon the app itself might provide.  <I>NoIcon</I> turns this off.
The default is to use the app's supplied icon or the icon specified with the
WM_NAME of &quot;Unknown&quot; or &quot;*&quot;.</P>
	</DD>


<A NAME="options.IconTitle">
  </A><DT class="dense"><B><I>IconTitle</I></B></DT>
  <DD class="dense">
<P class="dense">Specifies that a title should be displayed under an iconified app.  The
colors used are the <I>ForeColor</I> and <I>BackColor</I> of the
<I>ButtonTitleFocus</I> in the <I>look.name</I> file. Note: less space
is left for the app's icon, so it will be resized acordingly.  Only a
portion of the icon title will be displayed until the icon gains &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 , and
then the title &quot;box&quot; will expand to reveal the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's entire name.</P>
  </DD>


<A NAME="options.IgnoreConfig">
	</A><DT class="dense"><B>IgnoreConfig</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will ignore a client's attempts to reposition its &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  after it has been mapped on the screen. Opposite of &nbsp;<? local_doc_url("visualdoc.php","HonorConfig","ASDatabaseEntry#options.HonorConfig",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","HonorConfig","ASDatabaseEntry#options.HonorConfig",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.IgnoreRestack">
	</A><DT class="dense"><B>IgnoreRestack</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Layer">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  <I>layer</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies what layer this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  should be in.  <I>layer</I> may be any
integer (positive, negative, or zero).  Windows are grouped according to
their layer, and may not be moved out of their layer.  Windows in higher
layers will be above windows in lower layers.  By default, windows are
placed in layer 0.  <I>StaysOnBack</I> corresponds to &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  -1, and
<I>StaysOnTop</I> corresponds to <I>&nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  1</I>.</P>
      </DD>


<A NAME="options.LongLiving">
	</A><DT class="dense"><B>LongLiving</B></DT>
	<DD class="dense">
		<P class="dense">A &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will stay on the screen long enough to allow application of different placement policies, such as AvoidCover. Opposite of &nbsp;<? local_doc_url("visualdoc.php","ShortLiving","ASDatabaseEntry#options.ShortLiving",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","ShortLiving","ASDatabaseEntry#options.ShortLiving",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoButton">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","NoButton","ASDatabaseEntry#options.NoButton",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
      <DD class="dense">
<P class="dense">Specifing a <I>number</I> to each use of <I>NoButton</I> will cause that
buttons be hidden from the title bar. Number should be the same as used in <I>TitleButtons</I>
setting.  The default is to display all buttons defined in the <I>look.name</I> file &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the
following conditions are met: there is a valid bitmap or pixmap specified for the button in the <I>look.name</I> file;
 and the button has not been forced not to display by the use of &nbsp;<? local_doc_url("visualdoc.php","Motif","SupportedHints#options.Motif",$srcunset,$subunset) ?>
  WM hints specified by application.
</P>
      </DD>


<A NAME="options.NoExtWMHints">
	</A><DT class="dense"><B>NoExtWMHints</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will not use extended &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  management hints that the client sets on its windows. Opposite of &nbsp;<? local_doc_url("visualdoc.php","HonorExtWMHints","ASDatabaseEntry#options.HonorExtWMHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","HonorExtWMHints","ASDatabaseEntry#options.HonorExtWMHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoFocus">
      </A><DT class="dense"><B><I>NoFocus</I></B></DT>
      <DD class="dense">
<P class="dense">This will &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to refuse any input &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 . <I>Focus</I> will turn this setting off.
This is off by default.
</P>
      </DD>


<A NAME="options.NoFocusOnMap">
	</A><DT class="dense"><B>NoFocusOnMap</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will not yield a &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  to the &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  being mapped. This prevents things like passwords typed into popped-up IM windows. Opposite of &nbsp;<? local_doc_url("visualdoc.php","FocusOnMap","ASDatabaseEntry#options.FocusOnMap",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","FocusOnMap","ASDatabaseEntry#options.FocusOnMap",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoFrame">
	</A><DT class="dense"><B>NoFrame</B></DT>
	<DD class="dense">
		<P class="dense">Disables frame decorations for this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoFullscreen">
	</A><DT class="dense"><B>NoFullscreen</B></DT>
	<DD class="dense">
		<P class="dense">Prevents windows from starting up as &nbsp;<? local_doc_url("visualdoc.php","Fullscreen","Functions#options.Fullscreen",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoGnomeHints">
	</A><DT class="dense"><B>NoGnomeHints</B></DT>
	<DD class="dense">
		<P class="dense">Causes AfterStep to disregard layer properties and several obsolete properties for a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . Opposite of &nbsp;<? local_doc_url("visualdoc.php","HonorGnomeHints","ASDatabaseEntry#options.HonorGnomeHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","HonorGnomeHints","ASDatabaseEntry#options.HonorGnomeHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoGroupHints">
	</A><DT class="dense"><B>NoGroupHints</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will not utilize a group hint &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  on the client's &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . Opposite of &nbsp;<? local_doc_url("visualdoc.php","HonorGroupHints","ASDatabaseEntry#options.HonorGroupHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","HonorGroupHints","ASDatabaseEntry#options.HonorGroupHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoHandles">
      </A><DT class="dense"><B><I>NoHandles</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will not display the &quot;low bar&quot; decoration.
This also removes the ability to resize windows with the resize handles on
the &quot;low bar&quot; ends.  The default is <I>Handles</I> implicitly for all
windows.</P>
      </DD>


<A NAME="options.NoIcon">
      </A><DT class="dense"><B><I>NoIcon</I></B></DT>
      <DD class="dense">
<P class="dense">Disables icon from being visible when &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is iconifyed. That causes &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to simply disappear when the app is iconified.
Refer to the EXAMPLES below for a method to make all icons disappear.</P>
	</DD>


<A NAME="options.NoIconTitle">
	</A><DT class="dense"><B>NoIconTitle</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that no title should be displayed under an iconified app.</P>
	</DD>


<A NAME="options.NoKDEHints">
	</A><DT class="dense"><B>NoKDEHints</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will not honor &nbsp;<? local_doc_url("visualdoc.php","KDE","SupportedHints#options.KDE",$srcunset,$subunset) ?>
  specific hints &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  on the client's &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . Opposite of &nbsp;<? local_doc_url("visualdoc.php","HonorKDEHints","ASDatabaseEntry#options.HonorKDEHints",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","HonorKDEHints","ASDatabaseEntry#options.HonorKDEHints",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoMotifHints">
	</A><DT class="dense"><B>NoMotifHints</B></DT>
	<DD class="dense">
		<P class="dense">Forces AfterStep to disregard &nbsp;<? local_doc_url("visualdoc.php","Motif","SupportedHints#options.Motif",$srcunset,$subunset) ?>
  decoration and functionality hints.</P>
	</DD>


<A NAME="options.NoPPosition">
	</A><DT class="dense"><B>NoPPosition</B></DT>
	<DD class="dense">
		<P class="dense">Species that afterstep should ignore the  PPosition  field  for
		the specified &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , in other words, the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  can't choose where
		to place  itself.   Adherence  to  the  PPosition  field  is
		required for some applications.</P>
	</DD>


<A NAME="options.NoTitle">
      </A><DT class="dense"><B><I>NoTitle</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that <B>afterstep</B> should not put a title bar decoration on the
app.  The is off by default.</P>
      </DD>


<A NAME="options.NoTransientHints">
	</A><DT class="dense"><B>NoTransientHints</B></DT>
	<DD class="dense">
		<P class="dense">Ignore transient hint - &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be treated as an independent
        &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.NoXResources">
	</A><DT class="dense"><B>NoXResources</B></DT>
	<DD class="dense">
	<P class="dense">Forces AfterStep to disregard XResources database when it comes to
        &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  placement.</P>
	</DD>


<A NAME="options.OverrideGravity">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","OverrideGravity","ASDatabaseEntry#options.OverrideGravity",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","North","MyFrame_options#options.North",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","West","MyFrame_options#options.West",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","Center","Align#options.Center",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","East","MyFrame_options#options.East",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","SouthWest","MyFrame_options#options.SouthWest",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","South","MyFrame_options#options.South",$srcunset,$subunset) ?>
  | &nbsp;<? local_doc_url("visualdoc.php","SouthEast","MyFrame_options#options.SouthEast",$srcunset,$subunset) ?>
  | Static</I>
</B></DT>
	<DD class="dense">
		<P class="dense">Some applications (notably xv) have been designed without reading widely
        accepted and used standards such as &nbsp;<? local_doc_url("visualdoc.php","ICCCM","SupportedHints#options.ICCCM",$srcunset,$subunset) ?>
 . Gravity value is one of
        the hints that often get misplaced by applications. As the result may
        exhibit wierd placement behaviour - such as windows moving to the
        top-left with each resize or file opened. Try specifying StaticGravity
        for such apps. Also some applications do not &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  gravity correctly. For
        example you start an application with geometry +10-10 which means
        SouthWestGravity and that should fix position of left and bottom sides
        of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . But &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  its gravity to NorthWestGravity instead
        and as the result &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  gets placed further down to the bottom by the
        size of the framne decorations. In this cases you can specify whatever
        gravity you want and thus override those stupid apps.
</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Gravity type specification","Gravity",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.ShortLiving">
	</A><DT class="dense"><B>ShortLiving</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","ShortLiving","ASDatabaseEntry#options.ShortLiving",$srcunset,$subunset) ?>
  windows are always placed automatically and do
		not affect AvoidCover stuff.</P>
	</DD>


<A NAME="options.Slippery">
      </A><DT class="dense"><B><I>Slippery</I></B></DT>
      <DD class="dense">
<P class="dense">This is the default setting - windows stay on the desktop they were placed on, and do not &quot;follow&quot;
viewport, when desk/view changes.</P>
      </DD>


<A NAME="options.StartIconic">
      </A><DT class="dense"><B><I>StartIconic</I></B></DT>
      <DD class="dense">
<P class="dense">Causes the app to start and immediately &nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
  itself to the <I>IconBox</I>.
The default is <I>StartNormal</I> implicitly for all windows.</P>
      </DD>


<A NAME="options.StartNormal">
      </A><DT class="dense"><B><I>StartNormal</I></B></DT>
      <DD class="dense">
<P class="dense">Disables the effects of <I>StartIconic</I> setting - &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will not be iconifyed upon &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
 . 
This is the default</P>
      </DD>


<A NAME="options.StartsAnywhere">
      </A><DT class="dense"><B><I>StartsAnyWhere</I></B></DT>
      <DD class="dense">
<P class="dense">Upon &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be placed onto the current desktop. This is the implicit default setting for all windows.</P>
      </DD>


<A NAME="options.StartsOnDesk">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","StartsOnDesk","ASDatabaseEntry#options.StartsOnDesk",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
      <DD class="dense">
<P class="dense">Causes the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to start on the specified <I>desk</I> number. If
<I>SmartPlacement</I> is used in the <I>feel.name</I> file, the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will
appear on the specified <I>desk</I> number, but will require interaction to
place it; unless it was called with geometry settings. Specific
<I>Viewports</I> are also allowed, refer to them below.  The default is
<I>StartsAnyWhere</I> implicitly for all windows.</P>
      </DD>


<A NAME="options.StaysOnBack">
      </A><DT class="dense"><B><I>StaysOnBack</I></B></DT>
      <DD class="dense">
<P class="dense">Places &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  -1, essentially forcing it to go under most other windows. Default &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  is 0. </P>
<P class="dense"><I>NOTE: deprecated, use &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  instead.</I></P>
      </DD>


<A NAME="options.StaysOnTop">
      </A><DT class="dense"><B><I>StaysOnTop</I> | <I>StaysPut</I> | <I>StaysOnBack</I></B></DT>
      <DD class="dense">
<P class="dense">Places &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  1, making it go on TOP of most other windows. Default &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  is 0. </P>
<P class="dense"><I>NOTE: deprecated, use &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  instead.</I></P>
      </DD>


<A NAME="options.StaysPut">
      </A><DT class="dense"><B><I>StaysPut</I></B></DT>
      <DD class="dense">
<P class="dense">Places &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in default &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  0, disabling effects of <I>StaysOnTop</I>, 
<I>StaysOnBack</I> and <I>Layer</I>.</P>
<P class="dense"><I>NOTE: deprecated, use &nbsp;<? local_doc_url("visualdoc.php","Layer","ASDatabaseEntry#options.Layer",$srcunset,$subunset) ?>
  instead.</I></P>
      </DD>


<A NAME="options.Sticky">
      </A><DT class="dense"><B><I>Sticky</I></B></DT>
      <DD class="dense">
<P class="dense">Causes the app &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","stick","AudioEvents#options.stick",$srcunset,$subunset) ?>
  to it's location for each desktop that
becomes current, allowing the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to &quot;follow&quot; while changings desks/
views.  The default is <I>Slippery</I> implicitly for all windows.</P>
      </DD>


<A NAME="options.StickyStyle">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","StickyStyle","ASDatabaseEntry#options.StickyStyle",$srcunset,$subunset) ?>
  <I>style</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies a &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used for this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  when it does not have the
keyboard &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 , and is sticky.  If <I>style</I> is unspecified, the default
sticky style will be used instead (see <I>SWindowStyle</I>, below).</P>

      </DD>


<A NAME="options.Title">
      </A><DT class="dense"><B><I>Title</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that <B>afterstep</B> should put a title bar decoration on the app. This the default.</P>
      </DD>


<A NAME="options.UnfocusStyle">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","UnfocusStyle","ASDatabaseEntry#options.UnfocusStyle",$srcunset,$subunset) ?>
  <I>style</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies a &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used for this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  when it does not have the
keyboard &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 , and is not sticky.  If <I>style</I> is unspecified, the
default unfocus style will be used instead (see <I>UWindowStyle</I>, below).</P>

      </DD>


<A NAME="options.UseAnyViewport">
	</A><DT class="dense"><B>UseAnyViewport</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will treat an application as &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is relative to the desktop origin, when that application specifies its geometry at the time of mapping.</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","UseCurrentViewport","ASDatabaseEntry#options.UseCurrentViewport",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.UseCurrentViewport">
	</A><DT class="dense"><B>UseCurrentViewport</B></DT>
	<DD class="dense">
		<P class="dense">AfterStep will treat an application as &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is relative to the current viewport's origin, when that application specifies its geometry at the time of mapping.</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","UseAnyViewport","ASDatabaseEntry#options.UseAnyViewport",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.VerticalTitle">
      </A><DT class="dense"><B><I>VerticalTitle</I></B></DT>
      <DD class="dense">
<P class="dense">Causes the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  titlebar to be placed vertically along the left side of
the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , instead of horizontally across the top.</P>
      </DD>


<A NAME="options.ViewportX">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ViewportX","ASDatabaseEntry#options.ViewportX",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies the coordinate along the x-axis that <B>afterstep</B> should
place a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .  This allows opening a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  on a particular desk and view.
<I>number</I> is measured in pixels and the screen resolution is the outline
of a desk's particular boundaries; where it will then place it upon another
desk or view.  Combined with <I>ViewportY</I>, a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  can be given geometry
by <B>afterstep</B> and be placed in the desired desktop and view.</P>
      </DD>


<A NAME="options.ViewportY">
      </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ViewportY","ASDatabaseEntry#options.ViewportY",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies the coordinate along the y-axis that <B>afterstep</B> should
place a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .  This allows opening a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  on a particular desk and view.
<I>number</I> is measured in pixels and the screen resolution is the outline
of a desk's particular boundaries; where it will then place it upon another
desk or view.  Combined with <I>ViewportX</I>, a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  can be given geometry
by <B>afterstep</B> and be placed in the desired desktop and view.</P>
      </DD>


<A NAME="options.WindowBox">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  <I>&quot;window_box_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Requires AfterStep to use the specified &nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  for placement of this &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.WindowListHit">
      </A><DT class="dense"><B><I>WindowListHit</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that the app name will be shown on both the internal &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
 
List (default click of mouse buttons 2 &amp; 3 on the root window), and the
<I>WinList(1)</I> &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  bar.  This is the default implicitly for all windows.</P>
	</DD>


<A NAME="options.WindowListSkip">
      </A><DT class="dense"><B><I>WindowListSkip</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that the app name will be omitted from both the internal &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
 
List (default click of mouse buttons 2 &amp; 3 on the root window), and the
<I>WinList(1)</I> &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  bar. The default is <I>WindowListHit</I> implicitly
for all windows.</P>
      </DD>


<A NAME="options.WindowOpacity">
	</A><DT class="dense"><B>WindowOpacity</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


</DL></P></LI>
