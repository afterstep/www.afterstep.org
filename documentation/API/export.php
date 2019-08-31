&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASImage Export</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">functionality for writing images into files</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/export.h"><UL><B>libAfterImage/export.h</B><br></A><LI><B>NAME</B><br>
<A NAME="export"></A><B>export</B><P class="dense">- Image output into different file formats.
</P></LI><LI><B>SEE ALSO</B><br><PRE>Structures :
         ASXpmExportParams
         &nbsp;<? local_doc_url("visualdoc.php","ASPngExportParams","export#ASPngExportParams",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASJpegExportParams","export#ASJpegExportParams",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASGifExportParams","export#ASGifExportParams",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageExportParams","export#ASImageExportParams",$srcunset,$subunset) ?>
 

Functions :
        ASImage2file()

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
<A NAME="libAfterImage/ExportFlags"><UL><B>libAfterImage/ExportFlags</B><br></A><LI><B>NAME</B><br>
<A NAME="EXPORT_GRAYSCALE"></A><B>EXPORT_GRAYSCALE</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  image as grayscale.
</P>
<A NAME="EXPORT_ALPHA"></A><B>EXPORT_ALPHA</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  alpha channel &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  format permits
</P>
<A NAME="EXPORT_APPEND"></A><B>EXPORT_APPEND</B><P class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  format allows multiple images - image will be 
appended
</P></LI><LI><B>FUNCTION</B><br><PRE>Some common flags that could be used while writing images into
different file formats.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#define EXPORT_GRAYSCALE            (0x01&lt;&lt;0)
#define EXPORT_ALPHA                (0x01&lt;&lt;1)
#define EXPORT_APPEND               (0x01&lt;&lt;3)  /* adds subimage  */
#define EXPORT_ANIMATION_REPEATS    (0x01&lt;&lt;4)  /* number of loops to repeat GIF animation */
/*****/

</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASPngExportParams"><UL><B>libAfterImage/ASPngExportParams</B><br></A><LI><B>NAME</B><br>
<A NAME="ASPngExportParams"></A><B>ASPngExportParams</B><P class="dense">- parameters for &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  into PNG file.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct
{
    &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
  type;
    ASFlagType flags ;
    int compression ;
}&nbsp;<? local_doc_url("visualdoc.php","ASPngExportParams","export#ASPngExportParams",$srcunset,$subunset) ?>
  ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASJpegExportParams"><UL><B>libAfterImage/ASJpegExportParams</B><br></A><LI><B>NAME</B><br>
<A NAME="ASJpegExportParams"></A><B>ASJpegExportParams</B><P class="dense">- parameters for &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  into JPEG file.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct
{
    &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
  type;
    ASFlagType flags ;
    int quality ;
}&nbsp;<? local_doc_url("visualdoc.php","ASJpegExportParams","export#ASJpegExportParams",$srcunset,$subunset) ?>
  ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASGifExportParams"><UL><B>libAfterImage/ASGifExportParams</B><br></A><LI><B>NAME</B><br>
<A NAME="ASGifExportParams"></A><B>ASGifExportParams</B><P class="dense">- parameters for &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  into GIF file.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct
{
    &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
  type;
    ASFlagType flags ;
    int dither ;
    int opaque_threshold ;
    unsigned short animate_delay ;
    unsigned short animate_repeats ;
}&nbsp;<? local_doc_url("visualdoc.php","ASGifExportParams","export#ASGifExportParams",$srcunset,$subunset) ?>
  ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASTiffExportParams"><UL><B>libAfterImage/ASTiffExportParams</B><br></A><LI><B>NAME</B><br>
<A NAME="ASTiffExportParams"></A><B>ASTiffExportParams</B><P class="dense">- parameters for &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  into TIFF file.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef struct
{
    &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
  type;
    ASFlagType flags ;
    CARD32 rows_per_strip ;

/* these are suitable compressions : */
#define TIFF_COMPRESSION_NONE       1
#define TIFF_COMPRESSION_OJPEG      6   /* !6.0 JPEG */
#define TIFF_COMPRESSION_JPEG       7
#define TIFF_COMPRESSION_PACKBITS   32773   /* Macintosh RLE */
#define TIFF_COMPRESSION_DEFLATE    32946   /* Deflate compression */
    /* you should be able to use other values from tiff.h as well */
    CARD32 compression_type ;
    int jpeg_quality ;

    int opaque_threshold ;
}&nbsp;<? local_doc_url("visualdoc.php","ASTiffExportParams","export#ASTiffExportParams",$srcunset,$subunset) ?>
  ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/ASImageExportParams"><UL><B>libAfterImage/ASImageExportParams</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImageExportParams"></A><B>ASImageExportParams</B><P class="dense">- union of structures holding parameters for
  &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  into different file formats.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>Treatment of this union depends on what type of &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  was requested.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
 
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
typedef union &nbsp;<? local_doc_url("visualdoc.php","ASImageExportParams","export#ASImageExportParams",$srcunset,$subunset) ?>
 
{
    &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
    type;
    ASXpmExportParams  xpm;
    &nbsp;<? local_doc_url("visualdoc.php","ASPngExportParams","export#ASPngExportParams",$srcunset,$subunset) ?>
   png;
    &nbsp;<? local_doc_url("visualdoc.php","ASJpegExportParams","export#ASJpegExportParams",$srcunset,$subunset) ?>
  jpeg;
    &nbsp;<? local_doc_url("visualdoc.php","ASGifExportParams","export#ASGifExportParams",$srcunset,$subunset) ?>
   gif;
    &nbsp;<? local_doc_url("visualdoc.php","ASTiffExportParams","export#ASTiffExportParams",$srcunset,$subunset) ?>
  tiff;
}&nbsp;<? local_doc_url("visualdoc.php","ASImageExportParams","export#ASImageExportParams",$srcunset,$subunset) ?>
 ;
</PRE></div><br></p></LI></UL>
<A NAME="libAfterImage/export/ASImage2file()"><UL><B>libAfterImage/export/ASImage2file()</B><br></A><LI><B>NAME</B><br>
<A NAME="ASImage2file()"></A><B>ASImage2file()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool ASImage2file( &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, const char *dir, const char *file,
              &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
  type, &nbsp;<? local_doc_url("visualdoc.php","ASImageExportParams","export#ASImageExportParams",$srcunset,$subunset) ?>
  *params );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>im</B></DT><DD class="dense">- Image to write out.
</DD><DT class="dense"><B>dir</B></DT><DD class="dense">- directory name to write file into (optional,
               could be NULL)
</DD><DT class="dense"><B>file</B></DT><DD class="dense">- file name with or without directory name.
</DD><DT class="dense"><B>type</B></DT><DD class="dense">- output file format. ( see &nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
  )
</DD><DT class="dense"><B>params</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","ASImageExportParams","export#ASImageExportParams",$srcunset,$subunset) ?>
  union's member for the
               above type, with additional &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  parameters, such as
               quality, compression, etc. If NULL then all defaults
               will be used.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>True on success. False - failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage2file","export#ASImage2file()",$srcunset,$subunset) ?>
  will construct filename out of dir and file components
and then will call specific filter to write out file in requested
format.
</PRE></LI><LI><B>NOTES</B><br><PRE>Some formats support compression, others support lossy compression,
yet others allows you to limit number of colors and colordepth.
Each specific filter will try to interpret those parameters in its
own way.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>asmerge.c: &nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
 .3
</PRE></LI></UL>
