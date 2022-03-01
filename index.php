<?php 
    require_once __DIR__.'/classes/Sala.php';
    require_once __DIR__.'/classes/Salaimmersiva.php';
    require_once __DIR__.'/classes/Film.php';
    require_once __DIR__.'/classes/Attore.php';
    require_once __DIR__.'/classes/Spettacolo.php';

    $attoriLista = [];
    $attoriLista[] = new Attore("Mario", "Rossi", "1984");
    $attoriLista[] = new Attore("Luca", "Verdi", "1995");
    $attoriLista[] = new Attore("Andrea", "Bianchi", "2001");

    $filmLista = [];
    $filmLista[] = new Film("Ritorno al futuro", "115", [$attoriLista[0], $attoriLista[2]]);
    $filmLista[] = new Film("Ritorno al Passato", "55");
    $filmLista[] = new Film("Ritorno a casa oggi", "45");

    $filmLista[1]->setAttori($attoriLista);

    $saleLista = [];
    $saleLista[] = new Sala("A",7,55);
    $saleLista[] = new Sala("B",7,55);
    $saleLista[] = new Salaimmersiva("A",7,35,["fumo","vibro"]);
    $saleLista[] = new Sala("D",21,155);

    $spettacoLista = [];
    $spettacoLista[] = new Spettacolo("2022-03-01", "20:30", $filmLista[1], $saleLista[3]);
    $spettacoLista[] = new Spettacolo("2022-03-01", "21:30", $filmLista[1], $saleLista[1]);
    $spettacoLista[] = new Spettacolo("2022-03-02", "20:30", $filmLista[0], $saleLista[2]);
    $spettacoLista[] = new Spettacolo("2022-03-02", "22:30", $filmLista[2], $saleLista[2]);
    $spettacoLista[] = new Spettacolo("2022-03-03", "20:30", $filmLista[1], $saleLista[2]);
    $spettacoLista[] = new Spettacolo("2022-03-03", "21:30", $filmLista[1], $saleLista[1]);
    $spettacoLista[] = new Spettacolo("2022-03-03", "22:30", $filmLista[2], $saleLista[0]);
    $spettacoLista[] = new Spettacolo("2022-03-04", "21:30", $filmLista[0], $saleLista[0]);
    $spettacoLista[] = new Spettacolo("2022-03-05", "20:30", $filmLista[1], $saleLista[1]);
    $spettacoLista[] = new Spettacolo("2022-03-05", "21:30", $filmLista[1], $saleLista[2]);
    $spettacoLista[] = new Spettacolo("2022-03-05", "22:30", $filmLista[2], $saleLista[0]);

    // var_dump($spettacoLista);

    //Esercizio 1:
    var_dump($saleLista);

    //Esercizio 2:
    foreach ($saleLista as $elemento){
        $capienzaCinema += $elemento->getCapienza();
    }
    var_dump($capienzaCinema);

    //Esercizio 3:
    $dataScelta = "2022-03-03";
    $filmScelto = $filmLista[1];

    foreach ($spettacoLista as $elemento){
        if(($elemento->getData() == $dataScelta) && ($elemento->getFilm() == $filmScelto)){
            $contatore++;
        } 
    }
    var_dump($contatore);

    //Esercizio 4:
    foreach ($spettacoLista as $elemento){
        if($elemento->getData() == $dataScelta) {
            if($elemento->getOra() > $oraFinale){
                $oraFinale = $elemento->getOra();
            }
        }
    }
    var_dump($oraFinale);

    foreach($spettacoLista as $elemento){
        if($oraFinale == $elemento->getOra()){
            $durataUltimo = $elemento->getFilm()->getDurata();
        }
    }
    var_dump($durataUltimo);

    $arrayOraFinale = explode(":", $oraFinale);
    var_dump($arrayOraFinale);
    
    while($durataUltimo > 0){
        $durataUltimo = $durataUltimo - 60;
        $arrayOraFinale[0] = $arrayOraFinale[0] + 1;
        if($arrayOraFinale[0] == 24){
            $arrayOraFinale[0] = 0;
        }
    }

    var_dump($durataUltimo);

    $arrayOraFinale[1] = $arrayOraFinale[1] + $durataUltimo;

    $oraChiusura = implode(":", $arrayOraFinale);
    
    var_dump($oraChiusura);

?>
