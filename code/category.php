<pre><code>&lt;html&gt;
&lt;head&gt;
...
&lt;/head&gt;


&lt;body&gt;
...
Выводим текст только в категориях с ID = 1,2 и 3:
[category=1,2,3]текст[/category]

Выводим текст в категориях начиная с 1 по 3 и с 11 по 15:
[category=1-5,11-15]текст[/category]

Выводим текст везде, кроме категории с ID = 3:
[not-category=3]текст[/not-category]
...
&lt;/body&gt;
&lt;/html&gt;
</code></pre>