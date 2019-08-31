<? local_doc_main_menu("11") ?>
<img src=documentation/images/desktop.png align=middle> <b>Banner</b>
<hr>
 &nbsp; <? local_doc_url("visualdoc.php","Desktop Background","bg",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Image formats","imgformat",$srcunset,$subunset) ?>
 &nbsp; <b>Banner</b>
 &nbsp; <? local_doc_url("visualdoc.php","Sounds","sound",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Themes","themes",$srcunset,$subunset) ?>
<hr><br>
Banner pops up an image or an animation.<br>
<br>
Although  Banner  can  be  run  from  the  command line,<br>
it is normally spawned by afterstep in the <? local_url("visualdoc.php?show=AutoExec","autoexec") ?> file,<br>
in the following manner:<br>
<br>
Module &nbsp; "I" &nbsp; Banner<br>
Wait &nbsp; "I" &nbsp;  Banner<br>
<br>
Banner looks in ~/.afterstep/ or /usr/local/share/afterstep/ for a file called banner
<br>
The syntax of banner is xml like:<br>
<br>
See Also: <? local_url("visualdoc.php?show=asimagexml","AfterImage XML") ?>
<b
