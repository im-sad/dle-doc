<div id="leftmenu" class="block">
	<div class="dtop">&nbsp;</div>
	<div class="dcont">
		<div class="btl">
			<h4>Навигация</h4>
		</div>
		<div class="bluemenu">
			
			

				{include file="engine/modules/cat_menu.php?copy=0&cute=6&new_days=1&com_days=90&iconimg=1"}

			
		</div>
		<div class="dpad">
			<ul class="lmenu reset">
				<li><a href="http://dle-news.ru">Поддержка скрипта</a></li>
				<li><a href="/index.php?do=search&amp;mode=advanced">Расширенный поиск</a></li>
				<li><a href="/index.php?do=lastnews">Все последние новости</a></li>
				<li><a href="/index.php?action=mobile">Мобильная версия сайта</a></li>
			</ul>
		</div>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

<div id="news-arch" class="block">
	<div class="dtop">&nbsp;</div>
	<div class="dcont">
		<div class="btl">
			<h4>Архив новостей</h4>
			<span class="tabmenu">
				<a class="thide tabcal" href="#tabln1">В виде календаря</a>
				<a class="thide tabarh" href="#tabln2">В виде списка</a>
			</span>
		</div>
		<div class="tabcont" id="tabln1">
			<p>В виде календаря</p>
			<div class="dpad">{calendar}</div>
		</div>
		<div class="tabcont" id="tabln2">
			<p>В виде списка</p>
			<div class="dpad">{archives}</div>
		</div>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

<div id="popular" class="block">
	<div class="dtop">&nbsp;</div>
	<div class="dcont">
		<div class="btl">
			<h4>Популярные статьи</h4>
		</div>
		<ul>
			{topnews}
		</ul>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

{vote}

<div id="news-partner" class="blocklite">
	<div class="dpad">
		<h4 class="btl">Новости партнеров</h4>
		{inform_dle}
	</div>
	<div class="dbtm">&nbsp;</div>
</div>

<div id="change-skin" class="blocklite">
	<div class="dpad">
		<div class="rcol">{changeskin}</div>
		<b class="rcol">Оформление:</b>
	</div>
	<div class="dbtm">&nbsp;</div>
</div>