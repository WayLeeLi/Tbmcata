// Tab data: id, title, hero image, breadcrumb text
var tabs = {
    'auto': { title: '汽車零配件設計', img: 'https://images.unsplash.com/photo-1580274455191-1c62238fa333?w=1600&q=80', bc: '汽車零配件設計' },
    'moto': { title: '摩托車設計服務', img: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&q=80', bc: '摩托車設計服務' },
    'bike': { title: '自行車設計服務', img: 'https://images.unsplash.com/photo-1485965120184-e220f721d03e?w=1600&q=80', bc: '自行車設計服務' },
    'marine': { title: '船舶外形設計服務', img: 'https://images.unsplash.com/photo-1567899378494-47b22a2ae96a?w=1600&q=80', bc: '船舶外形設計服務' },
    'reverse': { title: '汽車零配件逆向工程', img: 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=1600&q=80', bc: '汽車零配件逆向工程' },
    '3c': { title: '3C 家電', img: 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=1600&q=80', bc: '3C 家電' },
    'life': { title: '生活用品', img: 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1600&q=80', bc: '生活用品' },
    'class-a': { title: '汽車外觀 A 級曲面製作', img: 'https://images.unsplash.com/photo-1542362567-b07e54358753?w=1600&q=80', bc: 'A 級曲面製作' },
    'cad': { title: '正向 CAD', img: 'https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=1600&q=80', bc: '正向 CAD' },
    'mold': { title: '產品開模量產', img: 'https://images.unsplash.com/photo-1565043666747-69f6646db940?w=1600&q=80', bc: '產品開模量產' },
    '3d-rev': { title: '3D 逆向工程服務', img: 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=1600&q=80', bc: '3D 逆向工程服務' }
};

// 注意：由于页面现在使用 AJAX 动态加载，showTab 函数需要重新实现
// 如果不需要旧的 showTab 功能，可以注释掉或删除

function toggleCat(id) {
    var cat = document.getElementById(id);
    if (cat) {
        cat.classList.toggle('open');
    }
}

function toggleMenu() {
    var mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenu) {
        mobileMenu.classList.toggle('open');
    }
}

// Back to top
var btn = document.getElementById('backTop');
if (btn) {
    setInterval(function () {
        var st = window.pageYOffset || document.documentElement.scrollTop || 0;
        if (st > 300) {
            btn.style.opacity = '1';
            btn.style.pointerEvents = 'auto';
        } else {
            btn.style.opacity = '0';
            btn.style.pointerEvents = 'none';
        }
    }, 300);
}

// Navbar
window.addEventListener('scroll', function () {
    var nav = document.getElementById('navbar');
    var st = window.pageYOffset || document.documentElement.scrollTop || 0;
    if (nav) {
        nav.style.background = st > 50 ? 'rgba(17,17,17,0.98)' : 'rgba(17,17,17,0.95)';
    }
});

// 注意：移除了旧的 showTab 和 initTabFromHash 函数
// 因为这些功能现在由视图中的 AJAX 实现