<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/sal.css" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>; charset=<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div id="curtain-menu">
        <div class="curtain-button-placer">
            <button id="close-curtain-button" class="curtain-menu-button" aria-label="close navigation menu"
                onclick="closeCurtain()">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1.5rem" xmlns="http://www.w3.org/2000/svg">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div id="curtain-menu-container">
            <nav>
                <?php if (has_nav_menu('primary_navigation')) {
    echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
}?>
            </nav>
        </div>
    </div>
    <header class="theme-header">
        <div class="header-content">
            <a aria-label="brand logo" href="<?php echo home_url() ?>" class="brand">
                <svg width="40" viewBox="0 0 420 420" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M43 331V350L70 377H141L43 331ZM377 279L331 377H350L377 350V279ZM279 43L377 89V70L350 43H279ZM70 43L43 70V141L89 43H70Z"
                        fill="#BCC743" />
                    <path
                        d="M8.10564 266.364L123.479 18.9954L153.636 8.10564L401.005 123.479L411.894 153.636L296.521 401.005L266.364 411.894L18.9954 296.521L8.10564 266.364Z"
                        stroke="#FCFDEE" stroke-width="15" />
                </svg>

                <span>Flat</span>
            </a>
            <button id="open-curtain-button" aria-label="open navigation menu" class="curtain-menu-button"
                onclick="openCurtain()">
                <svg fill="currentColor" height="1.5rem" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <rect x="6" y="22" width="36" height="4"></rect>
                        <rect x="6" y="10" width="36" height="4"></rect>
                        <rect x="6" y="34" width="36" height="4"></rect>
                    </g>
                </svg>
            </button>
        </div>
    </header>
    <div id="page">