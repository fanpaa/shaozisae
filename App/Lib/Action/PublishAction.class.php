<?php 
class PublishAction extends Action{
	public function index(){
		if(session('?username')){
            $User=M('User');
            $usr=session('username');
            $jifen=$User->where("username='$usr'")->getField('jifen');
            $permission=$User->where("username='$usr'")->getField('permission');
            $this->assign('jifen',$jifen);
            $this->assign('usr',$usr);
            $this->assign('permission',$permission);
        }
		$this->display();
	}
	public function add(){
		$Form   =   D('Publish');
		if($Form->create()) {
			$result =   $Form->add();
			if($result) {
				$this->success('操作成功！');
			}else{
				$this->error('写入错误！');
			}
		}else{
			$this->error($Form->getError());
		}
	}

}


?>