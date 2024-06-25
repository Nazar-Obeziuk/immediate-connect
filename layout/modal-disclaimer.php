<!-- Modal Disclaimer Begin -->
<div class="modal modal-disclaimer modal--sizeLarge modal--slide" id="modal-disclaimer" aria-hidden="true">
    <div class="modal__dialog" role="dialog" aria-labelledby="modal-disclaimer-header">
        <div class="modal__header">
            <h2 id="modal-disclaimer-header" class="modal__headerTitle">Disclaimer</h2>
            <button type="button" class="modal__closeButton" aria-label="Закрыть модальное окно" data-micromodal-close>
                <span class="icon icon--sizeMedium icon--applyColor">
                    <svg class="icon__svg" aria-hidden="true">
                        <use xlink:href="/static/img/general/sprite.svg#icon-close"></use>
                    </svg>
                </span>
            </button>
        </div>
        <div class="modal__bodyWrapper">
            <div class="modal__body">
                <div class="modal__section">
                    <div class="modal-disclaimer__wrapper">
                        <div class="modal-disclaimer__img">
                            <img src="./static/img/general/modal-disclaimer.svg" width="169" height="185" title="Disclaimer" alt="Disclaimer">
                        </div>
                        <div class="modal-disclaimer__content js-spoiler-inner" data-height="150">
                            <p>EVERY EFFORT HAS BEEN MADE TO ACCURATELY REPRESENT THIS PRODUCT AND IT’S POTENTIAL. EVEN THOUGH THIS INDUSTRY IS ONE OF THE FEW WHERE ONE CAN WRITE THEIR OWN CHECK IN TERMS OF EARNINGS, THERE IS NO GUARANTEE THAT YOU
                                WILL EARN ANY MONEY USING THE TECHNIQUES AND IDEAS IN THESE MATERIALS. EXAMPLES IN THESE MATERIALS ARE NOT TO BE INTERPRETED AS A PROMISE OR GUARANTEE OF EARNINGS. EARNING POTENTIAL IS ENTIRELY DEPENDENT ON THE
                                PERSON USING OUR PRODUCT, IDEAS AND TECHNIQUES.</p>

                            <p>WE DO NOT PURPORT THIS AS A "GET RICH SCHEME."ANY CLAIMS MADE OF ACTUAL EARNINGS OR EXAMPLES OF ACTUAL RESULTS CAN BE VERIFIED UPON REQUEST. YOUR LEVEL OF SUCCESS IN ATTAINING THE RESULTS CLAIMED IN OUR MATERIALS DEPENDS
                                ON THE TIME YOU DEVOTE TO THE PROGRAM, IDEAS AND TECHNIQUES MENTIONED, YOUR FINANCES, KNOWLEDGE AND VARIOUS SKILLS. SINCE THESE FACTORS DIFFER ACCORDING TO INDIVIDUALS, WE CANNOT GUARANTEE YOUR SUCCESS OR INCOME
                                LEVEL. NOR ARE WE RESPONSIBLE FOR ANY OF</p>

                            <p>The author and publisher disclaim any warranties (express or implied), merchantability, or fitness for any particular purpose. The author and publisher shall in no event be held liable to any party for any direct, indirect,
                                punitive, special, incidental or other consequential damages arising directly or indirectly from any use of this material, which is provided "as is", and without warranties.</p>
                        </div>
                        <button type="button" class="modal-disclaimer__showMoreButton js-spoiler-more">
                            <svg focusable="false" aria-hidden="true">
                                <use xlink:href="/static/img/general/sprite.svg#icon-chevron-down"></use>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal__footer">
            <div class="modal__footerContent">
                <div class="stack stack--alignmentCenter">
                    <div class="stack__item stack__item--fill"></div>
                    <div class="stack__item">
                        <div class="buttonGroup">
                            <div class="buttonGroup__item">
                                <button class="button button--primary" type="button" data-micromodal-close="">
                                    <span class="button__text">Accept</span>
                                </button>
                            </div>
                            <div class="buttonGroup__item">
                                <button class="button button--plain" type="button" data-micromodal-close="">
                                    <span class="button__text">Cancel</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal__backdrop" tabindex="-1" data-micromodal-close></div>
</div><!--/. Modal Disclaimer End -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Проверяем, есть ли запись в localStorage
        const isModalShown = localStorage.getItem('isModalShown');

        if (!isModalShown) {
            // Если записи нет, показываем модальное окно
            setTimeout(() => {
                MicroModal.show('modal-disclaimer', {
                    openClass: 'modal--open',
                    disableScroll: true,
                    disableFocus: true,
                    awaitOpenAnimation: true,
                    awaitCloseAnimation: true,
                    onShow: (modal) => {
                        // Установка атрибута 'open' при открытии модального окна
                        modal.setAttribute('open', '');
                    },
                    onClose: (modal) => {
                        // Удаление атрибута 'open' при закрытии модального окна
                        modal.removeAttribute('open');
                        // Запись в localStorage, чтобы больше не показывать это модальное окно
                        localStorage.setItem('isModalShown', 'true');
                    }
                });
            }, 1000);
        }
    });
</script>