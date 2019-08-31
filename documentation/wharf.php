<? local_doc_main_menu("11") ?>
<table>
<tr>
<td width=50%>
<img src=documentation/images/wharf.png align=middle><Font face="Tahoma, Arial, Verdana, Helvetica" size="-1"> <b>Wharf introduction</b></font>
</td>
<td>
<Font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
The <b>Wharf</b> module is a free-floating application loader that can execute
programs, "Swallow" running programs, and contain "Folders" of more applications,
among other things.
</font>

</td>
</tr>
</table>
<hr>
<b>Introduction</b>
 &nbsp; 
<? local_doc_url("visualdoc.php","Configuration","wharf_config","wharf",$subunset); ?>
 &nbsp; 
<? local_doc_url("visualdoc.php","Debugging","debugging","wharf",$subunset); ?>
<hr>
<br>
<map name="wharf">
<? local_doc_immap_url("0,0,64,64","visualdoc.php","wharf",$srcunset,"term") ?>
<? local_doc_immap_url("65,0,128,64","visualdoc.php","wharf",$srcunset,"mc") ?>
<? local_doc_immap_url("129,0,192,64","visualdoc.php","wharf",$srcunset,"filemgr") ?>
<? local_doc_immap_url("193,0,256,64","visualdoc.php","wharf",$srcunset,"moz") ?>
<? local_doc_immap_url("257,0,320,64","visualdoc.php","wharf",$srcunset,"gimp") ?>
<? local_doc_immap_url("321,0,384,64","visualdoc.php","wharf",$srcunset,"wordprocessor") ?>
<? local_doc_immap_url("385,0,448,64","visualdoc.php","wharf",$srcunset,"spreadsheet") ?>
<? local_doc_immap_url("449,0,512,64","visualdoc.php","wharf",$srcunset,"irc") ?>
<? local_doc_immap_url("513,0,576,64","visualdoc.php","wharf",$srcunset,"xmms") ?>
<? local_doc_immap_url("577,0,640,64","visualdoc.php","wharf",$srcunset,"asmix") ?>
</map>



<table width=100%>
<tr>
<td Colspan="2">
<img src="documentation/images/wharf.jpg" usemap="#wharf">
<br>
<Font face="Tahoma, Arial, Verdana, Helvetica" size="-1"><b>




Wharf button example:</b><br>
<?
if ($sub<>"")
{
echo ("<b>...</b><br>");
if ($sub=="term") echo("*Wharf term aterm Exec \"-\" aterm -tr -tint blue -fg yellow -bg black &<br>
*Wharf term rxvt  Exec \"-\" rxvt  -tr -fg yellow -bg black &<br>
*Wharf term eterm Exec \"-\" eterm -tr -tint blue -fg yellow -bg black &<br>
*Wharf term xterm Exec \"-\" xterm -fg yellow -bg blue &<br>\n");
if ($sub=="mc")   echo ("*Wharf MidnightCommander normal/MCInMonitorShadow Exec \"-\" aterm -g 130x35 -tr -tint blue -fg yellow -bg black -e mc &<br>
*Wharf MidnightCommander normal/MCInMonitorShadow Exec \"-\" rxvt  -g 130x35 -tr -fg yellow -bg black -e mc  &<br>
*Wharf MidnightCommander normal/MCInMonitorShadow Exec \"-\" eterm -g 130x35 -tr -tint blue -fg yellow -bg black -e mc &<br>
*Wharf MidnightCommander normal/MCInMonitorShadow Exec \"-\" xterm -g 130x35 -fg yellow -bg blue -e mc &<br>\n");
if ($sub=="filemgr") echo ("*Wharf GUIFileManager normal/Filecabinet2 Exec \"Krusader\" krusader &<br>
*Wharf GUIFileManager normal/Filecabinet2 Exec \"Gentoo File Manager\" gentoo &<br>
*Wharf GUIFileManager normal/Filecabinet2 Exec \"Nautilus\" nautilus --no-desktop &<br>\n");
if ($sub=="moz") echo ("*Wharf WebBrowser logos/mozilla Exec \"Mozilla\" mozilla &<br>
*Wharf WebBrowser logos/Opera   Exec \"Opera Web Browser\" opera &<br>\n");
if ($sub=="spreadsheet") echo ("*Wharf Spreadsheet normal/Table Exec \"KSpread\" kspread &\n<br>
*Wharf Spreadsheet normal/Table Exec \"GNUMERIC\" gnumeric &\n<br>
*Wharf Spreadsheet normal/Table Exec \"Siag\" siag &\n<br>");
if ($sub=="gimp") echo ("*Wharf ImageEditor logos/gimp Exec \"GIMP\" gimp &<br>
*Wharf ImageEditor normal/XV Exec \"XV\" xv &<br>\n");
if ($sub=="wordprocessor") echo ("*Wharf WordProcessor normal/Document Exec \"AbiWord\" abiword &<br>
*Wharf WordProcessor normal/Document Exec \"KWord\" kword &<br>
*Wharf WordProcessor normal/Document Exec \"Pathetic Writer\" pw &<br>
*Wharf WordProcessor normal/Document Exec \"KWrite\" kwrite &<br>\n");
if ($sub=="irc") echo ("
*Wharf IRC normal/IRCTransparent ExecInTerm \"BitchX\" -title \"BitchX IRC\" +sb -tr -sh 50 -fg white -bg black -e BitchX irc.freenode.net &<br>\n
*Wharf IRC  normal/IRCTransparent Exec \"XCHAT\" xchat &<br>\n");
if ($sub=="xmms") echo ("*Wharf AudioPlayer - Swallow \"wmxmms\" wmxmms -single &<br>
*Wharf AudioPlayer logos/Xmms Exec \"X Multi Media System\" xmms &<br>
*Wharf AudioPlayer - Swallow \"ascd\" ascd &<br>\n");
if ($sub=="asmix") echo ("*Wharf mixer - Swallow \"asmixer\" asmixer -g -1-1 &<br>
*Wharf mixer - Swallow \"wmmixer\" wmmixer &<br>
*Wharf mixer - Swallow \"asMix\" asmix -shape &<br>\n");

echo ("...");
}
else echo ("<br><img src=\"documentation/images/Info.png\" align=middle> Just click on any button for its configuration entry");

?>
</font>
</td>
</tr>

<tr>
<td width=300 valign=top>
<Font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<br>
<b>General Wharf configuration options:</b><br>
<br>
*<? local_url("visualdoc.php?show=Wharf#options.Animate","WharfAnimate") ?><br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateMain","WharfAnimateMain") ?><br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateDelay","WharfAnimateDelay") ?>      2<br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateSteps","WharfAnimateSteps") ?>      5<br>
*<? local_url("visualdoc.php?show=Wharf#options.AnimateStepsMain","WharfAnimateStepsMain") ?>  5<br>
<br>
*<? local_url("visualdoc.php?show=Wharf#options.Balloons","WharfBalloons") ?><br>


*<? local_url("visualdoc.php?show=Wharf#options.BalloonXOffset","WharfBalloonXOffset") ?>            10<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonYOffset","WharfBalloonYOffset") ?>            -15<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonDelay","WharfBalloonDelay") ?>              120<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonCloseDelay","WharfBalloonCloseDelay") ?>         1200<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonStyle","WharfBalloonStyle") ?>              "*WharfBalloon"<br>
*<? local_url("visualdoc.php?show=Wharf#options.BalloonBorderHilite","WharfBalloonBorderHilite") ?>       Right,Bottom<br>
<br>
*<? local_url("visualdoc.php?show=Wharf#options.FullPush","WharfFullPush") ?><br>
<br>
*<? local_url("visualdoc.php?show=Wharf#options.Rows","WharfRows") ?> 1<br>
*<? local_url("visualdoc.php?show=Wharf#options.Geometry","WharfGeometry") ?> +5+30<br>
*<? local_url("visualdoc.php?show=Wharf#options.Bevel","WharfBevel") ?>             Bottom,Right,NoOutline,Extra<br>


</font>


</td>
<td width=300 valign=top>
<Font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<br>
The <b>Wharf Module</b> can have virtually any shape and is confirugable through
the following options:<br>
<br>
<b>Wharf entries look like this:</b><br>
<br>
*Wharf Name - Size x y<br>
*Wharf Name - Transient<br>
*Wharf Name Icon Command &<br>
<br>
where the 2 first lines are optional, depending weither you want to change the size of your button, or don't want it
to be pushable and display balloons respectively. If you want a button to be shown, despite having no function use Nop "-" as Command.
</font>
</td>
</tr>
</table>
