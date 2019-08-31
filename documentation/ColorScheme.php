&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Custom Color Scheme</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines color values for standard set of internal color names, to be used in other configuration files</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","ColorScheme_options","ColorScheme",$subunset) ?>
 <hr>



<A NAME="overview"><UL>
</A>
<A NAME="description"><LI><B>DESCRIPTION</B><br></A>
<P class="dense">AfterStep &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  schemes are supposed to ease the pain of assembling &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of colors that go well with each other,
while providing additional flexibility while designing custom looks/themes. 
</P><P class="dense">
AfterStep Colorscheme is a standard &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  names, that may have different &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  values assigned to them.
This &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  names are used in defining Look and in XML images. 
By assigning different &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  values to teh same &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  names it is possible to instantly change colors throughout entire Look, 
without altering any images or configuration files.
</P><P class="dense">
Not all of the Colorscheme colors have to be explicitely defined. Only the &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is important. 
AfterStep is capable of autogeneration of good-looking colorscheme, from this single &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
Explicit &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  definition in colorscheme file will override any automatic choice. 
Example of this is the NeXTish colorscheme, where all of the colors are customized.
If grayscale &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  is choosen for &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  - it will generate grayscale colorscheme, where different shades of gray 
are used for different colors.
</P><P class="dense">
Selected colorscheme file is loaded by all modules and afterstep proper. 
Whenever &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  colorscheme is selected - it triggers reloading of the Look file and all image files.
</P><P class="dense">
All of the supplied Look files had been written to take advantage of the AfterStep colorschemes.
</P><P class="dense">
Please read below for more details on how colorschemes are generated and other &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 -related topics :
</P><P class="dense">
</P>

<A NAME="harmonious_colors"><UL><B>HARMONIOUS COLORS</B><br></A>
<P class="dense">
Task of selecting a &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of matching colors is a serious matter, and it was studied by artists and designers for centuries.
AS the result there are certain rules developed to simplify this task. 
</P>
<P class="dense">Firstly, instead of selecting colors in Red/Green/Blue colorspace, matching colors should be selected using 
Hue/Saturation/Value (HSV) colorspace. Color hues are the most important characteristic of the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 ,
and is measured in degrees from 0(red hue) to 60(yellow hue) to 120(green hue) to 180(cyan hue) to 240(blue hue) to 300(purple hue) and then to 360 which is the same &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  as 0 - &nbsp;<? local_doc_url("visualdoc.php","red","ColorScheme#color_values.red",$srcunset,$subunset) ?>
 .
Hues could be placed on a so called &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  circle, making it easier to choose matching colors.
</P>
<P class="dense">There are two main approaches to selecting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  scheme - single &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 , or several hues. 
</P>
<P class="dense">Single &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  colors differ in its saturation, and usually allow for a soothing, simple theme. 
Such theme could be pleasant to look at, but it lacks in excitement, and makes it difficult to distinguish between different elements.
</P>
<P class="dense">Using several hues makes theme a bit more exciting, and adds more visual cues to the screen, providing for 
easier operation, and allowing user to relax eye muscles, resulting in better ergonomics.
Accordingly this is the approach that should be used for user interface colors. 
Now how to select hues that compose harmonious theme? 
The rule of the thumb is that hues that are &nbsp;<? local_doc_url("visualdoc.php","close","WharfSounds#options.close_folder",$srcunset,$subunset) ?>
  to each other on &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  circle go well with each other, while those, located
on opposing sides of the circle, create contrasting effect. 
</P>
<P class="dense">AfterStep addresses the task of selecting harmonious colors, 
by generating a &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  of colors from a single &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  using designer rules.
</P>
</UL>


<A NAME="image_hues"><UL><B>IMAGE HUES</B><br></A>
<P class="dense">Look of the screen (aka Theme), includes numerous images, such as icons, backgrounds, bars, etc. 
Each such image may have one or several dominating hues, which brings us back to the task of matching hues, in order to 
achieve harmonious look.
</P>
<P class="dense">The rule of the thumb to follow here is that, each image on any particular interface element, such as titlebar, should have at least one dominating &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  to be the same as
the &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  of this element.
</P>
<P class="dense">There are several way to make sure that &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  of the image matches that of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  : 
</P>
<DL class="dense">

<A NAME="image_hues.tinting">
</A><DT class="dense"><B>tinting</B></DT><DD class="dense">
If an image has single dominating &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 , it could be converted to grayscale and then tinted with the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  of the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .
</DD>

<A NAME="image_hues.hue_rotation">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  rotation</B></DT><DD class="dense">
If an image has several hues, or a &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  and some grayscale parts - its hues could be rotated, by converting image into HSV colorspace,
changing range of hues, and then converting image back into &nbsp;<? local_doc_url("visualdoc.php","RGB","ColorScheme#color_values.rgb",$srcunset,$subunset) ?>
  colorspace.
</DD>

<A NAME="image_hues.superimposition">
</A><DT class="dense"><B>superimposition</B></DT><DD class="dense">
Also image hues may be altered by superimposing it over the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image using allanon composition method, 
where each pixel is substituted with the average of image's pixel value and &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 's pixel value.
</DD> 
</DL>
<P class="dense">AfterStep addresses the task of changing hues of images using XML image scripting.
See <? local_doc_url("visualdoc.php","asimagexml","asimagexml",$srcunset,$subunset) ?> for more on that.
</P>
</UL>


<A NAME="color_names"><UL><B>COLOR NAMES</B><br></A>
<P class="dense">
AfterStep Colorscheme &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  names could be separated in several categories : 
</P>
<DL class="dense">

<A NAME="color_names.fore_back">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Foreground","ColorScheme#color_names.fore_back",$srcunset,$subunset) ?>
  and Background</B></DT><DD class="dense">
&nbsp;<? local_doc_url("visualdoc.php","Foreground","ColorScheme#color_names.fore_back",$srcunset,$subunset) ?>
  colors are used to render &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , while &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  colors make up a backdrop for that &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 .
Now there are several constraints on foreground colors - they should be contrasting with backgrounds, 
and it is always better to constrain foreground colors to black and white, as colored &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  tends to &quot;bleed&quot; ontop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 , 
making it less eligible. Another problem with foreground being colorfull is that it increases strain on user's eyes, 
forcing them to adapt to too many different contrasting colors.
</DD>

<A NAME="color_names.active_inactive">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  and Inactive</B></DT><DD class="dense">
General &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  theme of the screen is determined by &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 . 
Accordingly we term it a &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , and determine the rest of the colors as relation to it.
Now at any given time there could be one element that is focused and active, while other are off &nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  and should 
assume lower visibility. We define &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  colors to be used with focused items (should be contrasting with the &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  color). 
We also define Inactive colors to be used with off-&nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  items (its a good idea to make them analogues to the &nbsp;<? local_doc_url("visualdoc.php","Base","ColorScheme#color_names.active_inactive",$srcunset,$subunset) ?>
  color). 
Now as we may have 2 kinds of off-&nbsp;<? local_doc_url("visualdoc.php","focus","AudioEvents#options.focus_change",$srcunset,$subunset) ?>
  windows (sticky and non-sticky ), we actually define 2 Inactive colors: &nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","Inactive2","ColorScheme_options#options.Inactive2",$srcunset,$subunset) ?>
 .
</DD>

<A NAME="color_names.grads">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Gradient","ColorScheme#color_names.grads",$srcunset,$subunset) ?>
  colors</B></DT><DD class="dense">
Gradients create very appealing look when used to &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  titlebars and other interface elements. 
Generally its a good idea to use colors of the same &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 , but having different intensity. 
To denote colors designated for gradients we &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  Dark/Light postfix to &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  names.
</DD>
</DL>
</UL>


<A NAME="color_values"><UL><B>COLOR VALUES</B><br></A>
<P class="dense">
AfterStep supports extremely flexible and extensive ways to define &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  value. 
Standard approach is to use #RRGGBB notation. 
In addition to that, AfterStep supports the following notations :  
</P>

<DL class="dense">

<A NAME="color_values.rgb">
</A><DT class="dense"><B>#RGB</B></DT><DD class="dense">
Same as #RRGGBB, only using 4bit values for components. For example #F84 is the same as #F08040.
</DD>

<A NAME="color_values.argb">
</A><DT class="dense"><B>#ARGB</B></DT><DD class="dense">
This is the same as #&nbsp;<? local_doc_url("visualdoc.php","RGB","ColorScheme#color_values.rgb",$srcunset,$subunset) ?>
  plus Alpha value is added (Alpha value defines opacity of the color).
</DD>

<A NAME="color_values.aarrggbb">
</A><DT class="dense"><B>#AARRGGBB</B></DT><DD class="dense">
This is the same as #RRGGBB plus 8-bit Alpha value is added.
</DD>

<A NAME="color_values.hsv_func">
</A><DT class="dense"><B>hsv(hue,saturation,value)</B></DT><DD class="dense">
Defines &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  using HSV colorspace &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  is measured from 0 to 360 degrees, saturation and value are measured from 0 to 100.
</DD>

<A NAME="color_values.rgb_func">
</A><DT class="dense"><B>rgb(red,&nbsp;<? local_doc_url("visualdoc.php","green","ColorScheme#color_values.green",$srcunset,$subunset) ?>
 ,blue)</B></DT><DD class="dense">
Defines &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  in &nbsp;<? local_doc_url("visualdoc.php","RGB","ColorScheme#color_values.rgb",$srcunset,$subunset) ?>
  colorspace. Similar to #RRGGBB form, but values are not in hex, but in decimals (from 0 to 255). 
It also allows for nested expressions, such as : rgb(128,128,blue(Base)). 
</DD>

<A NAME="color_values.ahsv_func">
</A><DT class="dense"><B>ahsv(alpha,&nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 ,saturation,value)</B></DT><DD class="dense">
Same as hsv(), but also adds Alpha channel.
</DD>

<A NAME="color_values.argb_func">
</A><DT class="dense"><B>argb(alpha,&nbsp;<? local_doc_url("visualdoc.php","red","ColorScheme#color_values.red",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","green","ColorScheme#color_values.green",$srcunset,$subunset) ?>
 ,blue)</B></DT><DD class="dense">
Same as argb(), but also adds Alpha channel.
</DD>

<A NAME="color_values.hue">
</A><DT class="dense"><B>hue(hue,color)</B></DT><DD class="dense">
Alters &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  of the given predefined &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 , preserving its saturation and value.
</DD>

<A NAME="color_values.sat">
</A><DT class="dense"><B>sat(saturation,color)</B></DT><DD class="dense">
Alters saturation of the given predefined &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD>

<A NAME="color_values.val">
</A><DT class="dense"><B>val(value,color)</B></DT><DD class="dense">
Alters value of the given predefined &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD>

<A NAME="color_values.alpha">
</A><DT class="dense"><B>alpha(alpha,color)</B></DT><DD class="dense">
Alters &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
  of the given predefined &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . This is usefull to make colors from colorscheme semi-transparent.
</DD>

<A NAME="color_values.red">
</A><DT class="dense"><B>red(red,color)</B></DT><DD class="dense">
Alters &nbsp;<? local_doc_url("visualdoc.php","red","ColorScheme#color_values.red",$srcunset,$subunset) ?>
  channel value of the given predefined &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD>

<A NAME="color_values.green">
</A><DT class="dense"><B>green(green,color)</B></DT><DD class="dense">
Alters &nbsp;<? local_doc_url("visualdoc.php","green","ColorScheme#color_values.green",$srcunset,$subunset) ?>
  channel value of the given predefined &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD>

<A NAME="color_values.blue">
</A><DT class="dense"><B>blue(blue,color)</B></DT><DD class="dense">
Alters &nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
  channel value of the given predefined &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .
</DD>
</DL>
<P class="dense">
</P>
<P class="dense"> <B>Example : </B> <div class="container">
<PRE>
#This could be used in colorscheme definition : 

&nbsp;<? local_doc_url("visualdoc.php","Inactive1","ColorScheme_options#options.Inactive1",$srcunset,$subunset) ?>
  #FF5C5B66  		# or ahsv(255,245,10,40) or argb(255,92,91,102)

#This could be used in &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  definition in the look. 
#That makes Sticky &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's titlebar semi-transparent: 

&nbsp;<? local_doc_url("visualdoc.php","BackMultiGradient","MyStyle_options#options.BackMultiGradient",$srcunset,$subunset) ?>
    6 alpha(50,Inactive2Dark) 0.0 alpha(50,Inactive2Light) 1.0</PRE>
</div><br></p>
</UL>
</LI>

</UL>


<A NAME="footnotes"><UL>
</A><P class="dense">Actuall usage of colors is defined in AfterStep look file, in &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  definitions. 
Also all ColorScheme colors could be used in AfterStep XML images, similarly to standard X &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  aliases.
It is also possible to use different aspects of each &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
   - &nbsp;<? local_doc_url("visualdoc.php","red","ColorScheme#color_values.red",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","green","ColorScheme#color_values.green",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","blue","ColorScheme#color_values.blue",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
 , saturation and value individualy.
For each &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  there are 6 variables defined using following sytax: $ascs.colorname.component . 
For example $ascs.&nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
 .&nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  represents &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  of the &nbsp;<? local_doc_url("visualdoc.php","Active","ColorScheme_options#options.Active",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . This is usefull while doing transformations (tinting, &nbsp;<? local_doc_url("visualdoc.php","hsv","asimagexml#hsv",$srcunset,$subunset) ?>
 , etc ) in 
AfterStep XML images.</P>
  
</UL>
