<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_rebate_log`;");
E_C("CREATE TABLE `ecs_supplier_rebate_log` (
  `logid` int(10) NOT NULL AUTO_INCREMENT,
  `rebateid` int(10) NOT NULL DEFAULT '0' COMMENT '佣金id',
  `username` char(30) NOT NULL DEFAULT '' COMMENT '操作人',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '事件类型',
  `typedec` varchar(30) NOT NULL DEFAULT '' COMMENT '事件说明',
  `contents` varchar(100) NOT NULL DEFAULT '' COMMENT '操作内容',
  `addtime` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='佣金操作日志'");

require("../../inc/footer.php");
?>