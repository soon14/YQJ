<?php
	class IndexAction extends Action{
		public function index(){
			import('Class.Category',APP_PATH);
			import('ORG.Util.Page');
			$where = array('statu'=>1);
			$count = M('wish')->where($where)->count();
			$this->count = $count;
			$page = new Page($count,16);
			$page -> setConfig('prev','<'); 
			$page -> setConfig('next','>');
			$page -> setConfig('theme','<b>%totalRow%%header%</b> <b>%nowPage%/%totalPage%</b> %upPage% %first% %prePage% %linkPage% %nextPage% %downPage% %end%');
			$limit = $page->firstRow.','.$page->listRows;
			$this->page = $page->show('/Index/Index/index');
			$this->html = M('wish')->where($where)->order('id DESC')->limit($limit)->select();
			$this->display();
		}

		public function search(){
			
			$count = M('wish')->where('statu = 1')->count();
			$this->count = $count;
			isset($_GET['id']) ? $id = $_GET['id'] : $this->error('非法操作');

			$where = array('statu'=>1,'id'=>$id);
			if (M('wish')->where($where)->limit(1)->select()) {
				$this->html = M('wish')->where('id='.$id)->limit(1)->select();
			}else{
				$this->error('该条数据不存在，请重试！');
			}

			$field = array('id');
			//上一页
			$this->front = M('wish')->where('id<'.$id.' and statu=1')->limit(1)->order('id desc')->find($field);
			$this->next = M('wish')->where('id>'.$id.' and statu=1')->limit(1)->order('id asc')->find($field);
			$this->display('show');			


		}

		public function show(){
			$where = array('statu'=>1);
			$count = M('wish')->where($where)->count();
			$this->count = $count;
			isset($_GET['id']) ? $id = $_GET['id'] : $this->error('非法操作');

			if (M('wish')->where('id='.$id.' and statu = 1')->limit(1)->select()) {
				$this->html = M('wish')->where('id='.$id)->limit(1)->select();
				
			}else{
				$this->error('该条数据不存在，请重试！');
			}

			$field = array('id');
			//上一页
			$this->front = M('wish')->where('id<'.$id.' and statu=1')->limit(1)->order('id desc')->find($field);
			$this->next = M('wish')->where('id>'.$id.' and statu=1')->limit(1)->order('id asc')->find($field);
			$this->display();
		}




		//顶
		public function ding(){
			header("Content-Type: text/html;charset=utf-8");
			header("Cache-Control:no-cache");
			$type=$_POST['ding'];
			$id=$_POST['id'];
			M('digg')->where(array('id'=>$id))->setInc('ding');
			$newding = M('digg')->where("id=1")->getField('ding');
			$res = '{"newding":"'.$newding.'"}';
			echo $res;
		}


		function send(){
			if(I('code','','strtolower') != session('verify')) $this->error("验证码错误");
			$data = array(
				'email'=> I('post.email','','htmlspecialchars'),
				'name'=> I('post.name','','htmlspecialchars'),
				'content'=> I('post.content','','htmlspecialchars'),
				'tel'=> $_POST['tel'],
				'time'=> time()
				);

			if(M('require')->add($data)){
				//发送邮件
				import('ORG.Email');//导入本类
				//$data['mailto'] = $_POST['email']; //收件人
				$data['mailto'] = '406333726@qq.com'; //收件人
				$data['subject'] =	'尚狐网络网站建站需求表：'; //邮件标题
				$data['body'] =	'称呼：'.$_POST['name'].'<br/>电话：'.$_POST['tel'].'<br/>Email：'.$_POST['email'].'<br/>具体内容：'.$_POST['content']; //邮件正文内容
				$mail = new Email();
				if($mail->send($data)){
					$this->success("成功提交,我们的工作人员会第一时间和您联系，祝您工作愉快...",U(GROUP_NAME.'/Index/index'));
				}else{
					$this->error("失败了");
				}
			}else{
				$this->error('添加失败');
			}

		}


		public function verify(){
			import('Class.Image',APP_PATH);
			Image::verify();
		}

	}
?>