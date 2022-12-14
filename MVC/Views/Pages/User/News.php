<?php
require "./MVC/Views/Module/OneNews.php";
$news = $data['News'];
?>
<div class='news-wrapper'>
    <h1 class='news-header'>Tin tức mới nhất</h1>
    <?php
    for ($i = 0; $i < count($news); $i++) {
        $news_ = $news[$i];
        $props = ['NewsImg' => $news_['NewsImg'], 'NewsName' => $news_['NewsName'], 'Description' => $news_['Description']];
        OneNews($props);
    }
    ?>
</div>