&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:WinTabs</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for arranging windows using tabs</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>


<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>WinTabs</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
</LI>
</UL>




<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Align">
	</A><DT class="dense"><B>Align</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Alignment flags","Align",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.AllDesks">
	</A><DT class="dense"><B>AllDesks</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.BalloonBorderHilite">
	</A><DT class="dense"><B>BalloonBorderHilite</B></DT>
	<DD class="dense">
		<P class="dense">Defines the &nbsp;<? local_doc_url("visualdoc.php","bevel","asimagexml#bevel",$srcunset,$subunset) ?>
  to be drawn around balloons - replaces the
		&nbsp;<? local_doc_url("visualdoc.php","BorderWidth","ASDatabaseEntry#options.BorderWidth",$srcunset,$subunset) ?>
  setting.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.BalloonCloseDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonCloseDelay","Pager_options#options.BalloonCloseDelay",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the period in milliseconds to delay the disappearance of the balloon when leaving  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  with the mouse.</P>
	</DD>


<A NAME="options.BalloonDelay">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonDelay","Pager_options#options.BalloonDelay",$srcunset,$subunset) ?>
  <I>number</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the period in milliseconds to delay the appearance of the balloon.</P>
	</DD>


<A NAME="options.BalloonStyle">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonStyle","Pager_options#options.BalloonStyle",$srcunset,$subunset) ?>
  <I>MyStyle</I></B></DT>
	<DD class="dense">
		<P class="dense">&nbsp;<? local_doc_url("visualdoc.php","MyStyle","MyStyle_options#options.MyStyle",$srcunset,$subunset) ?>
  to be used to draw balloon. Note that balloons could be
		shaped (BackPixmap 125 and 126).</P>
	</DD>


<A NAME="options.BalloonTextPaddingX">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonTextPaddingX","Pager_options#options.BalloonTextPaddingX",$srcunset,$subunset) ?>
  size</B></DT>
	<DD class="dense">
		<P class="dense">width of the border around the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  in balloons.</P>
	</DD>


<A NAME="options.BalloonTextPaddingY">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonTextPaddingY","Pager_options#options.BalloonTextPaddingY",$srcunset,$subunset) ?>
  size</B></DT>
	<DD class="dense">
		<P class="dense">height of the border around the &nbsp;<? local_doc_url("visualdoc.php","text","asimagexml#text",$srcunset,$subunset) ?>
  in balloons.</P>
	</DD>


<A NAME="options.BalloonXOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonXOffset","Pager_options#options.BalloonXOffset",$srcunset,$subunset) ?>
  <I>offset</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the horizontal offset (in pixels) to use when displaying balloons.</P>
	</DD>


<A NAME="options.BalloonYOffset">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","BalloonYOffset","Pager_options#options.BalloonYOffset",$srcunset,$subunset) ?>
  <I>offset</I></B></DT>
	<DD class="dense">
		<P class="dense">Specifies the vertical offset (in pixels) to use when
		displaying balloons.</P>
	</DD>


<A NAME="options.Balloons">
	</A><DT class="dense"><B>Balloons</B></DT>
	<DD class="dense">
		<P class="dense">Turns  on  the balloon feature. A &quot;balloon&quot; is displayed
		showing the name of the button the pointer is resting on in the
		WinTabs.</P>
	</DD>


<A NAME="options.Bevel">
	</A><DT class="dense"><B>Bevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.CompositionMethod">
	</A><DT class="dense"><B>CompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.ExcludePattern">
	</A><DT class="dense"><B>ExcludePattern</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.FBevel">
	</A><DT class="dense"><B>FBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.FCompositionMethod">
	</A><DT class="dense"><B>FCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.FocusedBevel">
	</A><DT class="dense"><B>FocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.FocusedStyle">
	</A><DT class="dense"><B>FocusedStyle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Geometry">
	</A><DT class="dense"><B>Geometry</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.HSpacing">
	</A><DT class="dense"><B>HSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.IconTitle">
	</A><DT class="dense"><B>IconTitle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MaxColumns">
	</A><DT class="dense"><B>MaxColumns</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MaxRows">
	</A><DT class="dense"><B>MaxRows</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MaxTabWidth">
	</A><DT class="dense"><B>MaxTabWidth</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MinTabWidth">
	</A><DT class="dense"><B>MinTabWidth</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.MyStyle">
	</A><DT class="dense"><B>MyStyle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","MyStyle definition","MyStyle",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.NoBalloons">
	</A><DT class="dense"><B>NoBalloons</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Pattern">
	</A><DT class="dense"><B>Pattern</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.SBevel">
	</A><DT class="dense"><B>SBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.SCompositionMethod">
	</A><DT class="dense"><B>SCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.SkipTransients">
	</A><DT class="dense"><B>SkipTransients</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Spacing">
	</A><DT class="dense"><B>Spacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.StickyBevel">
	</A><DT class="dense"><B>StickyBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.StickyStyle">
	</A><DT class="dense"><B>StickyStyle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.Title">
	</A><DT class="dense"><B>Title</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.UBevel">
	</A><DT class="dense"><B>UBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.UCompositionMethod">
	</A><DT class="dense"><B>UCompositionMethod</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.UnfocusedBevel">
	</A><DT class="dense"><B>UnfocusedBevel</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Bevel flags","Bevel",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.UnfocusedStyle">
	</A><DT class="dense"><B>UnfocusedStyle</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.UseSkipList">
	</A><DT class="dense"><B>UseSkipList</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.VSpacing">
	</A><DT class="dense"><B>VSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


</DL></P></LI>
