<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <!-- Head -->
  <head>
    
    <!-- Favicon Google Ads -->
    <link rel="icon" href="{{asset('/favicon.ico')}}">

    <!-- Author (Me) -->
    <meta name="author" content="Leonardo Abreu de Paulo, leonardo.abreu.de.paulo@gmail.com">

    <!-- Needed Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Description For Search Engine Optimization -->
    <meta name="description" content="@lang('meta.description')">

    <!-- Languages For Search Engine Optimization -->
    <link rel="alternate" href="https://achieverentacar.com/" hreflang="x-default"/>
    <link rel="alternate" href="https://achieverentacar.com/en" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/about" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/faq" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/contact" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/terms" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/en/privacy" hreflang="en"/>
    <link rel="alternate" href="https://achieverentacar.com/pt" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/about" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/faq" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/contact" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/terms" hreflang="pt"/>
    <link rel="alternate" href="https://achieverentacar.com/pt/privacy" hreflang="pt"/>
    
    <!-- Canonical Pages For Search Engine Optimization -->
    <link rel="canonical" href="https://achieverentacar.com/en"/>

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="@lang('meta.facebook.title')"/>
    <meta property="og:description" content="@lang('meta.facebook.description')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Achieve Rent a Car"/>
    <meta property="og:url" content="https://achieverentacar.com/en"/>
    <meta property="og:image" content="https://achieverentacar.com/img/main/2.jpg"/>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="Achieve Rent A Car"/>
    <meta name="twitter:title" content="@lang('meta.twitter.title')"/>
    <meta name="twitter:description" content="@lang('meta.twitter.description')"/>
    <meta name="twitter:creator" content="@o_leo_a"/>
    <meta name="twitter:image" content="https://achieverentacar.com/img/main/2.jpg"/>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/cf64f43fc0.js" crossorigin="anonymous"></script>

    <!-- Resources (CSS and JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page Title -->
    <title>@lang($title)</title>

  </head>

  <!-- Body -->
  <body class="min-h-screen grid grid-rows-1">

    <!-- Clixtell Tracking Code -->
    <script type='text/javascript'>
      var script=document.createElement('script');
      var prefix=document.location.protocol;
      script.async=true;script.type='text/javascript';
      var target=prefix + '//scripts.clixtell.com/track.js';
      script.src=target;var elem=document.head;
      elem.appendChild(script);
    </script>

    <!-- Header Content -->
    <nav class="fixed top-0 left-0 w-full flex flex-col z-30 xl:pl-16">

      <!-- Discounts -->
      @if(isset($discount) && $discount)
        <div class="text-xs md:text-xl w-full py-3 md:px-64 px-4 flex justify-center items-center font-semibold" style="background-color: {{$discount['color']}}; color: {{$discount['text_color']}};">
          <p class="w-full h-full text-center md:block hidden">
            @if ($language=='en')
              @lang($discount['text'])
            @elseif ($language=='pt')
              @lang($discount['texto'])
            @endif
          </p>
          <p class="w-full h-full text-start md:hidden block">
            @if ($language=='en')
              @lang($discount['text_mobile'])
            @elseif ($language=='pt')
              @lang($discount['texto_mobile'])
            @endif
          </p>
        </div>
      @endif

      <!-- Navbar -->
      <div class="w-screen bg-white xl:hidden flex gap-4 p-4">
        
        <button title="@lang('menu.button.title')" id="menu-mobile" @class([
          "hover:bg-flagRed hover:text-white",
          "h-12 flex items-center rounded-md text-flagRed w-min"
        ])>
          <i class="fa-solid fa-bars min-w-12 flex items-center justify-center"></i>
        </button>

        <img src="{{asset('/img/logos/logo2.png')}}" alt="Achieve Rent A Car Logo" class="w-full h-12 object-contain">

      </div>

    </nav>

    <!-- Sidebar -->
    <aside @class([
        'xl:w-16 w-48 h-full fixed left-0 top-0 bg-white z-40 xl:[&>a>span]:hidden p-2 flex flex-col gap-2 transition-all duration-300 xl:-translate-x-0 -translate-x-full',
        'hover:w-48 [&>a>span]:hover:block'
      ]) id="sidebar">

      <!-- Menu -->
      <button title="@lang('menu.button.title')" id="menu" @class([
        'xl:flex hidden',
        "hover:bg-flagRed hover:text-white",
        "h-12 items-center rounded-md text-flagRed w-min"
      ])>
        <i class="fa-solid fa-bars min-w-12 flex items-center justify-center" id="menu-icon"></i>
      </button>

      <!-- Close Menu -->
      <button title="@lang('menu.button.title')" id="close-menu" @class([
        'xl:hidden flex',
        "hover:bg-flagRed hover:text-white",
        "h-12 items-center rounded-md text-flagRed w-min pl-auto"
      ])>
        <i class="fa-solid fa-xmark min-w-12 flex items-center justify-center"></i>
      </button>

      <!-- Home -->
      <a title="@lang('menu.home.title')" href="{{route('home', ['locale' => $locale])}}" @class([
        "hover:bg-flagRed hover:text-white",
        "h-12 flex items-center rounded-md text-flagRed",
        'bg-flagRed/70 text-white' => $current == 'home'
      ])>
        <i class="fa-solid fa-house min-w-12 flex items-center justify-center"></i>
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.home')</span>
      </a>

      <!-- Fleet -->
      <a title="@lang('menu.fleet.title')" href="{{route('fleet', ['locale' => $locale])}}" @class([
        "hover:bg-flagRed hover:text-white",
        "h-12 flex items-center rounded-md text-flagRed",
        'bg-flagRed/70 text-white' => $current == 'fleet'
      ])>
        <i class="fa-solid fa-car-rear min-w-12 flex items-center justify-center"></i>
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.fleet')</span>
      </a>

      <!-- About Us -->
      <a title="@lang('menu.about.title')" href="{{route('about', ['locale' => $locale])}}" @class([
        "hover:bg-flagRed hover:text-white",
        "h-12 flex items-center rounded-md text-flagRed",
        'bg-flagRed/70 text-white' => $current == 'about'
      ])>
        <i class="fa-solid fa-people-group min-w-12 flex items-center justify-center"></i>
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.about')</span>
      </a>

      <!-- Car Seats -->
      <a title="@lang('menu.seats.title')" href="{{route('seats', ['locale' => $locale])}}" @class([
        "hover:bg-flagRed hover:text-white",
        "h-12 flex items-center rounded-md text-flagRed",
        'bg-flagRed/70 text-white' => $current == 'seats'
      ])>
        <i class="fa-solid fa-baby min-w-12 flex items-center justify-center"></i>
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.seats')</span>
      </a>

      <!-- FAQ -->
      <a title="@lang('menu.faq.title')" href="{{route('faq', ['locale' => $locale])}}" @class([
        "hover:bg-flagRed hover:text-white",
        "h-12 flex items-center rounded-md text-flagRed",
        'bg-flagRed/70 text-white' => $current == 'faq'
      ])>
        <i class="fa-solid fa-circle-question min-w-12 flex items-center justify-center"></i>
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.faq')</span>
      </a>

      <!-- Contact -->
      <a title="@lang('menu.contact.title')" href="{{route('contact', ['locale' => $locale])}}" @class([
        "hover:bg-flagRed hover:text-white",
        "h-12 flex items-center rounded-md text-flagRed",
        'bg-flagRed/70 text-white' => $current == 'contact'
      ])>
        <i class="fa-solid fa-envelope-open-text min-w-12 flex items-center justify-center"></i>
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.contact')</span>
      </a>

      <!-- English -->
      <a title="@lang('menu.en.title')" href="{{route($current, ['locale' => 'en'])}}" @class([
        'h-12 flex items-center text-flagRed hover:bg-flagRed hover:text-white rounded-md mt-auto',
        'bg-flagRed/70 text-white' => $language == 'en'
      ])>
        <img src="{{asset('/img/flags/en.png')}}" alt="England Flag" class="px-3 max-w-12">
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.en')</span>
      </a>

      <!-- Portuguese -->
      <a title="@lang('menu.pt.title')" href="{{route($current, ['locale' => 'pt'])}}" @class([
        'h-12 flex items-center text-flagRed hover:bg-flagRed hover:text-white rounded-md',
        'bg-flagRed/70 text-white' => $language == 'pt'
      ])>
        <img src="{{asset('/img/flags/pt.png')}}" alt="Portugal Flag" class="px-3 max-w-12">
        <span class="whitespace-nowrap overflow-x-hidden">@lang('menu.pt')</span>
      </a>

    </aside>

    <!-- Loader -->
    <div role="status" id="loading" class="hidden h-screen w-screen bg-zinc-200/70 z-50 fixed top-0 left-0 items-center justify-center">
      <img src="{{url('/img/loader/loader.png')}}" alt="Loader" class="animate-spin-slow absolute z-30 w-28">
      <img src="{{url('/img/logos/logo_sem_carro.png')}}" alt="Loader" class="absolute z-20 h-14">
    </div>

    <!-- Main Content -->
    <main class="row-span-1 xl:pl-16">

      @yield('main')

    </main>

    <!-- Footer -->
    <footer class="w-full xl:pl-80 xl:pr-64 px-4 bg-flagRed min-h-footer flex flex-col justify-center items-start gap-4 py-4 z-20">

      <!-- Links -->
      <div class="hidden gap-4 text-white justify-center items-center">

        <!-- Instagram -->
        <a href="https://www.instagram.com/achieverentacar/" target="_blank">
          <i class="fab fa-instagram text-4xl hover:text-white"></i>
        </a>

        <!-- Youtube -->
        <a href="https://www.youtube.com/@achieverentacar" target="_blank">
          <i class="fab fa-youtube text-4xl hover:text-white"></i>
        </a>

      </div>

      <!-- Separator -->
      <div class="bg-flagYellow w-full h-1 rounded hidden"></div>

      <!-- Legal -->
      <p class="text-white flex md:flex-row flex-col gap-1">
        <a class="hover:text-white" title="@lang('footer.terms.title')" href="{{route('terms', $locale)}}">@lang('footer.terms')</a>
        <a class="hover:text-white" title="@lang('footer.privacy.title')" href="{{route('privacy', $locale)}}">@lang('footer.privacy')</a>
      </p>

      <!-- Reserved -->
      <div class="flex md:flex-row flex-col gap-1">
        <p class="text-white">@lang('footer.@')</p>
      </div>

    </footer>

  </body>

</html>
