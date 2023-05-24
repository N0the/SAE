<main>

<?php foreach ($toutes_bieres as $biere) : ?>
<div class="biere">
    <figure>
    <a href="">
        <img src="public/image/mockup/biere/<?=$biere['id_biere'] ?>.png" alt="<?= $biere['id_biere'] ?>">
    
    </figure>
    <div class="description">
        <p class="nom_entier"><?=$biere['nom_affiche']?></p></a>
        <p class="description_biere"><?=$biere['description']?></p>
        <p class="prix"><?=$biere['prix']?>€</p>
    </div>
</div>
<?php endforeach ?>



</main>