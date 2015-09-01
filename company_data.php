<? include "db_config.php"; ?>
<?
$data=@mysql_fetch_array(mysql_query("select * from company  where no=$no"));
$photo=@mysql_fetch_array(mysql_query("select * from image_table  where code=$data[code]"));
if ($photo[file]) {
    $img="logo/".$photo[file];
} else {
    $img="http://t2.search.daumcdn.net/argon/130x130_85_c/okg5UcTRKx";
}
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<note>
  <company><?=$data[company]?></company>
  <time><?=$data[time]?></time>
	<point><?=$data[point]?></point>
	<menu><?=$data[contents]?></menu>
	<img><?=$img?></img>
	<telephone>tel:<?=$data[telephone]?></telephone>
	
</note>