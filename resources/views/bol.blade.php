@extends('layouts.baseLayout')

@section('title')
The Breathe of Life
@endsection

@section('content')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>The Breath of Life</h1>
            <p>Anchor Scripture for this Expression can go here</p>
        </div>
    </section>

    <section class="second flex container">
        <div class="image">
            <p>Image of Choice - something that can work here</p>
        </div>
        <div class="section-text">
            <h1>The Life Giving Spirit</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <div class="buttons">
                <a href="{{ route('lgi') }}" class="give" >The Lifegate Institute</a>
                <a href="{{ route('tvh') }}" class="give" >The Vantage Hub</a>
            </div>
        </div>
    </section>

@endsection