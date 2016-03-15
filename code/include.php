<pre><code>&lt;html&gt;
&lt;head&gt;
...
&lt;/head&gt;


&lt;body&gt;
...
{include file="head.tpl"}
{include file="sidebar.tpl"}
...

С использованием папок:
{include file="folder/footer.tpl"}
...

Из другого соседнего шаблона:
{include file="/templates/Default/sidebar.tpl"}

&lt;/body&gt;
&lt;/html&gt;
</code></pre>