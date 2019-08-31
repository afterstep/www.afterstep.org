&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASImage Encoding/decoding</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">encoding/decoding ASImage data from/to usable data structures</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/imencdec.h"><UL><B>libAfterImage/imencdec.h</B><br></A><LI><B>NAME</B><br>
<A NAME="imencdec"></A><B>imencdec</B><P class="dense">defines main structures and function for image storing,
extraction and conversion to/from usable formats.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>this header defines structures and functions to be used by outside 
applications for reading and writing into ASImages. &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  pixel 
data maybe stored in sevral different formats, and should not be 
accessed directly, but only through encoder/decoder facility.

</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Structures :
         &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
 

Functions :
  Encoding :
         asimage_add_line(),    asimage_add_line_mono(),
         asimage_print_line(), get_asimage_chanmask(),
         move_asimage_channel(), copy_asimage_channel(),
         copy_asimage_lines()

  Decoding
         start_image_decoding(), stop_image_decoding(),
         asimage_decode_line (), set_decoder_shift(),
         set_decoder_back_color()

  Output :
         start_image_output(), set_image_output_back_color(),
         toggle_image_output_direction(), stop_image_output()

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
<A NAME="libAfterImage/ASImageBevel"><UL><B>libAfterImage/ASImageBevel</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageBevel"></A><B>ASImageBevel</B><P class="dense">describes &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around the image.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>Bevel is used to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  3D effect while drawing buttons, or any other
image that needs to be framed. Bevel is drawn using 2 primary colors:
one for top and left sides - hi &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , and another for bottom and
right sides - low &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . There are additionally 3 auxiliary colors:
hihi is used for the edge of top-left corner, hilo is used for the
edge of top-right and bottom-left corners, and lolo is used for the
edge of bottom-right corner. Colors are specified as ARGB and contain
alpha component, thus allowing for semitransparent bevels.

Bevel consists of outline and inline. Outline is drawn outside of the
image boundaries and its size adds to image size as the result. Alpha
component of the outline is constant. Inline is drawn on top of the
image and its alpha component is fading towards the center of the
image, thus creating illusion of smooth disappearing edge.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
 
{
#define BEVEL_SOLID_INLINE  (0x01&lt;&lt;0)
    ASFlagType type ;                /* reserved for future use */

    /* primary &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  colors */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
   hi_color ;      /* top and left side &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
   lo_color ;      /* bottom and right side &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  */        

    /* these will be placed in the corners */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
   hihi_color ;    /* &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the top-left corner */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
   hilo_color ;    /* &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the top-right and 
                             * bottom-left corners */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
   lolo_color ;    /* &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the bottom-right corner */

    /* outlines define size of the line drawn around the image */
    unsigned short left_outline ; 
    unsigned short top_outline ;
    unsigned short right_outline ; 
    unsigned short bottom_outline ;
    /* inlines define size of the semitransparent line drawn 
     * inside the image */
    unsigned short left_inline ;
    unsigned short top_inline ;
    unsigned short right_inline ;
    unsigned short bottom_inline ;
}&nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASImageDecoder"><UL><B>libAfterImage/ASImageDecoder</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageDecoder"></A><B>ASImageDecoder</B><P class="dense">describes the status of reading any particular &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 ,
as well as providing detail on how it should be done.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  works as an abstraction layer and as the way to
automate several operations. Most of the transformations in
&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  are performed as operations on &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  data
structure, that holds all or some of the channels of single image
scanline. In order to automate data extraction from &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  into
&nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  has been designed.

It has following features :
1) All missing scanlines, or channels of scanlines will be filled with
supplied back_color
2) It is possible to leave out some channels of the image, extracting
only subset of channels. It is done by setting only needed flags in
filter member.
3) It is possible to extract &nbsp;<? local_doc_url("visualdoc.php","sub","blender#sub_scanlines()",$srcunset,$subunset) ?>
 -image of the image by setting offset_x
and offset_y to top-left corner of &nbsp;<? local_doc_url("visualdoc.php","sub","blender#sub_scanlines()",$srcunset,$subunset) ?>
 -image, out_width - to width of
the &nbsp;<? local_doc_url("visualdoc.php","sub","blender#sub_scanlines()",$srcunset,$subunset) ?>
 -image and calling decode_image_scanline method as many times
as height of the &nbsp;<? local_doc_url("visualdoc.php","sub","blender#sub_scanlines()",$srcunset,$subunset) ?>
 -image.
4) It is possible to apply &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to extracted &nbsp;<? local_doc_url("visualdoc.php","sub","blender#sub_scanlines()",$srcunset,$subunset) ?>
 -image, by setting
&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  member to specific &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
  structure.

Extracted Scanlines will be stored in buffer and it will be updated
after each call to decode_image_scanline().
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

/* low level driver (what data to use - native, XImage or ARGB): */
typedef void (*decode_asscanline_func)( struct &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  *imdec, 
                                        unsigned int skip, int y );
/* high level driver (bevel or not bevel): */
typedef void (*decode_image_scanline_func)
                (struct &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  *imdec);

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
 
{
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
        *asv;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
         *im ;
    ASFlagType      filter;      /* flags that mask &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of 
                                  * channels to be extracted 
                                  * from the image */

    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
           back_color;  /* we &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  missing scanlines 
                                  * with this default - black*/
    unsigned int    offset_x,    /* left margin on source image 
                                  * before which we skip everything */
                    out_width;   /* actual length of the output 
                                  * scanline */
    unsigned int    offset_y,    /* top margin */
                    out_height;
    &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
     *&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
 ;      /* &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to wrap everything 
                                  * around with */

    /* offsets of the drawn &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  baseline on resulting image : */
    int            bevel_left, bevel_top, 
                    bevel_right, bevel_bottom ;

    /* scanline buffer containing current scanline */
    &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
       buffer; /* matches the out_width */

    /* internal data : */
    unsigned short   bevel_h_addon, bevel_v_addon ;
    int             next_line ;

    &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
    *xim_buffer; /* matches the size of the 
                               * original XImage */

    decode_asscanline_func     decode_asscanline ;
    decode_image_scanline_func decode_image_scanline ;
}&nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/quality"><UL><B>libAfterImage/asimage/quality</B><br></A><LI><B>FUNCTION</B><br><PRE>Defines level of output quality/speed ratio
</PRE></LI><LI><B>NAME</B><br>
<A NAME="ASIMAGE_QUALITY_POOR"></A><B>ASIMAGE_QUALITY_POOR</B><P class="dense">there will be no dithering and interpolation used 
while transforming 
</P>
<A NAME="ASIMAGE_QUALITY_FAST"></A><B>ASIMAGE_QUALITY_FAST</B><P class="dense">there will be no dithering and used while 
transforming but interpolation will be used.
</P>
<A NAME="ASIMAGE_QUALITY_GOOD"></A><B>ASIMAGE_QUALITY_GOOD</B><P class="dense">simplified dithering is performed in addition to 
interpolation.
</P>
<A NAME="ASIMAGE_QUALITY_TOP"></A><B>ASIMAGE_QUALITY_TOP</B><P class="dense">full dithering and interpolation.
</P>
<A NAME="ASIMAGE_QUALITY_DEFAULT"></A><B>ASIMAGE_QUALITY_DEFAULT</B><P class="dense">requests current default setting  - typically
same as ASIMAGE_QUALITY_GOOD.
</P>
<A NAME="MAX_GRADIENT_DITHER_LINES"></A><B>MAX_GRADIENT_DITHER_LINES</B><P class="dense">defines number of lines to use for dithering,
while rendering gradients, in order to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  smooth effect. Higher 
number will slow things down, but will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  better gradients.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define ASIMAGE_QUALITY_POOR    0
#define ASIMAGE_QUALITY_FAST    1
#define ASIMAGE_QUALITY_GOOD    2
#define ASIMAGE_QUALITY_TOP     3
#define ASIMAGE_QUALITY_DEFAULT -1

#define MAX_GRADIENT_DITHER_LINES   ASIMAGE_QUALITY_TOP+1
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/ASImageOutput"><UL><B>libAfterImage/asimage/ASImageOutput</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageOutput"></A><B>ASImageOutput</B><P class="dense">describes the output state of the transformation result.
It is used to transparently write results into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  or XImage with
different levels of quality.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  allows for transformation result to be stored in both
&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  ( useful for long term storage and subsequent processing )
and XImage ( useful for transfer of the result onto the X Server).
At the same time there are 4 different quality levels of output
implemented. They differ in the way special technics, like error
diffusion and interpolation are applyed, and allow for fine grained
selection of quality/speed ratio. ASIMAGE_QUALITY_GOOD should be good
enough for most applications.
The following additional output features are implemented :
1) Filling of the missing channels with supplied values.
2) Error diffusion to improve quality while converting from internal
      24.8 format to 8 bit format.
3) Tiling of the output. If tiling_step is greater then 0, then each
      scanlines will be copied into lines found tiling_step one from
      another, upto the edge of the image.
4) Reverse order of output. Output image will be mirrored along y
      axis &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  bottom_to_top is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to True.
</PRE></LI><LI><B>NOTES</B><br><PRE>The output_image_scanline method should be called for each scanline
to be stored. Convenience functions listed below should be used to
safely alter state of the output instead of direct manipulation of
the data members. (makes you pity you don't write in C++ doesn't it ?)

Also There is a trick in the way how output_image_scanline handles
empty scanlines while writing &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . If back_color of empty scanline
matches back_color of &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  - then particular line is erased!
If back_colors are same - then particular line of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  gets filled
with the back_color of &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 . First approach is usefull when
resulting image will be used in subsequent call to merge_layers - in
such case knowing back_color of image is good enough and we don't need
to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  lines with the same &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . In case where &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  will be
converted into Pixmap/XImage - second approach is preferable, since
that conversion does not take into consideration image's back &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  -
we may want to change it in the future.

</PRE></LI><LI><B>SEE ALSO</B><br><PRE>start_image_output()
set_image_output_back_color()
toggle_image_output_direction()
stop_image_output()
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef void (*encode_image_scanline_func)( struct &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  *imout,
                                            &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *to_store );
typedef void (*output_image_scanline_func)( struct &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  *,
                                            &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *, int );

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
 
{
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
         *asv;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
          *im ;
    &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
    out_format ;
    CARD32           chan_fill[4];
    int              buffer_shift;  /* -1 means - buffer is empty,
                                     * 0 - no shift,
                                     * 8 - use 8 bit precision */
    int              next_line ;    /* next scanline to be written */
    unsigned int     tiling_step;   /* each line written will be 
                                     * repeated with this step until 
                                     * we exceed image size */
    unsigned int     tiling_range;  /* Limits region in which we need 
                                     * to &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
 . If &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0 then image 
                                     * height is used */
    int              bottom_to_top; /* -1 &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  we should output in
                                     * bottom to top order, 
                                     * +1 otherwise*/

    int              quality ;      /* see above */

    output_image_scanline_func
        output_image_scanline ;  /* high level interface - division,
                                  * error diffusion as well 
                                  * as encoding */
    encode_image_scanline_func
        encode_image_scanline ;  /* low level interface - 
                                  * encoding only */

    /* internal data members : */
    &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
        buffer[2], *used, *available;
}&nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/start_image_decoding()"><UL><B>libAfterImage/asimage/start_image_decoding()</B><br></A><LI><B>NAME</B><br>
<A NAME="start_image_decoding()"></A><B>start_image_decoding()</B><P class="dense">- allocates and initializes decoder structure.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  *start_image_decoding( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im,
                                      ASFlagType filter,
                                      int offset_x, int offset_y,
                                      unsigned int out_width,
                                      unsigned int out_height,
                                      &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
  *&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure ( needed mostly
            to see &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  we are in BGR mode or not );
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  we are going to decode;
</DD><DT class="dense"><B>filter</B></DT><DD class="dense">- bitmask where &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  bits mark channels that has to be
            decoded.
</DD><DT class="dense"><B>offset_x</B></DT><DD class="dense">- left margin inside im, from which we should &nbsp;<? local_doc_url("visualdoc.php","start","imencdec#start_image_decoding()",$srcunset,$subunset) ?>
 
            reading pixel data, effectively clipping source image.
</DD><DT class="dense"><B>offset_y</B></DT><DD class="dense">- top margin inside im, from which we should &nbsp;<? local_doc_url("visualdoc.php","start","imencdec#start_image_decoding()",$srcunset,$subunset) ?>
 
            reading scanlines, effectively clipping source image.
            Note that when edge of the image is reached,
            subsequent requests for scanlines will wrap around to
            the top of the image, and not offset_y.
</DD><DT class="dense"><B>out_width-</B></DT><DD class="dense">width of the scanline needed. If it is larger then
            source image - then image data will be tiled in it.
            If it is smaller - then image data will be clipped.
</DD><DT class="dense"><B>out_height</B></DT><DD class="dense">- height of the output drawable. -1 means that same as
         image height. &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  out_height is greater then image height,
         then image will be tiled.
</DD><DT class="dense"><B>bevel</B></DT><DD class="dense">- NULL or pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
  structure &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
            decoded data should be overlayed with &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  at the
            time of decoding.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>start_image_decoding() returns pointer to newly allocated
&nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  structure on success, NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Normal process of reading image data from &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  consists of
3 steps :
1) &nbsp;<? local_doc_url("visualdoc.php","start","imencdec#start_image_decoding()",$srcunset,$subunset) ?>
  decoding by calling start_image_decoding.
2) call decode_image_scanline() method of returned structure, for
each scanline upto desired height of the target image. Decoded data
will be returned in buffer member of the &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  structure.
3) finish decoding and deallocated all the used memory by calling
stop_image_decoding()
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/set_decoder_bevel_geom()"><UL><B>libAfterImage/asimage/set_decoder_bevel_geom()</B><br></A><LI><B>NAME</B><br>
<A NAME="set_decoder_bevel_geom()"></A><B>set_decoder_bevel_geom()</B><P class="dense">- changes default placement of the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  on 
decoded image. 
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void set_decoder_bevel_geom( &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  *imdec, int x, int y,
                             unsigned int width, unsigned int height );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imdec</B></DT><DD class="dense">- pointer to pointer to structure, previously created
          by start_image_decoding.
</DD><DT class="dense"><B>x,y</B></DT><DD class="dense">- left top position of the inner border of the Bevel outline
          as related to the origin of subimage being decoded.
</DD><DT class="dense"><B>width,</B></DT><DD class="dense"></DD><DT class="dense"><B>height</B></DT><DD class="dense">- widtha and height of the inner border of the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  outline.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>For example &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you only need to render small part of the button, that 
is being rendered from transparency image.
NOTE
This call modifies bevel_h_addon and bevel_v_addon of
&nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  structure.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/set_decoder_shift()"><UL><B>libAfterImage/asimage/set_decoder_shift()</B><br></A><LI><B>NAME</B><br>
<A NAME="set_decoder_shift()"></A><B>set_decoder_shift()</B><P class="dense">- changes the shift &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of decoder - 8 or 0.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void set_decoder_shift( &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  *imdec, int shift );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imdec</B></DT><DD class="dense">- pointer to pointer to structure, previously created
           by start_image_decoding.
</DD><DT class="dense"><B>shift</B></DT><DD class="dense">- new &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to be used as the shift while decoding image.
          valid values are 8 and 0.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>This function should be used instead of directly modifyeing &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of
shift memebr of &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  structure.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/set_decoder_back_color()"><UL><B>libAfterImage/asimage/set_decoder_back_color()</B><br></A><LI><B>NAME</B><br>
<A NAME="set_decoder_back_color()"></A><B>set_decoder_back_color()</B><P class="dense">- changes the back &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  to be used while
decoding the image.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void set_decoder_back_color( &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  *imdec, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  back_color );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imdec</B></DT><DD class="dense">- pointer to pointer to structure, previously created
             by start_image_decoding.
</DD><DT class="dense"><B>back_color</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to be used as the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  to
             &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  empty spaces in decoded &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>This function should be used instead of directly modifyeing &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of
back_color memebr of &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  structure.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/stop_image_decoding()"><UL><B>libAfterImage/asimage/stop_image_decoding()</B><br></A><LI><B>NAME</B><br>
<A NAME="stop_image_decoding()"></A><B>stop_image_decoding()</B><P class="dense">- finishes decoding, frees all allocated
memory.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void stop_image_decoding( &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  **pimdec );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>pimdec</B></DT><DD class="dense">- pointer to pointer to structure, previously created
            by start_image_decoding.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pimdec  - pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
  will be reset to NULL.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>start_image_decoding()
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/start_image_output()"><UL><B>libAfterImage/asimage/start_image_output()</B><br></A><LI><B>NAME</B><br>
<A NAME="start_image_output()"></A><B>start_image_output()</B><P class="dense">- initializes output structure
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  *start_image_output ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                                    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im,
                                    &nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
  format,
                                    int shift, int quality );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- destination &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>format</B></DT><DD class="dense">- indicates that output should be written into alternative
           format, such as supplied XImage, &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  array etc.
</DD><DT class="dense"><B>shift</B></DT><DD class="dense">- precision of scanline data. Supported values are 0 - no
           precision, and 8 - 24.8 precision. Value of that argument
           defines by how much scanline data is shifted rightwards.
</DD><DT class="dense"><B>quality</B></DT><DD class="dense">- what algorithms should be used while writing data out, i.e.
           full error diffusion, fast error diffusion, no error
           diffusion.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>start_image_output() creates and initializes new &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
 
structure based on supplied parameters. Created structure can be
subsequently used to write scanlines into destination image.
It is effectively hiding differences of XImage and &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  and other
available output formats.
outpt_image_scanline() method of the structure can be used to write
out single scanline. Each written scanlines moves internal pointer to
the next image line, and possibly writes several scanlines at once &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
tiling_step member is not 0.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/set_image_output_back_color()"><UL><B>libAfterImage/asimage/set_image_output_back_color()</B><br></A><LI><B>NAME</B><br>
<A NAME="set_image_output_back_color()"></A><B>set_image_output_back_color()</B><P class="dense">- changes &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of output
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void set_image_output_back_color ( &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  *imout,
                                   &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  back_color );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imout</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  structure, previously created with
              start_image_output();
</DD><DT class="dense"><B>back_color</B></DT><DD class="dense">- new &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  in ARGB format. This &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
              will be used to &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  empty parts of outgoing scanlines.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimage/toggle_image_output_direction()"><UL><B>libAfterImage/asimage/toggle_image_output_direction()</B><br></A><LI><B>NAME</B><br>
<A NAME="toggle_image_output_direction()"></A><B>toggle_image_output_direction()</B><P class="dense">- reverses vertical direction of output
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void toggle_image_output_direction( &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  *imout );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imout</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  structure, previously created with
              start_image_output();
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>reverses vertical direction output. If previously scanlines has
been written from top to bottom, for example, after this function is
called they will be written in opposite direction. Current line does
not change, unless it points to the very first or the very last
image line. In this last case it will be moved to the opposing end of
the image.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/stop_image_output()"><UL><B>libAfterImage/asimage/stop_image_output()</B><br></A><LI><B>NAME</B><br>
<A NAME="stop_image_output()"></A><B>stop_image_output()</B><P class="dense">- finishes output, frees all the allocated memory.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void stop_image_output( &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  **pimout );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>pimout</B></DT><DD class="dense">- pointer to pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  structure,
              previously created with call to   start_image_output().
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pimout      - pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
  will be reset to NULL.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Completes image output process. Flushes all the internal buffers.
Deallocates all the allocated memory. Resets pointer to NULL to
avoid dereferencing invalid pointers.
</PRE></LI></UL>
