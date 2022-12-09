<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <link rel="stylesheet" href="./public/Library/fontawesome-free-6.1.1-web/css/all.min.css">
    
    <link rel='stylesheet' href="./public/Css/base.css">
    <link rel='stylesheet' href="./public/Css/animation.css">
    <link rel='stylesheet' href="./public/Css/grid.css">
    <link rel='stylesheet' href="./public/Css/Admin/headerA.css">
    <link rel='stylesheet' href="./public/Css/Admin/footerA.css">
    <link rel='stylesheet' href="./public/Css/Admin/sidebarA.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminPrimary.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminProduct.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminProductInsert.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminUser.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminOrder.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminOrderInsert.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminNews.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminNewsInsert.css">
    <link rel='stylesheet' href="./public/Css/Admin/AdminComment.css">
    

    <style>
        input
        {
            width: 100%;
            margin: 5px 2px 10px 0;
            height: 30px;
            border-radius: 2px;
            padding-left: 12px;
            
        }
        input::placeholder
        {
            color: #b5bcc1;
        }
        .submit
        {
            background-color: var(--primary2-color);
            color: var(--primary1-color);
            cursor: pointer;
        }
    </style>
    <title>E-BOOKSTORE</title>
  </head>
  <body>
    <div id='root'>
      <div class="sidebar">
        <div class="wrapper-sidebar ">
                <div class="sb__logo">
                    <!--<img class="sb__logo-img" src="./assets/img/logo.png">-->
                    <span class="sb__logo-title">LOGO</span>
                </div>
                <ul class="sb__menu">
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="./index.php?url=AdminPrimary">
                            <i class="sb__menu-dashboard fa-solid fa-house"></i>
                            <span class="sb__menu-title">Dasboard</span>
                        </a>    
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="./index.php?url=AdminUser">
                            <i class="sb__menu-user fa-solid fa-user"></i>
                            <span class="sb__menu-title">Quản trị khách hàng</span>
                        </a>
                    </li>
                
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="./index.php?url=AdminOrder">
                            <i class="sb__menu-category fa-solid fa-tarp"></i>
                            <span class="sb__menu-title">Quản trị đơn hàng</span>
                        
                        </a>
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="./index.php?url=AdminProduct">
                            <i class="sb__menu-product fa-solid fa-gift"></i>
                            <span class="sb__menu-title">Quản trị sản phẩm</span>
                        </a>
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="./index.php?url=AdminNews">
                            <i class="sb__menu-news fa-solid fa-newspaper"></i>
                            <span class="sb__menu-title">Quản trị tin tức</span>
                        </a>
                    </li>
                
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="./index.php?url=AdminComment">
                            <i class="sb__menu-cmt fa-solid fa-comment"></i>
                            <span class="sb__menu-title">Quản trị bình luận</span>
                        </a>
                    </li>
                
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="#">
                            <i class="sb__menu-company fa-solid fa-building"></i>
                            <span class="sb__menu-title">Quản trị thông tin công ty</span>
                        </a>
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="#">
                            <i class="sb__menu-resource fa-solid fa-layer-group"></i>
                            <span class="sb__menu-title">Quản trị tài nguyên</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="wrapper-sidebar1">
                <div class="sb__logo">
                    <img class="sb__logo-img" src="./assets/img/logo.png">
                    <span class="sb__logo-title">LOGO</span>
                </div>
                <ul class="sb__menu">
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=dashboardM&query=insert">
                            <i class="sb__menu-dashboard fa-solid fa-house"></i>
                            <span class="sb__menu-title">Dasboard</span>
                        </a>    
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=userM&query=insert">
                            <i class="sb__menu-user fa-solid fa-user"></i>
                            <span class="sb__menu-title">Quản trị khách hàng</span>
                        </a>
                    </li>
                
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=categoryM&query=insert">
                            <i class="sb__menu-category fa-solid fa-tarp"></i>
                            <span class="sb__menu-title">Quản trị danh mục</span>
                        
                        </a>
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=productM&query=insert">
                            <i class="sb__menu-product fa-solid fa-gift"></i>
                            <span class="sb__menu-title">Quản trị sản phẩm</span>
                        </a>
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=newsM&query=insert">
                            <i class="sb__menu-news fa-solid fa-newspaper"></i>
                            <span class="sb__menu-title">Quản trị tin tức</span>
                        </a>
                    </li>
                
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=commentM&query=insert">
                            <i class="sb__menu-cmt fa-solid fa-comment"></i>
                            <span class="sb__menu-title">Quản trị bình luận</span>
                        </a>
                    </li>
                
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=infoCompanyM&query=insert">
                            <i class="sb__menu-company fa-solid fa-building"></i>
                            <span class="sb__menu-title">Quản trị thông tin công ty</span>
                        </a>
                    </li>
                    
                    <li class="sb__menu-item">
                        <a class="sb__menu-link" href="index.php?action=resourceM&query=insert">
                            <i class="sb__menu-resource fa-solid fa-layer-group"></i>
                            <span class="sb__menu-title">Quản trị tài nguyên</span>
                        </a>
                    </li>
                    
                </ul>
            </div>

      </div>
      <div class="container">
            <!-- Header -->
    
            <header class="wrapper-header">
                <div class="header__category">
                <label for="toggle" class="header__category-list">
                    <i class="header__category-icon fa-solid fa-bars"></i>
                </label>
                <input type="checkbox" hidden  id="toggle" class="header__category-toggle">
                <label for="toggle" class="overlay"></label>
                </div>
                <div class="header__account">
                    <i class="header__account-notifi fa-regular fa-bell"></i>
                    <i class="header__account-mail fa-regular fa-envelope"></i>
                    <i class="header__account-avatar fa-regular fa-user"></i>
                    <span class="header__account-name">Minh Bảo</span>
                    <a href="./index.php?url=Login" class="header__account-leave">
                        <i class="header__account-leaveIcon fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                </div>
            </header>
            
            <div class="wrapper-content">
                <?php
                //content
                $page=$data['page'];
                require "./MVC/Views/Pages/Admin/$page.php";
                ?>
            </div>
            <!--Footer -->
            
            <footer class="wrapper-footer">
                Copyright © 2021 Designed by Colorlib. All rights reserved.
            </footer>
        </div> 
    </div>
  </body>
  <script src='./public/Js/Admin.js'></script>
</html>
