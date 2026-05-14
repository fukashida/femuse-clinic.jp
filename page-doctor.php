<?php get_header(); ?>
<main class="doctor fadein">
  <div class="container">
    <div class="doctor-object pc">
      <img src="<?php my_theme_uri(); ?>/assets/images/doctor/pic_object.jpg">
    </div>
    <div class="doctor-about">
      <div class="doctor-img">
        <picture>
          <source media="(min-width: 768px)" srcset="<?php my_theme_uri(); ?>/assets/images/doctor/pic_doctor.jpg">
          <img src="<?php my_theme_uri(); ?>/assets/images/doctor/sp_title_doctor.png">
        </picture>
      </div>
      <div class="doctor-about-body">
        <h1>
          ご挨拶
        </h1>
        <span class="sub-title">
          greeting
        </span>

        <p>
          はじめまして。この度フェミューズクリニックの院長に就任しました、谷口彩と申します。<br>
          産婦人科医として妊婦健診や手術、一般婦人科などに携わり、また、美容クリニックでも勤務し、幅広く経験を積んでまいりました。<br>
          当クリニックでは、生理痛、PMS、おりもの異常、更年期障害などの保険診療に加え、妊娠診断やブライダルチェックなどの自費検査、腟のゆるみ・婦人科形成や性交渉のお悩みなどの美容婦人科、美容点滴・内服、お顔のボトックス・ヒアルロン酸を含めた美容皮膚科の診察・治療も行っております。<br>
          現代女性のライフスタイルに沿って、女性がいつでもイキイキと輝けるように、女性の健康やQOL（生活の質）の向上を目指し、保険診療と自由診療の垣根を超えて、患者さま一人ひとりに本当に必要な医療を提供することを実現します。<br>
          女性医師として、産婦人科医として、1児の母としての経験から親身になって患者さまに寄り添い、女性のかかりつけ医として女性の皆様と真摯に向き合いたいと考えております。<br><br>
          院長　谷口　彩
        </p>
        <hr />
      </div>
    </div>
    <div class="doctor-detail">
      <div class="history">
        <div class="">
          <div class="doctor-tag">
            経歴
          </div>
          <ul>
            <li>
              <div class="year">
                2016年
              </div>
              <div class="title">
                福岡大学医学部医学科卒業
              </div>
            </li>
            <li>
              <div class="year">
                2018年
              </div>
              <div class="title">
                沖縄協同病院初期研修医終了
              </div>
            </li>
            <li>
              <div class="year">
                2018年
              </div>
              <div class="title">
                日本大学医学部産婦人科学講座
              </div>
            </li>
            <li>
              <div class="year">
                2022年
              </div>
              <div class="title">
                都内美容クリニックで美容皮膚科、<br class="sp">
                <span class="adjust">&nbsp;&nbsp;&nbsp;</span>美容婦人科勤務開始
              </div>
            </li>
            <li>
              <div class="year">
                2024年4月
              </div>
              <div class="title">
                フェミューズクリニック院長就任
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="doctor-detail-container">
        <div class="qualification">
          <div class="doctor-tag">
            資格
          </div>
          <ul>
            <li>
              日本産科婦人科学会専門医
            </li>
            <li>
              日本女性医学学会　女性ヘルスケアアドバイザー
            </li>
          </ul>
        </div>
        <div class="affiliation">
          <div class="doctor-tag">
            所属学会
          </div>
          <ul>
            <li>
              日本産科婦人科学会
            </li>
            <li>
              日本女性医学会
            </li>
            <li>
              日本抗加齢学会
            </li>
            <li>
              婦人科形成研究会
            </li>
            <li>
              日本美容内科学会
            </li>
            <li>
              日本性感染症学会
            </li>
            <li>
              日本思春期学会
            </li>
          </ul>
        </div>
      </div>
      <hr />
    </div>
    <?php get_template_part('parts/store', null, $args = ['is-disp-title' => false]) ?>
  </div>
</main>
<?php get_template_part('parts/reserve-modal') ?>

<?php get_footer(); ?>