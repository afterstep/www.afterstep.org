&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Animate</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module animating windows being iconified/deiconified</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>


<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>Animate</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>]
	<P class="dense">The configuration options listed below are &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  in the configuration file &quot;animate&quot;, located in $SHAREDIR/afterstep/ and copied to and edited in $HOME/.afterstep/ (~/.afterstep/).</P>
</LI>
</UL>




<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.AnimateColor">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AnimateColor","Animate#options.AnimateColor",$srcunset,$subunset) ?>
  <I>color</I></B></DT>
	<DD class="dense">
		<P class="dense">Tells &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  what &nbsp;<? local_doc_url("visualdoc.php","color","asimagexml#color",$srcunset,$subunset) ?>
  (see &nbsp;<? local_doc_url("visualdoc.php","rgb","ColorScheme#color_values.rgb_func",$srcunset,$subunset) ?>
 .txt) to draw the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  outline with as it animates.</P>
	</DD>


<A NAME="options.AnimateDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AnimateDelay","Wharf#options.AnimateDelay",$srcunset,$subunset) ?>
  <I>milliseconds</I></B></DT>
	<DD class="dense">
		<P class="dense">Tells &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  how many milliseconds to sleep between frames of animation.</P>
	</DD>


<A NAME="options.AnimateIterations">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AnimateIterations","Animate#options.AnimateIterations",$srcunset,$subunset) ?>
  <I>steps</I></B></DT>
	<DD class="dense">
		<P class="dense">Tells &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  how many steps to break the animation into.</P>
	</DD>


<A NAME="options.AnimateResize">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AnimateResize","Animate#options.AnimateResize",$srcunset,$subunset) ?>
  <I>mode</I></B></DT>
	<DD class="dense">
		<P class="dense">Tells &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  what method to use to draw resizes.  The six methods currently supported are: &nbsp;<? local_doc_url("visualdoc.php","Zoom","AnimateTypes#options.Zoom",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Zoom3D","AnimateTypes#options.Zoom3D",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Twist","AnimateTypes#options.Twist",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Flip","AnimateTypes#options.Flip",$srcunset,$subunset) ?>
 , &nbsp;<? local_doc_url("visualdoc.php","Turn","AnimateTypes#options.Turn",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","Random","AnimateTypes#options.Random",$srcunset,$subunset) ?>
 .</P>
		<P class="dense">Note: The above mode &quot;&nbsp;<? local_doc_url("visualdoc.php","Twist","AnimateTypes#options.Twist",$srcunset,$subunset) ?>
 &quot; should not be confused with the &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  configuration option &quot;&nbsp;<? local_doc_url("visualdoc.php","AnimateTwist","Animate#options.AnimateTwist",$srcunset,$subunset) ?>
 &quot;.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","AnimateResize modes","AnimateTypes",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.AnimateTwist">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AnimateTwist","Animate#options.AnimateTwist",$srcunset,$subunset) ?>
  <I>revolutions</I></B></DT>
	<DD class="dense">
		<P class="dense">Tells &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  how many revolutions to twist the iconification frame.</P>
		<P class="dense">Note: The above configuration option &quot;&nbsp;<? local_doc_url("visualdoc.php","AnimateTwist","Animate#options.AnimateTwist",$srcunset,$subunset) ?>
 &quot; should not be confused with the &nbsp;<? local_doc_url("visualdoc.php","AnimateResize","Animate#options.AnimateResize",$srcunset,$subunset) ?>
  mode &quot;&nbsp;<? local_doc_url("visualdoc.php","Twist","AnimateTypes#options.Twist",$srcunset,$subunset) ?>
 &quot;.</P>
	</DD>


<A NAME="options.AnimateWidth">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","AnimateWidth","Animate#options.AnimateWidth",$srcunset,$subunset) ?>
  <I>pixels</I></B></DT>
	<DD class="dense">
		<P class="dense">Tells &nbsp;<? local_doc_url("visualdoc.php","Animate","Wharf#options.Animate",$srcunset,$subunset) ?>
  how wide of a line to draw for the shrinking animated &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  border. Note that width 0 produces a fast line at Width 1.</P>
	</DD>


</DL></P></LI>
