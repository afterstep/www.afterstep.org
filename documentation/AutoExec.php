&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep Autoexec (startup/restart sequences)</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">functions to be executed by AfterStep on startup/shutdown</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","AfterStep","AfterStep",$srcunset,$subunset) ?>
 AutoExec
 <? local_doc_url("visualdoc.php","Base Configuration","Base",$srcunset,$subunset) ?>
 <? local_doc_url("visualdoc.php","Function","Function",$srcunset,$subunset) ?>
</UL>
<hr>


<A NAME="overview"><UL>
</A><P class="dense"> This  is  the  file  that  initializes various Modules or programs when
       afterstep is either started or restarted.  Each &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
   is  handled  within
       &nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  stanzas.</P>
</UL>



<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Function">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  <I>&quot;InitFunction&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">gets exectued on &nbsp;<? local_doc_url("visualdoc.php","startup","AudioEvents#options.startup",$srcunset,$subunset) ?>
 .</P>
	</DD>
	<DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Function","Functions#options.Function",$srcunset,$subunset) ?>
  <I>&quot;RestartFunction&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">gets executed on restart.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","AS Function","Functions",$srcunset,$subunset) ?> for further details.</P>
	</DD>


</DL></P></LI>
