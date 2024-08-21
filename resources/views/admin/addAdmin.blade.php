@extends('layouts.adminLayout')

@section('title')
Add Admin User
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Add Admin User</h1>
            <p>Create account for new Admin user</p>
        </div>
    </section>
    
    <div class="container m-t-2">
        <form action="{{ route('addAdmin') }}" method="post">
            @csrf

            @if (session('status'))
                <div class="message success">
                    <p>{{ session('status') }}</p>
                </div>
            @endif
            
            <div class="input-field">
                <label for="">Create Username</label>
                <input type="text" name="username" placeholder="username" value="{{ old('username') }}" style="@error('username') border: 1px solid red; @enderror" required>
            </div>
            
            @error('username')    
                <div class="message warning">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Pasword</label>
                <input type="text" name="password" placeholder="password" style="@error('password') border: 1px solid red; @enderror" required>
            </div>

            @error('password')    
                <div class="message warning">
                    <p>{{ $message }}</p>
                </div>
            @enderror
            
            <div class="input-field">
                <label for="">Confirm Password</label>
                <input type="text" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <input type="submit" value="Add Admin" class="btn">
        </form>
    </div>

@endsection