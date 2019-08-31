&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Module:WinCommand</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">AfterStep module for choosing and manipulating windows based on patterns</FONT></td></tr></table><br><hr>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","WinCommand_options","WinCommand",$subunset) ?>
 <hr>


<A NAME="synopsis"><UL>
<LI><b>SYNOPSIS</b><p></A>
<B>WinCommand</B> [<? local_doc_url("visualdoc.php","standard options","AfterStep",$srcunset,$subunset) ?>] 
</LI>
</UL>

<A NAME="overview"><UL>
</A>
<A NAME="invocation"><LI><B>DESCRIPTION</B><br></A>
<P class="dense">    
WinCommand is a command line tool which allows you to select windows
based on their name and to then manipulate them in various ways.
Actions currently supported are: &quot;center&quot;, &quot;center jump&quot;, &quot;&nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
 &quot;,
&quot;jump&quot;, &quot;kill&quot;, &quot;move&quot;, &quot;resize&quot; and &quot;sendtodesk&quot;.
</P>
</LI>


<A NAME="defaults"><LI><B>DEFAULTS</B><br></A>
<P class="dense">
The default pattern is &quot;&quot;, meaning all windows will be selected.
</P><P class="dense">
All other default-values depend on the action you would like
WinCommand to take. If more than one action is specified,
default-values are &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  depending on the last action specified.
</P>
</LI>


<A NAME="actions"><LI><B>ACTIONS</B><br></A>

<P class="dense"><DT class="dense"><B>
center
</B></DT>
<DD class="dense"><P class="dense">

Place matching windows into the center of the screen.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
center jump:
</B></DT>
<DD class="dense"><P class="dense">

Places first &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  that matches into the center of the screen and
jumps to it.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
&nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
 :
</B></DT>
<DD class="dense"><P class="dense">

Iconifies matching windows.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
jump:
</B></DT>
<DD class="dense"><P class="dense">

Jumps to the first &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  which matches.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
kill:
</B></DT>
<DD class="dense"><P class="dense">

Kills all matching windows.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
move:
</B></DT>
<DD class="dense"><P class="dense">

Moves all matching windows to x/y. x and y are specified using the
-x and -y flags.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
resize:
</B></DT>
<DD class="dense"><P class="dense">

&nbsp;<? local_doc_url("visualdoc.php","Resize","Functions#options.Resize",$srcunset,$subunset) ?>
  all matching windows. The two paramters width and height are
specified using the -width and -height flags.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
send_to_desk:
</B></DT>
<DD class="dense"><P class="dense">

&nbsp;<? local_doc_url("visualdoc.php","Send","Functions#options.Send_WindowList",$srcunset,$subunset) ?>
  all matching windows to desk specified with the -new_desk flag.

</P></DD>
</P>

</LI>



<A NAME="options"><LI><B>OPTIONS</B><br></A>

<P class="dense"><DT class="dense"><B>
-all
</B></DT>
<DD class="dense"><P class="dense">

Operate on all windows which match the given pattern. This is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  by
default unless the action is either &quot;jump&quot; or &quot;center jump&quot;.

</P></DD>
</P>

 <P class="dense"><DT class="dense"><B>
-alldesks
</B></DT>
<DD class="dense"><P class="dense">

Windows on all desks will be taken into account. This is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  by
default &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  action is either &quot;jump&quot; or &quot;center jump&quot;.

</P></DD>
</P>

 <P class="dense"><DT class="dense"><B>
-desk
</B></DT>
<DD class="dense"><P class="dense">

Windows on the whole desk will be taken into account.

</P></DD>
</P>

<P class="dense"><DT class="dense"><B>
-x/-y
</B></DT>
<DD class="dense"><P class="dense">

These are required when issuing the move-command.

</P></DD>

</P>
<P class="dense"><DT class="dense"><B>
-width/-height
</B></DT>
<DD class="dense"><P class="dense">

These are required whenever you want to resize windows.

</P></DD>
</P>

</LI>

</UL>

<A NAME="examples"><UL>
<B>Examples</B><br></A>
<P class="dense">    
WinCommand -pattern term &nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
 
</P>

<P class="dense">
This command will &nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
  all terminals. Since the specified pattern
is a regular expression, something like this also works:
</P>
<P class="dense">
WinCommand -pattern &quot;(term)|(moz)&quot; &nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
 
</P>
<P class="dense">
This will &nbsp;<? local_doc_url("visualdoc.php","iconify","AudioEvents#options.iconify",$srcunset,$subunset) ?>
  all terminals and mozilla-browser windows.
</P>
<P class="dense">
WinCommand -pattern xmm jump
</P>
<P class="dense">
will jump to your xmms. In this situation, it's far more advisable to
use GWCommand though.
</P>
</UL>

<A NAME="footnotes"><UL>
    </A><P class="dense">It is probably not a good idea to delete windows while windows are
    being arranged.</P>
</UL>
