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
include('includes/cls_json.php');
$json   = new JSON;

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/* 代码增加_start   By   morestock_morecity */
if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'get_regions')
{
	
    $result    = array('err_msg' => '', 'result' => '');
	$level = !empty($_REQUEST['level']) ? intval($_REQUEST['level']) : 0;
	$rid = !empty($_REQUEST['rid']) ? intval($_REQUEST['rid']) : "0";
	$nextlevel = $level+1;
	$region = 'region_'.$level;
	$nregion = 'region_'.$nextlevel;//将下面的cookie值改成0
     
	 $sql = "select region_name from ". $ecs->table('region') ." where region_id= '$rid' ";
	 $parent_name = $db->getOne($sql);

	$region_list = '';
	//$sql = "select * from ". $ecs->table('region') ." where parent_id='$rid' ";
	if(isset($_REQUEST['datainfo'][$nextlevel])){
		$sql = "select r.* from ". $ecs->table('store_shipping_region') ." as ssr left join ". $ecs->table("region") ." as r on ssr.".$_REQUEST['datainfo'][$nextlevel]."=r.region_id where ssr.".$_REQUEST['datainfo'][$level]."=".$rid." group by ".$_REQUEST['datainfo'][$nextlevel];
		$res = $db->query($sql);
		if($res){ 
			while ($row=$db->fetchRow($res))
			{
				if($row['region_id']>0 && !empty($row['region_name'])){
					$region_list .= '<a href="javascript:void(0);" onclick="javascript:get_regions('.$nextlevel.', '. $row['region_id'] .');" style="text-decoration:none;" >'.$row['region_name']."</a> ";
				}
			}
		}
	}
	
	$result['cookeinfo'] = array('key'=>$region,'value'=>$rid);
	$result['level'] =$nextlevel;
	$result['result'] =$region_list;
	$result['parent_name'] =$parent_name;
	
	//setcookie($region, $rid);
	//foreach($_REQUEST['datainfo'] as $k=>$v){
		//if($k>$level){
		//	setcookie('region_'.$k, 0);
		//}
	//}
	
	die($json->encode($result));
}
if($_REQUEST['act'] == 'setcity'){
	$rid = !empty($_REQUEST['rid']) ? intval($_REQUEST['rid']) : "0";
	$level = (isset($_REQUEST['type']) && $_REQUEST['type'] > 2) ? intval($_REQUEST['type']) : 2;
	if($level == 3){
		$sql = "select r.region_id,r.region_name,r.parent_id as cityid,rr.parent_id as proviceid from ". $ecs->table('region') ." as r 
		left join ".$ecs->table('region')." as rr on r.parent_id = rr.region_id where r.region_id= ".$rid." and r.region_type=3";
		$region_info = $db->getRow($sql);
		if($region_info){

			die($json->encode(array('err_msg' => '', 'result' => $region_info['region_name'],'cookieinfo'=>array('region_1'=>$region_info['proviceid'],'region_2'=>$region_info['cityid'],'region_3'=>$region_info['region_id'],'region_4'=>0))));
		}
	}else{
		$sql = "select region_id,region_name,parent_id from ". $ecs->table('region') ." where region_id= ".$rid." and region_type=2";
		$region_info = $db->getRow($sql);
		if($region_info){

			die($json->encode(array('err_msg' => '', 'result' => $region_info['region_name'],'cookieinfo'=>array('region_1'=>$region_info['parent_id'],'region_2'=>$region_info['region_id'],'region_3'=>0,'region_4'=>0))));
		}
	}
	
}
/* 代码增加_end   By   morestock_morecity */

?>
