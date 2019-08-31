<? include "common_doc.php";

pagestart("AfterStep documentation and support");
?>
<?
active_section_start("documentation_title_a.png");
?>
<? local_doc_main_menu("-1"); ?>
"They always say time changes things, but you actually have to change them yourself."<br>
<center>Andy Warhol (1928 - 1987)</center>
<br>
AfterStep comes with a variety of resources and helpfiles to get your
AfterStep up and running and configured to your liking. Outside of these
'static' resources, help can also be found on the AfterStep mailinglists or
our IRC channel.
<br>
<br>
The Documentation for the actual version of AfterStep is still missing some parts, but should be usuable for most users.<br>
<br>
For those who feel lost, here's what the <b>Visual documentation</b> has to offer:<br>
<ul>
<li>The <b><? local_url("visualdoc.php?show=visualselect","Introduction") ?></b> is meant to give a quick overview of what AfterStep has to offer, along with links to more in-depth information.</li>
<li><b><? local_url("visualdoc.php?show=index","Topic Index") ?></b> is where you find a complete overview in a more traditional way.</li>
<li>The <b><? local_url("visualdoc.php?show=Glossary","Glossary") ?></b> should help you find options quick, once you're a true master of AfterStep.</li>
<li>Of course we are working on a <b><? local_url("visualdoc.php?show=faq","F.A.Q.") ?></b>. Since the AfterStep 2.x.x series is young it is still in its infancy.</li>
</ul>
<br>
Other things of possible interest:
<ul>
<li><b>New configuration options in AfterStep 2.0 ?</b><br>
Please refer to the
<A href="https://raw.githubusercontent.com/afterstep/afterstep/master/NEW">
NEW</A> file in AfterStep distribution.</li>
<li>A detailed list of the bug fixes and changes to AfterStep can be found in <a href="https://raw.githubusercontent.com/afterstep/afterstep/master/ChangeLog">Changelog</a>.<br>
Short list of changes can be found
<? local_url("as20.php","here") ?>.
</li>
<li><b><? local_doc_url("visualdoc.php","Frequently Asked Questions for AfterStep 1.8.11","faq","1.8",$subunset); ?></b>
<br>
This is for the moment the only 1.8 specific information on these pages.
</li>
</ul>
<br>
<center>If you have suggestions or corrections, feel free to share your opinion<br>via our <? local_url("mail.php#users","as-users") ?> mailinglist.</center>
<br>
Nice Steppin' - Your AfterStep Team<br>
<br>


<?
active_section_end();
?>

<?
pageend();

?>
