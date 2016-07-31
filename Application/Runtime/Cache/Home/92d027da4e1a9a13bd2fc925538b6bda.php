<?php if (!defined('THINK_PATH')) exit();?>
<style type="text/css">
    .lanqiu_left{font-size: 24px}
    .text_box2 {padding:5px 0 5px 10px; }
    .text_box2 {clear:both; padding:20px 0 0 10px;border-bottom:2px solid #B50000;_zoom:1}
    .text_box2 .p_video {position: relative;width:124px; height:215px; margin:0 30px;float:left;_display:inline}
    .text_box2 .p_video .img_outer img{width:120px; height:72px}
    .text_box2 .p_video{margin-top: 20px;}
    .user-option {
        padding: 15px;
        font-size: 15px;
    }

    .user-option > div{
        margin-top: 15px;
    }

    .user-option .title {
        color: rgb(100,100,100);
    }

    .user-option .item {
        text-align: center;
        cursor: pointer;
        font-size: 15px;
        font-weight: 500;
        color: rgb(211, 138, 33);
        padding: 5px 10px;
        margin-right: 5px;
    }

    .user-option .active {
        background-color: rgb(211, 138, 33);
        border-radius: 5px;
        color: white;
    }

    .user-option span.active:hover {
        color: white;
    }

    .user-option .item:hover {
        color: rgba(211, 138, 33, 0.5);
    }
    .one-list-act {
        padding: 20px 0px;
        border-top: 1px solid rgb(213,213,213);
        overflow: hidden;
    }

    .one-list-act > .act-poster {
        overflow: hidden;
        cursor: pointer;
        padding: 0px;
        height: 159px;
        border-radius: 5px;
        background-color: rgb(240,240,240);
    }

    .one-list-act > .act-info {
        color: #5d5d5d;
        padding: 0px 0px 0px 35px;
    }

    .one-list-act > .act-info > .act-title {
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        height: 25px;
        padding-left: 0px;
        overflow: hidden;
        margin-bottom: 4px;
    }

    .one-list-act > .act-info > .act-status {
        margin-top: 5px;
        font-size: 12px;
        padding: 1px 8px;
    }

    .one-list-act > .act-info > .act-desc > p {
        margin: 8px 0px 0px 0px;
        height: 20px;
        overflow: hidden;
    }

    .one-list-act > .act-info > .act-desc > .act-detail {
        margin-top: 5px;
        height: auto;
    }
    .one-list-act{
        border-top-width: 0px;
        padding-top: 5px;
    }
    .poster {
        overflow: hidden;
        width: 100%;
        height: 184px;
        background-color: rgb(230,230,230);
    }
</style>
<!-- <link href="http://www.tongqu.me/js/lib-dist/core-all.css?hash=bfff6b" rel="stylesheet" media="screen">
<link href="http://www.tongqu.me/js/ng/directive/tqPage/tqPage.css?hash=50c7fa" rel="stylesheet" media="screen">
<link href="http://www.tongqu.me/js/app/act_type/act_type.css?hash=4d499b" rel="stylesheet" media="screen"> -->
<!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo ($fenleiInfo["name"]); ?>-<?php echo ($SiteInfo["title"]); ?></title>
    <meta name = "keywords" content="<?php echo ($SiteInfo["keywords"]); ?>" >
    <meta name = "description" content="<?php echo ($SiteInfo["description"]); ?>" >
    <link href="/tangxiang/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tangxiang/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/tangxiang/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/tangxiang/Public/css/animate.css" rel="stylesheet">
    <link href="/tangxiang/Public/css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header" style="text-align:center;">
                        <div class="dropdown profile-element"> <span>
                        <a href="/tangxiang/index.php">
                            <img alt="image" class="img-circle" src="/tangxiang/Public/Uploads/<?php echo ($SiteInfo["logo"]); ?>" width="80px;"  height="80px;" />
                        </a>
                        </span>
                        <span class="clear"> <span class="block m-t-xs" style = "color:#fff;"> <strong class="font-bold"><?php echo ($SiteInfo["name"]); ?></strong>
                        </span> <span class="text-muted text-xs block"><?php echo ($SiteInfo["set_content"]); ?></span> </span>
                    </div>
                    <div class="logo-element">
                        <?php echo ($SiteInfo["name"]); ?>
                    </div>
                </li>
                <?php if(is_array($fenleiListone)): foreach($fenleiListone as $key=>$vo): ?><li class="">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label"><?php echo ($vo["name"]); ?></span><span class="fa arrow"></span></a>
                    <ul style="height: 0px;" aria-expanded="false" class="nav nav-second-level collapse">
                        <?php if(is_array($fenleiListtwo)): foreach($fenleiListtwo as $key=>$vs): if($vo["id"] == $vs['fid']): ?><li><a href="<?php echo U('Fenlei/'.$vs['ename'],array('id'=>$vs['id']));?>"><?php echo ($vs["name"]); ?></a></li><?php endif; endforeach; endif; ?>
                    </ul>
                </li><?php endforeach; endif; ?>
                <li>
                    <a href="<?php echo U('Message/index');?>"><i class="fa fa-globe"></i> <span class="nav-label">留言板</span><span class="label label-info pull-right">NEW</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Userlist/index');?>"><i class="fa fa-globe"></i> <span class="nav-label">本站会员</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Index/yaoqingma');?>"><i class="fa fa-globe"></i> <span class="nav-label" style = "color:#ED5565;">邀请码与友链</span></a>
                </li>
                    </ul>

                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" action="<?php echo U('Index/serch');?>" method="get">
                                <div class="form-group">
                                    <input type="text" placeholder="搜索框在这里......" class="form-control" name="keywords" id="top-search" required>
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">欢迎来到<?php echo ($SiteInfo["name"]); ?>，有你代码，有你的风格！</span>
                            </li>
                        <?php if($_SESSION['muser']!= ''): ?><li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="javascript:void(0)">
                                    <i class="fa fa-envelope"></i>  <span class="label label-warning">家</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <div class="media-body">
                                                <strong><a href="<?php echo U('User/index');?>">进入会员中心</a></strong>. <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <div class="media-body ">
                                                <strong><a href="<?php echo U('User/logout');?>">退出登陆</a></strong>. <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="text-center link-block">
                                                <i class="fa fa-envelope"></i> <strong>我不冷和你在一起</strong>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        <li>欢迎你，<?php echo (session('muser')); ?></li>
                        <?php else: ?>
                            <li>
                                <a data-toggle="modal" href="#myModal6">注册</a>
                            </li>
                            <li>
                                <a data-toggle="modal" href="#modal-form">登陆</a>
                            </li><?php endif; ?>
                        </ul>

                    </nav>
                </div>
                <!-- 登陆在这里开始 -->
                <div style="display: none;" class="modal inmodal fade in" id="modal-form" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">登陆中心</h4>
                            </div>
                            <div class="modal-body">

                                <form class="form-horizontal" action="<?php echo U('User/login');?>" method="post">
                                    <p>没有账号可不要乱登陆哦</p>
                                    <div class="form-group"><label class="col-lg-2 control-label">邮箱</label>

                                        <div class="col-lg-10"><input placeholder="请输入邮箱" class="form-control" type="email" name = "email" required>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">密码</label>

                                        <div class="col-lg-10"><input placeholder="请输入密码" class="form-control" type="password" name = "password" required></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-7">
                                            <button class="btn btn-sm btn-white" type="submit">点击登陆</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- 登陆结束 -->


                <!-- 注册开始 -->
                <div style="display: none;" class="modal inmodal fade in" id="myModal6" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">注册中心</h4>
                            </div>
                            <div class="modal-body">

                                <form class="form-horizontal" action="<?php echo U('User/reg');?>" method="post">
                                    <p>注册的前提是你必须有邀请码.</p>
                                    <div class="form-group"><label class="col-lg-2 control-label">邮箱</label>

                                        <div class="col-lg-10"><input placeholder="请输入邮箱" class="form-control" type="email" required name = "email">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">密码</label>

                                        <div class="col-lg-10"><input placeholder="请输入密码" class="form-control" type="password" required name = "password"></div>
                                    </div>
                                     <div class="form-group"><label class="col-lg-2 control-label" >昵称</label>

                                        <div class="col-lg-10"><input placeholder="请输入昵称（一旦注册无法修改！）" class="form-control" type="text" required name = "truename">
                                        </div>
                                    </div>
                                    <?php if($SiteInfo["userstatus"] == 1): ?><div class="form-group"><label class="col-lg-2 control-label" >邀请码</label>

                                        <div class="col-lg-10"><input placeholder="请输入邀请码" class="form-control" type="text" required name = "code">
                                        </div>
                                    </div><?php endif; ?>
                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-7">
                                            <button class="btn btn-sm btn-white" type="submit">点击注册</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- 注册结束 -->



<!-- 本页导航栏开始 -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>首页</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/tangxiang/index.php">首页</a>
            </li>
            <li class="active">
                <strong><?php echo ($fenleiInfo["name"]); ?></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<!-- 本页导航栏结束 -->
<!-- 正文开始 -->
<div>
    <div class="user-option">
        <div>
            <span class="title">
                分类：
            </span>
            <?php if(is_array($ac_type)): foreach($ac_type as $key=>$vo): if($vo["id"] == $choose_type): ?><span class="item active" onclick="changeType(<?php echo ($vo["id"]); ?>)">
                        <?php echo ($vo["type"]); ?>
                    </span>
                <?php else: ?>
                    <span class="item" onclick="changeType(<?php echo ($vo["id"]); ?>)">
                        <?php echo ($vo["type"]); ?>
                    </span><?php endif; endforeach; endif; ?>
        </div>
        <div>
            <span class="title">
                状态：
            </span>
            <?php if(is_array($ac_condition)): foreach($ac_condition as $key=>$vo): if($vo["id"] == $choose_condition): ?><span class="item active" onclick="changeCondition(<?php echo ($vo["id"]); ?>)">
                        <?php echo ($vo["condition"]); ?>
                    </span>
                <?php else: ?>
                    <span class="item" onclick="changeCondition(<?php echo ($vo["id"]); ?>)">
                        <?php echo ($vo["condition"]); ?>
                    </span><?php endif; endforeach; endif; ?>
        </div>
        <div>
            <span class="title">
                排序：
            </span>
            <?php if(is_array($ac_order)): foreach($ac_order as $key=>$vo): if($vo["id"] == $choose_order): ?><span class="item active" onclick="changeOrder(<?php echo ($vo["id"]); ?>)">
                        <?php echo ($vo["order"]); ?>
                    </span>
                <?php else: ?>
                    <span class="item" onclick="changeOrder(<?php echo ($vo["id"]); ?>)">
                        <?php echo ($vo["order"]); ?>
                    </span><?php endif; endforeach; endif; ?>
        </div>
    </div>
    <hr>
    <div class="col-lg-8">
        <?php if(is_array($action)): foreach($action as $key=>$vo): ?><div class="one-list-act" fade-in>
            <div class="act-poster col-xs-3" onclick="showAction(<?php echo ($vo["id"]); ?>)">
                <img src="<?php echo ($vo["poster"]); ?>" class="poster">
            </div>
            <div class="act-info col-xs-9">
                <div class="act-title" onclick="showAction(<?php echo ($vo["id"]); ?>)">
                    <?php echo ($vo["title"]); ?>
                </div>
                <div class="act-desc">
                    <div class="act-status label">
                        <?php echo ($vo["condition"]); ?>
                    </div>
                    <p>时间：<?php echo ($vo["vote_stime"]); ?> --- <?php echo ($vo["vote_etime"]); ?></p>
                    <p>地点：<?php echo ($vo["place"]); ?></p>
                    <p>人数：<?php echo ($vo["vote_num"]); ?>&nbsp;/&nbsp;<?php echo ($vo["max_num"]); ?>
                    </p>
                    <p>发起：<?php echo ($vo["publisher"]); ?>
                    </p>
                </div>
            </div>
        </div>
        <hr><?php endforeach; endif; ?>
    </div>
    
</div>

        <!-- <div class="col-lg-8 list">
            <tq-one-act tq-act="act" tag="1">
            </tq-one-act>
            <div class="help-block">抱歉，暂时没有该类型活动。</div>
            <tq-page total-items="total_count" items-per-page="number" callback="changePage($page)"></tq-page>
        </div>
        <div class="col-lg-4 recommend" ng-hide="mobileView">
            <a href="#" class="btn tq-btn-orange create-act"><i class="fa fa-plus"></i> 发布活动
            </a>
            <div class="title">推荐活动</div>
                <tq-one-act ng-repeat="act in acts_recommend" tq-act="act" tag="2"></tq-one-act>
        </div>
        <div style="clear:both"></div> -->
    </div>
</div>
<!-- 正文结束 -->

<!-- 调用脚部文件 -->
      <a href="#0" class="cd-top">↑</a>
        <div class="footer" style="z-index:9999;">
            <div class="pull-right">
               <a href="<?php echo U('Admin/Index/index');?>" target="_blank">后台登陆</a>&nbsp;&nbsp;<strong>如果你使用本站程序</strong> 请保留友情链接.
            </div>
            <div>
                <strong>Copyright</strong> <a href="http://www.tangxiang.top/">我不冷</a> &copy; 2014-2016
                管理员邮箱：<?php echo ($SiteInfo["admin_email"]); ?>&nbsp; &nbsp;统计：<?php echo ($SiteInfo["statistics"]); ?>
            </div>
        </div>

        </div>
        </div>

    <script src="/tangxiang/Public/js/jquery-2.1.1.js"></script>
    <script src="/tangxiang/Public/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/tangxiang/Public/js/bootstrap.min.js"></script>
    <script src="/tangxiang/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/tangxiang/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/tangxiang/Public/js/inspinia.js"></script>
    <script src="/tangxiang/Public/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="/tangxiang/Public/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Jvectormap -->
    <script src="/tangxiang/Public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/tangxiang/Public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Flot -->
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.js"></script>
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.resize.js"></script>
    <script>
        var s_url=window.location.pathname;
        var now_url = '';
        for(var i = 0;i<$("#side-menu li").length;i++){
            now_url=$("#side-menu li a").eq(i).attr("href");
            if(now_url == s_url){
                $("#side-menu a").eq(i).parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().addClass("in");
            }else{
                $("#side-menu a").eq(i).parent().removeClass("active");
            }
        }
        </script>
        <!-- 返回顶部 -->
        <script>
                jQuery(document).ready(function($){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
        );
    });

});
        </script>
</body>

</html>

<script type="text/javascript">
    function changeType(type){
        // console.log(type)
        var condition=getUrlParam("condition")?getUrlParam("condition"):1;
        var order=getUrlParam("order")?getUrlParam("order"):1;
        var type=type;
        window.location="/tangxiang/index.php?m=Home&c=Fenlei&a=huodongkongjian&id=15&type="+type
        +"&condition="+condition+"&order="+order;
    }
    function changeOrder(order){
        var condition=getUrlParam("condition")?getUrlParam("condition"):1;
        var order=order;
        var type=getUrlParam("type")?getUrlParam("type"):1;
        window.location="/tangxiang/index.php?m=Home&c=Fenlei&a=huodongkongjian&id=15&type="+type
        +"&condition="+condition+"&order="+order;
    }
    function changeCondition(condition){
        var condition=condition;
        var order=getUrlParam("order")?getUrlParam("order"):1;
        var type=getUrlParam("type")?getUrlParam("type"):1;
        window.location="/tangxiang/index.php?m=Home&c=Fenlei&a=huodongkongjian&id=15&type="+type
        +"&condition="+condition+"&order="+order;
    }
    function showAction(id){
        window.location="/tangxiang/index.php?m=Home&c=Fenlei&a=showAction&id=15&ac_id="+id;
    }
    function getUrlParam(name){  
    //构造一个含有目标参数的正则表达式对象  
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");  
    //匹配目标参数  
    var r = window.location.search.substr(1).match(reg);  
    //返回参数值  
    if (r!=null) return unescape(r[2]);  
    return null;  
} 
</script>