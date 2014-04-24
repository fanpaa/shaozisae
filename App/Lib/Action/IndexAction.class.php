<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index(){
        $address=$this->_param('address');
        $category=$this->_param('category');
        $title=$this->_param('title');
        //dump($address);
        if($address){
            $map="address='$address'";
            //dump($map);
        }else if($category){
            $map="category='$category'";
        }else if($title){
            $map['title']=array('like',"%$title%");
        }       
        //dump($map);
        $Data = M('Publish'); // 实例化Data数据对象
        import('ORG.Util.Page');// 导入分页类
        $count      = $Data->where($map)->count();// 查询满足要求的总记录数 $map表示查询条件
        $Page       = new Page($count);// 实例化分页类 传入总记录数
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询
        $list = $Data->where($map)->order('date desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('data',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出


        if(session('?username')){
            $User=M('User');
            $usr=session('username');
            $jifen=$User->where("username='$usr'")->getField('jifen');
            $permission=$User->where("username='$usr'")->getField('permission');
            $this->assign('jifen',$jifen);
            $this->assign('usr',$usr);
            $this->assign('permission',$permission);
        }




        $this->display(); // 输出模板
    }

    public function login(){
        $User = M('User');
        $data = array('username' =>$_POST['username'] ,'password' =>$_POST['password']  );
        $list=$User->where($data)->count();
        if ($list) {
            //print_r($list);
            session('username',$_POST['username']);
            //session('permission',$_POST['permission'])
            $this->success('登录成功！');
            //dump(session('username'));
        }else{
            $this->error('登录失败！');
        }
        //$this->redirect('Index/index');

    }

    public function logout(){
        session(null); 
        $this->redirect('Index/index');
    }

    public function reg(){
        $Form   =   D('User');
        if($Form->create()) {
            $result =   $Form->add();
            if($result) {
                $this->success('注册成功！');
            }else{
                $this->error('注册失败！');
            }
        }else{
            $this->error($Form->getError());
        }

    }

    public function sign(){
        $User=M('User');
        $usr=session('username');
        $sign=$User->where("username='$usr'")->getField('signtime');
        if($sign==date('Y-m-d',time()))
        {
            $this->redirect('Index/index');
           return; 
        }
        $User->where("username='$usr'")->setField('signtime',date('Y-m-d',time()));
        $User->where("username='$usr'")->setInc('jifen');
        $this->redirect('Index/index');
        //print_r($sign);
        //print_r(date('Y-m-d',time()));

    }
}

?>