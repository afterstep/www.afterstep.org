&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage example 6: Image rotation</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">demonstrates flipping image in 90 degree increments</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/ASFlip"><UL><B>libAfterImage/tutorials/ASFlip</B><br></A><LI><B>NAME</B><br>
<A NAME="ASFlip"></A><B>ASFlip</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  application for image rotation.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>New steps described in this tutorial are :
&nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
 .1. Flip &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
&nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
 .2. Rotating &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
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
Tutorial 5: &nbsp;<? local_doc_url("visualdoc.php","ASGrad","asgrad#ASGrad",$srcunset,$subunset) ?>
   - drawing multipoint linear gradients.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

#include &quot;../afterbase.h&quot;
#include &quot;../afterimage.h&quot;
#include &quot;common.h&quot;

void usage()
{
    printf( &quot;Usage: asflip [-h]|[[-f &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
 ]|[-m vertical] &quot;
            &quot;[-g geom] image]&quot;);
    printf( &quot;\nWhere: image - is image filename\n&quot;);
    printf( &quot;       &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
   - rotation angle in degrees. &quot;
            &quot;90, 180 and 270 degrees supported\n&quot;);
    printf( &quot;       geom  - source image is tiled using this geometry, &quot;
            &quot;prior to rotation\n&quot;);
    printf( &quot;       vertical - 1 - &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  image in vertical direction, &quot;
            &quot;0 - horizontal\n&quot;);
}

int main(int argc, char* argv[])
{
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv ;
    int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = 0 , depth = 0 ;
    char *image_file = &quot;rose512.jpg&quot; ;
    int &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  = FLIP_VERTICAL;
    Bool vertical = False, &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  = False ;
    int tile_x, tile_y, geom_flags = 0;
    unsigned int tile_width, tile_height ;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im = NULL;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *flipped_im = NULL ;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .1 : */
    set_application_name( argv[0] );

    if( argc &gt; 1 )
    {
        int i = 1 ;
        if( strcmp( argv[1], &quot;-h&quot; ) == 0 )
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
                    case 'm' :
                        &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  = True;
                        vertical = atoi(argv[i+1]) ;
                        break ;
                    case 'f' :          /* see &nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
 .1 */
                        &nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  = False;
                        &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  = atoi(argv[i+1])/90 ;
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
        usage();

#ifndef X_DISPLAY_MISSING
    dpy = XOpenDisplay(NULL);
    _XA_WM_DELETE_WINDOW = XInternAtom( dpy, &quot;WM_DELETE_WINDOW&quot;, False);
    &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = DefaultScreen(dpy);
    depth = DefaultDepth( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  );
#endif
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .2 : */
    im = file2ASImage( image_file, 0xFFFFFFFF, SCREEN_GAMMA, 0, getenv(&quot;IMAGE_PATH&quot;), NULL );
    if( im == NULL )
        return 1;

    /* Making sure tiling geometry is sane : */
    if( !get_flags(geom_flags, XValue ) )
        tile_x = 0 ;
    if( !get_flags(geom_flags, YValue ) )
        tile_y = 0 ;
    if( !get_flags(geom_flags, WidthValue ) )
    {
        if( !&nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  )
            tile_width = (get_flags(flip,FLIP_VERTICAL))?
                            im-&gt;height:im-&gt;width ;
        else
            tile_width = im-&gt;width ;
    }
    if( !get_flags(geom_flags, HeightValue ) )
    {
        if( !&nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  )
            tile_height = (get_flags(flip,FLIP_VERTICAL))?
                            im-&gt;width:im-&gt;height;
        else
            tile_height = im-&gt;height ;
    }
    printf( &quot;%s: tiling image \&quot;%s\&quot; to %dx%d%+d%+d and then &quot;
            &quot;flipping it by %d degrees\n&quot;,
            get_application_name(), image_file,
            tile_width, tile_height,tile_x, tile_y, &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
 *90 );

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .3 : */
    asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
 .2 : */
    if( !&nbsp;<? local_doc_url("visualdoc.php","mirror","asimagexml#mirror",$srcunset,$subunset) ?>
  )
        flipped_im = flip_asimage(  asv, im,
                                    tile_x, tile_y,
                                    tile_width, tile_height,
                                    &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
 ,
                                    ASA_ASImage, 0, 
                                    ASIMAGE_QUALITY_DEFAULT );
    else
        flipped_im = mirror_asimage(asv, im,
                                    tile_x, tile_y,
                                    tile_width, tile_height,
                                    vertical,
                                    ASA_ASImage, 0, 
                                    ASIMAGE_QUALITY_DEFAULT );
    destroy_asimage( &amp;im );

    if( flipped_im )
    {
#ifndef X_DISPLAY_MISSING
        /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .4 : */
        Window w = create_top_level_window( asv, DefaultRootWindow(dpy), 
                                            32, 32,
                                            tile_width, tile_height, 
                                            1, 0, NULL,
                                            &quot;&nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
 &quot;, image_file );
        if( w != None )
        {
            Pixmap p ;

            XMapRaised   (dpy, w);
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5 : */
            p = asimage2pixmap( asv, DefaultRootWindow(dpy), flipped_im,
                                NULL, True );
            destroy_asimage( &amp;flipped_im );
            /* see common.c: set_window_background_and_free() : */
            p = set_window_background_and_free( w, p );
            /* see common.c: wait_closedown() : */
            wait_closedown(w);
        }
        if( dpy )
            XCloseDisplay (dpy);
#else
        /* writing result into the file */
        ASImage2file( flipped_im, NULL, &quot;asflip.jpg&quot;, ASIT_Jpeg, NULL );
        destroy_asimage( &amp;flipped_im );
#endif
    }
    return 0 ;
}
</PRE></div><br></p></LI>
<A NAME="libAfterImage/tutorials/ASFlip.1 [6.1]"><UL><B>libAfterImage/tutorials/ASFlip.1 [6.1]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 1. Flip &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  provides facility for rotating images in 90 degree
increments - flipping essentially. Accordingly &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  parameter could
have 4 values - 0, -90, -180, -270 degrees.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
  = atoi(argv[2])/90;
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
 
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASFlip.2 [6.2]"><UL><B>libAfterImage/tutorials/ASFlip.2 [6.2]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 2. Flipping &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Flipping can actually be combined with offset and tiling. Original
image gets tiled to suplied rectangle, and then gets rotated to
requested degree.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    flipped_im = flip_asimage(asv, im,
                                  tile_x, tile_y,
                                  tile_width, tile_height,
                                  &nbsp;<? local_doc_url("visualdoc.php","flip","asimage#flip_gradient()",$srcunset,$subunset) ?>
 ,
                                  ASA_XImage,0, 
                                  ASIMAGE_QUALITY_DEFAULT );
        destroy_asimage( &amp;im );
</PRE></LI><LI><B>NOTES</B><br><PRE>As far as we need to render rotated image right away - we &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to_xim
parameter to True, so that image will be rotated into XImage. Right
after rotation is done - we can &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  original image.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>flip_asimage()
</PRE></LI></UL></UL>
