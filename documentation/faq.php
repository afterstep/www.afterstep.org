<? local_doc_main_menu("4"); ?>
<? 
if ($src=="1.8") 
{
echo "<img src=documentation/images/faq.png align=middle><b>AfterStep FAQ</b><br><hr>";
    local_doc_url("visualdoc.php","2.0 FAQ","faq",$srcunset,$subunset);
    echo" &nbsp;&nbsp;"; 
    echo" &nbsp; <b>(old) 1.8 FAQ</b> &nbsp; ";
    echo "<hr><br>
<b>Frequently Asked Questions for AfterStep 1.8.11</b><br>
FAQs for previous stable version of AfterStep:<br>

The html version is installed [typically] into /usr/local/share/afterstep/doc/
and can be read by using the afterstepdoc script. This script is installed by
AfterStep and is bound to both the top button on the Wharf, and the 'AfterStep
Documentation' item in the menu. It opens Netscape, or lynx if the netscape
binary is not found, and displays the FAQ currently installed on your system.
<br><br>

You can also obtain The Official AfterStep 1.8.11 FAQ in the following forms:
<li><A href=\"ftp://ftp.afterstep.org/docs/afterstep-faq.sgml.gz\">sgml.gz</a>;</li>
<li><A href=\"ftp://ftp.afterstep.org/docs/afterstep-faq.html.tar.gz\">html.tar.gz</a>;</li>
<li><A href=\"ftp://ftp.afterstep.org/docs/afterstep-faq.html.tar.bz2\">html.tar.bz2</a>;</li>
<li><A href=\"ftp://ftp.afterstep.org/docs/afterstep-faq.txt\">raw text</a>.</li>
";}
else {
    include "afterstep_faq.php";
    echo "<br>"; 
}
?>
<br>
