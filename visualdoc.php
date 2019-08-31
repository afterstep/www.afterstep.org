<?
    include "common_doc.php";
    pagestart("Visual Documentation");
    active_section_start("documentation_title_a.png");


if ( isset($_GET['show']) )
    {
    $show=$_GET['show'];
    if ( isset($_GET['src']) ) $src=$_GET['src'];
    if ( isset($_GET['sub']) )$sub=$_GET['sub'];
    $filename = "documentation/".$show.".php";
    if (strstr ($show,"../") == false)
    {

	if( file_exists($filename) )
	{
		include ($filename);
	}else
	{
		$filename = "documentation/API/".$show.".php";
		if( file_exists($filename) )
			include ($filename);
		else
		{
	       		echo "page ".$show." not found";
		}
	}
    }
    else echo "page ",$show." not found";
    }
else
    include "documentation/visualselect.php";


if ($show=="data/index") 
	echo "<a href='data/index.html'>Please continue here.</a><br>";

echo "<br><hr><center><FONT size=\"-2\"><b>AfterStep Documentation &nbsp; - &nbsp; October 2005 &nbsp; &nbsp; ( 80% complete )</b></font></center>";
?>

<?
active_section_end();
?>

<?
pageend();

?>
