`use strict`;

jQuery(document).ready(() => {
    const forms = document.querySelectorAll(`form`)
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener(`submit`, (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add(`was-validated`)
            }, false)
        })
    const backToTop = jQuery(`.back-to-top`);
    const scroller = 200;
    const timeEffect = 600;

    function backToTopPosition() {
        if (jQuery(window).scrollTop() > scroller) {
            backToTop.addClass(`visible`);
        } else {
            backToTop.removeClass(`visible`);
        }
    };
    if (backToTop.length) {
        jQuery(window).on(`scroll`, backToTopPosition);
        backToTopPosition();
    }
    backToTop.on(`click`, () => {
        jQuery(`body, html`)
            .animate({
                scrollTop: `0`
            }, timeEffect);
        return false;
    });

    // ==================================================================================================================
    function screenEffect(event, element) {
        if (!element) {
            element = `body`;
        }
        jQuery(element).find(`.screen`).each((index, dom) => {
            const offset = Math.round(jQuery(window).height() * 0.8);
            if (jQuery(dom).offset().top - jQuery(document).scrollTop() < offset) {
                jQuery(dom).addClass(`screen-show`);
            } else {
                jQuery(dom).removeClass(`screen-show`);
            }
        });
        jQuery(element).find(`.screen-delay`).each((index, dom) => {
            const offset = Math.round(jQuery(window).height());
            if (jQuery(dom).offset().top - jQuery(document).scrollTop() < offset) {
                jQuery(dom).addClass(`screen-show`);
            } else {
                jQuery(dom).removeClass(`screen-show`);
            }
        });
    };

    jQuery(window).on(`scroll`, screenEffect);
    jQuery(window).on(`resize`, screenEffect);
    setTimeout(screenEffect, 0);

    jQuery(`.scroll-to`)
        .each((index, dom) => {
            jQuery(dom)
                .on(`click`, () => {
                    // console.log(jQuery(dom));
                    // console.log(`.${jQuery(dom).data(`target`)}`);
                    jQuery([document.documentElement, document.body])
                        .animate({
                            scrollTop: jQuery(`.${jQuery(dom).data(`target`)}`).offset().top
                        }, 500);
                });
        });

});
