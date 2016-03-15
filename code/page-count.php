<pre><code>&lt;html&gt;
&lt;head&gt;
...
&lt;/head&gt;


&lt;body&gt;
...
Выведет текст только когда пользователь находится на страницах 1, 2 и 3:
[page-count=1,2,3] текст [/page-count]

Выведет текст на всех просматриваемых пользователем страницах, кроме второй:
[not-page-count=2] текст [/not-page-count]
...
&lt;/body&gt;
&lt;/html&gt;
</code></pre>