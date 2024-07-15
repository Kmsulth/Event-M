@if(Auth::check())
    Haloo, Selamat Datang, {{ Auth::user()->name }}
    <br><a href="{{ route('logout') }}">Logout</a>
@endif

<h1>Ini penyelenggara</h1>
<nav>
    <a href="">Beranda</a>
    <a href="">Data</a>
    <a href="">Acara</a>
    <a href="{{ route('registrasi') }}">Registrasi Acara</a>
    <a href="">Poin</a>
    <a href="">Bantuan</a>
    @if(Auth::check())
        Haloo, Selamat Datang, {{ Auth::user()->name }}
        <br><a href="{{ route('logout') }}">Logout</a>
    @endif
</nav>
