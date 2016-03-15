<tr>
	<td>[poll] <? echo $l['and'] ?> [/poll]</td>
	<td><? echo $l['short_pollIf'] ?></td>
</tr>
<tr>
	<td>[not-poll] <? echo $l['and'] ?> [/not-poll]</td>
	<td><? echo $l['short_pollEls'] ?></td>
</tr>

<tr>
	<td>[rating] <? echo $l['and'] ?> [/rating]</td>
	<td><? echo $l['short_rateIf'] ?></td>
</tr>
<tr class="addIn104">
	<td>[rating-type-1] <? echo $l['and'] ?> [/rating-type-1]</td>
	<td><? echo $l['short_rateType1'] ?></td>
</tr>
<tr class="addIn104">
	<td>[rating-type-2] <? echo $l['and'] ?> [/rating-type-2]</td>
	<td><? echo $l['short_rateType2'] ?></td>
</tr>
<tr class="addIn104">
	<td>[rating-type-3] <? echo $l['and'] ?> [/rating-type-3]</td>
	<td><? echo $l['short_rateType3'] ?></td>
</tr>

<tr>
	<td>[xfgiven_X] <? echo $l['and'] ?> [/xfgiven_x]</td>
	<td><? echo $l['userinfo_xIf'] ?></td>
</tr>
<tr>
	<td>[xfnotgiven_X] <? echo $l['and'] ?> [/xfnotgiven_X]</td>
	<td><? echo $l['userinfo_xEls'] ?></td>
</tr>
<tr class="addIn11">
	<td>[ifxfvalue name="value"] <? echo $l['and'] ?> [/ifxfvalue]</td>
	<td><? echo $l['ifxf'] ?></td>
</tr>
<tr class="addIn11">
	<td>[ifxfvalue name!="value"] <? echo $l['and'] ?> [/ifxfvalue]</td>
	<td><? echo $l['ifxfEls'] ?></td>
</tr>




<tr>
	<td>[tags] <? echo $l['and'] ?> [/tags]</td>
	<td><? echo $l['short_tagsIf'] ?></td>
</tr>
<tr>
	<td>[tags=<? echo $l['tagsList'] ?>] <? echo $l['and'] ?> [/tags]</td>
	<td><? echo $l['short_tagsIfList'] ?></td>
</tr>
<tr>
	<td>[not-tags=<? echo $l['tagsList'] ?>] <? echo $l['and'] ?> [/not-tags]</td>
	<td><? echo $l['short_tagsElsList'] ?></td>
</tr>


<tr>
	<td>[edit-date] <? echo $l['and'] ?> [/edit-date]</td>
	<td><? echo $l['short_editDIf'] ?></td>
</tr>
<tr>
	<td>[edit-reason] <? echo $l['and'] ?> [/edit-reason]</td>
	<td><? echo $l['short_editRIf'] ?></td>
</tr>


<tr>
	<td>[fixed] <? echo $l['and'] ?> [/fixed]</td>
	<td><? echo $l['short_fixIf'] ?></td>
</tr>
<tr>
	<td>[not-fixed] <? echo $l['and'] ?> [/not-fixed]</td>
	<td><? echo $l['short_fixEls'] ?></td>
</tr>


<tr>
	<td>[catlist=1,2,3] <? echo $l['and'] ?> [/catlist]</td>
	<td><? echo $l['short_catIf'] ?></td>
</tr>
<tr>
	<td>[not-catlist=1,2,3] <? echo $l['and'] ?> [/not-catlist]</td>
	<td><? echo $l['short_catEls'] ?></td>
</tr>



<tr>
	<td>[comments] <? echo $l['and'] ?> [/comments]</td>
	<td><? echo $l['short_commIf'] ?></td>
</tr>
<tr>
	<td>[not-comments] <? echo $l['and'] ?> [/not-comments]</td>
	<td><? echo $l['short_commEls'] ?></td>
</tr>
<tr>
	<td>[image-X] <? echo $l['and'] ?> [/image-x]</td>
	<td><? echo $l['short_imgX'] ?></td>
</tr>

<tr class="addIn101">
	<td>[declination=X]<? echo $l['short_declTest'] ?>[/declination]</td>
	<td><? echo $l['short_decl'] ?></td>
</tr>


<tr class="addIn101">
	<td>[newscount=X] <? echo $l['and'] ?> [/newscount]</td>
	<td><? echo $l['short_countIf'] ?></td>
</tr>
<tr class="addIn102">
	<td>[not-newscount=X] <? echo $l['and'] ?> [/not-newscount]</td>
	<td><? echo $l['short_countEls'] ?></td>
</tr>
