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
    <link rel="stylesheet" href="{{ asset ('css/adminStyle8.css')}}">
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

    <header class="header-admin">
        <div class="header-admin-container">
            <div class="admin-logo">
                <div class="header-details adm-logo flex">
                    <h1 style="font-size:1em">Ecclesia Admin</h1>
                </div>
            </div>

            <nav class="navbar-admin">
                
                <a href="{{ route('addDevotional') }}" class="navbar-admin-link @if ($selected == "devotional") {{ 'active' }} @endif">
                    <div class="details par-flex">
                        <i class="fas fa-pray"></i>
                        <p>Timeless Truth</p>
                    </div>
                </a>
                <a href="{{ route('addMessage') }}" class="navbar-admin-link @if ($selected == "message") {{ 'active' }} @endif">
                    <div class="details par-flex">
                        <i class="fas fa-music"></i>
                        <p>Messages</p>
                    </div>
                </a>
                <a href="{{ route('addLibrary') }}" class="navbar-admin-link @if ($selected == "library") {{ 'active' }} @endif">
                    <div class="details par-flex">
                        <i class="fas fa-book"></i>
                        <p>Library</p>
                    </div>
                </a>
                {{-- <a href="{{ route('addConfession') }}" class="navbar-admin-link @if ($selected == "confession") {{ 'active' }} @endif">
                    <div class="details par-flex">
                        <i class="fas fa-video"></i>
                        <p>Confessions</p>
                    </div>
                </a> --}}
                <a href="{{ route('addEvents') }}" class="navbar-admin-link @if ($selected == "events") {{ 'active' }} @endif">
                    <div class="details par-flex">
                        <i class="fas fa-list"></i>
                        <p>Events & News</p>
                    </div>
                </a>

                <a href="{{ route('utilities') }}" class="navbar-admin-link @if ($selected == "utilities") {{ 'active' }} @endif">
                    <div class="details par-flex">
                        <i class="fas fa-cog"></i>
                        <p>Utilities</p>
                    </div>
                </a>

                <a href="#" class="navbar-admin-link">
                    <div class="details par-flex">
                        <i class="fas fa-power-off"></i>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" value="Log Out" class="btn btn-navbar">
                        </form>
                    </div>
                </a>

                <a href="{{ route('home') }}" class="navbar-admin-link">
                    <div class="details par-flex">
                        <i class="fas fa-home"></i>
                        <p>Main Website</p>
                    </div>
                </a>

            </nav>
    
        </div>
    </header>

    <div class="header-details adm-logo mobile flex">
        <p class="">Ecclesia Admin</p>
        <i class="fas fa-bars mobile" id="menu-btn"></i>
    </div>

    <main>
        @yield('content')
    </main>

    @yield('scriptJs')
    <script src="{{ asset('js/adminScript.js') }}"></script>
</body>
</html>