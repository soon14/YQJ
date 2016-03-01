<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_ad`;");
E_C("CREATE TABLE `ecs_ecsmart_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_ad` values('41','17','0','手机端首页广告3-3','','1446525061881399748.jpg','1439654400','1476547200','','','','3','0');");
E_D("replace into `ecs_ecsmart_ad` values('3','3','0','wap首页主广告1','http://127.0.0.1/ec273/vsc/vsc_xjdv4/topic.php?topic_id=6','1446526281186012438.jpg','1394812800','1492617600','','','','20','1');");
E_D("replace into `ecs_ecsmart_ad` values('4','3','0','wap首页主广告2','http://127.0.0.1/ec273/vsc/vsc_xjdv4/topic.php?topic_id=6','1446526355999647751.jpg','1394812800','1492358400','','','','10','1');");
E_D("replace into `ecs_ecsmart_ad` values('5','3','0','wap首页主广告3','192.168.191.1/ec273/vsc/vsc_xjdv4/mobile/admin/index.php','1446526376629534437.jpg','1394812800','1491926400','','','','11','1');");
E_D("replace into `ecs_ecsmart_ad` values('30','11','0','手机端首页广告3-1','','1446529764417246828.jpg','1440345600','1474560000','','','','1','1');");
E_D("replace into `ecs_ecsmart_ad` values('40','9','0','手机端首页广告3-2','','1446525048626543138.jpg','1442332800','1476547200','','','','3','1');");
E_D("replace into `ecs_ecsmart_ad` values('24','2','0','手机端首页广告1-1','','1446523860145081935.jpg','1440345600','1506096000','','','','2','1');");
E_D("replace into `ecs_ecsmart_ad` values('25','1','0','手机端首页广告1-2','','1446523979803201387.jpg','1440345600','1474560000','','','','4','1');");
E_D("replace into `ecs_ecsmart_ad` values('26','6','0','手机端首页广告1-3','','1446524005954581081.jpg','1440345600','1474560000','','','','2','1');");
E_D("replace into `ecs_ecsmart_ad` values('27','7','0','手机端首页广告2-1','','1446524040241914342.jpg','1440345600','1474560000','','','','1','1');");
E_D("replace into `ecs_ecsmart_ad` values('28','8','0','手机端首页广告2-2','','1446524068308616627.jpg','1440345600','1474560000','','','','3','1');");
E_D("replace into `ecs_ecsmart_ad` values('34','15','0','分类-1-促销广告','','1446526476159352384.jpg','1440345600','1474560000','','','','5','1');");
E_D("replace into `ecs_ecsmart_ad` values('35','4','0','衣云化妆品特卖','','1446523507049768485.jpg','1437667200','1324569600','满68增16GU盘','滋润每一天','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('36','4','0','cosme卸妆部NO.1','','1446526866700761546.jpg','1437667200','1474560000','6.5折','Fancl无添加纳米卸妆油','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('37','4','0','菲丽菲拉（PERIPERA）炫彩染色唇彩','','1446525094001398557.jpg','1437667200','1474560000','4.9折','刷出“唇”在感！','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('38','4','0','【海外直邮】OH MY GOD','','1446526839285811375.jpg','1437667200','1474560000','3.1折','不打美白针,也能白成仙！','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('39','16','0','手机端首页广告3-4','','1446529374623603469.jpg','1439654400','1508083200','','','','0','0');");
E_D("replace into `ecs_ecsmart_ad` values('44','21','0','微分销店铺楼层广告1','','1446528882938173661.jpg','1440172800','1508601600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('45','22','0','微分销店铺楼层广告2','','1446528949542792746.jpg','1440172800','1508601600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('46','23','0','微分销店铺楼层广告3','','1446528975534481300.jpg','1440172800','1508601600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('47','24','0','微分销店铺楼层广告4','','1446529508302731612.jpg','1440172800','1508601600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('48','25','0','微分销店铺楼层广告5','','1446529452821995665.jpg','1440172800','1508601600','','','','0','0');");
E_D("replace into `ecs_ecsmart_ad` values('49','26','0','微分销店铺楼层广告6','','1446529203977593893.jpg','1440172800','1508601600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('50','27','0','微分销店铺楼层广告7','','1446529269193451837.jpg','1440172800','1508601600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('51','28','0','微分销店铺楼层广告8','','1446529168760012287.jpg','1440172800','1508601600','','','','0','1');");
E_D("replace into `ecs_ecsmart_ad` values('52','29','0','手机端首页广告2-3','','1446524754375144184.jpg','1439568000','1542124800','','','','1','0');");

require("../../inc/footer.php");
?>