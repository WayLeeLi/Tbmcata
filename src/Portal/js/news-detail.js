// 侧边栏新闻列表加载与高亮
$(function () {
    var currentId = window.newsData.currentId;

    $.ajax({
        url: '/News/GetSidebarNews',
        type: 'POST',
        data: { currentId: currentId },
        dataType: 'json',
        success: function (list) {
            var $list = $('#newsList');
            $list.empty();
            $.each(list, function (i, item) {
                var activeClass = (item.ID === currentId) ? ' active' : '';
                var $item = $('<div class="news-list-item' + activeClass + '"></div>');
                $item.html(
                    '<img class="news-list-thumb" src="' + escapeHtml(item.Thumb) + '" alt="' + escapeHtml(item.Title) + '">' +
                    '<div class="news-list-info">' +
                    '<div class="news-list-date">' + escapeHtml(item.Date) + '</div>' +
                    '<div class="news-list-excerpt">' + escapeHtml(item.Summary) + '</div>' +
                    '</div>'
                );
                $item.on('click', function () {
                    window.location.href = '/News/Detail/' + item.ID;
                });
                $list.append($item);
            });
        },
        error: function () {
            console.error('加载侧边栏新闻失败');
        }
    });

    function escapeHtml(str) {
        if (!str) return '';
        return String(str).replace(/[&<>]/g, function (m) {
            if (m === '&') return '&amp;';
            if (m === '<') return '&lt;';
            if (m === '>') return '&gt;';
            return m;
        });
    }
});