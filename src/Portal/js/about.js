// 加载关于我们内容
function loadAboutInfo() {
    $('#tab-content-container').html('<div style="text-align:center;padding:100px;"><div class="loading-spinner"></div><p>載入中...</p></div>');

    $.ajax({
        url: '@Url.Action("Info", "About")',
        type: 'GET',
        success: function (response) {
            $('#tab-content-container').html(response);
            // 重新绑定分页按钮事件
            $('.pager-btn').off('click').on('click', function (e) {
                e.preventDefault();
                var targetTab = $(this).data('target');
                if (targetTab) switchTab(targetTab);
            });
            // 触发渐显动画
            initFadeInAnimation();
        },
        error: function () {
            $('#tab-content-container').html('<div style="text-align:center;padding:100px;color:red;">載入失敗，請稍後再試！</div>');
        }
    });
}

// 渐显动画
function initFadeInAnimation() {
    $('.value-card, .mission-block').each(function () {
        $(this).css({ opacity: 0, transform: 'translateY(20px)' });
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    $(e.target).css({
                        transition: 'opacity 0.5s ease, transform 0.5s ease',
                        opacity: 1,
                        transform: 'translateY(0)'
                    });
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.15 });
        obs.observe(this);
    });
}