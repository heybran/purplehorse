<?php
/**
 * Theme Header
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package purplehorse
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
    <a href="#maincontent" class="skip-to-content">
      <?php esc_html_e('Skip to content', 'purplehorse'); ?>
    </a>
    <site-header>
        <template shadowrootmode="open">
            <style>
                header {
                    padding-inline: 24px;
                    padding-top: 1.5rem;
                }
                h1 {
                    font-size: 2rem;
                    line-height: 1;
                    margin-block: 0;
                }
                p {
                    margin-block: 0;
                }
                small {
                    font-size: 0.8rem;
                }
                a {
                    text-decoration: none;
                    color: inherit;
                }
                .main-navigation {
                    & ul {
                        list-style: ' ';
                        padding: 0;
                    }
                    & a:hover {
                        text-decoration: underline;
                    }
                }
            </style>
            <header>
                <div class="site-branding">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <p><small><?php bloginfo('description'); ?></small></p>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php wp_nav_menu(['theme_location' => 'menu-1', 'menu_id' => 'primary-menu']); ?>
                </nav>
            </header>
        </template>
    </site-header>
    <main id="maincontent">