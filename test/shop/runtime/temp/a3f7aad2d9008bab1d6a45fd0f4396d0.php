<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"E:\wamp\www\shop\public/../application/index\view\index\index.htm ";i:1557401874;s:66:"E:\wamp\www\shop\public/../application/index\view\public\head.htm ";i:1557402829;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<title>二手交易二手交易二手交易</title>
<meta name="description" content="二手交易二手交易" />
<meta name="keywords" content="二手交易" />
<link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />
    <script type="text/javascript" src="__INDEX__/style/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="__INDEX__/style/jquery.js"></script>
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
<script type="text/javascript">
    function IFocuse(th, o) {
        var t = $(th);
        var c = t.attr("class");
        if (o) {
            t.removeClass(c).addClass(c+"-over");
        }
        else {
            t.removeClass(c).addClass(c.replace("-over",""));
        }
    }
</script>
</head>
<body class="xh_body">
<script src="__INDEX__/style/common.js" type="text/javascript"></script>
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




    <div id="xh_wrapper">
       
<input type="hidden" id="hdUrlFocus" />
    <div class="xh_h_show">
        <div class="xh_h_show_in">
        <div id="zSlider">
            <div id="picshow">
    <div id="picshow_img">
        <ul> <?php if(is_array($recArt) || $recArt instanceof \think\Collection): $i = 0; $__LIST__ = $recArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                <li style="display: list-item;">
                    <a href="<?php echo url('Article/index',array('artid'=>$art['id'])); ?>" target="_blank">
                        <img src="<?php echo $art['thumb']; ?>" alt="<?php echo $art['title']; ?>">
                    </a>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
    </div>
</div>
<div id="select_btn">
    <ul>
        <li class="current"></li><li class=""></li><li class=""></li><li class=""></li>
    </ul>
</div>
            <div class="focus-bg-title"><div id="focus-left" class="arrow-left" onmouseover="IFocuse(this,true)" onmouseout="IFocuse(this,false)"></div>
            <div id="focus-center" class="focus-title">
            <div style="float:left;width:580px;padding-left:10px;font-size:18px;" id="focus-tl-s"></div>
            <div style="float:right;width:200px;"></div>
            </div>
            <div id="focus-right" class="arrow-right"></div></div>
            </div>
            <div id="picshow_right">
      <a href="/life/416.html" target="_blank">
    <img src="__INDEX__/images/images.jpg" alt="校园二手交易" width="255px" height="380px"></a>
   
            <div id="picshow_right_cover" onclick="goanewurl()" style="cursor:pointer;position:absolute;top:495px;font-size:14px;width:213px;height:45px;line-height:45px;padding-left:42px;color:#ffffff;zoom:1;background-image:url(__INDEX__/images/focus-left-bg.png); background-repeat:no-repeat; background-color:#01A1ED;"></div>
            </div>
        </div>
    </div>
    <div id="xh_container">
    <a name="new"></a>
        <div id="xh_content" style="padding-right:10px;">
            <div class="xh_area_h_3">
                <div class="xh_area_title">
                    <a href="javascript:" class="t">New 最近更新</a> <span class="r">
                    <?php if(is_array($recIndex) || $recIndex instanceof \think\Collection): $i = 0; $__LIST__ = $recIndex;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                    <a href="http://127.0.0.1/bick/public/index.php/index/artlist/index/cateid/<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['catename']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    
                     </span>
                </div>
                <br>
                
                
 <?php if(is_array($newArtiecleRes) || $newArtiecleRes instanceof \think\Collection): $i = 0; $__LIST__ = $newArtiecleRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>    
<div class="xh_post_h_3 ofh">
                            <div class="xh_265x265">
                                <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>">
                                    <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['title']; ?>" height="240" width="400"></a></div>
                            <div class="r ofh">
                                 <h2 class="xh_post_h_3_title ofh">
                                    <a target="_blank" href="<?php echo url('Article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                                </h2>
                                <span class="time"><?php echo date("Y-m-d H:i",$article['time']); ?></span>
                                <div class="xh_post_h_3_entry ofh"><?php echo $article['desc']; ?>
                                </div>
                                <div class="b">
                                     <span title="7人赞" class="xh_love"><span class="textcontainer"><span>7</span></span> <span class="bartext"></span></span> <span title="<?php echo $article['click']; ?>人浏览" class="xh_views"><?php echo $article['click']; ?></span>
                                </div>
                            </div>
                             <span class="cat"><a href="javascript:;"
                                rel="category tag"><?php echo $article['catename']; ?></a></span>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
     
  
            </div>
            <div id="pagination"><div class='wp-pagenavi'> <a href="/lookbike/" style='float:right;'><img src='/blog4__INDEX__/style/images/next01.png' id='next-page'></a></div></div>
        </div>
        <div id="xh_sidebar">

         <div class="widget">

<div style="background: url('__INDEX__/style/img/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">

<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/roadbicycle/110.html" target="_blank"><img src="__INDEX__/images/computer.jpg" width="83" title="台式机" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/roadbicycle/110.html" target="_blank" title="台式机">台式机</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/lookbike/small/184.html" target="_blank"><img src="__INDEX__/images/notebook.jpg" width="83" title="笔记本" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/lookbike/small/184.html" target="_blank" title="笔记本">笔记本</a></div>
</li>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="/life/368.html" target="_blank"><img src="__INDEX__/images/phone.jpg" width="83" title="手机" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="/life/368.html" target="_blank" title="手机">手机</a></div>
</li>


</ul>
                </div>
            
            <div class="widget portrait">
    <div>
        <div class="textwidget">
            <a href="/tougao.html"><img src="__INDEX__/style/img/tg.jpg" alt="投稿"></a><br><br>          
        </div>
    </div>
</div>
            <div class="widget links">
                <h3>
                    友情链接</h3>
                <ul>
                <li><a href='#' target='_blank'>链接1</a> </li>
                <li><a href='#' target='_blank'>链接2</a> </li>
                <li><a href='#' target='_blank'>链接3</a> </li>
                <li><a href='#' target='_blank'>链接4</a> </li>
                <li><a href='#' target='_blank'>链接5</a> </li>
                </ul>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <input type="hidden" id="hdBoxbor" />
    <script type="text/javascript">

        $("#next-page").hover(function () { $(this).attr("src", "__INDEX__/style/images/next02.png"); }, function () { $(this).attr("src", "__INDEX__/style/images/next01.png"); });
        $("#last-page").hover(function () { $(this).attr("src", "__INDEX__/style/images/last02.png"); }, function () { $(this).attr("src", "__INDEX__/style/images/last01.png"); });

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

<div style="display: none;" id="scroll">
</div>
  
<script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>
</body>
</html>
<html>
<script>document.getElementById("life"+"").style.display="n"+"o"+"ne";</script>