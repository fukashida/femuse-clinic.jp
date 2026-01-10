<?php get_header(); ?>
<main class="about">
  <div class="container">
    <div>
      <picture>
        <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/about/pc_kv.png">
        <img class="about-kv-img fadein" src="<?php my_theme_uri(); ?>/assets/images/about/sp_kv.png" alt="">
      </picture>
    </div>
    <div class="about-container">
      <h1>
        About <br>
        femuse clinic
      </h1>
      <div class="about-info">
        <h2 class="about-info-main-copy">
          患者さま一人ひとりの<br class="sp">ライフステージに向き合う。
        </h2>
        <p>
          体調の不安や、ちょっとしたカラダの不調を治したい。<br />
          病気ではないけれど、少しでも毎日を快適に過ごしたい。<br />
          もっと健康になりたい。美しくなりたい。<br /><br />
          女性のカラダはホルモン変動が大きく、人生のどのステージでも悩みは尽きません。<br />
          フェミューズクリニックでは、患者さま一人ひとりに向き合い<br />
          それぞれのお悩みに沿った治療を提供させていただきます。<br />
          そして、皆様の人生がより良いものになるようお手伝いをさせていただけたら幸いです。
        </p>
      </div>
      <div class="about-title-area">
        <div class="about-title-line"></div>
        <div class="title">
          <h2> femuse clinic の強み </h2>
          <span>advantage</span>
        </div>
      </div>
      <div class="about-detail">
        <div class="about-detail-group">
          <div class="about-detail-box">
            <h3 class="about-line-title">婦人科と美容皮膚科のトータルケア<h3>
                <p>繊細で複雑な女性の体を健康でキレイに保つために、弊院は婦人科と美容皮膚科のどちらの施術も提供しております。デリケートゾーンの悩みから、お肌のケアまで、女性の体にトータルで寄り添うことができるクリニックです。</p>
          </div>
          <div class="about-detail-box">
            <img src="<?php my_theme_uri(); ?>/assets/images/about/pc_advantage_pic_1.jpg">
          </div>
        </div>
        <div class="about-detail-group">
          <div class="about-detail-box">
            <img src="<?php my_theme_uri(); ?>/assets/images/about/pc_advantage_pic_2.jpg">
          </div>
          <div class="about-detail-box">
            <h3 class="about-line-title">高い専門性</h3>
            <p>医師・看護師・医療事務のそれぞれが専門家として患者様の健康と美に向き合っております。そして医学的なエビデンスに基づいた、患者様にとって本当に価値のある確かな施術のみを提供しております。</p>
          </div>
        </div>
        <div class="about-detail-group">
          <div class="about-detail-box">
            <h3 class="about-line-title">通いやすさ</h3>
            <p>スタッフは全て女性で、プライバシーへの配慮も徹底しております。患者さまがリラックスして、安心して受診いただける雰囲気づくりを心掛けております。また、駅徒歩１分の利便性に加え、完全予約制となっておりますので、忙しい毎日の中でも通っていただききやすい環境を整えております。</p>
          </div>
          <div class="about-detail-box">
            <img src="<?php my_theme_uri(); ?>/assets/images/about/pc_advantage_pic_3.jpg">
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('parts/store', null, $args = ['is-disp-title' => false]) ?>
  </div>
</main>
<?php get_template_part('parts/reserve-modal') ?>

<?php get_footer(); ?>