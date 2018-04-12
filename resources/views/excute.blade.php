<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
        * {
            border: 0;
            margin: 0;
            padding: 0;
        }
        iframe {
            width: 100%;
            height: 900px;
        }
    </style>
    <title>Web Tutorial</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <iframe src="/excute.php"></iframe>
    </div>
</div>
</body>
</html>
