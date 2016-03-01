<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_main_rebate`;");
E_C("CREATE TABLE `ecs_store_main_rebate` (
  `store_rebate_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `store_id` int(10) unsigned NOT NULL COMMENT '仓库id',
  `rebate` tinyint(3) unsigned NOT NULL COMMENT '佣金比例数',
  `store_rebate_paytime` tinyint(1) NOT NULL DEFAULT '0' COMMENT '仓库的结算日期',
  `company` varchar(100) NOT NULL COMMENT '分销商(仓库方)名称',
  `country` smallint(5) unsigned NOT NULL COMMENT '国家',
  `province` smallint(5) unsigned NOT NULL COMMENT '省',
  `city` smallint(5) unsigned NOT NULL COMMENT '市',
  `district` smallint(5) unsigned NOT NULL COMMENT '县/区',
  `address` varchar(255) NOT NULL COMMENT '详细地址',
  `mobile` varchar(50) NOT NULL COMMENT '手机号',
  `bank_name` varchar(100) NOT NULL COMMENT '银行名称',
  `bank_number` varchar(50) NOT NULL COMMENT '银行帐号',
  `alipay_number` varchar(50) NOT NULL COMMENT '支付宝帐号',
  `store_money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '分销商(仓库)佣金数',
  PRIMARY KEY (`store_rebate_id`),
  UNIQUE KEY `store_id` (`store_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='仓库佣金信息表'");
E_D("replace into `ecs_store_main_rebate` values('1','1','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('2','2','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('3','3','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('4','4','100','4','秦皇岛海港区代理','1','10','145','1194','海港区','15032361111','中国建设银行秦皇岛海港区支行','2222222222','132222222','0.00');");
E_D("replace into `ecs_store_main_rebate` values('5','5','90','3','秦皇岛山海关代理','1','10','145','1195','山海关区','13211111111','中国建设银行秦皇岛山海关支行','2222222222','132222222','0.00');");
E_D("replace into `ecs_store_main_rebate` values('6','6','100','2','秦皇岛北戴河代理','1','10','145','1196','北戴河区','15032361122','中国工商银行秦皇岛北戴河支行','222222222211','13222222222','0.00');");
E_D("replace into `ecs_store_main_rebate` values('7','7','100','2','石家庄桥西代理','1','10','138','1080','XXXXXXXX','18712345678','中国工商银行石家庄桥西支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('8','8','100','2','石家庄桥东代理','1','10','138','1079','XXXXXXXX','18712345678','中国工商银行石家庄桥东支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('9','9','100','2','石家庄长安代理','1','10','138','1078','XXXXXXXX','18712345678','中国工商银行石家庄长安支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('10','10','100','2','保定代理','1','10','139','1102','XXXXXXXX','18712345678','中国工商银行保定支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('11','11','100','2','承德代理','1','10','141','1143','XXXXXXXX','18712345678','中国工商银行承德支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('12','12','100','2','沧州代理','1','10','140','1127','XXXXXXXX','18712345678','中国工商银行沧州支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('13','13','100','2','邯郸代理','1','10','142','1154','XXXXXXXX','18712345678','中国工商银行邯郸支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('14','14','100','2','衡水代理','1','10','143','1173','区政府','18712345678','中国工商银行衡水支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('15','15','100','2','唐山代理','1','10','146','1205','XXXXXXXX','18712345678','唐山支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('16','28','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('17','29','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('18','30','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('19','31','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('20','32','0','1','','0','0','0','0','','','','','','0.00');");
E_D("replace into `ecs_store_main_rebate` values('21','33','90','2','秦皇岛总代理','1','10','145','1194','XXXXXXXX','18712345678','中国工商银行秦皇岛支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('22','34','90','2','石家庄总代理','1','10','138','1078','XXXXXXXX','18712345678','中国工商银行石家庄支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('23','35','90','2','衡水代理','1','10','143','1173','XXXXXXXX','18712345678','中国工商银行衡水支行','2222222222','18712345678','0.00');");
E_D("replace into `ecs_store_main_rebate` values('24','39','0','1','','0','0','0','0','','','','','','0.00');");

require("../../inc/footer.php");
?>