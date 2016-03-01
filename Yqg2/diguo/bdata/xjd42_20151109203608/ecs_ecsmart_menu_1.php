<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ecsmart_menu`;");
E_C("CREATE TABLE `ecs_ecsmart_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `menu_img` varchar(255) NOT NULL,
  `menu_url` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ecsmart_menu` values('1','全部商品','images/201511/1446817839707765247.png','catalog.php','1');");
E_D("replace into `ecs_ecsmart_menu` values('2','店铺街','images/201511/1446817860722759542.png','stores.php','2');");
E_D("replace into `ecs_ecsmart_menu` values('3','品牌街','images/201511/1446817887595483858.png','brand.php','3');");
E_D("replace into `ecs_ecsmart_menu` values('4','优惠活动','images/201511/1446817910406176990.png','activity.php','4');");
E_D("replace into `ecs_ecsmart_menu` values('5','团购','images/201511/1446817955747817623.png','pro_search.php','5');");
E_D("replace into `ecs_ecsmart_menu` values('6','积分商城','images/201511/1446817976043662660.png','exchange.php','6');");
E_D("replace into `ecs_ecsmart_menu` values('7','购物车','images/201511/1446817995676507752.png','flow.php','7');");
E_D("replace into `ecs_ecsmart_menu` values('8','个人中心','images/201511/1446818014731737697.png','user.php','8');");

require("../../inc/footer.php");
?>