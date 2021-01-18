<?php

require_once('classi.php');

$impiegato_salariato = new ImpiegatoSalariato("Mario", "Rossi", "xxxxx", "0124", 80, 25);
$impiegato_a_ore = new ImpiegatoAOre("Pippo", "Disney", "alkdfleger", "7156", 160, 10);
$impiegato_su_commissione = new ImpiegatoSuCommissione("Pluto", "Disney", "plfkwwna", "3291", "FunnyDisney", 1500);

echo $impiegato_salariato->to_string() . "<br>" . $impiegato_salariato->calcola_compenso() . "<br>";
echo $impiegato_a_ore->to_string() . "<br>" . $impiegato_a_ore->calcola_compenso() . "<br>";
echo $impiegato_su_commissione->to_string() . "<br>" . $impiegato_su_commissione->calcola_compenso() . "<br>";


 ?>
