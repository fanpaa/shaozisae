<?php
class UserModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('username','require','用户名必须'),
        array('username','','用户名已经存在！',0,'unique',1), 
        array('repassword','password','确认密码不正确',0,'confirm'),
        array('password','require','密码必须'),
        array('permission','require','类别必须')
        );
    // 定义自动完成
    /*protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );*/
}



?>