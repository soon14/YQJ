<?php
	class SystemAction extends CommonAction{

		public function verify(){
			$this->display();
		}

		public function verifyRun(){
			if(F('verify',$_POST,CONF_PATH)){
				$this->success('修改成功',U(GROUP_NAME.'/System/verify'));
			}else{
				$this->error('修改失败,请修改'.CONF_PATH.'verify.php权限');
			}
		}

		public function webconfig(){
			$this->display();
		}

		public function webconfigRun(){
			if(F('webconfig',$_POST,CONF_PATH)){
				$this->success('修改成功',U(GROUP_NAME.'/System/webconfig'));
			}else{
				$this->error('修改失败,请修改'.CONF_PATH.'webconfig.php权限');
			}
		}

		public function stmp(){
			$this->display();
		}

		public function stmpRun(){
			if(F('stmp',$_POST,CONF_PATH)){
				$this->success('修改成功',U(GROUP_NAME.'/System/stmp'));
			}else{
				$this->error('修改失败,请修改'.CONF_PATH.'stmp.php权限');
			}
		}


	}


?>