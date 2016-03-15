<section><a name="otherScroll"></a>
	<h1><span><? echo $l['other'] ?><a href="#otherInfo" title="<? echo $l['watisthis'] ?>" class="about fancybox">?</a></span></h1>
	<div id="otherInfo" class="upCont">
		<strong class="modalTitle"><? echo $l['other'] ?></strong>
		<div class="section">
			<h3><? echo $l['p_desc'] ?></h3>
			<? echo $l['other_about'] ?>
		</div>
	</div>


	<div class="cont">
		<div class="grid-sizer"></div>
		<!-- profilePopup -->
		<a href="#profile-popup" title="profile_popup.tpl" class="fancybox box">
			<b>profile_popup.tpl</b><? echo $l['userpop'] ?>
		</a>
		<div id="profile-popup" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> profile_popup.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['userpop_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/profile_popup.php';  ?></table>
				<h3><? echo $l['p_mod'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/profile_popup_mod.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/profile_popup.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- offline -->
		<a href="#offline" title="offline.tpl" class="fancybox box">
			<b>offline.tpl</b><? echo $l['offline'] ?>
		</a>
		<div id="offline" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> offline.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['offline_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<table class="uses"><?PHP  include_once 'table/offline.php';  ?></table>
			</div>
			<div class="download"><a class="exLink" href="/example/offline.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- preview -->
		<a href="#preview" title="preview.tpl" class="fancybox box">
			<b>preview.tpl</b><? echo $l['preview'] ?>
		</a>
		<div id="preview" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> preview.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['preview_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<? echo $l['preview_DD'] ?>
				<table class="uses"><?PHP  include_once 'table/preview.php';  ?></table>
				<p class="inf"><? echo $l['preview_alert'] ?></p>
			</div>
			<div class="download"><a class="exLink" href="/example/preview.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- print.tpl -->
		<a href="#print" class="fancybox box" title="print.tpl">
			<b>print.tpl</b><? echo $l['print'] ?>
		</a>
		<div id="print" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> print.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['print_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<? echo $l['print_DD'] ?>
			</div>
			<div class="download"><a class="exLink" href="/example/print.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>


		<!-- static_print.tpl -->
		<a href="#static_print" title="static_print.tpl" class="fancybox box">
			<b>static_print.tpl</b><? echo $l['staticPrnt'] ?>
		</a>
		<div id="static_print" class="upCont">
			<strong class="modalTitle"><? echo $l['tpl'] ?> static_print.tpl</strong>
			<div class="section">
				<h3><? echo $l['p_desc'] ?></h3>
				<? echo $l['staticPrnt_D'] ?>
			</div>
			<div class="section">
				<h3><? echo $l['p_tags'] ?></h3>
				<? echo $l['staticPrnt_DD'] ?>
			</div>
			<div class="download"><a class="exLink" href="/example/static_print.tpl"><? echo $l['p_exmpl'] ?></a></div>
		</div>

	</div>
</section>