<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"E:\wamp\www\shop\public/../application/index\view\index\add.htm ";i:1557422069;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>二手交易论坛</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__INDEX__/style/bootstrap.css" rel="stylesheet">
    <link href="__INDEX__/style/font-awesome.css" rel="stylesheet">
    <link href="__INDEX__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__INDEX__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__INDEX__/style/demo.css" rel="stylesheet">
    <link href="__INDEX__/style/typicons.css" rel="stylesheet">
    <link href="__INDEX__/style/animate.css" rel="stylesheet">
     <!--引入ueditor-->    
      <script src="__INDEX__/ueditor/ueditor.config.js"></script>
       <script src="__INDEX__/ueditor/ueditor.all.min.js"></script>
        <script src="__INDEX__/ueditor/lang/zh-cn/zh-cn.js"></script>
    
</head>
<body>
	<!-- 头部 -->
	
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增文章</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo url('index/add'); ?>" method="post"
                    enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
                            <div class="col-sm-6">
                                 <input class="form-control"  placeholder="" name="title" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                            <div class="col-sm-6">
                                 <input class="form-control"  placeholder="" name="author" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">关键词</label>
                            <div class="col-sm-6">
                                 <input class="form-control"  placeholder="" name="keywords" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">描述</label>
                            <div class="col-sm-6">
                                 <textarea  class="form-control" name="desc"></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                            <div class="col-sm-6">
                                 <input type="file" name="thumb" placeholder="" required=""/>
                            </div>
                        </div>



                         <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">上级栏目</label>
                            <div class="col-sm-6">
                                <select name='cateid'>                                    
                                    <option value="0">顶级文章</option>
                                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $cate['id']; ?>"><?php if($cate['level'] != 0): ?>||<?php endif; ?><?php echo str_repeat('-',$cate['level']*3);?> <?php echo $cate['catename']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">内容</label>
                            <div class="col-sm-6">
                                 <textarea  id="content" name="content"></textarea>
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
    <script src="__INDEX__/style/jquery_002.js"></script>
    <script src="__INDEX__/style/bootstrap.js"></script>
    <script src="__INDEX__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__INDEX__/style/beyond.js"></script>
    <script type="text/javascript">
         UE.getEditor('content',{initialFrameWidth:1500,initialFrameHeight:400,});

    </script>
     <!--ueditor编辑器-->


</body></html>