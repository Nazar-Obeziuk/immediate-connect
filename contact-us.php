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
    $page_title = 'Страница Контактов';
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
                                <h1 class="entry__title">Contactez nous</h1>
                                <p class="entry__desc">Si vous avez des questions ou des inquiétudes, contactez-nous et nos spécialistes vous aideront à prendre vos décisions commerciales en toute confiance.</p>
                            </div>
                            <div class="entry__form">
                                <form class="form">
                                    <div class="form__header">
                                        <div class="form__headerTitle">Vous souhaitez prendre contact ?</div>
                                        <p class="form__headerDesc">Nous sommes à votre écoute.</p>
                                    </div>
                                    <div class="form__body">
                                        <div class="formLayout">
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userFirstNameLabel" for="userFirstName" class="label__text">Name</label>
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
                                                    <label id="userMessageLabel" for="userMessage" class="label__text">Message</label>
                                                </div>
                                                <div class="textField textField--multiline">
                                                    <textarea id="userMessage" rows="4" placeholder="Message...." class="textField__input" type="text" autocomplete="off" aria-labelledby="userMessageLabel" aria-multiline="true" aria-invalid="false">1776 Barnes Street Orlando, FL 32801</textarea>
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <button type="submit" class="button button--secondary">
                                                    <span class="button__text">Envoyer un message</span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section><!--/. Entry End -->

                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                        <h2>Nous vous invitons à nous rendre visite </h2>.
                        </p> <p>Nous sommes toujours heureux de vous accueillir dans nos bureaux. Vous pouvez nous trouver à l'adresse indiquée sur la carte ci-dessous. Si vous avez des questions, n'hésitez pas à nous contacter par téléphone ou par courrier électronique. Nous nous réjouissons de vous voir !"</p> <p>La Commission européenne est heureuse de vous accueillir dans ses locaux.
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42045.413699596094!2d2.2713479904440224!3d48.804063623002754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67a9ae8e22b73%3A0x78250d47edb0d637!2sLM%20FINANCE%20%26%20COURTAGE!5e0!3m2!1sen!2spl!4v1719084666641!5m2!1sen!2spl"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </section>
                <!--/. Section End -->

            </main><!--/. App Main End -->

            <?php require_once __DIR__ . '/layout/footer.php'; ?>

        </div><!--/. App Wrapper End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
