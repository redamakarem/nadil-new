<!doctype html>
<html lang="{{ app()->getLocale() }}" 
@role('user')
class="{{auth()->user()->is_dark_mode?'dark':''}}"
@endrole
dir="{{ app()->getLocale()=='en'?'ltr':'rtl' }}"
>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        [x-cloak] { display: none !important; }

        * {
  margin: 0;
  padding: 0; 
}

/* Icon 1 */

#nav-icon1, #nav-icon2, #nav-icon3, #nav-icon4 {
  width: 60px;
  height: 45px;
  position: relative;
  margin: 50px auto;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}

#nav-icon1 span, #nav-icon3 span, #nav-icon4 span {
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
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
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


    </style>
    @stack('styles')
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
  
</head>

<body class="">
    <main class="bg-black">
        <div id="mobile-wrapper" class="relative min-h-screen bg-black" x-data="{ isOpen: false }">
            <div class="sidebar flex-col fixed z-50 bg-white dark:bg-black inset-y-0 {{ app()->getLocale() == 'en' ? 'left-0' : 'right-0' }} z-10 w-2/3 max-w-md transform transition duration-200"
                :class="isOpen ? '' : document.getElementsByTagName('html')[0].getAttribute('lang') == 'en' ?
                    '-translate-x-full' : 'translate-x-full'">

                <div class="flex justify-center">
                    <div class="w-24 h-24 mt-14 rounded-full bg-nadilBg-100 flex justify-center items-center">
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

                <a href="{{route('site.home')}}" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('nadil.menu.discover')}}</a>

                @role('user')
                    <a href="{{route('user.profile.show')}}" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('nadil.menu.profile')}}</a>
                    <a href="{{route('user.history.show')}}" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('Reservations')}}</a>
                    
                    <form action="{{ route('logout') }}" method="POST"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        @csrf
                        <a href="#" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('nadil.menu.logout')}}</a>
                    </form>
                @endrole
                @guest
                    <a href="{{ route('login') }}" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('nadil.menu.login')}}</a>
                @endguest
                @guest
                    <a href="{{ route('register') }}" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('nadil.menu.register')}}</a>
                @endguest
                <a href="{{ route('register') }}" class=" block uppercase text-black dark:text-white py-3 px-8">{{__('nadil.menu.businesses')}}</a>
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
                    <div class="header h-80 bg-black flex-col justify-center bg-cover items-stretch"
                        style="background-image:url('{{ asset('images/nadil@2x.png') }}'); background-size: cover">
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
        <div class="content flex-col items-center bg-nadilBg-100 rounded-[60px] shadow-lg relative -top-16">
            @yield('content')
            
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

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('admin-lte/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        $(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});
        $('.owl-carousel').owlCarousel({
            rtl: document.getElementsByTagName('html')[0].getAttribute('lang') == 'ar',
            loop: true,
            margin: 15,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    @livewireScripts
    @stack('scripts')

</body>

</html>
