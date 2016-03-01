<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_main`;");
E_C("CREATE TABLE `ecs_store_main` (
  `store_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_name` varchar(255) NOT NULL,
  `parent_id` smallint(5) unsigned NOT NULL COMMENT '库房与仓库通过这个字段产生从属关系',
  `province` int(10) unsigned NOT NULL,
  `city` int(10) unsigned NOT NULL,
  `district` int(10) unsigned NOT NULL,
  `mianji` varchar(50) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商店铺id',
  `store_type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '仓库类型id',
  `latlog` varchar(100) NOT NULL DEFAULT '' COMMENT '经纬度',
  PRIMARY KEY (`store_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_store_main` values('4','秦皇岛海港圈','0','10','145','1194','','0','0','119.6,39.93');");
E_D("replace into `ecs_store_main` values('5','秦皇岛山海关圈','0','10','145','1195','','0','0','119.77,40.0');");
E_D("replace into `ecs_store_main` values('6','秦皇岛北戴河圈','0','10','145','1196','','0','0','119.48，39.83');");
E_D("replace into `ecs_store_main` values('7','石家庄桥西圈','0','10','138','1080','','0','0','114.47,37.05');");
E_D("replace into `ecs_store_main` values('8','石家庄桥东圈','0','10','138','1079','','0','0','114.9,40.78');");
E_D("replace into `ecs_store_main` values('9','石家庄长安圈','0','10','138','1078','','0','0','114.52,38.05');");
E_D("replace into `ecs_store_main` values('10','保定全城圈','0','10','139','1102','','0','0','115.47,38.87');");
E_D("replace into `ecs_store_main` values('11','承德全城圈','0','10','141','1143','','0','0','117.93,40.97');");
E_D("replace into `ecs_store_main` values('12','沧州市全城圈','0','10','140','1127','','0','0','116.83,38.3');");
E_D("replace into `ecs_store_main` values('13','邯郸全城圈','0','10','142','1154','','0','0','114.48,36.62');");
E_D("replace into `ecs_store_main` values('14','衡水全城圈','0','10','143','1173','','0','0','115.68,37.73');");
E_D("replace into `ecs_store_main` values('15','唐山全城圈','0','10','146','1205','','0','0','118.1,39.57');");
E_D("replace into `ecs_store_main` values('16','唐山仓','15','10','146','1205','2000','0','0','');");
E_D("replace into `ecs_store_main` values('17','衡水仓','14','10','143','1173','1000','0','0','');");
E_D("replace into `ecs_store_main` values('18','邯郸库','13','10','142','1154','1000','0','0','');");
E_D("replace into `ecs_store_main` values('19','沧州全城圈','12','10','140','1127','1000','0','0','');");
E_D("replace into `ecs_store_main` values('20','承德仓','11','10','141','1143','1000','0','0','');");
E_D("replace into `ecs_store_main` values('21','保定仓','10','10','139','1102','1000','0','0','');");
E_D("replace into `ecs_store_main` values('22','石家庄长安仓','9','10','138','1078','200','0','0','');");
E_D("replace into `ecs_store_main` values('23','石家庄桥东仓','8','10','138','1079','200','0','0','');");
E_D("replace into `ecs_store_main` values('24','石家庄桥西仓','7','10','138','1080','200','0','0','');");
E_D("replace into `ecs_store_main` values('25','秦皇岛山海关仓','5','10','145','1195','1000','0','0','');");
E_D("replace into `ecs_store_main` values('26','秦皇岛海港区仓库','4','10','145','1194','500','0','0','');");
E_D("replace into `ecs_store_main` values('27','秦皇岛北戴河仓','6','10','145','1196','800','0','0','');");
E_D("replace into `ecs_store_main` values('35','沧州衡水圈','0','10','143','1173','','6','6','115.68,37.73');");
E_D("replace into `ecs_store_main` values('34','石家庄保定邯郸圈','0','10','138','1078','','6','6','114.52,38.05');");
E_D("replace into `ecs_store_main` values('33','唐山秦皇岛承德圈','0','10','145','1194','','6','6','119.6,39.93');");
E_D("replace into `ecs_store_main` values('36','衡水仓','35','10','143','1173','2000','6','6','');");
E_D("replace into `ecs_store_main` values('37','石家庄库','34','10','138','1078','2000','6','6','');");
E_D("replace into `ecs_store_main` values('38','秦皇岛库','33','10','145','1194','1000','6','6','');");

require("../../inc/footer.php");
?>