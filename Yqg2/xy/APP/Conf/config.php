<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' => 'Index,Admin,User',
	'DEFAULT_GROUP' => 'Index',
	'APP_GROUP_MODE' => 1 ,
	'APP_GROUP_PATH' => 'Modules',
	'DB_PREFIX'=>'shangfox_', //设置表前缀
	'SHOW_PAGE_TRACE'=> true,
	'DB_DSN'=>'mysql://root:e23456@localhost:3306/xy',//使用DSN方式配置数据库信息

	'LOAD_EXT_CONFIG' => 'verify,water,webconfig,stmp', //载入验证码,水印的配置文件

	'VAR_FILTERS'=>'filter_default',

	//配置路由
	'URL_MODEL' => 2,
	'URL_ROUTER_ON' => true,
	'URL_ROUTE_RULES' => array(
		'/^article-(\d+)$/' => 'Index/ArticleShow/index?id=:1', //文章详情页伪静态
		'/^list-(\d+)$/' => 'Index/ArticleList/index?id=:1', //文章列表页伪静态
		'/^info$/' => 'Index/Info/index', 
		'/^add$/' => 'Index/Add/index', 
		'/^num-(\d+)$/' => 'Index/Index/show?id=:1',
		'/^(\d+)$/' => 'Index/Singlepage/index?id=:1', //单页文档
		'/^(\w+)$/' => 'Index/Singlepage/index?filename=:1', //单页文档
	),

);
?>