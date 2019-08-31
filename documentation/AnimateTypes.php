&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Animate AnimateResize modes</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">animation modes used in the Animate module's config</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","Animate","Animate",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Resize","Functions#options.Resize",$srcunset,$subunset) ?>
  type
</UL>
<hr>





<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Flip">
	</A><DT class="dense"><B>Flip</B></DT>
	<DD class="dense">
		<P class="dense">When iconified, windows will turn-over from top to bottom while shrinking.</P>
	</DD>


<A NAME="options.Random">
	</A><DT class="dense"><B>Random</B></DT>
	<DD class="dense">
		<P class="dense">When iconified, windows will shrink using a randomly selected animation type of either &nbsp;<? local_doc_url("visualdoc.php","Flip","AnimateTypes#options.Flip",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Turn","AnimateTypes#options.Turn",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Twist","AnimateTypes#options.Twist",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Zoom","AnimateTypes#options.Zoom",$srcunset,$subunset) ?>
 , or &nbsp;<? local_doc_url("visualdoc.php","Zoom3D","AnimateTypes#options.Zoom3D",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Turn">
	</A><DT class="dense"><B>Turn</B></DT>
	<DD class="dense">
		<P class="dense">When iconified, windows will revolve from left to right while shrinking.</P>
	</DD>


<A NAME="options.Twist">
	</A><DT class="dense"><B>Twist</B></DT>
	<DD class="dense">
		<P class="dense">When iconified, windows will &nbsp;<? local_doc_url("visualdoc.php","rotate","asimagexml#rotate",$srcunset,$subunset) ?>
  counter-clockwise while shrinking.</P>
		<P class="dense">Note: The above mode &quot;&nbsp;<? local_doc_url("visualdoc.php","Twist","AnimateTypes#options.Twist",$srcunset,$subunset) ?>
 &quot; should not be confused with the &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  configuration option &quot;&nbsp;<? local_doc_url("visualdoc.php","AnimateTwist","Animate#options.AnimateTwist",$srcunset,$subunset) ?>
 &quot;.</P>
	</DD>


<A NAME="options.Zoom">
	</A><DT class="dense"><B>Zoom</B></DT>
	<DD class="dense">
		<P class="dense">Windows will only shrink when iconified.</P>
	</DD>


<A NAME="options.Zoom3D">
	</A><DT class="dense"><B>Zoom3D</B></DT>
	<DD class="dense">
		<P class="dense">When iconified, windows will shrink with a 3D tunnel-effect.</P>
	</DD>


</DL></P></LI>
