<?php

abstract class Vertebrates{
    protected $bloodType;
    protected $habitat;

    public function __constructor($sangueCaldoFreddo, $doveVive){
        $this->bloodType = $sangueCaldoFreddo;
        $this->habitat = $doveVive;
        echo "Sono un vertebrato";
    }
}


// SANGUE CALDO


class WarmBlooded extends Vertebrates{
    
    public function __constructor($sangueCaldoFreddo, $doveVive){
        parent::__constructor($sangueCaldoFreddo, $doveVive);
        if ($sangueCaldoFreddo == "sangue caldo"){
            $tipoDiSangue = "Sono un animale a sangue caldo";
            echo "Sono un animale a sangue caldo";
            return $doveVive;
        }
    }
}




class Mammals extends WarmBlooded{
    public function __constructor($sangueCaldoFreddo, $doveVive){
        parent::__constructor($sangueCaldoFreddo, $doveVive);
        if ($tipoDiSangue = "Sono un animale a sangue caldo" && $doveVive == "terraferma") {
            $tipoDiAnimale = "sono un mammifero";
            echo "sono un mammifero";
        }
    }
}


class Birds extends WarmBlooded{
    public function __constructor($sangueCaldoFreddo, $doveVive){
        parent::__constructor($sangueCaldoFreddo, $doveVive);
        if ($tipoDiSangue = "Sono un animale a sangue caldo" && $doveVive == "aria e terraferma") {
            $tipoDiAnimale = "sono un volatile";
            echo "sono un volatile";
        }
    }
}



// SANGUE FREDDO



class ColdBlooded extends Vertebrates{
    public function __constructor($sangueCaldoFreddo, $doveVive){
        parent::__constructor($sangueCaldoFreddo, $doveVive);
        if ($sangueCaldoFreddo == "sangue freddo") {
            $tipoDiSangue = "Sono un animale a sangue freddo";
            return $doveVive;
        }
    }
}


class Amphibian extends ColdBlooded{
    public function __constructor($sangueCaldoFreddo, $doveVive){
        parent::__constructor($sangueCaldoFreddo, $doveVive);
        if ($tipoDiSangue = "Sono un animale a sangue freddo" && $doveVive == "acqua e terraferma") {
            $tipoDiAnimale = "sono un anfibio";
            echo "sono un anfibio";
        }
    }
}


class Reptiles extends ColdBlooded{
    public function __constructor($sangueCaldoFreddo, $doveVive){
        parent::__constructor($sangueCaldoFreddo, $doveVive);
        if ($tipoDiSangue = "Sono un animale a sangue freddo" && $doveVive == "terraferma") {
            $tipoDiAnimale = "sono un rettile";
            echo "sono un rettile";
        }
    }
}


class Fish extends ColdBlooded{
    public function __constructor($sangueCaldoFreddo, $doveVive){
        parent::__constructor($sangueCaldoFreddo, $doveVive);
        if ($tipoDiSangue = "Sono un animale a sangue freddo" && $doveVive == "acqua") {
            $tipoDiAnimale = "Splash";
            echo "Splash";
        }
    }
}






?>