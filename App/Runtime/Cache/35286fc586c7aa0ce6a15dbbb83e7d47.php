<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>index</title>
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
    <li>
        <a href="#myReg" data-toggle="modal">用户XXX</a>
    </li>
    <li class="divider-vertical"></li>
    <li>
        <a href="<?php echo U('Index/logout');?>">登出</a>
    </li>

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


        <div class="row">
            <div class="span3">
                <div>
                    <form class="form-search">
                        <input type="text" class="input-small"> <button type="submit" class="btn">查找</button>
                    </form>
                </div>
                <div>
                    <dl class="sidebar-filter">
                        <dt>
                            筛选
                        </dt>
                        <dd>
                            派发/促销
                        </dd>
                        <dd>
                            家教/老师
                        </dd>
                        <dd>
                            餐厅/服务员
                        </dd>
                        <dd>
                            模特/礼仪
                        </dd>
                        <dd>
                            网站/设计
                        </dd>
                        <dd>
                            会计/财务
                        </dd>
                        <dd>
                            其他兼职
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="span9">
                <ul class="inline new-info">
                    <li><strong class="strong-style">全上海</strong></li>
                    <li><a rel="" href="/jianzhi/m7264/">黄浦</a></li>
                    <li><a rel="" href="/jianzhi/m7263/">静安</a></li>
                    <li><a rel="" href="/jianzhi/m7262/">卢湾</a></li>
                    <li><a rel="" href="/jianzhi/m7261/">徐汇</a></li>
                    <li><a rel="" href="/jianzhi/m7260/">长宁</a></li>
                    <li><a rel="" href="/jianzhi/m7259/">闸北</a></li>
                    <li><a rel="" href="/jianzhi/m7258/">普陀</a></li>
                    <li><a rel="" href="/jianzhi/m7257/">虹口</a></li>
                    <li><a rel="" href="/jianzhi/m7256/">杨浦</a></li>
                    <li><a rel="" href="/jianzhi/m7255/">浦东新区</a></li>
                    <li><a rel="" href="/jianzhi/m7254/">闵行</a></li>
                    <li><a rel="" href="/jianzhi/m7253/">松江</a></li>
                    <li><a rel="" href="/jianzhi/m7252/">宝山</a></li>
                    <li><a rel="" href="/jianzhi/m7251/">嘉定</a></li>
                    <li><a rel="" href="/jianzhi/m7250/">青浦</a></li>
                    <li><a rel="" href="/jianzhi/m7249/">奉贤</a></li>
                    <li><a rel="" href="/jianzhi/m7248/">南汇</a></li>
                    <li><a rel="" href="/jianzhi/m7247/">金山</a></li>
                    <li><a rel="" href="/jianzhi/m7246/">崇明</a></li>
                </li>
            </ul>
            <h5 class="new-info">
                赞助商链接
            </h5>
            <div>
                <ul class="inline">
                    <li><img  title="全国高校毕业生夏季招聘月" src="http://u.img.huxiu.com/portal/201308/22/191123opp3f11kyx9yuuro.jpg.thumb.jpg"></li>
                    <li><img  title="全国高校毕业生夏季招聘月" src="http://u.img.huxiu.com/portal/201308/22/184055gl5bgg45vk5b51m4.jpg.thumb.jpg"></li>
                    <li><img  title="玛氏-箭牌2013创意策划大赛" src="http://u.img.huxiu.com/portal/201308/22/111747sw06wln0swi9eelq.jpg.thumb.jpg"></li>
                    <li><img  src="http://u.img.huxiu.com/portal/201308/22/100158l9z9a7cj9d7rraey.jpg.thumb.jpg"></li>
                    <li><img  title="EMC2013爱存储在线知识竞赛" src="http://u.img.huxiu.com/portal/201308/21/164258kxkv33gxkwn333w3.png.thumb.jpg"></li>
                    <li><img  title="招商银行信用卡中心2013校园招聘及实习生招聘" src="http://u.img.huxiu.com/portal/201308/21/115505yvy0mzmvknygv0rk.jpg.thumb.jpg"></li>

                </ul>

            </div>
            <h5 class="new-info">
                最新信息
            </h5>
            <div>
                <ul class="unstyled">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="info-li-style">
                            <a href="__APP__/Detail/index/id/<?php echo ($vo["id"]); ?>" class="media-cap"><img src="/img/photo_64.jpg"></a>
                            <div>
                                <div>
                                    <a href="__APP__/Detail/index/id/<?php echo ($vo["id"]); ?>" class="media-body-title"><?php echo ($vo["title"]); ?></a>
                                    <span class="media-body-time"><?php echo ($vo["date"]); ?></span>
                                </div>
                                <div class="media-body-address"><?php echo ($vo["address"]); ?> - <?php echo ($vo["detailaddress"]); ?></div> 
                                <div class="media-body-pay"><?php echo ($vo["pay"]); ?>元/天</div>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="pagination">
                <?php echo ($page); ?>
            </div>
        </div>
    </div>
</div>
       
<script src="http://cdn.staticfile.org/jquery/1.10.2/jquery.min.js" type="text/javascript">
</script>
<script src="http://cdn.staticfile.org/twitter-bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript">
</script>

</body>
</html>