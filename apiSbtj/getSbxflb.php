<?php
header("Content-type:application/json;charset=utf-8");
?>
{"code":0,"result":[
<?php
for($i = 0; $i < 10; $i++){
	if($i != 0) echo ",";
?>
{
	"id":<?php echo $i ?>,
	"babh":"<?php echo "备案编号".$i ?>",
	"hxzbh":"<?php echo "黑匣子编号".$i ?>",
	"gdzt":"<?php echo "已接单".$i ?>",
	"xmsbbh":"<?php echo "项目设备编号".$i ?>",
	"ssgc":"<?php echo "所属工程".$i ?>"
}
<?php
}
?>
]}