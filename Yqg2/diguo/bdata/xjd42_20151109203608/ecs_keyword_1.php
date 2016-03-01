<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword`;");
E_C("CREATE TABLE `ecs_keyword` (
  `w_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `word` varchar(255) NOT NULL DEFAULT '',
  `keyword` varchar(255) NOT NULL DEFAULT '',
  `letter` varchar(255) NOT NULL DEFAULT '',
  `items` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `total_search` int(10) unsigned NOT NULL DEFAULT '0',
  `month_search` int(10) unsigned NOT NULL DEFAULT '0',
  `week_search` int(10) unsigned NOT NULL DEFAULT '0',
  `today_search` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `keyword_cat` varchar(255) NOT NULL,
  `keyword_cat_url` varchar(255) NOT NULL,
  `keyword_cat_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`w_id`),
  KEY `searchengine` (`searchengine`),
  KEY `word` (`word`),
  KEY `letter` (`letter`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword` values('1','ecshop','','','??????3???','214','1444899535','1','1','1','1','1','','','0');");
E_D("replace into `ecs_keyword` values('2','ecshop','巧克力','巧克力','qiaokeli','23','1445303703','4','4','4','1','1','食品生鲜','search.php?category=1&keywords=巧克力','15');");
E_D("replace into `ecs_keyword` values('3','ecshop','新西兰','新西兰','xinxilan','5','1446972426','2','2','2','2','1','食品生鲜','search.php?category=1&keywords=新西兰','5');");
E_D("replace into `ecs_keyword` values('4','ecshop','伊利','伊利','yili','2','1447063243','8','8','5','5','1','食品生鲜','search.php?category=1&keywords=伊利','1');");

require("../../inc/footer.php");
?>