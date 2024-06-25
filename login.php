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
    $page_title = 'Страница авторизации';
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
                                <h1 class="entry__title">Welcome to the Kulseitov Finance login page. Please enter your credentials to access your account.</h1>
                                <p class="entry__desc">Greetings, it is now the opportune moment to engage in trading and generate substantial profits</p>
                            </div>
                            <div class="entry__form">
                                <form class="form">
                                    <div class="form__header">
                                        <div class="form__headerTitle">Sign in</div>
                                        <p class="form__headerDesc">Please provide your login credentials below to begin trading.</p>
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
                                                    <span class="choice__label">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="formLayout__item">
                                                <button type="submit" class="button button--secondary">
                                                    <span class="button__text">Sign in</span>
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
                            <h2 class="section__headerTitle">Round-the-Clock Professional Support<br> (Текстовый блок)</h2>
                            <p class="section__headerDesc">DEDICATED TO YOUR ASSISTANCE</p>
                        </div>
                        <div class="content">
                            <img class="content__img" src="./static/img/content/img.png" width="620" height="462" title="" alt="" loading="lazy">
                            <div class="card">
                                <h3>Principi d'investimento</h3>
                                <p>Questa piattaforma, tuttavia, semplifica la tua incursione nel mare sconfinato dei dati. Evita il rischio di immergerti nelle sue profondità senza una guida e affidati a Bitcoin Up per rivelare con grazia gli appropriati
                                    tesori educativi.</p>

                                <p>Tenendo presente l'odissea educativa dello studente, Bitcoin Up assicura che gli individui non siano assediati dal sovraccarico di informazioni. La nostra attenzione trascende l'enorme volume di contenuti; Veneriamo
                                    la levatura e la pertinenza dell'intelligenza che offriamo.</p>

                                <p>Inoltre, siamo impegnati in un percorso di apprendimento degli investimenti che non sia solo informativo, ma anche accattivante e gratificante. Fungendo da intermediario tra il discepolo e la dottrina, Bitcoin Up trasmuta
                                    l'esperienza educativa in un'esperienza che è allo stesso tempo arricchente e piacevole.</p>
                            </div>
                        </div>
                        <div class="card">
                            <h3>Che cos'è Bitcoin Up?</h3>
                            <ul>
                                <li>Comprehensive Support for All Plans Regardless of your chosen subscription, we are staunch in our belief that every member, be it a beginner trader or an expert of our community, deserves uninterrupted support - 24/7,
                                    365 days a year.</li>
                                <li>Striving for Optimum Satisfaction With an impressive satisfaction rate of 97%, we are always ready to assist when you need us, and are steadfast in our commitment to push that figure as close to perfection as possible.</li>
                                <li>Multilingual Accessibility Immediate Connect is at your disposal in English, Spanish, French, Dutch, and Italian. Freely switch languages at any point and tailor Immediate Connect to your personal preferences.</li>
                            </ul>
                            <p>Nella sua essenza, Bitcoin Up è la fibra connettiva che intreccia menti curiose con regni accademici desiderosi di far luce sulla loro odissea di apprendimento finanziario.</p>
                            <p>In quest'epoca traboccante di dati, l'incursione nell'elaborata rete degli investimenti può intimidire. Per molti, l'ostacolo si estende dalla comprensione dei principi di investimento all'individuazione della genesi del
                                proprio viaggio educativo. Qui sta il ruolo di Bitcoin Up, il tuo navigatore attraverso questo dominio labirintico, ritagliandosi un percorso metodico per demistificare gli enigmi dell'universo finanziario. Iniziate
                                il vostro viaggio con noi, e fate passi sicuri verso la chiarezza.</p>
                            <p>Il viaggio attraverso il vasto panorama della conoscenza degli investimenti può essere formidabile, con una miriade di voci che presentano intuizioni eclettiche, intrise di terminologie complesse e punti di vista sfaccettati.
                                Consenti a Bitcoin Up di agire come il tuo faro costante, tagliando la fitta nebbia di questo viaggio contorto e portando lucidità alle opacità del mondo degli investimenti.</p>
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
                            <h2 class="section__headerTitle">Round-the-Clock Professional Support<br> (Текстовый блок)</h2>
                            <p class="section__headerDesc">DEDICATED TO YOUR ASSISTANCE</p>
                        </div>
                        <div class="content content--reversed">
                            <img class="content__img" src="./static/img/content/img2.jpg" width="620" height="462" title="" alt="" loading="lazy">
                            <div class="card">
                                <h3>Porre la prima pietra di un profondo acume negli investimenti</h3>
                                <p>Considera l'investimento come un viaggio attraverso un mare incommensurabile, assediato da incessanti maree di dati. La vera prova non sta semplicemente nel navigare in queste correnti, ma nel padroneggiarne l'interpretazione.
                                    A Bitcoin Up, guidiamo il tuo corso attraverso la salamoia finanziaria con perspicacia e perspicacia.</p>
                                <p>Proprio come per qualsiasi attività accademica, un quadro educativo metodico è essenziale per la comprensione degli investimenti. Qui non c'è posto per decisioni avventate; Bisogna invece decifrare le dinamiche labirintiche
                                    che spingono i mercati.</p>
                            </div>
                        </div>
                        <div class="card">
                            <h3>Che cos'è Bitcoin Up?</h3>
                            <ul>
                                <li>Comprehensive Support for All Plans Regardless of your chosen subscription, we are staunch in our belief that every member, be it a beginner trader or an expert of our community, deserves uninterrupted support - 24/7,
                                    365 days a year.</li>
                                <li>Striving for Optimum Satisfaction With an impressive satisfaction rate of 97%, we are always ready to assist when you need us, and are steadfast in our commitment to push that figure as close to perfection as possible.</li>
                                <li>Multilingual Accessibility Immediate Connect is at your disposal in English, Spanish, French, Dutch, and Italian. Freely switch languages at any point and tailor Immediate Connect to your personal preferences.</li>
                            </ul>
                            <p>Nella sua essenza, Bitcoin Up è la fibra connettiva che intreccia menti curiose con regni accademici desiderosi di far luce sulla loro odissea di apprendimento finanziario.</p>
                            <p>In quest'epoca traboccante di dati, l'incursione nell'elaborata rete degli investimenti può intimidire. Per molti, l'ostacolo si estende dalla comprensione dei principi di investimento all'individuazione della genesi del
                                proprio viaggio educativo. Qui sta il ruolo di Bitcoin Up, il tuo navigatore attraverso questo dominio labirintico, ritagliandosi un percorso metodico per demistificare gli enigmi dell'universo finanziario. Iniziate
                                il vostro viaggio con noi, e fate passi sicuri verso la chiarezza.</p>
                            <p>Il viaggio attraverso il vasto panorama della conoscenza degli investimenti può essere formidabile, con una miriade di voci che presentano intuizioni eclettiche, intrise di terminologie complesse e punti di vista sfaccettati.
                                Consenti a Bitcoin Up di agire come il tuo faro costante, tagliando la fitta nebbia di questo viaggio contorto e portando lucidità alle opacità del mondo degli investimenti.</p>
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
