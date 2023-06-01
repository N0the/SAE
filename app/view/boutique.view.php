<main>

    <?php foreach ($toutes_bieres as $biere) : ?>
        <div class="biere">
            <a href="<?= URL ?>produit.php?num=<?= $biere['id_biere'] ?>">
                <figure>

                    <img src="public/images/mockup/<?= $biere['id_biere'] ?>.png" alt="<?= $biere['id_biere'] ?>">


                    <div class="description">
                        <p class="nom_entier"><?= $biere['nom_affiche'] ?></p>
                        <p class="description_biere"><?= $biere['description_biere'] ?></p>
                        <p class="prix"><?= $biere['prix'] ?>€</p>
                    </div>
                </figure>
            </a>
        </div>
    <?php endforeach ?>



</main>