<? include "common_doc.php";

pagestart("Looks and theming");
?>
<?
active_section_start("look_title_a.png","");

?>
<?
 if ( isset($_GET['show']) ) $show=$_GET['show'];
 if ($show=="")
    {
    echo "<b>Looks</b> &nbsp; ";
    local_doc_url("look.php","Themes","themes",$srcunset,$subunset);
    echo "  &nbsp; &nbsp; &nbsp; ";
    local_doc_url("look.php","User screenshots","contrib",$srcunset,$subunset);
echo "\n
<hr><ul>\n
No website for any window manager would be complete without some obligatory screenshots.<br />\n
This should give those not using AfterStep, a good  perspective of what can be done.<br />\n
<br />
AfterStep is, as you can see, very configurable and can be adjusted to suit\n
 your taste and needs.<br />\n
</ul><hr>\n
<br />\n";
#<table align=center>\n
#<tr>\n";
theme_descriptor("AfterStep 2.0 default","Karoe","Stormy_Skies.jpg");
theme_descriptor("Glass","Sasha Vasko","screenshot.glass.jpg");
theme_descriptor("look.Transparent","MG_Tak","Transparent.Stormy_Skies.jpg");
#echo"\n</tr><tr>\n";
theme_descriptor("AfterStep as Win32 desktop (using CYGWIN)","Sasha Vasko","AS_Cygwin.jpg");
theme_descriptor("look.Tiny with Clouds of Doubt background","Sasha Vasko","TinyCloudsOfDoubt.png");
theme_descriptor("look.Tiny with WinTabs module","Sasha Vasko","Look.Tiny_WinTabs.png");
#echo"\n
#</tr>\n
#</tr>\n
#</table>\n";
    }
    else if ($show=="themes")
    {
    local_doc_url("look.php","Looks",$showunset,$srcunset,$subunset);
    echo " &nbsp; <b>Themes</b>\n &nbsp; &nbsp; &nbsp; ";
    local_doc_url("look.php","User screenshots","contrib",$srcunset,$subunset);
    echo "<hr>
    <ul>\n
    There was extensive work done to add proper theming support to AfterStep 2.x.\n
    The work is not complete yet, as there is no GUI tool to create themes. Such\n
    tool will be designed as work on other features are finalized.</ul>\n
    <hr>
    <p>\n
    Meanwhile old 1.8/1.6 themes should still be useable under AfterStep 2.0 although as they have an inferior set of configuration
    options - they are not recommended for use.

    <br /><b>!!! This section will be updated as soon as the theme engine is finalized. !!!</b>";
    }
    else if ($show=="contrib")
    {
    local_doc_url("look.php","Looks",$showunset,$srcunset,$subunset);
    echo " &nbsp; ";
    local_doc_url("look.php","Themes","themes",$srcunset,$subunset);

    echo " &nbsp; &nbsp; &nbsp; <b>User screenshots</b><hr>\n
    <ul>What users do with afterstep...<br>
    If you have a custom setup you wish to show on this site, send it to the ";
    local_url("mail.php#users","as-users");
    echo " list.</ul><hr><br />";

#echo "<table align=center>\n<tr>\n";
theme_descriptor("first steps","PeskyGee","peskygee.jpg");
theme_descriptor("Wide Angle Lens","Vaevictus","vaevictus_ss_3200.png");
#echo "</tr><tr>";
#theme_descriptor("Doctorat","Mastertet","mastertet.png");
theme_descriptor("Abi look","DrCurl","ASDrCurl.png");
theme_descriptor("simple","MG_Tak","MG_Tak-ss-jan-2005.jpg");
theme_descriptor("Brush<br /> (1.8 version by Tildouf)","born2late","Brush.jpg");
#echo "</tr><tr>";
theme_descriptor("monitor<br />(1.8 version by Tildouf)","born2late","monitor.jpg");
theme_descriptor("unity","zipht","unity_theme0214.png");
theme_descriptor("afStep","born2late","afStep.jpg");
#echo "</tr><tr>";
theme_descriptor("Carnival<br />(2.0 version by Hobo)","Hobo","CarnivalAS2.jpg");
theme_descriptor("Afterstep mania)","devilranger","devilranger_afterstepmania.jpg");

#echo "</tr>\n</table>\n";

    }
    else echo "go away";
?>


<? active_section_end() ?>

<?
pageend();

?>
