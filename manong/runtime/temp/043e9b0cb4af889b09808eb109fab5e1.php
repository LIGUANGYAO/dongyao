<?php /*a:1:{s:71:"/www/wwwroot/manong.yaho.cc/application/index/view/member/favorite.html";i:1547091029;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/favorite?cateid=1'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/favorite?cateid=1">网站源码</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/favorite?cateid=2'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/favorite?cateid=2">游戏源码</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/favorite?cateid=3'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/favorite?cateid=3">插件模块</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/favorite?cateid=4'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/favorite?cateid=4">视频教程</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/favorite?cateid=5'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/favorite?cateid=5">精品工具</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/favorite?cateid=6'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/favorite?cateid=6">技术文章</a></li>     	
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
			<table class="layui-table" lay-skin="line">
				<thead>
					<tr>
						<th>主题</th><th>收藏时间</th><th>操作</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($list as $value): ?>
            <tr>
              <th><?php echo htmlentities($value['goods_title']); ?></th>
              <th><?php echo htmlentities($value['addtime']); ?></th>
              <th><a title="删除" onclick="member_del(this,'<?php echo htmlentities($value['id']); ?>')" href="javascript:;">取消收藏</a></th>
            </tr>
          <?php endforeach; ?>
				</tbody>
			</table>
      	</div>

    </div>
</div>
</div>
<div class="fly-footer">
	<p><a href="/">码农网</a>2017 &copy;<a href="/">codesceo.com</a></p>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_68').parent().parent().addClass('layui-nav-itemed');
    });
</script>
<script>
	function member_del(obj,id){
		     layer.confirm('确认要删除吗？',function(index){
            
                  $.ajax({
                        url: "<?php echo url('/index/member/fadelete'); ?>",
                        type: "get",
                        async : true,
                        data: {id:id},
                        dataType:'json',
                        success:function(data){
                        	if(data['return']==1){
                        		 $(obj).parents("tr").remove();
                            	 layer.msg("删除成功",{icon:1,time:1000});
                        	}else{
                                 layer.msg("删除失败",{icon:2,time:1000});
                        	}
                 }
            });
          });
	}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_69').parent().parent().addClass('layui-nav-itemed');
    });
</script>
<?php echo widget("Last/mfooter"); ?>