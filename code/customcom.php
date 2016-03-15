<pre><code>&lt;html&gt;
&lt;head&gt;
...
&lt;/head&gt;


&lt;body&gt;
...
Выведет 10 комментариев пользователя admin:
{customcomments author="admin" limit="10" template="comments"}

Выведет самый рейтенговый комментарий за день:
{customcomments order="rating" limit="1" days="1" template="comments"}
...
&lt;/body&gt;
&lt;/html&gt;
</code></pre>