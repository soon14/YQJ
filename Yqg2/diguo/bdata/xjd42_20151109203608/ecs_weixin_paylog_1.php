<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_paylog`;");
E_C("CREATE TABLE `ecs_weixin_paylog` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `log` text NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>