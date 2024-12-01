<?php

include ("Auteur.php");
include ("Livre.php");

$auteur1 = new Auteur ("KING", "Stephen", "01/01/2004");
$auteur2 = new Auteur ("SMAIL", "Stephane", "01/01/2004");

$livre1 = new Livre ("Ca", "1986", "1138", "20", $auteur1);
$livre2 = new Livre ("Simetierre", "1983", "374", "15", $auteur1);
$livre3 = new Livre ("Le Fléau", "1978", "823", "14", $auteur1);
$livre4 = new Livre ("Shining", "1977", "447", "16", $auteur1);
$livre5 = new Livre ("Shine", "1997", "947", "26", $auteur2);
$livre6 = new Livre ("Sy", "1957", "247", "12", $auteur2);
$livre7 = new Livre ("rain", "1937", "747", "14", $auteur2);
$livre8 = new Livre ("cap", "1952", "442", "11", $auteur2);

echo "Livres de ".$auteur1->getPrenom()." ".$auteur1->getNom()."<br><br>";
$auteur1 -> afficherBibliographie();





/* classe : C'est un ensemble cohérent de code qui contient généralement à la fois des variables et des fonctions et qui va nous servir de plan pour créer des objets. 
Le but d’une classe va donc être de créer des objets que nous allons ensuite pouvoir manipuler. */


/* objet : Un objet est une entité qui va pouvoir contenir un ensemble de fonctions et de variables. Des lors qu'on instancie une classe c'est à a dire qu'on utilise le mot clef "new", 
un objet est donc créé. Nous allons devoir capturer cet objet pour l’utiliser. Pour cela, nous allons généralement utiliser une variable qui deviendra alors une "variable objet"ou plus simplement un "objet".*/


/* principe d'encapsulation : L' encapsulation est une pratique fondamentale qui consiste à regrouper les données et les méthodes qui les manipulent au sein d'une même entité: l'objet.
Cela permet de protéger less données et de limiter leur accés afin de garantir l'intégrité et la sécurité du programme. 
L’encapsulation vise à cacher les détails d’implémentation à l’extérieur de l’objet et à fournir une interface claire et cohérente pour interagir avec lui. En regroupant les propriétés et 
les méthodes qui les manipulent au sein de l’objet, l’encapsulation permet de contrôler comment ces données sont utilisées et modifiées, ce qui facilite la maintenance et l’évolution du code.
l’encapsulation est souvent mise en œuvre en définissant la visibilité des propriétés et des méthodes à l’intérieur de la classe. Les trois niveaux de visibilité les plus couramment utilisés sont :
- Public - Protected - Private */


/* chainage en php : Permet d’exécuter plusieurs méthodes d’affilée de façon simple et plus rapide, en les écrivant à la suite les unes des autres, « en chaine ».
Pour pouvoir utiliser le chainage de méthodes, il va falloir que nos méthodes chainées retournent notre objet afin de pouvoir exécuter la méthode suivante. Dans le cas contraire, une erreur sera renvoyée.*/












