<div class="form-box">
    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == "1")
            echo "<script> alert('Tên tiêu đề không được quá 50 ký tự')</script>";
        if ($error == "2")
            echo "<script> alert('Nội dung không được quá 300 ký tự')</script>";
    }
    ?>
    <form action="./index.php?url=FeedBack/insert" method="POST" class="form-feedback">
        <h3 class="form-feedback-header">FORM ĐIỀN GÓP Ý CHO CÔNG TY</h3>
        <p class="form-feedback-note">Công ty đánh giá cao những góp ý của bạn</p>
        <div class="feedback-title">
            <input name="Title" type="text" class="form-title" placeholder="Nhập tiêu đề cho góp ý (Không quá 50 từ)" />
        </div>
        <div class="feedback-content">
            <textarea name="Content" class="form-control" placeholder="Nhập nội dung cần góp ý"></textarea>
        </div>
        <input type="date" style="display:none;">
        <div class="form-group col-md-8">
            <button type="submit" class="sendfeedback">Gửi góp ý</button>
        </div>
    </form>
</div>
<div class="somefeedback-block">
    <h1 class="somefeedback-header">Những Góp Ý Của Khách Hàng</h1>
    <?php
    $feedbacks = $data['Feedbacks'];
    require "./MVC/Views/Module/UserFeedBack.php";
    for ($i = 0; $i < count($feedbacks); $i++) {
        $feedback = $feedbacks[$i];
        UserFeedBack($feedback);
    }
    ?>
</div>