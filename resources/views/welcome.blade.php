<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("{{asset('images/main.jpg')}}");
                -moz-background-size: 100% 100%; /* Firefox 3.6+ */
                -webkit-background-size: 100% 100%; /* Safari 3.1+ и Chrome 4.0+ */
                -o-background-size: 100% 100%; /* Opera 9.6+ */
                background-size: 100% 100%; /* Современные браузеры */
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth

                        @if(Auth::user()->isDisabled())
                            <a href="{{ url('/') }}" style="color: black">Главная</a>
                        @elseif(Auth::user()->isUser())
                            <a href="{{ url('/user/index') }}" style="color: black">Кабинет</a>
                            <a href="{{ url('/') }}" style="color: black">Главная</a>
                        @elseif(Auth::user()->isVisitor())
                            <a href="{{ url('/') }}" style="color: black">Главная</a>
                        @elseif(Auth::user()->isAdministrator())
                            <a href="{{ url('/admin/index') }}" style="color: black">Панель Администратора</a>
                            <a href="{{ url('/') }}" style="color: black">Главная</a>
                        @endif

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" style="color: black">Войти</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color: black">Регистрация</a>
                        @endif
                    @endauth


                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                        {{--LARAVEL--}}
                </div>

                <div class="links">

                </div>
            </div>
        </div>
    </body>
</html>
