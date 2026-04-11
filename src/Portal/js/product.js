// 分类标签映射
var catLabel = {
    'vehicle': '交通工具',
    'product': '產品設計',
    'model': '產品模型',
    'award': '得獎作品'
};

var currentCat = 'all';
var lbIndex = 0;
var filteredItems = [];

// 渲染网格
function renderGrid(cat) {
    currentCat = cat;
    filteredItems = cat === 'all'
        ? portfolioData
        : portfolioData.filter(function (i) { return i.cat === cat; });

    var grid = document.getElementById('portfolioGrid');
    var empty = document.getElementById('gridEmpty');
    var showCount = document.getElementById('showCount');

    if (showCount) showCount.textContent = filteredItems.length;

    if (filteredItems.length === 0) {
        if (grid) grid.innerHTML = '';
        if (empty) empty.style.display = 'block';
        return;
    }

    if (empty) empty.style.display = 'none';

    var html = '';
    filteredItems.forEach(function (item, idx) {
        var cls = 'portfolio-item';
        if (item.wide && idx % 5 === 0) cls += ' wide';
        if (item.tall) cls += ' tall';

        html += '<div class="' + cls + '" onclick="openLB(' + idx + ')">'
            + '<img class="portfolio-thumb" src="' + item.img + '" alt="' + escapeHtml(item.name) + '" loading="lazy">'
            + '<div class="portfolio-overlay">'
            + '<div class="portfolio-cat">' + (catLabel[item.cat] || item.cat) + '</div>'
            + '<div class="portfolio-name">' + escapeHtml(item.name) + '</div>'
            + '</div>'
            + '<div class="portfolio-zoom"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg></div>'
            + '</div>';
    });

    if (grid) grid.innerHTML = html;

    // 渐显动画
    setTimeout(function () {
        var items = grid.querySelectorAll('.portfolio-item');
        items.forEach(function (el, i) {
            el.style.transition = 'opacity 0.4s ease ' + (i * 30) + 'ms, transform 0.4s ease ' + (i * 30) + 'ms';
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        });
    }, 10);
}

// 切换分类
function switchCat(cat) {
    var btns = document.querySelectorAll('.tab-btn');
    btns.forEach(function (b) {
        b.classList.remove('active');
    });
    if (event && event.target) {
        event.target.classList.add('active');
    }
    renderGrid(cat);
}

// 打开查看器
function openLB(idx) {
    lbIndex = idx;
    var thumbs = document.getElementById('vThumbs');
    if (thumbs) {
        thumbs.innerHTML = '';
        filteredItems.forEach(function (item, i) {
            var t = document.createElement('img');
            t.className = 'viewer-thumb' + (i === idx ? ' active' : '');
            t.src = item.img;
            t.alt = item.name;
            t.onclick = (function (n) { return function () { vGoTo(n); }; })(i);
            thumbs.appendChild(t);
        });
    }
    showVItem();
    var viewer = document.getElementById('viewer');
    if (viewer) viewer.classList.add('open');
    document.body.style.overflow = 'hidden';
    setTimeout(function () { scrollThumb(idx); }, 50);
}

function showVItem() {
    var item = filteredItems[lbIndex];
    var big = document.getElementById('vBig');
    if (big) {
        big.style.opacity = '0';
        big.src = item.img.replace('w=600', 'w=1400');
        big.onload = function () { big.style.opacity = '1'; };
    }
    var vCat = document.getElementById('vCat');
    var vTitle = document.getElementById('vTitle');
    var vCounter = document.getElementById('vCounter');

    if (vCat) vCat.textContent = catLabel[item.cat] || item.cat;
    if (vTitle) vTitle.textContent = item.name;
    if (vCounter) vCounter.textContent = (lbIndex + 1) + ' / ' + filteredItems.length;

    var thumbs = document.querySelectorAll('.viewer-thumb');
    thumbs.forEach(function (t, i) {
        t.classList.toggle('active', i === lbIndex);
    });
    scrollThumb(lbIndex);
}

function scrollThumb(idx) {
    var thumbs = document.getElementById('vThumbs');
    var thumb = thumbs ? thumbs.children[idx] : null;
    if (thumb) thumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
}

function vGoTo(idx) {
    lbIndex = idx;
    showVItem();
}

function closeViewer() {
    var viewer = document.getElementById('viewer');
    if (viewer) viewer.classList.remove('open');
    document.body.style.overflow = '';
}

function vNav(dir) {
    lbIndex = (lbIndex + dir + filteredItems.length) % filteredItems.length;
    showVItem();
}

function escapeHtml(str) {
    if (!str) return '';
    return String(str).replace(/[&<>]/g, function (m) {
        if (m === '&') return '&amp;';
        if (m === '<') return '&lt;';
        if (m === '>') return '&gt;';
        return m;
    });
}

// 键盘事件
document.addEventListener('keydown', function (e) {
    var viewer = document.getElementById('viewer');
    if (!viewer || !viewer.classList.contains('open')) return;
    if (e.key === 'ArrowLeft') vNav(-1);
    if (e.key === 'ArrowRight') vNav(1);
    if (e.key === 'Escape') closeViewer();
});

// 作品数据（可从后端 AJAX 加载）
var portfolioData = [
    // 交通工具
    { cat: 'vehicle', name: '貨車前臉造型外觀 CAD 製作', img: 'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=600&q=80', wide: true },
    { cat: 'vehicle', name: '電動機車外觀 3D 製作', img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80' },
    { cat: 'vehicle', name: '原廠空力套件外觀 CAD 與機構設計', img: 'https://images.unsplash.com/photo-1580274455191-1c62238fa333?w=600&q=80' },
    { cat: 'vehicle', name: 'SUV 車用登車踏板設計', img: 'https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=600&q=80' },
    { cat: 'vehicle', name: '休旅車外觀空力套件設計開發', img: 'https://images.unsplash.com/photo-1542362567-b07e54358753?w=600&q=80' },
    { cat: 'vehicle', name: '原廠跨界休旅特仕車外觀 CAD 製作', img: 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=600&q=80' },
    { cat: 'vehicle', name: '跨界休旅車空力套件正向 CAD', img: 'https://images.unsplash.com/photo-1549319114-d67887c51aed?w=600&q=80' },
    { cat: 'vehicle', name: '原廠保桿改款正向量產 3D', img: 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?w=600&q=80' },
    { cat: 'vehicle', name: '機車外觀設計範例', img: 'https://images.unsplash.com/photo-1449426468159-d96dbf08f19f?w=600&q=80' },
    { cat: 'vehicle', name: '電動機車整車設計', img: 'https://images.unsplash.com/photo-1558981285-6f0c94958bb6?w=600&q=80' },
    { cat: 'vehicle', name: '自行車外觀設計', img: 'https://images.unsplash.com/photo-1485965120184-e220f721d03e?w=600&q=80' },
    { cat: 'vehicle', name: '電動自行車設計', img: 'https://images.unsplash.com/photo-1571068316344-75bc76f77890?w=600&q=80' },
    // 產品設計
    { cat: 'product', name: '遠端醫療看護商品設計', img: 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=600&q=80', wide: true },
    { cat: 'product', name: '任我夾創意商品設計', img: 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80' },
    { cat: 'product', name: '廚房用品設計', img: 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&q=80' },
    { cat: 'product', name: '電熱產品設計', img: 'https://images.unsplash.com/photo-1522338242992-e1a54906a8da?w=600&q=80' },
    { cat: 'product', name: '智慧型手機周邊商品設計', img: 'https://images.unsplash.com/photo-1601979031925-424e53b6caaa?w=600&q=80' },
    { cat: 'product', name: '創意生活用品設計', img: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=600&q=80' },
    { cat: 'product', name: '電動自行車馬達套件設計', img: 'https://images.unsplash.com/photo-1576435728678-68d0fbf94e91?w=600&q=80' },
    { cat: 'product', name: '電動自行車電池模組設計', img: 'https://images.unsplash.com/photo-1571068316344-75bc76f77890?w=600&q=80' },
    { cat: 'product', name: '3C 消費性電子設計', img: 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=600&q=80' },
    { cat: 'product', name: '單車前變速設計', img: 'https://images.unsplash.com/photo-1485965120184-e220f721d03e?w=600&q=80' },
    // 產品模型
    { cat: 'model', name: '空力套件包圍模型製作', img: 'https://images.unsplash.com/photo-1542362567-b07e54358753?w=600&q=80', wide: true },
    { cat: 'model', name: '原廠廂型車 1:1 全尺寸擬真模型', img: 'https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?w=600&q=80' },
    { cat: 'model', name: '水上救援摩托車比例模型', img: 'https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?w=600&q=80' },
    { cat: 'model', name: '3C 產品外觀 Mockup', img: 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=600&q=80' },
    { cat: 'model', name: '電動機車外觀模型', img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80' },
    { cat: 'model', name: '汽車套件模型試作', img: 'https://images.unsplash.com/photo-1580274455191-1c62238fa333?w=600&q=80' },
    // 得獎作品
    { cat: 'award', name: 'Water Lounge 水陸概念車設計 — 船舶中心遊艇設計競賽優勝', img: 'https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?w=600&q=80', wide: true },
    { cat: 'award', name: 'Jertfoil Bus 概念水陸巴士 — 2014 德國 iF 設計大獎', img: 'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=600&q=80' }
];

// 初始化
$(function () {
    renderGrid('all');
});