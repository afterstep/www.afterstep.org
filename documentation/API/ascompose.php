&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage XML script processor</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">provides access to libAfterImage functionality, using scripts written in custom XML dialect</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/ascompose"><UL><B>libAfterImage/ascompose</B><br></A><LI><B>NAME</B><br>
<A NAME="ascompose"></A><B>ascompose</B><P class="dense">is a tool to compose image(s) and display/&nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  it based on
supplied XML input file.

</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  -f file|-s string [-o file] [-t type] [-V]
&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  -i include_file [-i more_include_file ... ]
             -f file|-s string [-o file] [-t type] [-V]
&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  -f file|-s string [-o file] [-t type] [-V] [-n]
&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  -f file|-s string [-o file] [-t type [-c compression_level]] 
             [-V] [-r]
&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  [-h]
&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  [-v]

</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  reads supplied XML data, and manipulates image accordingly.
It could &nbsp;<? local_doc_url("visualdoc.php","transform","transform#transform",$srcunset,$subunset) ?>
  images from files of any supported file format,
&nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  gradients, render antialiased texturized &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , perform
superimposition of arbitrary number of images, and &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  images into
files of any of supported output file formats.

At any point, the result of any operation could be assigned a name,
and later on referenced under this name.

At any point during the script processing, result of any operation
could be saved into a file of any supported file types.

Internal image format is 32bit ARGB with 8bit per channel.

Last image referenced, will be displayed in X window, unless -n option
is specified. If -r option is specified, then this image will be
displayed in root window of X display, effectively setting a &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 
for a desktop. If -o option is specified, this image will also be
saved into the file or requested type.

&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  can be compiled to not reference X Window System, thus
allowing it to be used on web servers and any other place. It does not
even require X libraries in that case.

Supported file types for input are :
XPM   - via internal code, or libXpm library.
JPEG  - via libJpeg library.
PNG   - via libPNG library.
XCF   - via internal code. For now XCF support is not complete as it
        does not &nbsp;<? local_doc_url("visualdoc.php","merge","transform#merge_layers()",$srcunset,$subunset) ?>
  layers.
PPM/PNM - via internal code.
BMP, ICO, CUR - via internal code.
GIF   - via libungif library.
TIFF  - via libtiff library (including alpha channel support).
see &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 /&nbsp;<? local_doc_url("visualdoc.php","ASImageFileTypes","import#ASImageFileTypes",$srcunset,$subunset) ?>
  for more.

Supported file types for output :
XPM   - via internal code, or libXpm library.
JPEG  - via libJpeg library.
PNG   - via libPNG library.
GIF   - via libungif library.
TIFF  - via libtiff library (including alpha channel support).

</PRE></LI><LI><B>OPTIONS</B><br><PRE>   -h --help          display help and exit.
   -f --file file     an XML file to use as input.
   -s --string string an XML string to use as input.
   -n --no-display    don't display the last referenced image.
   -r --root-window   &nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  last referenced image image on root window.
   -o --output file   output last referenced image in to a file.
                      You should use -t to specify what file type to
                      use. Filenames are meaningless when it comes to
                      determining what file type to use.
   -t --type type     type of file to output to.
   -c --compress level compression level.
   -v --version       display version and exit.
   -V --verbose       increase verbosity. To increase verbosity level
                      use several of these, like: &nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  -V -V -V.
   -D --debug         maximum verbosity - show everything and
                      debug messages.
   -i --include file  include file as input prior to processing main 
                         file.
</PRE></LI><LI><B>PORTABILITY</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
  could be used both with and without X window system. It has
been tested on most UNIX flavors on both 32 and 64 bit architecture.
It has also been tested under CYGWIN environment on Windows 95/NT/2000
</PRE></LI><LI><B>USES</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
          all the image manipulation routines.
libAfterBase          Optionally. Misc data handling such as hash
                      tables and console io. Must be used when compiled
                      without X Window support.
libJPEG               JPEG image format support.
libPNG                PNG image format support.
libungif              GIF image format support.
libTIFF               TIFF image format support.
</PRE></LI><LI><B>AUTHOR</B><br><PRE>Ethan Fisher          &lt;&nbsp;<? local_doc_url("visualdoc.php","allanon","blender#allanon_scanlines()",$srcunset,$subunset) ?>
  at crystaltokyo dot com&gt;
Sasha Vasko           &lt;sasha at aftercode dot net&gt;
Eric Kowalski         &lt;eric at beancrock dot net&gt;
</PRE></LI>
<A NAME="libAfterImage/ascompose/sample"><UL><B>libAfterImage/ascompose/sample</B><br></A><LI><B>EXAMPLE</B><br><PRE>Here is the default script that gets executed by &nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  no
parameters are given :
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  1
static char* default_doc_str = &quot;\
&lt;&nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
  op=&nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 &gt;\
  &lt;&nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
  op=&nbsp;<? local_doc_url("visualdoc.php","add","blender#add_scanlines()",$srcunset,$subunset) ?>
 &gt;\
    &lt;&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  width=512 height=proportional&gt;\
        &lt;&nbsp;<? local_doc_url("visualdoc.php","img","asimagexml#img",$srcunset,$subunset) ?>
  id=rose src=rose512.jpg/&gt;&lt;/&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
 &gt;\
    &lt;&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  width=512 height=384&gt;&lt;&nbsp;<? local_doc_url("visualdoc.php","img","asimagexml#img",$srcunset,$subunset) ?>
  src=back.xpm/&gt;&lt;/&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
 &gt;\
  &lt;/&nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
 &gt;\
  &lt;&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  width=512 height=384&gt;&lt;&nbsp;<? local_doc_url("visualdoc.php","img","asimagexml#img",$srcunset,$subunset) ?>
  src=fore.xpm/&gt;&lt;/&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
 &gt;\
&lt;/&nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
 &gt;\
&lt;&nbsp;<? local_doc_url("visualdoc.php","printf","asimagexml#printf",$srcunset,$subunset) ?>
  format=\&quot;original image width=%d\n\&quot; var=\&quot;rose.width\&quot;/&gt;\
&lt;&nbsp;<? local_doc_url("visualdoc.php","printf","asimagexml#printf",$srcunset,$subunset) ?>
  format=\&quot;original image height=%d\n\&quot; var=\&quot;rose.height\&quot;/&gt;\
&lt;&nbsp;<? local_doc_url("visualdoc.php","printf","asimagexml#printf",$srcunset,$subunset) ?>
  format=\
\&quot;original image size in pixels=%d\n\&quot; val=$rose.width*$rose.height/&gt;&quot;;
#else   
static char* default_doc_str = &quot;\
  &lt;&nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
  op=&nbsp;<? local_doc_url("visualdoc.php","add","blender#add_scanlines()",$srcunset,$subunset) ?>
 &gt;\
    &lt;&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  width=512 height=proportional&gt;\
        &lt;&nbsp;<? local_doc_url("visualdoc.php","img","asimagexml#img",$srcunset,$subunset) ?>
  id=rose src=rose512.jpg/&gt;&lt;/&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
 &gt;\
    &lt;&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  width=512 height=384&gt;&lt;&nbsp;<? local_doc_url("visualdoc.php","img","asimagexml#img",$srcunset,$subunset) ?>
  src=back.xpm/&gt;&lt;/&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
 &gt;\
  &lt;/&nbsp;<? local_doc_url("visualdoc.php","composite","asimagexml#composite",$srcunset,$subunset) ?>
 &gt;&quot;;
#endif
</PRE></div><br></p></LI></UL></UL>
