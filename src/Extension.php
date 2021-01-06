<?php

namespace AmpProject;

/**
 * Interface with constants for AMP extensions.
 *
 * @package ampproject/amp-toolbox
 */
interface Extension
{

    const ACCORDION                     = 'amp-accordion';
    const ACTION_MACRO                  = 'amp-action-macro';
    const AD                            = 'amp-ad';
    const ADDTHIS                       = 'amp-addthis';
    const AD_CUSTOM                     = 'amp-ad-custom';
    const AD_EXIT                       = 'amp-ad-exit';
    const ANALYTICS                     = 'amp-analytics';
    const ANIM                          = 'amp-anim';
    const ANIMATION                     = 'amp-animation';
    const APESTER_MEDIA                 = 'amp-apester-media';
    const APP_BANNER                    = 'amp-app-banner';
    const AUDIO                         = 'amp-audio';
    const AUTOCOMPLETE                  = 'amp-autocomplete';
    const AUTO_ADS                      = 'amp-auto-ads';
    const BASE_CAROUSEL                 = 'amp-base-carousel';
    const BEOPINION                     = 'amp-beopinion';
    const BIND                          = 'amp-bind';
    const BIND_MACRO                    = 'amp-bind-macro';
    const BODYMOVIN_ANIMATION           = 'amp-bodymovin-animation';
    const BRID_PLAYER                   = 'amp-brid-player';
    const BRIGHTCOVE                    = 'amp-brightcove';
    const BYSIDE_CONTENT                = 'amp-byside-content';
    const CALL_TRACKING                 = 'amp-call-tracking';
    const CAROUSEL                      = 'amp-carousel';
    const CONNATIX_PLAYER               = 'amp-connatix-player';
    const CONSENT                       = 'amp-consent';
    const DAILYMOTION                   = 'amp-dailymotion';
    const DATE_COUNTDOWN                = 'amp-date-countdown';
    const DATE_DISPLAY                  = 'amp-date-display';
    const DATE_PICKER                   = 'amp-date-picker';
    const DELIGHT_PLAYER                = 'amp-delight-player';
    const DYNAMIC_CSS_CLASSES           = 'amp-dynamic-css-classes';
    const EMBED                         = 'amp-embed';
    const EMBEDLY_CARD                  = 'amp-embedly-card';
    const EMBEDLY_KEY                   = 'amp-embedly-key';
    const EXPERIMENT                    = 'amp-experiment';
    const FACEBOOK                      = 'amp-facebook';
    const FACEBOOK_COMMENTS             = 'amp-facebook-comments';
    const FACEBOOK_LIKE                 = 'amp-facebook-like';
    const FACEBOOK_PAGE                 = 'amp-facebook-page';
    const FIT_TEXT                      = 'amp-fit-text';
    const FONT                          = 'amp-font';
    const FX_FLYING_CARPET              = 'amp-flying-carpet';
    const GEO                           = 'amp-geo';
    const GFYCAT                        = 'amp-gfycat';
    const GIST                          = 'amp-gist';
    const GOOGLE_DOCUMENT_EMBED         = 'amp-google-document-embed';
    const GWD_ANIMATION                 = 'amp-gwd-animation';
    const HULU                          = 'amp-hulu';
    const IFRAME                        = 'amp-iframe';
    const IMAGE_LIGHTBOX                = 'amp-image-lightbox';
    const IMAGE_SLIDER                  = 'amp-image-slider';
    const IMA_VIDEO                     = 'amp-ima-video';
    const IMG                           = 'amp-img';
    const IMGUR                         = 'amp-imgur';
    const INLINE_GALLERY                = 'amp-inline-gallery';
    const INLINE_GALLERY_PAGINATION     = 'amp-inline-gallery-pagination';
    const INLINE_GALLERY_THUMBNAILS     = 'amp-inline-gallery-thumbnails';
    const INSTAGRAM                     = 'amp-instagram';
    const INSTALL_SERVICEWORKER         = 'amp-install-serviceworker';
    const IZLESENE                      = 'amp-izlesene';
    const JWPLAYER                      = 'amp-jwplayer';
    const KALTURA_PLAYER                = 'amp-kaltura-player';
    const LAYOUT                        = 'amp-layout';
    const LIGHTBOX                      = 'amp-lightbox';
    const LINK_REWRITER                 = 'amp-link-rewriter';
    const LIST_                         = 'amp-list';
    const LIST_LOAD_MORE                = 'amp-list-load-more';
    const LIVE_LIST                     = 'amp-live-list';
    const MATHML                        = 'amp-mathml';
    const MEGAPHONE                     = 'amp-megaphone';
    const MEGA_MENU                     = 'amp-mega-menu';
    const MINUTE_MEDIA_PLAYER           = 'amp-minute-media-player';
    const MOWPLAYER                     = 'amp-mowplayer';
    const MUSTACHE                      = 'amp-mustache';
    const NESTED_MENU                   = 'amp-nested-menu';
    const NEXT_PAGE                     = 'amp-next-page';
    const NEXXTV_PLAYER                 = 'amp-nexxtv-player';
    const O2_PLAYER                     = 'amp-o2-player';
    const ONETAP_GOOGLE                 = 'amp-onetap-google';
    const OOYALA_PLAYER                 = 'amp-ooyala-player';
    const ORIENTATION_OBSERVER          = 'amp-orientation-observer';
    const PAN_ZOOM                      = 'amp-pan-zoom';
    const PINTEREST                     = 'amp-pinterest';
    const PIXEL                         = 'amp-pixel';
    const PLAYBUZZ                      = 'amp-playbuzz';
    const POSITION_OBSERVER             = 'amp-position-observer';
    const POWR_PLAYER                   = 'amp-powr-player';
    const REACH_PLAYER                  = 'amp-reach-player';
    const RECAPTCHA_INPUT               = 'amp-recaptcha-input';
    const REDBULL_PLAYER                = 'amp-redbull-player';
    const REDDIT                        = 'amp-reddit';
    const RIDDLE_QUIZ                   = 'amp-riddle-quiz';
    const SCRIPT                        = 'amp-script';
    const SELECTOR                      = 'amp-selector';
    const SIDEBAR                       = 'amp-sidebar';
    const SKIMLINKS                     = 'amp-skimlinks';
    const SMARTLINKS                    = 'amp-smartlinks';
    const SOCIAL_SHARE                  = 'amp-social-share';
    const SOUNDCLOUD                    = 'amp-soundcloud';
    const SPRINGBOARD_PLAYER            = 'amp-springboard-player';
    const STATE                         = 'amp-state';
    const STICKY_AD                     = 'amp-sticky-ad';
    const STORY                         = 'amp-story';
    const STORY_360                     = 'amp-story-360';
    const STORY_ANIMATION               = 'amp-story-animation';
    const STORY_AUTO_ADS                = 'amp-story-auto-ads';
    const STORY_BOOKEND                 = 'amp-story-bookend';
    const STORY_CONSENT                 = 'amp-story-consent';
    const STORY_CTA_LAYER               = 'amp-story-cta-layer';
    const STORY_GRID_LAYER              = 'amp-story-grid-layer';
    const STORY_INTERACTIVE_BINARY_POLL = 'amp-story-interactive-binary-poll';
    const STORY_INTERACTIVE_POLL        = 'amp-story-interactive-poll';
    const STORY_INTERACTIVE_QUIZ        = 'amp-story-interactive-quiz';
    const STORY_INTERACTIVE_RESULTS     = 'amp-story-interactive-results';
    const STORY_PAGE                    = 'amp-story-page';
    const STORY_PAGE_ATTACHMENT         = 'amp-story-page-attachment';
    const STORY_PANNING_MEDIA           = 'amp-story-panning-media';
    const STORY_PLAYER                  = 'amp-story-player';
    const TIMEAGO                       = 'amp-timeago';
    const TRUNCATE_TEXT                 = 'amp-truncate-text';
    const TWITTER                       = 'amp-twitter';
    const USER_NOTIFICATION             = 'amp-user-notification';
    const VIDEO                         = 'amp-video';
    const VIDEO_IFRAME                  = 'amp-video-iframe';
    const VIMEO                         = 'amp-vimeo';
    const VINE                          = 'amp-vine';
    const VIQEO_PLAYER                  = 'amp-viqeo-player';
    const VK                            = 'amp-vk';
    const WEB_PUSH                      = 'amp-web-push';
    const WEB_PUSH_WIDGET               = 'amp-web-push-widget';
    const WISTIA_PLAYER                 = 'amp-wistia-player';
    const YOTPO                         = 'amp-yotpo';
    const YOUTUBE                       = 'amp-youtube';
    const _3D_GLTF                      = 'amp-3d-gltf';
    const _3Q_PLAYER                    = 'amp-3q-player';

    /**
     * Prefix of an AMP extension.
     *
     * @var string.
     */
    const PREFIX = 'amp-';
}
