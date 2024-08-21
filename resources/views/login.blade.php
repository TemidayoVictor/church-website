@extends('layouts.baseLayout')

@section('title')
Login
@endsection

@section('content')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>E.W.O. Administrative Sector</h1>
            <p>Please Login below to Proceed.</p>
        </div>
    </section>

    <div class="login-container">
        <form action="{{ route('login') }}" method="post">
            @csrf
            @if (session('status'))
                <div class="message warning">
                    <p>{{ session('status') }}</p>
                </div>
            @endif
            
            <div class="login-input-field">
                <label for="">Username</label>
                <div class="login-input-detail">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
            </div>
            
            <div class="login-input-field">
                <label for="">Password</label>
                <div class="login-input-detail">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
            </div>
            
            <div class="bod-bot mt-1"></div>
            <div class="login-input-field">
                <input type="submit" class="btn" value="Login">
            </div>
        </form>
    </div>

@endsection