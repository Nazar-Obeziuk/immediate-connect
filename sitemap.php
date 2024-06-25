<?php
    $page_lang = "en";
    $page_crumb_title = "Sitemap";
    $page_locale = 'en-BD';
    $page_title = 'Sitemap html gotop-x.com';
    $page_description = 'Sitemap html gotop-x.com';
    $page_keywords = '';
    $page_og_title = '';
    $page_og_description = '';
    $page_og_locale = 'en-BD';
    $page_og_url = '';
    $page_twitter_title = '';
    $page_twitter_description = '';
    $page_twitter_image = '';
    $page_twitter_url = '';
?>

<?php
    require_once __DIR__ . '/translations.php';
    $menuItems = $translations['menu'][$page_lang];
    $translate = $translations['translate'][$page_lang];
    $footerItems = $translations['footer_menu'][$page_lang];
?>

<?php
    // Если используется, подключаем файл с функцией хлебных крошек
    require_once __DIR__ . '/functions/breadcrumbs.php';
    $currentPath = $_SERVER['REQUEST_URI'];
    $breadcrumbs = generateBreadcrumbs($page_lang, $translations, $currentPath, $page_crumb_title);
?>

<!doctype html>
<html lang="<?php echo $page_locale; ?>">
<head>
    <?php require_once __DIR__ . '/layout/head.php'; ?>
</head>
<body>

    <!-- App Begin -->
    <div class="app app--hasNav app--hasTopBar">

        <!-- Header Begin -->
        <div class="app__topBar">

            <?php require_once __DIR__ . '/layout/header.php'; ?>

        </div>
        <!--/. Header End -->

        <!-- Navigation Begin -->
        <div class="app__navigation" aria-label="Navigation">
            <nav class="navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope>

                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="<?php echo $url; ?>/" class="navigation__link navigation__link--active" itemprop="url" title="Казино">
                            <span class="navigation__icon">
                                <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#A0A4AD" data-id="changed-color" fill-rule="evenodd" d="M3.25 9.5A.75.75 0 0 1 4 8.75h4a.75.75 0 1 1 0 1.5H4.75v5A4.25 4.25 0 0 0 9 19.5h6a4.25 4.25 0 0 0 4.25-4.25v-5H12a.75.75 0 0 1 0-1.5h8a.75.75 0 0 1 .75.75v5.75A5.75 5.75 0 0 1 15 21H9a5.75 5.75 0 0 1-5.75-5.75V9.5ZM5 6.75a.75.75 0 0 0-.75.75.75.75 0 0 1-1.5 0A2.25 2.25 0 0 1 5 5.25h14a2.25 2.25 0 0 1 2.25 2.25.75.75 0 0 1-1.5 0 .75.75 0 0 0-.75-.75H5Z" clip-rule="evenodd"></path><path fill="#A0A4AD" data-id="changed-color" fill-rule="evenodd" d="M7.25 4.805c0-1.375 1.512-2.213 2.678-1.484l2.47 1.543a.75.75 0 1 1-.796 1.272l-2.47-1.543a.25.25 0 0 0-.382.212v.445a.75.75 0 0 1-1.5 0v-.445Z" clip-rule="evenodd"></path><path fill="#A0A4AD" data-id="changed-color" fill-rule="evenodd" d="M16.75 4.805c0-1.375-1.512-2.213-2.678-1.484l-2.47 1.543a.75.75 0 1 0 .796 1.272l2.47-1.543a.25.25 0 0 1 .382.212v.445a.75.75 0 0 0 1.5 0v-.445Z" clip-rule="evenodd"></path><path fill="var(--topx-primary)" fill-rule="evenodd" d="M10 8.75a.75.75 0 0 1 .75.75v3.287l.915-.458a.75.75 0 0 1 .67 0l.915.457V11.25a.75.75 0 0 1 1.5 0V14a.75.75 0 0 1-1.085.67L12 13.839l-1.665.833A.75.75 0 0 1 9.25 14V9.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd"></path></svg>
                            </span>
                            <span class="navigation__text" itemprop="name">Home</span>
                        </a>
                    </li>
                </ul>

                <div class="navigation__divider"></div>
                <div class="lang-selector">
                    <button type="button" class="lang-selector__button" aria-label="Change language" data-micromodal-trigger="modal-language">
                        <span class="lang-selector__flag">
                            <img src="./static/img/general/flags/bd.svg" width="20" height="20" title="Bangladesh" alt="Bangladesh">
                        </span>
                        <span class="lang-selector__text">English</span>
                        <span class="lang-selector__icon">
                            <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16"><path fill="#fff" fill-rule="evenodd" d="M3.078 5.744a.833.833 0 0 1 1.178 0L8 9.488l3.744-3.744a.833.833 0 0 1 1.179 1.179l-4.334 4.333a.833.833 0 0 1-1.178 0L3.078 6.923a.833.833 0 0 1 0-1.179Z" clip-rule="evenodd"></path></svg>
                        </span>
                    </button>
                </div>
                <div class="navigation__divider"></div>
                <div class="support">
                    <div class="support__inner">
                        <div class="support__title">Support 24/7</div>
                        <a href="/play/" class="button button--sizeLarge support__button" target="_blank" rel="nofollow noindex">
                            <span class="button__icon">
                                <span class="icon">
                                    <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none"><path fill="#fff" fill-rule="evenodd" d="M2.93 5.17c-.18.526-.18 1.177-.18 2.48v8.305c0 .652 0 .978.086 1.153a.833.833 0 0 0 1.015.42c.184-.063.415-.293.876-.754.374-.374.56-.561.767-.712a3.334 3.334 0 0 1 1.462-.606c.253-.039.517-.039 1.046-.039h5.015c1.303 0 1.955 0 2.48-.18a3.334 3.334 0 0 0 2.073-2.074c.18-.524.18-1.176.18-2.48V7.65c0-1.303 0-1.954-.18-2.48a3.333 3.333 0 0 0-2.074-2.073c-.524-.18-1.176-.18-2.48-.18H7.484c-1.303 0-1.954 0-2.48.18A3.333 3.333 0 0 0 2.93 5.17Zm3.57 5.247a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Zm5-1.25a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0Zm2.5 1.25a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z" clip-rule="evenodd"></path></svg>
                                </span>
                            </span>
                            <span class="button__text">Chat with support</span>
                        </a>
                    </div>
                </div>
                <ul class="social social--navigation">
                    <li class="social__item">
                        <a href="/play/" rel="noopener" target="_blank" class="social__link social__link--telegram">
                            <span class="visually-hidden">Topx telegram</span>
                            <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#telegram-gradient)">
                                    <path d="M9.55367 19.1487C8.84467 19.1487 8.96567 18.8817 8.72067 18.2067L6.63867 11.3547L22.6667 1.8457" fill="#C8DAEA" />
                                    <path d="M9.55273 19.1482C10.0987 19.1482 10.3397 18.8982 10.6447 18.6022L13.5587 15.7682L9.92373 13.5762" fill="#A9C9DD" />
                                    <path d="M9.9245 13.5779L18.7325 20.0849C19.7375 20.6399 20.4625 20.3519 20.7125 19.1519L24.2985 2.25692C24.6655 0.784919 23.7385 0.116919 22.7765 0.553919L1.7235 8.67192C0.286501 9.24792 0.293501 10.0499 1.4615 10.4069L6.8635 12.0939L19.3715 4.20192C19.9615 3.84292 20.5045 4.03592 20.0595 4.43092"
                                          fill="url(#paint0_linear_2488_27628)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_2488_27628" x1="1569.26" y1="871.567" x2="1910.35" y2="1648.72" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#EFF7FC" />
                                        <stop offset="1" stop-color="white" />
                                    </linearGradient>
                                    <clipPath id="telegram-gradient">
                                        <rect width="25" height="21" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="/play/" rel="nofollow noindex" target="_blank" class="social__link social__link--youtube">
                            <span class="visually-hidden">Topx youtube</span>
                            <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="--vicon-with-gradient-problem__size: 14px;">
                                <path d="M21.067 2.45A2.631 2.631 0 0019.217.6C17.573.15 11 .15 11 .15s-6.573 0-8.217.432a2.685 2.685 0 00-1.85 1.869C.5 4.094.5 7.5.5 7.5s0 3.426.432 5.052a2.63 2.63 0 001.851 1.85c1.661.45 8.217.45 8.217.45s6.573 0 8.217-.432a2.631 2.631 0 001.85-1.851c.433-1.643.433-5.051.433-5.051s.017-3.425-.433-5.068z"
                                      fill="#fff"></path>
                                <path d="M14.373 7.501L8.907 4.353v6.296l5.466-3.148z" fill="#F96057"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="/play/" rel="nofollow noindex" target="_blank" class="social__link social__link--vk">
                            <span class="visually-hidden">Topx vk</span>
                            <svg width="22" height="20" viewBox="0 0 22 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="--vicon-with-gradient-problem__size: 21px;">
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <g fill="#FFF">
                                            <path d="M10.762 16.502h1.315s.398-.044.6-.263c.187-.2.181-.578.181-.578s-.025-1.766.793-2.024c.808-.256 1.845 1.706 2.943 2.46.831.57 1.463.446 1.463.446l2.939-.041s1.537-.095.808-1.304c-.06-.1-.424-.894-2.185-2.528-1.843-1.71-1.596-1.434.624-4.392 1.352-1.801 1.892-2.901 1.723-3.372-.161-.449-1.156-.33-1.156-.33l-3.308.02a.751.751 0 00-.424.076c-.178.107-.292.353-.292.353s-.524 1.395-1.222 2.58c-1.473 2.502-2.063 2.635-2.303 2.479-.56-.362-.42-1.455-.42-2.23 0-2.425.367-3.436-.716-3.698-.36-.086-.625-.141-1.545-.153-1.18-.013-2.18.003-2.745.282-.376.185-.667.595-.49.619.219.029.714.133.977.49.34.462.327 1.498.327 1.498s.195 2.855-.455 3.209c-.446.243-1.06-.253-2.371-2.523-.446-.79-.84-1.608-1.181-2.448a.983.983 0 00-.273-.37 1.367 1.367 0 00-.508-.205l-3.144.021s-.472.014-.645.22c-.154.183-.012.56-.012.56s2.46 5.761 5.247 8.658c2.558 2.664 5.455 2.489 5.455 2.489"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="/play/" rel="nofollow noindex" target="_blank" class="social__link social__link--instagram">
                            <span class="visually-hidden">Topx instagram</span>
                            <svg viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="--vicon-with-gradient-problem__size: 21px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.171.063C7.291.011 7.648 0 10.5 0c2.852 0 3.21.012 4.328.063 1.119.05 1.882.23 2.55.488.7.264 1.335.677 1.86 1.212a5.129 5.129 0 011.21 1.859c.26.668.438 1.431.489 2.548.051 1.122.063 1.479.063 4.33 0 2.852-.012 3.21-.063 4.329-.05 1.117-.23 1.88-.489 2.549a5.15 5.15 0 01-1.21 1.86 5.149 5.149 0 01-1.86 1.21c-.668.26-1.431.438-2.548.489-1.12.051-1.478.063-4.33.063-2.852 0-3.21-.012-4.329-.063-1.117-.05-1.88-.23-2.549-.489a5.152 5.152 0 01-1.86-1.21 5.147 5.147 0 01-1.211-1.86C.292 16.71.115 15.947.063 14.83.011 13.708 0 13.35 0 10.5c0-2.852.012-3.21.063-4.328.05-1.119.23-1.882.488-2.55a5.15 5.15 0 011.212-1.86A5.147 5.147 0 013.622.551C4.29.292 5.053.115 6.17.063h.001zm8.572 1.89c-1.107-.05-1.44-.061-4.243-.061-2.803 0-3.136.01-4.243.061-1.024.047-1.58.218-1.95.362-.49.19-.84.417-1.208.784a3.257 3.257 0 00-.784 1.208c-.144.37-.315.926-.362 1.95-.05 1.107-.061 1.44-.061 4.243 0 2.803.01 3.136.061 4.243.047 1.024.218 1.58.362 1.95.168.455.436.869.784 1.208a3.26 3.26 0 001.208.784c.37.144.926.315 1.95.362 1.107.05 1.439.061 4.243.061 2.805 0 3.136-.01 4.243-.061 1.024-.047 1.58-.218 1.95-.362.49-.19.84-.417 1.208-.784a3.26 3.26 0 00.784-1.208c.144-.37.315-.926.362-1.95.05-1.107.061-1.44.061-4.243 0-2.803-.01-3.136-.061-4.243-.047-1.024-.218-1.58-.362-1.95a3.26 3.26 0 00-.784-1.208 3.258 3.258 0 00-1.208-.784c-.37-.144-.926-.315-1.95-.362zM9.159 13.737a3.503 3.503 0 102.521-6.535 3.503 3.503 0 00-2.521 6.535zM6.684 6.684a5.397 5.397 0 117.632 7.632 5.397 5.397 0 01-7.632-7.632zm10.41-.777a1.277 1.277 0 10-1.752-1.857 1.277 1.277 0 001.752 1.857z"
                                      fill="#fff"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--/. Navigation End -->

        <!-- Frame Main Begin -->
        <main role="main" class="app__main">
            <div class="app__content">

                <?php require_once __DIR__ . '/layout/entry.php'; ?>

                <?php require_once __DIR__ . '/layout/promotions-mobile.php'; ?>

                <?php require_once __DIR__ . '/layout/breadcrumbs.php'; ?>

                <section class="sitemap">
                    <ul class="sitemap__list">
                        <li class="sitemap__item">
                            <a href="<?php echo $url; ?>/" class="sitemap__link">
                                Home
                                <svg class="sitemap__icon" aria-hidden="true">
                                    <use xlink:href="/static/img/general/sprite.svg#icon-arrow-right"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </section>

            </div>
        </main><!--/. Frame End -->

        <!-- Footer Begin -->
        <footer class="app__footer">
            <?php require_once __DIR__ . '/layout/footer.php'; ?>
        </footer>
        <!--/. Footer End -->

        <!-- Backdrop Begin -->
        <div class="app__backdrop"></div>
        <!--/. Backdrop End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
