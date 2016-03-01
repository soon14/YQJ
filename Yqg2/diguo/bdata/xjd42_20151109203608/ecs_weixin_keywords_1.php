<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_keywords`;");
E_C("CREATE TABLE `ecs_weixin_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(30) NOT NULL,
  `keys` varchar(100) NOT NULL,
  `jf_type` int(11) NOT NULL,
  `jf_num` int(11) NOT NULL,
  `jf_maxnum` int(11) NOT NULL,
  `keyname` varchar(100) NOT NULL,
  `clicks` int(11) NOT NULL,
  `diy_type` int(11) NOT NULL,
  `diy_value` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_keywords` values('1','','','0','0','0','','0','1','article_131');");
E_D("replace into `ecs_weixin_keywords` values('2','1','1','0','0','0','1','0','1','article_132');");

require("../../inc/footer.php");
?>