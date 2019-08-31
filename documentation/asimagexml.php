&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterImage XML</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">XML schema to be used for scripting image manipulation by AfterStep and ascompose</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/asimagexml"><UL><B>libAfterImage/asimagexml</B><br></A><LI><B>NAME</B><br>
<A NAME="ascompose"></A><B>ascompose</B><P class="dense">is a tool to compose image(s) and display/&nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  it based on
supplied XML input file.

</P></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  reads supplied XML data, and manipulates image accordingly.
It could transform images from files of any supported file format,
draw gradients, render antialiased texturized &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , perform
&nbsp;<? local_doc_url("visualdoc.php","superimposition","ColorScheme#image_hues.superimposition",$srcunset,$subunset) ?>
  of arbitrary number of images, and &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  images into
files of any of supported output file formats.

At any point, the result of any operation could be assigned a name,
and later on referenced under this name.

At any point during the script processing, result of any operation
could be saved into a file of any supported file types.

Internal image format is 32bit &nbsp;<? local_doc_url("visualdoc.php","ARGB","ColorScheme#color_values.argb",$srcunset,$subunset) ?>
  with 8bit per channel.

Last image referenced, will be displayed in X &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , unless -n option
is specified. If -r option is specified, then this image will be
displayed in root &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  of X display, effectively setting a &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 
for a desktop. If -o option is specified, this image will also be
saved into the file or requested type.

</PRE></LI><LI><B>TAGS</B><br><PRE>
Here is the list and description of possible XML tags to use in the
script :
    &nbsp;<? local_doc_url("visualdoc.php","img","asimagexml#img",$srcunset,$subunset) ?>
        - load image from the file.
    &nbsp;<? local_doc_url("visualdoc.php","recall","asimagexml#recall",$srcunset,$subunset) ?>
     - &nbsp;<? local_doc_url("visualdoc.php","recall","asimagexml#recall",$srcunset,$subunset) ?>
  previously loaded/generated image by its name.
    &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
       - render &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  string into &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  image.
    &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
       - &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  an image into the file.
    &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
      - draw &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  frame around the image.
    &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
   - render multipoint &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
    &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
     - create &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  copy of an image.
    &nbsp;<? local_doc_url("visualdoc.php","blur","asimagexml#blur",$srcunset,$subunset) ?>
       - perform gaussian &nbsp;<? local_doc_url("visualdoc.php","blur","asimagexml#blur",$srcunset,$subunset) ?>
  on an image.
    &nbsp;<? local_doc_url("visualdoc.php","rotate","asimagexml#rotate",$srcunset,$subunset) ?>
     - &nbsp;<? local_doc_url("visualdoc.php","rotate","asimagexml#rotate",$srcunset,$subunset) ?>
 /flip image in 90 degree increments.
    &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
      - &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  an image to arbitrary size.
    &nbsp;<? local_doc_url("visualdoc.php","slice","asimagexml#slice",$srcunset,$subunset) ?>
      - enlarge image to arbitrary size leaving corners unchanged.
    &nbsp;<? local_doc_url("visualdoc.php","crop","asimagexml#crop",$srcunset,$subunset) ?>
       - &nbsp;<? local_doc_url("visualdoc.php","crop","asimagexml#crop",$srcunset,$subunset) ?>
  an image to arbitrary size.
    &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
       - &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  an image to arbitrary size.
    &nbsp;<? local_doc_url("visualdoc.php","hsv","asimagexml#hsv",$srcunset,$subunset) ?>
        - adjust Hue, Saturation and Value of an image.
    &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
        - &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  image with &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  from either or all sides.
    &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
      - generate &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  image of requested size, filled with &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
 
             &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
    &nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
  - superimpose arbitrary number of images using one of 15
             available methods.
 &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
         - conditional processing based on value of the variables
 &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
        - sets value of the variable
 &nbsp;<? local_doc_url("visualdoc.php","printf","asimagexml#printf",$srcunset,$subunset) ?>
     - formated printing of the value of the variable

Each tag generates &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  image as the result of the transformation -
existing images are never modified and could be reused as many times
as needed. See below for description of each tag.

Whenever numerical values are involved, the basic math ops (add,
subtract, multiply, divide), unary minus, and parentheses are
supported.

Operator precedence is NOT supported.  Percentages are allowed, and
apply to either width or height of the appropriate image (usually
the refid image).

Also, variables of the form $image.width and $image.height are
supported.  $image.width is the width of the image with refid &quot;image&quot;,
and $image.height is the height of the same image.  The special
$xroot.width and $xroot.height values are defined by the the X root
&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  there is one.  This allows images to be scaled to the
desktop size: &lt;&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  width=&quot;$xroot.width&quot; height=&quot;$xroot.height&quot;&gt;.

Each tag is only allowed to return ONE image.


</PRE></LI>
<A NAME="libAfterImage/asimagexml/text"><UL><B>libAfterImage/asimagexml/text</B><br></A><LI><B>NAME</B><br>
<A NAME="text"></A><B>text</B><P class="dense">- render &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  string into &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  image, using specific font, size
       and texture.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; font=&quot;font&quot; point=&quot;size&quot; fgcolor=&quot;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot;
      bgcolor=&quot;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot; fgimage=&quot;image_id&quot; bgimage=&quot;image_id&quot;
      spacing=&quot;points&quot;&gt;My Text Here&lt;/&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 &gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional.  Image will be given this name for future reference.
</DD><DT class="dense"><B>font</B></DT><DD class="dense">Optional.  Default is &quot;fixed&quot;.  &nbsp;<? local_doc_url("visualdoc.php","Font","MyStyle_options#options.Font",$srcunset,$subunset) ?>
  to use for &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>point</B></DT><DD class="dense">Optional.  Default is 12.  &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  of &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  in points.
</DD><DT class="dense"><B>fgcolor</B></DT><DD class="dense">Optional.  No default.  The &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  will be drawn in this &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>bgcolor</B></DT><DD class="dense">Optional.  No default.  The area behind the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  will be drawn
         in this &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>fgimage</B></DT><DD class="dense">Optional.  No default.  The &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  will be textured by this image.
</DD><DT class="dense"><B>bgimage</B></DT><DD class="dense">Optional.  No default.  The area behind the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  will be filled
         with this image.
</DD><DT class="dense"><B>spacing</B></DT><DD class="dense">Optional.  Default 0.  &nbsp;<? local_doc_url("visualdoc.php","Extra","Bevel#options.Extra",$srcunset,$subunset) ?>
  pixels to place between each glyph.
</DD><DT class="dense"><B>type</B></DT><DD class="dense">Optional.  Default 0.  Valid values are from 0 to 7 and each 
            represeend different 3d type.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 &gt; without bgcolor, fgcolor, fgimage, or bgimage will NOT
produce visible output by itself.  See EXAMPLES below.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/composite"><UL><B>libAfterImage/asimagexml/composite</B><br></A><LI><B>NAME</B><br>
<A NAME="composite"></A><B>composite</B><P class="dense">- superimpose arbitrary number of images on top of each
other.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; op=&quot;op_desc&quot;
           keep-transparency=&quot;0|1&quot; merge=&quot;0|1&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>op</B></DT><DD class="dense">Optional. Default is &quot;alphablend&quot;. The compositing operation.
         Valid values are the standard AS blending ops: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
 , alphablend,
         allanon, colorize, darken, diff, dissipate, &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 , lighten,
         overlay, saturate, screen, sub, tint, value.
</DD><DT class="dense"><B>merge</B></DT><DD class="dense">Optional. Default is &quot;expand&quot;. Valid values are &quot;clip&quot; and
         &quot;expand&quot;. Determines whether final image will be expanded to
         the maximum size of the layers, or clipped to the bottom
         layer.
</DD><DT class="dense"><B>keep-transparency</B></DT><DD class="dense">         Optional. Default is &quot;0&quot;. Valid values are &quot;0&quot; and &quot;1&quot;. If
         &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to &quot;1&quot;, the transparency of the bottom layer will be
         kept for the final image.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>All images surrounded by this tag will be composited with the given op.

</PRE></LI><LI><B>ATTRIBUTES</B><br><PRE> All tags surrounded by this tag may have some of the common attributes
 in addition to their normal ones.  Under no circumstances is there a 
 conflict with the normal child attributes:

</PRE><DL class="dense"><DT class="dense"><B>crefid</B></DT><DD class="dense">Optional. An image ID defined with the &quot;id&quot; parameter for
         any previously created image. If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;x&quot;
         and &quot;y&quot; will be derived from the width and height of the
         crefid image.
</DD><DT class="dense"><B>x</B></DT><DD class="dense">Optional. Default is 0. Pixel coordinate of left edge.
</DD><DT class="dense"><B>y</B></DT><DD class="dense">Optional. Default is 0. Pixel coordinate of top edge.
</DD><DT class="dense"><B>align</B></DT><DD class="dense">Optional. Alternative to x - allowed values are right, center
         and left.
</DD><DT class="dense"><B>valign</B></DT><DD class="dense">Optional. Alternative to y - allowed values are top, middle
         and bottom.
</DD><DT class="dense"><B>clip_x</B></DT><DD class="dense">Optional. Default is 0. X Offset on infinite surface tiled
         with this image, from which to cut portion of an image to be
         used in composition.
</DD><DT class="dense"><B>clip_y</B></DT><DD class="dense">Optional. Default is 0. Y Offset on infinite surface tiled
         with this image, from which to cut portion of an image to be
         used in composition.
</DD><DT class="dense"><B>clip_width</B></DT><DD class="dense">         Optional. Default is image width. &nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
  image to this width
         prior to &nbsp;<? local_doc_url("visualdoc.php","superimposition","ColorScheme#image_hues.superimposition",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>clip_height</B></DT><DD class="dense">         Optional. Default is image height. &nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
  image to this height
         prior to &nbsp;<? local_doc_url("visualdoc.php","superimposition","ColorScheme#image_hues.superimposition",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>tile</B></DT><DD class="dense">Optional. Default is 0. If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  will cause image to be tiled
         across entire composition, unless overridden by clip_width or
         clip_height.
</DD><DT class="dense"><B>tint</B></DT><DD class="dense">Optional. Additionally tint an image to specified &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
         Tinting can both lighten and darken an image. Tinting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
         0 or #7f7f7f7f yields no &nbsp;<? local_doc_url("visualdoc.php","tinting","ColorScheme#image_hues.tinting",$srcunset,$subunset) ?>
 . Tinting can be performed
         on any channel, including &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
  channel.
</DD></DL></LI><LI><B>SEE ALSO</B><br><PRE>libAfterImage
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/img"><UL><B>libAfterImage/asimagexml/img</B><br></A><LI><B>NAME</B><br>
<A NAME="img"></A><B>img</B><P class="dense">- load image from the file.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","img","asimagexml#img",$srcunset,$subunset) ?>
  id=&quot;new_img_id&quot; src=filename/&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional.  Image will be given this name for future reference.
</DD><DT class="dense"><B>src</B></DT><DD class="dense">Required.  The filename (NOT URL) of the image file to load.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>The special image src &quot;xroot:&quot; will import the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image
of the root X &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  any.  No attempt will be made to offset this
image to fit the location of the resulting &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  one is displayed.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/recall"><UL><B>libAfterImage/asimagexml/recall</B><br></A><LI><B>NAME</B><br>
<A NAME="recall"></A><B>recall</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","recall","asimagexml#recall",$srcunset,$subunset) ?>
  previously generated and named image by its id.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","recall","asimagexml#recall",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; srcid=&quot;image_id&quot; default_src=&quot;filename&quot;/&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional.  Image will be given this name for future reference.
</DD><DT class="dense"><B>srcid</B></DT><DD class="dense">Required.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimagexml/release"><UL><B>libAfterImage/asimagexml/release</B><br></A><LI><B>NAME</B><br>
<A NAME="release"></A><B>release</B><P class="dense">- release(destroy &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  possible) previously generated and named image by its id.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","release","asimagexml#release",$srcunset,$subunset) ?>
  srcid=&quot;image_id&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>srcid</B></DT><DD class="dense">Required.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimagexml/color"><UL><B>libAfterImage/asimagexml/color</B><br></A><LI><B>NAME</B><br>
<A NAME="color"></A><B>color</B><P class="dense">- defines symbolic name for a &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of variables.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  name=&quot;sym_name&quot; domain=&quot;var_domain&quot; &nbsp;<? local_doc_url("visualdoc.php","argb","ColorScheme#color_values.argb_func",$srcunset,$subunset) ?>
 =colorvalue/&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>name</B></DT><DD class="dense">Symbolic name for the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  value, to be used to refer to that &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>argb</B></DT><DD class="dense">8 characters hex definition of the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  or other symbolic &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  name.
</DD><DT class="dense"><B>domain</B></DT><DD class="dense">string to be used to prepend names of defined variables.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>In addition to defining symbolic name for the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  this tag will define
7 other variables :     domain.sym_name.&nbsp;<? local_doc_url("visualdoc.php","red","ColorScheme#color_values.red",$srcunset,$subunset) ?>
 , domain.sym_name.&nbsp;<? local_doc_url("visualdoc.php","green","ColorScheme#color_values.green",$srcunset,$subunset) ?>
 , 
                        domain.sym_name.&nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
 , domain.sym_name.&nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 , 
                        domain.sym_name.&nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 , domain.sym_name.saturation,
                        domain.sym_name.value
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/printf"><UL><B>libAfterImage/asimagexml/printf</B><br></A><LI><B>NAME</B><br>
<A NAME="printf"></A><B>printf</B><P class="dense">- prints variable value to standard output.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","printf","asimagexml#printf",$srcunset,$subunset) ?>
  format=&quot;format_string&quot; var=&quot;variable_name&quot; &nbsp;<? local_doc_url("visualdoc.php","val","ColorScheme#color_values.val",$srcunset,$subunset) ?>
 =&quot;expression&quot;/&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>format_string</B></DT><DD class="dense">Standard C format string with exactly 1 placeholder.
</DD><DT class="dense"><B>var</B></DT><DD class="dense">&nbsp;<? local_doc_url("visualdoc.php","Name","Balloon Contents#options.Name",$srcunset,$subunset) ?>
  of the variable, which value will be printed.
</DD><DT class="dense"><B>val</B></DT><DD class="dense">math expression to be printed.
</DD></DL></LI><LI><B>NOTES</B><br></LI></UL>
<A NAME="libAfterImage/asimagexml/set"><UL><B>libAfterImage/asimagexml/set</B><br></A><LI><B>NAME</B><br>
<A NAME="set"></A><B>set</B><P class="dense">- declares variable, assigning it a numeric value of expression.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  var=&quot;variable_name&quot; domain=&quot;var_domain&quot; &nbsp;<? local_doc_url("visualdoc.php","val","ColorScheme#color_values.val",$srcunset,$subunset) ?>
 =&quot;expression&quot;/&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>var</B></DT><DD class="dense">&nbsp;<? local_doc_url("visualdoc.php","Name","Balloon Contents#options.Name",$srcunset,$subunset) ?>
  of the variable, which value will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>val</B></DT><DD class="dense">math expression to be evaluated.
</DD><DT class="dense"><B>domain</B></DT><DD class="dense">(optional) variable's domain to be prepended to its name
               using format var_domain.variable_name
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimagexml/if"><UL><B>libAfterImage/asimagexml/if</B><br></A><LI><B>NAME</B><br>
<A NAME="if"></A><B>if</B><P class="dense">- evaluates logical expression and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  result evaluates to not true(or false 
&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &lt;unless&gt; tag is used ), handles tags within.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  val1=&quot;expression&quot; [op=&quot;gt|lt|ge|le|eq|ne&quot; val2=&quot;expression&quot;]/&gt;
    [&lt;then&gt;...&lt;/then&gt;&lt;else&gt;...&lt;/else&gt;]
&lt;/&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 &gt;
&lt;unless val1=&quot;expression&quot; [op=&quot;gt|lt|ge|le|eq|ne&quot; val2=&quot;expression&quot;]/&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>val1</B></DT><DD class="dense">math expression to be evaluated.
</DD><DT class="dense"><B>val2</B></DT><DD class="dense">math expression to be evaluated.
</DD><DT class="dense"><B>op</B></DT><DD class="dense">(optional) comparison op to be applied to values
</DD></DL></LI><LI><B>EXAMPLE</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  val1=&quot;$ascs.&nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
 .value&quot; val2=&quot;50&quot; op=&quot;gt&quot;&gt;&lt;then&gt;...&lt;/then&gt;&lt;else&gt;...&lt;/else&gt;&lt;/&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 &gt;
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/gradient"><UL><B>libAfterImage/asimagexml/gradient</B><br></A><LI><B>NAME</B><br>
<A NAME="gradient"></A><B>gradient</B><P class="dense">- render multipoint &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; angle=&quot;degrees&quot; 
          refid=&quot;refid&quot; width=&quot;pixels&quot; height=&quot;pixels&quot;
          colors =&quot;color1 color2 color3 [...]&quot;
          offsets=&quot;fraction1 fraction2 fraction3 [...]&quot;/&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional.  Image will be given this name for future reference.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional.  The result will have this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional.  The result will have this height.
</DD><DT class="dense"><B>colors</B></DT><DD class="dense">Required.  Whitespace-separated list of colors.  At least two
         colors are required.  Each &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  in this list will be visited
         in turn, at the intervals given by the offsets attribute.
</DD><DT class="dense"><B>offsets</B></DT><DD class="dense">Optional.  Whitespace-separated list of floating point values
         ranging from 0.0 to 1.0.  The colors from the colors attribute
         are given these offsets, and the final &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  is rendered
         from the combination of the two.  If both colors and offsets
         are given but the number of colors and offsets do not match,
         the minimum of the two will be used, and the other will be
         truncated to match.  If offsets are not given, a smooth
         stepping from 0.0 to 1.0 will be used.
</DD><DT class="dense"><B>angle</B></DT><DD class="dense">Optional.  Given in degrees.  Default is 0.  This is the
         direction of the &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .  Currently the only supported
         values are 0, 45, 90, 135, 180, 225, 270, 315.  0 means left
         to right, 90 means top to bottom, etc.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimagexml/solid"><UL><B>libAfterImage/asimagexml/solid</B><br></A><LI><B>NAME</B><br>
<A NAME="solid"></A><B>solid</B><P class="dense">- generate image of specified size and fill it with &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 =&quot;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot; opacity=&quot;opacity&quot; 
    width=&quot;pixels&quot; height=&quot;pixels&quot;
    refid=&quot;refid&quot; width=&quot;pixels&quot; height=&quot;pixels&quot;/&gt;

</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional.  The result will have this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional.  The result will have this height.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>color</B></DT><DD class="dense">Optional.  Default is &quot;#ffffffff&quot;.  An image will be created
         and filled with this &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Required.  The image will have this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Required.  The image will have this height.
</DD><DT class="dense"><B>opacity</B></DT><DD class="dense">Optional. Default is 100. Values from 0 to 100 represent the
         opacity of resulting image with 100 being completely opaque.
            Effectively overrides &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
  component of the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  setting.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimagexml/save"><UL><B>libAfterImage/asimagexml/save</B><br></A><LI><B>NAME</B><br>
<A NAME="save"></A><B>save</B><P class="dense">- write generated/loaded image into the file of one of the
       supported types
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; dst=&quot;filename&quot; format=&quot;format&quot; compress=&quot;value&quot;
      opacity=&quot;value&quot; replace=&quot;0|1&quot; delay=&quot;mlsecs&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional.  Image will be given this name for future reference.
</DD><DT class="dense"><B>dst</B></DT><DD class="dense">Optional.  &nbsp;<? local_doc_url("visualdoc.php","Name","Balloon Contents#options.Name",$srcunset,$subunset) ?>
  of file image will be saved to. If omitted
         image will be dumped into stdout - usefull for CGI apps.
</DD><DT class="dense"><B>format</B></DT><DD class="dense">Optional.  Ouput format of saved image.  &nbsp;<? local_doc_url("visualdoc.php","Defaults","WinList#options.Defaults",$srcunset,$subunset) ?>
  to the
         extension of the &quot;dst&quot; parameter.  Valid values are the
         standard AS image file formats: xpm, jpg, png, gif, tiff.
</DD><DT class="dense"><B>compress</B></DT><DD class="dense">Optional.  Compression level &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  supported by output file
         format. Valid values are in range of 0 - 100 and any of
         &quot;deflate&quot;, &quot;jpeg&quot;, &quot;ojpeg&quot;, &quot;packbits&quot; for TIFF files.
         Note that JPEG and GIF will produce images with deteriorated
         quality when compress is greater then 0. For JPEG default is
         25, for PNG default is 6 and for GIF it is 0.
</DD><DT class="dense"><B>opacity</B></DT><DD class="dense">Optional. Level below which pixel is considered to be
         transparent, while saving image as XPM or GIF. Valid values
         are in range 0-255. Default is 127.
</DD><DT class="dense"><B>replace</B></DT><DD class="dense">Optional. Causes &nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  to delete file &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the file with the
         same name already exists. Valid values are 0 and 1. Default
         is 1 - files are deleted before being saved. Disable this to
         get multimage animated gifs.
</DD><DT class="dense"><B>delay</B></DT><DD class="dense">Optional. &nbsp;<? local_doc_url("visualdoc.php","Delay","Audio#options.Delay",$srcunset,$subunset) ?>
  to be stored in GIF image. This could be used
         to create animated gifs. Note that you have to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  replace=&quot;0&quot;
         and then write several images into the GIF file with the same
         name.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/background"><UL><B>libAfterImage/asimagexml/background</B><br></A><LI><B>NAME</B><br>
<A NAME="background"></A><B>background</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  image's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</P></LI><LI><B>SYNOPSIS</B><br><PRE> &lt;&nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 =&quot;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>color</B></DT><DD class="dense">Required. Color to be used for &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  - fills all the
         spaces in image with missing pixels.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/blur"><UL><B>libAfterImage/asimagexml/blur</B><br></A><LI><B>NAME</B><br>
<A NAME="blur"></A><B>blur</B><P class="dense">- perform a gaussian blurr on an image.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","blur","asimagexml#blur",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; horz=&quot;radius&quot; vert=&quot;radius&quot; channels=&quot;&nbsp;<? local_doc_url("visualdoc.php","argb","ColorScheme#color_values.argb_func",$srcunset,$subunset) ?>
 &quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>horz</B></DT><DD class="dense">Optional. Horizontal radius of the &nbsp;<? local_doc_url("visualdoc.php","blur","asimagexml#blur",$srcunset,$subunset) ?>
  in pixels.
</DD><DT class="dense"><B>vert</B></DT><DD class="dense">Optional. Vertical radius of the &nbsp;<? local_doc_url("visualdoc.php","blur","asimagexml#blur",$srcunset,$subunset) ?>
  in pixels.
</DD><DT class="dense"><B>channels</B></DT><DD class="dense">Optional. Applys &nbsp;<? local_doc_url("visualdoc.php","blur","asimagexml#blur",$srcunset,$subunset) ?>
  only on listed &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  channels:
                      a - &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 ,
                      r - &nbsp;<? local_doc_url("visualdoc.php","red","ColorScheme#color_values.red",$srcunset,$subunset) ?>
 ,
                      g - &nbsp;<? local_doc_url("visualdoc.php","green","ColorScheme#color_values.green",$srcunset,$subunset) ?>
 ,
                      b - &nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
 
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/bevel"><UL><B>libAfterImage/asimagexml/bevel</B><br></A><LI><B>NAME</B><br>
<A NAME="bevel"></A><B>bevel</B><P class="dense">- draws &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  frame around the image.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; colors=&quot;color1 color2&quot; 
          width=&quot;pixels&quot; height=&quot;pixels&quot; refid=&quot;refid&quot;
       border=&quot;left top right bottom&quot; &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
 =0|1 outline=0|1&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional.  Image will be given this name for future reference.
</DD><DT class="dense"><B>colors</B></DT><DD class="dense">Optional.  Whitespace-separated list of colors.  Exactly two
         colors are required.  Default is &quot;#ffdddddd #ff555555&quot;.  The
         first &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the upper and left edges, and the
         second is the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the lower and right edges.
</DD><DT class="dense"><B>borders</B></DT><DD class="dense">Optional.  Whitespace-separated list of integer values.
         Default is &quot;10 10 10 10&quot;.  The values represent the offsets
         toward the center of the image of each border: left, top,
         right, bottom.
</DD><DT class="dense"><B>solid</B></DT><DD class="dense">Optional - default is 1. If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0 will draw &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  gradually
         fading into the image.
</DD><DT class="dense"><B>outline</B></DT><DD class="dense">Optional - default is 0. If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 1 will draw &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  around the 
            image vs. inside the image.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional. The result will have this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional. The result will have this height.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/mirror"><UL><B>libAfterImage/asimagexml/mirror</B><br></A><LI><B>NAME</B><br>
<A NAME="mirror"></A><B>mirror</B><P class="dense">- create &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  image as &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  copy of an old one.
</P></LI><LI><B>SYNOPSIS</B><br><PRE> &lt;&nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; dir=&quot;direction&quot; 
            width=&quot;pixels&quot; height=&quot;pixels&quot; refid=&quot;refid&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>dir</B></DT><DD class="dense">Required. Possible values are &quot;vertical&quot; and &quot;horizontal&quot;.
         The image will be flipped over the x-axis &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  dir is vertical,
         and flipped over the y-axis &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  dir is horizontal.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional.  The result will have this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional.  The result will have this height.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/rotate"><UL><B>libAfterImage/asimagexml/rotate</B><br></A><LI><B>NAME</B><br>
<A NAME="rotate"></A><B>rotate</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","rotate","asimagexml#rotate",$srcunset,$subunset) ?>
  an image in 90 degree increments (flip).
</P></LI><LI><B>SYNOPSIS</B><br><PRE> &lt;&nbsp;<? local_doc_url("visualdoc.php","rotate","asimagexml#rotate",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; angle=&quot;degrees&quot;
            width=&quot;pixels&quot; height=&quot;pixels&quot; refid=&quot;refid&quot;&gt;
* ATTRIBUTES
id       Optional. Image will be given this name for future reference.
angle    Required.  Given in degrees.  Possible values are currently
         &quot;90&quot;, &quot;180&quot;, and &quot;270&quot;.  Rotates the image through the given
         angle.
width    Optional.  The result will have this width.
height   Optional.  The result will have this height.
refid    Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</PRE></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/scale"><UL><B>libAfterImage/asimagexml/scale</B><br></A><LI><B>NAME</B><br>
<A NAME="scale"></A><B>scale</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  image to arbitrary size
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; ref_id=&quot;other_imag&quot; src_x=&quot;pixels&quot;  src_y=&quot;pixels&quot; 
       src_width=&quot;pixels&quot; src_height=&quot;pixels&quot; 
       width=&quot;pixels&quot; height=&quot;pixels&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Required.  The image will be scaled to this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Required.  The image will be scaled to this height.
</DD><DT class="dense"><B>src_x</B></DT><DD class="dense">Optional. Default is 0. X Offset on infinite surface tiled
         with this image, from which to cut portion of an image to be
         used in scaling.
</DD><DT class="dense"><B>src_y</B></DT><DD class="dense">Optional. Default is 0. Y Offset on infinite surface tiled
         with this image, from which to cut portion of an image to be
         used in scaling.
</DD><DT class="dense"><B>src_width</B></DT><DD class="dense">         Optional. Default is image width. &nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
  image to this width
         prior to scaling.
</DD><DT class="dense"><B>src_height</B></DT><DD class="dense">         Optional. Default is image height. &nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
  image to this height
         prior to scaling.
</DD><DT class="dense"><B>*</B></DT><DD class="dense">NOTES
</DD><DT class="dense"><B>This</B></DT><DD class="dense">tag applies to the first image contained within the tag.  Any
</DD><DT class="dense"><B>further</B></DT><DD class="dense">images will be discarded.
</DD><DT class="dense"><B>If</B></DT><DD class="dense">you want to keep image proportions while scaling - use &quot;proportional&quot;
</DD><DT class="dense"><B>instead</B></DT><DD class="dense">of specific size for particular dimention.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimagexml/slice"><UL><B>libAfterImage/asimagexml/slice</B><br></A><LI><B>NAME</B><br>
<A NAME="slice"></A><B>slice</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","slice","asimagexml#slice",$srcunset,$subunset) ?>
  image to arbitrary size leaving corners unchanged
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","slice","asimagexml#slice",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; ref_id=&quot;other_imag&quot; width=&quot;pixels&quot; height=&quot;pixels&quot;
       x_start=&quot;slice_x_start&quot; x_end=&quot;slice_x_end&quot;
          y_start=&quot;slice_y_start&quot; y_end=&quot;slice_y_end&quot;
          &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
 =&quot;0|1&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Required.  The image will be scaled to this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Required.  The image will be scaled to this height.
</DD><DT class="dense"><B>x_start</B></DT><DD class="dense">Optional. Position at which vertical image slicing begins. 
            Corresponds to the right side of the left corners.
</DD><DT class="dense"><B>x_end</B></DT><DD class="dense">Optional. Position at which vertical image slicing end.
            Corresponds to the left side of the right corners.
</DD><DT class="dense"><B>y_start</B></DT><DD class="dense">Optional. Position at which horisontal image slicing begins. 
         Corresponds to the bottom side of the top corners.
</DD><DT class="dense"><B>y_end</B></DT><DD class="dense">Optional. Position at which horisontal image slicing end.
            Corresponds to the top side of the bottom corners.
</DD><DT class="dense"><B>scale</B></DT><DD class="dense">Optional. If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 1 will cause middle portion of the 
            image to be scaled instead of tiled.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
Contents of the image between x_start and x_end will be tiled 
horizontally. Contents of the image between y_start and y_end will be 
tiled vertically. This is usefull to get &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  images to fit the 
size of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  or a widget, while preserving its borders undistorted, 
which is the usuall result of simple scaling.
If you want to keep image proportions while resizing-use &quot;proportional&quot;
instead of specific size for particular dimention.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/crop"><UL><B>libAfterImage/asimagexml/crop</B><br></A><LI><B>NAME</B><br>
<A NAME="crop"></A><B>crop</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","crop","asimagexml#crop",$srcunset,$subunset) ?>
  image to arbitrary area within it.
</P></LI><LI><B>SYNOPSIS</B><br><PRE> &lt;&nbsp;<? local_doc_url("visualdoc.php","crop","asimagexml#crop",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; refid=&quot;other_image&quot; srcx=&quot;pixels&quot; srcy=&quot;pixels&quot;
       width=&quot;pixels&quot; height=&quot;pixels&quot; tint=&quot;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional. An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>srcx</B></DT><DD class="dense">Optional. Default is &quot;0&quot;. Skip this many pixels from the left.
</DD><DT class="dense"><B>srcy</B></DT><DD class="dense">Optional. Default is &quot;0&quot;. Skip this many pixels from the top.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional. Default is &quot;100%&quot;.  Keep this many pixels wide.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional. Default is &quot;100%&quot;.  Keep this many pixels tall.
</DD><DT class="dense"><B>tint</B></DT><DD class="dense">Optional. Additionally tint an image to specified &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
         Tinting can both lighten and darken an image. Tinting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
         0 or #7f7f7f7f yeilds no &nbsp;<? local_doc_url("visualdoc.php","tinting","ColorScheme#image_hues.tinting",$srcunset,$subunset) ?>
 . Tinting can be performed on
         any channel, including &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
  channel.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/tile"><UL><B>libAfterImage/asimagexml/tile</B><br></A><LI><B>NAME</B><br>
<A NAME="tile"></A><B>tile</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  an image to specified area.
</P></LI><LI><B>SYNOPSIS</B><br><PRE> &lt;&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; refid=&quot;other_image&quot; width=&quot;pixels&quot; height=&quot;pixels&quot;
       x_origin=&quot;pixels&quot; y_origin=&quot;pixels&quot; tint=&quot;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot; complement=0|1&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional. An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional. Default is &quot;100%&quot;. The image will be tiled to this
         width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional. Default is &quot;100%&quot;. The image will be tiled to this
         height.
</DD><DT class="dense"><B>x_origin</B></DT><DD class="dense">Optional. Horizontal position on infinite surface, covered
         with tiles of the image, from which to cut out resulting
         image.
</DD><DT class="dense"><B>y_origin</B></DT><DD class="dense">Optional. Vertical position on infinite surface, covered
         with tiles of the image, from which to cut out resulting
         image.
</DD><DT class="dense"><B>tint</B></DT><DD class="dense">Optional. Additionally tint an image to specified &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
         Tinting can both lighten and darken an image. Tinting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
         0 or #7f7f7f7f yields no &nbsp;<? local_doc_url("visualdoc.php","tinting","ColorScheme#image_hues.tinting",$srcunset,$subunset) ?>
 . Tinting can be performed
         on any channel, including &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
  channel.
</DD><DT class="dense"><B>complement</B></DT><DD class="dense">Optional. Will use &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  that is the complement to tint &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
         for the &nbsp;<? local_doc_url("visualdoc.php","tinting","ColorScheme#image_hues.tinting",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 1. Default is 0.

</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/hsv"><UL><B>libAfterImage/asimagexml/hsv</B><br></A><LI><B>NAME</B><br>
<A NAME="hsv"></A><B>hsv</B><P class="dense">- adjust Hue, Saturation and/or Value of an image and optionally
&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  an image to arbitrary area.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","hsv","asimagexml#hsv",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; refid=&quot;other_image&quot;
     x_origin=&quot;pixels&quot; y_origin=&quot;pixels&quot; width=&quot;pixels&quot; height=&quot;pixels&quot;
     affected_hue=&quot;degrees|&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot; affected_radius=&quot;degrees&quot;
     hue_offset=&quot;degrees&quot; saturation_offset=&quot;value&quot;
     value_offset=&quot;value&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional. An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional. Default is &quot;100%&quot;. The image will be tiled to this
         width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional. Default is &quot;100%&quot;. The image will be tiled to this
         height.
</DD><DT class="dense"><B>x_origin</B></DT><DD class="dense">Optional. Horizontal position on infinite surface, covered
         with tiles of the image, from which to cut out resulting
         image.
</DD><DT class="dense"><B>y_origin</B></DT><DD class="dense">Optional. Vertical position on infinite surface, covered
         with tiles of the image, from which to cut out resulting
         image.
</DD><DT class="dense"><B>affected_hue</B></DT><DD class="dense">Optional. Limits effects to the renage of hues around
         this &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 . If numeric value is specified - it is treated as
         degrees on 360 degree circle, with :
             &nbsp;<? local_doc_url("visualdoc.php","red","ColorScheme#color_values.red",$srcunset,$subunset) ?>
  = 0,
             yellow = 60,
             &nbsp;<? local_doc_url("visualdoc.php","green","ColorScheme#color_values.green",$srcunset,$subunset) ?>
  = 120,
             cyan = 180,
             &nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
  = 240,
             magenta = 300.
         If colorname or value preceded with # is specified here - it
         will be treated as &nbsp;<? local_doc_url("visualdoc.php","RGB","ColorScheme#color_values.rgb",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  and converted into &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 
         automagically.
</DD><DT class="dense"><B>affected_radius</B></DT><DD class="dense">         Optional. Value in degrees to be used in order to
         calculate the range of affected hues. Range is determined by
         substracting and adding this value from/to affected_hue.
</DD><DT class="dense"><B>hue_offset</B></DT><DD class="dense">         Optional. Value by which to adjust the &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>saturation_offset</B></DT><DD class="dense">         Optional. Value by which to adjust the saturation.
</DD><DT class="dense"><B>value_offset</B></DT><DD class="dense">         Optional. Value by which to adjust the value.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>One of the Offsets must be not 0, in order for operation to be
performed.

This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimagexml/pad"><UL><B>libAfterImage/asimagexml/pad</B><br></A><LI><B>NAME</B><br>
<A NAME="pad"></A><B>pad</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  an image with &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  rectangles.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&lt;&nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  id=&quot;new_id&quot; left=&quot;pixels&quot; top=&quot;pixels&quot;
     right=&quot;pixels&quot; bottom=&quot;pixels&quot; &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 =&quot;&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &quot;
        refid=&quot;refid&quot; width=&quot;pixels&quot; height=&quot;pixels&quot;&gt;
</PRE></LI><LI><B>ATTRIBUTES</B><br><DL class="dense"><DT class="dense"><B>id</B></DT><DD class="dense">Optional. Image will be given this name for future reference.
</DD><DT class="dense"><B>width</B></DT><DD class="dense">Optional.  The result will have this width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">Optional.  The result will have this height.
</DD><DT class="dense"><B>refid</B></DT><DD class="dense">Optional.  An image ID defined with the &quot;id&quot; parameter for
         any previously created image.  If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 , percentages in &quot;width&quot;
         and &quot;height&quot; will be derived from the width and height of the
         refid image.
</DD><DT class="dense"><B>left</B></DT><DD class="dense">Optional. &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  to the left of the image.
</DD><DT class="dense"><B>top</B></DT><DD class="dense">Optional. &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  to the top of the image.
</DD><DT class="dense"><B>right</B></DT><DD class="dense">Optional. &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  to the right of the image.
</DD><DT class="dense"><B>bottom</B></DT><DD class="dense">Optional. &nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  to the bottom of the image.
</DD><DT class="dense"><B>color</B></DT><DD class="dense">Optional. Color value to fill added areas with. It could be
         transparent of course. Default is #FF000000 - totally black.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>This tag applies to the first image contained within the tag.  Any
further images will be discarded.
</PRE></LI></UL></UL>
