<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Membuat command 'php artisan inspire'
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote()); // Menampilkan quote inspiratif
})->purpose('Display an inspiring quote')->hourly(); // Kasih deskripsi & buat dijadwalkan tiap jam
