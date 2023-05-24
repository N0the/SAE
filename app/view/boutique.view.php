<main>

<?php var_dump(count($toutes_bieres)) ?>
<?php foreach ($toutes_bieres as $biere) : ?>
<div class="biere">
    <figure>
    <a href="">
        <img src="public/image/mockup/biere/<?=$biere['nom'] ?>.png" alt="<?= $biere['nom'] ?>">
    </a>

    </figure>
</div>
<?php endforeach ?>



</main>