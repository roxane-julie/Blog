<?php 


//création de la class Category, qui va nous permmettre de stocker les propriétés (les informations) et leurs fonctions
class Category {
// 2 propriètés id et name, déclarés en privé ce qui signifie qu'on ne peut pas les modifier directement à l'extérieur de la classe
    private $id_category; // sert a stocker de maniére unique un identifiant  pour chaque category

    private $category_name;

    // /!\ Les 3 fonctions dessous vont nous permettrent de modifier et d'acceder aux propriétés

    public function getIdCategory(){ // renvoie la valeur de la propriéte id_category
        return $this->id_category;
    }

    public function getCategoryName(){ // renvoie la valeur de la propriété category_name
        return $this->category_name;
    }

    public function setCategoryName($name){ // permet de définir la valeur de la propriété
        $this->category_name = $name;
    }

} // les getters et setters sont utilisés pour "sécurisé" les données de la classe en ne permettant pas d'accéder ou de modifier les propriété privées directement.



/*Les propriétés "id_category" et "category_name" servent à stocker des informations relatives à une catégorie spécifique.

La propriété "id_category" est utilisée pour stocker un identifiant unique pour chaque catégorie, cela pourrait être utilisé pour identifier de manière unique une catégorie dans une base de données.

La propriété "category_name" est utilisée pour stocker le nom de la catégorie. Ce nom pourrait être utilisé pour afficher le nom de la catégorie dans une interface utilisateur ou pour stocker le nom de la catégorie dans une base de données.

Les méthodes getter et setter permettent de récupérer ou de mettre à jour ces propriétés de manière sécurisée.*/










