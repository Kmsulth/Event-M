<?php
echo "Haloo, Selamat Datang, " . Auth::user()->name;
            echo "<br><a href='" . route('logout') . "'>Logout</a>";
            ?>
            ini penyelenggara