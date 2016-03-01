<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_corn`;");
E_C("CREATE TABLE `ecs_weixin_corn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `createtime` int(11) NOT NULL,
  `sendtime` int(11) NOT NULL,
  `issend` tinyint(4) NOT NULL COMMENT '0未发送1成功2失败',
  `ecuid` int(11) NOT NULL COMMENT '系统用户ID',
  `sendtype` tinyint(1) NOT NULL COMMENT '0单人1所有',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_corn` values('1','a:3:{s:6:\"touser\";s:0:\"\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:6:\"测试\";}}','1442975255','1442975255','2','0','1');");
E_D("replace into `ecs_weixin_corn` values('2','a:3:{s:6:\"touser\";s:0:\"\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:0:\"\";}}','1442975323','1442975323','2','0','1');");
E_D("replace into `ecs_weixin_corn` values('3','a:3:{s:6:\"touser\";s:0:\"\";s:7:\"msgtype\";s:4:\"news\";s:4:\"news\";a:1:{s:8:\"articles\";a:1:{i:0;a:5:{s:10:\"article_id\";s:2:\"46\";s:5:\"title\";s:15:\"注册新会员\";s:7:\"content\";s:0:\"\";s:11:\"description\";s:0:\"\";s:8:\"file_url\";s:0:\"\";}}}}','1442975652','1442975652','2','0','1');");
E_D("replace into `ecs_weixin_corn` values('4','a:3:{s:6:\"touser\";s:28:\"oh719wp0nvhG_VH7siahRWHz38lA\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:4:\"test\";}}','1442977812','1442977812','0','27','0');");
E_D("replace into `ecs_weixin_corn` values('5','a:3:{s:6:\"touser\";s:28:\"oh719wgwc5tPRNCYo9T71We6TJ9k\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:59:\"订单2015092337770分成，您得到的分成金额为3.89\";}}','1442996091','1442996091','2','21','1');");
E_D("replace into `ecs_weixin_corn` values('6','a:3:{s:6:\"touser\";s:28:\"oh719wiHjf40T7L8V4cPUIDyvLZI\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:59:\"订单2015092313851分成，您得到的分成金额为3.89\";}}','1442996999','1442996999','2','23','1');");
E_D("replace into `ecs_weixin_corn` values('7','a:3:{s:6:\"touser\";s:28:\"oh719wgwc5tPRNCYo9T71We6TJ9k\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:59:\"订单2015092313851分成，您得到的分成金额为1.94\";}}','1442996999','1442996999','2','21','1');");

require("../../inc/footer.php");
?>