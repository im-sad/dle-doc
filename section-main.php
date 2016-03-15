<section>
	<h1><span>main.tpl<a href="#mainInfo" title="<? echo $l['watisthis'] ?>" class="about fancybox">?</a></span></h1>
	<div id="mainInfo" class="upCont">
		<strong class="modalTitle"><? echo $l['tpl'] ?> main.tpl</strong>
		<div class="section">
			<h3><? echo $l['p_desc'] ?></h3>
			<? echo $l['main_D'] ?>
		</div>
		<div class="section">
			<h3><? echo $l['p_struct'] ?></h3>
			<?PHP  include_once 'code/main.php';  ?>
		</div>
	</div>


	<h2><? echo $l['need'] ?></h2>
	<div class="cont">
		<div class="grid-sizer"></div>
		<!-- headers -->
		<a href="#headers" title="<? echo $l['tag'] ?> {headers}" class="fancybox box">
			<b>{headers}</b>
			<? echo $l['headers'] ?>
		</a>
		<div id="headers" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {headers}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['headers_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/headers.php';  ?>
			</div>
		</div>


		<!-- ajax -->
		<a href="#ajax" title="<? echo $l['tag'] ?> {AJAX}" class="fancybox box">
			<b>{AJAX}</b>
			<? echo $l['ajax'] ?>
		</a>
		<div id="ajax" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {AJAX}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['ajax_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/ajax.php';  ?>
			</div>
		</div>

		<!-- info -->
		<a href="#info" title="<? echo $l['tag'] ?> {info}" class="fancybox box">
			<b>{info}</b><? echo $l['info'] ?>
		</a>
		<div id="info" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {info}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['info_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/info.php';  ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpluses'] ?> — info.tpl</h3>
				<table class="uses"><?PHP  include_once 'table/info.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/info.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>



		<!-- content -->
		<a href="#contentScroll" class="anchor box">
			<b>{content}</b><? echo $l['content'] ?>
		</a>
	</div>


	<h2><? echo $l['modules'] ?></h2>
	<div class="cont">
		<div class="grid-sizer"></div>
		<!-- custom -->
		<a href="#custom" title="<? echo $l['tag'] ?> {custom}" class="fancybox box">
			<b>{custom}</b><? echo $l['custom'] ?>
		</a>
		<div id="custom" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {custom}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['custom_D'] ?>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/custom.php';  ?>
			</div>

			<div class="section">
				<h3><? echo $l['p_opt'] ?></h3>
				<? echo $l['custom_DD'] ?>
				<table class="uses"><?PHP  include_once 'table/custom.php';  ?></table>
				<p class="import"><? echo $l['custom_DDD'] ?></p>
			</div>
		</div>

		<!-- custom com -->
		<a href="#customcom" title="<? echo $l['tag'] ?> {customcomments}" class="fancybox box addIn11">
			<b>{customcomments}</b><? echo $l['customcom'] ?>
		</a>
		<div id="customcom" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {customcomments}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['customcom_D'] ?>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/customcom.php';  ?>
			</div>

			<div class="section">
				<h3><? echo $l['p_opt'] ?></h3>
				<? echo $l['custom_DD'] ?>
				<table class="uses"><?PHP  include_once 'table/customcom.php';  ?></table>
			</div>
		</div>


		<!-- login -->
		<a class="fancybox box" title="<? echo $l['tag'] ?> {login}" href="#login">
			<b>{login}</b><? echo $l['dlelogin'] ?>
		</a>
		<div id="login" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {login}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['dlelogin_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/login.php';  ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpluses'] ?> — login.tpl</h3>
				<table class="uses"><?PHP  include_once 'table/login.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/login.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- vote -->
		<a href="#vote" title="<? echo $l['tag'] ?> {vote}" class="fancybox box">
			<b>{vote}</b><? echo $l['votes'] ?>
		</a>
		<div id="vote" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {vote}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['votes_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpluses'] ?> — vote.tpl</h3>
				<table class="uses"><?PHP  include_once 'table/vote.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/vote.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- topnews -->
		<a href="#topnews" class="fancybox box" title="<? echo $l['tag'] ?> {topnews}">
			<b>{topnews}</b><? echo $l['topnews'] ?>
		</a>
		<div id="topnews" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {topnews}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['topnews_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpluses'] ?> — topnews.tpl</h3>
				<table class="uses"><?PHP  include 'table/topnews.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/topnews.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- archives -->
		<a href="#archives" class="fancybox box" title="<? echo $l['tag'] ?> {archives}">
			<b>{archives}</b><? echo $l['archives'] ?>
		</a>
		<div id="archives" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {archives}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['archives_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/archives.php';  ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_more'] ?></h3>
				<p>Модуль архивов сайта использует следующий класс CSS для ссылок, который вам понадобится для настройки внешнего вида:</p>
				<?PHP  include_once 'code/archivesCSS.php';  ?>
			</div>
		</div>


		<!-- calendar -->
		<a href="#calendar" class="fancybox box" title="<? echo $l['tag'] ?> {calendar}">
			<b>{calendar}</b><? echo $l['calendar'] ?>
		</a>
		<div id="calendar" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {calendar}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['calendar_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/calendar.php';  ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_more'] ?></h3>
				<p>Модуль календаря использует следующие классы CSS, которые вам понадобятся для настройки внешнего вида:</p>
				<?PHP  include_once 'code/calendarCSS.php';  ?>
			</div>
		</div>


		<!-- changeskin -->
		<a href="#changeskin" title="<? echo $l['tag'] ?> {changeskin}" class="fancybox box">
			<b>{changeskin}</b><? echo $l['changeskin'] ?>
		</a>
		<div id="changeskin" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {changeskin}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['changeskin_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/changeskin.php';  ?>
			</div>
		</div>


		<!-- tags -->
		<a href="#tags" title="<? echo $l['tag'] ?> {tags}" class="fancybox box">
			<b>{tags}</b><? echo $l['tags'] ?>
		</a>
		<div id="tags" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {tags}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['tags_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/tags.php';  ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_more'] ?></h3>
				<? echo $l['tags_DD'] ?>
				<?PHP  include_once 'code/tagsCSS.php';  ?>
			</div>
		</div>


		<!-- sort -->
		<a href="#sort" title="<? echo $l['tag'] ?> {sort}" class="fancybox box">
			<b>{sort}</b><? echo $l['sort'] ?>
		</a>
		<div id="sort" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {sort}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['sort_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/sort.php';  ?>
			</div>
		</div>


		<!-- speedbar -->
		<a href="#speedbar" title="<? echo $l['tag'] ?> {speedbar}" class="fancybox box">
			<b>{speedbar}</b><? echo $l['speedbar'] ?>
		</a>
		<div id="speedbar" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {speedbar}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['speedbar_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpluses'] ?> — speedbar.tpl</h3>
				<? echo $l['speedbar_DD'] ?>
			</div>
			<div class="download"><a class="exLink" href="/example/speedbar.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- related -->
		<a href="#related" class="fancybox box" title="<? echo $l['tag'] ?> {related-news}">
			<b>{related-news}</b><? echo $l['related'] ?>
		</a>
		<div id="related" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {related-news}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['related_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpluses'] ?> — relatednews.tpl</h3>
				<p><? echo $l['related_DD'] ?></p>
				<table class="uses"><?PHP  include 'table/topnews.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/relatednews.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- jsfiles -->
		<a href="#jsfiles" class="fancybox box addIn106" title="<? echo $l['tag'] ?> {jsfiles}">
			<b>{jsfiles}</b><? echo $l['jsfiles'] ?>
		</a>
		<div id="jsfiles" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {jsfiles}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['jsfiles_D'] ?>
				<? echo $l['jsfiles_DD'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/jsfiles.php';  ?>
			</div>
		</div>


		<!-- inform -->
		<a href="#inform" title="<? echo $l['tag'] ?> {inform_имя}" class="fancybox box">
			<b>{inform_имя}</b><? echo $l['inform'] ?>
		</a>
		<div id="inform" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {inform_имя}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['inform_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['tpluses'] ?> — informer.tpl</h3>
				<table class="uses"><?PHP  include_once 'table/informer.php';  ?></table>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/informer.php';  ?>
			</div>
			<div class="download"><a class="exLink" href="/example/informer.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- banner -->
		<a href="#banner" title="<? echo $l['tag'] ?> {banner_<? echo $l['name'] ?>}" class="fancybox box">
			<b>{banner_<? echo $l['name'] ?>}</b><? echo $l['banner'] ?>
		</a>
		<div id="banner" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {banner_<? echo $l['name'] ?>}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['banner_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/banner.php';  ?>
			</div>
			<p class="inf"><? echo $l['banner_DD'] ?></p>
		</div>


	</div>


	<h2><? echo $l['modificators'] ?></h2>
	<div class="cont">
		<div class="grid-sizer"></div>
		<!-- THEME -->
		<a class="fancybox box" title="<? echo $l['tag'] ?> {THEME}" href="#theme">
			<b>{THEME}</b><? echo $l['theme'] ?>
		</a>
		<div id="theme" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {THEME}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['theme_D'] ?>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/theme.php';  ?>
				<?PHP  include_once 'inf/alltpl.php';  ?>
			</div>
		</div>

		<!-- Dev comm -->
		<a class="fancybox box addIn11" title="<? echo $l['tag'] ?> {* Текст *}" href="#devcom">
			<b>{* Текст *}</b><? echo $l['devcom'] ?>
		</a>
		<div id="devcom" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {* Текст *}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['devcom_D'] ?>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/devcomm.php';  ?>
			</div>
		</div>


		<!-- include -->
		<a class="fancybox box bigBox" title="<? echo $l['tag'] ?> {include file=&quot;file.tpl&quot;}" href="#include">
			<b>{include file="file.tpl"}</b><? echo $l['include'] ?>
		</a>
		<div id="include" class="upCont">
			<strong class="modalTitle"><? echo $l['tag'] ?> {include file="file.tpl"}</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['include_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/include.php';  ?>
				<?PHP  include 'inf/alltpl.php';  ?>
			</div>
		</div>


		<!-- aviable -->
		<a href="#aviable" title="[aviable=*] <? echo $l['and'] ?> [/aviable]" class="fancybox box bigBox">
			<b>[available=*] <? echo $l['and'] ?> [/available]</b><? echo $l['aviable'] ?>
		</a>
		<div id="aviable" class="upCont">
			<strong class="modalTitle">Теги [available=*] <? echo $l['and'] ?> [/available]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['aviable_D'] ?>
				<?PHP  include 'inf/aviable-info.php'; ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_section'] ?></h3>
				<? echo $l['aviable_DD'] ?>
				<?PHP  include 'inf/aviable.php';  ?>
				<p class="inf"><? echo $l['aviable_DDD'] ?></p>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/aviable.php'; ?>
				<?PHP  include 'inf/alltpl.php';  ?>
			</div>
		</div>


		<!-- group -->
		<a href="#group" title="[group=*] <? echo $l['and'] ?> [/group]" class="fancybox box bigBox">
			<b>[group=*] <? echo $l['and'] ?> [/group]</b><? echo $l['group'] ?>
		</a>
		<div id="group" class="upCont">
			<strong class="modalTitle">Теги [group=*] <? echo $l['and'] ?> [/group]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['group_D'] ?>
				<p class="inf"><? echo $l['group_DD'] ?></p>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/group.php';  ?>
				<?PHP  include 'inf/alltpl.php';  ?>
			</div>
		</div>


		<!-- category -->
		<a href="#category" title="[category=*] <? echo $l['and'] ?> [/category]" class="fancybox box bigBox">
			<b>[category=*] <? echo $l['and'] ?> [/category]</b><? echo $l['category'] ?>
		</a>
		<div id="category" class="upCont">
			<strong class="modalTitle">Теги [category=*] <? echo $l['and'] ?> [/category]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['category_D'] ?>
				<p class="inf"><? echo $l['category_DD'] ?></p>
				<p class="inf"><? echo $l['category_DDD'] ?></p>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/category.php';  ?>
			</div>
		</div>


		<!-- page-count -->
		<a href="#pageCount" title="[page-count=*] <? echo $l['and'] ?> [/page-count]" class="fancybox box bigBox">
			<b>[page-count=*] <? echo $l['and'] ?> [/page-count]</b><? echo $l['pagecount'] ?>
		</a>
		<div id="pageCount" class="upCont">
			<strong class="modalTitle">Теги [page-count=*] <? echo $l['and'] ?> [/page-count]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['pagecount_D'] ?>
				<p class="inf"><? echo $l['pagecount_DD'] ?></p>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/page-count.php';  ?>
				<p class="inf"><? echo $l['pagecount_DDD'] ?></p>
			</div>
		</div>


		<!-- news -->
		<a href="#news" title="[news=*] <? echo $l['and'] ?> [/news]" class="fancybox box bigBox">
			<b>[news=*] <? echo $l['and'] ?> [/news]</b><? echo $l['news'] ?>
		</a>
		<div id="news" class="upCont">
			<strong class="modalTitle">Теги [news=*] <? echo $l['and'] ?> [/news]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['news_D'] ?>
				<p class="inf"><? echo $l['news_DD'] ?></p>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/news.php';  ?>
				<p class="inf"><? echo $l['news_DDD'] ?></p>
			</div>
		</div>


		<!-- static -->
		<a href="#static" title="[static=*] <? echo $l['and'] ?> [/static]" class="fancybox box bigBox">
			<b>[static=*] <? echo $l['and'] ?> [/static]</b><? echo $l['staticIf'] ?>
		</a>
		<div id="static" class="upCont">
			<strong class="modalTitle">[static=*] <? echo $l['and'] ?> [/static]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['staticIf_D'] ?>
				<p class="inf"><? echo $l['staticIf_DD'] ?></p>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/static.php';  ?>
				<p class="inf"><? echo $l['staticIf_DDD'] ?></p>
			</div>
		</div>


		<!-- tags -->
		<a href="#tagsIf" title="[tags=*] <? echo $l['and'] ?> [/tags]" class="fancybox box bigBox">
			<b>[tags=*] <? echo $l['and'] ?> [/tags]</b><? echo $l['tagsIf'] ?>
		</a>
		<div id="tagsIf" class="upCont">
			<strong class="modalTitle">[tags=*] <? echo $l['and'] ?> [/tags]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['tagsIf_D'] ?>
				<p class="inf"><? echo $l['tagsIf_DD'] ?></p>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/tagsIf.php';  ?>
				<p class="inf"><? echo $l['tagsIf_DDD'] ?></p>
			</div>
		</div>


		<!-- smartphone -->
		<a href="#smartphone" title="[smartphone] <? echo $l['and'] ?> [/smartphone]" class="fancybox box bigBox addIn103">
			<b>[smartphone] <? echo $l['and'] ?> [/smartphone]</b><? echo $l['smartphone'] ?>
		</a>
		<div id="smartphone" class="upCont">
			<strong class="modalTitle">[smartphone] <? echo $l['and'] ?> [/smartphone]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['smartphone_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/smartphone.php';  ?>
			</div>
		</div>


		<!-- tablet -->
		<a href="#tablet" title="[tablet] <? echo $l['and'] ?> [/tablet]" class="fancybox box bigBox addIn103">
			<b>[tablet] <? echo $l['and'] ?> [/tablet]</b><? echo $l['tablet'] ?>
		</a>
		<div id="tablet" class="upCont">
			<strong class="modalTitle">[tablet] <? echo $l['and'] ?> [/tablet]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['tablet_D'] ?>
			</div>

			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/tablet.php';  ?>
			</div>
		</div>


		<!-- desktop -->
		<a href="#desktop" title="[desktop] <? echo $l['and'] ?> [/desktop]" class="fancybox box bigBox addIn103">
			<b>[desktop] <? echo $l['and'] ?> [/desktop]</b><? echo $l['desktop'] ?>
		</a>
		<div id="desktop" class="upCont">
			<strong class="modalTitle">[desktop] <? echo $l['and'] ?> [/desktop]</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['desktop_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_example'] ?></h3>
				<?PHP  include_once 'code/desktop.php';  ?>
			</div>
		</div>


	</div>
</section>