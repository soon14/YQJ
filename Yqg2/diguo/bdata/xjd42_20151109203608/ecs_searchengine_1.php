<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2015-11-03','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-11-08','SOGOU','518');");
E_D("replace into `ecs_searchengine` values('2015-11-08','GOOGLE','31');");
E_D("replace into `ecs_searchengine` values('2015-11-08','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-11-09','GOOGLE','77');");
E_D("replace into `ecs_searchengine` values('2015-11-09','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-11-09','SOGOU','953');");

require("../../inc/footer.php");
?>