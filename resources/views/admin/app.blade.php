<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Admin</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div id="admin-app">
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{ mix('js/admin/app.js') }}"></script>
</html>
