<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_qcode`;");
E_C("CREATE TABLE `ecs_weixin_qcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `content` varchar(100) NOT NULL,
  `qcode` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_qcode` values('1','1','567','gQHd8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzZFejM0cERsRmkxdmV4VEk3R0NsAAIE+88aUwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('2','2','1','gQFX8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0YwenV1WDdsSEMxbE1ldUE5V0NsAAIEVdAaUwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('3','1','567','gQFz8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1RrejJCczNsR2kxalpMSWg3V0NsAAIELOMaUwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('4','4','17','gQGy8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2xEbkRJT1RsdmZyRURWbUxWUlZEAAIEvyXAVQMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('5','4','21','gQGR8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL1BUbnZmb0hscnZyWG4tRHFlUlZEAAIEgv/CVQMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('6','4','23','gQGl8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2hEbU5RLS1seHZxLVpVbmRHeFZEAAIE7v/CVQMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('7','3','test','gQG58DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL21UbS03b0xsOVBxTnFGUndLUlZEAAIEBADDVQMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('8','4','16','gQFR8DoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL29qbXM5WTNsNHZxYmgyOXVPaFZEAAIEJADDVQMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('9','4','25','');");

require("../../inc/footer.php");
?>