<? local_doc_main_menu("11") ?>
<img src=documentation/images/start_menu.png align=middle> <b>Start Menu</b>
<hr>
 &nbsp; <b>Start Menu</b>
 &nbsp; <? local_doc_url("visualdoc.php","Window List","window_list",$srcunset,$subunset) ?>
<hr><br>
<table>
<tr>
<td>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<? if ($sub=="") echo ("
clicking on the desktop background pops up:
<li>the <b>Start Menu</b> if you use the <b>left button</b></li>
<br>
Every menu of AfterStep is \"pinable\" - if you click on the button in the
top left the menu will stay there until you close it.
<br><br>
<i>Menus are now treated same as regular windows. They could be
configured in database file using preset Style \"ASMenu\" to have
different titlebar buttons, frame decorations, stickiness, etc.
MenuPinOn has been changed to be just another titlebar button,
with PinMenu function assigned to it.</i>"); ?>
<? if ($sub=="title") echo ("
<br><br>
<br>
<b>MenuPinOn</b>  &lt;image&gt;<br>
<br>
MenuPinOn is deprecated and AfterStep will reinterpret
it, and it will create new TitleButton using last unused
TitleButton context. It will then assign PinMenu function to
this button. This button will only be shown on titlebars
belonging to menu windows. This button behaves just like any
other TitleButton - for example you can use TitleButtonOrder to
specify where it should go. Problem is you may not know what
context AfterStep had choosen for it. The better way would be
to explicitely define TitleButton, and assign PinMenu to it in
your feel.<br>
<br>
<b>MenuHiTitleStyle</b> \"mystyle\"<br>
<br>
AfterStep now allows you to specify MyStyle to be used
for titlebar of currently hilighted menu. AS soo as menu goes out
of focus its titlebar will be rendered using MenuTitleStyle.<br>
");

 if ($sub=="main") echo ("
<br><br>
MenuItemStyle \"style_name\"
<br>
MenuItemCompositionMethod       <130-145><br>
 ");
 if ($sub=="small") echo "<br><br>MenuSubItemStyle \"mystyle\"<br>
<br>
AfterStep now includes this new feature: when you select
an item from menu - this item will be marked as recently used,
and next time menu is opened it will show all the recently used
items from its SUBMENU. For exmaple you do :<br>
<br>
Menu->Applications->rxvt<br>
<br>
Next time you open Main menu - it will display rxvt just ander
Application item with some offset.<br>
<br>
It looks much better when this subitems are shown with
different (smaller ) font. To achive that - specify MyStyle
with smaller font using MenuSubItemStyle option in your look
file.<br>
<br>
This feature could be turned off or altered by using<br>
<br>
RecentSubmenuItems<br>
option in your feel file: set it to 0 to disable feture.<br>";
 if ($sub=="highlight") echo ("
<br><br>
<br>
MenuHiTitleStyle \"mystyle\"<br>
<br>
AfterStep now allows you to specify MyStyle to be used
for titlebar of currently hilighted menu. AS soo as menu goes out
of focus its titlebar will be rendered using MenuTitleStyle.<br>
<br>
MenuHiliteCompositionMethod     <130-145>
 ");
 if ($sub=="frame") echo ("<br><br>Consult the MyFrame Section for info on framing");


?>
</font>
</td>
<td width=40>
&nbsp;
</td>
<td valign=top>
<font face="Tahoma, Arial, Verdana, Helvetica" size="-1">
<map name="start_menu">
<? local_doc_immap_url("0,0,227,24","visualdoc.php","start_menu",$srcunset,"title"); ?>
<? local_doc_immap_url("0,217,227,241","visualdoc.php","start_menu",$srcunset,"highlight"); ?>
<? local_doc_immap_url("0,145,227,168","visualdoc.php","start_menu",$srcunset,"small"); ?>
<? local_doc_immap_url("0,25,227,240","visualdoc.php","start_menu",$srcunset,"main"); ?>
<? local_doc_immap_url("0,241,240,248","visualdoc.php","start_menu",$srcunset,"frame"); ?>

</map>
<img src="documentation/images/start_menu.jpg" usemap="start_menu">
<br>
</font>
</td>
</tr>
</table>
