<?php
	class AddAction extends Action{
		//视图
		public function index(){
			$this->time = time();
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
			if(!I('fromname','','htmlspecialchars')){
			 $this->error("称呼不得为空");
			}
			if(!I('content','','htmlspecialchars')){
			 $this->error("许愿内容不得为空！");
			}

			$str = I('content','','htmlspecialchars');
			$strlen = (strlen($str) + mb_strlen($str,'UTF8')) / 2;
			if ($strlen > 120) {
				$this->error("许愿内容不得超过120个字符/60个汉字");
			}

			if(I('code','','strtolower') != session('verify')) $this->error("验证码错误");
			$data = array(
				'uid'=> I('post.uid','','htmlspecialchars'),
				'content'=> I('post.content','','htmlspecialchars'),
				'type'=> I('post.type','','htmlspecialchars'),
				'class'=> I('post.class','','htmlspecialchars'),
				'fromname'=> I('post.fromname','','htmlspecialchars'),
				'statu'=> 1,
				'time'=> time()
				);

			if(M('wish')->add($data)){
				// import('ORG.Email');
				// $data['mailto'] = '406333726@qq.com';
				// $data['subject'] =	'尚狐网络网站建站需求表：'; 
				// $data['body'] =	'称呼：'.$_POST['name'].'<br/>电话：'.$_POST['tel'].'<br/>Email：'.$_POST['email'].'<br/>具体内容：'.$_POST['content']; //邮件正文内容
				// $mail = new Email();
				// if($mail->send($data)){
				// 	$this->success("成功提交,我们的工作人员会第一时间和您联系，祝您工作愉快...",U(GROUP_NAME.'/Add/index'));
				// }else{
				// 	$this->error("失败了");
				// }
				$this->success("成功提交",U(GROUP_NAME.'/Add/index'));
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