// �����ύ��ģ�⣩
function submitForm(e) {
    e.preventDefault();
    var form = document.getElementById('contactForm');
    var success = document.getElementById('formSuccess');
    if (form && success) {
        form.style.display = 'none';
        success.style.display = 'block';
        // ��ѡ���������ɹ���Ϣ
        success.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
}

// ���Զ���
$(function () {
    var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (e, i) {
            if (e.isIntersecting) {
                setTimeout(function () {
                    $(e.target).css({ opacity: 1, transform: 'translateY(0)' });
                }, 60 * i);
                obs.unobserve(e.target);
            }
        });
    }, { threshold: 0.1 });
    $('.info-card, .route-box, .map-section, .contact-right').each(function () {
        obs.observe(this);
    });
    // 通过表单的 data-url 属性获取提交地址
    var $form = $("#contactForm");
    var submitUrl = $form.data("submit-url");

    $form.on("submit", function (e) {
        e.preventDefault();

        // 前端校验
        var userName = $.trim($("input[name='UserName']").val());
        if (userName === "") {
            alert("請輸入姓名！");
            $("input[name='UserName']").focus();
            return;
        }

        var tel = $.trim($("input[name='Tel']").val());
        if (tel === "") {
            alert("請輸入電話！");
            $("input[name='Tel']").focus();
            return;
        }

        var mail = $.trim($("input[name='Mail']").val());
        if (mail === "") {
            alert("請輸入電子信箱！");
            $("input[name='Mail']").focus();
            return;
        } else {
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(mail)) {
                alert("請輸入有效的電子信箱地址！");
                $("input[name='Mail']").focus();
                return;
            }
        }

        var content = $.trim($("textarea[name='Content']").val());
        if (content === "") {
            alert("請輸入諮詢內容！");
            $("textarea[name='Content']").focus();
            return;
        }

        var $btn = $form.find("button[type='submit']");
        $btn.prop("disabled", true).text("送出中...");

        $.ajax({
            url: submitUrl,
            type: "POST",
            data: $form.serialize(),
            dataType: "json",
            success: function (res) {
                if (res.success) {
                    $form.hide();
                    $("#formSuccess").show();
                } else {
                    alert(res.msg);
                    $btn.prop("disabled", false).text("送出訊息");
                }
            },
            error: function () {
                alert("發送失敗，請稍後再試！");
                $btn.prop("disabled", false).text("送出訊息");
            }
        });
    });
});