<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_chat_third_customer`;");
E_C("CREATE TABLE `ecs_chat_third_customer` (
  `cus_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cus_name` varchar(120) NOT NULL COMMENT '客服名称',
  `cus_no` varchar(20) NOT NULL COMMENT '客服号码',
  `cus_type` tinyint(1) NOT NULL COMMENT '客服类型',
  `is_master` tinyint(1) NOT NULL COMMENT '是否主客服',
  `add_time` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='第三方客服表'");

require("../../inc/footer.php");
?>