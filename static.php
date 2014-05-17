<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Giáo xứ Giáo họ Việt Nam | Giới thiệu lịch sử, hình ảnh các nhà thờ Công Giáo ở Việt Nam</title>
</head>
<body>
  
  
<?php
$time = time();

//
$sqlcn = mysql_connect('127.0.0.1:3306', 'root', 'root');
if (!$sqlcn) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('giaoxugiaoho', $sqlcn); 

$data = "{ datas: [";
$result= mysql_query("SELECT * FROM `gx_node`");
$f=true;
while($info=mysql_fetch_array($result))  {
     $item = '{ "id":' .'"'. $info['nodeid'] . '"';
     $item .= ', "publishdate":' .'"'. $info['publishdate'] . '"';
     $item .= ', "title":' .'"'. $info['title'] . '"';
     $item .= ', "parentid":' .'"'. $info['parentid'] . '"';
     $item .= ', "urlident":' .'"'. $info['urlident'] . '"';
     $item .= ', "displayorder":' .'"'. $info['displayorder'] . '"';
     $item .= '}';
     if(!$f) {
       $data .= ',';
     } else {$f = false;}
     $data .= $item;
}
$data .= '] }';

mysql_close($sqlcn);

header("HTTP/1.1 200 OK");
header("Content-Type:text/html");
echo $data;


?>
</body>
</html>
