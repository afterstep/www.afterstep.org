&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><b>Look Alignment flags</b><br><br>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","Look","Look",$srcunset,$subunset) ?>
 Alignment flags
 <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","MyBackground","MyBackground",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","MyFrame","MyFrame",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","MyStyle","MyStyle",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Suported hints","SupportedHints",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Titlebar layout","TbarLayout",$srcunset,$subunset) ?>
</UL>
<hr>


<A NAME="overview"><UL>
</A><P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  flags specify how contents of the widget should be aligned. Each widget is divided into the grid of 8x8 cells.
Each of widget's visible items occupy one of the cells. Widget attempts to determine the size of each row and column, by
using size of visible elements that occupy it's cells and its align flags. 
</P>
<P class="dense">
Note that some visible items ( such as icons, images, &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
 , buttons ) may occupy same cell that affecting the size of it.
</P>
</UL>



<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Bottom">
	</A><DT class="dense"><B>Bottom</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  contents to the bottom of the widget.</P>
	</DD>


<A NAME="options.Center">
	</A><DT class="dense"><B>Center</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Align","MyBackground#options.Align",$srcunset,$subunset) ?>
  contents to the center of the widget. This is the same as combination of all of the &nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 ,Top</P>
	</DD>


<A NAME="options.HCenter">
	</A><DT class="dense"><B>HCenter</B></DT>
	<DD class="dense">
		<P class="dense">Horizontally align contents to the center. Same as combination of &nbsp;<? local_doc_url("visualdoc.php","Left","Align#options.Left",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.HScaled">
	</A><DT class="dense"><B>HScaled</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Scale","MyBackground#options.Scale",$srcunset,$subunset) ?>
  contents to the width of the widget. 
		      If used in combination with &nbsp;<? local_doc_url("visualdoc.php","LabelWidth","Align#options.LabelWidth",$srcunset,$subunset) ?>
  - width of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  will be used insted of the width of the widget.</P>
	</DD>


<A NAME="options.HTiled">
	</A><DT class="dense"><B>HTiled</B></DT>
	<DD class="dense">
		<P class="dense">Tiles image to fill entire widget's width.</P>
	</DD>


<A NAME="options.LabelHeight">
	</A><DT class="dense"><B>LabelHeight</B></DT>
	<DD class="dense">
		<P class="dense">Has to be appplied to &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image of the widget - it will cause this image to be resized
		(tiled or scaled) to the height of the widget's label (such as titlebar text).</P>
	</DD>


<A NAME="options.LabelSize">
	</A><DT class="dense"><B>LabelSize</B></DT>
	<DD class="dense">
		<P class="dense">Same as the combination of &nbsp;<? local_doc_url("visualdoc.php","LabelWidth","Align#options.LabelWidth",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","LabelHeight","Align#options.LabelHeight",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.LabelWidth">
	</A><DT class="dense"><B>LabelWidth</B></DT>
	<DD class="dense">
		<P class="dense">Has to be appplied to &nbsp;<? local_doc_url("visualdoc.php","background","asimagexml#background",$srcunset,$subunset) ?>
  image of the widget - it will cause this image to be resized
		(tiled or scaled) to the width of the widget's label (such as titlebar text).</P>
	</DD>


<A NAME="options.Left">
	</A><DT class="dense"><B>Left</B></DT>
	<DD class="dense">
		<P class="dense">Aligns image, &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  or block of buttons to the left of the widget.</P>
	</DD>


<A NAME="options.None">
	</A><DT class="dense"><B>None</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Right">
	</A><DT class="dense"><B>Right</B></DT>
	<DD class="dense">
		<P class="dense">Aligns image, &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  or block of buttons to the right of the widget.</P>
	</DD>


<A NAME="options.Top">
	</A><DT class="dense"><B>Top</B></DT>
	<DD class="dense">
		<P class="dense">Aligns image, &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  or block of buttons to the top of the widget.</P>
	</DD>


<A NAME="options.VCenter">
	</A><DT class="dense"><B>VCenter</B></DT>
	<DD class="dense">
		<P class="dense">Vertically align contents to the center. Same as combination of &nbsp;<? local_doc_url("visualdoc.php","Top","Align#options.Top",$srcunset,$subunset) ?>
 ,&nbsp;<? local_doc_url("visualdoc.php","Bottom","Align#options.Bottom",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.VScaled">
	</A><DT class="dense"><B>VScaled</B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","Scale","MyBackground#options.Scale",$srcunset,$subunset) ?>
  contents to the height of the widget. 
		      If used in combination with &nbsp;<? local_doc_url("visualdoc.php","LabelHeight","Align#options.LabelHeight",$srcunset,$subunset) ?>
  - height of the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  will be used insted of the height of the widget.</P>
	</DD>


<A NAME="options.VTiled">
	</A><DT class="dense"><B>VTiled</B></DT>
	<DD class="dense">
		<P class="dense">Tiles image to fill entire widget's height.</P>
	</DD>


</DL></P></LI>
