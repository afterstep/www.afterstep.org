&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage example 1: Image viewer</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">demonstrates loading and displaying of images</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/ASView"><UL><B>libAfterImage/tutorials/ASView</B><br></A><LI><B>NAME</B><br>
<A NAME="ASView"></A><B>ASView</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Simple image viewer based on &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>All we want to do here is to &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  image filename from the command line,
then load this image, and display it in simple window.
After that we would want to &nbsp;<? local_doc_url("visualdoc.php","wait","common#wait_closedown()",$srcunset,$subunset) ?>
 , until user closes our window.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

#define DO_CLOCKING

#include &quot;../afterbase.h&quot;
#include &quot;../afterimage.h&quot;
#include &quot;common.h&quot;

#ifdef DO_CLOCKING
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  TIME_WITH_SYS_TIME
# include &lt;sys/time.h&gt;
# include &lt;time.h&gt;
#else
# &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  HAVE_SYS_TIME_H
#  include &lt;sys/time.h&gt;
# else
#  include &lt;time.h&gt;
# endif
#endif
#endif


void usage()
{
    printf( &quot;Usage: asview [-h]|[image]\n&quot;);
    printf( &quot;Where: image - filename of the image to display.\n&quot;);
}


int main(int argc, char* argv[])
{
    char *image_file = &quot;rose512.jpg&quot; ;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im ;
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv ;
    int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth ;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .1 : */
    set_application_name( argv[0] );
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  (HAVE_AFTERBASE_FLAG==1)
    set_output_threshold(OUTPUT_LEVEL_DEBUG);
#ifdef DEBUG_ALLOCS
    fprintf( stderr, &quot;have DEBUG_ALLOCS\n&quot;);
#endif
#ifdef AFTERBASE_DEBUG_ALLOCS
    fprintf( stderr, &quot;have AFTERBASE_DEBUG_ALLOCS\n&quot;);
#endif
#endif

    if( argc &gt; 1 )
    {
        if( strcmp( argv[1], &quot;-h&quot; ) == 0 )
        {
            usage();
            return 0;
        }
        image_file = argv[1] ;
    }else
    {
        show_warning(   &quot;Image filename was not specified. &quot;
                        &quot;Using default: \&quot;%s\&quot;&quot;, image_file );
        usage();
    }
#ifndef X_DISPLAY_MISSING
    dpy = XOpenDisplay(NULL);
    XSynchronize (dpy, True);
    _XA_WM_DELETE_WINDOW = XInternAtom( dpy, &quot;WM_DELETE_WINDOW&quot;, 
                                        False);
    &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = DefaultScreen(dpy);
    depth = DefaultDepth( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  );
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .3 : */
    asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );
    /* asv = create_asvisual_for_id( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, 0x28, None, NULL ); */
#endif  
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .2 : */
    im = file2ASImage( image_file, 0xFFFFFFFF, SCREEN_GAMMA, 0, getenv(&quot;IMAGE_PATH&quot;), NULL );

    /* The following could be used to dump JPEG version of the image into
     * stdout : */
    /* ASImage2file( im, NULL, NULL, ASIT_Jpeg, NULL ); */


    if( im != NULL )
    {
#ifndef X_DISPLAY_MISSING
        Window w ;
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  0
        /* test example for get_asimage_channel_rects() : */
        XRectangle *rects ; unsigned int rects_count =0; int i ;
        rects = get_asimage_channel_rects( im, IC_ALPHA, 10, 
                                            &amp;rects_count );
        fprintf( stderr, &quot; %d rectangles generated : \n&quot;, rects_count );
        for( i = 0 ; i &lt; rects_count ; ++i )
            fprintf( stderr, &quot;\trect[%d]=%dx%d%+d%+d;\n&quot;, 
                     i, rects[i].width, rects[i].height, 
                     rects[i].x, rects[i].y );
#endif


#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  0        
        /* test example for fill_asimage : */
        fill_asimage(asv, im, 0, 0, 50, 50, 0xFFFF0000);
        fill_asimage(asv, im, 50, 50, 100, 50, 0xFFFF0000);
        fill_asimage(asv, im, 0, 100, 200, 50, 0xFFFF0000);
        fill_asimage(asv, im, 150, 0, 50, 50, 0xFFFF0000);
#endif
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  0
        /* test example for conversion to argb32 :*/
        {
            &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *tmp = tile_asimage( asv, im, 0, 0, im-&gt;width, im-&gt;height, TINT_NONE, ASA_ARGB32, 
                                          0, ASIMAGE_QUALITY_DEFAULT );  
            destroy_asimage( &amp;im );
            set_flags( tmp-&gt;flags, ASIM_DATA_NOT_USEFUL|ASIM_XIMAGE_NOT_USEFUL );
            im = tmp ;
        }          
#endif         
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .4 : */
        w = create_top_level_window( asv, DefaultRootWindow(dpy), 32, 32,
                                     im-&gt;width, im-&gt;height, 1, 0, NULL,
                                     &quot;&nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 &quot;, image_file );
        if( w != None )
        {
            Pixmap p ;
            
            XMapRaised   (dpy, w);
            XSync(dpy,False);
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5 : */
            p = create_visual_pixmap( asv, DefaultRootWindow(dpy), im-&gt;width, im-&gt;height, 0 );
    
            {
                /*int i ;*/
                START_TIME(started);
                /* for( i = 0 ; i &lt; 100 ; ++i )  To test performance! */
                asimage2drawable( asv, p, im, NULL, 0, 0, 0, 0, im-&gt;width, im-&gt;height, False);
                SHOW_TIME(&quot;&quot;, started);
            }
            /* print_storage(NULL); */
            destroy_asimage( &amp;im );
            /* see common.c:set_window_background_and_free(): */
            p = set_window_background_and_free( w, p );
        }
        /* no longer need this - lets clean it up :*/
        destroy_asvisual( asv, False );
        asv = NULL ;

        /* see common.c: wait_closedown() : */
        wait_closedown(w);
#else
        /* writing result into the file */
        ASImage2file( im, NULL, &quot;asview.jpg&quot;, ASIT_Jpeg, NULL );
#endif
    }

#ifdef DEBUG_ALLOCS
    /* different cleanups of static memory pools : */
    flush_ashash_memory_pool();
    asxml_var_cleanup();
    custom_color_cleanup();
    build_xpm_colormap( NULL );
    flush_default_asstorage();
    /* requires libAfterBase */
    print_unfreed_mem();
#endif

    return 0 ;
}
</PRE></div><br></p></LI>
<A NAME="libAfterImage/tutorials/ASView.1 [1.1]"><UL><B>libAfterImage/tutorials/ASView.1 [1.1]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 1. Initialization.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  requires only 2 global things to be &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
 , and both of
those are inherited from libAfterBase: dpy - pointer to &nbsp;<? local_doc_url("visualdoc.php","open","asfont#open_freetype_font()",$srcunset,$subunset) ?>
  X display-
naturally that is something we cannot live without; application name -
used in all the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  output, such as error and warning messages and
also debugging messages &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  such are enabled.
The following two line are about all that is required to &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
  both
of this global variables :
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    set_application_name( argv[0] );
    dpy = XOpenDisplay(NULL);
</PRE></LI><LI><B>NOTES</B><br><PRE>First line is setting up application name from command line's
program name. Second opens up X display specified in DISPLAY env.
variable. Naturally based on application purpose different parameters
can be passed to these functions, such as some custom display string.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>libAfterBase, set_application_name(), XOpenDisplay(), Display,
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASView.2 [1.2]"><UL><B>libAfterImage/tutorials/ASView.2 [1.2]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 2. Loading image file.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>At this point we are ready to load image from file into memory. Since
&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  does not use any X facilities to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
  image - we don't
have to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  any window or anything else yet. Even dpy is optional
here - it will only be used to try and parse names of colors from
.XPM images.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    im = file2ASImage( image_file, 0xFFFFFFFF, SCREEN_GAMMA, 0, NULL);
</PRE></LI><LI><B>NOTES</B><br><PRE>We used compression &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0, as we do not intend to &nbsp;<? local_doc_url("visualdoc.php","store","asimage#store_asimage()",$srcunset,$subunset) ?>
 
image in memory for any considerable amount of time, and we want to
avoid additional processing overhead related to image compression.
If image was loaded successfully, which is indicated by returned
pointer being not NULL, we can proceed to creation of the window and
displaying of the image.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>file2ASImage()
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASView.3 [1.3]"><UL><B>libAfterImage/tutorials/ASView.3 [1.3]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 3. Preparation of the &nbsp;<? local_doc_url("visualdoc.php","visual","asvisual#visual_prop2visual()",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>At this point we have to obtain Visual information, as window
creation is highly dependant on Visual being used. In fact when X
creates a window it ties it to a particular Visual, and all its
attributes, such as &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 , pixel values, pixmaps, etc. must be
associated with the same Visual. Accordingly we need to acquire
&nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure, which is our abstraction layer from them naughty
X Visuals. :
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );
</PRE></LI><LI><B>NOTES</B><br><PRE>If any Window or Pixmap is created based on particular &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 , then
this &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure must not be destroyed untill all such
Windows and Pixmaps are destroyed.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>See create_asvisual() for details.
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASView.4 [1.4]"><UL><B>libAfterImage/tutorials/ASView.4 [1.4]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 4. Preparation of the window.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Creation of top level window consists of several steps of its own:
a) &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  the window of desired size and placement
b) &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  ICCCM hints on the window
c) select appropriate events on the window
c) map the window.
First two steps has been moved out into create_top_level_window()
function.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    w = create_top_level_window( asv, DefaultRootWindow(dpy), 32, 32,
                                 im-&gt;width, im-&gt;height, 1, 0, NULL,
                                 &quot;&nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 &quot; );
    if( w != None )
    {
        XSelectInput (dpy, w, (StructureNotifyMask | ButtonPress));
        XMapRaised   (dpy, w);
    }
</PRE></LI><LI><B>NOTES</B><br><PRE>Map request should be made only for window that has all its hints &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 
up already, so that Window Manager can read them right away.
We want to map window as soon as possible so that User could see that
something really is going on, even before image is displayed.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , create_top_level_window()
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASView.5 [1.5]"><UL><B>libAfterImage/tutorials/ASView.5 [1.5]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 5. Displaying the image.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>The simplest way to display image in the window is to convert it
into Pixmap, then &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  Window's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  to this Pixmap, and,
at last, clear the window, so that &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  shows up.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE> p = asimage2pixmap( asv, DefaultRootWindow(dpy), im, NULL, False );
 destroy_asimage( &amp;im );
</PRE></LI><LI><B>NOTES</B><br><PRE>We no longer need &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  after we transfered it onto the Pixmap, so
we better &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  it to conserve resources.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>asimage2pixmap(), destroy_asimage(), set_window_background_and_free()
</PRE></LI></UL></UL>
