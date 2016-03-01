<?php
	class InfoAction extends Action{
		//视图
		public function index(){
			$this->shop = M('shop')->where(array('del'=>0))->order('time DESC')->limit(3)->select();
			$this->article = M('article')->where(array('cid'=>array('IN',array('1','38','39','40','41','42','43','44')),'del'=>0))->order('time DESC')->limit(5)->select();
			$this->zx = M('article')->where(array('cid'=>array('IN',array('2')),'del'=>0))->order('time DESC')->limit(5)->select();
			$this->top = M('article')->where(array('del'=>0))->order('click DESC')->limit(4)->select();
			$this->pic = M('article')->where(array('cid'=>array('IN',array('3')),'del'=>0,'thumbnail'=>array('neq','')))->order('time DESC')->limit(5)->select();
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