// 加载新闻列表
function loadNewsList(categoryId, categoryName) {
    // 更新 tab 高亮
    $('.tab-btn').removeClass('active');
    $('.tab-btn').each(function () {
        var catId = $(this).data('cat-id');
        if (catId == categoryId) {
            $(this).addClass('active');
        }
    });

    // 更新面包屑
    $('#bcText').text(categoryName);

    // 显示加载中
    $('#panelNews').html('<div style="text-align:center;padding:100px;"><div class="loading-spinner"></div><p>載入中...</p></div>');

    // AJAX 请求
    $.ajax({
        url: '/News/GetNewsList',
        type: 'POST',
        data: { categoryId: categoryId },
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                renderNewsList(response.data);
            } else {
                $('#panelNews').html('<div style="text-align:center;padding:100px;color:red;">載入失敗：' + response.message + '</div>');
            }
        },
        error: function (xhr, status, error) {
            console.error(error);
            $('#panelNews').html('<div style="text-align:center;padding:100px;color:red;">載入失敗，請稍後再試！</div>');
        }
    });
}

// 渲染新闻列表
function renderNewsList(items) {
    // 如果数据为空，只显示提示，不显示任何默认内容
    if (!items || items.length === 0) {
        $('#panelNews').html('<div style="text-align:center;padding:100px;color:var(--gray);">暫無新聞</div>');
        return;
    }

    var html = '<div class="news-wrap">';

    // 置顶新闻（第一条）
    var featured = items[0];
    if (featured) {
        html += '<div class="news-featured" onclick="openDetail(' + featured.ID + ')">';
        html += '<div class="news-featured-img"><img src="' + escapeHtml(featured.ImageUrl) + '" alt="' + escapeHtml(featured.Title) + '" loading="lazy"></div>';
        html += '<div class="news-featured-body">';
        html += '<div class="news-featured-tag">' + escapeHtml(featured.CategoryName) + '</div>';
        html += '<div class="news-featured-date">' + escapeHtml(featured.Date) + '</div>';
        html += '<p class="news-featured-text">' + escapeHtml(featured.Note) + '</p>';
        html += '<a href="#" class="news-read-more" onclick="openDetail(' + featured.ID + ');return false;">閱讀更多 →</a>';
        html += '</div></div>';
    }

    // 其他新闻网格
    if (items.length > 1) {
        html += '<div class="news-grid">';
        for (var i = 1; i < items.length; i++) {
            var item = items[i];
            html += '<div class="news-card" onclick="openDetail(' + item.ID + ')">';
            html += '<div class="news-card-img"><img src="' + escapeHtml(item.ImageUrl) + '" alt="' + escapeHtml(item.Title) + '" loading="lazy"></div>';
            html += '<div class="news-card-body">';
            html += '<div class="news-card-tag">' + escapeHtml(item.CategoryName) + '</div>';
            html += '<div class="news-card-date">' + escapeHtml(item.Date) + '</div>';
            html += '<p class="news-card-text">' + escapeHtml(item.Note) + '</p>';
            html += '<span class="news-card-link">閱讀更多 →</span>';
            html += '</div></div>';
        }
        html += '</div>';
    }

    html += '</div>';
    $('#panelNews').html(html);

    // 触发渐显动画
    setTimeout(function () {
        $('.news-featured, .news-card').each(function (i) {
            $(this).css({
                transition: 'opacity 0.5s ease ' + (i * 50) + 'ms, transform 0.5s ease ' + (i * 50) + 'ms',
                opacity: 1,
                transform: 'translateY(0)'
            });
        });
    }, 10);
}

// 打开新闻详情
function openDetail(id) {
    $.ajax({
        url: '/News/GetNewsDetail',
        type: 'POST',
        data: { id: id },
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                var data = response.data;
                $('#dTag').text(data.CategoryName);
                $('#dDate').text(data.Date);
                $('#dImg').attr('src', data.ImageUrl);
                $('#dBody').html(data.Content.replace(/\n/g, '<br>'));
                $('#detailModal').addClass('open');
                $('body').css('overflow', 'hidden');
                window.scrollTo({ top: 0 });
            } else {
                alert('加载失败：' + response.message);
            }
        },
        error: function () {
            alert('加载失败，请稍后重试！');
        }
    });
}

// 关闭详情
function closeDetail() {
    $('#detailModal').removeClass('open');
    $('body').css('overflow', '');
}

// 切换 Tab（新闻/徵才）
function switchTab(tab) {
    var isNews = tab === 'news';
    $('#panelNews').css('display', isNews ? '' : 'none');
    $('#panelHiring').css('display', isNews ? 'none' : '');
    $('#tabNews').toggleClass('active', isNews);
    $('#tabHiring').toggleClass('active', !isNews);
    $('#bcText').text(isNews ? '新聞消息' : '徵才消息');

    // 只在首次切换到新闻 Tab 时加载数据
    if (isNews && $('#panelNews').html() === '') {
        loadNewsList(0, '新聞消息');
    }
}

// 转义 HTML
function escapeHtml(str) {
    if (!str) return '';
    return String(str).replace(/[&<>]/g, function (m) {
        if (m === '&') return '&amp;';
        if (m === '<') return '&lt;';
        if (m === '>') return '&gt;';
        return m;
    });
}

// 菜单切换
function toggleMenu() {
    $('#mobileMenu').toggleClass('open');
}

// 回到顶部
var btn = document.getElementById('backTop');
if (btn) {
    setInterval(function () {
        var st = window.pageYOffset || document.documentElement.scrollTop || 0;
        btn.style.opacity = st > 300 ? '1' : '0';
        btn.style.pointerEvents = st > 300 ? 'auto' : 'none';
    }, 300);
}

// Navbar 背景
window.addEventListener('scroll', function () {
    var nav = document.getElementById('navbar');
    var st = window.pageYOffset || 0;
    if (nav) {
        nav.style.background = st > 50 ? 'rgba(17,17,17,0.98)' : 'rgba(17,17,17,0.95)';
    }
});

// 键盘关闭详情
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeDetail();
});

// 初始化 - 默认加载全部新闻
$(function () {
    loadNewsList(0, '新聞消息');
});