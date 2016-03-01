<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_takegoods_order`;");
E_C("CREATE TABLE `ecs_takegoods_order` (
  `rec_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tg_id` int(10) unsigned NOT NULL DEFAULT '0',
  `tg_sn` varchar(20) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `country` int(10) unsigned NOT NULL DEFAULT '0',
  `province` int(10) unsigned NOT NULL DEFAULT '0',
  `city` int(10) unsigned NOT NULL DEFAULT '0',
  `district` int(10) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `consignee` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `shipping_id` varchar(50) NOT NULL,
  `shipping_sender` varchar(50) NOT NULL,
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `paisong_name` varchar(100) NOT NULL,
  `paisong_tel` varchar(50) NOT NULL,
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `order_remark` varchar(255) NOT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `vc_sn` (`tg_sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>