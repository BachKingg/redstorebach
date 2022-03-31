<div class="container">
    <div class="pro-header">
        <a href="index.php?act=sanpham">
            <h1 class="title">DANH MỤC</h1>
        </a>
    </div>
    <div class="row row-2">
        <div class="navbar">
            <nav>
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<li class="pro-name">
                               <a href="' . $linkdm . '">' . $ten_danhmuc . '</a>
                            </li>';
                    }
                    ?>
                </ul>
            </nav>
           
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($dssp as $sp) {
                extract($sp);
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
            }
            ?>
        </div>
    </div>
</div>