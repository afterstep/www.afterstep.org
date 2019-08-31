<?
    include "common_doc.php";
    pagestart("Visual Documentation");
    active_section_start("documentation_title_a.png");


if ( isset($_GET['show']) )
    {
    $show=$_GET['show'];
    if ( isset($_GET['src']) ) {
	$src = $_GET['src'];
	$show = $src . "/" . $show;
    }
    if ( isset($_GET['sub']) )$sub=$_GET['sub'];
    $filename = "data/php/".$show.".php";
    if (strstr ($show,"../") == false)
    {

	if( file_exists($filename) )
	{
		include ($filename);
	}
    }
    else echo "page ",$show." not found";
    }
else
    include "data/php/index.php";


echo "<br><hr><center><FONT size=\"-2\"><b>AfterStep data file catalogue &nbsp; &nbsp; September 2005 &nbsp; &nbsp; ( 0% complete )</b></font></center>";
?>

<?
active_section_end();
?>

<?
pageend();

?>
