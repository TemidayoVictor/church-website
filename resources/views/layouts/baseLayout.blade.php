<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.tiny.cloud/1/t87rwwndacrt9grg1jwlnfaxaabxw3cxj77od5l8m4dhkcox/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="icon" href="{{ asset('images/ecclogo2.png') }}" type="image/png" sizes="160x160">
    <link href="{{ asset ('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    @yield('lightGalleryCss')
    <link rel="stylesheet" href="{{ asset ('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/baseStyle20.css')}}">
    <title>Ecclesia || @yield('title')</title>
    <style>
        
        html {
            font-size:90%;
        } 
            
        @media (max-width: 780px) {
            html {
                font-size:85.5%;
            }   
        }
    </style>
    
</head>
<body>

    <header class="container">
        <div class="site-title">
            <h1>Ecclesia</h1>
        </div>

        <nav class="navigation">
            <ul>
                <a href="{{ route('home') }}" class="@if ($selected == "home") {{ 'selected' }} @endif">
                    <li>Home</li>
                </a>
                <a href="{{ route('about') }}" class="@if ($selected == "about") {{ 'selected' }} @endif">
                    <li>About Us</li>
                </a>
                <a href="{{ route('messages') }}" class="@if ($selected == "media") {{ 'selected' }} @endif">
                    <li>Media & Resources</li>
                </a>
                <a href="{{ route('dailyInspiration') }}" class="@if ($selected == "devotional") {{ 'selected' }} @endif">
                    <li>Timeless Truth</li>
                </a>
                <a href="{{ route('events') }}" class="@if ($selected == "events") {{ 'selected' }} @endif">
                    <li>Events & News</li>
                </a>

                <a href="{{ route('give') }}" class="mobile give-mobile">
                    <li>Give online</li>
                </a>
            </ul>
        </nav>

        <div class="icons mobile">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <div>
            <a class="give desktop" href="{{ route('give') }}">Give online</a>
        </div>  
    </header>

    @if ($show == 'none')
        <main>
            @yield('content')
        </main>
    
    @elseif ($show == 'resources')
        <main>
            
            <section class="heading container flex">
                <div class="welcome-text">
                    <h1>Media & Resources</h1>
                    <p>Feed Your Spirit Everyday.</p>
                </div>
            </section>

            <div class="inspiration-container flex container">
                @yield('content')
                <div class="latest-news desktop">
                    <h1>Our Resources</h1>
                    <div class="resources">
                        <a href="{{ route('messages') }}" class="@if ($showSelected == "messages") {{ 'selected' }} @endif">Messages of the House</a>
                        <a href="{{ route('library') }}" class="@if ($showSelected == "library") {{ 'selected' }} @endif">The Ecclesia Library</a>
                        {{-- <a href="{{ route('confessions') }}" class="@if ($showSelected == "confessions") {{ 'selected' }} @endif">Monthly Confessions</a> --}}
                    </div>
                </div>
            </div>
        </main>

        <div class="bottom-nav mobile container">
            <div class="all-media-links flex">
                <a class="media-links @if ($showSelected == "messages") {{ 'selected' }} @endif" href="{{ route('messages') }}">
                    <i class="fas fa-music"></i>
                    <p>Messages</p>
                </a>
    
                <a class="media-links @if ($showSelected == "library") {{ 'selected' }} @endif" href="{{ route('library') }}">
                    <i class="fas fa-book"></i>
                    <p>Library</p>
                </a>
    
                {{-- <a class="media-links @if ($showSelected == "confessions") {{ 'selected' }} @endif" href="{{ route('confessions') }}">
                    <i class="fas fa-hands"></i>
                    <p>Confessions</p>
                </a> --}}
            </div>
        </div>
    
    @elseif($show == 'latestNews')

        <main>
                
            @yield('header')

            <div class="inspiration-container flex container">
                @yield('content')
                <div class="latest-news">
                    <h1>Latest News</h1>
                    <div class="latest-news-contentainer">
                        @forelse ($news as $newsItem)
                            <div class="latest-news-content">
                                <div class="latest-news-image">
                                    <img src="{{ asset('images/churchimg4.jpg') }}" alt="">
                                </div>
                                <div class="latest-news-details">
                                    <h3>{{ $newsItem->title }}</h3>
                                    <p>{{ $newsItem->description }}</p>
                                    @if(!empty($newsItem->web) && ($newsItem->web != 'Null'))
                                        <a href="{{ $newsItem->web }}" class="msg-btn block mt-1">{{ $newsItem->prompt }}</a>
                                    @endif
                                </div>
                            </div>
                        @empty

                            <div class="latest-news-content">
                                <div class="latest-news-image">
                                    <img src="{{ asset('images/logo.jpg') }}" alt="">
                                </div>
                                <div class="latest-news-details">
                                    <h3>Purpose Driven Church</h3>
                                    <p>Sundays: School of Tranformation - 9am</p>
                                    <p>Wednesdays: School of Purpose - 5:30pm</p>
                                </div>
                            </div>
                            
                        @endforelse

                    </div>
                </div>
            </div>
        </main>

    @endif
    

    <footer>
        <div class="container">
            <div class="address">
                <h3>Church Address</h3>
                <p>Opposite Baptist Grammar School, Idi-ishin Extension, Lasokun Area, Ibadan, Oyo state Nigeria</p>
            </div>
    
            <div class="services">
                <h3>Our Services</h3>
                <p> Prayers and Bible study <br> <span>Tuesdays - </span> 5:00pm - 6:30pm</p>
                <p> Sunday Worship <br> <span>Sundays - </span> 9:00am - 11:00am</p>
            </div>
    
            <div class="quick-links">
                <h3>Quick Links</h3>
                <div class="q-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('messages') }}">Media & Resources</a>
                    <a href="{{ route('dailyInspiration') }}">Devotional</a>
                    <a href="{{ route('events') }}">Events & News</a>
                    <a href="{{ route('give') }}">Give Online</a>
                </div>
            </div>
    
            <div class="social-links">
                <h3>Connect with Us</h3>
                <div class="socials">
                    <a href="#" class="fab fa-instagram"><span> Events and Church style </span></a>
                    <a href="#" class="fab fa-telegram"><span> Prayers and Services </span></a>
                    <a href="#" class="fab fa-whatsapp-square"><span> Our Communities </span></a>
                    <a href="#" class="fab fa-twitter"><span> Tweets from Us </span></a>
                    <a href="#" class="fas fa-phone"><span> 08123456789 - Talk to us </span></a>
                </div>
            </div>
    
        </div>
    </footer>
    @yield('scriptJs')
    <script src="{{ asset ('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset ('js/baseScript2.js') }}"></script>
</body>
</html>