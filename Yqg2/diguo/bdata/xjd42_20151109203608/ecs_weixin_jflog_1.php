<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_jflog`;");
E_C("CREATE TABLE `ecs_weixin_jflog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fake_id` varchar(32) NOT NULL,
  `jf_type` int(11) NOT NULL COMMENT '1 一次性赠送 2按日计算',
  `key_id` int(11) NOT NULL COMMENT '命令ID',
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `num` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fake_id` (`fake_id`),
  KEY `createymd` (`createymd`),
  KEY `key_id` (`key_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>