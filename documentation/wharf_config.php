<? local_doc_main_menu("11"); ?>
<img src=documentation/images/wharf_config.png align=middle> <b>Wharf configuration</b>
<hr>

 &nbsp; <? if ($src=="") $src="wharf";
    local_doc_url("visualdoc.php","Introduction",$src,$srcunset,$subunset) ?>
 &nbsp; <b>Configuration</b>
 &nbsp; <? local_doc_url("visualdoc.php","Debugging","debugging",$src,$srcunset,$subunset) ?>


<hr><br>
<li>tip:</li>
<ul>
It is good to know that Wharf is not bound to 64x64 Size, multi-column/row
layouts are also possible. Using shaped pixmaps (asxml, png, xpm and xcf)
non-rectangular buttons can be realized (MyStyles 125,126 and 128).
If you don't want each Wharf backround to be the same, just use tiles/empty
for WharfTile and add the pixmap you want to each wharf Button in the wharf file
itself (use wharfbackground,icon instead of just the icon for button definition).
<br><br>
If you want to use multiple instances of Wharf just make a symbolic link to
the executable with your desired name ( for ex.: MonitorWharf ) and add config
entries begining with it's name to your wharf file. Please note that all names
are allowed, except names begining with Wharf.
</ul>

<li>config files are:</li>
<ul>
<li>user defined: &nbsp; ~/.afterstep/wharf</li>
<li>system wide: &nbsp; /usr/(local/)share/afterstep/wharf</li>
<li> current look file / MyStyles section relevant for Wharf<br>
     ( looks can be selected from "Start Menu -> Desktop -> Look -> " )<br>
     See <? local_doc_url("visualdoc.php","Wharf MyStyles","Wharf_mystyles",$srcunset,$subunset) ?> for details.</li>
</ul>
