<?php
header("Content-type:application/json;charset=utf-8");
?>
{"code":0,"result":[
<?php
for($i = 0; $i < 10; $i++){
	if($i != 0) echo ",";
?>
	"<?php echo "维保人员".$i ?>"
<?php
}
?>
]}