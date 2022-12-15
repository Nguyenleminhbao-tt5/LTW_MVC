<?php

$listImg = [
    'https://bucket.nhanh.vn/04f7ff-92233/bn/20221117_DhsyxB9AnDmC0zvuV8gY9gXs.jpg',
    'https://bucket.nhanh.vn/04f7ff-92233/bn/20221207_Kqn2WzHQ2ZmxpIuw.jpg',
    'https://bucket.nhanh.vn/04f7ff-92233/bn/20221110_Qk9cp0UBpawQBpCUt0aScKyz.jpg',
    'https://bucket.nhanh.vn/04f7ff-92233/bn/20221024_kActgMi0qrzceMWAOfrbwkTo.jpg'
]

    ?>

<div class="HomePage">
            <div class="content-main">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-65">
                            <div class="main__commercial">                  
                                <img class="commercial-img img--active" src=" <?php echo $listImg[0] ?>">
                                <img class="commercial-img"  src=" <?php echo $listImg[1] ?>">
                                <img class="commercial-img"  src=" <?php echo $listImg[2] ?>">
                                <img class="commercial-img"  src=" <?php echo $listImg[3] ?>">
                            </div>
                        </div>
                        <div class="grid__column-35">
                            <div class="main__beside">
                                <div class="main__beside-1">
                                    <img class="beside-1-img" src='https://bucket.nhanh.vn/04f7ff-92233/bn/20221208_LSyzLXiH2IqpYJJY.jpg'>
                                </div>
                                <div class="main__beside-2">
                                    <img class="beside-2-img" src='https://bucket.nhanh.vn/04f7ff-92233/bn/20221117_DhsyxB9AnDmC0zvuV8gY9gXs.jpg'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-product">
                <div class="grid">
                    <div class="product__heading">SẢN PHẨM NỔI BẬT</div>
                    <div class="grid__row">
                        <?php
                        require "./MVC/Views/Module/Product.php";
                        $listProduct=$data['listProduct'];
                        for ($i=0;$i<4;$i++)
                          { 
                            $props=$listProduct[$i];
                            echo "<div class='l-3 m-6 c-12 center>";
                            Product($props);  
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
                
                
            </div>
            <div class="content-accessory">
                <div class="grid">
                    <div class="accessory__heading">SẢN PHẨM BÁN CHẠY</div>
                    <div class="grid__row">
                        <?php
                       $listProduct=$data['listProduct'];
                       for ($i=4;$i<12;$i++)
                         { 
                           $props=$listProduct[$i];
       
                           echo "<div class='l-3 m-6 c-12 center'>";
                           Product($props);  
                           echo "</div>";
                         } 
                       ?>
                        
                    </div>
                </div>
            </div>
            <div class="content-accessory">
                <div class="grid">
                    <div class="accessory__heading">SẢN PHẨM SALES CHẠY NHẤT THÁNG</div>
                    <div class="grid__row">
                        <?php
                       $listProduct=$data['listProduct'];
                       for ($i=12;$i<20;$i++)
                         { 
                           $props=$listProduct[$i];
       
                           echo "<div class='l-3 m-6 c-12 center'>";
                           Product($props);  
                           echo "</div>";
                         } 
                       ?>
                    </div>
                </div>
            </div>
</div>