&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">ASImage Blending</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">functionality for blending of image data using diofferent algorithms</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/blender.h"><UL><B>libAfterImage/blender.h</B><br></A><LI><B>NAME</B><br>
<A NAME="blender"></A><B>blender</B><P class="dense"></P></LI><LI><B>DESCRIPTION</B><br><PRE>Defines implemented methods for &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  combining, that could
be passed to merge_layers() via &nbsp;<? local_doc_url("visualdoc.php","ASImageLayer","asimage#ASImageLayer",$srcunset,$subunset) ?>
  structure.
Also includes functions for &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
  conversion RGB&lt;-&gt;HSV and
RGB&lt;-&gt;HLS.
</PRE></LI><LI><B>SEE ALSO</B><br><PRE>Functions :
   Colorspace conversion :
         rgb2value(), rgb2saturation(), rgb2hue(), rgb2luminance(),
         rgb2hsv(), rgb2hls(), hsv2rgb(), hls2rgb().

   merge_scanline methods :
         alphablend_scanlines(), allanon_scanlines(),
         tint_scanlines(), add_scanlines(), sub_scanlines(),
         diff_scanlines(), darken_scanlines(), lighten_scanlines(),
         screen_scanlines(), overlay_scanlines(), hue_scanlines(),
         saturate_scanlines(), value_scanlines(),
         colorize_scanlines(), dissipate_scanlines().

   usefull merging function name to function translator :
         blend_scanlines_name2func()

Other &nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
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
<A NAME="libAfterImage/colorspace"><UL><B>libAfterImage/colorspace</B><br></A><LI><B>NAME</B><br>
<A NAME="colorspace"></A><B>colorspace</B><P class="dense"></P></LI><LI><B>DESCRIPTION</B><br><PRE>RGB &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
 : each &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is represented as a combination of
red, green and blue values. Each &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  can be in 2 formats :
8 bit and 24.8 bit. 24.8 bit makes for 32bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  with lower 8 bits
used as a fraction for better calculation precision.

HSV &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
 : each &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is represented as a combination of
&nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 , saturation and &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 . Hue is generally colorizing component where
&nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  represents brightness.

HLS &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
 : each &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is represented as a combination of
&nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 , luminance and saturation. It is analogous to HSV with &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 
substituted by luminance, except that luminance could be both
negative and positive.

alpha channel could be added to any of the above colorspaces. alpha
channel is generally used to define transparentness of the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
&nbsp;<? local_doc_url("visualdoc.php","libAfterImage","afterimage#libAfterImage",$srcunset,$subunset) ?>
  is using ARGB &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
  as a base &nbsp;<? local_doc_url("visualdoc.php","colorspace","blender#colorspace",$srcunset,$subunset) ?>
 , and
represents most colors as &nbsp;<? local_doc_url("visualdoc.php","ARGB32","asvisual#ARGB32",$srcunset,$subunset) ?>
  values or &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  scanlines of
pixels.
</PRE></LI></UL>
<A NAME="libAfterImage/rgb2value()"><UL><B>libAfterImage/rgb2value()</B><br></A><LI><B>NAME</B><br>
<A NAME="rgb2value()"></A><B>rgb2value()</B><P class="dense"></P>
<A NAME="rgb2saturation()"></A><B>rgb2saturation()</B><P class="dense"></P>
<A NAME="rgb2hue()"></A><B>rgb2hue()</B><P class="dense"></P>
<A NAME="rgb2luminance()"></A><B>rgb2luminance()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>CARD32 rgb2value( CARD32 red, CARD32 green, CARD32 blue );
CARD32 rgb2saturation( CARD32 red, CARD32 green, CARD32 blue );
CARD32 rgb2hue( CARD32 red, CARD32 green, CARD32 blue );
CARD32 &nbsp;<? local_doc_url("visualdoc.php","rgb2luminance","blender#rgb2luminance()",$srcunset,$subunset) ?>
  (CARD32 red, CARD32 green, CARD32 blue );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>red</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent red channel
</DD><DT class="dense"><B>green</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent green channel
</DD><DT class="dense"><B>blue</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent blue channel
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , saturation, &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 ,
or luminance respectively.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This functions translate RGB &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  into respective coordinates of
HSV and HLS colorspaces.
Returned &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  values are in 16bit format. To translate it to and from
conventional 0-360 degree range, please use :
degrees2hue16() - converts conventional &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  in 0-360 range into hue16
hue162degree()  - converts 16bit &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  into conventional degrees.
</PRE></LI></UL>
<A NAME="libAfterImage/rgb2hsv()"><UL><B>libAfterImage/rgb2hsv()</B><br></A><LI><B>NAME</B><br>
<A NAME="rgb2hsv()"></A><B>rgb2hsv()</B><P class="dense"></P>
<A NAME="rgb2hls()"></A><B>rgb2hls()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>CARD32 rgb2hsv( CARD32 red, CARD32 green, CARD32 blue,
                CARD32 *saturation, CARD32 *&nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  );
CARD32 rgb2hls( CARD32 red, CARD32 green, CARD32 blue,
                CARD32 *luminance, CARD32 *saturation );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>red</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent red channel
</DD><DT class="dense"><B>green</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent green channel
</DD><DT class="dense"><B>blue</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent blue channel
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 .
32bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  pointed to by luminance, &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  and saturation will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 
respectively to &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  luminance, &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  and saturation.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This functions translate RGB &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  into full &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of HSV and HLS
coordinates at once. These functions work faster then separate
translation into each channel.
</PRE></LI></UL>
<A NAME="libAfterImage/hsv2rgb()"><UL><B>libAfterImage/hsv2rgb()</B><br></A><LI><B>NAME</B><br>
<A NAME="hsv2rgb()"></A><B>hsv2rgb()</B><P class="dense"></P>
<A NAME="hls2rgb()"></A><B>hls2rgb()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>void hsv2rgb( CARD32 &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 , CARD32 saturation, CARD32 &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 ,
              CARD32 *red, CARD32 *green, CARD32 *blue);
void hls2rgb( CARD32 &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 , CARD32 luminance, CARD32 saturation,
              CARD32 *red, CARD32 *green, CARD32 *blue);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>hue</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>saturation</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent saturation.
</DD><DT class="dense"><B>value</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 .
</DD><DT class="dense"><B>luminance</B></DT><DD class="dense">- 32 bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 , 16 lower bits of which represent luminance.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>32bit &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  pointed to by red, green and blue will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 
respectively to RGB &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  channels.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>This functions performs reverse translation from HSV and HSL to
RGB &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
</PRE></LI></UL>
<A NAME="libAfterImage/merge_scanline"><UL><B>libAfterImage/merge_scanline</B><br></A><LI><B>NAME</B><br>
<A NAME="alphablend_scanlines()"></A><B>alphablend_scanlines()</B><P class="dense">- combines top and bottom RGB components based
                       on alpha channel &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
 :
                       bottom = bottom*(255-top_alpha)+top*top_alpha;
</P>
<A NAME="allanon_scanlines()"></A><B>allanon_scanlines()</B><P class="dense">- averages each pixel between two scanlines.
                       This method has been first implemented by
                       Ethan Fisher aka &nbsp;<? local_doc_url("visualdoc.php","allanon","blender#allanon_scanlines()",$srcunset,$subunset) ?>
  as mode 130:
                       bottom = (bottom+top)/2;
</P>
<A NAME="tint_scanlines()"></A><B>tint_scanlines()</B><P class="dense">- tints bottom scanline with top scanline( with
                       saturation to prevent overflow) :
                       bottom = (bottom*(top/2))/32768;
</P>
<A NAME="add_scanlines()"></A><B>add_scanlines()</B><P class="dense">- adds top scanline to bottom scanline with
                       saturation to prevent overflow:
                       bottom = bottom+top;
</P>
<A NAME="sub_scanlines()"></A><B>sub_scanlines()</B><P class="dense">- substrates top scanline from bottom scanline
                       with saturation to prevent overflow:
                       bottom = bottom-top;
</P>
<A NAME="diff_scanlines()"></A><B>diff_scanlines()</B><P class="dense">- for each pixel calculates absolute difference
                       between bottom and top &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  :
                       bottom = (bottom&gt;top)?bottom-top:top-bottom;
</P>
<A NAME="darken_scanlines()"></A><B>darken_scanlines()</B><P class="dense">- substitutes each pixel with minimum &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
                       &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of top and bottom :
                       bottom = (bottom&gt;top)?top:bottom;
</P>
<A NAME="lighten_scanlines()"></A><B>lighten_scanlines()</B><P class="dense">- substitutes each pixel with maximum &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
                       &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of top and bottom :
                       bottom = (bottom&gt;top)?bottom:top;
</P>
<A NAME="screen_scanlines()"></A><B>screen_scanlines()</B><P class="dense">- some wierd merging algorithm taken from GIMP;
</P>
<A NAME="overlay_scanlines()"></A><B>overlay_scanlines()</B><P class="dense">- some wierd merging algorithm taken from GIMP;
</P>
<A NAME="hue_scanlines()"></A><B>hue_scanlines()</B><P class="dense">- substitute &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  of bottom scanline with &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
  of
                       top scanline;
</P>
<A NAME="saturate_scanlines()"></A><B>saturate_scanlines()</B><P class="dense">- substitute saturation of bottom scanline with
                       the saturation of top scanline;
</P>
<A NAME="value_scanlines()"></A><B>value_scanlines()</B><P class="dense">- substitute &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of bottom scanline with
                       the &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of top scanline;
</P>
<A NAME="colorize_scanlines()"></A><B>colorize_scanlines()</B><P class="dense">- combine luminance of bottom scanline with &nbsp;<? local_doc_url("visualdoc.php","hue","blender#hue_scanlines()",$srcunset,$subunset) ?>
 
                       and saturation of top scanline;
</P>
<A NAME="dissipate_scanlines()-"></A><B>dissipate_scanlines()-</B><P class="dense">randomly alpha-&nbsp;<? local_doc_url("visualdoc.php","blend","blender#blend_scanlines_name2func()",$srcunset,$subunset) ?>
  bottom and top scanlines,
                       using alpha &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of top scanline as a
                       threshold for random values.
</P></LI><LI><B>SYNOPSIS</B><br><PRE>void alphablend_scanlines( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void allanon_scanlines   ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void tint_scanlines      ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void add_scanlines       ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void sub_scanlines       ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void diff_scanlines      ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void darken_scanlines    ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void lighten_scanlines   ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void screen_scanlines    ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void overlay_scanlines   ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void hue_scanlines       ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void saturate_scanlines  ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void value_scanlines     ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void colorize_scanlines  ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
void dissipate_scanlines ( &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *bottom, &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  *top, int );
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>bottom</B></DT><DD class="dense">- pointer to the &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  that will be overalayed
</DD><DT class="dense"><B>top</B></DT><DD class="dense">- pointer to &nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  that will &nbsp;<? local_doc_url("visualdoc.php","overlay","blender#overlay_scanlines()",$srcunset,$subunset) ?>
  bottom.
</DD></DL></LI><LI><B>DESCRIPTION</B><br><PRE>This functions accept 2 scanlines as an arguments stored in
&nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
  structures with data in 24.8 format. Merging operation is
performed on these scanlines and result is stored in bottom
&nbsp;<? local_doc_url("visualdoc.php","ASScanline","asvisual#ASScanline",$srcunset,$subunset) ?>
 .
The following are merging methods used in each function :

</PRE></LI></UL>
<A NAME="libAfterImage/blend_scanlines_name2func()"><UL><B>libAfterImage/blend_scanlines_name2func()</B><br></A><LI><B>NAME</B><br>
<A NAME="blend_scanlines_name2func()"></A><B>blend_scanlines_name2func()</B><P class="dense"></P>
<A NAME="list_scanline_merging()"></A><B>list_scanline_merging()</B><P class="dense"></P></LI><LI><B>SYNOPSIS</B><br><PRE>merge_scanlines_func blend_scanlines_name2func( const char *name );
void list_scanline_merging(FILE* stream, const char *format);
</PRE></LI><LI><B>INPUTS</B><br><DL class="dense"><DT class="dense"><B>name</B></DT><DD class="dense">- string, identifying scanline merging function.
</DD></DL></LI><LI><B>RETURN VALUE</B><br><PRE>returns pointer to the scanline merging function on succes.
NULL on failure.
</PRE></LI><LI><B>DESCRIPTION</B><br><PRE>blend_scanlines_name2func() will strip leading whitespaces off of
the supplied name, and then will attempt to match it against the &nbsp;<? local_doc_url("visualdoc.php","list","blender#list_scanline_merging()",$srcunset,$subunset) ?>
 
of names of merging functions. It will then return pointer to the
function with matching name.
list_scanline_merging() simply prints out description of implemented
blending/merging methods onto the supplied stream, in supplied format.
Format must include 2 string specs, like so : &quot;%s - %s&quot; where first
one will be substituted to short method name, and second - description
</PRE></LI></UL>
