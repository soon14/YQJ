<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('2',NULL,NULL,'店铺街','1','1','0','stores.php','middle');");
E_D("replace into `ecs_nav` values('3','','0','限时团购','1','4','0','pro_search.php?intro=promotion','middle');");
E_D("replace into `ecs_nav` values('4','','0','积分商城','1','5','0','exchange.php','middle');");
E_D("replace into `ecs_nav` values('5',NULL,NULL,'优惠活动','1','6','0','activity.php','middle');");
E_D("replace into `ecs_nav` values('6',NULL,NULL,'智能扫货','1','7','0','scan.php','middle');");
E_D("replace into `ecs_nav` values('8','','0','我要提货','1','8','0','takegoods.php','middle');");
E_D("replace into `ecs_nav` values('9','a','9','关于我们 ','0','10','0','article_cat.php?id=9','middle');");
E_D("replace into `ecs_nav` values('10','a','10','购物指南','0','12','0','article_cat.php?id=10','middle');");

require("../../inc/footer.php");
?>