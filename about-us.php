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
    $page_title = 'Quantum AI: Vers une Nouvelle Ère Technologique';
    $page_description = "Découvrez comment l'intelligence artificielle quantique révolutionne nos capacités de calcul et ouvre des horizons inédits pour l'analyse de données.";
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
                            <h1 class="hero__title">À propos de nous</h1>
                            <div class="hero__date">Mise à jour le 11 mai 2024</div>
                        </div>

                    </div>
                </section><!--/. Hero End -->


                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <h2 class="section__headerTitle">Introduction à Quantum AI</h2>
                            <p class="section__headerDesc">Quantum AI se positionne comme une référence incontournable dans le domaine foisonnant de la crypto-monnaie.</p><br>
                            <p>Né d'une ambition de démystifier les investissements en monnaies numériques, quantum-ai.fr offre une plateforme fiable et éducative, destinée tant aux néophytes qu'aux investisseurs aguerris. Son origine, solidement ancrée dans l'expertise technologique, lui confère une légitimité appréciée par sa communauté. Le site brille par ses évaluations exhaustives, ses analyses pertinentes et ses conseils stratégiques, faisant de lui un pilier populaire pour quiconque cherche à naviguer le marché dynamique de la crypto-monnaie avec clairvoyance et confiance.</p>
                        </div>
                        <div class="content">
                            <img class="content__img" src="./static/img/content/img.png" width="620" height="462" title="" alt="" loading="lazy">
                            <div class="card">
                            <h3>Informations utiles</h3>
                            <p>Quantum-ai.fr évalue les plateformes de crypto-monnaies selon une méthodologie rigoureuse et transparente, comprenant:</p>
							<ul>
								<li>Utilisabilité: Interface intuitive et facilité de navigation.</li>
								<li>Variété des Cryptomonnaies: Large gamme de monnaies numériques.</li>
								<li>Bonus: Offres promotionnelles et avantages pour les utilisateurs.</li>
								<li>Sécurité: Mesures de protection des données et des fonds.</li>
							</ul>

							<p>Chaque critère est scrupuleusement examiné pour assurer un classement objectif et fiable, permettant aux utilisateurs de faire des choix éclairés dans le dynamique univers de la crypto-monnaie.</p>
						</div>
                        </div>
                        <div class="card">
                            <h3>Qu'est-ce que Quantum AI?</h3>
                            <p>Quantum AI se dédie à servir son public avec une expertise pointue dans l'évaluation des plateformes de crypto-monnaies:</p>
                            <ul>
                                <li>Innovation: Application des dernières avancées en intelligence artificielle quantique pour analyser le marché.</li>
                                <li>Éducation: Fournir des ressources pédagogiques pour démystifier la blockchain et l'investissement en crypto-monnaies.</li>
                                <li>Transparence: Evaluer de manière impartiale les plateformes, soulignant les avantages et les inconvénients.</li>
                                <li>Support: Accompagner les utilisateurs dans leurs décisions d'investissement grâce à des conseils experts et actualisés.</li>
                            </ul>
                            <p>Notre mission est d'éclairer nos utilisateurs avec des informations précises, les aidant à naviguer le paysage complexe des investissements numériques.</p>
                        </div>
                        <div class="centered-button">
                            <a href="#" class="button button--primary">
                                <span class="button__text">Rejoindre Bitcoin Up maintenant</span>
                            </a>
                        </div>
                    </div>
                </section>
                <!--/. Section End -->

                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <h2 class="section__headerTitle">Pourquoi nous sommes fiables</h2>
                        </div>
                        <div class="content content--reversed">
                            <img class="content__img" src="./static/img/content/Quantum-AI-fra.webp" width="620" height="462" title="" alt="" loading="lazy">
                            <div class="card">
								<p>Quantum AI gagne la confiance de ses utilisateurs grâce à:</p>
                                <ul>
								<li>Analyses d'Experts: Des spécialistes en crypto-monnaies offrent des perspectives aiguisées et professionnelles.</li>
								<li>Témoignages Vérifiés: Des retours authentiques d'utilisateurs qui attestent de la qualité de notre service.</li>
								<li>Expérience Éprouvée: Plusieurs années d'activité dans le secteur nous confèrent une connaissance approfondie et une expertise reconnue.</li>
								<li>Mise à Jour Continue: Une veille constante pour rester à la pointe des tendances et des évolutions du marché.</li>										
							</ul>

							<p>Ces aspects font de Quantum AI une source de confiance pour tout ce qui concerne le choix et l'évaluation des plateformes de crypto-monnaies.</p>
							</div>
                        </div>
                        <div class="card">
                            <h3>Avantages et fonctionnalités de Quantum AI</h3>
                            <p>Quantum AI apporte à ses utilisateurs une gamme d'avantages et de fonctionnalités incontournables:</p>
							<ul>
								<li>Bonus Exclusifs: Accès à des promotions spéciales négociées pour notre communauté.</li>
								<li>Analyses Détaillées: Reviews approfondies de plateformes, centrées sur l'expérience utilisateur et la performance.</li>
								<li>Actualités en Temps Réel: Flux d'informations constant pour rester informé des dernières évolutions du marché.</li>
								<li>Outils Innovants: Utilisation d'IA quantique pour des prévisions de marché précises.</li>
								<li>Support Responsive: Assistance utilisateurs réactive et personnalisée.</li>	
							</ul>

							<p>Grâce à ces caractéristiques, Quantum AI devient votre partenaire idéal pour investir dans le monde des crypto-monnaies.</p>
						</div>
                        <div class="centered-button">
                            <a href="#" class="button button--primary">
                                <span class="button__text">Rejoignez Bitcoin Up maintenant</span>
                            </a>
                        </div>
                    </div>
                </section>
                <!--/. Section End -->

                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="content content--reversed">
                            <img class="content__img" src="./static/img/content/img2.jpg" width="620" height="462" title="" alt="" loading="lazy">
                            <div class="card">
                                <h3>Notre processus de vérification</h3>
                                <p>Chez quantum-ai.fr, chaque évaluation de plateforme de crypto-monnaies est le fruit d’un processus méticuleux visant à assurer transparence et impartialité. Nous débutons par une immersion totale dans la plateforme, explorant chaque recoin pour vous fournir un tableau fidèle de son fonctionnement. Les performances sont ensuite mesurées par des benchmarks rigoureux, tandis que la facilité d'utilisation est jugée à travers le prisme de l’expérience utilisateur. Les niveaux de sécurité sont scrutés avec une attention particulière, sans oublier l'analyse des services et supports proposés. Ce processus détaillé nous permet d'assurer une vue d'ensemble impartiale et approfondie.</p>
                            </div>
                        </div>
                        <div class="card">
                            <h3>Support</h3>
                            <p>Chez Quantum AI, on se donne à 100% pour que vous ayez une expérience qui déchire avec nous, et ça passe par un accès direct et super facile à notre équipe super sympa pour la moindre petite ou grosse question que vous pourriez avoir:</p>
                            <ul>
                                <li>Potez-nous un mail: Lancez-nous un message à contact@quantum-ai.fr et bam ! On vous répond illico presto. Pas de blabla, que du concret.</li>
                                <li>Chattez avec nous: Si vous êtes du genre 'j'en ai besoin maintenant', notre chat en direct est là pour ça. Cliquez, tapotez, et nous voilà en train de papoter. Comme au café, mais en mieux.</li>
                                <li>On est aussi là où vous êtes: Twitter, Insta, Facebook... suivez notre vibe sur les réseaux, et n'hésitez pas à nous interpeller. On est là pour ça aussi!</li>
                            </ul>
                            <p>On a mis le paquet pour que ce soit ultra simple de nous parler. Parce que ce qui nous tient à cœur, c'est d'écouter ce que vous avez à dire et de rendre votre expérience aussi cool que possible. Alors, lancez-vous, on est prêts et on vous attend !</p>
                        </div>
                        <div class="centered-button">
                            <a href="#" class="button button--primary">
                                <span class="button__text">Rejoindre Bitcoin Up maintenant</span>
                            </a>
                        </div>
                    </div>
                </section>
                <!--/. Section End -->

                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="card">
                            <h3>Licence officielle</h3>
                            <p>Quantum AI opère sous une licence officielle qui certifie sa conformité aux réglementations en vigueur. Cela témoigne de notre dévouement à fournir des évaluations éthiques et légalement fondées, assurant ainsi un environnement de confiance pour nos utilisateurs dans l'univers des crypto-monnaies.</p>
						</div>
                        <br>
                        <div class="card">
                            <h3>Sécurité et utilisation responsable</h3>
							<p>Chez Quantum AI, la sécurité, c'est notre dada. On prend ça très au série dans le monde bouillonnant des cryptos. C'est super important pour nous de vous tenir au jus sur les meilleurs moyens de protéger votre gré à gré numérique. Ça va de choisir un porte-monnaie électronique de premier choix jusqu'à activer la vérif' double facteur (oui, on sait, c'est un peu relou mais promis, ça vaut le coup). Et on n'oublie pas de garder un œil vigilant sur ce qui passe avec vos finances.</p>

                            <p>En plus, on veut que vous vous lanciez dans les cryptos la tête haute et les idées claires. Le marché, c'est un peu les montagnes russes, donc pas de clics sur un coup de tête. On est là pour vous filer tout le matos éducatif dont vous avez besoin, décortiquer la moindre tendance pour que vous surfiez sur la vague en connaissant bien votre sujet. On vous balise le terrain pour que vous investissiez en toute sérénité. Bref, Quantum AI, c'est votre co-pilote pour un voyage futé et sécurisé dans l'espace crypto. Soyez curieux, posez des questions, et surtout, restez smart!</p>
					    </div>
                        <div class="centered-button">
                            <a href="#" class="button button--primary">
                                <span class="button__text">S'inscrire aujourd'hui</span>
                            </a>
                        </div>
                    </div>
                </section>
                <!--/. Section End -->

                <!-- Cta Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="cta">
                            <div class="cta__content">
                                <h2>Contact</h2>
                                <p>Quantum AI est là pour vous, que vous ayez besoin d’un coup de main, que Quantum AI est là pour vous, que vous ayez besoin d’un coup de main, que vous ayez des idées à partager ou simplement envie de discuter. Voici comment nous capter:</p>
                                <ul>
                                    <li>Vous avez une question brûlante ou besoin d'un conseil ? Écrivez-nous à contact@quantum-ai.fr et on vous répondra avant même que vous n'ayez eu le temps de vous inquiéter.</li>
                                    <li>Si vous êtes plutôt du genre social, venez papoter avec nous sur nos pages. On poste, on tweete, on partage et surtout, on adore voir vos réactions à tout ce qui se passe chez Quantum AI.</li>
                                    <li>Et surtout, gardez l'œil ouvert: nos petites bannières pop-up vous informeront des dernières news sans jamais vous submerger. C'est promis, chez nous, pas de spam, juste les infos essentielles pour que vous restiez à la page.</li>
                                </ul>
                                <p>Votre avis nous est précieux, alors surtout, ne soyez pas timide. On est là pour ça!</p>
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
                </section>
                <!--/. Cta End -->

            </main><!--/. App Main End -->

            <?php require_once __DIR__ . '/layout/footer.php'; ?>

        </div><!--/. App Wrapper End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
