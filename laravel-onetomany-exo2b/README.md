******LARAVEL ONE TO MANY EXO 2******
Créer une table article et commentaire 
Article : [
    nom , 
    img ,
    description , 
    categorie , 
    nom auteur , 
    date de publication
]
Commentaire : [
    nom, 
    adresse mail , 
    message ,
    date du commentaire  
]

Fonctionalité :

    Add
    Edit
    Delete
    Dl
    Read

Créeer une relation one to many 

article hasMany commentaires

commentaires belongTo article