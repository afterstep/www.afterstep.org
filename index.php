<? include "common.php";

pagestart("Welcome to the Official AfterStep website");
?>
<?
active_section_start("welcome_title_a.png");

?>

<?
if ( isset($_GET['show']) ) $show=$_GET['show'];
    else $show="";

if ($show=="") {
    echo'<b>About us</b> &nbsp; ';
    local_url('index.php?show=features','features');
    echo ' &nbsp; ';
    local_url('index.php?show=libraries','dependencies');

?>


<hr>
<br />
<b>Description</b>
<ul>
AfterStep is a window manager for the Unix X Window System. Originally based on the look
and feel of the NeXTStep interface, it provides end users with a consistent,
clean, and elegant desktop. The goal of AfterStep development is to provide for flexibility of desktop configuration,
improving aestetics, and efficient use of system resources.<br />
<br />
Some of the distinguishing features of AfterStep compared to other window
managers are its low usage of resources, stability and configurability.<br />
<br />
Please have a look at the <a href="news.php">news page</a>
to learn more about our upcoming releases.
</ul>
<?
// echo "<li> A compact list of features of ";
// local_url("as20.php","AfterStep 2.x");
// echo "is also available.</li>";
?> 
<fieldset>
<center><b>Latest <a href="ftp://ftp.afterstep.org/stable/AfterStep-2.2.12.tar.bz2">Version 2.2.12</a> was released on June 10, 2013</b></center>
</fieldset>
<br /><br />
<b>About these pages</b>
<ul>
These pages provide an introduction and reference to the wonderful world of
AfterStep, and serve as a distribution point for the latest stable and
development releases. We kindly invite you to explore AfterStep and hope you'll
come to appreciates its power and potential.
<br />
<br />
This website was designed to mimick the default look of AfterStep 2 as close as possible.
All graphics have been rendered using <? local_url("visualdoc.php?show=ascompose","ascompose"); ?>, supplied with the AfterStep distribution.
The entire clipart used to render graphics was taken from actuall files supplied with AfterStep.
<br />
<br />Note that the ability to change the colorscheme of this website is mimicking one of the most interesting new features in AfterStep 2 -
<? local_url("visualdoc.php?show=ColorScheme","Colorschemes"); ?>.
<br />
<br />The xml script used to render this site is available <a href="http://www.afterstep.org/xml.php/images/compose/look.Default.xml">here</a>.
<br />Colorscheme definitions are availbale here :
<a href="http://www.afterstep.org/xml.php/images/compose/Crimson.xml">Crimson</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Deep_Red.xml">Deep Red</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Gold_On_Blue.xml">Gold on Blue</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Green_Sea.xml">Green Sea</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Lime.xml">Lime</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/NeXTish.xml">NeXTish</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Peru.xml">Peru</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Purple.xml">Purple</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Sea_Water.xml">Sea Water</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Silver.xml">Silver</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Stormy_Skies.xml">Stormy Skies</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Turquoise.xml">Turquoise</a>,
<a href="http://www.afterstep.org/xml.php/images/compose/Washed_Blue.xml">Washed Blue</a>,
<br />
Here is the <a href="http://www.afterstep.org/xml.php/images/compose/compose.sh.xml">script</a> that could be used to interpret above xml files.
</ul>
<br /><br />
<fieldset>
<center><b>Developer Positions Open!</b></center>
<hr>
We are currently accepting additional developers to AfterStep. Some of the areas open are:
<ul>
<li>Coding</li>
<li>Icons & Graphics</li>
<li>Platform & Distro Testing</li>
<li>Documentation Writing</li>
<li>Overall Theme Designing</li>
</ul>
<p/>
If you're interested in helping out with AfterStep, please drop by our IRC channel on <a href="http://www.freenode.net/">Freenode</a>, #AfterStep .
We're most active Mon-Fri 9am-5pm (Central US Time). Though, you may find some of us active during other hours of the day.
<p/>
Optionally, you may e-mail our Lead Project Manager, <a href="mailto:sasha@aftercode.net">Sasha Vasko</a>.
<p/>
Also, if you're just wanting to submit a patch for Afterstep, Please send a compressed (bz2, gz, etc) diff as an attachment to 
<a href="mailto:sasha@aftercode.net">sasha@aftercode.net</a>
<p>
<i>as example using diff & bzip2:<br/>
diff -Nur ... ... | bzip2 -9 > patchX.diff.bz2; mpack patchX.diff.bz2 sasha@aftercode.net</i>
</p>
</fieldset>
<center>
<script type="text/javascript" src="http://www.ohloh.net/projects/5561/widgets/project_partner_badge"></script>
</center>
<?
    }
if ($show=="features") {
    local_url('index.php','About us');
    echo' &nbsp; <b>features</b> &nbsp; ';
    local_url('index.php?show=libraries','dependencies');
?>
<hr>
<ul>This is intended as an overview of what AfterStep has to offer,<br>
the documentation holds information how to achieve these things.</ul><hr>
<ul>
 <li>AfterStep proper</li>
    <br>
    <ul>
     <li>Fully controlable behaviour:</li>
     <ul><li>Window Placement & decor ( on a per-window basis )</li>
         <li>fully configurable keyboard and mouse behaviour</li>
	 <li>almost full <a href="http://standards.freedesktop.org/wm-spec/wm-spec-latest.html">EWMH</a> compliance</li>
	 </ul>
     <br>
    </ul>
 <li>Modules ( can be started multiple times )</li>
    <br>
    <ul>
     <li>Wharf ( application launcher )</li>
	<ul><li>Can swallow any app or applet (gnome/kde applets not supported)</li>
	    <li>Can have any shape and ( multi ) ( column / row ) layout </li></ul>
     <li>WinList ( shows open windows )</li>
	<ul><li>Horizontal or vertical</li>
	    <li>Arbitrary number of rows/columns</li></ul>
     <li>Pager ( virtual desktops )</li>
	<ul><li>Desktops and Viewports</li>
	    <li>Arbitrary number of rows/columns</li></ul>
     <li>WinTabs ( groups several windows into a tabed one )</li>
     <li>WinCommand ( control of windows )</li>
	<ul><li>understands regular expressions for selecting windows to affect</li>
	<li>Supports the commands: center, center jump, jump, iconify, deiconify, group, kill, move, raize, resize, sendtodesk</li>
	<li>GUI frontend ( GWCommand ) for ease of use</ul>
    </ul>
    <li>Helper Tools</li>
    <br>
    <ul>
     <li>ASWallpaper ( desktop background utility )</li>
	<br>
     <li>ASFileBrowser ( imagebrowser to view ASXML images among others )</li>
	<br>
     <li>ASRun ( run dialogue )</li>
	<br>
     <li>Ident ( displays window properties )</li>
	<br>
     <li>ASDocGen ( Documentation generation system )</li>
	<ul>supported documentation formats:
	<ul>man pages, Docbook XML, html, php</ul></ul>
    </ul>
</ul>


<? }

if ($show=="libraries") {
    local_url('index.php','About us');
    echo ' &nbsp; ';
    local_url('index.php?show=features','features');
    echo' &nbsp; <b>dependencies</b>';

?>
<hr>
<ul>
The following libraries are needed to run AfterStep:<br>
<br>
<ul>
<li>required:</li>
<ul>
<li>libjpeg</li>
<li>libpng</li>
<li>libtiff</li>
<li>freetype</li>
</ul>
<br>
<li>optional :</li>
<ul>
<li>gtk 2.x</li>
<li>fltk 1.x</li>
</ul>
</ul>
</ul>

<ul>
If you wish to compile AfterStep you will additionally need:<br>
<br>
<ul>
<li>gcc 3 or 4 series</li>
<li>make</li>
<li>devel packages of:</li>
<ul>
<li>libjpeg</li>
<li>libpng</li>
<li>libtiff</li>
<li>freetype</li>
<li>xlibs</li>
<li>gtk</li>
<li>fltk</li>
</ul>
</ul>
</ul>
<br>



<? }

active_section_end();

?>
<?
pageend();

?>

