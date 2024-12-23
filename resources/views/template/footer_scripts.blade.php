<script>
    // Quantity
    jQuery(document).ready(function($){
        $(document).on('click', '.plus', function(e) { // replace '.quantity' with document (without single quote)
            $input = $(this).prev('input.qty');
            var val = parseInt($input.val());
            var step = $input.attr('step');
            step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
            $input.val( val + step ).change();
        });
        $(document).on('click', '.minus',  // replace '.quantity' with document (without single quote)
            function(e) {
                $input = $(this).next('input.qty');
                var val = parseInt($input.val());
                var step = $input.attr('step');
                step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
                if (val > 0) {
                    $input.val( val - step ).change();
                }
            });
    });
</script>
<script type="text/javascript">
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
        const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
            entries.forEach( ( entry ) => {
                if ( entry.isIntersecting ) {
                    let lazyloadBackground = entry.target;
                    if( lazyloadBackground ) {
                        lazyloadBackground.classList.add( 'e-lazyloaded' );
                    }
                    lazyloadBackgroundObserver.unobserve( entry.target );
                }
            });
        }, { rootMargin: '200px 0px 200px 0px' } );
        lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
            lazyloadBackgroundObserver.observe( lazyloadBackground );
        } );
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach( ( event ) => {
        document.addEventListener( event, lazyloadRunObserver );
    } );
</script>
<script type="text/javascript">
    (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<link rel="stylesheet" id="wc-blocks-style-css" href="{!! url('resources/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css') !!}" type="text/css" media="all" />
<script src="{!! url('resources/wp-content/plugins/contact-form-7/includes/swv/js/index.js') !!}" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {"api":{"root":"https:\/\/themes.hibootstrap.com\/hospa\/wp-json\/","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>
<script src="{!! url('resources/wp-content/plugins/contact-form-7/includes/js/index.js') !!}" id="contact-form-7-js"></script>
<script src="{!! url('resources/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js') !!}" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
    /* <![CDATA[ */
    var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"base64":false,"ajaxurl":"https:\/\/themes.hibootstrap.com\/hospa\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
    /* ]]> */
</script>
<script src="{!! url('resources/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js') !!}" id="wc-order-attribution-js"></script>
<script type="text/javascript" id="custom-ajax-script-js-extra">
    /* <![CDATA[ */
    var customAjax = {"ajaxUrl":"https:\/\/themes.hibootstrap.com\/hospa\/wp-admin\/admin-ajax.php","nonce":"093a87bb01"};
    /* ]]> */
</script>
<script src="{!! url('resources/wp-content/themes/hospa/assets/js/custom-ajax-script.js') !!}" id="custom-ajax-script-js"></script>
<script src="{!! url('resources/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js') !!}" id="elementor-webpack-runtime-js"></script>
<script src="{!! url('resources/wp-content/plugins/elementor/assets/js/frontend-modules.min.js') !!}" id="elementor-frontend-modules-js"></script>
<script src="{!! url("resources/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js") !!}" id="elementor-waypoints-js"></script>


<script src="{!! url('resources/wp-includes/js/jquery/ui/core.min.js') !!}" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.23.1","is_static":false,"experimentalFeatures":{"e_optimized_css_loading":true,"e_font_icon_svg":true,"additional_custom_breakpoints":true,"e_swiper_latest":true,"e_nested_atomic_repeaters":true,"e_onboarding":true,"home_screen":true,"landing-pages":true,"e_lazyload":true},"urls":{"assets":"https:\/\/themes.hibootstrap.com\/hospa\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/themes.hibootstrap.com\/hospa\/wp-admin\/admin-ajax.php"},"nonces":{"floatingButtonsClickTracking":"333bd76a76"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1628,"title":"Hospa%20%E2%80%93%20Doctor%2C%20Medical%20%26%20Healthcare%20WordPress%20Theme","excerpt":"","featuredImage":false}};
    /* ]]> */
</script>
<script src="{!! url('resources/wp-content/plugins/elementor/assets/js/frontend.min.js') !!}" id="elementor-frontend-js"></script>

<script src="{{ url('/resources/js/jquery-plugin-collection.js') }}"></script>
<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{ url('/resources/js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ url('/resources/js/custom.js') }}"></script>
