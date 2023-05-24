<?php
    class Voiture {
        protected string $_marque;      //protected car ces variables vont être réutilisées dans une classe enfant (héritage)
        protected string $_modele;

        //la fonction contruct

        function __construct(string $marque, string $modele) {
            $this->_marque = $marque;
            $this->_modele = $modele;
        }


        // les setters
        function set_marque($marque){
            $this->_marque =$marque;
        }

        function set_modele($modele){
            $this->_modele =$modele;
        }



        //les getters
        function get_marque():string {
            return $this->_marque;     
        }

        function get_modele():string {
            return $this->_modele; 
        }
        



        //fct qui rend les infos de la classe
        function getInfos(){
            return $this -> get_marque() . " ". $this -> get_modele();
        }
    }




        //nouvelle classe enfant de la classe Voiture, on a juste une nouvelle données qui est l'autonomie (utiliser "extends")
    class VoitureElec extends Voiture {
        private int $_autonomie;    //juste besoin de rajouter la nouvelle donnée



        //contruct
        function __construct(string $marque, string $modele, int $autonomie){
            parent::__construct($marque,$modele); //parent:: nous fait réutiliser les lignes de la fct construct de la classe parent 
            $this->_autonomie = $autonomie;

        }

        
        //setter(pas )
        function set_autonomie($autonomie){
            $this->_autonomie =$autonomie;
        }


        //getter
        function get_autonomie():int {
            return $this->_autonomie;  
        }




        function getInfos(){
            return parent::getInfos()." ".$this->_autonomie;
        }
    }



    $v1 = new Voiture("Peugeot","408");
    $ve1 = new VoitureElec("BMW","I3",100);

    echo $v1-> getInfos(). "<br>";
    echo $ve1-> getInfos(). "<br>";

?> 
