<?php get_header(); ?>
<main class="page404">
    <section class="title-block">
        <h1>404</h1>
        <p class="subtitle">ページが見つかりません</p>
        <p class="content">お探しのページは、<br>
            移動または削除された可能性があります。</p>
    </section>
    <section class="button-block">
        <p>以下のページからお探しの情報を見つけてください。</p>
        <a href="<?php echo esc_url(home_url()); ?>" class="btn-outline">トップページへ</a>
        <p class="title">メニュー・料金一覧</p>
        <a href="<?php echo esc_url( get_site_url().'/faq' ); ?>" class="btn-outline">よくある質問</a>
        <a href="<?php echo esc_url( get_site_url().'/contact' ); ?>" class="btn-outline mt">お問い合わせ</a>
    </section>
</main>
<?php get_footer(); ?>