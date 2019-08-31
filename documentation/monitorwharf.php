<? local_doc_main_menu("11") ?>
<table>
<tr>
<td>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<img src=documentation/images/wharf.png align=middle> <b>MonitorWharf introduction</b>
</font>
</td>
<td width=50%>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
Like every other <b>AfterStep module</b>, the <b>Wharf</b> can be run multiple
times, simply by making a symbolic link to the corresponding executable. 
</font>
</td>
</tr>
</table>
<hr>
 &nbsp; <b>Introduction</b>
 &nbsp; <? local_doc_url("visualdoc.php","Configuration","wharf_config","monitorwharf",$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Debugging","debugging","monitorwharf",$subunset) ?>
<hr>


<map name="monitorwharf">
<? local_doc_immap_url("0,0,64,64","visualdoc.php","monitorwharf",$srcunset,"asdoc") ?>
<? local_doc_immap_url("0,65,64,128","visualdoc.php","monitorwharf",$srcunset,"xeyes") ?>
<? local_doc_immap_url("0,129,64,192","visualdoc.php","monitorwharf",$srcunset,"cycle") ?>
<? local_doc_immap_url("0,193,64,256","visualdoc.php","monitorwharf",$srcunset,"stop") ?>
<? local_doc_immap_url("0,257,64,320","visualdoc.php","monitorwharf",$srcunset,"ps") ?>
<? local_doc_immap_url("0,321,64,384","visualdoc.php","monitorwharf",$srcunset,"top") ?>
<? local_doc_immap_url("0,385,64,448","visualdoc.php","monitorwharf",$srcunset,"mail") ?>
<? local_doc_immap_url("0,449,64,512","visualdoc.php","monitorwharf",$srcunset,"time") ?>
</map>
<table width=100%>
<tr>
<td>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
The <b>Wharf</b> module is a free-floating application loader that can execute programs,<br>
"Swallow" running programs, and contain "Folders" of more applications,<br>
among other things.<br>
<br>
</font>
</td>
<td rowspan=2 valign=top>
<img src="documentation/images/monitorwharf.jpg" usemap="#monitorwharf">
</td>
</tr>
<tr>
<td>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<b>example:</b><br>
ln -s /usr/bin/Wharf MonitorWharf<br>


*<? local_url("visualdoc.php?show=Wharf#options.Animate","MonitorWharfAnimate") ?><br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateMain","MonitorWharfAnimateMain") ?><br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateDelay","MonitorWharfAnimateDelay") ?>      2<br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateSteps","MonitorWharfAnimateSteps") ?>      5<br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateStepsMain","MonitorWharfAnimateStepsMain") ?>  5<br><br>
*<? local_url("visualdoc.php?show=Wharf#options.Balloons","MonitorWharfBalloons") ?><br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonXOffset","MonitorWharfBalloonXOffset") ?>            10<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonYOffset","MonitorWharfBalloonYOffset") ?>            -15<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonDelay","MonitorWharfBalloonDelay") ?>              120<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonCloseDelay","MonitorWharfBalloonCloseDelay") ?>         1200<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonStyle","MonitorWharfBalloonStyle") ?>              "*WharfBalloon"<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonBorderHilite","MonitorWharfBalloonBorderHilite") ?>       Right,Bottom<br><br>
*<? local_url("visualdoc.php?show=Wharf#options.FullPush","MonitorWharfFullPush") ?><br><br>

*<? local_url("visualdoc.php?show=Wharf#options.Columns","MonitorWharfColumns") ?> 1<br>
*<? local_url("visualdoc.php?show=Wharf#options.Geometry","MonitorWharfGeometry") ?> -5-5<br>
...<br>
<?
if ($sub<>"")
{
if ($sub=="asdoc") echo ("*MonitorWharf afterstepdoc large/AfterStep3 Exec \"-\" afterstepdoc &<br>");
if ($sub=="xeyes") echo ("*MonitorWharf xeyes - Swallow \"xeyes\" xeyes -geometry -100-100 &<br>");
if ($sub=="cycle") echo ("*MonitorWharf Recycler normal/Recycle Restart \"\" afterstep<br>");
if ($sub=="stop") echo ("*MonitorWharf Quit normal/RedLight Quit \"\" afterstep<br>");
if ($sub=="ps") echo ("*MonitorWharf loadmonitor - Swallow \"asload\" asload -shape &<br>
*MonitorWharf loadmonitor - Swallow \"wmcpuload\" wmcpuload -bl -w &<br>");
if ($sub=="top") echo ("*MonitorWharf wmtop  - Swallow \"wmtop\" wmtop &<br>");
if ($sub=="mail") echo ("*MonitorWharf asmail - Swallow \"asmail\" asmail -geometry +0+0 &<br>");
if ($sub=="time") echo ("*MonitorWharf clock - Swallow \"asclock\" asclock -shape -12 -position +1+1 &<br>
*MonitorWharf clock - Swallow \"xclock\" xclock -bg gray10 -fg cyan -digital -brief &<br>");
echo ("...");
}

?>
</font>
</td>
</tr>
</table>
