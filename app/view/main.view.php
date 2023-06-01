<!DOCTYPE html>
<html lang="fr">

<head>
    <title>main</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link href="css3.css" rel="stylesheet">
</head>

<body>
    <section>

    <h2 class="h2">L'UNIVERS OMNISICENTE</h2>
    <p class="p1">Rentrez dans notre univers remplit de mystéres et d'illusions ! <br>
        Venez tester nos potions bières surprenantes et diversifiés selon l'effet désiré. <br>
        Enfin... <br>
        Si vous en avez l'audace...</p>
        
    <h2 class="h2">ANIMATION "MONOCHROME MAGIC"</h2>
    <div class="black-background">
        <div class="Video">
          <video alt="animation de l'univers magique de Omnsiciente" controls>
            <source src="public/video/Version_Finale_Animation.mp4" type="video/mp4">
          </video>
        </div>
      </div>

    </section>
    

        <div class="white_rectangle"> 
            <h2 class="title3">NOS PRODUITS</h2>    
        </div>
        <section class="bloc1">

            <h2 class="titleN">NOUVEAUTÉ</h2>
            <div class="carré_biere_opacity"></div>
   
            <a href="<?= URL ?>produit.php?num=biere3" class="hover-area3"></a>
            <img alt="AMARE, Bière principal de Omnisciente, aux pouvoirs de l'amour" class="AMARE1" src="public/images/accueil/Amare.png"/>
            <p class="AMARE">Bière AMARE - 33cl</p>

            <div class="minicubeA scroll-fade">
                <h3 class="MA scroll-fade">AMARE</h3>
            </div>
            <p class="MAtext scroll-fade">AMARE, la boisson de <br> l'amour autant rempli de <br> passion que de sensations</p>

</section>


<section class="bloc2">
    <h2 class="title4">NOS GAMMES</h2>

<div class="minicube1">

    <div class="carousel-images">
        <div class="carousel-image">
            <a href="<?= URL ?>produit.php?num=biere7" class="hover-area"></a>
            <img alt="PROHIBERE, Bière aux pouvoirs de la magie noire" class="imgs" src="public/images/accueil/Prohibere.png">
            <p class="ps">Bière PROHIBERE - 33cl</p>
        </div>

        <div class="carousel-image">
            <a href="<?= URL ?>produit.php?num=biere4" class="hover-area"></a>
            <img alt="IGNIS, Bière aux pouvoirs de la magie blanche" class="imgs" src="public/images/accueil/Ignis.png">
            <p class="ps2">Bière IGNIS - 33cl</p>
        </div>
        <div class="carousel-image">
            <a href="<?= URL ?>produit.php?num=biere5" class="hover-area"></a>
            <img class="imgs" src="public/images/accueil/Ombral.png">
            <p class="ps3">Bière OMBRAL - 33cl</p>
        </div> 
        
    </div>
            <button id="prevBtn"><img alt="suivant" src="public/images/accueil/fleche2.png" class="bouton" id="d"></button>
            <button id="nextBtn"><img alt="précédent" src="public/images/accueil/fleche2.png" class="bouton" id="g"></button>
</div>

<div class="minicube2">

    <div class="carousel-images2">
        <div class="carousel-image2">
            <a href="<?= URL ?>produit.php?num=biere6" class="hover-area2"></a>
            <img class="imgs2" src="public/images/accueil/Nymphia.png">
            <p class="ps4">Bière NYMPHIA - 33cl</p>
        </div>
        <div class="carousel-image2">
            <a href="<?= URL ?>produit.php?num=biere2" class="hover-area2"></a>
            <img class="imgs2" src="public/images/accueil/Fortuna.png">
            <p class="ps5">Bière FORTUNA - 33cl</p>
        </div>
        <div class="carousel-image2">
            <a href="<?= URL ?>produit.php?num=biere1" class="hover-area2"></a>
            <img class="imgs2" src="public/images/accueil/Consciencia.png">
            <p class="ps6">Bière CONSCIENTIA - 33cl</p>
        </div>
    </div>
            <button id="prevBtn2"><img alt="suivant" src="public/images/accueil/fleche3.png" class="bouton2" id="d2"></button>
            <button id="nextBtn2"><img alt="précédent" src="public/images/accueil/fleche3.png" class="bouton2" id="g2"></button>
</div>


    <div class="minicube3 scroll-fade">
        <h3 class="MB scroll-fade">"Magie BLANCHE"</h3>
    </div>
    <p class="MBtext scroll-fade">Magie Blanche, vous voulez <br> propager le bien autour de <br> vous et illuminer ce <br> monde</p>

    <div class="minicube4 scroll-fade">
        <h3 class="MN scroll-fade">"Magie NOIRE"</h3>
    </div>
    <p class="MNtext scroll-fade">Magie Noire, vous êtes <br> fait pour le pouvoir, votre <br> ambition est sans limite.</p>


<div class="fin"></div>


<script src="public/javascript/javascript.js"></script>
