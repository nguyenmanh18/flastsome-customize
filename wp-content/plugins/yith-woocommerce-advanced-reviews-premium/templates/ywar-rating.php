<?php
/**
 * Single Product Rating
 *
 * @author      YITH
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;
$YWAR_AdvancedReview = YITH_YWAR();

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
    return;
}

$product_id = yit_get_prop($product, 'id');

$review_count = $YWAR_AdvancedReview->get_reviews_count( $product_id );

$rating_count = $review_count;
$average      = $YWAR_AdvancedReview->get_average_rating( $product_id );

if ( apply_filters( 'yith_ywar_display_rating_stars_condition', $rating_count > 0, $rating_count ) ) : ?>

    <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/Product">

        <!-- Product properties -->
        <meta itemprop="name" content="<?php echo is_object( $product ) ? $product->get_name() : 'Missing name';?>" />
        <meta itemprop="sku" content="<?php echo is_object( $product ) ? $product->get_sku() : 'Missing sku';?>" />
        <meta itemprop="description" content="" />
        <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
            <meta itemprop="url" content="<?php echo is_object( $product ) ? $product->get_permalink() : 'Missing url';?>" />
            <meta itemprop="availability" content="https://schema.org/InStock" />
            <meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
            <meta itemprop="price" content="<?php echo is_object( $product ) ? $product->get_price() : 'Missing price';?>" />
            <meta itemprop="priceValidUntil" content="<?php echo is_object( $product ) ? $product->get_date_on_sale_to() : '';?>" />
        </div>

        <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <div class="star-rating" title="<?php printf( esc_html__( 'Rated %s out of 5', 'yith-woocommerce-advanced-reviews' ), $average ); ?>">
			<span style="width:<?php echo( ( $average / 5 ) * 100 ); ?>%">
				<strong itemprop="ratingValue" class="rating"><?php echo esc_html( $average ); ?></strong> <?php printf( esc_html__( 'out of %s5%s', 'yith-woocommerce-advanced-reviews' ), '<span itemprop="bestRating">', '</span>' ); ?>
                <?php printf( _n( 'based on %s customer rating', 'based on %s customer ratings', $rating_count, 'yith-woocommerce-advanced-reviews' ), '<span itemprop="ratingCount" class="rating">' . $rating_count . '</span>' ); ?>
			</span>
            </div>

            <?php if ( comments_open() ) : ?>
                <?php $customer_reviews_text = apply_filters( 'ywar_customer_reviews_text', _n( '%s customer review', '%s customer reviews', $review_count, 'yith-woocommerce-advanced-reviews' ), $review_count ); ?>
                <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                (<?php printf( $customer_reviews_text, '<span itemprop="reviewCount" class="count">' . $review_count . '</span>' ); ?>
                )</a><?php endif ?>


        </div>
    </div>
<?php endif; ?>