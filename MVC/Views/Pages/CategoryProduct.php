
<div class="CategoryProduct" >
                <div class="grid">
                    <div class="grid__row CategoryProduct-row">
                        <div class="grid__column-1667">
                            <nav class="category">
                                <h3 class="category__heading">
                                    <i class="category__heading-icon fa-solid fa-list-ul"></i>
                                    Tất cả danh mục
                                </h3>
                                <ul class="category__list">
                                    <?php

                                    $listCategory=$data['listCategory'];

                                    for($i=0; $i<count($listCategory); $i++)
                                    {
                                        $name=$listCategory[$i]['Type'];
                                        if($i==0)
                                        {
                                            echo"<li class='category__item category__item--active'>
                                                    <a href='./index.php?url=CategoryProduct/seclect/$i' class='category__item-link'>$name</a>
                                                </li>";
                                        }
                                        else 
                                        {
                                            echo"<li class='category__item'>
                                                    <a href='./index.php?url=CategoryProduct/select/$i' class='category__item-link'>$name</a>
                                                </li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="grid__column-8333">
                            <div class="home-filter">
                                <span class="home-filter__label"> Sắp xếp theo</span>
                                <button class="BTN btn--primary">Tác giả</button>
                                <button class="BTN ">Nhà tác giả</button>
                                <button class="BTN ">Độ tuổi</button>
                                <form class="filter-form" method="POST" action='./index.php?url=CategoryProduct/filter'>
                                    <select class="select-input" name='selectPrice'>
                                        <option class="optionSelect" value='0'> Giá</option> 
                                        <option class="optionSelect" value='1'>20.000đ - 100.000đ</option>
                                        <option class="optionSelect" value='2'>100.000đ - 150.000đ</option>
                                        <option class="optionSelect" value='3'>150.000đ - 300.000đ</option>
                                        <option class="optionSelect" value='4'>300.000đ - 400.000đ</option>
                                    </select>
                                    <input class='Type' name='Type' value='<?php echo  $listProduct=$data['listProduct'][0]['Type']; ?>'>
                                    <button class="filter-btn">
                                        <i class="filter-icon fa-solid fa-filter"></i>
                                    </button>
                                </form>

                                <div class="home-filter__page">
                                    <div class="home-filter__page-num">
                                        <span class="home-filter__page-cur">1 </span>
                                        /14
                                    </div>
                                    <div class="home-filter__controls">
                                        <a class="home-filter__back home-filter__btn--disabled" href="">
                                            <i class="icon-back fa-solid fa-angle-left"></i>
                                        </a>
                                        <a class="home-filter__next " href=""> 
                                            <i class="icon-next fa-solid fa-angle-right"></i>
                                        </a>
        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="home-product">
                                <div class="grid__row">
                                <?php
                                    require "./MVC/Views/Module/Product.php";
                                    $listProduct=$data['listProduct'];
                                    for ($i=0;$i<count($listProduct);$i++)
                                    { 
                                        $props=$listProduct[$i];
                                        echo "<div class='grid__column-25'>";
                                        Product($props);
                                        echo "</div>";
                                    }
                                ?>
                                </div>
                                
                            </div>
                            <div class="pagination ">
                                <ul class="pagination__item-list">
                                    <li class="pagination__item">
                                        <a href="" class="pagination__item-icon">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="pagination__item pagination__item--active">
                                        <a href="" class="pagination__item-link">1</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__item-link">2</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__item-link">3</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__item-link">4</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__item-link">5</a>
                                    </li>
                                    <li class="pagination__item pagination__item-threedots">
                                        <a href="" class="pagination__item-link">...</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__item-link">14</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a href="" class="pagination__item-icon">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  

</div>

