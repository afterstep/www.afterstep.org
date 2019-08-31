<? include "common.php";
pagestart("Aterm : The AfterStep Terminal Emulator");
?>
<?
active_section_start("aterm_title_a.png");
?>
<IMG src="logos/aterm.png" border="0" vspace="0" hspace="20" align="left" valign="center">

<p align="right">
Latest <A href="ftp://ftp.afterstep.org/apps/aterm/aterm-1.0.1.tar.bz2">Version 1.0.1</A> was released on August 1, 2007
<hr>
<br />
<b>Status</b><ul>

aterm is deprecated and in a maintenance mode only; there will be no further updates. Use <A href="http://software.schmorp.de/pkg/rxvt-unicode.html">rxvt-unicode</A> instead.
</ul>
<br />

<b>Synopsis</b>
<ul> aterm is designed to provide pleasing visual effects, while performing such a mundane function as terminal
emulation under X. It is largely based on <a href="http://sourceforge.net/projects/rxvt">rxvt</a> 
code. Several points set it apart from other similar applications : 
<ul>
<li>fast pseudo-transparency, that does not consume any additional resources.</li>
<li>optional off-focus fading of text - when aterm looses focus its contents is dimmed.</li>
<li>NeXT-ish scrollbar</li>
<li>integration with AfterStep window manager, allowing for aterm looks to be determined by AfterStep theme,
and allowing aterm do things like semitransparent gradiented background, JPEG, PNG and other images used as background, 
and more.</li>
</ul>
Note that AfterStep integration works only with AfterStep version 2.00.01 or later.<br />
Support for background images requires either AfterStep integration, or at least <A href="afterimage/index.php">libAfterImage</A> v.1.07 or later installed.
</ul>
<br />
<b>Downloading</b><ul>
<fieldset>You can get aterm releases from several places:
    <OL>
	<LI><A href="ftp://ftp.afterstep.org/apps/aterm/">From AfterStep FTP site</A>.
	<LI><A href="http://sourceforge.net/project/showfiles.php?group_id=888">Here</A> at <B>sourceforge</B>.
	<LI><B>Debian</B> <A href="ftp://ftp.debian.org/debian/pool/main/a/aterm">packages</A> courtesy <A
href="mailto:weinholt@debian.org">G&ouml;ran Weinholt</A>
	<LI><B>Fedora</B> packages via yum or via <A href="ftp://ftp.afterstep.org/stable/rpms/RPMS">AfterApplet RPMS</A>
    </OL>
    If you mirrored aterm distribution and want your site added here -
    please e-mail me at &lt;<A href="mailto:sasha@aftercode.net">sasha@aftercode.net</a>&gt; .
<br />
You can get standalone libAfterImage to enable background image support from <A href="ftp://ftp.afterstep.org/stable/libAfterImage/">this location</A>. 
</fieldset>
</ul>
<br />
<b>CVS access</b><ul>

cvs -d :pserver:anonymous@cvs.aftercode.net:/home/cvsroot co aterm1

</ul>
<br />
<b>Usage</b><ul>
Here is blue tinted transparent term, using efficient transparency :<br />
<b>aterm -tr -tint blue -fg yellow -bg black</b><br />
<br />
Here is the same but with off-focus fading :<br />
<b>aterm -tr -tint blue -fg yellow -bg black -fade 50</b><br />
<br />
Here is the shaded transparent aterm : <br />
<b>aterm -tr -sh 50</b><br />
<br />
If you have AfterStep 2.0.1 or later installed - aterm should be able to detect it and 
integrate into AfterStep. That allows you to setup MyStyle structures in AfterStep look,
making aterm automagically use them upon startup. For example default MyStyle creates semitransparent gradient 
in aterm's background :
<br />
<a href="screenshots/aterm.Stormy_Skies.png"><img src="screenshots/aterm.Stormy_Skies.png.small.jpg" width=210 align="right"></a>
<br />
<b>MyStyle</b> "*aterm"<br />
&nbsp;&nbsp;<b>ForeColor</b> &nbsp;&nbsp; InactiveText2<br />
&nbsp;&nbsp;<b>BackColor</b> &nbsp;&nbsp; Inactive2<br />
&nbsp;&nbsp;<b>BackGradient</b> &nbsp; 6 Inactive2Light alpha(50,Inactive2Dark)<br />
<b>~MyStyle</b><br />
<br />
Starting aterm without parameters will cause it to use that MyStyle.
You can also override it with -mystyle parameter : <br />
<b>aterm -mystyle your_style_name</b><br />
</ul>
<br />
<b>Screenshots</b><ul>

See <A href="look.php">AfterStep screenshots</A> for examples of aterm in action.
</ul>
<br />
<b>Related links :</b><ul>
    <A href="http://www.ibbnet.nl/~anne/keyboard/keyboard.html#X">Backspace and Delete</A><A href="keyboard.html#X"><font size=2>(local copy)</font></A><br />
    <A href="http://www.linuxdoc.org/HOWTO/Keyboard-and-Console-HOWTO.html">Keyboard and Console HOWTO</A><br />
    <A href="http://www.linuxdoc.org/HOWTO/Xterm-Title.html">Title HOWTO</A><br />
    <A href="http://www.linuxdoc.org/HOWTO/Bash-Prompt-HOWTO/index.html">BASH prompt HOWTO</A><br />
    <A href="http://aterm.sourceforge.net/README.Unix98PTY">Unix98 PTY README</A><br />
    <A href="http://tronche.com/gui/x/xlib/function-index.html">Xlib programming manual</A><br />
    <A href="http://tronche.com/gui/x/icccm/">ICCCM</A>
</ul>
<?
active_section_end();
?>
<?
pageend();
?>
