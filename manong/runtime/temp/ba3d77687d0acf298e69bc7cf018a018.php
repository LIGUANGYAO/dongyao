<?php /*a:2:{s:68:"/www/wwwroot/manong.yaho.cc/application/admin/view/config/index.html";i:1547104183;s:70:"/www/wwwroot/manong.yaho.cc/application/admin/view/public/content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap"></div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">
<form autocomplete="off" onsubmit="return false;" action="<?php echo request()->url(); ?>" data-auto="true" method="post" class='form-horizontal layui-form padding-top-20'>

    <div class="form-group">
        <label class="col-sm-2 control-label">
            AppName<br><span class="nowrap color-desc">程序名称</span>
        </label>
        <div class='col-sm-8'>
            <input name="app_name" required="required" title="请输入程序名称" placeholder="请输入程序名称" value="<?php echo sysconf('app_name'); ?>" class="layui-input">
            <p class="help-block">当前程序名称，在后台主标题上显示</p>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">
            AppVersion<br><span class="nowrap color-desc">程序版本</span>
        </label>
        <div class='col-sm-8'>
            <input name="app_version" required="required" title="请输入程序版本" placeholder="请输入程序版本" value="<?php echo sysconf('app_version'); ?>" class="layui-input">
            <p class="help-block">当前程序版本号，在后台主标题上标显示</p>
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="form-group">
        <label class="col-sm-2 control-label">
            SiteName<br><span class="nowrap color-desc">网站名称</span>
        </label>
        <div class='col-sm-8'>
            <input name="site_name" required="required" title="请输入网站名称" placeholder="请输入网站名称" value="<?php echo sysconf('site_name'); ?>" class="layui-input">
            <p class="help-block">网站名称，显示在浏览器标签上</p>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-2 control-label">
            url<br><span class="nowrap color-desc">网址链接</span>
        </label>
        <div class='col-sm-8'>
            <input name="url" required="required" title="请输入网址链接" placeholder="请输入网址链接" value="<?php echo sysconf('url'); ?>" class="layui-input">
            <p class="help-block">请输入网址链接</p>
        </div>
    </div>



    <div class="form-group">
        <label class="col-sm-2 control-label">
            提示消息<br><span class="nowrap color-desc">脚部提示</span>
        </label>
        <div class='col-sm-8'>
            <input name="desc" required="required" title="请输入提示" placeholder="请输入提示" value="<?php echo sysconf('desc'); ?>" class="layui-input">
            <p class="help-block">请输入提示</p>
        </div>
    </div>


 <div class="form-group">
        <label class="col-sm-2 control-label">
            详情页提示<br><span class="nowrap color-desc">详情页提示</span>
        </label>
        <div class='col-sm-8'>
            <input name="xdesc" required="required" title="详情页提示" placeholder="详情页提示" value="<?php echo sysconf('xdesc'); ?>" class="layui-input">
            <p class="help-block">详情页提示</p>
        </div>
    </div>






    <div class="form-group">
        <label class="col-sm-2 control-label">
            Copyright<br><span class="nowrap color-desc">版权信息</span>
        </label>
        <div class='col-sm-8'>
            <input name="site_copy" required="required" title="请输入版权信息" placeholder="请输入版权信息" value="<?php echo sysconf('site_copy'); ?>" class="layui-input">
            <p class="help-block">程序的版权信息设置，在后台登录页面显示</p>
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="form-group">
        <label class="col-sm-2 control-label">
            logo<br><span class="nowrap color-desc">logo</span>
        </label>
        <div class='col-sm-8'>
            <img data-tips-image style="height:auto;max-height:32px;min-width:32px" src="<?php echo sysconf('browser_icon'); ?>"/>
            <input type="hidden" name="browser_icon" onchange="$(this).prev('img').attr('src', this.value)" value="<?php echo sysconf('browser_icon'); ?>" class="layui-input">
            <a class="btn btn-link" data-file="one" data-uptype="local" data-type="ico,png" data-field="browser_icon">上传图片</a>
            <p class="help-block">建议上传ICO图标的尺寸为128x128px，此图标用于网站标题前，<a href="http://www.favicon-icon-generator.com/" target="_blank">ICON在线制作</a></p>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">
            Miitbeian<br><span class="nowrap color-desc">网站备案</span>
        </label>
        <div class='col-sm-8'>
            <input name="miitbeian" title="请输入网站备案号" placeholder="请输入网站备案号" value="<?php echo sysconf('miitbeian'); ?>" class="layui-input">
            <p class="help-block">网站备案号，可以在<a target="_blank" href="http://www.miitbeian.gov.cn">备案管理中心</a>查询获取</p>
        </div>
    </div>


    

    <div class="col-sm-4 col-sm-offset-2">
        <div class="layui-form-item text-center">
            <button class="layui-btn" type="submit">保存配置</button>
        </div>
    </div>
</form>
</div>
</div>

<!-- 右则内容区域 结束 -->