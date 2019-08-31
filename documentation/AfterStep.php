&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">X11 window manager</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","AfterStep_options","AfterStep",$subunset) ?>
 <hr>

<A NAME="related"><UL>
 AfterStep
 </A><? local_doc_url("visualdoc.php","AutoExec","AutoExec",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Base Configuration","Base",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Function","Functions",$srcunset,$subunset) ?>
</UL>

<A NAME="standard_options"><UL>
</A>
<A NAME="standard_options_list"></A>
<LI>
<B>STANDARD OPTIONS</B><br>
<P class="dense">The following is the list of command line options supported by all AfterStep modules and applications.</P><DL class="dense">
	
	<DT class="dense"><B>-v | --version</B></DT>
	<DD class="dense">
   <P class="dense">Display version information and stop.    </P>
   </DD>
	
	
	<DT class="dense"><B>-c | --config</B></DT>
	<DD class="dense">
   <P class="dense">Display Config information and stop.    </P>
   </DD>
	
	
	<DT class="dense"><B>-h | --help</B></DT>
	<DD class="dense">
   <P class="dense">Display uasge information and stop.    </P>
   </DD>
	
	
	<DT class="dense"><B>     --debug</B></DT>
	<DD class="dense">
   <P class="dense">Debugging: Run in Synchronous mode.    </P>
   </DD>
	
	
	<DT class="dense"><B>-s | --single</B></DT>
	<DD class="dense">
   <P class="dense">Run on single screen only.    </P>
   </DD>
	
	
	<DT class="dense"><B>-r | --restart</B></DT>
	<DD class="dense">
   <P class="dense">Run as &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it was restarted.  same as regular &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
 , only 
runs RestartFunctioninstead of InitFunction.   </P>
   </DD>
	
	
	<DT class="dense"><B>-d | --display <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Specify what X display we should connect to.  Overrides $DISPLAY environment variable.   </P>
   </DD>
	
	
	<DT class="dense"><B>-f | --&nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
 -file <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Read all &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  from requested file.  &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you want to use .steprc
instead of standard &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  files.   </P>
   </DD>
	
	
	<DT class="dense"><B>-p | --user-dir <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Read all the &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  from requested dir.  &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it to override &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  location
requested in compile time.   </P>
   </DD>
	
	
	<DT class="dense"><B>-g | --global-dir <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  requested dir as a shared &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  dir.  &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it to override shared &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  location
requested in compile time.   </P>
   </DD>
	
	
	<DT class="dense"><B>-V | --verbosity-level <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Change verbosity of the AfterStep output.  0 - will disable any output;
1 - will allow only error messages;
5 - both errors and warnings(default).   </P>
   </DD>
	
	
	<DT class="dense"><B>     --&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Internal &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
 : &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  in which action occured.  interface part which has triggered our &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
 .   </P>
   </DD>
	
	
	<DT class="dense"><B>     --context <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Internal &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
 : Context in which action occured.  interface part which has triggered our &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
 .   </P>
   </DD>
	
	
	<DT class="dense"><B>     --look <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Read look &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  from requested file.  &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you want to use different look
instead of what was selected from the menu.   </P>
   </DD>
	
	
	<DT class="dense"><B>     --feel <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Read feel &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  from requested file.  &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you want to use different feel
instead of what was selected from the menu.   </P>
   </DD>
	
	
	<DT class="dense"><B>     --theme <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Read theme &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  from requested file.  &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you want to use different theme
instead of what was selected from the menu.   </P>
   </DD>
	
	
	<DT class="dense"><B>-l | --log <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Save all output into the file.  (instead of printing it to console).   </P>
   </DD>
	
	
	<DT class="dense"><B>-L | --locale <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Set","Functions#options.Set",$srcunset,$subunset) ?>
  language locale.  to be used while displaying &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .   </P>
   </DD>
	
	
	<DT class="dense"><B>     --myname <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Overrides &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  name.  will be used while parsing &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  files
and reporting to AfterStep.   </P>
   </DD>
	
	
	<DT class="dense"><B>     --geometry <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Overrides &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
 's geometry.    </P>
   </DD>
	
	
	<DT class="dense"><B>     --gravity <I>val</I></B></DT>
	<DD class="dense">
   <P class="dense">Overrides &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
 's gravity.    </P>
   </DD>
	
</DL>
</LI>
</UL>

<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>afterstep</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
</LI>
</UL>

<A NAME="overview"><UL>
</A><P class="dense">AfterStep has been almost entirely rewritten in this &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  incarnation.
        Here is the short list of &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  architectural changes:</P>
<P class="dense">        1.1. New high performance and high quality image handling engine has
             been developed to fulfill GUI needs. It includes different image
             transformations, such as scaling, tiling, cropping, blurring,
             blending of arbitrary number of layers, in-memory image compression,
             support for 12 different file formats, including its own parser/writer
             of XPM files, capable of achieving much better performance then
             default libXpm. Supported image formats are :</P>
<P class="dense">        XPM, PNG, JPEG, XCF(GIMP image format), PPM, PNM, BMP, ICO,
             CUR, GIF, TIFF, and XML scripts. Where XML scripts allow for user to
             create script of transformations to be performed on the image at the
             time when it gets loaded./para&gt;
<P class="dense">             libAfterImage also provides support for TTF fonts ( using libfreetype )
             and smoothed standard X raster fonts.</P>
<P class="dense">        1.2. &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  hints handling has been rewriten and reorganized, and most of the
             Extended WM specs has been incorporated, as well, as better support for
             &nbsp;<? local_doc_url("visualdoc.php","Motif","SupportedHints#options.Motif",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ICCCM","SupportedHints#options.ICCCM",$srcunset,$subunset) ?>
  and old GNOME hints has been implemented.</P>
<P class="dense">        1.3. All the GUI rendering code has been aggregated into libAfterStep
             and now all the GUI elements are rendered using consistent approach
             in every &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  and every part of the AfterStep proper. From now on
             interface is build from so called TBars. TBar is rectangular area
             that may be focused(hilited) or unfocused and pressed or unpressed.
             Each TBar has the following structure :</P>
<P class="dense">                - the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the TBar, which is defined by &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  and state
                  of the bar - there are two MyStyles assigned to each TBar - one
                  for focused and one for unfocused state.</P>
<P class="dense">                - tiles of the TBar. Tiles are smaller features that gets arranged
                  inside the bar according to its size, alignment, position and
                  order. Tiles could be static icons ( cannot be pressed );
                  blocks of buttons - each having two shapes - pressed and normal;
                  Text labels; Empty space tiles.</P>
<P class="dense">                  There could be upto 256 tiles, each residing on one of the cells
                  in 16x16 grid. Several tiles could reside in single cell, in
                  which case they get superimposed on top of each other.</P>
<P class="dense">          - &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  of the TBar. When TBar is rendered all of its tiles are
                  superimposed on top of its &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 , and resulting image
                  will have a 3D &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  drawn on it, using colors from same
                  &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  as used for &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 . &nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  could be switched off
                  partially or entirely. Respective configuration options has
                  been added  where appropriate. When TBar is pressed - its
                  &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  is inverted.</P>

<P class="dense">       When TBar is rendered all of its elements gets superimposed on top
             of each other using one of 13 blending methods supported by
             libAfterImage, with default being simple alphablending. See
             &nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  configuration for more details. This is refrred to as
             &quot;Composition Method&quot;.</P>
<P class="dense">       1.4. Due to the fact that AfterStep is using compression to store
             images in memory - there is no need to have separate root
             &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  handler, and so asetroot has been discontinued and
             afterstep proper now does all the root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  loading.
             You could simply copy-and-paste your asteroot &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  into your
             look file. This has an added advantage of simplifing theme support
             for root backgrounds.</P>
<P class="dense">        1.5. Significant work has been done to create libAfterConf which
             provides easy means for reading configuration options, and
             facilitates implementation of any configuration tool.</P>
<P class="dense">       1.6. Some work has been done to improve support for themes. AfterStep
             proper and modules now load configuration files is this order :</P>
<P class="dense">       #1 - base &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
 ;
             #2 - look, feel, menu, database, autoexec and &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  specific &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
 ;
             #3 - theme file;
             #4 - theme override file;</P>
<P class="dense">       Theme override file is needed so that user may have a list of
             critical options that he/she does not want to be changed by any
             theme. What is missing here is a comprehensive theme building tool.</P>
<P class="dense">       1.7. AfterStep now make extensive use of X shaped extensions ( where
             available ) Everything could be shaped now - titlebars, Pager,
             Wharf, etc. To make some element shaped - &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  with &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
 
             type 125 or 126 should be used.</P>
<P class="dense">       1.8. Menus are now treated same as regular windows. They could be
             configured in database file using preset &nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
  &quot;ASMenu&quot; to have
             different titlebar buttons, frame decorations, stickiness, etc.
             &nbsp;<? local_doc_url("visualdoc.php","MenuPinOn","Look_options#options.MenuPinOn",$srcunset,$subunset) ?>
  has been changed to be just another titlebar button,
             with &nbsp;<? local_doc_url("visualdoc.php","PinMenu","Functions#options.PinMenu",$srcunset,$subunset) ?>
  function assigned to it.</P>
<P class="dense">       1.9. AfterStep no longer uses fixed scheme of 5 titlebar buttons on
             each side, and order of buttons could be configured in look. There
             is still limitation to have no more then 10 buttons total.</P></P></UL>


