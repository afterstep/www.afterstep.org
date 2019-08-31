&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Database</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines how windows should be treated by AfterStep depending on its name</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 Database
 </A><? local_doc_url("visualdoc.php","Gravity","Gravity",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","style definition","ASDatabaseEntry",$srcunset,$subunset) ?>
</UL>
<hr>


<A NAME="overview"><UL>
</A><P class="dense">This file contains &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  properties for application windows which controls
their &quot;behavior&quot; within <B>afterstep</B>.</P>
</UL>



<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Style">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
  <I>&quot;WM_NAME&quot; option[s]</I></B></DT>
	<DD class="dense">
		<P class="dense">The <I>&quot;WM_NAME&quot;</I> can be the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 's name, class or resource string.
		It can also contain wildcards such as &quot;*&quot; or &quot;?&quot;, which are matched in the usual
		UNIX filename manner. Using the standard X11 <I>xprop(1)</I> command at a
		command prompt or the <I>&nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Properties</I> menu item entry under
		<I>Desktop</I> menu entry will return this (and other) property.</P>
		<P class="dense">The <I>option[s]</I> is a comma separated list containing all or some of
		the keywords found in the <? local_doc_url("visualdoc.php","Style definition","ASDatabaseEntry",$srcunset,$subunset) ?>.</P>
		<P class="dense">If conflicting style options are specified, the last one will be used.</P>
	</DD>


</DL></P></LI>
