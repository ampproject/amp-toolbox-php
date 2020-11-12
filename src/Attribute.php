<?php

namespace AmpProject;

/**
 * Interface with constants for the different types of attributes.
 *
 * @package ampproject/common
 */
abstract class Attribute
{

    const ACTION = 'action';
    const ALT = 'alt';
    const AMP = 'amp';
    const AMP4ADS = 'amp4ads';
    const AMP4ADS_BOILERPLATE = 'amp4ads-boilerplate';
    const AMP4EMAIL = 'amp4email';
    const AMP4EMAIL_BOILERPLATE = 'amp4email-boilerplate';
    const AMP_BOILERPLATE = 'amp-boilerplate';
    const AMP_CUSTOM = 'amp-custom';
    const AMP_EMOJI = "\xE2\x9A\xA1";
    const AMP_EMOJI_ALT = "\xE2\x9A\xA1\xEF\xB8\x8F"; // See https://github.com/ampproject/amphtml/issues/25990.
    const AMP_RUNTIME = 'amp-runtime';
    const AMP_SCRIPT_SRC = 'amp-script-src';
    const ARIA_HIDDEN = 'aria-hidden';
    const AS_ = 'as'; // Underscore needed because 'as' is a PHP keyword.
    const ASYNC = 'async';
    const ATTRIBUTION = 'attribution';
    const AUTOPLAY = 'autoplay';
    const CHARSET = 'charset';
    const CLASS_ = 'class'; // Underscore needed because 'class' is a PHP keyword.
    const CONTENT = 'content';
    const CUSTOM_ELEMENT = 'custom-element';
    const CUSTOM_TEMPLATE = 'custom-template';
    const DECODING = 'decoding';
    const DISABLE_INLINE_WIDTH = 'disable-inline-width';
    const HEIGHT = 'height';
    const HEIGHTS = 'heights';
    const HIDDEN = 'hidden';
    const HOST_SERVICE = 'host-service';
    const HREF = 'href';
    const HTTP_EQUIV = 'http-equiv';
    const I_AMPHTML_SSR = 'i-amphtml-ssr';
    const I_AMPHTML_VERSION = 'i-amphtml-version';
    const ID = 'id';
    const IMAGESRCSET = 'imagesrcset';
    const IMAGESIZES = 'imagesizes';
    const IMPORTANCE = 'importance';
    const INTRINSICSIZE = 'intrinsicsize';
    const LAYOUT = 'layout';
    const LIGHTBOX = 'lightbox';
    const LOADING = 'loading';
    const LOOP = 'loop';
    const MEDIA = 'media';
    const NAME = 'name';
    const NOLOADING = 'noloading';
    const OBJECT_FIT = 'object-fit';
    const OBJECT_POSITION = 'object-position';
    const ON = 'on';
    const PLACEHOLDER = 'placeholder';
    const POSTER = 'poster';
    const PROFILE = 'profile';
    const REFERRERPOLICY = 'referrerpolicy';
    const REL = 'rel';
    const ROLE = 'role';
    const SRCSET = 'srcset';
    const SIZES = 'sizes';
    const STYLE = 'style';
    const SRC = 'src';
    const TABINDEX = 'tabindex';
    const TEMPLATE = 'template';
    const TITLE = 'title';
    const TYPE = 'type';
    const VALUE = 'value';
    const VIEWPORT = 'viewport';
    const WIDTH = 'width';

    public static function amp4adsemoji()
    {
        return self::AMP_EMOJI . '4ads';
    }

    public static function amp4adsemojialt()
    {
        return self::AMP_EMOJI_ALT . '4ads';
    }

    public static function amp4emailemoji()
    {
        return self::AMP_EMOJI . '4email';
    }

    public static function amp4emailemojialt()
    {
        return self::AMP_EMOJI . '4email';
    }

    public static function allAmp()
    {
        return [self::AMP, self::AMP_EMOJI, self::AMP_EMOJI_ALT];
    }

    public static function allAmp4ads()
    {
        return [self::AMP4ADS, self::amp4adsemoji(), self::amp4adsemojialt()];
    }

    public static function allAmp4email()
    {
        return [self::AMP4EMAIL, self::AMP4EMAIL_EMOJI, self::AMP4EMAIL_EMOJI_ALT];
    }

    public static function allBoilerplates()
    {
        return [self::AMP_BOILERPLATE, self::AMP4ADS_BOILERPLATE, self::AMP4EMAIL_BOILERPLATE];
    }


    const TYPE_HTML = 'text/html';
    const TYPE_JSON = 'application/json';
    const TYPE_LD_JSON = 'application/ld+json';
    const TYPE_TEXT_PLAIN = 'text/plain';

    const REL_AMPHTML = 'amphtml';
    const REL_CANONICAL = 'canonical';
    const REL_DNS_PREFETCH = 'dns-prefetch';
    const REL_ICON = 'icon';
    const REL_NOAMPHTML = 'noamphtml';
    const REL_NOFOLLOW = 'nofollow';
    const REL_PRECONNECT = 'preconnect';
    const REL_PREFETCH = 'prefetch';
    const REL_PRELOAD = 'preload';
    const REL_PRERENDER = 'prerender';
    const REL_STYLESHEET = 'stylesheet';

    const DATA_HERO = 'data-hero';
}
