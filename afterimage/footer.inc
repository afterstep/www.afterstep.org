<?php
function display_counter($base) {
		error_reporting (E_ERROR | E_PARSE);
		$counter_file = sprintf("counters/%s.counter.txt", basename($base));
		$num = 0 ;
    if( !($fp     = fopen($counter_file,"r+")) )
		{
			$fp     = fopen($counter_file,"w");
			flock($fp,2);
		}else
		{
			flock($fp,2);
			$num    = fgets($fp,6);
			rewind($fp);
		}
	$num    += 1;
	fputs($fp,$num,6);
    flock($fp,3);
    fclose($fp);
		$digit = ($num/100000)%10 ;
		if( $digit > 0 )
    	print "<IMG src=\"images/counter_$digit\">";
		$digit = ($num/10000)%10 ;
    print "<IMG src=\"images/counter_$digit\">";
		$digit = ($num/1000)%10 ;
    print "<IMG src=\"images/counter_$digit\">";
		$digit = ($num/100)%10 ;
    print "<IMG src=\"images/counter_$digit\">";
		$digit = ($num/10)%10 ;
    print "<IMG src=\"images/counter_$digit\">";
		$digit = $num%10 ;
    print "<IMG src=\"images/counter_$digit\">";
}
?>

<?php
function display_moddate($base) {
	$date    = date( "F d Y H:i:s ", getlastmod());
    print "$date";
}
?>

			</TABLE>
			<br>
			</TD>
</TR>
<TR>
    <TD valign="top" align="right"><IMG width=366 src="images/bottom_bar" usemap="#bottombar_map" vspace=3 border="0"><IMG SRC="images/menu_selection"></TD>
		<TD valign="top" align="left">
	  <TABLE cellpadding=4 border=1 frame="vsides" bordercolor="#003300" background="images/text_back">
			<TR><TD valign=top width=160 align="left">
				&nbsp;&nbsp;<font size=2>Hosted by <a href="http://www.vaevictus.net/">Vaevictus</a></font>
			</TD></TR></TABLE></TD>
</TR>
<TR><td> <br> <br></td><td> </td></TR>
</TABLE>
<?php include("immaps.inc") ?>
</BODY>
</HTML>

