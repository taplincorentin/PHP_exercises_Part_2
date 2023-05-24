<?php
    class Voiture {
        private string $_marque;
        private string $_modele;
        private int $_nbPortes;
        private int $_vitesseActuelle = 0;
        private bool $_etat = false;

        function __construct(string $marque, string $modele, int $nbPortes) {
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
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
        function affInfos(){
            echo "Nom et Modèle du véhicule : ". $this -> get_marque() . " ". $this -> get_modele(). "<br>Nombre de portes: ".$this->get_nbPortes(). "<br> ";
            if ($this -> get_etat()){ echo "Le vehicule est démarré <br>";}
                else{echo "Le véhicule est à l'arrêt <br>"; }
            echo "Sa vitesse actuelle est de ". $this -> get_vitesseActuelle(). " km/h<br>";
        }
        
        function demarrer(){
            if($this->_etat){
                echo "la voiture est déjà démarrée";
            }
            else{
                $this->_etat = true;
            }
        }

        function accelerer(int $vitesse){
            if($this->_etat){
                $this->_vitesseActuelle += $vitesse;
            }
            else {echo "la voiture n'est pas démarrée";}
            // $this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse;
        }
        
        
        function ralentir(int $vitesse){
            if($this->_etat){
                $this->_vitesseActuelle -= $vitesse;
                if($this->_vitesseActuelle < 0){
                    $this->_vitesseActuelle = 0;
                }
            }
            else{ echo "la voiture est à l'arrêt, elle ne peut pas démarrer";}
        }
        
        function stopper(){
            if($this->_etat){
                $this->_etat = false;
                $this->_vitesseActuelle = 0;
            }
            else{ echo "la voiture est déjà à l'arrêt";}
        }

        function affVitesse(){
            echo "<br> vitesse de la ".$this->get_marque()." : " . $this->get_vitesseActuelle(). "km/h";
        }
    }
    
    
?>