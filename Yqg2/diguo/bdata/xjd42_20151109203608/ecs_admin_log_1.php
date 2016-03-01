<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=486 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('455','1446963677','1','编辑商店设置: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('456','1446963716','1','编辑商店设置: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('457','1446966684','1','批量回收商品: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('458','1446966697','1','批量删除商品: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('459','1446967408','1','编辑商品: 娃哈哈小陈陈青梅陈皮植物饮品350ml/瓶 饮料无添加','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('460','1446967503','1','批量回收商品: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('461','1446967511','1','批量回收商品: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('462','1446967523','1','批量回收商品: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('463','1446967533','1','批量回收商品: ','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('464','1446967543','1','编辑商品: 奇居良品 欧式家居装饰摆件 可莉尔裂纹贴花陶瓷水果盘','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('465','1446967555','1','编辑商品: 可爱卡通餐盘水果盘点心盘 盘子儿童托盘餐具6件套','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('466','1446967568','1','编辑商品: 304不锈钢宝宝分格餐盘 儿童餐具分隔格碗餐盘婴儿盘','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('467','1446967610','1','编辑商品: 亨氏 (Heinz) 甜嫩玉米泥 113g','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('468','1446968432','1','编辑商品: 佳沛新西兰绿奇异果36个（原装）进口Zespri猕猴桃 新鲜水果准妈妈爱吃','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('469','1446968445','1','编辑商品: 美国空运车厘子 新鲜水果进口大樱桃 2斤装','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('470','1446968456','1','编辑商品: 佳沛新西兰阳光金奇异果12个/进口猕猴桃/新鲜水果','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('471','1446969568','1','添加会员账号: 39035000','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('472','1446969707','1','编辑: [146]','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('473','1446972236','1','卸载配送方式: 门店自提','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('474','1446972241','1','卸载配送方式: 顺丰速运','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('475','1446972247','1','卸载配送方式: 申通快递','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('476','1446972251','1','卸载配送方式: 同城快递','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('477','1446972255','1','卸载配送方式: 圆通速递','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('478','1446972260','1','卸载配送方式: 中通速递','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('479','1446972265','1','安装配送方式: 顺丰速运','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('480','1446972302','1','添加配送区域: 测试','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('481','1446972340','1','编辑支付方式: 货到付款','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('482','1446972411','1','编辑支付方式: 支付宝','139.205.65.135');");
E_D("replace into `ecs_admin_log` values('483','1447002205','1','编辑权限管理: ceshi','139.205.50.15');");
E_D("replace into `ecs_admin_log` values('484','1447037686','22','编辑支付方式: 微信支付','58.19.230.70');");
E_D("replace into `ecs_admin_log` values('485','1447057154','22','添加: 北京小北京','27.156.103.88');");

require("../../inc/footer.php");
?>