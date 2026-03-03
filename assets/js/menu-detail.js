$(function () {
  const tdList = $(".menu-detail-recomend-case table").find("td");
  if (tdList.length <= 0) {
    return;
  }
  $(".menu-detail-recomend-case-slider").append("");

  for (let i = 1; i < tdList.length / 4; i++) {
    $(".menu-detail-recomend-case-slider").append(
      `<div class='slide'>
         <div class="menu-detail-recomend-case-slide">
          <h3>${tdList[0 + i * 4].textContent}</h3>
          <div class="menu-detail-recomend-case-component1">${
            tdList[1 + i * 4].textContent
          }</div>
          <div class="menu-detail-recomend-case-icon-plus"></div>
          <div class="menu-detail-recomend-case-component2">${
            tdList[2 + i * 4].textContent
          }</div>
          <div class="menu-detail-recomend-case-detail">
            ${tdList[3 + i * 4].textContent}
          </div>
        </div>
      <div>`
    );
  }

  sliderMenuInit();
});

function sliderMenuInit() {
  $(".menu-detail-recomend-case-slider").slick({
    dots: true,
    infinite: true,
    cssEase: "ease",
    speed: 800,
    autoplay: true,
    autoplaySpeed: 4000,
    adaptiveHeight: true,
    arrows: true,
    pauseOnHover: true,
  });
}
