<?php
/**
 * View General
 *
 * @package Themehunk
 * @subpackage  Jot Shop
 * @since 1.0.0
 */
?>
<div class="jot-shop-container jot-shop-welcome">
		<div id="poststuff">
			<div id="post-body" class="columns-1">
				<div id="post-body-content">
					<!-- All WordPress Notices below header -->
					<h1 class="screen-reader-text"><?php esc_html_e( 'Jot Shop', 'jot-shop' ); ?> </h1>
					<div class="tabs-list">
					<a href="#jot-shop-recommend-plugins" class="tab active" data-id="recommend"><?php esc_html_e( 'Recommend Plugins', 'jot-shop' ); ?></a> 
					<a href="#jot-shop-useful-plugins" class="tab" data-id="useful"><?php esc_html_e( 'Useful Plugins', 'jot-shop' ); ?></a>
					</div>
						<?php do_action( 'jot_shop_welcome_page_content_before' ); ?>
                        <div class="jot-shop-content">
						<?php do_action( 'jot_shop_welcome_page_main_content' ); ?>
                         </div>
						<?php do_action( 'jot_shop_welcome_page_content_after' ); ?>
				</div>
			</div>
			<!-- /post-body -->
			<br class="clear">
		</div>


</div>
