<?php

class WishAction extends CommonAction{
	//列表
	public function index(){
		//分页显示
		import('ORG.Util.Page');
		$count = M('wish')->where('statu=1')->count();
		$page = new Page($count,10);
		$page -> setConfig('prev','<'); //这个是更改“上一页”的样式
		$page -> setConfig('next','>');//这个是更改“下一页”的样式
		$page -> setConfig('theme','<b>%totalRow%%header%</b> <b>%nowPage%/%totalPage%</b>  %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%');//这个是更改显示在页面上的效果，去掉了总的多少条，第几页的显示内容。
		$limit = $page->firstRow.','.$page->listRows;
		$this->page = $page->show();
		$this->html = M('wish')->where('statu=1')->limit($limit)->order('id desc')->select();
		$this->display();
	}


	//列表
	public function trach(){
		//分页显示
		import('ORG.Util.Page');
		$count = M('wish')->where('statu=0')->count();
		$page = new Page($count,20);
		$page -> setConfig('prev','<'); //这个是更改“上一页”的样式
		$page -> setConfig('next','>');//这个是更改“下一页”的样式
		$page -> setConfig('theme','<b>%totalRow%%header%</b> <b>%nowPage%/%totalPage%</b>  %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%');//这个是更改显示在页面上的效果，去掉了总的多少条，第几页的显示内容。
		$limit = $page->firstRow.','.$page->listRows;
		$this->page = $page->show();
		$this->html = M('wish')->where('statu=0')->limit($limit)->order('id asc')->select();
		$this->display();
	}


	//彻底删除所有回收站的文章
	public function delete(){
		$id = $_GET['id'];
		$re = M('wish')->where(array('id'=>$id))->delete();
		$this->redirect(GROUP_NAME.'/Wish/index');  
	}

	//标记已读
	public function yes(){
		$id = $_GET['id'];
		$data = array(
			'statu'=>'1',
			'id'=>$id
			);
		if(M('wish')->save($data)){
			$this->redirect(GROUP_NAME.'/Wish/index');
		}
	}

	//标记未读
	public function no(){
		$id = $_GET['id'];
		$data = array(
			'statu'=>'0',
			'id'=>$id
			);
		if(M('wish')->save($data)){
			$this->redirect(GROUP_NAME.'/Wish/index');
		}
	}
	


}
