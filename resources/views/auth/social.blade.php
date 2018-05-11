<div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name,email;optional=bdate,sex,phone,photo,photo_big;providers=google,facebook,twitter,instagram;hidden=yandex,linkedin,youtube,webmoney,googleplus;redirect_uri={{ urlencode('http://'.$_SERVER['HTTP_HOST']) }}/ulogin;mobilebuttons=0;"></div>
@section('js_ulogin')
    <script src="//ulogin.ru/js/ulogin.js"></script>
@endsection