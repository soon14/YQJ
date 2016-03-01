<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_rebate`;");
E_C("CREATE TABLE `ecs_supplier_rebate` (
  `rebate_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rebate_paytime_start` int(10) unsigned NOT NULL,
  `rebate_paytime_end` int(10) unsigned NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL,
  `is_pay_ok` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_type` varchar(100) NOT NULL DEFAULT '',
  `pay_time` int(10) unsigned NOT NULL,
  `remark` varchar(255) NOT NULL DEFAULT '',
  `admin_user` varchar(100) NOT NULL,
  `rebate_all` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '调整的货款',
  `rebate_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '调整的佣金',
  `payable_price` decimal(10,2) DEFAULT '0.00' COMMENT '应付货款',
  `rebate_img` varchar(255) NOT NULL DEFAULT '' COMMENT '汇款凭证图片路径',
  `status` tinyint(2) DEFAULT '0' COMMENT '状态(0:冻结,1:可结算佣金,2:等待入驻商确认,4:等待付款)',
  PRIMARY KEY (`rebate_id`),
  KEY `cat_type` (`rebate_paytime_end`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>