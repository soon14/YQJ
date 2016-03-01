<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_street`;");
E_C("CREATE TABLE `ecs_supplier_street` (
  `supplier_id` mediumint(8) unsigned NOT NULL COMMENT '店铺id',
  `supplier_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '店铺类型',
  `supplier_name` varchar(255) NOT NULL COMMENT '店铺名称',
  `supplier_title` varchar(255) NOT NULL COMMENT '店铺标题',
  `supplier_desc` text NOT NULL COMMENT '店铺描述',
  `supplier_tags` varchar(255) NOT NULL COMMENT '店铺标签',
  `logo` varchar(255) NOT NULL COMMENT '店铺图标',
  `is_groom` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否显示',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50' COMMENT '排列顺序',
  `supplier_notice` text NOT NULL COMMENT '审核通知',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `add_time` int(10) NOT NULL DEFAULT '0' COMMENT '申请添加时间',
  UNIQUE KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>