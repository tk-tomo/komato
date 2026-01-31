
document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger);

    // 1. matchMediaのインスタンスを作る
    const mm = gsap.matchMedia();
    // --- 慣性スクロール（Lenis）の設定 ---
    const lenis = new Lenis({
        duration: 1.2,  // スクロールの余韻の長さ（1.2〜1.5がアンジェラックス風）
        lerp: 0.1,      // 滑らかさ。数値が小さいほどヌルヌルします
        smoothWheel: true
    });

    // スクロールするたびにScrollTriggerを更新するおまじない
    lenis.on('scroll', ScrollTrigger.update);

    // アニメーションのフレームごとにLenisを動かす設定
    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);
    // ----------------------------------

    // あとは今まで通りGSAPのコードを書いてOK！
    gsap.registerPlugin(ScrollTrigger);
    // 2. PCサイズ（768px以上）の時だけ実行する箱を作る
    mm.add("(min-width: 768px)", () => {
        
        // パララックスの例
    gsap.fromTo(".about_img_02", 
        { y: 50 }, 
        { 
            y: -140, 
            scrollTrigger: {
                trigger: ".about_img_02",
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        }
    );
    // パララックスの例
    gsap.fromTo(".fv_content", 
        {
          x: 0,
          y: 0,
          z: 0,
          force3D: true // これが重要！
        }, 
        { 
          x: 0,
          y: 150,
          z: 0,
          force3D: true,// これが重要！
          scrollTrigger: {
                trigger: ".fv_content",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        }
    );
      // パララックスの例
    gsap.fromTo(".about_section", 
        { y: 0 }, 
        { 
            y: 80, 
            scrollTrigger: {
                trigger: ".about_section",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        }
    );
     // パララックスの例
    gsap.fromTo(".about_img_03 img", 
        { y: -30 }, 
        { 
            y: 30, 
            scrollTrigger: {
                trigger: ".about_section",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        }
    ); 
    // パララックスの例
    // gsap.fromTo(".mask.active:before", 
    //     { y: 0 }, 
    //     { 
    //         y: "100%", 
    //         ease: "power2.out",
    //         duration:1.6,
    //         scrollTrigger: {
    //             trigger: ".mask.active",
    //             start: "top 80%",
    //             end: "bottom top",
    //             scrub: true
    //         }
    //     }
    // );
        // この関数の外に出ると（スマホになると）、
        // 上記の設定はGSAPが自動で「なかったこと（リセット）」にしてくれます。
    });

    // 3. スマホサイズ（767px以下）専用の動きを作りたい場合はこちら
    mm.add("(max-width: 767px)", () => {
        // スマホでは動かさないなら、ここは空っぽでOKです！
    });
});


// --- 文字を一文字ずつspanで囲む（修正版） ---
const animationTargetElements = document.querySelectorAll(".anime-up");

for (let i = 0; i < animationTargetElements.length; i++) {
    const targetElement = animationTargetElements[i];

    // ★ここを追加！ もし要素が「mask（画像）」なら、文字じゃないので無視する
    if (targetElement.classList.contains('mask')) {
        continue; 
    }

    const texts = targetElement.textContent;
    const textsArray = [];
    targetElement.textContent = "";

    for (let j = 0; j < texts.split("").length; j++) {
        textsArray.push('<span><span style="animation-delay: ' + ((j + 12) * 0.03) + 's">' + texts.split("")[j] + '</span></span>');
    }
    for (let k = 0; k < textsArray.length; k++) {
        targetElement.innerHTML += textsArray[k];
    }
}
// --- スクロール監視：画面に入ったら .active を付ける ---
const observerOptions = {
    root: null,
    rootMargin: "-30% 0px", // 少し画面に入ったら発動
    threshold: 0
};

const observerCallback = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // ここで active クラスを付与（CSSがこれで動く）
            entry.target.classList.add('active');
            observer.unobserve(entry.target); // 一度動いたら監視終了
        }
    });
};

const observer = new IntersectionObserver(observerCallback, observerOptions);

// .mask と .anime-up の両方を監視する
document.querySelectorAll('.mask, .anime-up').forEach(el => {
    observer.observe(el);
});




// ホバー時の動き
$(function(){
  $(".ProductCard1").hover(
   function () {
   $(".c-product-productCard__bg1").addClass("c-product-productCard__bg--hover1");
   },
   function () {
   $(".c-product-productCard__bg1").removeClass("c-product-productCard__bg--hover1");
   }
  );
});
$(function(){
$(".ProductCard2").hover(
 function () {
 $(".c-product-productCard__bg2").addClass("c-product-productCard__bg--hover2");
 },
 function () {
 $(".c-product-productCard__bg2").removeClass("c-product-productCard__bg--hover2");
 }
);
});
$(function(){
$(".ProductCard3").hover(
function () {
$(".c-product-productCard__bg3").addClass("c-product-productCard__bg--hover3");
},
function () {
$(".c-product-productCard__bg3").removeClass("c-product-productCard__bg--hover3");
}
);
});


$(function() {
    $('.hamburger').click(function() {
    $(this).toggleClass('active');
    
    if ($(this).hasClass('active')) {
    $('.hamburger_open_content').addClass('active');
    } else {
    $('.hamburger_open_content').removeClass('active');
    } 
    });
    });
    $(".drawer__nav__link").click(function () {
      $(".hamburger_open_content").removeClass("active");
      $(".hamburger").removeClass("active");
    });
     // ページ内スクロール
  $('a[href^="#"]').click(function () {
    const speed = 600;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
  // function

    //scroll_effect
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.scroll_up');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('on');
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});

    //メニュー内を閉じておく
    $(function() {
      $('.sp_CartCount_flex').click(function() {
      $('.hamburger_open_content').removeClass('active');
      $('.hamburger').removeClass('active');
      });
      });

     // アコーディオン
$(function(){
  // .js-accordion_titleをクリックすると
  $('.js-accordion_title').click(function(){ 
    // クリックした次の要素を展開
    $(this).next('.accordion_inner').slideToggle();
    // 展開するときjs-accordion_titleクラスにopenクラスを追加してアイコンを回転
    $(this).toggleClass("open");
    
  });
});



    // var rellax = new Rellax('.js-rellax', {
    //     speed: -10,
    //     center: false,
    //     wrapper: null,
    //     round: true,
    //     vertical: true,
    //     horizontal: false
    //   });


  

    // スワイパー
    const mySwiper = new Swiper('.card02 .swiper', {
        slidesPerView: 'auto',
        spaceBetween: 16,
        grabCursor: true,
        pagination: {
          el: '.card02 .swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.card02 .swiper-button-next',
          prevEl: '.card02 .swiper-button-prev',
        },
        breakpoints: {
          1025: {
            spaceBetween: 32,
          }
        },
      });

// フェードイン
$(function(){
  $(".inview").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).stop().addClass("is-show");
    }
  });
});



      // パララックス
      // $('.parallax-window').parallax({
      //   imageSrc: 'img/brand_vision.jpg',
      // });
      // スクロール量を取得する関数
//       var images = document.querySelectorAll('.parallax-window');
// new simpleParallax(images, {
// 	orientation: 'down',
// 	scale: 1.2,
// 	overflow: true,
// 	delay: 0,
// 	transition:cubic-bezier(0,0,0,1),
// 	customContainer: '.container',
// 	customWrapper: '.wrapper'
// });


// リロード時
$(function() {
  // ウィンドウサイズ768px以下の場合、クラスを削除
  if (window.matchMedia( '(max-width: 768px)' ).matches) {
  $(function(){
    $('.parallax-window').removeClass('rellax');
  });
  //768px以上の場合なにもしない
    } else {
  };
});

// リサイズ時
$(window).resize(function(){
  let x = $(window).width();
  let y = 768;
  if (x <= y) {
    $('.parallax-window').removeClass('rellax');
  }
  else {
    $('.parallax-window').addClass('rellax');
  }
});


// assets/js/style.js






