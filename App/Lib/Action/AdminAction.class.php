<?php
	class AdminAction extends Action {
		public function index(){
			$this->display();
		}
		public function dashboard(){
			if(!session('?Administrator')){
			$this->error('请先登录！');
			}
			$query=$this->_param('query');
			if($query=="user"){
				$data=M("User");
				$list=$data->select();
				$this->assign('data',$list);
			}
			if($query=="article"){
				$data=M("Publish");
				$list=$data->select();
				$this->assign('data',$list);
			}
			$this->display();
		}
		public function login(){
			$username=$_POST['username'];
			$pwd=$_POST['pwd'];
			if($username=='Administrator'&& $pwd=='toor'){
				session('Administrator','Administrator']);
				$this->redirect('Admin/dashboard');
			}else{
            $this->error('登录失败！');
        	}

		}
	}



?>