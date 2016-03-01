<?php
	/**
	* 物流
	*/
	class AddressAction extends CommonAction{
		public function index(){
			$this->html = M('address')->order('id ASC')->select();
			$this->display();
		}	

		//添加分类视图
		public function add(){
			$this->display();
		}


		//添加分类的表单处理
		public function addRun(){
			if(M('address')->add($_POST)){
				$this->success("添加成功",U(GROUP_NAME.'/Address/index'));
			}else{
				$this->error('添加失败');
			}
		}

		//排序处理
		public function sort(){
			$db = M('address');
			foreach ($_POST as $id => $sort) {
				$db->where(array('id'=>$id))->setField('sort',$sort);
			}
			$this->redirect(GROUP_NAME.'/Address/index');
		}

		//修改栏目
		public function update(){
			isset($_GET['id']) ? $id = $_GET['id'] : $this->error('非法操作');
			$logistics = M('address')->select($id);
			$this->html = $logistics[0];

			$this->display();
		}

		//修改栏目表单处理
		public function updateRun(){
			$data = array(
				'id' => $_POST['id'],
				'name' => $_POST['name'],
				'qq' => $_POST['qq'],
				'email' => $_POST['email'],
				'address' => $_POST['address'],
				'code' => $_POST['code'],
				'tel' => $_POST['tel'],
				'userid' => $_POST['userid']
				);
			if(M('address')->save($data)){
				$this->success("修改成功",U(GROUP_NAME.'/Address/index'));
			}else{
				$this->error("修改失败");
			}
		}

		//删除
		public function delete(){
			isset($_GET['id']) ? $id = $_GET['id'] : $this->error('非法操作');
			$cate = M('address')->select();
			if(M('address')->delete($id)){
				$this->success("删除成功",U(GROUP_NAME.'/Address/index'));
			}else{
				$this->error("删除失败");
			}
		}

		

	}

?>