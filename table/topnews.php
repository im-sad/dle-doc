<tr>
	<td>{title}</td>
	<td><? echo $l['short_title'] ?></td>
</tr>
<tr>
	<td>{title limit="X"}</td>
	<td><? echo $l['short_titleX'] ?></td>
</tr>
<tr>
	<td>{link}</td>
	<td><? echo $l['short_url'] ?></td>
</tr>
<tr>
	<td>{date}</td>
	<td><? echo $l['short_date'] ?></td>
</tr>
<tr>
	<td>{date=<? echo $l['format_date'] ?>}</td>
	<td><? echo $l['short_dateX'] ?></td>
</tr>
<tr>
	<td>{image-X}</td>
	<td><? echo $l['short_img'] ?></td>
</tr>
<tr>
	<td>[image-X] <? echo $l['and'] ?> [/image-x]</td>
	<td><? echo $l['short_imgX'] ?></td>
</tr>
<tr>
	<td>{text}</td>
	<td><? echo $l['short_story'] ?></td>
</tr>
<tr>
	<td>{text limit="X"}</td>
	<td><? echo $l['short_storyX'] ?></td>
</tr>
<tr>
	<td>{category}</td>
	<td><? echo $l['short_cat'] ?></td>
</tr>
<tr>
	<td>{link-category}</td>
	<td><? echo $l['short_catL'] ?></td>
</tr>
<tr>
	<td>[xfvalue_X]</td>
	<td><? echo $l['userinfo_x'] ?></td>
</tr>
<tr>
	<td>[xfgiven_X] <? echo $l['and'] ?> [/xfgiven_x]</td>
	<td><? echo $l['userinfo_xIf'] ?></td>
</tr>
<tr>
	<td>[xfnotgiven_X] <? echo $l['and'] ?> [/xfnotgiven_X]</td>
	<td><? echo $l['userinfo_xEls'] ?></td>
</tr>