<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keyword_area`;");
E_C("CREATE TABLE `ecs_keyword_area` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `w_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`),
  KEY `w_id` (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keyword_area` values('1444899535','1','101.226.51.226','IANA');");
E_D("replace into `ecs_keyword_area` values('1445264644','2','14.29.67.26','IANA');");
E_D("replace into `ecs_keyword_area` values('1445264823','2','14.29.67.26','IANA');");
E_D("replace into `ecs_keyword_area` values('1445265780','2','14.29.67.26','IANA');");
E_D("replace into `ecs_keyword_area` values('1445303703','2','14.29.67.26','IANA');");
E_D("replace into `ecs_keyword_area` values('1446970643','3','139.205.65.135','');");
E_D("replace into `ecs_keyword_area` values('1446972426','3','139.205.65.135','');");
E_D("replace into `ecs_keyword_area` values('1446973860','4','66.249.67.232','');");
E_D("replace into `ecs_keyword_area` values('1446996133','4','66.249.67.232','');");
E_D("replace into `ecs_keyword_area` values('1447018205','4','66.249.67.232','');");
E_D("replace into `ecs_keyword_area` values('1447033555','4','66.249.67.240','');");
E_D("replace into `ecs_keyword_area` values('1447038091','4','66.249.67.224','');");
E_D("replace into `ecs_keyword_area` values('1447043879','4','66.249.67.224','');");
E_D("replace into `ecs_keyword_area` values('1447056897','4','66.249.67.224','');");
E_D("replace into `ecs_keyword_area` values('1447063243','4','66.249.67.240','');");

require("../../inc/footer.php");
?>