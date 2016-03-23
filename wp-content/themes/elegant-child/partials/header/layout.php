<?php
/**
 * Main Header Layout
 *
 * @package     Elegant WordPress theme
 * @subpackage  Partials
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div id="header-wrap" class="fixed-header clr">

    <header id="header" class="site-header container clr" role="banner">

        <?php get_template_part( 'partials/header/branding' ); ?>
        
        <?php get_template_part( 'partials/header/nav' ); ?>
        <div id="header-rollover" data-open="0">
			<div id="rollover-wrapper">
				<div id="rollover-info">
					<?php
						$query = new Wp_Query( array('post_type' => 'page', 'post__in' => array (78, 80, 82)));
						
						$k = 0;
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								echo '<div class="rollover-item ';
								if ($k == 0) {
									echo 'first';
									$k = 1;
								}
								echo '">';
								echo '<p class="rollover-title-text">' . get_the_title() . '</p>';
								echo '<p class="rollover-regular-text">' . get_the_content() . '</p>';
								echo '</div>';
							}
						}
						/* Restore original Post Data */
						wp_reset_postdata();
					?>
				</div>
				<div id="rollover-form">
					<form action="http://thinkcreativegroup.createsend.com/t/y/s/xhuyut/" method="post" id="subForm">
						<table border="0" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td>
									<div class="div1">
										<label for="xhuyut-xhuyut">SIGN UP FOR EMAILS:</label>
									</div></td>
									<td>
									<input name="cm-xhuyut-xhuyut" id="xhuyut-xhuyut" type="text">
									</td>
									<td>
									<input id="rollover-input-button" value="Subscribe" type="submit">
									</td>
									<td><span class="span2">connect with us:</span></td>
									<td><a href="https://www.facebook.com/EMRoseBuilders?fref=ts" id="fb-link" target="_blank"></a></td>
									<td><a href="http://www.linkedin.com/company/e-m-rose-builders-inc-?trk=top_nav_home" id="in-link" target="_blank"></a></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
				<div id="rollover-firm">
					©2012 E.M. Rose Builders, Inc. All rights reserved. Site developed by <a href="http://www.thinkcreativegroup.com" target="_blank">think creative group.</a>
				</div>
			</div>
		</div>

    </header><!-- #header -->

</div><!-- #header-wrap -->