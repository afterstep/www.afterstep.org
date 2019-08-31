&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Pager</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for virtual desktop navigation</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Base options","Pager_base_config","Pager",$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","MyStyles","Pager_mystyles","Pager",$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Configuration","Pager_options","Pager",$subunset) ?>
 <hr>

<A NAME="related"><UL>
 Pager
 </A><? local_doc_url("visualdoc.php","Decoration options","PagerDecorations",$srcunset,$subunset) ?>
</UL>
<hr>

<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>Pager</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
    <B><I>first_desktop</I></B>
    [<B><I>last_desktop</I></B>]
</LI>

	
		<IMG SRC=php/images/Pager.jpg align="right"></IMG>

	

</UL>

<A NAME="overview"><UL>
</A>
<A NAME="usage"><LI><B>USAGE</B><br></A>

<P class="dense">Although <B>Pager</B> can be run from the command line, it is normally 
spawned by afterstep in the <I>autoexec</I> file, in the following
manner:</P>
<PRE>

	&nbsp;<? local_doc_url("visualdoc.php","Module","Functions#options.Module",$srcunset,$subunset) ?>
 	&quot;I&quot;	Pager beginning_desktop# ending_desktop#
	&nbsp;<? local_doc_url("visualdoc.php","Wait","Functions#options.Wait",$srcunset,$subunset) ?>
 	&quot;I&quot;	Pager

</PRE>
<P class="dense">In case you use Pager to switch your root backgrounds 
<B>Wait</B> can be used as shown above.  This will insure that the 
<B>Pager</B> has &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  the root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  before you start
any furthur apps (like transparent aterms and Eterms).</P>

<P class="dense">or from within an afterstep menu file by 'Pager':</P>
<PRE>

% cat &quot;~/.afterstep/start/Modules/Pager&quot;
	&nbsp;<? local_doc_url("visualdoc.php","Module","Functions#options.Module",$srcunset,$subunset) ?>
  &quot;Pager&quot; Pager first_desktop last_desktop
	&nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
  &quot;mini-as.xpm&quot;
</PRE>

<P class="dense">To stop the <B>Pager</B> &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
 , a menu item can be used:</P>
<PRE>

% cat &quot;~/.afterstep/start/Modules/Pager_Stop&quot;
	&nbsp;<? local_doc_url("visualdoc.php","KillModuleByName","Functions#options.KillModuleByName",$srcunset,$subunset) ?>
  &quot;Stop Pager&quot; Pager
	&nbsp;<? local_doc_url("visualdoc.php","MiniPixmap","Functions#options.MiniPixmap",$srcunset,$subunset) ?>
  &quot;mini-as.xpm&quot;
</PRE>

</LI>


<A NAME="description"><LI><B>DESCRIPTION</B><br></A>
<P class="dense">The <B>Pager</B> &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  shows a miniature view of the Afterstep desktops
which are specified in the command line. This is a useful reminder of
where your active windows are. Windows in the pager are accordingly to
&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  definitions &quot;*PagerUWindowStyle&quot; - for unfocused windows,
&quot;*PagerFWindowStyle&quot; - for focused windows and &quot;*PagerSWindowStyle&quot; -
for sticky windows. If you never defined those MyStyles, Pager will
default to same styles as used for actual windows.</P>

<P class="dense">The <B>Pager</B> can be used to change your viewport into the current
desktop, to change desktops, or to move windows around.</P>

<P class="dense">Pressing mouse button 1 or 2 in the <B>Pager</B> will cause your viewport
to change to the selected page of the selected desk. If you click with
button 1 in the desk-label area, you will switch desks but not
pages within the desk.</P>

<P class="dense">Clicking and dragging with mouse button 2 on a miniature &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in the
<B>Pager</B> will cause that &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  to be move to the location where you
&nbsp;<? local_doc_url("visualdoc.php","release","asimagexml#release",$srcunset,$subunset) ?>
  the mouse button, but your viewport will not change. If you drag
the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  out of the pager and onto your desktop, a full size image of
the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will appear for you to place. There is no way to pick up a
full size image of the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  and move it into the <B>Pager</B>, however.
Since some mice do not have button 2, provisions have been made to drag
windows in the <B>Pager</B> by pressing modifier-1 (usually Alt) and
dragging with button 3.</P>

<P class="dense">When iconified, the pager will work as a fully functional current page
only pager. Windows and viewports can be moved within the icon of the
pager. Users will want to make sure that they have no lines similar to</P>

<P class="dense">Starting with version 1.7.122 Pager no longer loads &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  images 
into the memory. &nbsp;<? local_doc_url("visualdoc.php","Module","Functions#options.Module",$srcunset,$subunset) ?>
  asetroot should be used to accomplish that task.
But Pager will still be able to switch backgrounds as you switch between
desks, after you've run asetroot to load images. &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  *PagerDontDrawBg
option in pager &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  file to TURN &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  switching OFF.</P>

<P class="dense">See asetroot man page for more information.</P>

<PRE>

	&nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
 	&quot;Pager&quot;	&nbsp;<? local_doc_url("visualdoc.php","Icon","ASDatabaseEntry#options.Icon",$srcunset,$subunset) ?>
  myIcon.[xpm|jpg|png]

</PRE>
<P class="dense">in their feel files.</P>

</LI>


<A NAME="initialization"><LI><B>INITIALIZATION</B><br></A>
<P class="dense">During initialization, <B>Pager</B> will search for a configuration file
which describes the images, locations and actions to take.  This file 
will be the one specified by the -f option (if given).  Else, the 
~/.afterstep/pager file will be used &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it exists.  Else, 
/usr/local/share/afterstep/pager will be used.</P>

<P class="dense">If the <B>Pager</B> executable is linked to another name, ie ln -s
<B>Pager</B> <B>OtherPager</B>, then another &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  called <B>OtherPager</B>
can be started, with a completely different &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of configurations than
<B>Pager</B>, simply by adding <I>*OtherPager</I> options following the same
<I>*Pager</I> configuration options below to the <I>pager</I> file. This way
multiple Pager programs can be used.</P>

</LI>


<A NAME="keyboard_focus_control"><LI><B>KEYBOARD FOCUS CONTROL</B><br></A>
<P class="dense">You can direct the keyboard &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  to any &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  on the current desktop
by clicking with button 2 on its image in the pager. The &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  does
not need to be visible, but it does need to be on the current page.</P>

</LI>


<A NAME="invocation"><LI><B>INVOCATION</B><br></A>
<P class="dense"><B>Pager</B> can be invoked from the <I>autoexec</I> file or from a menu
item as shown in the Synopsis section above.</P>

<P class="dense">AfterStep will search through the directories specified in the
<I>ModulePath</I> configuration in the <I>base</I> (where # is your
colordepth) to attempt to locate <B>Pager</B>.</P>

</LI>


<A NAME="configuration_files"><LI><B>CONFIGURATION FILES</B><br></A>
<P class="dense"><B>Pager</B> reads the <I>base</I> file and <I>pager</I> file when it
starts up and looks for its configuration options.</P>

</LI>
</UL>


