<?php
header("Content-type:application/json;charset=gbk");
$dlm = $_POST["dlm"];
$dmm = $_POST["mm"];
$yhjs = 0;
switch ($dlm) {
    case "集团公司管理员":
        $yhjs = 1;
        break;
    case "分公司管理员":
        $yhjs = 2;
        break;
    case "项目部管理员":
        $yhjs = 3;
        break;
    case "维保人员":
        $yhjs = 4;
        break;
    case "安监站管理员":
        $yhjs = 5;
        break;
    case "塔机司机":
        $yhjs = 6;
        break;
    case "升降机司机":
        $yhjs = 7;
        break;
    default:
        break;
}
?>
{"code":0,"result":{"yhjs":<?php echo $yhjs ?>},"msg":"登录成功"}