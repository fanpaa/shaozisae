<?php 
class DetailAction extends Action{
	public function index(){
		if(!session('?username')){
			$this->error('请先登录！');
		}
		$User=M('User');
		$usr=session('username');
		$jifen=$User->where("username='$usr'")->getField('jifen');
		$permission=$User->where("username='$usr'")->getField('permission');
		$this->assign('jifen',$jifen);
        $this->assign('usr',$usr);
        $this->assign('permission',$permission);
		if ($jifen<0) {
			$this->error('积分不足！');
		}
		
		$res=$User->where("username='$usr'")->setDec('jifen');

		$Data = M('Publish');
		$list=$Data->where("id={$_GET['id']}")->find();
		$this->assign('list',$list);
		//print_r($list);
		
		//dump($res);
		$this->display();
		
	}
	

}


?>