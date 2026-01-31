<footer>
           <div class="footer_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/footer_img.jpg" alt=""></div>
           <section class="footer_section">
               <div class="snsList_section">
                    <ul class="snsList_section_flex">
                        <li>
                            <a href="" class="snsList_content">
                                <div class="snsList_hedding">
                                    <h4>Instagram</h4>
                                    <p>インスタグラム</p>
                                </div>
                                <div class="snsIcon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instagram_hover.svg" alt="" width="20px" height="20px">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instagram.svg" alt="" width="20px" height="20px">
                                </div>
                                <p>商品の写真を多く<br>
                                    投稿させて頂いております。</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="snsList_content">
                                <div class="snsList_hedding">
                                    <h4>X</h4>
                                    <p>エックス</p>
                                </div>
                                <div class="snsIcon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/x_hover.svg" alt="" width="20px" height="20.45px">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/x.svg" alt="" width="20px" height="20.45px">
                                </div>
                                <p>商品の写真を多く<br>
                                    投稿させて頂いております。</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="snsList_content">
                                <div class="snsList_hedding">
                                    <h4>Instagram</h4>
                                    <p>インスタグラム</p>
                                </div>
                                <div class="snsIcon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facebook_hover.svg" alt="" width="20px" height="19.87px">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facebook.svg" alt="" width="20px" height="19.87px">
                                </div>
                                <p>商品の写真を多く<br>
                                    投稿させて頂いております。</p>
                            </a>
                        </li>
                    </ul>
               </div>
               <div class="footer_grobal_section">
                   <div class="footer_grobal_flex">
                        <div class="footer_grobal_left">
                            <div class="footer_rogo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/footer_rogo.svg" alt=""></div>
                        </div>
                        <div class="footer_grobal_rigth">
                            <div class="grobal_flex_wrap">
                                <ul class="footer_grobal_list">
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#brand_vision" style="
                                        white-space: nowrap;
                                    ">Brand vision</a></li>
                                    <li><a href="#Journal">Journal</a></li>
                                </ul>
                                <ul class="footer_grobal_list grobal_wrap">
                                    <li><a href="product_file/product_menu.html">Product</a></li>
                                    <li><a href="news_file/news_menu.html">News</a></li>
                                </ul>
                            </div>
                            <span></span>
                            <p class="copy">All Rights Reserved 2024 ©︎ kohigashi tomorou</p>
                        </div>
                   </div>
               </div>
           </section>
           <section>
            <div></div>
        </section>
       </footer>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.13/dist/lenis.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/parallax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/option.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/rellax.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/style.js"></script>

    <script>
       let rellaxElements = []; // Rellaxインスタンスを格納する配列

function initializeRellax() {
    rellaxElements.push(new Rellax('.rellax', {
        callback: function (position) {
            console.log('.rellax position:', position);
        }
    }));
    rellaxElements.push(new Rellax('.rellax_visition', {
        speed: 3,
        center: true,
        callback: function (position) {
            console.log('.rellax_visition position:', position);
        }
    }));
}

function destroyRellax() {
    rellaxElements.forEach(rellax => {
        rellax.destroy();
    });
    rellaxElements = []; // 配列を空にする
}

function handleResize() {
    if (window.innerWidth <= 768) { // スマホサイズのブレークポイント（例：768px以下）
        if (rellaxElements.length > 0) {
            destroyRellax();
        }
    } else {
        if (rellaxElements.length === 0) {
            initializeRellax();
        }
    }
}

// 初期化とリサイズイベントの登録
handleResize(); // 最初のチェック
window.addEventListener('resize', handleResize);
        
      </script>
</body>
</html>