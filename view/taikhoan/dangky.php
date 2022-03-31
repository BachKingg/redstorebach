<!-- Tai khoan -page -->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="./view/assets/images/banner-index-4.png" width="100%" class="offer-img">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Đăng nhập</span>
                        <span onclick="register()">Đăng ký</span>
                        <hr id="Indicator">
                    </div>
                    <form action="index.php?act=dangnhap" id="LoginForm" method="POST">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <a href="index.php?act=quenmk">Quên mật khẩu ?</a>
                        <input type="submit" name="dangnhap" class="btn" value="Đăng nhập"></input>
                        <h4 class="thongbao">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </h4>
                    </form>
                    <form action="index.php?act=dangky" id="RegForm" method="POST">
                        <input type="text" name="user" placeholder="Username">
                        <input type="password" name="pass" placeholder="Password">
                        <input type="email" name="email" placeholder="Email">
                        <input type="submit" name="dangky" class="btn" value="Đăng ký"></input>
                        <h4 class="thongbao">
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </h4>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Js cho toggle form
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register() {
        RegForm.style.transform = "translateX(0)";
        LoginForm.style.transform = "translateX(0)";
        Indicator.style.transform = "translateX(125px)";
    }

    function login() {
        RegForm.style.transform = "translateX(400px)";
        LoginForm.style.transform = "translateX(400px)";
        Indicator.style.transform = "translateX(0)";
    }
</script>