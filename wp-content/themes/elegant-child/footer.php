<?php
/**
 * The template for displaying the footer.
 *
 * @package     Elegant WordPress theme
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */
?>

	</div><!-- #main-content -->

	<?php //get_template_part( 'partials/footer/layout' ); ?>

</div><!-- #wrap -->

<?php //get_template_part( 'partials/mobile-search' ); ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-75987359-1', 'auto');
	ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>