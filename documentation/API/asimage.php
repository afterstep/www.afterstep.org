&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASImage</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">internal structures and methods used for image manipulation in libAfterImage</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/asimage.h"><UL><B>libAfterImage/asimage.h</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage"></A><B>asimage</B><P class="dense">defines main structures and function for image manipulation.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  provides powerful functionality to load, &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
 
and &nbsp;<? local_doc_url("visualdoc.php","transform","transform#transform",$srcunset,$subunset) ?>
  images. It allows for smaller memory utilization by
utilizing run-length encoding of the image data. There could be
different levels of compression selected, allowing to choose best
speed/memory ratio.

</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Structures :
         &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
 

Functions :
         asimage_init(), asimage_start(), create_asimage(),
         clone_asimage(), destroy_asimage()

  ImageManager Reference counting and managing :
         create_image_manager(), destroy_image_manager(),
         store_asimage(), fetch_asimage(), query_asimage(),
         dup_asimage(), release_asimage(),
         release_asimage_by_name(), forget_asimage(),
         safe_asimage_destroy()

  Gradients helper functions :
         flip_gradient(), destroy_asgradient()

  Layers helper functions :
         init_image_layers(), create_image_layers(),
         destroy_image_layers()

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
<A NAME="libAfterImage/ASAltImFormats"><UL><B>libAfterImage/ASAltImFormats</B><br></A><LI><B>NAME</B><br>
<A NAME="ASAltImFormats"></A><B>ASAltImFormats</B><P class="dense">identifies what output format should be used for storing 
the transformation result. Also identifies what data is currently stored
in alt member of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef enum {
    ASA_ASImage = 0,
    ASA_XImage,
    ASA_MaskXImage,
    /* temporary XImages to be allocated from static pool of memory :*/
    ASA_ScratchXImage,  
    ASA_ScratchMaskXImage,
    
    ASA_ScratchXImageAndAlpha,

    ASA_ARGB32,
    ASA_Vector,       /* This cannot be used for transformation's result
                       * format */
    ASA_Formats
}&nbsp;<? local_doc_url("visualdoc.php","ASAltImFormats","asimage#ASAltImFormats",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASImage"><UL><B>libAfterImage/ASImage</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImage"></A><B>ASImage</B><P class="dense">is the main structure to hold image data.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>Images are stored internally split into ARGB channels, each split
into scanline. Actuall data is stored using ASStorage container. Inside
&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  data structure we only &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  IDs pointing to data in ASStorage
ASStorage implements reference counting, data compression, 
automatic memory defragmentation and other nice things.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE> asimage_init()
 asimage_start()
 create_asimage()
 destroy_asimage()
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

struct ASImageAlternative;
struct &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 ;

/* magic number identifying &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  data structure */
#define MAGIC_ASIMAGE            0xA3A314AE

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
{

  unsigned long magic ;

  unsigned int width, height;       /* size of the image in pixels */

  /* arrays of storage ids of stored scanlines of particular channel: */
  ASStorageID *alpha,
              *red,
              *green,
              *blue;
  
  ASStorageID *channels[IC_NUM_CHANNELS]; 
                                    /* merely a shortcut so we can
                                     * somewhat simplify code in loops */

  &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  back_color ;               /* &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the image, so
                                     * we could discard everything that
                                     * matches it, and then restore it
                                     * back. */

  struct ASImageAlternative
  {  /* alternative forms of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  storage : */
    XImage *&nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  ;                /* pointer to XImage created as the
                                     * result of transformations whenever
                                     * we request it to output into
                                     * XImage ( see to_xim parameter ) */
    XImage *mask_ximage ;           /* XImage of depth 1 that could be
                                     * used to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  mask of the image */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  *argb32 ;                /* array of widthxheight &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 
                                     * values */
    double *vector ;                /* scientific data that should be used
                                     * in conjunction with
                                     * ASScientificPalette to produce
                                     * actuall ARGB data */
  }alt;

  struct &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  *imageman;  /* &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  not null - then image could be
                                     * referenced by some other code */
  int                    ref_count ;/* this will tell us what us how many
                                     * times */

    
  char                  *name ;     /* readonly &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  of image name 
                                     * this name is a hash &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  used to 
                                     * &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  image in the image-man's hash,
                                     * and gets freed automagically on image 
                                     * removal from hash */

#define ASIM_DATA_NOT_USEFUL    (0x01&lt;&lt;0)
#define ASIM_VECTOR_TOP2BOTTOM  (0x01&lt;&lt;1)
#define ASIM_XIMAGE_8BIT_MASK   (0x01&lt;&lt;2)
#define ASIM_NO_COMPRESSION     (0x01&lt;&lt;3) /* Do not use compression to 
                                           * &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  some computation time
                                           */
#define ASIM_ALPHA_IS_BITMAP    (0x01&lt;&lt;4) 
#define ASIM_RGB_IS_BITMAP      (0x01&lt;&lt;5) 
#define ASIM_XIMAGE_NOT_USEFUL  (0x01&lt;&lt;6)
#define ASIM_NAME_IS_FILENAME   (0x01&lt;&lt;7)

  ASFlagType             flags ;    /* combination of the above flags */
  
} &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI>
<A NAME="libAfterImage/ASImageManager"><UL><B>libAfterImage/ASImageManager</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageManager"></A><B>ASImageManager</B><P class="dense">structure to be used to maintain &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of loaded images 
for given &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of search paths and gamma. Images are named and reference 
counted.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 
{
    ASHashTable  *image_hash ;
    /* misc stuff that may come handy : */
    char         *search_path[MAX_SEARCH_PATHS+1];
    double        gamma ;
}&nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL></UL>
<A NAME="libAfterImage/LIMITS"><UL><B>libAfterImage/LIMITS</B><br></A><LI><B>NAME</B><br>
<A NAME="MAX_IMPORT_IMAGE_SIZE"></A><B>MAX_IMPORT_IMAGE_SIZE</B><P class="dense">effectively limits size of the allowed
                            images to be loaded from files. That is
                            needed to be able to filter out corrupt files.
</P>
<A NAME="MAX_BEVEL_OUTLINE"></A><B>MAX_BEVEL_OUTLINE</B><P class="dense">Limit on &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  outline to be drawn around
                            the image.
</P>
<A NAME="MAX_SEARCH_PATHS"></A><B>MAX_SEARCH_PATHS</B><P class="dense">Number of search paths to be used while loading 
                            images from files.
</P><P class="dense"><div class="container"><PRE>
#define MAX_IMPORT_IMAGE_SIZE   8000
#define MAX_BEVEL_OUTLINE       100
#define MAX_SEARCH_PATHS        8      /* prudently limiting ourselfs */
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASVectorPalette"><UL><B>libAfterImage/ASVectorPalette</B><br></A><LI><B>NAME</B><br>
<A NAME="ASVectorPalette"></A><B>ASVectorPalette</B><P class="dense">contains pallette allowing us to map double values 
in vector image data into actuall ARGB values.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASVectorPalette","asimage#ASVectorPalette",$srcunset,$subunset) ?>
 
{
    unsigned int npoints ;
    double *points ;
    CARD16 *channels[IC_NUM_CHANNELS] ;   /* ARGB data for key points. */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
   default_color;
}&nbsp;<? local_doc_url("visualdoc.php","ASVectorPalette","asimage#ASVectorPalette",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/ASImageLayer"><UL><B>libAfterImage/asimage/ASImageLayer</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageLayer"></A><B>ASImageLayer</B><P class="dense">specifies parameters of the image superimposition.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  allows for simultaneous superimposition (overlaying) of
arbitrary number of images. To facilitate this &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structure
has been created in order to specify parameters of each image
participating in overlaying operation. Images need not to be exact
same size. For each image its position on destination is specified
via dst_x and dst_y data members. Each image maybe tiled and clipped
to fit into rectangle specified by clip_x, clip_y, clip_width,
clip_height ( in image coordinates - not destination ). If image is
missing, then area specified by dst_x, dst_y, clip_width, clip_height
will be filled with solid_color.
Entire image will be tinted using &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  parameter prior to overlaying.
Bevel specified by &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  member will be drawn over image prior to
overlaying. Specific &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
  method has to be specified.
merge_scanlines method is pointer to a function,
that accepts 2 ASScanlines as arguments and performs overlaying of
first one with the second one.
There are 15 different merge_scanline methods implemented in
&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 , including alpha-blending, tinting, averaging,
HSV and HSL &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
  operations, etc.
</PRE></LI><LI><B>NOTES</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  s could be organized into chains using next pointers.
Since there could be a need to rearrange layers and maybe bypass some
layers - we need to provide for flexibility, while at the same time
allowing for simplicity of arrays. As the result next pointers could
be used to link together continuous arrays of layer, like so :
array1: [layer1(next==NULL)][layer2(next!=NULL)]
         ____________________________|
         V
array2: [layer3(next==NULL)][layer4(next==NULL)][layer5(next!=NULL)]
         ________________________________________________|
         V
array3: [layer6(next==NULL)][layer7(next==layer7)]
                               ^______|

While iterating throught such a &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  we check for two conditions -
exceeding count of layers and layer pointing to self. When any of
that is met - we stopping iteration.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>merge_layers()
&nbsp;<? local_doc_url("visualdoc.php","blender","blender#blender",$srcunset,$subunset) ?>
 .h
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 
{
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im;
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
    solid_color ;              /* If im == NULL, then &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
 
                                         * the area with this &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . */

    int dst_x, dst_y;                   /* placement in overall
                                         * composition */

    /* clip area could be partially outside of the image -
     * image gets tiled in it */
    int clip_x, clip_y;
    unsigned int clip_width, clip_height;

    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  ;                       /* &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  0 - no &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  */
    struct &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
  *&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  ;        /* border to wrap layer with
                                         * (for buttons, etc.)*/

    /* &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  image is clipped then we need to specify offsets of &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  as
     * related to clipped rectangle. Normally it should be :
     * 0, 0, im-&gt;width, im-&gt;height. And &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  width/height left 0 - it will
     * default to this values. Note that clipped image MUST be entirely
     * inside the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  rectangle. !!!*/
    int bevel_x, bevel_y;
    unsigned int bevel_width, bevel_height;

    int merge_mode ;                        /* reserved for future use */
    merge_scanlines_func merge_scanlines ;  /* &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
  method */
    struct &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  *next;              /* optional pointer to next
                                             * layer. If it points to
                                             * itself - then end of the
                                             * chain.*/
    void *data;                             /* hook to hung data on */
}&nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/GRADIENT_TYPE_flags"><UL><B>libAfterImage/asimage/GRADIENT_TYPE_flags</B><br></A><LI><B>FUNCTION</B><br><PRE>Combination of this flags defines the way &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  is rendered.
</PRE></LI><LI><B>NAME</B><br>
<A NAME="GRADIENT_TYPE_DIAG"></A><B>GRADIENT_TYPE_DIAG</B><P class="dense">when &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  it will cause &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 's direction to be 
rotated by 45 degrees
</P>
<A NAME="GRADIENT_TYPE_ORIENTATION"></A><B>GRADIENT_TYPE_ORIENTATION</B><P class="dense">will cause &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  direction to be rotated 
by 90 degrees. When combined with GRADIENT_TYPE_DIAG - rotates &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  
direction by 135 degrees.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define GRADIENT_TYPE_DIAG          (0x01&lt;&lt;0)
#define GRADIENT_TYPE_ORIENTATION   (0x01&lt;&lt;1)
#define GRADIENT_TYPE_MASK          (GRADIENT_TYPE_ORIENTATION| \
                                     GRADIENT_TYPE_DIAG)
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/GRADIENT_TYPE"><UL><B>libAfterImage/asimage/GRADIENT_TYPE</B><br></A><LI><B>FUNCTION</B><br><PRE>This are named combinations of above flags to define type of &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>NAME</B><br>
<A NAME="GRADIENT_Left2Right"></A><B>GRADIENT_Left2Right</B><P class="dense">normal left-to-right &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
</P>
<A NAME="GRADIENT_TopLeft2BottomRight"></A><B>GRADIENT_TopLeft2BottomRight</B><P class="dense">diagonal top-left to bottom-right.
</P>
<A NAME="GRADIENT_Top2Bottom"></A><B>GRADIENT_Top2Bottom</B><P class="dense">vertical top to bottom &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
</P>
<A NAME="GRADIENT_BottomLeft2TopRight"></A><B>GRADIENT_BottomLeft2TopRight</B><P class="dense">diagonal bottom-left to top-right.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define GRADIENT_Left2Right             0
#define GRADIENT_TopLeft2BottomRight    GRADIENT_TYPE_DIAG
#define GRADIENT_Top2Bottom             GRADIENT_TYPE_ORIENTATION
#define GRADIENT_BottomLeft2TopRight    (GRADIENT_TYPE_DIAG| \
                                         GRADIENT_TYPE_ORIENTATION)
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASGradient"><UL><B>libAfterImage/ASGradient</B><br></A><LI><B>NAME</B><br>
<A NAME="ASGradient"></A><B>ASGradient</B><P class="dense">describes how &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  is to be drawn.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  includes functionality to &nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  multipoint gradients in
4 different directions left-&gt;right, top-&gt;bottom and diagonal
lefttop-&gt;rightbottom and bottomleft-&gt;topright. Each &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  described
by type, number of colors (or anchor points), ARGB values for each
&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  and offsets of each point from the beginning of &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  in
fractions of entire length. There should be at least 2 anchor points.
very first point should have offset of 0. and last point should have
offset of 1. Gradients are drawn in ARGB &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
 , so it is possible
to have semitransparent gradients.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>make_gradient()
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
 
{
    int         type;     /* see GRADIENT_TYPE above */
    
    int         npoints;  /* number of anchor points */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
      *&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 ;    /* ARGB &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  values for each anchor point*/
    double     *offset;   /* offset of each point from the beginning in
                           * fractions of entire length */
}&nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/flip"><UL><B>libAfterImage/asimage/flip</B><br></A><LI><B>FUNCTION</B><br><PRE>This are flags that define rotation angle.
</PRE></LI><LI><B>NAME</B><br>
<A NAME="FLIP_VERTICAL"></A><B>FLIP_VERTICAL</B><P class="dense">defines rotation of 90 degrees counterclockwise.
</P>
<A NAME="FLIP_UPSIDEDOWN"></A><B>FLIP_UPSIDEDOWN</B><P class="dense">defines rotation of 180 degrees counterclockwise.
combined they define rotation of 270 degrees counterclockwise.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define FLIP_VERTICAL       (0x01&lt;&lt;0)
#define FLIP_UPSIDEDOWN     (0x01&lt;&lt;1)
#define FLIP_MASK           (FLIP_UPSIDEDOWN|FLIP_VERTICAL)
</PRE></div><br></p></LI>
<A NAME="libAfterImage/asimage/flip_gradient()"><UL><B>libAfterImage/asimage/flip_gradient()</B><br></A><LI><B>NAME</B><br>
<A NAME="flip_gradient()"></A><B>flip_gradient()</B><P class="dense">- rotates &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  in 90 degree increments.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  *flip_gradient( &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  *orig, int &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>orig</B></DT><DD class="dense">- pointer to original &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  structure to be rotated.
</DD><DT class="dense"><B>flip</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  defining desired rotation.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Same as original &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  is 0. New &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  structure in any
other case.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Rotates ( flips ) &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  data in 90 degree increments. When needed
order of points is reversed.
</PRE></LI></UL></UL>
<A NAME="libAfterImage/asimage/tint"><UL><B>libAfterImage/asimage/tint</B><br></A><LI><B>FUNCTION</B><br><PRE>We use 32 bit ARGB values to define how tinting should be done.
The formula for tinting particular channel data goes like that:
tinted_data = (image_data * tint)/128
So &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  channel &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  is greater then 127 - same channel will be
brighter in destination image; &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is lower then 127 - same channel
will be darker in destination image. Tint channel &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of 127
( or 0x7F hex ) does not change anything.
Alpha channel is tinted as well, allowing for creation of
semitransparent images. Calculations are performed in 24.8 format -
with 8 bit precision. Result is saturated to avoid overflow, and
precision is carried over to next pixel ( error diffusion ), when con
verting 24.8 to 8 bit format.
</PRE></LI><LI><B>NAME</B><br>
<A NAME="TINT_NONE"></A><B>TINT_NONE</B><P class="dense">special &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  that disables tinting
</P>
<A NAME="TINT_LEAVE_SAME"></A><B>TINT_LEAVE_SAME</B><P class="dense">also disables tinting.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define TINT_NONE           0
#define TINT_LEAVE_SAME     (0x7F7F7F7F)
#define TINT_HALF_DARKER    (0x3F3F3F3F)
#define TINT_HALF_BRIGHTER  (0xCFCFCFCF)
#define TINT_RED            (0x7F7F0000)
#define TINT_GREEN          (0x7F007F00)
#define TINT_BLUE           (0x7F00007F)
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/compression"><UL><B>libAfterImage/asimage/compression</B><br></A><LI><B>FUNCTION</B><br><PRE>Defines the level of compression to attempt on &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  scanlines.
</PRE></LI><LI><B>NAME</B><br>
<A NAME="ASIM_COMPRESSION_NONE"></A><B>ASIM_COMPRESSION_NONE</B><P class="dense">defined as 0 - disables compression.
</P>
<A NAME="ASIM_COMPRESSION_FULL"></A><B>ASIM_COMPRESSION_FULL</B><P class="dense">defined as 100 - highest compression level.
Anything in between 0 and 100 will cause only part of the scanline to 
be compressed. 
This is obsolete. Now all images are compressed &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  possible.
</P></LI></UL>
<A NAME="libAfterImage/asimage/asimage_init()"><UL><B>libAfterImage/asimage/asimage_init()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage_init()"></A><B>asimage_init()</B><P class="dense">frees datamembers of the supplied &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure, and
    initializes it to all 0.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void asimage_init (ASImage * im, Bool free_resources);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>free_resources</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True will &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  function attempt to &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
 
                 all non-NULL pointers.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimage/flush_asimage_cache()"><UL><B>libAfterImage/asimage/flush_asimage_cache()</B><br></A><LI><B>NAME</B><br>
<A NAME="flush_asimage_cache()"></A><B>flush_asimage_cache()</B><P class="dense">destroys XImage and mask XImage kept from previous 
conversions to/from X Pixmap.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void flush_asimage_cache (ASImage * im );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimage/asimage_start()"><UL><B>libAfterImage/asimage/asimage_start()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage_start()"></A><B>asimage_start()</B><P class="dense">Allocates memory needed to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  scanline of the image 
of supplied size. Assigns all the data members valid values. Makes sure 
that &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure is ready to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  image data.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void asimage_start (ASImage * im, unsigned int width,
                                  unsigned int height,
                                  unsigned int compression);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>width</B></DT><DD class="dense">- width of the image
</DD><DT class="dense"><B>height</B></DT><DD class="dense">- height of the image
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- level of compression to perform on image data.
              compression has to be in range of 0-100 with 100
              signifying highest level of compression.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>In order to resize &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure after asimage_start() has been
called, asimage_init() must be invoked to &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  all the memory, and
then asimage_start() has to be called with new dimensions.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/create_asimage()"><UL><B>libAfterImage/asimage/create_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_asimage()"></A><B>create_asimage()</B><P class="dense">Performs memory allocation for the new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  
structure, as well as initialization of allocated structure based on 
supplied parameters.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *create_asimage( unsigned int width,
                         unsigned int height,
                         unsigned int compression);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>width</B></DT><DD class="dense">- desired image width
</DD><DT class="dense"><B>height</B></DT><DD class="dense">- desired image height
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- compression level in new ASImage( see asimage_start()
              for more ).
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to newly allocated and initialized &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure on
Success. NULL in case of any kind of error - that should never happen.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/clone_asimage()"><UL><B>libAfterImage/asimage/clone_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="clone_asimage()"></A><B>clone_asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *clone_asimage(ASImage *src, ASFlagType filter );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>src</B></DT><DD class="dense">- original &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>filter</B></DT><DD class="dense">- bitmask of channels to be copied from one image to another.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>New &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , as a &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  of original image.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Creates exact &nbsp;<? local_doc_url("visualdoc.php","clone","asimage#clone_asimage()",$srcunset,$subunset) ?>
  of the original &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , with same compression,
back_color and rest of the attributes. Only &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  data will be
carried over. Any attached alternative forms of images (XImages, etc.)
will not be copied. Any channel with unset bit in filter will not be
copied. Image name, &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  and ref_count will not be copied -
use store_asimage() afterwards and &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  sure you use different name,
to avoid clashes with original image.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/destroy_asimage()"><UL><B>libAfterImage/asimage/destroy_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="destroy_asimage()"></A><B>destroy_asimage()</B><P class="dense">frees all the memory allocated for specified &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . 
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void destroy_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  **im );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>If there was XImage attached to it - it will be deallocated as well.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>asview.c: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/asimage_replace()"><UL><B>libAfterImage/asimage/asimage_replace()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage_replace()"></A><B>asimage_replace()</B><P class="dense">will replace &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 's data using data from 
another &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool asimage_replace (ASImage *im, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *from);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>from</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  from which to take the data.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>this function updates image without reallocating structure itself, which 
means that all pointers to it will still be valid. If that function 
succeeds - [from] &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  will become unusable and should be deallocated 
using free() call.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/set_asimage_vector()"><UL><B>libAfterImage/asimage/set_asimage_vector()</B><br></A><LI><B>NAME</B><br>
<A NAME="set_asimage_vector()"></A><B>set_asimage_vector()</B><P class="dense">This function replaces contents of the vector 
member of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure with new double precision data.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>set_asimage_vector( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, register double *vector );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>vector</B></DT><DD class="dense">- scientific data to attach to the image.
</DD></DL></LI><LI><B>NOTES</B><br><PRE>Data must have size of width*height ahere width and height are size of 
the &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/vectorize_asimage()"><UL><B>libAfterImage/asimage/vectorize_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="vectorize_asimage()"></A><B>vectorize_asimage()</B><P class="dense">This function replaces contents of the vector 
member of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure with new double precision data, generated 
from native &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  image contents. Color palette is generated by 
indexing &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  values using max_colors, dither and opaque_threshold 
parameters.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASVectorPalette","asimage#ASVectorPalette",$srcunset,$subunset) ?>
 * vectorize_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, 
                                    unsigned int max_colors, 
                                    unsigned int dither,  
                                    int opaque_threshold );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>max_colors</B></DT><DD class="dense">- maximum size of the &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>dither</B></DT><DD class="dense">- number of bits to strip off the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  data ( 0...7 )
</DD><DT class="dense"><B>opaque_threshold</B></DT><DD class="dense">- alpha channel threshold at which pixel should be
                   treated as opaque
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to the &nbsp;<? local_doc_url("visualdoc.php","ASVectorPalette","asimage#ASVectorPalette",$srcunset,$subunset) ?>
  structure that could be used for 
reverse conversion from double values to &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 . 
</PRE></LI><LI><B>NOTES</B><br><PRE>alt.vector member of the supplied &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  will be replaced and will 
contain WIDTHxHEIGHT double values representing generated scientific 
data.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/create_image_manager()"><UL><B>libAfterImage/asimage/create_image_manager()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_image_manager()"></A><B>create_image_manager()</B><P class="dense">&nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  management and reference 
counting object.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  *create_image_manager( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  *reusable_memory,
                                      double gamma, ... );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>reusable_memory</B></DT><DD class="dense">- optional pointer to a block of memory to be used to
                  &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object.
</DD><DT class="dense"><B>double</B></DT><DD class="dense">gamma    - &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of gamma correction to be used while loading
                  images from files.
</DD><DT class="dense"><B>...</B></DT><DD class="dense">- NULL terminated &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of up to 8 PATH strings to &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
 
                  locations at which images could be found.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Creates &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object in memory and initializes it with
requested gamma &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  and PATH &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
 . This Object will contain a hash
table referencing all the loaded images. When such object is used while
loading images from the file - gamma and PATH values will be used, so
that all the loaded and referenced images will have same parameters.
File name will be used as the image name, and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  same file is attempted
to be loaded again - instead reference will be incremented, and
previously loaded image will be retyrned. All the images stored in
&nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's table will contain a back pointer to it, and they must
be deallocated only by calling release_asimage(). destroy_asimage() will
refuse to deallocate such an image.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/destroy_image_manager()"><UL><B>libAfterImage/asimage/destroy_image_manager()</B><br></A><LI><B>NAME</B><br>
<A NAME="destroy_image_manager()"></A><B>destroy_image_manager()</B><P class="dense">&nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  management obejct.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void destroy_image_manager( struct &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  *imman, 
                               Bool reusable );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imman</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object to be deallocated
</DD><DT class="dense"><B>reusable</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True, then memory that holds object itself will
                  not be deallocated. Usefull when object is created
                  on stack.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Destroys all the referenced images, PATH values and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  reusable is False,
also deallocates object's memory.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/store_asimage()"><UL><B>libAfterImage/asimage/store_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="store_asimage()"></A><B>store_asimage()</B><P class="dense">&nbsp;<? local_doc_url("visualdoc.php","add","blender#add_scanlines()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  to the reference.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool store_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 * imageman, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, 
                       const char *name );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imageman</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object.
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to the image to be stored.
</DD><DT class="dense"><B>name</B></DT><DD class="dense">- unique name of the image.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Adds specifyed image to the &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of referenced images.
Stored &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  could be deallocated only by release_asimage(), or when
&nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object itself is destroyed.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/relocate_asimage()"><UL><B>libAfterImage/asimage/relocate_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="relocate_asimage()"></A><B>relocate_asimage()</B><P class="dense">&nbsp;<? local_doc_url("visualdoc.php","relocate","asimage#relocate_asimage()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  into a different image manager.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void     relocate_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 * to_imageman, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>to_imageman</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object.
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to the image to be stored.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Moves image from one &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of referenced images into 
another &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 . Reference count will be kept the same.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/fetch_asimage()"><UL><B>libAfterImage/asimage/fetch_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="fetch_asimage()"></A><B>fetch_asimage()</B><P class="dense"></P>
<A NAME="query_asimage()"></A><B>query_asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *fetch_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 * imageman, const char *name );
&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *query_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 * imageman, const char *name );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imageman</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object.
</DD><DT class="dense"><B>name</B></DT><DD class="dense">- unique name of the image.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Looks for image with the name in &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  found,
returns pointer to it. Note that query_asimage() does not increment 
reference count, while fetch_asimage() does. Therefore &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  fetch_asimage()
is used - release_asimage() should be called , when image is no longer 
in use.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/dup_asimage()"><UL><B>libAfterImage/asimage/dup_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="dup_asimage()"></A><B>dup_asimage()</B><P class="dense">increment reference count of stored &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *dup_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 * im );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to already referenced image.
</DD></DL></LI></UL>
<A NAME="libAfterImage/asimage/release_asimage()"><UL><B>libAfterImage/asimage/release_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="release_asimage()"></A><B>release_asimage()</B><P class="dense">decrement reference count for given &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . 
</P>
<A NAME="release_asimage_by_name()"></A><B>release_asimage_by_name()</B><P class="dense">decrement reference count for &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  
identifyed by its name. 
</P></LI><LI><B>SYNOPSIS</B><br><PRE>int release_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im );
int release_asimage_by_name( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  *imman, char *name );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to already referenced image.
</DD><DT class="dense"><B>imageman</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object.
</DD><DT class="dense"><B>name</B></DT><DD class="dense">- unique name of the image.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Decrements reference count on the &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  object and destroys it &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
reference count is below zero.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/forget_asimage()"><UL><B>libAfterImage/asimage/forget_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="forget_asimage()"></A><B>forget_asimage()</B><P class="dense">remove &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  from &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's hash by pointer.
</P>
<A NAME="forget_asimage_name()"></A><B>forget_asimage_name()</B><P class="dense">remove &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  from &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's hash by its 
name.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void     forget_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im );
void  forget_asimage_name( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  *imman, const char *name );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">pointer to already referenced image.
</DD><DT class="dense"><B>imageman</B></DT><DD class="dense">pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  object.
</DD><DT class="dense"><B>name</B></DT><DD class="dense">unique name of the image.
</DD></DL></LI></UL>
<A NAME="libAfterImage/safe_asimage_destroy()"><UL><B>libAfterImage/safe_asimage_destroy()</B><br></A><LI><B>NAME</B><br>
<A NAME="safe_asimage_destroy()"></A><B>safe_asimage_destroy()</B><P class="dense">either &nbsp;<? local_doc_url("visualdoc.php","release","asimagexml#release",$srcunset,$subunset) ?>
  or &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","asimage","asimage#asimage",$srcunset,$subunset) ?>
 , checking
&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is attached to &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 .
</P></LI><LI><B>SYNOPSIS</B><br><PRE>int      safe_asimage_destroy( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">pointer to and &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI></UL>
<A NAME="libAfterImage/print_asimage_manager()"><UL><B>libAfterImage/print_asimage_manager()</B><br></A><LI><B>NAME</B><br>
<A NAME="print_asimage_manager()"></A><B>print_asimage_manager()</B><P class="dense">prints &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of images referenced in given 
&nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  structure.
</P></LI></UL>
<A NAME="libAfterImage/asimage/destroy_asgradient()"><UL><B>libAfterImage/asimage/destroy_asgradient()</B><br></A><LI><B>NAME</B><br>
<A NAME="destroy_asgradient()"></A><B>destroy_asgradient()</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  structure, deallocating all
                          associated memory
</P></LI></UL>
<A NAME="libAfterImage/asimage/init_image_layers()"><UL><B>libAfterImage/asimage/init_image_layers()</B><br></A><LI><B>NAME</B><br>
<A NAME="init_image_layers()"></A><B>init_image_layers()</B><P class="dense">- initialize &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structures.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void init_image_layers( register &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  *l, int count );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>l</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>count</B></DT><DD class="dense">- number of elements to initialize.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Initializes array on &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structures to sensible defaults.
Basically - all zeros and merge_scanlines == alphablend_scanlines.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/create_image_layers()"><UL><B>libAfterImage/asimage/create_image_layers()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_image_layers()"></A><B>create_image_layers()</B><P class="dense">- allocate and initialize &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 's.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  *create_image_layers( int count );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>count</B></DT><DD class="dense">- number of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structures in allocated array.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to newly allocated and initialized array of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 
structures on Success. NULL in case of any kind of error - that
should never happen.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Performs memory allocation for the new array of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 
structures, as well as initialization of allocated structure to
sensible defaults - merge_func will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to alphablend_scanlines.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/destroy_image_layers()"><UL><B>libAfterImage/asimage/destroy_image_layers()</B><br></A><LI><B>NAME</B><br>
<A NAME="destroy_image_layers()"></A><B>destroy_image_layers()</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structures.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void destroy_image_layers( register &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  *l,
                           int count,
                           Bool reusable );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>l</B></DT><DD class="dense">- pointer to pointer to valid array of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 
               structures.
</DD><DT class="dense"><B>count</B></DT><DD class="dense">- number of structures in array.
</DD><DT class="dense"><B>reusable</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True - then array itself will not be deallocates -
                   which is usable when it was allocated on stack.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>frees all the memory allocated for specified array of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  s.
If there was &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  and/or &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
  attached to it - it will be
deallocated as well.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/asimage_add_line()"><UL><B>libAfterImage/asimage/asimage_add_line()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage_add_line()"></A><B>asimage_add_line()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>size_t asimage_add_line ( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  * im, ColorPart &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 ,
                          CARD32 * data, unsigned int y);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>color</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  channel's number
</DD><DT class="dense"><B>data</B></DT><DD class="dense">- raw channel data of 32 bits per pixel - only lowest 8 bits
          gets encoded.
</DD><DT class="dense"><B>y</B></DT><DD class="dense">- image row starting with 0
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>asimage_add_line() return size of the encoded channel scanline in
bytes. On failure it will return 0.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Encodes raw data of the single channel into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  channel scanline.
based on compression level selected for this &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  all or part of
the scanline will be RLE encoded.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/asimage_add_line_mono()"><UL><B>libAfterImage/asimage/asimage_add_line_mono()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage_add_line_mono()"></A><B>asimage_add_line_mono()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>size_t asimage_add_line_mono ( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  * im, ColorPart &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 ,
                               CARD8 &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , unsigned int y);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>color</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  channel's number
</DD><DT class="dense"><B>value</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  for the channel
</DD><DT class="dense"><B>y</B></DT><DD class="dense">- image row starting with 0
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>asimage_add_line_mono() return size of the encoded channel scanline
in bytes. On failure it will return 0.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>encodes &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  channel scanline to have same &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  components
&nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  in every pixel. Useful for vertical gradients for example.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/get_asimage_chanmask()"><UL><B>libAfterImage/asimage/get_asimage_chanmask()</B><br></A><LI><B>NAME</B><br>
<A NAME="get_asimage_chanmask()"></A><B>get_asimage_chanmask()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>ASFlagType get_asimage_chanmask( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  object.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>goes throu all the scanlines of the &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  and toggles bits 
representing those components that have at least some data.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/move_asimage_channel()"><UL><B>libAfterImage/asimage/move_asimage_channel()</B><br></A><LI><B>NAME</B><br>
<A NAME="move_asimage_channel()"></A><B>move_asimage_channel()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void move_asimage_channel( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *dst, int channel_dst,
                           &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src, int channel_src );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>dst</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  which will have its channel substituted;
</DD><DT class="dense"><B>channel_dst</B></DT><DD class="dense">- what channel to &nbsp;<? local_doc_url("visualdoc.php","move","asimage#move_asimage_channel()",$srcunset,$subunset) ?>
  data to;
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  which will donate its channel to dst;
</DD><DT class="dense"><B>channel_src</B></DT><DD class="dense">- what source image channel to &nbsp;<? local_doc_url("visualdoc.php","move","asimage#move_asimage_channel()",$srcunset,$subunset) ?>
  data from.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>MOves channel data from one &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  to another, while discarding
what was already in destination's channel.
</PRE></LI><LI><B>NOTES</B><br><PRE>Source image (donor) will loose its channel data, as it will be
moved to destination &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . Also there is a condition that both
images must be of the same width - otherwise function returns
without doing anything. If height is different - the minimum of
two will be used.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/copy_asimage_channel()"><UL><B>libAfterImage/asimage/copy_asimage_channel()</B><br></A><LI><B>NAME</B><br>
<A NAME="copy_asimage_channel()"></A><B>copy_asimage_channel()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void copy_asimage_channel( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *dst, int channel_dst,
                           &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src, int channel_src );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>dst</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  which will have its channel substituted;
</DD><DT class="dense"><B>channel_dst</B></DT><DD class="dense">- what channel to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  data to;
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  which will donate its channel to dst;
</DD><DT class="dense"><B>channel_src</B></DT><DD class="dense">- what source image channel to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  data from.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Same as move_asimage_channel() but makes &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  of channel's data
instead of simply moving it from one image to another.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/copy_asimage_lines()"><UL><B>libAfterImage/asimage/copy_asimage_lines()</B><br></A><LI><B>NAME</B><br>
<A NAME="copy_asimage_lines()"></A><B>copy_asimage_lines()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void copy_asimage_lines( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *dst, unsigned int offset_dst,
                         &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src, unsigned int offset_src,
                         unsigned int nlines, ASFlagType filter );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>dst</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  which will have its channel substituted;
</DD><DT class="dense"><B>offset_dst</B></DT><DD class="dense">- scanline in destination image to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  to;
</DD><DT class="dense"><B>src</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  which will donate its channel to dst;
</DD><DT class="dense"><B>offset_src</B></DT><DD class="dense">- scanline in source image to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  data from;
</DD><DT class="dense"><B>nlines</B></DT><DD class="dense">- number of scanlines to be copied;
</DD><DT class="dense"><B>filter</B></DT><DD class="dense">- specifies what channels should be copied.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Makes &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  of scanline data for continuos &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of scanlines, affecting
only those channels marked in filter.
NOTE
Images must be of the same width.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/verbosity"><UL><B>libAfterImage/asimage/verbosity</B><br></A><LI><B>FUNCTION</B><br><PRE>This are flags that define what should be printed by
asimage_print_line():
    VRB_LINE_SUMMARY    - &nbsp;<? local_doc_url("visualdoc.php","print","asimage#print_asimage_manager()",$srcunset,$subunset) ?>
  only summary for each scanline
    VRB_LINE_CONTENT    - &nbsp;<? local_doc_url("visualdoc.php","print","asimage#print_asimage_manager()",$srcunset,$subunset) ?>
  summary and data for each scanline
    VRB_CTRL_EXPLAIN    - &nbsp;<? local_doc_url("visualdoc.php","print","asimage#print_asimage_manager()",$srcunset,$subunset) ?>
  summary, data and control codes for each
                          scanline
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define VRB_LINE_SUMMARY    (0x01&lt;&lt;0)
#define VRB_LINE_CONTENT    (0x01&lt;&lt;1)
#define VRB_CTRL_EXPLAIN    (0x01&lt;&lt;2)
#define VRB_EVERYTHING      (VRB_LINE_SUMMARY|VRB_CTRL_EXPLAIN| \
                             VRB_LINE_CONTENT)
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asimage/asimage_print_line()"><UL><B>libAfterImage/asimage/asimage_print_line()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage_print_line()"></A><B>asimage_print_line()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>    unsigned int asimage_print_line ( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  * im, ColorPart &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 ,
                                      unsigned int y,
                                      unsigned long verbosity);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>color</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  channel's number
</DD><DT class="dense"><B>y</B></DT><DD class="dense">- image row starting with 0
</DD><DT class="dense"><B>verbosity</B></DT><DD class="dense">- verbosity level - any combination of flags is
                 allowed
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>amount of memory used by this particular channel of specified
scanline.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>asimage_print_line() prints data stored in specified image scanline
channel. That may include simple summary of how much memory is used,
actual visible data, and/or RLE control codes. That helps to see
how effectively data is encoded.

Useful mostly for debugging purposes.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage/get_asimage_channel_rects()"><UL><B>libAfterImage/asimage/get_asimage_channel_rects()</B><br></A><LI><B>NAME</B><br>
<A NAME="get_asimage_channel_rects()"></A><B>get_asimage_channel_rects()</B><P class="dense">- translate image into a 
&nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of rectangles.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>XRectangle* 
    get_asimage_channel_rects( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *src, int channel, 
                               unsigned int threshold, 
                               unsigned int *rects_count_ret ); 
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>src</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  which will donate its channel to dst;
</DD><DT class="dense"><B>channel</B></DT><DD class="dense">- what source image channel to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  data from;
</DD><DT class="dense"><B>threshold</B></DT><DD class="dense">- threshold to compare channel values against;
</DD><DT class="dense"><B>rects_count_ret</B></DT><DD class="dense">- returns count of generated rectangles.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>This function will translate contents of selected channel 
(usualy alpha) into a &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of rectangles, ecompasing regions 
with values above the threshold. This is usefull to generate shape
of the window to be used with X Shape extention.
</PRE></LI></UL>
