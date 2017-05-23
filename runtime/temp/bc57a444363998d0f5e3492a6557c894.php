<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"D:\WorkPlace\5.Linux\www.assuredness.com\public/../application/index\view\index\edit.html";i:1495439684;s:85:"D:\WorkPlace\5.Linux\www.assuredness.com\public/../application/index\view\layout.html";i:1495440134;}*/ ?>
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
                    <a href="/index/Index/edit">
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
                    <a href="/index/Category/input">
                        <div class="row text-center nav-left-custom btn-primary">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            <span>创建分类</span>
                        </div>
                    </a>
                    <a href="/index/Category/index">
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
                            <div class="row bg-info padding-l-5 border-radius-5">
    <h4>
        <?php if($id): ?>编辑<?php else: ?>新增<?php endif; ?>商品
    </h4>
</div>

<div class="padding-10"></div>

<ul class="nav nav-pills row">
    <li role="presentation" class="bg-success border-radius-5 active"><a href="#product-basic-info" data-toggle="tab">基础信息</a></li>
    <li role="presentation" class="bg-success border-radius-5"><a href="#product-basic-main" data-toggle="tab">商品主图</a></li>
    <li role="presentation" class="bg-success border-radius-5"><a href="#product-basic-attach" data-toggle="tab">商品附图</a></li>
</ul>

<div class="tab-content">
    <div class="row padding-tb-10 tab-pane fade in active" id="product-basic-info">
        <form action="/index/Index/edit" method="post">
            <table class="table table-bordered">
                <tr>
                    <div class="input-group padding-tb-5">
                        <span class="input-group-addon must" id="basic-classify">商品分类</span>
                        <select name="form[classify]" value="<?php echo $form['classify']; ?>" class="form-control input-custom">
                            <option value="0" class="bg-danger font-16">Select</option>
                            <option value="1" class="bg-success font-16" <?php if($form['classify'] == '1'): ?>selected="selected"<?php endif; ?>>春装</option>
                            <option value="2" class="bg-success font-16">夏装</option>
                            <option value="3" class="bg-success font-16">秋装</option>
                            <option value="4" class="bg-success font-16">冬装</option>
                        </select>
                    </div>
                    <?php if($errors['classify']): ?>
                        <div class="triangle-up margin-l-3"></div>
                        <div class="bg-danger border-radius-5 padding-5 text-center"><?php echo $errors['classify']; ?></div>
                    <?php endif; ?>
                </tr>
                <tr>
                    <div class="input-group padding-tb-5">
                        <span class="input-group-addon must" id="basic-name">商品名称</span>
                        <input type="text" class="form-control input-custom" name="form[name]" value="<?php echo $form['name']; ?>" placeholder="Name" aria-describedby="basic-name">
                    </div>
                    <?php if($errors['name']): ?>
                        <div class="triangle-up margin-l-3"></div>
                        <div class="bg-danger border-radius-5 padding-5 text-center"><?php echo $errors['name']; ?></div>
                    <?php endif; ?>
                </tr>
                <tr>
                    <div class="input-group padding-tb-5">
                        <div class="input-group-addon must" id="basic-description">商品描述</div>
                        <input type="text" class="form-control input-custom" name="form[description]" value="<?php echo $form['description']; ?>" placeholder="Description" aria-describedby="basic-description">
                    </div>
                    <?php if($errors['description']): ?>
                        <div class="triangle-up margin-l-3"></div>
                        <div class="bg-danger border-radius-5 padding-5 text-center"><?php echo $errors['description']; ?></div>
                    <?php endif; ?>
                </tr>
                <tr>
                    <div class="input-group padding-tb-5">
                        <span class="input-group-addon must" id="basic-amount">商品金额</span>
                        <input type="text" class="form-control input-custom" name="form[amount]" value="<?php echo $form['amount']; ?>" placeholder="0.00" aria-describedby="basic-amount">
                    </div>
                    <?php if($errors['amount']): ?>
                        <div class="triangle-up margin-l-3"></div>
                        <div class="bg-danger border-radius-5 padding-5 text-center"><?php echo $errors['amount']; ?></div>
                    <?php endif; ?>
                </tr>
                <tr>
                    <div class="input-group padding-tb-5">
                        <span class="input-group-addon must" id="basic-amount">商品库存</span>
                        <input type="number" class="form-control input-custom" name="form[inventory]" value="<?php echo $form['inventory']; ?>" placeholder="0" aria-describedby="basic-amount">
                    </div>
                    <?php if($errors['inventory']): ?>
                        <div class="triangle-up margin-l-3"></div>
                        <div class="bg-danger border-radius-5 padding-5 text-center"><?php echo $errors['inventory']; ?></div>
                    <?php endif; ?>
                </tr>
                <tr>
                    <div class="margin-b-0 form-group padding-tb-5" id="norm-container">
                        <?php if(!$form['norm']): ?>
                            <!--新增-->
                            <div class="input-group">
                                <div class="input-group-addon">商品规格</div>
                                <input type="text" name="form[norm][]" class="form-control input-custom" placeholder="Norm">
                                <span class="input-group-addon" onclick="addNorm()">
                                    <span class="glyphicon glyphicon-plus-sign text-primary" aria-hidden="true"></span>
                                </span>
                            </div>
                        <?php else: ?>
                            <!--编辑-->
                            <?php if(is_array($form['norm']) || $form['norm'] instanceof \think\Collection || $form['norm'] instanceof \think\Paginator): if( count($form['norm'])==0 ) : echo "" ;else: foreach($form['norm'] as $key=>$item): if($key == 0): ?>
                                    <div class="input-group">
                                        <div class="input-group-addon">商品规格</div>
                                        <input type="text" name="form[norm][<?php echo $key; ?>]" value="<?php echo $item; ?>" class="form-control input-custom" placeholder="Norm">
                                        <span class="input-group-addon" onclick="addNorm()">
                                            <span class="glyphicon glyphicon-plus-sign text-primary" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                <?php else: ?>
                                    <div class="input-group padding-t-5">
                                        <div class="input-group-addon" style="background: #FFFFFF; border: none;"><div style="width: 56px;"></div></div>
                                        <input type="text" name="form[norm][<?php echo $key; ?>]" value="<?php echo $item; ?>" class="form-control" placeholder="Norm">
                                        <span class="input-group-addon" onclick="removeNorm(this)">
                                            <span class="glyphicon glyphicon-remove-sign text-danger" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                    </div>
                </tr>
            </table>
            <div class="text-right"><input class="btn btn-primary" type="submit" value="SAVE"/></div>
        </form>
    </div>
    
    <div class="row padding-tb-10 tab-pane fade" id="product-basic-main">
        <?php if($id): ?>
            <form action="/index/Index/input" method="post" enctype="mutipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <div class="input-group padding-tb-5">
                            <span class="input-group-addon" id="basic-main-file">商品主图</span>
                            <div class="table-bordered padding-10">
                                <img src="__STATIC__/image/catapult.gif" id="main-btn" class="img-custom" />
                            </div>
                            <input type="file" name="form[file]" id="main-file" class="hidden" onchange="changeMainPicture(this)" accept="image/jpg, image/jpeg, image/png, image/gif" />
                        </div>
                        <div class="input-group padding-tb-5 hide">
                            <span class="input-group-addon" id="basic-main-file">图片预览</span>
                            <img style="max-height: 400px; max-width: 200px;" src="__STATIC__/image/catapult.gif"/>
                        </div>
                    </tr>
                    
                    <tr>
                        <div class="input-group padding-tb-5">
                            <span class="input-group-addon" id="basic-main-file">商品详细</span>
                            <div class="btn btn-default form-control">选择图片</div>
                            <input type="file" name="" value="" class="hide"/>
                        </div>
                    </tr>
                </table>
            </form>
        <?php else: ?>
            <div class="bg-danger padding-10 border-radius-5">
                <span>** 请先保存商品基础信息</span>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="row padding-tb-10 tab-pane fade" id="product-basic-attach">
        333333333333
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $("#main-btn").click(function() {
            $("#main-file").trigger('click');
        })
    })

    /* 更改主图 */
    function changeMainPicture(_this)
    {
        let file_info = $(_this)[0].files[0];
        console.log(file_info);
    }

    /* 添加规格 */
    function addNorm()
    {
        let norm_str =   '  <div class="input-group padding-t-5">   '
                        +'      <div class="input-group-addon" style="background: #FFFFFF; border: none;"><div style="width: 56px;"></div></div>   '
                        +'      <input type="text" name="form[norm][]" class="form-control" placeholder="Norm"> '
                        +'      <span class="input-group-addon" onclick="removeNorm(this)">    '
                        +'          <span class="glyphicon glyphicon-remove-sign text-danger" aria-hidden="true"></span>    '
                        +'      </span> '
                        +'  </div>  ';
        $("#norm-container").append(norm_str);
    }

    /* 删除规格 */
    function removeNorm(_this)
    {
        $($(_this).parent()).remove();
    }
</script>
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
