













const images = ["image1.png", "image2.png", "image3.png", "image5.png","image7.png", "image8.png", "image9.png", "image10.png","image11.png","image12.png",];

let indexImageActuelle = 0;

const flecheDroite = document.getElementById("fleche-droite");
const flecheGauche = document.getElementById("fleche-gauche");
const image = document.getElementById("image");

flecheDroite.addEventListener("click", evenementFlecheDroite);
flecheGauche.addEventListener("click", evenementFlecheGauche);

function evenementFlecheDroite() {
    //on passe à l'image suivante
    indexImageActuelle++;

    //si on a dépassé le nombre d'image du tableau, on revient à la première
    if (indexImageActuelle > images.length - 1) {
        indexImageActuelle = 0;
    }

    //on change la propriété src de l'image.
    //Ex : "assets/images/" + "droit2.jpg" = "assets/images/droit2.jpg"
    image.src = "img/" + images[indexImageActuelle];
}

function evenementFlecheGauche() {
    //on passe à l'image suivante
    indexImageActuelle--;

    //si on a dépassé le nombre d'image du tableau, on revient à la première
    if (indexImageActuelle < 0) {
        indexImageActuelle = images.length - 1;
    }


    //on change la propriété src de l'image.
    //Ex : "assets/images/" + "droit2.jpg" = "assets/images/droit2.jpg"
    image.src = "img/" + images[indexImageActuelle];
}
