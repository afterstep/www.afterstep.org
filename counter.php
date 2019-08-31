<?php
function display_counter($base) {
		error_reporting (E_ERROR | E_PARSE);
		$counter_file = sprintf("%s.counter.txt", basename($base));
		$num = 0 ;
    if( !($fp     = fopen($counter_file,"r+")) )
		{
			$fp     = fopen($counter_file,"w");
			flock($fp,2);
		}else
		{
			flock($fp,2);
			$num    = fgets($fp,8);
			rewind($fp);
		}
	$num    += 1;
	fputs($fp,$num,8);
    flock($fp,3);
    fclose($fp);
    print $num;
}
?>

<?php
function display_moddate($base) {
	$date    = date( "F d Y H:i:s ", getlastmod());
    print "$date";
}
?>
