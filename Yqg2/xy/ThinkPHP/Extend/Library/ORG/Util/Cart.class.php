<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: ToniLiu <cniiliuqi@126.com>
// +----------------------------------------------------------------------
// $Id: Cart.class.php  ToniLiu $

/**
 +------------------------------------------------------------------------------
 * Cart实现类
 +------------------------------------------------------------------------------
 * @category   Think
 * @package  Think
 * @subpackage  Util
 * @author    ToniLiu <cniiliuqi@126.com>
 * @version   $Id: Cart.class.php
 +------------------------------------------------------------------------------
 */

class Cart{

	//THINKPHP_MODLE
	private $model;
	
	private $user_cart;

	public function __construct(){
	
		$this->model = D("Item");
		$this->user_cart = new Model();
		
		if(!$_SESSION['cart']){
			$_SESSION['cart'] = array();
			$_SESSION['cart']['goods_list'] = array();
			$_SESSION['cart']['total_num'] = 0;
			$_SESSION['cart']['total_price'] = 0.00;
			//如果是已经登录的用户
			if($_SESSION['ucenter']['user_id']){
				$user_cart_result = $this->user_cart->query("select cart_id,user_id,item_id,item_name,volume,market_price,price,item_sn from shangfox_cart where user_id = ".$_SESSION['ucenter']['user_id']);
				foreach ($user_cart_result as $value){
					$_SESSION['cart']['goods_list'][$value['item_id']] = array(
																						'item_id' => $value['item_id'],
																						'item_name' => $value['item_name'],
																						'volume' => $value['volume'],
																						'price' => $value['price'],
																						'market_price' => $value['market_price'],
																						'item_sn' =>$value['item_sn']
																					);
					$_SESSION['cart']['total_price'] = $_SESSION['cart']['total_price'] + $value['price'];
					$_SESSION['cart']['total_num'] = $_SESSION['cart']['total_num'] + 1;					
				}
			}
		}
		else{
			//如果是已经登录的用户
			if($_SESSION['ucenter']['user_id']){
		
				foreach($_SESSION['cart']['goods_list'] as $goods_value){
					$user_cart_result = $this->user_cart->query("select cart_id,item_id from shangfox_cart where user_id = ".$_SESSION['ucenter']['user_id']." limit 1");
					if(!$user_cart_result[0]){
						$this->user_cart->execute("INSERT INTO `shangfox_cart` (`cart_id`, `user_id`, `user_name`, `session_id`, `item_id`, `item_sn`, `item_name`, `volume`, `market_price`, `price`, `discount`, `quantity`, `amount`, `create_time`, `date_line`) VALUES (NULL, '".$_SESSION['ucenter']['user_id']."', '".$_SESSION['ucenter']['user_name']."', '".session_id()."', '".$goods_value['item_id']."', '".$goods_value['item_sn']."', '".$goods_value['item_name']."', '".$goods_value['volume']."', '".$goods_value['market_price']."', '".$goods_value['price']."', '0', '0', '0', '".date("Y-m-d H:i:s")."', '".time()."');");
					}
				}
				
				//清空SESSION购物车信息
				$_SESSION['cart']['total_price'] = 0;
				$_SESSION['cart']['total_num'] = 0;
				
				//根据用户的购物车信息，重构SESSION中的购物车信息
				$this->user_cart = new Model();
				$user_cart_result = $this->user_cart->query("select cart_id,user_id,item_id,item_name,volume,market_price,price,item_sn from shangfox_cart where user_id = ".$_SESSION['ucenter']['user_id']);
				foreach ($user_cart_result as $value){
					$_SESSION['cart']['goods_list'][$value['item_id']] = array(
																						'item_id' => $value['item_id'],
																						'item_name' => $value['item_name'],
																						'volume' => $value['volume'],
																						'price' => $value['price'],
																						'market_price' => $value['market_price'],
																						'item_sn' =>$value['item_sn']
																					);
					$_SESSION['cart']['total_price'] = $_SESSION['cart']['total_price'] + $value['price'];
					$_SESSION['cart']['total_num'] = $_SESSION['cart']['total_num'] + 1;					
				}
			}
		}
	}

	//添加单个商品到购物车
	public function add_goods($goods_id){
	
		$goods_id = $goods_id * 1;
		
		if($goods_id){
			if($this->model->find($goods_id)){

				if($this->model->status != 5){
					return json_encode(array('state_code' => 2,'state_message' => 'This goods is down!'));
				}
				$tmp_price = $this->model->price;
				if((int)$tmp_price){
					if(!$_SESSION['cart']['goods_list'][$this->model->item_id]){
						$_SESSION['cart']['goods_list'][$this->model->item_id] = array(
																						'item_id' => $this->model->item_id,
																						'item_name' => $this->model->item_name,
																						'volume' => $this->model->volume,
																						'price' => $this->model->price,
																						'market_price' => $this->model->market_price,
																						'item_sn' => $this->model->item_sn
																					);
						$_SESSION['cart']['total_price'] = $_SESSION['cart']['total_price'] + $this->model->price;
						$_SESSION['cart']['total_num'] = $_SESSION['cart']['total_num'] + 1;
						//如果是登录用户,记录到shangfox_cart表中
						if($_SESSION['ucenter']['user_id']){
							
							$user_cart_result = $this->user_cart->query("select cart_id,item_id from shangfox_cart where user_id = ".$this->model->item_id." limit 1");
							if(!$user_cart_result[0]){
								
								$this->user_cart->execute("INSERT INTO `shangfox_cart` (`cart_id`, `user_id`, `user_name`, `session_id`, `item_id`, `item_sn`, `item_name`, `volume`, `market_price`, `price`, `discount`, `quantity`, `amount`, `create_time`, `date_line`) VALUES (NULL, '".$_SESSION['ucenter']['user_id']."', '".$_SESSION['ucenter']['user_name']."', '".session_id()."', '".$this->model->item_id."', '".$this->model->item_sn."', '".$this->model->item_name."', '".$this->model->volume."', '".$this->model->market_price."', '".$this->model->price."', '0', '0', '0', '".date("Y-m-d H:i:s")."', '".time()."');");
								return json_encode(array('state_code' => 5,'state_message' => 'add Ok and insert to db!'));
							}
						}
					}
					else{
						return json_encode(array('state_code' => 3,'state_message' => 'This goods is at cart!'));
					}
				}
				else{
					return json_encode(array('state_code' => 1,'state_message' => 'price is zero'));
				}
			}
			else{
				return json_encode(array('state_code' => 9,'state_message' => "Don't find item!"));
			}
		}
		else{
			return json_encode(array('state_code' => 0,'state_message' => 'item_id is null'));
		}
	}
	
	//从购物车删除单个商品
	public function delete_goods($goods_id){
		$goods_id = $goods_id * 1;
		if($goods_id){
			if($_SESSION['cart']['goods_list'][$goods_id]){
				$_SESSION['cart']['total_price'] = $_SESSION['cart']['total_price'] - $_SESSION['cart']['goods_list'][$goods_id]['price'];
				$_SESSION['cart']['total_num'] = $_SESSION['cart']['total_num'] - 1;
				unset($_SESSION['cart']['goods_list'][$goods_id]);
				
				if($_SESSION['ucenter']['user_id']){
					$user_cart_result = $this->user_cart->query("select cart_id,item_id from shangfox_cart where user_id = ".$_SESSION['ucenter']['user_id']." and item_id = $goods_id limit 1");
					if($user_cart_result[0]){
						$this->user_cart->execute("delete from shangfox_cart where cart_id = ".$user_cart_result[0]['cart_id']." limit 1");
					}
				}

				return json_encode(array('state_code' => 11,'state_message' => '商品删除成功!'));
			}
			else{
				return json_encode(array('state_code' => 12,'state_message' => '在购物车中没有找到该商品!'));
			}
		}
		else{
			return json_encode(array('state_code' => 0,'state_message' => 'item_id is null'));
		}
	}
	
	//从购物车批量删除商品
	public function delete_batch_goods($goods_id_string){
		$goods_id_arr = explode(',',$goods_id_string);
		if(sizeof($goods_id_arr)){
			foreach ($goods_id_arr as $goods_id){
				$goods_id = $goods_id * 1;
				if($_SESSION['cart']['goods_list'][$goods_id]){
					$_SESSION['cart']['total_price'] = $_SESSION['cart']['total_price'] - $_SESSION['cart']['goods_list'][$goods_id]['price'];
					$_SESSION['cart']['total_num'] = $_SESSION['cart']['total_num'] - 1;
					unset($_SESSION['cart']['goods_list'][$goods_id]);
					//如果登录了，同时删除shangfox_cart中该用户的信息
					if($_SESSION['ucenter']['user_id']){
						$user_cart_result = $this->user_cart->query("select cart_id,item_id from shangfox_cart where user_id = ".$_SESSION['ucenter']['user_id']." and item_id = $goods_id limit 1");
						if($user_cart_result[0]){
							$this->user_cart->execute("delete from shangfox_cart where cart_id = ".$user_cart_result[0]['cart_id']." limit 1");
						}
					}
				}
			}
			return json_encode(array('state_code' => 11,'state_message' => '商品批量删除成功!'));
		}
		else{
			return json_encode(array('state_code' => 13,'state_message' => '参数错误!'));
		}
	}
	
	//清空购物车
	public function empty_cart(){
		unset($_SESSION['cart']);
		if($_SESSION['ucenter']['user_id']){
			$this->user_cart->execute("delete from shangfox_cart where user_id = ".$_SESSION['ucenter']['user_id']);
		}
		return json_encode(array('state_code' => 14,'state_message' => '清空购物车成功!'));
	}
	
	//输出购物车信息
	public function return_cart_info(){
		return $_SESSION['cart'];
	}
	
}

 ?>