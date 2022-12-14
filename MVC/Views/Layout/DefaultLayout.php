<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./public/Library/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel='stylesheet' href="./public/Css/base.css">
    <link rel='stylesheet' href="./public/Css/grid.css">
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
    <link rel="stylesheet" href="./public/Css/OneNews.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <style>
        #root {
            font-family: Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
   <title>LOGO</title>
</head>

<body>
    <div id="root">
        <header class="header">
            <div class="navbar1">
                <a href='./index.php' class="navbar1__logo">LOGO</a>
                <div class="navbar1__search">
                    <input type="" class="navbar1__search-text" placeholder='Nh???p t??? kh??a t??m ki???m' />
                    <div class="navbar1__search-wrap">
                        <i class="navbar1__search-icon fa-solid fa-magnifying-glass"></i>
                    </div>

                </div>
                <div class="navbar1__wrap">
                    <div class="navbar1__cart">
                        <i class="navbar1__cart-icon fa-solid fa-cart-shopping"></i>
                        <a href="./index.php?url=Login" class="navbar1__cart-link">Gi??? h??ng</a>
                    </div>
                    <a href="./index.php?url=Login" class="navbar1__login">????ng nh???p</a>
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
                    <a class="navbar2__category-text" href="./index.php?url=CategoryProduct">DANH M???C S???N PH???M</a>
                    <i class="navbar2__category-icon_second fa-solid fa-angle-down"></i>
                </div>
                <div class="navbar2__wrap">
                    <div class="navbar2__feedback">
                        <i class="navbar2__feedback-icon fa-solid fa-comments" style="padding-right: 4px;"></i>
                        <a href="./index.php?url=Login" class="navbar2__feedback-text">G??p ??</a>
                    </div>
                    <div class="navbar2__searchProduct">
                        <i class="navbar2__searchProduct-icon fa-solid fa-truck-fast"></i>
                        <a href="./index.php?url=Login" class="navbar2__searchProduct-text">Tra c???u ????n h??ng</a>
                    </div>
                    <a href="./index.php?url=AboutUs" class="navbar2__intro">Gi???i thi???u</a>
                    <div class="navbar2__contact">
                        <!-- <i class="navbar2__contact-icon fa-solid fa-phone"></i> -->
                        <a style='text-decoration:none' href="./index.php?url=News"><span
                                class="navbar2__contact-text">Tin t???c</span></a>
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
                        <h3 class="footer__heading">V??? Web Shoes</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Gi???i thi???u chung</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Tuy???n d???ng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-25">
                        <h3 class="footer__heading">Li??n H???</h3>
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
                                <span class="footer__list-item_link">268 L?? Th?????ng Ki???t, Ph?????ng 14<br />, Qu???n 10, Tp H???
                                    Ch?? Minh</span>
                            </li>
                        </ul>
                    </div>
                    <div class="grid__column-25">
                        <h3 class="footer__heading">H??? Tr??? Kh??ch H??ng</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Mua h??ng t??? xa</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">Quy ?????nh ?????i tr???</a>
                            </li>
                        </ul>
                        <div class="footer__wrap">
                            <div class="transportation">
                                <h3 class="transportation__heading">V???n Chuy???n</h3>
                                <div class="transportation__img"></div>
                            </div>
                            <div class="payment">
                                <h3 class="payment__heading">Thanh To??n</h3>
                                <div class="payment__img"></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-25">
                        <h3 class="footer__heading">D???ch V??? Cung C???p</h3>
                        <ul class="footer__list">
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">D???ch v??? s???a ch???a</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">N??ng c???p ph???n c???ng</a>
                            </li>
                            <li class="footer__list-item">
                                <a href="" class="footer__list-item_link">B???o h??nh s???n ph???m</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copy">Copyright 2022 </div>
        </footer>
    </div>
</body>
<script src='./public/Js/Default.js'></script>
</html>