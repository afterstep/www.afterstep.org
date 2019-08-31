<?
include "common.php";

function load_file($fn) {
  if (!file_exists($fn)) return '';
  $fp = fopen($fn, "rb");
  $str = fread($fp, filesize($fn));
  fclose($fp);
  return $str;
}

$PATH_TRANSLATED = '.' . $_SERVER["SCRIPT_URL"];

if (!ereg('\.xml$', $PATH_TRANSLATED)) {
   echo "Permission denied.";
   exit;
}

$file = load_file($PATH_TRANSLATED);
$file = preg_replace('/&/', '&amp;', $file);
$file = preg_replace('/"/', '&quot;', $file);
$file = preg_replace('/</', '&lt;', $file);

echo "<pre>$file</pre>";

?>

