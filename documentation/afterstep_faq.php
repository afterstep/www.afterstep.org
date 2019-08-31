&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep FAQ</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">This document is an ever growing set of questions, statements, ideas and complaints about AfterStep version 2.0</FONT></td></tr></table><br><hr>
<hr>
<OL><B>1. General Information</B><br>

<OL><B>1.1. About this Document.</B><br>
<P class="dense">
This document is an ever growing &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of questions, statements, ideas and complaints about
AfterStep version 2.0.
</P><P class="dense">
You can get this FAQ at the following locations:

<A href="http://www.afterstep.org/FAQ/"></A>
</P><P class="dense">
The rest of this document assumes you are running AfterStep 2.0.  If you are running a version of AfterStep prior
to version 2.0, this document will suggests only one thing: upgrade.
</P>
</OL>

<OL><B>1.2. What is AfterStep?</B><br>
<P class="dense">
AfterStep is a &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manager for the X &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  System (hereafter referred to as X).
It was started to emulate the look and feel of NeXTSTEP(tm), but has evolved into
something that while still being able to emulate NeXT, can do much much more.  Without
using much memory or cpu time, AfterStep provides all the features one could want in a
&nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manager.
</P>
</OL>

<OL><B>1.3. What is AfterStep's history?</B><br>
<P class="dense">
Original AfterStep was a continuation of the BowMan &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manager which was originally put together by Bo Yang.  
BowMan was based on the fvwm &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manager, written by Robert Nation. Fvwm was based on code from twm. 
And so on....
</P><P class="dense">
Idea was to emulate some of the look and feel of the NEXTSTEP(tm) user interface, but overtime it evolved to include other concepts, as dictated by end user needs. 
It is that unholy direction that made Alfredo Kojima abandon project in 1997 and create a &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manger of its own - 
&nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Maker, which had a goal of strict adherance to NEXTSTEP interface ideas.
</P><P class="dense">
After releasing version 1.8.11 it became aparent for developers that old AfterStep codebase had reached its limits and 
required a substantial redesign. Such redesign began with development of radically &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  image handling library 
libAfterImage, introducing high quality image manipulation, blending, TrueType fonts, XML image scripting, and more.
Building off of libAfterImage and incorporating &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  developments in X &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  management, AfterStep 2.0 was born and released in
September, 2004. As of now AfterStep code base contains none of the original fvwm parts, and association to fvwm, twm and BowMan remain only in history.  
</P>
</OL>

<OL><B>1.4. Fine, what &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  I'm not running AfterStep 2.0? Is there a FAQ for me?</B><br>
<P class="dense">
Yes.  There should be a version of the AfterStep FAQ available within your specific AfterStep distribution.
If you are using a version earlier than 2.0, it is strongly suggested you upgrade.
</P>
</OL>

<OL><B>1.5. What is X? What are these &quot;&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  managers&quot; ?</B><br>
<P class="dense">
&quot;X&quot; is shorthand for The X &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  System. It is a basis for building graphical user
interfaces for UNIX (it is available for non-UNIX systems, but wasn't designed to be as
such). &quot;X&quot; is not the interface itself, just a foundation for one.  For more information,
check 
<A href="http://www.x.org/">www.x.org</A>.
</P><P class="dense">
A &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manager is a program that manages your windows during your X session. AfterStep
is one of many available 
<A href="http://www.plig.org/xwinman/">window managers</A>.
</P>
</OL>

<OL><B>1.6. What are AfterStep's main features?</B><br>
<DL class="dense">
<DT class="dense"><B>The Wharf</B></DT>
<DD class="dense">Similar to NeXTSTEP's(tm) Dock, it allows applications to be Swallowed,
shortcuts with icons, and many other things.
</DD>

<DT class="dense"><B>The Pager</B></DT>
<DD class="dense">
Shows a miniature view of the Afterstep desktops, you can move between
them, and move windows around in the Pager as though it were a miniature desktop.
</DD>

<DT class="dense"><B>The WinList</B></DT>
<DD class="dense">
A list of all the windows, clicking on the items can show that &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 ,
&nbsp;<? local_doc_url("visualdoc.php","destroy","AudioEvents#options.destroy_window",$srcunset,$subunset) ?>
  it, &nbsp;<? local_doc_url("visualdoc.php","shade","AudioEvents#options.shade",$srcunset,$subunset) ?>
  it, or anything you might want.
</DD>

<DT class="dense"><B>Configurability</B></DT>
<DD class="dense">
Almost anything can be changed.
</DD>

<DT class="dense"><B>XML image scripting</B></DT>
<DD class="dense">AfterStep allows XML scripts to be used to assemble complex images for things like buttons, frame sides, etc, 
from other, simplier images or graphical primitives.
</DD>

<DT class="dense"><B>TrueType fonts support</B></DT>
<DD class="dense">Antialised TrueType fonts could be used to render &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  titles and other labels.
</DD>

<DT class="dense"><B>Unicode, UTF8 and other encodings support</B></DT>
<DD class="dense">Most international character encodings are supported as long as fonts provide glyphs.
</DD>

<DT class="dense"><B>ColorSchemes</B></DT>
<DD class="dense">AfterStep can calculate a &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of about 34 colors to create looks with harmonious &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  composition.
</DD>

</DL>
</OL>

<OL><B>1.7. Is AfterStep 2.0 GNOME and/or &nbsp;<? local_doc_url("visualdoc.php","KDE","SupportedHints#options.KDE",$srcunset,$subunset) ?>
  compliant?</B><br>
<P class="dense">
AfterStep 2.0 supports Extended &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manager Hints, &nbsp;<? local_doc_url("visualdoc.php","ICCCM","SupportedHints#options.ICCCM",$srcunset,$subunset) ?>
  protocol and &nbsp;<? local_doc_url("visualdoc.php","Motif","SupportedHints#options.Motif",$srcunset,$subunset) ?>
  hints, 
thus making it as compatible as possible with both GNOME and &nbsp;<? local_doc_url("visualdoc.php","KDE","SupportedHints#options.KDE",$srcunset,$subunset) ?>
 , as well as most other X applications.
</P>
</OL>

<OL><B>1.8. Can I run it in Microsoft Windows(tm)?</B><br>
<P class="dense">AfterStep 2.0 does run under Windows using CYGWIN compatibility layer, while running any X server.
Some of the X servers available under Windows allow so-called root-less mode, where X applications can coincide 
with native applications. See 
<A href="http://www.afterstep.org/screenshots/AS_Cygwin.jpg">sample screenshot</A>.
</P>
</OL>

<OL><B>1.9. Who develops AfterStep?</B><br>
<DL class="dense">
<DT class="dense"><B>Sasha Vasko	&lt;sasha at aftercode.net&gt;</B></DT>
<DD class="dense">coordinator, coder, web designer, carpenter, and everything else ( at the moment ).
</DD>
<DT class="dense"><B>Niklas Lunger &lt;niklas at fet dot at&gt;</B></DT>
<DD class="dense">documentation and user testing.
</DD>
<DT class="dense"><B>Nathan Mahon &lt;as_ml at vaevictus net&gt;</B></DT>
<DD class="dense">realease manager
</DD>
</DL>

</OL>
<OL><B>1.10. AfterStep is awesome! How can I help?</B><br>
<P class="dense">
Code contributions are welcome. Hardware donations are welcome. If you can help write AfterStep, or feel you can help
the effort elsewhere, do so.  Hang out on irc (#afterstep, efnet), participate on the
mailing lists, suggest ideas, help code, etc etc.
</P>
</OL>
<OL><B>1.11. Who writes this FAQ?</B><br>
<P class="dense">
see 1.9. above. 
</P>
</OL>


</OL>
<OL><B>3. Getting and Installing AfterStep 2.0</B><br>

<OL><B>3.1. Where can I get AfterStep 2.0?</B><br>
<P class="dense">You can download AfterStep 2.0 at any of the following locations:</P>
<DL class="dense">
<DD class="dense">
<A href="ftp://ftp.afterstep.org/stable/">ftp://ftp.afterstep.org/stable/</A></DD>
<DD class="dense"><? local_doc_url("visualdoc.php","SourceForge.net","http://sourceforge.net/project/showfiles.php?group_id=30",$srcunset,$subunset) ?></DD>
<DD class="dense"><? local_doc_url("visualdoc.php","RPM packages","http://www.afterstep.org/download.php?show=RPMS",$srcunset,$subunset) ?></DD>
</DL>
</OL>


<OL><B>3.2. What do I need to compile and install AfterStep?</B><br>
<P class="dense">
Because AfterStep is an X application, you need to have X installed, and the X development
libraries (note, in this case &quot;development&quot; means libraries need to compile things with X,
not development level code).  It's probably a good idea to also have a working C compiler.
</P><P class="dense">
AfterStep includes some image libraries, but it is recommended that you install those libraries 
using your distribution's package management system. Note that you will need development libraries 
in addition to run-time libraries. The following are the libraries that AfterStep can take advantage of : 
<DL class="dense">
<DD class="dense"><P class="dense">libJPEG - support for JPEG image format</P></DD>
<DD class="dense"><P class="dense">libPNG - support for PNG image format</P></DD>
<DD class="dense"><P class="dense">libTIFF - support for TIFF image format</P></DD>
<DD class="dense"><P class="dense">Freetype - support for TrueType fonts</P></DD>
</DL>
</P><P class="dense">
Note that following image format do not require any external libraries : 
XPM, PPM, BMP, ICO, XCF, GIF.
</P>
</OL>


<OL><B>3.3. Can I install AfterStep without being root?</B><br>
<P class="dense">
Yes, before compiling AfterStep, do this:
<PRE><P class="dense"><div class="container">mkdir &tilde;/bin
mkdir -p &tilde;/man/man1
./configure --prefix &tilde;/
</div><br></p></PRE>
Then follow the normal install directions, allowing you to <P class="dense"><div class="container">make install</div><br></p> without being
root.
</P>
</OL>


<OL><B>3.4. How do I upgrade AfterStep from AfterStep version prior to 2.0.0?</B><br>
<P class="dense">
Install AfterStep 2.0 and then run it. It will start with default configuration that you may or maynot like.
If you wish to try and reuse your old configuration files, then copy them over from your old 
&tilde;/GNUstep/Library/AfterStep/ directory and into &tilde;/.afterstep/. 
&nbsp;<? local_doc_url("visualdoc.php","Restart","Functions#options.Restart",$srcunset,$subunset) ?>
  AfterStep to make changes effective. If some of the features do not work quite right - 
feel free to submit bug report along with your configuration files.
</P><P class="dense">
It is recommended though that you start with default configuration and try out all of the supplied looks and &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  schemes.
Select whichever is &nbsp;<? local_doc_url("visualdoc.php","close","WharfSounds#options.close_folder",$srcunset,$subunset) ?>
  to what you want and then modify it to your liking. 
These approach will allow you to take advantage of many &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  features, available in AfterStep 2.0.
</P>
</OL>

<OL><B>3.4. How do I upgrade AfterStep from AfterStep version higher then 2.0.0?</B><br>
<P class="dense">
Make sure that all configuration files that you ever changed are in your home directory at &tilde;/.afterstep/, as
installing afterstep will replace everything in global shared location (/usr/local/share/afterstep).
Install afterstep and run. You should not have any trouble.
</P>
</OL>

<OL><B>3.5. What's up with all these compile errors?</B><br>
<P class="dense">
Most likely, you don't have the X devel package (should have come with
your operating system, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  not, check 
<A href="http://www.x.org/">http://www.x.org/</A>).
</P>
</OL>

<OL><B>3.6. How the hell does one configure AfterStep?</B><br>
<P class="dense">
Configuration files are usually either in /usr(/local)/share/afterstep for
system wide configuration and ~.afterstep for personal settings.
</P>
<P class="dense">
Configuration is handled in multiple files:
look file (in looks subdirectory) for visual attributes, feel file (in feels
subdirectory) for the general behaviour; wharf, winlist, banner, pager, animate
for &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  specific configuration.
</P>
<P class="dense">
Just copy any file you want to modify over from /usr(/local)/share/afterstep to
~.afterstep to override system wide defaults retaining subdirectory layout.
</P>
</OL>

</OL>
<OL><B>2. Resources</B><br>

<OL><B>2.1. Where can I find AfterStep resources, or help?</B><br>
<DL class="dense">
<DT class="dense"><B>HTML documentation</B></DT>
<DD class="dense">
<P class="dense">
AfterStep 2.0 comes installed with complete &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of documentation in HTML format, usually installed at 
/usr/local/share/afterstep/doc/html or /usr/share/afterstep/doc/html .
Same documentation is available online from : 

<A href="http://www.afterstep.org/visualdoc.php">http://www.afterstep.org/visualdoc.php</A>.
If you find that documentation incomplete in some areas - please feel free to submit any corrections to any of the AfterStep mailing lists.
</P>
</DD>

<DT class="dense"><B>WWW Page</B></DT>
<DD class="dense">
<P class="dense">
The official AfterStep web page is at 
<A href="http://www.afterstep.org/">http://www.afterstep.org/</A>.  This web site
is managed by whoever has write access to AfterStep CVS, and is
kindly hosted by the generous people at 
<A href="http://www.webconquest.com/">Web Conquest</A>.
</P>
</DD>

<DT class="dense"><B>FTP site</B></DT>
<DD class="dense">
<P class="dense">
The FTP site, 
<A href="ftp://ftp.afterstep.org/">ftp://ftp.afterstep.org/</A>, is the best place to get AfterStep.
</P>
</DD>

<DT class="dense"><B>AfterStep applets</B></DT>
<DD class="dense">
<P class="dense">
The applets (asapps) that go with AfterStep are distributed separately.  The applet
distribution is maintained by Albert Dorofeev, (&lt;tigr@tigr.net&gt;).  You can find the
applets at 
<A href="http://www.tigr.net/afterstep/as-apps/">http://www.tigr.net/afterstep/as-apps/</A>.
RPMs for many an applet could be found here :
<A href="http://www.afterstep.org/rpms/">http://www.afterstep.org/rpms/</A> 
</P>
</DD>

<DT class="dense"><B>Man pages.</B></DT>
<DD class="dense">
<P class="dense">
AfterStep installation comes with &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of man pages that attempt to cover all aspects of AfterStep configuration.
<I>Please</I> read the relevent man page before asking a question.  Also note that the
Pager man page is 'man Pager' (note the capitalization).  
</P>
</DD>

<DT class="dense"><B>IRC</B></DT>
<DD class="dense">
<P class="dense">
There is also #afterstep on freenode.net IRC servers. You can view current activity here : 

<A href="http://www.rchitecture.com/~computer/">http://www.rchitecture.com/~computer/</A>
</P>
</DD>

</DL>
</OL>

<OL><B>2.2. What are the AfterStep mailing lists, and where are their archives?</B><br>
<P class="dense">
There are three AfterStep mailing lists.  as-users, as-devel and as-bugs.</P>
<DL class="dense">
<DT class="dense"><B>as-users.</B></DT>
<DD class="dense">
<P class="dense">
as-users is the general AfterStep mailing list, &nbsp;<? local_doc_url("visualdoc.php","open","WharfSounds#options.open_folder",$srcunset,$subunset) ?>
  to all AfterStep questions, concerns
and ideas (<I>NO</I> LiteSTEP, &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Maker, some-x-app questions unless it really does
pertain to AfterStep, please).  
Subscribe by entering your e-mail at : 

<A href="http://mail.afterstep.org/mailman/listinfo/as-users/">http://mail.afterstep.org/mailman/listinfo/as-users/</A>
</P>
</DD>

<DT class="dense"><B>as-devel.</B></DT>
<DD class="dense">
<P class="dense">
as-devel is the development AfterStep mailing list.  It is used to send notices about commits to CVS repository. 
Subscribe by entering your e-mail at : 

<A href="http://mail.afterstep.org/mailman/listinfo/as-devel/">http://mail.afterstep.org/mailman/listinfo/as-devel/</A>
</P>
</DD>

<DT class="dense"><B>as-bugs.</B></DT>
<DD class="dense">
<P class="dense">
as-bugs is the AfterStep mailing list for submiting bug reports.  It is geared toward development
questions, ideas and complaints.  Subscribe by entering your e-mail at : 

<A href="http://mail.afterstep.org/mailman/listinfo/as-bugs/">http://mail.afterstep.org/mailman/listinfo/as-bugs/</A>
</P>
</DD>
</DL>
<P class="dense">
The mailing list archives can be read at 
<A href="http://www.tigr.net/afterstep/mail/">http://www.tigr.net/afterstep/mail/</A>.
</P>
</OL>

</OL>
