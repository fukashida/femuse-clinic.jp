
<footer class="footer_">
        <nav class="footer-nav">
            <a href="<?php echo esc_url( home_url('/privacypolicy/') ); ?>">プライバシーポリシー</a>
            <a href="<?php echo esc_url( home_url('/law/') ); ?>">特定商取引法に関する表記</a>
            <a href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせ</a>
            <a class="line" href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=1064&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447"><img src="<?php my_theme_uri(); ?>/assets/images/common/line.webp" alt="公式ライン" /></a>
            <p>TEL: <a href="tel:03-6205-5937">03-6205-5937</a></p>
        </nav>
        <div class="copyright">
            Copyright ©2026 Femuse clinic All Rights Reserved.
        </div>
    </footer>
</body>

<script>
const slides = [
    {
      href: "https://femuse-clinic.jp/urso/",
      alt: "ウルソ",
      src: "https://femuse-clinic.jp/wp-content/uploads/2026/03/banner_urso.png",
    },
      {
    href: "https://femuse-clinic.jp/std-test/",
    alt: "性病検査",
    src: "https://femuse-clinic.jp/wp-content/uploads/2026/03/banner_std-test.png",  
    },
  {
    href: "https://femuse-clinic.jp/xolair/",
    alt: "ゾレア皮下注射",
    src: "https://femuse-clinic.jp/wp-content/uploads/2026/03/banner_xolair.png",
  },
  {
    href: "https://femuse-clinic.jp/doxipep/",
    alt: "ドキシペップ",
    src: "https://femuse-clinic.jp/wp-content/uploads/2026/03/banner_doxipep.png",    
    },
  {
    href: "https://femuse-clinic.jp/menu/pill/",
    alt: "ピル処方",
    src: "https://femuse-clinic.jp/wp-content/uploads/2026/03/banner_pill.png",  
    },
];

const TOTAL = slides.length;
const track = document.getElementById('sliderTrack');
const dotsEl = document.getElementById('slickDots');

// Build infinite clone list: [...clones, ...real, ...clones]
// clones = TOTAL copies before and after
const allSlides = [...slides, ...slides, ...slides]; // triple
let currentIndex = TOTAL; // start at first real slide (middle section)

function buildSlides() {
  track.innerHTML = '';
  allSlides.forEach((s, i) => {
    const li = document.createElement('div');
    li.className = 'slide';
    li.dataset.realIndex = i % TOTAL;
    li.innerHTML = `<a href="${s.href}"><img src="${s.src}" alt="${s.alt}"></a>`;
    li.addEventListener('mouseenter', () => {
      track.classList.add('is-hovering');
      li.classList.add('hovered');
    });
    li.addEventListener('mouseleave', () => {
      track.classList.remove('is-hovering');
      li.classList.remove('hovered');
    });
    track.appendChild(li);
  });
}

function buildDots() {
  dotsEl.innerHTML = '';
  for (let i = 0; i < TOTAL; i++) {
    const li = document.createElement('li');
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.textContent = i + 1;
    li.appendChild(btn);
    li.addEventListener('click', () => goTo(i + TOTAL));
    dotsEl.appendChild(li);
  }
}

function getSlideWidth() {
  const s = track.children[0];
  if (!s) return 0;
  return s.offsetWidth + 16;
}

function getVisibleCount() {
  return window.innerWidth <= 640 ? 3 : 4;
}

function setSlideWidths() {
  const gap = 16;
  const isSP = window.innerWidth <= 640;
  const visible = isSP ? 2 : 4;
  const wrapW = track.parentElement.offsetWidth;
  const sw = (wrapW - gap * (visible - 1)) / visible;
  const children = track.children;
  for (let i = 0; i < children.length; i++) {
    children[i].style.width = sw + 'px';
    children[i].style.flex = '0 0 ' + sw + 'px';
  }
  return sw;
}

function updatePosition(animate) {
  const gap = 16;
  const sw = setSlideWidths();
  const wrapW = track.parentElement.offsetWidth;
  // index=0のスライドを中央に置くための左余白
  const startOffset = (wrapW - sw) / 2;
  // currentIndex番目を中央に
  const x = startOffset - currentIndex * (sw + gap);

  if (!animate) track.classList.add('is-dragging');
  track.style.transform = `translateX(${x}px)`;
  if (!animate) {
    setTimeout(() => track.classList.remove('is-dragging'), 10);
  }
}

function updateCenter() {
  const allEls = track.children;
  for (let i = 0; i < allEls.length; i++) {
    allEls[i].classList.toggle('is-center', i === currentIndex);
  }
}

function updateDots() {
  const real = ((currentIndex - TOTAL) % TOTAL + TOTAL) % TOTAL;
  const lis = dotsEl.children;
  for (let i = 0; i < lis.length; i++) {
    lis[i].classList.toggle('slick-active', i === real);
  }
}

function goTo(idx, anim = true) {
  currentIndex = idx;
  updatePosition(anim);
  updateCenter();
  updateDots();

// 右ループ: TOTAL*2 以上になったら TOTAL に戻す
loopTimer = setTimeout(() => {
  if (currentIndex >= TOTAL * 2) {
    currentIndex = TOTAL;
    updatePosition(false);
    updateCenter();
    updateDots();
  }
}, 520);
}

function next() {
  goTo(currentIndex + 1);
}

let loopTimer;
let autoTimer;

function startAuto() {
  clearInterval(autoTimer);
  autoTimer = setInterval(next, 3500);
}

function stopAuto() {
  clearInterval(autoTimer);
}

// Drag support
let dragStart = null, dragDelta = 0;
track.addEventListener('mousedown', e => {
  dragStart = e.clientX;
  dragDelta = 0;
  stopAuto();
  track.classList.add('is-dragging');
});
window.addEventListener('mousemove', e => {
  if (dragStart === null) return;
  dragDelta = e.clientX - dragStart;
  const gap = 16;
  const sw = setSlideWidths();
  const wrapW = track.parentElement.offsetWidth;
  const startOffset = (wrapW - sw) / 2;
  const x = startOffset - currentIndex * (sw + gap) + dragDelta;
  track.style.transform = `translateX(${x}px)`;
});
window.addEventListener('mouseup', () => {
  if (dragStart === null) return;
  track.classList.remove('is-dragging');
  if (Math.abs(dragDelta) > 50) {
    goTo(dragDelta < 0 ? currentIndex + 1 : currentIndex - 1);
  } else {
    goTo(currentIndex);
  }
  dragStart = null;
  startAuto();
});

// Touch support
let touchStart = null;
track.addEventListener('touchstart', e => {
  touchStart = e.touches[0].clientX;
  stopAuto();
}, { passive: true });
track.addEventListener('touchend', e => {
  if (touchStart === null) return;
  const delta = e.changedTouches[0].clientX - touchStart;
  if (Math.abs(delta) > 50) {
    goTo(delta < 0 ? currentIndex + 1 : currentIndex - 1);
  } else {
    goTo(currentIndex);
  }
  touchStart = null;
  startAuto();
}, { passive: true });

window.addEventListener('resize', () => {
  updatePosition(false);
});

// Init
buildSlides();
buildDots();
setTimeout(() => {
  setSlideWidths();
  updatePosition(false);
  updateCenter();
  updateDots();
  startAuto();
}, 50);
</script>

<?php wp_footer(); ?>

</html>