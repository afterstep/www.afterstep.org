&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AFTERImage</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">overview of libAfterImage image library</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/libAfterImage"><UL><B>libAfterImage/libAfterImage</B><br></A><LI><B>NAME</B><br>
<A NAME="libAfterImage"></A><B>libAfterImage</B><P class="dense">- generic imaging library originally designed for 
AfterStep X Window Manager.

</P></LI><LI><B>PURPOSE</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  is the imaging library implemented for AfterStep
X Window Manager. It has been generalized to be suitable for any
application in need of robust graphics engine.

It provides facilities for loading images from files of different
formats, compressed in memory storage of images, scaling,
tinting/shading, flipping and superimposition of arbitrary number of
images over each other. In addition it allows for linear gradients
drawing, and antialiased/smoothed &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  drawing using both  FreeType
library and X Window fonts.

Primary goals of this library are to achieve exceptional quality of
images and &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , making code fast and small at the same time.
Additional steps are taken to compensate for &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  colordepth
limitation, and different error diffusion algorithms are used to
provide for smooth images even in low colordepth modes.

</PRE></LI><LI><B>HISTORY</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  has been implemented as an attempt to address several
issues. First one, and most important is that X Window System
completely lacks any tools for image manipulation, except for very
rudimentary operations. With Introduction of Render extentions in
XFree86 4.0 that situation is changing, but still is far from
perfect. There need is therefore to implement client side image
manipulation. That inturn creates a problem of image data transfer
between Server and client.

To avoid that full-time image storage on the client side is needed.
Which is memory extensive. So there appears to be a need for some
in-memory compression.

On the other side there is an image quality issue. Its easy to write
a scaling function by simply dropping out or duplicating pixels,
but quality is awfull. What is needed is very fast
averaging/interpolation code. That brings us to the issue of 8 bits
per channel. Add two pixels together and you &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  overflow. So all the
math has to be performed in different &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
  and then converted
back. On the other side, such a conversion may discard valuable bits,
so some compensation method has to be implemented.

On the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  drawing side of things, there are numerous problems just
as well. Native X fonts look ugly as soon as you try to show any
decently sized &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 . That is supposed to be solved with said Render
extensions to XFree86, but as experiense has shown, things aren't as
easy as it looks, besides one wants his app to run well under any X
Server. FreeType library provides a solution, but not always
available. Another problem is that &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  you keep all your images on the
client side, you want to &nbsp;<? local_doc_url("visualdoc.php","draw","asfont#draw_text()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  on client side as well.

The solution is to provide transparent interface that could use both
X fonts and FreeType, cache glyphs on the client side and possibly
perform smoothing of ugly X fonts.

There is no library solving all this problems in one fell swoop,
except for monstrous ones, like ImLib.

Hence &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  has come to life.

</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>libAfterStep provides sevarl facilities.

1. X Visual abstruction layer via &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 . This layer handles &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
management, transfer of data to and from X Server, and other &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 
related stuff.

2. Scanline handling facility via &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 . &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  is the most
widely used structure since image handling is implemented on
per-scanline basis.

3. Image storage, trasformation and rendering via &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
provides for generic container used for any image or &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
manipulation. It incorporates such a robust facilities as in-memory
RLE compression, separate channel storage of 4 channels ( Alpha, Red,
Green, and Blue ) with 8 bit per channel.

4. Simplified font handling facility via &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  and ASFointManager.
All the font handling is done using &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
  structure, no matter what
type of font is used. Any font supported by X11 and FreeType can be
used.

5. Transparent image file reading for many different formats. Included
built-in XPM reading code and XCF ( GIMP's native format ).
Overall supported:
via external libraries :
XPM, JPEG, PNG, TIFF, GIF
via built in code :
XPM, XCF, PNM, PPM, BMP, ICO, CUR
Note that XPM can be supported both via built-in code or via libXpm,
depending on compilation configuration.
Actuall image file format is autodetected from the file contents -
file name extention is not used and can be anything at all.

6. Image &nbsp;<? local_doc_url("visualdoc.php","export","export#export",$srcunset,$subunset) ?>
  into many popular file formats. Currently implemented :
XPM, JPEG, PNG, GIF. Work is underway to implement support for TIFF,
XCF, BMP, ICO.

7. Image quantization to arbitrary size &nbsp;<? local_doc_url("visualdoc.php","colormap","ascmap#colormap_asimage()",$srcunset,$subunset) ?>
 .

8. &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  could be used without X window system, which is
coninient for such thing as web development. XML Image manipulation
tool, that could be used in such activity is included (see &nbsp;<? local_doc_url("visualdoc.php","ascompose","asimagexml#ascompose",$srcunset,$subunset) ?>
 .c)

9. Image reference counting

</PRE></LI><LI><B>USES</B><br><PRE>libAfterBase - AfterStep basic functionality library. That Includes
Hash tables, file search methods, message output, generic types.
However effort has been made to allow for standalone configuration as
well. If libAfterBase is not found at compilation time - &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 
will use extract from libAfterBase included with &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
 .

</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Examples
API Reference

</PRE></LI><LI><B>TODO</B><br><PRE>Implement support for Targa and PCX image format and maybe some other
formats as well.

Implement complete support for I18N internationalization.

Implement &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 &lt;-&gt;pixel conversion for all colordepths.

</PRE></LI><LI><B>AUTHOR</B><br><PRE>Sasha Vasko &lt;sasha at aftercode dot net&gt;
</PRE></LI></UL>
<A NAME="libAfterImage/Examples"><UL><B>libAfterImage/Examples</B><br></A><LI><B>EXAMPLE</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
   - image loading from the file and displaying in window.
&nbsp;<? local_doc_url("visualdoc.php","ASScale","asscale#ASScale",$srcunset,$subunset) ?>
  - image loading from file and scaling to arbitrary size.
&nbsp;<? local_doc_url("visualdoc.php","ASTile","astile#ASTile",$srcunset,$subunset) ?>
   - image loading from file, tiling and tinting to arbitrary
          size and &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
&nbsp;<? local_doc_url("visualdoc.php","ASMerge","asmerge#ASMerge",$srcunset,$subunset) ?>
  - imgae loading and merging with another image.
&nbsp;<? local_doc_url("visualdoc.php","ASGrad","asgrad#ASGrad",$srcunset,$subunset) ?>
   - mutlipoint &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  drawing.
&nbsp;<? local_doc_url("visualdoc.php","ASFlip","asflip#ASFlip",$srcunset,$subunset) ?>
   - image loading from file and rotation.
&nbsp;<? local_doc_url("visualdoc.php","ASText","astext#ASText",$srcunset,$subunset) ?>
   - trexturized semitransparent antialised &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  drawing.

</PRE></LI><LI><B>SEE ALSO</B><br><PRE>API Reference
</PRE></LI></UL>
<A NAME="libAfterImage/API Reference"><UL><B>libAfterImage/API Reference</B><br></A><LI><B>CHILDREN</B><br><PRE>Headers :
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
Structures :
         &nbsp;<? local_doc_url("visualdoc.php","ColorPair","asvisual#ColorPair",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageManager","asimage#ASImageManager",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageBevel","imencdec#ASImageBevel",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageDecoder","imencdec#ASImageDecoder",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageOutput","imencdec#ASImageOutput",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASGradient","asimage#ASGradient",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASFontManager","asfont#ASFontManager",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASFont","asfont#ASFont",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASGlyph","asfont#ASGlyph",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASGlyphRange","asfont#ASGlyphRange",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASColormap","ascmap#ASColormap",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASImageExportParams","export#ASImageExportParams",$srcunset,$subunset) ?>
 
         &nbsp;<? local_doc_url("visualdoc.php","ASVectorPalette","asimage#ASVectorPalette",$srcunset,$subunset) ?>
 

Functions :
  &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  handling:
        prepare_scanline(), free_scanline()

  &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  initialization :
        query_screen_visual(), setup_truecolor_visual(),
        setup_pseudo_visual(), setup_as_colormap(),
         create_asvisual(), create_asvisual_for_id(),
        destroy_asvisual()

  &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  encoding/decoding :
        visual2visual_prop(), visual_prop2visual()

  &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  convenience functions :
        create_visual_window(), create_visual_pixmap(),
        create_visual_ximage(), create_visual_gc()

  Colorspace conversion :
         rgb2value(), rgb2saturation(), rgb2hue(), rgb2luminance(),
         rgb2hsv(), rgb2hls(), hsv2rgb(), hls2rgb(),
         degrees2hue16(), hue162degrees(), normalize_degrees_val()

  Image quantization :
         colormap_asimage(), destroy_colormap()

  merge_scanline methods :
         alphablend_scanlines(), allanon_scanlines(),
         tint_scanlines(), add_scanlines(), sub_scanlines(),
         diff_scanlines(), darken_scanlines(), lighten_scanlines(),
         screen_scanlines(), overlay_scanlines(), hue_scanlines(),
         saturate_scanlines(), value_scanlines(),
         colorize_scanlines(), dissipate_scanlines().

  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  handling :
         asimage_init(), asimage_start(), create_asimage(),
         clone_asimage(), destroy_asimage()

  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  channel data manipulations :
         get_asimage_chanmask(), move_asimage_channel(),
         copy_asimage_channel(), copy_asimage_lines()

  ImageManager Reference counting and managing :
         create_image_manager(), destroy_image_manager(),
         store_asimage(), fetch_asimage(), dup_asimage(),
         release_asimage(), release_asimage_by_name()

  Layers helper functions :
         init_image_layers(), create_image_layers(),
         destroy_image_layers()

  Encoding :
         asimage_add_line(),    asimage_add_line_mono(),
         asimage_print_line()

  Decoding :
         start_image_decoding(), stop_image_decoding(),
         asimage_decode_line (), set_decoder_shift(),
         set_decoder_bevel_geom(), set_decoder_back_color()

  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  from scientific data :
         set_asimage_vector(), colorize_asimage_vector(),
         create_asimage_from_vector()

  Output :
         start_image_output(), set_image_output_back_color(),
         toggle_image_output_direction(), stop_image_output()

  X11 conversions :
         ximage2asimage(), pixmap2asimage(), asimage2ximage(),
         asimage2mask_ximage(), asimage2pixmap(), asimage2mask()

  Transformations :
         scale_asimage(), tile_asimage(), merge_layers(), 
            make_gradient(),
         flip_asimage(), mirror_asimage(), pad_asimage(),
         blur_asimage_gauss(), fill_asimage(), adjust_asimage_hsv()

  Import :
         file2ASImage(), file2pixmap()
  Export :
        ASImage2file()

  Text Drawing :
         create_font_manager(), destroy_font_manager(),
         open_freetype_font(), open_X11_font(), get_asfont(),
         release_font(), print_asfont(), print_asglyph(),
         draw_text(), draw_fancy_text()
</PRE></LI></UL>
