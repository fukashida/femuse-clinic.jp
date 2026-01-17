<?php get_header(); ?>
<main>

<section class="line-guide">
  <div class="container">

    <h2>【重要】<br class="sp">ご予約ありがとうございます</h2>

    <div class="box">
    <p>
      オンライン診療にご予約いただき、ありがとうございます。<br><br>

      ご予約内容の確認や<br class="sp">
      当日のご案内のため、<br>
      <span>公式LINEの追加をお願いいたします。</span><br><br>

      追加後、<br class="ssp">
      <span>「予約しました」</span>と<br class="sp">
      メッセージをお送りください。
    </p>


      <a
        href="https://liff.line.me/2003578447-9LneB3xY?flowPathId=1064&basicId=@436fsscv&liffId=2003578447-9LneB3xY&clientId=2003578447"
        class="button"
      >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/line_w.webp" alt="公式LINE">
        公式LINEを追加して<br class="ssp">
        メッセージを送る
      </a>
    </div>

    <div class="flex">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/caution.webp" alt="注意アイコン">
      <div>
        <p>
          公式LINEは<br class="sp">
          当院からのご連絡専用窓口です。
        </p>
        <p>
          ・診療前のご案内<br>
          ・必要書類や注意事項のご連絡<br>
          ・キャンセル／日程変更の受付
        </p>
        <p class="last">
          スムーズな診療のため、<br class="sp">
          必ずメッセージをお送りください。
        </p>
      </div>
    </div>

  </div>
</section>


  <?php get_template_part('parts/section', 'access'); ?>

</main>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/add_param.js"></script>
  <script>
    // クエリパラメータを取得
    document.addEventListener("DOMContentLoaded", () => {
      const queryParams = getQueryParams();
      console.log(queryParams);

      // クエリパラメータをクッキーに保存
      const params = getQueryParams();
      const queryString = Object.keys(params)
        .map(
          (key) =>
            encodeURIComponent(key) + "=" + encodeURIComponent(params[key])
        )
        .join("&");
      if (queryString) {
        localStorage.setItem("initial_query_params", queryString);
      }

      // クエリパラメータをaタグのボタンに追加
      const aTags = document.querySelectorAll("a");
      aTags.forEach((aTag) => {
        aTag.addEventListener("click", (e) => {
          e.preventDefault();
          console.log(aTag.href);
          redirectWithQueryParams(aTag.href);
        });
      });
    });
  </script>   
<?php get_footer(); ?>