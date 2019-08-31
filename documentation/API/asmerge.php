&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage example 4: Image blending</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">demonstrates blending of multiple image using different algorithms</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/ASMerge"><UL><B>libAfterImage/tutorials/ASMerge</B><br></A><LI><B>NAME</B><br>
<A NAME="ASMerge"></A><B>ASMerge</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Scaling and blending of arbitrary number of images
using &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>We will attempt to interpret command line arguments as sequence of
image filenames, geometries and blending types. We'll then try and
load all the images, scaling first one to requested size, and
blending others at specifyed locations of the first image.
We then display the result in simple window.
After that we would want to &nbsp;<? local_doc_url("visualdoc.php","wait","common#wait_closedown()",$srcunset,$subunset) ?>
 , until user closes our window.

New steps described in this tutorial are :
Step 1. Layers.
Step 2. Merging methods.
Step 3. Layer parameters.
Step 4. Actual blending of the &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of images.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Tutorial 1: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
   - explanation of basic steps needed to use
                      &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  and some other simple things.
Tutorial 2: &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
  - image scaling basics.
Tutorial 3: &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
   - image tiling and tinting
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

#include &quot;../afterbase.h&quot;
#include &quot;../afterimage.h&quot;
#include &quot;common.h&quot;

char *burning_rose[] =
{
    &quot;asmerge&quot;,
    &quot;rose512.jpg&quot;,
    &quot;&nbsp;<? local_doc_url("visualdoc.php","add","blender#add_scanlines()",$srcunset,$subunset) ?>
 &quot;,
    &quot;back.xpm:512x386&quot;,
    &quot;&nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 &quot;,
    &quot;fore.xpm:512x386&quot;
};

void usage()
{
    printf( &quot;Usage: asmerge [-h]|[image op1 image1 [op2 image2 [...]]]\n&quot;);
    printf( &quot;Where: image  - is &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image filename\n&quot;);
    printf( &quot;       image1 - is first &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
 's filename\n&quot;);
    printf( &quot;       op1,op2,... - &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
  operation.&quot;
            &quot; Supported operations are :\n&quot;);
    list_scanline_merging( stdout,
            &quot;         %-15.15s- %s\n&quot;);
}

int main(int argc, char* argv[])
{
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv ;
    int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = 0, depth = 0;
    int to_width = 1, to_height = 1;
    &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  *layers ;
    int layers_num = 0, i;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *merged_im ;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .1 : */
    set_application_name( argv[0] );
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  (HAVE_AFTERBASE_FLAG==1)
    set_output_threshold(OUTPUT_LEVEL_DEBUG);
#endif
    if( argc == 2 &amp;&amp; strncmp(argv[1],&quot;-h&quot;, 2) == 0 )
    {
        usage();
        return 0;
    }
    if( argc &lt;= 3 )
    {
        show_error( &quot;not enough arguments, please see usage:%s&quot;, &quot; &quot;);
        usage() ;
        printf( &quot;Using the default, \&quot;The Burning Rose\&quot;, composition :\n&quot;);
        printf( &quot;\n\trose512.jpg &nbsp;<? local_doc_url("visualdoc.php","add","blender#add_scanlines()",$srcunset,$subunset) ?>
  back.xpm:512x386 &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  &quot;
                &quot;fore.xpm:512x386\n&quot;);
        argv = &amp;(burning_rose[0]) ;
        argc = 6;
    }

#ifndef X_DISPLAY_MISSING
    dpy = XOpenDisplay(NULL);
    _XA_WM_DELETE_WINDOW = XInternAtom( dpy, &quot;WM_DELETE_WINDOW&quot;, False);
    &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = DefaultScreen(dpy);
    depth = DefaultDepth( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  );
#endif
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .3 : */
    asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
 .1 : */
    layers = safecalloc( argc/2, sizeof(ASImageLayer) );

    for( i = 1 ; i &lt; argc ; i++ )
    {
        int x = 0, y = 0;
        unsigned int width, height ;
        int geom_flags = 0 ;
        char *separator;
        char *filename ;
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
 .2 */
        if( i &gt; 1 )
        {
            /* see blend_scanlines_name2func() : */
            if((layers[layers_num].merge_scanlines =
                 blend_scanlines_name2func( argv[i] )) == NULL )
                continue ;
            if( ++i &gt;= argc )
                break;
        }
        if( (separator = strchr( argv[i], ':' )) != NULL )
        {   /* see &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .1 : */
            geom_flags = XParseGeometry( separator+1, 
                                         &amp;x, &amp;y, &amp;width, &amp;height);
            filename = mystrndup( argv[i], separator-argv[i] );
        }else
            filename = argv[i] ;
        layers[layers_num].im = file2ASImage( filename, 0xFFFFFFFF,
                                              SCREEN_GAMMA, 100, getenv(&quot;IMAGE_PATH&quot;), NULL );
        if( filename != argv[i] )
            free( filename );
        if( layers[layers_num].im != NULL )
        {
            if( !get_flags(geom_flags, WidthValue) )
                width = layers[layers_num].im-&gt;width  ;
            if( !get_flags(geom_flags, HeightValue) )
                height = layers[layers_num].im-&gt;height ;
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
 .3 : */
            if( layers[layers_num].merge_scanlines == NULL )
                layers[layers_num].merge_scanlines =
                    alphablend_scanlines ;
            layers[layers_num].clip_width = width ;
            layers[layers_num].clip_height = height ;
            if( layers_num &gt; 0 )
            {
                layers[layers_num].dst_x = x ;
                layers[layers_num].dst_y = y ;
            }else
            {
                to_width = width ;
                to_height = height ;
                if( width != layers[layers_num].im-&gt;width ||
                    height != layers[layers_num].im-&gt;height )
                {
                    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *scaled_bottom ;
                    /* see &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .2 : */
                    scaled_bottom = scale_asimage( asv, 
                                                   layers[layers_num].im,
                                                   width, height, 
                                                   False, 100,
                                                ASIMAGE_QUALITY_DEFAULT );
                    destroy_asimage( &amp;(layers[layers_num].im) );
                    layers[layers_num].im = scaled_bottom ;
                }
            }
            ++layers_num ;
        }
    }

    if( layers_num &lt;= 0 )
    {
        show_error( &quot;there is no images to &nbsp;<? local_doc_url("visualdoc.php","merge","transform#merge_layers()",$srcunset,$subunset) ?>
 . Aborting&quot;);
        return 2;
    }

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
 .4 */
    merged_im = merge_layers( asv, layers, layers_num,
                              to_width, to_height,
#ifndef X_DISPLAY_MISSING
                              ASA_XImage,
#else
                              ASA_ASImage,
#endif
                              0, ASIMAGE_QUALITY_DEFAULT );
    while( --layers_num &gt;= 0 )
        destroy_asimage( &amp;(layers[layers_num].im) );
    free( layers );

    if( merged_im )
    {
#ifndef X_DISPLAY_MISSING
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .4 : */
        Window w = create_top_level_window( asv, DefaultRootWindow(dpy), 
                                            32, 32,
                                            to_width, to_height, 
                                            1, 0, NULL,
                                            &quot;&nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
 &quot;, NULL );
        if( w != None )
        {
            Pixmap p ;

            XMapRaised   (dpy, w);
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5 : */
            p = asimage2pixmap( asv, DefaultRootWindow(dpy), merged_im,
                            NULL, True );

            destroy_asimage( &amp;merged_im );
            /* see common.c: set_window_background_and_free() : */
            p = set_window_background_and_free( w, p );
            /* see common.c: wait_closedown() : */
            wait_closedown(w);
        }
        if( dpy )
            XCloseDisplay (dpy);
#else
        /* writing result into the file */
        ASImage2file( merged_im, NULL, &quot;asmerge.jpg&quot;, ASIT_Jpeg, NULL );
        destroy_asimage( &amp;merged_im );
#endif
    }
#ifdef DEBUG_ALLOCS
    build_xpm_colormap(NULL);
    print_unfreed_mem();
#endif
    return 0 ;
}
</PRE></div><br></p></LI>
<A NAME="libAfterImage/tutorials/ASMerge.1 [4.1]"><UL><B>libAfterImage/tutorials/ASMerge.1 [4.1]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 1. Layers.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  performs blending/merging of different images, using
arrays of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structures, with first element representing
the bottommost image. Each structure specifies exact position on
resulting image where &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
  should be blended to, &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  of the
&nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
 , size, to which &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
  should be tiled, &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
 's origin,
and &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . Arbitrary number of layers can be
merged whithin single run.

Accordingly all that is needed to &nbsp;<? local_doc_url("visualdoc.php","merge","transform#merge_layers()",$srcunset,$subunset) ?>
  bunch of images is to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
 
array of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structures and &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  it up appropriately.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    layers = safecalloc( argc/2, sizeof(ASImageLayer) );
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASMerge.2 [4.2]"><UL><B>libAfterImage/tutorials/ASMerge.2 [4.2]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 2. Merging methods.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Each layer can be merged in using its own method. There are about 15
different methods implemented in &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 , and user app can
implement other methods of its own. To specify method all that is
needed is to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  merge_scanlines member of &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  to pointer
to the function, implementing specific method.

&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  provides facility to parse method name strings into
actuall function pointers. That could be used to simplifi scripting,
etc.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>       if((layers[layers_num].merge_scanlines =
           blend_scanlines_name2func( argv[i] )) == NULL )
           continue ;
NOTE
All layers MUST have valid merge_scanlines pointer, even the
bottommost layer, despite the fact that it has nothing to be merged
with. If merge_scanlines is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to NULL - this layer will be ignored.
That could be used to turn on/off particular layers.
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASMerge.3 [4.3]"><UL><B>libAfterImage/tutorials/ASMerge.3 [4.3]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 3. Layer parameters.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Several &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  members are mandatory and cannot be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0.
Such as : im - image to be merged; clip_width, clip_height - this will
be used to &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  the image; merge_scanlines - must be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to a pointer
to the function implementing merging method. If any of this is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 
to 0  - then layer will be ignored. The rest of the parameters are
optional. Note thou that &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  parameter will &nbsp;<? local_doc_url("visualdoc.php","tint","blender#tint_scanlines()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
 's RGB
components and alpha component, as the result it could be used to
&nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  opaque images - semitransparent.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    if( layers[layers_num].merge_scanlines == NULL )
        layers[layers_num].merge_scanlines =
            alphablend_scanlines ;
    layers[layers_num].clip_width = width ;
    layers[layers_num].clip_height = height ;
    if( layers_num &gt; 0 )
    {
        layers[layers_num].dst_x = x ;
        layers[layers_num].dst_y = y ;
    }
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASMerge.4 [4.4]"><UL><B>libAfterImage/tutorials/ASMerge.4 [4.4]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 4. Actual blending of the &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of images.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>After &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of layers has been prepared - it can be passed to
merge_layers() function, that will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  of specifyed
size, and then &nbsp;<? local_doc_url("visualdoc.php","blend","blender#blend_scanlines_name2func()",$srcunset,$subunset) ?>
  all the layers together to &nbsp;<? local_doc_url("visualdoc.php","fill","transform#fill_asimage()",$srcunset,$subunset) ?>
  this image.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>        merged_im = merge_layers( asv, layers, layers_num,
                                  to_width, to_height,
                                  ASA_ASImage, 0, 
                                  ASIMAGE_QUALITY_DEFAULT );
        while( --layers_num &gt;= 0 )
            destroy_asimage( &amp;(layers[layers_num].im) );
        free( layers );
</PRE></LI><LI><B>NOTES</B><br><PRE>After we've blended layers - we no longer need &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  array.
So proceeding to clean it up, by destroying &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
  AsImages first,
and then freeing array itself.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>merge_asimage().
</PRE></LI></UL></UL>
