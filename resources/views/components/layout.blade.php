<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>BikeTribe | Cycling meetups & groups</title>
    </head>
    <body>

        <x-navbar></x-navbar>
        
        @if(session()->has('success'))
            <div x-data="{ show:true }" 
                x-init="setTimeout(() => show = false, 3000)"
                x-show="show"
                class="message-container message-success">
                {{session('success')}}
            </div>
        @endif

        @if(session()->has('failure'))
            <div x-data="{ show:true }" 
                x-init="setTimeout(() => show = false, 3000)"
                x-show="show"
                class="message-container message-fail">
                {{session('failure')}}
            </div>
        @endif

       {{ $slot }}
        
        <footer>Copyright &copy; BikeTribe {{date('Y')}}</footer>

    </body>
</html>
