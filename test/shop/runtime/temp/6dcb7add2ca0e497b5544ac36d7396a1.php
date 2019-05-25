<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"E:\wamp\www\shop\public/../application/index\view\artlist\artlist.htm ";i:1556867018;s:66:"E:\wamp\www\shop\public/../application/index\view\public\head.htm ";i:1557402829;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>二手交易</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link href="__INDEX__/style/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />
    <script src="__INDEX__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/userregister.js"></script>
    <script src="__INDEX__/style/bootstrap.js"></script>  <!--bootstrp-->
     
    <link rel="stylesheet" href="__INDEX__/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="__INDEX__/style/voteitup.css" type="text/css" />
   <link rel="stylesheet" href="__INDEX__/style/list.css" type="text/css" />
</head>
<body id="list_style_2" class="list_style_2">
 <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }  
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div> 

 <script src="http://127.0.0.1/shop/public/static/admin/style/jquery_002.js"></script>
    <script src="http://127.0.0.1/shop/public/static/admin/style/bootstrap.js"></script>
    <script src="http://127.0.0.1/shop/public/static/admin/style/jquery.js"></script>
    <!Beyond Scripts
    <script src="http://127.0.0.1/shop/public/static/admin/style/beyond.js"></script> 
<div id="header_wrap">
    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
               
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">

<ul id="jsddm">

<li><a class="navi_home" href="<?php echo url('index/index'); ?>">首页</a></li>

<?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
<li><a  <?php if($cate['children'] != 0): ?> class="havechild" <?php endif; ?> href="http://127.0.0.1/shop/public/index.php/index/artlist/index/cateid/<?php echo $cate['id']; ?>"><?php echo '<?'; ?>
"><?php echo $cate['catename']; ?></a>
    <?php if($cate['children'] != 0): ?>
<ul>
<?php foreach ($cate['children'] as $k2 => $v2):?>
<li><a href="http://127.0.0.1/shop/public/index.php/index/artlist/index/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>
<?php endforeach;?> 
</ul>
<?php endif; ?>
 </li>
 <?php endforeach; endif; else: echo "" ;endif; ?>

</ul>

            <div style="clear: both;">
            </div>
        </div>

<!--登录界面-->
       <div class="navbar-header pull-right"style="float:right;">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/shop/public/static/admin/images/adam-nuoshou.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('name'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            

                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>user</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('User/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('index/useredit',array('userid'=>\think\Request::instance()->session('userid'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('index/add'); ?>">
                                            发布文章
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
      <form  name="formsearch" action="<?php echo url('search/index'); ?>" method="get">                
<input name="keywords" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="" onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='';}" />
        </form>
                        </div>
                <div style="float: left;">
                    <img src="__INDEX__/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>

                
            </div>
        </div>
        
        
    </div>
</div>

</div>


    <div id="wrapper">
       

    <div id="xh_container">
        <div id="xh_content">

        <div class="path"><a href='#'>主页</a> > 
            <?php if(is_array($posArr) || $posArr instanceof \think\Collection): $i = 0; $__LIST__ = $posArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$posCate): $mod = ($i % 2 );++$i;?>
                <a href='<?php echo url('artlist/index',array('cateid'=>$posCate['id'])); ?>'><?php echo $posCate['catename']; ?></a> > 
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div><div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">


<?php if(is_array($artRes) || $artRes instanceof \think\Collection): $i = 0; $__LIST__ = $artRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
    <div class="xh_post_h_3 ofh">
                            <div class="xh">
                                <a target="_blank" href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"> <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['title']; ?>" height="240" width="400"></a>
                            </div>
                            <div class="r ofh">
                                <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                                    <a target="_blank" href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date("Y年m月d日",$article['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                                                                       <?php echo $article['desc']; ?>
                                
                                </div>
                                <div class="b">
                                    <a href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" class="xh_readmore" rel="nofollow">read
                                        more</a> <span title="<?php echo $article['zan']; ?>" class="xh_love"><span class="textcontainer"><span><?php echo $article['zan']; ?></span></span> </span> <span title="人浏览" class="xh_views">
                                                     <?php echo $article['click']; ?></span>
                                </div>
                            </div>
                        </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    
                <div id="pagination"><div class="wp-pagenavi">
               <?php echo $artRes->render(); ?>


                </div></div>
            </div>
        </div>
        <div id="xh_sidebar">        
<!-- 右侧 -->

         <div class="widget">

<div style="background: url('__INDEX__/style/img/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<h2>最近文章</h2>
<ul id="ulHot">
<?php if(is_array($serRec) || $serRec instanceof \think\Collection): $i = 0; $__LIST__ = $serRec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" target="_blank"><img src="<?php echo $art['thumb']; ?>" width="83" title="{art.title}" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/roadbicycle/110.html" target="_blank" title="<?php echo $art['title']; ?>"><?php echo $art['title']; ?></a></div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>



</ul>
                </div>
            
            <div class="widget portrait">
    <div>
        <div class="textwidget">
           <br><br>          
<script type="text/javascript">BAIDU_CLB_fillSlot("870073");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870080");</script>
<script type="text/javascript">BAIDU_CLB_fillSlot("870081");</script>
        </div>
    </div>
</div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor"></div>

    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <script type="text/javascript">
        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () { $(".boxBor").hide(); }, 500);
            });
            $(".boxBor").hover(
                function () {
                    clearTimeout(imgHoverSetTimeOut);
                }
                , function () {
                    $(".boxBor").hide();
                }
            );
        });
        function IBoxBor() {
            window.open($("#hdBoxbor").val());
        }
        function goanewurl() {
            window.open($("#hdUrlFocus").val());
        }
</script>

    </div>

<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul id="menu-%e5%b0%be%e9%83%a8%e5%af%bc%e8%88%aa" class="menu">
                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="/aboutus.html">关于我们</a></li>
                <li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157">
                    <a href="/news/">行业资讯</a></li>
                <li id="menu-item-158" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-158">
                    <a href="/tougao.html">我要投稿</a></li>
            </ul>
        </div>
        
    </div>
</div>
<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>

</body>
</html>
