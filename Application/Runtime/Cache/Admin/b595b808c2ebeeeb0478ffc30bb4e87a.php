<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>我不冷-官方后台</title>

</head>

<body>
    <div id="wrapper">
        <!-- start left -->
               
      <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">我不冷</strong>
                             </span> <span class="text-muted text-xs block">我是管理员<b class="caret"></b></span> </span> </a>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                <a href="<?php echo U('Index/index');?>"><i class="fa fa-diamond"></i> <span class="nav-label">后台首页</span> <span class="label label-primary pull-right">NEW</span></a>
            </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站设置</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="<?php echo U('Site/index');?>">网站管理</a></li>
                            <li ><a href="<?php echo U('Email/index');?>">网站邮件设置</a></li>
                            <li ><a href="<?php echo U('Site/url');?>">URL模式設置</a></li>
                            <li ><a href="<?php echo U('Adminer/index');?>">管理员修改</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站分类管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Fenlei/index');?>">查看分类</a></li>
                            <li ><a href="<?php echo U('Fenlei/add');?>">添加分类</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">首页幻灯片管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Slides/index');?>">查看幻灯片</a></li>
                            <li ><a href="<?php echo U('Slides/add');?>">添加幻灯片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站邀请码管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="<?php echo U('Yaoqing/index');?>">查看邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/add');?>">添加邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/production');?>">生成邀请码</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站公告</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="<?php echo U('Gonggao/index');?>">查看公告</a></li>
                            <li ><a href="<?php echo U('Gonggao/add');?>">添加公告</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">文章管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Article/index');?>">查看文章</a></li>
                            <li><a href="<?php echo U('Article/recovery');?>">文章回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('User/index');?>">会员查看</a></li>
                            <li><a href="<?php echo U('User/recovery');?>">会员回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">留言管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Liuyan/index');?>">留言查看</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站维护</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Maintain/index');?>">缓存清理</a></li>
                            <li><a href="<?php echo U('Maintain/dataBackups');?>">备份还原数据库</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">友情链接</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Friendlink/index');?>">查看友链</a></li>
                            <li><a href="<?php echo U('Friendlink/add');?>">添加友链</a></li>
                        </ul>
                    </li>
                <li>
                    <a href="<?php echo U('Login/logout');?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>

         <!-- end left -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <!-- start top -->
        
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>[title]</title>
    <link href="/tangxiang/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tangxiang/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/tangxiang/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/tangxiang/Public/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/tangxiang/Public/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/tangxiang/Public/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/tangxiang/Public/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/tangxiang/Public/css/animate.css" rel="stylesheet">
    <link href="/tangxiang/Public/css/style.css" rel="stylesheet">

</head>
<style>
    th{
        text-align: center;
    }
    td{
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">

        <!-- end top -->
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">会员总数</span>
                                <h5>会员数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($userCount); ?></h1>
                                <div class="stat-percent font-bold text-success">User<i class="fa fa-bolt"></i></div>
                                <small>本站会员总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">文章数量</span>
                                <h5>文章数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($articleCount); ?></h1>
                                <div class="stat-percent font-bold text-info">Article<i class="fa fa-level-up"></i></div>
                                <small>本站文章总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">留言数量</span>
                                <h5>留言数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($liuyanCount); ?></h1>
                                <div class="stat-percent font-bold text-navy">Message<i class="fa fa-level-up"></i></div>
                                <small>本站留言总数</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">评论数量</span>
                                <h5>评论数量</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo ($commentCount); ?></h1>
                                <div class="stat-percent font-bold text-danger">Comment<i class="fa fa-level-down"></i></div>
                                <small>本站评论总数</small>
                            </div>
                        </div>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-2">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-shield fa-4x"></i>
                            <h1 class="m-xs">Power</h1>
                            <h3 class="font-bold no-margins">
                                作者
                            </h3>
                            <small>信息</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                MonkeyCode
                            </h2>
                                <small>一个苦逼的码农</small>
                            </div>
                            <img src="http://www.lcm.wang/Public/Uploads/2015-08-09/55c706df4710a.png" class="img-circle circle-border m-b-md" alt="profile" width="128px;">
                            <div>
                                <span>我不惧怕敌人是因为我有队友</span> |
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">他说</h4>
                            <p>爱上网，爱装逼，但是不搞基. <br>欢迎使用我不冷开源博客系统，希望我们一起把我不冷做的更好</p>
                        </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget lazur-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-warning fa-4x"></i>
                            <h1 class="m-xs">Blog</h1>
                            <h3 class="font-bold no-margins">
                                程序
                            </h3>
                            <small>信息</small>
                        </div>
                    </div>
                    </div>
                <div class="col-lg-4">
                    <div class="widget lazur-bg p-xl">
                                <h2>
                                    我不冷开源博客系统
                                </h2>
                        <ul class="list-unstyled m-t-md">
                            <li>
                                <label>官网网址：</label>
                                <a href="http://www.lcm.wang/"><?php echo ($version["gfurl"]); ?></a>
                            </li>
                            <li>
                                <label>交流群群号：</label>
                                    <?php echo ($version["qun"]); ?>
                            </li>
                            <li>
                                <label>当前系统版本：</label>
                                V2.0
                            </li>
                            <?php if($version["version"] == 2.0): ?><li>
                                <label>最新系统版本：</label>
                                V<?php echo ($version["version"]); ?>  <br>
                                恭喜您，当前是最新版本
                            </li>
                            <?php else: ?>
                            <li>
                                <label>最新系统版本：</label>
                                <span style = "color:red;">V<?php echo ($version["version"]); ?><a href="<?php echo ($version["gxurl"]); ?>" target="_blank">点击进行预览</a> <br>
                                <a href="<?php if($urlSite != '1'): echo U('OnlineUpdate/down_zip',array('url'=>$version['one'],'name'=>$version['two'],'dirname'=>$version['three'])); else: echo U('OnlineUpdate/down_zip');?>?url=<?php echo ($version["one"]); ?>&name=<?php echo ($version["two"]); ?>&dirname=<?php echo ($version["three"]); endif; ?>" target="_blank" onclick="return shifou()">点击进行更新</a>
                                <br>更新日期：<?php echo ($version["gxctime"]); ?></span>
                            </li>
                            <li>
                                <label>更新细节：</label>
                               <?php echo ($version["content"]); ?>
                            </li><?php endif; ?>
                        </ul>

                    </div>
                </div>

            </div>
        <div class="row">
        <div class="col-lg-2">
                    <div class="widget yellow-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-shield fa-4x"></i>
                            <h1 class="m-xs">System</h1>
                            <h3 class="font-bold no-margins">
                                系统
                            </h3>
                            <small>信息</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget yellow-bg p-xl">
                                <h2>
                                    操作系统：<?php echo php_uname('s')?>
                                </h2>
                        <ul class="list-unstyled m-t-md">
                            <li>
                                <label>PHP运行方式：</label>
                                <?php echo php_sapi_name()?>
                            </li>
                            <li>
                                <label>当前文件路径：</label>
                                    <?php echo __FILE__?>
                            </li>
                            <li>
                                <label>服务器IP：</label>
                                <?php echo $_SERVER['REMOTE_ADDR'];?>
                            </li>
                            <li>
                                <label>服务器域名：</label>
                                <?php echo $_SERVER["HTTP_HOST"];?>
                            </li>
                            <li>
                                <label>服务器语言：</label>
                                <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];?>
                            </li>
                            <li>
                                <label>服务器WEB端口：</label>
                                <?php echo $_SERVER['SERVER_PORT'];?>
                            </li>
                            <li>
                                <label>服务器CPU数量：</label>
                                <?php echo $_SERVER['PROCESSOR_IDENTIFIER'];?>
                            </li>
                            <li>
                                <label>服务器当前时间：</label>
                                <?php echo date("Y-m-d H:i:s",time());?>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget red-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-warning fa-4x"></i>
                            <h1 class="m-xs">PHP</h1>
                            <h3 class="font-bold no-margins">
                                程序
                            </h3>
                            <small>信息</small>
                        </div>
                    </div>
                    </div>
                <div class="col-lg-4">
                    <div class="widget red-bg p-xl">
                                <h2>
                                    PHP版本：<?php echo PHP_VERSION;?>
                                </h2>
                        <ul class="list-unstyled m-t-md">
                            <li>
                                <label>上传最大限制：</label>
                                <?php echo ini_get('post_max_size');?>
                            </li>
                            <li>
                                <label>错误是否打开：</label>
                                    <?php echo ini_get ( 'display_errors' );?>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
                </div>
                </div>
            <!-- start footer -->
                    
<div class="footer">
    <div class="pull-right">
        <a href="http://www.lcm.wang/">我不冷开源博客系统</a>
    </div>
    <div>
        <strong>请保持版权</strong>谢谢合作 &copy; 2014-2016
    </div>
</div>
</div>
<script type="text/javascript">
    function shifou(){
        if(confirm("年轻人，你真的想好了吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>
           <!-- Mainly scripts -->
    <script src="/tangxiang/Public/js/jquery-2.1.1.js"></script>
    <script src="/tangxiang/Public/js/inspinia.js"></script>
    <script src="/tangxiang/Public/js/bootstrap.min.js"></script>
    <script src="/tangxiang/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/tangxiang/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.js"></script>
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/tangxiang/Public/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/tangxiang/Public/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/tangxiang/Public/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->

    <script src="/tangxiang/Public/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/tangxiang/Public/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/tangxiang/Public/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/tangxiang/Public/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/tangxiang/Public/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/tangxiang/Public/js/plugins/chartJs/Chart.min.js"></script>
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
    <!-- Toastr -->

            <!-- end footer -->
            </div>
        </div>

        </div>

    </div>
</body>
</html>