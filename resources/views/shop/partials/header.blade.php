<!-- Header image -->
<a href="{{ route('home-page') }}">
    <img class="header-image" src="{{ asset('/img/bg.jpg') }}" alt="top image">
</a>

{{--<div style="position: fixed; left: 0; bottom: 0;">--}}
{{--<span style="font-size: 30pt; color: rgba(0, 0, 0, 0.6)">Alpha version 2.0</span>--}}
{{--</div>--}}

<div id="data-shopping-cart-stub-header"></div>

<!-- Menu -->
<nav class="navbar navbar-expand-xl navbar-dark bg-primary mb-4">
    <div class="container">
        {{--<a class="navbar-brand" href="#">Navbar</a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ active('home-page') }}">
                    <a class="nav-link" href="{{ route('home-page') }}">
                        @lang('messages.main-layout.partials.header.home')
                    </a>
                </li>

                @foreach($categoriesTags as $categoryTag)
                    <li class="nav-item {{ active(['categories/3', 'categories/2', 'categories/1']) }} dropdown">
                        <a class="nav-link dropdown-toggle"
                           id="navbarDropdown"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            {{ $categoryTag->title }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($categoryTag->category as $category)
                                <a class="dropdown-item" href="{{ route('categories.show', ['id' => $category->id]) }}">
                                    {{ ucfirst($category->title) }}
                                </a>
                            @endforeach
                        </div>
                    </li>
                @endforeach

                <li class="nav-item {{  active('categories/4') }}">
                    <a class="nav-link" href="{{ route('categories.show', ['id' => 4]) }}">
                        Фурнітура
                    </a>
                </li>

                <li class="nav-item {{  active('about-page') }}">
                    <a class="nav-link" href="{{ route('about-page') }}">
                        @lang('messages.main-layout.partials.header.about')
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('discounts.index') }}">
                        <span class="discounts-header-title">
                            @lang('messages.main-layout.partials.header.discounts')
                        </span>
                    </a>
                </li>

                @if (Auth::guard('users')->check())
                    <li class="nav-item {{ active('categories.show') }} dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="#"
                           id="navbarDropdown2"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            @lang('messages.main-layout.partials.header.profile-menu.title')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            {{--<a class="dropdown-item" href="#">--}}
                                {{--@lang('messages.main-layout.partials.header.profile-menu.your-dashboard')--}}
                            {{--</a>--}}

                            <form id="user-logout-form" method="POST" action="{{ route('user.logout') }}">
                                {!! csrf_field() !!}
                                <button style="cursor:pointer;" class="dropdown-item" type="submit">
                                    @lang('messages.main-layout.partials.header.profile-menu.logout')
                                </button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ active('user-login-page') }}" href="{{ route('user-login-page') }}">
                            @lang('messages.main-layout.partials.header.for-partners')
                        </a>
                    </li>
                @endif
                @if(Auth::guard('admin')->check())
                    <li class="nav-item {{ active('categories.show') }} dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="#"
                           id="navbarDropdown3"
                           role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            @lang('messages.main-layout.partials.header.admin-menu.title')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.products')
                            </a>
                            <a class="dropdown-item" href="{{ route('admin.categories.index') }}">
                                @lang('messages.main-layout.partials.header.admin-menu.categories')
                            </a>
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.users')
                            </a>
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.orders')
                            </a>
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.user-types')
                            </a>
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.price-types')
                            </a>
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.discounts')
                            </a>
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.admins')
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                @lang('messages.main-layout.partials.header.admin-menu.your-dashboard')
                            </a>

                            <form id="user-logout-form" method="POST" action="{{ route('admin.logout') }}">
                                {!! csrf_field() !!}
                                <button style="cursor:pointer;" class="dropdown-item" type="submit">
                                    @lang('messages.main-layout.partials.header.admin-menu.logout')
                                </button>
                            </form>
                        </div>
                    </li>
                @endif
            </ul>

            <ul class="navbar-nav navbar-right">

                <li class="nav-item mr-sm-4">
                    <span class="navbar-text">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span class="contact-info-text">(067)-450-80-80</span>
                    </span>

                </li>
                <li class="nav-item mr-sm-4">
                    <span class="navbar-text">
                        <i class="far fa-envelope" aria-hidden="true"></i>
                        <span class="contact-info-text">sale@armazon.com.ua</span>
                    </span>
                </li>
                <li class="nav-item mr-sm-1">
                    <a class="nav-link" href="https://www.facebook.com/armazonframes/" target="_blank">
                        <i class="fab fa-facebook-square fa-lg" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item mr-sm-1">
                    <a class="nav-link" href="tel:+380674508080" target="_blank">
                        <i class="fab fa-viber fa-lg"></i>
                    </a>
                </li>
                <li class="nav-item mr-sm-1">
                    <a class="nav-link" href="https://web.telegram.org/#/im?p=@vasyl_pavlyuk" target="_blank">
                        <i class="fab fa-telegram fa-lg" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
