<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','3','admin','1','0','2','0','测试付款','1437691287');");
E_D("replace into `ecs_order_action` values('2','3','admin','5','5','2','0','','1437691326');");
E_D("replace into `ecs_order_action` values('3','3','admin','1','1','2','1','','1437691326');");
E_D("replace into `ecs_order_action` values('4','2','admin','1','0','2','0','测试','1437691415');");
E_D("replace into `ecs_order_action` values('5','2','admin','5','5','2','0','','1437691439');");
E_D("replace into `ecs_order_action` values('6','2','admin','1','1','2','1','','1437691439');");
E_D("replace into `ecs_order_action` values('9','11','admin','1','0','0','0','','1447000219');");
E_D("replace into `ecs_order_action` values('10','11','admin','1','0','2','0','00','1447000227');");
E_D("replace into `ecs_order_action` values('11','11','admin','1','3','2','0','','1447000237');");
E_D("replace into `ecs_order_action` values('12','11','admin','5','5','2','0','','1447000249');");
E_D("replace into `ecs_order_action` values('13','11','admin','1','1','2','1','','1447000265');");
E_D("replace into `ecs_order_action` values('14','11','买家','5','2','2','0','','1447000284');");

require("../../inc/footer.php");
?>