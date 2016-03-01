<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_tag`;");
E_C("CREATE TABLE `ecs_goods_tag` (
  `tag_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) NOT NULL DEFAULT '0',
  `tag_name` varchar(100) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `is_user` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_tag` values('4','51','','1','0');");

require("../../inc/footer.php");
?>