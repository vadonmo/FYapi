<?php
header("Content-type:application/json;charset=utf-8");
$yhjs = $_POST["yhjs"];
?>
{"code":0,"result":[
<?php
for($i = 0; $i < 10; $i++){
	if($i != 0) echo ",";
?>
{
	"sbbh":"<?php echo "bh".$i ?>",
	"xmmc":"<?php echo "xmmc".$i ?>",
	"sgdw":"<?php echo "sgdw".$i ?>",
	"sbwd":"<?php echo ($i / 100 + 39.963175) ?>",
	"sbjd":"<?php echo ($i / 100 + 116.400244) ?>",
	"sblx":<?php if($i % 2 == 0) echo 0; else echo 1; ?>,
	"sfzx":<?php if($i % 2 == 1) echo 0; else echo 1; ?>
}
<?php
}
?>
]}