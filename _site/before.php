<?php
$url = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = substr_replace($file ,"",-4).'.cache';
$cachetime = 18000*60*60;

// Обслуживается из файла кеша, если время запроса меньше $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    include($cachefile);
    echo "\n<!-- Cache date ".date('jM', filemtime($cachefile))." -->";
    exit;
}
ob_start(); // Запуск буфера вывода
?>