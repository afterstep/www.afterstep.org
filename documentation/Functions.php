&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep Function</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">built in AfterStep functions</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","AfterStep","AfterStep",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","AutoExec","AutoExec",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Base Configuration","Base",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
 
</UL>
<hr>





<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Background">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Change &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  image to specified file</P>
		<P class="dense">Copies image file specified by filename into user's non-configurable directory. 
Depending on &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  configuration in look file, this may not have any effect.
</P>
	</DD>


<A NAME="options.BackgroundForeign">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BackgroundForeign","Functions#options.BackgroundForeign",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Change &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  image to specified file</P>
		<P class="dense">Works same as &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  but generates minipixmap from the image automagically. 
		Also tries to determine &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  should be fullscreen and crops/scales it to the proper size.
</P>
	</DD>


<A NAME="options.Beep">
	</A><DT class="dense"><B>Beep</B></DT>
	<DD class="dense">
		<P class="dense">Make the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  manager issue a beep - pretty useful eh? :)</P>
	</DD>


<A NAME="options.BookmarkWindow">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BookmarkWindow","Functions#options.BookmarkWindow",$srcunset,$subunset) ?>
  <I>&quot;name&quot; new_bookmark</I></B></DT>
	<DD class="dense">
		<P class="dense">Places a bookmark on the selected &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , to be used later
		on to get back to that &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Category">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Category","Functions#options.Category",$srcunset,$subunset) ?>
 &quot;<I>category-name</I>&quot;</B></DT>
	<DD class="dense">
		<P class="dense">Generate a menu from all the members belonging to specified desktop category. For example &nbsp;<? local_doc_url("visualdoc.php","Category","Functions#options.Category",$srcunset,$subunset) ?>
  &quot;Modules&quot;,
		generate a menu of all AfterStep modules in afterstep/applications/modules.desktop</P>
	</DD>


<A NAME="options.CategoryTree">
	</A><DT class="dense"><B>CategoryTree</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.ChangeColorscheme">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ChangeColorscheme","Functions#options.ChangeColorscheme",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Change Color Scheme to specified file</P>
		<P class="dense">Copies &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  scheme configuration file specified by filename into user's non-configurable directory.</P>
	</DD>


<A NAME="options.ChangeFeel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ChangeFeel","Functions#options.ChangeFeel",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Change Feel to specified file</P>
		<P class="dense">Copies feel configuration file specified by filename into user's non-configurable directory.</P>
	</DD>


<A NAME="options.ChangeLook">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ChangeLook","Functions#options.ChangeLook",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Change Look to specified file</P>
		<P class="dense">Copies Look configuration file specified by filename into user's non-configurable directory, to be used by AfterStep.</P>
	</DD>


<A NAME="options.ChangeTheme">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ChangeTheme","Functions#options.ChangeTheme",$srcunset,$subunset) ?>
  <I>&quot;name&quot; file_name</I></B></DT>
	<DD class="dense">
		<P class="dense">Sets current theme &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  file. Such &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  file may include
                settings for look, feel, menu, autoexec and any &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.ChangeThemeFile">
	</A><DT class="dense"><B>ChangeThemeFile</B></DT>
	<DD class="dense">
		<P class="dense">Installs a theme from a provided .tar, .tar.gz, or .tar.bz2 AfterStep theme file.</P>
	</DD>


<A NAME="options.ChangeWindowDown">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ChangeWindowDown","Functions#options.ChangeWindowDown",$srcunset,$subunset) ?>
  [<I>&quot;name&quot; window_name</I>]</B></DT>
 <DD class="dense">
    <P class="dense">Causes the pointer to move to the previous &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in the list of windows for
    which <I>CirculateSkip</I> has not not been specified.</P>

    <P class="dense">The mouse will jump (going backwards) to the first &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  whose name (or
    icon name or class) matches <I>window_name</I>. The <I>&quot;name&quot;</I> entry
    then becomes required, but serves no purpose &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the function is not called
    from a menu or popup.</P>
 </DD>


<A NAME="options.ChangeWindowUp">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ChangeWindowUp","Functions#options.ChangeWindowUp",$srcunset,$subunset) ?>
  [<I>&quot;name&quot; window_name</I>]</B></DT>
 <DD class="dense">
    <P class="dense">Causes the pointer to move to the previous &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in the list of windows
    for which <I>CirculateSkip</I> has not not been specified.</P>
    <P class="dense">The mouse will jump to the first &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  whose name (or icon name or class)
    matches <I>window_name</I>. The <I>&quot;name&quot;</I> entry then becomes required,
    but serves no purpose &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the function is not called from a menu or popup.</P>
 </DD>


<A NAME="options.Close">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Close","Functions#options.Close",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">First sends the WM_DELETE message, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  this is not understood, then the
	<I>XKillClient(3)</I> is sent to the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
    </DD>


<A NAME="options.CursorMove">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CursorMove","Functions#options.CursorMove",$srcunset,$subunset) ?>
  <I>horizontal vertical</I></B></DT>
 <DD class="dense">
    <P class="dense">Moves the mouse pointer by <I>horizontal</I> views in the x-direction, and
    <I>vertical</I> views in the y-direction. Either or both entries may be
    negative. Both <I>horizontal</I> and <I>vertical</I> values are expressed in
    percent of pages, so 100 would be one full view.</P>
    <P class="dense">The &nbsp;<? local_doc_url("visualdoc.php","CursorMove","Functions#options.CursorMove",$srcunset,$subunset) ?>
  function should not be called from pop-up menus.</P>
 </DD>


<A NAME="options.Delete">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Delete","Functions#options.Delete",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Sends a WM_DELETE message to a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  asking that it remove itself,
	frequently causing the application to exit.</P>
    </DD>


<A NAME="options.Desk">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Desk","Functions#options.Desk",$srcunset,$subunset) ?>
  <I>arg1</I> [<I>arg2</I>]</B></DT>
 <DD class="dense">
    <P class="dense">Changes current desk to another desk as surmised from the arguments
    supplied.  If only <I>arg1</I> is specified and is non-zero, then the
    current desk will become &quot;desk + arg1&quot; and <I>arg2</I> is ignored.
    If <I>arg1</I> is zero, then <I>arg2</I> must be specified or no desk
    change will occur; and <I>arg2</I> will specify the desk to switch to.
    &nbsp;<? local_doc_url("visualdoc.php","Desk","Functions#options.Desk",$srcunset,$subunset) ?>
  numbers are determined dynamically and must be between 2147483647
    and -2147483648; meaning they can also be negative.</P>
 </DD>


<A NAME="options.DesktopEntry">
	</A><DT class="dense"><B>DesktopEntry</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Destroy">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Destroy","Functions#options.Destroy",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Sends the <I>XKillClient(3)</I> to a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . Guaranteed to get rid of the
	&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
    </DD>


<A NAME="options.EndFunction">
	</A><DT class="dense"><B>EndFunction</B></DT>
	<DD class="dense">
		<P class="dense">Terminates a Complex &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  definition.</P>
	</DD>


<A NAME="options.EndPopup">
	</A><DT class="dense"><B>EndPopup</B></DT>
	<DD class="dense">
		<P class="dense">Terminates a &nbsp;<? local_doc_url("visualdoc.php","Popup","Feel#options.Popup",$srcunset,$subunset) ?>
  definition.</P>
	</DD>


<A NAME="options.Exec">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Exec","Functions#options.Exec",$srcunset,$subunset) ?>
  <I>&quot;name&quot;</I> <I>command</I> [-options]</B></DT>
 <DD class="dense">
    <P class="dense">Specifies a sub process to initiate.  The <I>&quot;name&quot;</I> is required for
    ease of parsing.  The <I>command</I> is the command or application to be
    invoked along with any desired -options.</P>
 </DD>


<A NAME="options.ExecBrowser">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ExecBrowser","Functions#options.ExecBrowser",$srcunset,$subunset) ?>
  <I>&quot;name&quot; URL</I> </B></DT>
	<DD class="dense">
		<P class="dense">Open URL in web browser.</P>
	</DD>


<A NAME="options.ExecEditor">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ExecEditor","Functions#options.ExecEditor",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I> </B></DT>
	<DD class="dense">
		<P class="dense">Open file in &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  editor.</P>
	</DD>


<A NAME="options.ExecInTerm">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ExecInTerm","Functions#options.ExecInTerm",$srcunset,$subunset) ?>
  <I>&quot;name&quot;</I> <I>command</I> [-options]</B></DT>
 <DD class="dense">
    <P class="dense">Specifies a sub process to initiate. It is similar to &nbsp;<? local_doc_url("visualdoc.php","Exec","Functions#options.Exec",$srcunset,$subunset) ?>
  , though targeted at programms that need
    a terminal to run. The following terminal emulators are tried in order: aterm, rxvt, eterm, xterm.</P>
 </DD>


<A NAME="options.Focus">
 </A><DT class="dense"><B>Focus</B></DT>
 <DD class="dense">
    <P class="dense">Moves the view or &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  as needed to make the selected &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  visible.
    Sets the keyboard &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  to the selected &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . Raises the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
    needed to make it visible. Warps the pointer into the selected &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in
    &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
 -follows-mouse  mode.  Does not de-&nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
 .  This function is
    primarily handy when used with a &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  such as the WinList.</P>
</DD>


<A NAME="options.Folder">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Folder","Functions#options.Folder",$srcunset,$subunset) ?>
  &quot;<I>folder-name</I>&quot;</B></DT>
  <DD class="dense">
<P class="dense">Defines a slide-out folder inside the current folder.  The following 
button definitions will be placed inside of the subfolder, until a 
<I>*Wharf ~Folder</I> line is encountered.  See the <I>EXAMPLES</I> 
section below for an example. Folders may be nested.</P>
<P class="dense">This is a Wharf specific &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Fullscreen">
	</A><DT class="dense"><B>Fullscreen</B></DT>
	<DD class="dense">
		<P class="dense">Toggle &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Fullscreen","Functions#options.Fullscreen",$srcunset,$subunset) ?>
  state. Will disregard any AvoidCover windows and will try to make &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  
		as big as the screen unless it's hints &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  certain limitation on size. &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  in &nbsp;<? local_doc_url("visualdoc.php","Fullscreen","Functions#options.Fullscreen",$srcunset,$subunset) ?>
  mode cannot be Maximized.</P>
	</DD>


<A NAME="options.Function">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  <I>&quot;function_name&quot;</I></B></DT>
<DD class="dense">
<P class="dense">There are also two situations where this might occur as well; as a function
definition stanza, or in calling a previously defined function decleration.</P>

<PRE>
&nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  <I>&quot;function_name&quot;</I>
    built-in_file <B>&quot;action&quot;</B> [<I>argument</I>]
&nbsp;<? local_doc_url("visualdoc.php","EndFunction","Functions#options.EndFunction",$srcunset,$subunset) ?>
 
</PRE>

<P class="dense">Specifies the definition of a complex function <I>&quot;function_name&quot;</I>,
which can later be bound to a mouse button or key using
<I>&quot;function_name&quot;</I> to &nbsp;<? local_doc_url("visualdoc.php","recall","asimagexml#recall",$srcunset,$subunset) ?>
  this declaration.  <I>built-in_command</I>
specifies which command will be performed, taking its syntax from this
list of Built-In Commands/Functions. <I>&quot;action&quot;</I> specifies the action
to take followed by any additional <I>arguments</I> needed by the
<I>built-in_command</I>. Menus can be specified by using the <I>Popup</I>
command, as long as the menu was defined earlier in the configuration file.</P>

<P class="dense">The trigger <I>actions</I> which are recognized are Immediate (can be
shortened to &quot;I&quot;), Motion, Click, DoubleClick and TripleClick. Immediate
actions are executed as soon as the function is activated, even &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
has not been selected. If there are actions other than immediate ones,
<B>afterstep</B> will wait to see &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the user is clicking, double-clicking,
triple-clicking or dragging the mouse; then will execute only the built-ins
from the function definition whose trigger action matches the action
performed by the user.  The clicking, double-clicking and triple-clicking
concepts do not carry through to using keyboard shortcuts.</P>

<P class="dense">Two special functions exist: InitFunction and RestartFunction. The
InitFunction will be called when <B>afterstep</B> is started for the first
time in any X session, and can be used to start modules and begin programs.
The RestartFunction will be called when <B>afterstep</B> is restarted. It can
be used to re-start modules but probably should not be used to start
programs.  These two functions are defined in the <I>autoexec</I> file.</P>

<P class="dense">When calling a previously defined &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  or a &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  from a key-stroke
combination, &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  is simply used as a built-in command using the
previously defined <I>&quot;action&quot;</I> from the same <I>function_name</I>.</P>

<PRE>
&nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  <I>built-in_command</I> <I>&quot;action&quot;</I> <I>function_name</I>
</PRE>

<P class="dense">Refer to the <I>feel.name</I> files and below in EXAMPLES for examples.</P>

</DD>


<A NAME="options.GetHelp">
	</A><DT class="dense"><B>GetHelp</B></DT>
	<DD class="dense">
		<P class="dense">Runs afterstepdoc script, that attempts to guess which web browser is available on the system, and then launches it to display HTML documentation for AfterStep.</P>
	</DD>


<A NAME="options.GoToBookmark">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","GoToBookmark","Functions#options.GoToBookmark",$srcunset,$subunset) ?>
  <I>[&quot;name&quot; window_bookmark ]</I></B></DT>
	<DD class="dense">
		<P class="dense">Focuses &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  specified by previously placed window_bookmark.</P>
	</DD>


<A NAME="options.GotoDeskViewport">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","GotoDeskViewport","Functions#options.GotoDeskViewport",$srcunset,$subunset) ?>
    <I>&nbsp;<? local_doc_url("visualdoc.php","Desk","Functions#options.Desk",$srcunset,$subunset) ?>
 +Vx+Vy</I></B></DT>
	<DD class="dense">
		<P class="dense">Changes both current desk and viewport.</P>
	</DD>


<A NAME="options.GotoPage">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","GotoPage","Functions#options.GotoPage",$srcunset,$subunset) ?>
  <I>x y</I></B></DT>
 <DD class="dense">
    <P class="dense">Moves the desktop view to page <I>x y</I>. The upper left page is (0,0),
    the upper right is (N,0), where N is one less than the current number of
    horizontal pages specified in the <I>DeskTopSize</I> command detailed in the
    <I>Pager(1)</I> man page. The lower left page is (0,M), and the lower right
    page is (N,M), where M is the desktop's vertical size as specified in the
    <I>DeskTopSize</I> command.</P>

    <P class="dense">The &nbsp;<? local_doc_url("visualdoc.php","GotoPage","Functions#options.GotoPage",$srcunset,$subunset) ?>
  function should not be used in a pop-up menu.</P>
 </DD>


<A NAME="options.Iconify">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Iconify","Functions#options.Iconify",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>] [<I>value</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Iconifies a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is not already iconified, or de-iconifies it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
	it is already iconified. If the optional argument <I>value</I> is positive,
	then only iconification will be allowed, and de-iconification will be
	inhibited. If the optional argument is negative, only de-iconification will
	be allowed.</P>
    </DD>


<A NAME="options.InstallBackground">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallBackground","Functions#options.InstallBackground",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified file to ~/.afterstep/backgrounds/ directory, so that it will show up in the menu, to be used for Root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.InstallColorscheme">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallColorscheme","Functions#options.InstallColorscheme",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified file to ~/.afterstep/colorschemes/ directory, so that it will show up in the menu, to be used as &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  scheme.</P>
	</DD>


<A NAME="options.InstallFeel">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallFeel","Functions#options.InstallFeel",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified file to ~/.afterstep/feels/ directory, so that it will show up in the menu.</P>
	</DD>


<A NAME="options.InstallFont">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallFont","Functions#options.InstallFont",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified TTF file to ~/.afterstep/desktop/fonts/ directory, so that it could be used in look configuration.</P>
	</DD>


<A NAME="options.InstallIcon">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallIcon","Functions#options.InstallIcon",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified image file to ~/.afterstep/desktop/icons/ directory, so that it could be used in look and database configuration.</P>
	</DD>


<A NAME="options.InstallLook">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallLook","Functions#options.InstallLook",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified look file to ~/.afterstep/looks/ directory, so that it could be selected from the menu.</P>
	</DD>


<A NAME="options.InstallThemeFile">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallThemeFile","Functions#options.InstallThemeFile",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified theme file to ~/.afterstep/themes/ directory, so that it could be selected from the menu.</P>
	</DD>


<A NAME="options.InstallTile">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","InstallTile","Functions#options.InstallTile",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Copies specified image file to ~/.afterstep/desktop/tiles/ directory, so that it could be used in look and database configuration.</P>
	</DD>


<A NAME="options.KIPCsendMessageAll">
	</A><DT class="dense"><B>KIPCsendMessageAll</B></DT>
	<DD class="dense">
		<P class="dense">Sends a signal to all &nbsp;<? local_doc_url("visualdoc.php","KDE","SupportedHints#options.KDE",$srcunset,$subunset) ?>
  applications, refreshing their visual properties.</P>
	</DD>


<A NAME="options.KillAllModulesByName">
	</A><DT class="dense"><B>KillAllModulesByName</B></DT>
	<DD class="dense">
		<P class="dense">Kills AfterStep modules with a provided matching name.</P>
	</DD>


<A NAME="options.KillModuleByName">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","KillModuleByName","Functions#options.KillModuleByName",$srcunset,$subunset) ?>
  <I>&quot;name&quot; modulename</I></B></DT>
	<DD class="dense">
		<P class="dense">Kill &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  with specified name.</P>
	</DD>


<A NAME="options.LargeMiniPixmap">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","LargeMiniPixmap","Functions#options.LargeMiniPixmap",$srcunset,$subunset) ?>
  <I>pixmap</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a given pixmap to display to the left of the menu item which invokes this menu, or in the title of this menu. Used in menu entries instead of &nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
  when it is not desired to &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
 -down a pixmap image. Pixmap images are full-size. Opposite is &nbsp;<? local_doc_url("visualdoc.php","SmallMiniPixmap","Functions#options.SmallMiniPixmap",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","SmallMiniPixmap","Functions#options.SmallMiniPixmap",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","MenuMiniPixmaps","Look_options#options.MenuMiniPixmaps",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Lower">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Lower","Functions#options.Lower",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Allows the user to lower a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
    </DD>


<A NAME="options.MaxSwallow">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxSwallow","Functions#options.MaxSwallow",$srcunset,$subunset) ?>
  &quot;<I>&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 -name</I>&quot; <I>command</I></B></DT>
<DD class="dense">
<P class="dense">Like <I>Swallow</I>, except the button will be resized to fit the 
application.</P>
<P class="dense">This is a Wharf specific &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
 .</P>
</DD>


<A NAME="options.MaxSwallowModule">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxSwallowModule","Functions#options.MaxSwallowModule",$srcunset,$subunset) ?>
  &quot;<I>&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 -name</I>&quot; <I>command</I></B></DT>
  <DD class="dense">
<P class="dense">Like <I>MaxSwallow</I>, except the <I>command</I> is an AfterStep &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
 .</P>
<P class="dense">This is a Wharf specific &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
 .</P>
</DD>


<A NAME="options.Maximize">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Maximize","Functions#options.Maximize",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>] [<I>horizontal vertical</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Causes the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to alternately switch from a full-screen size to its
	normal size.  Specifying the optional arguments of <I>horizontal</I> and
	<I>vertical</I>, control can be attained as to the percentage of the full
	screen that the &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  size of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  becomes.  If <I>horizontal</I> &gt; 0,
	then the horizontal dimension of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to
	horizontal*screen_width/100. The vertical resizing is similar. Values
	larger than 100 can be used with caution.  The defaults for <I>horizontal</I>
	and <I>vertical</I> are 100s (ie, fullscreen).</P>
    </DD>


<A NAME="options.MiniPixmap">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
   <I>pixmap</I></B></DT>
 	<DD class="dense">
		<P class="dense">Specifies a given pixmap to display to the left of the menu item which invokes this menu, or in the title of this menu. Default pixmap size is 24x24 pixels; this size can be adjusted in Look via MiniPixmapSize.</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","MinipixmapSize","Look_options#options.MinipixmapSize",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","LargeMiniPixmap","Functions#options.LargeMiniPixmap",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","SmallMiniPixmap","Functions#options.SmallMiniPixmap",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","MenuMiniPixmaps","Look_options#options.MenuMiniPixmaps",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Module">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Module","Functions#options.Module",$srcunset,$subunset) ?>
  <I>ModuleName</I> [<I>arguments</I>]</B></DT>
  <DD class="dense">
<P class="dense">Specifies that <I>ModuleName</I> should be spawned.</P>

<P class="dense">Currently, many modules are included with <B>afterstep</B>. <I>Wharf(1x)</I>
and <I>Pager(1x)</I> are two of the more popular ones. Wharf will normally
be spawned during initialization instead of in response to a mouse binding
or menu action. Modules can be short lived transient programs, or, like
Wharf, can be intended to remain for the duration of the X session.
Modules will be terminated by <B>afterstep</B> prior to restarts and quits,
&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  possible.</P>
	</DD>


<A NAME="options.Move">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Move","Functions#options.Move",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Allows the user to move a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  or iconified app.</P>
    </DD>


<A NAME="options.Nop">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Nop","Functions#options.Nop",$srcunset,$subunset) ?>
  &quot;&quot;</B></DT>
    <DD class="dense">
	<P class="dense">Inserts a horizontal line (&lt;HR&gt; type html line) in a menu entry list.</P>
    </DD>
    <DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Nop","Functions#options.Nop",$srcunset,$subunset) ?>
  &quot;name&quot;</B></DT>
    <DD class="dense">
	<P class="dense">Inserts a <I>name</I> in the menu, stippled (disabled and grayed-out).</P>
    </DD>


<A NAME="options.PasteSelection">
	</A><DT class="dense"><B>PasteSelection</B></DT>
	<DD class="dense">
		<P class="dense">This function allows for substitute of X clipboard copy-pasting &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  application is missing it.</P>
	</DD>


<A NAME="options.PinMenu">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","PinMenu","Functions#options.PinMenu",$srcunset,$subunset) ?>
  <I>[&quot;name&quot;]</I></B></DT>
	<DD class="dense">
		<P class="dense">Pins menu on desktop.</P>
	</DD>


<A NAME="options.PopUp">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","PopUp","Functions#options.PopUp",$srcunset,$subunset) ?>
  <I>&quot;popup_name&quot;</I></B></DT>
 <DD class="dense">
    <P class="dense">There are two situations where this might occur; as a popup menu stanza
    definition, or in calling a previously defined menu declaration.</P>

    <PRE>
    &nbsp;<? local_doc_url("visualdoc.php","Popup","Feel#options.Popup",$srcunset,$subunset) ?>
  <I>&quot;popup_name&quot;</I>
    built-in_command  <I>&quot;name&quot;</I> [<I>argument</I>]
    &nbsp;<? local_doc_url("visualdoc.php","EndPopup","Functions#options.EndPopup",$srcunset,$subunset) ?>
 
    </PRE> 

    <P class="dense">Specfies the definition of a complex menu popup <I>&quot;popup_name&quot;</I>, which
    can be bound to a mouse button or key using <I>&quot;popup_name&quot;</I> to &nbsp;<? local_doc_url("visualdoc.php","recall","asimagexml#recall",$srcunset,$subunset) ?>
 
    this declaration.  <I>built-in_command</I> specifies which command will be
    performed, utilizing it's syntax from this list of Built-In
    Commands/Functions. <I>&quot;name&quot;</I> specifies the name which will appear
    within the menu for the given item, and additionally any <I>arguments</I>
    needed by the <I>built-in_command</I>.  The &nbsp;<? local_doc_url("visualdoc.php","Popup","Feel#options.Popup",$srcunset,$subunset) ?>
  definition ends with the
    keyword &nbsp;<? local_doc_url("visualdoc.php","EndPopup","Functions#options.EndPopup",$srcunset,$subunset) ?>
 . Sub-menus can be created by calling the &nbsp;<? local_doc_url("visualdoc.php","Popup","Feel#options.Popup",$srcunset,$subunset) ?>
  built-in
    within another &nbsp;<? local_doc_url("visualdoc.php","Popup","Feel#options.Popup",$srcunset,$subunset) ?>
  declaration, as long as that sub-menu was defined
    earlier in the configuration file.</P>

    <P class="dense">Shortcut keys may be specified in the menu definition by preceding a
    character with an ampersand. The ampersand will not be displayed, but the
    character after it will be displayed at the right side of the same entry.
    and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the user presses the corresponding key, then that item will be
    activated as &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it had been clicked upon.
    Only alphanumeric characters
    may be used as shortcut keys.  The shift state of the keyboard is ignored
    when testing shortcut characters.</P>
    Shortcut keys are not operative unless MENU_HOTKEYS was defined when
    building AfterStep. If WINDOWLIST_HOTKETS was also defined, then hot
    keys are automatically added to the &nbsp;<? local_doc_url("visualdoc.php","WindowList","Functions#options.WindowList",$srcunset,$subunset) ?>
  when it is displayed.

    <P class="dense">When calling a previously defined menu or a menu from a key-stroke
    combination, &nbsp;<? local_doc_url("visualdoc.php","Popup","Feel#options.Popup",$srcunset,$subunset) ?>
  is simply used as a built-in command with the
    <I>&quot;name&quot;</I> referring to the previously defined &nbsp;<? local_doc_url("visualdoc.php","Popup","Feel#options.Popup",$srcunset,$subunset) ?>
  definitions name.</P>

    <P class="dense">Popups can be bound to keys through the use of the key modifier. Popups
    can be operated without using the mouse by binding to keys, and operating
    via the up arrow, down arrow, and enter keys.  Refer to the <I>feel.name</I>
    files and below in EXAMPLES for examples.</P>
 </DD>


<A NAME="options.PutOnBack">
    </A><DT class="dense"><B>PutOnBack</B></DT>
    <DD class="dense">
	<P class="dense">Moves the target &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to the bottom of its layer, or down one layer &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
	it is already at the bottom.</P>
    </DD>


<A NAME="options.PutOnTop">
    </A><DT class="dense"><B>PutOnTop</B></DT>
    <DD class="dense">
	<P class="dense">Moves the target &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to the top of its layer, or up one layer &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it
	is already at the top.</P>
    </DD>


<A NAME="options.QuickRestart">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","QuickRestart","Functions#options.QuickRestart",$srcunset,$subunset) ?>
  <I> look|feel|look+feel</I></B></DT>
	<DD class="dense">
		<P class="dense">Causes AfterStep to reload specified &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Quit">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Quit","Functions#options.Quit",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Exits <B>afterstep</B>, generally causing X to exit too.</P>
    </DD>


<A NAME="options.Raise">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Raise","Functions#options.Raise",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Allows the user to &nbsp;<? local_doc_url("visualdoc.php","raise","AudioEvents#options.raise_window",$srcunset,$subunset) ?>
  a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
    </DD>


<A NAME="options.RaiseLower">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","RaiseLower","Functions#options.RaiseLower",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Alternately raises and lowers a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 ; i.e. &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it's raised, the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
	will lower, and vice versa.</P>
    </DD>


<A NAME="options.Refresh">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Refresh","Functions#options.Refresh",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Causes all windows on the screen to re-draw themselves.</P>
    </DD>


<A NAME="options.Resize">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Resize","Functions#options.Resize",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Allows the user to resize a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 .</P>
    </DD>


<A NAME="options.Restart">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Restart","Functions#options.Restart",$srcunset,$subunset) ?>
  <I>&quot;name&quot;</I> <I>WindowManagerName</I></B></DT>
    <DD class="dense">
	<P class="dense">Restarts <I>X(1)</I> with the given <I>WindowManagerName</I>.  If
        <I>WindowManagerName</I> is<B>afterstep</B>, then this forces
	<B>afterstep</B> to reread all of its configuration files and reinitiate
	the session.  If <I>WindowManagerName</I> is not in the default search
	path, then the full path name should be given.</P>
	</DD>


<A NAME="options.RestartModuleByName">
	</A><DT class="dense"><B>RestartModuleByName</B></DT>
	<DD class="dense">
		<P class="dense">Restarts AfterStep modules with a provided matching name.</P>
	</DD>


<A NAME="options.RestartModuleList">
	</A><DT class="dense"><B>RestartModuleList</B></DT>
	<DD class="dense">
		<P class="dense">Restarts all AfterStep modules.</P>
	</DD>


<A NAME="options.SET_FLAGS">
	</A><DT class="dense"><B>SET_FLAGS</B></DT>
	<DD class="dense">
		<P class="dense">Do not use. Reserved for use by AfterStep modules to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  communication flags - identifying which messages &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  wishes to receive.</P>
	</DD>


<A NAME="options.SET_MASK">
	</A><DT class="dense"><B>SET_MASK</B></DT>
	<DD class="dense">
		<P class="dense">Do not use. Reserved for use by AfterStep modules.</P>
	</DD>


<A NAME="options.SET_NAME">
	</A><DT class="dense"><B>SET_NAME</B></DT>
	<DD class="dense">
		<P class="dense">Do not use. Reserved for use by AfterStep modules to identify themselves to AfterStep.</P>
	</DD>


<A NAME="options.SaveWorkspace">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SaveWorkspace","Functions#options.SaveWorkspace",$srcunset,$subunset) ?>
  <I>&quot;name&quot; file_name</I></B></DT>
	<DD class="dense">
		<P class="dense">Write list of presently running applications with its position
                and desktop number into specified file. You can run this file
                at a later time as a shell script to &nbsp;<? local_doc_url("visualdoc.php","restore","AudioEvents#options.restore",$srcunset,$subunset) ?>
  state of the
                desktop. Note this does not work for many applications that
                does not provide needed &nbsp;<? local_doc_url("visualdoc.php","ICCCM","SupportedHints#options.ICCCM",$srcunset,$subunset) ?>
  properties on its windows.</P>
	</DD>


<A NAME="options.Scroll">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Scroll","Functions#options.Scroll",$srcunset,$subunset) ?>
  <I>horizontal vertical</I></B></DT>
    <DD class="dense">
	<P class="dense">Scrolls the desktop's view by <I>horizontal</I> pages in the x-direction,
        and <I>vertical</I> pages in the y-direction. Either or both entries may be
	negative. Both <I>horizontal</I> and <I>vertical</I> values are expressed
        in percent of pages, so 100 would be one full page. Normally, scrolling
	stops at the edge of the desktop.  If the <I>horizontal</I> and
        <I>vertical</I> values are multiplied by 1000, then scrolling will wrap
	around at the edge of the desktop.</P>
	<P class="dense">The scroll function should not be called from pop-up menus.</P>
    </DD>


<A NAME="options.Send_WindowList">
	</A><DT class="dense"><B>Send_WindowList</B></DT>
	<DD class="dense">
		<P class="dense">This &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  is used by modules to obtain list of &nbsp;<? local_doc_url("visualdoc.php","open","WharfSounds#options.open_folder",$srcunset,$subunset) ?>
  windows.</P>
	</DD>


<A NAME="options.Set">
	</A><DT class="dense"><B>Set</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.SetLayer">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SetLayer","Functions#options.SetLayer",$srcunset,$subunset) ?>
  <I>layer</I></B></DT>
    <DD class="dense">
	<P class="dense">Moves the target &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to layer <I>layer</I>.</P>
    </DD>


<A NAME="options.Shade">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Shade","Functions#options.Shade",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Emulates the MacOS WindowShade feature.  Once activated the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will
	become a titlebar only.</P>
    </DD>


<A NAME="options.SignalReloadGTKRCFile">
	</A><DT class="dense"><B>SignalReloadGTKRCFile</B></DT>
	<DD class="dense">
		<P class="dense">Forces all GTK apps to reload the gtkrc files.</P>
	</DD>


<A NAME="options.Size">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  <I>width</I> <I>height</I></B></DT>
  <DD class="dense">
<P class="dense">Sets the size of the associated button, overriding any other size 
consideration.</P>

<P class="dense">The <B>Wharf</B> button size depends on several things.  The order of
precedence is:</P>

<PRE>
1) &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  definition
2) &nbsp;<? local_doc_url("visualdoc.php","MaxSwallow","Functions#options.MaxSwallow",$srcunset,$subunset) ?>
 'd &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  size
3) <I>WharfPixmap</I> size
4) &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  64x64.
</PRE>
<P class="dense">This is a Wharf specific &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
 .</P>
</DD>


<A NAME="options.SmallMiniPixmap">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SmallMiniPixmap","Functions#options.SmallMiniPixmap",$srcunset,$subunset) ?>
  <I>pixmap</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies a given pixmap to display to the left of the menu item which invokes this menu, or in the title of this menu. Used in menu entries instead of &nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
 ; scales-down pixmap images to the smallest size. It is sized based-on the Menu font size plus eight pixels; width is calculated to keep proportionality.</P>
		<P class="dense">See Also: &nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","LargeMiniPixmap","Functions#options.LargeMiniPixmap",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","MenuMiniPixmaps","Look_options#options.MenuMiniPixmaps",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Stick">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Stick","Functions#options.Stick",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Makes a &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  sticky (stays on screen when desks/views are switched) &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it
	is not already sticky, or non-sticky &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is already sticky.</P>
    </DD>


<A NAME="options.StopModuleList">
	</A><DT class="dense"><B>StopModuleList</B></DT>
	<DD class="dense">
		<P class="dense">Stops all AfterStep modules.</P>
	</DD>


<A NAME="options.Swallow">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Swallow","Functions#options.Swallow",$srcunset,$subunset) ?>
  &quot;<I>&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 -name</I>&quot; <I>command</I></B></DT>
  <DD class="dense">
<P class="dense">Causes <B>Wharf</B> to run <I>command</I>, capture the first &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  whose 
name or resource is <I>&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 -name</I>, and display it in the associated 
button. The application &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be shrunk to fit the size of the 
button.</P>
<P class="dense">This is a Wharf specific &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
 .</P>
</DD>


<A NAME="options.SwallowModule">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SwallowModule","Functions#options.SwallowModule",$srcunset,$subunset) ?>
  &quot;<I>&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 -name</I>&quot; <I>command</I></B></DT>
  <DD class="dense">
<P class="dense">Like <I>Swallow</I>, except the <I>command</I> is an AfterStep &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
 .</P>
<P class="dense">This is a Wharf specific &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
 .</P>
</DD>


<A NAME="options.SwallowWindow">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SwallowWindow","Functions#options.SwallowWindow",$srcunset,$subunset) ?>
  <I>&quot;pattern&quot; shell_command</I></B></DT>
	<DD class="dense">
		<P class="dense">will cause already opened &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to be swallowed, while
          just &nbsp;<? local_doc_url("visualdoc.php","Swallow","Functions#options.Swallow",$srcunset,$subunset) ?>
  will run application, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  there are no windows matching
          pattern</P>
	</DD>


<A NAME="options.TakeFrameShot">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TakeFrameShot","Functions#options.TakeFrameShot",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Grabs screenshot of the client &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  including frame decorations and &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  it in specifyed files.</P>
	</DD>


<A NAME="options.TakeScreenShot">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TakeScreenShot","Functions#options.TakeScreenShot",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Grabs screenshot of the entire screen and &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  it in specifyed files.</P>
	</DD>


<A NAME="options.TakeWindowShot">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TakeWindowShot","Functions#options.TakeWindowShot",$srcunset,$subunset) ?>
  <I>&quot;name&quot; filename</I></B></DT>
	<DD class="dense">
		<P class="dense">Grabs screenshot of the client &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  excluding frame decorations and &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  it in specifyed files.</P>
	</DD>


<A NAME="options.Test">
	</A><DT class="dense"><B>Test</B></DT>
	<DD class="dense">
		<P class="dense">Do not use. Internal function.</P>
	</DD>


<A NAME="options.Title">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Title","Functions#options.Title",$srcunset,$subunset) ?>
  <I>&quot;name&quot;</I></B></DT>
    <DD class="dense">
	<P class="dense">Insert a title line of heading <I>name</I> into a popup or menu.</P>
    </DD>


<A NAME="options.ToggleLayer">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ToggleLayer","Functions#options.ToggleLayer",$srcunset,$subunset) ?>
  <I>layer1</I> <I>layer2</I></B></DT>
    <DD class="dense">
	<P class="dense">Specifies that &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is in <I>layer1</I>, it should be placed in
	<I>layer2</I>.  Otherwise, it is placed in <I>layer1</I>.  In either case,
	the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be placed on top of other windows in the target layer.</P>
    </DD>


<A NAME="options.TogglePage">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TogglePage","Functions#options.TogglePage",$srcunset,$subunset) ?>
  [<I>&quot;name&quot;</I>]</B></DT>
    <DD class="dense">
	<P class="dense">Temporarily disables <I>EdgeScroll</I>.  Edge scrolling can be re-enabled by
	calling this again.</P>
    </DD>


<A NAME="options.Transient">
	</A><DT class="dense"><B>Transient</B></DT>
	<DD class="dense">
		<P class="dense">Specifies that this button will not perform any action, will not be 
		pushable, and will not have an associated balloon.</P>
		<P class="dense"></P></DD>

<A NAME="options.UNLOCK">
	</A><DT class="dense"><B>UNLOCK</B></DT>
	<DD class="dense">
		<P class="dense">Do not use. Internal function.</P>
	</DD>


<A NAME="options.Wait">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Wait","Functions#options.Wait",$srcunset,$subunset) ?>
  <I>app_name</I></B></DT>
 <DD class="dense">
    <P class="dense">This is intended to be used in <B>afterstep</B> functions only. It causes
    execution of a function to pause until a &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  named <I>app_name</I>
    appears.  <B>afterstep</B> remains fully functional during a wait. This is
    particularly useful in the InitFunction and RestartFunction, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you are
    trying to start windows on specific desktops.</P>
 </DD>


<A NAME="options.WarpBack">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WarpBack","Functions#options.WarpBack",$srcunset,$subunset) ?>
  [<I>&quot;name&quot; window_name</I>]</B></DT>
 <DD class="dense">
    <P class="dense">Same as <I>ChangeWindowDown</I>, but uniconifies any iconified windows as it
    focuses on them.</P>
 </DD>


<A NAME="options.WarpFore">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WarpFore","Functions#options.WarpFore",$srcunset,$subunset) ?>
  [<I>&quot;name&quot; window_name</I>]</B></DT>
 <DD class="dense">
    <P class="dense">Same as <I>ChangeWindowUp</I>, but uniconifies any iconified windows as it
    focuses on them.</P>
 </DD>


<A NAME="options.WindowList">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WindowList","Functions#options.WindowList",$srcunset,$subunset) ?>
  [<I>arg1 arg2</I>]</B></DT>
 <DD class="dense">
    <P class="dense">Specifies the internal popup menu in which the titles of each &nbsp;<? local_doc_url("visualdoc.php","open","WharfSounds#options.open_folder",$srcunset,$subunset) ?>
 
    application are displayed, should be popped up.  Selecting an item from the
    list will cause the current desk to switch to the application's desk, and
    will &nbsp;<? local_doc_url("visualdoc.php","raise","AudioEvents#options.raise_window",$srcunset,$subunset) ?>
  it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it's behind other windows.  If the application is currently
    iconified, then it will be de-iconified normally.</P>

    <P class="dense">Generally, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  <I>arg1</I> is an even number, then the windows will be listed
    using the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  name (the name that shows up in the title-bar); &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
    <I>arg1</I> is an odd number, then the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's icon name is used.</P>

    <P class="dense">Specifically, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  <I>arg1</I> is 0, 1 or 2, then all windows on all desks
    will be shown.  If <I>arg1</I> is 2 or 3, then only windows on the current
    desk will be shown.  If <I>arg1</I> is 4 or 5, then only windows on the
    desk number specified with <I>arg2</I>, will be shown.  Windows which have
    WindowListSkip specified in their style will not be listed in the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
    list.</P>
 </DD>


<A NAME="options.WindowsDesk">
 </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WindowsDesk","Functions#options.WindowsDesk",$srcunset,$subunset) ?>
  <I>new_desk</I> [10000]</B></DT>
 <DD class="dense">
    <P class="dense">Moves the selected &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to the desktop specified as <I>new_desk</I>.
    If second argument is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 10000 then first is treated as relative 
    desktop number.</P>
 </DD>


</DL></P></LI>
