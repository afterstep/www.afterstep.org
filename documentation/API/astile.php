&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage example 3: Image tiling/croping</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">demonstrates image tiling/cropping and tinting</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/ASTile"><UL><B>libAfterImage/tutorials/ASTile</B><br></A><LI><B>NAME</B><br>
<A NAME="ASTile"></A><B>ASTile</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Simple program based on &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  image.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>All we want to do here is to &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  image filename, &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  and
desired geometry from the command line. We then load this image, and
proceed on to tiling it based on parameters. Tiling geometry
specifies rectangular shape on limitless plane on which original
image is tiled. While we are at tiling the image we also &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  it to
specified &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , or to some random &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  derived from the current
time in seconds elapsed since 1971.
We then display the result in simple window.
After that we would want to &nbsp;<? local_doc_url("visualdoc.php","wait","common#wait_closedown()",$srcunset,$subunset) ?>
 , until user closes our window.

In this tutorial we will only explain new steps, not described in
previous tutorial. New steps described in this tutorial are :
&nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .1. Parsing &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  tinting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
&nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .2. Parsing geometry spec.
&nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .3. Tiling and tinting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
  - explanation of basic steps needed to use &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  and
         some other simple things.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

#include &quot;../afterbase.h&quot;
#include &quot;../afterimage.h&quot;
#include &quot;common.h&quot;

void usage()
{
    printf( &quot;Usage: astile [-h]|[[-g geometry][-t tint_color] image]\n&quot;);
    printf( &quot;Where: image    - source image filename.\n&quot;);
    printf( &quot;       geometry - width and height of the resulting image,\n&quot;);
    printf( &quot;                  and x, y of the origin of the tiling on &quot;
            &quot;source image.\n&quot;);
    printf( &quot;       tint_color - &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  image with.( defaults to &quot;
            &quot;current time :)\n&quot;);
}

int main(int argc, char* argv[])
{
    Window w ;
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv ;
    int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = 0, depth = 0;
    char *image_file = &quot;rose512.jpg&quot; ;
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  tint_color = time(NULL);
    int tile_x, tile_y, geom_flags = 0;
    unsigned int tile_width, tile_height ;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im ;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .1 : */
    set_application_name( argv[0] );

#ifndef X_DISPLAY_MISSING
    /* parse_argb_color can only be used after display is &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
 ,
       otherwise we are limited to colors defined as ARGB values : */
    dpy = XOpenDisplay(NULL);
    _XA_WM_DELETE_WINDOW = XInternAtom( dpy, &quot;WM_DELETE_WINDOW&quot;, False);
    &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = DefaultScreen(dpy);
    depth = DefaultDepth( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  );
#endif

    if( argc &gt; 1 )
    {
        int i ;

        if( strncmp( argv[1], &quot;-h&quot;, 2 ) == 0 )
        {
            usage();
            return 0;
        }

        for( i = 1 ; i &lt; argc ; i++ )
        {
            if( argv[i][0] == '-' &amp;&amp; i &lt; argc-1 )
            {
                switch(argv[i][1])
                {
                    case 't' :          /* see &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .1 : */
                        if( parse_argb_color( argv[i+1], &amp;tint_color ) ==
                            argv[i+1] )
                            show_warning( &quot;unable to parse &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  - &quot;
                                          &quot;default used: #%8.8lX&quot;,
                                          (unsigned long)tint_color );
                        break ;
                    case 'g' :          /* see &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .2 : */
                        geom_flags = XParseGeometry( argv[i+1],
                                                     &amp;tile_x, &amp;tile_y,
                                                     &amp;tile_width,
                                                     &amp;tile_height );
                        break ;
                }
                ++i ;
            }else
                image_file = argv[i] ;
        }
    }else
    {
        show_warning( &quot;no image file or &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  specified - &quot;
                      &quot;defaults used: \&quot;%s\&quot; #%8.8lX&quot;,
                      image_file, (unsigned long)tint_color );
        usage();
    }

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .2 : */
    im = file2ASImage( image_file, 0xFFFFFFFF, SCREEN_GAMMA, 0, getenv(&quot;IMAGE_PATH&quot;), NULL );

    /* Making sure tiling geometry is sane : */
    if( !get_flags(geom_flags, XValue ) )
        tile_x = im-&gt;width/2 ;
    if( !get_flags(geom_flags, YValue ) )
        tile_y = im-&gt;height/2 ;
    if( !get_flags(geom_flags, WidthValue ) )
        tile_width = im-&gt;width*2 ;
    if( !get_flags(geom_flags, HeightValue ) )
        tile_height = im-&gt;height*2;
    printf( &quot;%s: tiling image \&quot;%s\&quot; to &quot;
            &quot;%dx%d%+d%+d tinting with #%8.8lX\n&quot;,
            get_application_name(), image_file, tile_width, tile_height,
            tile_x, tile_y, (unsigned long)tint_color );

    if( im != NULL )
    {
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .3 : */
        asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );
        w = None ;
#ifndef X_DISPLAY_MISSING
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .4 : */
        w = create_top_level_window( asv, DefaultRootWindow(dpy), 32, 32,
                                     tile_width, tile_height, 1, 0, NULL,
                                     &quot;&nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 &quot;, image_file );
        if( w != None )
        {
            Pixmap p ;
            &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *tinted_im ;

            XMapRaised   (dpy, w);
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .3 : */
            tinted_im = tile_asimage( asv, im, tile_x, tile_y,
                                      tile_width, tile_height,
                                      tint_color, ASA_XImage, 0,
                                      ASIMAGE_QUALITY_TOP );
            destroy_asimage( &amp;im );
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5 : */
            p = asimage2pixmap( asv, DefaultRootWindow(dpy), tinted_im,
                                NULL, True );
            destroy_asimage( &amp;tinted_im );
            /* see common.c: set_window_background_and_free() : */
            p = set_window_background_and_free( w, p );
        }
        /* see common.c: wait_closedown() : */
        wait_closedown(w);
#else
        {
            &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *tinted_im ;
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .3 : */
            tinted_im = tile_asimage( asv, im, tile_x, tile_y,
                                      tile_width, tile_height,
                                      tint_color, ASA_ASImage, 0,
                                      ASIMAGE_QUALITY_TOP );
            destroy_asimage( &amp;im );
            /* writing result into the file */
            ASImage2file( tinted_im, NULL, &quot;astile.jpg&quot;, ASIT_Jpeg, NULL );
            destroy_asimage( &amp;tinted_im );
        }
#endif
    }
    return 0 ;
}
</PRE></div><br></p></LI>
<A NAME="libAfterImage/tutorials/ASTile.1 [3.1]"><UL><B>libAfterImage/tutorials/ASTile.1 [3.1]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 1. Color parsing.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  utilizes function provided by libAfterBase for &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
parsing. In case libAfterBase is unavailable - &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 
includes its own &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  of that function. This function differs from
standard XParseColor in a way that it allows for parsing of alpha
channel in addition to red, green and blue. It autodetects &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 
include alpha channel or not, using the following logic:
If number of hex digits in &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  spec is divisible by 4 and is not
equal to 12 then first digits are treated as alpha channel.
In case named &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is specified or now apha channel is specified
alpha &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of 0xFF will be used, marking this &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  as &nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    if( parse_argb_color( argv[i+1], &amp;tint_color ) == argv[i+1] )
           show_warning( &quot;unable to parse &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  - default used: #%8.8X&quot;,
                       tint_color );
</PRE></LI><LI><B>NOTES</B><br><PRE>On success parse_argb_color returns pointer to the character
immidiately following &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  specification in original string.
Therefore test for returned &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  to be equal to original string will
can be used to detect error.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>libAfterBase, parse_argb_color(), &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASTile.2 [3.2]"><UL><B>libAfterImage/tutorials/ASTile.2 [3.2]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 2. Parsing the geometry.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Geometry can be specified in WIDTHxHEIGHT+X+Y format. Accordingly we
use standard X function to parse it: XParseGeometry. Returned flags
tell us what values has been specified. We only have to &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  the rest
with some sensible defaults. Default x is width/2, y is height/2, and
default size is same as image's width.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    geom_flags = XParseGeometry ( argv[i+1], &amp;tile_x, &amp;tile_y,
                                  &amp;tile_width, &amp;tile_height );
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .1
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASTile.3 [3.3]"><UL><B>libAfterImage/tutorials/ASTile.3 [3.3]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 3. Actuall tiling of the image.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Actuall tiling is quite simple - just call tile_asimage and it will
generate new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  containing tiled and tinted image. For the sake
of example we &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  quality to TOP, but normally GOOD quality is quite
sufficient, and is a default. Again, compression is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0 since we
do not intend to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  image for long time. Even better we don't need
to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  it at all - all we need is XImage, so we can transfer it to
the server easily. That is why to_xim argument is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to ASA_XImage.
As the result obtained &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  will not have any data in its buffers,
but it will have &nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  member &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to point to valid XImage.
Subsequently we enjoy that convinience, by setting use_cached to True
in call to asimage2pixmap(). That ought to &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  us alot of processing.

Tinting works in both directions - it can increase intensity of the
&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  or decrease it. If any particular channel of the tint_color is
greater then 127 then intensity is increased, otherwise its decreased.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>tinted_im = tile_asimage( asv, im, tile_x, tile_y,
                        tile_width, tile_height,
                        tint_color,
                        ASA_XImage, 0, ASIMAGE_QUALITY_TOP );
destroy_asimage( &amp;im );
</PRE></LI><LI><B>NOTES</B><br></LI><LI><B>SEE ALSO</B><br><PRE>tile_asimage().
</PRE></LI></UL></UL>
