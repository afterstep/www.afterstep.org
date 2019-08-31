&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASVisual</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">abstraction layer on top of X Visuals, focusing on color handling</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/asvisual.h"><UL><B>libAfterImage/asvisual.h</B><br></A><LI><B>NAME</B><br>
<A NAME="asvisual"></A><B>asvisual</B><P class="dense">- Defines abstraction layer on top of X Visuals, as well as 
several fundamental &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  datatypes.
</P></LI><LI><B>SEE ALSO</B><br><PRE>Structures:
        &nbsp;<? local_doc_url("visualdoc.php","ColorPair","asvisual#ColorPair",$srcunset,$subunset) ?>
 
        &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 
        &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 

Functions :
  &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  handling:
        prepare_scanline(), free_scanline()

  &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  initialization :
        query_screen_visual(), setup_truecolor_visual(),
        setup_pseudo_visual(), setup_as_colormap(),create_asvisual(),
        destroy_asvisual()

  &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  encoding/decoding :
        visual2visual_prop(), visual_prop2visual()

  &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  convenience functions :
        create_visual_window(), create_visual_pixmap(),
        create_visual_ximage()

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
<A NAME="libAfterImage/alpha"><UL><B>libAfterImage/alpha</B><br></A><LI><B>FUNCTION</B><br><PRE>Alpha channel adds visibility parameter to &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
Alpha channel's &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of 0xFF signifies complete visibility, while 0
makes pixel completely transparent.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define ALPHA_TRANSPARENT       0x00
#define ALPHA_SEMI_TRANSPARENT  0x7F
#define ALPHA_SOLID             0xFF
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ARGB32"><UL><B>libAfterImage/ARGB32</B><br></A><LI><B>NAME</B><br>
<A NAME="ARGB32"></A><B>ARGB32</B><P class="dense">- main &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  datatype
</P></LI><LI><B>FUNCTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  is fundamental datatype that hold 32bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  corresponding to
pixels &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  and transparency &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  (alpha channel) in ARGB
&nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
 . It is encoded as follows :
Lowermost 8 bits - Blue channel
bits 8 to 15     - Green channel
bits 16 to 23    - Red channel
bits 24 to 31    - Alpha channel
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .1
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef CARD32 &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 ;
#define ARGB32_White            0xFFFFFFFF
#define ARGB32_Black            0xFF000000
/* default &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is #FF000000 : */
#define ARGB32_DEFAULT_BACK_COLOR   ARGB32_Black

#define ARGB32_ALPHA_CHAN       3
#define ARGB32_RED_CHAN         2
#define ARGB32_GREEN_CHAN       1
#define ARGB32_BLUE_CHAN        0
#define ARGB32_CHANNELS         4

#define MAKE_ARGB32(a,r,g,b)    ((( (CARD32)a)        &lt;&lt;24)| \
                                 ((((CARD32)r)&amp;0x00FF)&lt;&lt;16)| \
                                 ((((CARD32)g)&amp;0x00FF)&lt;&lt;8 )| \
                                 (( (CARD32)b)&amp;0x00FF))

#define MAKE_ARGB32_GREY8(a,l)  (((a)&lt;&lt;24)|(((l)&amp;0x00FF)&lt;&lt;16)| \
                                 (((l)&amp;0x00FF)&lt;&lt;8)|((l)&amp;0x00FF))
#define ARGB32_ALPHA8(c)        (((c)&gt;&gt;24)&amp;0x00FF)
#define ARGB32_RED8(c)          (((c)&gt;&gt;16)&amp;0x00FF)
#define ARGB32_GREEN8(c)        (((c)&gt;&gt;8 )&amp;0x00FF)
#define ARGB32_BLUE8(c)         ( (c)     &amp;0x00FF)
#define ARGB32_CHAN8(c,i)       (((c)&gt;&gt;((i)&lt;&lt;3))&amp;0x00FF)
#define MAKE_ARGB32_CHAN8(v,i)  (((v)&amp;0x0000FF)&lt;&lt;((i)&lt;&lt;3))

#define ARGB32_ALPHA16(c)       ((((c)&gt;&gt;16)&amp;0x00FF00)|0x00FF)
#define ARGB32_RED16(c)         ((((c)&gt;&gt;8)&amp;0x00FF00)|0x00FF)
#define ARGB32_GREEN16(c)       (( (c)    &amp;0x00FF00)|0x00FF)
#define ARGB32_BLUE16(c)        ((((c)&lt;&lt;8)&amp;0x00FF00)|0x00FF)
#define ARGB32_CHAN16(c,i)      ((ARGB32_CHAN8(c,i)&lt;&lt;8)|0x00FF)
#define MAKE_ARGB32_CHAN16(v,i) ((((v)&amp;0x00FF00)&gt;&gt;8)&lt;&lt;((i)&lt;&lt;3))
</PRE></div><br></p></LI>
<A NAME="libAfterImage/ARGB32_manhattan_distance()"><UL><B>libAfterImage/ARGB32_manhattan_distance()</B><br></A><LI><B>NAME</B><br>
<A NAME="ARGB32_manhattan_distance()"></A><B>ARGB32_manhattan_distance()</B><P class="dense">- This function can be used to evaluate closeness of 
two colors.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>long ARGB32_manhattan_distance (long a, long b);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>a,</B></DT><DD class="dense">b - &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  values to calculate Manhattan distance in between
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns calculated Manhattan distance.
</PRE></LI></UL></UL>
<A NAME="libAfterImage/ColorPart"><UL><B>libAfterImage/ColorPart</B><br></A><LI><B>NAME</B><br>
<A NAME="IC_RED"></A><B>IC_RED</B><P class="dense">- red channel
</P>
<A NAME="IC_GREEN"></A><B>IC_GREEN</B><P class="dense">- green channel
</P>
<A NAME="IC_BLUE"></A><B>IC_BLUE</B><P class="dense">- blue channel
</P>
<A NAME="IC_ALPHA"></A><B>IC_ALPHA</B><P class="dense">- alpha channel
</P>
<A NAME="IC_NUM_CHANNELS"></A><B>IC_NUM_CHANNELS</B><P class="dense">- number of supported channels
</P></LI><LI><B>FUNCTION</B><br><PRE>Ids of the channels. These are basically synonyms to related &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 
channel numbers
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef enum
{
  IC_BLUE   = ARGB32_BLUE_CHAN ,
  IC_GREEN  = ARGB32_GREEN_CHAN,
  IC_RED    = ARGB32_RED_CHAN  ,
  IC_ALPHA  = ARGB32_ALPHA_CHAN,
  IC_NUM_CHANNELS = ARGB32_CHANNELS
}
ColorPart;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ColorPair"><UL><B>libAfterImage/ColorPair</B><br></A><LI><B>NAME</B><br>
<A NAME="ColorPair"></A><B>ColorPair</B><P class="dense">- convenient structure to hold pair of colors.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ColorPair","asvisual#ColorPair",$srcunset,$subunset) ?>
 
{
  &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  fore;
  &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  back;
}&nbsp;<? local_doc_url("visualdoc.php","ColorPair","asvisual#ColorPair",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASScanline"><UL><B>libAfterImage/ASScanline</B><br></A><LI><B>NAME</B><br>
<A NAME="ASScanline"></A><B>ASScanline</B><P class="dense">- structure to hold contents of the single scanline.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  holds data for the single scanline, split into channels
with 32 bits per pixel per channel. All the memory is allocated at
once, and then split in between channels. There are three ways to
access channel data :
1) using blue, green, red, alpha pointers.
2) using channels[] array of pointers - convenient in loops
4) using xc3, xc2, xc1 pointers. These are different from red, green,
blue in the way that xc3 will point to blue when BGR mode is specified
at the time of creation, otherwise it will point to red channel.
Likewise xc1 will point to red in BGR mode and blue otherwise.
xc2 always points to green channel's data. This is convenient while
writing XImages and when channels in source and destination has to be
reversed, while reading images from files.
Channel data is always aligned by 8 byte boundary allowing for
utilization of MMX, floating point and other 64bit registers for
transfer and processing.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 
{
#define SCL_DO_BLUE         (0x01&lt;&lt;ARGB32_BLUE_CHAN )
#define SCL_DO_GREEN        (0x01&lt;&lt;ARGB32_GREEN_CHAN)
#define SCL_DO_RED          (0x01&lt;&lt;ARGB32_RED_CHAN  )
#define SCL_DO_ALPHA        (0x01&lt;&lt;ARGB32_ALPHA_CHAN)
#define SCL_DO_COLOR        (SCL_DO_RED|SCL_DO_GREEN|SCL_DO_BLUE)
#define SCL_DO_ALL          (SCL_DO_RED|SCL_DO_GREEN|SCL_DO_BLUE| \
                             SCL_DO_ALPHA)
    CARD32         flags ;   /* combination of  the above values */
    CARD32        *buffer ;
    CARD32        *blue, *green, *red, *alpha ;
    CARD32        *channels[IC_NUM_CHANNELS];
    CARD32        *xc3, *xc2, *xc1; /* since some servers require
                                     * BGR mode here we &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  what
                                     * goes into what &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  component
                                     * in XImage */
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
          back_color;
    unsigned int   width, shift;
    unsigned int   offset_x ;
}&nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/prepare_scanline()"><UL><B>libAfterImage/prepare_scanline()</B><br></A><LI><B>NAME</B><br>
<A NAME="prepare_scanline()"></A><B>prepare_scanline()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *prepare_scanline ( unsigned int width,
                               unsigned int shift,
                               &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *reusable_memory,
                               Bool BGR_mode);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>width</B></DT><DD class="dense">- width of the scanline.
</DD><DT class="dense"><B>shift</B></DT><DD class="dense">- format of contained data. 0 means - 32bit unshifted
                  8 means - 24.8bit ( 8 bit left shifted ).
</DD><DT class="dense"><B>reusable_memory</B></DT><DD class="dense">- preallocated object.
</DD><DT class="dense"><B>BGR_mode</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True will cause xc3 to point to Blue and xc1 to
                  point to red.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>This function allocates memory ( &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  reusable_memory is NULL ) for
the new &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  structure. Structures buffers gets allocated to
hold scanline data of at least width pixel wide. Buffers are adjusted
to &nbsp;<? local_doc_url("visualdoc.php","start","imencdec#start_image_decoding()",$srcunset,$subunset) ?>
  on 8 byte boundary.
</PRE></LI></UL>
<A NAME="libAfterImage/free_scanline()"><UL><B>libAfterImage/free_scanline()</B><br></A><LI><B>NAME</B><br>
<A NAME="free_scanline()"></A><B>free_scanline()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void       free_scanline ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *sl, Bool reusable );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>sl</B></DT><DD class="dense">- pointer to previously allocated &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  structure to be
           deallocated.
</DD><DT class="dense"><B>reusable</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  true then &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  object itself will not be
           deallocated.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>free_scanline() frees all the buffer memory allocated for &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 .
If reusable is false then object itself in not freed. That is usable
for declaring &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  on stack.
</PRE></LI></UL>
<A NAME="libAfterImage/ASVisual"><UL><B>libAfterImage/ASVisual</B><br></A><LI><B>NAME</B><br>
<A NAME="ASVisual"></A><B>ASVisual</B><P class="dense">- an abstraction layer on top of X Server Visual.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>This structure has been introduced in order to compensate for the
fact that X may have so many different types of Visuals. It provides
shortcuts to most Visual data, compensated for differences in Visuals.
For PseudoColor &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
  it also contains preallocated &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of colors.
This &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  allows us to write XImages very fast and without
exhausting available X colors. This &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  consist of 8, 64, or 4096
colors and constitutes fraction of colors available in particular
colordepth. This colors are allocated to be evenly spread around RGB
spectrum. Thus when converting from internal presentation - all we
need to do is to discard unused bits, and use rest of them bits as
an index in our &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 . Opposite conversion is much trickier and we
engage into nasty business of having hash table mapping pixel values
into colors, or straight table doing same in lower colordepths.
Idea is that we do all internal processing in 32bit colordepth, and
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  provides us with means to convert it to actual X display
format. Respectively &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  has methods to write out XImage lines
and read XImage lines.
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  creation is a tricky process. Basically first we have to go
through the &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of available Visuals and choose the best suitable.
Then based on the type of this Visual we have to &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
  our data
members and method hooks. Several functions provided for that :
 query_screen_visual()    - will lookup best suitable &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
 
 setup_truecolor_visual() - will &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
  hooks &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
  is TrueColor
 setup_pseudo_visual()   - will &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
  hooks and data &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  Visual is
                            PseudoColor.
 setup_as_colormap()      - will preallocate colors for PseudoColor.
Alternative to the above is :
 create_asvisual()        - it encapsulates all of the above
                            functionality, and returns completely &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 
                            up &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  object.
Since Visual selected for &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  may differ from default
( we choose the best suitable ), all the window creation function
must provide &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  and some other parameters, like border &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
for example. Thus we created some convenience functions.
These should be used instead of standard Xlib calls :
 create_visual_window() - to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  window
 create_visual_pixmap() - to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  pixmap
 create_visual_ximage() - to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  XImage
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  could be dealolocated and its resources freed with :
 destroy_asvisual()
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>asview.c: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 
{
    Display      *dpy;

    /* This envvar will be used to determine what X Visual 
     * (in hex) to use. If unset then best possible will 
     * be selected automagically : */
#define ASVISUAL_ID_ENVVAR &quot;AFTERIMAGE_VISUAL_ID&quot;

    XVisualInfo   visual_info;
    /* this things are calculated based on Visual : */
    unsigned long rshift, gshift, bshift;
    unsigned long rbits,  gbits,  bbits;
    unsigned long true_depth;   /* could be 15 when X reports 16 */
    Bool          BGR_mode;
    Bool          msb_first;
    /* we must have &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  so that we can safely &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  windows
     * with different visuals even &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  we are in TrueColor mode : */
    Colormap      &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 ;
    Bool          own_colormap; /* tells us to &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  when we
                                 * done */
    unsigned long black_pixel, white_pixel;
    /* for PseudoColor mode we need some more stuff : */
    enum {
        ACM_None = 0,
        ACM_3BPP,
        ACM_6BPP,
        ACM_12BPP
    } as_colormap_type ;    /* there can only be 64 or 4096 entries
                             * so far ( 6 or 12 bpp) */
    unsigned long *as_colormap; /* array of preallocated colors for
                                 * PseudoColor mode */
    union                       /* reverse &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  lookup tables : */
    {
        &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
               *xref;
        struct ASHashTable  *hash;
    }as_colormap_reverse ;

    /* different useful callbacks : */
    CARD32 (*color2pixel_func)    ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                                    CARD32 encoded_color,
                                    unsigned long *pixel);
    void   (*pixel2color_func)    ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                                    unsigned long pixel,
                                    CARD32 *red, CARD32 *green,
                                    CARD32 *blue);
    void   (*ximage2scanline_func)( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, 
                                    XImage *xim,
                                    &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *sl, int y,
                                    unsigned char *xim_data );
    void   (*scanline2ximage_func)( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, 
                                    XImage *xim,
                                    &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *sl, int y,
                                    unsigned char *xim_data );

#define ASGLX_Unavailable           0
#define ASGLX_Available             (0x01&lt;&lt;0)
#define ASGLX_DoubleBuffer          (0x01&lt;&lt;1)
#define ASGLX_RGBA                  (0x01&lt;&lt;2)
#define ASGLX_UseForImageTx         (0x01&lt;&lt;3)   
    ASFlagType glx_support ;    /* one of the above flags */

    void *glx_scratch_gc_indirect ; /* (GLXContext) */
    void *glx_scratch_gc_direct ;   /* (GLXContext) */

    Window scratch_window;

#ifndef X_DISPLAY_MISSING
#define ARGB2PIXEL(asv,argb,pixel)         \
    (asv)-&gt;color2pixel_func((asv),(argb),(pixel))
#define GET_SCANLINE(asv,xim,sl,y,xim_data) \
    (asv)-&gt;ximage2scanline_func((asv),(xim),(sl),(y),(xim_data))
#define PUT_SCANLINE(asv,xim,sl,y,xim_data) \
    (asv)-&gt;scanline2ximage_func((asv),(xim),(sl),(y),(xim_data))
#else
#define ARGB2PIXEL(asv,argb,pixel)         \
    do{ break; }while(0)
#define GET_SCANLINE(asv,xim,sl,y,xim_data) \
    do{ break; }while(0)
#define PUT_SCANLINE(asv,xim,sl,y,xim_data) \
    do{ break; }while(0)
#endif
}&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/query_screen_visual()"><UL><B>libAfterImage/query_screen_visual()</B><br></A><LI><B>NAME</B><br>
<A NAME="query_screen_visual_id()"></A><B>query_screen_visual_id()</B><P class="dense"></P>
<A NAME="query_screen_visual()"></A><B>query_screen_visual()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool query_screen_visual_id( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Display *dpy, int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 ,
                          Window root, int default_depth,
                             VisualID visual_id, Colormap cmap );
Bool query_screen_visual( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Display *dpy, int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 ,
                          Window root, int default_depth );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- preallocated &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>dpy</B></DT><DD class="dense">- valid pointer to opened X display.
</DD><DT class="dense"><B>screen</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  number on which to &nbsp;<? local_doc_url("visualdoc.php","query","asvisual#query_screen_visual_id()",$srcunset,$subunset) ?>
  visuals.
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- root window on that &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>default_depth-</B></DT><DD class="dense">default colordepth of the &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>visual_id</B></DT><DD class="dense">- optional ID of prefered Visual.
</DD><DT class="dense"><B>cmap</B></DT><DD class="dense">- optional &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  to be used.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>True on success, False on failure
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure pointed by asv will have the following data
members &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  on success :
dpy, visual_info, &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 , own_colormap, black_pixel, white_pixel.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>query_screen_visual_id() will go though prioritized &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of possible
Visuals and attempt to match those to what is available on the
specified &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 . If all items from &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  fail, then it goes about
querying default &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
 .
query_screen_visual is identical to query_screen_visual_id with
visual_id and cmap &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0.
Once X Visual has been identified, we &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  X &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  and allocate
white and black pixels from it.
</PRE></LI></UL>
<A NAME="libAfterImage/setup_truecolor_visual()"><UL><B>libAfterImage/setup_truecolor_visual()</B><br></A><LI><B>NAME</B><br>
<A NAME="setup_truecolor_visual()"></A><B>setup_truecolor_visual()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool setup_truecolor_visual( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- preallocated &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>True on success, False &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
  is not TrueColor.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>setup_truecolor_visual() checks &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  Visual is indeed TrueColor and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
so it goes about querying &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  masks, deducing real XImage
colordepth, and whether we work in BGR mode. It then goes about
setting up correct hooks to X IO functions.
</PRE></LI></UL>
<A NAME="libAfterImage/setup_pseudo_visual()"><UL><B>libAfterImage/setup_pseudo_visual()</B><br></A><LI><B>NAME</B><br>
<A NAME="setup_pseudo_visual()"></A><B>setup_pseudo_visual()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void setup_pseudo_visual( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv  );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- preallocated &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>setup_pseudo_visual() assumes that Visual is PseudoColor. It then
tries to decide as to how many colors preallocate, and goes about
setting up correct X IO hooks and possibly initialization of reverse
&nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  in case &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  already has &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  preallocated.
</PRE></LI></UL>
<A NAME="libAfterImage/setup_as_colormap()"><UL><B>libAfterImage/setup_as_colormap()</B><br></A><LI><B>NAME</B><br>
<A NAME="setup_as_colormap()"></A><B>setup_as_colormap()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void setup_as_colormap( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- preallocated &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>That has to be called in order to pre-allocate sufficient number of
colors. It uses &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  size identification supplied in &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 
structure. If colors where preallocated successfully - it will also
&nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  reverse lookup &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/create_asvisual_for_id()"><UL><B>libAfterImage/create_asvisual_for_id()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_asvisual_for_id()"></A><B>create_asvisual_for_id()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *create_asvisual_for_id( Display *dpy, int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 ,
                                  int default_depth,
                                  VisualID visual_id, Colormap cmap,
                                  &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *reusable_memory );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>dpy</B></DT><DD class="dense">- valid pointer to opened X display.
</DD><DT class="dense"><B>screen</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  number on which to &nbsp;<? local_doc_url("visualdoc.php","query","asvisual#query_screen_visual_id()",$srcunset,$subunset) ?>
  visuals.
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- root window on that &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>default_depth-</B></DT><DD class="dense">default colordepth of the &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>visual_id</B></DT><DD class="dense">- ID of X &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
  to use.
</DD><DT class="dense"><B>cmap</B></DT><DD class="dense">- optional ID of the &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
  to be used.
</DD><DT class="dense"><B>reusable_memory</B></DT><DD class="dense">- pointer to preallocated &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure initialized with enough information
to be able to deal with current X Visual.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function calls all the needed functions in order to &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
  new
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure for the specified &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
 . If
reusable_memory is not null - it will not allocate new &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 
structure, but instead will use supplied one. Useful for allocating
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  on stack.
This particular function will not do any autodetection and will use
Visual ID supplied. That is usefull when &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  is used with
an app that has its own approach to Visual handling, and since Visuals
on all Windows, Pixmaps and colormaps must match, there is a need to
synchronise visuals used by an app and &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/create_asvisual()"><UL><B>libAfterImage/create_asvisual()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_asvisual()"></A><B>create_asvisual()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *create_asvisual( Display *dpy, int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 ,
                           int default_depth,
                           &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *reusable_memory );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>dpy</B></DT><DD class="dense">- valid pointer to opened X display.
</DD><DT class="dense"><B>screen</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  number on which to &nbsp;<? local_doc_url("visualdoc.php","query","asvisual#query_screen_visual_id()",$srcunset,$subunset) ?>
  visuals.
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- root window on that &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>default_depth-</B></DT><DD class="dense">default colordepth of the &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>reusable_memory</B></DT><DD class="dense">- pointer to preallocated &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure initialized with enough information
to be able to deal with current X Visual.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function calls all the needed functions in order to &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
  new
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure for the specified &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 . If reusable_memory is
not null - it will not allocate new &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure, but instead
will use supplied one. Useful for allocating &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  on stack.
It is different from create_asvisualfor_id() in that it will attempt
to autodetect best possible &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
  for the &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 . For example on some
SUN Solaris X servers there will be both 8bpp pseudocolor and 24bpp
truecolor, and default will be 8bpp. In this scenario &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 
will detect and use 24bpp true &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
 , thus producing much better
results.
</PRE></LI></UL>
<A NAME="libAfterImage/destroy_asvisual()"><UL><B>libAfterImage/destroy_asvisual()</B><br></A><LI><B>NAME</B><br>
<A NAME="destroy_asvisual()"></A><B>destroy_asvisual()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void destroy_asvisual( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Bool reusable );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>reusable</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True it will cause function to not &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  object
           itself.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>Cleanup function. Frees all the memory and deallocates all the
resources. If reusable is False it will also &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  the object, pointed
to by asv.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>asview.c: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .2
</PRE></LI></UL>
<A NAME="libAfterImage/visual2visual_prop()"><UL><B>libAfterImage/visual2visual_prop()</B><br></A><LI><B>NAME</B><br>
<A NAME="visual2visual_prop()"></A><B>visual2visual_prop()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool visual2visual_prop( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, size_t *size,
                         unsigned long *version, unsigned long **data );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>size         - size of the encoded memory block.
version      - version of the encoding
data         - actual encoded memory block
True on success, False on failure
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function will encode &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure into memory block of
32 bit values, suitable for storing in X property.
</PRE></LI></UL>
<A NAME="libAfterImage/visual_prop2visual()"><UL><B>libAfterImage/visual_prop2visual()</B><br></A><LI><B>NAME</B><br>
<A NAME="visual_prop2visual()"></A><B>visual_prop2visual()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool visual_prop2visual( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Display *dpy, int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 ,
                         size_t size,
                         unsigned long version, unsigned long *data );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>dpy</B></DT><DD class="dense">- valid pointer to &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
  X display.
</DD><DT class="dense"><B>screen</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  number.
</DD><DT class="dense"><B>size</B></DT><DD class="dense">- encoded memory block's size.
</DD><DT class="dense"><B>version</B></DT><DD class="dense">- version of encoding.
</DD><DT class="dense"><B>data</B></DT><DD class="dense">- actual encoded memory block.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>True on success, False on failure
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>visual_prop2visual() will read &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  data from the memory block
encoded by visual2visual_prop(). It could be used to read data from
X property and convert it into usable information - such as &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 ,
&nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
  info, etc.
Note: setup_truecolor_visual() or setup_pseudo_visual() has to be
invoked in order to complete &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/create_visual_window()"><UL><B>libAfterImage/create_visual_window()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_visual_window()"></A><B>create_visual_window()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Window  create_visual_window( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window parent,
                              int x, int y,
                              unsigned int width, unsigned int height,
                              unsigned int border_width,
                              unsigned int wclass,
                              unsigned long mask,
                              XSetWindowAttributes *attributes );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to the valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>parent</B></DT><DD class="dense">- Window ID of the parent the window.
</DD><DT class="dense"><B>x,</B></DT><DD class="dense">y          - initial position of the new window.
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height - initial size of the new window.
</DD><DT class="dense"><B>border_width</B></DT><DD class="dense">- initial border width of the new window.
</DD><DT class="dense"><B>wclass</B></DT><DD class="dense">- Window class  - InputOnly or InputOutput.
</DD><DT class="dense"><B>mask</B></DT><DD class="dense">- defines what attributes are &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>attributes</B></DT><DD class="dense">- different window attributes.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>ID of the newly created window on success. None on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>create_visual_window() will do sanity checks on passed parameters,
it will then &nbsp;<? local_doc_url("visualdoc.php","add","blender#add_scanlines()",$srcunset,$subunset) ?>
  mandatory attributes &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  needed, and attempt to
&nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  window for the specified &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/create_visual_gc()"><UL><B>libAfterImage/create_visual_gc()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_visual_gc()"></A><B>create_visual_gc()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>GC      create_visual_gc( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window root,
                          unsigned long mask, XGCValues *gcvalues );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to the valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- Window ID of the root window of destination &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>mask,</B></DT><DD class="dense">gcvalues - values for creation of new GC - see XCreateGC() for
                 details.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>New GC created for regular window on success. NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>create_visual_gc() will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  temporary window for the &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 
specific depth and Visual and it will then &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  GC for such window.
Obtained GC should be good to be used for manipulation of windows and
Pixmaps created for the same &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/create_visual_pixmap()"><UL><B>libAfterImage/create_visual_pixmap()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_visual_pixmap()"></A><B>create_visual_pixmap()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Pixmap  create_visual_pixmap( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window root,
                              unsigned int width, unsigned int height,
                              unsigned int depth );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to the valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- Window ID of the root window of destination &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height  - size of the pixmap to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>depth</B></DT><DD class="dense">- depth of the pixmap to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
 . If 0 asv-&gt;true_depth
                 will be used.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>ID of the newly created pixmap on success. None on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>create_visual_pixmap() will perform sanity checks on passed
parameters, and attempt to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  pixmap for the specified &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 ,
root and depth.
</PRE></LI></UL>
<A NAME="libAfterImage/create_visual_ximage()"><UL><B>libAfterImage/create_visual_ximage()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_visual_ximage()"></A><B>create_visual_ximage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>XImage* create_visual_ximage( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                              unsigned int width, unsigned int height,
                              unsigned int depth );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to the valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height  - size of the XImage to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>depth</B></DT><DD class="dense">- depth of the XImage to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
 . If 0 asv-&gt;true_depth
                 will be used.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to newly created XImage on success. NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>create_visual_ximage() will perform sanity checks on passed
parameters, and it will attempt to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  XImage of sufficient size,
and specified colordepth. It will also &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
  hooks for XImage
deallocation to be handled by custom function.
</PRE></LI></UL>
