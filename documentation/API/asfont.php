&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASFont</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">text drawing functionality and handling of TTF and X11 fonts</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/asfont.h"><UL><B>libAfterImage/asfont.h</B><br></A><LI><B>NAME</B><br>
<A NAME="asfont"></A><B>asfont</B><P class="dense"></P></LI><LI><B>DESCRIPTION</B><br><PRE>Text drawing functionality.
Text is drawn as an &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  with only alpha channel. Since alpha
channel is 8 bit widths that allows for 256 shades to be used in
rendered glyphs. That in turn allows for smoothing and antialiasing
of the drawn &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . Such an approcah allows for easy manipulation of
the drawn &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , such as changing &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , making it transparent,
texturizing, rotation, etc.

&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  supports two types of fonts :
Fonts that could be rendered using standard Xlib functionality, and
fonts rendered by FreeType 2 library. That may include TrueType
fonts. When fonts are obtained via Xlib special processing is
performed in order to smooth its shape and leverage 256 shades
palette available.

Any font being used is has to be opened first. At that time its
properties are analysed and glyphs are cached in clients memory.
Special RLE compression method is used for font glyphs, significantly
reducing memory utilization without any effect on performance.

Font management and drawing functionality has been designed with
internatiolization in mind, althou support for locales is not
complete yet.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Structures :
         &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASGlyph","asfont#ASGlyph",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASGlyphRange","asfont#ASGlyphRange",$srcunset,$subunset) ?>
 

Functions :
         create_font_manager(), destroy_font_manager(),
         open_freetype_font(), open_X11_font(), get_asfont(),
         destroy_font(), print_asfont(), print_asglyph(),
         draw_text(),
         get_asfont_glyph_spacing(), set_asfont_glyph_spacing()

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
<A NAME="libAfterImage/MAX_GLYPHS_PER_FONT"><UL><B>libAfterImage/MAX_GLYPHS_PER_FONT</B><br></A><LI><B>NAME</B><br>
<A NAME="MAX_GLYPHS_PER_FONT"></A><B>MAX_GLYPHS_PER_FONT</B><P class="dense">- Max &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of glyphs per font allowed. 
We need that so we can detect and avoid broken fonts somehow.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define MAX_GLYPHS_PER_FONT  2048
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASFontType"><UL><B>libAfterImage/ASFontType</B><br></A><LI><B>NAME</B><br>
<A NAME="ASFontType"></A><B>ASFontType</B><P class="dense">- Supported types of fonts - Xlib or FreeType 2
ASF_GuessWho will enable autodetection of the font type.
It is attempted to be opened as FreeType font first, and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  that
fails - it will be opened as Xlib font.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef enum
{
    ASF_X11         = 0,
    ASF_Freetype    = (0x01&lt;&lt;0),
    ASF_GuessWho    = (0x01&lt;&lt;1),
#define ASF_TypeMask  (ASF_GuessWho|ASF_Freetype)

    /* flags below should be combined with one of the above values */
    ASF_Monospaced  = (0x01&lt;&lt;2),
    ASF_RightToLeft = (0x01&lt;&lt;3),  /* direction of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  flow */
    ASF_HasKerning  = (0x01&lt;&lt;4)
}&nbsp;<? local_doc_url("visualdoc.php","ASFontType","asfont#ASFontType",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASGlyph"><UL><B>libAfterImage/ASGlyph</B><br></A><LI><B>NAME</B><br>
<A NAME="ASGlyph"></A><B>ASGlyph</B><P class="dense"></P></LI><LI><B>DESCRIPTION</B><br><PRE>Stores glyph's image, as well as width, height and other
characteristics of the glyph.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASGlyph","asfont#ASGlyph",$srcunset,$subunset) ?>
 
{
    CARD8          *pixmap ;        /* glyph's RLE encoded pixmap */
    short   width, height ; /* meaningfull width and height
                                     * of the glyphs pixmap */
    short  lead, step ;             /* distance pen position to glyph
                                     * beginning and to the next glyph */
                                    /* in XRender it should be used as so:
                                     * x = -lead, xOff = step
                                     */
    short  ascend, descend ;        /* distance of the top of the
                                     * glyph from the baseline */
                                    /* in XRender it should be used as so:
                                     * y = -ascend, yOff = 0
                                     */
    unsigned int font_gid ;         /* index of the glyph inside the font( TTF only ) */
    long         xrender_gid ;      /* Used only with XRender  - gid of the glyph in GlyphSet */        
}&nbsp;<? local_doc_url("visualdoc.php","ASGlyph","asfont#ASGlyph",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI>
<A NAME="libAfterImage/ASGlyphRange"><UL><B>libAfterImage/ASGlyphRange</B><br></A><LI><B>NAME</B><br>
<A NAME="ASGlyphRange"></A><B>ASGlyphRange</B><P class="dense"></P></LI><LI><B>DESCRIPTION</B><br><PRE>Organizes glyphs that belongs to the continuos range of char codes.
&nbsp;<? local_doc_url("visualdoc.php","ASGlyphRange","asfont#ASGlyphRange",$srcunset,$subunset) ?>
  structures could be tied together to cover entire
codeset supported by the font.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASGlyphRange","asfont#ASGlyphRange",$srcunset,$subunset) ?>
 
{
    unsigned long   min_char, max_char; /* Code range.
                                         * for some locales that would
                                         * be sufficient to simply &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 
                                         * range of characteres
                                         * supported by font */
    &nbsp;<? local_doc_url("visualdoc.php","ASGlyph","asfont#ASGlyph",$srcunset,$subunset) ?>
  *glyphs;                    /* array of glyphs belonging to
                                         * that code range */
    struct &nbsp;<? local_doc_url("visualdoc.php","ASGlyphRange","asfont#ASGlyphRange",$srcunset,$subunset) ?>
  *below, *above;
}&nbsp;<? local_doc_url("visualdoc.php","ASGlyphRange","asfont#ASGlyphRange",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL></UL>
<A NAME="libAfterImage/ASFont"><UL><B>libAfterImage/ASFont</B><br></A><LI><B>NAME</B><br>
<A NAME="ASFont"></A><B>ASFont</B><P class="dense"></P></LI><LI><B>DESCRIPTION</B><br><PRE>Structure to contain all the font characteristics, as well as
&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of glyph images. Such structure has to be created/opened prior to
being able to &nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  characters with any font.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 
{
    unsigned long   magic ;
    int             ref_count ;

    struct &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *fontman;  /* our owner */
    char                 *name;

    &nbsp;<? local_doc_url("visualdoc.php","ASFontType","asfont#ASFontType",$srcunset,$subunset) ?>
       type ;
    ASFlagType      flags ;

    &nbsp;<? local_doc_url("visualdoc.php","ASGlyphRange","asfont#ASGlyphRange",$srcunset,$subunset) ?>
    *codemap; /* linked &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of glyphsets, each
                              * representing continuos range of
                              * available codes - used for ASCII 
                              * codes */
    ASHashTable    *locale_glyphs;  /* hash of locale specific glyphs */

    &nbsp;<? local_doc_url("visualdoc.php","ASGlyph","asfont#ASGlyph",$srcunset,$subunset) ?>
          default_glyph;  /* valid glyph to be drawn when
                                     * code is not valid */

    int             max_height;  /* maximiu height of the character
                                  * glyph */
    int             max_ascend,  /* maximum distance from the baseline
                                  * to the top of the character glyph */
                    max_descend; /* need both descend and ascend to be 
                                    able to dynamically recalculate font 
                                    height while adding new characters */
    int             space_size;  /* fixed width &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to be used when
                                  * rendering spaces and tabs */
    int             spacing_x, spacing_y;
    /* If these are &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to anything above 0 then all the glyphs has to be 
     * padded ( &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  its smaller then the cell ) or scaled down 
     * ( &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  its bigger then the cell )
     */                                
    int    cell_width, cell_height ;

#ifdef HAVE_FREETYPE
    FT_Face         ft_face;        /* &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  type font handle */
#else
    CARD32         *&nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
 ;
#endif
    
    unsigned long   xrender_glyphset ;  /* GlyphSet is the actuall datatype, 
                                         * but for easier compilation - 
                                         * we use generic which is the same */ 
}&nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI>
<A NAME="libAfterImage/ASFontManager"><UL><B>libAfterImage/ASFontManager</B><br></A><LI><B>NAME</B><br>
<A NAME="ASFontManager"></A><B>ASFontManager</B><P class="dense"></P></LI><LI><B>DESCRIPTION</B><br><PRE>Global data identifying connection to external libraries, as well as
fonts location paths.
This structure has to be created/initialized prior to any font being
loaded.
It also holds &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of fonts that are currently &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
 , allowing for
easy access to fonts.
When ASFontManagaer object is destroyd it automagically closes all
the &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
  fonts.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 
{
    Display    *dpy;
    char       *font_path ;

    ASHashTable *fonts_hash ;

    size_t       unicode_used;
    CARD32      *local_unicode; /* &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of unicodes from current locale
                                 * - we use it to limit number of glyphs
                                 * we load */
    Bool        ft_ok ;
#ifdef HAVE_FREETYPE
    FT_Library  ft_library;     /* &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  type library handle */
#else
    void       *&nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  ;
#endif
}&nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL></UL>
<A NAME="libAfterImage/ASText3DType"><UL><B>libAfterImage/ASText3DType</B><br></A><LI><B>NAME</B><br>
<A NAME="ASText3DType"></A><B>ASText3DType</B><P class="dense">- Available types of 3D &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  to be drawn.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef enum &nbsp;<? local_doc_url("visualdoc.php","ASText3DType","asfont#ASText3DType",$srcunset,$subunset) ?>
 {
    AST_Plain =0,                              /* regular 2D &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  */
    AST_Embossed,
    AST_Sunken,
    AST_ShadeAbove,
    AST_ShadeBelow,
    AST_EmbossedThick,
    AST_SunkenThick,
    AST_OutlineAbove,
    AST_OutlineBelow,
    AST_OutlineFull,
    AST_3DTypes
}&nbsp;<? local_doc_url("visualdoc.php","ASText3DType","asfont#ASText3DType",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASTextAttributes"><UL><B>libAfterImage/ASTextAttributes</B><br></A><LI><B>NAME</B><br>
<A NAME="ASTextAttributes"></A><B>ASTextAttributes</B><P class="dense">- Attributes for &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  rendering
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASTextAttributes","asfont#ASTextAttributes",$srcunset,$subunset) ?>
 
{
#define ASTA_UseTabStops    (0x01&lt;&lt;0)   
    unsigned int version ;     
                    /* structure version, so we can implement future 
                     * extensions without breaking binary apps */             
    ASFlagType   rendition_flags ;
    &nbsp;<? local_doc_url("visualdoc.php","ASText3DType","asfont#ASText3DType",$srcunset,$subunset) ?>
  type;
    ASCharType   char_type;
    unsigned int tab_size ;   /* tab size in chars  - defaults to 8 */
    unsigned int origin ;     /* distance from the left margin 
                               * (in pixels) */
    unsigned int *tab_stops ; /* tab stops in pixels where 
                               * left margin is 0 */                   
    unsigned int tab_stops_num ;

    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
       fore_color ;   /* used with 3D type of Outlined */
  unsigned int width;
#define ASTA_VERSION_1  1

#define ASTA_VERSION_INTERNAL   ASTA_VERSION_1
}&nbsp;<? local_doc_url("visualdoc.php","ASTextAttributes","asfont#ASTextAttributes",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/asfont/create_font_manager()"><UL><B>libAfterImage/asfont/create_font_manager()</B><br></A><LI><B>NAME</B><br>
<A NAME="create_font_manager()"></A><B>create_font_manager()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *create_font_manager( Display *dpy,
                                    const char *font_path,
                                    &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *reusable_memory );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>dpy</B></DT><DD class="dense">- pointer to valid and opened Display.
</DD><DT class="dense"><B>font_path</B></DT><DD class="dense">- string, representing colon separated &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of
                  directories to search for FreeType fonts.
</DD><DT class="dense"><B>reusable_memory</B></DT><DD class="dense">- optional preallocated memory for the ASFontMagaer
                  object
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to Initialized &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  object on success.
NULL otherwise.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>create_font_manager() will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  structure &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
needed. It wioll then &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  of font_path and supplied pointer to
Display in it. At that time Hash table of loaded fonts is initialized,
and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  needed FreeType library is initialized as well.
&nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  object returned by this functions has to be &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
  at all
times untill &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  drawing is no longer needed.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/destroy_font_manager()"><UL><B>libAfterImage/asfont/destroy_font_manager()</B><br></A><LI><B>NAME</B><br>
<A NAME="destroy_font_manager()"></A><B>destroy_font_manager()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void destroy_font_manager( &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *fontman,
                           Bool reusable );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>fontman</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  object to be deallocated.
</DD><DT class="dense"><B>reusable</B></DT><DD class="dense">- If True, then memory holding object itself will not be
           freed - only resources will be deallocated. That is
           usefull for structures created on stack.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>destroy_font_manager() closes all the fonts &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
  with this
&nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 . It will also close connection to FreeType library, and
deallocate all cached data. If reusable is False - then memory used
for object itself will not be freed.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/open_freetype_font()"><UL><B>libAfterImage/asfont/open_freetype_font()</B><br></A><LI><B>NAME</B><br>
<A NAME="open_freetype_font()"></A><B>open_freetype_font()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *open_freetype_font( &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *fontman,
                            const char *font_string,
                            int face_no,
                            int size, Bool verbose);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>fontman</B></DT><DD class="dense">- pointer to previously created &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 . Needed for
              connection to FreeType library, as well as path to
              search fonts in.
</DD><DT class="dense"><B>font_string</B></DT><DD class="dense">- filename of the file containing font's data.
</DD><DT class="dense"><B>face_no</B></DT><DD class="dense">- number of face within the font file
</DD><DT class="dense"><B>size</B></DT><DD class="dense">- font size in points. Applicable only to scalable fonts,
              such as TrueType.
</DD><DT class="dense"><B>verbose</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True, extensive error messages will be printed &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
              problems encountered.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to Opened &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure, containing all the glyphs of the
font, as well as other relevant info. On failure returns NULL.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>open_freetype_font() will attempt to find font file in any of the
directories specified in &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 's font_path. If it fails to do
so - then it will check &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  filename has alldigit extentions. It will
then try to interpret that extention as a face number, and try and
find the file with extention stripped off.
If file was found function will atempt to read it using FreeType
library. If requested face is not available in the font - face 0 will
be used.
On success all the font's glyphs will be rendered and cached, and
needed font geometry info collected.
When FreeType Library is not available that function does nothing.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/open_X11_font()"><UL><B>libAfterImage/asfont/open_X11_font()</B><br></A><LI><B>NAME</B><br>
<A NAME="open_X11_font()"></A><B>open_X11_font()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *open_X11_font( &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *fontman,
                       const char *font_string);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>fontman</B></DT><DD class="dense">- pointer to previously created &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 . Needed for
              connection X Server.
</DD><DT class="dense"><B>font_string</B></DT><DD class="dense">- name of the font as recognized by Xlib.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to Opened &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure, containing all the glyphs of the
font, as well as other relevant info. On failure returns NULL.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>open_X11_font() attempts to load and &nbsp;<? local_doc_url("visualdoc.php","query","asvisual#query_screen_visual_id()",$srcunset,$subunset) ?>
  font using Xlib calls.
On success it goes thgroughthe codemap of the font and renders all
the glyphs available. Glyphs then gets transfered to the client's
memory and encoded using RLE compression. At this time smoothing
filters are applied on glyph pixmaps, &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  its size exceeds threshold.
</PRE></LI><LI><B>TODO</B><br><PRE>implement proper XFontSet support, when used with I18N enabled.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/get_asfont()"><UL><B>libAfterImage/asfont/get_asfont()</B><br></A><LI><B>NAME</B><br>
<A NAME="get_asfont()"></A><B>get_asfont()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *get_asfont( &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *fontman,
                    const char *font_string,
                    int face_no, int size,
                    &nbsp;<? local_doc_url("visualdoc.php","ASFontType","asfont#ASFontType",$srcunset,$subunset) ?>
  type );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>fontman</B></DT><DD class="dense">- pointer to previously created &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 . Needed for
              connection to FreeType library, path to search fonts
              in, and X Server connection.
</DD><DT class="dense"><B>font_string</B></DT><DD class="dense">- font name or filename of the file containing font's data.
</DD><DT class="dense"><B>face_no</B></DT><DD class="dense">- number of face within the font file
</DD><DT class="dense"><B>size</B></DT><DD class="dense">- font size in points. Applicable only to scalable fonts,
              such as TrueType.
</DD><DT class="dense"><B>type</B></DT><DD class="dense">- specifies the type of the font, or GuessWho for
              autodetection.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to Opened &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure, containing all the glyphs of the
font, as well as other relevant info. On failure returns NULL.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function provides unified interface to font loading. It performs
search in &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  to see &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  this specific font has been
loaded already, and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  so - returns pointer to relevant structure.
Otherwise it tryes to load font as FreeType font first, and then
Xlib font, unless exact font type is specifyed.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/release_font()"><UL><B>libAfterImage/asfont/release_font()</B><br></A><LI><B>NAME</B><br>
<A NAME="release_font()"></A><B>release_font()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void release_font( &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *font );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>font</B></DT><DD class="dense">- pointer to the valid &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure containing loaded font.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns current reference count. -1 means that object has been
destroyed.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This function will decrement reference count on loaded font and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
 
reference count will be less then 0 ( meaning that release_font() has
been called more times then get_asfont() ) it will close the font,
remove it from &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  all the glyphs and
generally &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  everything else used by &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 .
Otherwise font will remain in memory for faster reuse.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/print_asfont()"><UL><B>libAfterImage/asfont/print_asfont()</B><br></A><LI><B>NAME</B><br>
<A NAME="print_asfont()"></A><B>print_asfont()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void    print_asfont( FILE* stream,
                      &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 * font);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>stream</B></DT><DD class="dense">- output file pointer
</DD><DT class="dense"><B>font</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure to &nbsp;<? local_doc_url("visualdoc.php","print","asimage#print_asimage_manager()",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>prints all the geometry information about font.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/print_asglyph()"><UL><B>libAfterImage/asfont/print_asglyph()</B><br></A><LI><B>NAME</B><br>
<A NAME="print_asglyph()"></A><B>print_asglyph()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void    print_asglyph( FILE* stream,
                        &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 * font, unsigned long c);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>stream</B></DT><DD class="dense">- output file pointer
</DD><DT class="dense"><B>font</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure to &nbsp;<? local_doc_url("visualdoc.php","print","asimage#print_asimage_manager()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>c</B></DT><DD class="dense">- character code to &nbsp;<? local_doc_url("visualdoc.php","print","asimage#print_asimage_manager()",$srcunset,$subunset) ?>
  glyph for
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>prints out contents of the cached glyph for specifyed character code.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/draw_text()"><UL><B>libAfterImage/asfont/draw_text()</B><br></A><LI><B>NAME</B><br>
<A NAME="draw_text()"></A><B>draw_text()</B><P class="dense"></P>
<A NAME="draw_fancy_text()"></A><B>draw_fancy_text()</B><P class="dense"></P>
<A NAME="get_text_size()"></A><B>get_text_size()</B><P class="dense"></P>
<A NAME="get_fancy_text_size();"></A><B>get_fancy_text_size();</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *draw_text( const char *&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 ,
                    &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *font, &nbsp;<? local_doc_url("visualdoc.php","ASText3DType","asfont#ASText3DType",$srcunset,$subunset) ?>
  type,
                    int compression );
&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *draw_fancy_text( const void *&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 ,
                         struct &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *font, &nbsp;<? local_doc_url("visualdoc.php","ASTextAttributes","asfont#ASTextAttributes",$srcunset,$subunset) ?>
  *attr,
                             int compression, 
                             int length );
Bool get_text_size( const char *&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 ,
                    &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *font, &nbsp;<? local_doc_url("visualdoc.php","ASText3DType","asfont#ASText3DType",$srcunset,$subunset) ?>
  type,
                    unsigned int *width, unsigned int *height );
Bool get_fancy_text_size( const void *&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 ,
                             struct &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  *font, &nbsp;<? local_doc_url("visualdoc.php","ASTextAttributes","asfont#ASTextAttributes",$srcunset,$subunset) ?>
  *attr,
                         unsigned int *width, unsigned int *height,
                             int length,
                             int *x_positions );        

</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>text</B></DT><DD class="dense">- actuall &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  to render
</DD><DT class="dense"><B>font</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  to render &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  with
</DD><DT class="dense"><B>type</B></DT><DD class="dense">- one of the few available types of 3D &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- compression level to attempt on resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>width</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  width.
</DD><DT class="dense"><B>height</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  height.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  containing rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on success.
NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>draw_text() creates new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  of the size big enough to contain
entire &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . It then renders the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  using supplied font as an alpha
channel of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
get_text_size() can be used to determine the size of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  about
to be drawn, so that appropriate drawable can be prepared.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/get_asfont_glyph_spacing()"><UL><B>libAfterImage/asfont/get_asfont_glyph_spacing()</B><br></A><LI><B>NAME</B><br>
<A NAME="get_asfont_glyph_spacing()"></A><B>get_asfont_glyph_spacing()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool get_asfont_glyph_spacing( &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 * font, int *x, int *y );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>font</B></DT><DD class="dense">- Loaded &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>x</B></DT><DD class="dense">- pointer to the variable to receive horizontal spacing &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>y</B></DT><DD class="dense">- pointer to the variable to receive vertical spacing &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>True &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  meaningfull information has been returned.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Returns inter-glyph spacing of specified font.
</PRE></LI></UL>
<A NAME="libAfterImage/asfont/set_asfont_glyph_spacing()"><UL><B>libAfterImage/asfont/set_asfont_glyph_spacing()</B><br></A><LI><B>NAME</B><br>
<A NAME="set_asfont_glyph_spacing()"></A><B>set_asfont_glyph_spacing()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool set_asfont_glyph_spacing( &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 * font, int x, int y );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>font</B></DT><DD class="dense">- Loaded &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>x</B></DT><DD class="dense">- new horizontal spacing &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>y</B></DT><DD class="dense">- new vertical spacing &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>TRue on success.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Changes inter-glyph spacing of the specified font.
</PRE></LI></UL>
