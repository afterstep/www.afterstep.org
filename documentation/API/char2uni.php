&nbsp;<? local_doc_url("documentation.php","Preface","",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Introduction","visualselect",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Topic index","API/index",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","API Glossary","API/Glossary",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","F.A.Q.","faq",$srcunset,$subunset) ?>
 &nbsp;<? local_doc_url("visualdoc.php","Copyright","copyright",$srcunset,$subunset) ?>
 <hr>
<br><table width=100%><tr><td width=50%><b><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">Unicode</FONT></b></td><td width=50%><FONT face="Tahoma, Arial, Verdana, Helvetica" size="-1">handling on Unicode, UTF-8 and localized 8 bit encodings</FONT></td></tr></table><br><hr>
<hr>

<A NAME="libAfterImage/CHAR_SIZE"><UL><B>libAfterImage/CHAR_SIZE</B><br></A><LI><B>NAME</B><br>
<A NAME="CHAR_SIZE"></A><B>CHAR_SIZE</B><P class="dense">- Convinient macro so we can transparently determine the 
number of bytes that character spans. It assumes UTF-8 encoding when 
I18N is enabled.
</P></LI><LI><B>SOURCE</B><br><P class="dense"><div class="container"><PRE>
/* size of the UTF-8 encoded character is based on &nbsp;<? local_doc_url("visualdoc.php","value","blender#value_scanlines()",$srcunset,$subunset) ?>
  of 
 * the first byte : */
#define UTF8_CHAR_SIZE(c)   ((((c)&amp;0xC0)==0xC0)? \
                             (((c)&amp;0x20)? \
                             (((c)&amp;0x10)? \
                             (((c)&amp;0x08)? \
                             (((c)&amp;0x04)?6:5):4):3):2):1)
#ifdef WIN32
#define UNICODE_CHAR_SIZE(c)    sizeof(UNICODE_CHAR)
#endif
#define CHAR_SIZE(c)            1
</PRE></div><br></p></LI></UL>
