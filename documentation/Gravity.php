&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Topic index","index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Glossary","Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><b>Database Gravity type specification</b><br><br>
&nbsp;<b>Overview</b>
&nbsp;<? local_doc_url("visualdoc.php","Configuration","Gravity_options","Gravity",$subunset) ?>
 <hr>

<A NAME="related"><UL>
 </A><? local_doc_url("visualdoc.php","Database","ASDatabase",$srcunset,$subunset) ?>
 Gravity
 <? local_doc_url("visualdoc.php","style definition","ASDatabaseEntry",$srcunset,$subunset) ?>
</UL>
<hr>


<A NAME="overview"><UL>
</A>
<A NAME="description"><LI><B>DESCRIPTION</B><br></A>
<P class="dense">When client &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  is mapped on screen - &nbsp;<? local_doc_url("visualdoc.php","Window","MyFrame#overview",$srcunset,$subunset) ?>
  Manager draws some frame decorations around it, such as Titlebar, 
resize handles, etc. As such decorations take additional space, it is nesseccary to specify &nbsp;<? local_doc_url("visualdoc.php","if","asimagexml#if",$srcunset,$subunset) ?>
  resulting larger &nbsp;<? local_doc_url("visualdoc.php","window","AudioEvents#options.window_names",$srcunset,$subunset) ?>
  should be 
moved on screen in any particular direction in order to compensate for discrepancy in size. This is determined by Gravity hint. 
</P><P class="dense">
Usually Gravity is &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  by client itself, depending on geometry specified by the user. 
For example geometry -10+100 will &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  gravity to &nbsp;<? local_doc_url("visualdoc.php","NorthEast","MyFrame_options#options.NorthEast",$srcunset,$subunset) ?>
 , while +10+100 will &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  gravity to &nbsp;<? local_doc_url("visualdoc.php","NorthWest","MyFrame_options#options.NorthWest",$srcunset,$subunset) ?>
 .
Sometimes this gravity setting requested by application is incorrect though, due to longstanding tradition of misinterpretation of its meaning.
In this cases it may be desired to override gravity. AfterStep users can accomplish that using database file, and definig &nbsp;<? local_doc_url("visualdoc.php","new","AudioEvents#options.new_background",$srcunset,$subunset) ?>
  &nbsp;<? local_doc_url("visualdoc.php","Style","ASDatabase#options.Style",$srcunset,$subunset) ?>
 
for specific application with Gravity attribute &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
 . For example it is recommended to &nbsp;<? local_doc_url("visualdoc.php","set","asimagexml#set",$srcunset,$subunset) ?>
  gravity of popular image viewver XV to be &nbsp;<? local_doc_url("visualdoc.php","Static","Gravity_options#options.Static",$srcunset,$subunset) ?>
 , 
as it tends to move self assuming that it knows everything.
</P><P class="dense">
Below are the list of possible gravity values with explanation of its meaning.
</P>
</LI>
</UL>


