<tr>
	<td>{description} </td>
	<td><? echo $l['static_title'] ?></td>
</tr>
<tr>
	<td>{static}</td>
	<td><? echo $l['static_text'] ?></td>
</tr>
<tr class="addIn106">
	<td>{text limit="X"}</td>
	<td><? echo $l['static_textX'] ?></td>
</tr>
<tr class="addIn106">
	<td>{image-X}</td>
	<td><? echo $l['static_img'] ?></td>
</tr>
<tr class="addIn106">
	<td>[image-X] <? echo $l['and'] ?> [/image-X]</td>
	<td><? echo $l['static_imgIf'] ?></td>
</tr>
<tr>
	<td>{pages}</td>
	<td><? echo $l['static_page'] ?></td>
</tr>
<tr>
	<td>{views}</td>
	<td><? echo $l['static_view'] ?></td>
</tr>
<tr>
	<td>{custom}</td>
	<td><? echo $l['fn'] ?> <a class="fancybox" href="#custom">{custom}</a></td>
</tr>
<tr>
	<td>[print-link] <? echo $l['and'] ?> [/print-link]</td>
	<td><? echo $l['static_print'] ?></td>
</tr>
<tr>
	<td>{date}</td>
	<td><? echo $l['static_date'] ?></td>
</tr>
<tr>
	<td>{date=<? echo $l['format_date'] ?>}</td>
	<td><? echo $l['short_dateX'] ?></td>
</tr>
<tr>
	<td>[static=<? echo $l['pagename'] ?>] <? echo $l['and'] ?> [/static]</td>
	<td><? echo $l['static_staticIf'] ?></td>
</tr>
<tr>
	<td>[not-static=<? echo $l['pagename'] ?>] <? echo $l['and'] ?> [/not-static]</td>
	<td><? echo $l['static_staticEls'] ?></td>
</tr>