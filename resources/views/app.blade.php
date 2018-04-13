<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>IT Tutorial</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="app">
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ mix('js/home/app.js') }}"></script>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</html>
