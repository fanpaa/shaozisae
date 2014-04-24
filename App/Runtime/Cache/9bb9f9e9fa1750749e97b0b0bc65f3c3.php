<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>publish</title>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Bootstrap -->
        <link href="http://cdn.staticfile.org/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <div class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="active">
                            <a href="__APP__">首页</a>
                        </li>
                    </ul>
                    <ul class="nav" style="float:right" id="navLogin">
                            <li>
                                <a href="#myReg" data-toggle="modal">注册</a>
                            </li>
                            <li class="divider-vertical"></li>
                    </ul>
                    <!-- reg -->
                    <div id="myReg" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">注册</h3>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="<?php echo U('Index/reg');?>">
                            <div class="control-group">
                            <label class="control-label" for="inputEmail">用户名：</label>
                            <div class="controls">
                            <input type="text" id="inputEmail" placeholder="手机号/用户名" name="username">
                            </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="inputPassword">密码：</label>
                            <div class="controls">
                            <input type="password" id="inputPassword" placeholder="请输入密码" name="password">
                            </div>
                            </div><div class="control-group">
                            <label class="control-label" for="inputPassword">确认密码：</label>
                            <div class="controls">
                            <input type="password" id="inputPassword" placeholder="请输入密码" name="repassword">
                            </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPermission">您是：</label>
                                <div class="controls">
                                    <select id="inputPermission" placeholder="" name="permission">
                                        <option>
                                            
                                        </option>
                                        <option value="1">
                                            企业用户
                                        </option>
                                        <option value="2">
                                            学生用户
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                            <div class="controls">
                            <button type="submit" class="btn">注册</button>
                            </div>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                        </div>
                    </div>
                    <!-- login -->
                    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">登录</h3>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="<?php echo U('Index/login');?>">
                            <div class="control-group">
                            <label class="control-label" for="inputEmail">帐号：</label>
                            <div class="controls">
                            <input type="text" id="inputEmail" placeholder="手机号/用户名" name="username">
                            </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="inputPassword">密码：</label>
                            <div class="controls">
                            <input type="password" id="inputPassword" placeholder="请输入密码" name="password">
                            </div>
                            </div>
                            <div class="control-group">
                            <div class="controls">
                            <label class="checkbox">
                            <input type="checkbox">记住我
                            </label>
                            <button type="submit" class="btn">登录</button>
                            </div>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="container row">
        <div class="span12">
            <img src="/img/logo.png">
        </div>
        <div>
            <form class="form-horizontal" method="post" action="__URL__/add">
                <div class="control-group">
                    <label class="control-label" for="inputTitle">标题：</label>
                    <div class="controls">
                        <input type="text" id="inputTitle" placeholder="" name="title">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputCategory">分类：</label>
                    <div class="controls">
                        <select id="inputCategory" placeholder="" name="category">
                            <option value="1">
                                1
                            </option>
                            <option value="2">
                                2
                            </option>
                            <option value="3">
                                3
                            </option>
                            <option value="4">
                                4
                            </option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPay">工资：</label>
                    <div class="controls">
                        <input type="text" id="inputPay" placeholder="" name="pay"><span> 元/天</span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputContent">描述：</label>
                    <div class="controls">
                        <textarea id="inputContent" name="content">
                        </textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPhoto">上传照片：</label>
                    <div class="controls"></div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputCompany">公司名称：</label>
                    <div class="controls">
                        <input type="text" id="inputCompany" placeholder="" name="company">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputAddress">工作地点：</label>
                    <div class="controls">
                        <select id="inputAddress" placeholder="" name="address" class="input-medium">
                            <option value="">
                            </option>
                            <option value="黄浦">
                                黄浦
                            </option>
                            <option value="静安">
                                静安
                            </option>
                            <option value="卢湾">
                                卢湾
                            </option>
                            <option value="徐汇">
                                徐汇
                            </option>
                            <option value="长宁">
                                长宁
                            </option>
                            <option value="闸北">
                                闸北
                            </option>
                            <option value="普陀">
                                普陀
                            </option>
                            <option value="虹口">
                                虹口
                            </option>
                            <option value="杨浦">
                                杨浦
                            </option>
                            <option value="浦东新区">
                                浦东新区
                            </option>
                            <option value="闵行">
                                闵行
                            </option>
                            <option value="松江">
                                松江
                            </option>
                            <option value="宝山">
                                宝山
                            </option>
                            <option value="嘉定">
                                嘉定
                            </option>
                            <option value="青浦">
                                青浦
                            </option>
                            <option value="奉贤">
                                奉贤
                            </option>
                            <option value="南汇">
                                南汇
                            </option>
                            <option value="金山">
                                金山
                            </option>
                            <option value="崇明">
                                崇明
                            </option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="text" id="inputDetailAddress" placeholder="" name="detailaddress">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPhone">联系电话：</label>
                    <div class="controls">
                        <input type="text" id="inputPhone" placeholder="" name="phone">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">免费注册并发布</button> <button type="button" class="btn">取消</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
       
<script src="http://cdn.staticfile.org/jquery/1.10.2/jquery.min.js" type="text/javascript">
</script>
<script src="http://cdn.staticfile.org/twitter-bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript">
</script>
    <script type="text/javascript">
    $(function(){
        var name="<?php echo ($usr); ?>";
        if(!name){
            $("<li>",{
            "html":"<a href='#myModal' data-toggle='modal'>登录</a>"
        }).appendTo("#navLogin");
           return 
        }  
        $("<li>",{
            "html":"<a href='javascript:'><?php echo ($usr); ?></a>"
        }).appendTo("#navLogin");
        $("<li>",{
            "class":"divider-vertical"
        }).appendTo("#navLogin");
        $("<li>",{
            "html":"<a href='javascript:'><?php echo ($jifen); ?></a>"
        }).appendTo("#navLogin");
        $("<li>",{
            "class":"divider-vertical"
        }).appendTo("#navLogin");
        $("<li>",{
            "html":"<a href='<?php echo U('Index/logout');?>'>登出</a>"
        }).appendTo("#navLogin");
    })
    </script>
</body>
</html>