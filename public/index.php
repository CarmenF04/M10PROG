<?php

class Auto {
    public $kleur;
    public $zitplaatsen;
    public $passagiers = 0;
    public $snelheid = 0;

    public function nieuwe_passagier($aantal) {
        if ($aantal < 0 || $this->passagiers + $aantal > $this->zitplaatsen) {
            echo "Fout: ongeldig aantal passagiers.\n";
            return;
        }
        $this->passagiers += $aantal;
    }

    public function versnel($waarde) {
        if ($waarde < 0) {
            echo "Fout: snelheid kan niet negatief zijn.\n";
            return;
        }
        $this->snelheid += $waarde;
    }

    public function rem($waarde) {
        if ($waarde < 0 || $this->snelheid - $waarde < 0) {
            echo "Fout: snelheid kan niet negatief worden.\n";
            return;
        }
        $this->snelheid -= $waarde;
    }
}

class Vrachtwagen extends Auto {
    public $laadvermogen;
    public $lading = 0;

    public function lading($waarde) {
        $this->lading += $waarde;
    }

    public function versnel($waarde) {
        parent::versnel($waarde / 2);
    }
}

$auto = new Auto();
$auto->kleur = 'rood';
$auto->zitplaatsen = 5;

$auto->nieuwe_passagier(3);
$auto->versnel(50);

echo "Auto: Er zitten {$auto->passagiers} mensen in de auto en de snelheid is {$auto->snelheid} km/u.\n";

$vrachtwagen = new Vrachtwagen();
$vrachtwagen->kleur = 'blauw';
$vrachtwagen->zitplaatsen = 2;
$vrachtwagen->laadvermogen = 10000;

$vrachtwagen->nieuwe_passagier(1);
$vrachtwagen->lading(5000);
$vrachtwagen->versnel(40);

echo "Vrachtwagen: Er zitten {$vrachtwagen->passagiers} mensen in de vrachtwagen, de lading is {$vrachtwagen->lading} kg, en de snelheid is {$vrachtwagen->snelheid} km/u.\n";

?>
