<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','206','0','','洛斐（Lofree）创意无线蓝牙音箱音响 电脑音箱 EDGE锋芒3C建筑美学','MISS FACE','ECS000206','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('2','2','23','0','','进口 新鲜水果 车厘子1000g','','ECS000023','1',NULL,'0','1','');");
E_D("replace into `ecs_delivery_goods` values('3','3','31828','0','','佳沛新西兰绿奇异果36个（原装）进口Zespri猕猴桃 新鲜水果准妈妈爱吃','','ECS000000','1',NULL,'0','2','');");

require("../../inc/footer.php");
?>