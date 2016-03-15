<pre><code>&lt;html&gt;
&lt;head&gt;
...
&lt;/head&gt;


&lt;body&gt;
...
Выведет текст только если пользователь просмотривает статическую страницу с именем "about":
[static=about]текст[/static]

Выведет текст везде, кроме статической страницы "about" и "info":
[not-static=about,info]текст[/not-static]
...
&lt;/body&gt;
&lt;/html&gt;
</code></pre>