<? include "common.php";

pagestart("AfterStep version 2.0");
?>
<?
active_section_start("as20new_title_a.png");
?>

AfterStep 2.0 comes with many changes and improvements over the previous 1.8* series of AfterStep, yet everything you've come to expect and love in AfterStep is still there.<br><br>

Some of the new features and improvements are:<br>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AfterStep 2.0beta1:</h3>
<ol>
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
  <li>Pager's desks could be shaded.</li>
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
</ol>
<br>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AfterStep 2.0beta2:</h3>
<ol>
<li>Added CursorFore and CursorBack settings to look to adjust color of the mouse cursor</li>
<li>Cursor settings now must be in look and not in feel.</li>
<li>Improved algorithm behind saving desktop state and restoring it on startup.
  	To enable it add the following line to autoexec :
 	Function "WorkspaceState"</li>
<li>new &lt;color domain="ascs" name="name" argb="color_value"/&gt; tag to ASImage XML.
Could be used to define color aliases at the beginning of the xml script.</li>
</ol>
<br>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AfterStep 2.0beta3:</h3>
<ol>
<li>Added WinTabs module - to swallow windows with Class matching specified
  pattern and arrange them in single window using tabs.</li>
</ol>
<br>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AfterStep 2.0beta4:</h3>
<ol>
<li>Reverted cursor settings back to feel file.</li>
<li>Used ascompose as new Banner module</li>
<li>Added to ascompose ability to process files tag by tag, allowing for animation.</li>
<li>Added to look config animation settings for root background:</li>
<pre>
[DontAnimateBackground0|1]
[CoverAnimationSteps   <steps count>]
[CoverAnimationType<type>]
</pre>
</ol>
<br>
<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AfterStep 2.0beta5:</h3>
<ol>
<li>Improved image storage memory manager cutting down memory usage by 90%</li>
<li>Focusable Wharf buttons.</li>
<li>Outlined text.</li>
<li>WinList menu can be sorted in alpha order.</li>
<li>New centralized XML based documentation system.</li>
<li>Faster desktop switching using background image caching</LI>
</ol>

<?
active_section_end();
?>
<?
pageend();

?>
