<?php

require_once('classi.php');


try {
    $impiegato_salariato = new ImpiegatoSalariato("Mario", "Rossi", "xxxxx", "0124", 80, 25);
    $impiegato_a_ore = new ImpiegatoAOre("Pippo", "Disney", "alkdfleger", "7156", 160, 10);
    $impiegato_su_commissione = new ImpiegatoSuCommissione("Pluto", "Disney", "plfkwwna", "FunnyDisney(cancella questo campo per provare l'eccezione)", 1500);
    echo "Impiegato salariato" . "<br>";
    echo $impiegato_salariato->to_string() . "<br>" . $impiegato_salariato->calcola_compenso() . "<br>";
    echo "Impiegato a ore" . "<br>";
    echo $impiegato_a_ore->to_string() . "<br>" . $impiegato_a_ore->calcola_compenso() . "<br>";
    echo "Impiegato su commissione" . "<br>";
    echo $impiegato_su_commissione->to_string() . "<br>" . $impiegato_su_commissione->calcola_compenso() . "<br>";
}
catch (Exception $e) {
    echo "Eccezione: " . $e->getMessage() . "<br";
}

 ?>
