<?php
define ( 'ROOT_DIR', dirname ( __FILE__ ) );
#include_once ROOT_DIR . '/_site/before.php';
include_once ROOT_DIR . '/_site/site.lng';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#">
<head>
<!--[if lt IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<title>DLE-DOC - <? echo $l['title'] ?></title>
<meta charset="utf-8" />
<meta name="keywords" content="<? echo $l['key'] ?>" />
<meta name="description" content="<? echo $l['desc'] ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta property="og:image" content="http://dle-doc.ru/tile.png" />
<meta name='yandex-verification' content='5d5513f16a8e6301' />

<meta name="msapplication-config" content="browserconfig.xml" />
<link rel="apple-touch-icon" href="apple-touch-icon-precomposed.png" />

<link rel="stylesheet" href="/min/b=css&amp;f=style.css,mod.css" />
</head>


<body>
<noscript><div class="nojs">Без JavaScript сайт работать не будет</div></noscript>


<header>
<div class="headerCore">
	<h1 class="logo"><span class="logoIcn"></span><strong>DLE-DOC</strong> <span>—</span> <? echo $l['slogan'] ?></h1>

	<div class="likely">
		<div class="vkontakte"></div>
		<div class="gplus"></div>
		<div class="facebook"></div>
		<div class="twitter" data-via="dledoctor"></div>
	</div>

	<div title="<? echo $l['verTitle'] ?>" class="dleVer" id="dle-vers">ver <? echo $ver ?></div>
	<a class="changes" target="_blank" href="http://dle-news.ru/extras/diffs/"><? echo $l['changes'] ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="ex"><path d="M38.288 10.297l1.414 1.415-14.99 14.99-1.414-1.414z"/><path d="M40 20h-2v-8h-8v-2h10z"/><path d="M35 38H15c-1.7 0-3-1.3-3-3V15c0-1.7 1.3-3 3-3h11v2H15c-.6 0-1 .4-1 1v20c0 .6.4 1 1 1h20c.6 0 1-.4 1-1V24h2v11c0 1.7-1.3 3-3 3z"/></svg></a>
</div>
</header>






<div class="ahtng">
	<span class="ahtng-close">&times;</span>
	<p>Вёрстка для <b>DLE</b> и любые работы с шаблонами. Примеры в <a target="_blank" href="http://v.sadisme.ru/">нанопортфолио</a></p>
	<p class="ahtng-links">Пиши в <a target="_blank" href="http://vk.com/sadmrak">ВК</a>, <a target="_blank" href="skype:sadmrak">Skype</a> или на <a target="_blank" href="mailto:im-sad@ya.ru">почту</a></p>
</div>


<div id="wrapper">
	<div id="content">
		<?PHP  include_once ROOT_DIR . '/section-main.php';  ?>
		<?PHP  include_once ROOT_DIR . '/section-content.php';  ?>
		<?PHP  include_once ROOT_DIR . '/section-other.php';  ?>
	</div>

	<div class="testTemplate">
		<a class="testLink" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template.zip"><? echo $l['downloadBtn'] ?><span class="vers"><? echo $l['verDate'] ?> <? echo $ver ?></span></a>
		<p><a class="fancybox" href="#test"><? echo $l['watisthis'] ?></a></p>
		<div id="test" class="upCont">
			<div class="section">
				<h3><? echo $l['tpl_watthis'] ?></h3>
				<? echo $l['tpl_watthisD'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpl_forwat'] ?></h3>
				<? echo $l['tpl_forwatD'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpl_old'] ?></h3>
				<a class="oldArch" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template_10.zip">10</a>
				<a class="oldArch" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template_101.zip">10.1</a>
				<a class="oldArch" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template_102.zip">10.2</a>
				<a class="oldArch" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template_103.zip">10.3</a>
				<a class="oldArch" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template_104.zip">10.4</a>
				<a class="oldArch" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template_105.zip">10.5</a>
				<a class="oldArch" href="https://dl.dropboxusercontent.com/u/31214341/dle-doc/test-template_106.zip">10.6</a>
			</div>
		</div>
	</div>

	<div class="comments">
		<div id="vk_comments"></div>
	</div>
</div>




<footer>
	<p>Спонсор сайта — <a title="Общество Содействия Автомобилистам" href="http://oo-osa.org/">Общество Содействия Автомобилистам</a></p>
	<p><? echo $l['mail'] ?> — <a href="mailto:im-sad@ya.ru">im-sad@ya.ru</a></p>
</footer>


<!-- CSS -->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css" />

<!-- SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-2.1.4.min.js"><\/script>')</script>

<script src="js/mod.js"></script>
<script type="text/javascript">
$(function(){
	$('.ahtng-close').click(function() {
		$('.ahtng').fadeOut();
		localStorage.ah2 = "hidden";
	});;

	var $grid = $('.cont').masonry({	isResizeBound: false, columnWidth: '.grid-sizer',	itemSelector: '.box',	percentPosition: true,	isResizable: true, transitionDuration: '0.2s'	});


	$(window).resize(function () {
		$grid.masonry('layout');
	});

	// Scroll
	$('a.anchor').bind("click", function(e){
		var anchor = $(this);
		var name = anchor.attr('href');
		$('html, body').stop().animate({scrollTop: $(name).offset().top-40}, 1000);

		e.preventDefault();
		return false;
	});

	// Hash show
	$("a.fancybox").filter('.box').click(function() {
		var hashChange = $(this).attr("href");
		history.pushState( {} , '', hashChange );
	});

	// fastAnchor
	var fastAnchor = window.location.hash;
	if (fastAnchor){	$('a[href$='+fastAnchor+']').filter('.fancybox').fancybox({ openEffect: 'elastic',helpers: { title : null } }).eq(0).trigger('click');	}

	// fancybox
	$('.fancybox').fancybox({
		openEffect: 'elastic',
		helpers: { title : null },
		afterClose : function() {
			//clear hash
			history.pushState("", document.title, window.location.pathname + window.location.search);
    }
	});
});

/* VK */
$(function($j){
	$j(function() {
		$j.ajax({
			url:'//vk.me/js/api/openapi.js?116',	cache:true,	dataType:'script',
			success: function() {	VK.init({apiId: 3704881, onlyWidgets: true});	VK.Widgets.Comments("vk_comments", {limit: 10, attach: false});	}
		});
	})
});

/* CODE */
hljs.initHighlightingOnLoad();


/* Alert cookie*/
if ('localStorage' in window && window['localStorage'] !== null) {
	if (localStorage.getItem("ah2") === null) {	$('.ahtng').show()	}
}
</script>


<!-- metrika --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter34302385 = new Ya.Metrika({ id:34302385, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/34302385" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

</body>
</html>
<?php #include_once ROOT_DIR . '/_site/after.php'; ?>