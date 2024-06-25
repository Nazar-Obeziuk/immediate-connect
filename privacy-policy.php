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
    $page_locale = 'fr-FR';
    $page_title = 'Politique de confidentialité Quantum AI pour la sécurité des données';
    $page_description = "Découvrez la Politique de confidentialité Quantum AI, protégez vos informations, bénéficiez de sécurité renforcée. Cliquez pour en savoir plus!";
    $page_keywords = '';
    $page_og_title = $page_title;
    $page_og_description = $page_description;
    $page_og_locale = 'fr-FR';
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
                            <h1 class="hero__title">Politique de confidentialité</h1>
                            <div class="hero__date">Mise à jour le 25 mai 2024</div>
                        </div>

                    </div>
                </section><!--/. Hero End -->


                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <p>La politique de confidentialité sert de garantie. Elle détaille comment les données sont recueillies, utilisées et sécurisées, affirmant la transparence entre l'utilisateur et le site.</p>
                        </div>
                        <h2>Engagement de protection</h2>
                        <p>Notre site prend au sérieux la confidentialité de vos informations. Nous nous engageons fermement à les sauvegarder et à respecter votre vie privée, assurant une navigation sereine et sécurisée.</p><br>

                        <h3>Utilisation des informations</h3>
                        <p>On fait pas juste collectionner vos infos pour le plaisir. Chaque petit bout que vous partagez avec nous, c'est comme un ingrédient secret pour rendre votre passage chez nous plus sympa, plus fluide. On bricole, on ajuste, toujours à l'affût de ce qui pourrait pimenter votre expérience.</p>
                        <p>C'est un peu comme si vous nous disiez discrètement ce qui vous ferait sourire, et nous, on s'active en coulisse pour transformer le moindre de vos "ah, ce serait chouette si..." en réalité sur notre site. Et quand on plonge dans toutes ces données, c'est pour mieux vous comprendre, pour mieux vous connaître. Comme ça, à chaque fois que vous passez nous voir, c'est pile-poile ce que vous cherchiez qui vous attend.</p><br>

                        <h3>Protection des informations</h3>
                        <p>Quand il s'agit de veiller sur vos infos perso, on ne lésine pas sur les moyens. Imaginez un coffre-fort numérique blindé de toutes parts – c'est un peu ce qu'on vous propose.</p>
                        <p>Pour commencer, on brouille les pistes avec un cryptage costaud. Dès que vos données nous font le grand saut du web jusqu'à nos serveurs, elles sont chiffrées, histoire que les curieux ne puissent pas les intercepter en chemin.</p><br>
                        <p>Ensuite, nos serveurs, c'est la forteresse: sécurité en béton armé, un vrai nid douillet pour vos données. Et l'accès à ce trésor ? On garde ça exclusif. Seuls les agents super qualifiés, ceux qui ont la sécurité data dans le sang, peuvent y jeter un œil, et seulement si c'est vraiment, mais vraiment nécessaire.</p><br>
                        <p>On fait aussi notre petit contrôle technique de temps en temps. Des audits, histoire de s'assurer que tout est bien verrouillé, que rien ne nous échappe.</p>
                        <p>Tout évolue vite dans le monde du numérique, alors nos systèmes aussi. On les bichonne avec les dernières mises à jour pour rester toujours un cran devant ceux qui rôdent.</p><br>
                        <p>Et pour que tout notre équipage soit au top, on ne lésine pas sur la formation. Chez nous, la confi' c'est naturel, c'est dans l'ADN.</p>
                        <p>Vous voilà dans la place, où vos informations sont choyées et bien gardées. Parce que, voyez-vous, votre paix d'esprit, c'est notre priorité numéro un.</p><br>

                        <h2>Utilisation des cookies</h2>
                        <p>Vous savez, les petits biscuits numériques qu'on appelle "cookies" ? Eh bien, ils ne sont pas là que pour faire joli. Chaque fois que vous pointez le bout de votre souris chez nous, ils s'activent en coulisses. Leur mission ? Faire en sorte que votre virée sur notre site soit fluide et taillée sur-mesure. Ils gardent en mémoire ce que vous aimez, allègent les étapes pour que vous trouviez plus vite ce que vous cherchez, et nous, ça nous aide à piger ce qui vous fait vibrer pour que l'on puisse rendre tout ça encore plus chouette la prochaine fois.</p><br>
                        <div class="card">
                            <h3>Gestion des cookies</h3>
                            <p>Vous pouvez gérer les cookies via les paramètres de votre navigateur:</p>
							<ol>
								<li>Accédez à "Options" ou "Préférences".</li>
								<li>Sélectionnez la section "Confidentialité".</li>
								<li>Ajustez vos choix concernant les cookies. Nous vous recommandons de ne pas les désactiver entièrement pour bénéficier de toutes les fonctionnalités du site.</li>
                            </ol>
						</div><br>
                        <h2>Droits des utilisateurs</h2><br>
                        <div class="card">
                            <h3>Consultation et modification des données</h3>
                            <p>En tant qu'utilisateur, vous bénéficiez de droits étendus sur vos données personnelles. Voici comment les exercer:</p>
							<ul>
                                <li><strong>Accès:</strong> Vous avez le droit de consulter les données collectées vous concernant.</li>
                                <li><strong>Rectification:</strong> Si vos données sont inexactes ou incomplètes, vous pouvez exiger qu'elles soient modifiées.</li>
                                <li><strong>Suppression:</strong> Vous pouvez demander la suppression de vos données personnelles de nos bases de données.</li>
                                <li><strong>Limitation:</strong> Dans certaines conditions, vous avez la possibilité de limiter le traitement de vos données.</li>
                                <li><strong>Portabilité:</strong> Vous pouvez recevoir les données que vous nous avez fournies dans un format structuré et les transférer ailleurs.</li>
                            </ul><br>
                            <p>Pour exercer ces droits, suivez généralement l'un dédié à la gestion de la confidentialité directement sur notre plateforme ou contactez notre service client.</p>
						</div><br>
                        <div class="card">
                            <h3>Contact pour les données personnelles</h3>
                            <p>Pour toutes questions ou demandes relatives à vos données personnelles, vous pouvez nous joindre:</p>
							<ol>
								<li>Par e-mail: <a href="mailto:someone@example.com">info@quantum-ai.fr</a></li>
								<li>Via un formulaire en ligne: Trouvé dans la rubrique "Confidentialité" de notre site.</li>
								<li>Par courrier: Adressez une lettre à notre Délégué à la Protection des Données à l'adresse suivante: Société XYZ, Service de Protection des Données, 123 Avenue de la Liberté, 75000 Paris, France.</li>
                            </ol><br>
                            <p>L'exercice de vos droits est un aspect central de notre engagement envers vous. Nous nous efforçons de traiter vos requêtes avec la plus grande attention et dans les meilleurs délais.</p>
						</div><br>

             <!-- Cta Begin -->
             <section class="section" style="padding: 0;">
                    <div class="app__container" style="padding: 0">
                        <div class="cta cta--v2">
                            <div class="cta__content">
                                <h2>Informations de contact</h2>
                                <p>Votre confiance, c'est précieux. On veut que vous vous sentiez à l'aise et en sécurité quand vous utilisez nos services, et on sait bien que ça passe par des échanges francs et faciles. Si un doute vous taraude ou si vous avez des questions sur vos données perso, notre équipe est là, les oreilles grandes ouvertes pour vous apporter des réponses claires et attentives.</p>
                                <p>Besoin de nous parler ? On est tout ouïe ! Une lettre, un e-mail, et hop, on se plonge dans votre demande pour vous donner des réponses rapides et soignées:</p>
                                <ul>
                                    <li>Société XYZ</li>
                                    <li>Service de Protection des Données</li>
                                    <li>12 Rue de l'Intimité</li>
                                    <li>75000 Paris, France</li>
                                </ul>
                                <p>Ou par mail, si ça vous arrange, à privacy@xyz.com. On ne traîne pas les pieds pour vous écrire en retour, soyez-en sûr !</p>
                                <p>
                                Protéger vos infos, ça nous tient à coeur. Après tout, c'est un peu comme si vous nous confiiez les clés de votre jardin secret. Vous comptez sur nous pour garder tout ça bien au chaud et sous cloche, et c'est exactement ce qu'on s'engage à faire.
                                </p>
                            </div>
                            <div class="cta__form">
                                <form class="form">
                                    <div class="form__header">
                                        <div class="form__headerTitle">Inscrivez-vous maintenant</div>
                                        <p class="form__headerDesc">Commencez votre aventure de trading IA en moins de 30 secondes</p>
                                    </div>
                                    <div class="form__body">
                                        <div class="formLayout">
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userFirstNameLabel" for="userFirstName" class="label__text">Prénom</label>
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
                                                    <input id="userFirstName" class="textField__input" placeholder="Prénom" type="text" autocomplete="off" aria-labelledby="userFirstNameLabel" aria-invalid="false">
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userLastNameLabel" for="userLastName" class="label__text">Nom de famille</label>
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
                                                    <input id="userLastName" class="textField__input" placeholder="Nom de famille" type="text" autocomplete="off" aria-labelledby="userLastNameLabel" aria-invalid="false">
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userEmailLabel" for="userEmail" class="label__text">E-mail</label>
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
                                                    <input id="userEmail" class="textField__input" placeholder="E-mail" type="text" autocomplete="off" aria-labelledby="userEmailLabel" aria-invalid="false">
                                                    <div class="textField__backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="formLayout__item">
                                                <div class="label label--hidden">
                                                    <label id="userPhoneLabel" for="userEmail" class="label__text">Téléphone</label>
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
                                                    <span class="choice__label">En m'inscrivant, j'accepte les <a href="#">conditions d'utilisation</a> du site et la <a href="#">politique de confidentialité</a>.</span>
                                                </label>
                                            </div>
                                            <div class="formLayout__item">
                                                <button type="submit" class="button button--secondary">
                                                    <span class="button__text">S'INSCRIRE MAINTENANT</span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section><br>
                <h2>Date de vigueur</h2>
                <p>Chez nous, la sécurité de vos données c'est sacré ! On se fait un devoir de vous briefer sur tout ce qui se trame en coulisse, que ce soit des petits réglages ou de grands bouleversements. Imaginez-nous comme votre ami qui n'a pas sa langue dans sa poche et qui partage tout, sans détour.</p><br>
                <p>Pensez à faire un petit saut ici à l'occasion, juste pour vérifier que tout est en ordre. Après tout, c'est de votre espace personnel qu'il s'agit, et on veut que vous ayez les rennes bien en main, en parfaite connaissance de cause.</p><br>
                <h3>Notifications des modifications</h3>
                <p>On aime garder les choses claires et sans surprise pour vous. Du coup, dès qu'il y a du nouveau, on affiche de grandes pancartes virtuelles et on fait surgir des petits messages pendant que vous surfez sur notre site pour que vous ne manquiez aucune info importante. Et promis, ces petits clins d'œil sont faits pour capter votre regard et vous faciliter la vie, en vous donnant tout ce qu'il faut savoir, directement et simplement.</p><br>
                <p>Si jamais il y a un truc qui vous chiffonne ou que vous avez envie de gratter un peu plus loin, notre porte virtuelle est grande ouverte. Envoyez-nous un petit mot à contact@quantum-ai.fr et on vous répondra dare-dare, avec toute l'attention que vous méritez.</p>
                <!--/. Cta End -->

            </main><!--/. App Main End -->
           
            <?php require_once __DIR__ . '/layout/footer.php'; ?>

        </div><!--/. App Wrapper End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
