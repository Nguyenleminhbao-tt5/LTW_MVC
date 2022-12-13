<?php
/*
1 props có NewsImg, NewsName, Description
*/
function OneNews($props)
{
?>

<div class='onenews'>
    <div class='news-img'>
        <img src="<?php echo $props['NewsImg']; ?>" alt="">
    </div>
    <div class='news-title'>
        <?php echo $props['NewsName']; ?>
    </div>
    <div class='news-description'>
        <?php echo $props['Description']; ?>
    </div>
</div>
<?php
}
?>