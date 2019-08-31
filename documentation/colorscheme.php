<? local_doc_main_menu("11") ?>
<img src="documentation/images/colorscheme.png" align=middle> <b>Color schemes</b>
<hr>
 &nbsp; <? local_doc_url("visualdoc.php","Window decor","windecor",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","look","look",$srcunset,$subunset) ?>
 &nbsp; <b>Color Scheme</b>
 &nbsp; <? local_doc_url("visualdoc.php","feel","feel",$srcunset,$subunset) ?>
 &nbsp; <? local_doc_url("visualdoc.php","Database","database",$srcunset,$subunset) ?>
<hr><br>

 <p>
 A very powerfull feature of&nbsp; AfterStep are colorschemes. That means
 that at each moment AfterStep defines 31 additional color name, exact
 color values of which will depend on choosen colorscheme. Now XML
 scripts may include HSV conversion commands. As the result it is
 possible to have images change its colors depending on the colorscheme
 choosen.
 </p>
 <p>
 For example :
 </p>
 <p class="codeBlock">
 <code>
 &lt;hsv
 hue_offset="$ascs.Active.hue"
 saturation_offset="$ascs.Active.saturation-30"
 value_offset="$ascs.Active.value-72"&gt;<br />
 &nbsp;&nbsp;
 &lt;img src="bars/title_tile_glass_red_a50"/&gt;<br />
 &lt;/hsv&gt;
 </code>
 </p>
 <p>
 Above image will produce focused titlebar background that changes
 colors according to colorscheme chosen.
 </p>
</li>
<br>
The combination of AfterStep's XML images and colorscheme-defined colors makes
it possible to decorate EVERY element of the GUI according to the selected colorscheme.<br>
<br>
See <? local_doc_url ('visualdoc.php','AfterImage XML','asimagexml',$srcunset,$subunset); ?> 
and <? local_doc_url ('visualdoc.php','Custom Color Scheme','ColorScheme',$srcunset,$subunset); ?> for details.
<br>