<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>BikeTribe | Cycling meetups & groups</title>
    </head>
    <body>
       {{ $slot }}
    </body>
</html>
