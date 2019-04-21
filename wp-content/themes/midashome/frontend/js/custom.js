(function ($) {
    $(function () {

        $.themecustom_url = $("link[rel=app-themecustom]").data("url");
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
    });
})(jQuery);