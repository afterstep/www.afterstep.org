<? local_doc_main_menu("11") ?>

<table>
<tr>
<td>
 <FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">
 <img src="documentation/images/pager.png" align=middle> <b>Pager introduction</b>
 </FONT>
</td>
<td width=50%>
 <FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">
 The Pager module shows a miniature view of the Afterstep desktops.
 This is a useful reminder of where your active windows are.
</font>
</td>
</tr>
</table>

<hr>
<FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">
 &nbsp; <b>Introduction</b>
 &nbsp; <A href="visualdoc.php?show=pager_config">Configuration</A>
 &nbsp; <A href="visualdoc.php?show=debugging&src=pager">Debugging</A>
 <hr><br>

<map name="pager">
<? local_doc_immap_url("0,0,80,20","visualdoc.php","pager",$srcunset,"label") ?>
<? local_doc_immap_url("0,22,37,51","visualdoc.php","pager",$srcunset,"windowstate") ?>
<? local_doc_immap_url("40,21,80,54","visualdoc.php","pager",$srcunset,"selected") ?>
<? local_doc_immap_url("0,86,80,105","visualdoc.php","pager",$srcunset,"label") ?>
<? local_doc_immap_url("42,108,79,134","visualdoc.php","pager",$srcunset,"windowstate") ?>
<? local_doc_immap_url("0,171,80,190","visualdoc.php","pager",$srcunset,"label") ?>
<? local_doc_immap_url("0,256,80,275","visualdoc.php","pager",$srcunset,"label") ?>
<? local_doc_immap_url("0,0,81,340","visualdoc.php","pager",$srcunset,"bg") ?>
</map>

<table width=100%>
<tr>
<td valign=top>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
Windows in the pager are decorated accordingly to MyStyle definitions<br>
 If you never defined those MyStyles, Pager will default to same styles as used for actual windows.<br>
 The Pager can be used to change the viewport in the current desktop or to change desktops (left mouse button), or to move windows around (middle mouse button).
 <br>
</font>
</td>
<td rowspan=2>
 <img src="documentation/images/pager.jpg" usemap="#pager"><br>
</td>
</tr>
<tr>
<td>
 <font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
 <?
    if ($sub=="actual") echo ("(-look file-)<br> *PagerUWindowStyle YOURSTYLE<br> *PagerFWindowStyle YOURSTYLE<br> *PagerSWindowStyle YOURSTYLE");
    if ($sub=="label") echo ("AfterStep comes by default with 4 Virtual DeskTops, named
     \"Work\", \"WWW\", \"Mail\" and \"Games\".\n To change the names, change the
     following lines in your pager file:<br><br>*PagerLabel 0 Work<br>*PagerLabel 1 WWW<br>
     *PagerLabel 2 Mail<br>*PagerLabel 3 Games<br><br>To change placement/behaviour of the Labels of the Pager, use one or all of the follwing:<br> PagerDecoration LabelBelowDesk, VerticalLabel, NoDeskLabel, HideInactiveLabels");
    if ($sub=="") echo ("Each Desktop (named Work, WWW, Mail and Games) can have
    multiple Views:<br>They are defined in the base file along with the scaling factor to use:<br> *DeskTopSize Columns<b>x</b>Rows<br> *DeskTopScale number");
    if ($sub=="windowstate") echo ("Windows in the pager are decorated accordingly to MyStyle definitions:<br><br>
    \"*PagerUWindowStyle\" - for unfocused windows,<br>
    \"*PagerFWindowStyle\" - for focused windows and<br>
    \"*PagerSWindowStyle\" - for sticky windows.");
    if ($sub=="bg") echo ("By default Pager background will be a scaled version of your desktop background.<br>");
    if ($sub=="selected") echo ("To change look of selected page use any of the paramaters listed:<br> PagerDecorations NoPageSeparator, NoSelection, SelectionColor, GridColor, DeskBorderWidth, DeskBorderColor");

 ?> 	 
 </font>
</td>
</tr>
</table>
			     