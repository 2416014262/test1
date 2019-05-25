<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\wamp\www\shop\public/../application/index\view\article\addcomment.htm ";i:1556858073;}*/ ?>
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

<script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>


 <div style="height:auto; ">
                                        <h2 style=" margin:10px 0px 0px 20px; font-size:14px; color:#333333">用户评论</h2>

                                        
                                   </div>
                                    <div style="width: 60px; font-size: 12px;">
                                        <div id="horizontal-form">
                                            <form class="form-horizontal" role="form" action="<?php echo url('article/addcomment'); ?>" method="post"
                                            enctype="multipart/form-data">
                                            <input type="hidden" name="artid" value="<?php echo $admins['id']; ?>">
                                                <p class="small">评论区</p>
                                                <div class="form-group">
                                                    <label for="username" class="col-sm-2 control-label no-padding-right">内容</label>
                                                    <div class="col-sm-6">
                                                         <input class="form-control"  placeholder="" name="comment_content" required="" type="text">
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-default">
                                                           

                                                        提交评论</button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>

 
</body>
</html>
