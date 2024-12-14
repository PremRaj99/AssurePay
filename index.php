<?php
// Configuration file paths
$dbInfoFile = 'pages/dbInfo.php';
$configFile = 'auth/config.php';

// Check if the setup has been done
if (!file_exists($dbInfoFile) || !file_exists($configFile)) {
    header('Location: install.php');
    exit;
}

// If setup is done, include the database connection file
include 'pages/dbInfo.php';

// You can now use the connect_database function if needed
$con = connect_database();

// Now you can display your index page content
include 'auth/function.php';

?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site_settings['brand_name']; ?>- UPI Payment Solutions</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Repay &raquo; Feed" href="repay/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Repay &raquo; Comments Feed" href="repay/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/designingmedia.com\/repay\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.4"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */

        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='repay/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.7' type='text/css' media='all' />
    <link rel='stylesheet' id='repay-widgets-css-css' href='repay/wp-content/plugins/repay-toolkit/assets/css/repay-widgets.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='repay/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=8.5.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='repay/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=8.5.2' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='repay/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=8.5.2' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='repay-font-css' href='//fonts.googleapis.com/css?family=Raleway%3A300%2C400%2C500%2C600%7CRaleway%3A600%2C700%26display%3Dswap&#038;ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css' href='repay/wp-content/themes/repay/assets/css/animate.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='repay/wp-content/themes/repay/assets/css/bootstrap.min.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='repay/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-ui-css' href='repay/wp-content/themes/repay/assets/css/jquery-ui.min.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='flaticon-css' href='repay/wp-content/themes/repay/assets/css/flaticon.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css' href='repay/wp-content/themes/repay/assets/css/magnific-popup.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='nice-select-css' href='repay/wp-content/themes/repay/assets/css/nice-select.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css' href='repay/wp-content/themes/repay/assets/css/slick.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='repay-style-css' href='repay/wp-content/themes/repay/style.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='load-fa-pro-css' href='repay/wp-content/themes/repay/assets/fonts/fontawesome-pro-v5.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='load-fa-css' href='repay/wp-content/themes/repay/assets/fonts/fontawesome-v6.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='barlow-font-css' href='repay/wp-content/themes/repay/assets/fonts/barlow-font.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css-css' href='repay/wp-content/themes/repay/assets/css/bootstrap.min.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='repay-owl-carousel-css' href='repay/wp-content/themes/repay/assets/css/owl.carousel.min.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='popups-css' href='repay/wp-content/themes/repay/assets/css/magnific-popup.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='repay-style-css-css' href='repay/wp-content/themes/repay/assets/css/repay.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='repay-responsive-css-css' href='repay/wp-content/themes/repay/assets/css/repay-responsive.css?ver=6.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='header-style-css' href='repay/wp-content/themes/repay/assets/css/style.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css' href='repay/wp-content/themes/repay/assets/css/responsive.css?ver=1719128625' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='repay/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.27.0' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='repay/wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1708671299' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='repay/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-5-css' href='repay/wp-content/uploads/elementor/css/post-5.css?ver=1708671300' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-4825-css' href='repay/wp-content/uploads/elementor/css/post-4825.css?ver=1708671824' type='text/css' media='all' />
    <link rel='stylesheet' id='moove_gdpr_frontend-css' href='repay/wp-content/plugins/gdpr-cookie-compliance/dist/styles/gdpr-main.css?ver=4.13.1' type='text/css' media='all' />
    <style id='moove_gdpr_frontend-inline-css' type='text/css'>
        #moove_gdpr_cookie_modal,
        #moove_gdpr_cookie_info_bar,
        .gdpr_cookie_settings_shortcode_content {
            font-family: Nunito, sans-serif
        }

        #moove_gdpr_save_popup_settings_button {
            background-color: #373737;
            color: #fff
        }

        #moove_gdpr_save_popup_settings_button:hover {
            background-color: #000
        }

        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton,
        #moove_gdpr_cookie_info_bar .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton {
            background-color: #0C4DA2
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton,
        .gdpr_cookie_settings_shortcode_content .gdpr-shr-button.button-green {
            background-color: #0C4DA2;
            border-color: #0C4DA2
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder a.mgbutton:hover,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-footer-content .moove-gdpr-button-holder button.mgbutton:hover,
        .gdpr_cookie_settings_shortcode_content .gdpr-shr-button.button-green:hover {
            background-color: #fff;
            color: #0C4DA2
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close span.gdpr-icon {
            background-color: #0C4DA2;
            border: 1px solid #0C4DA2
        }

        #moove_gdpr_cookie_info_bar span.change-settings-button.focus-g,
        #moove_gdpr_cookie_info_bar span.change-settings-button:focus,
        #moove_gdpr_cookie_info_bar button.change-settings-button.focus-g,
        #moove_gdpr_cookie_info_bar button.change-settings-button:focus {
            -webkit-box-shadow: 0 0 1px 3px #0C4DA2;
            -moz-box-shadow: 0 0 1px 3px #0C4DA2;
            box-shadow: 0 0 1px 3px #0C4DA2
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close i:hover,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close span.gdpr-icon:hover,
        #moove_gdpr_cookie_info_bar span[data-href]>u.change-settings-button {
            color: #0C4DA2
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected a span.gdpr-icon,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li.menu-item-selected button span.gdpr-icon {
            color: inherit
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a span.gdpr-icon,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button span.gdpr-icon {
            color: inherit
        }

        #moove_gdpr_cookie_modal .gdpr-acc-link {
            line-height: 0;
            font-size: 0;
            color: transparent;
            position: absolute
        }

        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-close:hover i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li button i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-modal-left-content #moove-gdpr-menu li a i,
        #moove_gdpr_cookie_modal .moove-gdpr-modal-content .moove-gdpr-tab-main .moove-gdpr-tab-main-content a:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content span.change-settings-button:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.change-settings-button:hover,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content u.change-settings-button:hover,
        #moove_gdpr_cookie_info_bar span[data-href]>u.change-settings-button,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a.mgbutton:focus,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button.mgbutton:focus,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content a:focus,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content button:focus,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content span.change-settings-button.focus-g,
        span.change-settings-button:focus,
        button.change-settings-button.focus-g,
        button.change-settings-button:focus,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content u.change-settings-button.focus-g,
        #moove_gdpr_cookie_info_bar.moove-gdpr-dark-scheme .moove-gdpr-info-bar-container .moove-gdpr-info-bar-content u.change-settings-button:focus {
            color: #0C4DA2
        }

        #moove_gdpr_cookie_modal.gdpr_lightbox-hide {
            display: none
        }
    </style>
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Barlow+Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COxygen%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CJost%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.5.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='repay/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css' href='repay/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="repay/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="repay/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.5.2" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/repay\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/repay\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/designingmedia.com\/repay\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="repay/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.5.2" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="repay/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.5.2" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "\/repay\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/repay\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="repay/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.5.2" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="repay/wp-json/" />
    <link rel="alternate" type="application/json" href="repay/wp-json/wp/v2/pages/4825" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="repay/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.5.4" />
    <meta name="generator" content="WooCommerce 8.5.2" />
    <link rel="canonical" href="repay/" />
    <link rel='shortlink' href='repay/' />
    <link rel="alternate" type="application/json+oembed" href="repay/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdesigningmedia.com%2Frepay%2F" />
    <link rel="alternate" type="text/xml+oembed" href="repay/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdesigningmedia.com%2Frepay%2F&#038;format=xml" />
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <meta name="generator" content="Elementor 3.19.2; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <meta name="generator" content="Powered by Slider Revolution 6.6.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="<?php echo $site_settings['logo_url']; ?>" sizes="32x32" />
    <link rel="icon" href="<?php echo $site_settings['logo_url']; ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php echo $site_settings['logo_url']; ?>" />
    <meta name="msapplication-TileImage" content="<?php echo $site_settings['logo_url']; ?>" />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <script id='pixel-script-poptin' src='https://cdn.popt.in/pixel.js?id=6a30097da8eff' async='true'></script>
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-4825 theme-repay woocommerce-no-js elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-4825">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Function to check if the page is being viewed in the Elementor editor
            function isElementorEditor() {
                return (
                    window.location.href.indexOf("elementor") !== -1 &&
                    document.querySelector(".elementor-editor-active") !== null
                );
            }

            // Hide the preloader if the page is viewed in the Elementor editor
            if (isElementorEditor()) {
                document.getElementById("preloader").style.display = "none";
            }
        });
    </script>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

        <!-- navbar start -->
        <div class="navbar-area navbar-area-2 style-2 extra-margin-top">

            <div class="body-overlay" id="body-overlay"></div>
            <div class="search-popup" id="search-popup">
                <form role="search" method="get" class="search-form" action="repay/">
                    <input type="text" class="search-field" placeholder="Search here..." value="" name="s" required>
                    <button type="submit" class="search-submit">
        <i class="fa fa-search"></i>
    </button>
                </form>
            </div>

            <!-- navbar start -->
            <div class="navbar-area navbar-area-2 style-2 extra-margin-top">
                <nav class="navbar navbar-area navbar-expand-lg nav-transparent">
                    <div class="container nav-container nav-white">
                        <div class="responsive-mobile-menu">
                            <div class="logo">
                                <a class="standard-logo" href="">
                <img src="<?php echo $site_settings['logo_url']; ?>" alt="logo" />
            </a>
                                <a class="retina-logo" href="">
                <img src="<?php echo $site_settings['logo_url']; ?>" alt="logo" />
            </a>
                            </div>
                            <button class="s7t-header-menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-val="0" data-target="#repay_main_menu" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="icon-left"></span>
	                    <span class="icon-right"></span>
	                </button>
                        </div>
                        <div id="repay_main_menu" class="collapse navbar-collapse">
                            <ul id="menu-primary-menu" class="navbar-nav">
                                <li id="menu-item-17906"><a href="">Home</a>
                                    <li id="menu-item-17906"><a href="">Panel</a>
                                    </li>

                                    <li id="menu-item-17780"><a href="">About Us</a>

                                    </li>

                            </ul>
                        </div>


                        <a class="nav-link talk_btn" href="auth/index">Login || Sign Up</a>
                    </div>

                </nav>
            </div>
        </div>

        <div id="content" class="site-content">
            <div class="breadcrumb-area breadcrumb-bg only-front-page breadcrumb-spacing style-1">
            </div>
            <div data-elementor-type="wp-page" data-elementor-id="4825" class="elementor elementor-4825">
                <div class="elementor-element elementor-element-e462212 e-flex e-con-boxed e-con e-parent" data-id="e462212" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-cc786d0 e-flex e-con-boxed e-con e-child" data-id="cc786d0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-57275af e-con-full e-flex e-con e-child" style="margin-bottom: 20%;" data-id="57275af" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-c32520e elementor-widget elementor-widget-heading" data-id="c32520e" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 07-02-2024 */

                                                .elementor-heading-title {
                                                    padding: 0;
                                                    margin: 0;
                                                    line-height: 1
                                                }

                                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                    color: inherit;
                                                    font-size: inherit;
                                                    line-height: inherit
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                    font-size: 15px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                    font-size: 19px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                    font-size: 29px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                    font-size: 39px
                                                }

                                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                    font-size: 59px
                                                }
                                            </style>
                                            <p class="elementor-heading-title elementor-size-default"><?php echo $site_settings['brand_name']; ?>. For. Every #Indian </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-559c6f8 elementor-widget elementor-widget-heading" data-id="559c6f8" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h1 class="elementor-heading-title elementor-size-default">The Smart Way for <span style="color:#ff6400;">Online Payment</span> Solution.
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-685cca3 elementor-widget elementor-widget-text-editor" data-id="685cca3" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 07-02-2024 */

                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                    background-color: #69727d;
                                                    color: #fff
                                                }

                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                    color: #69727d;
                                                    border: 3px solid;
                                                    background-color: transparent
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                    margin-top: 8px
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                    width: 1em;
                                                    height: 1em
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                    float: left;
                                                    text-align: center;
                                                    line-height: 1;
                                                    font-size: 50px
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                    display: inline-block
                                                }
                                            </style>
                                            <p>Collect UPI Payments Easy & Fastest Solutions || Payment Link || UPI QR </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-275cbcc elementor-align-left elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="275cbcc" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-xs" href="Register">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Register Now</span>
		</span>
					</a>
                                                <a class="elementor-button elementor-button-link elementor-size-xs" href="auth/index">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Log In</span>
		</span>
					</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="elementor-element elementor-element-0fb5de8 e-con-full e-flex e-con e-child" data-id="0fb5de8" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-9f16136 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="9f16136" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 07-02-2024 */

                                                .elementor-widget-image {
                                                    text-align: center
                                                }

                                                .elementor-widget-image a {
                                                    display: inline-block
                                                }

                                                .elementor-widget-image a img[src$=".svg"] {
                                                    width: 48px
                                                }

                                                .elementor-widget-image img {
                                                    vertical-align: middle;
                                                    display: inline-block
                                                }
                                            </style> <img decoding="async" width="86" height="14" src="repay/wp-content/uploads/2022/08/element.png" class="attachment-full size-full wp-image-3037" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2808cb7 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="2808cb7" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="86" height="14" src="repay/wp-content/uploads/2022/08/element.png" class="attachment-full size-full wp-image-3037" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6a7217b elementor-absolute elementor-widget elementor-widget-image" data-id="6a7217b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;none&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img fetchpriority="high" decoding="async" width="679" height="679" src="repay/wp-content/uploads/2024/01/homebanner-img-bg.png" class="attachment-full size-full wp-image-15389" alt="" srcset="repay/wp-content/uploads/2024/01/homebanner-img-bg.png 679w, repay/wp-content/uploads/2024/01/homebanner-img-bg-300x300.png 300w, repay/wp-content/uploads/2024/01/homebanner-img-bg-100x100.png 100w, repay/wp-content/uploads/2024/01/homebanner-img-bg-600x600.png 600w, repay/wp-content/uploads/2024/01/homebanner-img-bg-150x150.png 150w"
                                                sizes="(max-width: 679px) 100vw, 679px" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-26221ec elementor-widget elementor-widget-image" data-id="26221ec" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="461" height="820" src="repay/wp-content/uploads/2022/08/banner-image.png" class="attachment-full size-full wp-image-4724" alt="" srcset="repay/wp-content/uploads/2022/08/banner-image.png 461w, repay/wp-content/uploads/2022/08/banner-image-169x300.png 169w"
                                                sizes="(max-width: 461px) 100vw, 461px" /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-57350a0 e-flex e-con-boxed e-con e-parent" data-id="57350a0" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-f8cee7d e-con-full e-flex e-con e-child" data-id="f8cee7d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                            <div class="elementor-element elementor-element-91886a6 e-flex e-con-boxed e-con e-child" data-id="91886a6" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-fc634ca elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="fc634ca" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="107" height="87" src="repay/wp-content/uploads/2022/08/icon-1.png" class="attachment-full size-full wp-image-1035" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0f0a823 elementor-widget elementor-widget-heading" data-id="0f0a823" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">What We Do</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9bf312c elementor-widget elementor-widget-heading" data-id="9bf312c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Get Ready To Have Best Smart Payments in The World</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1c806b0 e-con-full e-flex e-con e-child" data-id="1c806b0" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                <div class="elementor-element elementor-element-c045fc8 e-con-full e-flex e-con e-child" data-id="c045fc8" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-c2b2883 elementor-absolute elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="c2b2883" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="190" height="98" src="repay/wp-content/uploads/2022/08/arrow-1.png" class="attachment-full size-full wp-image-1043" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c4106d8 elementor-widget elementor-widget-image" data-id="c4106d8" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="83" height="80" src="repay/wp-content/uploads/2022/08/payment-solution-icon.png" class="attachment-full size-full wp-image-63" alt="" />                                            </div>
                                    </div>
                                    <div class="elementor-element elementor-element-55c276a elementor-widget elementor-widget-heading" data-id="55c276a" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Payment Solution</h3>
                                            <p>UPI QR|| UPI Apps||Payments Links</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ee17428 elementor-widget elementor-widget-text-editor" data-id="ee17428" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <b>Connect Your Offline Business QR & Start Accepting Online Payments in Websites/Apps</b></div>
                                    </div>
                                    <div class="elementor-element elementor-element-c99e9a2 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="c99e9a2" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="86" height="14" src="repay/wp-content/uploads/2022/08/element.png" class="attachment-large size-large wp-image-3037" alt="" /> </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6b150ef e-con-full e-flex e-con e-child" data-id="6b150ef" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-0ede331 elementor-absolute elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="0ede331" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="190" height="98" src="repay/wp-content/uploads/2022/08/arrow-2.png" class="attachment-full size-full wp-image-1044" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9716d1e elementor-widget elementor-widget-image" data-id="9716d1e" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="89" height="80" src="repay/wp-content/uploads/2022/08/growth-icon.png" class="attachment-full size-full wp-image-65" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-60b81bf elementor-widget elementor-widget-heading" data-id="60b81bf" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Growth Business</h3>
                                            <p>Seamless Payments Flow Help Every Business to Grow smoothly</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-358def8 elementor-widget elementor-widget-text-editor" data-id="358def8" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <?php echo $site_settings['brand_name']; ?> offers safe, seamless and reliable payment solutions designed to grow you omnichannel business.</div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3612b0c e-con-full e-flex e-con e-child" data-id="3612b0c" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-761c18e elementor-widget elementor-widget-image" data-id="761c18e" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="87" height="80" src="repay/wp-content/uploads/2022/08/connected-people-icon.png" class="attachment-full size-full wp-image-64" alt="" />                                            </div>
                                    </div>
                                    <div class="elementor-element elementor-element-0232ee8 elementor-widget elementor-widget-heading" data-id="0232ee8" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Connected People</h3>
                                            <p>Manage Your Customers Payments || Create Payment Links & Collect Instantly To Your Bank Account</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ded0af5 elementor-widget elementor-widget-text-editor" data-id="ded0af5" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Create Payments Links and Collects Payments Instantly without Any QR Limits & Manager Your Customers in Single Place.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-c72b81a e-con-full e-flex e-con e-child" data-id="c72b81a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                <div class="elementor-element elementor-element-31661e7 e-con-full payment-box e-flex e-con e-child" data-id="31661e7" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-39b7679 elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="39b7679" data-element_type="widget" data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                .elementor-widget-image-box .elementor-image-box-content {
                                                    width: 100%
                                                }

                                                @media (min-width:768px) {
                                                    .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,
                                                    .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                        display: flex
                                                    }
                                                    .elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper {
                                                        text-align: right;
                                                        flex-direction: row-reverse
                                                    }
                                                    .elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper {
                                                        text-align: left;
                                                        flex-direction: row
                                                    }
                                                    .elementor-widget-image-box.elementor-position-top .elementor-image-box-img {
                                                        margin: auto
                                                    }
                                                    .elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper {
                                                        align-items: flex-start
                                                    }
                                                    .elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper {
                                                        align-items: center
                                                    }
                                                    .elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper {
                                                        align-items: flex-end
                                                    }
                                                }

                                                @media (max-width:767px) {
                                                    .elementor-widget-image-box .elementor-image-box-img {
                                                        margin-left: auto !important;
                                                        margin-right: auto !important;
                                                        margin-bottom: 15px
                                                    }
                                                }

                                                .elementor-widget-image-box .elementor-image-box-img {
                                                    display: inline-block
                                                }

                                                .elementor-widget-image-box .elementor-image-box-title a {
                                                    color: inherit
                                                }

                                                .elementor-widget-image-box .elementor-image-box-wrapper {
                                                    text-align: center
                                                }

                                                .elementor-widget-image-box .elementor-image-box-description {
                                                    margin: 0
                                                }
                                            </style>
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="90" height="90" src="repay/wp-content/uploads/2022/08/personal-account-icon-2.png" class="attachment-full size-full wp-image-663" alt=""
                                                    /></figure>
                                                <div class="elementor-image-box-content">
                                                    <h3 class="elementor-image-box-title">PERSONAL ACCOUNT</h3>
                                                    <p>You Can Connect Your Savings/Current Bank Accounts to Get Directs Payments</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-981cb12 e-con-full payment-box e-flex e-con e-child" data-id="981cb12" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-c6a1ccc elementor-position-left elementor-vertical-align-middle elementor-widget elementor-widget-image-box" data-id="c6a1ccc" data-element_type="widget" data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="300" height="300" src="repay/wp-content/uploads/2022/10/Untitled-10d.png" class="attachment-full size-full wp-image-14201" alt="" srcset="repay/wp-content/uploads/2022/10/Untitled-10d.png 300w, repay/wp-content/uploads/2022/10/Untitled-10d-100x100.png 100w, repay/wp-content/uploads/2022/10/Untitled-10d-150x150.png 150w"
                                                        sizes="(max-width: 300px) 100vw, 300px" /></figure>
                                                <div class="elementor-image-box-content">
                                                    <h3 class="elementor-image-box-title">BUSINESS ACCOUNT</h3>
                                                    <p>Handle Your Business Payments Withount Any Limits Connect Your Business Account</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-f674275 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="f674275" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                    data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="92" height="133" src="repay/wp-content/uploads/2022/08/icon-2.png" class="attachment-full size-full wp-image-1039" alt="" /> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-77c3145 e-flex e-con-boxed e-con e-parent" data-id="77c3145" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-3b315b0 e-flex e-con-boxed e-con e-child" data-id="3b315b0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-3466d7e e-con-full e-flex e-con e-child" data-id="3466d7e" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-cc61878 elementor-absolute video-icon elementor-widget elementor-widget-video" data-id="cc61878" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=XHOmBV4js_E&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;https:\/\/designingmedia.com\/repay\/wp-content\/uploads\/2024\/01\/play-button.png&quot;,&quot;id&quot;:15843,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;_position&quot;:&quot;absolute&quot;,&quot;lightbox&quot;:&quot;yes&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                        data-widget_type="video.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 07-02-2024 */

                                                .elementor-widget-video .elementor-widget-container {
                                                    overflow: hidden;
                                                    transform: translateZ(0)
                                                }

                                                .elementor-widget-video .elementor-wrapper {
                                                    aspect-ratio: var(--video-aspect-ratio)
                                                }

                                                .elementor-widget-video .elementor-wrapper iframe,
                                                .elementor-widget-video .elementor-wrapper video {
                                                    height: 100%;
                                                    width: 100%;
                                                    display: flex;
                                                    border: none;
                                                    background-color: #000
                                                }

                                                @supports not (aspect-ratio:1/1) {
                                                    .elementor-widget-video .elementor-wrapper {
                                                        position: relative;
                                                        overflow: hidden;
                                                        height: 0;
                                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                                    }
                                                    .elementor-widget-video .elementor-wrapper iframe,
                                                    .elementor-widget-video .elementor-wrapper video {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0
                                                    }
                                                }

                                                .elementor-widget-video .elementor-open-inline .elementor-custom-embed-image-overlay {
                                                    position: absolute;
                                                    top: 0;
                                                    right: 0;
                                                    bottom: 0;
                                                    left: 0;
                                                    background-size: cover;
                                                    background-position: 50%
                                                }

                                                .elementor-widget-video .elementor-custom-embed-image-overlay {
                                                    cursor: pointer;
                                                    text-align: center
                                                }

                                                .elementor-widget-video .elementor-custom-embed-image-overlay:hover .elementor-custom-embed-play i {
                                                    opacity: 1
                                                }

                                                .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                                    display: block;
                                                    width: 100%;
                                                    aspect-ratio: var(--video-aspect-ratio);
                                                    -o-object-fit: cover;
                                                    object-fit: cover;
                                                    -o-object-position: center center;
                                                    object-position: center center
                                                }

                                                @supports not (aspect-ratio:1/1) {
                                                    .elementor-widget-video .elementor-custom-embed-image-overlay {
                                                        position: relative;
                                                        overflow: hidden;
                                                        height: 0;
                                                        padding-bottom: calc(100% / var(--video-aspect-ratio))
                                                    }
                                                    .elementor-widget-video .elementor-custom-embed-image-overlay img {
                                                        position: absolute;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        left: 0
                                                    }
                                                }

                                                .elementor-widget-video .e-hosted-video .elementor-video {
                                                    -o-object-fit: cover;
                                                    object-fit: cover
                                                }

                                                .e-con-inner>.elementor-widget-video,
                                                .e-con>.elementor-widget-video {
                                                    width: var(--container-widget-width);
                                                    --flex-grow: var(--container-widget-flex-grow)
                                                }
                                            </style>
                                            <div class="elementor-wrapper elementor-open-lightbox">
                                                <div class="elementor-custom-embed-image-overlay" data-elementor-open-lightbox="yes" data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/XHOmBV4js_E?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-cc61878&quot;,&quot;entranceAnimation&quot;:&quot;&quot;,&quot;entranceAnimation_tablet&quot;:&quot;&quot;,&quot;entranceAnimation_mobile&quot;:&quot;&quot;,&quot;videoAspectRatio&quot;:&quot;169&quot;}}"
                                                    data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJ0eXBlIjoidmlkZW8iLCJ2aWRlb1R5cGUiOiJ5b3V0dWJlIiwidXJsIjoiaHR0cHM6XC9cL3d3dy55b3V0dWJlLmNvbVwvZW1iZWRcL1hIT21CVjRqc19FP2ZlYXR1cmU9b2VtYmVkJnN0YXJ0JmVuZCZ3bW9kZT1vcGFxdWUmbG9vcD0wJmNvbnRyb2xzPTEmbXV0ZT0wJnJlbD0wJm1vZGVzdGJyYW5kaW5nPTAiLCJtb2RhbE9wdGlvbnMiOnsiaWQiOiJlbGVtZW50b3ItbGlnaHRib3gtY2M2MTg3OCIsImVudHJhbmNlQW5pbWF0aW9uIjoiIiwiZW50cmFuY2VBbmltYXRpb25fdGFibGV0IjoiIiwiZW50cmFuY2VBbmltYXRpb25fbW9iaWxlIjoiIiwidmlkZW9Bc3BlY3RSYXRpbyI6IjE2OSJ9fQ%3D%3D">
                                                    <img loading="lazy" decoding="async" width="196" height="196" src="repay/wp-content/uploads/2024/01/play-button.png" class="attachment-full size-full wp-image-15843" alt="" srcset="repay/wp-content/uploads/2024/01/play-button.png 196w, repay/wp-content/uploads/2024/01/play-button-100x100.png 100w, repay/wp-content/uploads/2024/01/play-button-150x150.png 150w"
                                                        sizes="(max-width: 196px) 100vw, 196px" /> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-72c0366 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="72c0366" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="86" height="14" src="repay/wp-content/uploads/2022/08/element.png" class="attachment-large size-large wp-image-3037" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1b4882b elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="1b4882b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;none&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="518" height="518" src="repay/wp-content/uploads/2022/08/bg2.png" class="attachment-full size-full wp-image-4758" alt="" srcset="repay/wp-content/uploads/2022/08/bg2.png 518w, repay/wp-content/uploads/2022/08/bg2-300x300.png 300w, repay/wp-content/uploads/2022/08/bg2-100x100.png 100w, repay/wp-content/uploads/2022/08/bg2-150x150.png 150w"
                                                sizes="(max-width: 518px) 100vw, 518px" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-064182d elementor-widget elementor-widget-image" data-id="064182d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="436" height="592" src="repay/wp-content/uploads/2022/08/image-2.png" class="attachment-full size-full wp-image-1090" alt="" srcset="repay/wp-content/uploads/2022/08/image-2.png 436w, repay/wp-content/uploads/2022/08/image-2-221x300.png 221w"
                                                sizes="(max-width: 436px) 100vw, 436px" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3324445 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="3324445" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="86" height="14" src="repay/wp-content/uploads/2022/08/element.png" class="attachment-large size-large wp-image-3037" alt="" /> </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-ef2e53b e-con-full e-flex e-con e-child" data-id="ef2e53b" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-999bdab elementor-widget elementor-widget-heading" data-id="999bdab" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">About  </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c904433 elementor-widget elementor-widget-heading" data-id="c904433" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">We Have The Most Users All Over The World.</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-154ad5a elementor-widget elementor-widget-text-editor" data-id="154ad5a" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <?php echo $site_settings['brand_name']; ?> UPI Payment solutions that are easy to understand, and simple to use </div>
                                    </div>
                                    <div class="elementor-element elementor-element-655585c elementor-widget elementor-widget-text-editor" data-id="655585c" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Plug-and-play APIs || Quick onboarding || Min KYC Docs || 24*7 technical support || Multiple UPI Payments Routes</div>
                                    </div>
                                    <div class="elementor-element elementor-element-b7ef238 e-con-full e-flex e-con e-child" data-id="b7ef238" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                        <div class="elementor-element elementor-element-2f260bf e-con-full e-flex e-con e-child" data-id="2f260bf" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-c6b92cb elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="c6b92cb" data-element_type="widget" data-widget_type="image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image-box-wrapper">
                                                        <figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="79" height="61" src="repay/wp-content/uploads/2022/08/happy-customer-icon.png" class="elementor-animation-grow attachment-full size-full wp-image-76"
                                                                alt="" /></figure>
                                                        <div class="elementor-image-box-content">
                                                            <h3 class="elementor-image-box-title">15k+</h3>
                                                            <p class="elementor-image-box-description">Happy Customers</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f666143 e-con-full e-flex e-con e-child" data-id="f666143" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                            <div class="elementor-element elementor-element-a864993 elementor-position-left elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="a864993" data-element_type="widget" data-widget_type="image-box.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image-box-wrapper">
                                                        <figure class="elementor-image-box-img"><img loading="lazy" decoding="async" width="63" height="61" src="repay/wp-content/uploads/2022/08/total-customers-icon.png" class="elementor-animation-grow attachment-full size-full wp-image-862"
                                                                alt="" /></figure>
                                                        <div class="elementor-image-box-content">
                                                            <h3 class="elementor-image-box-title">260+</h3>
                                                            <p class="elementor-image-box-description">Live API Merchants</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5ba5eba e-flex e-con-boxed e-con e-parent" data-id="5ba5eba" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-52289ab e-flex e-con-boxed e-con e-child" data-id="52289ab" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-8b1bf62 e-flex e-con-boxed e-con e-child" data-id="8b1bf62" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                    <div class="e-con-inner">
                                        <div class="elementor-element elementor-element-7054da5 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="7054da5" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="160" height="102" src="repay/wp-content/uploads/2022/08/our-services-icon-1.png" class="attachment-full size-full wp-image-1152" alt="" />                                                </div>
                                        </div>
                                        <div class="elementor-element elementor-element-048eddf elementor-widget elementor-widget-heading" data-id="048eddf" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <p class="elementor-heading-title elementor-size-default">Our Services
                                                </p>

                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-6e40103 elementor-widget elementor-widget-heading" data-id="6e40103" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Smart Solution for Your Payment</h2>
                                                <p>Businesses can integrate <?php echo $site_settings['brand_name']; ?> on their website and offer their customers the ability to pay through different UPI apps to customers.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-df029a0 elementor-widget elementor-widget-image" data-id="df029a0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="1110" height="450" src="repay/wp-content/uploads/2024/01/our-services-image.jpg" class="attachment-full size-full wp-image-16023" alt="" srcset="repay/wp-content/uploads/2024/01/our-services-image.jpg 1110w, repay/wp-content/uploads/2024/01/our-services-image-600x243.jpg 600w, repay/wp-content/uploads/2024/01/our-services-image-300x122.jpg 300w, repay/wp-content/uploads/2024/01/our-services-image-1024x415.jpg 1024w, repay/wp-content/uploads/2024/01/our-services-image-768x311.jpg 768w"
                                            sizes="(max-width: 1110px) 100vw, 1110px" /> </div>
                                </div>
                                <div class="elementor-element elementor-element-72d7612 e-con-full e-flex e-con e-child" data-id="72d7612" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-7dd0ebf elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-widget elementor-widget-image" data-id="7dd0ebf" data-element_type="widget"
                                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="107" height="87" src="repay/wp-content/uploads/2022/08/icon-1.png" class="attachment-full size-full wp-image-1035" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-be64cf5 elementor-widget elementor-widget-repay-services" data-id="be64cf5" data-element_type="widget" data-widget_type="repay-services.default">
                                        <div class="elementor-widget-container">
                                            <div class="service-section">
                                                <div class="services-data">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                            <div class="service-box">
                                                                <figure class="img">
                                                                    <img decoding="async" src="repay/wp-content/uploads/2022/08/services-payment-management-icon.png" alt="" class="img-fluid">
                                                                </figure>
                                                                <div class="content">
                                                                    <h3>All Business Sized</h3>
                                                                    <p>Digitise your online payments and financial operations by easily integrating plug-and-play, developer-friendly APIs into your own tech stack, website, apps, ERPs and CRMs. Sign up and
                                                                        get started in minutes with <?php echo $site_settings['brand_name']; ?> UPI payment solution platform.</p>
                                                                    <a href="#" class="more">More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                            <div class="service-box">
                                                                <figure class="img">
                                                                    <img decoding="async" src="repay/wp-content/uploads/2022/08/services-dashboard-icon.png" alt="" class="img-fluid">
                                                                </figure>
                                                                <div class="content">
                                                                    <h3>Personal Dashboard</h3>
                                                                    <p>Unified dashboard that gives you real-time view about transaction data and reports</p>
                                                                    <a href="#" class="more">More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                            <div class="service-box">
                                                                <figure class="img">
                                                                    <img decoding="async" src="repay/wp-content/uploads/2022/08/integrated-payment-icon.png" alt="" class="img-fluid">
                                                                </figure>
                                                                <div class="content">
                                                                    <h3>Integrated Payments</h3>
                                                                    <p>We offer easy to integrate and developer-friendly plug-and-play APIs that comes with detailed API docs</p>
                                                                    <a href="#" class="more">More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                            <div class="service-box">
                                                                <figure class="img">
                                                                    <img decoding="async" src="repay/wp-content/uploads/2022/08/business-tracking-icon.png" alt="" class="img-fluid">
                                                                </figure>
                                                                <div class="content">
                                                                    <h3>Business Tracking</h3>

                                                                    <a href="#" class="more">More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                            <div class="service-box">
                                                                <figure class="img">
                                                                    <img decoding="async" src="repay/wp-content/uploads/2022/08/services-payment-management-icon.png" alt="" class="img-fluid">
                                                                </figure>
                                                                <div class="content">
                                                                    <h3>Subscription Billing</h3>

                                                                    <a href="#" class="more">More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                                            <div class="service-box">
                                                                <figure class="img">
                                                                    <img decoding="async" src="repay/wp-content/uploads/2022/08/credit-debit-icon.png" alt="" class="img-fluid">
                                                                </figure>
                                                                <div class="content">
                                                                    <h3>Instant Settlement</h3>

                                                                    <a href="#" class="more">More</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5244867 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-hidden-laptop elementor-widget elementor-widget-image" data-id="5244867" data-element_type="widget"
                                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="92" height="133" src="repay/wp-content/uploads/2022/08/icon-2.png" class="attachment-full size-full wp-image-1039" alt="" /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ee363ab e-flex e-con-boxed e-con e-parent" data-id="ee363ab" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-9640147 e-flex e-con-boxed e-con e-child" data-id="9640147" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-db7bf44 e-con-full e-flex e-con e-child" data-id="db7bf44" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-0d7fdc7 elementor-widget elementor-widget-heading" data-id="0d7fdc7" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Manage Everything in Your Hand</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-86f137d e-flex e-con-boxed e-con e-child" data-id="86f137d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-df16ff1 e-con-full e-flex e-con e-child" data-id="df16ff1" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                                <div class="elementor-element elementor-element-277b5a2 elementor-widget elementor-widget-image" data-id="277b5a2" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="80" height="70" src="repay/wp-content/uploads/2022/08/user-friendly-icon.png" class="attachment-full size-full wp-image-1216" alt="" />                                                        </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-2f5f2e1 e-flex e-con-boxed e-con e-child" data-id="2f5f2e1" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-0fe7c6b elementor-widget elementor-widget-heading" data-id="0fe7c6b" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">User Friendly</h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-f2fffbd elementor-widget elementor-widget-text-editor" data-id="f2fffbd" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>User Friendly Interface that Helps to Manage Easily</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-776bec2 e-flex e-con-boxed e-con e-child" data-id="776bec2" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-10c96fb e-con-full e-flex e-con e-child" data-id="10c96fb" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                                <div class="elementor-element elementor-element-33a53aa elementor-widget elementor-widget-image" data-id="33a53aa" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="80" height="84" src="repay/wp-content/uploads/2022/08/best-support-icon.png" class="attachment-full size-full wp-image-150" alt="" />                                                        </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b611af2 e-flex e-con-boxed e-con e-child" data-id="b611af2" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-da895eb elementor-widget elementor-widget-heading" data-id="da895eb" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">Best Support</h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9ab575e elementor-widget elementor-widget-text-editor" data-id="9ab575e" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>You Manage Your Business || We support in Every Single Payments || 24X7 WhatsApp Support</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d409e3c e-flex e-con-boxed e-con e-child" data-id="d409e3c" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-63aeae4 e-con-full e-flex e-con e-child" data-id="63aeae4" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                                <div class="elementor-element elementor-element-7a2b1f9 elementor-widget elementor-widget-image" data-id="7a2b1f9" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img loading="lazy" decoding="async" width="80" height="87" src="repay/wp-content/uploads/2022/08/secure-icon.png" class="attachment-full size-full wp-image-1217" alt="" />                                                        </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-45d646b e-flex e-con-boxed e-con e-child" data-id="45d646b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                                <div class="e-con-inner">
                                                    <div class="elementor-element elementor-element-8a6ecf6 elementor-widget elementor-widget-heading" data-id="8a6ecf6" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">Secure</h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-89124e8 elementor-widget elementor-widget-text-editor" data-id="89124e8" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>All Payments & ApI's Call Process Through a Safe & Secure Strong Backends Routs in Every payments Session</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-909b257 e-con-full e-flex e-con e-child" data-id="909b257" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-9f55177 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="9f55177" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="86" height="14" src="repay/wp-content/uploads/2022/08/element.png" class="attachment-full size-full wp-image-3037" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9a783a9 elementor-widget elementor-widget-image" data-id="9a783a9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="679" height="679" src="repay/wp-content/uploads/2022/10/everything-bg.png" class="attachment-full size-full wp-image-14892" alt="" srcset="repay/wp-content/uploads/2022/10/everything-bg.png 679w, repay/wp-content/uploads/2022/10/everything-bg-300x300.png 300w, repay/wp-content/uploads/2022/10/everything-bg-100x100.png 100w, repay/wp-content/uploads/2022/10/everything-bg-600x600.png 600w, repay/wp-content/uploads/2022/10/everything-bg-150x150.png 150w"
                                                sizes="(max-width: 679px) 100vw, 679px" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8b9e375 elementor-widget elementor-widget-image" data-id="8b9e375" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="420" height="754" src="repay/wp-content/uploads/2022/08/manage-your-everything-image.png" class="attachment-full size-full wp-image-4707" alt="" srcset="repay/wp-content/uploads/2022/08/manage-your-everything-image.png 420w, repay/wp-content/uploads/2022/08/manage-your-everything-image-167x300.png 167w"
                                                sizes="(max-width: 420px) 100vw, 420px" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-87f8c80 elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image" data-id="87f8c80" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="86" height="14" src="repay/wp-content/uploads/2022/08/element.png" class="attachment-full size-full wp-image-3037" alt="" /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ffbd83c e-flex e-con-boxed e-con e-parent" data-id="ffbd83c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-5857a3a e-con-full e-flex e-con e-child" data-id="5857a3a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                            <div class="elementor-element elementor-element-9b83347 e-flex e-con-boxed e-con e-child" data-id="9b83347" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-b55d20e elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="b55d20e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="107" height="87" src="repay/wp-content/uploads/2022/08/icon-1.png" class="attachment-full size-full wp-image-1035" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-be12032 elementor-widget elementor-widget-heading" data-id="be12032" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Plan and Pricing</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-89d3610 elementor-widget elementor-widget-heading" data-id="89d3610" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Helping You Make Smart Financial Choices</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-24d1b16 e-con-full pricing-box e-flex e-con e-child" data-id="24d1b16" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                <div class="elementor-element elementor-element-131f909 e-con-full e-flex e-con e-child" data-id="131f909" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-540d5ec elementor-widget elementor-widget-heading" data-id="540d5ec" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">UPI Payments</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-fff46f7 elementor-widget elementor-widget-text-editor" data-id="fff46f7" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            *Free</div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-f61d52b e-con-full e-flex e-con e-child" data-id="f61d52b" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-fd67e7e elementor-widget elementor-widget-heading" data-id="fd67e7e" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Payment Modes</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-156e903 elementor-widget elementor-widget-text-editor" data-id="156e903" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            UPI QR || UPI Apps || Payment Links</div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9f359ae e-con-full e-flex e-con e-child" data-id="9f359ae" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-24eb735 elementor-widget elementor-widget-heading" data-id="24eb735" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Settlements</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d4656ad elementor-widget elementor-widget-text-editor" data-id="d4656ad" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Directly To Your Bank Accounts</div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a50012a e-con-full e-flex e-con e-child" data-id="a50012a" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-35e2548 elementor-widget elementor-widget-image" data-id="35e2548" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="242" height="35" src="repay/pg.png" class="attachment-full size-full wp-image-1312" alt="" /> </div>
                                    </div>
                                </div>
                            </div>



                            <div class="elementor-element elementor-element-5d3b3f1 e-con-full e-flex e-con e-child" data-id="5d3b3f1" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                <div class="elementor-element elementor-element-b687409 e-con-full e-flex e-con e-child" data-id="b687409" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-5d4b536 elementor-icon-list--layout-inline elementor-mobile-align-left elementor-tablet-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5d4b536" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <link rel="stylesheet" href="repay/wp-content/uploads/elementor/css/custom-widget-icon-list.min.css?ver=1708671300">
                                            <ul class="elementor-icon-list-items elementor-inline-items">
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-icon">
												</span>
                                                    <span class="elementor-icon-list-text">Free Registration</span>
                                                </li>
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-icon">
													</span>
                                                    <span class="elementor-icon-list-text">Monthly Subscriptions</span>
                                                </li>
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-icon">
												</span>
                                                    <span class="elementor-icon-list-text">No Setup Cost</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9e798ae e-con-full e-flex e-con e-child" data-id="9e798ae" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-87cbf28 elementor-icon-list--layout-inline elementor-mobile-align-left elementor-tablet-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="87cbf28" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items elementor-inline-items">
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-icon">
													</span>
                                                    <span class="elementor-icon-list-text">Easy to Setup</span>
                                                </li>
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-icon">
													</span>
                                                    <span class="elementor-icon-list-text">Integration KITS</span>
                                                </li>
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <span class="elementor-icon-list-icon">
													</span>
                                                    <span class="elementor-icon-list-text">Custom Price Availabe</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ebda255 elementor-widget__width-auto elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="ebda255" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="92" height="133" src="repay/wp-content/uploads/2022/08/icon-2.png" class="attachment-full size-full wp-image-1039" alt="" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-a8a4c6c e-flex e-con-boxed e-con e-parent" data-id="a8a4c6c" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;content_width&quot;:&quot;boxed&quot;}"
                    data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-5a0f006 e-con-full e-flex e-con e-child" data-id="5a0f006" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                            <div class="elementor-element elementor-element-a3add64 e-flex e-con-boxed e-con e-child" data-id="a3add64" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-92e1ea7 elementor-widget elementor-widget-heading" data-id="92e1ea7" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <p class="elementor-heading-title elementor-size-default">Need more help?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2b7e0b6 elementor-widget elementor-widget-heading" data-id="2b7e0b6" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Leading, Trusted. Enabling growth.</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-149b167 elementor-widget elementor-widget-text-editor" data-id="149b167" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>India’s leading brands have trusted <?php echo $site_settings['brand_name']; ?> payments platform to manage online payment collections, vendor payouts and financial operations. Sign up with us and experience the ease of managing payments and
                                                financial operations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a247cc3 e-con-full e-flex e-con e-child" data-id="a247cc3" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;full&quot;}">
                                <div class="elementor-element elementor-element-8315f61 e-con-full e-flex e-con e-child" data-id="8315f61" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-5992baf elementor-absolute elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="5992baf" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="190" height="98" src="repay/wp-content/uploads/2022/08/need-arrow1.png" class="attachment-full size-full wp-image-1284" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7ff4ff4 elementor-widget elementor-widget-image" data-id="7ff4ff4" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="78" height="80" src="repay/wp-content/uploads/2022/08/need-sales-icon.png" class="attachment-full size-full wp-image-1274" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3fb4e23 elementor-widget elementor-widget-heading" data-id="3fb4e23" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Register</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3165dee elementor-widget elementor-widget-text-editor" data-id="3165dee" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Register in Few Mins to Collect Online Payments</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-f1b51d7 elementor-align-center elementor-widget elementor-widget-button" data-id="f1b51d7" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-xs" href="Register">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Register Now</span>
		</span>
					</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c3a749c e-con-full e-flex e-con e-child" data-id="c3a749c" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-4c1f633 elementor-absolute elementor-widget__width-auto elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="4c1f633" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="190" height="98" src="repay/wp-content/uploads/2022/08/need-arrow-2.png" class="attachment-full size-full wp-image-1285" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-dd31c8a elementor-widget elementor-widget-image" data-id="dd31c8a" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="81" height="81" src="repay/wp-content/uploads/2022/08/need-more-icon2.png" class="attachment-full size-full wp-image-1275" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-97e8880 elementor-widget elementor-widget-heading" data-id="97e8880" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Connect Merchant Account</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-54d6023 elementor-widget elementor-widget-text-editor" data-id="54d6023" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Connect Your Merchant Accounts & Verify With OTP</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-860333a elementor-align-center elementor-widget elementor-widget-button" data-id="860333a" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-xs" href="auth/connect_merchant">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Connect Merchants</span>
		</span>
					</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-350449e e-con-full e-flex e-con e-child" data-id="350449e" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-22c9ba8 elementor-widget elementor-widget-image" data-id="22c9ba8" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" decoding="async" width="68" height="80" src="repay/wp-content/uploads/2022/08/need-more-icon-3.png" class="attachment-full size-full wp-image-1276" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8ef64d3 elementor-widget elementor-widget-heading" data-id="8ef64d3" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">Start Integration</h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bc947e2 elementor-widget elementor-widget-text-editor" data-id="bc947e2" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Generate API KEYS & Token || Integrate In Your Website/Apps</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1bb2128 elementor-align-center elementor-widget elementor-widget-button" data-id="1bb2128" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-xs" href="index_asset/auth/apidetails">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Read API Docs || Integration Kits</span>
		</span>
					</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-elementor-type="page" data-elementor-id="15137" class="elementor elementor-15137">
                <div class="elementor-element elementor-element-43872bb e-flex e-con-boxed e-con e-parent" data-id="43872bb" data-element_type="container" data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-8aa3b76 e-flex e-con-boxed e-con e-child" data-id="8aa3b76" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-5c82592 e-con-full e-flex e-con e-child" data-id="5c82592" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-3e7eb57 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="3e7eb57" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" width="91" height="43" src="https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2018/12/phone-pay-image.jpg" class="elementor-animation-grow attachment-full size-full wp-image-1525" alt="" />                                            </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2e02945 elementor-widget elementor-widget-image" data-id="2e02945" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" width="116" height="40" src="https://cdn.freelogovectors.net/wp-content/uploads/2023/09/paytm_logo-freelogovectors.net_.png" class="elementor-animation-grow attachment-full size-full wp-image-1526" alt="" />                                            </div>
                                    </div>
                                    <div class="elementor-element elementor-element-e77b46d elementor-widget elementor-widget-image" data-id="e77b46d" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" width="94" height="50" src="https://mma.prnewswire.com/media/1732214/BharatPe_Logo.jpg?p=facebook" class="elementor-animation-grow attachment-full size-full wp-image-1527" alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c6d1a51 elementor-widget elementor-widget-image" data-id="c6d1a51" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" width="126" height="41" src="https://www.yesbank.in/_cache_317a/content/YBL-Logo-Identity-4401130000795866.jpg" class="elementor-animation-grow attachment-full size-full wp-image-1528" alt="" />                                            </div>
                                    </div>
                                    <div class="elementor-element elementor-element-da7741d elementor-widget elementor-widget-image" data-id="da7741d" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" width="114" height="26" src="https://static.vecteezy.com/system/resources/previews/020/336/469/non_2x/punjab-national-bank-pnb-bank-logo-free-free-vector.jpg" class="elementor-animation-grow attachment-full size-full wp-image-1529"
                                                alt="" /> </div>
                                    </div>
                                    <div class="elementor-element elementor-element-ed0b213 elementor-widget elementor-widget-image" data-id="ed0b213" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" width="106" height="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/RBL_Bank_SVG_Logo.svg/1200px-RBL_Bank_SVG_Logo.svg.png" class="elementor-animation-grow attachment-full size-full wp-image-1530" alt="" />                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-cf8aace e-flex e-con-boxed e-con e-parent" data-id="cf8aace" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}" data-core-v316-plus="true">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-079cb64 e-flex e-con-boxed e-con e-child" data-id="079cb64" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-753be9d e-con-full e-flex e-con e-child" data-id="753be9d" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-6bb821a elementor-widget elementor-widget-image" data-id="6bb821a" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="">
							<img loading="lazy" width="123" height="50" src="<?php echo $site_settings['logo_url']; ?>" class="attachment-full size-full wp-image-7292" alt="" />								</a>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-83840d3 elementor-widget elementor-widget-text-editor" data-id="83840d3" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Accept Payments Directly to your Bank Account At 0% Transaction Fee for businesses <?php echo $site_settings['brand_name']; ?>, QR code checkout, deep linking APIs, API for bulk UPI payments </p>
                                            <p>To accept payments via UPI Apps like PhonePe, Google Pay, Paytm etc, you can integrate with a payment gateway that supports UPI flow</p>
                                            <p>UPI Quick Response (QR) Code is a unique graphics code that helps to accept UPI payments when scanned with a compatible mobile phone.</p>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-55b5437 elementor-widget elementor-widget-image" data-id="55b5437" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img loading="lazy" width="194" height="28" src="repay/pg.png" class="attachment-full size-full wp-image-16507" alt="" /> </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-514ab4c e-con-full e-flex e-con e-child" data-id="514ab4c" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-b69113f elementor-widget elementor-widget-heading" data-id="b69113f" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">Important Link</h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c121a44 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="c121a44" data-element_type="widget" data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 07-02-2024 */

                                                .elementor-widget-divider {
                                                    --divider-border-style: none;
                                                    --divider-border-width: 1px;
                                                    --divider-color: #0c0d0e;
                                                    --divider-icon-size: 20px;
                                                    --divider-element-spacing: 10px;
                                                    --divider-pattern-height: 24px;
                                                    --divider-pattern-size: 20px;
                                                    --divider-pattern-url: none;
                                                    --divider-pattern-repeat: repeat-x
                                                }

                                                .elementor-widget-divider .elementor-divider {
                                                    display: flex
                                                }

                                                .elementor-widget-divider .elementor-divider__text {
                                                    font-size: 15px;
                                                    line-height: 1;
                                                    max-width: 95%
                                                }

                                                .elementor-widget-divider .elementor-divider__element {
                                                    margin: 0 var(--divider-element-spacing);
                                                    flex-shrink: 0
                                                }

                                                .elementor-widget-divider .elementor-icon {
                                                    font-size: var(--divider-icon-size)
                                                }

                                                .elementor-widget-divider .elementor-divider-separator {
                                                    display: flex;
                                                    margin: 0;
                                                    direction: ltr
                                                }

                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                    align-items: center
                                                }

                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                    display: block;
                                                    content: "";
                                                    border-block-end: 0;
                                                    flex-grow: 1;
                                                    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                }

                                                .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                    margin-left: 0
                                                }

                                                .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                    margin-right: 0
                                                }

                                                .elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-start .elementor-divider-separator:before {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-start .elementor-divider__element {
                                                    margin-inline-start: 0
                                                }

                                                .elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                    flex-grow: 0;
                                                    flex-shrink: 100
                                                }

                                                .elementor-widget-divider--element-align-end .elementor-divider-separator:after {
                                                    content: none
                                                }

                                                .elementor-widget-divider--element-align-end .elementor-divider__element {
                                                    margin-inline-end: 0
                                                }

                                                .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                    border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                }

                                                .elementor-widget-divider--separator-type-pattern {
                                                    --divider-border-style: none
                                                }

                                                .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                    width: 100%;
                                                    min-height: var(--divider-pattern-height);
                                                    -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                    mask-size: var(--divider-pattern-size) 100%;
                                                    -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                    mask-repeat: var(--divider-pattern-repeat);
                                                    background-color: var(--divider-color);
                                                    -webkit-mask-image: var(--divider-pattern-url);
                                                    mask-image: var(--divider-pattern-url)
                                                }

                                                .elementor-widget-divider--no-spacing {
                                                    --divider-pattern-size: auto
                                                }

                                                .elementor-widget-divider--bg-round {
                                                    --divider-pattern-repeat: round
                                                }

                                                .rtl .elementor-widget-divider .elementor-divider__text {
                                                    direction: rtl
                                                }

                                                .e-con-inner>.elementor-widget-divider,
                                                .e-con>.elementor-widget-divider {
                                                    width: var(--container-widget-width, 100%);
                                                    --flex-grow: var(--container-widget-flex-grow)
                                                }
                                            </style>
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
						</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-852c1fe elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="852c1fe" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
												</span>
										<span class="elementor-icon-list-text">Home</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
													</span>
										<span class="elementor-icon-list-text">About Us</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
										</span>
										<span class="elementor-icon-list-text">Terms Conditions</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
										</span>
										<span class="elementor-icon-list-text">Privacy Policy</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
											</span>
										<span class="elementor-icon-list-text">Refund Policy</span>
											</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-58c9564 e-con-full e-flex e-con e-child" data-id="58c9564" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-b0b6a85 elementor-widget elementor-widget-heading" data-id="b0b6a85" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">Support</h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-d1fd7de elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d1fd7de" data-element_type="widget" data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
						</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3f20301 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3f20301" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
													</span>
										<span class="elementor-icon-list-text">Support</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
											</span>
										<span class="elementor-icon-list-text">Transaction Dispute</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
												</span>
										<span class="elementor-icon-list-text">Complaints</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
												</span>
										<span class="elementor-icon-list-text">Faq</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="">

												<span class="elementor-icon-list-icon">
													</span>
										<span class="elementor-icon-list-text">Review & FeedBack</span>
											</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2f8ddc0 e-con-full e-flex e-con e-child" data-id="2f8ddc0" data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}">
                                    <div class="elementor-element elementor-element-3793915 elementor-widget elementor-widget-heading" data-id="3793915" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">Get in Touch</h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6f5a962 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6f5a962" data-element_type="widget" data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
						</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c90e846 elementor-mobile-align-left elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="c90e846" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <a href="mailto:info@<?php
$host = $_SERVER['HTTP_HOST'];
$cleanHost = preg_replace('/^www\./', '', $host);
echo $cleanHost;
?>">

											<span class="elementor-icon-list-text">Email: info@<?php
$host = $_SERVER['HTTP_HOST'];
$cleanHost = preg_replace('/^www\./', '', $host);
echo $cleanHost;
?>
</span>
											</a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="<?php echo $site_settings['whatsapp_number']; ?>">

											<span class="elementor-icon-list-text">Phone: +91 <?php echo $site_settings['whatsapp_number']; ?></span>
											</a>
                                                <!--</li>-->
                                                <!--<li class="elementor-icon-list-item">-->
                                                    <!--<span class="elementor-icon-list-text">Tech: +1 (987) 654 321 9 9</span>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c711a5a elementor-shape-circle e-grid-align-left e-grid-align-mobile-left elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="c711a5a" data-element_type="widget" data-widget_type="social-icons.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.19.0 - 07-02-2024 */

                                                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                    line-height: 1;
                                                    font-size: 0
                                                }

                                                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                    display: inline-grid
                                                }

                                                .elementor-widget-social-icons .elementor-grid {
                                                    grid-column-gap: var(--grid-column-gap, 5px);
                                                    grid-row-gap: var(--grid-row-gap, 5px);
                                                    grid-template-columns: var(--grid-template-columns);
                                                    justify-content: var(--justify-content, center);
                                                    justify-items: var(--justify-content, center)
                                                }

                                                .elementor-icon.elementor-social-icon {
                                                    font-size: var(--icon-size, 25px);
                                                    line-height: var(--icon-size, 25px);
                                                    width: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));
                                                    height: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))
                                                }

                                                .elementor-social-icon {
                                                    --e-social-icon-icon-color: #fff;
                                                    display: inline-flex;
                                                    background-color: #69727d;
                                                    align-items: center;
                                                    justify-content: center;
                                                    text-align: center;
                                                    cursor: pointer
                                                }

                                                .elementor-social-icon i {
                                                    color: var(--e-social-icon-icon-color)
                                                }

                                                .elementor-social-icon svg {
                                                    fill: var(--e-social-icon-icon-color)
                                                }

                                                .elementor-social-icon:last-child {
                                                    margin: 0
                                                }

                                                .elementor-social-icon:hover {
                                                    opacity: .9;
                                                    color: #fff
                                                }

                                                .elementor-social-icon-android {
                                                    background-color: #a4c639
                                                }

                                                .elementor-social-icon-apple {
                                                    background-color: #999
                                                }

                                                .elementor-social-icon-behance {
                                                    background-color: #1769ff
                                                }

                                                .elementor-social-icon-bitbucket {
                                                    background-color: #205081
                                                }

                                                .elementor-social-icon-codepen {
                                                    background-color: #000
                                                }

                                                .elementor-social-icon-delicious {
                                                    background-color: #39f
                                                }

                                                .elementor-social-icon-deviantart {
                                                    background-color: #05cc47
                                                }

                                                .elementor-social-icon-digg {
                                                    background-color: #005be2
                                                }

                                                .elementor-social-icon-dribbble {
                                                    background-color: #ea4c89
                                                }

                                                .elementor-social-icon-elementor {
                                                    background-color: #d30c5c
                                                }

                                                .elementor-social-icon-envelope {
                                                    background-color: #ea4335
                                                }

                                                .elementor-social-icon-facebook,
                                                .elementor-social-icon-facebook-f {
                                                    background-color: #3b5998
                                                }

                                                .elementor-social-icon-flickr {
                                                    background-color: #0063dc
                                                }

                                                .elementor-social-icon-foursquare {
                                                    background-color: #2d5be3
                                                }

                                                .elementor-social-icon-free-code-camp,
                                                .elementor-social-icon-freecodecamp {
                                                    background-color: #006400
                                                }

                                                .elementor-social-icon-github {
                                                    background-color: #333
                                                }

                                                .elementor-social-icon-gitlab {
                                                    background-color: #e24329
                                                }

                                                .elementor-social-icon-globe {
                                                    background-color: #69727d
                                                }

                                                .elementor-social-icon-google-plus,
                                                .elementor-social-icon-google-plus-g {
                                                    background-color: #dd4b39
                                                }

                                                .elementor-social-icon-houzz {
                                                    background-color: #7ac142
                                                }

                                                .elementor-social-icon-instagram {
                                                    background-color: #262626
                                                }

                                                .elementor-social-icon-jsfiddle {
                                                    background-color: #487aa2
                                                }

                                                .elementor-social-icon-link {
                                                    background-color: #818a91
                                                }

                                                .elementor-social-icon-linkedin,
                                                .elementor-social-icon-linkedin-in {
                                                    background-color: #0077b5
                                                }

                                                .elementor-social-icon-medium {
                                                    background-color: #00ab6b
                                                }

                                                .elementor-social-icon-meetup {
                                                    background-color: #ec1c40
                                                }

                                                .elementor-social-icon-mixcloud {
                                                    background-color: #273a4b
                                                }

                                                .elementor-social-icon-odnoklassniki {
                                                    background-color: #f4731c
                                                }

                                                .elementor-social-icon-pinterest {
                                                    background-color: #bd081c
                                                }

                                                .elementor-social-icon-product-hunt {
                                                    background-color: #da552f
                                                }

                                                .elementor-social-icon-reddit {
                                                    background-color: #ff4500
                                                }

                                                .elementor-social-icon-rss {
                                                    background-color: #f26522
                                                }

                                                .elementor-social-icon-shopping-cart {
                                                    background-color: #4caf50
                                                }

                                                .elementor-social-icon-skype {
                                                    background-color: #00aff0
                                                }

                                                .elementor-social-icon-slideshare {
                                                    background-color: #0077b5
                                                }

                                                .elementor-social-icon-snapchat {
                                                    background-color: #fffc00
                                                }

                                                .elementor-social-icon-soundcloud {
                                                    background-color: #f80
                                                }

                                                .elementor-social-icon-spotify {
                                                    background-color: #2ebd59
                                                }

                                                .elementor-social-icon-stack-overflow {
                                                    background-color: #fe7a15
                                                }

                                                .elementor-social-icon-steam {
                                                    background-color: #00adee
                                                }

                                                .elementor-social-icon-stumbleupon {
                                                    background-color: #eb4924
                                                }

                                                .elementor-social-icon-telegram {
                                                    background-color: #2ca5e0
                                                }

                                                .elementor-social-icon-thumb-tack {
                                                    background-color: #1aa1d8
                                                }

                                                .elementor-social-icon-tripadvisor {
                                                    background-color: #589442
                                                }

                                                .elementor-social-icon-tumblr {
                                                    background-color: #35465c
                                                }

                                                .elementor-social-icon-twitch {
                                                    background-color: #6441a5
                                                }

                                                .elementor-social-icon-twitter {
                                                    background-color: #1da1f2
                                                }

                                                .elementor-social-icon-viber {
                                                    background-color: #665cac
                                                }

                                                .elementor-social-icon-vimeo {
                                                    background-color: #1ab7ea
                                                }

                                                .elementor-social-icon-vk {
                                                    background-color: #45668e
                                                }

                                                .elementor-social-icon-weibo {
                                                    background-color: #dd2430
                                                }

                                                .elementor-social-icon-weixin {
                                                    background-color: #31a918
                                                }

                                                .elementor-social-icon-whatsapp {
                                                    background-color: #25d366
                                                }

                                                .elementor-social-icon-wordpress {
                                                    background-color: #21759b
                                                }

                                                .elementor-social-icon-xing {
                                                    background-color: #026466
                                                }

                                                .elementor-social-icon-yelp {
                                                    background-color: #af0606
                                                }

                                                .elementor-social-icon-youtube {
                                                    background-color: #cd201f
                                                }

                                                .elementor-social-icon-500px {
                                                    background-color: #0099e5
                                                }

                                                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                    border-radius: 10%
                                                }

                                                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                    border-radius: 50%
                                                }
                                            </style>
                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-square elementor-repeater-item-bb2398e" href="#" target="_blank">
						<span class="elementor-screen-only">Facebook-square</span>
                                                <i class="fab fa-facebook-square"></i> </a>
                                                </span>
                                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter-square elementor-repeater-item-1c1cd11" href="#" target="_blank">
						<span class="elementor-screen-only">Twitter-square</span>
                                                <i class="fab fa-twitter-square"></i> </a>
                                                </span>
                                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-ef0ea9c" href="#" target="_blank">
						<span class="elementor-screen-only">Linkedin</span>
                                                <i class="fab fa-linkedin"></i> </a>
                                                </span>
                                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest-square elementor-repeater-item-75a087c" href="#" target="_blank">
						<span class="elementor-screen-only">Pinterest-square</span>
                                                <i class="fab fa-pinterest-square"></i> </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- footer area start -->
        <footer class="footer-area style-3" style="background-image :url( );  background-color: ">

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">


                        <div class="col-lg-12 text-center">
                            <p class="copyright">
                                Copyright © <?php echo $site_settings['copyright_text']; ?> 2024. All Rights Reserved </p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->
    </div>
    <!-- #page -->


    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>

    <!--copyscapeskip-->
    <aside id="moove_gdpr_cookie_info_bar" class="moove-gdpr-info-bar-hidden moove-gdpr-align-center moove-gdpr-dark-scheme gdpr_infobar_postion_bottom" aria-label="GDPR Cookie Banner" style="display: none;">
        <div class="moove-gdpr-info-bar-container">
            <div class="moove-gdpr-info-bar-content">

                <div class="moove-gdpr-cookie-notice">
                    <p>We are using cookies to give you the best experience on our website.</p>
                    <p>You can find out more about which cookies we are using or switch them off in <button data-href="#moove_gdpr_cookie_modal" class="change-settings-button">settings</button>.</p>
                    <p><?php echo $site_settings['brand_name']; ?> || PAYMENT PROVIDER Team</p>
                </div>
                <!--  .moove-gdpr-cookie-notice -->
                <div class="moove-gdpr-button-holder">
                    <button class="mgbutton moove-gdpr-infobar-allow-all gdpr-fbo-0" aria-label="Accept">Accept</button>
                </div>
                <!--  .button-container -->
            </div>
            <!-- moove-gdpr-info-bar-content -->
        </div>
        <!-- moove-gdpr-info-bar-container -->
    </aside>
    <!-- #moove_gdpr_cookie_info_bar -->
    <!--/copyscapeskip-->
    <script type='text/javascript'>
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css' href='repay/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=11.8.0-dev' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-15137-css' href='repay/wp-content/uploads/elementor/css/post-15137.css?ver=1708671300' type='text/css' media='all' />
    <link rel='stylesheet' id='e-animations-css' href='repay/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.19.2' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='repay/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='repay/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='repay/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.14' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type="text/javascript" src="repay/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.7" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/designingmedia.com\/repay\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="repay/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.7" id="contact-form-7-js"></script>
    <script type="text/javascript" src="repay/wp-content/plugins/repay-toolkit/assets/js/repay-widgets.js?ver=1.0" id="repay-widgets-js-js"></script>
    <script type="text/javascript" src="repay/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.14" defer async id="tp-tools-js"></script>
    <script type="text/javascript" src="repay/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.14" defer async id="revmin-js"></script>
    <script type="text/javascript" src="repay/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=8.5.2" id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = {
            "params": {
                "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
                "session": 30,
                "ajaxurl": "https:\/\/designingmedia.com\/repay\/wp-admin\/admin-ajax.php",
                "prefix": "wc_order_attribution_",
                "allowTracking": "yes"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="repay/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=8.5.2" id="wc-order-attribution-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/vendor/react.min.js?ver=18.2.0" id="react-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/deprecated.min.js?ver=e1f84915c5e8ae38964c" id="wp-deprecated-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/dom.min.js?ver=4ecffbffba91b10c5c7a" id="wp-dom-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.2.0" id="react-dom-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/escape-html.min.js?ver=6561a406d2d232a6fbd2" id="wp-escape-html-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/element.min.js?ver=cb762d190aebbec25b27" id="wp-element-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/is-shallow-equal.min.js?ver=e0f9f1d78d83f5196979" id="wp-is-shallow-equal-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
        /* ]]> */
    </script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/keycodes.min.js?ver=034ff647a54b018581d3" id="wp-keycodes-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/priority-queue.min.js?ver=9c21c957c7e50ffdbf48" id="wp-priority-queue-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/compose.min.js?ver=1339d3318cd44440dccb" id="wp-compose-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/private-apis.min.js?ver=5e7fdf55d04b8c2aadef" id="wp-private-apis-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/redux-routine.min.js?ver=b14553dce2bee5c0f064" id="wp-redux-routine-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/data.min.js?ver=e6595ba1a7cd34429f66" id="wp-data-js"></script>
    <script type="text/javascript" id="wp-data-js-after">
        /* <![CDATA[ */
        (function() {
            var userId = 0;
            var storageKey = "WP_DATA_USER_" + userId;
            wp.data
                .use(wp.data.plugins.persistence, {
                    storageKey: storageKey
                });
        })();
        /* ]]> */
    </script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.21" id="lodash-js"></script>
    <script type="text/javascript" id="lodash-js-after">
        /* <![CDATA[ */
        window.lodash = _.noConflict();
        /* ]]> */
    </script>
    <script type="text/javascript" src="repay/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-registry.js?ver=1c879273bd5c193cad0a" id="wc-blocks-registry-js"></script>
    <script type="text/javascript" src="repay/wp-includes/js/dist/url.min.js?ver=421139b01f33e5b327d8" id="wp-url-js"></script>
    <script disable-devtool-auto="" src="https://pay.imb.org.in/Qrcode/disable-devtool.js" data-url="https://www.google.com/"></script> 
    <script type="text/javascript" src="repay/wp-includes/js/dist/api-fetch.min.js?ver=4c185334c5ec26e149cc" id="wp-api-fetch-js"></script>
    <script type="text/javascript" id="wp-api-fetch-js-after">
        /* <![CDATA[ */
        wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("repay/wp-json/"));
        wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("8