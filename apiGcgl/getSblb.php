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
	"xmsbbh":"<?php echo "项目设备编号".$i ?>",
	"ssgc":"<?php echo "所属工程".$i ?>",
	"aqyxm":"<?php echo "安全员姓名".$i ?>",
	"aqydh":"<?php echo "10010".$i ?>",
	"zbjs":<?php echo ($i * 10) ?>,
	"jrbj":<?php echo $i ?>,
	"sfzx":<?php if($i % 3 == 0) echo 1; else echo 0; ?>,
	"sblx":<?php if($i % 2 == 0) echo 1; else echo 0; ?>
}
<?php
}
?>
]}