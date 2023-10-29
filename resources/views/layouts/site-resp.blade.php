<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale()=='en'?'ltr':'rtl'}}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
          integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    @livewireStyles
    @stack('styles')
    <style>
        .owl-dots {
            display: none;
        }
    </style>
    <style>
        [x-cloak] {
            display: none !important;
        }

        * {
            margin: 0;
            padding: 0;
        }

        /* Icon 1 */

        #nav-icon1,
        #nav-icon2,
        #nav-icon3,
        #nav-icon4 {
            width: 60px;
            height: 45px;
            position: relative;
            margin: 50px auto;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .3s ease-in-out;
            -moz-transition: .3s ease-in-out;
            -o-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
            cursor: pointer;
        }

        #nav-icon1 span,
        #nav-icon3 span,
        #nav-icon4 span {
            display: block;
            position: absolute;
            height: 3px;
            width: 30px;
            background: #fff;
            border-radius: 3px;
            opacity: 1;
            left: 8px;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: 0.4s ease-in-out;
            -moz-transition: 0.4s ease-in-out;
            -o-transition: 0.4s ease-in-out;
            transition: 0.4s ease-in-out;
        }

        #nav-icon1 span:nth-child(1) {
            top: 10px;
        }

        #nav-icon1 span:nth-child(2) {
            top: 20px;
        }

        #nav-icon1 span:nth-child(3) {
            top: 30px;
        }

        #nav-icon1.open span:nth-child(1) {
            top: 18px;
            -webkit-transform: rotate(135deg);
            -moz-transform: rotate(135deg);
            -o-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        html[dir=ltr] #nav-icon1.open span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }

        html[dir=rtl] #nav-icon1.open span:nth-child(2) {
            opacity: 0;
            right: -60px;
        }

        #nav-icon1.open span:nth-child(3) {
            top: 18px;
            -webkit-transform: rotate(-135deg);
            -moz-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }

        .menu-active {
            background-color: #000;
            color: #fff;
        }
    </style>
    <title>Nadil</title>
    <!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//nadil-analytics.generalsenses.com/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->

  
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DYHE5KYQK3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DYHE5KYQK3');
</script>
<script type='text/javascript'>
    window.smartlook||(function(d) {
      var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
      var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
      c.charset='utf-8';c.src='https://web-sdk.smartlook.com/recorder.js';h.appendChild(c);
      })(document);
      smartlook('init', '4e7293959597c22a1f3d3c9aeb97e9e5fa5d704e', { region: 'eu' });
  </script>
  
</head>
<body class="ltr:font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal">
{{--    <div id="dev" class="bg-cover w-[1920px] h-[1301px] mx-auto bg-slate-100 flex flex-col"--}}
{{--         style="background-image:url('{{asset('images/profile-bg.png')}}'); background-size:cover;"--}}
{{--    >--}}
<div id="desktop-wrapper" class=" hidden lg:flex h-screen flex-col">
    <header class="h-[200px]">
        <div id="header-wrapper" class="bg-black h-full flex items-center">
            <div id="header-content" class="mx-auto bg-black h-36 h-full w-full">
                @guest
                    <div
                        id="nav-wrapper"
                        class="hidden lg:flex justify-between items-center h-full w-[80%] max-w-12xl mx-auto"
                    >
                        <div id="logo" class="w-1/3 h-full flex justify-start items-center py-4">
                            <a href="{{route('home')}}"><img src="{{asset('/images/logo@2x.png')}}" alt="" class="h-32 w-auto object-contain"/></a>
                        </div>
                        <div class="flex space-x-2 mx-2 w-2/3 h-full justify-center items-center">
                            <a
                                href="{{route('home')}}"
                                class="bg-gray-400 rtl:ml-2 px-11 rounded-md uppercase ltr:font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold py-4 px-16 tracking-[2px] rtl:tracking-normal rounded-[19px]"
                            >{{__('nadil.menu.discover')}}</a
                            >
                            <a
                                href="{{route('site.contact')}}"
                                class="bg-gray-400 px-11 rounded-md uppercase ltr:font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold py-4 px-16 tracking-[2px] rtl:tracking-normal rounded-[19px]"
                            >{{__('nadil.menu.contact')}}</a
                            >
                            <a
                                href="{{route('login')}}"
                                class="bg-gray-400 px-11 rounded-md uppercase ltr:font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold py-4 px-16 tracking-[2px] rtl:tracking-normal rounded-[19px]"
                            >{{__('nadil.menu.login')}}</a
                            >
                            

                        </div>
                        <div class="flex justify-end items-end space-x-2 rtl:space-x-reverse ">
                            <a
                                href="{{route('site.about')}}"
                                class=" rounded-md uppercase ltr:font-lato rtl:font-ahlan rtl:font-normal text-sm ltr:font-semibold  text-[12px] text-white min-w-max"
                            >{{__('nadil.menu.businesses')}}</a>
                            @foreach (config('app.available_locales') as $locale)
                                @if (app()->getLocale() != $locale)
                                <a href="{{ request()->url() }}?language={{ $locale }}"
                                   class="inline-flex items-center px-1 pt-1 text-sm font-medium focus:outline-none transition duration-150 ease-in-out text-white ltr:font-ahlan rtl:font-lato text-xl">
                                    {{__('nadil.lang.'.$locale)}}
                                </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endguest
                @role('user')
                <div
                    id="nav-wrapper"
                    class="hidden lg:flex justify-between items-center h-full"
                >
                    <div id="logo" class="w-1/3 h-full flex justify-center items-center py-4">
                        <a href="{{route('site.home')}}"><img src="{{asset('/images/logo@2x.png')}}" alt="" class="h-32 w-auto"/></a>
                    </div>
                    <div class="flex space-x-2 mx-2 w-2/3 h-full justify-center items-center rtl:space-x-reverse">
                        <a
                            href="{{route('home')}}"
                            class="bg-gray-400 px-11  rounded-md uppercase font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold py-4 px-16 tracking-[2px] rounded-[19px]"
                        >{{__('nadil.menu.discover')}}</a
                        >
                        {{-- <a
                            href="{{route('user.history.show')}}"
                            class="bg-gray-400 px-11  rounded-md uppercase rtl:font-ahlan rtl:tracking-normal rtl:font-normal font-lato text-sm ltr:font-semibold py-4 px-16 ltr:tracking-[2px] rtl:tracking-normal rounded-[19px]"
                        >{{__('nadil.menu.reservations')}}</a
                        > --}}
                        <a
                            href="{{route('user.profile.show')}}"
                            class="bg-gray-400 px-11  rounded-md uppercase font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold py-4 px-16 tracking-[2px] rounded-[19px]"
                        >{{__('nadil.menu.profile')}}</a
                        >
                        <form action="{{route('logout')}}" method="POST" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            @csrf
                            <a
                                href="#"
                                class="bg-gray-400 px-11  rounded-md uppercase font-lato rtl:font-ahlan rtl:tracking-normal rtl:font-normal text-sm ltr:font-semibold py-4 px-16 tracking-[2px] rounded-[19px]"
                            >{{__('nadil.menu.logout')}}</a>
                        </form>
                        <div>
                            @foreach (config('app.available_locales') as $locale)
                                @if (app()->getLocale() != $locale)
                                <a href="{{ request()->url() }}?language={{ $locale }}"
                                   class="inline-flex items-center px-1 pt-1 text-sm font-medium focus:outline-none transition duration-150 ease-in-out text-white ltr:font-ahlan rtl:font-lato text-xl">
                                   {{__('nadil.lang.'.$locale)}}
                                </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    
                </div>
                @endrole
            </div>
        </div>
    </header>
    <main class="flex flex-col flex-grow">
        @yield('content')
    </main>
    <footer class="h-20">
        <div
            id="footer-content"
            class="content bg-black h-20 flex justify-between"
        >
            <div class="text-white font-bold font-din uppercase tracking-[4px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal flex flex-col justify-center px-4">
                <div>&copy; Nadil - All rights reserved</div>
            </div>
            <div class="flex space-x-6 items-center mx-2 rtl:space-x-reverse">
                <a href="{{route('site.legal.tos')}}" class="text-white font-bold font-din uppercase tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal">{{__('nadil.footer.terms')}}</a>
                <a href="{{route('site.legal.privacy')}}" class="text-white font-bold font-din uppercase tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal">{{__('nadil.footer.cancellation')}}</a>
                <a href="{{route('site.legal.faq')}}" class="text-white font-bold font-din uppercase tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal">{{__('nadil.footer.faq')}}</a>
                <a href="{{route('site.contact')}}" class="text-white font-bold font-din uppercase tracking-[2px] rtl:font-ahlan rtl:tracking-normal rtl:font-normal">{{__('nadil.footer.contact')}}</a>
            </div>
        </div>
    </footer>
</div>

<div id="mobile-wrapper" class="bg-black lg:hidden">
    <div  class="relative min-h-screen bg-black" x-data="{ isOpen: false }">
        <div class="sidebar flex-col fixed z-50 bg-white dark:bg-black inset-y-0 {{ app()->getLocale() == 'en' ? 'left-0' : 'right-0' }} z-10 w-2/3 max-w-md transform transition duration-600"
            :class="isOpen ? '' : document.getElementsByTagName('html')[0].getAttribute('lang') == 'en' ?
                '-translate-x-full' : 'translate-x-full'">

            <div class="flex justify-center">
                <div class="w-24 h-24 mt-14 rounded-full bg-black text-white flex justify-center items-center ">
                    @guest
                        <i class="fa fa-user"></i>
                    @endguest
                    @role('user')
                        <span class="uppercase">{{ auth()->user()->initials }}</span>
                    @endrole
                </div>
            </div>
            <div class="uppercase text-black dark:text-white text-center mt-5 mb-24">{{__('nadil.general.hi')}}
                @guest
                    <span>{{__('nadil.general.there')}}</span>
                @endguest
                @role('user')
                <span>{{auth()->user()->name}}</span>
                @endrole
            </div>

            <a href="{{route('site.home')}}" class=" block uppercase text-black dark:text-white py-3 px-8 {{ (request()->is('/')) ? 'menu-active' : '' }}">{{__('nadil.menu.discover')}}</a>

            @role('user')
                <a href="{{route('user.profile.show')}}" class=" block uppercase text-black dark:text-white py-3 px-8 {{ (request()->is('profile*')) ? 'menu-active' : '' }}">{{__('nadil.menu.profile')}}</a>
                <a href="{{route('user.history.show')}}" class=" block uppercase text-black dark:text-white py-3 px-8 {{ (request()->is('history')) ? 'menu-active' : '' }}">{{__('Reservations')}}</a>
                
                <form action="{{ route('logout') }}" method="POST"
                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                    @csrf
                    <a href="#" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('nadil.menu.logout')}}</a>
                </form>
            @endrole
            @guest
                <a href="{{ route('login') }}" class=" block uppercase text-black dark:text-white py-3 px-8 {{ (request()->is('login*')) ? 'menu-active' : '' }}">{{__('nadil.menu.login')}}</a>
            @endguest
            @guest
                <a href="{{ route('register') }}" class=" block uppercase text-black dark:text-white py-3 px-8 {{ (request()->is('register*')) ? 'menu-active' : '' }}">{{__('nadil.menu.register')}}</a>
            @endguest
            <a href="{{ route('site.about') }}" class=" block uppercase text-black dark:text-white py-3 px-8 {{ (request()->is('about*')) ? 'menu-active' : '' }}">{{__('nadil.menu.businesses')}}</a>
            <div>
                @foreach (config('app.available_locales') as $locale)
                    @if (app()->getLocale() != $locale)
                    <a href="{{ request()->url() }}?language={{ $locale }}"
                       class="flex items-center py-3 px-8  text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out text-black dark:to-white">
                       {{__('nadil.lang.'.$locale)}}
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
        @if (!empty($current_restaurant))
            <div class="header h-60 bg-black flex-col justify-center bg-cover"
                style="background-image:url('{{ $current_restaurant->getFirstMediaUrl('restaurant_images') }}'); background-size: cover">
            @else
                <div class="header h-80 bg-black flex-col justify-center bg-contain items-stretch bg-no-repeat"
                    style="background-image:url('{{ asset('/images/logo@2x.png') }}'); background-size: 86% 65%;
                    background-position: center 20%;
                ">
        @endif
        <div
            class="flex justify-end px-8 pt-24 h-20">
            {{-- <div class="avatar bg-black text-white dark:bg-nadilBg-100 dark:text-black h-12 w-12 rounded-full flex justify-center items-center">
                @guest
                    <i class="fa fa-user"></i>
                @endguest
                @role('user')
                    <div class="uppercase">{{ auth()->user()->initials }}</div>
                @endrole
            </div> --}}
            <div class="avatar bg-black text-white dark:bg-nadilBg-100 dark:text-black h-12 w-12 rounded-full flex justify-center items-center cursor-pointer"
                @click="isOpen = !isOpen">
                <div id="nav-icon1">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
            </div>
        </div>
    </div>
    <div class="content flex-col items-center bg-nadilBg-100 rounded-[60px] min-h-[70vh] shadow-lg relative -top-16">
        @yield('content-mob')
    </div>
    <div class="bg-black text-white flex justify-between px-12 py-8">
        <div class="flex flex-col space-y-4 items-center w-full">
            <div class="uppercase text-xs font-lato rtl:font-ahlan"><a href="">{{__('nadil.footer.terms')}}</a></div>
        <div class="uppercase text-xs font-lato rtl:font-ahlan"><a href="">{{__('nadil.footer.cancellation')}}</a></div>
        <div class="uppercase text-xs font-lato rtl:font-ahlan"><a href="">{{__('nadil.footer.faq')}}</a></div>
        <div class="uppercase text-xs font-lato rtl:font-ahlan"><a href="">{{__('nadil.footer.contact')}}</a></div>
        </div>
    </div>
    </div>

</div>
{{--    </div>--}}

{{-- Smartlook --}}

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DYHE5KYQK3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DYHE5KYQK3');
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="{{asset('admin-lte/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//unpkg.com/alpinejs" defer></script>

<script>
    $(document).ready(function() {
            $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function() {
                $(this).toggleClass('open');
            });
        });
</script>
@livewireScripts
@stack('scripts')
</body>
</html>
