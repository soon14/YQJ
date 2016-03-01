<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title><?php echo (C("WEB_TITLE")); ?></title>
<meta name="description" content="<?php echo (C("WEB_DESRIPTION")); ?>" />
<meta name="keywords" content="<?php echo (C("WEB_KEYWORDS")); ?>" />
<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
<script type="text/JavaScript" src='__PUBLIC__/Js/jquery.js'></script>
<script type="text/JavaScript" src='__PUBLIC__/Js/bckToTop.js'></script>
<script type="text/javascript" src="__PUBLIC__/Js/qq_focus.js"></script>  
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />

</head>
<body>
<nav>
	<div class="navWrap">
		<h1><a href="/" title="<?php echo (C("WEB_NAME")); ?>-<?php echo (C("WEB_TITLE")); ?>"><?php echo (C("WEB_NAME")); ?></a></h1>
		<div class="nav">
			<?php echo (C("WEB_NAV")); ?>
			<a href="/" title="首 页">首 页</a><span></span>
			<a href="/add" title="我要许愿">我要许愿</a><span></span>
			<a href="/Index/Index/index/p/2.html" title="许愿列表">许愿列表</a><span></span>
			<a href="http://www.xuyuanok.com/list-41.html" title="星座运势" target="_blank">星座运势</a><span></span>
			<a href="http://www.daomei.net.cn" title="倒霉网" target="_blank">倒霉网</a><span></span>
			<a href="http://www.003zhe.com" title="开心购" target="_blank">开心购</a><span></span>
		</div>	
		<form method="get" action="<?php echo U(GROUP_NAME.'/Index/search');?>" style="margin-right:0;">
            <input type="text" class="input" name="id"  value="输入许愿ID..." onfocus="if(this.value == '输入许愿ID...') this.value = ''" onblur="if(this.value =='') this.value = '输入许愿ID...'"/>
            <input type="submit" class="submit" value=""/>
        </form>
	</div>
</nav>

<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="count">
            <p>许愿网已经有许愿卡<?php echo W('Card');?>张&nbsp;&nbsp;  本许愿墙将永久保存你的祝福和许愿,赶紧贴上愿望吧！<a href="/add" title="立即许愿">立即许愿>></a></p>
            <div class="timeBox"><span id="timeid" style="color: #fff;"></span><script type="text/javascript" src="__PUBLIC__/Js/time.js"></script>&nbsp;&nbsp;&nbsp;<script type="text/javascript" src="/Public/Js/date.js"></script></div>
        </div>
    </div>
</div> 




   
<div class="mainWrap">
    <div class="main" id='mt0'>
        <div class="xuyuanbox">
            <ul class="wishul" style="width:1200px;">
                <?php if(is_array($html)): foreach($html as $key=>$v): ?><li>
                        <b class="c<?php echo ($v["class"]); ?>"><?php echo ($v["type"]); ?></b>
                        <a href="<?php echo U('/num-'.$v['id']);?>" title="点击查看<?php echo ($v["fromname"]); ?>的愿望">
                        <p><?php echo (truncate_cn($v["content"],200,'...',0)); ?></p>
                        </a>
                        <span>ID:<?php echo ($v["id"]); ?>&nbsp;&nbsp;<?php echo (date('y-m-d H:i:s',$v["time"])); ?><em><?php echo ($v["fromname"]); ?></em></span>
                    </li><?php endforeach; endif; ?>
            </ul>
            <div class="pagesizee">
                <?php if(count($html) == 0): ?>无数据<?php endif; ?>
                <?php echo ($page); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
//<!CDATA[
    var bodyBgs = [];
    bodyBgs[0] = "__PUBLIC__/Images/background1.jpg";
    bodyBgs[1] = "__PUBLIC__/Images/background2.jpg";
    bodyBgs[2] = "__PUBLIC__/Images/background21.jpg";
    bodyBgs[3] = "__PUBLIC__/Images/background4.jpg";
    bodyBgs[4] = "__PUBLIC__/Images/background16.jpg";
    bodyBgs[5] = "__PUBLIC__/Images/background8.jpg";
    bodyBgs[6] = "__PUBLIC__/Images/background18.jpg";
    bodyBgs[7] = "__PUBLIC__/Images/background12.jpg";
    var randomBgIndex = Math.round( Math.random() * 7 );
    document.write('<style>body{background:url(' + bodyBgs[randomBgIndex] + ') no-repeat center top}</style>');
//]]>
</script>
<!-- <div class="footerWrap">
	<div class="footer">
		<div class="flinks">
			<div class="box">
				<h3>许愿网说明</h3>
				<a href="javascript:;">完全免费</a>
				<a href="javascript:;">永久保存</a>
				<a href="javascript:;">7x24小时客户服务</a>
			</div>
			<div class="boxLine"></div>
			<div class="box">
				<h3>许愿指南</h3>
				<a href="/gudie.html" title="无须注册">无须注册</a>
				<a href="/gudie.html" title="简单操作">简单操作</a>
				<a href="/gudie.html" title="方便搜索">方便搜索</a>
			</div>
			<div class="boxLine"></div>
			<div class="box">
				<h3>关于我们</h3>
				<a href="/JoinUs.html" title="加入我们">加入我们</a>
				<a href="/contact.html" title="联系我们">联系我们</a>
				<a href="/private.html" title="隐私说明">隐私说明</a>
			</div>
			<div class="boxLine"></div>
			<div class="box">
				<h3>文档中心</h3>
				<a href="http://www.xuyuanok.com/list-43.html" title="塔罗占卜" target="_blank">塔罗占卜</a>
				<a href="http://www.xuyuanok.com/list-41.html" title="星座运势" target="_blank">星座运势</a>
				<a href="http://www.xuyuanok.com/list-42.html" title="周公解梦" target="_blank">周公解梦</a>
			</div>
			<div class="boxLine"></div>
			<div class="boxTel">
				<img src="/Public/Images/wxx.png" alt="<?php echo (C("WEB_NAME")); ?>"/>
				<img src="/Public/Images/wxx.png" alt="<?php echo (C("WEB_NAME")); ?>"/>
			</div>
		</div>
		
	</div>
</div> -->
<div class="footerp">
	<p>
		友情链接：<a href="http://www.shangfox.com" target="_blank">尚狐网络</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://www.daomei.net.cn" target="_blank">倒霉</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://www.waamei.com" target="_blank">挖霉网</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://www.gaoxiaosile.com" target="_blank">搞笑死了</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://www.gaoxiaovideos.com" target="_blank">搞笑视频网</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://www.003zhe.com" target="_blank">003折</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://www.leirende.com" target="_blank">雷人的</a>&nbsp;&nbsp;/&nbsp;&nbsp;<br>
				Copyright © 2014 XUYUANOK.COM <a href="http://127.0.6.8" title="许愿网">许愿网</a>版权所有&nbsp;蜀ICP备10047008号&nbsp;&nbsp;技术支持：<a href="http://www.shangfox.com" title="成都尚狐网络" target="_blank">成都尚狐网络</a> SHANGFOX.COM&nbsp; 咨询QQ：406333726
	</p>
</div>



<div id="side_bar">
	<ul>
		<li id="order">
			<a href="/add" style="width: 45px; overflow: hidden;" title="我要许愿"><span>我要许愿</span><i></i></a>
		</li>
		<li id="qq">
			<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=406333726&amp;site=qq&amp;menu=yes" title="许愿网咨询" style="width: 45px; overflow: hidden;">
				<span>406-333-726<br>点击立刻咨询</span><i></i>
			</a>
		</li>
		<li id="tel">
			<a href="###" style="width: 45px; overflow: hidden;"><span>13980835783</span><i></i></a>
		</li>
		<li id="backtop">
			<a href="###" title="许愿网"><span>回到顶部</span><i></i></a>
		</li>
	</ul>
</div>

</body>
</html>