<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./public/Library/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel='stylesheet' href="./public/Css/base.css">
    <link rel='stylesheet' href="./public/Css/User/header.css">
    <link rel='stylesheet' href="./public/Css/User/footer.css">
    <link rel='stylesheet' href="./public/Css/User/HomePage.css">
    <link rel='stylesheet' href="./public/Css/User/header.css">
    <link rel='stylesheet' href="./public/Css/User/footer.css">
    <link rel='stylesheet' href="./public/Css/User/HomePage.css">
    <link rel='stylesheet' href="./public/Css/Product.css">
    <link rel='stylesheet' href="./public/Css/User/ProfileProduct.css">
    <link rel='stylesheet' href="./public/Css/User/Pay.css">
    <link rel='stylesheet' href='./public/Css/User/CategoryProduct.css'>
    <link rel="stylesheet" href="./public/Css/User/Cart.css">
    <link rel="stylesheet" href="./public/Css/User/StatusOrder.css">
    <link rel="stylesheet" href="./public/Css/Order.css">
    <link rel="stylesheet" href="./public/Css/User/News.css">
    <link rel="stylesheet" href="./public/Css/ProductInCart.css">
    <link rel="stylesheet" href="./public/Css/User/ProfileUser.css">
    <link rel="stylesheet" href="./public/Css/User/AboutUs.css">
    <style>
        #root {
            font-family: Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
    <title>E-BOOKSTORE</title>
</head>

<body>
    <div id="root">
        <header class="header">
            <div class="navbar1">
                <a href='./index.php' class="navbar1__logo">LOGO</a>
                <div class="navbar1__search">
                    <input type="" class="navbar1__search-text" placeholder='Nhập từ khóa tìm kiếm' />
                    <div class="navbar1__search-wrap">
                        <i class="navbar1__search-icon fa-solid fa-magnifying-glass"></i>
                    </div>

                </div>
                <div class="navbar1__wrap">
                    <div class="navbar1__cart">
                        <i class="navbar1__cart-icon fa-solid fa-cart-shopping"></i>
                        <a href="./index.php?url=Cart" class="navbar1__cart-link">Giỏ hàng</a>
                    </div>
                    <a href="./index.php?url=ProfileUser" class="navbar1__account">
                        <img src="<?php echo $_SESSION['Avatar'] ?>" class="navbar1__account-avatar">
                        <span class="navbar1__account-name">
                            <?php echo $_SESSION['Name'] ?>
                        </span>
                    </a>
                    <div class="navbar1__social">
                        <a href="" class="navbar1__social-item">
                            <i class="navbar1__social-icon_fb fa-brands fa-facebook"></i>
                        </a>
                        <a href="" class="navbar1__social-item">
                            <i class="navbar1__social-icon_insta fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar2">
                <div class="navbar2__category">
                    <i class="navbar2__category-icon_first fa-solid fa-bars"></i>
                    <a class="navbar2__category-text" href="./index.php?url=CategoryProduct">DANH MỤC SẢN PHẨM</a>
                    <i class="navbar2__category-icon_second fa-solid fa-angle-down"></i>
                </div>
                <div class="navbar2__wrap">
                    <div class="navbar2__searchProduct">
                        <i class="navbar2__searchProduct-icon fa-solid fa-truck-fast"></i>
                        <a href="./index.php?url=StatusOrder" class="navbar2__searchProduct-text">Tra cứu đơn hàng</a>
                    </div>
                    <a href="./index.php?url=AboutUs" class="navbar2__intro">Giới thiệu</a>
                    <div class="navbar2__contact">
                        <i class="navbar2__contact-icon fa-solid fa-phone"></i>
                        <a style='text-decoration:none' href="./index.php?url=News"><span
                                class="navbar2__contact-text">Tin tức</span></a>
                    </div>
                </div>

            </div>
        </header>

        <!-- Page content -->
        <div class="content">
            <?php
            $page = $data['page'];
            require "./MVC/Views/Pages/User/$page.php" ?>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-25">
                        <h3 class="footer__heading">Về Web Shoes</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Giới thiệu chung</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Tuyển dụng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-25">
                        <h3 class="footer__heading">Liên Hệ</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <i class="footer__list-icon fa-solid fa-phone"></i>
                                <span class="footer__list-item_link">0398841276</span>
                            </li>
                            <li class="footer__list-item">
                                <i class="footer__list-icon fa-regular fa-envelope"> </i>
                                <span class="footer__list-item_link">bao.nguyenminhbaott5@hcmut<br />.edu.vn</span>
                            </li>
                            <li class="footer__list-item">
                                <i class="footer__list-icon fa-solid fa-location-dot"></i>
                                <span class="footer__list-item_link">268 Lý Thường Kiệt, Phường 14<br />, Quận 10, Tp Hồ
                                    Chí Minh</span>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-25">
                        <h3 class="footer__heading">Hỗ Trợ Khách Hàng</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Mua hàng từ xa</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Quy định đổi trả</a>
                            </li>
                        </ul>
                        <div class="footer__wrap">
                            <div class="transportation">
                                <h3 class="transportation__heading">Vận Chuyển</h3>
                                <div class="transportation__img"></div>
                            </div>
                            <div class="payment">
                                <h3 class="payment__heading">Thanh Toán</h3>
                                <div class="payment__img"></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-25">
                        <h3 class="footer__heading">Dịch Vụ Cung Cấp</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Dịch vụ sửa chữa</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Nâng cấp phần cứng</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Bảo hành sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copy">Copyright 2022 </div>
        </footer>
    </div>
</body>
<script>

    // home page
    let listCommercial = document.querySelectorAll('.commercial-img');

    let index1 = 0;
    setInterval(() => {
        document.querySelector('.commercial-img.img--active').classList.remove('img--active');
        listCommercial[index1].classList.add('img--active');

        if (index1 == 3) index1 = 0;
        else index1++;

    }, 3000);



    // category product

    let listCategory = document.querySelectorAll('.category__item');

    listCategory.forEach((item, index) => {
        item.addEventListener('click', () => {
            document.querySelector('.category__item.category__item--active').classList.remove('category__item--active');
            item.classList.add('category__item--active');
        })
    })


    // profile product
    let listImg = document.querySelectorAll('.img');
    let index = 0;
    document.querySelector('.left-btn').addEventListener('click', () => {
        if (index == 0) index = 2;
        else index--;

        document.querySelector('.img.img--active').classList.remove('img--active');
        listImg[index].classList.add('img--active');
    });
    document.querySelector('.right-btn').addEventListener('click', () => {
        if (index == 2) index = 0;
        else index++;

        document.querySelector('.img.img--active').classList.remove('img--active');
        listImg[index].classList.add('img--active');
    })
</script>

</html>