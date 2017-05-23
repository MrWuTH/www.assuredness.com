<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"D:\WorkPlace\5.Linux\www.assuredness.com\public/../application/index\view\index\index.html";i:1492588309;s:85:"D:\WorkPlace\5.Linux\www.assuredness.com\public/../application/index\view\layout.html";i:1495447912;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title></title>
    
        <!-- Bootstrap -->
        <link href="__STATIC__/css/bootstrap.min.css" rel="stylesheet">
        <link href="__STATIC__/css/bootstrap-theme.min.css" rel="stylesheet">
        
        <link href="__STATIC__/css/layout.css" rel="stylesheet">
        <link href="__STATIC__/css/common.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script src="__STATIC__/js/angular.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="__STATIC__/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="__STATIC__/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    </head>
    <body>
        <div class="navbar navbar-default">
            <div class="navbar container">
                <div class="navbar-header pull-left">
                    <a href="/index" class="navbar-brand">
                          <?php echo $title; ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="">
                <div class="col-xs-1">
                    <a href="/index/Index/index">
                        <div class="row text-center nav-left-custom btn-primary">
                            <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                            <span>所有商品</span>
                        </div>
                    </a>
                    <a href="/index/Product/edit">
                        <div class="row text-center nav-left-custom btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            <span>新增商品</span>
                        </div>
                    </a>
                    <a href="/index/Category/index">
                        <div class="row text-center nav-left-custom btn-primary">
                            <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                            <span>所有分类</span>
                        </div>
                    </a>
                    <a href="/index/Category/edit">
                        <div class="row text-center nav-left-custom btn-primary">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            <span>创建分类</span>
                        </div>
                    </a>
                    <a href="/index/Category/add">
                        <div class="row text-center nav-left-custom btn-primary">
                            <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                            <span>上架分类</span>
                        </div>
                    </a>
                </div>
                
                <div class="col-xs-11">
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-11">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <script type="text/javascript">
        $(function() {
            $(".nav-left-custom").each(function() {
                var _this = $(this);
                _this.mouseenter(function() {
                    $(".nav-left-custom").removeClass('active');
                    _this.addClass('active');
                })
                _this.mouseleave(function() {
                    _this.removeClass('active');
                })
            })
        })
    </script>
    
</html>
