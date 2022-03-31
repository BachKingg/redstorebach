<!-- Footer -->
<footer>


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and Ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="./view/assets/images/play-store.png" alt="">
                        <img src="./view/assets/images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <h3>FOLLOW FANPAGE</h3>
                    <!-- Facebook widget -->
                    <!-- <div class="footer-static-content">
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/badhabitsstore/" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=263266547210244&amp;container_width=392&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbadhabitsstore%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false">
                        <span style="vertical-align: bottom; width: 340px; height: 130px;">
                            <iframe name="fe1ceadfe64e7" width="1000px" height="300px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.0/plugins/page.php?adapt_container_width=true&amp;app_id=263266547210244&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3c5b8a40104818%26domain%3Dbadhabitsstore.vn%26origin%3Dhttps%253A%252F%252Fbadhabitsstore.vn%252Ff7d99e84ea3e98%26relation%3Dparent.parent&amp;container_width=392&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbadhabitsstore%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 130px;" class="">
                            </iframe>
                        </span>
                    </div>
                </div> -->
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blogs Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>FaceBook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <h4 class="copyright">Copyright © 2021 - BachTheDev</h4>
        </div>
    </div>
</footer>
</body>
<!-- JS slider code -->
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }
</script>

</html>