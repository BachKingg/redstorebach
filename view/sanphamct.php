<div class="container">
    <div class="small-container single-product full-withradius">
        <form action="index.php?act=addtocart" method="POST">
            <div class="row">
                <?php extract($onesp); ?>
                <div class="col-2">
                    <?php
                    $img = $img_path . $img;
                    echo '<img src="' . $img . '" width="100%">';
                    ?>
                </div>
                <div class="col-2">
                    <input type="hidden" name="id" value="<?= $id_sanpham ?>">
                    <input type="hidden" name="name" value="<?= $ten_sanpham ?>">
                    <input type="hidden" name="img" value="<?= $img ?>">
                    <input type="hidden" name="price" value="<?= $gia_sanpham ?>">
                    <h1><?= $ten_sanpham ?></h1>
                    <h4>$<?= $gia_sanpham ?></h4>
                    <input type="number" name="soluong" value="1">
                    <input type="submit" name="addtocart" class="btn addtocart-btn" value="Add To Cart">
                    <h3>Product Details<i class="fa fa-indent"></i></h3>
                    <p class="mota"><?= $mota ?></p>
                </div>
            </div>
        </form>
        <div id="binhluan">
            <iframe src="binhluan.php?idsp=<?= $_GET['id'] ?>" frameborder="0"></iframe>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluan/binhluanform.php", {
                idpro: <?= $id ?>
            });
        });
    </script>

    <div class="container related-pro">
        <h2 class="title">Related Products</h2>
        <div class="row">
            <?php
            $i = 0;
            foreach ($sp_cung_loai as $sp_cung_loai) {
                extract($sp_cung_loai);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                echo ' <div class="col-4"> 
                    <a href="' . $linksp . '">                            
                        <img src="' . $hinh . '">
                        <h4>' . $ten_sanpham . '</h4>
                        <p>$' . $gia_sanpham . '</p>
                    </a>                        
                    </div>';
                $i += 1;
                if ($i > 3) {
                    break;
                }
            }
            ?>
        </div>
    </div>
</div>