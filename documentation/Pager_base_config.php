&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Pager</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for virtual desktop navigation</FONT></td></tr></table><br><hr>
&nbsp;<? local_doc_url("visualdoc.php","Overview","Pager",$srcunset,$subunset) ?>
 &nbsp;<b>Base options</b>
&nbsp;<? local_doc_url("visualdoc.php","MyStyles","Pager_mystyles",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Configuration","Pager_options",$srcunset,$subunset) ?>
 <hr>

<A NAME="base_config"><UL>
<LI>
<B>BASE CONFIGURATION OPTIONS</B><br></A>
<P class="dense">The following two configuration options are in the <I>base</I> file:</P>

<DL class="dense">
  
  <DT class="dense"><B>*&nbsp;<? local_doc_url("visualdoc.php","DeskTopSize","Base#options.DeskTopSize",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","Columns","Pager_options#options.Columns",$srcunset,$subunset) ?>
  x Rows</I></B></DT>
  <DD class="dense">
	<P class="dense">Defines the number of view <I>Columns</I> by the number of view
	<I>Rows</I> of the desk(s) in proportional units, i.e. 2x1 would show
	2 views of one desk, one beside another.</P>

  </DD>
  
  
  <DT class="dense"><B>*&nbsp;<? local_doc_url("visualdoc.php","DeskTopScale","Base#options.DeskTopScale",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
  <DD class="dense">
	<P class="dense">If the geometry is not specified, then a desktop reduction factor is
	used to calculate the pager's size. Things in the pager &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 
	are shown at 1/<I>number</I> of the actual size.</P>

  </DD>
  
</DL>
</LI>
</UL>
