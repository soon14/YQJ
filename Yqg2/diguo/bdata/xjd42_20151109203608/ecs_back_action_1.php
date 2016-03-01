<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_action`;");
E_C("CREATE TABLE `ecs_back_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `status_back` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status_refund` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `back_id` (`back_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_action` values('1','1','','5','0','','1435254819');");
E_D("replace into `ecs_back_action` values('2','1','','1','0','','1435254823');");
E_D("replace into `ecs_back_action` values('3','1','','1','1','12','1435254832');");
E_D("replace into `ecs_back_action` values('4','1','','3','1','','1435254836');");
E_D("replace into `ecs_back_action` values('5','1','','3','1','[售后] ','1435254838');");

require("../../inc/footer.php");
?>