<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"../public/templete/AdminThemes/index\index.html";i:1494417339;s:55:"../public/templete/AdminThemes/layout\index_layout.html";i:1499936471;}*/ ?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>ITKEE_CN 后台管理系统</title>
    <link href="__ADMIN_TMPL__/resource/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN_TMPL__/css/index.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN_TMPL__/font/css/font-awesome.min.css" rel="stylesheet" />
    <script type="text/javascript">
        var SITE_URL = '<?php echo SITE_URL;?>';
        var ADMIN_TEMPLATES_URL = '__ADMIN_TMPL__';
    </script>
    <script type="text/javascript" src="__JS__/jquery.min.js"></script>
    <script type="text/javascript" src="__ADMIN_TMPL__/resource/js/common.js"></script>
    <script type="text/javascript" src="__ADMIN_TMPL__/resource/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="__ADMIN_TMPL__/resource/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="__ADMIN_TMPL__/js/jquery.bgColorSelector.js"></script>
    <script type="text/javascript" src="__ADMIN_TMPL__/js/admincp.js"></script>
    <script type="text/javascript" src="__ADMIN_TMPL__/resource/js/ajaxfileupload/ajaxfileupload.js"></script>
    <script type="text/javascript" src="__ADMIN_TMPL__/resource/js/jquery.Jcrop/jquery.Jcrop.js" id="cssfile2"></script>
    <link rel="stylesheet" type="text/css"  href="__ADMIN_TMPL__/resource/js/jquery.Jcrop/jquery.Jcrop.min.css"/>
    <!--CSS引用-->
    
</head>

<body>
<div class="admincp-header">
    <div class="bgSelector"></div>
    <div id="foldSidebar"><i class="fa fa-outdent " title="展开/收起侧边导航"></i></div>
    <div class="admincp-name">
        <h1>ITKEE.CN</h1>
        <h2>平台系统管理中心</h2>
    </div>
    <div class="nc-module-menu">
        <ul class="nc-row">
            <?php echo $top_nav; ?>
        </ul>
    </div>
    <div class="admincp-header-r">
        <div class="manager">
            <dl>
                <dt class="name"><?php echo session('admin_name'); ?></dt>
                <dd class="group">超级管理员</dd>
            </dl>
            <span class="avatar">
                <input name="_pic" type="file" class="admin-avatar-file" id="_pic" title="设置管理员头像"/>
                <img alt="" nctype="admin_avatar" src="__ADMIN_TMPL__/images/login/admin.png">
            </span>
        </div>
        <ul class="operate nc-row">
            <li><a class="style-color show-option" id="trace_show" href="javascript:void(0);" title="给管理中心换个颜色">&nbsp;</a></li>
            <li><a class="sitemap show-option" href="javascript:;" onclick="clearCache()" title="清理缓存">&nbsp;</a></li>
            <li><a class="homepage show-option" target="_blank" href="<?php echo url('/'); ?>" title="新窗口打开商城首页">&nbsp;</a></li>
            <li><a class="login-out show-option" href="<?php echo url('admin/login/logout'); ?>" title="安全退出管理中心">&nbsp;</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>

<div class="admincp-container unfold">
    <div class="admincp-container-left">
        <div class="top-border"><span class="nav-side"></span><span class="sub-side"></span></div>
        <?php echo $left_nav; ?>
        <div class="about" title="关于ITKEE.CN">
            <i class="fa fa-copyright"></i>
            <span>ITKEE.CN</span>
        </div>
    </div>
    <div class="admincp-container-right">
        <div class="top-border"></div>
        <iframe src="" id="workspace" name="workspace" style="overflow: visible;" frameborder="0" width="100%" height="94%" scrolling="yes" onload="window.parent"></iframe>
    </div>
</div>
<!--网站主体-->
<!---->
<script src="__JS__/layui/lay/dest/layui.all.js"></script>
<script>
    // 定义全局JS变量
    var GV = {
        current_controller: "admin/<?php echo (isset($controller) && ($controller !== '')?$controller:''); ?>/",
        base_url: "__STATIC__"
    };
    function clearCache(){
        var _url = "<?php echo url('admin/Clear/delete'); ?>";
        $.post(_url,'',function(data){
            if(data.code=='1'){
                layer.msg(data.msg);
            }else{
                layer.msg(data.msg);
            }
        });
    }
</script>
<!--JS引用-->


<!--页面JS脚本-->

</body>
</html>