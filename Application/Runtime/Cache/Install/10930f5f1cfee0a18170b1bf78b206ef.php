<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>我不冷开源博客系统 安装</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/lichengmi/Public/Install/css/bootstrap.css" rel="stylesheet">
        <link href="/lichengmi/Public/Install/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/lichengmi/Public/Install/css/install.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
        <script src="/lichengmi/Public/Install/css/jquery-1.10.2.min.js"></script>
        <script src="/lichengmi/Public/Install/css/bootstrap.js"></script>
    </head>
    <style>
        #step li a{
            color: #fff;
        }
        #step li{
            margin-top: 5px;
        }
        .active{
            margin-top: 5px;
        }
        .active a{
            background: #ED5565 !important;
            border-radius: 10%;
        }
    </style>
    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner" style="background:#1AB394;">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" target="_blank" href="http://www.lcm.wang/">我不冷</a>
                    <div class="nav-collapse collapse">
                    	<ul id="step" class="nav">
                    		
    <li class="active"><a href="javascript:;">安装协议</a></li>
    <li class="active"><a href="javascript:;">环境检测</a></li>
    <li class="active"><a href="javascript:;">创建数据库</a></li>
    <li class="active"><a href="javascript:;">安装</a></li>
    <li class="active"><a href="javascript:;">完成</a></li>

                    	</ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron masthead">
            <div class="container">
                
    <h1>完成</h1>
    <p>安装完成！</p>
	<?php if(isset($info)): echo ($info); endif; ?>

            </div>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <div>
                	
    <a class="btn btn-primary btn-large" href="/lichengmi/index.php/Admin/">登录后台</a>
    <a class="btn btn-success btn-large" href="/lichengmi/index.php/Home/">访问首页</a>

                </div>
            </div>
        </footer>
    </body>
</html>