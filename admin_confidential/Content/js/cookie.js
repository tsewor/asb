(function ($) {
    $.cookie = function (key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
					 encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
					 options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
					 options.path ? '; path=' + options.path : '',
					 options.domain ? '; domain=' + options.domain : '',
					 options.secure ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var decode = options.raw ? function (s) { return s; } : decodeURIComponent;

        var pairs = document.cookie.split('; ');
        for (var i = 0, pair; pair = pairs[i] && pairs[i].split('=') ; i++) {
            if (decode(pair[0]) === key) return decode(pair[1] || ''); // IE saves cookies with empty string as "c; ", e.g. without "=" as opposed to EOMB, thus pair[1] may be undefined
        }
        return null;
    };

    $.stormCookie = function (options) {

        var visited = $.cookie('visited') !== null;
        $.cookie('visited', true);
        var cookieSupport = $.cookie('visited') !== null;

        if (visited || !cookieSupport) {
            return;
        }

        var defaults = {
            acceptButtonText: "Continue",
            declineButtonText: "More info",
            message: '<br />We use cookies to make your experience of our website better.<br />By continuing to use the website you consent that you are happy for us to set these cookies.',
            target: '',
            cookiePageUrl: '/cookies'
        };

        var options = $.extend(defaults, options);

        // add HTML
        $('<div class="sc-cookies"><div class="sc-cookies-wrap"><p>' + options.message + '</p><div class="sc-actions"><button name="button" class="sc-accept-button">' + options.acceptButtonText + '</button><a href="' + options.cookiePageUrl + '" target="' + options.target + '"><button name="button" class="sc-decline-button">' + options.declineButtonText + '</button></a></div></div></div>').insertAfter('head');

        // add CSS
        $("<style type='text/css'>.sc-cookies {background: #eee;display: block;padding: 10px 0;width: 100%;color: #666;font-family: sans-serif;font-size: 16px;line-height: 20px;overflow: hidden;}.sc-cookies-wrap {width: 90%;max-width: 1200px;margin: 0 auto;}.sc-cookies p {width: 75%;float: left;margin: 0;color: #666;}.sc-cookies p a:link,.sc-cookies p a:visited {font-weight: bold;color: #fff;text-decoration: underline;}.sc-cookies p a:hover {text-decoration: none;}.sc-cookies .sc-actions {float: left;width: 20%;margin: 0 0 0 5%;}.sc-cookies .sc-actions a:link,.sc-cookies .sc-actions a:visited {color: #fff;font-size: 12px;text-align: center;display: block;}.sc-accept-button {float: left;width: 100%;border: none;background: #9DC427;color: #fff;display: block;text-align: center;margin: 5px 0 5px;padding: 6px 5%;font-size: 16px;font-weight: bold;cursor: pointer;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}.sc-decline-button {float: left;width: 100%;	border: none;background: none;color: #444;display: block;text-align: center;margin: 5px 0 5px;padding: 6px 5%;font-size: 12px;font-weight: bold;cursor: pointer;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;}.sc-cookies .sc-accept-button:hover {	background: #88AA22;}.sc-cookies a:link,.sc-cookies a:visited {color: #fff;font-weight: bold;text-decoration: underline;}.sc-cookies a:hover {text-decoration: none;color: #eee;}@media screen and (max-width: 768px) {.sc-cookies p {width: 100%;}.sc-cookies .sc-actions {width: 100%;margin: 10px 0 0;}}</style>").appendTo("head");

        // click acceptButton
        $('.sc-accept-button').click(function () {
            $('.sc-cookies').hide();
        });

        // click declineButton
        $('.sc-decline-button').click(function () {
            $('.sc-cookies').hide();
        });
    };

})(jQuery);