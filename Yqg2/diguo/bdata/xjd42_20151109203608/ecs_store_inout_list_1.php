<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_inout_list`;");
E_C("CREATE TABLE `ecs_store_inout_list` (
  `rec_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inout_sn` varchar(255) NOT NULL,
  `inout_status` tinyint(1) unsigned NOT NULL COMMENT '1,退回;2,等待审核;3,审核通过;4,审核拒绝',
  `store_id` int(5) unsigned NOT NULL,
  `adminer_id` smallint(5) unsigned NOT NULL,
  `inout_type` smallint(5) unsigned NOT NULL,
  `inout_mode` tinyint(1) unsigned NOT NULL COMMENT '1：表示出库  2：表示入库',
  `order_id` int(10) unsigned NOT NULL,
  `order_sn` varchar(255) NOT NULL,
  `takegoods_man` varchar(255) NOT NULL,
  `today_sn` smallint(5) unsigned NOT NULL,
  `add_date` int(8) unsigned NOT NULL,
  `add_time` int(10) unsigned NOT NULL,
  `move_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '移库单主键id',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商店铺id',
  `store_type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '仓库类型id',
  PRIMARY KEY (`rec_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_store_inout_list` values('1','rk201507240001','3','26','1','17','2','0','','anan','1','20150724','1437687299','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('2','rk201507240002','3','25','1','17','2','0','','anan','2','20150724','1437687329','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('3','rk201507240003','3','27','1','17','2','0','','anan','3','20150724','1437687631','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('4','zb201507240004','3','27','1','12','1','0','','admin','4','20150724','1437687737','1','0','0');");
E_D("replace into `ecs_store_inout_list` values('5','zb201507240005','3','16','1','13','2','0','','admin','5','20150724','1437687815','1','0','0');");
E_D("replace into `ecs_store_inout_list` values('6','zb201507240006','3','27','1','12','1','0','','admin','6','20150724','1437687838','2','0','0');");
E_D("replace into `ecs_store_inout_list` values('7','zb201507240007','3','27','1','12','1','0','','admin','7','20150724','1437687904','3','0','0');");
E_D("replace into `ecs_store_inout_list` values('8','zb201507240008','3','27','1','12','1','0','','admin','8','20150724','1437688073','4','0','0');");
E_D("replace into `ecs_store_inout_list` values('9','zb201507240009','3','27','1','12','1','0','','admin','9','20150724','1437688098','5','0','0');");
E_D("replace into `ecs_store_inout_list` values('10','zb201507240010','3','27','1','12','1','0','','admin','10','20150724','1437688120','6','0','0');");
E_D("replace into `ecs_store_inout_list` values('11','zb201507240011','3','21','1','13','2','0','','admin','11','20150724','1437688149','6','0','0');");
E_D("replace into `ecs_store_inout_list` values('12','zb201507240012','3','20','1','13','2','0','','admin','12','20150724','1437688153','5','0','0');");
E_D("replace into `ecs_store_inout_list` values('13','zb201507240013','3','19','1','13','2','0','','admin','13','20150724','1437688157','4','0','0');");
E_D("replace into `ecs_store_inout_list` values('14','zb201507240014','3','18','1','13','2','0','','admin','14','20150724','1437688161','3','0','0');");
E_D("replace into `ecs_store_inout_list` values('15','zb201507240015','3','17','1','13','2','0','','admin','15','20150724','1437688165','2','0','0');");
E_D("replace into `ecs_store_inout_list` values('16','rk201507240016','3','24','1','17','2','0','','anna','16','20150724','1437688454','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('17','rk201507240017','3','23','1','17','2','0','','anan','17','20150724','1437688491','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('18','rk201507240018','3','22','1','17','2','0','','anan','18','20150724','1437688511','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('19','rk201507240019','3','26','1','17','2','0','','天天果园旗舰店','19','20150724','1437688787','0','1','0');");
E_D("replace into `ecs_store_inout_list` values('20','zb201507240020','3','26','1','12','1','0','','admin','20','20150724','1437688940','7','0','0');");
E_D("replace into `ecs_store_inout_list` values('21','zb201507240021','3','26','1','12','1','0','','admin','21','20150724','1437688957','8','0','0');");
E_D("replace into `ecs_store_inout_list` values('22','zb201507240022','3','26','1','12','1','0','','admin','22','20150724','1437689025','9','0','0');");
E_D("replace into `ecs_store_inout_list` values('23','zb201507240023','3','26','1','12','1','0','','admin','23','20150724','1437689059','10','0','0');");
E_D("replace into `ecs_store_inout_list` values('24','zb201507240024','3','26','1','12','1','0','','admin','24','20150724','1437689079','11','0','0');");
E_D("replace into `ecs_store_inout_list` values('25','zb201507240025','3','26','1','12','1','0','','admin','25','20150724','1437689120','12','0','0');");
E_D("replace into `ecs_store_inout_list` values('26','zb201507240026','3','26','1','12','1','0','','admin','26','20150724','1437689141','13','0','0');");
E_D("replace into `ecs_store_inout_list` values('28','zb201507240027','3','26','1','12','1','0','','admin','27','20150724','1437689213','15','0','0');");
E_D("replace into `ecs_store_inout_list` values('29','zb201507240028','3','26','1','12','1','0','','admin','28','20150724','1437689231','16','0','0');");
E_D("replace into `ecs_store_inout_list` values('30','zb201507240029','3','26','1','12','1','0','','admin','29','20150724','1437689247','17','0','0');");
E_D("replace into `ecs_store_inout_list` values('31','zb201507240030','3','16','1','13','2','0','','admin','30','20150724','1437689296','17','0','0');");
E_D("replace into `ecs_store_inout_list` values('32','zb201507240031','3','17','1','13','2','0','','admin','31','20150724','1437689300','16','0','0');");
E_D("replace into `ecs_store_inout_list` values('33','zb201507240032','3','19','1','13','2','0','','admin','32','20150724','1437689303','15','0','0');");
E_D("replace into `ecs_store_inout_list` values('34','zb201507240033','3','20','1','13','2','0','','admin','33','20150724','1437689306','13','0','0');");
E_D("replace into `ecs_store_inout_list` values('35','zb201507240034','3','21','1','13','2','0','','admin','34','20150724','1437689310','12','0','0');");
E_D("replace into `ecs_store_inout_list` values('36','zb201507240035','3','22','1','13','2','0','','admin','35','20150724','1437689313','11','0','0');");
E_D("replace into `ecs_store_inout_list` values('37','zb201507240036','3','23','1','13','2','0','','admin','36','20150724','1437689318','10','0','0');");
E_D("replace into `ecs_store_inout_list` values('38','zb201507240037','3','24','1','13','2','0','','admin','37','20150724','1437689322','9','0','0');");
E_D("replace into `ecs_store_inout_list` values('39','zb201507240038','3','27','1','13','2','0','','admin','38','20150724','1437689326','8','0','0');");
E_D("replace into `ecs_store_inout_list` values('40','zb201507240039','3','25','1','13','2','0','','admin','39','20150724','1437689330','7','0','0');");
E_D("replace into `ecs_store_inout_list` values('41','rk201507240040','3','36','6','18','2','0','','yiren','40','20150724','1437690545','0','6','6');");
E_D("replace into `ecs_store_inout_list` values('42','zb201507240041','3','36','6','12','1','0','','yiren','41','20150724','1437690664','18','6','6');");
E_D("replace into `ecs_store_inout_list` values('43','zb201507240042','3','37','6','13','2','0','','yiren','42','20150724','1437690736','18','6','0');");
E_D("replace into `ecs_store_inout_list` values('44','zb201507240043','3','36','6','12','1','0','','yiren','43','20150724','1437690751','19','6','6');");
E_D("replace into `ecs_store_inout_list` values('45','zb201507240044','3','38','6','13','2','0','','yiren','44','20150724','1437690767','19','6','0');");
E_D("replace into `ecs_store_inout_list` values('46','ck201507240044','3','16','1','1','1','0','2015072495932','admin','44','20150724','1437691326','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('47','ck201507240045','3','16','1','1','1','0','2015072453725','admin','45','20150724','1437691439','0','1','0');");
E_D("replace into `ecs_store_inout_list` values('48','rk201511080001','3','26','1','15','2','0','','1111','1','20151108','1446969856','0','0','0');");
E_D("replace into `ecs_store_inout_list` values('49','ck201511090001','3','26','1','1','1','0','2015110876610','admin','1','20151109','1447000264','0','0','0');");

require("../../inc/footer.php");
?>