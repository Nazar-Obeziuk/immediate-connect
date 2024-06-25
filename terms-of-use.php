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
    $page_title = 'Intelligence Artificielle Quantique et MT - Révolution en Traduction';
    $page_description = "Découvrez l'impact de l'Intelligence Artificielle Quantique dans le monde de la traduction machine (MT). Plongez dans le futur avec Quantum AI MT!";
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
                            <h1 class="hero__title">Conditions générales d'utilisation</h1>
                            <div class="hero__date">Mise à jour le 26 mai 2024</div>
                        </div>

                    </div>
                </section><!--/. Hero End -->


                <!-- Section Begin -->
                <section class="section">
                    <div class="app__container">
                        <div class="section__header">
                            <p>Plongez au cœur de l'ère nouvelle, où la traduction est transformée par le pouvoir de l'intelligence artificielle quantique.</p>
                        </div>
                        <h2>Vue d'ensemble de la finalité du site en tant que plateforme d'informations sur Quantum AI</h2>
                            <p>Notre plateforme est dédiée à vous informer sur les avancées et les applications de Quantum AI dans le domaine de la traduction automatique.</p><br>

                            <h2>Acceptation des termes et conditions lors de l'utilisation du site</h2>
                            <p>En naviguant sur notre site, vous consentez à nos termes et acceptez de respecter les conditions établies pour une expérience optimale et sécurisée.</p><br>

                            <h2>Essence de quantum-ai.fr</h2>
                            <p>Explorez le noyau de la traduction intelligente grâce à quantum-ai.fr.</p><br>

                            <h2>Clarification que quantum-ai.fr est uniquement une ressource officielle de revue d'information</h2>
                            <p>Quantum-ai.fr sert de source primaire pour des insights et analyses détaillées sur AI Quantique, sans transactions.</p><br>

                            <h2>Orientation pour contacter directement Quantum AI pour des questions financières et de compte</h2>
                            <p>Pour toute préoccupation financière, nous vous dirigeons vers le support clientèle de Quantum AI.</p><br>

                            <h2>Propriété intellectuelle</h2>
                            <p>Nous honorons et protégeons l'unicité des œuvres créées sur quantum-ai.fr, veillant à la sauvegarde de leur caractère original.</p><br>

                            <h2>Propriété intellectuelle et restrictions sur l'utilisation du matériel de quantum-ai.fr</h2>
                            <p>Tout contenu de quantum-ai.fr est protégé par des droits d'auteur. L'utilisation non autorisée est strictement interdite. Les utilisateurs doivent obtenir l'autorisation avant de reproduire ou de distribuer des matériaux.</p><br>

                            <h2>Utilisation des Informations</h2>
                            <p>Naviguez dans les connaissances que nous partageons.</p><br>

                            <h2>Utilisation des données de quantum-ai.fr</h2>
                            <p>Les informations de quantum-ai.fr sont là pour éclairer vos décisions:</p>
                            <ul style="list-style: disc; margin-left: 40px; line-height: 38px; margin-top: 10px; margin-bottom: 10px;">
                                <li>Évaluation académique et professionnelle</li>
                                <li>Recherche personnelle et développement</li>
                                <li>Veille technologique et tendances du marché</li>
                            </ul>

                            <h2>Responsabilité de la véracité des informations externes</h2>
                            <p>Quantum-ai.fr ne garantit pas la précision des données des plateformes tierces:</p>
                            <ul style="list-style: disc; margin-left: 40px; line-height: 38px; margin-top: 10px; margin-bottom: 10px;">
                                <li>Faites preuve de diligence raisonnable</li>
                                <li>Consultez les sources originales pour les informations critiques</li>
                            </ul>

                            <h2>Politique de Cookies</h2>
                            <p>Notre site utilise des cookies pour votre confort.</p><br>

                            <h2>Amélioration de votre expérience grâce aux cookies</h2>
                            <p>Les cookies sur quantum-ai.fr servent à:</p>
                            <ul style="list-style: disc; margin-left: 40px; line-height: 38px; margin-top: 10px; margin-bottom: 10px;">
                                    <li>Personnaliser le contenu selon vos préférences</li>
                                    <li>Simplifier votre navigation sur le site</li>
                                    <li>Analyser l'usage du site pour des améliorations continues</li>
                                </ul>

                            <h2>Liens Externes et Contenu de Tiers</h2>
                            <p>Naviguez prudemment, au-delà de notre domaine.</p><br>

                            <h2>Responsabilité et Liens Tiers</h2>
                            <p>Quantum-ai.fr présente des liens externes pour compléter vos recherches:</p>
                            <ul style="list-style: disc; margin-left: 40px; line-height: 38px; margin-top: 10px; margin-bottom: 10px;">
                                    <li>Ces sites ne reflètent pas nos opinions ou politiques</li>
                                    <li>Nous n'endossons pas le contenu tiers</li>
                                    <li>Votre discernement est conseillé lors de la consultation</li>
                                </ul>

                            <h2>Activités Interdites</h2>
                            <p>Respectez nos lignes rouges pour la sécurité de tous.</p><br>

                            <h2>Liste des Activités Interdites sur le Site</h2>
                            <ul style="list-style: disc; margin-left: 40px; line-height: 38px; margin-top: 10px; margin-bottom: 10px;">
                                    <li>Aucun partage de contenu illégal ou protégé</li>
                                    <li>Interdiction de piratage ou d'attaques de système</li>
                                    <li>Prohibition du harcèlement ou de discours haineux</li>
                                </ul>

                            <h2>Lutte contre Abus et Fraudes</h2>
                            <p>Nous œuvrons pour maintenir un espace sain:</p>
                            <ul style="list-style: disc; margin-left: 40px; line-height: 38px; margin-top: 10px; margin-bottom: 10px;">
                                    <li>Surveillance et actions rapides en cas d'abus</li>
                                    <li>Collaboration avec les autorités si nécessaire</li>
                                    <li>Encouragement des utilisateurs à signaler tout comportement suspect</li>
                                </ul>

                            <h2>Décharge de Responsabilité et Limitation de Responsabilité</h2>
                            <p>Notre engagement envers l'intégrité, mais avec des frontières claires.</p><br>

                            <h2>Responsabilités sur Contenu et Décisions</h2>
                            <p>Quantum-ai.fr offre des aperçus de l'AI quantique, mais nous tenons à préciser que notre rôle est informatif et non décisionnel:</p>
                                <ul style="list-style: disc; margin-left: 40px; line-height: 38px; margin-top: 10px; margin-bottom: 10px;">
                                    <li>Les ressources externes mentionnées ne sont pas sous notre contrôle et peuvent s'écarter de notre niveau de fiabilité souhaité.</li>
                                    <li>Les décisions prises sur la base de notre contenu reposent entièrement sur la discrétion de l'utilisateur.</li>
                                    <li>Nous ne pouvons être tenus pour responsables de l'utilisation des informations ni des conséquences de vos actions.</li>
                                </ul>

                            <h2>Modifications des Termes d'Utilisation</h2>
                            <p>L'évolution continue pour un service au top.</p><br>

                            <h2>Processus de Notification des Mises à Jour</h2>
                            <p>Sur quantum-ai.fr, les termes se transforment parfois pour correspondre mieux à la réalité digitale. Lorsqu'une mise à jour est réalisée, nous avertissons nos utilisateurs par des annonces évidentes sur notre site ou par e-mail, assurant que vous êtes toujours au courant des dernières modifications qui pourraient affecter votre interaction avec le contenu et les services que nous offrons.</p><br>

                            <h2>Revue Régulière des Termes par les Utilisateurs</h2>
                            <p>Nous invitons nos utilisateurs à rester diligents en consultant notre section dédiée aux termes et conditions fréquemment. Cette habitude assure que votre utilisation du site reste alignée avec les attentes actuelles, tout en renforçant votre compréhension des droits et responsabilités qui régissent notre relation mutuelle.</p><br>

                            <h2>Informations de Contact</h2>
                            <p>Ouverts et accessibles pour vos interrogations.</p><br>

                            <h2>Adressez Vos Questions de Confidentialité</h2>
                            <p>Votre confidentialité nous est importante. Pour toute question ou préoccupation à ce sujet, n'hésitez pas à nous contacter par le biais de notre adresse de correspondance officielle, disponible sur notre site web. Nous nous efforçons de répondre rapidement et efficacement pour assurer la protection de vos données personnelles.</p><br>

                            <h2>Questions Spécifiques à Quantum AI</h2>
                            <p>Quantum AI dépasse les horizons de la norme. Si vous avez des questions qui entrent dans les sphères spécifiques de leur expertise, nous vous encourageons à les contacter directement. Leur équipe dédiée est en place pour vous offrir des réponses précises et vous guider vers les meilleures solutions pour vos besoins.</p><br>

                            <h2>Date de Vigueur et Modifications</h2>
                            <p>À chaque tournant, nous privilégions une transparence totale et une communication claire.</p><br>

                            <h2>Publication de Modifications</h2>
                            <p>Quantum-ai.fr s'engage à rester à jour avec les dernières réglementations et pratiques de l'industrie. Conscient de l'impact que les changements peuvent avoir, nous nous assurons que toute modification apportée à nos termes et conditions soit publiée directement sur cette page. Cela inclut les ajouts, suppressions et ajustements qui entrent en vigueur, assurant que vous êtes constamment informé des dernières évolutions.</p><br>

                            <h2>Importance de Visites Régulières</h2>
                            <p>Nous vous recommandons de visiter cette page de manière périodique. Se familiariser avec les modifications nécessite une pratique régulière, qui à son tour, maximise votre compréhension et votre conformité aux termes en vigueur. C'est une habitude qui valorise non seulement votre accès à nos services mais renforce aussi votre sécurité numérique.</p><br>

                            <h2>Notification des Utilisateurs</h2>
                            <p>Quantum-ai.fr se soucie de votre expérience utilisateur. Pour cette raison, en cas de changements importants, nous vous notifierons via des bannières visibles, des avis émergents ou mises à jour pop-up lors de votre navigation sur le site, vous donnant l'occasion de prendre connaissance des informations essentielles de façon proactive. Pour toute question ou demande d'information, notre équipe de support est à disposition à l'adresse suivante: contact@quantum-ai.fr.</p>

            </main><!--/. App Main End -->
           
            <?php require_once __DIR__ . '/layout/footer.php'; ?>

        </div><!--/. App Wrapper End -->

    </div><!--/. App End -->

    <!-- CONTENT ENDS HERE -->

    <?php require_once __DIR__ . '/layout/bottom.php'; ?>

</body>
</html>
