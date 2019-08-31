<? local_doc_main_menu("1"); ?>
<?
if ($sub=="firststeps") {
    echo "<img src=documentation/images/Info.png align=middle><b>General Overview of the configuration file layout and what to do with it.</b>
	<hr>
	<b>First steps</b> &nbsp; ";
    local_url ("visualdoc.php?show=visualselect","Overview");
    echo "<hr>AfterStep stores it's configuration settings in human readable files separated
    into different files for better overview. Just open them in your favorite text editor to change things.
    for ease of use you can open them directly from the start menu under desktop, then config files.<br>\n
    <br>Configuration Files are stored in the directories:<ul>\n
	<li><b>~/.afterstep</b> - for user specific config files</li>\n
	<li><b>/usr/local/share/afterstep</b> - for system wide config files</li>\n
	</ul>";
    echo "If AfterStep is started the first time it will create a ~/.afterstep
	directory for you, though only the files needed to run with system wide
	defaults are created.<br><br>\n Yust copy over any file you want to modify
	over into your ~.afterstep dir, and open it with your favorite text editor.<br>\n
	For Look and Feel files copy & rename the file that is nearest to your wanted setting\n
	retaining directory structure.
	<ul><li>files :</li>\n
	<ul><li><b>animate</b> - settings for the Animate module (simple animations)</li>
	<li><b>autoexec</b> -  commands to execute for start and restart of AfterStep</li>
	<li><b>banner</b> - images to display</li>
	<li><b>base</b> - paths, pager scaling and viewport layout</li>
	<li><b>database</b> - central database of window properties</li>
	<li><b>pager</b> - display of virtual desktops</li>
	<li><b>wharf</b> - configuration of the \"Dock\"</li>
	<li><b>winlist</b> - configuration of the \"taskbar\"</li><br>
	</ul><li>subdirectories:</li>
	<ul><li><b>looks</b> - look files that are listed in start menu ( all files begining with \"look.\" ).</li>
	<li><b>feels</b> -  feel files that are listed in start menu ( all files begining with \"feel.\" ).</li>
	<li><b>desktop</b> - contains, fonts, icons, graphics, etc...</li>
	<li><b>themes</b> - Hold theme packages, which will be listed in start menu</li>
	<li><b>non-configurable</b> - holds the current settings, i.e. selected look, feel, colorscheme, background picture(s)
</ul></ul>";
}
else {
    echo "<img src=documentation/images/Info.png align=middle><b>Click on any element of the screenshot below to get more information about it.</b><hr>";
    local_url ("visualdoc.php?show=visualselect&sub=firststeps","First steps");
    echo " &nbsp; <b>Overview</b><hr><br>\n
	<map name=\"asinfo\">";
    local_doc_immap_url("0,15,362,44","visualdoc.php","wharf",$srcunset,$subunset);
    local_doc_immap_url("0,0,600,14","visualdoc.php","winlist",$srcunset,$subunset);
    local_doc_immap_url("561,15,600,179","visualdoc.php","pager",$srcunset,$subunset);
    local_doc_immap_url("567,302,596,478","visualdoc.php","monitorwharf",$srcunset,$subunset);
    local_doc_immap_url("0,375,265,479","visualdoc.php","windecor",$srcunset,$subunset);
    local_doc_immap_url("0,84,100,284","visualdoc.php","start_menu",$srcunset,$subunset);
    local_doc_immap_url("383,72,513,114","visualdoc.php","window_list",$srcunset,$subunset);
    local_doc_immap_url("0,0,599,479","visualdoc.php","bg",$srcunset,$subunset);
    echo "</map>\n<center>\n
	<img src=\"documentation/images/asdoc_screenshot.jpg\" usemap=\"#asinfo\">\n
	</center>";
}
