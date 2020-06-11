=== YITH WooCommerce Advanced Reviews Premium ===

Contributors: yithemes
Tags: reviews, woocommerce, products, themes, yit, yith, e-commerce, shop, advanced reviews, reviews attachments, rating summary, product comment, review replies, advanced comments, product comments, vote review, vote comment, amazon, amazon style, amazon reviews, review report, review reports, most voted reviews, best reviews, rate review, rate product
Requires at least: 4.0.0
Tested up to: 5.4
Stable tag: 1.6.10
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Documentation: https://docs.yithemes.com/yith-woocommerce-advanced-reviews/

== Changelog ==

= 1.6.10 - Released on 05 March 2020 =

* New: added Greek language
* New: added the plugin shortcode to the Elementor panel
* Fix: exclude the non rated reviews from the average rating
* Dev: all strings escaped


= 1.6.9 - Released on 27 February 2020 =

* New: Support to WordPress 5.4
* New: Support to WooCommerce 4.0
* New: now displays a successful message when a user submit a review
* New: added Greek translation
* Tweak: added the attached images to the reviews shortcode
* Tweak: added stars in the shortcode reviews
* Update: Language file .pot
* Update: Spanish language
* Update: updated plugin fw
* Update: updated plugin settings
* Fix: fixed a warning in the Schema
* Fix: fixed textarea name in order to avoid conflicts with possible equal IDs
* Fix: remove the reply button when the user is not logged in and he can't leave a review
* Dev: added new filter ywar_get_thumbnails_div_return
* Dev: added new filter ywar_customer_reviews_text
* Dev: added missing texts to avoid empty values
* Dev: check if user exist


= 1.6.8 - Released on 23 December 2019 =

* New: Support for WooCommerce 3.9
* Update: plugin framework
* Fix: deleted unnecessary schema code for reviews in the reviews shortcode template
* Dev: new filter 'yith_ywar_redirect_after_submit_review'
* Dev: new filter 'yith_ywar_show_review_shortcode_without_product_id'

= 1.6.7 - Released on 15 November 2019 =

* Update: Italian language
* Update: plugin framework
* Fix: fixed the issue with the duplicate product short description
* Fix: option panel changes

= 1.6.6 - Released on 05 November 2019 =

* New: support for WordPress 5.3
* New: support for WooCommerce 3.8
* Update: plugin framework
* Update: updated .pot file
* Update: updated language files
* Update: updated the Google Schema in the reviews
* Fix: fixed an error in the Schema
* Fix: fixed warning in review template
* Dev: replacing the product description by the short description in the schema meta

= 1.6.5 - Released on 09 October 2019 =

* New: Support to WordPress 5.2.3
* New: Added pagination to yith_ywar_show_reviews shortcode
* Tweak: Added a new color option to change the "Most recent reviews" and "Most helpful reviews" tab
* Tweak: New improvements in the reviews shortcode
* Update: plugin framework
* Update: updated .pot file
* Update: updated the Google Schema in the reviews
* Fix: fixed the edit message when the edit is not allowed
* Dev: adding a new filter to redirect the voting login
* Dev: fixed a minor issue in the yith_ywar_show_reviews shortcode

= 1.6.4 - Released on 05 August 2019 =

* New: support WooCommerce 3.7
* New: new filter yith_advanced_reviews_query_review_list_args
* Tweak: fixed a condition the admin could not reply to customers.
* Update: updated plugin core
* Update: Updated Italian Language
* Fix: fixed the review stats not updating when deleting permanently with the bulk action
* Fix: deleted the add new button in the edit review page
* Dev: deleted the type numeric in the queries compare

= 1.6.3 - Released on 29 May 2019 =

* New: support to WordPress 5.2
* New: added a shortcode to display the reviews [yith_ywar_show_reviews]
* Update: Updated plugin Framework
* Update: version of file ywar-rating.php
* Update: Updated Dutch Language
* Fix: Fixed condition of reCaptcha for product page.
* Dev: fixed an Undefined index error
* Dev: Added new filter 'yith_ywar_check_ajax_wp_nonce_vote_review_callback' for vote review callback
* Dev: fixing an issue in the shortcode [yith_ywar_show_reviews]

= 1.6.2 - Released on 09 April 2019 =

* New: support to WooCommerce 3.6.0 RC 1
* Update: updated plugin Framework
* Update: language file .pot
* Update: Updated Dutch language
* Update: Updated Spanish language
* Fix: check the thumbs id in the attachment section
* Fix: Fixed showing all features reviews.

= 1.6.1 - Released on 15 March 2019 =

* Update: updated plugin Framework
* Update: language file .pot
* Fix: deleted the call to the reviews_list function in the product reviews template
* Fix: Don't display the replies as a reviews in the reviews list
* Fix: fixed the name of the Dutch translation files
* Fix: include Recaptcha scripts only when the module is enabled
* Fix: Fixed warning when offset of review doesn't exists.
* Fix: fixed an error that appear in the Google SDTT

= 1.6.0 - Released on 25 February 2019 =

* New: added a bubble notification in the backend when a new review or reply is added
* Tweak: improving the plugin performance
* Update: updated Dutch language
* Update: updated Spanish language
* Update: updated template ywar-rating.php
* Update: updated plugin Framework
* Update: Update template version in order to prevent notice on WooCommerce status
* Update: main language file
* Fix: count notice getting Review count value
* Fix: wrong format for dutch language files
* Fix: fixed a non numeric value warning
* Fix: Fixed reCaptcha condition, it was working on admin panel.
* Dev: added new filter yith_advanced_reviews_allow_reply_condition


= 1.5.7 - Released on 07 December 2018 =

* New: support to WordPress 5.0
* New: Slovenian language, thanks to Franci Kern
* Update: plugin core to version 3.1.6
* Update: Brazilian language .po and .mo files
* Update: Portuguese language file
* Update: main language file
* Dev: new filter 'yith_ywar_display_rating_stars_condition'
* Dev: updating the filter 'yith_advanced_reviews_reviews_title_text'
* Dev: new filter 'yith_advanced_reviews_reviews_title_text'


= 1.5.6 - Released on 22 October 2018 =

* Update: plugin framework

= 1.5.5 - Released on 17 October 2018 =

* New: Support to WooCommerce 3.5.0
* Tweak: new action links and plugin row meta in admin manage plugins page
* Update: updating the .pot
* Update: Updating the German translation, thanks to Alexander Cekic.
* Fix: Avoid spam for user reviews who have not purchased the product
* Dev: added filter yith_ywar_add_filtering_link
* Dev: check about recapcha only on products
* Dev: added a new filter to the tab title
* Dev: added a new filter to check if is a custom user


= 1.5.4 - Released on 28 June 2018 =

* New: Added screen options to reviews screen
* Update: Spanish language
* Update: Italian translation
* Update: Dutch translation
* Updated: updated the official documentation url of the plugin
* Fix: mark comments created from a yith review as imported
* Dev: checking YITH_Privacy_Plugin_Abstract for old plugin-fw versions
* Dev: including 'wp-admin/includes/plugin.php'
* Dev: Improvement of the performance on product page


* GDPR:
  - New: exporting user review data info
  - New: erasing user review data info
  - New: privacy policy content
* New: recaptcha
* New: added Persian ( farsi ) translation to the plugin, thanks to BanuSara Group
* Tweak: SEO Improvements (added rel="nofollow" to several links)
* Tweak: add variable $review on filter yith_ywar_review_author_data

* Update: Dutch translation
* Update: Documentation link of the plugin
* Fix: Capatibility changed from manage_option to manage_woocommerce
* Fix: fixed visual issue in a string
* Fix: adding product item to aggregateRating
* Fix: recaptcha
* Dev: adding new filters

= 1.5.3 - Released on 25 May 2018 =

* GDPR:
  - New: exporting user review data info
  - New: erasing user review data info
  - New: privacy policy content
* New: recaptcha
* New: added Persian ( farsi ) translation to the plugin, thanks to BanuSara Group
* Tweak: SEO Improvements (added rel="nofollow" to several links)
* Tweak: add variable $review on filter yith_ywar_review_author_data
* Update: Italian translation
* Update: Dutch translation
* Update: Documentation link of the plugin
* Fix: Capatibility changed from manage_option to manage_woocommerce
* Fix: fixed visual issue in a string
* Fix: adding product item to aggregateRating
* Fix: recaptcha
* Dev: adding new filters

= 1.5.2 - Released on 16 February 2018 =

* Fix: Version in template ywar-rating.php
* Fix: Converting comments into reviews

= 1.5.1 - Released on 30 January 2018 =

* New: support to WooCommerce 3.3.0-RC2
* Update: plugin framework 3.0.10
* Fix: review form is showed to non-verified owners even if the related WooCommerce option is enabled
* Dev: new filter 'filter yith_ywar_review_author_data'


= 1.5.0 - Released on 04 January 2018 =

* New: dutch translation
* New: attachments of review images are now loading in a lightbox
* New: support to WooCommerce 3.2.6
* Fix: deny to load posts inside review section
* Update: plugin framework to the version 3.0.5
* Dev: new filter 'ywar_arg_for_reviews'
* Dev: new filter 'yith_wc_advance_reviews_ywar_script'


= 1.4.7 - Released on 08 November 2017 =

* Fix: remove testing strings

= 1.4.6 - Released on 07 November 2017 =

* New: support to WooCommerce 3.2.3
* Add: Option to show the Most Helpful Reviews tab selected by default
* Fix: Option "Number of reviews to display" did not work properly

= 1.4.5 - Released on 20 July 2017 =

* Fix: reinitialize PrettyPhoto on load more
* Update: YITH Plugin Framework

= 1.4.4 - Released on 06 July 2017 =

* New: support for WooCommerce 3.1.
* New: tested up to WordPress 4.8.
* Update: YITH Plugin Framework

= 1.4.3 - Released on 27 June 2017  =

* New: hide review bars if 'Product ratings' option is not set in WooCommerce settings page.
* Dev: updated template ywar-single-product-reviews.php.
* Dev: added template ywar-review-bars.

= 1.4.2 - Released on 19 May 2017  =

* Fix: privacy issue, removed user email from the Gravatar alt attribute

= 1.4.1 - Released on 23 March 2017  =

* New: Support WooCommerce 3.0
* Fix: review list corrupted if one product with reviews was deleted.
* Fix: YITH Plugin Framework initialization.

= 1.4.0 - Released on 16 March 2017  =

* New:  Support to WooCommerce 2.7.0-RC1
* Update: YITH Plugin Framework

= 1.3.17 - Released on 13 February 2017  =

* Fix: wrong average rating calculation when an approved review is deleted.
* Fix: review's replies disappear when the review is set as featured.
* Dev: filter 'yith_advanced_reviews_review_container_start' in template file ywar-product-reviews.php.
* Dev: filter 'yith_ywar_login_url' lets third party to set the login URL for guest users.

= 1.3.16 - Released on 11 January 2017 =

* Fix: with YITH WooCommerce Points and Rewards plugin, points for reviews not credited properly

= 1.3.15 - Released on 03 January 2017 =

* Fix: max file size for attachments not working properly
* Update: changed the position of the field 'Review title' for guest users

= 1.3.14 - Released on 07 December 2016 =

* New: ready for WordPress 4.7

= 1.3.13 - Released on 07 November 2016 =

* New: new option for the file max size allowed
* New: attachments of the same review are shown in a lightbox

= 1.3.12 - Released on 02 November 2016 =

* New: choose front end colors from plugin options

= 1.3.11 - Released on 31 October 2016 =

* New: a new option for entering the id or CSS class of the main review container
* New: all script and CSS belong to the optionable container and not to a fixed id
* New: in reviews table, show the content and a link to the parent review for ever reply

= 1.3.10 - Released on 08 August 2016 =

* Update: moved the set_approved_status method at the end of the review creation process in order to fire only when all data are stored
* New: trigger the 'wp_set_comment_status' action when the approval status of the review changes

= 1.3.9 - Released on 13 June 2016 =

* Update: WooCommerce 2.6 100% compatible

= 1.3.8 - Released on 16 May 2016 =

* New: italian localization file
* New: spanish localization file
* New: filter 'yith_advanced_reviews_avatar_email' let you change the displayed author email on ywar-review.php template file

= 1.3.7 - Released on 22 April 2016 =

* Fix: reviews do not shown author data edited from admin edit review page

= 1.3.6 - Released on 06 April 2016 =

* New: new section in edit review page for author information and management
* Fix: reviews table issue in a multilingual environment

= 1.3.5 - Released on 18 March 2016 =

* Update: removed color properties in CSS file so dark theme will not have visual issues
* Fix: missing argument caused a warning
* Update: changed capability for manage Reviews to 'manage_woocommerce'
* New: filter yith_ywar_manage_reviews_capability for let third party plugin to change the capability for managing the Reviews

= 1.3.4 - Released on 29 February 2016 =

* Fix: transient not deleted in all the needed cases give temporary wrong review values
* Fix: current object selected in wrong way in ywar-attachments.js
* Fix: string in ywar-attachments.js not localizable
* New: new action 'yith_ywar_product_reviews_updated' reporting an update for a product review

= 1.3.3 - Released on 28 January 2016 =

* Update: reviews are shown even if comments_open is false
* Fix: menu item shown twice

= 1.3.2 - Released on 27 January 2016 =

* Fix: admin edit link for reviews do not work

= 1.3.1 - Released on 26 January 2016 =

* Fix: conflict with YITH WooCommerce Gift Cards that prevents the sending of attachments
* Fix: the google rich snippet about the review date do not shows the review time

= 1.3.0 - Released on 04 January 2016 =

* Update: ready for WooCommerce 2.5
* New: action ywar_woocommerce_review_before_comment_text on review.php as replace for woocommerce_review_before_comment_text for WooCommerce 2.5+
* New: action ywar_woocommerce_review_after_comment_text on review.php as replace for woocommerce_review_after_comment_text for WooCommerce 2.5+

= 1.2.3 - Released on 21 December 2015 =

* Fix: author name shown twice on reviews table
* Fix: warning shown on WooCommerce reviews widget
* Update: improved reviews rating query performance

= 1.2.2 - Released on 26 November 2015 =

* Fix: review not submitted when "Ratings are required to leave a review" option is not set

= 1.2.1 - Released on 16 November 2015 =

* Update: YITH plugin framework loading starts on plugins_loaded instead of after_setup_theme
* New: review_label CSS class on ywar-product-reviews.php template file
* Fix: edit reviews fails
* Fix: user cannot edit if reply functionality was not set

= 1.2.0 - Released on 05 November 2015 =

* Update: YITH plugin framework
* Update: add CSS class "clearfix" on single review template
* New: optionally limit a verified customer from submitting multiple reviews for the same product
* New: user can edit a previous review
* Fix: don't show "Reply" button if the user has not permission to write a review
* Update: changes to ywar-product-reviews.php template for stopping multiple reviews from a single verified customer
* Update: in ywar-product-reviews.php template all elements are wrapped inside a div with id "ywar_reviews"
* New: author information on back end reviews table.

= 1.1.14 - Released on 14 October 2015 =

* Fix: name of the user not shown if the reviews is submitted by a guest not logged in.

= 1.1.13 - Released on 07 October 2015 =

* Update: text-domain changed to yith-woocommerce-advanced-reviews.

= 1.1.12 - Released on 23 September 2015 =

* New: improved query performance for low resources server.
* Fix: sometimes items was not shown clicking on a view on reviews back end page.

= 1.1.11 - Released on 21 September 2015 =

* New: admins can reply to review from site front end even if woocommerce setting - Only allow reviews from "verified owners" - is checked.
* Fix: replies from admins written from site front end are shown without moderation.
* New: check for empty content before trying to submit a review

= 1.1.10 - Released on 03 September 2015 =

* Fix: CSS issue on pages other than "Reviews" page.

= 1.1.9 - Released on 28 August 2015 =

* Fix: Review average rating was calculated including also unapproved reviews.

= 1.1.8 - Released on 27 August 2015 =

* Tweak: update YITH Plugin framework.

= 1.1.7 - Released on 20 July 2015 =

* Fix: blog comments conflict.

= 1.1.6 - Released on 17 July 2015 =

* Fix: wrong product average rating.

= 1.1.5 - Released on 14 July 2015 =

* Fix: review title not shown.

= 1.1.4 - Released on May 21 , 2015 =

* New: new filter before showing review content elements.

= 1.1.3 - Released on May 12 , 2015 =

* Fix: when the review author is unknown, it was shown admin user as content author.

= 1.1.2 - Released on May 11 , 2015 =

* New: Custom template are fully overwritable from theme files.

= 1.1.1 - Released on May 07 , 2015 =

* Fix: Call to undefined function session_status for previous PHP version.

= 1.1.0 - Released on May 06 , 2015 =

* New: advanced reviews custom post type.
* New: you can set the reviews as featured, in this way these will be showed before the others and highlighted compared to a normal review
* New: a report to view the statistics about the value of the reviews, with minimum, maximum and average rate.
* New: allow users to report inappropriate contents.
* New: hide temporarily a review if this receives a number of inappropriate reports higher than a customized value
* New: check the review status from a single page, choosing if a review is approved, featured, inappropriate, with blocked answers and so on.
* New: filter the reviews by status or update the status with bulk actions
* New: sort reviews by received rates, both positive and negative.

= 1.0.11 - Released on 10 April 2015 =

* Fix: some string was not correctly translated.

= 1.0.10 - Released on 09 April 2015 =

* New: new option let admin to manually approve reviews before they are shown on product page.

= 1.0.9 - Released on 05 March 2015 =

* New: support WPML
* Fix: Minor bugs
* Added : new option for allowing anonymous users to vote the reviews.
* New: admins can interact with reviews from product page on back-end.

= 1.0.8 - Released on 26 February 2015 =

* Fix: adding a rating to a reviews failed after a "reply to" attempt.

= 1.0.7 - Released on 12 February 2015 =

* New: Woocommerce 2.3 support
* Tweak: String translation

= 1.0.6 - Released on 06 February 2015 =

* Tweak: Buttons with WooCommerce style
* Fix: "Load more" button style strong appearance
* Tweak: Review summary overwritten by theme
* Fix: Css issues
* Fix: Duplicate load more button
* Fix: Submit form disappears after Reply to

= 1.0.5 - Released on 04 February 2015 =

* Tweak: Plugin core framework

= 1.0.4 - Released on 02 February 2015 =

* Fix: Minor bugs

= 1.0.3 - Released on 30 January 2015 =

* Tweak: Plugin core framework
* Tweak: Theme integration

= 1.0.0 - Released on 07 January 2015 =

* Initial Released