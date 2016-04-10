<section id="contentScroll">
	<h1><span>{content}<a href="#aboutInfo" title="<? echo $l['watisthis'] ?>" class="about fancybox">?</a><b>main.tpl</b></span></h1>

	<div id="aboutInfo" class="upCont">
		<strong class="modalTitle"><? echo $l['tag'] ?> {content}</strong>
		<div class="section">
			<h3><? echo $l['p_desc'] ?></h3>
			<? echo $l['content_D'] ?>
		</div>
	</div>

	<h2><? echo $l['shorts'] ?></h2>
	<div class="cont">
		<div class="grid-sizer"></div>
		<!-- shortstory -->
		<a class="fancybox box" href="#shortstory" title="<? echo $l['tpl'] ?> shortstory.tpl">
			<b>shortstory.tpl</b>
			<? echo $l['short'] ?>
		</a>
		<div id="shortstory" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> shortstory.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<p><? echo $l['shortD'] ?></p>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/shortstory.php';  ?></table>
				<h3><? echo $l['p_mod'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/shortstory_mod.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/shortstory.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>



		<!-- navigation -->
		<a class="fancybox box" href="#navigation" title="<? echo $l['tpl'] ?> navigation.tpl">
			<b>navigation.tpl</b>
			<? echo $l['nav'] ?>
		</a>
		<div id="navigation" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> navigation.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['nav_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include 'table/navigation.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/navigation.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- attachment -->
		<a class="fancybox box addIn105" href="#attach" title="<? echo $l['tpl'] ?> attachment.tpl">
			<b>attachment.tpl</b>
			<? echo $l['attach'] ?>
		</a>
		<div id="attach" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> attachment.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['attach_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include 'table/attach.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/attachment.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- poll -->
		<a class="fancybox box" href="#poll" title="<? echo $l['tpl'] ?> poll.tpl">
			<b>poll.tpl</b>
			<? echo $l['poll'] ?>
		</a>
		<div id="poll" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> poll.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['poll_D'] ?>

			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/poll.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/poll.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>
	</div>



	<h2><? echo $l['fulls'] ?></h2>
	<div class="cont">
		<div class="grid-sizer"></div>
		<!-- fullstory -->
		<a class="fancybox box" href="#fullstory" title="<? echo $l['tpl'] ?> fullstory.tpl">
			<b>fullstory.tpl</b>
			<? echo $l['full'] ?>
		</a>
		<div id="fullstory" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> fullstory.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['full'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<? echo $l['full_same'] ?>
				<table class="uses"><?PHP  include_once 'table/fullstory.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/fullstory.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- splitnewsnavigation -->
		<a class="fancybox box bigBox addIn101" href="#splitnewsnavigation" title="<? echo $l['tpl'] ?> splitnewsnavigation.tpl">
			<b>splitnewsnavigation.tpl</b>
			<? echo $l['split'] ?>
		</a>
		<div id="splitnewsnavigation" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> splitnewsnavigation.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['split_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include 'table/navigation.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/splitnewsnavigation.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- comments -->
		<a class="fancybox box" href="#comments" title="<? echo $l['tpl'] ?> comments.tpl">
			<b>comments.tpl</b>
			<? echo $l['comments'] ?>
		</a>
		<div id="comments" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> comments.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['comments_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/comments.php';  ?></table>
				<h3><? echo $l['p_mod'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/comments_mod.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/comments.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- addcomments -->
		<a class="fancybox box" href="#addcomments" title="<? echo $l['tpl'] ?> addcomments.tpl">
			<b>addcomments.tpl</b>
			<? echo $l['addcom'] ?>
		</a>
		<div id="addcomments" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> addcomments.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['addcom_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/addcomments.php';  ?></table>
				<?PHP  include 'inf/noedit.php';  ?>
			</div>
			<div class="download"><a class="exLink" href="/example/addcomments.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>

	</div>




	<h2><? echo $l['minor'] ?></h2>
	<div class="cont">
		<div class="grid-sizer"></div>
		<!-- addnews -->
		<a href="#addnews" class="fancybox box" title="<? echo $l['tpl'] ?> addnews.tpl">
			<b>addnews.tpl</b>
			<? echo $l['addnews'] ?>
		</a>
		<div id="addnews" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> addnews.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['addnews_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/addnews.html</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/addnews.php';  ?></table>
				<?PHP  include 'inf/noedit.php';  ?>
			</div>
			<div class="download"><a class="exLink" href="/example/addnews.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- feedback -->
		<a class="fancybox box" href="#feedback" title="<? echo $l['tpl'] ?> feedback.tpl">
			<b>feedback.tpl</b>
			<? echo $l['feed'] ?>
		</a>
		<div id="feedback" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> feedback.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['feed_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/index.php?do=feedback</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/feedback.php';  ?></table>
				<?PHP  include 'inf/noedit.php';  ?>
			</div>
			<div class="download"><a class="exLink" href="/example/feedback.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- lostpassword -->
		<a class="fancybox box" href="#lostpassword" title="<? echo $l['tpl'] ?> lostpassword.tpl">
			<b>lostpassword.tpl</b>
			<? echo $l['lost'] ?>
		</a>
		<div id="lostpassword" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> lostpassword.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['lost_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/index.php?do=lostpassword</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/lostpassword.php';  ?></table>
				<?PHP  include 'inf/noedit.php';  ?>
			</div>
			<div class="download"><a class="exLink" href="/example/lostpassword.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- pm -->
		<a class="fancybox box" href="#pm" title="<? echo $l['tpl'] ?> pm.tpl">
			<b>pm.tpl</b>
			<? echo $l['pm'] ?>
		</a>
		<div id="pm" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> pm.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['pm_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/index.php?do=pm</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/pm.php';  ?></table>
				<?PHP  include 'inf/noedit.php';  ?>
			</div>
			<div class="download"><a class="exLink" href="/example/pm.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>



		<!-- registration -->
		<a class="fancybox box" href="#registration" title="<? echo $l['tpl'] ?> registration.tpl">
			<b>registration.tpl</b><? echo $l['reg'] ?>
		</a>
		<div id="registration" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> registration.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['reg_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/index.php?do=register</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/registration.php';  ?></table>
				<?PHP  include 'inf/noedit.php';  ?>
			</div>
			<div class="download"><a class="exLink" href="/example/registration.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- search -->
		<a class="fancybox box" href="#search" title="<? echo $l['tpl'] ?> search.tpl">
			<b>search.tpl</b><? echo $l['srch'] ?>
		</a>
		<div id="search" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> search.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['srch_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/index.php?do=search</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/search.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/search.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- searchresult -->
		<a class="fancybox box" href="#searchresult" title="<? echo $l['tpl'] ?> searchresult.tpl">
			<b>searchresult.tpl</b><? echo $l['srchres'] ?>
		</a>
		<div id="searchresult" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> searchresult.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['srchres_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<? echo $l['srchres_DD'] ?>
				<table class="uses"><?PHP  include_once 'table/searchresult.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/searchresult.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- static -->
		<a class="fancybox box" href="#staticPages" title="<? echo $l['tpl'] ?> static.tpl">
			<b>static.tpl</b><? echo $l['static'] ?>
		</a>
		<div id="staticPages" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> static.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['static_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/static.php';  ?></table>
				<p class="inf"><? echo $l['static_DD'] ?></p>
			</div>
		</div>


		<!-- stats -->
		<a class="fancybox box" href="#stats" title="<? echo $l['tpl'] ?> stats.tpl">
			<b>stats.tpl</b>
			<? echo $l['stats'] ?>
		</a>
		<div id="stats" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> stats.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['stats_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/statistics.html</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/stats.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/stats.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- tagscloud -->
		<a class="fancybox box" href="#tagscloud" title="<? echo $l['tpl'] ?> tagscloud.tpl">
			<b>tagscloud.tpl</b>
			<? echo $l['tagspage'] ?>
		</a>
		<div id="tagscloud" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> tagscloud.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['tagspage_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_url'] ?></h3>
				<code class="curl">site.com/tags/</code>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/tagscloud.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/tagscloud.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- userinfo -->
		<a class="fancybox box" href="#userinfo" title="<? echo $l['tpl'] ?> userinfo.tpl">
			<b>userinfo.tpl</b>
			<? echo $l['userinfo'] ?>
		</a>
		<div id="userinfo" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> userinfo.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['userinfo_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/userinfo.php';  ?></table>
				<h3><? echo $l['p_mod'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/userinfo_mod.php';  ?></table>
				<?PHP  include 'inf/noedit.php';  ?>
			</div>
		</div>

	</div>
</section>