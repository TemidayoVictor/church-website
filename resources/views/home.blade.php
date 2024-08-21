@extends('layouts.baseLayout')

@section('title')
Home
@endsection

@section('content')

    <section class="swiper hero-container">
        <div class="section swiper-wrapper">
            <section class="hero container" style="background-image:linear-gradient(to right, rgba(0, 0, 0, .6), rgba(0, 0, 0, .8), rgba(0, 0, 0, .8), rgba(0, 0, 0, .6)), url({{ asset('images/bg11.jpeg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; Background-attachment: fixed">
                <div class="welcome-text centered">
                    <h1>Welcome to Ecclesia World Outreach</h1>
                    <p>...where destinies are fulfilled</p>
                    {{-- <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="{{ route('messages') }}" class="inverted">Latest sermons</a>
                    </div> --}}
                    <div class="image">
                        <img src="{{ asset('images/homeimg.jpg') }}" style="border-radius: 5px;" alt="">
                    </div>
                </div>
            </section>
 
            {{-- <section class="swiper-slide hero container" style="background-image:linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), url({{ asset('images/bg6.jpg') }}); no-repeat;">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>
            </section>
 
            <section class="swiper-slide hero container" style="background-image:linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), url({{ asset('images/bg6.jpg') }}); no-repeat;">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>

            </section> --}}
        </div>

        <div class="swiper-pagination"></div>
    </section>

    {{-- <section class="swiper hero-container">
        <div class="section swiper-wrapper">
            <section class="swiper-slide hero container">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>
                
                <div class="image">
                    <img src="images/bible-1.jpg" alt="">
                </div>

            </section>
            <section class="swiper-slide hero container">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>

                <div class="image">
                    <img src="images/bible-2.jpg" alt="">
                </div>

            </section>
            <section class="swiper-slide hero container">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>

                <div class="image">
                    <img src="images/Jesus.jpg" alt="">
                </div>

            </section>
        </div> --}}

        <div class="swiper-pagination"></div>
    </section>

    <section class="new container">
        <div class="header">
            <h1>What's New. . .</h1>
            <p>Stay up to date with our programs and events</p>
        </div>

        <div class="new-body">
            <div class="new-content">
                <div class="new-image">
                    <img src="{{ asset('images/'.$newsItem->image) }}" alt="">
                </div>
                <h1>{{ $newsItem->title }}</h1>
                <p>{{ $newsItem->description }}</p>
            </div>
        </div>

    </section>

    <section class="faith container">
        <h1 class="title">Statement of Faith</h1>
        <p class="container">Our greatest success story at Ecclesia World Outreach has been the grace to effectively evangelize, make disciples of, and deploy people who once upon a time were mere seekers, as mature disciples and vibrant ministers of the gospel.</p>
    </section>

    <section class="second flex container">
        <div class="image">
            <img src="images/pam5.jpeg" alt="">
        </div>
        <div class="section-text">
            <h1>We Raise a People for Christ</h1>
            <p>“All scripture is given by inspiration of God and is useful for doctrine, for reproof, for correction, and for training in righteousness.”</p>
            <p>The next most important thing after salvation is knowledge. God desires that you grow in your knowledge of what Christ has done, and what you have as a result. Ecclesia World Outreach is committed to your progress and joy in the faith, and we have a spiritual curriculum to partner with you towards that purpose – to know Christ and to make Him known.</p>
            <div class="buttons">
                <a href="{{ route('messages') }}" class="give" >Our Sermons</a>
            </div>
        </div>
    </section>

    {{-- <section class="expressions container">
        <h1 class="title">Our expressions</h1>
        <div class="expressions-container">
            <div class="expression-box">
                <div class="expression-image">
                    <img src="images/logo.jpg" alt="">
                    <div class="expression-content flex">
                        <h3>The Vantage Hub</h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis culpa adipisci sed corporis nihil sunt odit accusantium impedit totam quos.</p>
                        <a href="{{ route('tvh') }}" class="btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="expression-box">
                <div class="expression-image">
                    <img src="images/logo.jpg" alt="">
                    <div class="expression-content flex">
                        <h3>The Lifegate Institute</h3> 
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque obcaecati unde nemo odit quibusdam temporibus deleniti ad distinctio aut.</p>
                        <a href="{{ route('lgi') }}" class="btn">Read More</a>
                    </div>
                </div>
                
            </div>
            
            <div class="expression-box">
                <div class="expression-image">
                    <img src="images/logo.jpg" alt="">
                    <div class="expression-content flex">
                        <h3>The Breath of Life</h3>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque obcaecati unde nemo odit quibusdam temporibus deleniti ad distinctio aut.</p>
                        <a href="{{ route('bol') }}" class="btn">Read More</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}

    <section class="month flex container centered" style="background-image:linear-gradient(to right, rgba(0, 0, 0, .8), rgba(0, 0, 0, .8), rgba(0, 0, 0, .8), rgba(0, 0, 0, .8), rgba(0, 0, 0, .8)), url({{ asset('images/bg7.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center; Background-attachment: fixed">
        <div class="month-content">
            <h1>{{ $utility->title }}</h1>
            <h2>{{ $utility->subtopic }}</h2>
            <p><strong>Anchor Scripture: "</strong>  {{ $utility->body }} <strong>"</strong></p>
        </div>

        {{-- <div class="month-image">
            <img src="{{ asset('images/'.$utility->image) }}" alt="">
            <img src="{{ asset('images/'.$utility->image) }}" alt="">
            <img src="{{ asset('images/'.$utility->image) }}" alt="">
            <img src="{{ asset('images/'.$utility->image) }}" alt="">   
        </div> --}}
    </section>

    <section class="give-online flex container">
        
        <div class="give-image">
            <img src="{{ asset('images/bg9.jpg') }}" class="img-one" alt="">
            <img src="{{ asset('images/bg6.jpg') }}" class="img-two" alt="">
            <img src="{{ asset('images/bg7.jpg') }}" class="img-two" alt="">
            <img src="{{ asset('images/bg8.jpg') }}" class="img-one" alt="">   
        </div>
        
        <div class="give-content">
            <h1>Put Your Money where Your Faith is</h1>
            <p>In Ecclesia World Outreach, we give not out of compulsion or fear but a desire to see the gospel prosper in our day. Partner with us today. Put your money where your faith is.</p>
            <div class="buttons mt-1">
                <a href="{{ route('give') }}" class="give msg-btn mobile-block-inline mb-1" >Give online</a>
            </div>
        </div>

    </section>

@endsection