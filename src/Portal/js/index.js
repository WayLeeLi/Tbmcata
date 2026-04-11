$(function () {
    // Hero Slider
    var currentSlide = 0;
    var slides = document.querySelectorAll('.hero-slide');
    var dots = document.querySelectorAll('.hero-dot');

    window.goSlide = function (n) {
        if (slides[currentSlide]) slides[currentSlide].classList.remove('active');
        if (dots[currentSlide]) dots[currentSlide].classList.remove('active');
        currentSlide = n;
        if (slides[currentSlide]) slides[currentSlide].classList.add('active');
        if (dots[currentSlide]) dots[currentSlide].classList.add('active');
    };

    if (slides.length > 0) {
        setInterval(function () {
            goSlide((currentSlide + 1) % slides.length);
        }, 5000);
    }

    // Mobile Menu
    window.toggleMenu = function () {
        document.getElementById('mobileMenu').classList.toggle('open');
    };

    // Navbar bg on scroll
    window.addEventListener('scroll', function () {
        var nav = document.getElementById('navbar');
        var st = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        if (nav) {
            nav.style.background = st > 50 ? 'rgba(17,17,17,0.98)' : 'rgba(17,17,17,0.92)';
        }
    });

    // Back-to-top
    var backBtn = document.getElementById('backTop');
    function updateBackBtn() {
        if (!backBtn) return;
        var st = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
        backBtn.style.opacity = st > 300 ? '1' : '0';
        backBtn.style.pointerEvents = st > 300 ? 'auto' : 'none';
    }
    window.addEventListener('scroll', updateBackBtn);
    setInterval(updateBackBtn, 300);

    // Counter animation
    function animateCount(el, target, ms) {
        if (!el) return;
        var start = null;
        function step(ts) {
            if (!start) start = ts;
            var p = Math.min((ts - start) / ms, 1);
            var ease = 1 - Math.pow(1 - p, 3);
            el.textContent = Math.round(ease * target);
            if (p < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    var statsTriggered = false;
    function tryTriggerStats() {
        if (statsTriggered) return;
        var statsEl = document.querySelector('.hero-stats');
        if (!statsEl) return;
        var rect = statsEl.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            statsTriggered = true;
            document.querySelectorAll('.stat-num[data-target]').forEach(function (el) {
                var countEl = el.querySelector('.count');
                if (countEl) {
                    animateCount(countEl, parseInt(el.dataset.target), 1800);
                }
            });
        }
    }
    window.addEventListener('scroll', tryTriggerStats);
    window.addEventListener('load', function () {
        setTimeout(tryTriggerStats, 600);
    });
    setTimeout(tryTriggerStats, 800);

    // Fade-in cards
    document.querySelectorAll('.service-card, .news-card, .work-item, .recent-item').forEach(function (el) {
        el.style.opacity = '0';
        el.style.transform = 'translateY(24px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    var fadeObs = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.service-card, .news-card, .work-item, .recent-item').forEach(function (el) {
        fadeObs.observe(el);
    });

    // Services slider
    (function () {
        var cur = 0;
        var $track = $('#svcTrack');
        var total = $track.find('.svc-slide').length;

        function svcUpdate(animate) {
            $track.css({
                transition: animate === false ? 'none' : 'transform 0.55s cubic-bezier(0.16,1,0.3,1)',
                transform: 'translateX(' + (-cur * 100) + '%)'
            });
            $('#svcPrev').prop('disabled', cur === 0);
            $('#svcNext').prop('disabled', cur >= total - 1);
            $('#svcDots .slider-dot').removeClass('active').eq(cur).addClass('active');
        }

        window.svcGoTo = function (n) {
            cur = Math.max(0, Math.min(n, total - 1));
            svcUpdate();
        };

        $('#svcPrev').on('click', function () {
            if (cur > 0) {
                cur--;
                svcUpdate();
            }
        });

        $('#svcNext').on('click', function () {
            if (cur < total - 1) {
                cur++;
                svcUpdate();
            }
        });

        var dragStart = 0, dragging = false;
        $('#svcViewport').on('mousedown touchstart', function (e) {
            dragging = true;
            dragStart = e.type === 'touchstart' ? e.originalEvent.touches[0].clientX : e.clientX;
        });

        $(document).on('mouseup touchend', function (e) {
            if (!dragging) return;
            dragging = false;
            var x = e.type === 'touchend' ? e.originalEvent.changedTouches[0].clientX : e.clientX;
            var diff = dragStart - x;
            if (diff > 60 && cur < total - 1) {
                cur++;
                svcUpdate();
            } else if (diff < -60 && cur > 0) {
                cur--;
                svcUpdate();
            }
        });

        svcUpdate(false);
    })();

    // Svc cards stagger entrance
    var svcTriggered = false;
    function checkSvc() {
        if (svcTriggered) return;
        var $layout = $('.svc-layout');
        if (!$layout.length) return;
        if ($(window).scrollTop() + $(window).height() > $layout.offset().top + 80) {
            svcTriggered = true;
            $('.svc-feature-card, .svc-card').each(function (i) {
                var $c = $(this);
                $c.css({ opacity: 0, transform: 'translateY(30px)' });
                setTimeout(function () {
                    $c.css({
                        transition: 'opacity 0.5s ease, transform 0.5s cubic-bezier(0.16,1,0.3,1)',
                        opacity: 1,
                        transform: 'translateY(0)'
                    });
                }, i * 80);
            });
        }
    }

    $(window).on('scroll', checkSvc);
    setTimeout(checkSvc, 300);

    // Section title reveal
    $('.section-title').each(function () {
        var $el = $(this);
        $el.addClass('reveal-text');
        $el.html($el.html().replace(/(<br\s*\/?>)/gi, '|||').split('|||').map(function (line) {
            return '<span class="inner">' + line + '</span>';
        }).join('<br>'));
    });

    function checkReveal() {
        $('.reveal-text').each(function () {
            var top = $(this).offset().top;
            if (top < $(window).scrollTop() + $(window).height() * 0.88) {
                $(this).addClass('revealed');
            }
        });
    }

    $(window).on('scroll', checkReveal);
    setTimeout(checkReveal, 300);

    // Ripple effect
    $('.work-item, .recent-item, .btn-primary, .btn-outline').on('click', function (e) {
        var $el = $(this);
        var off = $el.offset();
        var size = Math.max($el.width(), $el.height()) * 2;
        var x = e.pageX - off.left - size / 2;
        var y = e.pageY - off.top - size / 2;
        var $rip = $('<span class="ripple-effect"></span>').css({
            width: size, height: size, left: x, top: y
        });
        $el.css('position', 'relative').append($rip);
        setTimeout(function () { $rip.remove(); }, 700);
    });

    // Hero stats count-up (jQuery version)
    var statsDone = false;
    function runStats() {
        if (statsDone) return;
        var $stats = $('.hero-stats');
        if (!$stats.length) return;
        var top = $stats.offset().top;
        if ($(window).scrollTop() + $(window).height() > top) {
            statsDone = true;
            $('[data-target]').each(function () {
                var $count = $(this).find('.count');
                var target = parseInt($(this).data('target'));
                $({ n: 0 }).animate({ n: target }, {
                    duration: 1800,
                    easing: 'swing',
                    step: function () { $count.text(Math.ceil(this.n)); },
                    complete: function () { $count.text(target); }
                });
            });
        }
    }

    $(window).on('scroll', runStats);
    setTimeout(runStats, 700);

    // Smooth anchor scroll
    $('a[href="#"]').on('click', function (e) {
        e.preventDefault();
    });
});

// Language Data
var LANG_DATA = {
    zh: {
        nav: ['首頁', '公司簡介', '設計服務', '作品集', '新聞活動', '聯絡我們', '線上詢價'],
        heroEyebrow: 'Professional Design Studio · Since 2009',
        heroTitle: 'Design<br><span class="accent">Beyond</span><br>Limits',
        heroSub: '智匯創新是交通工具與車用配件的全方位外型設計公司，<br>以現代數位方法，從設計概念到工程開發，全程為您創造最高價值。',
        heroBtnA: '探索作品集', heroBtnB: '了解更多',
        statLabels: ['Years Experience', 'Projects Done', 'Awards Won'],
        svcLabel: 'Our Services', svcTitle: '設計服務<br>Service',
        svcDesc: '從交通工具到消費性電子，智匯創新提供完整的工業設計與工程開發服務。',
        ctaTitle: '有設計需求？<br>歡迎與我們聯繫合作', ctaBtn: '立即詢價',
    },
    en: {
        nav: ['Home', 'About', 'Service', 'Portfolio', 'News', 'Contact', 'Get Quote'],
        heroEyebrow: 'Professional Design Studio · Since 2009',
        heroTitle: 'Design<br><span class="accent">Beyond</span><br>Limits',
        heroSub: 'G-wise Design is a full-service design firm specializing in vehicles and automotive accessories.<br>From concept to engineering, we create maximum value for you.',
        heroBtnA: 'Explore Portfolio', heroBtnB: 'Learn More',
        statLabels: ['Years Experience', 'Projects Done', 'Awards Won'],
        svcLabel: 'Our Services', svcTitle: 'Design<br>Service',
        svcDesc: 'From vehicles to consumer electronics, we offer complete industrial design and engineering services.',
        ctaTitle: 'Have a project?<br>Let\'s work together', ctaBtn: 'Get Quote',
    }
};

var currentLang = 'zh';

// Language Switcher
window.setLang = function (lang) {
    currentLang = lang;
    var d = LANG_DATA[lang];
    if (!d) return;

    $('#langZh').toggleClass('active', lang === 'zh');
    $('#langEn').toggleClass('active', lang === 'en');

    var navLinks = $('.nav-links li a');
    d.nav.forEach(function (txt, i) {
        if (navLinks[i]) $(navLinks[i]).text(txt);
    });

    $('.hero-eyebrow-text').text(d.heroEyebrow);
    $('.hero-title').html(d.heroTitle);
    $('.hero-subtitle').html(d.heroSub);

    var btns = $('.hero-actions a');
    if (btns[0]) btns[0].childNodes[0].textContent = d.heroBtnA + ' ';
    if (btns[1]) btns[1].text(d.heroBtnB);

    $('.stat-label').each(function (i) {
        if (d.statLabels[i]) $(this).text(d.statLabels[i]);
    });

    $('#svcSection .section-label-text').text(d.svcLabel);
    $('#svcSection .section-title').html(d.svcTitle);
    $('#svcSection .section-desc').text(d.svcDesc);

    $('.contact-bar-title').html(d.ctaTitle);
    var ctaBtn = $('.btn-white');
    if (ctaBtn.length) ctaBtn.contents().first().text(d.ctaBtn + ' ');

    var mobileTexts = lang === 'zh'
        ? ['首頁 Home', '公司簡介 About', '設計服務 Service', '作品集 Portfolio', '新聞活動 News', '聯絡我們 Contact', '線上詢價 Quotation']
        : ['Home', 'About Us', 'Services', 'Portfolio', 'News', 'Contact', 'Get Quote'];
    $('.mobile-menu a').each(function (i) {
        if (mobileTexts[i]) $(this).text(mobileTexts[i]);
    });
};