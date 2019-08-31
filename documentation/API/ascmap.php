&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Indexed Image handling</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines main structures and function for image quantization</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/ascmap.h"><UL><B>libAfterImage/ascmap.h</B><br></A><LI><B>NAME</B><br>
<A NAME="ascmap"></A><B>ascmap</B><P class="dense">- Defines main structures and function for image quantization.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>Image quantization is needed primarily in order to be able to &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
 
images into file, with &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  format, such as GIF and XPM.
&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  attempts to allocate colorcells to the most used colors,
and then approximate remaining colors with the closest colorcell.

Since quality of quantization is in reverse proportion to the number
of colors in original image, &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  allows to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  arbitrary
level of downsampling of the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  spectrum in the range of 8 bit per
channel to 1 bit per channel. Downsampling is performed by simple
dropping of less significant bits off of &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  values.

In order to be able to determine closeness of colors, 3-channel RGB
values are converted into flat 24bit (or less &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  downsampling is used)
index. That is done by intermixing bits from different channels, like
so : R8G8B8R7G7B7...R1G1B1. That flat index is used to arrange colors
in ascending order, and later on to be able to find closest mapped
&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Simple hashing technique is used to speed up the
sorting/searching, as it allows to limit linked lists traversals.

</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Structures :
         &nbsp;<? local_doc_url("visualdoc.php","ASColormapEntry","ascmap#ASColormapEntry",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
 

Functions :
         colormap_asimage(), destroy_colormap()

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
<A NAME="libAfterImage/ASColormapEntry"><UL><B>libAfterImage/ASColormapEntry</B><br></A><LI><B>NAME</B><br>
<A NAME="ASColormapEntry"></A><B>ASColormapEntry</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASColormapEntry","ascmap#ASColormapEntry",$srcunset,$subunset) ?>
  represents single colorcell in the &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 .
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASColormapEntry","ascmap#ASColormapEntry",$srcunset,$subunset) ?>
 
{
    CARD8 red, green, blue;
}&nbsp;<? local_doc_url("visualdoc.php","ASColormapEntry","ascmap#ASColormapEntry",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASColormap"><UL><B>libAfterImage/ASColormap</B><br></A><LI><B>NAME</B><br>
<A NAME="ASColormap"></A><B>ASColormap</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
  represents entire &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  generated for the image.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
 
{
    &nbsp;<? local_doc_url("visualdoc.php","ASColormapEntry","ascmap#ASColormapEntry",$srcunset,$subunset) ?>
  *entries ;  /* array of colorcells */
    unsigned int count ;        /* number of used colorcells */
    ASSortedColorHash *hash ;   /* internal data */
    Bool has_opaque ;           /* If True then Image has opaque pixels */
}&nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/colormap_asimage()"><UL><B>libAfterImage/colormap_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="colormap_asimage()"></A><B>colormap_asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>int *colormap_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
  *cmap,
                       unsigned int max_colors, unsigned int dither,
                       int opaque_threshold );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>cmap</B></DT><DD class="dense">- preallocated structure to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  in.
</DD><DT class="dense"><B>max_colors</B></DT><DD class="dense">- maximum size of the &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>dither</B></DT><DD class="dense">- number of bits to strip off the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  data ( 0...7 )
</DD><DT class="dense"><B>opaque_threshold</B></DT><DD class="dense">- alpha channel threshold at which pixel should be
                   treated as opaque
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to the array of indexes representing pixel's colorcells. This
array has size of WIDTHxHEIGHT where WIDTH and HEIGHT are size of the
source image.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function is all that is needed to quantize the &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . In order
to obtain colorcell of the pixel at (x,y) from result, the following
code could be used :
cmap-&gt;entries[res[y*width+x]]
where res is returned pointer.
Recommended &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  for dither parameter is 4 while quantizing photos to
256 colors, and it could be less , &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  original has limited number of
colors.

</PRE></LI></UL>
<A NAME="libAfterImage/destroy_colormap()"><UL><B>libAfterImage/destroy_colormap()</B><br></A><LI><B>NAME</B><br>
<A NAME="destroy_colormap()"></A><B>destroy_colormap()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void destroy_colormap( &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
  *cmap, Bool reusable );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>cmap</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>reusable</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True, then the memory pointed to by cmap will
                   not be deallocated, as &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it was allocated on stack
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Destroys &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
  object created using colormap_asimage.
</PRE></LI></UL>
