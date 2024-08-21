@extends('layouts.baseLayout')

@section('title')
The Vantage Hub
@endsection

@section('content')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>The Vantage Hub</h1>
            <p>Anchor Scripture for this Expression can go here</p>
        </div>
    </section>

    <section class="second flex container">
        <div class="image">
            <img src="images/bible-1.jpg" alt="">
        </div>
        <div class="section-text">
            <h1>Young and Free and Purposeful</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <div class="buttons">
                <a href="{{ route('lgi') }}" class="give" >The Lifegate Institute</a>
                <a href="{{ route('bol') }}" class="give" >The Breath of Life</a>
            </div>
        </div>
    </section>

@endsection