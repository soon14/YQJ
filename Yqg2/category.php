<?php

/**
 * ECSHOP 商品分类
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: category.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');


if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}


/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

/* 获得请求的分类 ID */
if (isset($_REQUEST['id']))
{
    $cat_id = intval($_REQUEST['id']);
}
elseif (isset($_REQUEST['category']))
{
    $cat_id = intval($_REQUEST['category']);
}
else
{
    /* 如果分类ID为0，则返回首页 */
    ecs_header("Location: ./\n");

    exit;
}

//是否有频道首页
$is_category_index=$GLOBALS['db']->getOne("select category_index from ". $GLOBALS['ecs']->table('category') ." where cat_id=".$cat_id);
if ( $is_category_index == '1')
{
	require('./includes/lib_category_index.php');

	$cache_id = sprintf('%X', crc32($cat_id));

	if (!$smarty->is_cached('category_index.dwt', $cache_id))
	{
		$cat = get_cat_info($cat_id);   // 获得分类的相关信息
		if (!empty($cat))
		{
			$smarty->assign('keywords',    htmlspecialchars($cat['keywords']));
			$smarty->assign('description', htmlspecialchars($cat['cat_desc']));
			$smarty->assign('cat_style',   htmlspecialchars($cat['style']));
			//yyy添加start
			$smarty->assign('parent_id',   htmlspecialchars($cat['parent_id']));
			$smarty->assign('category',         $cat_id);
			//yyy添加end
		}
		else
		{
			// 如果分类不存在则返回首页 
			ecs_header("Location: ./\n");
			exit;
		}


		$category_tree0 = get_categories_tree(0);
		$smarty->assign('category_tree0',$category_tree0);
		assign_template('c', array($cat_id));
		/*取得顶级ID*/
		$catlist = array();
		$catsinfo = get_parent_cats($cat_id);
		foreach($catsinfo as $k=>$v)
		{
			$catlist[] = $v['cat_id'];
		}
		$smarty->assign('current_cat_pr_id',$catlist[count($catlist)-1]);/*取得顶级ID*/

		$smarty->assign('cat_id',$cat_id); 
		$smarty->assign('topcat_info',get_topcat_info($cat_id)); 
		$smarty->assign('flash_img_list',get_flash_img($cat_id)); 
		$smarty->assign('subcat_list',get_subcat_list($cat_id)); 
		$children = get_children($cat_id); 
		$smarty->assign('goods_list_new',get_catindex_recommend_goods('new',$children)); 
		$smarty->assign('goods_list_best',get_catindex_recommend_goods('best',$children)); 
		$smarty->assign('goods_list_hot',get_catindex_recommend_goods('hot',$children)); 
		$smarty->assign('promotion_goods',get_promote_goods($cat_id)); 
		$smarty->assign('childcat_goods',get_childcat_goods($cat_id)); 
		$smarty->assign('get_pro_top',get_pro_top10($cat_id)); 

		assign_dynamic('category_index'); // 动态内容
	}
	$smarty->display('category_index.dwt',$cache_id); 
}
else{
	/* 初始化分页信息 */
	$page = isset($_REQUEST['page'])   && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;
	$size = isset($_CFG['page_size'])  && intval($_CFG['page_size']) > 0 ? intval($_CFG['page_size']) : 10;
	$brand = isset($_REQUEST['brand']) && intval($_REQUEST['brand']) > 0 ? $_REQUEST['brand'] : 0;
	$price_max = isset($_REQUEST['price_max']) && intval($_REQUEST['price_max']) > 0 ? intval($_REQUEST['price_max']) : 0;
	$price_min = isset($_REQUEST['price_min']) && intval($_REQUEST['price_min']) > 0 ? intval($_REQUEST['price_min']) : 0;
	$filter = (isset($_REQUEST['filter'])) ? intval($_REQUEST['filter']) : 0;
	$filter_attr_str = isset($_REQUEST['filter_attr']) ? htmlspecialchars(trim($_REQUEST['filter_attr'])) : '0';

	$filter_attr_str = trim(urldecode($filter_attr_str));
	$filter_attr_str = preg_match('/^[\d\.\-]+$/',$filter_attr_str) ? $filter_attr_str : '';  //
	$filter_attr = empty($filter_attr_str) ? '' : explode('.', $filter_attr_str);

	//$mystock = (isset($_REQUEST['mystock'])) ? intval($_REQUEST['mystock']) : 0;
	$mystock = (!isset($_COOKIE['mystock'])) ? 1 : intval($_COOKIE['mystock']);
	

	/* 排序、显示方式以及类型 */
	$default_display_type = $_CFG['show_order_type'] == '0' ? 'list' : ($_CFG['show_order_type'] == '1' ? 'grid' : 'text');
	$default_sort_order_method = $_CFG['sort_order_method'] == '0' ? 'DESC' : 'ASC';
	$default_sort_order_type   = $_CFG['sort_order_type'] == '0' ? 'goods_id' : ($_CFG['sort_order_type'] == '1' ? 'shop_price' : 'last_update');
	$default_sort_order_type   = $_CFG['sort_order_type'] == '0' ? 'goods_id' : ($_CFG['sort_order_type'] == '1' ? 'shop_price' : 'last_update');

	$sort = (isset($_REQUEST['sort']) && in_array(trim(strtolower($_REQUEST['sort'])), array('goods_id', 'shop_price', 'last_update','click_count', 'salenum'))) ? trim($_REQUEST['sort'])  : $default_sort_order_type;  

	$order = (isset($_REQUEST['order']) && in_array(trim(strtoupper($_REQUEST['order'])), array('ASC', 'DESC')))                              ? trim($_REQUEST['order']) : $default_sort_order_method;
	$display  = (isset($_REQUEST['display']) && in_array(trim(strtolower($_REQUEST['display'])), array('list', 'grid', 'text'))) ? trim($_REQUEST['display'])  : (isset($_COOKIE['ECS']['display']) ? $_COOKIE['ECS']['display'] : $default_display_type);
	$display  = in_array($display, array('list', 'grid', 'text')) ? $display : 'text';
	setcookie('ECS[display]', $display, gmtime() + 86400 * 7);
	/*------------------------------------------------------ */
	//-- PROCESSOR
	/*------------------------------------------------------ */

	/* 页面的缓存ID */
	$cache_id = sprintf('%X', crc32($cat_id . '-' . $display . '-' . $sort  .'-' . $order  .'-' . $page . '-' . $size . '-' . $_SESSION['user_rank'] . '-' .
		$_CFG['lang'] .'-'. $brand. '-' . $price_max . '-' .$price_min . '-' . $filter_attr_str . '-' . $filter . '-'.$mystock.'-'.implode('',cookie_to_str())));//morestock_morecity
	if (!$smarty->is_cached('category.dwt', $cache_id))
	{
		
		$smarty->assign('mystock',$mystock);///morestock_morecity
		
		/* 如果页面没有被缓存则重新获取页面的内容 */

		$children = get_children($cat_id);

		$cat = get_cat_info($cat_id);   // 获得分类的相关信息

		if (!empty($cat))
		{
			$smarty->assign('keywords',    htmlspecialchars($cat['keywords']));
			$smarty->assign('description', htmlspecialchars($cat['cat_desc']));
			$smarty->assign('cat_style',   htmlspecialchars($cat['style']));
			//yyy添加start
			$smarty->assign('parent_id',   htmlspecialchars($cat['parent_id']));
			$smarty->assign('cat_id', $cat_id);
			//yyy添加end
		}
		else
		{
			/* 如果分类不存在则返回首页 */
			ecs_header("Location: ./\n");

			exit;
		}

		

		/* 赋值固定内容 */
		if ($brand > 0)
		{
			/* 代码修改_start  By  www.68ecshop.com */
			if (strstr($brand,'-'))
			{
				$brand_name="";
				$bbbb=0;
				$brand_sql =str_replace("-", ",", $brand);
				$sql = "SELECT brand_name FROM " .$GLOBALS['ecs']->table('brand'). " WHERE brand_id in ($brand_sql) ";
				$brand_res = $db->query($sql);
				while ($brand_row=$db->fetchRow($brand_res))
				{
					$brand_name .= ($bbbb ? "，" : ""). $brand_row['brand_name'];
					$bbbb++;
				}
				
			}
			else
			{
				$sql = "SELECT brand_name FROM " .$GLOBALS['ecs']->table('brand'). " WHERE brand_id = '$brand'";
				$brand_name = $db->getOne($sql);
			}
			/* 代码修改_end  By  www.68ecshop.com */
		}
		else
		{
			$brand_name = '';
		}

		/* 获取价格分级 */
		if ($cat['grade'] == 0  && $cat['parent_id'] != 0)
		{
			$cat['grade'] = get_parent_grade($cat_id); //如果当前分类级别为空，取最近的上级分类
		}

		if ($cat['grade'] > 1)
		{
			/* 需要价格分级 */

			/*
				算法思路：
					1、当分级大于1时，进行价格分级
					2、取出该类下商品价格的最大值、最小值
					3、根据商品价格的最大值来计算商品价格的分级数量级：
							价格范围(不含最大值)    分级数量级
							0-0.1                   0.001
							0.1-1                   0.01
							1-10                    0.1
							10-100                  1
							100-1000                10
							1000-10000              100
					4、计算价格跨度：
							取整((最大值-最小值) / (价格分级数) / 数量级) * 数量级
					5、根据价格跨度计算价格范围区间
					6、查询数据库

				可能存在问题：
					1、
					由于价格跨度是由最大值、最小值计算出来的
					然后再通过价格跨度来确定显示时的价格范围区间
					所以可能会存在价格分级数量不正确的问题
					该问题没有证明
					2、
					当价格=最大值时，分级会多出来，已被证明存在
			*/

			$sql = "SELECT min(g.shop_price) AS min, max(g.shop_price) as max ".
				   " FROM " . $ecs->table('goods'). " AS g ".
				   " WHERE ($children OR " . get_extension_goods($children) . ') AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1  ';
				   //获得当前分类下商品价格的最大值、最小值

			$row = $db->getRow($sql);

			// 取得价格分级最小单位级数，比如，千元商品最小以100为级数
			$price_grade = 0.0001;
			for($i=-2; $i<= log10($row['max']); $i++)
			{
				$price_grade *= 10;
			}

			//跨度
			$dx = ceil(($row['max'] - $row['min']) / ($cat['grade']) / $price_grade) * $price_grade;
			if($dx == 0)
			{
				$dx = $price_grade;
			}

			for($i = 1; $row['min'] > $dx * $i; $i ++);

			for($j = 1; $row['min'] > $dx * ($i-1) + $price_grade * $j; $j++);
			$row['min'] = $dx * ($i-1) + $price_grade * ($j - 1);

			for(; $row['max'] >= $dx * $i; $i ++);
			$row['max'] = $dx * ($i) + $price_grade * ($j - 1);

			$sql = "SELECT (FLOOR((g.shop_price - $row[min]) / $dx)) AS sn, COUNT(*) AS goods_num  ".
				   " FROM " . $ecs->table('goods') . " AS g ".
				   " WHERE ($children OR " . get_extension_goods($children) . ') AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 '.
				   " GROUP BY sn ";

			$price_grade = $db->getAll($sql);

			foreach ($price_grade as $key=>$val)
			{
				$temp_key = $key + 1;
				$price_grade[$temp_key]['goods_num'] = $val['goods_num'];
				$price_grade[$temp_key]['start'] = $row['min'] + round($dx * $val['sn']);
				$price_grade[$temp_key]['end'] = $row['min'] + round($dx * ($val['sn'] + 1));
				$price_grade[$temp_key]['price_range'] = $price_grade[$temp_key]['start'] . '&nbsp;-&nbsp;' . $price_grade[$temp_key]['end'];
				$price_grade[$temp_key]['formated_start'] = price_format($price_grade[$temp_key]['start']);
				$price_grade[$temp_key]['formated_end'] = price_format($price_grade[$temp_key]['end']);
				$price_grade[$temp_key]['url'] = build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>$price_grade[$temp_key]['start'], 'price_max'=> $price_grade[$temp_key]['end'], 'filter_attr'=>$filter_attr_str, 'filter'=>$filter), $cat['cat_name']);

				/* 判断价格区间是否被选中 */
				if (isset($_REQUEST['price_min']) && $price_grade[$temp_key]['start'] == $price_min && $price_grade[$temp_key]['end'] == $price_max)
				{
					$price_grade[$temp_key]['selected'] = 1;				
				}
				else
				{
					$price_grade[$temp_key]['selected'] = 0;
				}
			}

			$price_grade[0]['start'] = 0;
			$price_grade[0]['end'] = 0;
			$price_grade[0]['price_range'] = $_LANG['all_attribute'];
			$price_grade[0]['url'] = build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>0, 'price_max'=> 0, 'filter_attr'=>$filter_attr_str, 'filter'=>$filter), $cat['cat_name']);
			$price_grade[0]['selected'] = empty($price_max) ? 1 : 0;

			$smarty->assign('price_grade',     $price_grade);

		}


		


		/* 品牌筛选 */

		$sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, COUNT(*) AS goods_num ".
				"FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
					$GLOBALS['ecs']->table('goods') . " AS g LEFT JOIN ". $GLOBALS['ecs']->table('goods_cat') . " AS gc ON g.goods_id = gc.goods_id " .
				"WHERE g.brand_id = b.brand_id AND ($children OR " . 'gc.cat_id ' . db_create_in(array_unique(array_merge(array($cat_id), array_keys(cat_list($cat_id, 0, false))))) . ") AND b.is_show = 1 " .
				" AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
				"GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY b.sort_order, b.brand_id ASC"; //此SQL语句增加字段 b.brand_logo,  By  www.68ecshop.com

		$brands = $GLOBALS['db']->getAll($sql);

		

		$brand_have_logo = 0;  //代码增加   By    www.68ecshop.com

		foreach ($brands AS $key => $val)
		{
			$temp_key = $key + 1;
			$brands[$temp_key]['brand_name'] = $val['brand_name'];
			$brands[$temp_key]['url'] = build_uri('category', array('cid' => $cat_id, 'bid' => $val['brand_id'], 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter_attr'=>$filter_attr_str, 'filter'=>$filter), $cat['cat_name']);
			
			/*  代码增加_start  By  www.68ecshop.com  */
			$brands[$temp_key]['brand_id_ecshop120'] = $val['brand_id'];
			$brands[$temp_key]['brand_logo'] = $val['brand_logo'];
			if ($val['brand_logo']){$brand_have_logo=1;}
			/*  代码增加_end  By  www.68ecshop.com   */

			/* 判断品牌是否被选中 */
			if ($brand == $brands[$key]['brand_id'])
			{
				$brands[$temp_key]['selected'] = 1;
			}
			else
			{
				$brands[$temp_key]['selected'] = 0;
			}
		}

		/* 代码增加_start  By  www.68ecshop.com */
		$condition = array();
		$brand_zimu=array();
		foreach($brands AS $bkey=>$bval)
		{
			$brands[$bkey]['pinyin'] = GetPinyin($bval['brand_name']);
			$brands[$bkey]['shouzimu'] =substr($brands[$bkey]['pinyin'],0,1);
			if (preg_match("/[a-zA-Z]/i", $brands[$bkey]['shouzimu']))
			{		
				$brands[$bkey]['shouzimu']=strtoupper($brands[$bkey]['shouzimu']);
				$brand_zimu[$brands[$bkey]['shouzimu']]=$brands[$bkey]['shouzimu'];			
			}
			else
			{
				$brand_zimu['其他']='其它'; 
				$brands[$bkey]['shouzimu']='其它';
			}		
		}
		ksort($brand_zimu);
		//echo '<pre>';
		//print_r($brand_zimu);
		//print_r($brands);
		//echo '</pre>';	
		if ($brand)
		{
				$condition[] = array(
					'cond_type' => "品牌" ,
					'cond_name' => $brand_name ,
					'cond_url' => build_uri('category', array('cid' => $cat_id, 'bid' => 0, 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter_attr'=>$filter_attr_str, 'filter'=>$filter), $cat['cat_name']) ,
				);
		}
		if ($price_min || $price_max)
		{
				$condition[] =array(
						'cond_type'=> '价格',
						'cond_name'=> $price_min."-".$price_max,
						'cond_url' => build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>0, 'price_max'=> 0, 'filter_attr'=>$filter_attr_str, 'filter'=>$filter), $cat['cat_name'])
					); 
		}
		$smarty->assign('brand_zimu_ecshop120', $brand_zimu);
		$smarty->assign('url_no_price', build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand,  'filter_attr'=>$filter_attr_str, 'filter'=>$filter), $cat['cat_name']));
		/* 代码增加_end  By  www.68ecshop.com */

		$brands[0]['brand_name'] = $_LANG['all_attribute'];
		$brands[0]['url'] = build_uri('category', array('cid' => $cat_id, 'bid' => 0, 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter_attr'=>$filter_attr_str, 'filter'=>$filter), $cat['cat_name']);
		$brands[0]['selected'] = empty($brand) ? 1 : 0;

		$smarty->assign('brands', $brands);

		/* 代码增加_start    By www.ecshop68.com */
		if($brands and $cat['brand_qq'])
		{
		$brands_wwwecshop68Com=array();
		$brands_wwwecshop68Com[0] = $brands[0];
		$brands_qq=explode(',' , $cat['brand_qq']);
		foreach($brands_qq as $key_qq => $brand_qq)
		{
			foreach($brands as $key_wwwecshop68com=>$brand_ecshop68com)
			{
				if($brand_ecshop68com['brand_name']==$brand_qq)
				{
					$brands_wwwecshop68Com[]=$brand_ecshop68com;
					break;
				}
			}
		}
		$brands=$brands_wwwecshop68Com;
		$smarty->assign('brands', $brands);
		}
		/* 代码增加_end    By www.ecshop68.com */
		
		//商品来源过滤
		
		$filter_info = array(
			0=>array('id'=>0,'name'=>'全部','selected'=>0,'url'=>build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter'=>0),'全部')),
			1=>array('id'=>1,'name'=>'网站自营','selected'=>0,'url'=>build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter'=>1),'网站自营')),
			2=>array('id'=>2,'name'=>'入驻商店铺','selected'=>0,'url'=>build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter'=>2),'入驻商店铺'))
		);
		$filter_info[$filter]['selected'] = 1;
		$smarty->assign('filterinfo', $filter_info);

		
		
		/* 属性筛选 */
		$ext = ''; //商品查询条件扩展
		if ($cat['filter_attr'] > 0)
		{
			$cat_filter_attr = explode(',', $cat['filter_attr']);       //提取出此分类的筛选属性
			$smarty->assign('filter_attr_count_num',      count($cat_filter_attr));
			$all_attr_list = array();

			foreach ($cat_filter_attr AS $key => $value)
			{
				$sql = "SELECT a.attr_name FROM " . $ecs->table('attribute') . " AS a, " . $ecs->table('goods_attr') . " AS ga, " . $ecs->table('goods') . " AS g WHERE ($children OR " . get_extension_goods($children) . ") AND a.attr_id = ga.attr_id AND g.goods_id = ga.goods_id AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND a.attr_id='$value'";
				if($temp_name = $db->getOne($sql))
				{
					$all_attr_list[$key]['filter_attr_name'] = $temp_name;

					$sql = "SELECT a.attr_id, MIN(a.goods_attr_id ) AS goods_id, a.attr_value AS attr_value FROM " . $ecs->table('goods_attr') . " AS a, " . $ecs->table('goods') .
						   " AS g" .
						   " WHERE ($children OR " . get_extension_goods($children) . ') AND g.goods_id = a.goods_id AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 '.
						   " AND a.attr_id='$value' ".
						   " GROUP BY a.attr_value";

					$attr_list = $db->getAll($sql);

					$temp_arrt_url_arr = array();

					for ($i = 0; $i < count($cat_filter_attr); $i++)        //获取当前url中已选择属性的值，并保留在数组中
					{
						$temp_arrt_url_arr[$i] = !empty($filter_attr[$i]) ? $filter_attr[$i] : 0;
					}

					$temp_arrt_url_arr[$key] = 0;                           //“全部”的信息生成
					$temp_arrt_url = implode('.', $temp_arrt_url_arr);
					$all_attr_list[$key]['attr_list'][0]['attr_value'] = $_LANG['all_attribute'];
					$all_attr_list[$key]['attr_list'][0]['url'] = build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>$price_min, 'price_max'=>$price_max, 'filter_attr'=>$temp_arrt_url, 'filter'=>$filter), $cat['cat_name']);
					$all_attr_list[$key]['attr_list'][0]['selected'] = empty($filter_attr[$key]) ? 1 : 0;

					foreach ($attr_list as $k => $v)
					{
						$temp_key = $k + 1;
						$temp_arrt_url_arr[$key] = $v['goods_id'];       //为url中代表当前筛选属性的位置变量赋值,并生成以‘.’分隔的筛选属性字符串
						$temp_arrt_url = implode('.', $temp_arrt_url_arr);

						$all_attr_list[$key]['attr_list'][$temp_key]['attr_value'] = $v['attr_value'];
						$all_attr_list[$key]['attr_list'][$temp_key]['url'] = build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>$price_min, 'price_max'=>$price_max, 'filter_attr'=>$temp_arrt_url, 'filter'=>$filter), $cat['cat_name']);

						/* 代码增加_start  By  www.68ecshop.com */
						$all_attr_list[$key]['attr_list'][$temp_key]['goods_id'] = $v['goods_id'];
						if($temp_name=='颜色')
						{
							$all_attr_list[$key]['attr_list'][$temp_key]['color_code']=$db->getOne("select color_code from ". $ecs->table('attribute_color') ." where color_name='$v[attr_value]' and attr_id='$v[attr_id]' ");
						}
						$filter_attr_name[$key][$v['goods_id']]=$v['attr_value'];
						/* 代码增加_end  By  www.68ecshop.com */

						if (!empty($filter_attr[$key]) AND $filter_attr[$key] == $v['goods_id'])
						{
							$all_attr_list[$key]['attr_list'][$temp_key]['selected'] = 1;
						}
						else
						{
							$all_attr_list[$key]['attr_list'][$temp_key]['selected'] = 0;
						}
					}
				}

			}

			/* 代码增加_start   By  www.68ecshop.com */
			foreach ($filter_attr AS $fkey=>$fval)
			{
				if ($fval)
				{
					$cond_name = "";
					$filter_attr_temp = $filter_attr;
					$filter_attr_temp[$fkey]='0';
					$temp_arrt_url_ecshop120 =implode(".", $filter_attr_temp);
					if (strstr($fval, "-"))
					{
						$fval_array = explode("-", $fval);
						foreach ($fval_array AS $fval_key=> $fval_ecshop120)
						{
							$cond_name .= ($fval_key ? "，" : "") . $filter_attr_name[$fkey][$fval_ecshop120];
						}
					}
					else
					{
						$cond_name = $filter_attr_name[$fkey][$fval];
					}
					$condition[]=array(
							'cond_type' =>$all_attr_list[$fkey]['filter_attr_name'],
							'cond_name' =>$cond_name,
							'cond_url' =>build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>$price_min, 'price_max'=>$price_max, 'filter_attr'=>$temp_arrt_url_ecshop120, 'filter'=>$filter), $cat['cat_name'])
						);
				}
			}
			$attr_group_more_txt = "";
			$attr_group_more_id =0;
			foreach ($all_attr_list AS $k_ecshop120=>$k_value)
			{
				if ($k_ecshop120 >1)
				{
					if ($attr_group_more_id <3)
					{
						$attr_group_more_txt .= ($attr_group_more_id ? "，" :"") . $k_value['filter_attr_name'];
					}
					$attr_group_more_id++;
				}
			}
			$smarty->assign('attr_group_more_count', count($all_attr_list));
			$smarty->assign('attr_group_more_txt', $attr_group_more_txt);
			/* 代码增加_end   By  www.68ecshop.com */

			$smarty->assign('filter_attr_list',  $all_attr_list);

			/* 扩展商品查询条件 */
			if (!empty($filter_attr))
			{
				$ext_sql = "SELECT DISTINCT(b.goods_id) FROM " . $ecs->table('goods_attr') . " AS a, " . $ecs->table('goods_attr') . " AS b " .  "WHERE ";
				$ext_group_goods = array();

				foreach ($filter_attr AS $k => $v)                      // 查出符合所有筛选属性条件的商品id */
				{
					/* 代码修改_start    By   www.68ecshop.com */
					if (strstr($v, '-') && $v !=0 && isset($cat_filter_attr[$k]) )
					{
						$attr_sql = str_replace("-", ",", $v);
						$sql = $ext_sql . "b.attr_value = a.attr_value AND b.attr_id = " . $cat_filter_attr[$k] ." AND a.goods_attr_id  in ($attr_sql) ";
						$ext_group_goods = $db->getColCached($sql);
						$ext .= ' AND ' . db_create_in($ext_group_goods, 'g.goods_id');
					}
					elseif (is_numeric($v) && $v !=0 &&isset($cat_filter_attr[$k]))
					{
						$sql = $ext_sql . "b.attr_value = a.attr_value AND b.attr_id = " . $cat_filter_attr[$k] ." AND a.goods_attr_id = " . $v;
						$ext_group_goods = $db->getColCached($sql);
						$ext .= ' AND ' . db_create_in($ext_group_goods, 'g.goods_id');
					}
					/* 代码修改_end   By   www.68ecshop.com */
				}
			}
		}
		 /* 代码增加_start By www.ecshop68.com */
		 //echo '<pre>';
		 //print_r($all_attr_list);
		 //echo '</pre>';

		 if($cat['attr_wwwecshop68com'])
		 {
			 $attr_wwwecshop68com=explode("\r\n", $cat['attr_wwwecshop68com']);
			 $attr_def_wwwecshop68com=array();
			 foreach($attr_wwwecshop68com as $attr_ecshop68com)
			 {
				if ($attr_ecshop68com)
				 {
						$attr_qq = explode(":", $attr_ecshop68com);
						$attr_def_wwwecshop68com[$attr_qq[0]]=explode(",", $attr_qq[1]);
				}
			 }

			//echo '<pre>';
			//print_r($attr_def_wwwecshop68com);
			//echo '</pre>';


			foreach ($all_attr_list as $key_attr_qq => $attr_old_ecshop68com)
			{
				foreach($attr_def_wwwecshop68com as $key_def_ecshop68com => $attr_def_ecshop68com)
				{
					if ( $attr_old_ecshop68com['filter_attr_name'] == $key_def_ecshop68com)
					{
						 $attr_list_qq = array();
						 $attr_list_qq[0]= $attr_old_ecshop68com['attr_list'][0];
						 foreach($attr_def_ecshop68com as  $attr_new_ecshop68com)
						 {
								foreach($attr_old_ecshop68com['attr_list'] as $attr_temp_qq)
								{
									if($attr_temp_qq['attr_value'] == $attr_new_ecshop68com )
									{
										$attr_list_qq[]=$attr_temp_qq;
										break;
									}
								}
						 }
						$all_attr_list[$key_attr_qq]['attr_list']=$attr_list_qq;
						break;
					}
				}
			}


			 //echo '<pre>';
			 //print_r($all_attr_list);
			 //echo '</pre>';
			 
			 $smarty->assign('filter_attr_list',  $all_attr_list);
		 }

		 /* 代码增加_end By www.ecshop68.com */
		assign_template('c', array($cat_id));

		$position = assign_ur_here($cat_id, $brand_name);
		$smarty->assign('page_title',       $position['title']);    // 页面标题
		$smarty->assign('ur_here',          $position['ur_here']);  // 当前位置
		//LSJ Begin
		$smarty->assign('current_cat_id', $cat_id); //取得当前的id
		/*取得顶级ID*/
		$catlist = array();
		foreach(get_parent_cats($cat_id) as $k=>$v)
		{
			$catlist[] = $v['cat_id'];
		}
		$smarty->assign('current_cat_pr_id',$catlist[count($catlist)-1]);/*取得顶级ID*/
	//LSJ End
		$smarty->assign('categories',       get_categories_tree($cat_id)); // 分类树
		$smarty->assign('helps',            get_shop_help());              // 网店帮助
		$smarty->assign('top_goods',        get_top10());                  // 销售排行
		$smarty->assign('show_marketprice', $_CFG['show_marketprice']);
		$smarty->assign('category',         $cat_id);
		$smarty->assign('brand_id',         $brand);
		$smarty->assign('price_max',        $price_max);
		$smarty->assign('price_min',        $price_min);
		$smarty->assign('filterid',         $filter);
		$smarty->assign('filter_attr',      $filter_attr_str);
		$smarty->assign('filter_attr_value',      $filter_attr_str);
		$smarty->assign('feed_url',         ($_CFG['rewrite'] == 1) ? "feed-c$cat_id.xml" : 'feed.php?cat=' . $cat_id); // RSS URL

		if ($brand > 0)
		{
			$arr['all'] = array('brand_id'  => 0,
							'brand_name'    => $GLOBALS['_LANG']['all_goods'],
							'brand_logo'    => '',
							'goods_num'     => '',
							'url'           => build_uri('category', array('cid'=>$cat_id), $cat['cat_name'])
						);
		}
		else
		{
			$arr = array();
		}

		$brand_list = array_merge($arr, get_brands($cat_id, 'category'));

		$smarty->assign('data_dir',    DATA_DIR);
		$smarty->assign('brand_list',      $brand_list);
		$smarty->assign('promotion_info', get_promotion_info('',0));


		/* 调查 */
		$vote = get_vote();
		if (!empty($vote))
		{
			$smarty->assign('vote_id',     $vote['id']);
			$smarty->assign('vote',        $vote['content']);
		}

		//morestock_morecity start是否显示有库存的商品
		if($mystock > 0){
			$goodsIdStr = get_goods_by_address();
			if($goodsIdStr !== false){
				$ext .= ' AND ' . $goodsIdStr;
			}else{
				$ext .= ' AND 1 != 1';
			}
		}
		//morestock_morecity end

		$smarty->assign('best_goods',      get_category_recommend_goods('best', $children, $brand, $price_min, $price_max, $ext));
		$smarty->assign('promotion_goods', get_category_recommend_goods('promote', $children, $brand, $price_min, $price_max, $ext));
		$smarty->assign('hot_goods',       get_category_recommend_goods('hot', $children, $brand, $price_min, $price_max, $ext));
	$smarty->assign('new_goods',       get_category_recommend_goods('new', $children, $brand, $price_min, $price_max, $ext));

		$count = get_cagtegory_goods_count($children, $brand, $price_min, $price_max, $ext);
		$max_page = ($count> 0) ? ceil($count / $size) : 1;
		if ($page > $max_page)
		{
			$page = $max_page;
		}
		$goodslist = category_get_goods($children, $brand, $price_min, $price_max, $ext, $size, $page, $sort, $order);
		if($display == 'grid')
		{
			if(count($goodslist) % 2 != 0)
			{
				$goodslist[] = array();
			}
		}
		$smarty->assign('goods_list',       $goodslist);
		$smarty->assign('category',         $cat_id);
		$smarty->assign('script_name', 'category');
		
		//echo "<pre>";
		//print_r($condition);
		
		
		/*  代码增加_start   By  www.68ecshop.com  */
		$smarty->assign('cat_name_curr', $cat['cat_name']);  
		$smarty->assign('condition', $condition);
		$smarty->assign('brand_have_logo', $brand_have_logo);
		$smarty->assign('filter_attr_count',      count($all_attr_list));
		/*  代码增加_end  By  www.68ecshop.com  */
		
		$price_max = (isset($_REQUEST['filter'])) ? $price_max.'&filter='.intval($_REQUEST['filter']) : 0;

		assign_pager('category',            $cat_id, $count, $size, $sort, $order, $page, '', $brand, $price_min, $price_max, $display, $filter_attr_str); // 分页
		assign_dynamic('category'); // 动态内容
	}

	$smarty->display('category.dwt', $cache_id);
}

/*------------------------------------------------------ */
//-- PRIVATE FUNCTION
/*------------------------------------------------------ */

/**
 * 获得分类的信息
 *
 * @param   integer $cat_id
 *
 * @return  void
 */
function get_cat_info($cat_id)
{
    return $GLOBALS['db']->getRow('SELECT cat_name, keywords, cat_desc, style, grade, filter_attr, parent_id FROM ' . $GLOBALS['ecs']->table('category') .
        " WHERE cat_id = '$cat_id'");
}

/**
 * 获得分类下的商品
 *
 * @access  public
 * @param   string  $children
 * @return  array
 */
function category_get_goods($children, $brand, $min, $max, $ext, $size, $page, $sort, $order)
{
	$filter = (isset($_REQUEST['filter'])) ? intval($_REQUEST['filter']) : 0;
	
    $display = $GLOBALS['display'];
    $where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND ".
            "g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';
    
    if($filter==1){
    	
    	$where .= ' AND g.supplier_id=0 ';
    	
    }elseif($filter==2){
    	
    	$where .= ' AND g.supplier_id>0 ';
    	
    }else{}

    if ($brand > 0)
    {
		/* 代码修改_start  By  www.68ecshop.com */
		if (strstr($brand, '-'))
		{
			$brand_sql =str_replace("-", ",", $brand);
			$where .=  "AND g.brand_id in ($brand_sql) ";
		}
		else
		{
			$where .=  "AND g.brand_id=$brand ";
		}
		/* 代码修改_end  By  www.68ecshop.com */
    }

    if ($min > 0)
    {
        $where .= " AND g.shop_price >= $min ";
    }

    if ($max > 0)
    {
        $where .= " AND g.shop_price <= $max ";
    }

    /* 获得商品列表 */
    $sql = 'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.click_count, g.market_price, g.is_new, g.is_best, g.is_hot, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, g.promote_price, g.goods_type, " .
                'g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb , g.goods_img ' .
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
            "WHERE $where $ext ORDER BY $sort $order";
	/* 代码增加_start  By  www.68ecshop.com */
	if ($sort=='salenum')
	{
		$sql = 'SELECT SUM(o.goods_number) as salenum, g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.is_new, g.is_best, g.is_hot, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, g.promote_price, g.goods_type, " .
                'g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb , g.goods_img ' .
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " . " LEFT JOIN (select goods_number, goods_id  FROM ". $GLOBALS['ecs']->table('order_goods') ." as oo , " . $GLOBALS['ecs']->table('order_info') ." as ii 
            WHERE ii.order_status >=1 AND ii.order_id = oo.order_id) as o ON o.goods_id = g.goods_id  WHERE $where $ext group by g.goods_id ORDER BY $sort $order";
	
        }
	/* 代码增加_end  By  www.68ecshop.com */
    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }

        /* 处理商品水印图片 */
        $watermark_img = '';

        if ($promote_price != 0)
        {
            $watermark_img = "watermark_promote_small";
        }
        elseif ($row['is_new'] != 0)
        {
            $watermark_img = "watermark_new_small";
        }
        elseif ($row['is_best'] != 0)
        {
            $watermark_img = "watermark_best_small";
        }
        elseif ($row['is_hot'] != 0)
        {
            $watermark_img = 'watermark_hot_small';
        }

        if ($watermark_img != '')
        {
            $arr[$row['goods_id']]['watermark_img'] =  $watermark_img;
        }

        $arr[$row['goods_id']]['goods_id']         = $row['goods_id'];
        if($display == 'grid')
        {
            $arr[$row['goods_id']]['goods_name']       = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        }
        else
        {
            $arr[$row['goods_id']]['goods_name']       = $row['goods_name'];
        }
        $arr[$row['goods_id']]['name']             = $row['goods_name'];
		 $arr[$row['goods_id']]['is_new']             = $row['is_new'];
		  $arr[$row['goods_id']]['is_hot']             = $row['is_hot'];
		   $arr[$row['goods_id']]['is_best']             = $row['is_best'];
        $arr[$row['goods_id']]['goods_brief']      = $row['goods_brief'];
        $arr[$row['goods_id']]['goods_style_name'] = add_style($row['goods_name'],$row['goods_name_style']);
        $arr[$row['goods_id']]['market_price']     = price_format($row['market_price']);
        $arr[$row['goods_id']]['shop_price']       = price_format($row['shop_price']);
        $arr[$row['goods_id']]['type']             = $row['goods_type'];
        $arr[$row['goods_id']]['promote_price']    = ($promote_price > 0) ? price_format($promote_price) : '';
        $arr[$row['goods_id']]['goods_thumb']      = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['goods_img']        = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$row['goods_id']]['url']              = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
		$arr[$row['goods_id']]['comment_count']    = get_comment_count($row['goods_id']);
		$arr[$row['goods_id']]['count']            = selled_count($row['goods_id']);
		$arr[$row['goods_id']]['click_count']      = $row['click_count'];
		/* 检查是否已经存在于用户的收藏夹 */
        $sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('collect_goods') .
            " WHERE user_id='$_SESSION[user_id]' AND goods_id = " . $row['goods_id'];
        if ($GLOBALS['db']->GetOne($sql) > 0)
        {
			$arr[$row['goods_id']]['is_collet'] = 1;
		}
		else
		{
			$arr[$row['goods_id']]['is_collet'] = 0;
		}
		
    }
    return $arr;
}

/**
 * 获得分类下的商品总数
 *
 * @access  public
 * @param   string     $cat_id
 * @return  integer
 */
function get_cagtegory_goods_count($children, $brand = 0, $min = 0, $max = 0, $ext='')
{
	$filter = (isset($_REQUEST['filter'])) ? intval($_REQUEST['filter']) : 0;
    $where  = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';
    
	if($filter==1){
    	
    	$where .= ' AND g.supplier_id=0 ';
    	
    }elseif($filter==2){
    	
    	$where .= ' AND g.supplier_id>0 ';
    	
    }else{}
    
    if ($brand > 0)
    {
		/* 代码增加_start  By  www.68ecshop.com  */
		if (strstr($brand, '-'))
		{
			$brand_sql =str_replace("-", ",", $brand);
			$where .=  "AND g.brand_id in ($brand_sql) ";
		}
		else
		{
			$where .=  "AND g.brand_id=$brand ";
		}
		/* 代码增加_end  By  www.68ecshop.com  */
    }

    if ($min > 0)
    {
        $where .= " AND g.shop_price >= $min ";
    }

    if ($max > 0)
    {
        $where .= " AND g.shop_price <= $max ";
    }

    /* 返回商品总数 */
    return $GLOBALS['db']->getOne('SELECT COUNT(*) FROM ' . $GLOBALS['ecs']->table('goods') . " AS g WHERE $where $ext");
}

/**
 * 取得最近的上级分类的grade值
 *
 * @access  public
 * @param   int     $cat_id    //当前的cat_id
 *
 * @return int
 */
function get_parent_grade($cat_id)
{
    static $res = NULL;

    if ($res === NULL)
    {
        $data = read_static_cache('cat_parent_grade');
        if ($data === false)
        {
            $sql = "SELECT parent_id, cat_id, grade ".
                   " FROM " . $GLOBALS['ecs']->table('category');
            $res = $GLOBALS['db']->getAll($sql);
            write_static_cache('cat_parent_grade', $res);
        }
        else
        {
            $res = $data;
        }
    }

    if (!$res)
    {
        return 0;
    }

    $parent_arr = array();
    $grade_arr = array();

    foreach ($res as $val)
    {
        $parent_arr[$val['cat_id']] = $val['parent_id'];
        $grade_arr[$val['cat_id']] = $val['grade'];
    }

    while ($parent_arr[$cat_id] >0 && $grade_arr[$cat_id] == 0)
    {
        $cat_id = $parent_arr[$cat_id];
    }

    return $grade_arr[$cat_id];

}


?>
