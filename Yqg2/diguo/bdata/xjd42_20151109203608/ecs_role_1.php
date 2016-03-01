<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_role`;");
E_C("CREATE TABLE `ecs_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY (`role_id`),
  KEY `user_name` (`role_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_role` values('1','库管','order_os_edit,order_ss_edit,order_view,order_view_finished,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,inout_in_manage,inout_out_manage,store_inout_goods,store_inout_stock','');");
E_D("replace into `ecs_role` values('2','主管','goods_manage,order_os_edit,order_ps_edit,order_ss_edit,order_edit,order_view,order_view_finished,repay_manage,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,inout_in_manage,inout_out_manage,store_inout_goods,store_inout_stock','');");

require("../../inc/footer.php");
?>