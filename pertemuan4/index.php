<?php
function main(string $name = "Tamu", string $waktu = ""): string
{
    $greetings = [
        "pagi" => "Selamat pagi, {$name}! Semoga hari ini menyenangkan.",
        "siang" => "Selamat siang, {$name}! Semoga hari ini berjalan dengan baik.",
        "sore" => "Selamat sore, {$name}! Semoga sisa hari ini menyenangkan.",
        "malam" => "Selamat malam, {$name}! Semoga malam ini nyaman."
    ];

    return $greetings[$waktu] ?? "Halo, {$name}! Selamat datang.";
}


echo main("John", "malam");
echo "\n";
echo main("Jane", "pagi");
echo "\n";
echo main("Bob", "sore");
echo "\n";
echo main("Alice", "siang");
echo "\n";
echo main();
