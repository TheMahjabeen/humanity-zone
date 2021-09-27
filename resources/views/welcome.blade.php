<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }} - {{ env('APP_PUBLISHER') }}</title>
        <link rel="stylesheet" href="css/app.css">
        <!-- Fonts -->
        
    </head>
    <body>
        <h1>{{ env('APP_NAME') }} - {{ env('APP_PUBLISHER') }}</h1>
        <script src="js/app.js"></script>
    </body>
</html>
