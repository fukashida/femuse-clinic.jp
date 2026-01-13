<?php get_header(); ?>

<div class="contact-iframe-wrap">
<iframe
  id="contactFrame"
  src="https://femuse-clinic.jp/online/contact/"
  style="width:100%; border:0;"
  scrolling="no"
></iframe>

<script>
(function(){
  const iframe = document.getElementById('contactFrame');

  function resize() {
    if (window.innerWidth <= 540) {
      iframe.style.height = '1350px';
    } else {
      iframe.style.height = '1000px';
    }
  }

  resize();
  window.addEventListener('resize', resize);
})();
</script>

</div>

<?php get_footer(); ?>