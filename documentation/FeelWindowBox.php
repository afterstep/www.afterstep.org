&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Feel WindowBox definition</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">defines placement policy for certain type of windows, based on desk, window attributes, window size, etc. Usefull for xinerama configurations, where windows should not be placed in between screens.</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
<hr>

<hr>


<A NAME="overview"><UL>

</A><P class="dense">This is a whole &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  thing to allow better &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  placement policy :</P>

<PRE>&nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
    &quot;some_name&quot;
    &nbsp;<? local_doc_url("visualdoc.php","Area","FeelWindowBox#options.Area",$srcunset,$subunset) ?>
    WxH+X+Y
    &nbsp;<? local_doc_url("visualdoc.php","Virtual","FeelWindowBox#options.Virtual",$srcunset,$subunset) ?>
 
    &nbsp;<? local_doc_url("visualdoc.php","MinWidth","FeelWindowBox#options.MinWidth",$srcunset,$subunset) ?>
         width
    &nbsp;<? local_doc_url("visualdoc.php","MinHeight","FeelWindowBox#options.MinHeight",$srcunset,$subunset) ?>
        height
    &nbsp;<? local_doc_url("visualdoc.php","MaxWidth","FeelWindowBox#options.MaxWidth",$srcunset,$subunset) ?>
         width
    &nbsp;<? local_doc_url("visualdoc.php","MaxHeight","FeelWindowBox#options.MaxHeight",$srcunset,$subunset) ?>
        height
    &nbsp;<? local_doc_url("visualdoc.php","FirstTry","FeelWindowBox#options.FirstTry",$srcunset,$subunset) ?>
         &nbsp;<? local_doc_url("visualdoc.php","SmartPlacement","Feel#options.SmartPlacement",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","RandomPlacement","Feel#options.RandomPlacement",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
 
    &nbsp;<? local_doc_url("visualdoc.php","ThenTry","FeelWindowBox#options.ThenTry",$srcunset,$subunset) ?>
          &nbsp;<? local_doc_url("visualdoc.php","RandomPlacement","Feel#options.RandomPlacement",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","Cascade","Placement#options.Cascade",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","Manual","Placement#options.Manual",$srcunset,$subunset) ?>
 
    &nbsp;<? local_doc_url("visualdoc.php","VerticalPriority","FeelWindowBox#options.VerticalPriority",$srcunset,$subunset) ?>
 
    &nbsp;<? local_doc_url("visualdoc.php","ReverseOrder","FeelWindowBox#options.ReverseOrder",$srcunset,$subunset) ?>
 
    &nbsp;<? local_doc_url("visualdoc.php","Desk","Functions#options.Desk",$srcunset,$subunset) ?>
         desk
    &nbsp;<? local_doc_url("visualdoc.php","MinLayer","FeelWindowBox#options.MinLayer",$srcunset,$subunset) ?>
     min_layer
    &nbsp;<? local_doc_url("visualdoc.php","MaxLayer","FeelWindowBox#options.MaxLayer",$srcunset,$subunset) ?>
     max_layer
~&nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
   </PRE>

<P class="dense">Note that old &nbsp;<? local_doc_url("visualdoc.php","SmartPlacement","Feel#options.SmartPlacement",$srcunset,$subunset) ?>
 /&nbsp;<? local_doc_url("visualdoc.php","RandomPlacement","Feel#options.RandomPlacement",$srcunset,$subunset) ?>
  has been coopted to be
used for Default windowbox.</P>

</UL>



<LI><A NAME="options"></A><B>CONFIGURATION OPTIONS :</B><P>
<DL>

<A NAME="options.Area">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Area","FeelWindowBox#options.Area",$srcunset,$subunset) ?>
  <I>WxH+X+Y</I></B></DT>
	<DD class="dense">
		<P class="dense">This defines the confining region of a &nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
 .</P>
	</DD>


<A NAME="options.Desk">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","Desk","Functions#options.Desk",$srcunset,$subunset) ?>
  <I>desk</I></B></DT>
	<DD class="dense">
		<P class="dense">Limits the effects of this &nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  to the specified desk.</P>
	</DD>


<A NAME="options.FirstTry">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","FirstTry","FeelWindowBox#options.FirstTry",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","SmartPlacement","Feel#options.SmartPlacement",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","RandomPlacement","Feel#options.RandomPlacement",$srcunset,$subunset) ?>
 |Tile</I></B></DT>
	<DD class="dense">
		<P class="dense">strategy to use while placing &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
 . The &nbsp;<? local_doc_url("visualdoc.php","FirstTry","FeelWindowBox#options.FirstTry",$srcunset,$subunset) ?>
  strategy
        will attempt to place &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  in empty space only.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Window Placement types","Placement",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.MaxHeight">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxHeight","FeelWindowBox#options.MaxHeight",$srcunset,$subunset) ?>
  <I>height</I></B></DT>
	<DD class="dense">
		<P class="dense">places restrains on what size &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  could be placed in this area.</P>
	</DD>


<A NAME="options.MaxLayer">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxLayer","FeelWindowBox#options.MaxLayer",$srcunset,$subunset) ?>
  <I>max_layer</I></B></DT>
	<DD class="dense">
		<P class="dense">Limits effects of the &nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  to windows with
        layer value that falls in range.</P>
	</DD>


<A NAME="options.MaxWidth">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MaxWidth","FeelWindowBox#options.MaxWidth",$srcunset,$subunset) ?>
  <I>width</I></B></DT>
	<DD class="dense">
		<P class="dense">Places restrains on what size &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  could be placed in this area.</P>
	</DD>


<A NAME="options.MinHeight">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MinHeight","FeelWindowBox#options.MinHeight",$srcunset,$subunset) ?>
  <I>height</I></B></DT>
	<DD class="dense">
		<P class="dense">places restrains on what size &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  could be placed in this area.</P>
	</DD>


<A NAME="options.MinLayer">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MinLayer","FeelWindowBox#options.MinLayer",$srcunset,$subunset) ?>
  <I>min_layer</I></B></DT>
	<DD class="dense">
		<P class="dense">limits the effects of the &nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  to windows with
        layer value that falls in range.</P>
	</DD>


<A NAME="options.MinWidth">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","MinWidth","FeelWindowBox#options.MinWidth",$srcunset,$subunset) ?>
  <I>width</I></B></DT>
	<DD class="dense">
		<P class="dense">places restrains on what size &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  could be placed in this area.</P>
	</DD>


<A NAME="options.ReverseOrder">
	</A><DT class="dense"><B>ReverseOrder</B></DT>
	<DD class="dense">
		<P class="dense">This will reverse order in which &nbsp;<? local_doc_url("visualdoc.php","Cascade","Placement#options.Cascade",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
  strategies are applied, making it &nbsp;<? local_doc_url("visualdoc.php","Right","Align#options.Right",$srcunset,$subunset) ?>
 -to-left, bottom-to-top.</P>
	</DD>


<A NAME="options.ReverseOrderHorizontal">
	</A><DT class="dense"><B>ReverseOrderHorizontal</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.ReverseOrderVertical">
	</A><DT class="dense"><B>ReverseOrderVertical</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.ThenTry">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","ThenTry","FeelWindowBox#options.ThenTry",$srcunset,$subunset) ?>
  <I>&nbsp;<? local_doc_url("visualdoc.php","RandomPlacement","Feel#options.RandomPlacement",$srcunset,$subunset) ?>
 |&nbsp;<? local_doc_url("visualdoc.php","Cascade","Placement#options.Cascade",$srcunset,$subunset) ?>
 |Manual</I></B></DT>
	<DD class="dense">
		<P class="dense">backup strategy to use when there is no suitable empty
        space.</P>
		<P class="dense">See Also: <? local_doc_url("visualdoc.php","Window Placement types","Placement",$srcunset,$subunset) ?> for further details.</P>
	</DD>


<A NAME="options.VerticalPriority">
	</A><DT class="dense"><B>VerticalPriority</B></DT>
	<DD class="dense">
		<P class="dense">Cascading and Tiling will be done in Vertical direction first.</P>
	</DD>


<A NAME="options.Virtual">
	</A><DT class="dense"><B>Virtual</B></DT>
	<DD class="dense">
		<P class="dense">Defines that area is in virtual coordinates.</P>
	</DD>


<A NAME="options.WindowBox">
	</A><DT class="dense"><B>&nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  <I>&quot;windowbox_name&quot;</I></B></DT>
	<DD class="dense">
		<P class="dense">Starts a &nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  definition. ~&nbsp;<? local_doc_url("visualdoc.php","WindowBox","FeelWindowBox#options.WindowBox",$srcunset,$subunset) ?>
  ends it.</P>
	</DD>


<A NAME="options.XSpacing">
	</A><DT class="dense"><B>XSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


<A NAME="options.YSpacing">
	</A><DT class="dense"><B>YSpacing</B></DT>
	<DD class="dense">
		<P class="dense">FIXME: &nbsp;<? local_doc_url("visualdoc.php","add","AudioEvents#options.add_window",$srcunset,$subunset) ?>
  proper description here.</P>
	</DD>


</DL></P></LI>
