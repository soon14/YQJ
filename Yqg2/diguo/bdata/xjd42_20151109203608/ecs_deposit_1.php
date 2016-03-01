<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_deposit`;");
E_C("CREATE TABLE `ecs_deposit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deposit_money` decimal(10,2) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `bank_account` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `add_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>