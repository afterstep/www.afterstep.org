&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Feel</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep feel configuration</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 Feel
 </A><? local_doc_url("visualdoc.php","WindowBox definition","FeelWindowBox",$srcunset,$subunset) ?>
</UL>
<hr>





<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.AnimateDeskChange">
	</A><DT class="dense"><B>AnimateDeskChange</B></DT>
	<DD class="dense">
		<P class="dense">That setting requests nice animation to be drawn over the desktop, during desktop switching.&nbsp;<? local_doc_url("visualdoc.php","Comment","Balloon Contents#options.Comment",$srcunset,$subunset) ?>
  it out to speed up desktop switching.</P>
	</DD>


<A NAME="options.AppsBackingStore">
	</A><DT class="dense"><B>AppsBackingStore</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that app windows should request backing store.
		X-terminals and low memory systems should avoid this as redrawing
		will be quicker than pulling the saved image  from  swap  space.
		Backing store will always be faster than redraw on machines that
		have enough memory. This causes non-&nbsp;<? local_doc_url("visualdoc.php","ICCCM","SupportedHints#options.ICCCM",$srcunset,$subunset) ?>
  compliance.</P>
	</DD>


<A NAME="options.AutoFocus">
	</A><DT class="dense"><B>AutoFocus</B></DT>
	<DD class="dense">
		<P class="dense">Do not use. Obsolete.</P>
	</DD>


<A NAME="options.AutoRaise">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AutoRaise","Feel#options.AutoRaise",$srcunset,$subunset) ?>
  <I>delay</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies  the  delay  in  milliseconds  of  &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  must
		attain before being raised.</P>
	</DD>


<A NAME="options.AutoReverse">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AutoReverse","Feel#options.AutoReverse",$srcunset,$subunset) ?>
  <I>0|1|2</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  Warping (also called alt-tabbing) style.  0
		(the  default)  causes switching among windows in one direction.
		1  causes  a  closed  loop  switching  -   #1-&gt;#2-&gt;#3-&gt;#4   then
		#4-&gt;#3-&gt;#2-&gt;#1. 2 causes an &nbsp;<? local_doc_url("visualdoc.php","open","WharfSounds#options.open_folder",$srcunset,$subunset) ?>
  loop switching - #1-&gt;#2-&gt;#3-&gt;#4
		then #4-&gt;#1-&gt;#2-&gt;#3 etc.</P>
	</DD>


<A NAME="options.AutoTabThroughDesks">
	</A><DT class="dense"><B>AutoTabThroughDesks</B></DT>
	<DD class="dense">
		<P class="dense">In  conjunction  with  &nbsp;<? local_doc_url("visualdoc.php","AutoReverse","Feel#options.AutoReverse",$srcunset,$subunset) ?>
 ,  this  will  Warp  (alt-tab)
		through windows on all desks.</P>
	</DD>


<A NAME="options.BackingStore">
	</A><DT class="dense"><B>BackingStore</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that decorations should request backing store.   Refer
		to &nbsp;<? local_doc_url("visualdoc.php","AppsBackingStore","Feel#options.AppsBackingStore",$srcunset,$subunset) ?>
  for further details.</P>
	</DD>


<A NAME="options.CenterOnCirculate">
	</A><DT class="dense"><B>CenterOnCirculate</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that when Warping (alt-tabbing), the desktop
		page containing the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to which the pointer is moving will
		be automatically selected and afterstep will attempt to center
		the target &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in the desktop viewport, rather than just
		flipping to the desktop the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  resides in.</P>
	</DD>


<A NAME="options.CirculateSkipIcons">
	</A><DT class="dense"><B>CirculateSkipIcons</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that all icons should be skipped  when  Warping  (alt-
		tabbing) between windows.</P>
	</DD>


<A NAME="options.ClickTime">
	</A><DT class="dense"><B>ClickTime</B></DT>
	<DD class="dense">
		<P class="dense"> Specifies  that  afterstep should consider two mouse clicks made
		within delay milliseconds to be a double mouse  click,  and  not
		two  single mouse clicks. The default delay is 150 milliseconds.</P>
	</DD>


<A NAME="options.ClickToFocus">
	</A><DT class="dense"><B>ClickToFocus</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  that  the  keyboard  input (aka focus) stays with one
		&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  until a &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's TitleBar is  clicked  on,  or  gains
		&nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  through Warping or de-iconification.</P>
<P class="dense">        AfterStep will not switch &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  following mouse pointer, but instead will
        switch it when &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is explicitely clicked. This is the same as before.
        The only difference is that AfterStep will not &nbsp;<? local_doc_url("visualdoc.php","Raise","Functions#options.Raise",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  automagically,
        unless some other settings are &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 . Possible way to &nbsp;<? local_doc_url("visualdoc.php","Raise","Functions#options.Raise",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  on
        focusing include:</P>
                <P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","AutoRaise","Feel#options.AutoRaise",$srcunset,$subunset) ?>
  0  in feel file ( delay of 0 )</P>
                <P class="dense">- bind mouse clicks to &nbsp;<? local_doc_url("visualdoc.php","Raise","Functions#options.Raise",$srcunset,$subunset) ?>
  or &nbsp;<? local_doc_url("visualdoc.php","RaiseLower","Functions#options.RaiseLower",$srcunset,$subunset) ?>
  function in feel file.</P>
                <P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ClickToRaise","Feel#options.ClickToRaise",$srcunset,$subunset) ?>
  flag in feel file.</P>

	</DD>


<A NAME="options.ClickToRaise">
	</A><DT class="dense"><B>ClickToRaise</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that windows should be raised when a button is clicked
		in the titlebar, handle (low bar), or application area.  buttons
		specifies the list of buttons which triggers this function.
		In  &nbsp;<? local_doc_url("visualdoc.php","AutoRaise","Feel#options.AutoRaise",$srcunset,$subunset) ?>
   mode   this  will  simply &nbsp;<? local_doc_url("visualdoc.php","raise","AudioEvents#options.raise_window",$srcunset,$subunset) ?>
  the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the
		click is before the delay  specified in &nbsp;<? local_doc_url("visualdoc.php","AutoRaise","Feel#options.AutoRaise",$srcunset,$subunset) ?>
 .  In  &nbsp;<? local_doc_url("visualdoc.php","ClickToFocus","Feel#options.ClickToFocus",$srcunset,$subunset) ?>
 
		mode, this will &nbsp;<? local_doc_url("visualdoc.php","raise","AudioEvents#options.raise_window",$srcunset,$subunset) ?>
  the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  and give it &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.CoverAnimationSteps">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CoverAnimationSteps","Feel#options.CoverAnimationSteps",$srcunset,$subunset) ?>
  <I>steps count</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","CoverAnimationSteps","Feel#options.CoverAnimationSteps",$srcunset,$subunset) ?>
  is the number of animation steps to take while removing
&nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
 -tinted cover &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.CoverAnimationType">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CoverAnimationType","Feel#options.CoverAnimationType",$srcunset,$subunset) ?>
  <I>type</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","CoverAnimationType","Feel#options.CoverAnimationType",$srcunset,$subunset) ?>
  determines what type of animation to use while removing
&nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
 -tinted desktop cover - use values from 0 to 13.</P>
	</DD>


<A NAME="options.Cursor">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Cursor","ColorScheme_options#options.Cursor",$srcunset,$subunset) ?>
  <I>cursor_number cursor_type</I></B></DT>
    <DD class="dense">
    <P class="dense">Specifies the <I>cursor_type</I> for the given <I>cursor_number</I>.  Valid
    <I>cursor_numbers</I> are 0 though 10 and listed in all the shipped
    <I>feel.name</I> files. The <I>cursor_types</I> are listed in the
     /usr/include/X11/cursorfont.h file.</P>
    </DD>


<A NAME="options.CustomCursor">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CustomCursor","Feel#options.CustomCursor",$srcunset,$subunset) ?>
  <I>path</I></B></DT>
	<DD class="dense">
		<P class="dense">Adds a custom cursor from the search paths. AfterStep searches the following paths in addition to the system Xorg/Xfree paths: ~/.afterstep/desktop/cursors/ and $SHAREDIR/afterstep/desktop/cursors/.</P>
		<P class="dense">Note: under Xorg, this is probably depreciated. Current Xorg uses the Xcursor library to load cursor data from a single file.</P>
	</DD>


<A NAME="options.DecorateTransients">
	</A><DT class="dense"><B>DecorateTransients</B></DT>
	<DD class="dense">
		<P class="dense"> Specifies  that  transient  windows (pop-up dialog boxes), which
		are normally not decorated, should be given the usual title  and
		low  bars.   Note: some pop-up windows and menus are not managed
		by the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  manager, so do not get these decorations.</P>
	</DD>


<A NAME="options.DefaultWindowBox">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DefaultWindowBox","Feel#options.DefaultWindowBox",$srcunset,$subunset) ?>
  <I>&quot;windowbox_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  boxes are processed in order they were listed in &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
 . If
        suitable windowbox could not be found for the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in the database file - then windowbox
        named in &nbsp;<? local_doc_url("visualdoc.php","DefaultWindowBox","Feel#options.DefaultWindowBox",$srcunset,$subunset) ?>
  will be forced.</P>
	</DD>


<A NAME="options.DeskAnimationSteps">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DeskAnimationSteps","Feel#options.DeskAnimationSteps",$srcunset,$subunset) ?>
  <I>steps</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies how many animation steps should be rendered while switching desktops/removing &nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
  cover.
Reduce that number to speedup animation.</P>
	</DD>


<A NAME="options.DeskAnimationType">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DeskAnimationType","Feel#options.DeskAnimationType",$srcunset,$subunset) ?>
  <I>value</I></B></DT>
	<DD class="dense">
		<P class="dense">This requests particular type of animation to be rendered while switching desktops. Available values are in range of 0 to 12.</P>
	</DD>


<A NAME="options.DontMoveOff">
	</A><DT class="dense"><B>DontMoveOff</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that windows should not  be  moved  off  or  initially
		placed  off  of  the desktop.  A few programs will not work cor-
		rectly &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you use this option.  This  only  keeps  windows  from
		being completely lost off the edge of the desktop. It insists on
		keeping 16 pixels on the desktop, but does not attempt  to  keep
		the entire &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  on the desk.</P>
	</DD>


<A NAME="options.DontRestoreFocus">
	</A><DT class="dense"><B>DontRestoreFocus</B></DT>
	<DD class="dense">
	<P class="dense">Will not &nbsp;<? local_doc_url("visualdoc.php","restore","AudioEvents#options.restore",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  to the recently focused application wile
        switching desktops.</P>
	</DD>


<A NAME="options.EdgeResistance">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","EdgeResistance","Feel#options.EdgeResistance",$srcunset,$subunset) ?>
  <I>delay pixels</I></B></DT>
	<DD class="dense">
		<P class="dense"> Specifies how hard it should be to change views within a desktop
		by moving the mouse over the edge of the screen, and how hard it
		hould be to move a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  over the edge of a screen.
</P><P class="dense">
		The  delay  in  milliseconds,  defines how long the pointer must
		spend at the screen edge before that view becomes current.  This
		is  useful  in conjunction with &nbsp;<? local_doc_url("visualdoc.php","EdgeScroll","Feel#options.EdgeScroll",$srcunset,$subunset) ?>
  100 100, so the views
		don't get switched accidently.
</P><P class="dense">
		The pixels defines how far over the edge a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  must  &quot;appear&quot;
		to move before it actually moves partially off the screen.
</P><P class="dense">
		Note  that  with &nbsp;<? local_doc_url("visualdoc.php","EdgeScroll","Feel#options.EdgeScroll",$srcunset,$subunset) ?>
  0 0, it is still possible to move or
		resize windows across the edge of the current screen. By setting
		the  pixels  parameter  of &nbsp;<? local_doc_url("visualdoc.php","EdgeResistance","Feel#options.EdgeResistance",$srcunset,$subunset) ?>
  to 10000, this type of
		motion is impossible. However, with  EdgeResistances  less  than
		10000,  but  greater than 0, moving over pages becomes difficult
		but not impossible.</P>
	</DD>


<A NAME="options.EdgeScroll">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","EdgeScroll","Feel#options.EdgeScroll",$srcunset,$subunset) ?>
  <I>horizontal vertical</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the percentage of a page to  scroll  when  the  cursor
		hits  the edge of a page. Setting &nbsp;<? local_doc_url("visualdoc.php","EdgeScroll","Feel#options.EdgeScroll",$srcunset,$subunset) ?>
  to 0 0 will disable
		scrolling.  Setting this option to 100  100  will  scroll  whole
		pages.  &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to 1000 1000, scrolling will wrap around at the edge
		of the desktop.  Both horizontal and vertical should be positive
		numbers.</P>
	</DD>


<A NAME="options.FollowTitleChanges">
	</A><DT class="dense"><B>FollowTitleChanges</B></DT>
	<DD class="dense">
	<P class="dense">That will force AfterStep to reread and merge all the hints and
        settings from the database files, whenever &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  changes either its
        name or icon name.</P>
	</DD>


<A NAME="options.Function">
	</A><DT class="dense"><B>Function</B></DT>
	<DD class="dense">
		<P class="dense">Specifies a complex function definition and is covered in the built-in command/function.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","AS Function","Functions",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.IconTitle">
	</A><DT class="dense"><B>IconTitle</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  that  a  title should be displayed under an iconified
		app.  The colors used are the &nbsp;<? local_doc_url("visualdoc.php","ForeColor","MyStyle_options#options.ForeColor",$srcunset,$subunset) ?>
   and  &nbsp;<? local_doc_url("visualdoc.php","BackColor","MyStyle_options#options.BackColor",$srcunset,$subunset) ?>
   of  the
		ButtonTitleFocus in the look.name file. Note: less space is left
		for the app's icon, so it will be resized  acordingly.   Only  a
		portion of the icon title will be displayed until the icon gains
		&nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 , and then the title &quot;box&quot; will expand to reveal  the  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's entire name.</P>
	</DD>


<A NAME="options.KeepIconWindows">
</A><DT class="dense"><B><I>KeepIconWindows</I></B></DT>
  <DD class="dense">
<P class="dense">Specifies that applications should be allowed to specify their own icon
windows.</P>
	</DD>


<A NAME="options.Key">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Key","Feel#options.Key",$srcunset,$subunset) ?>
  <I>keyname</I> <I>context</I> <I>modifier</I> <I>Command</I></B></DT>
  <DD class="dense">
<P class="dense">Specifies a key-stroke binding definition, similar to <I>Mouse</I>.
<I>keyname</I> is the keyboard key name. Valid <I>keyname</I>'s are found in
the /usr/X11/include/X11/keysymdef.h file and are specified here without
the leading &quot;XK_&quot;.  The <I>context</I> describes where the mouse is resting
when the <I>keyname</I> is pressed and can be any combination of the
following:</P>


   R = Root &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  (main background)
   F = &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Frame","ASDatabaseEntry#options.Frame",$srcunset,$subunset) ?>
  (the BottomBar handle corners)
   S = &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  TitleBar or BottomBar
   I = Iconified &nbsp;<? local_doc_url("visualdoc.php","Button","ASDatabaseEntry#options.Button",$srcunset,$subunset) ?>
  (minimized &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  icon)
   T = &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  TitleBar
   W = Application &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
 
   A = Any of the above except for TitleButtons
1-10 = &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  number of the TitleBar [ not very useful here ]


<P class="dense"><I>modifier</I> is the key-stroke combination associated with the
<I>context</I> entry, to issue the <I>Command</I>. Valid <I>modifier</I>'s
are:</P>

<PRE>
   N = No modifiers
   C = Control
   S = Shift
   M = Meta
   A = Any modifier
</PRE>

<P class="dense"><I>Command</I> can be any <B>afterstep</B> <I>Built-in</I> command/
function, <I>Popup</I> or user defined <I>Function</I>.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","AS Function","Functions",$srcunset,$subunset) ?> for further details.</P>
	</DD>





<A NAME="options.MenusHigh">
	</A><DT class="dense"><B>MenusHigh</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  that  any  pop-up menu's submenu should appear at the
		top of the parent menu instead of starting at the point  in  the
		parent &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  where the submenu item lies.</P>
	</DD>


<A NAME="options.Mouse">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Mouse","Feel#options.Mouse",$srcunset,$subunset) ?>
  <I>button</I> <I>context</I> <I>modifier</I> <I>Command</I></B></DT>
  <DD class="dense">
<P class="dense">Specifies a mouse binding definition. <I>button</I> is the mouse button
number [0, 1, 2, or 3]. If <I>button</I> is zero, then any mouse button
invoked issues the <I>Command</I>.  <I>context</I> describes where the
mouse click occurred and can be any combination of the following:</P>

<PRE>
   R = Root &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  (main background)
   F = &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Frame","ASDatabaseEntry#options.Frame",$srcunset,$subunset) ?>
  (the BottomBar handle corners)
   S = &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  TitleBar or BottomBar
   I = Iconified &nbsp;<? local_doc_url("visualdoc.php","Button","ASDatabaseEntry#options.Button",$srcunset,$subunset) ?>
  (minimized &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  icon)
   T = &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  TitleBar
   W = Application &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
 
   A = Any of the above except for TitleButtons
1-10 = &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  number of the TitleBar, corresponds to the
       entry in the <I>look.name</I> file
</PRE>

<P class="dense">The action to be taken by the defined &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  is defined in the
<I>feel.name</I> file.  Defining a &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  without having a corresponding
entry in the <I>feel.name</I> file will cause the &nbsp;<? local_doc_url("visualdoc.php","TitleButton","Look_options#options.TitleButton",$srcunset,$subunset) ?>
  icon to be
displayed, but not react when pressed.</P>

<P class="dense"><I>modifier</I> is the key-stroke combination associated with the
<I>context</I> entry, to issue the <I>Command</I>. Valid <I>modifier</I>'s
are:</P>

<PRE>
   N = No modifiers
   C = Control
   S = Shift
   M = Meta
   A = Any modifier
</PRE>

<P class="dense"><I>Command</I> can be any <B>afterstep</B> <I>Built-in</I> command/
function, <I>Popup</I> or user defined <I>Function</I>.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","AS Function","Functions",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.NoPPosition">
	</A><DT class="dense"><B>NoPPosition</B></DT>
	<DD class="dense">
		<P class="dense">Species that afterstep should ignore the  PPosition  field  when
		placing  &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  windows, in other words, windows can't choose where
		to place  themselves.   Adherence  to  the  PPosition  field  is
		required for some applications.</P>
	</DD>


<A NAME="options.NoSnapKey">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","NoSnapKey","Feel#options.NoSnapKey",$srcunset,$subunset) ?>
  <I>key</I></B></DT>
	<DD class="dense">
	<P class="dense">AfterStep now has a feature that &quot;snaps&quot; windows to different
	desktop features, such as edges of other windows and edge of the screen.
	To disable it temorarily you can press and hold Shift key. &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  this
        setting to request different modifier key instead of Shift.</P>
	</DD>


<A NAME="options.OpaqueMove">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","OpaqueMove","Feel#options.OpaqueMove",$srcunset,$subunset) ?>
  <I>%</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the maximum size &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  where opaque  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
   movement
		should  be used.  % is percent of the total screen area.  &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to
		0, all windows will be moved using the  traditional  rubber-band
		outline.  &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to 100, all windows will be move as &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  windows.
		The default is 5 which allows small windows to be  moved  in  an
		opaque  manner,  but  large windows to be moved as rubber-bands.
		Using this option with large values can slow down video response
		on slower systems.</P>
	</DD>


<A NAME="options.OpaqueResize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","OpaqueResize","Feel#options.OpaqueResize",$srcunset,$subunset) ?>
  <I>%</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies  the  maximum size &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  where opaque resizing should
		be used.  % is percent of the total screen area.  &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to 0,  all
		windows  will  be resized using the traditional rubber-band out-
		line.  &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to 100, all windows will be resized as &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  windows.
		The  default is 5 which allows small windows to be resized in an
		opaque manner, but large windows to be resized as  rubber-bands.
		Using this option with large values can slow down video response
		on slower systems.</P>
	</DD>


<A NAME="options.PagingDefault">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","PagingDefault","Feel#options.PagingDefault",$srcunset,$subunset) ?>
  <I>0|1</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  Paging should be enabled (1) or disabled (0).
		Paging is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to enabled by default.</P>
	</DD>


<A NAME="options.PersistentMenus">
	</A><DT class="dense"><B>PersistentMenus</B></DT>
	<DD class="dense">
	<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
  now &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you try to &nbsp;<? local_doc_url("visualdoc.php","open","WharfSounds#options.open_folder",$srcunset,$subunset) ?>
  a menu when its already opened - that will
        cause menu to &nbsp;<? local_doc_url("visualdoc.php","close","WharfSounds#options.close_folder",$srcunset,$subunset) ?>
 . To disable this behaviour and instead pop-up a menu
        again - use this setting.</P>
	</DD>


<A NAME="options.Popup">
	</A><DT class="dense"><B>Popup</B></DT>
	<DD class="dense">
		<P class="dense">Specifies a menu popup definition and is covered in the built-in command/function.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","AS Function","Functions",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.RandomPlacement">
	</A><DT class="dense"><B>RandomPlacement</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that windows which would normally require user  inter-
		vention  for  placement  be  automagically  placed  in  ever-so-
		slightly random locations.</P>
	</DD>


<A NAME="options.RecentSubmenuItems">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","RecentSubmenuItems","Feel#options.RecentSubmenuItems",$srcunset,$subunset) ?>
  <I>number_of_items</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines maximum number of recently used submenu items
		to be listed under menu item. &nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  to 0 to disable feature.
		Default is 4.</P>
	</DD>


<A NAME="options.SaveUnders">
	</A><DT class="dense"><B>SaveUnders</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that afterstep frames should request saveunders.  This
		will cause afterstep to &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  those portions of windows that  are
		not  visible  to  system memory.  This can significantly improve
		the performance during opaque moves, but it causes a significant
		increase  in  memory usage.  This can also cause garbled display
		with some applications.</P>
	</DD>


<A NAME="options.ScreenEdgeAtraction">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ScreenEdgeAttraction","Feel#options.ScreenEdgeAtraction",$srcunset,$subunset) ?>
  <I>distance</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines distance from which &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be attracted to
		the screen edge, while being interactively moved/resized.</P>
	</DD>


<A NAME="options.ShadeAnimationSteps">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ShadeAnimationSteps","Feel#options.ShadeAnimationSteps",$srcunset,$subunset) ?>
  <I>steps</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines how many steps to use to render animation when &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  gets shaded/unshaded.</P>
	</DD>


<A NAME="options.ShadeAnimationSteps">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ShadeAnimationSteps","Feel#options.ShadeAnimationSteps",$srcunset,$subunset) ?>
  <I>steps</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines how many steps to use to render animation when &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  gets shaded/unshaded.</P>
	</DD>


<A NAME="options.SloppyFocus">
	</A><DT class="dense"><B>SloppyFocus</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  that  windows  retain  &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  until the mouse moves to
		another &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , or Warping causes another &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to gain  &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","SloppyFocus","Feel#options.SloppyFocus",$srcunset,$subunset) ?>
  has no effect &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ClickToFocus","Feel#options.ClickToFocus",$srcunset,$subunset) ?>
  is also specified.</P>
	</DD>


<A NAME="options.SmartPlacement">
	</A><DT class="dense"><B>SmartPlacement</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that windows be placed in areas that no other  windows
		occupy,  otherwise user intervention becomes required for placement.
		Have fun, try specifying both. :-)</P>
	</DD>


<A NAME="options.StickyIcons">
	</A><DT class="dense"><B>StickyIcons</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that icons should &nbsp;<? local_doc_url("visualdoc.php","stick","AudioEvents#options.stick",$srcunset,$subunset) ?>
  to the screen's glass and fol-
		low it from desk/view to desk/view.</P>
	</DD>


<A NAME="options.StubbornIconPlacement">
	</A><DT class="dense"><B>StubbornIconPlacement</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  that  icons  should avoid being hidden behind windows
		placed over the &nbsp;<? local_doc_url("visualdoc.php","IconBox","Look_options#options.IconBox",$srcunset,$subunset) ?>
  by  moving  themselves  around  (dancing
		icons).</P>
	</DD>


<A NAME="options.StubbornIcons">
	</A><DT class="dense"><B>StubbornIcons</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that icons should uniconify to their original desk. By
		default, icons uniconify to the current desk.</P>
	</DD>


<A NAME="options.StubbornPlacement">
	</A><DT class="dense"><B>StubbornPlacement</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  windows should avoid being placed over icons.</P>
	</DD>


<A NAME="options.SuppressIcons">
	</A><DT class="dense"><B>SuppressIcons</B></DT>
	<DD class="dense">
		<P class="dense">Specifies  that  no  icon  should be shown for any &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
		being iconified, similar to NoIcon.</P>
	</DD>


<A NAME="options.WinListHideIcons">
	</A><DT class="dense"><B>WinListHideIcons</B></DT>
	<DD class="dense">
		<P class="dense">When &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , Icons in internal &nbsp;<? local_doc_url("visualdoc.php","WindowList","Functions#options.WindowList",$srcunset,$subunset) ?>
  ( the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  that pops up &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you right click on root window) will not be shown.</P>
	</DD>


<A NAME="options.WinListSortOrder">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WinListSortOrder","Feel#options.WinListSortOrder",$srcunset,$subunset) ?>
  <I>0/1/2/3</I></B></DT>
	<DD class="dense">
		<P class="dense">Arranges WinList entries based-on the following qualifiers: 0 - circulations order (default), 1 - Alpha order, 2 - Stacking order (unimplemented), 3 - creation order (unimplemented).</P>
	</DD>


<A NAME="options.WindowBox">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  <I>&quot;windowbox_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  defines an area on the screen/virtual desktop into which a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will
        be placed on &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Feel WindowBox definition","FeelWindowBox",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.WindowEdgeAttraction">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WindowEdgeAttraction","Feel#options.WindowEdgeAttraction",$srcunset,$subunset) ?>
  <I>distance</I></B></DT>
	<DD class="dense">
	<P class="dense">Defines distance from which &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be attracted to the other
        &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's edge, while being interactively moved/resized.</P>
	</DD>


<A NAME="options.XorValue">
</A><DT class="dense"><B><I>XorValue value</I></B></DT>
  <DD class="dense">
<P class="dense">Specifies the <I>value</I> with which bits are XOR'ed when doing rubber-band
&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  moving or resizing. Setting this value is a trial-and-error process.</P>
	</DD>


<A NAME="options.Xzap">
</A><DT class="dense"><B><I>Xzap number</I></B></DT>
  <DD class="dense">
<P class="dense">Specifies the horizontal offset of the cursor when warping. This offset
is relative to the upper-left corner of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  being warped to.</P>
	</DD>


<A NAME="options.Yzap">
</A><DT class="dense"><B><I>Yzap number</I></B></DT>
  <DD class="dense">
<P class="dense">Specifies the vertical offset of the cursor when warping. This offset is
relative to the upper-left corner of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  being warped to.</P>
	</DD>


</DL></P></LI>
