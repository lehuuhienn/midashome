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

    function cart_checkout() {
        $(document.body).on('click', '.remove-item', function (e) {
            e.preventDefault();
            var host = $('link[rel=site-themecustom]').data('url'),
                $form = $(".shopping-cart");
            $form.addClass('processing').block({
                message: null,
                overlayCSS: { background: '#fff', opacity: 0.6 }
            });
            $.ajax({
                type: "POST",
                url: host + "/wp-admin/admin-ajax.php",
                data: {
                    action: 'remove_item_from_cart',
                    'cart_item_key': $(this).data('cart-item-key')
                }
            }).done(function (e) {
                $(document.body).trigger('update_checkout');
            }).fail(function (e) {
                console.log(e);
            });
        });

        $(document.body).on('click', '.like-btn', function () {
            $(this).toggleClass('is-active');
        });

        $(document.body).on('click', '.quantity-edit-btn', function (e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if ($this.hasClass('minus-btn')) {
                if (value > 1) {
                    value = value - 1;
                } else {
                    value = 1;
                }
            }
            else {
                if (value < 100) {
                    value = value + 1;
                } else {
                    value = 100;
                }
            }
            $input.val(value);

            var host = $('link[rel=site-themecustom]').data('url'),
                $form = $(".shopping-cart");
            $form.addClass('processing').block({
                message: null,
                overlayCSS: { background: '#fff', opacity: 0.6 }
            });
            $.ajax({
                type: "POST",
                url: host + "/wp-admin/admin-ajax.php",
                data: {
                    action: 'update_item_qty_from_cart',
                    'cart_item_key': $(this).closest('.quantity').data('cart-item-key'),
                    quantity: value
                }
            }).done(function (e) {
                $(document.body).trigger('update_checkout');
            }).fail(function (e) {
                console.log(e);
            });

        });
    }

    $(function () {
        sharejs();
        commment_ajax();
        menu_hover_click();
        cart_checkout();
    });
})(jQuery);