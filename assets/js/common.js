const MENU_POSITION_INDEX = 0;
const TELEMEDICINE_POSITION_INDEX = 1;
const RESERVE_POSITION_INDEX = 2;
const SCROLL_POSITON_ADJUST = 100;
let current_position_index = -1;
let position_list = [];

const fadeInScroll = () => {
  const windowHeight = $(window).height();
  const scroll = $(window).scrollTop();

  $(".scroll-fadein").each(function () {
    const targetPosition = $(this).offset().top;
    if (scroll > targetPosition - windowHeight + 150) {
      $(this).addClass("is-scroll-fadein");
    }
  });
};

$(function () {
  $("#menu-sp").on("click", function () {
    $("#nav-sp").toggleClass("active");
  });

  $("#menu-close-sp").on("click", function () {
    $("#nav-sp").toggleClass("active");
  });

  let modalCallOpen = $(".modal-call-open"),
    modalCallClose = $(".modal-call-close"),
    modalCall = $("#modal-call");

  modalCallOpen.on("click", function () {
    modalCall.addClass("active");
    return false;
  });

  modalCallClose.on("click", function () {
    modalCall.removeClass("active");
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest(".modal-body").length) {
      modalCall.removeClass("active");
    }
  });

  let modalLineOpen = $(".modal-line-open"),
    modalLineClose = $(".modal-line-close"),
    modalLine = $("#modal-line");

  modalLineOpen.on("click", function () {
    modalLine.addClass("active");
    return false;
  });

  modalLineClose.on("click", function () {
    modalLine.removeClass("active");
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest(".modal-body").length) {
      modalLine.removeClass("active");
    }
  });

  $("[class^='nav-sp-link']").on("click", function (e) {
    $("#nav-sp").toggleClass("active");
  });

  $(".menu-open").click(function () {
    if (!window.matchMedia("(max-width: 768px)").matches) {
      return;
    }

    if ($(this).hasClass("active")) {
      $(this).toggleClass("active");
      $(this).next(".menu-open-area").fadeOut();
    } else {
      $(".menu-open-area").fadeOut();
      $(".menu-open").removeClass("active");
      $(this).toggleClass("active");
      $(this).next(".menu-open-area").fadeIn();
    }
  });

  $(".telemedicine-menu-open").click(function () {
    if (!window.matchMedia("(max-width: 768px)").matches) {
      return;
    }

    if ($(this).hasClass("active")) {
      $(this).toggleClass("active");
      $(this).next(".telemedicine-menu-open-area").fadeOut();
    } else {
      $(".telemedicine-menu-open-area").fadeOut();
      $(".telemedicine-menu-open").removeClass("active");
      $(this).toggleClass("active");
      $(this).next(".telemedicine-menu-open-area").fadeIn();
    }
  });

  // ヘッダーメニューのコンテンツ位置を取得
  $(".nav-position").each(function (index) {
    position_list[index] = $(this).offset().top;
  });

  fadeInScroll();
  setScrollNaviPosition();

  $(window).scroll(function () {
    fadeInScroll();
    setScrollNaviPosition();
  });

  $('a[href*="#"]').click(function () {
    const adjust = 0;
    const speed = 400;
    const target = $(this.hash === "#" || "" ? "html" : this.hash);
    if (!target.length) return;
    const targetPos = target.offset().top + adjust;
    $("html, body").animate({ scrollTop: targetPos }, speed, "swing");
    $("#nav-sp").removeClass("active");

    return false;
  });
});

// 現在のスクロール位置がどのコンテンツ位置にあるか判定
function setScrollNaviPosition() {
  scrollPosition = $(window).scrollTop();
  for (let index = position_list.length - 1; index >= 0; index--) {
    if ($(window).scrollTop() > position_list[index] - SCROLL_POSITON_ADJUST) {
      setNavMenuCurrent(index);
      break;
    }
  }
}

// カレント位置ヘッダーメニューにclassを付与
function setNavMenuCurrent(index) {
  if (index == current_position_index) {
    return;
  }

  $("header nav li a").removeClass("header-nav-current");

  switch (index) {
    case RESERVE_POSITION_INDEX:
      $("#haeder-nav-reserve").addClass("header-nav-current");
      break;
    case TELEMEDICINE_POSITION_INDEX:
      $("#haeder-nav-telemedicine").addClass("header-nav-current");
      break;
    case MENU_POSITION_INDEX:
      $("#haeder-nav-menu").addClass("header-nav-current");
      break;
  }

  current_position_index = index;
}
