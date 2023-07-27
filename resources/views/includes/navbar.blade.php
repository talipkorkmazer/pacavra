<!-- Navigation panel -->
<nav class="main-nav transparent stick-fixed wow-menubar">
    <div class="full-wrapper relative clearfix">

        <!-- Logo ( * your text or image into link tag *) -->
        <div class="nav-logo-wrap local-scroll">
            <a href="/" class="logo">
                <img src="{{ asset('public/public/images/pacavra/87C24AD5-BB94-408A-9D82-CBC00C5C986F.PNG') }}" alt="Pacavra" width="188" height="37"/>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="mobile-nav" role="button" tabindex="0">
            <i class="fa fa-bars"></i>
            <span class="sr-only">{{ __('all.menu') }}</span>
        </div>

        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist scroll-nav local-scroll">
                <li class="active"><a href="/">{{ __('all.home') }}</a></li>
                <li><a href="/about">{{ __('all.about_us') }}</a></li>
                <li>
                    <a href="#" class="mn-has-sub" role="button" aria-expanded="false" aria-haspopup="true"
                       style="height: 85px; line-height: 85px;">
                        {{ __('all.categories') }}
                        <i class="mn-has-sub-icon"></i>
                    </a>
                    <ul class="mn-sub mn-has-multi" style="display: none;">

                        <li class="mn-sub-multi">
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="/category/{{$category->slug}}">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/#contact">{{ __('all.contact') }}</a></li>
                <!--<li>
                    @if(auth()->check())
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}">{{ __('all.login_register') }}</a>
                    @endif
                </li>-->
                <li>
                    @foreach($available_locales as $locale_name => $available_locale)
                        @if($available_locale === $current_locale)
                            <a href="#" class="mn-has-sub">{{ $locale_name }} <i class="mn-has-sub-icon"></i></a>
                        @endif
                    @endforeach

                    <ul class="mn-sub">
                        @foreach($available_locales as $locale_name => $available_locale)
                            <li><a href="language/{{ $available_locale }}">{{ $locale_name }}</a></li>
                        @endforeach
                    </ul>

                </li>
            </ul>
        </div>
        <!-- End Main Menu -->

    </div>
</nav>
<!-- End Navigation panel -->
