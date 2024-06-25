<!-- Modal Language Begin -->
<div class="modal modal--footerHidden modal--slide" id="modal-language" aria-hidden="true">
    <div class="modal__dialog" role="dialog" aria-labelledby="modal-lang-header">
        <div class="modal__header">
            <div id="modal-lang-header" class="modal__headerTitle"><?php echo $translate['modal_language_title']; ?></div>
            <button type="button" class="modal__closeButton" aria-label="<?php echo $translate['modal_close_button_aria_text']; ?>" data-micromodal-close>
                <span class="icon icon--sizeMedium icon--colorSubdued">
                    <svg class="icon__svg" aria-hidden="true">
                        <use xlink:href="/static/img/general/sprite.svg#icon-close"></use>
                    </svg>
                </span>
            </button>
        </div>
        <div class="modal__bodyWrapper">
            <div class="modal__body">
                <div class="modal__section">
                    <ul class="lang-list" tabindex="-1">
                        <li class="lang-list__item lang-list__item--selected">
                            <a href="#" class="lang-list__link">
                                <span class="lang-list__prefix">
                                    <img src="./static/img/general/flags/ru.svg" width="24" height="16" title="" alt="">
                                </span>
                                <div class="lang-list__desc">
                                    <div class="lang-list__title">Русский</div>
                                    <div class="lang-list__subtitle">Русский</div>
                                </div>
                                <svg class="lang-list__suffix" viewBox="0 0 11 8" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img">
                                    <path d="M8.873.335a.986.986 0 111.482 1.302L5.128 7.582a.986.986 0 01-1.4.081L.324 4.594A.986.986 0 011.647 3.13l2.66 2.4L8.873.335z"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="lang-list__item">
                            <a href="#" class="lang-list__link">
                                <span class="lang-list__prefix">
                                    <img src="./static/img/general/flags/ru.svg" width="24" height="16" title="" alt="">
                                </span>
                                <div class="lang-list__desc">
                                    <div class="lang-list__title">Русский</div>
                                    <div class="lang-list__subtitle">Русский</div>
                                </div>
                                <svg class="lang-list__suffix" viewBox="0 0 11 8" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img">
                                    <path d="M8.873.335a.986.986 0 111.482 1.302L5.128 7.582a.986.986 0 01-1.4.081L.324 4.594A.986.986 0 011.647 3.13l2.66 2.4L8.873.335z"></path>
                                </svg>
                            </a>
                        </li>					
                    </ul>
                </div>
            </div>
        </div>
        <div class="modal__footer">
            <div class="modal__footerContent">
                <button type="button" class="button button--primary button--fullWidth" aria-label="<?php echo $translate['modal_close_button_aria_text']; ?>" data-micromodal-close>
                    <span class="button__text"><?php echo $translate['modal_close_button_text']; ?></span>
                </button>
            </div>
        </div>
    </div>
    <div class="modal__backdrop" tabindex="-1" data-micromodal-close></div>
</div><!--/. Modal Language End -->

