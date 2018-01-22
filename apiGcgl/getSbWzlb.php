<?php
header("Content-type:application/json;charset=utf-8");
?>
{"code":0,"result":[
<?php
for($i = 0; $i < 10; $i++){
	if($i != 0) echo ",";
?>
{
	"wzsj":"<?php echo "2018-01-01 08:00:".$i ?>",
	"wzlx":"<?php echo "weizhang".$i ?>"
}
<?php
}
?>
]}