<?php

/**

 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
  * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
<div class="accordion" id="accordion">
	<div class="container">
        <?php $i = 0; foreach ( $tabs as $key => $tab ) : ?>
			<div class="card">
                <div class="card-header" id="heading-<?php echo $i; ?>">
                    <h4 class="mb-0">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i; ?>">
                            <?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>
                        </a>
                    </h4>
                </div>
				<div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse <?php if ( $i == 0 ): echo 'in'; endif; ?>" role="tabpanel" aria-labelledby="headingOne">
					<div class="card-body">
						<?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
                	</div>
				</div>
			</div>
        <?php $i++; endforeach; ?>
	</div>
</div>	
<?php endif; ?>