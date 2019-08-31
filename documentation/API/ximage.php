&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">XImage</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">functionality for displaying ASImages on X display</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/ximage.h"><UL><B>libAfterImage/ximage.h</B><br></A><LI><B>NAME</B><br>
<A NAME="ximage"></A><B>ximage</B><P class="dense">- Defines conversion to and from XImages and Pixmaps.
</P></LI><LI><B>DESCRIPTION</B><br><PRE>ximage2asimage()    - convert XImage structure into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
pixmap2asimage()    - convert X11 pixmap into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
asimage2ximage()    - convert &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  into XImage
asimage2mask_ximage() - convert alpha channel of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  into XImage
asimage2pixmap()    - convert &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  into Pixmap ( possibly using
                      precreated XImage )
asimage2mask()  - convert alpha channel of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  into 1 bit
                      mask Pixmap.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Other &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
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
<A NAME="libAfterImage/picture_ximage2asimage()"><UL><B>libAfterImage/picture_ximage2asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="picture_ximage2asimage()"></A><B>picture_ximage2asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *picture_ximage2asimage ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                                  XImage * xim, XImage *alpha_xim,
                                  unsigned int compression );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>xim</B></DT><DD class="dense">- source XImage
</DD><DT class="dense"><B>alpha_xim</B></DT><DD class="dense">- source XImage for Alpha channel
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- degree of compression of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to newly allocated &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , containing encoded data, on
success. NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>picture_ximage2asimage will attempt to &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  new &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  with the same
dimensions as supplied XImage. If both XImages are supplied - they must
have same dimentions. XImage will be decoded based on
supplied &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 , and resulting scanlines will be encoded into
&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/ximage2asimage()"><UL><B>libAfterImage/ximage2asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="ximage2asimage()"></A><B>ximage2asimage()</B><P class="dense">- same as picture_ximage2asimage with alpha_ximage 
&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to NULL. Supplied for compatibility with older versions and for 
convinience.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *&nbsp;<? local_doc_url("visualdoc.php","ximage2asimage","ximage#ximage2asimage()",$srcunset,$subunset) ?>
  ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, XImage * xim,
                          unsigned int compression );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>xim</B></DT><DD class="dense">- source XImage
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- degree of compression of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to newly allocated &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , containing encoded data, on
success. NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br></LI></UL>
<A NAME="libAfterImage/pixmap2asimage()"><UL><B>libAfterImage/pixmap2asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="pixmap2asimage()"></A><B>pixmap2asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *pixmap2ximage( &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Pixmap p, int x, int y,
                        unsigned int width, unsigned int height,
                           unsigned long plane_mask,
                        unsigned int compression);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>p</B></DT><DD class="dense">- source Pixmap
</DD><DT class="dense"><B>x,</B></DT><DD class="dense">y,
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height- rectangle on Pixmap to be encoded into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>plane_mask</B></DT><DD class="dense">- limits &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  planes to be copied from Pixmap.
</DD><DT class="dense"><B>keep_cache</B></DT><DD class="dense">- indicates &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  we should keep XImage, used to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
 
               image data from the X server, and attached it to 
                  &nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  member of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- degree of compression of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to newly allocated &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , containing data in XImage format, 
on success. NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>pixmap2ximage will obtain XImage of the requested area of the
X Pixmap, and it will attach it to newly created &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  using 
alt.&nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  member. After that newly created &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  could be used 
in any transformations.
</PRE></LI>
<A NAME="libAfterImage/pixmap2asimage()"><UL><B>libAfterImage/pixmap2asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="pixmap2asimage()"></A><B>pixmap2asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *&nbsp;<? local_doc_url("visualdoc.php","pixmap2asimage","ximage#pixmap2asimage()",$srcunset,$subunset) ?>
  ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Pixmap p,
                          int x, int y,
                          unsigned int width,
                          unsigned int height,
                          unsigned long plane_mask,
                          Bool keep_cache,
                          unsigned int compression );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>p</B></DT><DD class="dense">- source Pixmap
</DD><DT class="dense"><B>x,</B></DT><DD class="dense">y,
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height- rectangle on Pixmap to be encoded into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>plane_mask</B></DT><DD class="dense">- limits &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  planes to be copied from Pixmap.
</DD><DT class="dense"><B>keep_cache</B></DT><DD class="dense">- indicates &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  we should keep XImage, used to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
 
               image data from the X server, and attached it to 
               &nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  member of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- degree of compression of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to newly allocated &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , containing encoded data, on
success. NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>same as picture2asimage() with alpha pixmap &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to None. Supplied for
compatibility and convinience.
</PRE></LI></UL></UL>
<A NAME="libAfterImage/picture2asimage()"><UL><B>libAfterImage/picture2asimage()</B><br></A><LI><B>NAME</B><br>
<A NAME="picture2asimage()"></A><B>picture2asimage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *&nbsp;<? local_doc_url("visualdoc.php","picture2asimage","ximage#picture2asimage()",$srcunset,$subunset) ?>
  (struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv,
                          Pixmap rgb, Pixmap a,
                          int x, int y,
                          unsigned int width,
                          unsigned int height,
                          unsigned long plane_mask,
                          Bool keep_cache,
                          unsigned int compression );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>rgb</B></DT><DD class="dense">- source Pixmap for red, green and blue channels
</DD><DT class="dense"><B>a</B></DT><DD class="dense">- source Pixmap for the alpha channel
</DD><DT class="dense"><B>x,</B></DT><DD class="dense">y,
</DD><DT class="dense"><B>width,</B></DT><DD class="dense">height- rectangle on Pixmap to be encoded into &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>plane_mask</B></DT><DD class="dense">- limits &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  planes to be copied from Pixmap.
</DD><DT class="dense"><B>keep_cache</B></DT><DD class="dense">- indicates &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  we should keep XImage, used to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
 
               image data from the X server, and attached it to 
                  &nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  member of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>compression</B></DT><DD class="dense">- degree of compression of resulting &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>pointer to newly allocated &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , containing encoded data, on
success. NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>&nbsp;<? local_doc_url("visualdoc.php","picture2asimage","ximage#picture2asimage()",$srcunset,$subunset) ?>
  will obtain XImage of the requested area of the
X Pixmap, If alpha channel pixmap is supplied - it will be used to 
encode &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 's alpha channel. Alpha channel pixmap must be either
8 or 1 bit deep, and it must have the same dimentions as main Pixmap.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage2ximage()"><UL><B>libAfterImage/asimage2ximage()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage2ximage()"></A><B>asimage2ximage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>XImage  *&nbsp;<? local_doc_url("visualdoc.php","asimage2ximage","ximage#asimage2ximage()",$srcunset,$subunset) ?>
   (struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>On success returns newly created and encoded XImage of the same
colordepth as the supplied &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 . NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>asimage2ximage() creates new XImage of the exact same size as
supplied &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , and depth of supplied &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 . REd, Green and
Blue channels of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  then gets decoded, and encoded into XImage.
Missing scanlines &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  filled with black &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>NOTES</B><br><PRE>Returned pointer to XImage will also be stored in im-&gt;alt.&nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
 ,
and It will be destroyed when XImage is destroyed, or reused in any
subsequent calls to asimage2ximage(). If any other behaviour is
desired - &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  sure you &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  im-&gt;alt.&nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  to NULL, to dissociate
XImage object from &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>create_visual_ximage()
</PRE></LI></UL>
<A NAME="libAfterImage/asimage2alpha_ximage()"><UL><B>libAfterImage/asimage2alpha_ximage()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage2alpha_ximage()"></A><B>asimage2alpha_ximage()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>XImage  *asimage2alpha_ximage (struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, 
                               &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, Bool bitmap);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>bitmap</B></DT><DD class="dense">- &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  True resulting XImage will have depth of 1 bit -
               traditional X mask; otherwise it will have depth of 8
               (usefull for XFree86 RENDER extension)
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>On success returns newly created and encoded XImage of the depth 1 or 8.
NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>asimage2alpha_ximage() creates new XImage of the exact same size as
supplied &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , and depth 1 or 8. Alpha channels of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  then gets
decoded, and encoded into XImage. In case requested depth is 1 then
alpha channel is interpreted like so: 127 or greater is encoded as 1,
otherwise as 0.
Missing scanlines &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  filled with 1s as they signify absence of mask.
</PRE></LI><LI><B>NOTES</B><br><PRE>Returned pointer to XImage will also be stored in im-&gt;alt.mask_ximage,
and It will be destroyed when XImage is destroyed, or reused in any
subsequent calls to asimage2mask_ximage(). If any other behaviour is
desired - &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  sure you &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  im-&gt;alt.mask_ximage to NULL, to dissociate
XImage object from &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 .
</PRE></LI></UL>
<A NAME="libAfterImage/asimage2mask_ximage()"><UL><B>libAfterImage/asimage2mask_ximage()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage2mask_ximage()"></A><B>asimage2mask_ximage()</B><P class="dense">- same as asimage2alpha_ximage(). Supplied for 
convinience and compatibility with older versions.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>XImage  *asimage2mask_ximage (struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>On success returns newly created and encoded XImage of the depth 1.
NULL on failure.
</PRE></LI></UL>
<A NAME="libAfterImage/asimage2pixmap()"><UL><B>libAfterImage/asimage2pixmap()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage2pixmap()"></A><B>asimage2pixmap()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Bool     asimage2drawable( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Drawable d, &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im,
                        GC gc,
                       int src_x, int src_y, int dest_x, int dest_y,
                       unsigned int width, unsigned int height,
                           Bool use_cached);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>d</B></DT><DD class="dense">- destination drawable - Pixmap or Window
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>gc</B></DT><DD class="dense">- precreated GC to use for XImage transfer. If NULL,
              asimage2drawable() will use DefaultGC.
</DD><DT class="dense"><B>src_x</B></DT><DD class="dense">- Specifies the offset in X from the left edge of the image
               defined by the &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>src_y</B></DT><DD class="dense">- Specifies the offset in Y from the top edge of the image
               defined by the &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  structure.
</DD><DT class="dense"><B>dest_x,dest_y-</B></DT><DD class="dense">Specify the x and y coordinates, which are relative to
               the origin of the drawable and are the coordinates of
               the subimage.
</DD><DT class="dense"><B>width,height</B></DT><DD class="dense">- Specify the width and height of the subimage, which
               define the dimensions of the rectangle.
</DD><DT class="dense"><B>use_cached</B></DT><DD class="dense">- If True will &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  asimage2pixmap() to use XImage
              attached to &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , instead of creating new one. Only
              works &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 -&gt;&nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  data member is not NULL.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>On success returns True.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>asimage2drawable() creates will &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  portion of &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  onto the X
Drawable. It checks &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it needs to encode XImage
from &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  data, and calls asimage2ximage() &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  yes, it has to.
It then supplied gc or DefaultGC of the &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
  to transfer
XImage to the server.
Missing scanlines &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  filled with black &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>asimage2ximage()
asimage2pixmap()
create_visual_pixmap()
</PRE></LI>
<A NAME="libAfterImage/asimage2pixmap()"><UL><B>libAfterImage/asimage2pixmap()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage2pixmap()"></A><B>asimage2pixmap()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Pixmap   &nbsp;<? local_doc_url("visualdoc.php","asimage2pixmap","ximage#asimage2pixmap()",$srcunset,$subunset) ?>
   ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window root,
                           &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, GC gc, Bool use_cached);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>asv</B></DT><DD class="dense">- pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
</DD><DT class="dense"><B>root</B></DT><DD class="dense">- root window of destination &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>im</B></DT><DD class="dense">- source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
</DD><DT class="dense"><B>gc</B></DT><DD class="dense">- precreated GC to use for XImage transfer. If NULL,
              asimage2pixmap() will use DefaultGC.
</DD><DT class="dense"><B>use_cached</B></DT><DD class="dense">- If True will &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  asimage2pixmap() to use XImage
              attached to &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , instead of creating new one. Only
              works &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 -&gt;&nbsp;<? local_doc_url("visualdoc.php","ximage","ximage#ximage",$srcunset,$subunset) ?>
  data member is not NULL.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>On success returns newly pixmap of the same colordepth as &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
 .
None on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>asimage2pixmap() creates new pixmap of exactly same size as
supplied &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . It then calls asimage2drawable to &nbsp;<? local_doc_url("visualdoc.php","copy","asimage#copy_asimage_channel()",$srcunset,$subunset) ?>
  entire content
of the &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  onto that created pixmap.
</PRE></LI><LI><B>EXAMPLE</B><br><PRE>asview.c: &nbsp;<? local_doc_url("visualdoc.php","ASView","asview#ASView",$srcunset,$subunset) ?>
 .5
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>asimage2ximage()
asimage2drawable()
create_visual_pixmap()
</PRE></LI></UL></UL>
<A NAME="libAfterImage/asimage2mask()"><UL><B>libAfterImage/asimage2mask()</B><br></A><LI><B>NAME</B><br>
<A NAME="asimage2mask()"></A><B>asimage2mask()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>Pixmap   &nbsp;<? local_doc_url("visualdoc.php","asimage2mask","ximage#asimage2mask_ximage()",$srcunset,$subunset) ?>
  ( struct &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  *asv, Window root,
                        &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
  *im, GC gc, Bool use_cached);
asv        - pointer to valid &nbsp;<? local_doc_url("visualdoc.php","ASVisual","asvisual#ASVisual",$srcunset,$subunset) ?>
  structure
root       - root window of destination &nbsp;<? local_doc_url("visualdoc.php","screen","blender#screen_scanlines()",$srcunset,$subunset) ?>
 
im         - source &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 
gc         - precreated GC for 1 bit deep drawables to use for
             XImage transfer. If NULL, asimage2mask() will &nbsp;<? local_doc_url("visualdoc.php","create","asvisual#create_asvisual_for_id()",$srcunset,$subunset) ?>
  one.
use_cached - If True will &nbsp;<? local_doc_url("visualdoc.php","make","transform#make_gradient()",$srcunset,$subunset) ?>
  asimage2mask() to use mask XImage
            attached to &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 , instead of creating new one. Only
            works &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 -&gt;alt.mask_ximage data member is not NULL.
</PRE></LI><LI><B>RETURN VALUE</B><br><PRE>On success returns newly created pixmap of the colordepth 1.
None on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>asimage2mask() creates new pixmap of exactly same size as
supplied &nbsp;<? local_doc_url("visualdoc.php","ASImage","asimage#ASImage",$srcunset,$subunset) ?>
 . It then calls asimage2mask_ximage().
It then uses supplied gc, or creates new gc, to transfer
XImage to the server and put it on Pixmap.
Missing scanlines &nbsp;<? local_doc_url("visualdoc.php","get","asimage#get_asimage_chanmask()",$srcunset,$subunset) ?>
  filled with 1s.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>asimage2mask_ximage()
</PRE></LI></UL>
