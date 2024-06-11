<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package purplehorse
 */
?>
</main>
<site-footer>
    <template shadowrootmode="open">
        <style>
            footer {
                margin-inline: auto;
                margin-top: 3rem;
                padding-inline: 1rem;
                font-size: 0.8em;
                padding-bottom: .5rem;
                @media (max-width: 768px) {
                    text-align: center;
                }
            }
            a {
                color: inherit;
            }
        </style>
        <footer>
            <a href="/accessibility-statement">web无障碍声明</a><br>
            © 2023 Brandon Zhang
        </footer>
    </template>
</site-footer>
<?php wp_footer(); ?>
</body>
</html>
