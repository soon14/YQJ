<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_user`;");
E_C("CREATE TABLE `ecs_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_user` values('1','admin','admin@admin.com','79bddbc3879c1e132379a235c5c4c6b4','4264','1388476833','1447072155','139.205.50.15','all','用户晒单|shaidan.php?act=list,供货商申请列表|supplier.php?act=list,店铺街列表|supplier_street.php?act=list','','0','0','。。','0');");
E_D("replace into `ecs_admin_user` values('22','ceshi','ces2326@163.com','c182ef208c4d329e08d62c1542f2f0c7','197','1447002121','1447070745','110.85.12.124','tag_manage,goods_auto,virualcard,picture_batch,goods_export,goods_batch,gen_goods_script,shaidan_manage,shophelp_manage,vote_priv,article_auto,logs_manage,logs_drop,agency_manage,suppliers_manage,role_manage,ship_manage,payment,shiparea_manage,area_manage,affiliate,affiliate_ck,sitemap,reg_fields,order_os_edit,order_ss_edit,order_view,order_view_finished,booking,sale_order_stats,client_flow_stats,delivery_view,back_view,topic_manage,snatch_manage,ad_manage,gift_manage,card_manage,pack,bonus_manage,auction,group_by,favourable,whole_sale,package_manage,exchange_goods,takegoods_list,takegoods_order,sms_send,supplier_manage,supplier_rank,supplier_rebate,inout_in_manage,inout_out_manage,store_inout_goods,store_inout_stock,pickup_point_manage,pickup_point_batch','用户晒单|shaidan.php?act=list,供货商申请列表|supplier.php?act=list,店铺街列表|supplier_street.php?act=list','','0','0',NULL,'0');");

require("../../inc/footer.php");
?>