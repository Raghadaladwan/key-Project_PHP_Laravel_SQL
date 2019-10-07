<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Key</title>
        <!-- Key Css and Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0015b7c6f5.js"></script>
    </head>
    <body>

    <!-- Beginning of Header-->
    <header>
        <!-- Beginning of Logo-->
        <a href="/">
            <span>Key</span>
        </a>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a class="navbar-brand" href="{{ route('room.show') }}"> Find Room</a>
                @else
                    <a class="navbar-brand" href="{{ route('room.show') }}"> Find Room</a>
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

    </header>

    <main>

        <div class="slides">
            <div id="slide-1" class="active"></div>
            <div id="slide-2"></div>
            <div id="slide-3"></div>
            <div id="slide-4"></div>
        </div>

        <ul class="slide-controller">
            <li data-link="slide-1" class="active"></li>
            <li data-link="slide-2"></li>
            <li data-link="slide-3"></li>
            <li data-link="slide-4"></li>
        </ul>

        <button class="arrow-button-right">
            <img src="img/arrow-right.svg" alt="next">
        </button>

        <button class="arrow-button-left">
            <img src="img/arrow-left.svg" alt="previous">
        </button>

    </main>

    <div class="rating">

            <h1>Room Rating</h1>
            <div class="rating-container">
                <div class="rating-container component">
                    <img src="https://media.cntraveler.com/photos/56799015c2ebbef23e7d927b/master/pass/Hotelroom-Alamy.jpg" width="156" height="156" />
                    <span class="rating-container component span">Hello Laravel</span>
                </div>

                <div class="rating-container component">
                    <img src="https://behotelmalta.com/wp-content/uploads/2018/05/be_rooms_013-1500x430.jpg" width="156" height="156" />
                    <span class="rating-container component span">Hello Laravel</span>
                </div>

                <div class="rating-container component">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUYIDWhnQWtdujPZU-KpgNpogeOYeVky4doDQmH7maSkEqfEGwaQ" width="156" height="156" />
                    <span class="rating-container component span">Hello Laravel</span>
                </div>

                <div class="rating-container component">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRQJkjAmm1xjppCby8gtIciuqzhzG4g8ib2fzeH6SIFF2vu23dTQ" width="156" height="156" />
                    <span class="rating-container component span">Hello Laravel</span>
                </div>

                <div class="rating-container component">
                    <img src="https://room-matehotels.com/images/img/giulia/hotel/Giulia_13.jpg" width="156" height="156" />
                    <span class="rating-container component span">Hello Laravel</span>
                </div>
            </div>





        <div class="key-footer">
            <span style="margin-right:36px;line-height: 29px;">All rights are reserved by E 7 N A © 2019</span>
            <span>+ (962) 790163199</span>
            <div>
               <a href="https://www.facebook.com/">
                   <img src="https://image.flaticon.com/icons/svg/124/124010.svg" width="36" height="36" />
               </a>
                <a href="https://twitter.com/?lang=en">
                <img src="https://upload.wikimedia.org/wikipedia/fr/c/c8/Twitter_Bird.svg" width="36" height="36" />
                </a>
                <a href="https://www.linkedin.com/">
                <img src="https://i0.wp.com/www.vectorico.com/wp-content/uploads/2018/02/LinkedIn-Logo-R.png?fit=679%2C600" width="36" height="36"/>
                </a>

            </div>
        </div>





    </div>

        <!-- Key css & js slider -->
        <script src="{{ asset('js/slider.js') }}" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slider.css') }}" />
    </body>
</html>
