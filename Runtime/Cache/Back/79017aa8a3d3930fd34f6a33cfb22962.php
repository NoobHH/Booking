<?php if (!defined('THINK_PATH')) exit();?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
<head>
    <title>管理中心</title>
    <link href="<?php echo (C("BACK_CSS_URL")); ?>admin.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo (C("BACK_CSS_URL")); ?>styles.css" type="text/css" rel="stylesheet"  media="all" >
    <script type="text/javascript" src="<?php echo (C("BACK_JS_URL")); ?>jquery.min.js"></script>
    <link href="<?php echo (C("BACK_CSS_URL")); ?>mine.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type='text/javascript'>
        UEDITOR_CONFIG.toolbars = [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|'
        ]];

    </script>
</head>
<body>
<!--头部-->
<table cellspacing=0 cellpadding=0 width="100%"
       background="<?php echo (C("BACK_IMG_URL")); ?>header_bg.jpg" border=0>
    <tr height=56>
        <td width=260><img height=56 src="<?php echo (C("BACK_IMG_URL")); ?>header_left.jpg"
                           width=260></td>
        <td style="font-weight: bold; color: #fff; padding-top: 20px" align=middle>当前用户：admin &nbsp;
            &nbsp; <a style="color: #fff" href="" target=main>修改口令</a> &nbsp;&nbsp;
            <a style="color: #fff" onclick="if (confirm('确定要退出吗？')) return true; else return false;" href=""
               target=_top>退出系统</a>
        </td>
        <td align=right width=268>
            <img height=56 src="<?php echo (C("BACK_IMG_URL")); ?>header_right.jpg" width=268>
        </td>
    </tr>
</table>
<div id="w">
    <nav>
        <ul id="ddmenu">
            <li><a class="no" href="#">管理中心</a></li>
            <li><a class="no" href="#">电影管理</a>
                <ul>
                    <li><a href="<?php echo U('Manage/addfilm');?>">添加电影</a></li>
                    <li><a href="<?php echo U('Manage/updatefilm');?>">修改电影</a></li>

                </ul>
            </li>
            <li><a class="no" href="#">电影票管理</a>
                <ul>
                    <li><a href="<?php echo U('Manage/addticket');?>">添加电影票</a></li>
                    <li><a href="<?php echo U('Manage/updateticket');?>">修改电影票</a></li>
                </ul>
            </li>
            <li><a class="no" href="#">用户管理</a>
                <ul>
                    <li><a href="#">拉黑</a></li>

                </ul>
            </li>

        </ul>
    </nav>
</div>
<script type="text/javascript">
    //关闭a标签的默认功能
    $(document).ready(function(){
        $('#no').on('click', function(e){
            e.preventDefault();
        });

        $('#ddmenu li').hover(function () {
            clearTimeout($.data(this,'timer'));
            $('ul',this).stop(true,true).slideDown(200);
        }, function () {
            $.data(this,'timer', setTimeout($.proxy(function() {
                $('ul',this).stop(true,true).slideUp(200);
            }, this), 100));
        });

    });
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo (C("BACK_CSS_URL")); ?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="#">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                    <tr id="product1">
                        <td>1</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S</a></td>
                        <td>100</td>
                        <td>3888</td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174034-58977.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:40:34</td>
                        <td><a href="#">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
                    </tr>
                    <tr id="product2">
                        <td>2</td>
                        <td><a href="#">苹果（APPLE）iPhone 4</a></td>
                        <td>100</td>
                        <td>3100</td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174248-28718.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174248-87501.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:42:48</td>
                        <td><a href="#">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(2)">删除</a></td>
                    </tr>
                    <tr id="product3">
                        <td>3</td>
                        <td><a href="#">苹果（APPLE）iPhone 4 8G版</a></td>
                        <td>100</td>
                        <td>1290</td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174346-31424.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174346-54660.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:43:46</td>
                        <td><a href="#">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(3)">删除</a></td>
                    </tr>
                    <tr id="product4">
                        <td>4</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S 16G版</a></td>
                        <td>100</td>
                        <td>987</td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174455-91962.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174455-10118.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:44:30</td>
                        <td><a href="#" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
</body>
</html>