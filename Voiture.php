<?php
    class Voiture {
        private string $_marque;
        private string $_modele;
        private int $_nbPortes;
        private int $_vitesseActuelle;
        private bool $_etat;

        function __construct(string $marque, string $modele, int $nbPortes, int $vitesseActuelle) {
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = $vitesseActuelle;
        }


        // FONCTIONS "SET" //

        function set_marque($marque){
            $this->_marque =$marque;
        }

        function set_modele($modele){
            $this->_modele =$modele;
        }

        function set_nbPortes($nbPortes){
            $this->_nbPortes =$nbPortes;
        }

        function set_vitesseActuelle($vitesseActuelle){
            $this->_vitesseActuelle =$vitesseActuelle;
        }

        function set_etat($etat){
            $this->_etat =$etat;
        }

        // FONCTIONS "GET" //

        function get_marque():string {
            return $this->_marque;     
        }

        function get_modele():string {
            return $this->_modele;     
        }

        function get_nbPortes():int {
            return $this->_nbPortes;     
        }

        function get_vitesseActuelle():int {
            return $this->_vitesseActuelle;     
        }

        function get_etat():bool {
            return $this->_etat;     
        }

        // METHODES //
        function affInfos(){}
        
        function demarrer(){
            $this->_etat = true;
        }

        function accelerer(int $vitesse){
            $this->_vitesseActuelle += $vitesse;
            // $this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse;
        }
        
        function ralentir(int $vitesse){
            $this->_vitesseActuelle -= $vitesse;
            if(_vitesseActuelle < 0){
                $this->_vitesseActuelle = 0;
            }
        }
        
        function stopper(){
            $this->_etat = false;
        }
    }
    

?>