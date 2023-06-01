<main>
    <aside>
        <img src="public/images/mockup/<?= $numBiere?>.png" alt= $numBiere>
    </aside>
    <article>
    <p class="descr"><?= $biere['descr'] ?></p>
        <p class="nom_entier"><?= $biere['nom'] ?></p>
        <p class="prix"><?= $biere['prix'] ?></p>
    </article>
    <div class="bouton">
                <a href="lien">
                <button type="bouton" class="acheter">ACHETER</button></a>
            </div>
</main>