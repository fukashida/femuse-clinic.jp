function openModal(selector) {
  $(selector).addClass("active");
  $("html, body").css("overflow", "hidden");
}

function closeModal(selector) {
  $(selector).removeClass("active");
  $("html, body").removeAttr("style");
}

// モーダルを閉じるボタンのイベント設定
$("[class^=modal-menu-close]").on("click", function () {
  closeModal("[class^=modal-menu-]");
});

// 各メニューカードをクリックしてモーダルを開くイベント設定
$("[id^=menu-card]").on("click", function () {
  const menu = $(this).data("menu");
  openModal(`#modal-menu-${menu}`);
});

// オンラインメニューカードのイベント設定
$("#menu-online-card").on("click", function () {
  openModal("#modal-menu-online");
});

// オンラインメニューを閉じるボタンのイベント設定
$(".modal-menu-online-close").on("click", function () {
  closeModal("#modal-menu-online");
});
