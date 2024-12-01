<?php

class Auteur {

    private string $_nom;
    private string $_prenom;
    private Datetime $_dateNaissance;
    private array $_livres;
    

    public function __construct($nom, $prenom, string $dateNaissance){

        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _dateNaissance = new DateTime($dateNaissance);

        // on va dire que le tableau de livres à la construction de l'objet auteur est vide
        $this ->_livres = [];

    }

    public function getDateNaissance(){

        $this -> _dateNaissance;
    }

    public function setDateNaissance(){

        $this -> _dateNaissance;

    }

    public function __toString(){

        return $this -> _nom;

    }

    public function getNom(){
        
        return $this -> _nom;

    }

    public function setNom(){

        $this -> _name;

    }

    public function getPrenom(){

        return $this -> _prenom;

    }

    public function setPrenom(){

        $this -> _prenom;

    }

// function qui permet d'ajouter un objet livre au tableau de livres de l'auteur
    public function ajouterLivre(Livre $livre){

        // on va array push pour rajouter l'element dans le tableau
        $this -> _livres[] = $livre;

        // array_push($this->_livres, $livre);

    }

    public function afficherBibliographie(){

        foreach($this -> _livres as $livre){
    
          echo $livre->getTitre()." "."(".$livre->getAnneeDeParution().")"." : ".$livre->getNbPages()." pages / ".$livre->getPrix()." €<br>";

        }
    
    }
    
}