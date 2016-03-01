<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_supplier_shop_config`;");
E_C("CREATE TABLE `ecs_supplier_shop_config` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `supplier_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`supplier_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_supplier_shop_config` values('123','1','shop_index_num','textarea','','','8\r\n6\r\n4','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('122','1','shop_reg_closed','hidden','1,0','','0','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('121','1','shop_notice','textarea','','','商家店铺介绍:欢迎光临手机网,我们的宗旨：诚信经营、服务客户！\r\n<MARQUEE onmouseover=this.stop() onmouseout=this.start() \r\nscrollAmount=3><U><FONT color=red>\r\n<P>咨询电话010-10124444  010-21252454 8465544</P></FONT></U></MARQUEE>','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('120','1','user_notice','hidden','','','用户中心公告！','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('119','1','licensed','hidden','0,1','','1','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('118','1','shop_logo','file','','../themes/{\$template}/images/','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('117','1','close_comment','hidden','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('116','1','shop_closed','select','0,1','','0','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('115','1','service_phone','text','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('108','1','shop_address','text','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('109','1','qq','text','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('110','1','ww','text','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('111','1','skype','hidden','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('112','1','ym','hidden','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('113','1','msn','hidden','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('114','1','service_email','text','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('107','1','shop_city','manual','','','0','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('106','1','shop_province','manual','','','0','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('105','1','shop_country','manual','','','1','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('104','1','shop_keywords','text','','','商家店铺关键字','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('103','1','shop_desc','hidden','','','商家店铺描述','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('102','1','shop_title','text','','','商家店铺标题','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('101','1','shop_name','text','','','商家店铺名称','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('8','0','sms','group','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('2','0','hidden','hidden','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('1','0','shop_info','group','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('124','1','shop_search_price','textarea','','','0-1000元\r\n1000-2000元\r\n2000-4000元','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('125','1','close_comment','textarea','','','该店铺正在装修','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('201','2','shop_header_color','hidden','','','#E4368F','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('202','2','shop_header_text','hidden','','','请上传logo和banner','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('203','2','template','hidden','','','dianpu','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('204','2','stylename','hidden','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('205','2','flash_theme','hidden','','','admin84','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('801','8','sms_shop_mobile','text','','','','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('802','8','sms_order_placed','select','1,0','','0','0','4');");
E_D("replace into `ecs_supplier_shop_config` values('803','8','sms_order_payed','select','1,0','','0','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('804','8','sms_order_shipped','select','1,0','','0','1','4');");
E_D("replace into `ecs_supplier_shop_config` values('1','0','shop_info','group','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('2','0','hidden','hidden','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('8','0','sms','group','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('101','1','shop_name','text','','','测试店铺','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('102','1','shop_title','text','','','测试店铺','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('103','1','shop_desc','hidden','','','商家店铺描述','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('104','1','shop_keywords','text','','','店铺','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('105','1','shop_country','manual','','','1','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('106','1','shop_province','manual','','','10','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('107','1','shop_city','manual','','','145','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('108','1','shop_address','text','','','建设大街','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('109','1','qq','text','','','39035000','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('110','1','ww','text','','','dyyh999','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('111','1','skype','hidden','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('112','1','ym','hidden','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('113','1','msn','hidden','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('114','1','service_email','text','','','test@163.com','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('115','1','service_phone','text','','','88888888','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('116','1','shop_closed','select','0,1','','0','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('117','1','close_comment','hidden','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('118','1','shop_logo','file','','../themes/{\$template}/images/','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('119','1','licensed','hidden','0,1','','1','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('120','1','user_notice','hidden','','','用户中心公告！','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('121','1','shop_notice','textarea','','','商家店铺介绍:欢迎光临,我们的宗旨：诚信经营、服务客户！','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('122','1','shop_reg_closed','hidden','1,0','','0','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('123','1','shop_index_num','textarea','','','8\r\n6\r\n4','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('124','1','shop_search_price','textarea','','','0-1000元\r\n1000-2000元\r\n2000-4000元','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('125','1','close_comment','textarea','','','该店铺正在装修','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('201','2','shop_header_color','hidden','','','#E4368F','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('202','2','shop_header_text','hidden','','','<p style=\"text-align: center\"><img src=\"http://127.0.0.4/includes/ueditor/php/../../../bdimages/upload1/20151106/1446823510552571.png\" title=\"Image 3.png\"/></p><p><br/></p>','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('203','2','template','hidden','','','dianpu4','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('204','2','stylename','hidden','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('205','2','flash_theme','hidden','','','test10','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('801','8','sms_shop_mobile','text','','','','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('802','8','sms_order_placed','select','1,0','','0','0','10');");
E_D("replace into `ecs_supplier_shop_config` values('803','8','sms_order_payed','select','1,0','','0','1','10');");
E_D("replace into `ecs_supplier_shop_config` values('804','8','sms_order_shipped','select','1,0','','0','1','10');");

require("../../inc/footer.php");
?>