<? include "common.php";
pagestart("AfterStep version 2");
active_section_start("as20new_title_a.png");
?>

<?
if ( isset($_GET['show']) ) $show=$_GET['show'];
if ($show=="history") {
    local_url("changelog.php","features");
    echo " &nbsp;<b>version history</b>";
    echo '
<hr><ul>
AfterStep 2.x comes with many changes and improvements over the previous 1.8* series of AfterStep, yet everything you"ve come to expect and love in AfterStep is still there.<br>
</ul><hr>
<b>FIXME - this is still not ready for the public</b>
<hr>
Some of the new features and improvements are:<br>
<br>
<fieldset><legend><b>Afterstep 2.2</b> - Yet to be released</legend>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.1.2</b> - July 19, 2005</legend>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.1.1</b> - June 6, 2005</legend>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.1.0</b> - May 17, 2005</legend>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.0.5</b> - May 4, 2005</legend>
<ul>
<li>Added ReverseOrderHorizontal and REverseOrderVertical to 
  windowbox flags</li>
<li>ButtonBevel, ButtonAlign, ButtonIconSpacing look options added 
  to allow for better configuration of iconic window button look.</li>
<li>menu will not include any unavailable items by default. To keep them 
  in menu - you have to add .include file with option ShowUnavailable 
  set in it.</li>
<li>Added MinipixmapSize &lt;Width&gt; &lt;Height&gt; to look config to set maximum 
  size of menu minipixmaps</li>
<li>Added TitleVSpacing and TitleHSpacing to MyFrame to allow for 
  changing distance from tbar border to text.</li>
<li>Added InheritDefaults to MyFrame so to be able to init MyFrame to 
  whatever defaults should be - in case you only want to make minor 
  alteration to default MyFrame.</li>
<li>Added IgnoreConfig to database settings to allow for disabling of 
  handling of ConfigRequests coming from client.</li>
<li>Added --pattern &lt;pattern&gt; to WinTabs module to allow for setting 
  pattern from cmd line.</li>
<li>Lots of WinTabs fixes and improvements.</li>
<li>Added SwallowWindow "name" <module_name> built-in to allow for 
  selection of a window to be swallowed by module, such as WinTabs.</li>
</ul>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.0.4</b> - March 22, 2005</legend>
<ul>
<li>Desktop Cover tint is now same as Base color from selected colorscheme.</li>
<li>added look.Breeze contributed by ziph.</li>
<li>updated FAQs and moved them under ASDocGen generated tree.</li>
</ul>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.0.3</b> - March 2, 2005</legend>
<ul>
<li>added several MyFrame features :</li>
<ul>
TitleFHue, TitleUHue, TitleSHue, TitleFocusedHue, TitleUnfocusedHue,
TitleStickyHue - to allow altering Hue of the titlebar on focus/unfocus.
TitleFSaturation, TitleUSaturation, TitleSSaturation, 
TitleFocusedSaturation, TitleUnfocusedSaturation, TitleStickySaturation - 
to allow altering stauration of the titlebar on focus/unfocus events.
LeftBtnAlign, RightBtnAlign to allow for different align of the right 
and left blocks of title buttons.</ul>
See look.Unity for sample usage of that.
</ul>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.0.2</b> - January 20, 2005</legend>
<ul>
<li>added include_ordered &lt;order_id&gt; &lt;path&gt;
  keyword to menu .include syntax - allow including menu trees so that they 
  all get sorted down at the bottom of menu.</li>
<li>libs can now compile as DLLs under CYGWIN.</li>
</ul>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.0.1</b> - December 1, 2004</legend>
</fieldset>
<br>
<fieldset><legend><b>Afterstep 2.0</b> - September 28, 2004</legend>
<ul>
<li>Reimplemented Ident module</li>
<li>Added bunch of docs to ASDocGen and incorporated code from asimbrowser to 
 generate HTML catalogue of installed files.</li>
<li>Added keyboard shortcuts to menus :</li>
<ul>
Esc or Left or Backspace - exit menu,<br>
Enter or Right - run selected item or go to submenu<br>
Up, Down - select item<br>
A-Z,a-z,0-9 select item with hotkey or a first item that starts with<br>
that letter.
</ul>
</ul>
</fieldset>
<br>
<fieldset><legend><b>AfterStep 2.0beta5</b> - August 17, 2004</legend>
<ul>
<li>Improved image storage memory manager cutting down memory usage by 90%</li>
<li>Focusable Wharf buttons.</li>
<li>Outlined text.</li>
<li>WinList menu can be sorted in alpha order.</li>
<li>New centralized XML based documentation system.</li>
<li>Faster desktop switching using background image caching</LI>
</ul>
</fieldset>
<br>

<fieldset><legend><b>AfterStep 2.0beta4</b> - March 5, 2004</legend>
<ul>
<li>Reverted cursor settings back to feel file.</li>
<li>Used ascompose as new Banner module</li>
<li>Added to ascompose ability to process files tag by tag, allowing for animation.</li>
<li>Added to look config animation settings for root background:</li>
<pre>
[DontAnimateBackground0|1]
[CoverAnimationSteps   <steps count>]
[CoverAnimationType<type>]
</pre>
</ul>
</fieldset>
<br>

<fieldset><legend><b>AfterStep 2.0beta3</b> - December 23, 2004</legend>
<ul>
<li>Added WinTabs module - to swallow windows with Class matching specified
  pattern and arrange them in single window using tabs.</li>
</ul>
</fieldset>
<br>

<fieldset><legend><b>AfterStep 2.0beta2</b>- September 29, 2003</legend>
<ul>
<li>Added CursorFore and CursorBack settings to look to adjust color of the mouse cursor</li>
<li>Cursor settings now must be in look and not in feel.</li>
<li>Improved algorithm behind saving desktop state and restoring it on startup.
  	To enable it add the following line to autoexec :
 	Function "WorkspaceState"</li>
<li>new &lt;color domain="ascs" name="name" argb="color_value"/&gt; tag to ASImage XML.
Could be used to define color aliases at the beginning of the xml script.</li>
</ul>
</fieldset>
<br>

<fieldset><legend> <b>AfterStep 2.0beta1</b> - August 11, 2003</legend>
<ul>
  <li>New high performance and high quality image handling engine.</li>
  <li>Support for TrueType fonts.</li>
  <li>Text antialiasing.</li>
  <li>Support for UTF-8, UNICODE and numerous locales.</li>
  <li>XML image scripting.</li>
  <li>Improved Window hints handling supporting new Extended WM specs.</li>
  <li>Rewritten and consolidated GUI rendering engine with support for shaped windows and complex layouts.</li>
  <li>Better theme support.</li>
  <li>More background image types with support for scaling, shaped images, alpha-blending, and other blending algorithms.</li>
  <li>More powerfull pattern matching algorithm in database.</li>
  <li>Shaped titlebars and frame decorations.</li>
  <li>More options to frame decorations.</li>
  <li>Arbitrary layout of the titlebar buttons.</li>
  <li>Built in screenshot command :).</li>
  <li>Designer quality colorschemes.</li>
  <li>Configuration reading-writing library, allowing for easier implementation of GUI control panel.</li>
  <li>Menus are treated as regular windows, allowing for moving, resizing, shading, iconification of menus.</li>
  <li>Used options from submenus could optionally be displayed in parent menus for faster menu selection.</li>
  <li>Thumbnail icons could be shown in menus.</li>
  <li>WinList menu shows application icons.</li>
  <li>Shaped Pager and WinList.</li>
  <li>2D WinList with more flexible layout options.</li>
  <li>Pager"s desks could be shaded.</li>
  <li>Wharf allows labels in buttons.</li>
  <li>Numerous layout options in Wharf.</li>
  <li>Wharf performs checks for application availability.</li>
  <li>Additional options in database settings for comprehensive windows configurations.</li>
  <li>AvoidCover is able to move other windows away as they move/resize themselves.</li>
  <li>Optional snapping to edges while moving/resizing windows.</li>
  <li>Proper window switching (alt-tabbing).</li>
  <li>Powerfull initial window placement policies using window boxes.</li>
  <li>Tiled and cascaded initial window placement.</li>
  <li>Shaped balloons.</li>
  <li>Self diagnostic code allowing to properly report segfaults in AfterStep, and gracefully recover from most failures.</li>
</ul>
</fieldset>
';
}
 ?>


<?
if ($show=="") {
    echo "<b>features</b> &nbsp; ";
    local_url("changelog.php?show=history","version history");
    echo "\n<hr>\n<ul>This is meant to give an insight to the development of
    AfterStep</ul><hr><b>FIXME - this is still not ready for the public</b><hr>";
    echo "<ul><li>AfterStep</li><ul>
	<li>look</li>
	<li>feel</li></ul>
    </ul>
    <ul><li>Modules</li><ul>
	<li>Ident</li>
	<ol><li>in CVS Since: Gotta get that from cvs or something</li>
	<li>last modified: Gotta get that from cvs or something (files to watch?)</li>
	<li>feature history: Gotta get that from cvs or something</li>
	</ol>
	<li>Animate</li>
	<li>Wharf</li>
	<li>WinTabs</li>\n
	<li>WinList</li>\n
	<li>Pager</li>\n
	<li>WinTabs</li>\n
	<li>WinTabs</li>\n
	<li>Arrange</li>
	<li>Banner (ascompose)</li>
    </ul>
    </ul>

    <ul><li>Tools</li><ul>
	<li>ASWallpaperr</li>
	<li>(G)WinCommand</li>
	<li>ASFileBrowser</li>
	<li>asscale</li>
    </ul></ul>\n";
    }
?>


<?
active_section_end();
pageend();
?>
