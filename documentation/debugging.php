<? local_doc_main_menu("11") ?>
<?
    if ($src=="") $src="wharf";
    $src2=$src;
    if ($src=="monitorwharf") $src2="wharf";
?>
<img src=documentation/images/<? echo $src2; ?>_debug.png align=middle> <b><? echo $src; ?> debugging</b>
<hr>

 &nbsp; <? local_doc_url("visualdoc.php","Introduction",$src,$srcunset,$subunset) ?>
 &nbsp; <?
    local_doc_url("visualdoc.php","Configuration",$src2."_config",$src,$subunset) ?>
 &nbsp; <b>Debugging</b>
<hr><br>
<li>compile AfterStep with debug support (configure --enable-gdb)</li>
<br>
<li>get a log file like so (depending on what is crashing):</li>
<ul>
<li>for AfterStep: <b>"afterstep -l afterstep.log"</b></li>
<li>for 
<? if ($src=="wharf") echo ("Wharf: <b>\"Wharf -l wharf.log");
if ($src=="winlist") echo ("WinList: <b>\"WinList -l winlist.log");
if ($src=="pager") echo ("Pager: <b>\"Pager -l pager.log");
if ($src=="monitorwharf") echo ("MonitorWharf: <b>\"MonitorWharf -l monitorwharf.log")
?>"</b></li>
</ul>

If you have no idea what to do with it send it (compressed with gzip or bzip2)
 either to the as-bugs mailing lists or directly to Sasha Vasko with a description of what happend.
 <br>