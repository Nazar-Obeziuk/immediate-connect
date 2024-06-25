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
    $page_title = 'Текстовая страница';
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

                <!-- Hero Begin -->
                <section class="hero">
                    <div class="app__container">

                        <?php require_once __DIR__ . '/layout/breadcrumbs.php'; ?>

                        <div class="hero__content">
                            <h1 class="hero__title">How to Start Making Extra Income</h1>
                            <div class="hero__date">Updated on May 11, 2023</div>
                        </div>

                    </div>
                </section><!--/. Hero End -->


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
