<?php

class Livre {

    private string $_titre;
    private int $_anneeDeParution;
    private int $_nbPages;
    private int $_prix;

    private $_auteur;

    public function __construct($titre, $anneeDeParution, $nbPages, $prix, Auteur $auteur){

        // la propriété _titre de l'objet en cours prendra la valeur de $titre que j'ai injecté en argument
        $this -> _titre = $titre;
        $this -> _nbPages = $nbPages;
        $this -> _anneeDeParution = $anneeDeParution;
        $this -> _prix = $prix;
        $this -> _auteur = $auteur;

        // comme j'ai accès à la classe auteur grave à la ligne d'en haut, je peux avoir accès au methodes publiques de la classe auteur
        $auteur -> ajouterLivre($this);
    }   

    public function __toString(){

        return $this -> _titre;

    }

    public function getTitre(){
        
        return $this -> _titre;

    }

    public function setTitre(){

        $this -> _titre;

    }

    public function getNbPages(){

        return $this -> _nbPages;

    }

    public function setNbPages(){

        $this -> _nbPages;

    }

    public function getAnneeDeParution(){

        return $this -> _anneeDeParution;

    }

    public function setAnneeDeParution(){

        $this -> _anneeDeParution;
        
    }

    public function getPrix(){

        return $this -> _prix;

    }

    public function setPrix(){

        $this -> _prix;
        
    }

    public function getAuteur(){

        return $this -> _auteur;

    }

    public function setAuteur(){

        $this -> _auteur;
        
    }
}