// Tab 切换
var TABS = { quote: '快速報價', qa: '線上 Q&A', pinfo: '填寫產品資訊' };

function switchTab(id) {
    document.querySelectorAll('.panel').forEach(function (p) {
        p.classList.remove('active');
    });
    document.getElementById('panel-' + id).classList.add('active');
    var keys = ['quote', 'qa', 'pinfo'];
    document.querySelectorAll('.tab-btn').forEach(function (b, i) {
        b.classList.toggle('active', keys[i] === id);
    });
    document.getElementById('bcCurrent').textContent = TABS[id];
    window.scrollTo({ top: document.querySelector('.tab-nav').offsetTop - 100, behavior: 'smooth' });
}

// Q&A 展开/收起
function toggleQA(qEl) {
    var item = qEl.closest('.qa-item');
    var answer = item.querySelector('.qa-answer');
    var isOpen = item.classList.contains('open');
    // 关闭所有
    document.querySelectorAll('.qa-item').forEach(function (i) {
        i.classList.remove('open');
        i.querySelector('.qa-answer').style.display = 'none';
    });
    if (!isOpen) {
        item.classList.add('open');
        answer.style.display = 'block';
    }
}

// 通用表单提交（AJAX）
function submitQuoteForm(formId, url, successId) {
    var $form = $('#' + formId);
    var $btn = $form.find('button[type="submit"]');
    $btn.prop('disabled', true).text('送出中...');

    $.ajax({
        url: url,
        type: 'POST',
        data: $form.serialize(),
        dataType: 'json',
        success: function (res) {
            if (res.success) {
                $form.hide();
                $('#' + successId).show();
            } else {
                alert(res.msg);
                $btn.prop('disabled', false).text($btn.data('original-text') || '送出');
            }
        },
        error: function () {
            alert('發送失敗，請稍後再試！');
            $btn.prop('disabled', false).text($btn.data('original-text') || '送出');
        }
    });
}

$(function () {
    // 保存按钮原始文字
    $('.form-submit').each(function () {
        $(this).data('original-text', $(this).text());
    });

    // 快速报价表单
    $('#quickForm').on('submit', function (e) {
        e.preventDefault();
        submitQuoteForm('quickForm', '/Quote/QuickQuote', 'quickSuccess');
    });

    // Q&A 表单
    $('#qaForm').on('submit', function (e) {
        e.preventDefault();
        submitQuoteForm('qaForm', '/Quote/PostQA', 'qaSuccess');
    });

    // 产品资讯表单
    $('#pinfoForm').on('submit', function (e) {
        e.preventDefault();
        submitQuoteForm('pinfoForm', '/Quote/PostProductInfo', 'pinfoSuccess');
    });

    // 点击 CTA 卡片切换 Tab
    $('.quote-cta-card.primary').on('click', function () { switchTab('pinfo'); });
    $('.quote-cta-card.secondary').on('click', function () { switchTab('qa'); });
});