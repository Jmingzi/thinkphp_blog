<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="zh-cn"><head><title><?php echo ($data["0"]["title"]); ?> - Ming依然</title><meta name="keywords" content="<?php echo ($data["0"]["title"]); ?>，Ming依然，MingCMS，MingBlog，个人博客" /><meta name="description" content="<?php echo (change_substr($data["0"]["content"],50)); ?>" /><meta name="renderer" content="webkit"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta property="qc:admins" content="436125133761524776654" /><link rel="stylesheet" href="__PUBLIC__/css/pintuer.css"><link rel="stylesheet" href="__PUBLIC__/css/index.css"><script>    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?75c4d1212e0e86f5b991bce6a20a8e82";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script></head><body><!-- 导航 --><div class="container-layout mynav"><div class="line"><div class="navbar xb10 xb1-move"><div class="navbar-head"><button class="button icon-navicon" data-target="#navbar1"></button><a href="#" class="xb12 xl8"><img src="__PUBLIC__/images/logo.jpg" class="img-responsive shake-hover" alt="logo" /></a></div><div class="navbar-right hidden-s hidden-l bg-main login"><a href="javascript:;"><span id="login"></span></a><a href="javascript:;" onclick="AddFavorite(window.location,document.title)" target="_blank" class="icon-heart"> 收藏</a><script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101209215" charset="utf-8"></script><script type="text/javascript">QC.Login({ btnId:"login" });</script></div></div></div><!-- line --><div class="line"><div class="xb8 xb1-move mymenu"><div class="navbar-body nav-navicon" id="navbar1"><ul class="nav nav-inline nav-menu"><li><a href="./"><i class=" icon-qrcode"></i><strong>首页</strong><i class=" icon-qrcode"></i></a></li><?php
 $_nav_cate = M('cate')->order("sort ASC")->limit("4")->select(); import('Class.Category', APP_PATH); $_nav_cate = Category::unlimitedCate($_nav_cate); foreach( $_nav_cate as $_nav_cate_v ) : extract($_nav_cate_v); $url = U('/list_'. $id); ?><li><a href="<?php echo ($url); ?>"><strong><?php echo ($name); ?></strong></a></li><?php  endforeach; ?><li><a href="http://mingresume.sinaapp.com" class="badge-corner" target="_blank">关于我<span style="font-size:12px;color:#fff;" class="badge bg-red">RESUME</span></a></li></ul></div></div></div><!-- line --></div><!-- 导航 --><link rel="stylesheet" href="__ROOT__/Data/kindeditor/plugins/code/prettify.css" /><script type="text/javascript" charset="utf-8" src="__ROOT__/Data/kindeditor/kindeditor.js"></script><script type="text/javascript" charset="utf-8" src="__ROOT__/Data/kindeditor/plugins/code/prettify.js"></script><script type="text/javascript">	KindEditor.ready(function(K) {
		prettyPrint(); 
	});
	</script><div class="layout mycontent"><div class="line bg"><div class="xb7 xb1-move myleft"><h3><i class=" icon-paper-clip"></i> 位置&gt;<a href="<?php echo U(GROUP_NAME.'/Index/index', '', '');?>">首页</a>&gt;
				<?php $num=0; if(is_array($parent)): foreach($parent as $key=>$p): ?><a href="<?php echo U('/list_'.$p['id']);?>"><?php echo ($p["name"]); ?></a><?php if($num == 0): ?>&gt;<?php endif; $num++; endforeach; endif; ?></h3><div class="line"><?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="xb12 xl12"><h2 style="text-align:center;"><i class=" icon-star"></i><?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$a): ?><span style="color:<?php echo ($a["color"]); ?>;">[<?php echo ($a["name"]); ?>]</span><?php endforeach; endif; echo ($v["title"]); ?></h2><p class="text-center mycontent-info"><i class="icon-user"></i><?php echo ($v["name"]); ?> | <i class="icon-calendar"></i><?php echo (date('Y年m月d日 H点i分', $v["time"])); ?> | <i class="icon-eye"></i> 阅读(<script type="text/javascript" src="<?php echo U(GROUP_NAME.'/Content/addClickNum', array('id'=>$v['id']));?>"></script>) | <i class="icon-file"></i> 所属分类[<?php echo ($v["sort"]); ?>] | <i class="icon-tag"></i><?php if(is_array($v["tags"])): foreach($v["tags"] as $key=>$t): ?><span class="tag"><?php echo ($t["name"]); ?></span>&nbsp;<?php endforeach; endif; ?></p><p></i><?php echo (change_html_tags($v["content"])); ?></p></div><!-- mycontent-info --></div><!-- line --><div style="padding:20px;" class="ds-thread" data-thread-key="<?php echo ($v["id"]); ?>" data-title="<?php echo ($v["title"]); ?>" data-url=""></div><?php endforeach; endif; ?></div><div class="xb3 myright"><div class="line"><div class="xb12 xl12"><h4 class="icon-globe bg-main"> 图片新闻</h4><div class="banner myblock" data-pointer="1" data-style="border-main"><div class="carousel"><div class="item newsone"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newstwo"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newsthree"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newsfour"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div><div class="item newsfive"><img src="__PUBLIC__/images/123.jpg" class="img-responsive" alt=""><p></p></div></div></div></div><!-- 图片新闻 --><div class="x12"><div class="line myblock"><h4 class="icon-list bg-main"> 阅读排行</h4><?php echo W('Blog');?></div></div><!-- read --><!-- 我的标签 --><div class="x12 mytags"><div class="line mytaglist"><?php echo W('Tag');?></div></div><!-- 文章档案 --><div class="x12"><div class="line myblock"><h4 class="icon-table bg-main dangan"> 文章档案</h4><?php echo W('Dangan');?></div></div><!-- 最新评论 --><div class="x12"><div class="line myblock"><h4 class="icon-comments bg-main"> 最新评论</h4><!-- 多说最新评论 start --><div class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div><!-- 多说最新评论 end --></div></div><!-- 最新评论 --><div class="x12"><div class="line myblock"><h4 class="icon-user bg-main"> 访客统计</h4><p class="text-center"><a href="http://info.flagcounter.com/7MfP"><img src="http://s06.flagcounter.com/count2/7MfP/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_8/viewers_3/labels_0/pageviews_1/flags_0/" alt="Flag Counter" border="0"></a></p></div></div></div></div></div><script type="text/javascript">    var tourl = "<?php echo U('Index/Index/getTXnews');?>";
    function AddFavorite(sURL, sTitle)
    { try{
            window.external.addFavorite(sURL, sTitle);
         }catch (e){ try{
                        window.sidebar.addPanel(sTitle, sURL, "");
                        }catch (e){alert("加入收藏失败，请使用Ctrl+D进行添加");}}}
    var duoshuoQuery = {short_name:"mingcms"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
         || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    </script><!-- 页脚 --><div class="layout myfoot"><p class="text-center"><a href="./sitemap.html" target="_blank" class="icon-money"> 网站地图</a><a href="<?php echo U('./list_23');?>" target="_blank" class=" icon-cog"> 修改日志</a><a href="http://dn-mingzi.qbox.me/" target="_blank" class="icon-home"> 我的主页7.0</a><a href="http://www.ymblog.net/public/demo/class2" target="_blank" class="icon-check"> 班级主页2.0</a></p><p class="text-center">&copy;版权所有 2014-2015 本站由ThinkPHP强力驱动，All Designed By <a href="http://myfirsthome.sinaapp.com" target="_blank">Ming依然</a>.</p></div><script src="__PUBLIC__/js/jquery.js"></script><script src="__PUBLIC__/js/pintuer.js"></script><script src="__PUBLIC__/js/index.js"></script></body></html>