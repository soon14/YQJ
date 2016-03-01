<?php

/**
 * ECSHOP 专题前台
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * @author:     webboy <laupeng@163.com>
 * @version:    v2.1
 * ---------------------------------------------
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

$category_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;

if(isset($_REQUEST['store_id']) && isset($_REQUEST['type'])){
	$store_id = intval($_REQUEST['store_id']);
	$level = intval($_REQUEST['type']);
	setcookie('region_'.$level,$store_id);
	$_COOKIE['region_'.$level] = $store_id;
	$_REQUEST[$_REQUEST['datainfo'][$level]] = $store_id;
	for($i=1;$i<=4;$i++){
		if($i>$level){
			setcookie('region_'.$i,0);
			$_COOKIE['region_'.$i] = 0;
			$_REQUEST[$_REQUEST['datainfo'][$i]] = 0;
		}
	}
}

$tpl = 'stores.dwt';

//当前地址下对应仓库的店铺显示
$address = cookie_to_str();

$keywords         = isset($_REQUEST['keywords']) ? trim(addslashes(htmlspecialchars($_REQUEST['keywords']))) : '';

$cache_id = sprintf('%X', crc32($category_id .'-'.implode('',$address) . '-' . date('ymd') . '-' . $keywords));

if (!$smarty->is_cached($tpl, $cache_id))
{ 
	//店铺分类
	$cats = get_all_category();
	
	//店铺列表
	$shop_list = get_all_supplier($address);
	
	//echo "<pre>";
	//print_r($shop_list);
	
	//推荐分类中的店铺
	$tuijian = get_tuijian_shop($cats['tuijian']);
	
	
    /* 模板赋值 */
    assign_template();
    $position = assign_ur_here();
    $smarty->assign('page_title',       $position['title']);       // 页面标题
    $smarty->assign('ur_here',          $position['ur_here'] . '> ' . $topic['title']);     // 当前位置
    $smarty->assign('helps',            get_shop_help()); // 网店帮助
    $smarty->assign('all',   	$cats['all']);
    $smarty->assign('tuijian',       $tuijian);
    
    $smarty->assign('logopath',		'/'.DATA_DIR.'/supplier/logo/');
    $smarty->assign('shops_list',   $shop_list['shops']);
    $smarty->assign('filter',       $shop_list['filter']);
    $smarty->assign('record_count', $shop_list['record_count']);
    $smarty->assign('page_count',   $shop_list['page_count']);
    
    $page = (isset($_REQUEST['page'])) ? intval($_REQUEST['page']) : 1;
    
    $start_array = range(1,$page);
    $end_array   = range($page,$shop_list['page_count']);
    if($page-5>0){
    	$smarty->assign('start',$page-3);
    	$start_array = range($page,$page-2);
    }
    if($shop_list['page_count'] - $page > 5){
    	$smarty->assign('end',$page+3);
    	$end_array   = range($page,$page+2);
    }
    $page_array  = array_merge($start_array,$end_array);
    sort($page_array);
    $smarty->assign('page_array',	array_unique($page_array));

	$address_info = get_address_info();

	$child_info = get_child_address_info();


	$smarty->assign('child_info',$child_info);
	$smarty->assign('address_info',$address_info);


	assign_dynamic('stores');
}
/* 显示模板 */
$smarty->display($tpl, $cache_id);

/**
 * 获取所有店铺分类
 */
function get_all_category(){
	$sql = "select * from ".$GLOBALS['ecs']->table('street_category')." where is_show=1 order by sort_order";
	$all = $GLOBALS['db']->getAll($sql);
	$ret1 = $ret = array();
	foreach($all as $key => $val){
		$val['url'] = build_uri('stores', array('cid'=>$val['str_id'],'store_id'=>$_REQUEST['store_id'],'type'=>$_REQUEST['type']), $val['str_name']);
		if($val['is_groom']>0){
			$ret[$val['str_id']] = $val;
		}
		$ret1[$val['str_id']] = $val;
	}
	return array('all'=>$ret1,'tuijian'=>$ret);
}

/*
 * 获取推荐类中相关店铺
 * @param array $tuijian 分类信息
 */
function get_tuijian_shop($tuijian){
	$keys = array_keys($tuijian);
	$types = implode(',',$keys);
	if(empty($types)){
		return array();
	}
	$sql = "select * from ".$GLOBALS['ecs']->table('supplier_street')." where supplier_type in($types) and is_groom=1 and status=1 order by sort_order";
	$all = $GLOBALS['db']->getAll($sql);
	foreach($all as $k => $v){
		$tuijian[$v['supplier_type']]['shoplist'][$v['supplier_id']] = $v;
	}
	return $tuijian;
}

/**
 * 获取店铺店铺街中的店铺
 */
function get_all_supplier($address){
	global $tpl;
	$is_search = 0;//是否是搜索过来的
	$filter['id']               = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);
	$filter['keywords']         = isset($_REQUEST['keywords']) ? trim(addslashes(htmlspecialchars($_REQUEST['keywords']))) : '';
	$filter['sort_by']          = empty($_REQUEST['sort_by']) ? 'sort_order' : trim($_REQUEST['sort_by']);
    $filter['sort_order']       = empty($_REQUEST['sort_order']) ? 'ASC' : trim($_REQUEST['sort_order']);
	/* 分页大小 */
    $filter['page'] = empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);
    if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0)
    {
        $filter['page_size'] = intval($_REQUEST['page_size']);
    }elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0)
    {
        $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
    }else{
    	$filter['page_size'] = 13;
    }
    $filter['start']       = ($filter['page'] - 1) * $filter['page_size'];

	$where = " where status=1 and is_show=1 ";

	$store_ids = get_address_by_store($address);
	$store_ids = array_unique($store_ids);
	if(count($store_ids)>0){
		$supplierid = $GLOBALS['db']->getColCached('select st.supplier_id from '.$GLOBALS['ecs']->table('store_main').' as sm left join '.$GLOBALS['ecs']->table('store_type').' as st on sm.supplier_id = st.type  where sm.store_id in ('.implode(',',$store_ids).')');
		$supplierid = array_filter(array_unique($supplierid));
		if(count($supplierid)>0){
			$where .= ' and supplier_id in ('.implode(',',$supplierid).') ';
		}else{
			return array();
		}
	}

	if($filter['id']){
		$where .= ' and supplier_type='.$filter['id'];
	}
	if($filter['keywords'] && $filter['keywords'] != '请输入关键词'){
		$is_search = 1;
		$tpl = 'search_store.dwt';
		$GLOBALS['smarty']->assign('search_keywords',   stripslashes(htmlspecialchars_decode($_REQUEST['keywords'])));
		$where .= " and supplier_id in(SELECT DISTINCT supplier_id
				FROM ".$GLOBALS['ecs']->table('supplier_shop_config')." AS ssc
				WHERE (
				code = 'shop_name'
				AND value LIKE '%".$filter['keywords']."%'
				)
				OR (
				code = 'shop_keywords'
				AND value LIKE '%".$filter['keywords']."%'
				))";
	}
	$GLOBALS['smarty']->assign('issearch',$is_search);
	
	/* 记录总数 */
     $sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('supplier_street'). " $where";
     $filter['record_count'] = $GLOBALS['db']->getOne($sql);
     $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;
	
	$sql = "SELECT * ".
	           " FROM " . $GLOBALS['ecs']->table('supplier_street'). 
	           " $where" .
	           " ORDER BY $filter[sort_by] $filter[sort_order] ".
	           " LIMIT " . $filter['start'] . ",$filter[page_size]";
	$arr = $GLOBALS['db']->getAll($sql);
	foreach($arr as $key=>$val){
		$shopinfo = $GLOBALS['db']->getAll("select code,value from ".$GLOBALS['ecs']->table('supplier_shop_config')." where supplier_id=".$val['supplier_id']." and code in('shop_closed','shop_name','shop_keywords')");
		foreach($shopinfo as $k => $v){
			if($is_search){
				$v['value'] =  str_replace($filter['keywords'],"<font color=red>".$filter['keywords']."</font>",$v['value']);
			}
			
			$arr[$key][$v['code']] = $v['value'];
		}
	}
    return array('shops' => $arr, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

function get_child_address_info(){
	global $ecs,$db;

	$newpcca = array();
	$pcca = $_REQUEST['datainfo'];
	foreach($pcca as $key=>$val){
		if(isset($_REQUEST[$val]) && intval($_REQUEST[$val])>0){
			$newpcca[$key]=intval($_REQUEST[$val]);
		}
	}
	
	$level = 3;//第三级地址
	$k = $level+1;
	if(!isset($newpcca[$level])){
		return '';
	}
	$sql = "select r.region_id,r.region_name from ". $ecs->table("store_shipping_region") ." as ssr left join ". $ecs->table("region") ." as r on ssr.".$pcca[$k]."=r.region_id where ssr.".$pcca[$level]."=".$newpcca[$level]." group by ".$pcca[$k];
	$query = $db->query($sql);
	$regions =array();
	while($row = $db->fetchRow($query)){
		if($row['region_id']>0 && !empty($row['region_name'])){
			$regions[$pcca[$k]][0]['name'] = '全部';
			$regions[$pcca[$k]][0]['url'] = build_uri('stores', array('cid'=>intval($_REQUEST['id']),'store_id'=>0,'type'=>$k), '全部');
			$regions[$pcca[$k]][$row['region_id']]['name'] = $row['region_name'];
			$regions[$pcca[$k]][$row['region_id']]['url'] = build_uri('stores', array('cid'=>intval($_REQUEST['id']),'store_id'=>$row['region_id'],'type'=>$k), $row['region_name']);
		}
	}
	return $regions;

}

function get_address_info(){
	global $ecs,$db;

	$newpcca = array();
	$pcca = $_REQUEST['datainfo'];
	foreach($pcca as $key=>$val){
		if(isset($_REQUEST[$val]) && intval($_REQUEST[$val])>0){
			$newpcca[$key]=intval($_REQUEST[$val]);
		}
	}

	$level = 2;//第二级地址
	$k = $level+1;
	$sql = "select r.region_id,r.region_name from ". $ecs->table("store_shipping_region") ." as ssr left join ". $ecs->table("region") ." as r on ssr.".$pcca[$k]."=r.region_id where ssr.".$pcca[$level]."=".$newpcca[$level]." group by ".$pcca[$k];
	$query = $db->query($sql);

	$regions =array();
	while($row = $db->fetchRow($query)){
		$regions[$pcca[$k]][0]['name'] = '全部';
		$regions[$pcca[$k]][0]['url'] = build_uri('stores', array('cid'=>intval($_REQUEST['id']),'store_id'=>0,'type'=>$k), '全部');
		$regions[$pcca[$k]][$row['region_id']]['name'] = $row['region_name'];
		$regions[$pcca[$k]][$row['region_id']]['url'] = build_uri('stores', array('cid'=>intval($_REQUEST['id']),'store_id'=>$row['region_id'],'type'=>$k), $row['region_name']);
	}

	return $regions;
}

?>