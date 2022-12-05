<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>BikeTribe | Cycling meetups & groups</title>
    </head>
    <body>
        <x-navbar></x-navbar>
        
        @if(session()->has('success'))
            <div class="message-container message-success">
                {{session('success')}}
            </div>
        @endif

        @if(session()->has('failure'))
            <div class="message-container message-fail">
                {{session('failure')}}
            </div>
        @endif

       {{ $slot }}
    </body>
</html>
