<?php
header("Content-type:application/json;charset=utf-8");
$jtgsid = $_POST["jtgsid"];
?>
{"code":0,"result":[
<?php
for($i = 0; $i < 20; $i++){
	if($i != 0) echo ",";
?>
{
	"id":<?php echo $i ?>,
	"mc":"<?php echo "分公司".$i ?>",
	"tjzs":<?php echo ($i * 10) ?>,
	"tjbjs":<?php echo $i ?>,
	"sjjzs":<?php echo ($i * 10) ?>,
	"sjjbjs":<?php echo $i ?>,
	"aqzt":<?php if($i % 3 == 2) echo 2; else if($i % 2 == 0) echo 1; else echo 0;?>
}
<?php
}
?>
]}