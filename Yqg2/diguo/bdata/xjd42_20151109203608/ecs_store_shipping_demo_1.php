<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_shipping_demo`;");
E_C("CREATE TABLE `ecs_store_shipping_demo` (
  `demo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shipping_id` smallint(5) unsigned NOT NULL,
  `shipping_name` varchar(255) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商店铺id',
  `store_type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '仓库类型id',
  `configure` text NOT NULL COMMENT '运费配送设置',
  PRIMARY KEY (`demo_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_store_shipping_demo` values('1','1','圆通速递','0','0','a:2:{s:12:\"shipping_fee\";d:5;s:10:\"free_money\";d:99;}');");
E_D("replace into `ecs_store_shipping_demo` values('2','2','门店自提','0','0','a:2:{s:12:\"shipping_fee\";i:0;s:10:\"free_money\";i:0;}');");
E_D("replace into `ecs_store_shipping_demo` values('3','3','顺丰速运','0','0','a:2:{s:12:\"shipping_fee\";d:15;s:10:\"free_money\";d:199;}');");
E_D("replace into `ecs_store_shipping_demo` values('4','4','申通快递','0','0','a:2:{s:12:\"shipping_fee\";d:5;s:10:\"free_money\";d:99;}');");
E_D("replace into `ecs_store_shipping_demo` values('5','5','同城快递','0','0','a:2:{s:12:\"shipping_fee\";d:5;s:10:\"free_money\";d:99;}');");
E_D("replace into `ecs_store_shipping_demo` values('6','6','中通速递','0','0','a:2:{s:12:\"shipping_fee\";d:5;s:10:\"free_money\";d:99;}');");

require("../../inc/footer.php");
?>