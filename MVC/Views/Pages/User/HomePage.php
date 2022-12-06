<?php 

$listImg=[
    'https://cdn0.fahasa.com/media/magentothem/banner7/FahasaT1222_Banner_840x320.jpg',
    'https://cdn0.fahasa.com/media/magentothem/banner7/Giangsinh_T11_840x320.jpg',
    'https://cdn0.fahasa.com/media/magentothem/banner7/FAHASA-ONT12_840x320.jpg',
    'https://cdn0.fahasa.com/media/magentothem/banner7/VPP_Main_banner_T10_840x320.jpg'
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
                                    <img class="beside-1-img" src='https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2022/FahasaT1222_B%E1%BB%991_392x156PNG.png'>
                                </div>
                                <div class="main__beside-2">
                                    <img class="beside-2-img" src='https://cdn0.fahasa.com/media/wysiwyg/Duy-VHDT/HOA-CU/HoaCuQuy4_banner_392x156PNG_T11.png'>
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
        
                            echo "<div class='grid__column-25'>";
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
       
                           echo "<div class='grid__column-25'>";
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
       
                           echo "<div class='grid__column-25'>";
                           Product($props);  
                           echo "</div>";
                         } 
                       ?>
                    </div>
                </div>
            </div>
</div>