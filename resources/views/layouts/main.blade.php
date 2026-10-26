<!doctype html>
<html lang="en" translate="no" class="notranslate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title', 'TITLE')</title>
    <meta name="description" content="@yield('meta-description', 'DESCRIPTION')">
    <meta name="keywords" content="@yield('meta-keywords', 'KEYWORDS')">
    <meta name="author" content="{{ config('app.author') }}">
    <link rel="canonical" href="@yield('meta-url', 'URL')" />

    <meta property="og:title" content="@yield('meta-title', 'TITLE')" />
    <meta property="og:description" content="@yield('meta-description', 'DESCRIPTION')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('meta-url', 'URL')" />
    <meta property="og:image" content="@yield('meta-image', 'IMAGE')" />
    <meta property="og:image:alt" content="@yield('meta-image-alt', 'IMAGE ALT')" />
    <meta property="og:site_name" content="@yield('meta-site-name', 'SITE NAME')" />
    <meta property="og:locale" content="ru_RU" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('meta-title', 'TITLE')" />
    <meta name="twitter:description" content="@yield('meta-description', 'DESCRIPTION')" />
    <meta name="twitter:image" content="@yield('meta-image', 'IMAGE')" />
    <meta name="twitter:image:alt" content="@yield('meta-image-alt', 'IMAGE ALT')" />
    <meta name="twitter:url" content="@yield('meta-url', 'URL')" />

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="theme-color" content="#ffffff">

    @vite(['resources/css/app.css'])
</head>
<body id="APP">
    <div class="S-DESKTOP-wrapper">
        <div class="S-DESKTOP-carcass">
            <nav class="S-DESKTOP-navigation DEV-DISABLE_SELECTION" id="DESKTOP-NAVIGATION">
                <div class="S-NAVIGATION-wrapper">
                    <div class="S-NAVIGATION-carcass" id="DESKTOP-NAVIGATION-PAGES_LINKS">
                        <x-blades.desktop.navigation.page_link
                            icon_name="home"
                            icon_scale="0.9"
                            heading="Главная"
                            href="{{ route('home') }}"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="news"
                            icon_scale="0.98"
                            heading="Новости"
                            href="{{ route('news') }}"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="about"
                            icon_scale="1"
                            heading="О проекте"
                            href="{{ route('about') }}"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="faq"
                            icon_scale="1"
                            heading="Часто задаваемые вопросы"
                            href="{{ route('faq') }}"
                        />

                        <div class="S-NAVIGATION-split"></div>

                        <x-blades.desktop.navigation.page_link
                            icon_name="new"
                            icon_scale="1.06"
                            heading="Новые статьи"
                            href="{{ route('new') }}"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="popular"
                            icon_scale="0.9"
                            heading="Популярные статьи"
                            href="{{ route('popular') }}"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="favorites"
                            icon_scale="0.95"
                            heading="Избранные статьи"
                            href="{{ route('favorites') }}"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="topics"
                            icon_scale="1"
                            heading="Топики"
                            href="{{ route('topics') }}"
                        />

                        <div class="S-NAVIGATION-split"></div>

                        <x-blades.desktop.navigation.page_link
                            icon_name="discord"
                            icon_scale="1"
                            heading="Дискорд сервер"
                            href="https://discord.gg/rasslabuha"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="youtube"
                            icon_scale="1"
                            heading="Ютуб канал"
                            href="https://youtube.com/@sh1ft_"
                        />
                        <x-blades.desktop.navigation.page_link
                            icon_name="vk"
                            icon_scale="0.95"
                            heading="Группа в ВК"
                            href="https://vk.ru/anti_toxic_toxic_club"
                        />

                        @if(isset($R_USER))
                            <div class="S-NAVIGATION-split"></div>

                            <x-blades.desktop.navigation.page_link
                                icon_name="my_articles"
                                icon_scale="0.9"
                                heading="Мои статьи"
                                href="{{ route('my_articles') }}"
                            />
                            <x-blades.desktop.navigation.page_link
                                icon_name="my_topics"
                                icon_scale="1"
                                heading="Мои топики"
                                href="{{ route('my_topics') }}"
                            />
                            <x-blades.desktop.navigation.page_link
                                icon_name="create_a_topic"
                                icon_scale="1"
                                heading="Создать топик"
                                href="{{ route('create_a_topic') }}"
                            />

                            <div class="S-NAVIGATION-split"></div>

                            <x-blades.desktop.navigation.page_link
                                icon_name="write_an_article"
                                icon_scale="0.96"
                                heading="Написать статью"
                                href="{{ route('write_an_article') }}"
                            />
                        @endif

                        <div class="S-NAVIGATION-extra">
                            <div class="S-EXTRA-wrapper">
                                <div class="S-EXTRA-carcass">
                                    <div class="S-EXTRA-icon">
                                        <x-icons.navigation.extra
                                            class="I-LINK-icon"
                                            style="transform: scale(1.25)"
                                        />
                                    </div>
                                    <div class="S-EXTRA-content">
                                        <p class="T-EXTRA-text TYPO-D-PRESET-CORE_SMALL">Версия: Alpha 1.0.1</p>
                                        <p class="T-EXTRA-text TYPO-D-PRESET-CORE_SMALL">Rasslabuha Original Development</p>
                                        <p class="T-EXTRA-text TYPO-D-PRESET-CORE_SMALL">© 2019-{{ date('Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="S-DESKTOP-page">
                <div class="S-PAGE-wrapper">
                    <div class="S-PAGE-carcass">
                        <header class="S-PAGE-header DEV-DISABLE_SELECTION">
                            <div class="S-HEADER-wrapper">
                                <div class="S-HEADER-carcass">
                                    <div class="S-HEADER-logo">
                                        <a class="L-LOGO-link" href="{{ route('home') }}">
                                            <x-branding.logo_full
                                                class="I-LOGO-svg"
                                                style=""
                                            />
                                        </a>
                                    </div>
                                    <div class="S-HEADER-search">
                                        {{-- ChatJebiti --}}
                                    </div>
                                    @if(!isset($R_USER))
                                        <div class="S-HEADER-login">
                                            <a class="L-LOGIN-link TYPO-D-PRESET-CORE_DEFAULT" href="{{ route('login') }}">
                                                <span class="T-LOGIN-heading">Войти в аккаунт</span>
                                                <x-icons.navigation.login
                                                    class="I-LOGIN-icon"
                                                    style=""
                                                />
                                            </a>
                                        </div>
                                    @else
                                        <div class="S-HEADER-profile">
                                            <a class="L-PROFILE-profile" href="{{ route('account') }}">
                                                <div class="S-PROFILE-wrapper">
                                                    <div class="S-PROFILE-carcass">
                                                        <div class="S-PROFILE-avatar">
                                                            <img class="I-AVATAR-image" src="{{ asset('images/test/avatar.jpg') }}" alt="Аватарка {{ $R_USER->nickname }}" draggable="false">
                                                        </div>
                                                        <div class="S-PROFILE-nickname">
                                                            <p class="T-NICKNAME-text TYPO-D-PRESET-CORE_DEFAULT">{{ $R_USER->nickname }}</p>
                                                        </div>
                                                        <div class="S-PROFILE-title">
                                                            <p class="T-TITLE-text TYPO-D-PRESET-CORE_SMALL">Начинающий писец</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="S-HEADER-settings">
                                        <button class="B-SETTINGS-button">
                                            <x-icons.navigation.settings
                                                class="I-SETTINGS-icon"
                                                style=""
                                            />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <main class="S-PAGE-main S-PAGE-{{ strtolower(Route::currentRouteName()) }}">
                            <div class="S-MAIN-wrapper S-{{ strtoupper(Route::currentRouteName()) }}-wrapper">
                                <div class="S-MAIN-carcass S-{{ strtoupper(Route::currentRouteName()) }}-carcass">
                                    @yield('mode-desktop')
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="S-LANDSCAPE-wrapper">
        <div class="S-LANDSCAPE-carcass">
            @yield('mode-landscape')
        </div>
    </div>
    <div class="S-MOBILE-wrapper">
        <div class="S-MOBILE-carcass">
            @yield('mode-mobile')
        </div>
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
