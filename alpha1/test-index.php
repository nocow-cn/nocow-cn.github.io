<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>NOCOW NEW WIKI ALPHA1 FINAL</title>
<style type="text/css">
.showhide_hide {display:none;white-space:pre}
.showhide_wrapper, .showhide_wrapper2 {display:inline-block!important;display:-moz-inline-box;display:inline-block;display:inline;zoom:1;position:relative}
.showhide_show:focus + .showhide_hide,
.showhide_wrapper:hover .showhide_hide,
.showhide_show:active + .showhide_hide
	{display:block;position:absolute;top:100%;left:0;background-color:aliceblue;border:1px solid lavender}
.showhide_hide:hover, .showhide_wrapperfix .showhide_hide
	{display:block;position:absolute;top:100%;left:0;background-color:aliceblue;border:1px solid lavender}
/*
.showhide_wrapper .showhide_show {zoom: expression('(this.onMouseOver=function(){this.parent.className="showhide_wrapper showhide_wrapperfix"}),(this.onMouseOut=function(){this.parent.className="showhide_wrapper"}),"auto"')}
.showhide_wrapper2 .showhide_show {zoom: expression('(this.onMouseDown=function(){this.parent.className="showhide_wrapper showhide_wrapperfix"}),(this.onMouseOut=function(){this.parent.className="showhide_wrapper"}),"auto"')}
*/
.linklist a {display:block}
.smallsmall {font-size:65%;vertical-align:text-bottom;}
.nosmall {font-size:154%}
</style>
</head>
<body onload="if(document.getElementById('reload_mark').value++=='0')document.getElementById('edit_input').value='在此输入您的内容。\n'+String(Math.floor(100000000*Math.random()))">
<div style="font-weight:bold;text-align:center;color:red">访问最新的Alpha2版请<a href="/alpha2/">点击这里</a></div>
<input type="hidden" value="0" id="reload_mark">
<h3>浏览</h3>
<form action="test-view.php">
<input name="name" type="text" value="标题">
<input type="submit" value="进入" disabled>
</form>
<h3>编辑</h3>
<form action="test-view.php" method="post">
<input name="method" type="hidden" value="put">
<div><input name="name" type="text" value="标题"></div>
<div><textarea name="content" id="edit_input">
在此输入您的内容。
</textarea></div>
<input type="submit" value="提交" disabled><span style="color:red">由于设计问题，本程序现在终止开发，关闭测试。其他问题请联系yh</span>
<script>
</script>
</form>
<h3>链接</h3>
<form action="test-view.php">
<input name="method" type="hidden" value="link">
<div><input name="name" type="text" value="标题"></div>
<div><input name="content" type="text" value="链接目标">
<input type="submit" value="创建链接" disabled></div>
</form>
<h3>删除</h3>
<form action="test-view.php">
<input name="method" type="hidden" value="delete">
<input name="name" type="text" value="标题">
<input type="submit" value="删除" disabled>
</form>
<!--<div id="omake_bgm_player" style="float:right!important;float:none;display:block!important;display:none">
<object id="omake_bgm_windows" classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95">
<param name="filename" value="/prismriver.mp3">
<param name="showcontrols" value="false">
<param name="uimode" value="none">
<param name="autoStart" value="false">
<div id="omake_bgm_standard"></div>
</object>
<iframe src="about:blank" name="frame_of_nothing" style="height:0;width:0;display:none"></iframe>
</div>
<script>
function omake_play(filename){
	if(filename!='/marisa2.mp3')
		document.getElementById('omake_lyric_marisa2').style.display='none'
	else
		document.getElementById('omake_lyric_marisa2').style.display='block'
	if(filename!='/nitori2.mp3')
		document.getElementById('omake_lyric_nitori2').style.display='none'
	else
		document.getElementById('omake_lyric_nitori2').style.display='block'
	if(typeof(t1=document.getElementById('omake_bgm_standard'))!="undefined"&&t1!=null)
		t1.innerHTML='<embed id="omake_bgm" src="'+filename+'" autostart="true" hidden="true">'
	if(typeof(t2=document.getElementById('omake_bgm_windows'))!="undefined"&&t2!=null){
		t2.autostart=true
		t2.filename=filename
//		t2.play()
	}
}
function omake_stop(){
	if(typeof(t1=document.getElementById('omake_bgm_standard'))!="undefined"&&t1!=null)
		t1.innerHTML=''
	if(typeof(t2=document.getElementById('omake_bgm_windows'))!="undefined"&&t2!=null)
		t2.stop()
}
</script>-->
<h3>提示<!-- <small><small><a href="javascript:void(omake_play('/prismriver.mp3'))">(BGM+)</a></small></small>--></h3>
<p>:urlid是一个特殊名称，表示在数据库中的id</p>
<p><a href="test-view.php/:list">:list</a>是所有页面的列表（不含子页面）</p>
<p>:perm是继承链接，也就是说不存在的时候自动指向上一级的同名内容。</p>
<p>在firefox、opera、konqueror等浏览器中，鼠标指向一部分调试信息可以看到栈的内容，在alpha1.1就有了，但是相信还有很多ie用户没有发现</p>
<p>链接只能链接到已存在页面或者其他链接，循环链接的情况虽然会失败，但是会先清空原来的内容，不过这应该不是个很严重的问题</p>
<p>由于没有符号链接功能，被删除的页面的链接将会永久性的断开，只能重新写入或者链接到别处。移动功能暂时也没有实现。</p>
<h3>开发者留言</h3>
<p>不用说，很明显这东西还没法真正用于wiki。现在这个只是一个数据库模型。</p>
<p>而且还有很大的优化余地，以上内容仅供测试用</p>
<p>Alpha2.0已经发布，参见本页顶端链接</p>
<p>有什么好的想法，或者希望协助开发（我希望最近alpha2阶段能有1到2个人帮忙），请和yh联系</p>
<h3>其他</h3>
<p>这不是一个重要的版本，其中包括了对Alpha2的一些准备工作，并没有什么功能上的更新。</p>
<p>a1 Final版一切从简，其他的附加内容请看alpha2的测试页。</p>
</body>
</html>
