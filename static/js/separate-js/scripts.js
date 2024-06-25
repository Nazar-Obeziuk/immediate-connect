'use strict';

document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | Main Navigation menu
    | https://stackoverflow.com/questions/42714495/menu-active-current-page
    |--------------------------------------------------------------------------
    */

    const mainNavUrl = window.location.href;
    const mainNavLinks = document.querySelectorAll('.navigation__link');

    mainNavLinks.forEach(link => {
        // Удаляем класс активности со всех ссылок
        link.classList.remove('navigation__link--active');

        // Добавляем класс активности только к текущей активной ссылке
        if (mainNavUrl === link.href || mainNavUrl.startsWith(link.href + '/') || mainNavUrl === link.href + '/') {
            link.classList.add('navigation__link--active');
        }
    });

    /*
    |--------------------------------------------------------------------------
    | Deposit Range Slider
    |--------------------------------------------------------------------------
    */

    const depositRangeSlider = document.querySelector("[data-deposit-slider]");
    const depositRangeLabel = document.querySelector("[data-deposit-label]");

    if (depositRangeSlider && depositRangeLabel) {
        const depositMinElement = document.querySelector("[data-deposit-min]");
        const depositMaxElement = document.querySelector("[data-deposit-max]");

        const currencyPrefix = depositRangeSlider.getAttribute("data-currency") || '';
        const minDeposit = depositMinElement ? parseInt(depositMinElement.innerText.replace(currencyPrefix, ''), 10) : 0;
        const maxDeposit = depositMaxElement ? parseInt(depositMaxElement.innerText.replace(currencyPrefix, ''), 10) : 250;
        const startDeposit = parseInt(depositRangeSlider.getAttribute("data-deposit-start") || minDeposit, 10);

        noUiSlider.create(depositRangeSlider, {
            start: [startDeposit],
            connect: 'lower',
            tooltips: true,
            step: 1,
            range: {
                min: [minDeposit],
                max: [maxDeposit]
            },
            format: {
                to: function (value) {
                    return currencyPrefix + Math.round(value);
                },
                from: function (value) {
                    return Number(value.replace(currencyPrefix, ''));
                }
            }
        });

        depositRangeSlider.noUiSlider.on("update", (values) => {
            depositRangeLabel.innerText = values[0];
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Days Range Slider
    |--------------------------------------------------------------------------
    */

    const daysRangeSlider = document.querySelector("[data-days-slider]");
    const daysRangeLabel = document.querySelector("[data-days-label]");

    if (daysRangeSlider && daysRangeLabel) {
        const daysPrefix = daysRangeSlider.getAttribute("data-days-prefix") || '';
        const daysSuffix = daysRangeSlider.getAttribute("data-days-suffix") || '';
        const minDays = parseInt(daysRangeSlider.getAttribute("data-days-min") || 1, 10);
        const maxDays = parseInt(daysRangeSlider.getAttribute("data-days-max") || 90, 10);
        const startDays = parseInt(daysRangeSlider.getAttribute("data-days-start") || minDays, 10);

        noUiSlider.create(daysRangeSlider, {
            start: [startDays],
            connect: 'lower',
            tooltips: {
                to: function(value) {
                    return daysPrefix + Math.round(value) + daysSuffix;
                }
            },
            step: 1,
            range: {
                min: [minDays],
                max: [maxDays]
            },
            format: {
                to: function (value) {
                    return daysPrefix + Math.round(value) + daysSuffix;
                },
                from: function (value) {
                    return Number(value.replace(daysPrefix, '').replace(daysSuffix, ''));
                }
            }
        });

        daysRangeSlider.noUiSlider.on("update", (values) => {
            daysRangeLabel.innerText = daysPrefix + Math.round(values[0]) + daysSuffix;
        });
    }



    /*
    |--------------------------------------------------------------------------
    | Partners Slider
    |--------------------------------------------------------------------------
    */

    const partnersSliderElement = document.querySelector('[data-partners-slider]');
    if (partnersSliderElement) {
        const partnersSlider = new Swiper(partnersSliderElement, {
            speed: 600,
            mousewheel: false,
            loop: true, // Циклическое воспроизведение
            autoplay: {
                delay: 2000, // Задержка между слайдами в миллисекундах
                disableOnInteraction: false, // Автоплей не останавливается при взаимодействии
            },
            autoHeight: true,
            touchRatio: 1,
            spaceBetween: 16,
            slidesPerView: 7,
            breakpoints: {
                1400: {
                    slidesPerView: 7,
                },
                1200: {
                    slidesPerView: 6,
                },
                1170: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 5,
                },
                768: {
                    slidesPerView: 4,
                    touchRatio: 1,
                },
                640: {
                    slidesPerView: 4,
                    touchRatio: 1,
                },
                320: {
                    slidesPerView: 2.5,
                    touchRatio: 1,
                },
            }
        });
    }


    /*
    |--------------------------------------------------------------------------
    | Live Payments Slider
    |--------------------------------------------------------------------------
    */

    const livePaymentSliderElement = document.querySelector('[data-live-payments-slider]');
    if (livePaymentSliderElement) {
        const livePaymentSlider = new Swiper(livePaymentSliderElement, {
            speed: 600,
            mousewheel: false,
            loop: true, // Циклическое воспроизведение
            autoplay: {
                delay: 2000, // Задержка между слайдами в миллисекундах
                disableOnInteraction: false, // Автоплей не останавливается при взаимодействии
            },
            autoHeight: true,
            touchRatio: 1,
            spaceBetween: 16,
            slidesPerView: 'auto',
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Disclaimer Collapse
    |--------------------------------------------------------------------------
    */

    let containerHeight = document.querySelectorAll(".js-spoiler-inner");
    let uncoverLink = document.querySelectorAll(".js-spoiler-more");

    for (let i = 0; i < containerHeight.length; i++) {
        let curHeight = containerHeight[i].dataset.height;
        containerHeight[i].style.maxHeight = curHeight + "px"; // Set initial max height

        uncoverLink[i].addEventListener("click", function() {
            if (containerHeight[i].classList.contains("--open")) {
                containerHeight[i].classList.remove("--open");
                containerHeight[i].style.maxHeight = curHeight + "px";
                uncoverLink[i].classList.remove("--open");
            } else {
                containerHeight[i].classList.add("--open");
                containerHeight[i].removeAttribute("style");
                uncoverLink[i].classList.add("--open");
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | Micromodal
    |--------------------------------------------------------------------------
    */

    MicroModal.init({
        openClass: 'modal--open',
        disableScroll: true,
        disableFocus: true,
        awaitOpenAnimation: true,
        awaitCloseAnimation: true,
        onShow: (modal) => {
            const prevModal = modal.previousElementSibling;
            if (prevModal && prevModal.classList.contains('modal')) {
                MicroModal.close(prevModal.id);
            }
            modal.setAttribute('open', ''); // установка атрибута 'open'
        },
        onClose: (modal) => {
            modal.removeAttribute('open'); // удаление атрибута 'open'
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const button = document.querySelector('button[data-micromodal-trigger]');
        button.addEventListener('click', function() {
            MicroModal.show('modal-id');
        });
    });


});

document.addEventListener('scroll', function() {
    const livePayments = document.querySelector('.live-payments');
    const footer = document.querySelector('.footer');

    if (livePayments && footer) {
        const footerTop = footer.getBoundingClientRect().top;
        const viewportHeight = window.innerHeight;

        if (footerTop <= viewportHeight) {
            livePayments.classList.add('live-payments--hidden');
        } else {
            livePayments.classList.remove('live-payments--hidden');
        }
    }
});

