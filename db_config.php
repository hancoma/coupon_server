<?
extract($_GET);
extract($_POST);
$dbconn=mysql_connect("localhost","hancomawp","a7827665");
$status = mysql_select_db("hancomawp",$dbconn);
if (!$status) {
		error("DB_ERROR");
		exit;
}
	?>