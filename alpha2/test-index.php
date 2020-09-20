<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>NOCOW NEW WIKI ALPHA2.1</title>
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
<input type="hidden" value="0" id="reload_mark">
<h3>执行操作</h3>
<form action="test-view.php">
<div><input name="name" type="text" value="标题"></div>
<div><textarea name="content" id="edit_input">在此输入您的内容</textarea></div>
<div>内容类型：
<div><input name="contenttype" type="radio" value="0" id="a2execute_type_text" checked><label for="a2execute_type_text">文本</label><input name="contenttype" type="radio" value="1" id="a2execute_type_path"><label for="a2execute_type_path">目录</label><input name="contenttype" type="radio" value="2" id="a2execute_type_link"><label for="a2execute_type_link">链接</label></div>
<div>操作：
<div><input name="method" type="radio" value="source" id="a2excute_method_source" checked><label for="a2excute_method_source">source</label></div>
<div><input name="method" type="radio" value="read" id="a2excute_method_read"><label for="a2excute_method_read">read</label></div>
<div><input name="method" type="radio" value="excute" id="a2excute_method_excute"><label for="a2excute_method_excute">excute</label></div>
<div><input name="method" type="radio" value="write" id="a2excute_method_write"><label for="a2excute_method_write">write</label></div>
</div>
<div><input type="submit" value="提交" disabled><span style="color:red">由于设计问题，本程序现在终止开发，关闭测试。其他问题请联系yh</span></div>
</form>
<div id="omake_bgm_player" style="float:right!important;float:none;display:block!important;display:none">
<object id="omake_bgm_windows" classid="CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95">
<param name="filename" value="/omf.mp3">
<param name="showcontrols" value="false">
<param name="uimode" value="none">
<param name="autoStart" value="false">
<div id="omake_bgm_standard"></div>
</object>
<iframe src="about:blank" name="frame_of_nothing" style="height:0;width:0;display:none"></iframe>
</div>
<script>
function omake_play(filename){
/*	if(filename!='/marisa2.mp3')
		document.getElementById('omake_lyric_marisa2').style.display='none'
	else
		document.getElementById('omake_lyric_marisa2').style.display='block'
	if(filename!='/nitori2.mp3')
		document.getElementById('omake_lyric_nitori2').style.display='none'
	else
		document.getElementById('omake_lyric_nitori2').style.display='block'*/
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
</script>
<h3>提示<!-- <small><small><a href="javascript:void(omake_play('/brsnayu.mp3'))">(BGM+)</a></small></small>--></h3>
<p>:urlid是一个特殊名称，表示在数据库中的id</p>
<p><a href="test-view.php/:list?method=source">:list</a>是所有页面的列表（不含子页面）</p>
<p>:perm是继承链接，也就是说不存在的时候自动指向上一级的同名内容。</p>
<p>在firefox、opera、konqueror等浏览器中，鼠标指向一部分调试信息可以看到栈的内容，在alpha1.1就有了，但是相信还有很多ie用户没有发现</p>
<p style="color:red">关于之前新建页面的问题，请见下面的说明。</p>
<!--<p>链接只能链接到已存在页面或者其他链接，循环链接的情况虽然会失败，但是会先清空原来的内容，不过这应该不是个很严重的问题</p>-->
<p>目前链接操作只有链接目标本来就是短路链接的情况下，才会产生短路链接</p>
<p>由于没有符号链接功能，被删除的页面的链接将会永久性的断开，只能重新写入或者链接到别处。移动功能暂时也没有实现。</p>
<p>source是普通的读取，read是加上类包装的读取。类信息保存在:class子目录中，临时格式为：一个空格分隔的列表，其中有一个或多个目录，以/开始。参见下面的例子。</p>
<h3>函数说明</h3>
<dl>
<dt>special/inc1</dt>
<dd>返回参数+1，例如：
<ul>
<li><a href="test-view.php/classtest1?method=write&amp;content=1">write classtest1 "1"</a></li>
<li><a href="test-view.php/special/inc1?method=execute&amp;content=classtest1&amp;contenttype=1">execute special/inc1 classtest1</a></li>
<li>上条也可以写成：<a href="test-view.php/classtest1/:class?method=write&amp;content=/special/inc1">write classtest1/:class "/special/inc1"</a>; <a href="test-view.php/classtest1?method=read">read classtest1</a></li>
<li>返回2</li>
</ul></dd>
<dt>special/add</dt>
<dd>返回两个数的和，两个数保存在参数/0和参数/1，例如：
<ul>
<li><a href="test-view.php/classtest2/0?method=write&amp;content=1">write classtest2/0 "1"</a></li>
<li><a href="test-view.php/classtest2/1?method=write&amp;content=2">write classtest2/1 "2"</a></li>
<li><a href="test-view.php/special/inc1?method=execute&amp;content=classtest2&amp;contenttype=1">execute special/add classtest2</a></li>
<li>上条也可以写成：<a href="test-view.php/classtest2/:class?method=write&amp;content=/special/add">write classtest2/:class "/special/add"</a>; <a href="test-view.php/classtest2?method=read">read classtest2</a></li>
</ul>
</dd>
</dl>
<h3>开发者留言</h3>
<p>不用说，很明显这东西还没法真正用于wiki。现在这个只是一个数据库+执行模型。</p>
<p>而且还有很大的优化余地，以上内容仅供测试用</p>
<p>现在主要的问题就是，重写sql数据类型处理的代码，把它移植到新的模式上来。没有这个旧的实现，我就很难测试alpha2的新框架，但是重写旧代码确实是一件让人很不愿意干的事</p>
<p>有什么好的想法，或者希望协助开发（我希望alpha2阶段能有1到2个人帮忙），请和yh联系</p>
<h3>一些显然的问题</h3>
<ul>
<li>现在速度是很大的问题，还有待优化。</li>
<li>虽然代码里写了，处理缓存的部分是一个并查集，但是还没有真正实现并查集的功能</li>
<li>由于效率的问题，我暂时放弃了符号链接的实现，改用另一种更简单的方法处理权限（也就是继承链接，以后会反过来通过继承链接+创建时间处理符号链接）。但是同样的，多线程安全和中断脚本带来的问题还是没有解决</li>
<li>太长的名字可以造成同时写入若干重名内容</li>
<li style="color:red">之前的版本不支持新建页面的操作，而且我已经在此注明。但是这个问题似乎影响太大了，所以我以一种不是很完美的方式暂时修复了这个问题。</li>
<li style="color:red">在现在的实现中，执行write操作会清空所有的子页面，请注意。</li>
<li style="color:red">提交的内容没有经过检查，不保证对客户端的安全性！请谨慎操作。</li>
</ul>
<h3>更改历史</h3>
<h4>alpha2.1</h4>
<p>实现了执行功能和基本的函数模板</p>
<p>基本实现了类包装的功能</p>
<p>增加了sql类型过滤器对新的模式的临时支持</p>
<h4>alpha2</h4>
<p>用一个新的模型进行了封装，以方便对将来的权限管理等内容的支持</p>
<p>实现了一些简单的操作</p>
<p>bug修复与代码整理</p>
<h4>alpha1 final <small><a href="/alpha1/test-index.php">（测试页面）</a></small></h4>
<p>增加了不完整的缓存写入支持（但是设计已经完成）</p>
<p>修改了路径的存储方式，现在的形式更适用于alpha2的功能，而且更容易修改</p>
<p>增加了固定地址这个属性，用于权限管理中的检索</p>
<h4>alpha1.4</h4>
<p>增加了继承链接（到父目录同名内容的链接），这也是这次主要的更新</p>
<p>为此而实现还有逻辑上结构化的sql数据表列</p>
<p>修正了对特殊子目录的特殊子目录的处理，之前的实现可能通过不同的方式得到不同的结果</p>
<p>公布了删除功能</p>
<p>架构修改并不是很大，下次alpha2将会有比较大的修改</p>
<h4>alpha1.3</h4>
<p>修正了处理链接的一些bug，但是效率还是没有明显进步</p>
<p>支持用单独的列储存链接信息<p>
<p>更多的显示栈的调试信息</p>
<p>直接读写时跳过headers等无用内容</p>
<p>加入了链接的缓存，缩短重复请求同一链接的时间</p>
<p>加入了sql计时器，但是这只是个临时的解决方案</p>
<h3>预告</h3>
<p>下一步首先要整理一下过去的代码。</p>
<p>之后就是权限管理了。根据之前的想法，权限管理将会使用一种相对比较简单的方式：由用户主动获取所属的组，以免带来效率问题（同时可能需要带条件的list等等功能）</p>
<p>现在的部分是本程序开发中的最困难的部分。另外效率按现在的情况肯定会越来越低，以后说不定我会打算用C重写这个程序，但是这是我一个人很难自己完成的。</p>
<h3>其他</h3>
<p>由于某些原因开发速度减缓，其他内容先略吧。</p>
<p>具体的说，类包装模型并不是一个更广义的设计中的基本内容，而是在后面的函数式的优化中的内容。过早的实现这个东西，会有比较严重的依赖问题。然而它又是作为wiki程序的一个基础。所以现在就有点无从下手了。</p>
<p>个人不是很希望写一个畸形的东西。虽然我在这段时间内没有打算完全实现原始设计，但是也一直是以“可以扩展到原始设计”为目标。这样下去，就很难做到了。</p>
<p>所以我有点打算直接去实现原始设计，不过潜在的可能会帮我的人就更不容易找到了。而这个东西，或许在某些方面确实很不错，但是要是让它真正用于wiki，恐怕就不是一两年能完成的事了。看看gnu、盗版党、中国山寨的发展，不知道还能不能赶得上为知识流通作出些贡献。</p>
<p>有什么问题，请联系yh（<a href="mailto:cosechy@gmail.com">cosechy@gmail.com</a>）</p>
</body>
</html>
