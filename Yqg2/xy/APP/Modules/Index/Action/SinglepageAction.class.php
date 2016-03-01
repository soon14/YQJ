<?php
	class SinglepageAction extends Action{
		
		//视图
		public function index(){
			$filename = $_GET['filename'];
			if(!M('singlepage')->where(array('filename'=>$filename))->select()){
				$this->redirect('/404');  
			}
			$this->filename = $filename;
			$where = array('filename'=>$filename);
			$singlepage = M('singlepage')->where($where)->find();
			$this->singlepage = $singlepage;
			$type = $singlepage['type'];
			$templates = $singlepage['templates'];


			//map
			$this->brandlist = M('shopcate')->where('pid=0')->order('id asc')->select();
			$this->articlelist = M('articlecate')->order('id asc')->select();
			$this->singlepagelist = M('singlepage')->order('id asc')->select();

			$this->pagelist = M('singlepage')->where(array('type'=>$type))->order('sort asc')->select();
			if (empty($templates)) {
				$this->display();
			}else{
				$this->display($templates);
			}
			
		}
	}
?>