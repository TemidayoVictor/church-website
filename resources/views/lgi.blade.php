@extends('layouts.baseLayout')

@section('title')
The Lifegate Gate Institute
@endsection

@section('content')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>The Lifegate Institute</h1>
            <p>Anchor Scripture for this Expression can go here</p>
        </div>
    </section>

    <section class="second flex container">
        <div class="image">
            <p>Image of Choice - something that can work here</p>
        </div>
        <div class="section-text">
            <h1>Raising and Deploying a People</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <div class="buttons">
                <a href="{{ route('tvh') }}" class="give" >The Vantage Hub</a>
                <a href="{{ route('bol') }}" class="give" >The Breath of Life</a>
            </div>
        </div>
    </section>

@endsection