<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_tag`;");
E_C("CREATE TABLE `ecs_supplier_tag` (
  `tag_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(30) NOT NULL DEFAULT '',
  `is_groom` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '是否首页热门店铺推荐',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='自定义店铺标签'");
E_D("replace into `ecs_supplier_tag` values('1','最热店铺','1','1');");
E_D("replace into `ecs_supplier_tag` values('2','推荐店铺','1','2');");
E_D("replace into `ecs_supplier_tag` values('3','今日上新','1','3');");

require("../../inc/footer.php");
?>