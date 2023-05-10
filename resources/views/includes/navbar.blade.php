<!-- Navigation panel -->
<nav class="main-nav dark transparent stick-fixed wow-menubar">
    <div class="full-wrapper relative clearfix">

        <!-- Logo ( * your text or image into link tag *) -->
        <div class="nav-logo-wrap local-scroll">
            <a href="/" class="logo">
                <img src="{{ asset('public/public/images/pacavra/logo.jpeg') }}" alt="Pacavra" width="188" height="37" />
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="mobile-nav" role="button" tabindex="0">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Menu</span>
        </div>

        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist scroll-nav local-scroll">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About us</a></li>
                <li>
                    <a href="#" class="mn-has-sub" role="button" aria-expanded="false" aria-haspopup="true"
                       style="height: 85px; line-height: 85px;">
                        Categories
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
                                {{--<li>
                                    <a href=''>Tümünü Gör</a>
                                </li>--}}
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/#contact">Contact</a></li>
            </ul>
        </div>
        <!-- End Main Menu -->

    </div>
</nav>
<!-- End Navigation panel -->