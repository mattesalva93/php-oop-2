<?php 
    require_once __DIR__.'/classes/Sala.php';
    require_once __DIR__.'/classes/Salaimmersiva.php';
    require_once __DIR__.'/classes/Spettacolo.php';


    $movies = [
        new Spettacolo('titolo', 'orario', '42','regista', '120', '[attore1, attore2, attore3, attore4, attore5]'),
        new Spettacolo('titolo', 'orario', '42','regista', '120', '[attore1, attore2, attore3, attore4, attore5]'),
        new Spettacolo('titolo', 'orario', '42','regista', '120', '[attore1, attore2, attore3, attore4, attore5]'),
        new Spettacolo('titolo', 'orario', '42','regista', '120', '[attore1, attore2, attore3, attore4, attore5]'),
        new Spettacolo('titolo', 'orario', '42','regista', '120', '[attore1, attore2, attore3, attore4, attore5]'),
        new Spettacolo('titolo', 'orario', '42','regista', '120', '[attore1, attore2, attore3, attore4, attore5]')
    ];

    $sale = [
        new Sala('1'),
        new Salaimmersiva('2', '[fumo, vibrazioni]'),
        new Sala('3'),
        new Sala('4'),
        new Sala('5'),
        new Salaimmersiva('6', '[fumo, vibrazioni]')
    ];

    $programmazione = [
        $sala1 = [$sale[0], $movies[0]],
        $sala2 = [$sale[1], $movies[1]],
        $sala3 = [$sale[2], $movies[2]],
        $sala4 = [$sale[3], $movies[3]],
        $sala5 = [$sale[4], $movies[4]],
        $sala6 = [$sale[5], $movies[5]]
    ];

    var_dump($programmazione);

?>
