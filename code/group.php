<pre><code>&lt;html&gt;
&lt;head&gt;
...
&lt;/head&gt;


&lt;body&gt;
...

Выводим баннер только группе пользователей 5(Гости):
[group=5]{banner_yandex}[/group]


Позволяем менять оформления сайта группам пользователей 1,2,3(Администраторы, Редакторы, Журналисты):
[group=1,2,3]{changeskin}[/group]


Выводим популярные новости всем группам, кроме группы гостей:
[not-group=5]{topnews}[/not-group]
...
&lt;/body&gt;
&lt;/html&gt;
</code></pre>