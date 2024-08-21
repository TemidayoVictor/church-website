@extends('layouts.baseLayout')

@section('title')
Daily Inspiration
@endsection

@section('header')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>Timeless Truth</h1>
            <p>With Pastor Tope Oyeneye</p>
        </div>
    </section>

@endsection

@section('content')
    <div class="inspiration">
        <h1 class="title">{{ $devotion->topic }}</h1>
        <div class="inspiration-content">    
            <div>{!! (str_replace( '<p>&nbsp;</p>', '', $devotion->body)) !!}</div>
        </div>
        <h3 class="title">Prayers</h3>
        <div class="inspiration-content bod-bot">
            <div>{!! (str_replace( '<p>&nbsp;</p>', '', $devotion->prayer)) !!}</div>    
        </div>
        <div class="inspiration-footer flex mt-1">
            <a href="{{ route('dailyInspirationView') }}" class="give">Read Previous Devotionals</a>
            <h3 class="right">Pastor Tope Oyeneye</h3>
        </div>
    </div>
@endsection





