<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_move`;");
E_C("CREATE TABLE `ecs_store_move` (
  `move_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '移库单主键',
  `store_id_out` int(10) unsigned NOT NULL COMMENT '发货仓库id',
  `store_id_in` int(10) unsigned NOT NULL COMMENT '入货仓库id',
  `store_user_out` smallint(5) unsigned NOT NULL COMMENT '发货人',
  `store_user_in` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '收货人',
  `status` tinyint(4) unsigned NOT NULL COMMENT '移库单状态(0:录入,1:待确认,2:转拨完成,3:转拨拒绝,4:撤销完成)',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `out_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发货时间',
  `in_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入货时间',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商id',
  `store_type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '仓库类型id',
  PRIMARY KEY (`move_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='移库单信息表'");
E_D("replace into `ecs_store_move` values('1','27','16','1','1','2','1437687737','1437687800','1437687815','0','0');");
E_D("replace into `ecs_store_move` values('2','27','17','1','1','2','1437687838','1437688143','1437688165','0','0');");
E_D("replace into `ecs_store_move` values('3','27','18','1','1','2','1437687904','1437688139','1437688161','0','0');");
E_D("replace into `ecs_store_move` values('4','27','19','1','1','2','1437688073','1437688135','1437688157','0','0');");
E_D("replace into `ecs_store_move` values('5','27','20','1','1','2','1437688098','1437688131','1437688153','0','0');");
E_D("replace into `ecs_store_move` values('6','27','21','1','1','2','1437688120','1437688127','1437688149','0','0');");
E_D("replace into `ecs_store_move` values('7','26','25','1','1','2','1437688940','1437689222','1437689330','0','0');");
E_D("replace into `ecs_store_move` values('8','26','27','1','1','2','1437688957','1437689218','1437689326','0','0');");
E_D("replace into `ecs_store_move` values('9','26','24','1','1','2','1437689025','1437689213','1437689322','0','0');");
E_D("replace into `ecs_store_move` values('10','26','23','1','1','2','1437689059','1437689210','1437689318','0','0');");
E_D("replace into `ecs_store_move` values('11','26','22','1','1','2','1437689079','1437689205','1437689313','0','0');");
E_D("replace into `ecs_store_move` values('12','26','21','1','1','2','1437689120','1437689202','1437689310','0','0');");
E_D("replace into `ecs_store_move` values('13','26','20','1','1','2','1437689141','1437689198','1437689306','0','0');");
E_D("replace into `ecs_store_move` values('15','26','19','1','1','2','1437689213','1437689227','1437689303','0','0');");
E_D("replace into `ecs_store_move` values('16','26','17','1','1','2','1437689231','1437689236','1437689300','0','0');");
E_D("replace into `ecs_store_move` values('17','26','16','1','1','2','1437689247','1437689252','1437689296','0','0');");
E_D("replace into `ecs_store_move` values('18','36','37','6','6','2','1437690664','1437690688','1437690736','6','6');");
E_D("replace into `ecs_store_move` values('19','36','38','6','6','2','1437690751','1437690759','1437690767','6','6');");

require("../../inc/footer.php");
?>