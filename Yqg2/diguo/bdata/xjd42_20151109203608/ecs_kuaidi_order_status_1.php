<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_kuaidi_order_status`;");
E_C("CREATE TABLE `ecs_kuaidi_order_status` (
  `rec_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `status_id` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `status_name` varchar(50) NOT NULL DEFAULT '待确认',
  `status_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_display` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>