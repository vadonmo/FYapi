<?php
header("Content-type:application/json;charset=utf-8");
?>
{"code":0,"result":[
<?php
for($i = 0; $i < 10; $i++){
	if($i != 0) echo ",";
?>
{
	"qssj":"<?php echo "2018-01-01 08:00:".$i ?>",
	"sc":"<?php echo (10*$i) ?>",
	"gd":"<?php echo (6.4*$i) ?>",
	"fd":"<?php echo (10.6*$i) ?>",
	"dz":"<?php echo (0.2*$i) ?>",
	"lj":"<?php echo (5.2*$i) ?>",
	"ljbfb":"<?php echo (3.4*$i) ?>"
}
<?php
}
?>
]}