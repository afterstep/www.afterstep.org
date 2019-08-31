&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASImage Transformations</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">transformations available for ASImages</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/transform.h"><UL><B>libAfterImage/transform.h</B><br></A><LI><B>NAME</B><br>
<A NAME="transform"></A><B>transform</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Defines transformations that could be performed on &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>
Transformations can be performed with different degree of quality.
Internal engine uses 24.8 bits per channel per pixel. As the result
there are no precision loss, while performing complex calculations.
Error diffusion algorithms could be used to &nbsp;<? local_doc_url("visualdoc.php","transform","transform#transform",$srcunset,$subunset) ?>
  it back into 8
bit without quality loss.

Any Transformation could be performed with the result written directly
into XImage, so that it could be displayed faster.

Complex interpolation algorithms are used to perform scaling
operations, thus yielding very good quality. All the transformations
are performed in integer math, with the result of greater speeds.
Optional MMX inline assembly has been incorporated into some
procedures, and allows to achieve considerably better performance on
compatible CPUs.

</PRE></LI><LI><B>SEE ALSO</B><br><PRE> Transformations :
         scale_asimage(), tile_asimage(), merge_layers(), 
            make_gradient(), flip_asimage(), mirror_asimage(), 
            pad_asimage(), blur_asimage_gauss(), fill_asimage(), 
            adjust_asimage_hsv()

 Other &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  modules :
         &nbsp;<? local_doc_url("visualdoc.php","ascmap","ascmap#ascmap",$srcunset,$subunset) ?>
 .h &nbsp;<? local_doc_url("visualdoc.php","asfont","asfont#asfont",$srcunset,$subunset) ?>
 .h &nbsp;<? local_doc_url("visualdoc.php","asimage","asimage#asimage",$srcunset,$subunset) ?>
 .h &nbsp;<? local_doc_url("visualdoc.php","asvisual","asvisual#asvisual",$srcunset,$subunset) ?>
 .h &nbsp;<? local_doc_url("visualdoc.php","blender","blender#blender",$srcunset,$subunset) ?>
 .h &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
 .h
         &nbsp;<? local_doc_url("visualdoc.php","import","import#import",$srcunset,$subunset) ?>
 .h &nbsp;<? local_doc_url("visualdoc.php","transform","transform#transform",$srcunset,$subunset) ?>
 .h &nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
 .h
</PRE></LI><LI><B>AUTHOR</B><br><PRE>Sasha Vasko &lt;sasha at aftercode dot net&gt;
</PRE></LI></UL>
<A NAME="libAfterImage/transform/scale_asimage()"><UL><B>libAfterImage/transform/scale_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="scale_asimage()"></A><B>scale_asimage()</B><P class="dense">- scales source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  into new image of requested 
dimensions. 
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *scale_asimage( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src,
                        unsigned int to_width,
                        unsigned int to_height,
                        &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                        unsigned int compression_out, int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>to_width</B></DT><DD class="dense">- desired width of the resulting image
</DD><DT class="dense"><B>to_height</B></DT><DD class="dense">- desired height of the resulting image
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out-</B></DT><DD class="dense">compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>If size has to be reduced - then several neighboring pixels will be 
averaged into single pixel. If size has to be increased then new 
pixels will be interpolated based on values of four neighboring pixels.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 
</PRE></LI></UL>
<A NAME="libAfterImage/transform/tile_asimage()"><UL><B>libAfterImage/transform/tile_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="tile_asimage()"></A><B>tile_asimage()</B><P class="dense">- tiles/crops &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  to desired size, while optionaly 
tinting it at the same time.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *tile_asimage ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src,
                        int offset_x,
                        int offset_y,
                        unsigned int to_width,
                        unsigned int to_height,
                        &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
 ,
                        &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                        unsigned int compression_out, int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>offset_x</B></DT><DD class="dense">- left clip margin
</DD><DT class="dense"><B>offset_y</B></DT><DD class="dense">- right clip margin
</DD><DT class="dense"><B>to_width</B></DT><DD class="dense">- desired width of the resulting image
</DD><DT class="dense"><B>to_height</B></DT><DD class="dense">- desired height of the resulting image
</DD><DT class="dense"><B>tint</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  describing tinting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out-</B></DT><DD class="dense">compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Offset_x and offset_y define origin on source image from which
tiling will &nbsp;<? local_doc_url("visualdoc.php","start","imencdec#start_image_decoding()",$srcunset,$subunset) ?>
 . If offset_x or offset_y is outside of the image
boundaries, then it will be reduced by whole number of image sizes to
fit inside the image. At the time of tiling image will be tinted
unless &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  == 0.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 
</PRE></LI></UL>
<A NAME="libAfterImage/transform/merge_layers()"><UL><B>libAfterImage/transform/merge_layers()</B><br></A><LI><B>NAME</B><br>
<A NAME="merge_layers()"></A><B>merge_layers()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *merge_layers  ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                         &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  *layers, int count,
                         unsigned int dst_width,
                         unsigned int dst_height,
                         &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                         unsigned int compression_out, int quality);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>layers</B></DT><DD class="dense">- array of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structures that will be rendered
               one on top of another. First element corresponds to
               the bottommost layer.
</DD><DT class="dense"><B>dst_width</B></DT><DD class="dense">- desired width of the resulting image
</DD><DT class="dense"><B>dst_height</B></DT><DD class="dense">- desired height of the resulting image
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out</B></DT><DD class="dense">- compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>merge_layers() will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  of requested size. It will then
go through all the layers, and &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  image with composition.
Bottommost layer will be used unchanged and above layers will be
superimposed on it, using algorithm specified in &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 
structure of the overlaying layer. Layers may have smaller size
then destination image, and maybe placed in arbitrary locations. Each
layer will be padded to fit width of the destination image with all 0
effectively making it transparent.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/make_gradient()"><UL><B>libAfterImage/transform/make_gradient()</B><br></A><LI><B>NAME</B><br>
<A NAME="make_gradient()"></A><B>make_gradient()</B><P class="dense">- renders linear &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  into new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *make_gradient ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                         struct &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  *grad,
                         unsigned int width,
                         unsigned int height,
                         ASFlagType filter,
                         &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                         unsigned int compression_out, int quality);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>grad</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  structure defining how &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  should be
               drawn
</DD><DT class="dense"><B>width</B></DT><DD class="dense">- desired width of the resulting image
</DD><DT class="dense"><B>height</B></DT><DD class="dense">- desired height of the resulting image
</DD><DT class="dense"><B>filter</B></DT><DD class="dense">- only channels corresponding to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  bits will be
               rendered.
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out-</B></DT><DD class="dense">compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>make_gradient() will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new image of requested size and it will
&nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  it with &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 , described in structure pointed to by grad.
Different dithering techniques will be applied to produce nicer
looking gradients.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/flip_asimage()"><UL><B>libAfterImage/transform/flip_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="flip_asimage()"></A><B>flip_asimage()</B><P class="dense">- rotates &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  in 90 degree increments
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *flip_asimage ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src,
                        int offset_x, int offset_y,
                        unsigned int to_width,
                        unsigned int to_height,
                        int &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                        unsigned int compression_out, int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>offset_x</B></DT><DD class="dense">- left clip margin
</DD><DT class="dense"><B>offset_y</B></DT><DD class="dense">- right clip margin
</DD><DT class="dense"><B>to_width</B></DT><DD class="dense">- desired width of the resulting image
</DD><DT class="dense"><B>to_height</B></DT><DD class="dense">- desired height of the resulting image
</DD><DT class="dense"><B>flip</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  flags determining degree of rotation.
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out</B></DT><DD class="dense">- compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>flip_asimage() will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new image of requested size, it will then
&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  source image based on offset_x, offset_y, and destination size,
and it will &nbsp;<? local_doc_url("visualdoc.php","rotate","asimagexml#rotate",$srcunset,$subunset) ?>
  it then based on &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 . Three rotation angles
supported 90, 180 and 270 degrees.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/mirror_asimage()"><UL><B>libAfterImage/transform/mirror_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="mirror_asimage()"></A><B>mirror_asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *mirror_asimage ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                          &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src,
                          int offset_x, int offset_y,
                          unsigned int to_width,
                          unsigned int to_height,
                          Bool vertical, &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                          unsigned int compression_out, int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>offset_x</B></DT><DD class="dense">- left clip margin
</DD><DT class="dense"><B>offset_y</B></DT><DD class="dense">- right clip margin
</DD><DT class="dense"><B>to_width</B></DT><DD class="dense">- desired width of the resulting image
</DD><DT class="dense"><B>to_height</B></DT><DD class="dense">- desired height of the resulting image
</DD><DT class="dense"><B>vertical</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  in vertical direction.
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out</B></DT><DD class="dense">- compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>mirror_asimage() will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new image of requested size, it will then
&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  source image based on offset_x, offset_y, and destination size,
and it will &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  it in vertical or horizontal direction.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/pad_asimage()"><UL><B>libAfterImage/transform/pad_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="pad_asimage()"></A><B>pad_asimage()</B><P class="dense">enlarges &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , padding it with specified &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  on 
each side in accordance with requested geometry.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *pad_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src,
                     int dst_x, int dst_y,
                     unsigned int to_width,
                     unsigned int to_height,
                     &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 ,
                     &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                     unsigned int compression_out, int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>dst_x,</B></DT><DD class="dense">dst_y - placement of the source image relative to the origin of
               destination image
</DD><DT class="dense"><B>to_width</B></DT><DD class="dense">- width of the destination image
</DD><DT class="dense"><B>to_height</B></DT><DD class="dense">- height of the destination image
</DD><DT class="dense"><B>color</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  with.
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out</B></DT><DD class="dense">- compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/blur_asimage_gauss()"><UL><B>libAfterImage/transform/blur_asimage_gauss()</B><br></A><LI><B>NAME</B><br>
<A NAME="blur_asimage_gauss()"></A><B>blur_asimage_gauss()</B><P class="dense">Performs Gaussian blurr of the image 
( usefull for drop shadows and the likes ).
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 * blur_asimage_gauss( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 * asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 * src,
                             double horz, double vert,
                             &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                             unsigned int compression_out, 
                                int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>horz</B></DT><DD class="dense">- horizontal radius of the blurr
</DD><DT class="dense"><B>vert</B></DT><DD class="dense">- vertical radius of the blurr
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out</B></DT><DD class="dense">- compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/fill_asimage()"><UL><B>libAfterImage/transform/fill_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="fill_asimage()"></A><B>fill_asimage()</B><P class="dense">- Fills rectangle within the existing &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  with 
specified &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool fill_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im,
                   int x, int y, int width, int height,
                   &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  with the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>x,</B></DT><DD class="dense">y          - left-top corner of the rectangle to &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height - size of the rectangle to &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>color</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  rectangle with.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>True on success, False on failure.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/adjust_asimage_hsv()"><UL><B>libAfterImage/transform/adjust_asimage_hsv()</B><br></A><LI><B>NAME</B><br>
<A NAME="adjust_asimage_hsv()"></A><B>adjust_asimage_hsv()</B><P class="dense">- adjusts image &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  properties in HSV &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
 
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *adjust_asimage_hsv( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src,
                             int offset_x, int offset_y,
                             unsigned int to_width,
                             unsigned int to_height,
                             unsigned int affected_hue,
                             unsigned int affected_radius,
                             int hue_offset, int saturation_offset,
                             int value_offset,
                             &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                             unsigned int compression_out, int quality);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","adjust","transform#adjust_asimage_hsv()",$srcunset,$subunset) ?>
  colors of.
</DD><DT class="dense"><B>offset_x,</B></DT><DD class="dense"></DD><DT class="dense"><B>offset_y</B></DT><DD class="dense">- position on infinite surface tiled with original image,
                of the left-top corner of the area to be used for new
                image.
</DD><DT class="dense"><B>to_width,</B></DT><DD class="dense"></DD><DT class="dense"><B>to_height</B></DT><DD class="dense">- size of the area of the original image to be used
                for new image.
</DD><DT class="dense"><B>affected_hue</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  in degrees in range 0-360. This allows to limit
                impact of &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  adjustment to affect only limited
                range of hues.
</DD><DT class="dense"><B>affected_radius</B></DT><DD class="dense">Sets the diapason of the range of affected hues.
</DD><DT class="dense"><B>hue_offset</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  by which to change hues in affected range.
</DD><DT class="dense"><B>saturation_offset</B></DT><DD class="dense">-
                &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  by which to change saturation of the pixels in
                affected &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  range.
</DD><DT class="dense"><B>value_offset</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  by which to change Value(brightness) of pixels
                in affected &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  range.
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
               should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out-</B></DT><DD class="dense">compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns newly created and encoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  on success, NULL of failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function will &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  original image to specified size with offsets
requested, and then it will go though it and &nbsp;<? local_doc_url("visualdoc.php","adjust","transform#adjust_asimage_hsv()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 , saturation and
&nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of those pixels that have specific &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  by affected_hue/
affected_radius parameters. When affected_radius is greater then 180
entire image will be adjusted. Note that since grayscale colors have
no &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  - the will not &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  adjusted. Only saturation and &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  will be
adjusted in gray pixels.
Hue is measured as an angle on a 360 degree circle, The following is
relationship of &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  values to regular &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  names :
red      - 0
yellow   - 60
green    - 120
cyan     - 180
blue     - 240
magenta  - 300
red      - 360

All the &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  values in parameters will be adjusted to fall withing
0-360 range.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/colorize_asimage_vector()"><UL><B>libAfterImage/transform/colorize_asimage_vector()</B><br></A><LI><B>NAME</B><br>
<A NAME="colorize_asimage_vector()"></A><B>colorize_asimage_vector()</B><P class="dense">creates &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  from double precision indexed 
image data - usefull for scientific visualisation.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool colorize_asimage_vector( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im,
                                 &nbsp;<? local_doc_url("visualdoc.php","ASVectorPalette","asimage#ASVectorPalette",$srcunset,$subunset) ?>
  *palette,
                              &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                              int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  to update.
</DD><DT class="dense"><B>palette</B></DT><DD class="dense">- palette to be used in conversion of double precision
                values into colors.
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
                should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>True on success, False on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function will try to convert double precision indexed image data
into actuall &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  image using palette. Original data should be 
attached to &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  using vector member. Operation is relatively fast 
and allows representation of scientific data as &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  image with 
dynamically changing palette.
</PRE></LI></UL>
<A NAME="libAfterImage/transform/create_asimage_from_vector()"><UL><B>libAfterImage/transform/create_asimage_from_vector()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_asimage_from_vector()"></A><B>create_asimage_from_vector()</B><P class="dense">- convinience function allowing to 
&nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  its vector data and &nbsp;<? local_doc_url("visualdoc.php","colorize","blender#colorize_scanlines()",$srcunset,$subunset) ?>
  it using 
palette - all in one step.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *create_asimage_from_vector( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, double *vector,
                                     unsigned int width,
                                     unsigned int height,
                                     &nbsp;<? local_doc_url("visualdoc.php","ASVectorPalette","asimage#ASVectorPalette",$srcunset,$subunset) ?>
  *palette,
                                     &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
                                     unsigned int compression,
                                     int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>vector</B></DT><DD class="dense">- data to be attached to new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  and used to generate
                RGB image
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height - size of the new image.
</DD><DT class="dense"><B>palette</B></DT><DD class="dense">- palette to be used in conversion of double precision
                values into colors.
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
                should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.
</DD><DT class="dense"><B>compression_out-</B></DT><DD class="dense">compression level of resulting image in range 0-100.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>New &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
   on success, NULL on failure.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>colorize_asimage_vector(), create_asimage(), set_asimage_vector()
</PRE></LI></UL>
<A NAME="libAfterImage/transform/slice_asimage2()"><UL><B>libAfterImage/transform/slice_asimage2()</B><br></A><LI><B>NAME</B><br>
<A NAME="slice_asimage2()"></A><B>slice_asimage2()</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","slice","asimagexml#slice",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  leaving its corners intact, and scaling 
the middle part.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 *
slice_asimage2( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src,
            int slice_x_start, int slice_x_end,
            int slice_y_start, int slice_y_end,
            int to_width,
            int to_height,
            Bool scaled,
            &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  out_format,
            unsigned int compression_out, int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>slice_x_start</B></DT><DD class="dense">- ending of the left corners
</DD><DT class="dense"><B>slice_x_end</B></DT><DD class="dense">- begining of the right corners
</DD><DT class="dense"><B>slice_y_start</B></DT><DD class="dense">- ending of the top corners
</DD><DT class="dense"><B>slice_y_end</B></DT><DD class="dense">- begining of the bottom corners
</DD><DT class="dense"><B>to_width</B></DT><DD class="dense">- width of the generated image;
</DD><DT class="dense"><B>to_height</B></DT><DD class="dense">- height of the generated image;
</DD><DT class="dense"><B>scaled</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True - middle part of the image will be scaled, 
                otherwise - tiled;
</DD><DT class="dense"><B>out_format</B></DT><DD class="dense">- optionally describes alternative &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  format that
                should be produced as the result - XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , etc.;
</DD><DT class="dense"><B>compression_out-</B></DT><DD class="dense">compression level of resulting image in range 0-100;
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- output quality.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>New &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
   on success, NULL on failure.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>scale_asimage(), tile_asimage()
</PRE></LI></UL>
