&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage example 5: Gradient rendering</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">demonstrates rendering of multi point linear gradients</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/ASGrad"><UL><B>libAfterImage/tutorials/ASGrad</B><br></A><LI><B>NAME</B><br>
<A NAME="ASGrad"></A><B>ASGrad</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  application for drawing multipoint linear gradients.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>New steps described in this tutorial are :
&nbsp;<? local_doc_url("visualdoc.php","ASGrad","asgrad#ASGrad",$srcunset,$subunset) ?>
 .1. Building &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  specs.
&nbsp;<? local_doc_url("visualdoc.php","ASGrad","asgrad#ASGrad",$srcunset,$subunset) ?>
 .2. Actual rendering &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Tutorial 1: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
   - explanation of basic steps needed to use
                      &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  and some other simple things.
Tutorial 2: &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
  - image scaling basics.
Tutorial 3: &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
   - image tiling and tinting.
Tutorial 4: &nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
  - scaling and blending of arbitrary number of
                      images.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

#include &quot;../afterbase.h&quot;
#include &quot;../afterimage.h&quot;
#include &quot;common.h&quot;

&nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  default_colors[] = {
    0xFF000000,
    0xFF700070,                                /* violet */
    0xFF0000FF,                                /* blue   */
    0xFF00FFFF,                                /* cyan   */
    0xFF00FF00,
    0XFFFFFF00,
    0XFF700000,
    0XFFFF0000,
    0xFF8080A0,
    0xFFE0E0FF,
    0xFFa0a0FF,
};
double default_offsets[] = { 0, 0.1, 0.15, 0.20, 0.35, 0.45, 0.55, 0.50, 
                             0.65, 0.8, 1.0} ;


void usage()
{
    printf( &quot;  Usage: asgrad -h | &lt;geometry&gt; &lt;gradient_type&gt; &lt;color1&gt; &quot;
            &quot;&lt;offset2&gt; &lt;color2&gt; [ &lt;offset3&gt; &lt;color3&gt; ...]\n&quot;);
    printf( &quot;  Where: geometry - size of the resulting image and window;\n&quot;);
    printf( &quot;         gradient_type - One of the fiollowing values :\n&quot;);
    printf( &quot;            0 - linear   left-to-right &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 ,\n&quot;);
    printf( &quot;            1 - diagonal lefttop-to-rightbottom,\n&quot;);
    printf( &quot;            2 - linear   top-to-bottom &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 ,\n&quot;);
    printf( &quot;            3 - diagonal righttop-to-leftbottom;\n&quot;);
    printf( &quot;         offset   - floating point &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  from 0.0 to 1.0\n&quot;);
}

int main(int argc, char* argv[])
{
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv ;
    int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = 0, depth = 0;
    int dummy, geom_flags = 0;
    unsigned int to_width, to_height ;
    &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  grad ;
    &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  default_grad = { 1, 11, &amp;(default_colors[0]), 
                                       &amp;(default_offsets[0])} ;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *grad_im = NULL;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .1 : */
    set_application_name( argv[0] );
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  (HAVE_AFTERBASE_FLAG==1)
    set_output_threshold(OUTPUT_LEVEL_DEBUG);
#endif

    if( argc &gt; 1 )
    {
        if( strcmp( argv[1], &quot;-h&quot;) == 0 )
        {
            usage();
            return 0;
        }
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .1 : */
        geom_flags = XParseGeometry( argv[1], &amp;dummy, &amp;dummy,
                                     &amp;to_width, &amp;to_height );
    }else
        usage();
    memset( &amp;grad, 0x00, sizeof(ASGradient));

#ifndef X_DISPLAY_MISSING
    dpy = XOpenDisplay(NULL);
    _XA_WM_DELETE_WINDOW = XInternAtom( dpy, &quot;WM_DELETE_WINDOW&quot;, False);
    &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = DefaultScreen(dpy);
    depth = DefaultDepth( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  );
#endif

    if( argc &gt;= 5 )
    {
        int i = 2;
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASGrad","asgrad#ASGrad",$srcunset,$subunset) ?>
 .1 : */
        grad.type = atoi( argv[2] );
        grad.npoints = 0 ;
        grad.&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  = safemalloc( ((argc-2)/2)*sizeof(ARGB32));
        grad.offset = safemalloc( ((argc-2)/2)*sizeof(double));
        while( ++i &lt; argc )
        {
            if( grad.npoints &gt; 0 )
            {
                if( i == argc-1 )
                    grad.offset[grad.npoints] = 1.0;
                else
                    grad.offset[grad.npoints] = atof( argv[i] );
                ++i ;
            }

            /* see &nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
 .1 : */
            if( parse_argb_color( argv[i], &amp;(grad.&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 [grad.npoints])) 
                != argv[i] )
                if( grad.offset[grad.npoints] &gt;= 0. &amp;&amp; 
                    grad.offset[grad.npoints]&lt;= 1.0 )
                    grad.npoints++ ;
        }
    }else
    {
        grad = default_grad ;
        if( argc &gt;= 3 )
            grad.type = atoi( argv[2] );
    }

    if( grad.npoints &lt;= 0 )
    {
        show_error( &quot; not enough &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  points specified.&quot;);
        return 1;
    }

    /* Making sure tiling geometry is sane : */
#ifndef X_DISPLAY_MISSING
    if( !get_flags(geom_flags, WidthValue ) )
        to_width  = DisplayWidth(dpy, screen)*2/3 ;
    if( !get_flags(geom_flags, HeightValue ) )
        to_height = DisplayHeight(dpy, screen)*2/3 ;
#else
    if( !get_flags(geom_flags, WidthValue ) )
        to_width  = 500 ;
    if( !get_flags(geom_flags, HeightValue ) )
        to_height = 500 ;
#endif
    printf( &quot;%s: rendering &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  of type %d to %dx%d\n&quot;,
            get_application_name(), grad.type&amp;GRADIENT_TYPE_MASK, 
            to_width, to_height );

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .3 : */
    asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASGrad","asgrad#ASGrad",$srcunset,$subunset) ?>
 .2 : */
    grad_im = make_gradient( asv, &amp;grad, to_width, to_height,
                             SCL_DO_ALL,
#ifndef X_DISPLAY_MISSING
                             ASA_XImage,
#else
                             ASA_ASImage,
#endif
                             0, ASIMAGE_QUALITY_DEFAULT );
    if( grad_im )
    {
#ifndef X_DISPLAY_MISSING
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .4 : */
        Window w = create_top_level_window( asv,
                                            DefaultRootWindow(dpy), 32, 32,
                                            to_width, to_height, 1, 0, NULL,
                                            &quot;&nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
 &quot;, NULL );
        if( w != None )
        {
            Pixmap p ;

            XMapRaised   (dpy, w);
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5 : */
            p = asimage2pixmap( asv, DefaultRootWindow(dpy), grad_im,
                                NULL, True );
            destroy_asimage( &amp;grad_im );
            /* see common.c: set_window_background_and_free() : */
            p = set_window_background_and_free( w, p );
            /* see common.c: wait_closedown() : */
            wait_closedown(w);
        }
        if( dpy )
            XCloseDisplay (dpy);
#else
        ASImage2file( grad_im, NULL, &quot;asgrad.jpg&quot;, ASIT_Jpeg, NULL );
        destroy_asimage( &amp;grad_im );
#endif
    }
    return 0 ;
}
</PRE></div><br></p></LI>
<A NAME="libAfterImage/tutorials/ASGrad.1 [5.1]"><UL><B>libAfterImage/tutorials/ASGrad.1 [5.1]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 1. Building &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  specs.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Multipoint &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  is defined as &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  values with offsets
of each point from the beginning of the &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  on 1.0 &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
 .
Offsets of the first and last point in &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  should always be
0. and 1.0 respectively, and other points should go in between.
For example 2 point &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  will have always offsets 0. and 1.0,
3 points &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  will have 0. for first &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , 1.0 for last &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
and anything in between for middle &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
If offset is incorrect - point will be skipped at the time of
rendering.

There are 4 types of gradients supported : horizontal, top-left to
bottom-right diagonal, vertical and top-right to bottom-left diagonal.
Any cilindrical &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  could be drawn as a 3 point &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  with
border colors being the same.

Each &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  point has ARGB &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , which means that it is possible
to &nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  gradients in alpha channel as well as RGB. That makes for
semitransparent gradients, fading gradients, etc.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    grad.type = atoi( argv[2] );
        grad.npoints = 0 ;
        grad.&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  = safemalloc( ((argc-2)/2)*sizeof(ARGB32));
        grad.offset = safemalloc( ((argc-2)/2)*sizeof(double));
        while( ++i &lt; argc )
        {
            if( grad.npoints &gt; 0 )
            {
                if( i == argc-1 )
                    grad.offset[grad.npoints] = 1.0;
                else
                    grad.offset[grad.npoints] = atof( argv[i] );
                ++i ;
            }
        if( parse_argb_color( argv[i], &amp;(grad.&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 [grad.npoints]))
             != argv[i] )
                if(grad.offset[grad.npoints] &gt;= 0. &amp;&amp;
                grad.offset[grad.npoints]&lt;= 1.0 )
                    grad.npoints++ ;
        }
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
 , parse_argb_color(), &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
 
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASGrad.2 [5.2]"><UL><B>libAfterImage/tutorials/ASGrad.2 [5.2]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 2. Actually rendering &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>All that is needed to &nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  is to call make_gradient(),
passing pointer to &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
  structure, that describes &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
Naturally size of the &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  is needed too. Another parameter is
filter - that is a bit mask that allows to &nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  using only a
subset of the channels, represented by &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  bits. SCL_DO_ALL means
that all 4 channels must be rendered.
make_gradient() creates &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  of requested size and fills it with
&nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 . Special techinque based on error diffusion is utilized to
avoid sharp steps between grades of colors when limited range of
colors is used for &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>        grad_im = make_gradient( asv, &amp;grad, to_width, to_height,
                                 SCL_DO_ALL,
                             ASA_XImage, 0, ASIMAGE_QUALITY_DEFAULT );
</PRE></LI><LI><B>NOTES</B><br><PRE>make_gradient(), &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI></UL></UL>
