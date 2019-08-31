&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Look MyStyle definition</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines combination of color, font, style, background to be used together</FONT></td></tr></table><br><hr>
&nbsp;<? local_doc_url("visualdoc.php","Overview","MyStyle",$srcunset,$subunset) ?>
 &nbsp;<b>Configuration</b>
<hr>
<UL>

<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.BackColor">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BackColor","MyStyle_options#options.BackColor",$srcunset,$subunset) ?>
  <I>color</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  associated with this style. 
<I>color</I> is a &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  definition in one of the <? local_doc_url("visualdoc.php","color formats","ColorScheme",$srcunset,$subunset) ?> supported by AfterStep.
</P><P class="dense">
&nbsp;<? local_doc_url("visualdoc.php","BackColor","MyStyle_options#options.BackColor",$srcunset,$subunset) ?>
  is also used to calculate &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  colors used to draw a border around a widget.
</P>
	</DD>


<A NAME="options.BackGradient">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BackGradient","MyStyle_options#options.BackGradient",$srcunset,$subunset) ?>
  <I>type</I> <I>from</I> <I>to</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that a &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  should be used as a &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  instead of a
&nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . The &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  colors start at <I>from</I> and end at <I>to</I>.
<I>from</I> and <I>to</I> 
are &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  definition in one of the supported <? local_doc_url("visualdoc.php","color formats","ColorScheme",$srcunset,$subunset) ?>. 
If &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  includes at least one transparent &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  ( &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
  value &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to be below FF ), &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  will be &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 -blended over the
root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image.
<I>type</I>
can be 1, 2, 3, 4, or 5:</P>

<PRE>
1: Wharf-style diagonal &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
 
2: Horizontal from top to bottom
3: Horizontal from top/bottom to center
4: Vertical from left to right
5: Vertical from left/right to center
6: &nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 -&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
  diagonal ( same as 1 )
7: &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 -&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 -&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
  diagonal
8: Vertical &nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
  ( same as 2 )
9: Horizontal &nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
  ( same as 4 )
</PRE>
	</DD>


<A NAME="options.BackMultiGradient">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BackMultiGradient","MyStyle_options#options.BackMultiGradient",$srcunset,$subunset) ?>
  <I>type</I> <I>offset1</I> <I>color1</I> ... <I>offsetN</I> <I> colorN</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that a &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  should be used as a &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  instead of a
&nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . The &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  colors start at <I>color1</I> and end at
<I>colorN</I>. Each &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  has an <I>offset</I> associated with it. The
<I>offset</I> is a number between 0.0 and 1.0, and specifies where in
the &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  the colors are to be placed.  The colors are in one of the <? local_doc_url("visualdoc.php","color formats","ColorScheme",$srcunset,$subunset) ?> supported by AfterStep.
At least two colors must be given. 
If &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  includes at least one transparent &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  ( &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
  value &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to be below FF ), &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  will be &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 -blended over the
root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image.
The offsets are non-decreasing numbers between 0.0 and 1.0. If the first offset is not
0.0, it will be &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 0.0. If the last offset is not 1.0, it will be
&nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  to 1.0. <I>type</I> may be any of the following:</P>

<PRE>
6: &nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 -&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
  diagonal
7: &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 -&nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 -&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
  diagonal
8: Vertical &nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 
9: Horizontal &nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
  to &nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 
</PRE>
	</DD>


<A NAME="options.BackPixmap">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  <I>type</I> <I>pixmap_name|color_name</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies that a pixmap should be used as a &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  instead of a
&nbsp;<? local_doc_url("visualdoc.php","solid","asimagexml#solid",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 . This option has two forms, depending on the value of <I>type</I> :
</P> 
<P class="dense">
If <I>type</I> is 125, 126, 127, 128, 130-144, 150-164
- the second parameter, <I>pixmap_name</I>
must be the name of an image file which can be found in <I>PixmapPath</I>. 
</P> 
<P class="dense">
If <I>type</I> is 129 or 149 the root pixmap (desktop
background) will be used, and the optional second parameter must be a
&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  with which the root pixmap will be shaded/tinted.  
</P> 
<P class="dense">
Depending on the value of <I>type</I> AfterStep will render pixmap in many different ways :

<DL class="dense">
<DT class="dense"><B>125</B></DT><DD class="dense">
Image is SCALED to the size of the widget, and its opacity is used to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  the shape of the widget/&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  decoration, 
achieving non-rectangular &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  effect.
</DD>
<DT class="dense"><B>126</B></DT><DD class="dense">
Image is TILED to the size of the widget, and its opacity is used to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  the shape of the widget/&nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  decoration, 
achieving non-rectangular &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  effect.
</DD>
<DT class="dense"><B>127</B></DT><DD class="dense">
Image is SCALED to the size of the widget.
</DD>
<DT class="dense"><B>128</B></DT><DD class="dense">
Image is Tiled to the size of the image.
</DD>
<DT class="dense"><B>129</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is tinted/shaded with the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  specified with the second parameter.
</DD>
<DT class="dense"><B>130</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is combined with tiled image, using &quot;allanon&quot; method - taking average of pixel values.
</DD>
<DT class="dense"><B>131</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is &nbsp;<? local_doc_url("visualdoc.php","alpha","ColorScheme#color_values.alpha",$srcunset,$subunset) ?>
 -blended with tiled image.
</DD>
<DT class="dense"><B>132</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is tinted using pixel values of the tiled image, as a tint values on per-pixel basis.
</DD>
<DT class="dense"><B>133</B></DT><DD class="dense">
Each pixel of underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  has value of tiled image's pixel added to it.
</DD>
<DT class="dense"><B>134</B></DT><DD class="dense">
Each pixel of underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  has value of tiled image's pixel subtracted from it.
</DD>
<DT class="dense"><B>135</B></DT><DD class="dense">
Result consists of pixels representing absolute value of difference between underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  and tiled image.
</DD>
<DT class="dense"><B>136</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is darkened using luminocity of the tiled image's pixels.
</DD>
<DT class="dense"><B>137</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is lightened using luminocity of the tiled image's pixels.
</DD>
<DT class="dense"><B>138</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is &quot;screened&quot; by the tiled image.
</DD>
<DT class="dense"><B>139</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is &quot;overlayed&quot; by the tiled image.
</DD>
<DT class="dense"><B>140</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 's &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  is substituted with the &nbsp;<? local_doc_url("visualdoc.php","hue","ColorScheme#image_hues.hue_rotation",$srcunset,$subunset) ?>
  of the tiled image.
</DD>
<DT class="dense"><B>141</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 's saturation is substituted with the saturation of the tiled image.
</DD>
<DT class="dense"><B>142</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 's value (in HSV colorspace) is substituted with the value of the tiled image.
</DD>
<DT class="dense"><B>143</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is &quot;colorized&quot; by the tiled image.
</DD>
<DT class="dense"><B>144</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is &quot;dissipated&quot; by the tiled image.
</DD>

<DT class="dense"><B>149</B></DT><DD class="dense">
Underlying desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  is tinted/shaded with the &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  specified with the second parameter.
It differs from 129 so that desktop &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  could be both darkened and brightened. If tint &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 
channel is greater the 7F (127 decimal) - then respective channel of &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  will be brightened.
</DD>

<DT class="dense"><B>150 - 164</B></DT><DD class="dense">
Same as 130-144 but specified image is scaled to the size of the widget.
</DD>
</DL></P></DD>

<A NAME="options.DrawTextBackground">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","DrawTextBackground","MyStyle_options#options.DrawTextBackground",$srcunset,$subunset) ?>
  [<I>0|1</I>]</B></DT>
      <DD class="dense">
<P class="dense">Specifies that the area behind &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  drawn in this style should be cleared
to <I>BackColor</I>.  The argument is optional.  If the argument is 0,
this option is turned off; &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is omitted or is nonzero, the option is
turned on.</P>
	</DD>


<A NAME="options.Font">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Font","MyStyle_options#options.Font",$srcunset,$subunset) ?>
  <I>font</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies the font associated with this style. 
<I>font</I> copuld beeither a standard X11 font definition, or a filename of the TrueType font that could be found in &nbsp;<? local_doc_url("visualdoc.php","FontPath","Base#options.FontPath",$srcunset,$subunset) ?>
 .
To specify the size of the TrueType font - use format like that : FontName.ttf-&nbsp;<? local_doc_url("visualdoc.php","Size","Functions#options.Size",$srcunset,$subunset) ?>
 . </P>
		<P class="dense"> <B>Example : </B> <div class="container">
		<PRE>
	&nbsp;<? local_doc_url("visualdoc.php","Font","MyStyle_options#options.Font",$srcunset,$subunset) ?>
   DefaultSans.ttf-14</PRE>		
		</div><br></p>
	</DD>


<A NAME="options.ForeColor">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ForeColor","MyStyle_options#options.ForeColor",$srcunset,$subunset) ?>
  <I>color</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  associated with this style. 
<I>color</I>is &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  definition in one of the <? local_doc_url("visualdoc.php","color formats","ColorScheme",$srcunset,$subunset) ?> supported by AfterStep.
</P>
	</DD>


<A NAME="options.Inherit">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Inherit","MyFrame_options#options.Inherit",$srcunset,$subunset) ?>
  &quot;<I>style_name</I>&quot;</B></DT>
      <DD class="dense">
<P class="dense">Specifies a <I>MyStyle</I> to inherit options from. Options from
<I>style_name</I> will override previously specified options for this
style. <I>Inherit</I> is a good way to &nbsp;<? local_doc_url("visualdoc.php","save","asimagexml#save",$srcunset,$subunset) ?>
  memory and network bandwidth
&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  the same <I>BackPixmap</I> is used for several styles, as the pixmap
will only be loaded for the inherited style.</P>
	</DD>


<A NAME="options.MyStyle">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  &quot;<I>style_name</I>&quot;</B></DT>
  <DT class="dense"><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<I>style_option</I></B></DT>
  <DT class="dense"><B>~MyStyle</B></DT>
  <DD class="dense">
<P class="dense">Specifies the beginning of a look style definition. The style can be
referred to later by <I>style_name</I>. <I>~MyStyle</I> ends a look style
definition.</P>
	</DD>


<A NAME="options.Overlay">
	</A><DT class="dense"><B>Overlay</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.SliceXEnd">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SliceXEnd","MyStyle_options#options.SliceXEnd",$srcunset,$subunset) ?>
  <I>val</I></B></DT>
	<DD class="dense">
		<P class="dense">When used with scalable &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  it will make image sliced instead scaled.
Which means that its borders will remain unchanged, but center part will get tiled to fill empty space. &nbsp;<? local_doc_url("visualdoc.php","SliceXEnd","MyStyle_options#options.SliceXEnd",$srcunset,$subunset) ?>
  is the left edge of the right border.</P>
	</DD>


<A NAME="options.SliceXStart">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SliceXStart","MyStyle_options#options.SliceXStart",$srcunset,$subunset) ?>
  <I>val</I></B></DT>
	<DD class="dense">
		<P class="dense">When used with scalable &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  it will make image sliced instead scaled.
Which means that its borders will remain unchanged, but center part will get tiled to fill empty space. &nbsp;<? local_doc_url("visualdoc.php","SliceXStart","MyStyle_options#options.SliceXStart",$srcunset,$subunset) ?>
  is the width of the left border.</P>
	</DD>


<A NAME="options.SliceYEnd">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SliceYEnd","MyStyle_options#options.SliceYEnd",$srcunset,$subunset) ?>
  <I>val</I></B></DT>
	<DD class="dense">
		<P class="dense">When used with scalable &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  it will make image sliced instead scaled.
Which means that its borders will remain unchanged, but center part will get tiled to fill empty space. &nbsp;<? local_doc_url("visualdoc.php","SliceYEnd","MyStyle_options#options.SliceYEnd",$srcunset,$subunset) ?>
  is the top edge of the bottom border.</P>
	</DD>


<A NAME="options.SliceYStart">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","SliceYStart","MyStyle_options#options.SliceYStart",$srcunset,$subunset) ?>
  <I>val</I></B></DT>
	<DD class="dense">
		<P class="dense">When used with scalable &nbsp;<? local_doc_url("visualdoc.php","BackPixmap","MyStyle_options#options.BackPixmap",$srcunset,$subunset) ?>
  it will make image sliced instead scaled.
Which means that its borders will remain unchanged, but center part will get tiled to fill empty space. &nbsp;<? local_doc_url("visualdoc.php","SliceYStart","MyStyle_options#options.SliceYStart",$srcunset,$subunset) ?>
  is the height of the top border.</P>
	</DD>


<A NAME="options.TextStyle">
</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","TextStyle","MyStyle_options#options.TextStyle",$srcunset,$subunset) ?>
  <I>style</I></B></DT>
      <DD class="dense">
<P class="dense">Specifies the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  <I>style</I> associated with this style. <I>style</I>
can be 0, 1, or 2:</P>

<PRE>
0: normal &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
1: embossed 3D &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
2: sunken 3D &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
3: &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  has &nbsp;<? local_doc_url("visualdoc.php","shade","AudioEvents#options.shade",$srcunset,$subunset) ?>
  above the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
4: &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  has &nbsp;<? local_doc_url("visualdoc.php","shade","AudioEvents#options.shade",$srcunset,$subunset) ?>
  below the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
5: thick embossed 3D &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
6: thick sunken 3D &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 
7: &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  is outlined with contrasting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  on upper edge of a glyph.
8: &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  is outlined with contrasting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  on bottom edge of a glyph.
9: &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  is outlined with contrasting &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  all around a glyph.
</PRE>
	</DD>


</DL></P></LI>
</UL>
