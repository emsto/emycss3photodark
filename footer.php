                </div>
            </div>
            <footer>
                <?php if (!dynamic_sidebar('footer-sidebar')): ?>
                <p>Copyright &copy; CSS3_photo_dark | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
                <?php endif; ?>
            </footer>
        </div>
        <p>&nbsp;</p>
        <script type="text/javascript">
            (function($) {
                $(document).ready(function() {
                    $('#images').kwicks({
                        max: 600,
                        spacing: 2
                    });
                    $('ul.sf-menu').sooperfish();
                });
            })(jQuery);
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
