<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_config`;");
E_C("CREATE TABLE `ecs_weixin_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `token` varchar(60) NOT NULL,
  `appid` varchar(60) NOT NULL,
  `appsecret` varchar(60) NOT NULL,
  `followmsg` varchar(255) NOT NULL,
  `helpmsg` varchar(255) NOT NULL,
  `bindmsg` varchar(255) NOT NULL,
  `bonustype` int(11) NOT NULL COMMENT '绑定赠送红包类型',
  `bonustype2` tinyint(4) NOT NULL COMMENT '关注红包',
  `buynotice` tinyint(4) NOT NULL COMMENT '开启下单提醒',
  `sendnotice` tinyint(4) NOT NULL COMMENT '开启发货提醒',
  `access_token` varchar(50) NOT NULL,
  `expire_in` int(11) NOT NULL,
  `buymsg` varchar(200) NOT NULL COMMENT '下单提醒内容',
  `sendmsg` varchar(200) NOT NULL COMMENT '发货提醒内容',
  `reg_type` int(11) NOT NULL COMMENT '1关注注册2邮箱注册3邮箱+密码4用户名注册5用户名+密码注册6手机注册7手机+密码注册',
  `reg_notice` varchar(200) NOT NULL COMMENT '注册引导提示',
  `wap_url` varchar(30) NOT NULL,
  `auto_reply` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_config` values('1','商之翼网络','','','','感谢亲关注 小京东V 4.2 ','helpmsg','恭喜您绑定成功！    欢迎光临，祝您购物愉快！','0','0','1','1','','0','恭喜你订单提交成功！','您购买的商品（订单号：\$order_sn）已经发货请注意查收！快递号：\$shoping_code','1','请填写你的邮箱和密码，使用+分割。','','我是小京东4.2的小助手哦');");

require("../../inc/footer.php");
?>