<!doctype html>
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="vi">
 <!--<![endif]-->
 <head> 
  <title>Đọc và ghi file trong java (Bài 5) | Gia Sư Tin Học</title> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="pingback" href="https://giasutinhoc.vn/xmlrpc.php"> 
  <meta name="robots" content="max-image-preview:large"> 
  <meta property="og:image" content="https://giasutinhoc.vn/wp-content/uploads/2019/04/doc-va-ghi-file-trong-java-1.jpg">
  <link rel="icon" type="image/png" href="https://giasutinhoc.vn/wp-content/uploads/2019/03/favicon-32x32.png">
  <link rel="dns-prefetch" href="//fonts.googleapis.com"> 
  <link rel="dns-prefetch" href="//s.w.org"> 
  <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Gia Sư Tin Học »" href="https://giasutinhoc.vn/feed/"> 
  <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Gia Sư Tin Học »" href="https://giasutinhoc.vn/comments/feed/"> 
  <script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/giasutinhoc.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script> 
  <style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style> 
  <link rel="stylesheet" id="wp-block-library-css" href="https://giasutinhoc.vn/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2" type="text/css" media="all"> 
  <link rel="stylesheet" id="contact-form-7-css" href="https://giasutinhoc.vn/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.4.1" type="text/css" media="all"> 
  <link rel="stylesheet" id="td-plugin-multi-purpose-css" href="https://giasutinhoc.vn/wp-content/plugins/td-composer/td-multi-purpose/style.css?ver=3328da2481dfce47ccb29fd8f8bc649a" type="text/css" media="all"> 
  <link rel="stylesheet" id="google-fonts-style-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400%2C400italic%2C600%2C600italic%2C700%7CRoboto%3A300%2C400%2C400italic%2C500%2C500italic%2C700%2C900&amp;ver=9.6" type="text/css" media="all"> 
  <link rel="stylesheet" id="td-theme-css" href="https://giasutinhoc.vn/wp-content/themes/newspaper/style.css?ver=9.6" type="text/css" media="all"> 
  <link rel="stylesheet" id="td-theme-demo-style-css" href="https://giasutinhoc.vn/wp-content/themes/newspaper/includes/demos/tech/demo_style.css?ver=9.6" type="text/css" media="all"> 
  <link rel="stylesheet" id="mystickyelements-google-fonts-css" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700&amp;ver=5.8.2" type="text/css" media="all"> 
  <link rel="stylesheet" id="font-awesome-css-css" href="https://giasutinhoc.vn/wp-content/plugins/mystickyelements/css/font-awesome.min.css?ver=1.9.5" type="text/css" media="all"> 
  <link rel="stylesheet" id="mystickyelements-front-css-css" href="https://giasutinhoc.vn/wp-content/plugins/mystickyelements/css/mystickyelements-front.min.css?ver=1.9.5" type="text/css" media="all"> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-includes/js/jquery/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script> 
  <link rel="https://api.w.org/" href="https://giasutinhoc.vn/wp-json/">
  <link rel="alternate" type="application/json" href="https://giasutinhoc.vn/wp-json/wp/v2/posts/7040">
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://giasutinhoc.vn/xmlrpc.php?rsd"> 
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://giasutinhoc.vn/wp-includes/wlwmanifest.xml"> 
  <meta name="generator" content="WordPress 5.8.2"> 
  <link rel="canonical" href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2/"> 
  <link rel="shortlink" href="https://giasutinhoc.vn/?p=7040"> 
  <link rel="alternate" type="application/json+oembed" href="https://giasutinhoc.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgiasutinhoc.vn%2Flap-trinh%2Flap-trinh-java-co-ban%2Fdoc-va-ghi-file-trong-java-bai-5-2%2F"> 
  <link rel="alternate" type="text/xml+oembed" href="https://giasutinhoc.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgiasutinhoc.vn%2Flap-trinh%2Flap-trinh-java-co-ban%2Fdoc-va-ghi-file-trong-java-bai-5-2%2F&amp;format=xml"> 
  <script>
				window.tdwGlobal = {"adminUrl":"https:\/\/giasutinhoc.vn\/wp-admin\/","wpRestNonce":"f8058d43cc","wpRestUrl":"https:\/\/giasutinhoc.vn\/wp-json\/","permalinkStructure":"\/%category%\/%postname%\/"};
			</script> 
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--> 
  <!-- JS generated by theme --> 
  <script>
    
    

	    var tdBlocksArray = []; //here we store all the items for the current page

	    //td_block class - each ajax block uses a object of this class for requests
	    function tdBlock() {
		    this.id = '';
		    this.block_type = 1; //block type id (1-234 etc)
		    this.atts = '';
		    this.td_column_number = '';
		    this.td_current_page = 1; //
		    this.post_count = 0; //from wp
		    this.found_posts = 0; //from wp
		    this.max_num_pages = 0; //from wp
		    this.td_filter_value = ''; //current live filter value
		    this.is_ajax_running = false;
		    this.td_user_action = ''; // load more or infinite loader (used by the animation)
		    this.header_color = '';
		    this.ajax_pagination_infinite_stop = ''; //show load more at page x
	    }


        // td_js_generator - mini detector
        (function(){
            var htmlTag = document.getElementsByTagName("html")[0];

	        if ( navigator.userAgent.indexOf("MSIE 10.0") > -1 ) {
                htmlTag.className += ' ie10';
            }

            if ( !!navigator.userAgent.match(/Trident.*rv\:11\./) ) {
                htmlTag.className += ' ie11';
            }

	        if ( navigator.userAgent.indexOf("Edge") > -1 ) {
                htmlTag.className += ' ieEdge';
            }

            if ( /(iPad|iPhone|iPod)/g.test(navigator.userAgent) ) {
                htmlTag.className += ' td-md-is-ios';
            }

            var user_agent = navigator.userAgent.toLowerCase();
            if ( user_agent.indexOf("android") > -1 ) {
                htmlTag.className += ' td-md-is-android';
            }

            if ( -1 !== navigator.userAgent.indexOf('Mac OS X')  ) {
                htmlTag.className += ' td-md-is-os-x';
            }

            if ( /chrom(e|ium)/.test(navigator.userAgent.toLowerCase()) ) {
               htmlTag.className += ' td-md-is-chrome';
            }

            if ( -1 !== navigator.userAgent.indexOf('Firefox') ) {
                htmlTag.className += ' td-md-is-firefox';
            }

            if ( -1 !== navigator.userAgent.indexOf('Safari') && -1 === navigator.userAgent.indexOf('Chrome') ) {
                htmlTag.className += ' td-md-is-safari';
            }

            if( -1 !== navigator.userAgent.indexOf('IEMobile') ){
                htmlTag.className += ' td-md-is-iemobile';
            }

        })();




        var tdLocalCache = {};

        ( function () {
            "use strict";

            tdLocalCache = {
                data: {},
                remove: function (resource_id) {
                    delete tdLocalCache.data[resource_id];
                },
                exist: function (resource_id) {
                    return tdLocalCache.data.hasOwnProperty(resource_id) && tdLocalCache.data[resource_id] !== null;
                },
                get: function (resource_id) {
                    return tdLocalCache.data[resource_id];
                },
                set: function (resource_id, cachedData) {
                    tdLocalCache.remove(resource_id);
                    tdLocalCache.data[resource_id] = cachedData;
                }
            };
        })();

    
    
var td_viewport_interval_list=[{"limitBottom":767,"sidebarWidth":228},{"limitBottom":1018,"sidebarWidth":300},{"limitBottom":1140,"sidebarWidth":324}];
var td_animation_stack_effect="type0";
var tds_animation_stack=true;
var td_animation_stack_specific_selectors=".entry-thumb, img";
var td_animation_stack_general_selectors=".td-animation-stack img, .td-animation-stack .entry-thumb, .post img";
var td_ajax_url="https:\/\/giasutinhoc.vn\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=9.6";
var td_get_template_directory_uri="https:\/\/giasutinhoc.vn\/wp-content\/themes\/newspaper";
var tds_snap_menu="smart_snap_always";
var tds_logo_on_sticky="show_header_logo";
var tds_header_style="2";
var td_please_wait="Vui l\u00f2ng ch\u1edd...";
var td_email_user_pass_incorrect="Ng\u01b0\u1eddi d\u00f9ng ho\u1eb7c m\u1eadt kh\u1ea9u kh\u00f4ng ch\u00ednh x\u00e1c!";
var td_email_user_incorrect="Email ho\u1eb7c t\u00e0i kho\u1ea3n kh\u00f4ng ch\u00ednh x\u00e1c!";
var td_email_incorrect="Email kh\u00f4ng \u0111\u00fang!";
var tds_more_articles_on_post_enable="show";
var tds_more_articles_on_post_time_to_wait="";
var tds_more_articles_on_post_pages_distance_from_top=0;
var tds_theme_color_site_wide="#f3bd50";
var tds_smart_sidebar="enabled";
var tdThemeName="Newspaper";
var td_magnific_popup_translation_tPrev="Tr\u01b0\u1edbc (Left arrow key)";
var td_magnific_popup_translation_tNext="Ti\u1ebfp (Right arrow key)";
var td_magnific_popup_translation_tCounter="%curr% c\u1ee7a %total%";
var td_magnific_popup_translation_ajax_tError="Kh\u00f4ng th\u1ec3 t\u1ea3i n\u1ed9i dung t\u1ea1i %url%";
var td_magnific_popup_translation_image_tError="Kh\u00f4ng th\u1ec3 t\u1ea3i \u1ea3nh #%curr%";
var tdDateNamesI18n={"month_names":["Th\u00e1ng M\u1ed9t","Th\u00e1ng Hai","Th\u00e1ng Ba","Th\u00e1ng T\u01b0","Th\u00e1ng N\u0103m","Th\u00e1ng S\u00e1u","Th\u00e1ng B\u1ea3y","Th\u00e1ng T\u00e1m","Th\u00e1ng Ch\u00edn","Th\u00e1ng M\u01b0\u1eddi","Th\u00e1ng M\u01b0\u1eddi M\u1ed9t","Th\u00e1ng M\u01b0\u1eddi Hai"],"month_names_short":["Th1","Th2","Th3","Th4","Th5","Th6","Th7","Th8","Th9","Th10","Th11","Th12"],"day_names":["Ch\u1ee7 Nh\u1eadt","Th\u1ee9 Hai","Th\u1ee9 Ba","Th\u1ee9 T\u01b0","Th\u1ee9 N\u0103m","Th\u1ee9 S\u00e1u","Th\u1ee9 B\u1ea3y"],"day_names_short":["CN","T2","T3","T4","T5","T6","T7"]};
var td_ad_background_click_link="";
var td_ad_background_click_target="";
</script> 
  <!-- Header style compiled by theme --> 
  <style>
    
.td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .td-header-style-12 .td-header-menu-wrap-full,
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .td-header-style-12 .td-affix,
    .header-search-wrap .td-drop-down-search:after,
    .header-search-wrap .td-drop-down-search .btn:hover,
    input[type=submit]:hover,
    .td-read-more a,
    .td-post-category:hover,
    .td-grid-style-1.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td-grid-style-5.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td_top_authors .td-active .td-author-post-count,
    .td_top_authors .td-active .td-author-comments-count,
    .td_top_authors .td_mod_wrap:hover .td-author-post-count,
    .td_top_authors .td_mod_wrap:hover .td-author-comments-count,
    .td-404-sub-sub-title a:hover,
    .td-search-form-widget .wpb_button:hover,
    .td-rating-bar-wrap div,
    .td_category_template_3 .td-current-sub-category,
    .dropcap,
    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper,
    .wpb_default,
    .wpb_default:hover,
    .td-left-smart-list:hover,
    .td-right-smart-list:hover,
    .woocommerce-checkout .woocommerce input.button:hover,
    .woocommerce-page .woocommerce a.button:hover,
    .woocommerce-account div.woocommerce .button:hover,
    #bbpress-forums button:hover,
    .bbp_widget_login .button:hover,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .widget_product_search input[type="submit"]:hover,
    .woocommerce .product a.button:hover,
    .woocommerce .product #respond input#submit:hover,
    .woocommerce .checkout input#place_order:hover,
    .woocommerce .woocommerce.widget .button:hover,
    .single-product .product .summary .cart .button:hover,
    .woocommerce-cart .woocommerce table.cart .button:hover,
    .woocommerce-cart .woocommerce .shipping-calculator-form .button:hover,
    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
    #bbpress-forums .bbp-pagination .current,
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
    .td-theme-slider:hover .slide-meta-cat a,
    a.vc_btn-black:hover,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .td-scroll-up,
    .td-smart-list-button:hover,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td_block_big_grid_9.td-grid-style-1 .td-post-category,
    .td_block_big_grid_9.td-grid-style-5 .td-post-category,
    .td-grid-style-6.td-hover-1 .td-module-thumb:after,
    .td-pulldown-syle-2 .td-subcat-dropdown ul:after,
    .td_block_template_9 .td-block-title:after,
    .td_block_template_15 .td-block-title:before,
    div.wpforms-container .wpforms-form div.wpforms-submit-container button[type=submit] {
        background-color: #f3bd50;
    }

    .td_block_template_4 .td-related-title .td-cur-simple-item:before {
        border-color: #f3bd50 transparent transparent transparent !important;
    }

    .woocommerce .woocommerce-message .button:hover,
    .woocommerce .woocommerce-error .button:hover,
    .woocommerce .woocommerce-info .button:hover {
        background-color: #f3bd50 !important;
    }
    
    
    .td_block_template_4 .td-related-title .td-cur-simple-item,
    .td_block_template_3 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title:after {
        background-color: #f3bd50;
    }

    .woocommerce .product .onsale,
    .woocommerce.widget .ui-slider .ui-slider-handle {
        background: none #f3bd50;
    }

    .woocommerce.widget.widget_layered_nav_filters ul li a {
        background: none repeat scroll 0 0 #f3bd50 !important;
    }

    a,
    cite a:hover,
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td-mega-span h3 a:hover,
    .td_mod_mega_menu:hover .entry-title a,
    .header-search-wrap .result-msg a:hover,
    .td-header-top-menu .td-drop-down-search .td_module_wrap:hover .entry-title a,
    .td-header-top-menu .td-icon-search:hover,
    .td-header-wrap .result-msg a:hover,
    .top-header-menu li a:hover,
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .td-social-icon-wrap > a:hover,
    .td-header-sp-top-widget .td-social-icon-wrap a:hover,
    .td-page-content blockquote p,
    .td-post-content blockquote p,
    .mce-content-body blockquote p,
    .comment-content blockquote p,
    .wpb_text_column blockquote p,
    .td_block_text_with_title blockquote p,
    .td_module_wrap:hover .entry-title a,
    .td-subcat-filter .td-subcat-list a:hover,
    .td-subcat-filter .td-subcat-dropdown a:hover,
    .td_quote_on_blocks,
    .dropcap2,
    .dropcap3,
    .td_top_authors .td-active .td-authors-name a,
    .td_top_authors .td_mod_wrap:hover .td-authors-name a,
    .td-post-next-prev-content a:hover,
    .author-box-wrap .td-author-social a:hover,
    .td-author-name a:hover,
    .td-author-url a:hover,
    .td_mod_related_posts:hover h3 > a,
    .td-post-template-11 .td-related-title .td-related-left:hover,
    .td-post-template-11 .td-related-title .td-related-right:hover,
    .td-post-template-11 .td-related-title .td-cur-simple-item,
    .td-post-template-11 .td_block_related_posts .td-next-prev-wrap a:hover,
    .comment-reply-link:hover,
    .logged-in-as a:hover,
    #cancel-comment-reply-link:hover,
    .td-search-query,
    .td-category-header .td-pulldown-category-filter-link:hover,
    .td-category-siblings .td-subcat-dropdown a:hover,
    .td-category-siblings .td-subcat-dropdown a.td-current-sub-category,
    .widget a:hover,
    .td_wp_recentcomments a:hover,
    .archive .widget_archive .current,
    .archive .widget_archive .current a,
    .widget_calendar tfoot a:hover,
    .woocommerce a.added_to_cart:hover,
    .woocommerce-account .woocommerce-MyAccount-navigation a:hover,
    #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,
    #bbpress-forums .bbp-forum-freshness a:hover,
    #bbpress-forums .bbp-topic-freshness a:hover,
    #bbpress-forums .bbp-forums-list li a:hover,
    #bbpress-forums .bbp-forum-title:hover,
    #bbpress-forums .bbp-topic-permalink:hover,
    #bbpress-forums .bbp-topic-started-by a:hover,
    #bbpress-forums .bbp-topic-started-in a:hover,
    #bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,
    #bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,
    .widget_display_replies .bbp-author-name,
    .widget_display_topics .bbp-author-name,
    .footer-text-wrap .footer-email-wrap a,
    .td-subfooter-menu li a:hover,
    .footer-social-wrap a:hover,
    a.vc_btn-black:hover,
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td_module_17 .td-read-more a:hover,
    .td_module_18 .td-read-more a:hover,
    .td_module_19 .td-post-author-name a:hover,
    .td-instagram-user a,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more i,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more i,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
    .td_block_template_2 .td-related-title .td-cur-simple-item,
    .td_block_template_5 .td-related-title .td-cur-simple-item,
    .td_block_template_6 .td-related-title .td-cur-simple-item,
    .td_block_template_7 .td-related-title .td-cur-simple-item,
    .td_block_template_8 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title .td-cur-simple-item,
    .td_block_template_10 .td-related-title .td-cur-simple-item,
    .td_block_template_11 .td-related-title .td-cur-simple-item,
    .td_block_template_12 .td-related-title .td-cur-simple-item,
    .td_block_template_13 .td-related-title .td-cur-simple-item,
    .td_block_template_14 .td-related-title .td-cur-simple-item,
    .td_block_template_15 .td-related-title .td-cur-simple-item,
    .td_block_template_16 .td-related-title .td-cur-simple-item,
    .td_block_template_17 .td-related-title .td-cur-simple-item,
    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu ul .sfHover > a,
    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-menu-item > a,
    .td_outlined_btn,
     .td_block_categories_tags .td-ct-item:hover {
        color: #f3bd50;
    }

    a.vc_btn-black.vc_btn_square_outlined:hover,
    a.vc_btn-black.vc_btn_outlined:hover,
    .td-mega-menu-page .wpb_content_element ul li a:hover,
    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
    .td-theme-wrap .header-search-wrap .result-msg a:hover {
        color: #f3bd50 !important;
    }

    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
    #bbpress-forums .bbp-pagination .current,
    .post .td_quote_box,
    .page .td_quote_box,
    a.vc_btn-black:hover,
    .td_block_template_5 .td-block-title > *,
    .td_outlined_btn {
        border-color: #f3bd50;
    }

    .td_wrapper_video_playlist .td_video_currently_playing:after {
        border-color: #f3bd50 !important;
    }

    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent #f3bd50 transparent;
    }

    .block-title > span,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .woocommerce .product .products h2:not(.woocommerce-loop-product__title),
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more, 
    .td_3D_btn,
    .td_shadow_btn,
    .td_default_btn,
    .td_round_btn, 
    .td_outlined_btn:hover {
    	background-color: #f3bd50;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    	background-color: #f3bd50 !important;
    }

    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .woocommerce div.product .woocommerce-tabs ul.tabs:before {
        border-color: #f3bd50;
    }
    .td_block_wrap .td-subcat-item a.td-cur-simple-item {
	    color: #f3bd50;
	}


    
    .td-grid-style-4 .entry-title
    {
        background-color: rgba(243, 189, 80, 0.7);
    }

    
    .block-title > span,
    .block-title > span > a,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .woocommerce .product .products h2:not(.woocommerce-loop-product__title),
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td-theme-wrap .td_block_template_3 .td-block-title > *,
    .td-theme-wrap .td_block_template_4 .td-block-title > *,
    .td-theme-wrap .td_block_template_7 .td-block-title > *,
    .td-theme-wrap .td_block_template_9 .td-block-title:after,
    .td-theme-wrap .td_block_template_10 .td-block-title::before,
    .td-theme-wrap .td_block_template_11 .td-block-title::before,
    .td-theme-wrap .td_block_template_11 .td-block-title::after,
    .td-theme-wrap .td_block_template_14 .td-block-title,
    .td-theme-wrap .td_block_template_15 .td-block-title:before,
    .td-theme-wrap .td_block_template_17 .td-block-title:before {
        background-color: #bebebe;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    	background-color: #bebebe !important;
    }

    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .woocommerce div.product .woocommerce-tabs ul.tabs:before,
    .td-theme-wrap .td_block_template_5 .td-block-title > *,
    .td-theme-wrap .td_block_template_17 .td-block-title,
    .td-theme-wrap .td_block_template_17 .td-block-title::before {
        border-color: #bebebe;
    }

    .td-theme-wrap .td_block_template_4 .td-block-title > *:before,
    .td-theme-wrap .td_block_template_17 .td-block-title::after {
        border-color: #bebebe transparent transparent transparent;
    }
    
    .td-theme-wrap .td_block_template_4 .td-related-title .td-cur-simple-item:before {
        border-color: #bebebe transparent transparent transparent !important;
    }

    
    .td-header-wrap .td-header-top-menu-full,
    .td-header-wrap .top-header-menu .sub-menu {
        background-color: #bebebe;
    }
    .td-header-style-8 .td-header-top-menu-full {
        background-color: transparent;
    }
    .td-header-style-8 .td-header-top-menu-full .td-header-top-menu {
        background-color: #bebebe;
        padding-left: 15px;
        padding-right: 15px;
    }

    .td-header-wrap .td-header-top-menu-full .td-header-top-menu,
    .td-header-wrap .td-header-top-menu-full {
        border-bottom: none;
    }


    
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .td_block_mega_menu .td-next-prev-wrap a:hover,
    .td-mega-span .td-post-category:hover,
    .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a {
        background-color: #ffffff;
    }


    .td_block_mega_menu .td-next-prev-wrap a:hover {
        border-color: #ffffff;
    }

    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent #ffffff transparent;
    }

    .td_mega_menu_sub_cats .cur-sub-cat,
    .td_mod_mega_menu:hover .entry-title a,
    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu ul .sfHover > a,
    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-menu-item > a {
        color: #ffffff;
    }
    
    
    
    .td-header-wrap .td-header-menu-wrap .sf-menu > li > a,
    .td-header-wrap .td-header-menu-social .td-social-icon-wrap a,
    .td-header-style-4 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-5 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-6 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-12 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-wrap .header-search-wrap #td-header-search-button .td-icon-search {
        color: #f3bd50;
    }
    .td-header-wrap .td-header-menu-social + .td-search-wrapper #td-header-search-button:before {
      background-color: #f3bd50;
    }
    
    
    .td-theme-wrap .sf-menu .td-normal-menu .sub-menu .td-menu-item > a {
        color: #f3bd50;
    }

    
    .td-theme-wrap .sf-menu .td-normal-menu .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu .td-normal-menu .sfHover > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-category-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-item > a {
        color: #f3bd50;
    }

    
    .td-theme-wrap .td_mod_mega_menu:hover .entry-title a,
    .td-theme-wrap .sf-menu .td_mega_menu_sub_cats .cur-sub-cat {
        color: #f3bd50;
    }
    .td-theme-wrap .sf-menu .td-mega-menu .td-post-category:hover,
    .td-theme-wrap .td-mega-menu .td-next-prev-wrap a:hover {
        background-color: #f3bd50;
    }
    .td-theme-wrap .td-mega-menu .td-next-prev-wrap a:hover {
        border-color: #f3bd50;
    }

    
    .td-theme-wrap .header-search-wrap .td-drop-down-search .btn:hover {
        background-color: #f3bd50;
    }
    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
    .td-theme-wrap .header-search-wrap .result-msg a:hover {
        color: #f3bd50 !important;
    }

    
    @media (max-width: 767px) {
        body .td-header-wrap .td-header-main-menu {
            background-color: #f3bd50 !important;
        }
    }


    
    .td-menu-background:before,
    .td-search-background:before {
        background: #f3bd50;
        background: -moz-linear-gradient(top, #f3bd50 0%, #bebebe 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, #f3bd50), color-stop(100%, #bebebe));
        background: -webkit-linear-gradient(top, #f3bd50 0%, #bebebe 100%);
        background: -o-linear-gradient(top, #f3bd50 0%, #bebebe 100%);
        background: -ms-linear-gradient(top, #f3bd50 0%, #bebebe 100%);
        background: linear-gradient(to bottom, #f3bd50 0%, #bebebe 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3bd50', endColorstr='#bebebe', GradientType=0 );
    }

    
    .td-mobile-content .current-menu-item > a,
    .td-mobile-content .current-menu-ancestor > a,
    .td-mobile-content .current-category-ancestor > a,
    #td-mobile-nav .td-menu-login-section a:hover,
    #td-mobile-nav .td-register-section a:hover,
    #td-mobile-nav .td-menu-socials-wrap a:hover i,
    .td-search-close a:hover i {
        color: #f3bd50;
    }

    
    .white-popup-block:after {
        background: rgba(0,0,0,0.8);
        background: -moz-linear-gradient(45deg, rgba(0,0,0,0.8) 0%, rgba(74,197,219,0.8) 100%);
        background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(0,0,0,0.8)), color-stop(100%, rgba(74,197,219,0.8)));
        background: -webkit-linear-gradient(45deg, rgba(0,0,0,0.8) 0%, rgba(74,197,219,0.8) 100%);
        background: -o-linear-gradient(45deg, rgba(0,0,0,0.8) 0%, rgba(74,197,219,0.8) 100%);
        background: -ms-linear-gradient(45deg, rgba(0,0,0,0.8) 0%, rgba(74,197,219,0.8) 100%);
        background: linear-gradient(45deg, rgba(0,0,0,0.8) 0%, rgba(74,197,219,0.8) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgba(0,0,0,0.8)', endColorstr='rgba(74,197,219,0.8)', GradientType=0 );
    }


    
    .td-banner-wrap-full,
    .td-header-style-11 .td-logo-wrap-full {
        background-color: #f7f7f7;
    }

    .td-header-style-11 .td-logo-wrap-full {
        border-bottom: 0;
    }

    @media (min-width: 1019px) {
        .td-header-style-2 .td-header-sp-recs,
        .td-header-style-5 .td-a-rec-id-header > div,
        .td-header-style-5 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-6 .td-a-rec-id-header > div,
        .td-header-style-6 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-7 .td-a-rec-id-header > div,
        .td-header-style-7 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-8 .td-a-rec-id-header > div,
        .td-header-style-8 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-12 .td-a-rec-id-header > div,
        .td-header-style-12 .td-g-rec-id-header > .adsbygoogle {
            margin-bottom: 24px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1018px) {
        .td-header-style-2 .td-header-sp-recs,
        .td-header-style-5 .td-a-rec-id-header > div,
        .td-header-style-5 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-6 .td-a-rec-id-header > div,
        .td-header-style-6 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-7 .td-a-rec-id-header > div,
        .td-header-style-7 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-8 .td-a-rec-id-header > div,
        .td-header-style-8 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-12 .td-a-rec-id-header > div,
        .td-header-style-12 .td-g-rec-id-header > .adsbygoogle {
            margin-bottom: 14px !important;
        }
    }

     
    .td-footer-wrapper,
    .td-footer-wrapper .td_block_template_7 .td-block-title > *,
    .td-footer-wrapper .td_block_template_17 .td-block-title,
    .td-footer-wrapper .td-block-title-wrap .td-wrapper-pulldown-filter {
        background-color: #bebebe;
    }

    
    .td-footer-wrapper,
    .td-footer-wrapper a,
    .td-footer-wrapper .block-title a,
    .td-footer-wrapper .block-title span,
    .td-footer-wrapper .block-title label,
    .td-footer-wrapper .td-excerpt,
    .td-footer-wrapper .td-post-author-name span,
    .td-footer-wrapper .td-post-date,
    .td-footer-wrapper .td-social-style3 .td_social_type a,
    .td-footer-wrapper .td-social-style3,
    .td-footer-wrapper .td-social-style4 .td_social_type a,
    .td-footer-wrapper .td-social-style4,
    .td-footer-wrapper .td-social-style9,
    .td-footer-wrapper .td-social-style10,
    .td-footer-wrapper .td-social-style2 .td_social_type a,
    .td-footer-wrapper .td-social-style8 .td_social_type a,
    .td-footer-wrapper .td-social-style2 .td_social_type,
    .td-footer-wrapper .td-social-style8 .td_social_type,
    .td-footer-template-13 .td-social-name,
    .td-footer-wrapper .td_block_template_7 .td-block-title > * {
        color: #000000;
    }

    .td-footer-wrapper .widget_calendar th,
    .td-footer-wrapper .widget_calendar td,
    .td-footer-wrapper .td-social-style2 .td_social_type .td-social-box,
    .td-footer-wrapper .td-social-style8 .td_social_type .td-social-box,
    .td-social-style-2 .td-icon-font:after {
        border-color: #000000;
    }

    .td-footer-wrapper .td-module-comments a,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .td-slide-meta .td-post-author-name span,
    .td-footer-wrapper .td-slide-meta .td-post-date {
        color: #fff;
    }

    
    .td-footer-bottom-full .td-container::before {
        background-color: rgba(0, 0, 0, 0.1);
    }

    
    .td-sub-footer-container {
        background-color: #bebebe;
    }

    
    .td-sub-footer-container,
    .td-subfooter-menu li a {
        color: #ffffff;
    }

    
    .td-subfooter-menu li a:hover {
        color: #ffffff;
    }


    
    .td-menu-background,
    .td-search-background {
        background-image: url('https://giasutinhoc.vn/wp-content/uploads/2019/03/14-1.jpg');
    }

    
    .white-popup-block:before {
        background-image: url('https://giasutinhoc.vn/wp-content/uploads/2019/03/14-1.jpg');
    }

    
    .td-excerpt,
    .td_module_14 .td-excerpt {
        font-family:"Open Sans";
	font-size:13px;
	line-height:21px;
	
    }


	
    .td-post-content p,
    .td-post-content {
        font-family:"Open Sans";
	font-size:17px;
	line-height:31px;
	
    }
</style> 
  <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@type": "WebSite",
                    "@id": "https://giasutinhoc.vn/",
                    "name": "Trang chủ"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                    "item": {
                    "@type": "WebPage",
                    "@id": "https://giasutinhoc.vn/chuyen-muc/lap-trinh/",
                    "name": "Lập trình"
                }
            }
            ,{
                "@type": "ListItem",
                "position": 3,
                    "item": {
                    "@type": "WebPage",
                    "@id": "https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/",
                    "name": "Lập trình Java cơ bản"                                
                }
            }
            ,{
                "@type": "ListItem",
                "position": 4,
                    "item": {
                    "@type": "WebPage",
                    "@id": "https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2/",
                    "name": "Đọc và ghi file trong java (Bài 5)"                                
                }
            }    
        ]
    }
</script> 
  <!-- Button style compiled by theme --> 
  <style>
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .sfHover > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > li > a:hover,
                .tdm_block_column_content:hover .tdm-col-content-title-url .tdm-title,
                .tds-button2 .tdm-btn-text,
                .tds-button2 i,
                .tds-button5:hover .tdm-btn-text,
                .tds-button5:hover i,
                .tds-button6 .tdm-btn-text,
                .tds-button6 i,
                .tdm_block_list .tdm-list-item i,
                .tdm_block_pricing .tdm-pricing-feature i,
                .tdm-social-item i {
                  color: #f3bd50;
                }
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > li > a:hover,
                .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .sfHover > a,
                .tds-button1,
                .tds-button6:after,
                .tds-title2 .tdm-title-line:after,
                .tds-title3 .tdm-title-line:after,
                .tdm_block_pricing.tdm-pricing-featured:before,
                .tdm_block_pricing.tds_pricing2_block.tdm-pricing-featured .tdm-pricing-header,
                .tds-progress-bar1 .tdm-progress-bar:after,
                .tds-progress-bar2 .tdm-progress-bar:after,
                .tds-social3 .tdm-social-item {
                  background-color: #f3bd50;
                }
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > li > a:hover,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .sfHover > a,
                .tds-button2:before,
                .tds-button6:before,
                .tds-progress-bar3 .tdm-progress-bar:after {
                  border-color: #f3bd50;
                }
                .tdm-btn-style1 {
					background-color: #f3bd50;
				}
				.tdm-btn-style2:before {
				    border-color: #f3bd50;
				}
				.tdm-btn-style2 {
				    color: #f3bd50;
				}
				.tdm-btn-style3 {
				    -webkit-box-shadow: 0 2px 16px #f3bd50;
                    -moz-box-shadow: 0 2px 16px #f3bd50;
                    box-shadow: 0 2px 16px #f3bd50;
				}
				.tdm-btn-style3:hover {
				    -webkit-box-shadow: 0 4px 26px #f3bd50;
                    -moz-box-shadow: 0 4px 26px #f3bd50;
                    box-shadow: 0 4px 26px #f3bd50;
				}
				
				
                .tdm-header-style-1.td-header-wrap .td-header-top-menu-full,
                .tdm-header-style-1.td-header-wrap .top-header-menu .sub-menu,
                .tdm-header-style-2.td-header-wrap .td-header-top-menu-full,
                .tdm-header-style-2.td-header-wrap .top-header-menu .sub-menu,
                .tdm-header-style-3.td-header-wrap .td-header-top-menu-full,
                .tdm-header-style-3.td-header-wrap .top-header-menu .sub-menu{
                    background-color: #bebebe;
                }
				
				
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > li > a:hover,
                .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .sfHover > a {
                  color: #ffffff;
                }
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style4 .tdm-header .sf-menu > li > a:hover,
                .tdm-menu-active-style4 .tdm-header .sf-menu > .sfHover > a {
                  border-color: #ffffff;
                }
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-menu-item > a,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-menu-ancestor > a,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-category-ancestor > a,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > li > a:hover,
                .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .sfHover > a {
                  background-color: #ffffff;
                }
				
				
				.tdm-menu-btn1 .tds-button1,
				.tdm-menu-btn1 .tds-button6:after {
					background-color: #57ad68;
				}
				.tdm-menu-btn1 .tds-button2:before,
				.tdm-menu-btn1 .tds-button6:before {
				    border-color: #57ad68;
				}
				.tdm-menu-btn1 .tds-button2,
				.tdm-menu-btn1 .tds-button2 i {
				    color: #57ad68;
				}
				.tdm-menu-btn1 .tds-button3 {
				    -webkit-box-shadow: 0 2px 16px #57ad68;
                    -moz-box-shadow: 0 2px 16px #57ad68;
                    box-shadow: 0 2px 16px #57ad68;
				}
				.tdm-menu-btn1 .tds-button3:hover {
				    -webkit-box-shadow: 0 4px 26px #57ad68;
                    -moz-box-shadow: 0 4px 26px #57ad68;
                    box-shadow: 0 4px 26px #57ad68;
				}
				
				
				.tdm-menu-btn2 .tds-button1,
				.tdm-menu-btn2 .tds-button6:after {
					background-color: #57ad68;
				}
				.tdm-menu-btn2 .tds-button2:before,
				.tdm-menu-btn2 .tds-button6:before {
				    border-color: #57ad68;
				}
				.tdm-menu-btn2 .tds-button2,
				.tdm-menu-btn2 .tds-button2 i {
				    color: #57ad68;
				}
				.tdm-menu-btn2 .tds-button3 {
				    -webkit-box-shadow: 0 2px 16px #57ad68;
                    -moz-box-shadow: 0 2px 16px #57ad68;
                    box-shadow: 0 2px 16px #57ad68;
				}
				.tdm-menu-btn2 .tds-button3:hover {
				    -webkit-box-shadow: 0 4px 26px #57ad68;
                    -moz-box-shadow: 0 4px 26px #57ad68;
                    box-shadow: 0 4px 26px #57ad68;
				}
</style> 
  <style id="tdw-css-placeholder"></style> 
  <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script> 
 </head> 
 <body data-rsssl="1" class="post-template-default single single-post postid-7040 single-format-standard doc-va-ghi-file-trong-java-bai-5-2 global-block-template-1 td-tech single_template_2 td-animation-stack-type0 td-full-layout" itemscope itemtype="https://schema.org/WebPage"> 
  <amp-auto-ads type="adsense" data-ad-client="ca-pub-8828212448454125"> 
  </amp-auto-ads> 
  <div class="td-scroll-up">
   <i class="td-icon-menu-up"></i>
  </div> 
  <div class="td-menu-background"></div> 
  <div id="td-mobile-nav"> 
   <div class="td-mobile-container"> 
    <!-- mobile menu top section --> 
    <div class="td-menu-socials-wrap"> 
     <!-- socials --> 
     <div class="td-menu-socials"> 
      <span class="td-social-icon-wrap"> <a target="_blank" href="https://www.facebook.com/giasutinhoc.vn/" title="Facebook"> <i class="td-icon-font td-icon-facebook"></i> </a> </span> 
      <span class="td-social-icon-wrap"> <a target="_blank" href="mailto:giasutinhoc.vn@gmail.com" title="Mail"> <i class="td-icon-font td-icon-mail-1"></i> </a> </span> 
      <span class="td-social-icon-wrap"> <a target="_blank" href="https://join.skype.com/invite/jmjNazhX9Zoo" title="Skype"> <i class="td-icon-font td-icon-skype"></i> </a> </span> 
      <span class="td-social-icon-wrap"> <a target="_blank" href="https://www.youtube.com/channel/UCkOd34k838iIo9fhdKjvg5w/videos" title="Youtube"> <i class="td-icon-font td-icon-youtube"></i> </a> </span> 
     </div> 
     <!-- close button --> 
     <div class="td-mobile-close"> 
      <a href="#"><i class="td-icon-close-mobile"></i></a> 
     </div> 
    </div> 
    <!-- login section --> 
    <!-- menu section --> 
    <div class="td-mobile-content"> 
     <div class="menu-top-menu-container">
      <ul id="menu-top-menu" class="td-mobile-main-menu">
       <li id="menu-item-6715" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-first menu-item-6715"><a title="						" href="https://giasutinhoc.vn">Trang chủ</a></li> 
       <li id="menu-item-6739" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6739"><a title="						" href="#">Lập trình<i class="td-icon-menu-right td-element-after"></i></a> 
        <ul class="sub-menu"> 
         <li id="menu-item-6725" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6725"><a title="						" href="https://giasutinhoc.vn/tin-noi-bat/gioi-thieu-nghe-lap-trinh/">Tổng quan về lập trình</a></li> 
         <li id="menu-item-6716" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6716"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-c-co-ban/">Lập trình C</a></li> 
         <li id="menu-item-6722" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6722"><a title="						" href="#">Lập trình Java<i class="td-icon-menu-right td-element-after"></i></a> 
          <ul class="sub-menu"> 
           <li id="menu-item-6719" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-6719"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/">Lập trình Java cơ bản</a></li> 
           <li id="menu-item-6718" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6718"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-co-so-du-lieu-voi-jdbc/">Lập trình Cơ sở dữ liệu</a></li> 
           <li id="menu-item-6732" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6732"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-giao-dien/">Lập trình giao diện</a></li> 
          </ul> </li> 
         <li id="menu-item-6720" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6720"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-c-sharp/">Lập trình C#</a></li> 
         <li id="menu-item-6721" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6721"><a title="						" href="#">Lập trình Android<i class="td-icon-menu-right td-element-after"></i></a> 
          <ul class="sub-menu"> 
           <li id="menu-item-6717" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6717"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-android-co-ban/">Lập trình Android cơ bản</a></li> 
           <li id="menu-item-6728" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6728"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/phat-trien-app-android/">Phát triển app android</a></li> 
           <li id="menu-item-6755" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6755"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-android-voi-kotlin/">Lập trình Android với Kotlin</a></li> 
          </ul> </li> 
         <li id="menu-item-6729" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6729"><a title="						" href="#">iOS<i class="td-icon-menu-right td-element-after"></i></a> 
          <ul class="sub-menu"> 
           <li id="menu-item-6730" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6730"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-swift/">Lập trình swift</a></li> 
           <li id="menu-item-6731" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6731"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-ios/">Lập trình iOS</a></li> 
          </ul> </li> 
         <li id="menu-item-6742" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6742"><a title="						" href="#">Lập trình đa nền tảng<i class="td-icon-menu-right td-element-after"></i></a> 
          <ul class="sub-menu"> 
           <li id="menu-item-6743" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6743"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-android-voi-xamarin/">Lập trình Android với Xamarin</a></li> 
           <li id="menu-item-6750" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6750"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-ios-voi-xamarin/">Lập trình iOS với Xamarin</a></li> 
           <li id="menu-item-6751" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6751"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-da-nen-tang-voi-xamarin/">Lập trình đa nền tảng với Xamarin</a></li> 
          </ul> </li> 
         <li id="menu-item-6733" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6733"><a title="						" href="#">Lập trình PHP<i class="td-icon-menu-right td-element-after"></i></a> 
          <ul class="sub-menu"> 
           <li id="menu-item-6734" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6734"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-php-co-ban/">Lập trình PHP cơ bản</a></li> 
          </ul> </li> 
         <li id="menu-item-6752" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6752"><a title="						" href="#">Kotlin<i class="td-icon-menu-right td-element-after"></i></a> 
          <ul class="sub-menu"> 
           <li id="menu-item-6753" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6753"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-kotlin/">Lập trình Kotlin</a></li> 
          </ul> </li> 
         <li id="menu-item-6744" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6744"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/libgdx/">Lập trình game với libGDX</a></li> 
        </ul> </li> 
       <li id="menu-item-6740" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6740"><a title="						" href="#">Database<i class="td-icon-menu-right td-element-after"></i></a> 
        <ul class="sub-menu"> 
         <li id="menu-item-6724" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6724"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/database/co-so-du-lieu/">Cơ sở dữ liệu</a></li> 
         <li id="menu-item-6749" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6749"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/database/sqlserver-2014/">SQL Server 2014</a></li> 
         <li id="menu-item-6726" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6726"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/database/quan-tri-csdl-voi-sql-server/">Quản trị SQL Server</a></li> 
        </ul> </li> 
       <li id="menu-item-6741" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6741"><a title="						" href="#">Website<i class="td-icon-menu-right td-element-after"></i></a> 
        <ul class="sub-menu"> 
         <li id="menu-item-6723" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6723"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/website/giao-trinh-thiet-ke-web/">Thiết kế web</a></li> 
         <li id="menu-item-6727" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6727"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/website/xml-va-json/">XML và JSON</a></li> 
         <li id="menu-item-7816" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7816"><a href="https://giasutinhoc.vn/chuyen-muc/website/spring-framework/">Spring Framework</a></li> 
         <li id="menu-item-6761" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6761"><a title="						" href="#">Angular</a></li> 
        </ul> </li> 
       <li id="menu-item-6745" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6745"><a title="						" href="#">Labs<i class="td-icon-menu-right td-element-after"></i></a> 
        <ul class="sub-menu"> 
         <li id="menu-item-6746" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6746"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-android-co-ban/">Lab Android cơ bản</a></li> 
         <li id="menu-item-6756" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6756"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-sql-server/">Lab SQL Server</a></li> 
         <li id="menu-item-6757" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6757"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-lap-trinh-c/">Thực hành lập trình C</a></li> 
         <li id="menu-item-6759" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6759"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-lap-trinh-csharp/">Lab lập trình C#</a></li> 
        </ul> </li> 
       <li id="menu-item-6747" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6747"><a title="						" href="#">Office<i class="td-icon-menu-right td-element-after"></i></a> 
        <ul class="sub-menu"> 
         <li id="menu-item-6748" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6748"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/tin-hoc-van-phong/excel/">Excel</a></li> 
         <li id="menu-item-6758" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6758"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/tin-hoc-van-phong/word/">Word</a></li> 
        </ul> </li> 
       <li id="menu-item-6735" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6735"><a title="						" href="#">Hướng dẫn<i class="td-icon-menu-right td-element-after"></i></a> 
        <ul class="sub-menu"> 
         <li id="menu-item-6738" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6738"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-java/">Hướng dẫn Java</a></li> 
         <li id="menu-item-6754" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6754"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-csharp/">C#</a></li> 
         <li id="menu-item-6736" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6736"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-android/">Hướng dẫn Android</a></li> 
         <li id="menu-item-6737" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6737"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-ios/">Hướng dẫn iOS</a></li> 
        </ul> </li> 
      </ul>
     </div> 
    </div> 
   </div> 
   <!-- register/login section --> 
  </div> 
  <div class="td-search-background"></div> 
  <div class="td-search-wrap-mob"> 
   <div class="td-drop-down-search" aria-labelledby="td-header-search-button"> 
    <form method="get" class="td-search-form" action="https://giasutinhoc.vn/"> 
     <!-- close button --> 
     <div class="td-search-close"> 
      <a href="#"><i class="td-icon-close-mobile"></i></a> 
     </div> 
     <div role="search" class="td-search-input"> 
      <span>Tìm kiếm</span> 
      <input id="td-header-search-mob" type="text" value="" name="s" autocomplete="off"> 
     </div> 
    </form> 
    <div id="td-aj-search-mob"></div> 
   </div> 
  </div> 
  <style>
        @media (max-width: 767px) {
            .td-header-desktop-wrap {
                display: none;
            }
        }
        @media (min-width: 767px) {
            .td-header-mobile-wrap {
                display: none;
            }
        }
    </style> 
  <div id="td-outer-wrap" class="td-theme-wrap"> 
   <div class="tdc-header-wrap "> 
    <!--
Header style 2
--> 
    <div class="td-header-wrap td-header-style-2 "> 
     <div class="td-header-top-menu-full td-container-wrap "> 
      <div class="td-container td-header-row td-header-top-menu"> 
       <div class="top-bar-style-1"> 
        <div class="td-header-sp-top-menu"> 
         <div class="menu-top-container">
          <ul id="menu-td-demo-top-menu" class="top-header-menu">
           <li id="menu-item-6813" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-first td-menu-item td-normal-menu menu-item-6813"><a href="https://giasutinhoc.vn/gioi-thieu/">Giới thiệu</a></li> 
           <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-30"><a target="_blank" rel="noopener" href="http://hlv.edu.vn">Chúng tôi có thứ mà bạn cần</a></li> 
          </ul>
         </div>
        </div> 
        <div class="td-header-sp-top-widget"> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="https://www.facebook.com/giasutinhoc.vn/" title="Facebook"> <i class="td-icon-font td-icon-facebook"></i> </a> </span> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="mailto:giasutinhoc.vn@gmail.com" title="Mail"> <i class="td-icon-font td-icon-mail-1"></i> </a> </span> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="https://join.skype.com/invite/jmjNazhX9Zoo" title="Skype"> <i class="td-icon-font td-icon-skype"></i> </a> </span> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="https://www.youtube.com/channel/UCkOd34k838iIo9fhdKjvg5w/videos" title="Youtube"> <i class="td-icon-font td-icon-youtube"></i> </a> </span> 
        </div> 
       </div> 
       <!-- LOGIN MODAL --> 
      </div> 
     </div> 
     <div class="td-header-menu-wrap-full td-container-wrap "> 
      <div class="td-header-menu-wrap td-header-gradient "> 
       <div class="td-container td-header-row td-header-main-menu"> 
        <div id="td-header-menu" role="navigation"> 
         <div id="td-top-mobile-toggle">
          <a href="#"><i class="td-icon-font td-icon-mobile"></i></a>
         </div> 
         <div class="td-main-menu-logo td-logo-in-header"> 
          <a class="td-mobile-logo td-sticky-header" href="https://giasutinhoc.vn/"> <img src="https://localhost:7777/wordpress/wp-content/uploads/2019/03/tech-footer-1.png" alt=""> </a> 
          <a class="td-header-logo td-sticky-header" href="https://giasutinhoc.vn/"> <img class="td-retina-data" data-retina="https://giasutinhoc.vn/wp-content/uploads/2019/03/gsth_logo.png" src="https://giasutinhoc.vn/wp-content/uploads/2019/03/gsth_logo.png" alt=""> </a> 
         </div> 
         <div class="menu-top-menu-container">
          <ul id="menu-top-menu-1" class="sf-menu">
           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-first td-menu-item td-normal-menu menu-item-6715"><a title="						" href="https://giasutinhoc.vn">Trang chủ</a></li> 
           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6739"><a title="						" href="#">Lập trình</a> 
            <ul class="sub-menu"> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-6725"><a title="						" href="https://giasutinhoc.vn/tin-noi-bat/gioi-thieu-nghe-lap-trinh/">Tổng quan về lập trình</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6716"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-c-co-ban/">Lập trình C</a></li> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6722"><a title="						" href="#">Lập trình Java</a> 
              <ul class="sub-menu"> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent td-menu-item td-normal-menu menu-item-6719"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/">Lập trình Java cơ bản</a></li> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6718"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-co-so-du-lieu-voi-jdbc/">Lập trình Cơ sở dữ liệu</a></li> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6732"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-giao-dien/">Lập trình giao diện</a></li> 
              </ul> </li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6720"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-c-sharp/">Lập trình C#</a></li> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6721"><a title="						" href="#">Lập trình Android</a> 
              <ul class="sub-menu"> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6717"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-android-co-ban/">Lập trình Android cơ bản</a></li> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6728"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/phat-trien-app-android/">Phát triển app android</a></li> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6755"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-android-voi-kotlin/">Lập trình Android với Kotlin</a></li> 
              </ul> </li> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6729"><a title="						" href="#">iOS</a> 
              <ul class="sub-menu"> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6730"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-swift/">Lập trình swift</a></li> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6731"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-ios/">Lập trình iOS</a></li> 
              </ul> </li> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6742"><a title="						" href="#">Lập trình đa nền tảng</a> 
              <ul class="sub-menu"> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6743"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-android-voi-xamarin/">Lập trình Android với Xamarin</a></li> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6750"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-ios-voi-xamarin/">Lập trình iOS với Xamarin</a></li> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6751"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-da-nen-tang-voi-xamarin/">Lập trình đa nền tảng với Xamarin</a></li> 
              </ul> </li> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6733"><a title="						" href="#">Lập trình PHP</a> 
              <ul class="sub-menu"> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6734"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-php-co-ban/">Lập trình PHP cơ bản</a></li> 
              </ul> </li> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6752"><a title="						" href="#">Kotlin</a> 
              <ul class="sub-menu"> 
               <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6753"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-kotlin/">Lập trình Kotlin</a></li> 
              </ul> </li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6744"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/libgdx/">Lập trình game với libGDX</a></li> 
            </ul> </li> 
           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6740"><a title="						" href="#">Database</a> 
            <ul class="sub-menu"> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6724"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/database/co-so-du-lieu/">Cơ sở dữ liệu</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6749"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/database/sqlserver-2014/">SQL Server 2014</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6726"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/database/quan-tri-csdl-voi-sql-server/">Quản trị SQL Server</a></li> 
            </ul> </li> 
           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6741"><a title="						" href="#">Website</a> 
            <ul class="sub-menu"> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6723"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/website/giao-trinh-thiet-ke-web/">Thiết kế web</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6727"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/website/xml-va-json/">XML và JSON</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-7816"><a href="https://giasutinhoc.vn/chuyen-muc/website/spring-framework/">Spring Framework</a></li> 
             <li class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-6761"><a title="						" href="#">Angular</a></li> 
            </ul> </li> 
           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6745"><a title="						" href="#">Labs</a> 
            <ul class="sub-menu"> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6746"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-android-co-ban/">Lab Android cơ bản</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6756"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-sql-server/">Lab SQL Server</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6757"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-lap-trinh-c/">Thực hành lập trình C</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6759"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/labs/lab-lap-trinh-csharp/">Lab lập trình C#</a></li> 
            </ul> </li> 
           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6747"><a title="						" href="#">Office</a> 
            <ul class="sub-menu"> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6748"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/tin-hoc-van-phong/excel/">Excel</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6758"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/tin-hoc-van-phong/word/">Word</a></li> 
            </ul> </li> 
           <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children td-menu-item td-normal-menu menu-item-6735"><a title="						" href="#">Hướng dẫn</a> 
            <ul class="sub-menu"> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6738"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-java/">Hướng dẫn Java</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6754"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-csharp/">C#</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6736"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-android/">Hướng dẫn Android</a></li> 
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-normal-menu menu-item-6737"><a title="						" href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-ios/">Hướng dẫn iOS</a></li> 
            </ul> </li> 
          </ul>
         </div>
        </div> 
        <div class="header-search-wrap"> 
         <div class="td-search-btns-wrap"> 
          <a id="td-header-search-button" href="#" role="button" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a> 
          <a id="td-header-search-button-mob" href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a> 
         </div> 
         <div class="td-drop-down-search" aria-labelledby="td-header-search-button"> 
          <form method="get" class="td-search-form" action="https://giasutinhoc.vn/"> 
           <div role="search" class="td-head-form-search-wrap"> 
            <input id="td-header-search" type="text" value="" name="s" autocomplete="off">
            <input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="Tìm kiếm"> 
           </div> 
          </form> 
          <div id="td-aj-search"></div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="td-banner-wrap-full td-container-wrap "> 
      <div class="td-container td-header-row td-header-header"> 
       <div class="td-header-sp-logo"> 
        <a class="td-main-logo" href="https://giasutinhoc.vn/"> <img class="td-retina-data" data-retina="https://giasutinhoc.vn/wp-content/uploads/2019/03/gsth_logo.png" src="https://giasutinhoc.vn/wp-content/uploads/2019/03/gsth_logo.png" alt=""> <span class="td-visual-hidden">Gia Sư Tin Học</span> </a> 
       </div> 
       <div class="td-header-sp-recs"> 
        <div class="td-header-rec-wrap"> 
         <div class="td-a-rec td-a-rec-id-header  td_uid_1_61a90582d9e00_rand td_block_template_1"> 
          <style>
/* custom css */
.td_uid_1_61a90582d9e00_rand.td-a-rec-img {
				    text-align: left;
				}
				.td_uid_1_61a90582d9e00_rand.td-a-rec-img img {
                    margin: 0 auto 0 0;
                }
</style>
          <a href="https://r2s.edu.vn/khoa-hoc-lap-trinh-android-tu-co-ban-den-nang-cao-voi-java/" target="_blank"><img src="https://giasutinhoc.vn/wp-content/uploads/2021/10/R2S_GSTH.png"></a>
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="td-main-content-wrap td-container-wrap"> 
    <div class="td-container td-post-template-2"> 
     <article id="post-7040" class="post-7040 post type-post status-publish format-standard has-post-thumbnail hentry category-lap-trinh-java-co-ban tag-doc-file tag-ghi-file tag-java-co-ban tag-xu-ly-file" itemscope itemtype="https://schema.org/Article"> 
      <div class="td-pb-row"> 
       <div class="td-pb-span12"> 
        <div class="td-post-header"> 
         <div class="td-crumb-container">
          <div class="entry-crumbs">
           <span><a title="" class="entry-crumb" href="https://giasutinhoc.vn/">Trang chủ</a></span> 
           <i class="td-icon-right td-bread-sep"></i> 
           <span><a title="Xem tất cả bài viết trong Lập trình" class="entry-crumb" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/">Lập trình</a></span> 
           <i class="td-icon-right td-bread-sep"></i> 
           <span><a title="Xem tất cả bài viết trong Lập trình Java cơ bản" class="entry-crumb" href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/">Lập trình Java cơ bản</a></span> 
           <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> 
           <span class="td-bred-no-url-last">Đọc và ghi file trong java (Bài 5)</span>
          </div>
         </div> 
         <ul class="td-category">
          <li class="entry-category"><a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/">Lập trình</a></li>
          <li class="entry-category"><a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/">Lập trình Java cơ bản</a></li>
         </ul> 
         <header class="td-post-title"> 
          <h1 class="entry-title">Đọc và ghi file trong java (Bài 5)</h1> 
          <div class="td-module-meta-info"> 
           <div class="td-post-author-name">
            <div class="td-author-by">
             Bởi
            </div> 
            <a href="https://giasutinhoc.vn/author/admin/">admin</a>
            <div class="td-author-line">
              - 
            </div> 
           </div> 
           <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2019-04-09T20:42:23+00:00">09/04/2019</time></span> 
           <div class="td-post-views">
            <i class="td-icon-views"></i>
            <span class="td-nr-views-7040">84251</span>
           </div> 
           <div class="td-post-comments">
            <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2/#respond"><i class="td-icon-comments"></i>0</a>
           </div> 
          </div> 
         </header> 
        </div> 
       </div> 
      </div> 
      <!-- /.td-pb-row --> 
      <div class="td-pb-row"> 
       <div class="td-pb-span8 td-main-content" role="main"> 
        <div class="td-ss-main-content"> 
         <div class="td-post-sharing-top">
          <div id="td_social_sharing_article_top" class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
           <div class="td-post-sharing-visible">
            <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fgiasutinhoc.vn%2Flap-trinh%2Flap-trinh-java-co-ban%2Fdoc-va-ghi-file-trong-java-bai-5-2%2F"> 
             <div class="td-social-but-icon">
              <i class="td-icon-facebook"></i>
             </div> 
             <div class="td-social-but-text">
              Facebook
             </div> </a>
            <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter" href="https://twitter.com/intent/tweet?text=%C4%90%E1%BB%8Dc+v%C3%A0+ghi+file+trong+java+%28B%C3%A0i+5%29&amp;url=https%3A%2F%2Fgiasutinhoc.vn%2Flap-trinh%2Flap-trinh-java-co-ban%2Fdoc-va-ghi-file-trong-java-bai-5-2%2F&amp;via=Gia+S%C6%B0+Tin+H%E1%BB%8Dc"> 
             <div class="td-social-but-icon">
              <i class="td-icon-twitter"></i>
             </div> 
             <div class="td-social-but-text">
              Twitter
             </div> </a>
           </div>
           <div class="td-social-sharing-hidden">
            <ul class="td-pulldown-filter-list"></ul>
            <a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#" data-block-uid="td_social_sharing_article_top"> 
             <div class="td-social-but-icon">
              <i class="td-icon-plus td-social-expand-tabs-icon"></i>
             </div> </a>
           </div>
          </div>
         </div> 
         <div class="td-post-content"> 
          <!-- A generated by theme --> 
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <div class="td-g-rec td-g-rec-id-content_top td_uid_2_61a90582df6e3_rand td_block_template_1 "> 
           <style>
/* custom css */
.td_uid_2_61a90582df6e3_rand.td-a-rec-img {
				    text-align: left;
				}
				.td_uid_2_61a90582df6e3_rand.td-a-rec-img img {
                    margin: 0 auto 0 0;
                }
</style>
           <script type="text/javascript">
var td_screen_width = window.innerWidth;

                    if ( td_screen_width >= 1140 ) {
                        /* large monitors */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
            
	                    if ( td_screen_width >= 1019  && td_screen_width < 1140 ) {
	                        /* landscape tablets */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
	                        (adsbygoogle = window.adsbygoogle || []).push({});
	                    }
	                
                    if ( td_screen_width >= 768  && td_screen_width < 1019 ) {
                        /* portrait tablets */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                
                    if ( td_screen_width < 768 ) {
                        /* Phones */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                </script> 
          </div> 
          <!-- end A --> 
          <p><strong>Đọc và ghi file trong java</strong> là các&nbsp;hoạt động <strong>nhập/xuất</strong> dữ liệu (nhập dữ liệu từ bàn phím, đọc dữ liệu từ file, ghi dữ liệu lên màn hình, ghi ra file, ghi ra đĩa, ghi ra máy in…) đều được gọi là <strong>luồng </strong>(stream).</p> 
          <h2><strong>Đọc và ghi file trong java – Các loại luồng dữ liệu</strong></h2> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-1.jpg" alt="đọc và ghi file trong java" class="wp-image-3829">
           </figure>
          </div> 
          <p><strong>Có 2 kiểu luồng trong Java</strong></p> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-2.jpg" alt="đọc và ghi file trong java" class="wp-image-3830">
           </figure>
          </div> 
          <p><strong>Kiến trúc Input Stream (Luồng nhập dữ liệu)</strong></p> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-3.jpg" alt="đọc và ghi file trong java" class="wp-image-3832">
           </figure>
          </div> 
          <p><strong>Kiến trúc Output Stream (Luồng xuất dữ liệu)</strong></p> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-4.jpg" alt="đọc và ghi file trong java" class="wp-image-3833">
           </figure>
          </div> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-5.jpg" alt="đọc và ghi file trong java" class="wp-image-3835">
           </figure>
          </div> 
          <h2><strong>Đọc và ghi file trong java – Các thao tác xử lý dữ liệu</strong></h2> 
          <ul>
           <li><strong>Bước 1:</strong>&nbsp;Tạo đối tượng luồng và liên kết với nguồn dữ liệu.</li>
           <li><strong>Bước 2:</strong>&nbsp;Thao tác dữ liệu (đọc hoặc ghi hoặc cả hai).</li>
           <li><strong>Bước 3:</strong> Đóng luồng.</li>
          </ul> 
          <p><strong>Xử lý nhập xuất dữ liệu sử dụng luồng byte</strong></p> 
          <p>Sử dụng luồng byte trong các trường hợp như <strong>n</strong><strong>hập xuất kiểu dữ liệu nguyên thủy </strong>(như kiểu int, float, double, boolean), <strong>nhập xuất kiểu dữ liệu kiểu đối tượng (object)</strong></p> 
          <p>Đọc và ghi dữ liệu nhị phân (binary data)</p> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-6.jpg" alt="đọc và ghi file trong java" class="wp-image-3837">
           </figure>
          </div> 
          <p>Một số phương thức xử lý dữ liệu nhị phân của class <strong>DataInputStream</strong></p> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <a href="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-7.jpg"><img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-7.jpg" alt="đọc và ghi file trong java" class="wp-image-3839"></a>
           </figure>
          </div> 
          <p>Một số phương thức xử lý dữ liệu nhị phân của class <strong>DataOutputStream</strong></p> 
          <div class="wp-block-image">
           <figure class="aligncenter">
            <a href="https://giasutinhoc.vn/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5/attachment/doc-va-ghi-file-trong-java-8/"><img src="https://giasutinhoc.vn/wp-content/uploads/2016/02/doc-va-ghi-file-trong-java-8.jpg" alt="đọc và ghi file trong java" class="wp-image-3840"></a>
           </figure>
          </div> 
          <p>Ví dụ 1: Ghi dữ liệu vào <strong>d:/mydata.bin</strong> với DataOutputStream</p> 
          <pre class="wp-block-code"><code>package file_handling;
import java.io.DataOutputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
/**
 *
 * @author giasutinhoc.vn
 */
public class DataOutputExample {
 public static void main(String[] args) { 
  try {
   //Bước 1: Tạo đối tượng luồng và liên kết nguồn dữ liệu
   FileOutputStream fos = new FileOutputStream("d:/file/mydata.bin");
   DataOutputStream dos = new DataOutputStream(fos);
   //Bước 2: Ghi dữ liệu
   dos.writeInt(100);
   dos.writeDouble(9.5);
   //Bước 3: Đóng luồng
   fos.close();
   dos.close();
   System.out.println("Done!");
  } catch (IOException ex) {
    ex.printStackTrace();
  } 
 }
} </code></pre> 
          <p>Ví dụ 2: Đọc dữ liệu chứa trong tập tin&nbsp;<strong>d:/mydata.bin</strong> với DataInputStream</p> 
          <pre class="wp-block-code"><code>package file_handling;
import java.io.DataInputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
/**
 *
 * @author giasutinhoc.vn
 */
public class DataInputExample {
 public static void main(String[] args) {
  try {
   //Bước 1: Tạo đối tượng luồng và liên kết nguồn dữ liệu
   FileInputStream fis = new FileInputStream("d:/file/mydata.bin");
   DataInputStream dis = new DataInputStream(fis);
   //Bước 2: Đọc dữ liệu
   int n = dis.readInt(); 
   double m = dis.readDouble();
   //Bước 3: Đóng luồng
   fis.close();
   dis.close();
   //Hiển thị nội dung đọc từ file
   System.out.println("Số nguyên: " + n);
   System.out.println("Số thực: " + m);
  } catch (IOException ex) {
    ex.printStackTrace();
  } 
 }
}</code></pre> 
          <p>Ví dụ 3: Đọc và ghi dữ liệu kiểu object</p> 
          <p>Tạo lớp Stock và lớp này phải cài đặt giao diện Serializable</p> 
          <pre class="wp-block-code"><code>package file;
import java.io.Serializable;
/**
 *
 * @author giasutinhoc.vn
 */
public class Stock implements Serializable{
 private int id;
 private String desc;
 private double price;
 private int quantity;
 public Stock(int id, String desc, double price, int quantity) {
   this.id = id;
   this.desc = desc;
   this.price = price;
   this.quantity = quantity;
 }
 @Override
 public String toString() {
    return id + "-" + desc + "-" + price + "-" + quantity;
 }
}</code></pre> 
          <p>Tạo lớp ObjectOutputExample dùng để ghi dữ liệu kiểu object</p> 
          <pre class="wp-block-code"><code>package file;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectOutputStream;
/**
 *
 * @author giasutinhoc.vn
 */
public class ObjectOutputExample {
 public static void main(String[] args) {
  try {
    //Bước 1: Tạo đối tượng luồng và liên kết nguồn dữ liệu
    FileOutputStream fos = new FileOutputStream("d:/mydata2.bin");
    ObjectOutputStream oos = new ObjectOutputStream(fos);
    //Khai báo mảng
    Stock s[] = {
     new Stock(1, "CD ROM", 100, 2)
    ,new Stock(2, "CPU", 500, 2)
    ,new Stock(3, "HP Scanner", 75, 1)
    };
   //Bước 2: Ghi mảng đối tượng vào file
   oos.writeObject(s);
   //Bước 3: Đóng luồng
   fos.close();
   oos.close();
 } catch (IOException ex) {
   System.out.println("Loi ghi file: "+ex);
 }
 }
}</code></pre> 
          <p>Tạo lớp ObjectInputExample dùng để đọc dữ liệu kiểu object</p> 
          <pre class="wp-block-code"><code>package file;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.ObjectInputStream;
/**
 *
 * @author giasutinhoc.vn
 */
public class ObjectInputExample {
 public static void main(String[] args) {
  try {
    //Bước 1: Tạo đối tượng luồng và liên kết nguồn dữ liệu
    FileInputStream fis = new FileInputStream("d:/mydata2.bin");
    ObjectInputStream ois = new ObjectInputStream(fis);
    //Bước 2: Đọc dữ liệu
    Stock sArr[] = (Stock[]) ois.readObject();
    for(Stock s : sArr){
      System.out.println(s.toString());
    }
    //Bước 3: Đóng luồng
    fis.close();
    ois.close();
  } catch (Exception ex) {
    System.out.println("Loi doc file: "+ex);
 }
 }
}</code></pre> 
          <p><strong>Xử lý nhập xuất dữ liệu bằng luồng character</strong></p> 
          <p>Luồng byte rất mạnh mẽ và linh hoạt. Tuy nhiên nếu bạn muốn <strong>lưu trữ file </strong>chứa <strong>văn bản Unicode </strong>thì luồng <strong>character</strong> là lựa chọn<strong> tốt nhất </strong>vì ưu điểm của luồng character là nó thao tác trực tiếp trên ký tự Unicode.</p> 
          <p>Tất cả các luồng character đều được kế thừa từ 2 lớp&nbsp;Reader và&nbsp;Writer</p> 
          <p>Ví dụ 1: Ghi dữ liệu với FileWriter</p> 
          <pre class="wp-block-code"><code>package file_handling;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
/**
 *
 * @author giasutinhoc.vn
 */
public class FileWriterExample {
 public static void main(String[] args) {
   try {
     //Bước 1: Tạo đối tượng luồng và liên kết nguồn dữ liệu
     File f = new File("d:/mydata3.txt");
     FileWriter fw = new FileWriter(f);
     //Bước 2: Ghi dữ liệu
     fw.write("Ghi dữ liệu bằng luồng character");
     //Bước 3: Đóng luồng
     fw.close();
   } catch (IOException ex) {
     System.out.println("Loi ghi file: " + ex);
 }
 }
}</code></pre> 
          <p>Ví dụ 2: Đọc&nbsp;dữ liệu với FileReader</p> 
          <pre class="wp-block-code"><code>package file_handling;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
/**
 *
 * @author giasutinhoc.vn
 */
public class FileReaderExample {
 public static void main(String[] args) {
   try {
     //Bước 1: Tạo đối tượng luồng và liên kết nguồn dữ liệu
     File f = new File("d:/mydata3.txt");
     FileReader fr = new FileReader(f);
     //Bước 2: Đọc dữ liệu
     BufferedReader br = new BufferedReader(fr);
     String line;
     while ((line = br.readLine()) != null){
       System.out.println(line);
     }
     //Bước 3: Đóng luồng
     fr.close();
     br.close();
    } catch (Exception ex) {
      System.out.println("Loi doc file: "+ex);
  }
 }
}</code></pre> 
          <div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center">
           <figure class="wp-block-media-text__media">
            <img loading="lazy" width="910" height="110" src="https://giasutinhoc.vn/wp-content/uploads/2021/05/NET-full-stack.png" alt="" class="wp-image-7842 size-full" srcset="https://giasutinhoc.vn/wp-content/uploads/2021/05/NET-full-stack.png 910w, https://giasutinhoc.vn/wp-content/uploads/2021/05/NET-full-stack-300x36.png 300w, https://giasutinhoc.vn/wp-content/uploads/2021/05/NET-full-stack-768x93.png 768w, https://giasutinhoc.vn/wp-content/uploads/2021/05/NET-full-stack-696x84.png 696w" sizes="(max-width: 910px) 100vw, 910px">
           </figure>
           <div class="wp-block-media-text__content"> 
            <p style="font-size:23px"><a rel="noreferrer noopener" href="https://r2s.edu.vn/chuong-trinh-net-web-full-stack-developer/" target="_blank">Xem chi tiết</a></p> 
           </div>
          </div> 
          <h2><strong>Đọc và ghi file trong java – Thực hành</strong></h2> 
          <p>Tạo package tên file và thực hiện các yêu cầu bên dưới</p> 
          <p><strong>Bài thực hành số 1:</strong> Tạo lớp NhanVien có các thuộc tính mã nhân viên, họ tên, tuổi và lương.</p> 
          <ul>
           <li>Viết setter, getter, constructor và toString.</li>
           <li>Viết&nbsp;phương thức cho phép nhập thông tin cho 3 nhân viên từ bàn phím. Sử dụng FileWriter để ghi thông tin vào nhanvien.txt.</li>
           <li>Viết phương thức để đọc nội dung file nhanvien.txt và in những gì đọc được từ file ra màn hình.</li>
          </ul> 
          <p><strong>Bài thực hành số 2:</strong> Tạo lớp mới và thực hiện các xử lý sau</p> 
          <ul>
           <li>Viết phương thức tạo mảng 3 nhân viên, nhập thông tin cho các nhân viên, sử dụng ObjectOutputStream để ghi mảng đối tượng nhân viên vào file nhanvien.bin</li>
           <li>Viết phương thức để đọc file nhanvien.bin và in mảng nhân viên ra màn hình.</li>
          </ul> 
          <div class="wp-block-contact-form-7-contact-form-selector">
           <div role="form" class="wpcf7" id="wpcf7-f7805-p7040-o1" lang="vi" dir="ltr"> 
            <div class="screen-reader-response">
             <p role="status" aria-live="polite" aria-atomic="true"></p> 
             <ul></ul>
            </div> 
            <form action="/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2/#wpcf7-f7805-p7040-o1" method="post" class="wpcf7-form init" novalidate data-status="init"> 
             <div style="display: none;"> 
              <input type="hidden" name="_wpcf7" value="7805"> 
              <input type="hidden" name="_wpcf7_version" value="5.4.1"> 
              <input type="hidden" name="_wpcf7_locale" value="vi"> 
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7805-p7040-o1"> 
              <input type="hidden" name="_wpcf7_container_post" value="7040"> 
              <input type="hidden" name="_wpcf7_posted_data_hash" value=""> 
             </div> 
             <p><label><br> </label></p>
             <h2><strong>Đăng ký nhận TÀI LIỆU, KHÓA HỌC hoặc TƯ VẤN từ ADMIN</strong></h2> 
             <p></p> 
             <p><label> Họ và tên (Bắt buộc nhập)<br> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p> 
             <p><label> Email (Bắt buộc nhập)<br> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p> 
             <p><label> Số điện thoại (Bắt buộc nhập)<br> <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p> 
             <p><label> Bạn cần hỗ trợ về (Bắt buộc chọn)<br> <span class="wpcf7-form-control-wrap your-program"><select name="your-program" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Source code các bài lab">Source code các bài lab</option><option value="Ebook">Ebook</option><option value="Về các khóa học">Về các khóa học</option><option value="Tư vấn về Chuyên môn, hướng nghiệp, việc làm">Tư vấn về Chuyên môn, hướng nghiệp, việc làm</option></select></span><br> </label></p> 
             <p><input type="submit" value="Gửi yêu cầu" class="wpcf7-form-control wpcf7-submit"></p> 
             <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
           </div>
          </div> 
          <!-- A generated by theme --> 
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <div class="td-g-rec td-g-rec-id-content_bottom td_uid_3_61a90582df9ff_rand td_block_template_1 "> 
           <style>
/* custom css */
.td_uid_3_61a90582df9ff_rand.td-a-rec-img {
				    text-align: left;
				}
				.td_uid_3_61a90582df9ff_rand.td-a-rec-img img {
                    margin: 0 auto 0 0;
                }
</style>
           <script type="text/javascript">
var td_screen_width = window.innerWidth;

                    if ( td_screen_width >= 1140 ) {
                        /* large monitors */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
            
	                    if ( td_screen_width >= 1019  && td_screen_width < 1140 ) {
	                        /* landscape tablets */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
	                        (adsbygoogle = window.adsbygoogle || []).push({});
	                    }
	                
                    if ( td_screen_width >= 768  && td_screen_width < 1019 ) {
                        /* portrait tablets */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:468px;height:60px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                
                    if ( td_screen_width < 768 ) {
                        /* Phones */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                </script> 
          </div> 
          <!-- end A --> 
         </div> 
         <footer> 
          <div class="td-post-source-tags"> 
           <ul class="td-tags td-post-small-box clearfix">
            <li><span>TAGS</span></li>
            <li><a href="https://giasutinhoc.vn/tag/doc-file/">đọc file</a></li>
            <li><a href="https://giasutinhoc.vn/tag/ghi-file/">ghi file</a></li>
            <li><a href="https://giasutinhoc.vn/tag/java-co-ban/">java cơ bản</a></li>
            <li><a href="https://giasutinhoc.vn/tag/xu-ly-file/">xử lý file</a></li>
           </ul> 
          </div> 
          <div class="td-post-sharing-bottom">
           <div class="td-post-sharing-classic">
            <iframe frameborder="0" src="https://www.facebook.com/plugins/like.php?href=https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2/&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none; overflow:hidden; width:105px; height:21px; background-color:transparent;"></iframe>
           </div>
           <div id="td_social_sharing_article_bottom" class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
            <div class="td-post-sharing-visible">
             <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fgiasutinhoc.vn%2Flap-trinh%2Flap-trinh-java-co-ban%2Fdoc-va-ghi-file-trong-java-bai-5-2%2F"> 
              <div class="td-social-but-icon">
               <i class="td-icon-facebook"></i>
              </div> 
              <div class="td-social-but-text">
               Facebook
              </div> </a>
             <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter" href="https://twitter.com/intent/tweet?text=%C4%90%E1%BB%8Dc+v%C3%A0+ghi+file+trong+java+%28B%C3%A0i+5%29&amp;url=https%3A%2F%2Fgiasutinhoc.vn%2Flap-trinh%2Flap-trinh-java-co-ban%2Fdoc-va-ghi-file-trong-java-bai-5-2%2F&amp;via=Gia+S%C6%B0+Tin+H%E1%BB%8Dc"> 
              <div class="td-social-but-icon">
               <i class="td-icon-twitter"></i>
              </div> 
              <div class="td-social-but-text">
               Twitter
              </div> </a>
            </div>
            <div class="td-social-sharing-hidden">
             <ul class="td-pulldown-filter-list"></ul>
             <a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#" data-block-uid="td_social_sharing_article_bottom"> 
              <div class="td-social-but-icon">
               <i class="td-icon-plus td-social-expand-tabs-icon"></i>
              </div> </a>
            </div>
           </div>
          </div> 
          <div class="td-block-row td-post-next-prev">
           <div class="td-block-span6 td-post-prev-post">
            <div class="td-post-next-prev-content">
             <span>Bài trước</span>
             <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/xu-ly-ngoai-le-trong-java-bai-4-2/">Xử lý ngoại lệ trong java (Bài 4)</a>
            </div>
           </div>
           <div class="td-next-prev-separator"></div>
           <div class="td-block-span6 td-post-next-post">
            <div class="td-post-next-prev-content">
             <span>Bài tiếp theo</span>
             <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/generic-trong-java-bai-6-2/">Generic trong java (Bài 6)</a>
            </div>
           </div>
          </div> 
          <div class="author-box-wrap">
           <a href="https://giasutinhoc.vn/author/admin/"><img alt="" src="https://secure.gravatar.com/avatar/81c40e21df0592d93aacf7fdc8297ce4?s=96&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/81c40e21df0592d93aacf7fdc8297ce4?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo" height="96" width="96" loading="lazy"></a>
           <div class="desc">
            <div class="td-author-name vcard author">
             <span class="fn"><a href="https://giasutinhoc.vn/author/admin/">admin</a></span>
            </div>
            <div class="td-author-description"></div>
            <div class="td-author-social"></div>
            <div class="clearfix"></div>
           </div>
          </div> 
          <span class="td-page-meta" itemprop="author" itemscope itemtype="https://schema.org/Person">
           <meta itemprop="name" content="admin"></span>
          <meta itemprop="datePublished" content="2019-04-09T20:42:23+00:00">
          <meta itemprop="dateModified" content="2021-05-19T15:03:53+07:00">
          <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2/">
          <span class="td-page-meta" itemprop="publisher" itemscope itemtype="https://schema.org/Organization"><span class="td-page-meta" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <meta itemprop="url" content="https://giasutinhoc.vn/wp-content/uploads/2019/03/gsth_logo.png"></span>
           <meta itemprop="name" content="Gia Sư Tin Học"></span>
          <meta itemprop="headline " content="Đọc và ghi file trong java (Bài 5)">
          <span class="td-page-meta" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
           <meta itemprop="url" content="https://giasutinhoc.vn/wp-content/uploads/2019/04/doc-va-ghi-file-trong-java-1.jpg">
           <meta itemprop="width" content="661">
           <meta itemprop="height" content="408"></span> 
         </footer> 
         <div class="td_block_wrap td_block_related_posts td_uid_4_61a90582e1371_rand td_with_ajax_pagination td-pb-border-top td_block_template_1" data-td-block-uid="td_uid_4_61a90582e1371">
          <script>var block_td_uid_4_61a90582e1371 = new tdBlock();
block_td_uid_4_61a90582e1371.id = "td_uid_4_61a90582e1371";
block_td_uid_4_61a90582e1371.atts = '{"limit":6,"ajax_pagination":"next_prev","live_filter":"cur_post_same_categories","td_ajax_filter_type":"td_custom_related","class":"td_uid_4_61a90582e1371_rand","td_column_number":3,"live_filter_cur_post_id":7040,"live_filter_cur_post_author":"1","block_template_id":"","header_color":"","ajax_pagination_infinite_stop":"","offset":"","td_ajax_preloading":"","td_filter_default_txt":"","td_ajax_filter_ids":"","el_class":"","color_preset":"","border_top":"","css":"","tdc_css":"","tdc_css_class":"td_uid_4_61a90582e1371_rand","tdc_css_class_style":"td_uid_4_61a90582e1371_rand_style"}';
block_td_uid_4_61a90582e1371.td_column_number = "3";
block_td_uid_4_61a90582e1371.block_type = "td_block_related_posts";
block_td_uid_4_61a90582e1371.post_count = "6";
block_td_uid_4_61a90582e1371.found_posts = "9";
block_td_uid_4_61a90582e1371.header_color = "";
block_td_uid_4_61a90582e1371.ajax_pagination_infinite_stop = "";
block_td_uid_4_61a90582e1371.max_num_pages = "2";
tdBlocksArray.push(block_td_uid_4_61a90582e1371);
</script>
          <h4 class="td-related-title td-block-title"><a id="td_uid_5_61a90582e2640" class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id="td_uid_4_61a90582e1371" href="#">BÀI VIẾT LIÊN QUAN</a><a id="td_uid_6_61a90582e2644" class="td-related-right" data-td_filter_value="td_related_more_from_author" data-td_block_id="td_uid_4_61a90582e1371" href="#">XEM THÊM</a></h4>
          <div id="td_uid_4_61a90582e1371" class="td_block_inner"> 
           <div class="td-related-row"> 
            <div class="td-related-span4"> 
             <div class="td_module_related_posts td-animation-stack td_mod_related_posts"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/internationalization-va-localization-trong-java-bai-9/" rel="bookmark" class="td-image-wrap" title="Internationalization và Localization trong Java (Bài 9)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Internationalization và Localization trong Java (Bài 9)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/internationalization-va-localization-trong-java-1-218x150.png" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/" class="td-post-category">Lập trình Java cơ bản</a> 
              </div> 
              <div class="item-details"> 
               <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/internationalization-va-localization-trong-java-bai-9/" rel="bookmark" title="Internationalization và Localization trong Java (Bài 9)">Internationalization và Localization trong Java (Bài 9)</a></h3> 
              </div> 
             </div> 
            </div> 
            <!-- ./td-related-span4 --> 
            <div class="td-related-span4"> 
             <div class="td_module_related_posts td-animation-stack td_mod_related_posts"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/design-pattern-trong-java-bai-8/" rel="bookmark" class="td-image-wrap" title="Design pattern trong java (Bài 8)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Design pattern trong java (Bài 8)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/design-pattern-trong-java-3-218x150.png" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/" class="td-post-category">Lập trình Java cơ bản</a> 
              </div> 
              <div class="item-details"> 
               <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/design-pattern-trong-java-bai-8/" rel="bookmark" title="Design pattern trong java (Bài 8)">Design pattern trong java (Bài 8)</a></h3> 
              </div> 
             </div> 
            </div> 
            <!-- ./td-related-span4 --> 
            <div class="td-related-span4"> 
             <div class="td_module_related_posts td-animation-stack td_mod_related_posts"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/da-luong-trong-java-bai-7/" rel="bookmark" class="td-image-wrap" title="Đa luồng trong java (Bài 7 )"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Đa luồng trong java (Bài 7 )" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/da-luong-trong-java-1-218x150.png" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/" class="td-post-category">Lập trình Java cơ bản</a> 
              </div> 
              <div class="item-details"> 
               <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/da-luong-trong-java-bai-7/" rel="bookmark" title="Đa luồng trong java (Bài 7 )">Đa luồng trong java (Bài 7 )</a></h3> 
              </div> 
             </div> 
            </div> 
            <!-- ./td-related-span4 -->
           </div>
           <!--./row-fluid--> 
           <div class="td-related-row"> 
            <div class="td-related-span4"> 
             <div class="td_module_related_posts td-animation-stack td_mod_related_posts"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/generic-trong-java-bai-6-2/" rel="bookmark" class="td-image-wrap" title="Generic trong java (Bài 6)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Generic trong java (Bài 6)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/generic-trong-java-1-218x150.jpg" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/" class="td-post-category">Lập trình Java cơ bản</a> 
              </div> 
              <div class="item-details"> 
               <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/generic-trong-java-bai-6-2/" rel="bookmark" title="Generic trong java (Bài 6)">Generic trong java (Bài 6)</a></h3> 
              </div> 
             </div> 
            </div> 
            <!-- ./td-related-span4 --> 
            <div class="td-related-span4"> 
             <div class="td_module_related_posts td-animation-stack td_mod_related_posts"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/xu-ly-ngoai-le-trong-java-bai-4-2/" rel="bookmark" class="td-image-wrap" title="Xử lý ngoại lệ trong java (Bài 4)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Xử lý ngoại lệ trong java (Bài 4)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/Xu-ly-ngoai-le-trong-java-3-218x150.jpg" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/" class="td-post-category">Lập trình Java cơ bản</a> 
              </div> 
              <div class="item-details"> 
               <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/xu-ly-ngoai-le-trong-java-bai-4-2/" rel="bookmark" title="Xử lý ngoại lệ trong java (Bài 4)">Xử lý ngoại lệ trong java (Bài 4)</a></h3> 
              </div> 
             </div> 
            </div> 
            <!-- ./td-related-span4 --> 
            <div class="td-related-span4"> 
             <div class="td_module_related_posts td-animation-stack td_mod_related_posts"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/package-trong-java-bai-3-2/" rel="bookmark" class="td-image-wrap" title="Package trong java (Bài 3)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Package trong java (Bài 3)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/package-trong-java-218x150.png" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/" class="td-post-category">Lập trình Java cơ bản</a> 
              </div> 
              <div class="item-details"> 
               <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/package-trong-java-bai-3-2/" rel="bookmark" title="Package trong java (Bài 3)">Package trong java (Bài 3)</a></h3> 
              </div> 
             </div> 
            </div> 
            <!-- ./td-related-span4 -->
           </div>
           <!--./row-fluid-->
          </div>
          <div class="td-next-prev-wrap">
           <a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_4_61a90582e1371" data-td_block_id="td_uid_4_61a90582e1371"><i class="td-icon-font td-icon-menu-left"></i></a>
           <a href="#" class="td-ajax-next-page" id="next-page-td_uid_4_61a90582e1371" data-td_block_id="td_uid_4_61a90582e1371"><i class="td-icon-font td-icon-menu-right"></i></a>
          </div>
         </div> 
         <!-- ./block --> 
         <div class="comments" id="comments"> 
         </div> 
         <!-- /.content --> 
        </div> 
       </div> 
       <div class="td-pb-span4 td-main-sidebar" role="complementary"> 
        <div class="td-ss-main-sidebar"> 
         <!-- A generated by theme --> 
         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
         <div class="td-g-rec td-g-rec-id-sidebar td_uid_7_61a90582e57f3_rand td_block_template_1 "> 
          <style>
/* custom css */
.td_uid_7_61a90582e57f3_rand.td-a-rec-img {
				    text-align: left;
				}
				.td_uid_7_61a90582e57f3_rand.td-a-rec-img img {
                    margin: 0 auto 0 0;
                }
</style>
          <script type="text/javascript">
var td_screen_width = window.innerWidth;

                    if ( td_screen_width >= 1140 ) {
                        /* large monitors */
                        document.write('<span class="td-adspot-title">- Advertisement -</span><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="8357803063"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
            
	                    if ( td_screen_width >= 1019  && td_screen_width < 1140 ) {
	                        /* landscape tablets */
                        document.write('<span class="td-adspot-title">- Advertisement -</span><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="8357803063"></ins>');
	                        (adsbygoogle = window.adsbygoogle || []).push({});
	                    }
	                
                    if ( td_screen_width >= 768  && td_screen_width < 1019 ) {
                        /* portrait tablets */
                        document.write('<span class="td-adspot-title">- Advertisement -</span><ins class="adsbygoogle" style="display:inline-block;width:200px;height:200px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="8357803063"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                
                    if ( td_screen_width < 768 ) {
                        /* Phones */
                        document.write('<span class="td-adspot-title">- Advertisement -</span><ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="8357803063"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                </script> 
         </div> 
         <!-- end A --> 
         <div class="td_block_wrap td_block_15 td_block_widget td_uid_8_61a90582e5b56_rand td_with_ajax_pagination td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid="td_uid_8_61a90582e5b56">
          <script>var block_td_uid_8_61a90582e5b56 = new tdBlock();
block_td_uid_8_61a90582e5b56.id = "td_uid_8_61a90582e5b56";
block_td_uid_8_61a90582e5b56.atts = '{"custom_title":"B\u00e0i vi\u1ebft n\u00ean xem","custom_url":"","block_template_id":"","header_color":"#","header_text_color":"#","accent_text_color":"#","mx4_tl":"","limit":"2","offset":"","el_class":"","post_ids":"","category_id":"","category_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","sort":"random_posts","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","ajax_pagination":"next_prev","ajax_pagination_infinite_stop":"","class":"td_block_widget td_uid_8_61a90582e5b56_rand","separator":"","show_modified_date":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","mx4f_title_font_header":"","mx4f_title_font_title":"Article title","mx4f_title_font_settings":"","mx4f_title_font_family":"","mx4f_title_font_size":"","mx4f_title_font_line_height":"","mx4f_title_font_style":"","mx4f_title_font_weight":"","mx4f_title_font_transform":"","mx4f_title_font_spacing":"","mx4f_title_":"","mx4f_cat_font_title":"Article category tag","mx4f_cat_font_settings":"","mx4f_cat_font_family":"","mx4f_cat_font_size":"","mx4f_cat_font_line_height":"","mx4f_cat_font_style":"","mx4f_cat_font_weight":"","mx4f_cat_font_transform":"","mx4f_cat_font_spacing":"","mx4f_cat_":"","css":"","tdc_css":"","td_column_number":1,"color_preset":"","border_top":"","tdc_css_class":"td_uid_8_61a90582e5b56_rand","tdc_css_class_style":"td_uid_8_61a90582e5b56_rand_style"}';
block_td_uid_8_61a90582e5b56.td_column_number = "1";
block_td_uid_8_61a90582e5b56.block_type = "td_block_15";
block_td_uid_8_61a90582e5b56.post_count = "2";
block_td_uid_8_61a90582e5b56.found_posts = "280";
block_td_uid_8_61a90582e5b56.header_color = "#";
block_td_uid_8_61a90582e5b56.ajax_pagination_infinite_stop = "";
block_td_uid_8_61a90582e5b56.max_num_pages = "140";
tdBlocksArray.push(block_td_uid_8_61a90582e5b56);
</script>
          <div class="td-block-title-wrap">
           <h4 class="block-title td-block-title"><span class="td-pulldown-size">Bài viết nên xem</span></h4>
          </div>
          <div id="td_uid_8_61a90582e5b56" class="td_block_inner td-column-1">
           <div class="td-cust-row"> 
            <div class="td-block-span12"> 
             <div class="td_module_mx4 td_module_wrap td-animation-stack"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/labs/lab-android-co-ban/huong-dan-doc-va-ghi-du-lieu-voi-internal-storage-trong-android-2/" rel="bookmark" class="td-image-wrap" title="Hướng dẫn đọc và ghi dữ liệu với internal storage trong Android"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Hướng dẫn đọc và ghi dữ liệu với internal storage trong Android" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/huong-dan-doc-va-ghi-du-lieu-voi-internal-storage-trong-android-1-1-218x150.png" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/labs/lab-android-co-ban/" class="td-post-category">Lab Android cơ bản</a> 
              </div> 
              <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/labs/lab-android-co-ban/huong-dan-doc-va-ghi-du-lieu-voi-internal-storage-trong-android-2/" rel="bookmark" title="Hướng dẫn đọc và ghi dữ liệu với internal storage trong Android">Hướng dẫn đọc và ghi dữ liệu với internal storage trong...</a></h3> 
             </div> 
            </div> 
            <!-- ./td-block-span12 --> 
            <div class="td-block-span12"> 
             <div class="td_module_mx4 td_module_wrap td-animation-stack"> 
              <div class="td-module-image"> 
               <div class="td-module-thumb">
                <a href="https://giasutinhoc.vn/database/sqlserver-2014/tao-table-trong-sql-server-2014-bai-3-2/" rel="bookmark" class="td-image-wrap" title="Tạo table trong SQL Server 2014 (Bài 3)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC" alt="" title="Tạo table trong SQL Server 2014 (Bài 3)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/tao-table-trong-sql-server-2014-1-1024x546-218x150.png" width="218" height="150"></a>
               </div> 
               <a href="https://giasutinhoc.vn/chuyen-muc/database/sqlserver-2014/" class="td-post-category">SQLServer 2014</a> 
              </div> 
              <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/database/sqlserver-2014/tao-table-trong-sql-server-2014-bai-3-2/" rel="bookmark" title="Tạo table trong SQL Server 2014 (Bài 3)">Tạo table trong SQL Server 2014 (Bài 3)</a></h3> 
             </div> 
            </div> 
            <!-- ./td-block-span12 -->
           </div>
          </div>
          <div class="td-next-prev-wrap">
           <a href="#" class="td-ajax-prev-page ajax-page-disabled" id="prev-page-td_uid_8_61a90582e5b56" data-td_block_id="td_uid_8_61a90582e5b56"><i class="td-icon-font td-icon-menu-left"></i></a>
           <a href="#" class="td-ajax-next-page" id="next-page-td_uid_8_61a90582e5b56" data-td_block_id="td_uid_8_61a90582e5b56"><i class="td-icon-font td-icon-menu-right"></i></a>
          </div>
         </div> 
         <!-- ./block -->
         <div class="clearfix"></div>
         <aside class="widget_text td_block_template_1 widget widget_custom_html">
          <div class="textwidget custom-html-widget">
           <div role="form" class="wpcf7" id="wpcf7-f7805-p7040-o2" lang="vi" dir="ltr"> 
            <div class="screen-reader-response">
             <p role="status" aria-live="polite" aria-atomic="true"></p> 
             <ul></ul>
            </div> 
            <form action="/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2/#wpcf7-f7805-p7040-o2" method="post" class="wpcf7-form init" novalidate data-status="init"> 
             <div style="display: none;"> 
              <input type="hidden" name="_wpcf7" value="7805"> 
              <input type="hidden" name="_wpcf7_version" value="5.4.1"> 
              <input type="hidden" name="_wpcf7_locale" value="vi"> 
              <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7805-p7040-o2"> 
              <input type="hidden" name="_wpcf7_container_post" value="7040"> 
              <input type="hidden" name="_wpcf7_posted_data_hash" value=""> 
             </div> 
             <p><label><br> </label></p>
             <h2><strong>Đăng ký nhận TÀI LIỆU, KHÓA HỌC hoặc TƯ VẤN từ ADMIN</strong></h2> 
             <p></p> 
             <p><label> Họ và tên (Bắt buộc nhập)<br> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p> 
             <p><label> Email (Bắt buộc nhập)<br> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p> 
             <p><label> Số điện thoại (Bắt buộc nhập)<br> <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p> 
             <p><label> Bạn cần hỗ trợ về (Bắt buộc chọn)<br> <span class="wpcf7-form-control-wrap your-program"><select name="your-program" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">---</option><option value="Source code các bài lab">Source code các bài lab</option><option value="Ebook">Ebook</option><option value="Về các khóa học">Về các khóa học</option><option value="Tư vấn về Chuyên môn, hướng nghiệp, việc làm">Tư vấn về Chuyên môn, hướng nghiệp, việc làm</option></select></span><br> </label></p> 
             <p><input type="submit" value="Gửi yêu cầu" class="wpcf7-form-control wpcf7-submit"></p> 
             <div class="wpcf7-response-output" aria-hidden="true"></div>
            </form>
           </div>
          </div>
         </aside> 
        </div> 
       </div> 
      </div> 
      <!-- /.td-pb-row --> 
     </article> 
     <!-- /.post --> 
    </div> 
    <!-- /.td-container --> 
   </div> 
   <!-- /.td-main-content-wrap --> 
   <!-- Instagram --> 
   <!-- Footer --> 
   <div class="td-footer-wrapper td-footer-container td-container-wrap "> 
    <div class="td-container"> 
     <div class="td-pb-row"> 
      <div class="td-pb-span12"> 
       <!-- A generated by theme --> 
       <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
       <div class="td-g-rec td-g-rec-id-footer_top td_uid_9_61a90582e8c85_rand td_block_template_1 "> 
        <style>
/* custom css */
.td_uid_9_61a90582e8c85_rand.td-a-rec-img {
				    text-align: left;
				}
				.td_uid_9_61a90582e8c85_rand.td-a-rec-img img {
                    margin: 0 auto 0 0;
                }
</style>
        <script type="text/javascript">
var td_screen_width = window.innerWidth;

                    if ( td_screen_width >= 1140 ) {
                        /* large monitors */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
            
	                    if ( td_screen_width >= 1019  && td_screen_width < 1140 ) {
	                        /* landscape tablets */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
	                        (adsbygoogle = window.adsbygoogle || []).push({});
	                    }
	                
                    if ( td_screen_width >= 768  && td_screen_width < 1019 ) {
                        /* portrait tablets */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                
                    if ( td_screen_width < 768 ) {
                        /* Phones */
                        document.write('<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-8828212448454125" data-ad-slot="3380808557"></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    }
                </script> 
       </div> 
       <!-- end A --> 
      </div> 
     </div> 
     <div class="td-pb-row"> 
      <div class="td-pb-span4"> 
       <div class="td_block_wrap td_block_7 td_uid_10_61a90582e9132_rand td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid="td_uid_10_61a90582e9132">
        <script>var block_td_uid_10_61a90582e9132 = new tdBlock();
block_td_uid_10_61a90582e9132.id = "td_uid_10_61a90582e9132";
block_td_uid_10_61a90582e9132.atts = '{"custom_title":"B\u00c0I VI\u1ebeT TI\u00caU BI\u1ec2U","limit":3,"sort":"featured","separator":"","custom_url":"","block_template_id":"","m6_tl":"","post_ids":"","category_id":"","category_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","offset":"","show_modified_date":"","el_class":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","m6f_title_font_header":"","m6f_title_font_title":"Article title","m6f_title_font_settings":"","m6f_title_font_family":"","m6f_title_font_size":"","m6f_title_font_line_height":"","m6f_title_font_style":"","m6f_title_font_weight":"","m6f_title_font_transform":"","m6f_title_font_spacing":"","m6f_title_":"","m6f_cat_font_title":"Article category tag","m6f_cat_font_settings":"","m6f_cat_font_family":"","m6f_cat_font_size":"","m6f_cat_font_line_height":"","m6f_cat_font_style":"","m6f_cat_font_weight":"","m6f_cat_font_transform":"","m6f_cat_font_spacing":"","m6f_cat_":"","m6f_meta_font_title":"Article meta info","m6f_meta_font_settings":"","m6f_meta_font_family":"","m6f_meta_font_size":"","m6f_meta_font_line_height":"","m6f_meta_font_style":"","m6f_meta_font_weight":"","m6f_meta_font_transform":"","m6f_meta_font_spacing":"","m6f_meta_":"","ajax_pagination":"","ajax_pagination_infinite_stop":"","css":"","tdc_css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"td_uid_10_61a90582e9132_rand","tdc_css_class":"td_uid_10_61a90582e9132_rand","tdc_css_class_style":"td_uid_10_61a90582e9132_rand_style"}';
block_td_uid_10_61a90582e9132.td_column_number = "1";
block_td_uid_10_61a90582e9132.block_type = "td_block_7";
block_td_uid_10_61a90582e9132.post_count = "3";
block_td_uid_10_61a90582e9132.found_posts = "280";
block_td_uid_10_61a90582e9132.header_color = "";
block_td_uid_10_61a90582e9132.ajax_pagination_infinite_stop = "";
block_td_uid_10_61a90582e9132.max_num_pages = "94";
tdBlocksArray.push(block_td_uid_10_61a90582e9132);
</script>
        <div class="td-block-title-wrap">
         <h4 class="block-title td-block-title"><span class="td-pulldown-size">BÀI VIẾT TIÊU BIỂU</span></h4>
        </div>
        <div id="td_uid_10_61a90582e9132" class="td_block_inner"> 
         <div class="td-block-span12"> 
          <div class="td_module_6 td_module_wrap td-animation-stack"> 
           <div class="td-module-thumb">
            <a href="https://giasutinhoc.vn/website/spring-framework/huong-dan-su-dung-jwt-voi-spring-boot/" rel="bookmark" class="td-image-wrap" title="Hướng dẫn sử dụng JWT với Spring Boot"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABGAQMAAAAASKMqAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABBJREFUKM9jGAWjYBQMKwAAA9QAAQWBn6cAAAAASUVORK5CYII=" alt="" title="Hướng dẫn sử dụng JWT với Spring Boot" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2020/10/huong-dan-su-dung-jwt-voi-spring-boot-1-100x70.png" width="100" height="70"></a>
           </div> 
           <div class="item-details"> 
            <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/website/spring-framework/huong-dan-su-dung-jwt-voi-spring-boot/" rel="bookmark" title="Hướng dẫn sử dụng JWT với Spring Boot">Hướng dẫn sử dụng JWT với Spring Boot</a></h3> 
            <div class="td-module-meta-info"> 
             <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2020-10-26T06:18:28+00:00">26/10/2020</time></span> 
            </div> 
           </div> 
          </div> 
         </div> 
         <!-- ./td-block-span12 --> 
         <div class="td-block-span12"> 
          <div class="td_module_6 td_module_wrap td-animation-stack"> 
           <div class="td-module-thumb">
            <a href="https://giasutinhoc.vn/website/spring-framework/huong-dan-su-dung-thymeleaf-trong-spring-boot/" rel="bookmark" class="td-image-wrap" title="Hướng dẫn sử dụng Thymeleaf trong Spring Boot"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABGAQMAAAAASKMqAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABBJREFUKM9jGAWjYBQMKwAAA9QAAQWBn6cAAAAASUVORK5CYII=" alt="" title="Hướng dẫn sử dụng Thymeleaf trong Spring Boot" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2020/10/huong-dan-su-dung-thymeleaf-trong-spring-boot-2-100x70.png" width="100" height="70"></a>
           </div> 
           <div class="item-details"> 
            <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/website/spring-framework/huong-dan-su-dung-thymeleaf-trong-spring-boot/" rel="bookmark" title="Hướng dẫn sử dụng Thymeleaf trong Spring Boot">Hướng dẫn sử dụng Thymeleaf trong Spring Boot</a></h3> 
            <div class="td-module-meta-info"> 
             <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2020-10-20T21:24:59+00:00">20/10/2020</time></span> 
            </div> 
           </div> 
          </div> 
         </div> 
         <!-- ./td-block-span12 --> 
         <div class="td-block-span12"> 
          <div class="td_module_6 td_module_wrap td-animation-stack"> 
           <div class="td-module-thumb">
            <a href="https://giasutinhoc.vn/website/spring-framework/huong-dan-su-dung-spring-boot-de-tao-restful-api/" rel="bookmark" class="td-image-wrap" title="Hướng dẫn sử dụng Spring Boot để tạo Restful API"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABGAQMAAAAASKMqAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABBJREFUKM9jGAWjYBQMKwAAA9QAAQWBn6cAAAAASUVORK5CYII=" alt="" title="Hướng dẫn sử dụng Spring Boot để tạo Restful API" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/05/huong-dan-su-dung-spring-boot-de-tao-restful-api-6-100x70.png" width="100" height="70"></a>
           </div> 
           <div class="item-details"> 
            <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/website/spring-framework/huong-dan-su-dung-spring-boot-de-tao-restful-api/" rel="bookmark" title="Hướng dẫn sử dụng Spring Boot để tạo Restful API">Hướng dẫn sử dụng Spring Boot để tạo Restful API</a></h3> 
            <div class="td-module-meta-info"> 
             <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2019-05-13T21:35:53+00:00">13/05/2019</time></span> 
            </div> 
           </div> 
          </div> 
         </div> 
         <!-- ./td-block-span12 -->
        </div>
       </div> 
       <!-- ./block --> 
      </div> 
      <div class="td-pb-span4"> 
       <div class="td_block_wrap td_block_7 td_uid_11_61a90582ebf15_rand td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid="td_uid_11_61a90582ebf15">
        <script>var block_td_uid_11_61a90582ebf15 = new tdBlock();
block_td_uid_11_61a90582ebf15.id = "td_uid_11_61a90582ebf15";
block_td_uid_11_61a90582ebf15.atts = '{"custom_title":"B\u00c0I VI\u1ebeT PH\u1ed4 BI\u1ebeN","limit":3,"sort":"popular","separator":"","custom_url":"","block_template_id":"","m6_tl":"","post_ids":"","category_id":"","category_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","offset":"","show_modified_date":"","el_class":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","m6f_title_font_header":"","m6f_title_font_title":"Article title","m6f_title_font_settings":"","m6f_title_font_family":"","m6f_title_font_size":"","m6f_title_font_line_height":"","m6f_title_font_style":"","m6f_title_font_weight":"","m6f_title_font_transform":"","m6f_title_font_spacing":"","m6f_title_":"","m6f_cat_font_title":"Article category tag","m6f_cat_font_settings":"","m6f_cat_font_family":"","m6f_cat_font_size":"","m6f_cat_font_line_height":"","m6f_cat_font_style":"","m6f_cat_font_weight":"","m6f_cat_font_transform":"","m6f_cat_font_spacing":"","m6f_cat_":"","m6f_meta_font_title":"Article meta info","m6f_meta_font_settings":"","m6f_meta_font_family":"","m6f_meta_font_size":"","m6f_meta_font_line_height":"","m6f_meta_font_style":"","m6f_meta_font_weight":"","m6f_meta_font_transform":"","m6f_meta_font_spacing":"","m6f_meta_":"","ajax_pagination":"","ajax_pagination_infinite_stop":"","css":"","tdc_css":"","td_column_number":1,"header_color":"","color_preset":"","border_top":"","class":"td_uid_11_61a90582ebf15_rand","tdc_css_class":"td_uid_11_61a90582ebf15_rand","tdc_css_class_style":"td_uid_11_61a90582ebf15_rand_style"}';
block_td_uid_11_61a90582ebf15.td_column_number = "1";
block_td_uid_11_61a90582ebf15.block_type = "td_block_7";
block_td_uid_11_61a90582ebf15.post_count = "3";
block_td_uid_11_61a90582ebf15.found_posts = "280";
block_td_uid_11_61a90582ebf15.header_color = "";
block_td_uid_11_61a90582ebf15.ajax_pagination_infinite_stop = "";
block_td_uid_11_61a90582ebf15.max_num_pages = "94";
tdBlocksArray.push(block_td_uid_11_61a90582ebf15);
</script>
        <div class="td-block-title-wrap">
         <h4 class="block-title td-block-title"><span class="td-pulldown-size">BÀI VIẾT PHỔ BIẾN</span></h4>
        </div>
        <div id="td_uid_11_61a90582ebf15" class="td_block_inner"> 
         <div class="td-block-span12"> 
          <div class="td_module_6 td_module_wrap td-animation-stack"> 
           <div class="td-module-thumb">
            <a href="https://giasutinhoc.vn/website/giao-trinh-thiet-ke-web/tong-quan-ve-html-bai-1-2/" rel="bookmark" class="td-image-wrap" title="Tổng quan về html (Bài 1)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABGAQMAAAAASKMqAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABBJREFUKM9jGAWjYBQMKwAAA9QAAQWBn6cAAAAASUVORK5CYII=" alt="" title="Tổng quan về html (Bài 1)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/tong-quan-ve-html-100x70.png" width="100" height="70"></a>
           </div> 
           <div class="item-details"> 
            <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/website/giao-trinh-thiet-ke-web/tong-quan-ve-html-bai-1-2/" rel="bookmark" title="Tổng quan về html (Bài 1)">Tổng quan về html (Bài 1)</a></h3> 
            <div class="td-module-meta-info"> 
             <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2019-04-18T21:48:01+00:00">18/04/2019</time></span> 
            </div> 
           </div> 
          </div> 
         </div> 
         <!-- ./td-block-span12 --> 
         <div class="td-block-span12"> 
          <div class="td_module_6 td_module_wrap td-animation-stack"> 
           <div class="td-module-thumb">
            <a href="https://giasutinhoc.vn/database/co-so-du-lieu/truy-van-du-lieu-trong-sql-bai-5-2/" rel="bookmark" class="td-image-wrap" title="Truy vấn dữ liệu trong sql (Bài 5)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABGAQMAAAAASKMqAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABBJREFUKM9jGAWjYBQMKwAAA9QAAQWBn6cAAAAASUVORK5CYII=" alt="" title="Truy vấn dữ liệu trong sql (Bài 5)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/truy-van-du-lieu-trong-sql-1-100x70.png" width="100" height="70"></a>
           </div> 
           <div class="item-details"> 
            <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/database/co-so-du-lieu/truy-van-du-lieu-trong-sql-bai-5-2/" rel="bookmark" title="Truy vấn dữ liệu trong sql (Bài 5)">Truy vấn dữ liệu trong sql (Bài 5)</a></h3> 
            <div class="td-module-meta-info"> 
             <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2019-04-17T19:48:36+00:00">17/04/2019</time></span> 
            </div> 
           </div> 
          </div> 
         </div> 
         <!-- ./td-block-span12 --> 
         <div class="td-block-span12"> 
          <div class="td_module_6 td_module_wrap td-animation-stack"> 
           <div class="td-module-thumb">
            <a href="https://giasutinhoc.vn/database/co-so-du-lieu/mo-hinh-du-lieu-quan-he-bai-3-2/" rel="bookmark" class="td-image-wrap" title="Mô hình dữ liệu quan hệ (Bài 3)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABGAQMAAAAASKMqAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABBJREFUKM9jGAWjYBQMKwAAA9QAAQWBn6cAAAAASUVORK5CYII=" alt="" title="Mô hình dữ liệu quan hệ (Bài 3)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/mo-hinh-du-lieu-quan-he-2-1024x473-100x70.png" width="100" height="70"></a>
           </div> 
           <div class="item-details"> 
            <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/database/co-so-du-lieu/mo-hinh-du-lieu-quan-he-bai-3-2/" rel="bookmark" title="Mô hình dữ liệu quan hệ (Bài 3)">Mô hình dữ liệu quan hệ (Bài 3)</a></h3> 
            <div class="td-module-meta-info"> 
             <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2019-04-17T16:58:35+00:00">17/04/2019</time></span> 
            </div> 
           </div> 
          </div> 
         </div> 
         <!-- ./td-block-span12 -->
        </div>
       </div> 
       <!-- ./block --> 
      </div> 
      <div class="td-pb-span4"> 
       <div class="td_block_wrap td_block_popular_categories td_uid_12_61a90582ef4b9_rand widget widget_categories td-pb-border-top td_block_template_1" data-td-block-uid="td_uid_12_61a90582ef4b9">
        <div class="td-block-title-wrap">
         <h4 class="block-title td-block-title"><span class="td-pulldown-size">MỤC XEM NHIỀU</span></h4>
        </div>
        <ul class="td-pb-padding-side">
         <li><a href="https://giasutinhoc.vn/chuyen-muc/huong-dan-thuc-hanh/huong-dan-android/"><span class="td-cat-name">Hướng dẫn Android</span><span class="td-cat-no">24</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/labs/lab-android-co-ban/"><span class="td-cat-name">Lab Android cơ bản</span><span class="td-cat-no">16</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/labs/lab-lap-trinh-csharp/"><span class="td-cat-name">Lab lập trình C#</span><span class="td-cat-no">14</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/labs/lab-sql-server/"><span class="td-cat-name">Lab SQL Server</span><span class="td-cat-no">12</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-c-sharp/"><span class="td-cat-name">Lập trình C#</span><span class="td-cat-no">11</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/database/sqlserver-2014/"><span class="td-cat-name">SQLServer 2014</span><span class="td-cat-no">11</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/database/co-so-du-lieu/"><span class="td-cat-name">Cơ sở dữ liệu</span><span class="td-cat-no">10</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-android-co-ban/"><span class="td-cat-name">Lập trình Android cơ bản</span><span class="td-cat-no">10</span></a></li>
         <li><a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-c-co-ban/"><span class="td-cat-name">Lập trình C</span><span class="td-cat-no">10</span></a></li>
        </ul>
       </div> 
       <!-- ./block --> 
      </div> 
     </div> 
    </div> 
    <div class="td-footer-bottom-full"> 
     <div class="td-container"> 
      <div class="td-pb-row"> 
       <div class="td-pb-span3">
        <aside class="footer-logo-wrap">
         <a href="https://giasutinhoc.vn/"><img class="td-retina-data" src="https://giasutinhoc.vn/wp-content/uploads/2019/03/gsth_logo_2.png" data-retina="https://giasutinhoc.vn/wp-content/uploads/2019/03/gsth_logo_2.png" alt="" title="" width="272"></a>
        </aside>
       </div>
       <div class="td-pb-span5">
        <aside class="footer-text-wrap">
         <div class="block-title">
          <span>VỀ CHÚNG TÔI</span>
         </div>Chúng tôi biên soạn các bài giảng, các bài hướng dẫn liên quan đến lập trình bao gồm lập trình winform, lập trình web, lập trình mobile. 
         <br>
         <br>Phone/Zalo: 0855 881 889 
         <br>Email: giasutinhoc.vn@gmail.com
        </aside>
       </div>
       <div class="td-pb-span4">
        <aside class="footer-social-wrap td-social-style-2">
         <div class="block-title">
          <span>THEO DÕI CHÚNG TÔI</span>
         </div> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="https://www.facebook.com/giasutinhoc.vn/" title="Facebook"> <i class="td-icon-font td-icon-facebook"></i> </a> </span> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="mailto:giasutinhoc.vn@gmail.com" title="Mail"> <i class="td-icon-font td-icon-mail-1"></i> </a> </span> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="https://join.skype.com/invite/jmjNazhX9Zoo" title="Skype"> <i class="td-icon-font td-icon-skype"></i> </a> </span> 
         <span class="td-social-icon-wrap"> <a target="_blank" href="https://www.youtube.com/channel/UCkOd34k838iIo9fhdKjvg5w/videos" title="Youtube"> <i class="td-icon-font td-icon-youtube"></i> </a> </span>
        </aside>
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- Sub Footer --> 
   <div class="td-sub-footer-container td-container-wrap "> 
    <div class="td-container"> 
     <div class="td-pb-row"> 
      <div class="td-pb-span td-sub-footer-menu"> 
       <div class="menu-td-demo-footer-menu-container">
        <ul id="menu-td-demo-footer-menu" class="td-subfooter-menu">
         <li id="menu-item-6818" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-first td-menu-item td-normal-menu menu-item-6818"><a href="https://giasutinhoc.vn/gioi-thieu/">Giới thiệu</a></li> 
         <li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-35"><a target="_blank" rel="noopener" href="http://hlv.edu.vn">Chúng tôi có thứ mà bạn cần</a></li> 
        </ul>
       </div> 
      </div> 
      <div class="td-pb-span td-sub-footer-copy">
        © Gia Sư Tin Học 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>
  <!--close td-outer-wrap--> 
  <div class="td-more-articles-box"> 
   <i class="td-icon-close td-close-more-articles-box"></i> 
   <span class="td-more-articles-box-title">Bài viết liên quan</span> 
   <div class="td-content-more-articles-box"> 
    <div class="td_module_1 td_module_wrap td-animation-stack"> 
     <div class="td-module-image"> 
      <div class="td-module-thumb">
       <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/xu-ly-ngoai-le-trong-java-bai-4-2/" rel="bookmark" class="td-image-wrap" title="Xử lý ngoại lệ trong java (Bài 4)"><img class="entry-thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAACgAQMAAABOhoelAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAAB1JREFUWMPtwTEBAAAAwiD7p/ZdCGAAAAAAAAAQBxpAAAH8le3bAAAAAElFTkSuQmCC" alt="" title="Xử lý ngoại lệ trong java (Bài 4)" data-type="image_tag" data-img-url="https://giasutinhoc.vn/wp-content/uploads/2019/04/Xu-ly-ngoai-le-trong-java-3-324x160.jpg" width="324" height="160"></a>
      </div> 
      <a href="https://giasutinhoc.vn/chuyen-muc/lap-trinh/lap-trinh-java-co-ban/" class="td-post-category">Lập trình Java cơ bản</a> 
     </div> 
     <h3 class="entry-title td-module-title"><a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/xu-ly-ngoai-le-trong-java-bai-4-2/" rel="bookmark" title="Xử lý ngoại lệ trong java (Bài 4)">Xử lý ngoại lệ trong java (Bài 4)</a></h3> 
     <div class="td-module-meta-info"> 
      <span class="td-post-author-name"><a href="https://giasutinhoc.vn/author/admin/">admin</a> <span>-</span> </span> 
      <span class="td-post-date"><time class="entry-date updated td-module-date" datetime="2019-04-09T20:36:17+00:00">09/04/2019</time></span> 
      <div class="td-module-comments">
       <a href="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/xu-ly-ngoai-le-trong-java-bai-4-2/#respond">0</a>
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--

        Theme: Newspaper by tagDiv.com 2019
        Version: 9.6 (rara)
        Deploy mode: deploy
        
        uid: 61a90582f2e41
    --> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7" id="regenerator-runtime-js"></script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script> 
  <script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/giasutinhoc.vn\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.4.1" id="contact-form-7-js"></script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-content/themes/newspaper/js/tagdiv_theme.min.js?ver=9.6" id="td-site-min-js"></script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-includes/js/comment-reply.min.js?ver=5.8.2" id="comment-reply-js"></script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-content/plugins/mystickyelements/js/jquery.cookie.js?ver=1.9.5" id="mystickyelements-cookie-js-js"></script> 
  <script type="text/javascript" id="mystickyelements-fronted-js-js-extra">
/* <![CDATA[ */
var mystickyelements = {"ajaxurl":"https:\/\/giasutinhoc.vn\/wp-admin\/admin-ajax.php","ajax_nonce":"9c12fa0c93"};
/* ]]> */
</script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-content/plugins/mystickyelements/js/mystickyelements-fronted.min.js?ver=1.9.5" id="mystickyelements-fronted-js-js"></script> 
  <script type="text/javascript" src="https://giasutinhoc.vn/wp-includes/js/wp-embed.min.js?ver=5.8.2" id="wp-embed-js"></script> 
  <!-- JS generated by theme --> 
  <script>
    

	

		(function(){
			var html_jquery_obj = jQuery('html');

			if (html_jquery_obj.length && (html_jquery_obj.is('.ie8') || html_jquery_obj.is('.ie9'))) {

				var path = 'https://giasutinhoc.vn/wp-content/themes/newspaper/style.css';

				jQuery.get(path, function(data) {

					var str_split_separator = '#td_css_split_separator';
					var arr_splits = data.split(str_split_separator);
					var arr_length = arr_splits.length;

					if (arr_length > 1) {

						var dir_path = 'https://giasutinhoc.vn/wp-content/themes/newspaper';
						var splited_css = '';

						for (var i = 0; i < arr_length; i++) {
							if (i > 0) {
								arr_splits[i] = str_split_separator + ' ' + arr_splits[i];
							}
							//jQuery('head').append('<style>' + arr_splits[i] + '</style>');

							var formated_str = arr_splits[i].replace(/\surl\(\'(?!data\:)/gi, function regex_function(str) {
								return ' url(\'' + dir_path + '/' + str.replace(/url\(\'/gi, '').replace(/^\s+|\s+$/gm,'');
							});

							splited_css += "<style>" + formated_str + "</style>";
						}

						var td_theme_css = jQuery('link#td-theme-css');

						if (td_theme_css.length) {
							td_theme_css.after(splited_css);
						}
					}
				});
			}
		})();

	
	
</script> 
  <div class="mystickyelements-fixed mystickyelements-position-right mystickyelements-position-screen-center mystickyelements-position-mobile-bottom mystickyelements-on-hover mystickyelements-size-medium mystickyelements-mobile-size-medium mystickyelements-entry-effect-slide-in mystickyelements-templates-default"> 
   <div class="mystickyelement-lists-wrap"> 
    <ul class="mystickyelements-lists mysticky"> 
     <li class="mystickyelements-minimize "> <span class="mystickyelements-minimize minimize-position-right minimize-position-mobile-bottom" style="background: #bebebe"> → </span> </li> 
     <li id="mystickyelements-contact-form" class="mystickyelements-contact-form  element-desktop-on element-mobile-on"> <span class="mystickyelements-social-icon " style="background-color: #f3bd50; color: #FFFFFF;"><i class="far fa-envelope"></i>Đăng ký tư vấn</span> 
      <div class="element-contact-form" style="background-color: #ffffff"> 
       <h3 style="color: #f3bd50;background-color:#ffffff"> Thông tin liên hệ <a href="javascript:void(0);" class="element-contact-close"><i class="fas fa-times"></i></a> </h3> 
       <form id="stickyelements-form" action="" method="post" autocomplete="off"> 
        <input class=" required" type="text" id="contact-form-name" name="contact-form-name" value="" placeholder="Nhập tên của bạn*" required autocomplete="off"> 
        <input class=" required" type="tel" id="contact-form-phone" name="contact-form-phone" value="" placeholder="Nhập số điện thoại của bạn*" required autocomplete="off"> 
        <input class="email  required" type="email" id="contact-form-email" name="contact-form-email" value="" placeholder="Nhập email của bạn*" required autocomplete="off"> 
        <textarea class=" required" id="contact-form-message" name="contact-form-message" placeholder="Bạn muốn chúng tôi hỗ trợ về?*" required></textarea> 
        <p class="mse-form-success-message" id="mse-form-error" style="display:none;"></p> 
        <input id="stickyelements-submit-form" type="submit" name="contact-form-submit" value="Đăng ký" style="background-color: #f3bd50;color:#FFFFFF;"> 
        <input type="hidden" name="nonce" value="61a90582f30fd163846694661a90582f3100"> 
        <input type="hidden" name="form_id" value="f613a5f411"> 
        <input type="hidden" id="stickyelements-page-link" name="stickyelements-page-link" value="https://giasutinhoc.vn/lap-trinh/lap-trinh-java-co-ban/doc-va-ghi-file-trong-java-bai-5-2"> 
       </form> 
      </div> </li> 
     <li id="mystickyelements-social-facebook_messenger" class="mystickyelements-social-icon-li mystickyelements-social-facebook_messenger  element-desktop-on element-mobile-on"> <style>
																					</style> <span class="mystickyelements-social-icon social-facebook_messenger social-custom" style="background: #f3bd50"> <a href="https://m.me/vn.giasutinhoc" target="_blank" rel="noopener"> <i class="fab fa-facebook-messenger"></i> </a> </span> <span class="mystickyelements-social-text " style="background: #f3bd50;"> <a href="https://m.me/vn.giasutinhoc" target="_blank" rel="noopener"> Facebook Messenger </a> </span> </li> 
     <li id="mystickyelements-social-phone" class="mystickyelements-social-icon-li mystickyelements-social-phone  element-desktop-on element-mobile-on"> <style>
																					</style> <span class="mystickyelements-social-icon social-phone social-custom" style="background: #f3bd50"> <a href="tel:0855881889"> <i class="fa fa-phone"></i> </a> </span> <span class="mystickyelements-social-text " style="background: #f3bd50;"> <a href="tel:0855881889"> 0855 881 889 </a> </span> </li> 
    </ul> 
   </div> 
  </div> 
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76678649-1', 'auto');
  ga('send', 'pageview');

</script>  
 </body>
</html>