{ //ハンバーガーメニュー
    var hamburger = document.getElementById('hamburger');
    var spmenu = document.getElementById('close-menu');
    
    hamburger.addEventListener('click', function(){
      hamburger.classList.toggle('open')
      spmenu.classList.toggle('open')
    });

  //このクラス↓入れると、モバイルメニューでクリックした後自動的にメニューバーが閉じる
    var smoothLinks = document.querySelectorAll('.smooth');
    smoothLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        hamburger.classList.toggle('open')
        spmenu.classList.toggle('open')
      });
    });
}

// アコーディオン

$('.a').hide();

$('.q').on('click', function() {//タイトル要素をクリックしたら
  var findElm = $(this).next(".a");//直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle();//アコーディオンの上下動作
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去し
  }else{//それ以外は
    $(this).addClass('close');//クラス名closeを付与
  }
});

$('.medical-type').hide();

$('.card-header').on('click', function() {//タイトル要素をクリックしたら
  var findElm = $(this).next(".medical-type");//直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle();//アコーディオンの上下動作
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去し
  }else{//それ以外は
    $(this).addClass('close');//クラス名closeを付与
  }
});



// トップページ-slider
var swiper = new Swiper('.swiper', {
    spaceBetween: 30,
    centeredSlides: true,
    speed:1000,
    autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
});

// トップページメインコピー-slider
var swiper02 = new Swiper('.swiper02', {
    spaceBetween: 30,
    centeredSlides: true,
    effect: 'fade',
    speed:2000,
    autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    },
});



// タブ切り替え
$(function() {
  let tabs = $(".tab"); // tabのクラスを全て取得し、変数tabsに配列で定義
  $(".tab").on("click", function() { // tabをクリックしたらイベント発火
    $(".tab-active").removeClass("tab-active"); // activeクラスを消す
    $(this).addClass("tab-active"); // クリックした箇所にactiveクラスを追加
    const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
    $(".tab-content-item").removeClass("tab-show").eq(index).addClass("tab-show"); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
  })
})


// ウルソのアコーディオン
document.addEventListener('DOMContentLoaded', function () {
  const qaItems = document.querySelectorAll('.qa-item');

  qaItems.forEach(function (item) {
    const question = item.querySelector('.question');

    question.style.cursor = 'pointer';

    question.addEventListener('click', function () {
      const isOpen = item.classList.contains('active');

      // 全て閉じる
      qaItems.forEach(function (el) {
        el.classList.remove('active');
      });

      // クリックしたものが閉じていたら開く
      if (!isOpen) {
        item.classList.add('active');
      }
    });
  });
});