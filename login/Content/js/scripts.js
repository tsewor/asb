
// = currency calculator
//-----------------------------------------------------------------------------//

    var ctaBtn              = $('#js-ctaBtn'),
        currencyDropDown    = $('#js-currencySelect'),
        gbpAmount           = $('#js-GBPAmount'),
        foreignAmount       = $('#js-foreignAmount');

    // hide cta button
    ctaBtn.hide();

    // set Currency
    function setCurrency() {

        if ($('#js-buy').is(':checked')){

            var selectedCurrency        = currencyDropDown[0].value,
                makeID                  = '#js-' + selectedCurrency,
                selectedCurrencyValue   = $(makeID)[0].value;

        } else {
        
            var selectedCurrency        = currencyDropDown[0].value,
                makeID                  = '#js-sell-' + selectedCurrency,
                selectedCurrencyValue   = $(makeID)[0].value;
        
        }
        
        if (selectedCurrency === 'choose') {
            
        } else {
            $('#js-exRateAmount').html("1 GBP = " + selectedCurrencyValue + " " + selectedCurrency);
        }
        
        
    
    }

    // on currencyDropDown change update selectedCurrency and selectedCurrencyValue
    currencyDropDown.on('change', function(){
        
        setCurrency();
        calulate();
        currencyDropDown.find('option[value="choose"]').remove();
        gbpAmount.removeAttr("disabled");
        foreignAmount.removeAttr("disabled");

    });

    // calculate the calculator values
    function calulate() {
        
        if ($('#js-buy').is(':checked')){

            var selectedCurrency        = currencyDropDown[0].value,
                makeID                  = '#js-' + selectedCurrency,
                selectedCurrencyValue   = $(makeID)[0].value;
        
        } else {
            
            var selectedCurrency        = currencyDropDown[0].value,
                makeID                  = '#js-sell-' + selectedCurrency,
                selectedCurrencyValue   = $(makeID)[0].value;

        }

        var gbpAmountValue          = gbpAmount[0].value,
            total                   = gbpAmountValue * selectedCurrencyValue,
            totalRounded            = Math.round(total / 10) * 10,
            gbpResult               = totalRounded / selectedCurrencyValue,
            gbpResultRounded        = gbpResult.toFixed(2);

        if (gbpAmountValue > 1) {
        
            foreignAmount.val(totalRounded + ".00");
            gbpAmount.val(gbpResultRounded);                        
        
        }
        
    } 

    function calulateForeign() {

        if ($('#js-buy').is(':checked')){
        
            var selectedCurrency        = currencyDropDown[0].value,
                makeID                  = '#js-' + selectedCurrency,
                selectedCurrencyValue   = $(makeID)[0].value;
        
        } else {
            
            var selectedCurrency        = currencyDropDown[0].value,
                makeID                  = '#js-sell-' + selectedCurrency,
                selectedCurrencyValue   = $(makeID)[0].value;
        
        }

        var foreignAmountValue      = foreignAmount[0].value,
            foreignAmountRounded    = Math.round(foreignAmountValue / 10) * 10,
            total                   = foreignAmountRounded / selectedCurrencyValue,
            gbpResultRounded        = total.toFixed(2);
            
        if (foreignAmountValue > 1) { 
            
            gbpAmount.val(gbpResultRounded);
            foreignAmount.val(foreignAmountRounded + ".00");
        
        }
    }    

        $('#js-loader').hide();

    gbpAmount.on('keyup', function(){
        

        // wait 4 seconds
        setTimeout(calulate, 4000);
        $('#js-loader').show();
        $("#js-loader").delay(4000).hide(0);
    
    });

    foreignAmount.on('keyup', function(){
        
        // wait 4 seconds
        setTimeout(calulateForeign, 4000);
        
        
        
    });

    // CTA show
    foreignAmount.on('focus', function(){
        
        // delay the showing of the CTA button for 5 seconds
        ctaBtn.delay(5000).slideDown("slow");
    
    });

    gbpAmount.on('focus', function(){
        
        // delay the showing of the CTA button for 5 seconds
        ctaBtn.delay(5000).slideDown("slow");
    
    });

    
    // click the buy/sell
    $('#js-buy, #js-sell').on('click', function(){
        
        setCurrency();
        calulate();
    
    });
















// = slider
//-----------------------------------------------------------------------------//
    $("#slider1").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        namespace: "home-hero-btns"
    });
    
    $("#slider-amount").slider({
        value: 60,
        orientation: "horizontal",
        range: "min",
        animate: true
    });
    
    $("#slider-length").slider({
        value: 30,
        orientation: "horizontal",
        range: "min",
        animate: true
    });

// = icons
//-----------------------------------------------------------------------------//
    function toggleCodes(on) {
        var obj = document.getElementById('icons');
    
        if (on) {
            obj.className += ' codesOn';
        } else {
            obj.className = obj.className.replace(' codesOn', '');
        }
    }

// = async
//-----------------------------------------------------------------------------//
    function loadAsync(url, loadFn) {
        loadFn = loadFn || function() {}
        $(function() {
            var script = document.createElement('script');
            script.src = url;
            script.async = true;
            $(script).on('load', loadFn);
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s);
        });
    }

// = triggers
//-----------------------------------------------------------------------------//
    $('.js-trigger--nav').on('click', function(){
        $(this).toggleClass('active-dark');
        $('.js-panel--nav').toggle();

        $('.js-trigger--utility').removeClass('active');
        $('.js-panel--utility').hide();
        
        $('.js-trigger--search').removeClass('active');
        $('.js-panel--search').hide();
    });

    $('.js-trigger--search').on('click', function(){
        $(this).toggleClass('active');
        $('.js-panel--search').toggle();

        $('.js-trigger--nav').removeClass('active-dark');
        $('.js-panel--nav').hide();


        $('.js-trigger--utility').removeClass('active');
        $('.js-panel--utility').hide();
    });
    
    $('.js-trigger--utility').on('click', function(){
        $(this).toggleClass('active');
        $('.js-panel--utility').toggle();

        $('.js-trigger--nav').removeClass('active-dark');
        $('.js-panel--nav').hide();

        $('.js-trigger--search').removeClass('active');
        $('.js-panel--search').hide();
    });
    

// = tabs
//-----------------------------------------------------------------------------//
    $('.js-tabs').easyResponsiveTabs({
        type: 'default',
        width: 'auto',
        fit: true,
        closed: 'accordion',
        activate: function(event) {
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
    
            $name.text($tab.text());
            $info.show();
        }
    });

    $('#tabs').children('li').first().children('a').addClass('active').next().addClass('is-open').show();
    $('#tabs').on('click', 'li > a', function() {
        if (!$(this).hasClass('active')) {
            $('#tabs .is-open').removeClass('is-open').hide();
            $(this).next().toggleClass('is-open').toggle();
            $('#tabs').find('.active').removeClass('active');
            $(this).addClass('active');
        } else {
            $('#tabs .is-open').removeClass('is-open').hide();
            $(this).removeClass('active');
        }
    });


// = expanders
//-----------------------------------------------------------------------------//
    $('.expander').click(function(e){
        var item = $(e.currentTarget);
        item.parent().find("ul").toggle();
   
    });
    
    $(window).resize(function() {
        $('.submenu ul').hide();
    });
    

// = tick-list
//-----------------------------------------------------------------------------//
    $('.tick-list li').prepend('<i class="icon icon-ok-circle"></i>');


// = homepage footer
//-----------------------------------------------------------------------------//
    var pathname = window.location.pathname;
    if(pathname == "/") {
    
    } else {
        $('.subfooter').addClass('push--top');
    }

// = mortage calculator
//-----------------------------------------------------------------------------//    
    if($('.js-option-two').is(':checked')) {
        $('.toggle').show();
    }
    
    $('.js-second-address').on('click', function () {    
        if($('.js-option-two').is(':checked')) {
            $('.toggle').show();
        } else {
            $('.toggle').hide();
        }
    });

// = 
//-----------------------------------------------------------------------------//
    $(function() {
        $('button.btn-naked').click(function (e) {
            e.preventDefault();
        });
    });



// = SVG fix
//-----------------------------------------------------------------------------//
/* Version 2.2.0 */
(function($){$.fn.svgmagic=function(givenoptions){var defaultoptions={preloader:false,testmode:false,secure:false,callback:false,backgroundimage:false,dumpcache:false};var options=$.extend(defaultoptions,givenoptions);var preloaderTimer=[];if(options.testmode||!document.createElement("svg").getAttributeNS){if(typeof JSON=="undefined"){if(typeof JSON!=="object"){JSON={}}(function(){"use strict";function f(e){return e<10?"0"+e:e}function quote(e){escapable.lastIndex=0;return escapable.test(e)?'"'+e.replace(escapable,function(e){var t=meta[e];return typeof t==="string"?t:"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+e+'"'}function str(e,t){var n,r,i,s,o=gap,u,a=t[e];if(a&&typeof a==="object"&&typeof a.toJSON==="function"){a=a.toJSON(e)}if(typeof rep==="function"){a=rep.call(t,e,a)}switch(typeof a){case"string":return quote(a);case"number":return isFinite(a)?String(a):"null";case"boolean":case"null":return String(a);case"object":if(!a){return"null"}gap+=indent;u=[];if(Object.prototype.toString.apply(a)==="[object Array]"){s=a.length;for(n=0;n<s;n+=1){u[n]=str(n,a)||"null"}i=u.length===0?"[]":gap?"[\n"+gap+u.join(",\n"+gap)+"\n"+o+"]":"["+u.join(",")+"]";gap=o;return i}if(rep&&typeof rep==="object"){s=rep.length;for(n=0;n<s;n+=1){if(typeof rep[n]==="string"){r=rep[n];i=str(r,a);if(i){u.push(quote(r)+(gap?": ":":")+i)}}}}else{for(r in a){if(Object.prototype.hasOwnProperty.call(a,r)){i=str(r,a);if(i){u.push(quote(r)+(gap?": ":":")+i)}}}}i=u.length===0?"{}":gap?"{\n"+gap+u.join(",\n"+gap)+"\n"+o+"}":"{"+u.join(",")+"}";gap=o;return i}}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","    ":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;if(typeof JSON.stringify!=="function"){JSON.stringify=function(e,t,n){var r;gap="";indent="";if(typeof n==="number"){for(r=0;r<n;r+=1){indent+=" "}}else if(typeof n==="string"){indent=n}rep=t;if(t&&typeof t!=="function"&&(typeof t!=="object"||typeof t.length!=="number")){throw new Error("JSON.stringify")}return str("",{"":e})}}if(typeof JSON.parse!=="function"){JSON.parse=function(text,reviver){function walk(e,t){var n,r,i=e[t];if(i&&typeof i==="object"){for(n in i){if(Object.prototype.hasOwnProperty.call(i,n)){r=walk(i,n);if(r!==undefined){i[n]=r}else{delete i[n]}}}}return reviver.call(e,t,i)}var j;text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(e){return"\\u"+("0000"+e.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")}}})()}var obj=this,images=[],domimages=[],cssimages=[];obj.each(function(){if($(this).attr("src")!=undefined){if($(this).attr("src").split(".").pop()=="svg"){$obj=$(this);var e=new Image;e.src=$(this).attr("src");images.push(e.src);domimages.push($obj);if(options.preloader!=false){preloaderTimer.push(setTimeout(function(){$obj.attr("src",options.preloader)},500))}}}});if(options.backgroundimage){obj.each(function(){if($(this).css("background-image")!="none"&&$(this).css("background-image")!=undefined){var e=$(this).css("background-image").replace(/^url\(["']?/,"").replace(/["']?\)$/,"");if(e.split(".").pop()=="svg"){var t=new Image;t.src=e;images.push(t.src);cssimages.push($(this))}}})}var data={svgsources:images,secure:options.secure,dumpcache:options.dumpcache};if(images.length>0){var i=0;$.ajax({dataType:"jsonp",url:"http://svgmagic.bitlabs.nl/converter.php",data:data,success:function(e){var t;for(t=0;t<domimages.length;t++){clearTimeout(preloaderTimer[t]);domimages[t].attr("src",e.results[t].url)}if(options.backgroundimage){for(t;t<domimages.length+cssimages.length;t++){var n=t-domimages.length;cssimages[n].css("background-image",'url("'+e.results[t].url+'")')}}if(options.callback){options.callback()}}})}}}})(jQuery)

$('img').svgmagic();
