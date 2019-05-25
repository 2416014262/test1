<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\wamp\www\shop\public/../application/index\view\index\useredit.htm ";i:1556775633;}*/ ?>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
    <title>二手交易论坛</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/shop/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/shop/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/shop/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/shop/public/static/admin/style/animate.css" rel="stylesheet">
    
</head>
<body>
    <!-- 头部 -->
    
    <!-- /头部 -->
    
    <div class="main-container container-fluid">
        <div class="page-container">
                        <!-- Page Sidebar -->
            
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                       
                    </li>
                                        
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改密码</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('index/useredit'); ?>" method="post">
                        <input type="hidden" name="userid" value="<?php echo $admin['userid']; ?>">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">用户名称</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="username" required="" type="text" value="<?php echo $admin['username']; ?>">
                                <!--传值过来-->
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="group_id" class="col-sm-2 control-label no-padding-right">管理员密码</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="password"  type="text" >
                            </div>
                            
                        </div>  
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>  
    </div>

        <!--Basic Scripts-->
    <script src="http://127.0.0.1/shop/public/static/admin/style/jquery_002.js"></script>
    <script src="http://127.0.0.1/shop/public/static/admin/style/bootstrap.js"></script>
    <script src="http://127.0.0.1/shop/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://127.0.0.1/shop/public/static/admin/style/beyond.js"></script>
    


</body></html>