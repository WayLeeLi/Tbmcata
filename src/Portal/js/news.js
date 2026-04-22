
// 切换 Tab（新闻/徵才）
function switchTab(tab) {
    var isNews = tab === 'news';
    $('#panelNews').css('display', isNews ? '' : 'none');
    $('#panelHiring').css('display', isNews ? 'none' : '');
    $('#tabNews').toggleClass('active', isNews);
    $('#tabHiring').toggleClass('active', !isNews);
    $('#bcText').text(isNews ? '新聞消息' : '徵才消息');
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

// 页面初始化
$(function () {
    // 默认显示新闻列表（已由服务器渲染）
    // 确保徵才 Tab 隐藏
    $('#panelHiring').hide();
});