<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_rebate_log`;");
E_C("CREATE TABLE `ecs_store_rebate_log` (
  `logid` int(10) NOT NULL AUTO_INCREMENT,
  `rebateid` int(10) NOT NULL DEFAULT '0' COMMENT '佣金id',
  `username` char(30) NOT NULL DEFAULT '' COMMENT '操作人',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '事件类型',
  `typedec` varchar(30) NOT NULL DEFAULT '' COMMENT '事件说明',
  `contents` varchar(100) NOT NULL DEFAULT '' COMMENT '操作内容',
  `addtime` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='仓库佣金操作日志'");
E_D("replace into `ecs_store_rebate_log` values('1','2','平台方:0','1','结算分销商(仓库)佣金','订单id2015072495932佣金结算','1438025053');");
E_D("replace into `ecs_store_rebate_log` values('2','2','平台方:0','2','结算分销商(仓库)佣金','佣金状态由冻结变可结算','1438025053');");
E_D("replace into `ecs_store_rebate_log` values('3','2','平台方:0','2','发起分销商(仓库)结算','佣金状态由可结算变等待审核','1438025106');");
E_D("replace into `ecs_store_rebate_log` values('4','2','平台方:0','2','确认通过','佣金状态由等待审核变等待平台方付款','1438025126');");
E_D("replace into `ecs_store_rebate_log` values('5','1','平台方:0','1','结算分销商(仓库)佣金','订单id2015072453725佣金结算','1438025142');");
E_D("replace into `ecs_store_rebate_log` values('6','1','平台方:0','2','结算分销商(仓库)佣金','佣金状态由冻结变可结算','1438025142');");

require("../../inc/footer.php");
?>