<? local_doc_main_menu("11"); ?>
<img src=documentation/images/whandling.png align=middle> <b>Window handling</b>
<hr>
 &nbsp; <b>Window decor</b>
 &nbsp; <? local_doc_url("visualdoc.php","look","look",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Color Scheme","colorscheme",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","feel","feel",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Database","database",$srcunset,$subunset) ?>
<hr><br>
<table width="640">
<tr>
<td Colspan="2">
<map name="windecor">
<? local_doc_immap_url("7,3,38,22","visualdoc.php","windecor",$srcunset,"buttons") ?>
<? local_doc_immap_url("471,3,526,22","visualdoc.php","windecor",$srcunset,"buttons") ?>
<? local_doc_immap_url("0,0,532,27","visualdoc.php","windecor",$srcunset,"title") ?>
<? local_doc_immap_url("0,186,532,192","visualdoc.php","windecor",$srcunset,"frame") ?>
</map>
<img src="documentation/images/aterm.jpg" usemap="windecor">
</td>
</tr>
<tr>
<td>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<?
if ($sub<>"")
{
 if ($sub=="title")
    {
    echo "Titlebar configuration options:<br>";
    local_url("visualdoc.php?show=MyFrame_options#options.TitleUnfocusedStyle","TitleUnfocusedStyle");
    echo "<br>";
    local_url("visualdoc.php?show=MyFrame_options#options.TitleFocusedStyle","TitleFocusedStyle");
    echo "<br>";
    local_url("visualdoc.php?show=MyFrame_options#options.TitleStickyStyle","TitleStickyStyle");
    echo "<br>";
    local_url("visualdoc.php?show=MyFrame_options#options.TitleBackground","TitleBackground");
    echo "<br>";
    local_url("","");
    }
 if ($sub=="frame")
    {
    echo "<br>See Also: ";
    local_url("http://10.1.1.4/www.afterstep.org/visualdoc.php?show=MyFrame_options&src=MyFrame","MyFrame options");
    }
 if ($sub=="buttons")
    {
    echo "<br>TitleButton configuration options:<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButton","TitleButton");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloonBorderHilite","TitleButtonBalloonBorderHilite");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloonCloseDelay","TitleButtonBalloonCloseDelay");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloonDelay","TitleButtonBalloonDelay");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloonStyle","TitleButtonBalloonStyle");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloonXOffset","TitleButtonBalloonXOffset");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloonYOffset","TitleButtonBalloonYOffset");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloons","TitleButtonBalloons");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonOrder","TitleButtonOrder");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonSpacing","TitleButtonSpacing");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonSpacingLeft","TitleButtonSpacingLeft");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonSpacingRight","TitleButtonSpacingRight");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonBalloonStyle","TitleButtonBalloonStyle");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonXOffset","TitleButtonXOffset");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonXOffsetLeft","TitleButtonXOffsetLeft");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonXOffsetRight","TitleButtonXOffsetRight");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonYOffset","TitleButtonYOffset");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonYOffsetLeft","TitleButtonYOffsetLeft");
    echo "<br>";
    local_url("visualdoc.php?show=Look_options#options.TitleButtonYOffsetRight","TitleButtonYOffsetRight");
    echo "<br>";
    local_url("visualdoc.php?show=MyFrame_options#options.TitleCompositionMethod","TitleCompositionMethod");
    }
}
else echo "
<br>
Some features AfterStep has concerning windows in general:
<ul>
<li>placement policy</li>
<ul>
<li>smart or random (<b>look</b> file)</li>
<li>rearanging the desktop (<b>database</b> file)</li>
<li>autoclean the desktop - iconize and destroy windows automatically (<b>autoclean</b> module)</li>
</ul>
<li>window decor</li>
<ul>
<li>button look and order (<b>look</b> & <b>feel</b> file)</li>
<li>title and frame (<b>look</b> file -> <b>MyStyles</b>/<b>MyFrame</b>)
</ul>
<li>(multiple) mouse actions with title,buttons,frame (<b>feel</b> file)</li>
</ul>
</font>
"; ?>
</td>
<td>
<br>
<b>example:</b>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
(look.DEFAULT)<br>
...<br>
<br>
text to fill in<br>
<br>
...
</font>
</td>
</tr>
</table>
