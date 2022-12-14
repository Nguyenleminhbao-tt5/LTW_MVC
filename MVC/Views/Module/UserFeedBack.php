<?php
/*
1 props chứa Title, Content, FirstName, Time
*/
function UserFeedBack($props = [])
{
?>
<div class="feedback-box">
    <div class="feedback-username">
        <div>Tên khách hàng: <?php echo $props['FirstName'] ?></div>
    </div>
    <div class="feedback-time">
        <div style="padding: 10px;">Thời gian: <?php echo $props['Time'] ?></div>
    </div>
    <div class="feedback-title">
        <h1> <?php echo $props['Title'] ?> </h1>
    </div>
    <div class="feedback-content">
        <?php echo $props['Content'] ?>
    </div>
</div>
<?php
}
?>