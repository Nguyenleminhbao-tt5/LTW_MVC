<?php

$listImg = [
    'https://pos.nvncdn.net/04f7ff-92233/bn/20230816_qqK3SA74.jpeg',
    'https://pos.nvncdn.net/04f7ff-92233/bn/20231116_J5VX4exA.jpeg',
    'https://pos.nvncdn.net/04f7ff-92233/bn/20231030_IUpeFw82.jpeg',
    'https://pos.nvncdn.net/04f7ff-92233/bn/20230911_YgTb5V3j.jpeg'
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
                                    <img class="beside-1-img" src='https://i.pinimg.com/564x/54/bb/b5/54bbb5dc42afe72d2665fd6d1f34629e.jpg'>
                                </div>
                                <div class="main__beside-2">
                                    <img class="beside-2-img" src='https://scontent.fsgn19-1.fna.fbcdn.net/v/t1.15752-9/403405553_329848546418898_5905287164394627695_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=z9fh6yxarvsAX8W9IvI&_nc_ht=scontent.fsgn19-1.fna&oh=03_AdS_jiMRRWo5FdGK2rPjrFnwiMn3Up28TygN-EGEOtUZrg&oe=657E97E8'>
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