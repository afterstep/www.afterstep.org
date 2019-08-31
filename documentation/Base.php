&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep Base configuration</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">essential AfterStep configuration options</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","AfterStep","AfterStep",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","AutoExec","AutoExec",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  Configuration
 <? local_doc_url("visualdoc.php","Function","Functions",$srcunset,$subunset) ?>
</UL>
<hr>

<A NAME="synopsis"><UL>
</A><P class="dense"> base &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  file contains most important AfterStep configuration options - Paths to diferent files, virtual screen size, etc. It is loaded prior to any other configuration files.
</P>
</UL>




<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.AudioPath">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AudioPath","Base#options.AudioPath",$srcunset,$subunset) ?>
  <I>path[:path]</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the paths to locate the audio files in.</P>
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description of suported formats.</P>
	</DD>


<A NAME="options.BrowserCommand">
	</A><DT class="dense"><B>BrowserCommand<I>number command</I></B></DT>
     <DD class="dense">
	<P class="dense">Selects web browser to be used by AfterStep when using the
	&nbsp;<? local_doc_url("visualdoc.php","ExecBrowser","Functions#options.ExecBrowser",$srcunset,$subunset) ?>
  command. Out of supplied list - all possibilities are checked to be present on the system,
	and first available one will be used.</P>
	<P class="dense">The default number/command combination is: 0 - $BROWSER, 1 - firefox,2 - x-www-browser, 3 - mozilla-firefox, 4 - mozilla, 5 - opera</P></DD>

<A NAME="options.CursorPath">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","CursorPath","Base#options.CursorPath",$srcunset,$subunset) ?>
  <I>path[:path]</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the paths to locate the cursor files in.</P>
	</DD>


<A NAME="options.DeskTopScale">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DeskTopScale","Base#options.DeskTopScale",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">If the geometry is not specified, then a desktop reduction factor
		is used to calculate the pager's size. Things in the pager
		&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  are shown at 1/number of the actual size.</P>
	</DD>


<A NAME="options.DeskTopSize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DeskTopSize","Base#options.DeskTopSize",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","Columns","Pager_options#options.Columns",$srcunset,$subunset) ?>
  x Rows</I></B></DT>
	<DD class="dense">
		<P class="dense">Defines the number of view &nbsp;<? local_doc_url("visualdoc.php","Columns","Pager_options#options.Columns",$srcunset,$subunset) ?>
  by the number of view &nbsp;<? local_doc_url("visualdoc.php","Rows","Pager_options#options.Rows",$srcunset,$subunset) ?>
  of
		the  desk(s)  in proportional units, i.e. 2x1 would show 2 views
		of one desk, one beside another.</P>
	</DD>


<A NAME="options.DisableKDEGlobalsTheming">
	</A><DT class="dense"><B>DisableKDEGlobalsTheming</B></DT>
	<DD class="dense">
		<P class="dense">If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  will prevent AfterStep from updating private kdeglobals file when colorscheme is changed.
		kdeglobals needs to be updated in order to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  colors for &nbsp;<? local_doc_url("visualdoc.php","KDE","SupportedHints#options.KDE",$srcunset,$subunset) ?>
  apps to match that of the selected colorscheme.</P>
	</DD>


<A NAME="options.DisableSharedMemory">
	</A><DT class="dense"><B>DisableSharedMemory</B></DT>
	<DD class="dense">
		<P class="dense">Disables shared memory support in afterstep. &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  this
		&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you run X remotely, or have issues with shared memory in general.</P>
	</DD>


<A NAME="options.EditorCommand">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","EditorCommand","Base#options.EditorCommand",$srcunset,$subunset) ?>
  <I>number command</I></B></DT>
     <DD class="dense">
	<P class="dense">Selects editor to be used by AfterStep when using the
	&nbsp;<? local_doc_url("visualdoc.php","ExecEditor","Functions#options.ExecEditor",$srcunset,$subunset) ?>
  command. Out of supplied list - all possibilities are checked to be present on the system,
	and first available one will be used.</P>
	<P class="dense">The default number/command combination is: 0- $EDITOR, 1-nedit, 2-xemacs, 3-gedit, 4-kedit, 5-kate</P>
	</DD>


<A NAME="options.FontPath">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FontPath","Base#options.FontPath",$srcunset,$subunset) ?>
  <I>path[:path]</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the paths to locate the font files in.</P>
		<P class="dense">Suported are standard X11 fonts and Truetype fonts through
		the FreeType library.<P class="dense"></P></P></DD>

<A NAME="options.IconPath">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","IconPath","Base#options.IconPath",$srcunset,$subunset) ?>
  <I>path[:path]</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the paths to locate the  bitmaps  in,  typically  used
		only &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  XPM, JPEG, or PNG images aren't available. Valid bitmaps
		are standard X11 XBM's.</P>
	</DD>


<A NAME="options.ModulePath">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ModulePath","Base#options.ModulePath",$srcunset,$subunset) ?>
  <I>path[:path]</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the paths to locate the Modules in.</P>
	</DD>


<A NAME="options.NoModuleNameCollisions">
	</A><DT class="dense"><B>NoModuleNameCollisions</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Path">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Path","Base#options.Path",$srcunset,$subunset) ?>
  <I>path:path:path</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the search paths for icons (IconPath), fonts (FontPath), pixmaps (PixmapPath), cursors (CursorPath) and scripts (ScriptPath). Multiple entries for a given search path are separated by a colon.</P>
	</DD>


<A NAME="options.PixmapPath">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","PixmapPath","Base#options.PixmapPath",$srcunset,$subunset) ?>
  <I>path[:path]</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the paths to locate the pixmaps in.  Valid pixmaps are
		currently XCF, XPM, PPM/PNM, ICO, GIF, XML Images, JPEG, PNG and TIFF.</P>
	</DD>


<A NAME="options.TermCommand">
    </A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TermCommand","Base#options.TermCommand",$srcunset,$subunset) ?>
  <I>number command</I></B></DT>
     <DD class="dense">
	<P class="dense">Selects terminal emulator to be used by AfterStep when using the
	&nbsp;<? local_doc_url("visualdoc.php","ExecInTerm","Functions#options.ExecInTerm",$srcunset,$subunset) ?>
  command, where the first matching one will be used.</P>
	<P class="dense">The default number/command combination is: 0-aterm, 1-rxvt, 2-xterm</P>
     </DD>


<A NAME="options.gtkrc20Path">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","gtkrc20Path","Base#options.gtkrc20Path",$srcunset,$subunset) ?>
  <I>path</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  fullfilename for gtkrc file to be generated by AfterStep from gtkrc-20_template
		on colorscheme changes. Default is ~/.gtkrc-2.0. Change to prevent mangling of your own gtkrc.
		More sensible approach is to edit the template.</P>
	</DD>


<A NAME="options.gtkrcPath">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","gtkrcPath","Base#options.gtkrcPath",$srcunset,$subunset) ?>
  <I>path</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  fullfilename for gtkrc file to be generated by AfterStep from gtkrc_template
		on colorscheme changes for GTK 1.x apps. Default is ~/.gtkrc. Change to prevent mangling of your own gtkrc.
		More sensible approach is to edit the template.</P>
	</DD>


</DL></P></LI>
