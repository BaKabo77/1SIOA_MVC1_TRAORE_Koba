
<h1><?= $unResto['nomR']; ?>

    <?php if ($aimer != false) { ?>
        <a href="./?action=aimer&idR=<?= $unResto['idR']; ?>" ><img class="aimer" src="images/aime.png" alt="j'aime ce restaurant"></a>
    <?php } else { ?>
        <a href="./?action=aimer&idR=<?= $unResto['idR']; ?>" ><img class="aimer" src="images/aimepas.png" alt="je n'aime pas encore ce restaurant"></a>
    <?php } ?>

</h1>

<span id="note">
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <a class="aimer" href="./?action=noter&note=<?= $i ?>&idR=<?= $unResto['idR']; ?>" >
            <?php if ($i <= $noteMoy) { ?>
                <img class="note" src="images/like.png" alt="">
            <?php } else {
                ?>
                <img class="note" src="images/neutre.png" alt="line neutre">
            <?php } ?>
        </a>
    <?php } ?>
</span>
<section>
    Cuisine <br />
    <ul id="tagFood">		
        <?php for ($j = 0; $j < count($lesTypesCuisine); $j++) { ?>
            <li class="tag"><span class="tag">#</span><?= $lesTypesCuisine[$j]["libelleTC"] ?></li>
        <?php } ?>
    </ul>

</section>
<p id="principal">
    <?php if (count($lesPhotos) > 0) { ?>
        <img src="photos/<?= $lesPhotos[0]["cheminP"] ?>" alt="photo du restaurant" />
    <?php } ?>
    <br />
    <?= $unResto['descR']; ?>
</p>
<h2 id="adresse">
    Adresse
</h2>
<p>
    <?= $unResto['numAdrR']; ?>
    <?= $unResto['voieAdrR']; ?><br />
    <?= $unResto['cpR']; ?>
    <?= $unResto['villeR']; ?>

</p>

<h2 id="photos">
    Photos
</h2>
<ul id="galerie">
    <?php 
    for ($i = 0; $i < count($lesPhotos); $i++) { ?>
        <li> <img class="galerie" src="photos/<?= $lesPhotos[$i]["cheminP"] ?>" alt="" /></li>
    <?php } ?>

</ul>

<h2 id="horaires">
    Horaires
</h2> 
<?= $unResto['horairesR']; ?>


<h2 id="crit">Critiques</h2>

<ul id="critiques">
    <?php for ($i = 0; $i < count($critiques); $i++) { ?>
        <li>
            <span>
                <?= $critiques[$i]["mailU"] ?> 
                <?php if ($critiques[$i]["mailU"] == $mailU) { ?>
                    <a href='./?action=supprimerCritique&idR=<?= $unResto['idR']; ?>'>Supprimer</a>
                <?php } ?>
            </span>
            <div>
                <span>
                    <?php
                    if ($critiques[$i]["note"]) {
                        echo $critiques[$i]["note"] . "/5";
                    }
                    ?>
                </span>
                <span><?= $critiques[$i]["commentaire"] ?> </span>
            </div>

        </li>
    <?php } var_dump($critiques); ?>

</ul>

