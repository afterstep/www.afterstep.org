&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Audio</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for playing sounds when windowing event occurs</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<A NAME="related"><UL>
 Module:Audio
 </A><? local_doc_url("visualdoc.php","event configuration","AudioEvents",$srcunset,$subunset) ?>
</UL>
<hr>

<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>Audio</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
</LI>
</UL>




<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Delay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Delay","Audio#options.Delay",$srcunset,$subunset) ?>
  <I>seconds</I></B></DT>
	<DD class="dense">
	<P class="dense">Specifies that sound events will only be played &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  they occur at
        least  so  many  seconds after the previous event.  &nbsp;<? local_doc_url("visualdoc.php","Sound","Wharf#options.Sound",$srcunset,$subunset) ?>
  events
        that occur during the delay period are ignored.  This option  is
        useful  &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
   you  don't  want  several sounds playing at the same
        time.  The default delay is 0 which disables the audio delay.</P>
	</DD>


<A NAME="options.PlayCmd">
	</A><DT class="dense"><B>PlayCmd</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.RplayHost">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","RplayHost","Audio#options.RplayHost",$srcunset,$subunset) ?>
  <I>&quot;hostname&quot;</I></B></DT>
	<DD class="dense">
	<P class="dense">Specifies what host the sounds will play on.  The  hostname  can
        also  be  an  environment  variable  such  as $HOSTDISPLAY. This
        option is only valid with builtin rplay support. If this is left
        out  then  Audio  will attempt to connect to rplay daemon on the
        same host that is running X first, then to localhost.</P>
	</DD>


<A NAME="options.RplayPriority">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","RplayPriority","Audio#options.RplayPriority",$srcunset,$subunset) ?>
  <I>priority</I></B></DT>
	<DD class="dense">
	<P class="dense">Specifies what priority will be assigned to the sounds when they
        are  played.   This option is only valid with builtin rplay sup-
        port.</P>
	</DD>


<A NAME="options.RplayVolume">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","RplayVolume","Audio#options.RplayVolume",$srcunset,$subunset) ?>
  <I>level</I></B></DT>
	<DD class="dense">
	<P class="dense">Specifies what volume level will be assigned to the sounds  when
        they  are  played.  This option is only valid with builtin rplay
        support.</P>
	</DD>


</DL></P></LI>
