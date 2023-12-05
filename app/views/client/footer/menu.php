<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="./public/image/anhsanpham/<?= $shop["anh_shop"] ?>" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: <?= $shop["diachi_shop"] ?></li>
                            <li>Phone: <?= $shop["sdt_shop"] ?></li>
                            <li>Email: <?= $shop["email_shop"] ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Các liên kết hữu ích</h6>
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Về cửa hàng</a></li>
                            <li><a href="#">Mua sắm an toàn</a></li>
                            <li><a href="#">Thông tin giao hàng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Bản đồ trang web</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Chúng tôi là</a></li>
                            <li><a href="#">Dịch vụ của chúng tôi</a></li>
                            <li><a href="#">Dự án</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Đổi mới</a></li>
                            <li><a href="#">Nhận xét và đánh giá</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Nhận các thông báo mới nhất của chúng tôi</h6>
                        <p>Nhận cập nhật qua Email về cửa hàng mới nhất và các ưu đãi đặc biệt của chúng tôi</p>
                        <form action="index.php?act=sb" method="POST">
                            <input type="email" placeholder="Enter your mail" name="email" required>
                            <input type="hidden" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" name="url">
                            <button type="submit" name="sb" value="sb" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="./public/assets/dist/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>