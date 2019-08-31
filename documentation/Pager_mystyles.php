&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Pager</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for virtual desktop navigation</FONT></td></tr></table><br><hr>
&nbsp;<? local_doc_url("visualdoc.php","Overview","Pager",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Base options","Pager_base_config",$srcunset,$subunset) ?>
 &nbsp;<b>MyStyles</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","Pager_options",$srcunset,$subunset) ?>
 <hr>

<A NAME="mystyles"><UL>
</A>
<A NAME="MyStyles"><LI>
<B>MyStyle DEFINITIONS</B><br></A>
<P class="dense">Starting with version 1.7.60 Pager supports definition of most of
it's visual parameters in look file as MyStyles. 
Styles can also be defined in pager &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
  file, but main contents of
the look file will override them. Include them in your pager &nbsp;<? local_doc_url("visualdoc.php","config","AudioEvents#options.config",$srcunset,$subunset) ?>
 
to make sure that you get nice looking Pager even &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  styles are not 
defined in look file.
The following standard &nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  names are used :</P>

<DL class="dense">
  
  <DT class="dense"><B>*PagerUWindowStyle</B></DT>
  <DD class="dense">
	<P class="dense">(defaults to &quot;unfocused_window_style&quot;) - unfocused &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  
	representation's style. 
	&nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  pixmap and &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  can be used here.</P>
   
  </DD>
  
  
  <DT class="dense"><B>*PagerFWindowStyle</B></DT>
  <DD class="dense">
	<P class="dense">(defaults to &quot;focused_window_style&quot;) - focused &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  representation's
	style. &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  pixmap and &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  can be used here.</P>   

  </DD>
  
  
  <DT class="dense"><B>*PagerSWindowStyle</B></DT>
  <DD class="dense">
	<P class="dense">(defaults to &quot;sticky_window_style&quot;) - sticky &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  representation's
	style. &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  pixmap and &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  can be used here.</P>   

  </DD>
  
  
  <DT class="dense"><B>*PagerActiveDesk</B></DT>
  <DD class="dense">
	<P class="dense">active (selected) desk's label style. This style - defines only look of
	the desk's LABEL - to define how your actual desk &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will look like
	-  you should use <I>*PagerStyle</I> option - see below. &nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
 
	pixmap, &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  and transparency can be used here.</P>   

  </DD>
  
  
  <DT class="dense"><B>*PagerInActiveDesk</B></DT>
  <DD class="dense">
	<P class="dense">Same as above, only for inactive desk's label. 
	&nbsp;<? local_doc_url("visualdoc.php","Background","Functions#options.Background",$srcunset,$subunset) ?>
  pixmap, &nbsp;<? local_doc_url("visualdoc.php","gradient","asimagexml#gradient",$srcunset,$subunset) ?>
  and transparency can be used here.</P>   

  </DD>
  
</DL>
</LI>
</UL>
