<?php
echo "Haloo, Selamat Datang, " . Auth::user()->name;
            echo "<br><a href='" . route('logout') . "'>Logout</a>";
            ?>

<h1>ini pengguna</h1>
<nav>
    <a href="">Beranda</a>
    <a href="">Data</a>
    <a href="">Acara</a>
    <a href="">Registrasi Perserta</a>
    <a href="">Poin</a>
    <a href="">Bantuan</a>
    <?php
     echo "<br><a href='" . route('logout') . "'>Logout</a>";
    ?>
</nav>