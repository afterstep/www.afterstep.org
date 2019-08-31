&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASImage Import</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">functionality for reading images from files</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/import.h"><UL><B>libAfterImage/import.h</B><br></A><LI><B>NAME</B><br>
<A NAME="import"></A><B>import</B><P class="dense">- Image file format autodetection, reading and decoding 
routines.
</P></LI><LI><B>SEE ALSO</B><br><PRE>Functions :
        file2ASImage(), get_asimage(), file2pixmap()

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
<A NAME="libAfterImage/gamma"><UL><B>libAfterImage/gamma</B><br></A><LI><B>NAME</B><br>
<A NAME="SCREEN_GAMMA"></A><B>SCREEN_GAMMA</B><P class="dense">- Defines default &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  for &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  gamma correction.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define SCREEN_GAMMA 2.2
#define DEFAULT_PNG_IMAGE_GAMMA     0.45455
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASImageFileTypes"><UL><B>libAfterImage/ASImageFileTypes</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageFileTypes"></A><B>ASImageFileTypes</B><P class="dense">- List of known image file formats.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef enum
{
    ASIT_Xpm = 0,
    ASIT_ZCompressedXpm,
    ASIT_GZCompressedXpm,
    ASIT_Png,
    ASIT_Jpeg,
    ASIT_Xcf,
    ASIT_Ppm,
    ASIT_Pnm,
    ASIT_Bmp,
    ASIT_Ico,
    ASIT_Cur,
    ASIT_Gif,
    ASIT_Tiff,
    ASIT_XMLScript,
    ASIT_SVG,
    /* reserved for future implementation : */
    ASIT_Xbm,
    ASIT_Targa,
    ASIT_Supported = ASIT_Targa,
    ASIT_Pcx,
    ASIT_HTML,
    ASIT_XML,
    ASIT_Unknown
}&nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASImageListEntry"><UL><B>libAfterImage/ASImageListEntry</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageListEntry"></A><B>ASImageListEntry</B><P class="dense">- entry in linked &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of images loaded from single 
directory.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct ASImageListEntryBuffer
{
#define ASILEB_Dirty        (0x01&lt;&lt;0)          
#define ASILEB_Binary       (0x01&lt;&lt;1)          

    ASFlagType flags ; 

    size_t size ; 
    char  *data ; 
    
}ASImageListEntryBuffer;

typedef struct &nbsp;<? local_doc_url("visualdoc.php","ASImageListEntry","import#ASImageListEntry",$srcunset,$subunset) ?>
 
{
#define MAGIC_ASIMAGE_LIST_ENTRY            0xA3A311E4
#define IS_ASIMAGE_LIST_ENTRY(e)  (((e)!=NULL)&amp;&amp;((e)-&gt;magic==MAGIC_ASIMAGE_LIST_ENTRY)&amp;&amp;((e)-&gt;ref_count&gt;0)) 

    unsigned long magic ; 
    struct &nbsp;<? local_doc_url("visualdoc.php","ASImageListEntry","import#ASImageListEntry",$srcunset,$subunset) ?>
  *prev, *next ;
    char   *name ;
    char   *fullfilename ;

    &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
     type;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
             *preview;
    
    mode_t d_mode;
    time_t d_mtime;
    off_t  d_size;      /* total size, in bytes */

    ASImageListEntryBuffer *buffer ; 

    int ref_count;
}&nbsp;<? local_doc_url("visualdoc.php","ASImageListEntry","import#ASImageListEntry",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/import/file2ASImage()"><UL><B>libAfterImage/import/file2ASImage()</B><br></A><LI><B>NAME</B><br>
<A NAME="file2ASImage()"></A><B>file2ASImage()</B><P class="dense">- load &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  from file.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *file2ASImage( const char *file, ASFlagType what,
                       double gamma,
                       unsigned int compression, ... );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>file</B></DT><DD class="dense">- file name with or without directory name
</DD><DT class="dense"><B>what</B></DT><DD class="dense">- reserved for future use
</DD><DT class="dense"><B>gamma</B></DT><DD class="dense">- gamma &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to be used to correct image
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- compression level of the resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>...</B></DT><DD class="dense">- NULL terminated &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of strings, representing
               arbitrary number of directories to be searched each.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure holding image data on success.
NULL on failure
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","file2ASImage","import#file2ASImage()",$srcunset,$subunset) ?>
  will attempt to interpret filename in the following way:
1)It will try to find file using unmodified filename in all the
provided search paths.
2)It will attempt to append .gz and then .Z to the filename and
find such file in all the provided search paths.
3)If filename ends with extension consisting of digits only - it will
attempt to find file with this extension stripped off. On success
this extension will be used to load subimage from the file with that
number. Subimages are supported only for XCF, GIF, BMP, ICO and CUR
files.
After the file is found file2ASImage() attempts to detect file format,
and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is known it will load it into new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>asview.c: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .2
</PRE></LI></UL>
<A NAME="libAfterImage/import/get_asimage()"><UL><B>libAfterImage/import/get_asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="get_asimage()"></A><B>get_asimage()</B><P class="dense">- increment reference counter &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  file is already loaded,
or load image from file.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *get_asimage( &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 * imageman, const char *file,
                      ASFlagType what, unsigned int compression );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>imageman</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>file</B></DT><DD class="dense">- root window ID for the destination &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>what</B></DT><DD class="dense">- full image file's name with path.
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">-
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure holding image data on success.
NULL on failure
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>get_asimage will attempt check with the &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  of load
images, and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  image with requested filename already exists - it will
increment its reference count and return its pointer.
Otherwise it will call file2ASImage() to load image from file. It will
use PATH and gamma values from the &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
  to pass to
file2ASImage(). If image is successfully loaded - it will be added to
the &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
  and its pointer will be returned.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>file2ASImage()
</PRE></LI></UL>
<A NAME="libAfterImage/import/file2pixmap()"><UL><B>libAfterImage/import/file2pixmap()</B><br></A><LI><B>NAME</B><br>
<A NAME="file2pixmap()"></A><B>file2pixmap()</B><P class="dense">- convinience function to load file into X Pixmap.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>Pixmap file2pixmap( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window root,
                    const char *realfilename,
                    Pixmap *mask_out);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- root window ID for the destination &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>realfilename</B></DT><DD class="dense">- full image file's name with path.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>Pixmap ID of the X Pixmap filled with loaded image. If mask_out is
not NULL it will point to image mask Pixmap ID &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  there is an alpha
channel in image, None otherwise.
On failure None will be returned.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>file2pixmap() will attempt to &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
  specified file and autodetect its
format. If format is known it will load it into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  first, and
then convert it into X Pixmap. In case image has alpha channel -
mask Pixmap will be produced &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  mask_out is not NULL.
</PRE></LI></UL>
