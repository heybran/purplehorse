<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package purplehorse
 */

get_header();
?>
<section class="error-404 not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e( 'Oops! 您访问的页面不存在哦～', 'purplehorse' ); ?></h1>
    </header>
    <div class="page-content">
        <p><?php esc_html_e( '或许您可以尝试下搜索您想要找的页面。', 'purplehorse' ); ?></p>
        <?php
        get_search_form();
        the_widget( 'WP_Widget_Recent_Posts' );
        ?>
        <div class="widget widget_categories">
            <h2 class="widget-title"><?php esc_html_e( '分类', 'purplehorse' ); ?></h2>
            <ul>
                <?php
                wp_list_categories(
                    array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                    )
                );
                ?>
            </ul>
        </div>
        <?php
        /* translators: %1$s: smiley */
        $purplehorse_archive_content = '<p>' . sprintf( esc_html__( '查找相关月份发布的文章. %1$s', 'purplehorse' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$purplehorse_archive_content" );

        the_widget( 'WP_Widget_Tag_Cloud' );
        ?>
    </div>
</section>
<?php
get_footer();
