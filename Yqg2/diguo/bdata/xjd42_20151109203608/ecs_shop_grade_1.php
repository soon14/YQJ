<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_shop_grade`;");
E_C("CREATE TABLE `ecs_shop_grade` (
  `grade_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(60) NOT NULL,
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `comment_rank` tinyint(3) NOT NULL DEFAULT '0',
  `server` tinyint(3) NOT NULL DEFAULT '0',
  `send` tinyint(3) NOT NULL DEFAULT '0',
  `shipping` tinyint(3) NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_sn` varchar(20) NOT NULL,
  `is_comment` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`grade_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_shop_grade` values('0','25','39035000','1447000308','0','5','5','5','11','2015110876610','1');");

require("../../inc/footer.php");
?>