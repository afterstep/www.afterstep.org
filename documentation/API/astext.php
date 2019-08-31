&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage example 7: Text rendering</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">demonstrates antialiased texturized text rendering</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/tutorials/ASText"><UL><B>libAfterImage/tutorials/ASText</B><br></A><LI><B>NAME</B><br>
<A NAME="ASText"></A><B>ASText</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  application for rendering texturized &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>In this tutorial we will attempt to render arbitrary &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  in window,
with optional texturized &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and foreground. We shall also
surround rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  with beveled frame, creating an illusion of a
button.

New steps described in this tutorial are :
&nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .1. Openning and closing fonts.
&nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .2. Approximating rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  size.
&nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .3. Rendering texturized &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .
&nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .4. Merging foreground and &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  with &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
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
Tutorial 6: &nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
   - image rotation.
</PRE></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>

#include &quot;../afterbase.h&quot;
#include &quot;../afterimage.h&quot;
#include &quot;common.h&quot;

/* Usage:  astext [-f font] [-s size] [-t &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 ] [-S 3D_style]
                  [-c text_color] [-b background_color]
                  [-T foreground_texture] [-B background_image]
                  [-r foreground_resize_type] [-R background_resize_type]
 */

#define BEVEL_HI_WIDTH 20
#define BEVEL_LO_WIDTH 30
#define BEVEL_ADDON    (BEVEL_HI_WIDTH+BEVEL_LO_WIDTH)

void usage()
{
    printf( &quot;  Usage:   astext [-h] [-f font] [-s size] [-t &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 ] &quot;
            &quot;[-S 3D_style] \n&quot;);
    printf( &quot;                  [-c text_color] [-b background_color]\n&quot;);
    printf( &quot;                  [-T foreground_texture] &quot;
            &quot;[-B background_image]\n&quot;);
    printf( &quot;                  [-r foreground_resize_type] &quot;
            &quot;[-R background_resize_type]\n&quot;);
    printf( &quot;                  [-m ]\n&quot;);
    printf( &quot;  Where: font - TrueType font's filename or X font spec or &quot;
            &quot;alias;\n&quot;);
    printf( &quot;         size - size in points for TrueType fonts;\n&quot;);
    printf( &quot;         &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  - &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  to be drawn;\n&quot;);
    printf( &quot;         3D_style - 3D style of &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . &quot;
            &quot;One of the following:\n&quot;);
    printf( &quot;             0 - plain 2D tetx, 1 - embossed, 2 - sunken, &quot;
            &quot;3 - shade above,\n&quot;);
    printf( &quot;             4 - shade below, 5 - embossed thick, &quot;
            &quot;6 - sunken thick.\n&quot;);
    printf( &quot;             7 - ouline above, 8 - ouline below, &quot;
            &quot;9 - full ouline.\n&quot;);
    printf( &quot;         resize_type - tells how texture/image should be &quot;
            &quot;transformed to fit\n&quot;);
    printf( &quot;         the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  size. Could be: &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  or &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
 .&quot; 
            &quot;Default is &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
 \n&quot;);
    printf( &quot;         -m &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  font monospaced. \n&quot;);


}

int main(int argc, char* argv[])
{
    &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv = NULL ;
    int &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = 0, depth = 0;
    char *font_name = &quot;test.ttf&quot;;
    int size = 32 ;
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  0
    char *&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  = &quot;　　还没有&quot;;  /* chinese */ 
#else
    char *&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  = &quot;Smart Brown Dog jumps\nOver The Lazy Fox,\n&quot;
                 &quot;and falls into the ditch.&quot;;
#endif
    &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  text_color = ARGB32_White, back_color = ARGB32_Black;
    char *text_color_name = &quot;#FFFFFFFF&quot;, *back_color_name = &quot;#FF000000&quot;;
    char *fore_image_file = &quot;fore.xpm&quot; ;
    char *back_image_file = &quot;back.xpm&quot; ;
    Bool scale_fore_image = False, scale_back_image = False ;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *fore_im = NULL, *back_im = NULL;
    &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *text_im = NULL ;
    struct &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  *fontman = NULL;
    struct &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
   *font = NULL;
    unsigned int width, height ;
    int i ;
    int text_margin = size/2 ;
    Bool monospaced = False ;
    char * font_path = NULL;
    &nbsp;<? local_doc_url("visualdoc.php","ASTextAttributes","asfont#ASTextAttributes",$srcunset,$subunset) ?>
  attr = {ASTA_VERSION_1, ASTA_UseTabStops, 
                             AST_ShadeBelow, ASCT_UTF8, 8, 0, 
                             NULL, 0, ARGB32_White };
    
    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .1 : */
    set_application_name( argv[0] );
#&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  (HAVE_AFTERBASE_FLAG==1)
    set_output_threshold(OUTPUT_LEVEL_DEBUG);
#endif

    if( argc == 1 )
        usage();
    else for( i = 1 ; i &lt; argc ; i++ )
    {
        if( strncmp( argv[i], &quot;-h&quot;, 2 ) == 0 )
        {
            usage();
            return 0;
        }
        if( strncmp( argv[i], &quot;-m&quot;, 2 ) == 0 )
        {
            monospaced = True ;
        }else if( i+1 &lt; argc )
        {
            if( strncmp( argv[i], &quot;-f&quot;, 2 ) == 0 )
                font_name = argv[i+1] ;
            else if( strncmp( argv[i], &quot;-s&quot;, 2 ) == 0 )
            {
                size = atoi(argv[i+1]);
                text_margin = size/2 ;
            }else if( strncmp( argv[i], &quot;-t&quot;, 2 ) == 0 )
                &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  = argv[i+1] ;
            else if( strncmp( argv[i], &quot;-S&quot;, 2 ) == 0 )
            {
                attr.type = atoi(argv[i+1]);
                if( attr.type &gt;= AST_3DTypes )
                {
                    show_error( &quot;3D type is wrong. &quot;
                                &quot;Using 2D Plain instead.&quot;);
                    attr.type = AST_Plain ;
                }

            }else if( strncmp( argv[i], &quot;-c&quot;, 2 ) == 0 )
                text_color_name = argv[i+1] ;
            else if( strncmp( argv[i], &quot;-b&quot;, 2 ) == 0 )
                back_color_name = argv[i+1] ;
            else if( strncmp( argv[i], &quot;-T&quot;, 2 ) == 0 )
                fore_image_file = argv[i+1] ;
            else if( strncmp( argv[i], &quot;-B&quot;, 2 ) == 0 )
                back_image_file = argv[i+1] ;
            else if( strncmp( argv[i], &quot;-r&quot;, 2 ) == 0 )
                scale_fore_image = (strcmp( argv[i+1], &quot;&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
 &quot;) == 0);
            else if( strncmp( argv[i], &quot;-R&quot;, 2 ) == 0 )
                scale_back_image = (strcmp( argv[i+1], &quot;&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
 &quot;) == 0);
        }
    }


#ifndef X_DISPLAY_MISSING
    dpy = XOpenDisplay(NULL);
    _XA_WM_DELETE_WINDOW = XInternAtom( dpy, &quot;WM_DELETE_WINDOW&quot;, False);
    &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  = DefaultScreen(dpy);
    depth = DefaultDepth( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  );
#endif

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .1 : */
    if( getenv(&quot;FONT_PATH&quot;) != NULL ) 
    {
        font_path = safemalloc( strlen(getenv(&quot;FONT_PATH&quot;))+1+2+1);
        sprintf( font_path, &quot;%s:./&quot;, getenv(&quot;FONT_PATH&quot;) );
        
    }    
    if( (fontman = create_font_manager( dpy, font_path, NULL )) != NULL )
        font = get_asfont( fontman, font_name, 0, size, 
                           ASF_GuessWho|(monospaced?ASF_Monospaced:0) );

    if( font == NULL )
    {
        show_error( &quot;unable to load requested font \&quot;%s\&quot;. &quot;
                    &quot;Falling back to \&quot;fixed\&quot;.&quot;, font_name );
        font = get_asfont( fontman, &quot;fixed&quot;, 0, size, ASF_GuessWho );
        if( font == NULL )
        {
            show_error(&quot;font \&quot;fixed\&quot; is not available either. Aborting.&quot;);
            return 1;
        }
    }

    /*for( i = 0 ; i &lt; 128 ; ++i ) 
        print_asglyph( stderr, font, i); */

    parse_argb_color( text_color_name, &amp;text_color );
    parse_argb_color( back_color_name, &amp;back_color );

    attr.fore_color = text_color ;
    if( attr.type &gt;= AST_OutlineAbove ) 
        fore_image_file = NULL ;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .3 : */
    asv = create_asvisual( dpy, &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 , depth, NULL );

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .2 : */
    /*set_asfont_glyph_spacing( font, 10, 40 );*/
    /*Simple way:get_text_size( &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , font, attr.type, &amp;width, &amp;height ); */
    /*Fancy way : */
    get_fancy_text_size( &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , font, &amp;attr, &amp;width, &amp;height, 0, NULL );
/* show_progress( &quot;extimated &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  size = %dx%d&quot;, width, height ); */
    
    if( fore_image_file )
    {
        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *tmp = file2ASImage( fore_image_file, 0xFFFFFFFF,
                                     SCREEN_GAMMA, 0, getenv(&quot;IMAGE_PATH&quot;), NULL );
        if( tmp )
        {
            if( tmp-&gt;width != width || tmp-&gt;height != height )
            {   /* see &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .2 : */
                if( scale_fore_image )
                    fore_im = scale_asimage( asv, tmp, width, height,
                                             ASA_ASImage, 0, 
                                             ASIMAGE_QUALITY_DEFAULT );
                else
                    fore_im = tile_asimage( asv, tmp, 0, 0, 
                                            width, height, 0,
                                            ASA_ASImage, 0, 
                                            ASIMAGE_QUALITY_DEFAULT );
                destroy_asimage( &amp;tmp );
            }else
                fore_im = tmp ;
        }else
            fore_im = NULL ;
    }
    width  += text_margin*2 + BEVEL_ADDON;
    height += text_margin*2 + BEVEL_ADDON;
    if( back_image_file )
    { /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .2 : */
        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *tmp = file2ASImage( back_image_file, 0xFFFFFFFF,
                                    SCREEN_GAMMA, 0, getenv(&quot;IMAGE_PATH&quot;), NULL );
        if( tmp )
        {
            if( scale_back_image &amp;&amp; 
                (tmp-&gt;width != width || tmp-&gt;height != height) )
            {   /* see &nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
 .2 : */
                back_im = scale_asimage( asv, tmp, width, height,
                                         ASA_ASImage, 0, 
                                         ASIMAGE_QUALITY_DEFAULT );
                destroy_asimage( &amp;tmp );
            }else
                back_im = tmp ;
        }else
            back_im = NULL ;
    }

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .3 : */
    /* simple way : text_im = draw_text( &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , font, attr.type, 0 ); */
    text_im = draw_fancy_text( &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , font, &amp;attr, 0, 0 );
    if( fore_im )
    {
        move_asimage_channel( fore_im, IC_ALPHA, text_im, IC_ALPHA );
        destroy_asimage( &amp;text_im );
    }else
        fore_im = text_im ;

    /* see &nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .1 : */
    release_font( font );
    destroy_font_manager( fontman, False );

    if( fore_im )
    {
        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *rendered_im ;
        &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  layers[2] ;
        &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  = {0/*BEVEL_SOLID_INLINE*/, 0xFFDDDDDD, 
                              0xFF555555, 0xFFFFFFFF, 
                              0xFF777777, 0xFF222222,
                              BEVEL_HI_WIDTH, BEVEL_HI_WIDTH,
                              BEVEL_LO_WIDTH, BEVEL_LO_WIDTH,
                              BEVEL_HI_WIDTH, BEVEL_HI_WIDTH,
                              BEVEL_LO_WIDTH, BEVEL_LO_WIDTH } ;

        /* see &nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .4 : */
        init_image_layers( &amp;(layers[0]), 2 );
        if( back_im )
            back_im-&gt;back_color = back_color ;
        if( fore_im ) 
            fore_im-&gt;back_color = text_color ;
        layers[0].im = back_im ;
        layers[0].dst_x = 0 ;
        layers[0].dst_y = 0 ;
        layers[0].clip_width = width ;
        layers[0].clip_height = height ;
        layers[0].&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  = &amp;&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  ;
        layers[1].im = fore_im ;
        layers[1].dst_x = text_margin+BEVEL_HI_WIDTH*2 ;
        layers[1].dst_y = text_margin+
                            MIN( (int)text_margin,
                                ((int)font-&gt;max_height-
                                 (int)font-&gt;max_ascend))/2+
                                 BEVEL_HI_WIDTH*2;
        if( fore_im ) 
        {   
            layers[1].clip_width = fore_im-&gt;width ;
            layers[1].clip_height = fore_im-&gt;height ;
        }
        rendered_im = merge_layers( asv, &amp;(layers[0]), 2,
                                    width+BEVEL_ADDON, height+BEVEL_ADDON,
#ifndef X_DISPLAY_MISSING
                                    ASA_XImage,
#else
                                    ASA_ASImage,
#endif
                                    0, ASIMAGE_QUALITY_DEFAULT);
        destroy_asimage( &amp;fore_im );
        destroy_asimage( &amp;back_im );

        if( rendered_im )
        {
#ifndef X_DISPLAY_MISSING
            Window w;
            /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .4 : */
            w = create_top_level_window( asv, DefaultRootWindow(dpy), 
                                         32, 32,
                                         width+BEVEL_ADDON, 
                                         height+BEVEL_ADDON,
                                         1, 0, NULL,
                                         &quot;&nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 &quot;, &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  );
            if( w != None )
            {
                Pixmap p ;

                XMapRaised   (dpy, w);

                /* see &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5 : */
                p = asimage2pixmap( asv, DefaultRootWindow(dpy), 
                                    rendered_im, NULL, True );
                destroy_asimage( &amp;rendered_im );
                /* see common.c: set_window_background_and_free() : */
                p = set_window_background_and_free( w, p );
                /* see common.c: wait_closedown() : */
                wait_closedown(w);
            }
            if( dpy )
                XCloseDisplay (dpy);
#else
            /* writing result into the file */
            ASImage2file( rendered_im, NULL, &quot;astext.jpg&quot;, ASIT_Jpeg, 
                          NULL );
            destroy_asimage( &amp;rendered_im );
#endif
        }
    }
    return 0 ;
}
</PRE></div><br></p></LI>
<A NAME="libAfterImage/tutorials/ASText.1 [7.1]"><UL><B>libAfterImage/tutorials/ASText.1 [7.1]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 1. Openning and closing fonts.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Before any &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  can be rendered using &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  - desired font
has to be opened for use. Font opening process is two-step. At first
we need to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  font manager ( &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  ). That is done once,
and same font manager can be used throughout entire application. It
contains information about used external libraries, hash of opened
fonts, and some other info.

When &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
  is created it could be used to obtain actuall fonts.
get_asfont() call is used to &nbsp;<? local_doc_url("visualdoc.php","query","asvisual#query_screen_visual_id()",$srcunset,$subunset) ?>
  cahce of the &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 , to see
&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the font has been loaded already, and &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  not - then it will load
the font and &nbsp;<? local_doc_url("visualdoc.php","prepare","asvisual#prepare_scanline()",$srcunset,$subunset) ?>
  it for drawing.

</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    if( (fontman = create_font_manager( dpy, NULL, NULL )) != NULL )
        font = get_asfont( fontman, font_name, 0, size, ASF_GuessWho);
    if( font == NULL )
    {
        font = get_asfont( fontman, &quot;fixed&quot;, 0, size, ASF_GuessWho );
        if( font == NULL )
        {
            show_error( &quot;font \&quot;fixed\&quot; is not available either. 
                            Aborting.&quot;);
            return 1;
        }
    }
    ...
    destroy_font( font );
    destroy_font_manager( fontman, False );
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>create_font_manager(), get_asfont(), destroy_font(),
destroy_font_manager()
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASText.2 [7.2]"><UL><B>libAfterImage/tutorials/ASText.2 [7.2]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 2. Approximating rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  size.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>Prior to actually drawing the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  it is usefull to estimate the size
of the image, that rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  will occupy, So that window can be
created of appropriate size, and othe interface elements laid out
accordingly. get_text_size() could be used to obtain rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
size without actually drawing it.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    get_text_size( &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , font, type_3d, &amp;width, &amp;height );
    if( fore_image_file )
    {
        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *tmp = file2ASImage( fore_image_file, 0xFFFFFFFF,
                                     SCREEN_GAMMA, 0, NULL );
        if( tmp )
        {
            if( tmp-&gt;width != width || tmp-&gt;height != height )
            {
                if( scale_fore_image )
                    fore_im = scale_asimage( asv, tmp, width, height,
                                             ASA_ASImage, 0,
                                             ASIMAGE_QUALITY_DEFAULT );
                else
                    fore_im = tile_asimage( asv, tmp, 0, 0,
                                            width, height, 0,
                                            ASA_ASImage, 0,
                                            ASIMAGE_QUALITY_DEFAULT );
                destroy_asimage( &amp;tmp );
            }else
                fore_im = tmp ;
        }
    }
</PRE></LI><LI><B>NOTES</B><br><PRE>In this particular example we either &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  or &nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  foreground texture
to fit the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . In order to texturize the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
   - we need to use
rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  as an alpha channel on texture image. That can easily
be done only &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  both images are the same size.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>get_text_size(), scale_asimage(), tile_asimage(), &nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
 .3
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASText.3 [7.3]"><UL><B>libAfterImage/tutorials/ASText.3 [7.3]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 3. Rendering texturized &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>The most effective &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  texturization technique provided by
&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  consists of substitution of the alpha channel of the
texture, with rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . That is possible since all the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  is
rendered into alpha channel only. move_asimage_channel() call is used
to accomplish this operation. This call actually removes channel
data from the original image and stores it in destination image. If
there was something in destination image's channel  already - it will
be destroyed.
All kinds of nifty things could be done using this call, actually.
Like, for example, rendered &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  can be moved into green channel of
the texture, creating funky effect.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    text_im = draw_text( &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , font, 0 );
    if( fore_im )
    {
        move_asimage_channel( fore_im, IC_ALPHA, text_im, IC_ALPHA );
        destroy_asimage( &amp;text_im );
    }else
        fore_im = text_im ;
</PRE></LI><LI><B>NOTES</B><br><PRE>move_asimage_channel() will only work &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  both images have exactly the
same size. It will do nothing otherwise.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>draw_text(), move_asimage_channel()
</PRE></LI></UL>
<A NAME="libAfterImage/tutorials/ASText.4 [7.4]"><UL><B>libAfterImage/tutorials/ASText.4 [7.4]</B><br></A><LI><B>SYNOPSIS</B><br><PRE>Step 4. Merging foreground and &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  with &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>On this step we have 2 images ready for us - &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and texturized
&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . At this point we need to &nbsp;<? local_doc_url("visualdoc.php","merge","transform#merge_layers()",$srcunset,$subunset) ?>
  them together by alpha-blending
&nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  over &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  (remeber - &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  is alpha-channel of foreground
texture). At the same time we would like to &nbsp;<? local_doc_url("visualdoc.php","add","blender#add_scanlines()",$srcunset,$subunset) ?>
  some nice &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  border
around entire image. To accomplish that task all we have to do is &nbsp;<? local_doc_url("visualdoc.php","setup","asvisual#setup_truecolor_visual()",$srcunset,$subunset) ?>
 
&nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structure for both &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and foreground, and apply
merge_layers on them. When it is done - we no longer need original
images and we &nbsp;<? local_doc_url("visualdoc.php","destroy","asvisual#destroy_asvisual()",$srcunset,$subunset) ?>
  them to &nbsp;<? local_doc_url("visualdoc.php","free","asvisual#free_scanline()",$srcunset,$subunset) ?>
  up some memory.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>    &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  layers[2] ;
    &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  = {0, 0xFFDDDDDD, 0xFF555555,
                             0xFFFFFFFF, 0xFF777777, 0xFF444444,
                          BEVEL_HI_WIDTH, BEVEL_HI_WIDTH,
                          BEVEL_LO_WIDTH, BEVEL_LO_WIDTH,
                          BEVEL_HI_WIDTH, BEVEL_HI_WIDTH,
                          BEVEL_LO_WIDTH, BEVEL_LO_WIDTH } ;
    memset( &amp;(layers[0]), 0x00, sizeof(layers) );
    layers[0].im = back_im ;
    layers[0].clip_width = width ;
    layers[0].clip_height = height ;
    layers[0].merge_scanlines = alphablend_scanlines ;
    layers[0].&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  = &amp;&nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  ;
    layers[1].im = fore_im ;
    layers[1].dst_x = TEXT_MARGIN ;
    layers[1].dst_y = TEXT_MARGIN ;
    layers[1].clip_width = fore_im-&gt;width ;
    layers[1].clip_height = fore_im-&gt;height ;
    layers[1].back_color = text_color ;
    layers[1].merge_scanlines = alphablend_scanlines ;
    rendered_im = merge_layers( asv, &amp;(layers[0]), 2,
                                width+BEVEL_ADDON, height+BEVEL_ADDON,
                                ASA_XImage, 0, ASIMAGE_QUALITY_DEFAULT);
    destroy_asimage( &amp;fore_im );
    destroy_asimage( &amp;back_im );
</PRE></LI><LI><B>NOTES</B><br><PRE>We have to remember that outside &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  border will addup to the image
size, hence we have to use width+BEVEL_ADDON , height+BEVEL_ADDON as
desired image size.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
 , merge_layers()
</PRE></LI></UL></UL>
