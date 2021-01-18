<?php

class Persona {
    public $nome;
    public $cognome;
    public $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
    }

    public function to_string() {
        echo "Impiegato: <br>";
        foreach ($this as $key => $value) {
            echo $key . ": " . $value;
            echo "<br>";
        }
    }
}

class Impiegato extends Persona {
    public $codice_impiegato;
    public $compenso;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso = 0) {
        parent::__construct($nome, $cognome, $codice_fiscale);
        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }

    public function calcola_compenso() {
        $this->compenso;
    }
}

class ImpiegatoSalariato extends Impiegato {
    public $giorni_lavorati;
    public $compenso_giornaliero;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso_giornaliero, $giorni_lavorati) {
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
    }

    public function calcola_compenso() {
        echo "Compenso: " . $this->giorni_lavorati * $this->compenso_giornaliero . " €";
    }
}

class ImpiegatoAOre extends Impiegato {
    public $ore_lavorate;
    public $compenso_orario;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $ore_lavorate, $compenso_orario) {
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
    }

    public function calcola_compenso() {
        echo "Compenso: " . $this->ore_lavorate * $this->compenso_orario . " €";
    }
}

trait Progetto {
    public $nome_progetto;
    public $commissione;
}

class ImpiegatoSuCommissione extends Impiegato {
    use Progetto;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $nome_progetto, $commissione) {
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->nome_progetto = $nome_progetto;
        $this->commissione = $commissione;
    }

    public function calcola_compenso() {
        echo "Commissione: " . $this->commissione . " €";
    }
}

 ?>
