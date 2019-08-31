&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage example 2: Image scaling</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">demonstrates image loading and scaling</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/ASScale"><UL><B>libAfterImage/tutorials/ASScale</B><br></A><LI><B>NAME</B><br>
<A NAME="ASScale"></A><B>ASScale</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Simple program based on &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  an image.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>We will load image and &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  it up to new size, specified as command
line arguments
We then display the result in simple window.
After that we would want to &nbsp;<? local_doc_url("visualdoc.php","wait","common#wait_closedown()",$srcunset,$subunset) ?>
 , until user closes our window.

In this tutorial we will only explain new steps, not described in
previous tutorial. New steps described in this tutorial are :
&nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .1. Parsing geometry spec.
&nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .2. Scaling &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Tutorial 1: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
  - explanation of basic steps needed to use
                     &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  and some other simple things.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

#include &quot;../afterbase.h&quot;
#include &quot;../afterimage.h&quot;
#include &quot;common.h&quot;

void usage()
{
    printf( &quot;Usage: asscale [-h]|[image [WIDTH[xHEIGHT]]]\n&quot;);
    printf( &quot;Where: image - is image filename.\n&quot;);
    printf( &quot;       WIDTH - width to &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  image to.( Naturally :)\n&quot;);
    printf( &quot;       HEIGHT- height to &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  image to.\n&quot;);
}

int main(int argc, char* argv[])
{
    char *image_file = &quot;rose512.jpg&quot; ;
    int dummy, geom_flags = 0;
    unsigned int to_width, to_height ;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im ;
    int clip_x = 0, clip_y = 0, clip_width = 0, clip_height = 0 ;
    int slice_x_start = 0, slice_x_end = 0, slice_y_start = 0, slice_y_end = 0 ;
    Bool slice_scale = False ;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .1 : */
    set_application_name( argv[0] );

    if( argc &gt; 1 )
    {
        int i = 2;
        if( strncmp( argv[1], &quot;-h&quot;, 2 ) == 0 )
        {
            usage();
            return 0;
        }
        image_file = argv[1] ;
        if( argc &gt; 2 )   /* see &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .1 : */
            geom_flags = XParseGeometry( argv[2], &amp;dummy, &amp;dummy,
                                         &amp;to_width, &amp;to_height );
    
        while( ++i &lt; argc )
        {   
            if( strncmp( argv[i], &quot;-sx1&quot;, 4 ) == 0 &amp;&amp; i+1 &lt; argc )
                slice_x_start = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-sx2&quot;, 4 ) == 0 &amp;&amp; i+1 &lt; argc )
                slice_x_end = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-sy1&quot;, 4 ) == 0 &amp;&amp; i+1 &lt; argc )
                slice_y_start = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-sy2&quot;, 4 ) == 0 &amp;&amp; i+1 &lt; argc )
                slice_y_end = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-cx&quot;, 4 ) == 0 &amp;&amp; i+1 &lt; argc )
                clip_x = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-cy&quot;, 4 ) == 0 &amp;&amp; i+1 &lt; argc )
                clip_y = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-cwidth&quot;, 7 ) == 0 &amp;&amp; i+1 &lt; argc )
                clip_width = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-cheight&quot;, 8 ) == 0 &amp;&amp; i+1 &lt; argc )
                clip_height = atoi(argv[++i]) ;
            else if( strncmp( argv[i], &quot;-ss&quot;, 3 ) == 0 )
                slice_scale = True ;
        }
               
    
    }else
    {
        show_warning( &quot;no image file or &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  geometry - defaults used:&quot;
                      &quot; \&quot;%s\&quot; &quot;,
                      image_file );
        usage();
    }
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .2 : */
    im = file2ASImage( image_file, 0xFFFFFFFF, SCREEN_GAMMA, 0, getenv(&quot;IMAGE_PATH&quot;), NULL );

    if( im != NULL )
    {
        &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv ;
        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *scaled_im ;
        /* Making sure tiling geometry is sane : */
        if( !get_flags(geom_flags, WidthValue ) )
            to_width = im-&gt;width*2 ;
        if( !get_flags(geom_flags, HeightValue ) )
            to_height = im-&gt;height*2;
        printf( &quot;%s: scaling image \&quot;%s\&quot; to %dx%d by factor of %fx%f\n&quot;,
                get_application_name(), image_file, to_width, to_height,
                (double)to_width/(double)(im-&gt;width),
                (double)to_height/(double)(im-&gt;height) );

#ifndef X_DISPLAY_MISSING
        {
            Window w ;
            int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth ;

            dpy = XOpenDisplay(NULL);
            _XA_WM_DELETE_WINDOW = XInternAtom( dpy, 
                                                &quot;WM_DELETE_WINDOW&quot;, 
                                                False);
            &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = DefaultScreen(dpy);
            depth = DefaultDepth( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  );
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .3 : */
            asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .4 : */
            w = create_top_level_window( asv, DefaultRootWindow(dpy), 
                                         32, 32,
                                         to_width, to_height, 1, 0, NULL,
                                         &quot;&nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 &quot;, image_file );
            if( w != None )
            {
                Pixmap p ;

                XMapRaised   (dpy, w);
                /* see &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .2 : */
                if( slice_x_start == 0 &amp;&amp; slice_x_end == 0 &amp;&amp; 
                    slice_y_start == 0 &amp;&amp; slice_y_end == 0 )
                {
                    scaled_im = scale_asimage2( asv, im,
                                                clip_x, clip_y, clip_width, clip_height, 
                                                to_width, to_height,
                                            ASA_XImage, 0, 
                                            ASIMAGE_QUALITY_DEFAULT );
                }else
                {
                    scaled_im = slice_asimage2( asv, im, slice_x_start, slice_x_end, 
                                               slice_y_start, slice_y_end,
                                            to_width, to_height, slice_scale,
                                            ASA_XImage, 0, 
                                            ASIMAGE_QUALITY_DEFAULT );
                }                      
                destroy_asimage( &amp;im );
                /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5 : */
                p = asimage2pixmap(asv, DefaultRootWindow(dpy), scaled_im,
                                    NULL, True );
                /* print_storage(NULL); */
                destroy_asimage( &amp;scaled_im );
                /* see common.c: set_window_background_and_free() : */
                p = set_window_background_and_free( w, p );
            }
            /* see common.c: wait_closedown() : */
            wait_closedown(w);
        }
#else
        asv = create_asvisual( NULL, 0, 0, NULL );
        scaled_im = scale_asimage(asv, im, to_width, to_height,
                                  ASA_ASImage, 0, 
                                  ASIMAGE_QUALITY_DEFAULT );
        /* writing result into the file */
        ASImage2file( scaled_im, NULL, &quot;asscale.jpg&quot;, ASIT_Jpeg, NULL );
        destroy_asimage( &amp;scaled_im );
        destroy_asimage( &amp;im );
#endif
    }
    return 0 ;
}
</PRE></div><br></p></LI>
<A NAME="libAfterImage/tutorials/ASScale.1 [2.1]"><UL><B>libAfterImage/tutorials/ASScale.1 [2.1]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 1. Parsing the geometry.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Geometry can be specified in WIDTHxHEIGHT+X+Y format. Accordingly we
use standard X function to parse it: XParseGeometry. Returned flags
tell us what values has been specified. Since we only need size -
we check &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is specified and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  not - simply default it to twice
as big as original image. Accordingly we use dummy variable to pass
to XParseGeometry.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    geom_flags = XParseGeometry( argv[3], &amp;dummy, &amp;dummy,
                                 &amp;to_width, &amp;to_height );
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASScale.2 [2.2]"><UL><B>libAfterImage/tutorials/ASScale.2 [2.2]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 2. Actual scaling the image.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>scale_asimage() scales image both up and down, and is very easy to
use - just pass it new size. In this example we use default quality.
Default is equivalent to GOOD which should be sufficient in
most cases. Compression is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0 since we do not intend to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
 
image for long time. Even better - we don't need to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  it at all -
all we need is XImage, so we can transfer it to the server easily.
That is why to_xim argument is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to ASA_XImage. As the result obtained
&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  will not have any data in its buffers, but it will have
&nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  member &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to point to valid XImage. Subsequently we enjoy
that convenience, by setting use_cached to True in call to
&nbsp;<? local_doc_url("visualdoc.php","asimage2pixmap","ximage#asimage2pixmap()",$srcunset,$subunset) ?>
 . That ought to &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  us alot of processing.

Scaling algorithm is rather sophisticated and is implementing 4 point
interpolation. Which basically means that we try to approximate each
missing point as an extension of the trend of 4 neighboring points -
two on each side. Closest neighbor's have more weight then outside
ones. 2D scaling is performed by scaling each scanline first, and
then interpolating missing scanlines.
Scaling down is somewhat skimpier, as it amounts to simple averaging
of the multiple pixels. All calculations are done in integer math on
per channel basis, and with precision 24.8 bits per channel per pixel.

</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    scaled_im = scale_asimage( asv, im, to_width, to_height,
                               ASA_XImage, 0, ASIMAGE_QUALITY_DEFAULT );
    destroy_asimage( &amp;im );
</PRE></LI><LI><B>NOTES</B><br><PRE>Scaling image up to very large height is much slower then to same
width due to algorithm specifics. Yet even on inferior hardware it
yields decent speeds.
When we successfully scaled image - we no longer need the original -
getting rid of it so it does not clog memory.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>scale_asimage().
</PRE></LI></UL></UL>
