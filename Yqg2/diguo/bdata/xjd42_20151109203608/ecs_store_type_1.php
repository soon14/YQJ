<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_type`;");
E_C("CREATE TABLE `ecs_store_type` (
  `supplier_id` int(10) unsigned NOT NULL COMMENT '入驻商店铺id',
  `type` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '0,运营商仓库;大于0,入驻商自己仓库',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否启用',
  UNIQUE KEY `supplier_id` (`supplier_id`,`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_store_type` values('1','0','1');");
E_D("replace into `ecs_store_type` values('6','6','1');");

require("../../inc/footer.php");
?>