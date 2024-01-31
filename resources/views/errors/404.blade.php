<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Achieve Rent A Car Madeira">
    <meta name="author" content="Leonardo Abreu de Paulo">
    <meta name="description" content="Explore Madeira Island with ease! Rent a car with us for an unforgettable journey. Discover scenic routes, picturesque landscapes, and hidden gems. Affordable and reliable car rental services tailored to enhance your Madeira experience. Book now for a seamless travel adventure!">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>404 - @lang('404')</title>
  </head>

    <body class="h-screen flex items-center justify-center">

      <main class="flex flex-col items-center justify-center gap-6">
        <h1 class="text-9xl font-black"><span class="text-flagBlue">4</span></span><span class="text-flagYellow">0</span><span class="text-flagBlue">4</span></h1>
        <h2 class="text-4xl">@lang('404')</h2>
        <a href="{{route('home', ['en'])}}" class="px-4 py-2 bg-flagRed rounded-lg text-white text-xl hover:text-white hover:bg-red-400">@lang('Home')</a>
      </main>

    </body>

</html>
