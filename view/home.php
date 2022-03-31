<div class="banner">
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <a href="index.php?act=sanpham">
                <img src="./view/assets/images/slideshow_1.png" style="width:100%">
            </a>
        </div>
        <div class="mySlides fade">
            <a href="index.php?act=sanpham">
                <img src="./view/assets/images/slideshow_2.png" style="width:100%">
            </a>
        </div>
        <div class="mySlides fade">
            <a href="index.php?act=sanpham">
                <img src="./view/assets/images/slideshow_3.png" style="width:100%">
            </a>
        </div>
    </div>
    <br>
</div>
<div class="box-second">
    <div class="box-second-item">
        <a href="index.php?act=sanpham">
            <img src="./view/assets/images/index1.png" class="zoom">
        </a>
    </div>
    <div class="box-second-item">
        <a href="index.php?act=sanpham">
            <img src="./view/assets/images/index2.png" class="zoom">
        </a>
    </div>
    <div class="box-second-item">
        <a href="index.php?act=sanpham">
            <img src="./view/assets/images/index3.png" class="zoom">
        </a>
    </div>
    <div class="box-second-item">
        <a href="index.php?act=sanpham">
            <img src="./view/assets/images/index4.png" class="zoom">
        </a>
    </div>
</div>
<div>
    <h2 class="title">Featured Products</h2>
    <div class="row sanpham">
        <?php
        $i = 0;
        foreach ($spnew as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_path . $img;
            echo ' <div class=" col-4"> 
                    <a href="' . $linksp . '">                            
                        <img src="' . $hinh . '">
                        <h4>' . $ten_sanpham . '</h4>
                        <p>$' . $gia_sanpham . '</p>
                    </a>                        
                    </div>';
            $i += 1;
            if ($i > 4) {
                break;
            }
        }
        ?>
    </div>
</div>
<!-- // chỉnh lại thành 5 -->
<div>
    <h2 class="title">Top 5 Products</h2>
    <div class="row sanpham">
        <?php
        $i = 0;
        foreach ($dsview as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_path . $img;
            echo ' <div class=" col-4"> 
                    <a href="' . $linksp . '">                            
                        <img src="' . $hinh . '">
                        <h4>' . $ten_sanpham . '</h4>
                        <p>$' . $gia_sanpham . '</p>
                    </a>                        
                    </div>';
            $i += 1;
            if ($i > 4) {
                break;
            }
        }
        ?>
    </div>
</div>
<!-- Offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="./view/assets/images/banner-index-4.png" alt="" class="offer-img">
            </div>
            <div class="col-2">
                <h4>Exclusively Available on BachStore</h4>
                <h1>BACKPACK OVER PRINT</h1>
                <small>
                    <b>BACKPACK OVER PRINT</b> được làm từ chất liệu Simili cao cấp, với ưu điểm chống thấm vượt trội, độ bền cao và giữ form chuẩn qua thời gian.
                </small>
                <div>
                    <a href="index.php?act=sanphamct&idsp=48" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
</div>