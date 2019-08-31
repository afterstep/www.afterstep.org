&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Window Placement types</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep supports several different window placement policies. Some of them designed to fill free space, and some allowing for windows to be placed on top of others.</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<hr>





<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Cascade">
	</A><DT class="dense"><B>Cascade</B></DT>
	<DD class="dense">
		<P class="dense">Windows will be placed in cascading order.</P>
	</DD>


<A NAME="options.Manual">
	</A><DT class="dense"><B>Manual</B></DT>
	<DD class="dense">
		<P class="dense">Windows must be placed manually.</P>
	</DD>


<A NAME="options.RandomPlacement">
	</A><DT class="dense"><B>RandomPlacement</B></DT>
	<DD class="dense">
		<P class="dense">Windows will be placed randomply, in space unobstructed by windows that have AvoidCover attribute &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.SmartPlacement">
	</A><DT class="dense"><B>SmartPlacement</B></DT>
	<DD class="dense">
		<P class="dense">Most suitable free space area will be chosen to place &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in. 
If no such area is found of sufficient size - &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will be placed using secondary placement strategy, or manually, 
&nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  no secondary strategy is specified.</P>
	</DD>


<A NAME="options.Tile">
	</A><DT class="dense"><B>Tile</B></DT>
	<DD class="dense">
		<P class="dense">Windows will be tiled in free space. If no space of suitable size is found, 
then secondary placement strategy is engaged, or &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  will have to be placed manually. 
This is similar to &nbsp;<? local_doc_url("visualdoc.php","SmartPlacement","Feel#options.SmartPlacement",$srcunset,$subunset) ?>
 , except that suitable space is chosen following direction left-to-right, top-to-bottom, 
instead of looking for space, most fitting the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  size (the way &nbsp;<? local_doc_url("visualdoc.php","SmartPlacement","Feel#options.SmartPlacement",$srcunset,$subunset) ?>
  works).</P>
	</DD>


</DL></P></LI>
