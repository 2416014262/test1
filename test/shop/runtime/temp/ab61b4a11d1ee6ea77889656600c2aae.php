<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"E:\wamp\www\shop\public/../application/index\view\article\article.htm ";i:1556858778;s:66:"E:\wamp\www\shop\public/../application/index\view\public\head.htm ";i:1557402829;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>二手交易</title>
<meta name="description" content="二手交易" />
<meta name="keywords" content="二手交易" />
<link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />       
<script src="__INDEX__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/userregister.js"></script>
    <link rel="stylesheet" href="__INDEX__/style/pagenavi-css.css" type="text/css" media="all" />
    <link rel="stylesheet" href="__INDEX__/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="__INDEX__/style/voteitup.css" type="text/css" />
    <link rel="stylesheet" href="__INDEX__/style/article.css" type="text/css" />
<script language="javascript" type="text/javascript" src="/include/dedeajax2.js"></script>
<script language="javascript" type="text/javascript">
<!--


-->
</script>
<script type="text/javascript">

function ILike(th, v) {
    if (v) {
        $(th).addClass("single_views_over");
    }
    else {
        $(th).removeClass("single_views_over");
    }
}

</script>
 
</head>
<body class="single2">
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
        <div id="container">
            <div id="content">
                <div class="post" id="post-19563" style="border-right: solid 1px #000000; min-height: 1700px;
                    margin-top: 10px;">
                    <div class="path"><a href='#'>主页</a> >                         
                    </div>
                    <div class="single_entry single2_entry">
                        <div class="entry fewcomment">
                            <div class="title_container">
                                <h2 class="title single_title">
                                    <span><?php echo $articles['title']; ?></span><span class="title_date"></span></h2>
                                <p class="single_info">时间：<?php echo date("Y-m-d",$articles['time']); ?> 12:28&nbsp;&nbsp;&nbsp;编辑：<?php echo $articles['author']; ?></p>
                            </div>
                            <div class="div-content">
                               
                                 <?php echo $articles['content']; ?>
                                
                                <center id="pagenav">
                                    </center>
                                <div id="BottomNavOver" style="height: 80px;">
                                    <div style="float: left; font-size: 12px;">
                                        
                                    </div>
                                    <div style="float: right; padding-right: 20px; width: 120px;" class="div">
                                        <table cellpadding="0" cellspacing="0" border="0" style="background-color: transparent;
                                            border: 0px solid #EEEEEE; border-collapse: collapse; margin: 5px 0 10px;">
                                            <tr>
                                                <td style="border-width: 0px; padding: 0px; padding-right: 4px;">

                                                </td>
                                                <td style="border-width: 0px; padding: 0px;">
                                                    <!-- JiaThis Button BEGIN -->
                                                    <div class="jiathis_style">
                                                        <a class="jiathis_button_qzone"></a><a class="jiathis_button_tqq"></a><a class="jiathis_button_renren">
                                                        </a><a class="jiathis_button_kaixin001"></a><a href="http://www.jiathis.com/share"
                                                            class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                                    </div>
                                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1365565447348652"
                                                        charset="utf-8"></script>
                                                    <!-- JiaThis Button END -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    
                                    
                                 </div>
                            </div>
                        </div>
                   </div>
                 <div class="post" id="post-19563" style="border-right: solid 1px #000000; min-height: 170px; margin-top: 10px;">
                                    <a href="<?php echo url('article/addcomment',array('artid'=>$artid)); ?>" class="btn btn-primary btn-sm shiny">
                                        <!--发送id-->
                                        <i class="fa fa-edit"></i>评论
                                    </a>
                   </div>
            </div>
            <div class="clear">
            </div>
        </div>
        <div style="border-right: solid 1px #000000; margin-bottom: 100px ;">
            <h2>评论留言区域</h2>
                                        <?php if(is_array($res) || $res instanceof \think\Collection): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?>
                                          <div class="xh">
                                            <p>内容<?php echo $comment['comment_content']; ?></p>
                                            
                                            <p>作者<?php echo $comment['user_id']; ?></p>
                                            
                                            
                                         </div>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
    </div>
    <script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>
    <script type="text/javascript" src="__INDEX__/style/z700bike_single.js"></script>
  
    <script type='text/javascript' src='/blog4__INDEX__/style/jquery.colorbox-min.js?ver=1.3.17.2'></script>


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
