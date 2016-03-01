<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=297 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('8','31853','15','米色','');");
E_D("replace into `ecs_goods_attr` values('9','31853','15','棕色','');");
E_D("replace into `ecs_goods_attr` values('10','31853','16','S','');");
E_D("replace into `ecs_goods_attr` values('11','31853','16','M','');");
E_D("replace into `ecs_goods_attr` values('12','31853','16','XL','');");
E_D("replace into `ecs_goods_attr` values('296','31853','18','欧美','0');");
E_D("replace into `ecs_goods_attr` values('2','31853','20','后拉链','0');");
E_D("replace into `ecs_goods_attr` values('3','31853','23','无袖','0');");
E_D("replace into `ecs_goods_attr` values('4','31853','25','松紧腰','0');");
E_D("replace into `ecs_goods_attr` values('5','31853','26','网纱','0');");
E_D("replace into `ecs_goods_attr` values('6','31853','29','圆点','0');");
E_D("replace into `ecs_goods_attr` values('7','31853','31','A字裙','0');");
E_D("replace into `ecs_goods_attr` values('20','31855','15','白色','');");
E_D("replace into `ecs_goods_attr` values('21','31855','15','粉色','');");
E_D("replace into `ecs_goods_attr` values('22','31855','16','L','');");
E_D("replace into `ecs_goods_attr` values('23','31855','16','XL','');");
E_D("replace into `ecs_goods_attr` values('13','31855','18','甜美','0');");
E_D("replace into `ecs_goods_attr` values('14','31855','20','侧拉链','0');");
E_D("replace into `ecs_goods_attr` values('15','31855','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('16','31855','24','缝制鞋','0');");
E_D("replace into `ecs_goods_attr` values('17','31855','25','高腰','0');");
E_D("replace into `ecs_goods_attr` values('18','31855','29','其他','0');");
E_D("replace into `ecs_goods_attr` values('19','31855','31','A字裙','0');");
E_D("replace into `ecs_goods_attr` values('31','31857','15','蓝色','');");
E_D("replace into `ecs_goods_attr` values('32','31857','15','粉色','');");
E_D("replace into `ecs_goods_attr` values('33','31857','16','XL','');");
E_D("replace into `ecs_goods_attr` values('24','31857','18','优雅','0');");
E_D("replace into `ecs_goods_attr` values('25','31857','20','套筒','0');");
E_D("replace into `ecs_goods_attr` values('26','31857','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('27','31857','24','缝制鞋','0');");
E_D("replace into `ecs_goods_attr` values('28','31857','25','宽松腰','0');");
E_D("replace into `ecs_goods_attr` values('29','31857','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('30','31857','31','百褶裙','0');");
E_D("replace into `ecs_goods_attr` values('37','31859','15','蓝色','');");
E_D("replace into `ecs_goods_attr` values('38','31859','16','XL','');");
E_D("replace into `ecs_goods_attr` values('39','31859','16','XXL','');");
E_D("replace into `ecs_goods_attr` values('34','31859','18','OL','0');");
E_D("replace into `ecs_goods_attr` values('35','31859','23','长袖','0');");
E_D("replace into `ecs_goods_attr` values('36','31859','25','中腰','0');");
E_D("replace into `ecs_goods_attr` values('44','31861','15','白色','');");
E_D("replace into `ecs_goods_attr` values('45','31861','16','XL','');");
E_D("replace into `ecs_goods_attr` values('40','31861','18','文艺','0');");
E_D("replace into `ecs_goods_attr` values('41','31861','23','七分袖','0');");
E_D("replace into `ecs_goods_attr` values('42','31861','25','低腰','0');");
E_D("replace into `ecs_goods_attr` values('43','31861','29','条纹','0');");
E_D("replace into `ecs_goods_attr` values('78','31863','18','休闲','0');");
E_D("replace into `ecs_goods_attr` values('79','31863','23','无袖','0');");
E_D("replace into `ecs_goods_attr` values('80','31863','25','超低腰','0');");
E_D("replace into `ecs_goods_attr` values('81','31863','29','圆点','0');");
E_D("replace into `ecs_goods_attr` values('82','31863','31','一步裙','0');");
E_D("replace into `ecs_goods_attr` values('49','31864','15','米色','');");
E_D("replace into `ecs_goods_attr` values('50','31864','16','L','');");
E_D("replace into `ecs_goods_attr` values('51','31864','16','XL','');");
E_D("replace into `ecs_goods_attr` values('46','31864','18','韩范','0');");
E_D("replace into `ecs_goods_attr` values('47','31864','23','五分袖','0');");
E_D("replace into `ecs_goods_attr` values('48','31864','25','超低腰','0');");
E_D("replace into `ecs_goods_attr` values('55','31865','15','玫红','');");
E_D("replace into `ecs_goods_attr` values('56','31865','16','S','');");
E_D("replace into `ecs_goods_attr` values('57','31865','16','M','');");
E_D("replace into `ecs_goods_attr` values('52','31865','18','名媛','0');");
E_D("replace into `ecs_goods_attr` values('53','31865','25','高腰','0');");
E_D("replace into `ecs_goods_attr` values('54','31865','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('74','31866','18','休闲','0');");
E_D("replace into `ecs_goods_attr` values('75','31866','25','宽松腰','0');");
E_D("replace into `ecs_goods_attr` values('76','31866','29','植物花卉','0');");
E_D("replace into `ecs_goods_attr` values('77','31866','31','公主裙','0');");
E_D("replace into `ecs_goods_attr` values('73','31867','15','白色','');");
E_D("replace into `ecs_goods_attr` values('68','31867','18','淑女','0');");
E_D("replace into `ecs_goods_attr` values('69','31867','23','长袖','0');");
E_D("replace into `ecs_goods_attr` values('70','31867','25','中腰','0');");
E_D("replace into `ecs_goods_attr` values('71','31867','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('72','31867','31','大摆型','0');");
E_D("replace into `ecs_goods_attr` values('63','31868','15','白色','');");
E_D("replace into `ecs_goods_attr` values('64','31868','15','蓝色','');");
E_D("replace into `ecs_goods_attr` values('66','31868','16','S','');");
E_D("replace into `ecs_goods_attr` values('67','31868','16','M','');");
E_D("replace into `ecs_goods_attr` values('58','31868','18','甜美','0');");
E_D("replace into `ecs_goods_attr` values('59','31868','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('60','31868','25','高腰','0');");
E_D("replace into `ecs_goods_attr` values('61','31868','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('62','31868','31','A字裙','0');");
E_D("replace into `ecs_goods_attr` values('85','31870','15','银色','');");
E_D("replace into `ecs_goods_attr` values('86','31870','16','XL','');");
E_D("replace into `ecs_goods_attr` values('83','31870','18','学院','0');");
E_D("replace into `ecs_goods_attr` values('84','31870','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('90','31875','15','粉色','');");
E_D("replace into `ecs_goods_attr` values('91','31875','16','XL','');");
E_D("replace into `ecs_goods_attr` values('87','31875','18','性感','0');");
E_D("replace into `ecs_goods_attr` values('88','31875','24','缝制鞋','0');");
E_D("replace into `ecs_goods_attr` values('89','31875','31','荷叶边裙','0');");
E_D("replace into `ecs_goods_attr` values('114','31910','1','白色','');");
E_D("replace into `ecs_goods_attr` values('115','31910','1','银色','100');");
E_D("replace into `ecs_goods_attr` values('287','31910','2','公开版','0');");
E_D("replace into `ecs_goods_attr` values('189','31910','3','深圳','0');");
E_D("replace into `ecs_goods_attr` values('190','31910','8','苹果（IOS）','0');");
E_D("replace into `ecs_goods_attr` values('288','31910','9','6.0英寸','0');");
E_D("replace into `ecs_goods_attr` values('191','31910','10','1300万像素','0');");
E_D("replace into `ecs_goods_attr` values('192','31910','11','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('193','31910','12','四核','0');");
E_D("replace into `ecs_goods_attr` values('289','31910','14','1920×1152','0');");
E_D("replace into `ecs_goods_attr` values('129','31922','1','金色','');");
E_D("replace into `ecs_goods_attr` values('130','31922','1','银色','100');");
E_D("replace into `ecs_goods_attr` values('291','31922','2','电信4G版','0');");
E_D("replace into `ecs_goods_attr` values('188','31922','3','上海','0');");
E_D("replace into `ecs_goods_attr` values('121','31922','7','2000万-5000万','0');");
E_D("replace into `ecs_goods_attr` values('122','31922','8','苹果（IOS）','0');");
E_D("replace into `ecs_goods_attr` values('123','31922','9','5.5英寸','0');");
E_D("replace into `ecs_goods_attr` values('124','31922','10','1300万像素','0');");
E_D("replace into `ecs_goods_attr` values('125','31922','11','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('126','31922','12','四核','0');");
E_D("replace into `ecs_goods_attr` values('127','31922','13','1.7GHz','0');");
E_D("replace into `ecs_goods_attr` values('290','31922','14','1920×1080','0');");
E_D("replace into `ecs_goods_attr` values('155','31952','1','粉色','');");
E_D("replace into `ecs_goods_attr` values('156','31952','1','黑色','300');");
E_D("replace into `ecs_goods_attr` values('294','31952','2','移动4G版','0');");
E_D("replace into `ecs_goods_attr` values('146','31952','3','广东','0');");
E_D("replace into `ecs_goods_attr` values('147','31952','6','3.0英寸','0');");
E_D("replace into `ecs_goods_attr` values('148','31952','7','1600万以上','0');");
E_D("replace into `ecs_goods_attr` values('149','31952','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('292','31952','9','5.2英寸','0');");
E_D("replace into `ecs_goods_attr` values('151','31952','10','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('152','31952','11','500万像素','0');");
E_D("replace into `ecs_goods_attr` values('153','31952','12','双核','0');");
E_D("replace into `ecs_goods_attr` values('293','31952','14','1334×750','0');");
E_D("replace into `ecs_goods_attr` values('186','31956','1','白色','');");
E_D("replace into `ecs_goods_attr` values('187','31956','1','黑色','');");
E_D("replace into `ecs_goods_attr` values('179','31956','3','云南','0');");
E_D("replace into `ecs_goods_attr` values('180','31956','6','2.7英寸','0');");
E_D("replace into `ecs_goods_attr` values('181','31956','7','1600万以上','0');");
E_D("replace into `ecs_goods_attr` values('182','31956','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('183','31956','9','4.7英寸','0');");
E_D("replace into `ecs_goods_attr` values('184','31956','10','500万像素','0');");
E_D("replace into `ecs_goods_attr` values('185','31956','11','30万像素','0');");
E_D("replace into `ecs_goods_attr` values('220','31964','1','灰色','');");
E_D("replace into `ecs_goods_attr` values('221','31964','1','绿色','');");
E_D("replace into `ecs_goods_attr` values('284','31964','2','电信4G版','0');");
E_D("replace into `ecs_goods_attr` values('216','31964','3','湖南','0');");
E_D("replace into `ecs_goods_attr` values('217','31964','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('285','31964','9','5.2英寸','0');");
E_D("replace into `ecs_goods_attr` values('218','31964','11','200万像素','0');");
E_D("replace into `ecs_goods_attr` values('219','31964','12','八核','0');");
E_D("replace into `ecs_goods_attr` values('286','31964','14','1334×750','0');");
E_D("replace into `ecs_goods_attr` values('233','31971','1','金色','');");
E_D("replace into `ecs_goods_attr` values('234','31971','1','橙黄','');");
E_D("replace into `ecs_goods_attr` values('281','31971','2','联通4G版','0');");
E_D("replace into `ecs_goods_attr` values('228','31971','3','北京','0');");
E_D("replace into `ecs_goods_attr` values('229','31971','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('282','31971','9','5.0英寸','0');");
E_D("replace into `ecs_goods_attr` values('230','31971','10','1300万像素','0');");
E_D("replace into `ecs_goods_attr` values('231','31971','11','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('232','31971','12','双核','0');");
E_D("replace into `ecs_goods_attr` values('283','31971','14','640×960','0');");
E_D("replace into `ecs_goods_attr` values('278','31977','2','联通4G版','0');");
E_D("replace into `ecs_goods_attr` values('253','31977','3','新疆','0');");
E_D("replace into `ecs_goods_attr` values('254','31977','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('279','31977','9','4.7英寸','0');");
E_D("replace into `ecs_goods_attr` values('255','31977','11','200万像素','0');");
E_D("replace into `ecs_goods_attr` values('256','31977','12','四核','0');");
E_D("replace into `ecs_goods_attr` values('280','31977','14','640×960','0');");
E_D("replace into `ecs_goods_attr` values('275','31984','2','购机入网送话费','0');");
E_D("replace into `ecs_goods_attr` values('276','31984','9','4.5英寸','0');");
E_D("replace into `ecs_goods_attr` values('277','31984','14','540×960','0');");
E_D("replace into `ecs_goods_attr` values('261','31988','1','绿色','');");
E_D("replace into `ecs_goods_attr` values('262','31988','1','紫色','');");
E_D("replace into `ecs_goods_attr` values('260','31988','3','福建','0');");
E_D("replace into `ecs_goods_attr` values('269','32016','1','金色','');");
E_D("replace into `ecs_goods_attr` values('270','32016','1','黑色','100');");
E_D("replace into `ecs_goods_attr` values('271','32016','1','绿色','150');");
E_D("replace into `ecs_goods_attr` values('274','32016','2','非合约机','0');");
E_D("replace into `ecs_goods_attr` values('272','32016','9','3.5英寸','0');");
E_D("replace into `ecs_goods_attr` values('273','32016','14','480×854','0');");

require("../../inc/footer.php");
?>