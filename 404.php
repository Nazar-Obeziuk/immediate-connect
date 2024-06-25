<?php
    require_once 'functions/config.php'; // Подключение конфигурационного файла
    require_once __DIR__ . '/translations.php'; // Глобальные переводы
    $page_lang = "en"; // Ключ языка для переводов
    $menuItems = $translations['menu'][$page_lang];
    $translate = $translations['translate'][$page_lang];
?>
<?php
    if (preg_match('@/ru/@', $_SERVER['REQUEST_URI'])) {
        $page_lang = 'ru';
        $page_locale = 'ru_RU';
        // Установите другие переменные, специфичные для русской локализации
    } elseif (preg_match('@/es/@', $_SERVER['REQUEST_URI'])) {
        $page_lang = 'es';
        $page_locale = 'es_ES';
        // Установите другие переменные, специфичные для испанской локализации
    }
?>
<?php
    $page_image = $baseURL . "/static/img/general/promo-og.webp";
    $page_locale = 'en-EN';
    $page_title = 'Not Found';
    $page_description = 'Not Found';
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
        <div class="app__wrapper">

            <?php require_once __DIR__ . '/layout/header.php'; ?>

            <!-- App Main Begin -->
            <main class="app__main">
                <div class="app__container">

                    <!-- Not Found Begin -->
                    <section class="not-found">
                        <h1 class="not-found__title">404</h1>
                        <h2 class="not-found__subtitle"><?php echo $translate['not_found_title']; ?></h2>
                        <a href="<?php echo $url; ?>/" class="button button--primary">
                            <span class="button__text"><?php echo $translate['not_found_backlink']; ?></span>
                        </a>
                    </section><!--/. Not Found End -->

                </div>
            </main><!--/. App Main End -->

            <!-- Footer Begin -->
            <footer class="app__footer">
                <?php require_once __DIR__ . '/layout/footer.php'; ?>
            </footer>
            <!--/. Footer End -->
        </div>

        <!-- Backdrop Begin -->
        <div class="app__backdrop"></div>
        <!--/. Backdrop End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
