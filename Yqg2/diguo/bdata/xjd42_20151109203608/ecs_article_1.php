<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `click_count` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2','免责条款','','','','','0','1','1291604914','','0','','','0');");
E_D("replace into `ecs_article` values('2','2','隐私保护','','','','','0','1','1291604914','','0','','','0');");
E_D("replace into `ecs_article` values('3','2','咨询热点','','','','','0','1','1291604914','','0','','','0');");
E_D("replace into `ecs_article` values('4','2','联系我们','','','','','0','1','1291604914','','0','','','0');");
E_D("replace into `ecs_article` values('5','2','公司简介','','','','','0','1','1291604914','','0','','','0');");
E_D("replace into `ecs_article` values('6','-1','用户协议','','','','','0','1','1291604914','','0','','','0');");
E_D("replace into `ecs_article` values('9','5','售后流程','','','','','0','1','1242576700','','0','http://','','0');");
E_D("replace into `ecs_article` values('10','5','购物流程','<p><img height=\"4587\" width=\"813\" alt=\"\" src=\"/ec273cn/utf/360buy2013/images/upload/Image/11111.jpg\" /></p>','','','','0','1','1242576717','','0','http://','','4');");
E_D("replace into `ecs_article` values('11','5','订购方式','<p>1、增加用户体验、提高工作效率，高效率就是高收益</p>\r\n<p>2、后台操作时经常迷失在点了哪个分类菜单，现在你不用怕了，选哪个就标注哪个，用了68ecshop模板你还用愁吗？</p>\r\n<p><br />\r\n&nbsp;</p>','','','','0','1','1242576727','','0','http://','','0');");
E_D("replace into `ecs_article` values('92','17','广告通栏1','','','','','0','0','1437343954','data/article/1437442307400141231.jpg','1','http://','','0');");
E_D("replace into `ecs_article` values('93','17','广告通栏2','','','','','0','0','1437343982','data/article/1437442318510034222.jpg','1','http://','','0');");
E_D("replace into `ecs_article` values('15','7','货到付款区域','','','','','0','1','1242577023','','0','http://','','0');");
E_D("replace into `ecs_article` values('16','7','配送支付查询 ','','','','','0','1','1242577032','','0','http://','','0');");
E_D("replace into `ecs_article` values('17','7','支付方式说明','','','','','0','1','1242577041','','0','http://','','0');");
E_D("replace into `ecs_article` values('18','10','常见问题','<p>Q：登录1号店总是无法链接，这是怎么回事？ <br />\r\nA：请您先刷新一下；或者检查一下网络是否正常，能否登录其它网站，如果以上两种方式都无效，还有一种情况是网页正在更新，可能会影响您的浏览，还望能谅解。 <br />\r\nQ：网站上面显示商品已售完请问什么时候可以在到货？ <br />\r\nA：一般补货时间是7-15个工作日，具体还是以网站信息为准。 <br />\r\nQ：此类商品的规格是什么？性能怎样？ <br />\r\nA：具体商品规格参数及性能问题请您关注商品页面信息，也可以联系厂家电话咨询，或者在商品页面下方发表商品咨询，会有专业人员为您解答！ <br />\r\nQ：如何取消订单？ <br />\r\nA：您可以进入&ldquo;我的1号店&mdash;我的订单&rdquo;自行操作订单取消或致电客服中心由客服为您取消订单；如订单已进入配送环节不确保能够拦截成功，配送上门时还请您拒收，感谢您的配合。 <br />\r\nQ：我的积分有什么用途吗？ <br />\r\nA：您可以用积分至1号店&quot;积分商城&quot;频道免费兑换或积分+现金的形式购买特惠专享商品。 <br />\r\n&nbsp;</p>\r\n<p>支付类常见问题&gt;&gt; <br />\r\nQ：如果我选择银行转账，我需要注意什么吗？ <br />\r\nA：如果您选择的是银行转账，请您务必在汇款单的用途栏内注明您的订单号，货款到账时间一般为款汇出后2-5个工作日，收到货款后我们会尽快确认为您发货，9天未付款的订单将被取消，需重新下单。汇款完毕后进入我的订单信息页面填写转账信息。如下图： <br />\r\nQ：我通过网上支付了，为什么订单显示未到款？ <br />\r\nA：请您先查看您的网上银行交易记录（您可以电话联系银行客服、或是通过ATM、银行柜台、登陆个人网上银行等方式查询），确认款项是否成功划出： <br />\r\n●若款项未成功划出，请您在&quot;我的1号店&mdash;&mdash;我的订单&quot;中找到该订单重新支付即可</p>\r\n<p>●若款项已成功划出，请您联系1号店客服处理</p>\r\n<p>Q：为什么我的订单不能选择货到付款？ <br />\r\nA:以下几种情况不支持货到付款的：（1）部分商品属于第三方卖家发货的商品，不支持货到付款；（2）您所在地区不在货到付款配送范围配送类常见问题&gt;&gt; <br />\r\nQ：订单已提交成功，什么时候可以发货？ <br />\r\nA：订单提交成功后我们会尽快发货，详细进度查询，您可进入&ldquo;我的1号店&mdash;我的订单&rdquo;点击&ldquo;跟踪包裹&rdquo;可实时查看订单进度。 <br />\r\nQ：签收时发现商品包装破损，该如何处理？ <br />\r\nA：商品签收时如包装有破损，请您直接拒收；商品签收后如商品本身有问题，请您在&ldquo;我的1号店&mdash;我的订单&rdquo;中提交退换货申请，将有专业售后人员为您解决。 <br />\r\nQ配送费如何收取？ <br />\r\nQ：能否提供配送员的联系电话？ <br />\r\nA：当订单状态显示&ldquo;已发货&rdquo;1号店自配送会在系统中更新配送人员号码；在我的订单----包裹跟踪---包装状态-查询配送员电话。 <br />\r\nQ：订单取消了，还想要，能不能再配送过来？ <br />\r\nA：非常抱歉，订单一旦取消将无法恢复，建议您重新下单购买 <br />\r\nQ：为什么提交订单时系统提示液体无法配送？ <br />\r\nA：液体商品因考虑到运输安全，受公安部门、安检限制，因此无法配送，建议您选择其他途径购买。 <br />\r\n退换货常见问题&gt;&gt; <br />\r\nQ：我想办理退换货如何操作？ <br />\r\nA：1号店为您提供了自助申请退换货的服务，登录后进入&ldquo;我的1号店&mdash;我的订单&rdquo;点击&ldquo;申请退换货&rdquo;自助完成退换货的申请。如下图显示： <br />\r\nQ：我提交了退换货申请想要取消，怎么办？ <br />\r\nA：您可至&ldquo;我的1号店 &mdash; 我的退换货&mdash;我的退换货记录&rdquo;点击&ldquo;取消&rdquo;按钮即可。 <br />\r\nQ：什么样的情况会收取退换货的运费？ <br />\r\nA：因商品质量问题造成的退换货，1号店免费为您提供上门取件或上门换货服务；但因非商品质量问题由客户发起的退换货行为，将由客户承担退换货运费！ <br />\r\n退款类常见问题&gt;&gt; <br />\r\nQ：订单取消成功后多久可以收到退款？ <br />\r\nA：各类型订单退款周期不一样， <br />\r\nQ：礼品卡支付的，款项退到哪里？ <br />\r\nA：礼品卡支付的款项，产生取消、退换货只可退回到您的1号店账户中 <br />\r\n发票类常见问题&gt;&gt; <br />\r\nQ：订单送到了，但没有发票，怎么办？ <br />\r\nA：请您在订单发货后一个月内申请补开发票，可进入&ldquo;我的1号店&mdash;发票管理&rdquo;,点击&rdquo;补开发票&rdquo;进行自助申请，收到您的申请后，我们会通过平信方式寄出。 <br />\r\n账户类常见问题&gt;&gt; <br />\r\nQ：如何增强账户的安全性？ <br />\r\nA：您可以登录1号店账户， 在&ldquo;我的1号店-个人信息管理&rdquo;里，绑定账户手机号码、验证邮箱并及时修改账户密码（高强度密码建议：3种任意组合&mdash;&mdash;字母、数字、标点符号），提高您账户的安全性能。 <br />\r\nQ：如何绑定？ <br />\r\nA：1、验证邮箱：登录1号店&mdash;&mdash;我的1号店&mdash;&mdash;个人信息管理&mdash;&mdash;编辑个人资料&mdash;&mdash;基本信息&mdash;&mdash;验证邮箱&mdash;&mdash;完善个人信息 <br />\r\n2、绑定手机：我的1号店&mdash;&mdash;个人信息管理&mdash;&mdash;手机绑定&mdash;&mdash;绑定手机号码&mdash;&mdash;下一步&mdash;&mdash;输入校验码&mdash;&mdash;完成绑定<br />\r\n&nbsp;<br />\r\n&nbsp;</p>','','','','0','1','1242577127','','0','http://','','0');");
E_D("replace into `ecs_article` values('19','10','交易条款','','','','','0','0','1242577178','','0','user.php?act=collection_list','','0');");
E_D("replace into `ecs_article` values('20','10','订购流程','','','','','0','1','1242577199','','0','user.php?act=order_list','','0');");
E_D("replace into `ecs_article` values('21','8','退换货原则','','','','服务','0','1','1242577293','','0','http://','','0');");
E_D("replace into `ecs_article` values('22','8','售后服务保证 ','','','','售后','0','1','1242577308','','0','http://','','0');");
E_D("replace into `ecs_article` values('23','8','产品质量保证 ','','','','质量','1','0','1242577326','','0','http://','','0');");
E_D("replace into `ecs_article` values('24','9','网站故障报告','','','','','0','1','1242577432','','0','http://','','0');");
E_D("replace into `ecs_article` values('25','9','选机咨询 ','','','','','0','1','1242577448','','0','http://','','0');");
E_D("replace into `ecs_article` values('26','9','投诉与建议 ','','','','','0','1','1242577459','','0','http://','','0');");
E_D("replace into `ecs_article` values('42','8','换货流程','','','','','0','1','1292315950','','0','http://','','0');");
E_D("replace into `ecs_article` values('43','5','商品评价 ','','','','','0','0','1292315998','','0','http://','','0');");
E_D("replace into `ecs_article` values('45','7','订单状态 ','','','','','0','0','1292316056','','0','http://','','0');");
E_D("replace into `ecs_article` values('46','10','注册新会员','','','','','0','1','1292316080','','0','user.php?act=register','','0');");
E_D("replace into `ecs_article` values('47','9','联系方式','','','','','0','0','1292316101','','0','http://','','0');");
E_D("replace into `ecs_article` values('66','10','团购/机票','','','','','0','1','1365745215','','0','http://','','0');");
E_D("replace into `ecs_article` values('67','10','大家电','','','','','0','0','1365745227','','0','http://','','0');");
E_D("replace into `ecs_article` values('68','10','联系客服','','','','','0','1','1365745238','','0','http://','','0');");
E_D("replace into `ecs_article` values('69','7','如何送礼','','','','','0','1','1365745248','','0','http://','','0');");
E_D("replace into `ecs_article` values('70','7','Global Shipping','','','','','0','1','1365745257','','0','http://','','0');");
E_D("replace into `ecs_article` values('71','5','在线支付','','','','','0','1','1365745269','','0','http://','','0');");
E_D("replace into `ecs_article` values('72','5','公司转账','','','','','0','1','1365745280','','0','http://','','0');");
E_D("replace into `ecs_article` values('73','8','退款说明','','','','','0','1','1365745287','','0','http://','','0');");
E_D("replace into `ecs_article` values('74','8','返修/退换货','','','','','0','1','1365745299','','0','http://','','0');");
E_D("replace into `ecs_article` values('75','8','取消订单','','','','','0','0','1365745306','','0','http://','','0');");
E_D("replace into `ecs_article` values('76','9','节能补贴','','','','','0','1','1365745313','','0','http://','','0');");
E_D("replace into `ecs_article` values('77','9','京东礼品卡','','','','','0','1','1365745320','','0','http://','','0');");
E_D("replace into `ecs_article` values('78','19','供货商(入驻商文章标题)','','yaso','yaso@yaso.com','供货商,入驻商','0','1','1401371486','','0','http://www.baidu.com','','0');");
E_D("replace into `ecs_article` values('79','19','商家帮助指南','<p><span style=\"font-size: 12px;\">1、登陆商家管理中心</span></p><p><span style=\"font-size: 12px;\">点击首页的“登陆商家管理中心”链接，进入登陆页面，商家输入自己的用户名密码（此用户名密码与商家在网站注册的用户名密码相同）即可登陆</span></p><p><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../images/image/27991410944317.jpg\" title=\"1.jpg\"/></p><p><span style=\"font-size: 12px;\"><br/></span></p><p><span style=\"font-size: 12px;\">2、</span><span style=\"font-size: 12px;\">店铺基本设置</span></p><p><span style=\"font-size: 12px;\">点击店铺系统设置》店铺基本设置：网店信息</span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\">2.1、填写商店名称、商店标题等基本信息，</span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\">2.2、选择商店所在地址（必填项，否则前台店铺模板会报错），</span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\">2.3、按要求上传店铺logo，大小要求：90 X 54像素</span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\"><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../bdimages/upload1/20140917/1410942893866915.jpg\" title=\"2.jpg\"/></span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\">2.4、设置商店首页商品数量，该数量控制店铺首页精品、新品、热卖的显示数量</span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\">注意：该处不能为空，也不能删除，你可以按照要求修改其显示数量</span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\">2.5、设置全店搜索价格区间，按如图要求的填写，不可为空<br/></span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px;\"><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../images/image/34191410944325.jpg\" title=\"3.jpg\"/></span></p><p><span style=\"font-size: 12px;\">2.6、设置短信发送</span></p><p><span style=\"font-size: 12px;\">填写接收短信的手机号码，选择是否发送短信</span></p><p><span style=\"font-size: 12px;\"><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../images/image/85651410944325.jpg\" title=\"4.jpg\"/></span></p><p><span style=\"font-size: 12px;\"><br/></span></p><p><span style=\"font-size: 12px;\">3、选择模板</span></p><p><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\">点击店铺系统设置》店铺模板选择</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\">可以选择不同风格的模板</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\"><br/></span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\">4、申请店铺街</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\">选择店铺的经营类型，填写店铺名称、标题、描述、标签，上传店铺海报，提交即可。网站方管理员审核通过后就可以在店铺街看到你的店铺展示啦</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\">店铺是否出现在店铺街底部的推荐展示以及店铺的排列顺序请联系网站方协商修改。<br/></span></span></p><p><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../bdimages/upload1/20140917/1410944591861430.jpg\" title=\"5.jpg\"/><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\"></span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-size: 12px;\"><br/></span></span></p><p><span style=\"font-size: 12px;\">5、</span><span style=\"font-size: 12px;\">权限管理</span></p><p><span style=\"font-size: 12px;\">点击权限管理》管理员列表：增加新的管理员，并为其设置权限，选中哪个就拥有哪个权限</span></p><p><span style=\"font-size: 12px;\"><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../images/image/92821410944327.jpg\" title=\"6.jpg\"/></span></p><p><span style=\"font-size: 12px;\"><br/></span></p><p><span style=\"font-size: 12px;\">6、添加商品分类：该商品分类是本店铺的分类</span></p><p><span style=\"font-size: 12px;\"><br/></span></p><p><span style=\"font-size: 12px;\">7、添加商品，提交后等待网站方审核，审核通过后即可上架销售了</span></p><p><span style=\"font-size: 12px;\"><br/></span></p><p><span style=\"font-size: 12px;\">8、管理自己的用户评论和用户晒单</span></p><p><span style=\"font-size: 12px;\"><br/></span></p><p><span style=\"font-size: 12px;\">9、促销管理：增加自己店铺的促销活动以及店铺红包</span></p><p><span style=\"font-size: 12px;\">9.1、促销活动：该促销活动有三种“满X元减Y元”、“满X元打Y折”、“满X元赠送YY、ZZ商品”</span></p><p style=\"text-align: left;\"><span style=\"font-size: 12px; color: rgb(127, 127, 127);\">图 促销活动</span></p><p><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../images/image/54341410944319.jpg\" style=\"float:none;\" title=\"7.jpg\"/></p><p><span style=\"font-size: 12px; color: rgb(0, 0, 0);\">9.2、</span><span style=\"font-size: 12px; color: rgb(0, 0, 0);\">红包类型：该红包类型有四种：“按用户发放”、“按商品发放”、“按订单金额发放”、“线下发放的红包”</span></p><p><span style=\"font-size: 12px; color: rgb(0, 0, 0);\">9.2.1、按用户发放：可以控制该红包发送给哪些会员</span></p><p><span style=\"font-size: 12px; color: rgb(0, 0, 0);\"></span><span style=\"font-size: 12px; color: rgb(127, 127, 127);\"><span style=\"font-size: 12px; color: rgb(0, 0, 0);\">9.2.2、按商品方法：可以控制用户购买哪些商品时可以获得该红包</span></span></p><p><span style=\"font-size: 12px; color: rgb(127, 127, 127);\"><span style=\"font-size: 12px; color: rgb(0, 0, 0);\"><span style=\"font-size: 12px; color: rgb(0, 0, 0);\">9.2.3、按订单金额方法：可以控制用户购买商品满多少元时可以获得该红包</span></span></span></p><p><span style=\"font-size: 12px; color: rgb(127, 127, 127);\"><span style=\"font-size: 12px; color: rgb(0, 0, 0);\"><span style=\"font-size: 12px; color: rgb(0, 0, 0);\"><span style=\"font-size: 12px; color: rgb(0, 0, 0);\">9.2.4、线下发放：属于线下发放的红包，直接将该红包序列号发送给用户，用户凭借该序列号即可使用该红包了</span></span></span></span></p><p><span style=\"font-size: 12px; color: rgb(127, 127, 127);\">图 红包类型</span><br/></p><p><span style=\"font-size: 12px;\"><img src=\"http://xjd.68ecshop.com/includes/ueditor/php/../../../bdimages/upload1/20140917/1410944574454318.jpg\" title=\"8.jpg\"/></span><br/></p>','','','','0','1','1410944026','','0','http://','','0');");
E_D("replace into `ecs_article` values('80','20','广告1','','','','','0','0','1437334217','data/article/1437603513188688137.jpg','1','http://','','0');");
E_D("replace into `ecs_article` values('81','20','广告2','','','','','0','0','1437334225','data/article/1437334690546712289.jpg','1','http://','','1');");
E_D("replace into `ecs_article` values('82','20','广告3','','','','','0','0','1437334250','data/article/1437334700595779668.jpg','1','http://','','0');");
E_D("replace into `ecs_article` values('83','20','广告4','','','','','0','0','1437334258','data/article/1437334712958170263.jpg','1','http://','','0');");
E_D("replace into `ecs_article` values('84','20','广告5','','','','','0','0','1437334269','data/article/1437334721101005376.jpg','1','http://','','0');");
E_D("replace into `ecs_article` values('131','-1',' ','','','','','0','1','1438717347','','2','','','0');");

require("../../inc/footer.php");
?>