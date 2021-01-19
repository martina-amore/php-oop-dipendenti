<?php

class Persona {
    private $nome;
    private $cognome;
    private $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
    }

    public function to_string() {
        echo
        "Nome: " . $this->nome . " " . "<br>"
        ."Cognome: " . $this->cognome . " " . "<br>"
        ."Codice fiscale: " . $this->codice_fiscale . "<br>";
    }
}

class Impiegato extends Persona {
    private $codice_impiegato;
    protected $compenso;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato = 0, $compenso = 0) {
        parent::__construct($nome, $cognome, $codice_fiscale);
        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }

    public function to_string() {
        parent::to_string();
        echo
        "Codice impiegato: " . $this->codice_impiegato . " " . "<br>";
    }

    private function calcola_compenso() {
        $this->compenso = null;
    }
}

class ImpiegatoSalariato extends Impiegato {
    private $giorni_lavorati;
    private $compenso_giornaliero;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $compenso_giornaliero, $giorni_lavorati) {
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
    }

    public function to_string() {
        parent::to_string();
        echo
        "Giorni lavorati: " . $this->giorni_lavorati . " " . "<br>"
        ."Compenso giornaliero: " . $this->compenso_giornaliero . " €" . "<br>";
    }

    public function calcola_compenso() {
        echo "Compenso mensile: " . $this->giorni_lavorati * $this->compenso_giornaliero . " €";
    }
}

class ImpiegatoAOre extends Impiegato {
    private $ore_lavorate;
    private $compenso_orario;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $ore_lavorate, $compenso_orario) {
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato);
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
    }

    public function to_string() {
        parent::to_string();
        echo
        "Ore lavorate: " . $this->ore_lavorate . " " . "<br>"
        ."Compenso orario: " . $this->compenso_orario . " €" . "<br>";
    }

    public function calcola_compenso() {
        echo "Compenso mensile: " . $this->ore_lavorate * $this->compenso_orario . " €";
    }
}

trait Progetto {
    private $nome_progetto;
    private $commissione;
}

class ImpiegatoSuCommissione extends Persona {
    use Progetto;

    public function __construct($nome, $cognome, $codice_fiscale, $nome_progetto, $commissione) {
        if (strlen($nome_progetto) < 1) {
            throw new Exception("Il nome progetto deve avere almeno 1 carattere");
        }
        parent::__construct($nome, $cognome, $codice_fiscale);
        $this->nome_progetto = $nome_progetto;
        $this->commissione = $commissione;
    }

    public function to_string() {
        parent::to_string();
        echo
        "Nome progetto: " . $this->nome_progetto . " " . "<br>";
    }

    public function calcola_compenso() {
        echo "Commissione: " . $this->commissione . " €";
    }
}

 ?>
