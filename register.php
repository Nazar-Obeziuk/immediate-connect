<?php
    require_once 'functions/config.php'; // Подключение конфигурационного файла
    require_once __DIR__ . '/translations.php'; // Глобальные переводы
    $page_lang = "en"; // Ключ языка для переводов
    $menuItems = $translations['menu'][$page_lang];
    $translate = $translations['translate'][$page_lang];
?>
<?php
    // Подключаем функцию генерирующую содержание
    require 'functions/table-contents-generation.php';
    // Здесь код для буферизации и генерации содержания
    ob_start();
?>
<?php
    $page_image = $baseURL . "/static/img/general/promo-og.webp";
    $page_locale = 'en-EN';
    $page_title = 'Страница Регистрации';
    $page_description = 'Page description';
    $page_keywords = '';
    $page_og_title = $page_title;
    $page_og_description = $page_description;
    $page_og_locale = 'en-EN';
    $page_og_image = $page_image;
    $page_og_url = $baseURL;
    $page_twitter_title = $page_title;
    $page_twitter_description = $page_description;
    $page_twitter_image = $page_image;
    $page_twitter_url = $baseURL;
?>
<?php
    // Если используются хлебные крошки, подключаем файл с функцией хлебных крошек
    require_once __DIR__ . '/functions/breadcrumbs.php';
    $currentPath = $_SERVER['REQUEST_URI'];
    $breadcrumbs = generateBreadcrumbs($page_lang, $translations, $currentPath, $page_title);
?>
<!doctype html>
<html lang="<?php echo $page_locale; ?>">
<head>
    <?php require_once __DIR__ . '/layout/head.php'; ?>
</head>
<body>

    <!-- App Begin -->
    <div class="app">

        <!-- App Wrapper Begin -->
        <div class="app__wrapper">

            <?php require_once __DIR__ . '/layout/header.php'; ?>

            <!-- App Main Begin -->
            <main class="app__main">

                <!-- Entry Begin -->
                <section class="entry">
                    <div class="app__container">
                        <div class="entry__container">
                            <div class="entry__content">
                                <?php require_once __DIR__ . '/layout/breadcrumbs.php'; ?>
                                <h1 class="entry__title">Kulseitov Finance Registration page. </h1>
                                <p class="entry__desc">Greetings, it is now the opportune moment to engage in trading and generate substantial profits</p>
                            </div>
                            <div class="entry__form">
                                <form class="form">
                                    <div class="form__header">
                                        <div class="form__headerTitle">New Member?</div>
                                        <p class="form__headerDesc">Register at Bitcoin Up following a few easy steps and start trading. Limited spots!</p>
                                    </div>
                                    <div class="form__body">
                                        <div class="formLayout">
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userFirstNameLabel" for="userFirstName" class="label__text">First name</label>
                                                </div>
                                                <div class="textField">
                                                    <div class="textField__prefix">
                                                        <div class="icon">
                                                            <svg class="icon__svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.0745 2.90991C7.86821 2.90991 6.07452 4.70549 6.07452 6.91413C6.07452 9.08062 7.76716 10.834 9.97347 10.9099C10.0408 10.9015 10.1082 10.9015 10.1587 10.9099C10.1756 10.9099 10.184 10.9099 10.2008 10.9099C10.2093 10.9099 10.2093 10.9099 10.2177 10.9099C12.3735 10.834 14.0661 9.08062 14.0745 6.91413C14.0745 4.70549 12.2808 2.90991 10.0745 2.90991Z"
                                                                      fill="#A1ADCD" />
                                                                <path d="M14.4041 12.9662C12.0262 11.5578 8.14839 11.5578 5.7535 12.9662C4.67111 13.6097 4.07452 14.4805 4.07452 15.4118C4.07452 16.3431 4.67111 17.2063 5.74498 17.8423C6.93816 18.554 8.50634 18.9099 10.0745 18.9099C11.6427 18.9099 13.2109 18.554 14.4041 17.8423C15.4779 17.1987 16.0745 16.3355 16.0745 15.3967C16.066 14.4653 15.4779 13.6022 14.4041 12.9662Z"
                                                                      fill="#A1ADCD" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <input id="userFirstName" class="textField__input" placeholder="First Name" type="text" autocomplete="off" aria-labelledby="userFirstNameLabel" aria-invalid="false">
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userLastNameLabel" for="userLastName" class="label__text">Last name</label>
                                                </div>
                                                <div class="textField">
                                                    <div class="textField__prefix">
                                                        <div class="icon">
                                                            <svg class="icon__svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M10.0745 2.90991C7.86821 2.90991 6.07452 4.70549 6.07452 6.91413C6.07452 9.08062 7.76716 10.834 9.97347 10.9099C10.0408 10.9015 10.1082 10.9015 10.1587 10.9099C10.1756 10.9099 10.184 10.9099 10.2008 10.9099C10.2093 10.9099 10.2093 10.9099 10.2177 10.9099C12.3735 10.834 14.0661 9.08062 14.0745 6.91413C14.0745 4.70549 12.2808 2.90991 10.0745 2.90991Z"
                                                                      fill="#A1ADCD" />
                                                                <path d="M14.4041 12.9662C12.0262 11.5578 8.14839 11.5578 5.7535 12.9662C4.67111 13.6097 4.07452 14.4805 4.07452 15.4118C4.07452 16.3431 4.67111 17.2063 5.74498 17.8423C6.93816 18.554 8.50634 18.9099 10.0745 18.9099C11.6427 18.9099 13.2109 18.554 14.4041 17.8423C15.4779 17.1987 16.0745 16.3355 16.0745 15.3967C16.066 14.4653 15.4779 13.6022 14.4041 12.9662Z"
                                                                      fill="#A1ADCD" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <input id="userLastName" class="textField__input" placeholder="Last Name" type="text" autocomplete="off" aria-labelledby="userLastNameLabel" aria-invalid="false">
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userEmailLabel" for="userEmail" class="label__text">Email</label>
                                                </div>
                                                <div class="textField">
                                                    <div class="textField__prefix">
                                                        <div class="icon">
                                                            <svg class="icon__svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.96223 5.07796C8.6986 4.8539 11.4504 4.8539 14.1868 5.07796L15.5052 5.18591C16.3828 5.25777 17.1345 5.75087 17.5239 6.45621C17.5738 6.54644 17.5364 6.65569 17.4446 6.70923L11.9748 9.89881C10.8016 10.5829 9.32242 10.5972 8.13458 9.93607L2.6282 6.87112C2.53924 6.82161 2.4984 6.71968 2.53849 6.62997C2.89479 5.83271 3.69583 5.26354 4.64388 5.18591L5.96223 5.07796Z"
                                                                      fill="#A1ADCD" />
                                                                <path d="M2.53401 8.25137C2.39786 8.17559 2.22415 8.25714 2.20828 8.40535C1.98678 10.4739 2.04039 12.5621 2.3691 14.6212C2.54239 15.7067 3.48291 16.5388 4.64388 16.6339L5.96223 16.7419C8.6986 16.9659 11.4505 16.9659 14.1868 16.7419L15.5052 16.6339C16.6661 16.5388 17.6067 15.7067 17.7799 14.6212C18.1182 12.5021 18.1652 10.3522 17.9207 8.22456C17.9036 8.0753 17.7269 7.99526 17.5914 8.07428L12.664 10.9475C11.0768 11.8731 9.07551 11.8925 7.46845 10.998L2.53401 8.25137Z"
                                                                      fill="#A1ADCD" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <input id="userEmail" class="textField__input" placeholder="Email" type="text" autocomplete="off" aria-labelledby="userEmailLabel" aria-invalid="false">
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userPhoneLabel" for="userEmail" class="label__text">Phone</label>
                                                </div>
                                                <div class="textField">
                                                    <div class="textField__prefix textField__prefix--country popover">
                                                        <button type="button" class="textField__country" data-popper-toggle="dropdown" data-popper-placement="bottom" data-popper-offset="0, 14" aria-haspopup="true" aria-expanded="false">
                                                            <img src="./static/img/general/flags/ru.svg" width="20" height="20" title="Russian" alt="Russian">
                                                            <span>+7</span>
                                                            <span class="icon">
                                                                <svg class="icon__svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8511 9.38496C14.0952 9.62904 14.0952 10.0248 13.8511 10.2688L10.5178 13.6022C10.2737 13.8463 9.87796 13.8463 9.63388 13.6022L6.30055 10.2688C6.05647 10.0248 6.05647 9.62904 6.30055 9.38496C6.54463 9.14089 6.94036 9.14089 7.18443 9.38496L10.0758 12.2764L12.9672 9.38496C13.2113 9.14088 13.607 9.14088 13.8511 9.38496Z" fill="#707A97"/>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="popover__menu" data-popper-show="false">
                                                            <div class="popover__wrapper">
                                                                <div class="popover__content popover__content--sizeMedium">
                                                                    <div class="actionList">
                                                                        <ul class="actionList__actions" tabindex="-1">
                                                                            <li>
                                                                                <a href="#" class="actionList__item actionList__item--selected">
                                                                                        <span class="actionList__prefix">
                                                                                     <img src="./static/img/general/flags/ru.svg" width="20" height="20" title="Russian" alt="Russian">
                                                                                    </span>
                                                                                    <span class="actionList__text">Россия</span>
                                                                                    <span class="actionList__suffix">+7</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" class="actionList__item">
                                                                                        <span class="actionList__prefix">
                                                                                     <img src="./static/img/general/flags/ru.svg" width="20" height="20" title="Russian" alt="Russian">
                                                                                    </span>
                                                                                    <span class="actionList__text">Германия</span>
                                                                                    <span class="actionList__suffix">+49</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" class="actionList__item">
                                                                                        <span class="actionList__prefix">
                                                                                     <img src="./static/img/general/flags/ru.svg" width="20" height="20" title="Russian" alt="Russian">
                                                                                    </span>
                                                                                    <span class="actionList__text">Турция</span>
                                                                                    <span class="actionList__suffix">+90</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input id="userPhone" class="textField__input" placeholder="(999) 999-99-99" type="text" autocomplete="off" aria-labelledby="userPhoneLabel" aria-invalid="false">
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <label class="choice" for="quasarDemoCheckbox">
                                                        <span class="choice__control">
                                                        <span class="checkbox">
                                                            <input id="quasarDemoCheckbox" type="checkbox" class="checkbox__input" aria-invalid="false" role="checkbox" aria-checked="false">
                                                            <span class="checkbox__backdrop"></span>
                                                        <span class="checkbox__icon">
                                                                <span class="icon">
                                                                    <svg viewBox="0 0 20 20" class="icon__svg" focusable="false" aria-hidden="true"><path d="m8.315 13.859-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path></svg>
                                                                </span>
                                                        </span>
                                                        </span>
                                                        </span>
                                                    <span class="choice__label">By registration I agree and accept <a href="#">Website terms</a> of use and <a href="#">Privacy Policy</a>.</span>
                                                </label>
                                            </div>
                                            <div class="formLayout__item">
                                                <button type="submit" class="button button--secondary">
                                                    <span class="button__text">Register Now</span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/. Entry End -->

                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <h2 class="section__headerTitle">Benefits of Registering at <br>Bitcoin Up</h2>
                        </div>
                        <div class="card">
                            <ul>
                                <li>
                                    <strong>Free account registration</strong>
                                    <br>You can join our community of members for free. No hidden fees! Simply fill out the registration form, and we will transfer you to our reputable partner brokers.
                                </li>
                                <li>
                                    <strong>Quick payouts</strong>
                                    <br>The processing speed would never be an issue! For example, if you decide to withdraw your funds, all the profits you earn will be transferred to your account in no time. All at the click of a button!
                                </li>
                                <li>
                                    <strong>Unique verification system</strong>
                                    <br>To guarantee our members' safety, a strict verification system is part of the trading process to ensure that the information held by the account holder is accurate. Though trading carries risk, the chances of fraud,
                                    payment, and withdrawal delays with us are reduced.
                                </li>
                                <li>
                                    <strong>Great customer support</strong>
                                    <br>Our partners offer a customer service helpdesk that is available 24/7. Whenever you face any difficulty or get stuck somewhere, don't worry - we will root out for you. We take our clients' feedback very seriously
                                    and make sure to listen and excel every chance we get!
                                </li>
                                <li>
                                    <strong>100% transparency</strong>
                                    <br>We believe in maintaining clear communications with our clients and, thus, maintain transparency at every step of the way. We will keep you updated throughout your journey with us on various developments and information
                                    that can help you gain the most from Bitcoin Up.
                                </li>
                                <li>
                                    <strong>Professional brokers</strong>
                                    <br>Enjoy the support of the best broker in your country. Our affiliated partners are licensed brokers who monitor the system and look after your trading activities so that nothing goes wrong.
                                </li>
                                <li>
                                    <strong>Cryptocurrency pairs</strong>
                                    <br>At Bitcoin Up, you will get a chance to set trades using a combination of different currency pairs like BTC/EUR and BTC/USD. Just make sure that the services offered comply with local rules and regulations and start
                                    expanding your portfolio today.
                                </li>
                            </ul>

                        </div>
                        <div class="centered-button">
                            <a href="#" class="button button--primary">
                                <span class="button__text">Join Bitcoin Up Now</span>
                            </a>
                        </div>
                    </div>
                </section>
                <!--/. Section End -->

                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <h2 class="section__headerTitle">The <span>Registration Process</span> Explained</h2>
                            <p class="section__headerDesc">Get started today via the Bitcoin Up app in three simple steps:</p>
                        </div>
                        <div class="steps">
                            <div class="steps__item">
                                <div class="steps__number">1</div>
                                <div class="steps__content">
                                    <h3 class="steps__title">REGISTER</h3>
                                    <p>Registering a new account is fast and straightforward and it takes just a few minutes. As soon as you set a strong password and provide your personal details, you become an active Bitcoin Up member. Then we will
                                        transfer you to a broker who will help you with their one-time account verification process.</p>
                                </div>
                            </div>
                            <div class="steps__item">
                                <div class="steps__number">2</div>
                                <div class="steps__content">
                                    <h3 class="steps__title">FINANCE</h3>
                                    <p>Like any other investment, to begin trading and fetch results, you will have to make a minimum investment. Believe it or not, you can start live trading with as little as $250. A bank account transfer, a wire transfer
                                        or another payment method - you pick!</p>
                                </div>
                            </div>
                            <div class="steps__item">
                                <div class="steps__number">3</div>
                                <div class="steps__content">
                                    <h3 class="steps__title">TRADE</h3>
                                    <p>tart trading at the click of a button. Just make sure you start slow until you learn how to use the platform, or contact support if you need more information about the cryptocurrency assets of your choice. Yet,
                                        if you are a beginner, consult a licensed professional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="safe-data">
                            <div class="safe-data__icon">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.60834 10.6C2.60834 9.77117 2.93758 8.97632 3.52363 8.39027C4.10968 7.80422 4.90454 7.47498 5.73334 7.47498H15.2667C16.0955 7.47498 16.8903 7.80422 17.4764 8.39027C18.0624 8.97632 18.3917 9.77117 18.3917 10.6V15.8333C18.3917 16.6621 18.0624 17.457 17.4764 18.043C16.8903 18.6291 16.0955 18.9583 15.2667 18.9583H5.73334C4.90454 18.9583 4.10968 18.6291 3.52363 18.043C2.93758 17.457 2.60834 16.6621 2.60834 15.8333V10.6ZM5.73334 8.72498C5.23606 8.72498 4.75914 8.92252 4.40751 9.27415C4.05588 9.62578 3.85834 10.1027 3.85834 10.6V15.8333C3.85834 16.3306 4.05588 16.8075 4.40751 17.1591C4.75914 17.5108 5.23606 17.7083 5.73334 17.7083H15.2667C15.764 17.7083 16.2409 17.5108 16.5925 17.1591C16.9441 16.8075 17.1417 16.3306 17.1417 15.8333V10.6C17.1417 10.1027 16.9441 9.62578 16.5925 9.27415C16.2409 8.92252 15.764 8.72498 15.2667 8.72498H5.73334Z"
                                          fill="#10B534" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.96668 3.46915C7.38501 4.12498 6.97334 5.10248 6.97334 6.47748V8.09998C6.97334 8.26574 6.9075 8.42471 6.79028 8.54192C6.67307 8.65913 6.5141 8.72498 6.34834 8.72498C6.18258 8.72498 6.02361 8.65913 5.9064 8.54192C5.78919 8.42471 5.72334 8.26574 5.72334 8.09998V6.47748C5.72334 4.84081 6.21918 3.55498 7.03168 2.63915C7.84001 1.72831 8.92584 1.22498 10.0317 1.08331C12.2067 0.805814 14.6425 1.93581 15.2575 4.36415C15.2809 4.44469 15.2879 4.52912 15.278 4.61241C15.2681 4.69569 15.2415 4.77614 15.1999 4.84894C15.1582 4.92175 15.1023 4.98542 15.0356 5.03618C14.9688 5.08694 14.8925 5.12373 14.8112 5.14438C14.7299 5.16502 14.6453 5.1691 14.5624 5.15635C14.4795 5.1436 14.4 5.1143 14.3287 5.07019C14.2573 5.02608 14.1956 4.96806 14.1471 4.89959C14.0987 4.83112 14.0645 4.7536 14.0467 4.67165C13.6242 3.00665 11.9067 2.10498 10.19 2.32331C9.35001 2.43081 8.55334 2.80831 7.96668 3.46915Z"
                                          fill="#10B534" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.73334 8.09998C5.0703 8.09998 4.43441 8.36337 3.96557 8.83221C3.49673 9.30105 3.23334 9.93693 3.23334 10.6V15.8333C3.23334 16.4964 3.49673 17.1322 3.96557 17.6011C4.43441 18.0699 5.0703 18.3333 5.73334 18.3333H15.2667C15.9297 18.3333 16.5656 18.0699 17.0344 17.6011C17.5033 17.1322 17.7667 16.4964 17.7667 15.8333V10.6C17.7667 9.93693 17.5033 9.30105 17.0344 8.83221C16.5656 8.36337 15.9297 8.09998 15.2667 8.09998H5.73334ZM9.75 14.24C9.75 14.4389 9.82902 14.6297 9.96967 14.7703C10.1103 14.911 10.3011 14.99 10.5 14.99C10.6989 14.99 10.8897 14.911 11.0303 14.7703C11.171 14.6297 11.25 14.4389 11.25 14.24V12.1933C11.25 11.9944 11.171 11.8036 11.0303 11.663C10.8897 11.5223 10.6989 11.4433 10.5 11.4433C10.3011 11.4433 10.1103 11.5223 9.96967 11.663C9.82902 11.8036 9.75 11.9944 9.75 12.1933V14.24Z"
                                          fill="#10B534" />
                                </svg>
                            </div>
                            <div class="safe-data__text">Your data is protected with top-tier encryption</div>
                        </div>
                        <div class="centered-button">
                            <a href="#" class="button button--primary">
                                <span class="button__text">Join Us Now</span>
                            </a>
                        </div>
                    </div>
                </section><!--/. Section End -->

                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <h2 class="section__headerTitle">Frequently Asked Questions version #1</h2>
                            <p class="section__headerDesc">Need more information? Please find some frequently asked questions below, or contact one of our partners' agents who will be happy to answer all your queries in a non-technical way.</p>
                        </div>
                        <div class="faq">
                            <ul class="faq__list" data-accordion>
                                <li class="faq__item">
                                    <button id="faq-header-1" type="button" class="faq__toggle" aria-expanded="false" aria-controls="faq-panel-1" data-accordion-trigger>
                                        <span class="faq__title">What is Bitcoin Up?</span>
                                        <span class="faq__icon"></span>
                                    </button>
                                    <div id="faq-panel-1" class="faq__body" aria-labelledby="faq-header-1" data-accordion-body aria-hidden="true">
                                        <p>Bitcoin Up is a novel marketing tool that allows almost anyone to trade cryptocurrencies with the support of respected brokers. Our partners offer unique live trading features, market analysis, and customer
                                            support.</p>
                                    </div>
                                </li>
                                <li class="faq__item">
                                    <button id="faq-header-2" type="button" class="faq__toggle" aria-expanded="false" aria-controls="faq-panel-2" data-accordion-trigger>
                                        <span class="faq__title">How many hours per day does the user need to work?</span>
                                        <span class="faq__icon"></span>
                                    </button>
                                    <div id="faq-panel-2" class="faq__body" aria-labelledby="faq-header-2" data-accordion-body aria-hidden="true">
                                        <p>Bitcoin Up is a novel marketing tool that allows almost anyone to trade cryptocurrencies with the support of respected brokers. Our partners offer unique live trading features, market analysis, and customer
                                            support.</p>
                                    </div>
                                </li>
                                <li class="faq__item">
                                    <button id="faq-header-3" type="button" class="faq__toggle" aria-expanded="false" aria-controls="faq-panel-3" data-accordion-trigger>
                                        <span class="faq__title">What is the upper limit of earnings?</span>
                                        <span class="faq__icon"></span>
                                    </button>
                                    <div id="faq-panel-3" class="faq__body" aria-labelledby="faq-header-3" data-accordion-body aria-hidden="true">
                                        <p>Bitcoin Up is a novel marketing tool that allows almost anyone to trade cryptocurrencies with the support of respected brokers. Our partners offer unique live trading features, market analysis, and customer
                                            support.</p>
                                    </div>
                                </li>
                                <li class="faq__item">
                                    <button id="faq-header-4" type="button" class="faq__toggle" aria-expanded="false" aria-controls="faq-panel-4" data-accordion-trigger>
                                        <span class="faq__title">How much do I need to pay to become a user of the program?</span>
                                        <span class="faq__icon"></span>
                                    </button>
                                    <div id="faq-panel-4" class="faq__body" aria-labelledby="faq-header-4" data-accordion-body aria-hidden="true">
                                        <p>Bitcoin Up is a novel marketing tool that allows almost anyone to trade cryptocurrencies with the support of respected brokers. Our partners offer unique live trading features, market analysis, and customer
                                            support.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section><!--/. Section End -->

            </main><!--/. App Main End -->

            <?php require_once __DIR__ . '/layout/footer.php'; ?>

        </div><!--/. App Wrapper End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
