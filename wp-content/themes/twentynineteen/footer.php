</main>
<footer class="footer">
    <div class="container">
        <p class="footer__copyright">Ukraine 2000-2015</p>

        <div class="footer__social">
            <a title="Facebook">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/fb.svg', false); ?>
            </a>
            <a title="Twitter">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/tw.svg', false); ?>
            </a>
            <a title="Linkedin">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/ln.svg', false); ?>
            </a>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

<script type='text/javascript' src='/wp-content/themes/twentynineteen/dist/index.js'></script>

</body>
</html>
