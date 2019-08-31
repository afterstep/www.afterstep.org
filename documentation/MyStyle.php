&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Look MyStyle definition</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines combination of color, font, style, background to be used together</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","MyStyle_options","MyStyle",$subunset) ?>
 <hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","Look","Look",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","MyBackground","MyBackground",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","MyFrame","MyFrame",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
 
 <? local_doc_url("visualdoc.php","Suported hints","SupportedHints",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Titlebar layout","TbarLayout",$srcunset,$subunset) ?>
</UL>
<hr>


<A NAME="overview"><UL>
</A>
<A NAME="description"><LI><B>DESCRIPTION</B><br></A>
<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  's are the means to define how widgets (menu items, titlebars, wharf buttons, Pager desktops, etc. )
should be rendered. It defines widget's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  (solid &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 , textured image and/or semitransparent texture), 
shape - making widget non-rectangular, &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  font, &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  3D style, widget's border &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  colors.
</P><P class="dense">
All the GUI  elements are rendered using consistent approach in every &nbsp;<? local_doc_url("visualdoc.php","module","AudioEvents#options.module_config",$srcunset,$subunset) ?>
  and every part of the AfterStep. 
Interface is build from so called TBars. 
TBar is rectangular area that may be focused(hilited) or unfocused and pressed or unpressed.
</P>

<A NAME="harmonious_colors"><UL><B>TBAR STRUCTURE</B><br></A>
<P class="dense">
Each TBar has the following structure :
</P><P class="dense">
- the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of the TBar, which is defined by &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  and state of the bar - there are two MyStyles assigned to each TBar - one
for focused and one for unfocused state.
</P><P class="dense">
- tiles of the TBar. Tiles are smaller features that gets arranged inside the bar according to its size, alignment, position and order. 
Tiles could be static icons ( cannot be pressed );
blocks of buttons - each having two shapes - pressed and normal;
Text labels; Empty space tiles.
There could be upto 256 tiles, each residing on one of the cells in 8x8 grid. 
Several tiles could reside in single cell, in  which case they get superimposed on top of each other.
</P><P class="dense">               
- &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  of the TBar. When TBar is rendered all of its tiles are superimposed on top of its &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 , and resulting image will have a 3D &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  drawn on it, using colors from same &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  as used for &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 . 
&nbsp;<? local_doc_url("visualdoc.php","Bevel","Wharf#options.Bevel",$srcunset,$subunset) ?>
  could be switched off partially or entirely. 
Respective configuration options has been added where appropriate. 
When TBar is pressed - its &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  is inverted.
</P>
</UL>

<A NAME="harmonious_colors"><UL><B>TBAR RENDERING</B><br></A>
<P class="dense">               
When TBar is rendered all of its elements gets superimposed on top of each other using one of 13 blending methods supported by
libAfterImage, with default being simple alphablending. 
See &nbsp;<? local_doc_url("visualdoc.php","MyFrame","MyFrame_options#options.MyFrame",$srcunset,$subunset) ?>
  configuration for more details. This is refrred to as &quot;Composition Method&quot;.
</P>
</UL>
</LI>
</UL>


