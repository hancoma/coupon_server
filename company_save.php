<? include "db_config.php"; 
$_QKEY = "company,telephone,zip,address,address2,category,contents,map,reg_date,code,time,pay,point";
$_QVAL = "'$company','$telephone','$zip','$address','$address2','$category','$contents','$map','$reg_date','$code','$time','$pay','$point'";
 $query = "INSERT INTO company ($_QKEY) values ($_QVAL)"; 
$result = mysql_query($query);


?>
ok