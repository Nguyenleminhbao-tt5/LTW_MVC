<?php

if(!empty($data['currentPage']))
{
    $currentPage=$data['currentPage'];
}
else $currentPage=1;
?>
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
                                        if(!empty($data['selectType']))
                                        {
                                            if($name==$data['selectType'])
                                            echo"
                                            <li class='category__item category__item--active '>
                                                    <a href='./index.php?url=CategoryProduct/seclect/$i' class='category__item-link'>$name</a>
                                            </li>
                                            ";
                                            else 
                                            {
                                                echo"<li class='category__item'>
                                                        <a href='./index.php?url=CategoryProduct/select/$i' class='category__item-link'>$name</a>
                                                    </li>";
                                            }
                                            
                                        }
                                        else
                                        {
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
                                        
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="grid__column-8333">
                            <div class="home-filter">
                                <span class="home-filter__label"> Sắp xếp theo</span>
                                <button class="BTN btn--primary">Hãng</button>
                                <button class="BTN ">Màu sắc</button>
                                <button class="BTN ">Size</button>
                                <form class="filter-form" method="POST" action='./index.php?url=CategoryProduct/filter'>
                                    <select class="select-input" name='selectPrice'>
                                        <option class="optionSelect" value='0'> Giá</option> 
                                        <option class="optionSelect" value='1'>100.000đ - 200.000đ</option>
                                        <option class="optionSelect" value='2'>200.000đ - 400.000đ</option>
                                        <option class="optionSelect" value='3'>400.000đ - 1.000.000đ</option>
                                        <option class="optionSelect" value='4'> > 1.000.000đ</option>
                                    </select>
                                    <input class='Type' name='Type' value='<?php echo  $listProduct=$data['listProduct'][0]['Type']; ?>'>
                                    <button class="filter-btn">
                                        <i class="filter-icon fa-solid fa-filter"></i>
                                    </button>
                                </form>

                                <div class="home-filter__page">
                                    <div class="home-filter__page-num">
                                        <span class="home-filter__page-cur"><?php echo $currentPage ?></span>
                                        /<?php echo $data['numPage'] ?>
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
                                    $begin=($currentPage-1)*4;
                                    $end=$currentPage*4;

                                    $Type='';
                                    for ($i=$begin;$i<$end;$i++)
                                    { 
                                        if(!empty($listProduct[$i]))
                                        {

                                            $Type=$listProduct[$i]['Type'];

                                            $props=$listProduct[$i];
                                            echo "<div class='grid__column-25'>";
                                            Product($props);
                                            echo "</div>";
                                        }
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
                                    <?php
                                    $numPage=$data['numPage'];
                                    for($i=1;$i<=$numPage;$i++)
                                    {
                                        if($currentPage==$i)
                                        {
                                            echo "
                                            <li class='pagination__item pagination__item--active'>
                                                <a href='./index.php?url=CategoryProduct/page/$i/$Type' class='pagination__item-link'>$i</a>
                                            </li>
                                            ";
                                        }
                                        else 
                                        {
                                            echo "
                                            <li class='pagination__item'>
                                                <a href='./index.php?url=CategoryProduct/page/$i/$Type' class='pagination__item-link'>$i</a>
                                            </li>
                                            ";
                                        }
                                    
                                    }

                                    ?>
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

