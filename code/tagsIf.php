<pre><code>&lt;html&gt;
&lt;head&gt;
...
&lt;/head&gt;


&lt;body&gt;
...
Выведет текст, только если пользователь просматривает новости по метке "графика" или "дизайн":
[tags=графика,дизайн]текст[/tags]

Выведет текст везде, только если пользователь не просматривает новости по метке "графика":
[not-tags=графика]текст[/not-tags]
...
&lt;/body&gt;
&lt;/html&gt;
</code></pre>