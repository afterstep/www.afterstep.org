<? local_doc_main_menu("11") ?>
<table>
<tr>
<td>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<img src=documentation/images/winlist.png align=middle> <b>WinList introduction</b>
</font>
</td>
<td width=50%>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
The <b>WinList</b> module provides a window list made up of buttons,
 each corresponding to a window that AfterStep is managing.<br>
</font>
</td>
</tr>
</table>
<hr>
 &nbsp; <b>Introduction</b>
 &nbsp; <? local_doc_url("visualdoc.php","Configuration","winlist_config",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Debugging","debugging","winlist",$subunset) ?>
<hr><br>
<center>
<map name="winlist_info">
<?local_doc_immap_url("0,0,374,13","visualdoc.php","winlist",$srcunset,"unfocused") ?>
<?local_doc_immap_url("375,0,512,13","visualdoc.php","winlist",$srcunset,"sticky") ?>
<?local_doc_immap_url("513,0,665,13","visualdoc.php","winlist",$srcunset,"focused") ?>
</map>
<img src="documentation/images/winlist.jpg" usemap="#winlist_info"><br>
</center>
<br>
The winlist is the task-bar in AfterStep, there every window (open or iconified) will be shown. Iconified ones in brackets.
Clicking on the buttons with any of the three mouse buttons will either do a default action or can be user configured.
<br><br>
<?
if ($sub=="unfocused")
    {
    echo "The appearence of WinList representing windows in unfocused state:<br>";
    local_url("visualdoc.php?show=WinList#options.UnfocusedStyle","WinListUnFocusedStyle");
    echo " YourStyle<br>";
    local_url("visualdoc.php?show=WinList#options.UCompositionMethod","WinListUCompositionMethod");
    echo "<br>";
    local_url("visualdoc.php?show=WinList#options.UBevel","WinListUBevel");
    }
if ($sub=="sticky")
    {
    echo "The appearence of WinList representing windows in sticky state:<br>";
    local_url("visualdoc.php?show=ASDatabaseEntry#options.StickyStyle","WinListStickyStyle");
    echo " YourStyle<br>";
    local_url("visualdoc.php?show=WinList#options.SCompositionMethod","WinListSCompositionMethod");
    echo "<br>";
    local_url("visualdoc.php?show=WinList#options.SBevel","WinListSBevel");
    }
if ($sub=="focused")
    {
    echo "The appearence of WinList representing windows in focused state:<br>";
    local_url("visualdoc.php?show=WinList#options.FocusedStyle","WinListFocusedStyle");
    echo " YourStyle<br>";
    local_url("visualdoc.php?show=WinList#options.FCompositionMethod","WinListFCompositionMethod");
    echo "<br>";
    local_url("visualdoc.php?show=WinList#options.FBevel","WinListFBevel");
    }
?>
<br>