<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_store_inout_note`;");
E_C("CREATE TABLE `ecs_store_inout_note` (
  `note_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inout_rec_id` int(10) unsigned NOT NULL COMMENT '对应表格ecs_store_inout_list里的rec_id字段',
  `adminer_id` smallint(5) unsigned NOT NULL,
  `action_val` varchar(255) NOT NULL COMMENT '保存“操作说明（如：提交审核）”',
  `inout_status` tinyint(1) unsigned NOT NULL,
  `inout_note` varchar(255) NOT NULL,
  `add_time` int(10) unsigned NOT NULL,
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '入驻商店铺id',
  `store_type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '仓库类型id',
  PRIMARY KEY (`note_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_store_inout_note` values('1','2','1','提交审核','2','请审核','1437687349','0','0');");
E_D("replace into `ecs_store_inout_note` values('2','2','1','审核备注','3','通过','1437687359','0','0');");
E_D("replace into `ecs_store_inout_note` values('3','1','1','提交审核','2','请审核','1437687366','0','0');");
E_D("replace into `ecs_store_inout_note` values('4','1','1','审核备注','3','审核通过','1437687375','0','0');");
E_D("replace into `ecs_store_inout_note` values('5','3','1','提交审核','2','请审核','1437687642','0','0');");
E_D("replace into `ecs_store_inout_note` values('6','3','1','审核备注','3','审核通过','1437687649','0','0');");
E_D("replace into `ecs_store_inout_note` values('7','4','1','转拨出库单提交备注','3','提交','1437687800','0','0');");
E_D("replace into `ecs_store_inout_note` values('8','5','1','转拨入库单通过备注','3','入库通过','1437687815','0','0');");
E_D("replace into `ecs_store_inout_note` values('9','10','1','转拨出库单提交备注','3','','1437688127','0','0');");
E_D("replace into `ecs_store_inout_note` values('10','9','1','转拨出库单提交备注','3','','1437688131','0','0');");
E_D("replace into `ecs_store_inout_note` values('11','8','1','转拨出库单提交备注','3','','1437688135','0','0');");
E_D("replace into `ecs_store_inout_note` values('12','7','1','转拨出库单提交备注','3','','1437688139','0','0');");
E_D("replace into `ecs_store_inout_note` values('13','6','1','转拨出库单提交备注','3','','1437688143','0','0');");
E_D("replace into `ecs_store_inout_note` values('14','11','1','转拨入库单通过备注','3','','1437688149','0','0');");
E_D("replace into `ecs_store_inout_note` values('15','12','1','转拨入库单通过备注','3','','1437688153','0','0');");
E_D("replace into `ecs_store_inout_note` values('16','13','1','转拨入库单通过备注','3','','1437688157','0','0');");
E_D("replace into `ecs_store_inout_note` values('17','14','1','转拨入库单通过备注','3','','1437688161','0','0');");
E_D("replace into `ecs_store_inout_note` values('18','15','1','转拨入库单通过备注','3','','1437688165','0','0');");
E_D("replace into `ecs_store_inout_note` values('19','16','1','提交审核','2','','1437688516','0','0');");
E_D("replace into `ecs_store_inout_note` values('20','17','1','提交审核','2','','1437688519','0','0');");
E_D("replace into `ecs_store_inout_note` values('21','18','1','提交审核','2','','1437688523','0','0');");
E_D("replace into `ecs_store_inout_note` values('22','18','1','审核备注','3','','1437688527','0','0');");
E_D("replace into `ecs_store_inout_note` values('23','17','1','审核备注','3','','1437688531','0','0');");
E_D("replace into `ecs_store_inout_note` values('24','16','1','审核备注','3','','1437688535','0','0');");
E_D("replace into `ecs_store_inout_note` values('25','19','1','提交审核','2','请审核','1437688801','0','0');");
E_D("replace into `ecs_store_inout_note` values('26','19','1','审核备注','3','通过','1437688809','0','0');");
E_D("replace into `ecs_store_inout_note` values('27','27','1','转拨出库单提交备注','3','','1437689194','0','0');");
E_D("replace into `ecs_store_inout_note` values('28','26','1','转拨出库单提交备注','3','','1437689198','0','0');");
E_D("replace into `ecs_store_inout_note` values('29','25','1','转拨出库单提交备注','3','','1437689202','0','0');");
E_D("replace into `ecs_store_inout_note` values('30','24','1','转拨出库单提交备注','3','','1437689205','0','0');");
E_D("replace into `ecs_store_inout_note` values('31','23','1','转拨出库单提交备注','3','','1437689210','0','0');");
E_D("replace into `ecs_store_inout_note` values('32','22','1','转拨出库单提交备注','3','','1437689213','0','0');");
E_D("replace into `ecs_store_inout_note` values('33','21','1','转拨出库单提交备注','3','','1437689218','0','0');");
E_D("replace into `ecs_store_inout_note` values('34','20','1','转拨出库单提交备注','3','','1437689222','0','0');");
E_D("replace into `ecs_store_inout_note` values('35','28','1','转拨出库单提交备注','3','','1437689227','0','0');");
E_D("replace into `ecs_store_inout_note` values('36','29','1','转拨出库单提交备注','3','','1437689236','0','0');");
E_D("replace into `ecs_store_inout_note` values('37','30','1','转拨出库单提交备注','3','','1437689252','0','0');");
E_D("replace into `ecs_store_inout_note` values('38','31','1','转拨入库单通过备注','3','','1437689296','0','0');");
E_D("replace into `ecs_store_inout_note` values('39','32','1','转拨入库单通过备注','3','','1437689300','0','0');");
E_D("replace into `ecs_store_inout_note` values('40','33','1','转拨入库单通过备注','3','','1437689303','0','0');");
E_D("replace into `ecs_store_inout_note` values('41','34','1','转拨入库单通过备注','3','','1437689306','0','0');");
E_D("replace into `ecs_store_inout_note` values('42','35','1','转拨入库单通过备注','3','','1437689310','0','0');");
E_D("replace into `ecs_store_inout_note` values('43','36','1','转拨入库单通过备注','3','','1437689313','0','0');");
E_D("replace into `ecs_store_inout_note` values('44','37','1','转拨入库单通过备注','3','','1437689318','0','0');");
E_D("replace into `ecs_store_inout_note` values('45','38','1','转拨入库单通过备注','3','','1437689322','0','0');");
E_D("replace into `ecs_store_inout_note` values('46','39','1','转拨入库单通过备注','3','','1437689326','0','0');");
E_D("replace into `ecs_store_inout_note` values('47','40','1','转拨入库单通过备注','3','','1437689330','0','0');");
E_D("replace into `ecs_store_inout_note` values('48','41','6','提交审核','2','请审批','1437690555','6','6');");
E_D("replace into `ecs_store_inout_note` values('49','41','6','审核备注','3','可快速审核','1437690561','6','6');");
E_D("replace into `ecs_store_inout_note` values('50','42','6','转拨出库单提交备注','3','','1437690688','6','0');");
E_D("replace into `ecs_store_inout_note` values('51','43','6','转拨入库单通过备注','3','审核通过','1437690736','6','0');");
E_D("replace into `ecs_store_inout_note` values('52','44','6','转拨出库单提交备注','3','','1437690759','6','0');");
E_D("replace into `ecs_store_inout_note` values('53','45','6','转拨入库单通过备注','3','','1437690767','6','0');");
E_D("replace into `ecs_store_inout_note` values('54','48','1','提交审核','2','00','1446969903','0','0');");
E_D("replace into `ecs_store_inout_note` values('55','48','1','审核备注','3','00','1446969913','0','0');");

require("../../inc/footer.php");
?>