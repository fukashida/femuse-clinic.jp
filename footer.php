<div class="fixed-menu">
  <ul>
    <li class="modal-call-open pc">
      <div>電話からご予約</div>
    </li>
    <li class="sp">
      <div><a href="tel:03-6205-5937">電話から<br class="sp" />ご予約</a></div>
    </li>
    <li><a href="https://reserve-femuse-clinic.b4a.clinic/" target="_blank" rel="noopener noreferrer">
        <div>WEBから<br class="sp" />ご予約</div>
      </a></li>
    <li class="modal-line-open pc">
      <div>LINEから<br class="sp" />ご予約</div>
    </li>
    <li class="sp"><a href="https://liff.line.me/2003578447-jYbQMzgD?flowPathId=51&basicId=@436fsscv&liffId=2003578447-jYbQMzgD&clientId=2003578447" target="_blank" rel="noopener noreferrer">LINEから<br class="sp" />ご予約</a></li>
  </ul>
</div>
<footer>
  <?php if (!is_home()): ?>
    <div class="footer-info">
      <div class="footer-favicon">
        <diV class="footer-favicon-img">
          <img src="<?php my_theme_uri(); ?>/assets/images/common/favicon.png" alt="">
        </diV>
        <div class="footer-favicon-text">フェミューズクリニック</div>
      </div>
      <div class="footer-address">
        東京都 新宿区新宿 6-29-11 <br class="sp">新宿イーストクロスタワー３F<br><br class="sp">
        都営地下鉄大江戸線・<br class="sp">東京メトロ副都心線「東新宿」駅　<br class="sp">A3出口より徒歩1分
      </div>
      <div class="footer-day">
        <div class="footer-day-img">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/common/pc_business_day_footer.png">
            <img src="<?php my_theme_uri(); ?>/assets/images/common/sp_business_day_footer.png" alt="">
          </picture>
        </div>
        <div>
          ※日曜、祝日、年末年始休み
        </div>
      </div>
    </div>
  <?php endif; ?>
  ©フェミューズクリニック All Right Reserved.
</footer>
<?php get_template_part('parts/reserve-modal') ?>
</body>
<?php wp_footer(); ?>

</html>