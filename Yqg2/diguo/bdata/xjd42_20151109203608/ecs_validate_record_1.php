<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_validate_record`;");
E_C("CREATE TABLE `ecs_validate_record` (
  `record_key` varchar(250) NOT NULL COMMENT '标识',
  `record_code` text NOT NULL COMMENT '值',
  `record_type` varchar(60) NOT NULL COMMENT '业务类型,SESSIONID',
  `last_send_time` int(11) DEFAULT NULL COMMENT '上一次发送时间',
  `expired_time` int(11) DEFAULT NULL COMMENT '过期时间',
  `ext_info` text COMMENT '扩展信息',
  `create_time` int(11) DEFAULT NULL COMMENT '记录的创建时间',
  PRIMARY KEY (`record_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='验证记录表'");
E_D("replace into `ecs_validate_record` values('15703378806','433901','mobile_register','1439433686','1439435486','a:1:{s:5:\"count\";i:6;}','1439431902');");
E_D("replace into `ecs_validate_record` values('zhaoyunlong@68ecshop.com','410556','VT_EMAIL_VALIDATE','1439450864','1439452664','a:0:{}','1439450864');");
E_D("replace into `ecs_validate_record` values('409889876@qq.com','474111','VT_EMAIL_VALIDATE','1440667527','1440669327','a:0:{}','1440145705');");
E_D("replace into `ecs_validate_record` values('408770274@qq.com','488009','VT_EMAIL_VALIDATE','1440669280','1440671080','a:0:{}','1440669280');");
E_D("replace into `ecs_validate_record` values('83595875@qq.com','777715','VT_EMAIL_REGISTER','1442995730','1442997530','a:0:{}','1442995730');");

require("../../inc/footer.php");
?>