<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_inout_type`;");
E_C("CREATE TABLE `ecs_store_inout_type` (
  `type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL,
  `in_out` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1：表示出库 2：表示入库',
  `is_valid` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_noedit` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `supplier_id` int(10) NOT NULL DEFAULT '0' COMMENT '入驻商店铺id',
  `store_type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '仓库类型id',
  PRIMARY KEY (`type_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_store_inout_type` values('1','关联销售订单出库','1','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('2','订单预定出库','1','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('3','退货入库  ','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('4','换货入库','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('5','取消发货入库','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('6','取消订单预定入库','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('7','订单商品操作入库','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('8','订单商品操作出库','1','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('12','转拨出库','1','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('13','转拨入库','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('14','转拨撤销后入库','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('15','订单指库入库','2','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('16','订单指库出库','1','1','1','-1','0');");
E_D("replace into `ecs_store_inout_type` values('18','商城进货','2','1','0','6','6');");

require("../../inc/footer.php");
?>