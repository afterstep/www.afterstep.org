&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:Arrange</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for arranging windows in a tiling or cascading order</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","Arrange_options","Arrange",$subunset) ?>
 <hr>


<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>Arrange</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
</LI>
</UL>

<A NAME="overview"><UL>
</A>
<A NAME="invocation"><LI><B>DESCRIPTION</B><br></A>
    <P class="dense">Arrange was developed to replace &nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","Cascade","Placement#options.Cascade",$srcunset,$subunset) ?>
  which were
    present in AfterStep 1.8 and stopped working with the
    introduction of AfterStep 2.0. Like &nbsp;<? local_doc_url("visualdoc.php","Tile","Placement#options.Tile",$srcunset,$subunset) ?>
  and &nbsp;<? local_doc_url("visualdoc.php","Cascade","Placement#options.Cascade",$srcunset,$subunset) ?>
  Arrange
    can be used to &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  or cascade windows subject to certain
    constraints.</P>
    <P class="dense">By default Arrange will cascade windows located on the current
    screen.</P>
</LI>


<A NAME="invocation"><LI><B>OPTIONS</B><br></A>
<P class="dense">
	<DT class="dense"><B>-a</B></DT>
	        <DD class="dense"><P class="dense">Causes  all  &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
   styles  to be affected, even ones with the
                WindowListSkip style.</P></DD>
        <DT class="dense"><B>-alldesks</B></DT>
                <DD class="dense"><P class="dense">Causes windows on all desks to be effected.</P></DD>

        <DT class="dense"><B>-desk</B></DT>
	        <DD class="dense"><P class="dense">Causes all windows on the desk to be cascaded  instead  of  the
                current screen only.</P></DD>

        <DT class="dense"><B>-H</B></DT>
	        <DD class="dense"><P class="dense">Causes windows to be tiled horizontaly. This will only
                have an effect &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  -&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  is passed.</P></DD>

        <DT class="dense"><B>-incx arg</B></DT>
                <DD class="dense"><P class="dense">Specifies a horizontal increment which is successively added to
                arranged windows.  arg is a  percentage  of  screen  width,  or
                pixel value &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  a p is suffixed.  Default is 20p.</P></DD>

        <DT class="dense"><B>-incy arg</B></DT>
                <DD class="dense"><P class="dense">Specifies  a  vertical increment which is successively added to
                arranged windows.  arg is a percentage  of  screen  height,  or
                pixel value &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  a p is suffixed.  Default is 20p.</P></DD>
            
        <DT class="dense"><B>-m</B></DT>
	        <DD class="dense"><P class="dense">Causes maximized windows to also be affected (implied by -all).</P></DD>

        <DT class="dense"><B>-mn arg</B></DT>
                <DD class="dense"><P class="dense">Tiles  up  to  arg  windows in &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  direction.  If more windows
                exist, a &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  direction row or column is created (in  effect,  a
                matrix is created).</P></DD>

        <DT class="dense"><B>-noraise</B></DT>
                <DD class="dense"><P class="dense">Inhibits &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  raising, leaving the depth ordering intact.</P></DD>

        <DT class="dense"><B>-nostretch</B></DT>
                <DD class="dense"><P class="dense">Inhibits &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  expansion when using the -resize option.   Win-
                dows  will  only shrink to fit the maximal width and height (if given).</P></DD>
	<DT class="dense"><B>-pattern arg</B></DT>
	        <DD class="dense"><P class="dense">Only arrange windows matching the supplied pattern.</P></DD>

        <DT class="dense"><B>-r</B></DT>
	        <DD class="dense"><P class="dense">Reverses the &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  sequence.</P></DD>

        <DT class="dense"><B>-resize</B></DT>
                <DD class="dense"><P class="dense">Forces all windows to  resize  to  the  constrained  width  and
                height (if given).</P></DD>

        <DT class="dense"><B>-s</B></DT>
	        <DD class="dense"><P class="dense">Causes sticky windows to also be affected (implied by -all).</P></DD>

        <DT class="dense"><B>-t</B></DT>
	        <DD class="dense"><P class="dense">Causes transient windows to also be affected (implied by -all).</P></DD>

        <DT class="dense"><B>-tile</B></DT>
	        <DD class="dense"><P class="dense">Causes windows to be tiled not cascaded.</P></DD>

        <DT class="dense"><B>-u</B></DT>
	        <DD class="dense"><P class="dense">Causes untitled windows to also be affected (implied by  -all).</P></DD>
</P>
</LI>



<A NAME="invocation"><LI><B>INVOCATION</B><br></A>
    <P class="dense">Arrange can be invoked from the autoexec file or by binding the
    action &quot;&nbsp;<? local_doc_url("visualdoc.php","Module","Functions#options.Module",$srcunset,$subunset) ?>
   Arrange  [args]&quot;  to a key-stroke in a feel file.</P>
</LI>


<A NAME="invocation"><LI><B>CONFIGURATION OPTIONS</B><br></A>
    <P class="dense">Command-line arguments passed to Arrange are  described  in  the  OPTIONS
    section.</P>
    <P class="dense">Up  to  four  numbers  can  be placed on the command line that are not
    switches.  The first pair specify an x and y offset to start the first
    &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  (default is 0, 0).  The second pair specify an absolute coordi-
    nate reference denoting the lower right bounding box for  tiling.   If
    any  number  is  suffixed  with the letter p, then it is taken to be a
    pixel value, otherwise it  is  interpreted  as  a  screen  percentage.
    Specifying  zero for any parameter is equivalent to not specifying it.</P>
</LI>



</UL>

<A NAME="examples"><UL>
    </A><P class="dense">This  invocation  will  horizontally  &nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  windows with a bounding box
    which starts at 10 by 10 percent into and down the screen and ends  at
    90 by 90 percent into and down the screen.</P>
       
    <P class="dense">Arrange 10 10 90 90 -&nbsp;<? local_doc_url("visualdoc.php","tile","asimagexml#tile",$srcunset,$subunset) ?>
  -H</P>
</UL>

<A NAME="footnotes"><UL>
    </A><P class="dense">It is probably not a good idea to delete windows while windows are
    being arranged.</P>
</UL>
