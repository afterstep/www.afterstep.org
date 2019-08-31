&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Look MyBackground definition</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">details how background is to be rendered</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","Look","Look",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","MyBackground","MyBackground#options.MyBackground",$srcunset,$subunset) ?>
 
 <? local_doc_url("visualdoc.php","MyFrame","MyFrame",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","MyStyle","MyStyle",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Suported hints","SupportedHints",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Titlebar layout","TbarLayout",$srcunset,$subunset) ?>
</UL>
<hr>





<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Align">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  <I>[type]</I></B></DT>
	<DD class="dense">
		<P class="dense">it  will  align resulting image according to type.  Possible
		values are :
		<P class="dense">1: - align to the right of the screen</P>
		<P class="dense">2: - align to the bottom of the screen</P>
		<P class="dense">3: - align to the bottom-right of the screen</P>
		<P class="dense">0 or 4: - align to the center of the screen This option
		works only in  conjunction  with  the following &nbsp;<? local_doc_url("visualdoc.php","Pad","MyBackground#options.Pad",$srcunset,$subunset) ?>
  option.</P></P></DD>

<A NAME="options.Cut">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Cut","MyBackground#options.Cut",$srcunset,$subunset) ?>
  <I>&quot;geometry&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">will cut piece with specified geometry from the source
                image.</P>
	</DD>


<A NAME="options.MyBackground">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MyBackground","MyBackground#options.MyBackground",$srcunset,$subunset) ?>
  <I>&quot;background_name&quot;</I></B></DT>
	<DT class="dense"><B>background_option</B></DT>
	<DT class="dense"><B>~MyBackground</B></DT>
	<DD class="dense">
		<P class="dense">Specifies the beginning of a &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  definition. The
                &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
   can be  referred to later by background_name.
                ~&nbsp;<? local_doc_url("visualdoc.php","MyBackground","MyBackground#options.MyBackground",$srcunset,$subunset) ?>
  ends a  root  &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  definition.</P>
	</DD>


<A NAME="options.Pad">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Pad","MyBackground#options.Pad",$srcunset,$subunset) ?>
  <I>[type &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 ]</I></B></DT>
	<DD class="dense">
		<P class="dense">will &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  image &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  it is smaller then screen  with  specified
		&nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
 .  Possible type values are :</P>
                <P class="dense">1: - &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  horizontally and &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  vertically</P>
                <P class="dense">2: - &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  vertically and &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  horizontally</P>
                <P class="dense">3: - &nbsp;<? local_doc_url("visualdoc.php","pad","asimagexml#pad",$srcunset,$subunset) ?>
  both vertically and horizontally to make the image the
		size of the screen.</P>
	</DD>


<A NAME="options.Scale">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Scale","MyBackground#options.Scale",$srcunset,$subunset) ?>
  <I>[geometry]</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","scale","asimagexml#scale",$srcunset,$subunset) ?>
  image to specified geometry. If geometry is omitted
                the image will be scaled to the screen size.</P>
	</DD>


<A NAME="options.Tint">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Tint","MyBackground#options.Tint",$srcunset,$subunset) ?>
  <I>color</I></B></DT>
	<DD class="dense">
		<P class="dense"></P></DD>

<A NAME="options.Use">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
 
	<I>type</I>
	<I>&quot;data&quot;</I>
	</B></DT>
	<DD class="dense">
		<P class="dense">Specifies what to use as the  root  &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 .  Possible
                     type values are :</P>
                     <P class="dense">0: load image from the file. In that case &quot;data&quot; should specify
                     filename.</P>

               <P class="dense">1: &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  definition to fill root. In that case &quot;data&quot;
                     should specify one of the &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  names defined in your look file.</P>

               <P class="dense">2: &nbsp;<? local_doc_url("visualdoc.php","Use","MyBackground#options.Use",$srcunset,$subunset) ?>
  external application to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 . &quot;data&quot;
                     should specify command line options to this external app. If you wish to use another application
                     to display the root &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
 , you need to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  the &quot;--with-imageloader&quot;
                     flag to use that application then recompile AfterStep.)</P>

               <P class="dense">Note:  remaining  &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
   options  are valid only for
                     type of 0 !!!</P>

               <P class="dense">The remaining options will perform transformations on the
                     source         image,        in        this        order:</P>
                     <DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Cut","MyBackground#options.Cut",$srcunset,$subunset) ?>
 -&gt;&nbsp;<? local_doc_url("visualdoc.php","Tint","MyBackground#options.Tint",$srcunset,$subunset) ?>
 -&gt;&nbsp;<? local_doc_url("visualdoc.php","Scale","MyBackground#options.Scale",$srcunset,$subunset) ?>
 -&gt;&nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
 -&gt;&nbsp;<? local_doc_url("visualdoc.php","Pad","MyBackground#options.Pad",$srcunset,$subunset) ?>
 .</B></DT>
	</DD>


</DL></P></LI>
