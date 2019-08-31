<? 
include "common.php";
pagestart("Latest AfterStep news");
active_section_start("news_title_a.png");

$year = 2008; /* change top year here */

if ( isset($_GET['show']) ) $show=$_GET['show'];
else $show=$year;

$news = array("Older News");
$news = array_merge($news,range(2003,$year));
$news = array_reverse($news);

foreach ($news as $key => $value )
{
  $url = $value;
  if($url == "Older News") {  $url = "old"; }

  if($show == $url) {
    echo "<b>$value</b>";
  } else {
    local_url("news.php?show=$url","$value");
  }
  echo " &nbsp; ";
}
echo "<hr>";

include "news/news$show.html";
active_section_end();
pageend();


?>
