<?php
if ($page_lang == "cz") {
    $url = 'http://' . $_SERVER['HTTP_HOST'];
}  else {
    $url =   '/' . $page_lang;
}
?>

<!-- Header Begin -->
<header class="header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <div class="header__top">Neinvestujte, pokud nejste připraveni přijít o všechny investované peníze. Jedná se o vysoce rizikovou investici a neměli byste očekávat, že budete chráněni, pokud se něco pokazí.</div>
    <div class="header__main">
        <div class="header__container">
            <a href="<?php echo $url; ?>/" class="logo">
                <img src="./static/img/general/logo.svg" width="109" height="44" class="logo__img" title="<?php echo $translate['logo_title_text']; ?>" alt="<?php echo $translate['logo_alt_text']; ?>">
            </a>
            <nav class="navigation">
                <ul role="menu" class="navigation__list">
                    <li class="navigation__item">
                        <a href="<?php echo $url; ?>/" class="navigation__link navigation__link--active"><?php echo $menuItems['home']; ?></a>
                    </li>
                    <li class="navigation__item">
                        <a href="<?php echo $url; ?>/#calc" class="navigation__link"><?php echo $menuItems['calculator']; ?></a>
                    </li>
                    <li class="navigation__item">
                        <a href="<?php echo $url; ?>/about-us/" class="navigation__link"><?php echo $menuItems['about-us']; ?></a>
                    </li>
                    <li class="navigation__item">
                        <a href="<?php echo $url; ?>/contact-us/" class="navigation__link"><?php echo $menuItems['contact-us']; ?></a>
                    </li>
                </ul>
            </nav>
            <ul class="header__right">
                <li class="header__rightItem">
                    <a href="#calc" class="button button--secondary" rel="nofollow noindex">
                        <span class="button__content">
                            <span class="button__text">Zaregistrujte se<br></span>
                        </span>
                    </a>
                </li>
            </ul>
            <button type="button" class="button button--iconOnly burger" aria-expanded="false" data-mobile-menu-toggle>
                <span class="visuallyHidden">Menu mobile</span>
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
</header><!--/. Header End -->