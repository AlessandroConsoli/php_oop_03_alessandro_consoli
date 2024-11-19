<?php

class Vertebrates{

    public function __construct(){
        $this->printVertebrate();
    }

    protected function printVertebrate(){
        echo "Sono un vertebrato \n";
    }

}


// SANGUE CALDO


class WarmBlooded extends Vertebrates{
    
    public function __construct(){

        parent::__construct();
        $this->printWarmBlooded();

    }

    protected function printWarmBlooded(){
        echo "Sono un animale a sangue caldo \n";
    }

}




class Mammals extends WarmBlooded{
    
    public function __construct(){
        parent::__construct();
        $this->printMammals();
    }

    protected function printMammals(){
        echo "Sono un mammifero \n";
    }
}


class Birds extends WarmBlooded{
    
    public function __construct(){
        parent::__construct();
        $this->printBirds();
    }

    protected function printBirds(){
        echo "Sono un volatile \n";
    }
}



// SANGUE FREDDO



class ColdBlooded extends Vertebrates{
    
    public function __construct(){

        parent:: __construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded(){
        echo "Sono un animale a sangue freddo \n";
    }

}


class Amphibian extends ColdBlooded{
    
    public function __construct(){
        parent::__construct();
        $this->printAmphibian();
    }

    protected function printAmphibian(){
        echo "Sono un Anfibio \n";
    }
}


class Reptiles extends ColdBlooded{
    
    public function __construct(){
        parent::__construct();
        $this->printReptiles();
    }

    protected function printReptiles(){
        echo "Sono un Rettile";
    }



}


class Fish extends ColdBlooded{

    public function __construct(){
        parent::__construct();
        $this->printFish();
    }

    protected function printFish(){
        echo "Splash \n";
    }

}


$fish = new Fish();




?>