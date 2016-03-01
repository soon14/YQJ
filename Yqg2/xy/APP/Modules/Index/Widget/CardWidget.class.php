<?php

class CardWidget extends Widget{

	public function render ($data){
		$count = M('wish')->where('statu = 1')->count();
		return $count;
	}

	//热门博文
		


}
