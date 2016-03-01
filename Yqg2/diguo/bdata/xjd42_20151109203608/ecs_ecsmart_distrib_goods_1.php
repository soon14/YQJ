<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_distrib_goods`;");
E_C("CREATE TABLE `ecs_ecsmart_distrib_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `distrib_time` int(2) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `distrib_money` decimal(10,2) NOT NULL,
  `distrib_type` int(2) NOT NULL,
  `goods_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_distrib_goods` values('146','0','0','0','10.00','2','31828');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('147','0','0','0','10.00','2','31829');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('148','0','0','0','10.00','2','31830');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('149','0','0','0','10.00','2','31831');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('150','0','0','0','10.00','2','31832');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('151','0','0','0','10.00','2','31833');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('152','0','0','0','10.00','2','31834');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('153','0','0','0','10.00','2','31835');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('154','0','0','0','10.00','2','31836');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('155','0','0','0','10.00','2','31837');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('156','0','0','0','10.00','2','31838');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('157','0','0','0','10.00','2','31839');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('158','0','0','0','10.00','2','31840');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('159','0','0','0','10.00','2','31841');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('160','0','0','0','10.00','2','31842');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('161','0','0','0','10.00','2','31843');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('162','0','0','0','10.00','2','31844');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('163','0','0','0','10.00','2','31845');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('164','0','0','0','10.00','2','31846');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('165','0','0','0','10.00','2','31847');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('166','0','0','0','10.00','2','31848');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('167','0','0','0','10.00','2','31849');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('168','0','0','0','10.00','2','31850');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('169','0','0','0','10.00','2','31851');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('170','0','0','0','10.00','2','31852');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('171','0','0','0','10.00','2','31853');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('172','0','0','0','10.00','2','31854');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('173','0','0','0','10.00','2','31855');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('174','0','0','0','10.00','2','31856');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('175','0','0','0','10.00','2','31857');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('176','0','0','0','10.00','2','31858');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('177','0','0','0','10.00','2','31859');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('178','0','0','0','10.00','2','31860');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('179','0','0','0','10.00','2','31861');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('180','0','0','0','10.00','2','31862');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('181','0','0','0','10.00','2','31863');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('182','0','0','0','10.00','2','31864');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('183','0','0','0','10.00','2','31865');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('184','0','0','0','10.00','2','31866');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('185','0','0','0','10.00','2','31867');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('186','0','0','0','10.00','2','31868');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('187','0','0','0','10.00','2','31869');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('188','0','0','0','10.00','2','31870');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('189','0','0','0','10.00','2','31871');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('190','0','0','0','10.00','2','31872');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('191','0','0','0','10.00','2','31873');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('192','0','0','0','10.00','2','31874');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('193','0','0','0','10.00','2','31875');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('194','0','0','0','10.00','2','31876');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('195','0','0','0','10.00','2','31877');");
E_D("replace into `ecs_ecsmart_distrib_goods` values('196','0','0','0','10.00','2','0');");

require("../../inc/footer.php");
?>