<?php
/*
1 props chứa Avatar, FirstName, Time, Content.
*/
function Comment($props = [])
{
?>
<div class="comment_detail-user-info">
    <div class="user-avatar">
        <img src="<?php echo $props['Avatar'] ?>" alt="user-avatar">
    </div>
    <div class="user-info">
        <p class="user-info-name">
            <?php echo $props['FirstName'] ?>
        </p>
        <p class="user-info-day-comment">
            <?php echo $props['Time'] ?>
        </p>
    </div>
</div>
<div class="comment_detai-user-comment">
    <div class="comment-text">
        <?php echo $props['Content'] ?>
    </div>
</div>
<?php
}
?>