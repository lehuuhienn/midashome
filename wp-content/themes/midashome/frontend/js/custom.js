(function ($) {

    $.themecustom_url = $("link[rel=app-themecustom]").data("url");
    $.site_url = $("link[rel=site-themecustom]").data("url");

    function sharejs() {
        $(".sharejs").jsSocials({
            showCount: false,
            showLabel: false,
            shareIn: "popup",
            shares: [
                { share: "facebook", logo: $.themecustom_url + "img/icons/facebook.png" },
                { share: "email", logo: $.themecustom_url + "img/icons/messenger.png" },
                { share: "twitter", logo: $.themecustom_url + "img/icons/skype.png" },
            ]
        });
    }

    function commment_ajax() {
        var $cmt_form = $("#comment-form-ajax");
        if ($cmt_form.length < 1) return;
        $cmt_form.validate();
        $cmt_form.on("submit", function (e) {
            e.preventDefault();
            if (!$cmt_form.valid()) { return; }

            // AJAX
            $cmt_form.addClass("loading");
            $.ajax({
                type: 'POST',
                url: $.site_url + '/wp-admin/admin-ajax.php',
                data: $cmt_form.serialize() + '&action=ajaxcomments',
            }).done(function (res) {
                $cmt_form.html("<p class='pt-5 text-center text-success'><b>Cảm ơn bạn đã nhận xét về bài viết này. Nhận xét sẽ được kiểm duyệt trước khi hiển thị.</b></p>")
            }).error(function (error) {
                console.log(error);
                alert("Nhận xét lỗi. Vui lòng thử lại sau.")
            }).always(function () {
                $cmt_form.removeClass("loading");
            });
        })
    }

    function menu_hover_click() {
        $("#navbarNavDropdown .nav-item.dropdown .nav-link").on("click", function (e) {
            if ($(window).width() < 992) { return; }
            location.href = this.getAttribute("href");
        })
    }

    $(function () {
        sharejs();
        commment_ajax();
        menu_hover_click();
    });
})(jQuery);