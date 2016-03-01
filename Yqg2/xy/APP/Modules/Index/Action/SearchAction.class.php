<?php
	class SearchAction extends Action{
		
		//视图
		public function index(){
			import('Class.Category',APP_PATH);
			import('ORG.Util.Page');


			isset($_GET['keyword']) ? $keyword = $_GET['keyword'] : $this->error('非法操作');
			isset($_GET['type']) ? $type = $_GET['type'] : $type='article';
			$this->keyword = $keyword;
			$condition['title']=array(array('like','%'.$keyword.'%'));

			$count = M($type)->where($condition)->count();
			$page = new Page($count,6);
			$page -> setConfig('prev','<'); //这个是更改“上一页”的样式
			$page -> setConfig('next','>');//这个是更改“下一页”的样式
			$page -> setConfig('theme','%upPage% %first% %prePage% %linkPage%  %downPage%');
			$page -> setConfig('theme','<b>%totalRow%%header%</b> <b>%nowPage%/%totalPage%</b> %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%');
			$limit = $page->firstRow.','.$page->listRows;
			switch ($type) {
				case 'article':
					$this->html = D('ArticleView')->getAll($condition,$limit);
					$this->page = $page->show();
					$this->display('list');
					break;
				case 'caseshow':
					$this->html = D('CaseshowView')->getAll($condition,$limit);
					$this->page = $page->show();
					$this->display('caseshow');
					break;
				default:
					$this->html = D('ArticleView')->getAll($condition,$limit);
					p($this->html);
					$this->page = $page->show();
					$this->display('caseshow');
					break;
			}
		}

	}
?>