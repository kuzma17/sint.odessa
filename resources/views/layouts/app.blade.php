<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="screen, print">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @include('lang')
    <div class="wrapper " id="app">
        @yield('content_page')
    </div>

    <div class="clear"></div>
    <div class="container page">
        <div class="row">
            @yield('container')

        </div>
    </div>
</div>

<div class="bottom-wrapper">
    <div class="container bottom">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 border_right">
                <h4>@lang('main.contacts')</h4>

                <ul class="address-bottom">
                    <li><i class="glyphicon glyphicon-phone"></i> +38(050)392-392-5</li>
                    <li><i class="glyphicon glyphicon-envelope"></i> info@sint.odessa.ua</li>
                    <li><a href="http://sint.odessa.ua"><i class="glyphicon glyphicon-globe"></i> http://sint.odessa.ua</a>
                    </li>
                    <li><a href="http://sint-market.com"><i class="glyphicon glyphicon-shopping-cart"></i>
                            http://sint-market.com</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 border_right">
                <h4>@lang('main.offices')</h4>

                <ul class="address-bottom">
                    <li><i class="glyphicon glyphicon-map-marker"></i> @lang('main.office_admiralsky')
                        <i class="glyphicon glyphicon-earphone"></i> +38(0482)333-767
                    </li>
                    <li><i class="glyphicon glyphicon-map-marker"></i> @lang('main.office_soborka')
                        <i class="glyphicon glyphicon-earphone"></i> +38(048)777-16-85
                    </li>
                    <li><i class="glyphicon glyphicon-map-marker"></i> @lang('main.office_dneprodoroga')
                        <i class="glyphicon glyphicon-earphone"></i> +38(0482)379-141
                    </li>
                    <li><i class="glyphicon glyphicon-map-marker"></i> @lang('main.office_koroleva')
                        <i class="glyphicon glyphicon-earphone"></i> +38(0482)323-505
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 border_right">
                <h4>@lang('main.navigation')</h4>
                <?php
                $menu = \App\Menu::root()->active()->order()->get();
                $i = 0;
                ?>
                <ul class="menu-bottom">
                    @foreach($menu as $link)
                        @if($i == 5)
                </ul>
                <ul class="menu-bottom">
                    @endif
                    <li><a href="{{ $link->url }}">{{ $link->title }}</a></li>
                    <?php $i++; ?>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <div class="banner-bottom">
                    <div class="clear"></div>
                    <!--<h4>Мы в соцсетях</h4>
                    <script type="text/javascript">(function(w,doc) {
                            if (!w.__utlWdgt ) {
                                w.__utlWdgt = true;
                                var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
                                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
                                var h=d[g]('body')[0];
                                h.appendChild(s);
                            }})(window,document);
                    </script>
                    <div data-background-alpha="1.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="disable" data-share-style="1" data-mode="share" data-like-text-enable="false" data-hover-effect="rotate-cw" data-mobile-view="true" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="round" data-sn-ids="vk.tw.fb.ok." data-share-size="40" data-background-color="#33363b" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1612300" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="true" data-selection-enable="false" class="uptolike-buttons" ></div>
                    -->
                    <h4></h4>
                    <!--LiveInternet counter-->
                    <script type="text/javascript"><!--
                        document.write("<a href='http://www.liveinternet.ru/click' " +
                            "target=_blank><img src='http://counter.yadro.ru/hit?t14.11;r" +
                            escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
                                ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                                screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
                            ";" + Math.random() +
                            "' alt='' title='LiveInternet: показано число просмотров за 24" +
                            " часа, посетителей за 24 часа и за сегодня' " +
                            "border=0 width=88 height=31><\/a>")//--></script><!--/LiveInternet-->

                    <!-- I.UA counter --><a href="http://www.i.ua/" target="_blank"
                                            onclick="this.href='http://i.ua/r.php?198771';" title="Rated by I.UA">
                        <script type="text/javascript"><!--
                            iS = 'http' + (window.location.protocol == 'https:' ? 's' : '') +
                                '://r.i.ua/s?u198771&p104&n' + Math.random();
                            iD = document;
                            if (!iD.cookie)iD.cookie = "b=b; path=/";
                            if (iD.cookie)iS += '&c1';
                            iS += '&d' + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth)
                                + "&w" + screen.width + '&h' + screen.height;
                            iT = iR = iD.referrer.replace(iP = /^[a-z]*:\/\//, '');
                            iH = window.location.href.replace(iP, '');
                            ((iI = iT.indexOf('/')) != -1) ? (iT = iT.substring(0, iI)) : (iI = iT.length);
                            if (iT != iH.substring(0, iI))iS += '&f' + escape(iR);
                            iS += '&r' + escape(iH);
                            iD.write('<img src="' + iS + '" border="0" width="88" height="31" />');
                            //--></script>
                    </a><!-- End of I.UA counter -->
                    <!-- begin of Top100 code -->

                    <script id="top100Counter" type="text/javascript"
                            src="http://counter.rambler.ru/top100.jcn?3145247"></script>
                    <noscript>
                        <a href="http://top100.rambler.ru/navi/3145247/">
                            <img src="http://counter.rambler.ru/top100.cnt?3145247" alt="Rambler's Top100" border="0"/>
                        </a>

                    </noscript>
                    <!-- end of Top100 code -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright-wrapper">
    <div class="container">
        <div class="copyright">Copyright 2017 @ Designed by <a href="mailto:v.kuzma@mail.ru">Kuzma</a></div>
    </div>
</div>

@include('order.orderModal')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/lightbox.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- New Year -->
<script src="{{ asset('js/snow.js') }}"></script>
<script src="{{ asset('js/newyear.js') }}"></script>
<!-- End New Year -->

@if(URL::current() == url('/user/order-modal'))
    <script type="text/javascript">
        $('#orderModal').modal('show');
    </script>
@endif

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'zu8O4tOtH7';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
>>>>>>> b0f16e7e2993c9aef1ac472bda0a6be7abed9b75
</body>
</html>
