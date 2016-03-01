<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_adminer`;");
E_C("CREATE TABLE `ecs_store_adminer` (
  `rec_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` smallint(5) unsigned NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `store_id` smallint(5) unsigned NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商店铺id',
  `store_type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '仓库类型id',
  PRIMARY KEY (`rec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_store_adminer` values('1','1','admin','16','18712345678','03350785268','0','0');");
E_D("replace into `ecs_store_adminer` values('2','4','河北库库管','16','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('3','1','admin','15','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('4','5','河北库主管','15','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('5','1','admin','17','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('6','4','河北库库管','17','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('7','1','admin','14','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('8','5','河北库主管','14','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('9','1','admin','18','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('10','4','河北库库管','18','18712345678','03351234567','0','0');");
E_D("replace into `ecs_store_adminer` values('11','1','admin','13','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('12','5','河北库主管','13','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('13','1','admin','19','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('14','4','河北库库管','19','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('15','1','admin','12','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('16','5','河北库主管','12','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('17','1','admin','20','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('18','4','河北库库管','20','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('19','1','admin','11','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('20','5','河北库主管','11','','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('21','1','admin','21','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('22','4','河北库库管','21','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('23','1','admin','10','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('24','5','河北库主管','10','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('25','1','admin','22','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('26','19','石家庄库管','22','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('27','1','admin','9','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('28','20','石家庄主管','9','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('29','1','admin','23','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('30','19','石家庄库管','23','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('31','1','admin','8','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('32','20','石家庄主管','8','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('33','1','admin','24','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('34','19','石家庄库管','24','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('35','1','admin','7','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('36','20','石家庄主管','7','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('37','1','admin','25','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('38','18','山海关库管','25','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('39','1','admin','5','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('40','6','秦皇岛全城主管','5','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('41','1','admin','26','','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('42','7','海港库库管','26','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('43','1','admin','4','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('44','6','秦皇岛全城主管','4','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('45','1','admin','27','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('46','17','北戴河库库管','27','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('47','1','admin','6','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('48','6','秦皇岛全城主管','6','移动电话','固定电话','0','0');");
E_D("replace into `ecs_store_adminer` values('50','6','yiren','36','18712345677','03350785268','6','6');");
E_D("replace into `ecs_store_adminer` values('51','9','yiren_01','36','18712345677','03350785268','6','6');");
E_D("replace into `ecs_store_adminer` values('52','6','yiren','35','18712345677','03350785268','6','6');");
E_D("replace into `ecs_store_adminer` values('53','6','yiren','37','移动电话','固定电话','6','6');");
E_D("replace into `ecs_store_adminer` values('54','9','yiren_01','37','移动电话','固定电话','6','6');");
E_D("replace into `ecs_store_adminer` values('55','6','yiren','34','移动电话','固定电话','6','6');");
E_D("replace into `ecs_store_adminer` values('56','6','yiren','38','移动电话','固定电话','6','6');");
E_D("replace into `ecs_store_adminer` values('57','9','yiren_01','38','移动电话','固定电话','6','6');");
E_D("replace into `ecs_store_adminer` values('58','6','yiren','33','移动电话','固定电话','6','6');");

require("../../inc/footer.php");
?>