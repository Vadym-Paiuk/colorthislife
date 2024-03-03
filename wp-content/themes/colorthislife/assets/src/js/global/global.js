import "jquery-nice-select";
import "jquery-timepicker/jquery.timepicker";

class Global {
    constructor() {
        this.loader();
        this.dropdown();
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }

        return this.instance;
    }

    dropdown() {
        $(document).on('click', '.toggle-dropdown', function (e) {
            e.preventDefault()

            let $btn = $(this),
                $parent = $btn.parent(),
                $dropdown = $parent.find('.dropdown')

            $btn.toggleClass('active')
            $dropdown.slideToggle()

            $('.dropdown').not($dropdown).slideUp();
            $('.toggle-dropdown').not($btn).removeClass('active');
        })

        $(document).on('click', function (event) {
            let $toggleButton = $('.toggle-dropdown'),
                $dropdown = $('.dropdown')

            if ($(event.target).closest('.dropdown').length) {
                return false;
            }

            if ($(event.target).closest('.toggle-dropdown').length) {
                return false;
            }

            if ($(event.target).is('.toggle-dropdown')) {
                return false;
            }

            if (!$dropdown.is(':visible')) {
                return false;
            }

            $dropdown.slideToggle()
            $toggleButton.removeClass('active')
        });
    }

    loader() {
        $.LoadingOverlaySetup({
            background: "rgba(255, 255, 255, 1)",
            imageAutoResize: false,
            fontawesomeAutoResize: false,
            imageResizeFactor: "0.5",
            zIndex: 99999999,
            backgroundClass: "bg-loadingoverlay",
        });
    }
}

$(function () {
    Global.getInstance();
});