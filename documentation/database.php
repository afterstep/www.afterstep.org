<? local_doc_main_menu("11") ?>

<img src="documentation/images/biblio.png" align=middle> <b>Database</b>

<hr>
 &nbsp; <? local_doc_url("visualdoc.php","Window decor","windecor",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","look","look",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Color Scheme","colorscheme",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","feel","feel",$srcunset,$subunset) ?>
 &nbsp; <b>Database</b>
<hr><br>
The Database is the central place for defining window behaviour.<br>
If <b>~/.afterstep/database</b> is not found, system wide config will be used - usually found in <b>/usr/share/afterstep/database</b><br>
<br>
Use the <b>Ident module</b> to find out how to identify windows by name, icon name, resource name or resource class.<br>
<br>
What you can define:<br>
<ul>
<li><b>window decor:</b> 
<? local_doc_url ('visualdoc.php','NoFrame','ASDatabaseEntry#options.NoFrame',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','Frame','ASDatabaseEntry#options.Frame',$srcunset,$subunset); ?>&nbsp;"frame_name" ,
<? local_doc_url ('visualdoc.php','NoTitle','ASDatabaseEntry#options.NoTitle',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','Title','ASDatabaseEntry#options.Title',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','NoHandles','ASDatabaseEntry#options.NoHandles',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','Handles','ASDatabaseEntry#options.Handles',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','Button','ASDatabaseEntry#options.Button',$srcunset,$subunset); ?>&nbsp;number ,
<? local_doc_url ('visualdoc.php','NoButton','ASDatabaseEntry#options.NoButton',$srcunset,$subunset); ?>&nbsp;number ,
<? local_doc_url ('visualdoc.php','HorizontalTitle','ASDatabaseEntry#options.HorizontalTitle',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','VerticalTitle','ASDatabaseEntry#options.VerticalTitle',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','BorderWidth','ASDatabaseEntry#options.BorderWidth',$srcunset,$subunset); ?>&nbsp;pixel ,
<? local_doc_url ('visualdoc.php','HandleWidth','ASDatabaseEntry#options.HandleWidth',$srcunset,$subunset); ?>&nbsp;pixel
</li>
<li><b>icons :</b> 
<? local_doc_url ('visualdoc.php','NoIcon','ASDatabaseEntry#options.NoIcon',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','Icon','ASDatabaseEntry#options.Icon',$srcunset,$subunset); ?>&nbsp;"icon_name" ,
<? local_doc_url ('visualdoc.php','IconTitle','ASDatabaseEntry#options.IconTitle',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','NoIconTitle','ASDatabaseEntry#options.NoIconTitle',$srcunset,$subunset); ?> ,
<? local_doc_url ('visualdoc.php','StartIconic','ASDatabaseEntry#options.StartIconic',$srcunset,$subunset); ?>
</li>
<li><b>properties :</b> 
<? local_doc_url ('visualdoc.php','FocusStyle','ASDatabaseEntry#options.FocusStyle',$srcunset,$subunset); ?>&nbsp;"mystyle_name" , 
<? local_doc_url ('visualdoc.php','UnfocusStyle','ASDatabaseEntry#options.UnfocusStyle',$srcunset,$subunset); ?>&nbsp;"mystyle_name" , 
<? local_doc_url ('visualdoc.php','StickyStyle','ASDatabaseEntry#options.StickyStyle',$srcunset,$subunset); ?>&nbsp;"mystyle_name" , 
<? local_doc_url ('visualdoc.php','Focus','ASDatabaseEntry#options.Focus',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','NoFocus','ASDatabaseEntry#options.NoFocus',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','WindowListSkip','ASDatabaseEntry#options.WindowListSkip',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','WindowListHit','ASDatabaseEntry#options.WindowListHit',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','CirculateSkip','ASDatabaseEntry#options.CirculateSkip',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','CirculateHit','ASDatabaseEntry#options.CirculateHit',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','StartNormal','ASDatabaseEntry#options.StartNormal',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','Layer','ASDatabaseEntry#options.Layer',$srcunset,$subunset); ?>&nbsp;layer_number, 
<? local_doc_url ('visualdoc.php','StaysOnTop','ASDatabaseEntry#options.StaysOnTop',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','StaysPut','ASDatabaseEntry#options.StaysPut',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','StaysOnBack','ASDatabaseEntry#options.StaysOnBack',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','AvoidCover','ASDatabaseEntry#options.AvoidCover',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','AllowCover','ASDatabaseEntry#options.AllowCover',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','Sticky','ASDatabaseEntry#options.Sticky',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','Slippery','ASDatabaseEntry#options.Slippery',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','ViewportX','ASDatabaseEntry#options.ViewportX',$srcunset,$subunset); ?>&nbsp;number , 
<? local_doc_url ('visualdoc.php','ViewportY','ASDatabaseEntry#options.ViewportY',$srcunset,$subunset); ?>&nbsp;number , 
<? local_doc_url ('visualdoc.php','StartsOnDesk','ASDatabaseEntry#options.StartsOnDesk',$srcunset,$subunset); ?>&nbsp;desk_number , 
<? local_doc_url ('visualdoc.php','StartsAnyWhere','ASDatabaseEntry#options.StartsAnyWhere',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','WindowBox','ASDatabaseEntry#options.WindowBox',$srcunset,$subunset); ?> , 
<? local_doc_url ('visualdoc.php','DefaultGeometry','ASDatabaseEntry#options.DefaultGeometry',$srcunset,$subunset); ?>&nbsp;WIDTHxHEIGHT+X+Y , 
<? local_doc_url ('visualdoc.php','OverrideGravity','ASDatabaseEntry#options.OverrideGravity',$srcunset,$subunset); ?>
</li>
</ul>
See <? local_doc_url ('visualdoc.php','Database','ASDatabase',$srcunset,$subunset); ?> manual pages for details.
