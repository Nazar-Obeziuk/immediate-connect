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
    $page_title = 'Entendement de la Politique de Cookies de Quantum AI MT';
    $page_description = "La Politique de cookies de Quantum AI explique comment l'entreprise utilise les cookies et technologies similaires pour collecter stocker les informations.";
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
                            <h1 class="hero__title">Politique en matière de cookies</h1>
                            <div class="hero__date">Mise à jour le 24 mai 2024</div>
                        </div>

                    </div>
                </section><!--/. Hero End -->


                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <h2 class="section__headerTitle">Introduction</h2><br>
                            <p>Dans l'ère numérique d'aujourd'hui, la compréhension des politiques de cookies est essentielle pour tout utilisateur soucieux de sa vie privée. Voici une présentation concise de notre Politique de Cookies:</p>
                        </div>
                        <div class="card">
                            <h3>Une brève explication de la finalité de la Politique de Cookies</h3>
							<ul>
								<li>Assurer la transparence: Expliquer clairement comment et pourquoi nous utilisons les cookies.</li>
								<li>Protection de la vie privée: Détail des mesures adoptées pour sauvegarder vos données.</li>
								<li>Personnalisation de l'expérience: Utilisation des cookies pour améliorer nos services en fonction de vos préférences.</li>
							</ul>
						</div><br>
                        <div class="card">
                            <h3>Clarification que votre site ne collecte que des cookies standards utilisés pour améliorer l'expérience utilisateur</h3>
							<ul>
								<li>Cookies fonctionnels: Pour permettre une navigation fluide sur le site.</li>
								<li>Cookies de performance: Pour optimiser la rapidité et la qualité de nos services.</li>
								<li>Cookies analytiques: Pour mieux comprendre et améliorer l'engagement des utilisateurs.</li>
							</ul>
						</div><br>
                        <h3>Qu'est-ce que les cookies ?</h3><br>
                        <p>Les cookies sont de petits fichiers texte que les sites web déposent sur votre appareil pour enregistrer des données spécifiques à votre navigation. Ils jouent un rôle déterminant dans l'amélioration de votre expérience en ligne, en rendant vos interactions avec les sites plus rapides et plus personnelles. Par exemple, ils aident à mémoriser vos préférences de langue ou le contenu de votre panier d'achat.</p><br>
                        <h2>Une définition simple des cookies et leur utilité</h2>
                        <p>Imaginez un assistant virtuel qui garde en mémoire vos goûts et préférences pour un service sur mesure: voilà la mission des cookies. Ils sont la mémoire du web, retenant les informations utiles qui rendent votre navigation plus intuitive et efficace.</p><br>

                        <h3>Que les cookies ne collectent pas d'informations personnelles des utilisateurs sans leur consentement</h3>
                        <p>Quant aux informations personnelles, soyez rassurés: les cookies seuls ne peuvent pas les capturer sans votre permission explicite. Lors de votre première visite sur un site, un bandeau de consentement vous est généralement présenté, vous laissant la liberté de choisir les informations que vous êtes prêt à partager.</p><br>

                        <h3>L'utilisation des cookies pour optimiser votre visite</h3>
                        <p>Imaginez que chaque site web est comme un café du coin où vous êtes un visiteur régulier. Les cookies standards, ce sont comme ces serveurs attentifs qui n'oublient pas que vous aimez votre café avec une touche de lait d'avoine et trois sucres. Grâce à eux, votre retour sur un site ce n'est jamais un recommencement à zéro. Ils se souviennent pour vous: un mot de passe par-ci, vos préférences de navigation par-là. Et quand vous revenez, tout est prêt, comme si vous n'étiez jamais parti. C'est un peu de la magie du quotidien numérique qui rend votre surf sur le web sans vague et tout en confort.</p><br>

                        <h2>L'impact des cookies standards sur l'efficacité du site et le confort de navigation</h2>
                        <p>Comme un chef qui se penche depuis sa cuisine pour observer les réactions des convives, nous sommes constamment à l'écoute de votre parcours sur notre site. Les cookies analytiques, c'est notre façon de vous regarder parcourir le menu, de noter vos plats préférés et ceux qui vous font hésiter. Cette petite fenêtre sur vos habitudes nous est précieuse: elle nous permet de réajuster nos recettes et d'harmoniser la salle selon vos goûts. Grâce à ces miettes d'information, nous affinons l'ambiance et enrichissons notre carte pour que chaque visite soit une nouvelle occasion de vous sentir chez vous, accueilli et choyé dans les moindres détails. Les cookies, c'est notre secret pour vous mijoter un espace numérique aux petits oignons.</p><br>

                        <h2>Exercez vos prérogatives numériques</h2>
                        <p>Dans l'univers numérique actuel, affirmer votre droit à la vie privée est non seulement un privilège mais aussi une nécessité. Chez Quantum AI, nous plaçons ces droits au cœur de notre engagement envers vous.</p><br>

                        <h3>Revendiquez le contrôle de vos informations personnelles</h3>
                        <p>Si un jour vous avez envie de changer la manière dont on fait équipe, que ce soit pour ajuster un peu les paramètres de confidentialité ou même pour nous dire "c'est bon, efface tout ce que tu sais sur moi", on est là pour ça. C'est un peu comme nous laisser une note sur la table de la cuisine — envoyez-nous un petit mot à contact@quantum-ai.fr. On vous promet de lire chaque ligne et de vous écrire en retour avant que la bouilloire ait le temps de siffler, ou disons, sous 72 heures max.</p><br>

                        <h3>Choisissez votre niveau d'interaction avec les cookies</h3>
                        <p>Prendre le contrôle des cookies, c'est un peu comme régler les boutons d'une vieille radio pour capter votre station préférée. Vous pouvez tourner les potards dans les paramètres de votre navigateur, jouer avec les curseurs sur notre bannière de cookies, ou nous envoyer un petit message si vous avez besoin d'aide. C'est tout simple. Mais n'oubliez pas, bloquer certains cookies, c'est un peu comme brouiller la fréquence: vous risquez de perdre en chemin quelques-unes de ces petites astuces qui rendent tout plus sympa et pratique sur notre site.</p><br>

                        <h2>Comprendre notre utilisation de vos données</h2>
                        <p>Imaginez la politique de confidentialité comme un vieux livre de recettes de famille, avec tous les secrets bien gardés sur la façon dont on prépare chaque plat – ou dans notre cas, comment on s'occupe de chaque petit bout d'information que vous nous confiez. Si jamais l'envie vous prend de vous plonger dans ces détails, notre recueil est là, bien à vue sur l'étagère. On y explique tout, de A à Z, sur ce qu'on fait avec vos données et comment on les garde en sécurité, comme des confitures bien rangées à l’abri dans le cellier. Alors, n'hésitez pas à le feuilleter à votre aise pour voir comment, chez nous, le respect de votre vie privée, c'est du sérieux.</p><br>

                        <h3>Points de contact pour vos questions de cookies</h3>
                        <p>Dans l'éventail de nos services, nous reconnaissons l'importance d'un dialogue ouvert et accessibles à tous nos utilisateurs. Si vous avez des questions, des préoccupations ou des demandes associées à notre politique de cookies, nous tenons à vous assurer que vos voix seront entendues et vos interrogations, adressées avec sérieux et diligence.</p><br>

                        <h3>Où nous trouver pour parler cookies</h3>
                        <p>Pour toute requête relative à notre utilisation des cookies, notre équipe dédiée est à votre disposition. Vous pouvez nous envoyer vos questions par courrier à l'adresse suivante:</p>
                        <p>S'il vous plaît, joignez-y vos coordonnées pour que nous puissions revenir vers vous dans les meilleurs délais. Notre engagement est de vous fournir une réponse complète et personnalisée, pour naviguer sur notre site en toute confiance.</p><br>

                        <h2>Actualisation et prise d'effet des modifications</h2>
                        <p>Notre site évolue avec vous, et il en va de même pour nos politiques. C'est dans cet esprit de progression et d'adaptabilité que nous appliquons des mises à jour périodiques à notre politique de cookies.</p><br>

                        <h3>Publication et accès aux mises à jour</h3>
                        <p>Nous nous engageons à communiquer toute modification apportée à cette politique en la publiant directement sur la page concernée. Cette transparence vous assure d'avoir toujours accès aux informations les plus récentes et pertinentes.</p><br>

                        <h3>Importance de rester informé</h3>
                        <p>On veut que vous soyez aussi à l'aise avec notre manière de faire qu'avec votre canapé préféré. Alors, venez jeter un coup d'œil de temps en temps sur cette page, un peu comme on vérifierait si y'a du nouveau courrier dans la boîte aux lettres. Ça vous permettra de rester dans le coup sur les petits ajustements ou les grands changements qui pourraient jouer sur la façon dont on garde en sûreté vos infos perso.</p><br>

                        <h3>Notifications actives pour vous tenir au courant</h3>
                        <p>Pour garder un œil sur ce qui se passe chez nous sans que ça vous prenne la tête, notre site va vous faire un petit signe quand il y aura du nouveau. Pas besoin de chercher les infos, on vous les serve sur un plateau d'argent avec des bannières qui se pointent juste comme il faut et des petits messages qui apparaissent pile au bon moment. Et voilà, vous êtes à la page sans vous prendre le chou!</p>
            </main><!--/. App Main End -->

            <?php require_once __DIR__ . '/layout/footer.php'; ?>

        </div><!--/. App Wrapper End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
