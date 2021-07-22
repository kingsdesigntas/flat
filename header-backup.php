<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>; charset=<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header class="theme-header">
        <div class="header-content">
            <a aria-label="brand logo" href="<?php echo home_url() ?>" class="brand">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 420 420">
                    <defs>
                        <linearGradient id="a" x1="308.4" x2="463.4" y1="305.6" y2="305.6"
                            gradientTransform="translate(-527 -390) scale(2.7087)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fff" />
                            <stop offset="1" stop-color="#cac5c4" />
                        </linearGradient>
                    </defs>
                    <g stroke-linecap="round" stroke-linejoin="round">
                        <g fill="#77a4bb">
                            <path
                                d="M43 331v19l27 27h71zM377 279l-46 98h19l27-27zM279 43l98 46V70l-27-27zM70 43L43 70v71l46-98z" />
                        </g>
                        <path fill="url(#a)" d="M462 228l-36 13-118 253 13 36 253 118 36-13 118-253-13-36z"
                            transform="translate(-308 -228)" />
                    </g>
                </svg>
                <span>Flat</span>
            </a>
            <nav>
                <?php if (has_nav_menu('primary_navigation')) {
    echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
}?>
            </nav>
        </div>
    </header>
    <div id="page">