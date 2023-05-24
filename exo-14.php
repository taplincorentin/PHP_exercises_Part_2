<?php
    class Voiture {
        protected string $_marque;
        protected string $_modele;

        function __construct(string $marque, string $modele) {
            $this->_marque = $marque;
            $this->_modele = $modele;
        }

        function set_marque($marque){
            $this->_marque =$marque;
        }

        function set_modele($modele){
            $this->_modele =$modele;
        }

        function get_marque():string {
            return $this->_marque;     
        }

        function get_modele():string {
            return $this->_modele; 
        }

        function getInfos(){
            return $this -> get_marque() . " ". $this -> get_modele();
        }
    }

    class VoitureElec extends Voiture {
        private int $_autonomie;

        function __construct(string $marque, string $modele, int $autonomie){
            parent::__construct($marque,$modele);
            $this->_autonomie = $autonomie;

        }
        function set_autonomie($autonomie){
            $this->_autonomie =$autonomie;
        }

        function get_autonomie():int {
            return $this->_autonomie;  
        }

        function getInfos(){
            return parent::getInfos(). $this->_autonomie;
        }
    }

    $v1 = new Voiture("Peugeot","408");
    $ve1 = new VoitureElec("BMW","I3",100);

    echo $v1-> getInfos(). "<br>";
    echo $ve1-> getInfos(). "<br>";

?> 
