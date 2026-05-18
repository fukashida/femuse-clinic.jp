console.log('column.js が読み込まれました');
jQuery(function($) {
    let currentCategory = 'all';
    let currentPage = 1;

    // Ajaxで投稿を取得する関数
    function fetchPosts(category, paged) {
        $.ajax({
            url: postFilterAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'filter_column_posts',
                category: category,
                paged: paged,
                posts_per_page: postFilterAjax.posts_per_page,
                nonce: postFilterAjax.nonce
            },
            beforeSend: function() {
                $('#post-list-container').css('opacity', '0.5');
            },
            success: function(response) {
                if (response.success) {
                    $('#post-list-container').html(response.data.html);
                }
            },
            error: function() {
                alert('読み込みに失敗しました。');
            },
            complete: function() {
                $('#post-list-container').css('opacity', '1');
            }
        });
    }

    // カテゴリーフィルターボタンのクリック
    $(document).on('click', '.filter-btn', function() {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        currentCategory = $(this).data('category');
        currentPage = 1;

        fetchPosts(currentCategory, currentPage);
    });

    // ページネーションボタンのクリック（動的に生成されるためdocumentに委譲）
    $(document).on('click', '.page-btn', function() {
        currentPage = $(this).data('page');
        fetchPosts(currentCategory, currentPage);

        // ページ上部にスクロール
        $('html, body').animate({
            scrollTop: $('#post-list-container').offset().top - 100
        }, 300);
    });
});